<?php

/* FirstUserBundle:Default:editaccount.html.twig */
class __TwigTemplate_109f21d6c59887eedabab2893d5be1932f85b60badd35da2a1e1129039dba1d4 extends Twig_Template
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
    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\" data-validate=\"parsley\">
         <table width=\"100%\" cellpadding=\"5\" cellspacing=\"5\">
            <tr> 
                <td align=\"center\" colspan=\"6\"><h2>Edit ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " Account</h2></td>
            </tr>
            <tr> 
                <td><label>Email Address</label></td>
                <td><input type=\"text\" name=\"email\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" placeholder=\"Please enter your email address\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\" readonly=\"readonly\" /></td>
            </tr>
            <tr> 
                <td><label>First Name</label></td>
                <td><input type=\"text\" name=\"firstname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" placeholder=\"Please enter your first name\"  value=";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "></td>
            </tr>
            <tr> 
                <td><label>Last Name</label></td>
                <td><input type=\"text\" name=\"lastname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" placeholder=\"Please enter your last name\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : $this->getContext($context, "lastname")), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr> 
                <td colspan=\"8\" style=\"text-align:center;\">
                <button class=\"btn btn-primary\" type=\"submit\" >Create Account</button> | <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\" >&raquo; Back to Login Page</a></td>
            </tr>
        </table>
    </form>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "FirstUserBundle:Default:editaccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  68 => 26,  61 => 22,  54 => 18,  47 => 14,  41 => 11,  31 => 3,  28 => 2,);
    }
}
