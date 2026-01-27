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

/* cesta/mostrar_cesta.html.twig */
class __TwigTemplate_9db154955958c7c76e7a01a70bab2d95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cesta/mostrar_cesta.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cesta/mostrar_cesta.html.twig"));

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

        yield "Cesta de Compra";
        
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
    .cesta-container {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .cesta-container h1 {
        margin-bottom: 20px;
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
    }

    table th {
        background-color: #4CAF50;
        color: white;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tfoot th {
        background-color: #333;
        color: white;
        font-size: 1.1em;
    }
    .eliminar-form {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px; /* espacio entre input y botón */
    }

    .unidades-input {
        width: 50px;
        padding: 3px 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        text-align: center;
    }

    .eliminar-btn {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .eliminar-btn:hover {
        background-color: #d32f2f;
    }

</style>

<div class=\"cesta-container\">
    <h1>Tu Cesta de Compra</h1>

    ";
        // line 85
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 85, $this->source); })()))) {
            // line 86
            yield "        <p>Tu cesta está vacíaa.</p>
        <form action=\"";
            // line 87
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pedido");
            yield "\" method=\"GET\" style=\"margin-top:20px;\">
                        <button type=\"submit\"
                                style=\"
                                    padding: 12px 25px;
                                    background-color: #2196F3;
                                    color: white;
                                    border: none;
                                    border-radius: 8px;
                                    font-size: 16px;
                                    cursor: pointer;
                                \">
                            Realizar pedido
                        </button>
                    </form>
    ";
        } else {
            // line 102
            yield "        <table>
            <thead>
                <tr>
                    <th>Productos</th>
                    <th>Nombre Corto</th>
                    <th>Precio Unitario</th>
                    <th>Unidades</th>
                    <th>Subtotal</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 114
            $context["total"] = 0;
            // line 115
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 115, $this->source); })()));
            foreach ($context['_seq'] as $context["codigo"] => $context["producto"]) {
                // line 116
                yield "                    
                    ";
                // line 118
                yield "                    ";
                $context["unidades_producto"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 118, $this->source); })()), $context["codigo"], [], "array", false, false, false, 118);
                // line 119
                yield "                    ";
                $context["subtotal"] = (CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 119) * (isset($context["unidades_producto"]) || array_key_exists("unidades_producto", $context) ? $context["unidades_producto"] : (function () { throw new RuntimeError('Variable "unidades_producto" does not exist.', 119, $this->source); })()));
                // line 120
                yield "                    ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 120, $this->source); })()) + (isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 120, $this->source); })()));
                // line 121
                yield "                    
                    
                    <tr>
                        <td>";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 124), "html", null, true);
                yield "</td>
                        <td>";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "nombreCorto", [], "any", false, false, false, 125), "html", null, true);
                yield "</td>
                        <td>";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 126), 2, ",", "."), "html", null, true);
                yield " €</td>
                        <td>";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unidades_producto"]) || array_key_exists("unidades_producto", $context) ? $context["unidades_producto"] : (function () { throw new RuntimeError('Variable "unidades_producto" does not exist.', 127, $this->source); })()), "html", null, true);
                yield "</td>
                        <td>";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 128, $this->source); })()), 2, ",", "."), "html", null, true);
                yield " €</td>
                        <td>
                            <form action=\"";
                // line 130
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminar");
                yield "\" method=\"POST\" class=\"eliminar-form\">
                                <input type=\"number\" value=\"1\" min=\"1\" name=\"unidades\" class=\"unidades-input\"/>
                                <input type=\"hidden\" name=\"producto_id\" value=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 132), "html", null, true);
                yield "\">
                                <button type=\"submit\" name=\"eliminar_producto\" value=\"Eliminar\" class=\"eliminar-btn\">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    
                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['codigo'], $context['producto'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 140, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 141
                yield "                    <form action=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pedido");
                yield "\" method=\"GET\" style=\"margin-top:20px;\">
                        <button type=\"submit\"
                                style=\"
                                    padding: 12px 25px;
                                    background-color: #2196F3;
                                    color: white;
                                    border: none;
                                    border-radius: 8px;
                                    font-size: 16px;
                                    cursor: pointer;
                                \">
                            Realizar pedido
                        </button>
                    </form>
                ";
            }
            // line 156
            yield "
            </tbody>

            <tfoot>
                <tr>
                    <th colspan=\"5\" style=\"text-align:right\">Total:</th>
                    <th>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 162, $this->source); })()), 2, ",", "."), "html", null, true);
            yield " €</th>
                </tr>
            </tfoot>
        </table>
    ";
        }
        // line 167
        yield "</div>

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
        return "cesta/mostrar_cesta.html.twig";
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
        return array (  323 => 167,  315 => 162,  307 => 156,  288 => 141,  285 => 140,  271 => 132,  266 => 130,  261 => 128,  257 => 127,  253 => 126,  249 => 125,  245 => 124,  240 => 121,  237 => 120,  234 => 119,  231 => 118,  228 => 116,  223 => 115,  221 => 114,  207 => 102,  189 => 87,  186 => 86,  184 => 85,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cesta de Compra{% endblock %}

{% block body %}
    
{% include 'cabecera.html.twig' %}

<style>
    .cesta-container {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .cesta-container h1 {
        margin-bottom: 20px;
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
    }

    table th {
        background-color: #4CAF50;
        color: white;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tfoot th {
        background-color: #333;
        color: white;
        font-size: 1.1em;
    }
    .eliminar-form {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px; /* espacio entre input y botón */
    }

    .unidades-input {
        width: 50px;
        padding: 3px 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        text-align: center;
    }

    .eliminar-btn {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .eliminar-btn:hover {
        background-color: #d32f2f;
    }

</style>

<div class=\"cesta-container\">
    <h1>Tu Cesta de Compra</h1>

    {% if productos is empty %}
        <p>Tu cesta está vacíaa.</p>
        <form action=\"{{ path('pedido') }}\" method=\"GET\" style=\"margin-top:20px;\">
                        <button type=\"submit\"
                                style=\"
                                    padding: 12px 25px;
                                    background-color: #2196F3;
                                    color: white;
                                    border: none;
                                    border-radius: 8px;
                                    font-size: 16px;
                                    cursor: pointer;
                                \">
                            Realizar pedido
                        </button>
                    </form>
    {% else %}
        <table>
            <thead>
                <tr>
                    <th>Productos</th>
                    <th>Nombre Corto</th>
                    <th>Precio Unitario</th>
                    <th>Unidades</th>
                    <th>Subtotal</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                {% set total = 0 %}
                {% for codigo, producto in productos %}
                    
                    {# Esto es un comentario en Twig #}
                    {% set unidades_producto = unidades[codigo] %}
                    {% set subtotal = producto.precio * unidades_producto %}
                    {% set total = total + subtotal %}
                    
                    
                    <tr>
                        <td>{{ producto.nombre }}</td>
                        <td>{{ producto.nombreCorto }}</td>
                        <td>{{ producto.precio | number_format(2, ',', '.') }} €</td>
                        <td>{{ unidades_producto }}</td>
                        <td>{{ subtotal | number_format(2, ',', '.') }} €</td>
                        <td>
                            <form action=\"{{ path('eliminar') }}\" method=\"POST\" class=\"eliminar-form\">
                                <input type=\"number\" value=\"1\" min=\"1\" name=\"unidades\" class=\"unidades-input\"/>
                                <input type=\"hidden\" name=\"producto_id\" value=\"{{ producto.id }}\">
                                <button type=\"submit\" name=\"eliminar_producto\" value=\"Eliminar\" class=\"eliminar-btn\">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    
                    
                {% endfor %}
                {% if productos is not empty %}
                    <form action=\"{{ path('pedido') }}\" method=\"GET\" style=\"margin-top:20px;\">
                        <button type=\"submit\"
                                style=\"
                                    padding: 12px 25px;
                                    background-color: #2196F3;
                                    color: white;
                                    border: none;
                                    border-radius: 8px;
                                    font-size: 16px;
                                    cursor: pointer;
                                \">
                            Realizar pedido
                        </button>
                    </form>
                {% endif %}

            </tbody>

            <tfoot>
                <tr>
                    <th colspan=\"5\" style=\"text-align:right\">Total:</th>
                    <th>{{ total | number_format(2, ',', '.') }} €</th>
                </tr>
            </tfoot>
        </table>
    {% endif %}
</div>

{% endblock %}
", "cesta/mostrar_cesta.html.twig", "/var/www/html/templates/cesta/mostrar_cesta.html.twig");
    }
}
