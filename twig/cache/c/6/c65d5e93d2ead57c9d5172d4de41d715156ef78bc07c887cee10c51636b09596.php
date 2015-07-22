<?php

/* content/admin/default-value-input.html */
class __TwigTemplate_c65d5e93d2ead57c9d5172d4de41d715156ef78bc07c887cee10c51636b09596 extends Twig_Template
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
        echo "<input type='text' name='data[";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "][defaultValues][";
        echo twig_escape_filter($this->env, (isset($context["defaultValueID"]) ? $context["defaultValueID"] : null), "html", null, true);
        echo "]' value='";
        echo twig_escape_filter($this->env, (isset($context["defaultValue"]) ? $context["defaultValue"] : null), "html", null, true);
        echo "' class=\"defaultValueInput\" />";
    }

    public function getTemplateName()
    {
        return "content/admin/default-value-input.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
