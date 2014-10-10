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
        // line 29
        echo "        </head>
        <body>
";
        // line 31
        $this->displayBlock('container', $context, $blocks);
        // line 43
        echo "

            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userlogin/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "        </body>
    </html>

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "<style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #5d891a;
        }
        .nav{width:100%; height:100%; margin:0 auto; padding:0;}
        .nav ul{margin:0 auto;}
        .nav ul li{list-style:none; display:inline-block; text-align:center; margin: 0 150px;}
        .nav ul li a{color:#000; font-family:tahoma; font-size:13px;}
        .nav ul li a:hover{color:#fff;}
        .maincontent{margin:10px auto; padding:0;}
        .maincontent h1{font-family:tahoma; font-size:22px; color:#ffb802; font-style:italic; text-align: center;}
    </style>
";
    }

    // line 31
    public function block_container($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"nav\">
            <ul>
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("login_login_login");
        echo "\" target=\"_blank\">Login</a></li>
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\" target=\"_blank\">Signup</a></li>
            </ul>
    </div>
<div class=\"maincontent\">
    <h1>welcome to my first symfony 2.5 system with twig templates</h1>
</div>
";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
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
        return array (  136 => 51,  133 => 50,  122 => 36,  118 => 35,  114 => 34,  110 => 32,  107 => 31,  89 => 14,  86 => 13,  79 => 52,  77 => 50,  73 => 49,  69 => 48,  65 => 47,  61 => 46,  57 => 45,  53 => 43,  51 => 31,  47 => 29,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  22 => 1,);
    }
}
