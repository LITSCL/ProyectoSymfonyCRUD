<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EditarTareaType extends AbstractType
{
    public function buildForm($builder, $options)
    {
        $builder->setMethod("POST")
            ->add("id", HiddenType::class)
            ->add("titulo", TextType::class, ["label" => "Titulo"])
            ->add("contenido", TextAreaType::class, ["label" => "Contenido"])
            ->add("prioridad", ChoiceType::class, ["label" => "Prioridad", "choices" => ["Alta" => "Alta", "Media" => "Media", "Baja" => "Baja"]]) //El parametro choices, recibe un array con las opciones, donde cada indice corresponde al texto que se muestra  y el valor de cada indice del array corresponde al valor (Valor del atributo "value").
            ->add("horas", TextType::class, ["label" => "Horas"])
            ->add("boton", SubmitType::class, ["label" => "Editar"]);
    }
}