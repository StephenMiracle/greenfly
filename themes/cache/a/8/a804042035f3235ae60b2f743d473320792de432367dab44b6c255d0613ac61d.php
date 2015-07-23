<?php

/* content/admin/content-edit.html */
class __TwigTemplate_a804042035f3235ae60b2f743d473320792de432367dab44b6c255d0613ac61d extends Twig_Template
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
        $this->loadTemplate("content/admin/head.html", "content/admin/content-edit.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        echo twig_var_dump($this->env, $context);
        echo "
<form action=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/admin/content/update\" method=\"post\">
    <div class=\"row\">
        <div class=\"md-col-6\">
            <label for=\"name\">name:</label><br />
            <input type=\"text\" name=\"name\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "content", array()), "name", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"md-col-3\">
            <label for=\"type\">content type:</label><br />
            <select name=\"type\">
                <option value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "content", array()), "type", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "content", array()), "type", array()), "name", array()), "html", null, true);
        echo "</option>
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "types", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 15
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </select>
        </div>
    </div>
    <div class=\"row\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "content", array()), "id", array()), "html", null, true);
        echo "\" />
        <input type=\"submit\" nme=\"submit\" value=\"Save\" class=\"btn btn-primary\" />
    </div>
</form>
";
        // line 25
        $this->loadTemplate("content/admin/footer.html", "content/admin/content-edit.html", 25)->display($context);
    }

    public function getTemplateName()
    {
        return "content/admin/content-edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  70 => 21,  64 => 17,  53 => 15,  49 => 14,  43 => 13,  35 => 8,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
