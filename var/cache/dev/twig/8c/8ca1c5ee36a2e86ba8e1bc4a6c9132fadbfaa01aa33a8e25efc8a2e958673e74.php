<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* includes/listado_tareas.html.twig */
class __TwigTemplate_53e02fb0182ee929b13bc9cb72b722855e7a415a22ba8ad2375bd4ddb7e74169 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/listado_tareas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/listado_tareas.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["tareas"]) || array_key_exists("tareas", $context) ? $context["tareas"] : (function () { throw new RuntimeError('Variable "tareas" does not exist.', 1, $this->source); })())) >= 1)) {
            // line 2
            echo "\t<table>
\t\t<tr>
\t\t\t<th>Tarea</th>
\t\t\t<th>Prioridad</th>
\t\t\t<th>Horas</th>
\t\t\t<th>Acciones</th>
\t\t</tr>
\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tareas"]) || array_key_exists("tareas", $context) ? $context["tareas"] : (function () { throw new RuntimeError('Variable "tareas" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
                // line 10
                echo "\t\t<tr>
\t\t\t<td>";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "titulo", [], "any", false, false, false, 11), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "prioridad", [], "any", false, false, false, 12), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "horas", [], "any", false, false, false, 13), "html", null, true);
                echo "</td>
\t\t\t<td class=\"botones\">
\t\t\t\t<div>
\t\t\t\t\t<a class=\"boton-verde\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarea_vista_detalle", ["id" => twig_get_attribute($this->env, $this->source, $context["tarea"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\">Ver</a> <!-- EL metodo \"path\", puede recibir un segundo parametro, el cual es un JSON, donde cada clave y valor representan un parametro GET. -->
\t\t\t\t";
                // line 17
                if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tarea"], "usuario", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)))) {
                    // line 18
                    echo "\t\t\t\t\t<a class=\"boton-amarillo\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarea_vista_editar", ["id" => twig_get_attribute($this->env, $this->source, $context["tarea"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                    echo "\">Editar</a>
\t\t\t\t\t<a class=\"boton-rojo\" href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarea_accion_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["tarea"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                    echo "\">Borrar</a>
\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t</table>
";
        } else {
            // line 27
            echo "\t<strong>No hay tareas disponibles en este momento</strong>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/listado_tareas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  100 => 25,  91 => 21,  86 => 19,  81 => 18,  79 => 17,  75 => 16,  69 => 13,  65 => 12,  61 => 11,  58 => 10,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if tareas|length >= 1 %}
\t<table>
\t\t<tr>
\t\t\t<th>Tarea</th>
\t\t\t<th>Prioridad</th>
\t\t\t<th>Horas</th>
\t\t\t<th>Acciones</th>
\t\t</tr>
\t{% for tarea in tareas %}
\t\t<tr>
\t\t\t<td>{{ tarea.titulo }}</td>
\t\t\t<td>{{ tarea.prioridad }}</td>
\t\t\t<td>{{ tarea.horas }}</td>
\t\t\t<td class=\"botones\">
\t\t\t\t<div>
\t\t\t\t\t<a class=\"boton-verde\" href=\"{{ path('tarea_vista_detalle', {'id' : tarea.id}) }}\">Ver</a> <!-- EL metodo \"path\", puede recibir un segundo parametro, el cual es un JSON, donde cada clave y valor representan un parametro GET. -->
\t\t\t\t{% if app.user != null and app.user.id == tarea.usuario.id %}
\t\t\t\t\t<a class=\"boton-amarillo\" href=\"{{ path('tarea_vista_editar', {'id' : tarea.id}) }}\">Editar</a>
\t\t\t\t\t<a class=\"boton-rojo\" href=\"{{ path('tarea_accion_delete', {'id' : tarea.id}) }}\">Borrar</a>
\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t{% endfor %}
\t</table>
{% else %}
\t<strong>No hay tareas disponibles en este momento</strong>
{% endif %}", "includes/listado_tareas.html.twig", "C:\\xampp\\htdocs\\ProyectoSymfony\\templates\\includes\\listado_tareas.html.twig");
    }
}
