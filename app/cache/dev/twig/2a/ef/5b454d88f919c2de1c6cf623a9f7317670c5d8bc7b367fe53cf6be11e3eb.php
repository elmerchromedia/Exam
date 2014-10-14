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
        // line 42
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\" data-validate=\"parsley\">
        <table width=\"100%\" cellpadding=\"5\" cellspacing=\"5\">
            <tr> 
                <td align=\"center\" style=\"color:#ff0000; font-style:italic;\">";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashBag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 46
            echo "            <div class=\"flash-notice\">
                ";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</td>
            </tr>
            <tr> 
                <td><h2 class=\"form-signin-heading\">Sign In</h2></td>
            </tr>
            <tr> 
                <td><input type=\"text\" id=\"username\" class=\"input-block-level\" name=\"email\" placeholder=\"Please enter a email address\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\"></td>
            </tr>
            <tr> 
                <td><input type=\"password\" class=\"input-block-level\" name=\"password\" placeholder=\"Please enter your password\" data-trigger=\"change\" data-required=\"true\"></td>
            </tr>
            <!--tr> 
                <td><label class=\"checkbox\">
                <input type=\"checkbox\" name=\"remember\" value=\"remember-me\"> Remember Me
            </label></td>
            </tr-->
            <tr> 
                <td><button class=\"btn btn-large btn-primary\" type=\"submit\">Sign in</button>
            <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\" >Sign Up</a> | <a href=\"";
        echo $this->env->getExtension('routing')->getPath("login_login_resetpassword");
        echo "\" >Forgot Password</a></td>
            </tr>
            </table>
        </form>

    </div> 
    ";
        // line 73
        if (array_key_exists("name", $context)) {
            // line 74
            echo "    <div class=\"alert-info fade in\">
        <strong>";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 78
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
        return array (  142 => 78,  136 => 75,  133 => 74,  131 => 73,  120 => 67,  100 => 49,  91 => 47,  88 => 46,  84 => 45,  78 => 42,  72 => 38,  69 => 37,  32 => 3,  29 => 2,);
    }
}
