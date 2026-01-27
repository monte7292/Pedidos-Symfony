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

/* home/index.html.twig */
class __TwigTemplate_245ee85c737b2478eb8b715b36b72960 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Bienvenido a Nuestra Web</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #007bff;
        }
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
            text-align: center;
            padding: 20px;
        }
        .content h1 {
            font-size: 2.5em;
            margin-bottom: 15px;
        }
        .content p {
            font-size: 1.2em;
            margin-bottom: 20px;
            max-width: 800px;
            line-height: 1.6;
        }
        .cta-button {
            background-color: #28a745;
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #218838;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido a Nuestra Webs</h1>
    </header>

    <nav>
        <a href=\"/login\">Iniciar Sesión</a>
        <a href=\"/categorias\">Categorías</a>
        <a href=\"/productos\">Productos</a>
    </nav>

    <div class=\"content\">
        <h1>¿Qué es Symfony?</h1>
        <p>Symfony es un framework de desarrollo web en PHP que permite crear aplicaciones web de manera estructurada y eficiente. Ofrece herramientas poderosas para manejar bases de datos, formularios, autenticación, y más. Esta página está construida sobre Symfony, lo que nos permite garantizar una experiencia rápida, segura y escalable.</p>
        
        <p>Para poder acceder a las secciones de <strong>Categorías</strong> y <strong>Productos</strong>, necesitas iniciar sesión en tu cuenta. Usamos un sistema de autenticación basado en tokens y contraseñas hasheadas para garantizar tu seguridad en todo momento.</p>
        
        <a href=\"/login\" class=\"cta-button\">Inicia sesión para continuar</a>
    </div>

    <footer>
        <p>&copy; 2025 Tu Empresa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
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
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Bienvenido a Nuestra Web</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #007bff;
        }
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
            text-align: center;
            padding: 20px;
        }
        .content h1 {
            font-size: 2.5em;
            margin-bottom: 15px;
        }
        .content p {
            font-size: 1.2em;
            margin-bottom: 20px;
            max-width: 800px;
            line-height: 1.6;
        }
        .cta-button {
            background-color: #28a745;
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #218838;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido a Nuestra Webs</h1>
    </header>

    <nav>
        <a href=\"/login\">Iniciar Sesión</a>
        <a href=\"/categorias\">Categorías</a>
        <a href=\"/productos\">Productos</a>
    </nav>

    <div class=\"content\">
        <h1>¿Qué es Symfony?</h1>
        <p>Symfony es un framework de desarrollo web en PHP que permite crear aplicaciones web de manera estructurada y eficiente. Ofrece herramientas poderosas para manejar bases de datos, formularios, autenticación, y más. Esta página está construida sobre Symfony, lo que nos permite garantizar una experiencia rápida, segura y escalable.</p>
        
        <p>Para poder acceder a las secciones de <strong>Categorías</strong> y <strong>Productos</strong>, necesitas iniciar sesión en tu cuenta. Usamos un sistema de autenticación basado en tokens y contraseñas hasheadas para garantizar tu seguridad en todo momento.</p>
        
        <a href=\"/login\" class=\"cta-button\">Inicia sesión para continuar</a>
    </div>

    <footer>
        <p>&copy; 2025 Tu Empresa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
", "home/index.html.twig", "/home/amontor1507/proyecto/templates/home/index.html.twig");
    }
}
