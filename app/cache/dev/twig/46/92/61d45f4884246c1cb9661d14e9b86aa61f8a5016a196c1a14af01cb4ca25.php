<?php

/* FirstUserBundle:Default:editpassword.html.twig */
class __TwigTemplate_469261d45f4884246c1cb9661d14e9b86aa61f8a5016a196c1a14af01cb4ca25 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("login_login_savepassword");
        echo "\" data-validate=\"parsley\" name=\"updatepass\" >
         <table width=\"100%\" cellpadding=\"5\" cellspacing=\"5\">
            <tr> 
                <td align=\"center\" colspan=\"6\"><h2>Edit ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " Password</h2></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type=\"hidden\" name=\"userid\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"userid\" placeholder=\"Please enter your email address\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr> 
                <td><label>Current Password</label></td>
                <td><input type=\"text\" type=\"password\" name=\"password\" class=\"input-xlarge\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password"), "html", null, true);
        echo "\" readonly=\"readonly\" /></td>
            </tr>
          
            <tr> 
                <td><label>New Password</label></td>
                <td><input type=\"password\" id=\"password\" name=\"password\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" placeholder=\"Please enter your desired password\" value=\"\" />
                </td>
            </tr>
            <tr> 
                <td><label>Confirm Password</label></td>
                <td>
                <input type=\"password\" id=\"passwordRe\" name=\"passwordRe\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-equalto=\"#password\" placeholder=\"Please enter again your desired password\" value=\"\" />
                </td>
            </tr>
            <tr> 
                <td colspan=\"8\" style=\"text-align:center;\">
                <button class=\"btn btn-primary\" type=\"submit\" >Update ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " Password</button> | <a href=\"";
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
        return "FirstUserBundle:Default:editpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 38,  61 => 22,  54 => 18,  47 => 14,  41 => 11,  31 => 3,  28 => 2,);
    }
}
