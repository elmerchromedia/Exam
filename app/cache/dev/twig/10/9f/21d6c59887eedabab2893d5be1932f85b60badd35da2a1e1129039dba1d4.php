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
        echo $this->env->getExtension('routing')->getPath("login_login_saveaccount");
        echo "\" data-validate=\"parsley\" name=\"update\" >
         <table width=\"100%\" cellpadding=\"5\" cellspacing=\"5\">
            <tr> 
                <td align=\"center\" colspan=\"6\"><h2>Edit ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " Account</h2></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type=\"hidden\" name=\"userid\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"userid\" placeholder=\"Please enter your email address\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr> 
                <td><label>Email Address</label></td>
                <td><input type=\"text\" name=\"email\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" placeholder=\"Please enter your email address\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userName"), "html", null, true);
        echo "\" readonly=\"readonly\" /></td>
            </tr>
            <tr> 
                <td><label>First Name</label></td>
                <td><input type=\"text\" name=\"firstname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" placeholder=\"Please enter your first name\"  value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr> 
                <td><label>Last Name</label></td>
                <td><input type=\"text\" name=\"lastname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" placeholder=\"Please enter your last name\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr> 
                <td colspan=\"8\" style=\"text-align:center;\">
                <button class=\"btn btn-primary\" type=\"submit\" >Update ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " Account</button> | <a href=\"";
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
        return array (  82 => 34,  75 => 30,  68 => 26,  61 => 22,  54 => 18,  47 => 14,  41 => 11,  31 => 3,  28 => 2,);
    }
}
