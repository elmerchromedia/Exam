<?php

/* FirstUserBundle:Default:resetpassword.html.twig */
class __TwigTemplate_7579a1894e50612205a82b4073907ea0a22ac77c52d4d1a2e582820a37a2d72a extends Twig_Template
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
                <td align=\"center\" colspan=\"6\"><h2>Reset Password</h2></td>
            </tr>
            <tr> 
                <td><input type=\"hidden\" name=\"userid\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"userid\"/></td>
            </tr>
            <tr> 
                <td align=\"center\" colspan=\"6\" ><input type=\"text\" name=\"email\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" placeholder=\"Please enter your email address\" /></td>
            </tr>
            <tr> 
                <td colspan=\"6\" style=\"text-align:center;\">
                <button class=\"btn btn-primary\" type=\"submit\" >Reset Now</button></td>
            </tr>
        </table>
    </form>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "FirstUserBundle:Default:resetpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  31 => 3,  28 => 2,);
    }
}
