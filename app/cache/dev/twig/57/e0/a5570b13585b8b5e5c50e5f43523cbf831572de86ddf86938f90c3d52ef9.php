<?php

/* FirstUserBundle:Default:signup.html.twig */
class __TwigTemplate_57e0a5570b13585b8b5e5c50e5f43523cbf831572de86ddf86938f90c3d52ef9 extends Twig_Template
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
                <td align=\"center\" colspan=\"6\"><h2>Sign Up Your Account Now!..</h2></td>
            </tr>
            <tr> 
                <td><label>Email Address</label></td>
                <td><input type=\"text\" name=\"email\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" placeholder=\"Please enter your email address\" /></td>
            </tr>
            <tr> 
                <td><label>First Name</label></td>
                <td><input type=\"text\" name=\"firstname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" placeholder=\"Please enter your first name\" /></td>
            </tr>
            <tr> 
                <td><label>Last Name</label></td>
                <td><input type=\"text\" name=\"lastname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" placeholder=\"Please enter your last name\" /></td>
            </tr>
            <tr> 
                <td><label>Password</label></td>
                <td><input type=\"password\" id=\"password\" name=\"password\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" placeholder=\"Please enter your desired password\" />
                </td>
            </tr>
            <tr> 
                <td><label>Confirm Password</label></td>
                <td>
                <input type=\"password\" id=\"passwordRe\" name=\"passwordRe\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-equalto=\"#password\" placeholder=\"Please enter again your desired password\" />
                </td>
            </tr>
            <tr> 
                <td colspan=\"8\" style=\"text-align:center;\">
                <button class=\"btn btn-primary\" type=\"submit\" >Create Account</button></td>
            </tr>
        </table>
    </form>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "FirstUserBundle:Default:signup.html.twig";
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
