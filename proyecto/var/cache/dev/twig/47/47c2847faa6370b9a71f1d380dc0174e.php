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

/* cabecera.html.twig */
class __TwigTemplate_4ed1636a46cbf074ba115e94299ea023 extends Template
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
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cabecera.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cabecera.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        yield "<header style=\"background-color:#333;color:white;padding:10px 0;text-align:center;\">
    <h2>Bienvenido a Proyecto Symfony</h2>
</header>

<nav style=\"display:flex;justify-content:center;background-color:#444;padding:10px;\">
    <a href=\"/categorias\" style=\"color:white;text-decoration:none;margin:0 15px;font-weight:500;padding:8px 15px;border-radius:5px;\">Categorías</a>
    <a href=\"/cesta\" style=\"color:white;text-decoration:none;margin:0 15px;font-weight:500;padding:8px 15px;border-radius:5px;\">Cesta</a>
    
    ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        <a href=\"/logout\" style=\"color:red;text-decoration:none;margin:0 15px;font-weight:500;padding:8px 15px;border-radius:5px;\">Cerrar Sesión</a>
    ";
        } else {
            // line 13
            yield "        <a href=\"/login\" style=\"color:white;text-decoration:none;margin:0 15px;font-weight:500;padding:8px 15px;border-radius:5px;\">Iniciar Sesión</a>
    ";
        }
        // line 15
        yield "</nav>
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
        return "cabecera.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  92 => 15,  88 => 13,  84 => 11,  82 => 10,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block header %}
<header style=\"background-color:#333;color:white;padding:10px 0;text-align:center;\">
    <h2>Bienvenido a Proyecto Symfony</h2>
</header>

<nav style=\"display:flex;justify-content:center;background-color:#444;padding:10px;\">
    <a href=\"/categorias\" style=\"color:white;text-decoration:none;margin:0 15px;font-weight:500;padding:8px 15px;border-radius:5px;\">Categorías</a>
    <a href=\"/cesta\" style=\"color:white;text-decoration:none;margin:0 15px;font-weight:500;padding:8px 15px;border-radius:5px;\">Cesta</a>
    
    {% if app.user %}
        <a href=\"/logout\" style=\"color:red;text-decoration:none;margin:0 15px;font-weight:500;padding:8px 15px;border-radius:5px;\">Cerrar Sesión</a>
    {% else %}
        <a href=\"/login\" style=\"color:white;text-decoration:none;margin:0 15px;font-weight:500;padding:8px 15px;border-radius:5px;\">Iniciar Sesión</a>
    {% endif %}
</nav>
{% endblock %}
", "cabecera.html.twig", "/var/www/html/templates/cabecera.html.twig");
    }
}
