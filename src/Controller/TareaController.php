<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface; //Necesario para validar los datos que llegand esde los formularios.
use Symfony\Component\HttpFoundation\Session\Session; //Necesario para crear sesiones.
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface; //Necesario para poder obtener el usuario que ha iniciado sesión (También sirve para saber si existe la sesión de usuario).

use App\Entity\Tarea;
use App\Form\CrearTareaType;
use App\Form\EditarTareaType;

class TareaController extends AbstractController
{
    //Métodos Vista(Retornan vistas).
    public function tareas(): Response
    { 
        $repositorioTarea = $this->getDoctrine()->getRepository(Tarea::class);
        
        $tareas = $repositorioTarea->findBy([], ["id" => "desc"]);
        
        return $this->render("tarea/tareas.html.twig", ["tareas" => $tareas]);
    }
    
    public function crear()
    {
        //1. Crear el formulario.
        $tarea = new Tarea();
        $formulario = $this->createForm(CrearTareaType::class, $tarea, array("action" => $this->generateUrl("tarea_accion_save"))); //NOTA: El formulario se llena automaticamente con los datos del objeto utilizado.
        
        //2. Renderizar la vista.
        return $this->render("tarea/crear.html.twig", ["formulario" => $formulario->createView()]);
    }
    
    public function detalle(Tarea $tarea)
    {
        if (!$tarea) {
            $this->redirectToRoute("tarea_vista_tareas");
        }
        
        return $this->render("tarea/detalle.html.twig", ["tarea" => $tarea]);
    }
    
    public function misTareas(UserInterface $usuario)
    {
        $usuario = $this->getUser(); //Obteniendo el usuario conectado.
        
        $tareas = $usuario->getAllTarea();
        
        return $this->render("tarea/mis_tareas.html.twig", ["tareas" => $tareas]);
    }
    
    public function editar(UserInterface $usuario, Tarea $tarea) //Al pasar pro parámetro un objeto Entidad, el ORM busca el objeto suponiendo que el parametro que llega es la clave primaria.
    {
        $usuario = $this->getUser(); //Obteniendo el usuario conectado.
        
        if ($usuario && $usuario->getId() == $tarea->getUsuario()->getId()) { //Verificando que la tarea le pertenezca al usuario.
            //1. Crear el formulario.
            $formulario = $this->createForm(EditarTareaType::class, $tarea, array("action" => $this->generateUrl("tarea_accion_update"))); //NOTA: El formulario se rellena con los datos del objeto entregado.
            
            //2. Renderizar la vista.
            return $this->render("tarea/editar.html.twig", ["formulario" => $formulario->createView()]);
        }
        else {
            return $this->redirectToRoute("tarea_vista_tareas"); //Retornando si la tarea no le pertenecía al usuario.
        }
    }
    
    //Métodos Acción (Procesan datos desde formularios).
    public function save(Request $request, UserInterface $usuario, ValidatorInterface $validador)
    {
        //1. Recibir el formulario y crear un instancia de la entidad que representa.
        $formulario = $request->get("crear_tarea"); //NOTA: Los formularios siempre tienen el nombre de su Type (Ejemplo: CrearTareaType = crear_tarea).
        $tarea = new Tarea();
        
        $usuario = $this->getUser(); //Obteniendo el usuario conectado.
        
        //2. Setear la instancia con los datos que llegan desde el formulario.
        $tarea->setTitulo($formulario["titulo"]);
        $tarea->setContenido($formulario["contenido"]);
        $tarea->setPrioridad($formulario["prioridad"]);
        $tarea->setHoras($formulario["horas"]);
        $tarea->setUsuario($usuario);
        $tarea->setCreatedAt(new \Datetime("now"));
        
        //3. Verificar si los datos enviados son validos (Se verifica aplicando los Asserts).
        $errores = $validador->validate($tarea);
        if (count($errores) == 0) {
            //4. Almacenar la tarea en la base de datos.
            $entityManager = $this->getDoctrine()->getManager();
            
            $entityManager->persist($tarea);
            
            $entityManager->flush();
            
            //5. Redireccionar a una vista.
            return $this->redirect($this->generateUrl("tarea_vista_detalle", ["id" => $tarea->getId()]));
        }
        else {
            $session = new Session();
            $session->getFlashBag()->add("mensaje", "Error al crear la tarea"); //Generando una sesión flash.
            
            return $this->redirectToRoute("tarea_vista_crear");
        }
    }
    
    public function update(Request $request, UserInterface $usuario, ValidatorInterface $validador)
    {
        //1. Recibir el formulario y crear un instancia de la entidad que representa.
        $formulario = $request->get("editar_tarea"); //NOTA: Los formularios siempre tienen el nombre de su Type (Ejemplo: EditarTareaType = editar_tarea).
        $tarea = new Tarea();
        
        $usuario = $this->getUser(); //Obteniendo el usuario conectado.
        
        //2. Buscar la tarea.
        $repositorioTarea = $this->getDoctrine()->getRepository(Tarea::class);
        $tarea = $repositorioTarea->find($formulario["id"]); //El método "find" permite obtener un registro en base a su clave primaria.
        
        //3. Verificar si la tarea le pertenece al usuario.
        if ($usuario && $usuario->getId() == $tarea->getUsuario()->getId()) {
            //4. Setear la instancia con los datos que llegan desde el formulario.
            $tarea->setTitulo($formulario["titulo"]);
            $tarea->setContenido($formulario["contenido"]);
            $tarea->setPrioridad($formulario["prioridad"]);
            $tarea->setHoras($formulario["horas"]);
            
            //5. Verificar si los datos enviados son validos (Se verifica aplicando los Asserts).
            $errores = $validador->validate($tarea);
            if (count($errores) == 0) {
                //6. Almacenar la tarea en la base de datos.
                $entityManager = $this->getDoctrine()->getManager();
                
                $entityManager->persist($tarea);
                
                $entityManager->flush();
                
                //7. Redireccionar a una vista.
                return $this->redirect($this->generateUrl("tarea_vista_detalle", ["id" => $tarea->getId()]));
            }
            else {
                $session = new Session();
                $session->getFlashBag()->add("mensaje", "Error al editar la tarea"); //Generando una sesión flash.
                
                return $this->redirectToRoute("tarea_vista_editar");
            }
        }
        
    }
    
    public function delete(Tarea $tarea, UserInterface $usuario)
    {
        $usuario = $this->getUser(); //Obteniendo el usuario conectado.
        
        if (!$tarea) { //Verificando que la tarea exista en la BD.
            return $this->redirectToRoute("tarea_vista_tareas");
        }
        
        if ($usuario && $usuario->getId() != $tarea->getUsuario()->getId()) { //Verificando que la tarea le pertenezca al usuario.
            return $this->redirectToRoute("tarea_vista_tareas");
        }
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($tarea);
        $entityManager->flush();
        
        return $this->redirectToRoute("tarea_vista_tareas");
    }
    
    //Métodos Archivo (Retornan archivos).
}
