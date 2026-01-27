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

/* security/login.html.twig */
class __TwigTemplate_e8429cbb5e913548e26a4fbe9afa3d49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Iniciar Sesión";
        
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
    .login-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
        text-align: center;
    }

    .login-container h1 {
        margin-bottom: 25px;
        color: #333;
        font-size: 24px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        text-align: left;
    }

    label {
        margin-bottom: 5px;
        font-weight: 500;
        color: #555;
    }

    input[type=\"text\"],
    input[type=\"password\"] {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    input[type=\"text\"]:focus,
    input[type=\"password\"]:focus {
        outline: none;
        border-color: #4CAF50;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    button {
        padding: 12px;
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        font-weight: 500;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button:hover {
        background-color: #45a049;
        transform: translateY(-2px);
    }

    .alert {
        background-color: #f8d7da;
        color: #721c24;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 20px;
        text-align: center;
    }

    .logged-in-msg {
        margin-bottom: 20px;
        color: #333;
        text-align: center;
    }

    .logged-in-msg a {
        color: #4CAF50;
        text-decoration: none;
        font-weight: 500;
    }

    .logged-in-msg a:hover {
        text-decoration: underline;
    }
</style>

<div class=\"login-container\">
    <h1>Iniciar Sesión</h1>

    ";
        // line 102
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "        <div class=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 103, $this->source); })()), "messageKey", [], "any", false, false, false, 103), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 103, $this->source); })()), "messageData", [], "any", false, false, false, 103), "security"), "html", null, true);
            yield "</div>
    ";
        }
        // line 105
        yield "
    ";
        // line 106
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "        <div class=\"logged-in-msg\">
            Has iniciado sesión como ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "userIdentifier", [], "any", false, false, false, 108), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\">Cerrar Sesión</a>
        </div>
    ";
        }
        // line 111
        yield "
    <form action=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" method=\"post\">
        <label for=\"username\">Usuario</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "\" required autofocus>

        <label for=\"password\">Contraseña</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

        <button type=\"submit\">Entrar</button>
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
        return "security/login.html.twig";
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
        return array (  241 => 119,  233 => 114,  228 => 112,  225 => 111,  217 => 108,  214 => 107,  212 => 106,  209 => 105,  203 => 103,  201 => 102,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Iniciar Sesión{% endblock %}

{% block body %}

{% include 'cabecera.html.twig' %}

<style>
    .login-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
        text-align: center;
    }

    .login-container h1 {
        margin-bottom: 25px;
        color: #333;
        font-size: 24px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        text-align: left;
    }

    label {
        margin-bottom: 5px;
        font-weight: 500;
        color: #555;
    }

    input[type=\"text\"],
    input[type=\"password\"] {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    input[type=\"text\"]:focus,
    input[type=\"password\"]:focus {
        outline: none;
        border-color: #4CAF50;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    button {
        padding: 12px;
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        font-weight: 500;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button:hover {
        background-color: #45a049;
        transform: translateY(-2px);
    }

    .alert {
        background-color: #f8d7da;
        color: #721c24;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 20px;
        text-align: center;
    }

    .logged-in-msg {
        margin-bottom: 20px;
        color: #333;
        text-align: center;
    }

    .logged-in-msg a {
        color: #4CAF50;
        text-decoration: none;
        font-weight: 500;
    }

    .logged-in-msg a:hover {
        text-decoration: underline;
    }
</style>

<div class=\"login-container\">
    <h1>Iniciar Sesión</h1>

    {% if error %}
        <div class=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"logged-in-msg\">
            Has iniciado sesión como {{ app.user.userIdentifier }}, <a href=\"{{ path('logout') }}\">Cerrar Sesión</a>
        </div>
    {% endif %}

    <form action=\"{{ path('login') }}\" method=\"post\">
        <label for=\"username\">Usuario</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required autofocus>

        <label for=\"password\">Contraseña</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

        <button type=\"submit\">Entrar</button>
    </form>
</div>

{% endblock %}
", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
