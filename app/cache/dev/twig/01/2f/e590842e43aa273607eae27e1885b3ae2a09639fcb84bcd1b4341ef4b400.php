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
        h2{color:#fff; font-family:tahoma; font-style:italic; font-size:22px;}
        h2 span{color:#ffb802; font-family:tahoma; font-style:italic; font-size:22px;}
</style>
";
    }

    // line 15
    public function block_container($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"container\">
    <h2>Welcome back, <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " </span></h2>
</div> 

    <table width=\"100%\" cellpadding=\"5\" cellspacing=\"5\">
            <tr> 
                <td colspan=\"8\" style=\"text-align:center;\">
                <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("login_login_editaccount");
        echo "\" >Edit Account</a> | <a href=\"";
        echo $this->env->getExtension('routing')->getPath("login_login_editpassword");
        echo "\" >Change Password</a> | <a href=\"";
        echo $this->env->getExtension('routing')->getPath("login_login_logout");
        echo "\" >Logout</a></td>

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
        return array (  172 => 63,  167 => 60,  153 => 59,  129 => 54,  77 => 40,  58 => 35,  134 => 55,  124 => 34,  65 => 41,  53 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 36,  128 => 35,  107 => 36,  61 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 57,  135 => 53,  119 => 52,  102 => 32,  71 => 19,  67 => 15,  63 => 37,  59 => 14,  38 => 6,  94 => 28,  89 => 56,  85 => 25,  75 => 30,  68 => 38,  56 => 9,  87 => 43,  21 => 2,  26 => 6,  93 => 47,  88 => 6,  78 => 21,  46 => 13,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 31,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 42,  47 => 15,  40 => 8,  37 => 11,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 54,  123 => 47,  120 => 32,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 13,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 16,  43 => 13,  41 => 11,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 62,  144 => 61,  141 => 56,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 50,  95 => 48,  92 => 21,  86 => 28,  82 => 34,  80 => 41,  73 => 34,  64 => 17,  60 => 6,  57 => 39,  54 => 18,  51 => 31,  48 => 13,  45 => 13,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
