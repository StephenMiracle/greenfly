<?php

/* index.html */
class __TwigTemplate_4445c28e0456ef1a50ac073fdce36caa8a73067205a63eaefa11057c7ef50ef4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <title>My Webpage</title>
</head>
<body>";
        // line 6
        echo twig_var_dump($this->env, $context);
        echo "
<ul id=\"navigation\">
    <li>what what</li>
</ul>

<h1>my name is ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "</h1>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  26 => 6,  19 => 1,);
    }
}
