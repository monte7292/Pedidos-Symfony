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

/* pedido/pedido.html.twig */
class __TwigTemplate_852baa8c5c91dd048ae10b6aac69918a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/pedido.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/pedido.html.twig"));

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

        yield "Estado del pedido";
        
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
<div class=\"pedido-wrapper\">

    <div class=\"pedido-card\">

        ";
        // line 13
        if ((((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()) == 0) && (isset($context["pedido_id"]) || array_key_exists("pedido_id", $context) ? $context["pedido_id"] : (function () { throw new RuntimeError('Variable "pedido_id" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "            <div class=\"icon success\">✓</div>
            <h1>Pedido confirmado</h1>
            <p class=\"subtitle\">Gracias por tu compra</p>

            <div class=\"pedido-info\">
                <span>ID del pedido</span>
                <strong>#";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pedido_id"]) || array_key_exists("pedido_id", $context) ? $context["pedido_id"] : (function () { throw new RuntimeError('Variable "pedido_id" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "</strong>
            </div>

            <a href=\"/categorias\" class=\"cta-button\">Seguir comprando</a>

        ";
        } elseif ((        // line 25
(isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()) == 1)) {
            // line 26
            yield "            <div class=\"icon error\">✕</div>
            <h1>Cesta vacía</h1>
            <p class=\"subtitle\">No hay productos en tu pedido</p>

            <a href=\"/categorias\" class=\"cta-button blue\">Ver categorias</a>

        ";
        } elseif ((        // line 32
(isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()) == 2)) {
            // line 33
            yield "            <div class=\"icon warning\">!</div>
            <h1>Error al procesar el pedido</h1>
            <p class=\"subtitle\">Inténtalo de nuevo en unos instantes</p>

            <a href=\"/cesta\" class=\"cta-button yellow\">Volver a la cesta</a>
        ";
        }
        // line 39
        yield "
    </div>

</div>

<style>
/* Centrado REAL */
.pedido-wrapper {
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Tarjeta */
.pedido-card {
    background: white;
    padding: 40px;
    border-radius: 15px;
    max-width: 500px;
    width: 100%;
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    text-align: center;
    animation: fadeIn 0.5s ease;
}

/* Iconos */
.icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    color: white;
}

.icon.success { background: #28a745; }
.icon.error { background: #dc3545; }
.icon.warning { background: #ffc107; color:#333; }

/* Texto */
.subtitle {
    color: #666;
    margin-bottom: 30px;
}

/* ID */
.pedido-info {
    background: #f4f4f4;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 30px;
}

.pedido-info span {
    display: block;
    font-size: 0.9em;
    color: #777;
}

.pedido-info strong {
    font-size: 1.4em;
    color: #333;
}

/* Animación */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
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
        return "pedido/pedido.html.twig";
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
        return array (  150 => 39,  142 => 33,  140 => 32,  132 => 26,  130 => 25,  122 => 20,  114 => 14,  112 => 13,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Estado del pedido{% endblock %}

{% block body %}
    
    {% include 'cabecera.html.twig' %}
    
<div class=\"pedido-wrapper\">

    <div class=\"pedido-card\">

        {% if error == 0 and pedido_id %}
            <div class=\"icon success\">✓</div>
            <h1>Pedido confirmado</h1>
            <p class=\"subtitle\">Gracias por tu compra</p>

            <div class=\"pedido-info\">
                <span>ID del pedido</span>
                <strong>#{{ pedido_id }}</strong>
            </div>

            <a href=\"/categorias\" class=\"cta-button\">Seguir comprando</a>

        {% elseif error == 1 %}
            <div class=\"icon error\">✕</div>
            <h1>Cesta vacía</h1>
            <p class=\"subtitle\">No hay productos en tu pedido</p>

            <a href=\"/categorias\" class=\"cta-button blue\">Ver categorias</a>

        {% elseif error == 2 %}
            <div class=\"icon warning\">!</div>
            <h1>Error al procesar el pedido</h1>
            <p class=\"subtitle\">Inténtalo de nuevo en unos instantes</p>

            <a href=\"/cesta\" class=\"cta-button yellow\">Volver a la cesta</a>
        {% endif %}

    </div>

</div>

<style>
/* Centrado REAL */
.pedido-wrapper {
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Tarjeta */
.pedido-card {
    background: white;
    padding: 40px;
    border-radius: 15px;
    max-width: 500px;
    width: 100%;
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    text-align: center;
    animation: fadeIn 0.5s ease;
}

/* Iconos */
.icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    color: white;
}

.icon.success { background: #28a745; }
.icon.error { background: #dc3545; }
.icon.warning { background: #ffc107; color:#333; }

/* Texto */
.subtitle {
    color: #666;
    margin-bottom: 30px;
}

/* ID */
.pedido-info {
    background: #f4f4f4;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 30px;
}

.pedido-info span {
    display: block;
    font-size: 0.9em;
    color: #777;
}

.pedido-info strong {
    font-size: 1.4em;
    color: #333;
}

/* Animación */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
{% endblock %}
", "pedido/pedido.html.twig", "/home/amontor1507/proyecto/templates/pedido/pedido.html.twig");
    }
}
