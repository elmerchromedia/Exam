<?php

/* FirstUserBundle:Default:email.txt.twig */
class __TwigTemplate_d5add83041fcf46efbc38d786f283f444397bc39abadb21b19e9198d56bfd0e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FirstUserBundle:Default:index.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FirstUserBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #5d891a;
        }
</style>
<div class=\"container\" >
    <h1>Hello ";
        // line 11
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName");
        echo " </h1>
    <p>Welcome, here is the link of your new account below:<br />
    http://symfony.localhost/app_dev.php/profile?id=";
        // line 13
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid");
        echo "</p>
    <p>Sincerely Yours,<br />
    \t<span>Elmer P. Malinao</span>
    </p>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "FirstUserBundle:Default:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  41 => 11,  31 => 3,  28 => 2,);
    }
}
