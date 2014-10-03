<?php

/* FirstUserBundle:Default:login.html.twig */
class __TwigTemplate_2aef5b454d88f919c2de1c6cf623a9f7317670c5d8bc7b367fe53cf6be11e3eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
    <style type=\"text/css\">
    \tbody{font-family:arial, verdana, tahoma; background: #5D891A;}
    \th1{font-family:tahoma; font-size:16px; font-weight:bold;}
    \t#main{width:100%; height:auto; min-height:100px; background:#ccc; border-radius: 6px;}
    \t#content{margin:10px; padding:0; display:block;}
    \t.title{color:#1546c1; text-align: center; padding: 20px 0;}
        .field{width: 250px; height:25px; border-radius: 6px;}
        #footer{text-align: center; padding:10px 0;}
    </style>
    \t<div id=\"main\">
    \t\t<div id=\"content\">";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "            </div>
            <div id=\"footer\">
                ";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 43
        echo "            </div>
    \t</div>
    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <link rel=\"stylesheet\" href=\"style.css\" />
            <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
        ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        \t   <div class=\"title\"><h1>Login System<h1></div>
            \t<form action=\"\" method=\"post\">
            \t\t<table width=\"80%\" height=\"100%\" cellspacing=\"5\" cellpadding=\"5\">
                        <tr>
                            <td>Enter Your Email Address <i>(to be used as Username)</i></td>
                            <td><input type=\"text\" name=\"Email_Address\" value=\"\" placeholder=\"Enter Your Email Here\" class=\"field\"/></td>
                        </tr>
                        <tr>
                            <td>Enter Your Password</td>
                            <td><input type=\"password\" name=\"Password\" value=\"\" placeholder=\"Enter Your Password Here\" class=\"field\"/></td>
                        </tr>
                        <tr>
                            <td colspan=\"6\" align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Login &raquo;\" class=\"field\"/></td>
                        </tr>
            \t\t</table>
            \t</form>
            ";
    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        // line 41
        echo "                    &copy; Copyright 2014 &bull; Created by <a href=\"javascript:;\">Elmer P. Malinao</a>.
                ";
    }

    public function getTemplateName()
    {
        return "FirstUserBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  98 => 40,  78 => 21,  75 => 20,  65 => 6,  62 => 5,  59 => 4,  52 => 43,  50 => 40,  46 => 38,  44 => 20,  30 => 8,  28 => 4,  23 => 1,);
    }
}
