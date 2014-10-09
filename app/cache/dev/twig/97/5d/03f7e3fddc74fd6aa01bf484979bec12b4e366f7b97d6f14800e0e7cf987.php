<?php

/* FirstUserBundle:Default:table.html.twig */
class __TwigTemplate_975d03f7e3fddc74fd6aa01bf484979bec12b4e366f7b97d6f14800e0e7cf987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\" style=\"margin-top: 10px\">

    <div id=\"\" class=\"form-inline\" role=\"grid\">
        <div class=\"row\">
            <div class=\"span8\">
            </div>
            <div class=\"span4\">
                <div class=\"dataTables_filter\" id=\"example_filter\">
                    <label>Search: <input type=\"text\" class=\"search-query\"></label>
                </div>
            </div>
        </div>
    </div>
    <table class=\"table table-striped \">
        <thead>
            <tr>
                <th>NAME</th>               
                <th>CONTINENT</th>
                <th>REGION</th>               
                <th>AREA</th>
                <th>Indp Yr</th>   
                <th>POP</th>
                <th>LIFE EXP</th>
                <th>GNP</th>
                <th>GNP OLD</th>
                <th>LOCAL NAME</th>
                <th>GOVT</th>
                <th>HOS</th>
                <th>CAPITAL</th>
                <th>CODE</th>
            </tr>
        </thead>     
        <tbody>
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 35
            echo "            <tr >
                ";
            // line 36
            if (twig_test_iterable((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")))) {
                // line 37
                echo "                     ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")));
                foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                    // line 38
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, (isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "html", null, true);
                    echo "</td>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                ";
            }
            // line 41
            echo "            </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
    <div class=\"row\">
        <div class=\"span4\">
            ";
        // line 47
        if (((isset($context["total_pages"]) ? $context["total_pages"] : $this->getContext($context, "total_pages")) > 0)) {
            // line 48
            echo "            <div class=\"pagination\">
                <ul>
                    ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["total_pages"]) ? $context["total_pages"] : $this->getContext($context, "total_pages"))));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 51
                echo "                        ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                    // line 52
                    echo "                    <li class=\"prev ";
                    if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) == 1)) {
                        echo " disabled";
                    }
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_homepage", array("page" => ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) - 1))), "html", null, true);
                    echo "\">← Previous</a></li>
                        ";
                }
                // line 54
                echo "                    <li ";
                if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"))) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_homepage", array("page" => $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "</a></li> 
                   
                    ";
                // line 56
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
                    // line 57
                    echo "                    <li class=\"next";
                    if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) == (isset($context["total_pages"]) ? $context["total_pages"] : $this->getContext($context, "total_pages")))) {
                        echo " disabled ";
                    }
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_homepage", array("page" => ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) + 1))), "html", null, true);
                    echo "\">Next → </a></li>
                      ";
                }
                // line 59
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                </ul>
            </div>
             ";
        }
        // line 63
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FirstUserBundle:Default:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 63,  167 => 60,  153 => 59,  129 => 54,  77 => 40,  58 => 35,  97 => 58,  76 => 40,  81 => 30,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 57,  135 => 53,  119 => 52,  102 => 32,  71 => 26,  67 => 25,  63 => 37,  59 => 23,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 27,  68 => 38,  56 => 9,  87 => 43,  21 => 2,  26 => 6,  93 => 47,  88 => 13,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 69,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 38,  69 => 37,  47 => 15,  40 => 8,  37 => 11,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 66,  108 => 65,  101 => 29,  98 => 28,  96 => 31,  83 => 25,  74 => 41,  66 => 15,  55 => 21,  52 => 21,  50 => 10,  43 => 8,  41 => 11,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 56,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 64,  103 => 32,  99 => 50,  95 => 48,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 34,  51 => 14,  48 => 13,  45 => 13,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
