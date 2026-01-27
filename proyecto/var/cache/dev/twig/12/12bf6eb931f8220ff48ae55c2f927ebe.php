<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* correo/correo.html.twig */
class __TwigTemplate_1efa60f14d2d5b99535a9d7ee5f45da5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "correo/correo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "correo/correo.html.twig"));

        // line 3
        yield "
<h1>¡Gracias por su compra ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "nombre", [], "any", false, false, false, 4), "html", null, true);
        yield "!</h1>
<h2>Identificador de su pedido: #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pedido_id"]) || array_key_exists("pedido_id", $context) ? $context["pedido_id"] : (function () { throw new RuntimeError('Variable "pedido_id" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "</h2>

<h2>Resumen de su compra: </h2>

<table>
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio y unidades</th>
        <th>Precio total</th>
    </tr>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["codigo"] => $context["producto"]) {
            // line 18
            yield "     <tr>
      <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["codigo"], "html", null, true);
            yield "</td>
      <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombreCorto", [], "method", false, false, false, 20), "html", null, true);
            yield "</td>
      <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "descripcion", [], "method", false, false, false, 21), "html", null, true);
            yield "</td>
      <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "precio", [], "method", false, false, false, 22), "html", null, true);
            yield "€ X";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 22, $this->source); })()), $context["codigo"], [], "array", false, false, false, 22), "html", null, true);
            yield "</td>
      <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "€</td>
     </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['codigo'], $context['producto'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "</table>

<p>Precio total: ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["precioTotal"]) || array_key_exists("precioTotal", $context) ? $context["precioTotal"] : (function () { throw new RuntimeError('Variable "precioTotal" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "€</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "correo/correo.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  108 => 28,  104 => 26,  95 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  74 => 18,  70 => 17,  55 => 5,  51 => 4,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# empty Twig template #}
{# templates/correo.html.twig #}

<h1>¡Gracias por su compra {{ app.user.nombre }}!</h1>
<h2>Identificador de su pedido: #{{ pedido_id }}</h2>

<h2>Resumen de su compra: </h2>

<table>
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio y unidades</th>
        <th>Precio total</th>
    </tr>
    {% for codigo, producto in productos %}
     <tr>
      <td>{{ codigo }}</td>
      <td>{{ producto.nombreCorto() }}</td>
      <td>{{ producto.descripcion() }}</td>
      <td>{{ producto.precio() }}€ X{{ unidades[codigo] }}</td>
      <td>{{ total }}€</td>
     </tr>
    {% endfor %}
</table>

<p>Precio total: {{ precioTotal }}€</p>
", "correo/correo.html.twig", "/home/amontor1507/proyecto/templates/correo/correo.html.twig");
    }
}
