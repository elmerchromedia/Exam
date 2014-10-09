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
        return array (  172 => 63,  167 => 60,  153 => 59,  143 => 57,  141 => 56,  129 => 54,  119 => 52,  116 => 51,  99 => 50,  95 => 48,  93 => 47,  87 => 43,  80 => 41,  77 => 40,  68 => 38,  63 => 37,  61 => 36,  58 => 35,  54 => 34,  19 => 1,  52 => 10,  49 => 9,  47 => 8,  43 => 7,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
