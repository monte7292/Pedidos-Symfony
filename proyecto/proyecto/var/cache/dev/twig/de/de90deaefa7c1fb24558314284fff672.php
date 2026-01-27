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

/* productos/mostrar_productos.html.twig */
class __TwigTemplate_a675a9bab177f7c668283a16787ac380 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "productos/mostrar_productos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "productos/mostrar_productos.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Productos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    
";
        // line 7
        yield from $this->load("cabecera.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
<style>
    .productos-container {
        max-width: 900px;
        margin: 30px auto;
        padding: 25px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .productos-container h1 {
        margin-bottom: 25px;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    table th, table td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    table th {
        background-color: #4CAF50;
        color: white;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    input[type=\"number\"] {
        width: 60px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        text-align: center;
    }

    input[type=\"submit\"] {
        margin-top: 20px;
        padding: 12px 25px;
        background-color: #4CAF50;
        border: none;
        color: white;
        border-radius: 8px;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type=\"submit\"]:hover {
        background-color: #45a049;
    }
</style>

<div class=\"productos-container\">
    <h1>PRODUCTOS DE LA CATEGORÍA</h1>

    <form action=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anadir");
        yield "\" method=\"POST\">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Unidades</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 87
            yield "                    <tr>
                        <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "getNombre", [], "method", false, false, false, 88), "html", null, true);
            yield "</td>
                        <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "getPrecio", [], "method", false, false, false, 89), 2, ",", "."), "html", null, true);
            yield " €</td>
                        <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "getDescripcion", [], "method", false, false, false, 90), "html", null, true);
            yield "</td>
                        <td>
                            <input type=\"number\" name=\"unidades[]\" value=\"0\" min=\"0\">
                            <input type=\"hidden\" name=\"productos_id[]\" value=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "getId", [], "method", false, false, false, 93), "html", null, true);
            yield "\">
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['producto'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "            </tbody>
        </table>

        <input type=\"submit\" name=\"enviar\" value=\"Añadir a la cesta\">
    </form>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "productos/mostrar_productos.html.twig";
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
        return array (  219 => 97,  209 => 93,  203 => 90,  199 => 89,  195 => 88,  192 => 87,  188 => 86,  174 => 75,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Productos{% endblock %}

{% block body %}
    
{% include 'cabecera.html.twig' %}

<style>
    .productos-container {
        max-width: 900px;
        margin: 30px auto;
        padding: 25px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .productos-container h1 {
        margin-bottom: 25px;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    table th, table td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    table th {
        background-color: #4CAF50;
        color: white;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    input[type=\"number\"] {
        width: 60px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        text-align: center;
    }

    input[type=\"submit\"] {
        margin-top: 20px;
        padding: 12px 25px;
        background-color: #4CAF50;
        border: none;
        color: white;
        border-radius: 8px;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type=\"submit\"]:hover {
        background-color: #45a049;
    }
</style>

<div class=\"productos-container\">
    <h1>PRODUCTOS DE LA CATEGORÍA</h1>

    <form action=\"{{ path('anadir') }}\" method=\"POST\">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Unidades</th>
                </tr>
            </thead>
            <tbody>
                {% for producto in productos %}
                    <tr>
                        <td>{{ producto.getNombre() }}</td>
                        <td>{{ producto.getPrecio() | number_format(2, ',', '.') }} €</td>
                        <td>{{ producto.getDescripcion() }}</td>
                        <td>
                            <input type=\"number\" name=\"unidades[]\" value=\"0\" min=\"0\">
                            <input type=\"hidden\" name=\"productos_id[]\" value=\"{{ producto.getId() }}\">
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <input type=\"submit\" name=\"enviar\" value=\"Añadir a la cesta\">
    </form>
</div>

{% endblock %}
", "productos/mostrar_productos.html.twig", "/var/www/html/templates/productos/mostrar_productos.html.twig");
    }
}
