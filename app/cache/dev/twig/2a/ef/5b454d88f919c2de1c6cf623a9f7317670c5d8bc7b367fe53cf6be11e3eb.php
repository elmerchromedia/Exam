<?php

/* FirstUserBundle:Default:login.html.twig */
class __TwigTemplate_2aef5b454d88f919c2de1c6cf623a9f7317670c5d8bc7b367fe53cf6be11e3eb extends Twig_Template
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

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

    </style>
";
    }

    // line 37
    public function block_container($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"container\">

        <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\" data-validate=\"parsley\">
        <table width=\"100%\" cellpadding=\"5\" cellspacing=\"5\">
            <tr> 
                <td><h2 class=\"form-signin-heading\">Sign In</h2></td>
            </tr>
            <tr> 
                <td><input type=\"text\" id=\"username\" class=\"input-block-level\" name=\"email\" placeholder=\"Please enter a email address\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\"></td>
            </tr>
            <tr> 
                <td><input type=\"password\" class=\"input-block-level\" name=\"password\" placeholder=\"Please enter your password\" data-trigger=\"change\" data-required=\"true\"></td>
            </tr>
            <tr> 
                <td><label class=\"checkbox\">
                <input type=\"checkbox\" name=\"remember\" value=\"remember-me\"> Remember Me
            </label></td>
            </tr>
            <tr> 
                <td><button class=\"btn btn-large btn-primary\" type=\"submit\">Sign in</button>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\" >Sign Up</a> | <a href=\"javascript:;\" >Forgot Password</a></td>
            </tr>
            </table>
        </form>

    </div> 
    ";
        // line 64
        if (array_key_exists("name", $context)) {
            // line 65
            echo "    <div class=\"alert-info fade in\">
        <strong>";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 69
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FirstUserBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 69,  111 => 66,  108 => 65,  106 => 64,  97 => 58,  76 => 40,  72 => 38,  69 => 37,  32 => 3,  29 => 2,);
    }
}
