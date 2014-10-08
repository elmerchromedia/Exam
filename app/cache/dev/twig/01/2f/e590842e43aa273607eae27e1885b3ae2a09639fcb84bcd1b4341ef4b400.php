<?php

/* FirstUserBundle:Default:welcome.html.twig */
class __TwigTemplate_012fe590842e43aa273607eae27e1885b3ae2a09639fcb84bcd1b4341ef4b400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FirstUserBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #5d891a;
        }
        a{font-family:arial; color:#fff;}
        a:hover{text-decoration:underline; color:#000;}
        h2{color:#ffd800;}
</style>
";
    }

    // line 14
    public function block_container($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"container\">
    <h2>Welcome ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " dashboard!..</h2>
</div> 
<div style=\"text-align:center;\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("login_login_logout");
        echo "\" >Logout</a></div>

 <table width=\"100%\" cellpadding=\"5\" cellspacing=\"5\">
            <tr> 
                <td colspan=\"8\" style=\"text-align:center;\">
                <button class=\"btn btn-primary\" type=\"submit\" >Update Account</button></td>
            </tr>
        </table>
    ";
    }

    public function getTemplateName()
    {
        return "FirstUserBundle:Default:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  52 => 16,  49 => 15,  46 => 14,  32 => 3,  29 => 2,);
    }
}
