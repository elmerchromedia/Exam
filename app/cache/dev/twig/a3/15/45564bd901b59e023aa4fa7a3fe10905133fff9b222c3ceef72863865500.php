<?php

/* FirstUserBundle:Default:index.html.twig */
class __TwigTemplate_a31545564bd901b59e023aa4fa7a3fe10905133fff9b222c3ceef72863865500 extends Twig_Template
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
        body{font-family:arial, verdana, tahoma; background: #5D891A;}
        h1{font-family:tahoma; font-size:16px; font-weight:bold;}
        #main{width:100%; height:auto; min-height:100px; background:#ccc; border-radius: 6px;}
        #content{margin:10px; padding:0; display:block;}
        .title{color:#1546c1; text-align: center; padding: 20px 0;}
        .field{width: 250px; height:25px; border-radius: 6px;}
        #footer{text-align: center; padding:10px 0;}
    </style>
        <div id=\"main\">
            <div id=\"content\">";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "            </div>
            <div id=\"footer\">
                ";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo "            </div>
        </div>
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
        echo "               <div class=\"title\"><h1>User Sign Up<h1></div>
                <form action=\"\" method=\"post\">
                    <table width=\"80%\" height=\"100%\" cellspacing=\"5\" cellpadding=\"5\">
                        <tr>
                            <td>Enter Your Name</td>
                            <td><input type=\"text\" name=\"Name\" value=\"\" placeholder=\"Enter Your Name Here\" class=\"field\"/></td>
                        </tr>
                        <tr>
                            <td>Enter Your Last Name</td>
                            <td><input type=\"text\" name=\"Last_Name\" value=\"\" placeholder=\"Enter Your Last Name Here\" class=\"field\"/></td>
                        </tr>
                         <tr>
                            <td>Enter Your Address</td>
                            <td><input type=\"text\" name=\"Address\" value=\"\" placeholder=\"Enter Your Address Here\" class=\"field\"/></td>
                        </tr>
                        <tr>
                            <td>Enter Your Email Address <i>(to be used as Username)</i></td>
                            <td><input type=\"text\" name=\"Email_Address\" value=\"\" placeholder=\"Enter Your Email Here\" class=\"field\"/></td>
                        </tr>
                        <tr>
                            <td>Enter Your Password</td>
                            <td><input type=\"password\" name=\"Password\" value=\"\" placeholder=\"Enter Your Password Here\" class=\"field\"/></td>
                        </tr>
                        <tr>
                            <td colspan=\"6\" align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Submit &raquo;\" class=\"field\"/></td>
                        </tr>
                    </table>
                </form>
            ";
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "                    &copy; Copyright 2014 &bull; Created by <a href=\"javascript:;\">Elmer P. Malinao</a>.
                ";
    }

    public function getTemplateName()
    {
        return "FirstUserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 53,  110 => 52,  78 => 21,  75 => 20,  65 => 6,  62 => 5,  59 => 4,  52 => 55,  50 => 52,  46 => 50,  44 => 20,  30 => 8,  28 => 4,  23 => 1,);
    }
}
