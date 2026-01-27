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

/* categorias/mostrar_categorias.html.twig */
class __TwigTemplate_c7a13b5c32a7705d300ce5782f123d50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorias/mostrar_categorias.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorias/mostrar_categorias.html.twig"));

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

        yield "Categorías";
        
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
.categorias-container {
    max-width: 1000px;
    margin: 60px auto;
    padding: 30px;
    font-family: 'Roboto', Arial, sans-serif;
    text-align: center;
}

.categorias-container h1 {
    margin-bottom: 40px;
    font-size: 2.2em;
    color: #222;
}

/* GRID */
.categorias-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

/* CARD */
.categoria-link {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    text-decoration: none;
    color: #333;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    display: flex;
    flex-direction: column;
}

.categoria-link:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 35px rgba(0,0,0,0.15);
}

/* IMAGEN FAKE (MISMA PARA TODAS) */
.categoria-image {
    height: 120px;
    background: linear-gradient(135deg, #4CAF50, #2e7d32);
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(255,255,255,0.85);
    font-size: 2.5em;
}

/* TEXTO */
.categoria-name {
    padding: 25px 15px;
    font-size: 1.2em;
    font-weight: 500;
}

/* RESPONSIVE */
@media (max-width: 900px) {
    .categorias-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .categorias-grid {
        grid-template-columns: 1fr;
    }
}
</style>


<div class=\"categorias-container\">
    <h1>Categorías de productos</h1>

    <div class=\"categorias-grid\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 87
            yield "            <a class=\"categoria-link\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos", ["categoria" => CoreExtension::getAttribute($this->env, $this->source, $context["categoria"], "getId", [], "method", false, false, false, 87)]), "html", null, true);
            yield "\">
                
                <div class=\"categoria-image\">
                 
                </div>

                <div class=\"categoria-name\">
                    ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoria"], "getNombre", [], "method", false, false, false, 94), "html", null, true);
            yield "
                </div>

            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categoria'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "    </div>
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
        return "categorias/mostrar_categorias.html.twig";
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
        return array (  211 => 99,  200 => 94,  189 => 87,  185 => 86,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categorías{% endblock %}

{% block body %}

{% include 'cabecera.html.twig' %}

<style>
.categorias-container {
    max-width: 1000px;
    margin: 60px auto;
    padding: 30px;
    font-family: 'Roboto', Arial, sans-serif;
    text-align: center;
}

.categorias-container h1 {
    margin-bottom: 40px;
    font-size: 2.2em;
    color: #222;
}

/* GRID */
.categorias-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

/* CARD */
.categoria-link {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    text-decoration: none;
    color: #333;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    display: flex;
    flex-direction: column;
}

.categoria-link:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 35px rgba(0,0,0,0.15);
}

/* IMAGEN FAKE (MISMA PARA TODAS) */
.categoria-image {
    height: 120px;
    background: linear-gradient(135deg, #4CAF50, #2e7d32);
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(255,255,255,0.85);
    font-size: 2.5em;
}

/* TEXTO */
.categoria-name {
    padding: 25px 15px;
    font-size: 1.2em;
    font-weight: 500;
}

/* RESPONSIVE */
@media (max-width: 900px) {
    .categorias-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .categorias-grid {
        grid-template-columns: 1fr;
    }
}
</style>


<div class=\"categorias-container\">
    <h1>Categorías de productos</h1>

    <div class=\"categorias-grid\">
        {% for categoria in categorias %}
            <a class=\"categoria-link\" href=\"{{ path('productos', { 'categoria': categoria.getId() }) }}\">
                
                <div class=\"categoria-image\">
                 
                </div>

                <div class=\"categoria-name\">
                    {{ categoria.getNombre() }}
                </div>

            </a>
        {% endfor %}
    </div>
</div>


{% endblock %}
", "categorias/mostrar_categorias.html.twig", "/var/www/html/templates/categorias/mostrar_categorias.html.twig");
    }
}
