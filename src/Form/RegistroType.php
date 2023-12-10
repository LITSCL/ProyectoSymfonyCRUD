<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegistroType extends AbstractType
{
    public function buildForm($builder, $options)
    {
        $builder->setMethod("POST")
            ->add("nombre", TextType::class, ["label" => "Nombre"])
            ->add("apellido", TextType::class, ["label" => "Apellido"])
            ->add("correo", EmailType::class, ["label" => "Correo"])
            ->add("clave", PasswordType::class, ["label" => "Clave"])
            ->add("boton", SubmitType::class, ["label" => "Registrarse"]);
    }
}