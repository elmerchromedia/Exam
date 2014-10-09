<?php

/* FirstUserBundle:Default:index.html.twig */
class __TwigTemplate_a31545564bd901b59e023aa4fa7a3fe10905133fff9b222c3ceef72863865500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Elmer First Symfony2 and Twig Project</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/css/parsley/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        </head>

        <body>
";
        // line 18
        $this->displayBlock('container', $context, $blocks);
        // line 20
        echo "

            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "        </body>
    </html>

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 18
    public function block_container($context, array $blocks = array())
    {
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo " ";
    }

    public function getTemplateName()
    {
        return "FirstUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  97 => 27,  92 => 18,  87 => 13,  80 => 29,  78 => 27,  74 => 26,  70 => 25,  66 => 24,  62 => 23,  58 => 22,  54 => 20,  52 => 18,  47 => 15,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  22 => 1,);
    }
}
