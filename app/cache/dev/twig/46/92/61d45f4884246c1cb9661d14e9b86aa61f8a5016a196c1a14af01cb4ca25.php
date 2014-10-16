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
        return array (  124 => 34,  65 => 48,  53 => 44,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 36,  128 => 35,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 63,  85 => 25,  75 => 30,  68 => 26,  56 => 9,  87 => 61,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 31,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 49,  47 => 14,  40 => 8,  37 => 11,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 32,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 13,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 62,  144 => 61,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 14,  95 => 28,  92 => 21,  86 => 28,  82 => 34,  80 => 38,  73 => 50,  64 => 17,  60 => 6,  57 => 46,  54 => 18,  51 => 31,  48 => 13,  45 => 13,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
