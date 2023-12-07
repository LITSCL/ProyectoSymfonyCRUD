<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface; //Necesario para hashear la contraseña.
use Symfony\Component\Validator\Validator\ValidatorInterface; //Necesario para validar los datos que llegan desde los formularios.
use Symfony\Component\HttpFoundation\Session\Session; //Necesario para crear sesiones.
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils; //Necesario para autenticar usuarios.

use App\Entity\Usuario;
use App\Form\RegistroType;

class UsuarioController extends AbstractController
{
    //Métodos Vista(Retornan vistas).
    public function registro(Request $request): Response
    {
        //1. Crear el formulario.
        $usuario = new Usuario();
        $formulario = $this->createForm(RegistroType::class, $usuario, array("action" => $this->generateUrl("usuario_accion_save")));

        //2. Renderizar la vista.
        return $this->render("usuario/registro.html.twig", ["formulario" => $formulario->createView()
        ]);
    }
    
    public function iniciarSesion() 
	{
        return $this->render("usuario/iniciar_sesion.html.twig", array("error" => "", "ultimoCorreoUsuario" => ""));
    }
    
    //Métodos Acción (Procesan datos desde formularios).
    public function save(Request $request, UserPasswordHasherInterface $encoder, ValidatorInterface $validador)
    {
        //1. Recibir el formulario y crear un instancia de la entidad que representa.
        $formulario = $request->get("registro"); //NOTA: Los formularios siempre tienen el nombre de su Type (Ejemplo: RegistroType = registro).
        $usuario = new Usuario();

        //2. Setear la instancia con los datos que llegan desde el formulario.
        $usuario->setRol("Usuario");
        $usuario->setNombre($formulario["nombre"]);
        $usuario->setApellido($formulario["apellido"]);
        $usuario->setCorreo($formulario["correo"]);
        
        $claveCifrada = $encoder->hashPassword($usuario, $formulario["clave"]); //El método "hashPassword" cifra un String perteneciente a una Entidad, el primer parámetro es la entidad y el segundo parámetro es el atributo de la entidad a cifrar.
        $usuario->setClave($claveCifrada);
        
        $usuario->setCreatedAt(new \Datetime("now"));
        
        //3. Verificar si los datos enviados son validos (Se verifica aplicando los Asserts).
        $errores = $validador->validate($usuario);
        if (count($errores) == 0) {
            //4. Almacenar el usuario en la base de datos.
            $entityManager = $this->getDoctrine()->getManager();
            
            $entityManager->persist($usuario);
            
            $entityManager->flush();
            
            //5. Redireccionar a una vista.
            return $this->redirectToRoute("usuario_vista_registro");
        }
        else {
            $session = new Session();
            $session->getFlashBag()->add("mensaje", "Error al registrarse"); //Generando una sesión flash.
            
            return $this->redirectToRoute("usuario_vista_registro");
        }
    }
    
    public function autenticarSesion(AuthenticationUtils $autenticador) 
	{   
        return $this->render("tarea/mis_tareas.html.twig");
    }
    
    public function errorSesion(AuthenticationUtils $autenticador)
    {
        $error = $autenticador->getLastAuthenticationError();
        $ultimoCorreoUsuario = $autenticador->getLastUsername();
        
        return $this->render("usuario/iniciar_sesion.html.twig", array("error" => $error, "ultimoCorreoUsuario" => $ultimoCorreoUsuario));
    }
    
    //Métodos Archivo (Retornan archivos).
    
}

