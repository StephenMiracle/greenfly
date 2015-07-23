<?php

/* content/admin/version-edit.html */
class __TwigTemplate_1be9ee38b4501a4613bc5793c6dd1d3569133e27d2422005940981ceadfda7f9 extends Twig_Template
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
        $this->loadTemplate("content/admin/head.html", "content/admin/version-edit.html", 1)->display($context);
        // line 2
        echo twig_var_dump($this->env, $context);
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/admin/version/update\" method=\"post\">
    <div class=\"row\">
        <div class=\"md-col-6\">
            <label for=\"name\">name:</label><br />
            <input type=\"text\" name=\"name\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "version", array()), "name", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"md-col-3\">
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "type", array()), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo ":<br />
            ";
            // line 12
            if (($this->getAttribute($context["property"], "inputType", array()) == "text")) {
                // line 13
                echo "            <input type=\"text\" value=\"";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["property"], "defaultValues", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["defaultValue"]) {
                    echo twig_escape_filter($this->env, $context["defaultValue"], "html", null, true);
                    echo ", ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['defaultValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\" name=\"data[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
                echo "]\" />
            ";
            }
            // line 15
            echo "            ";
            if (($this->getAttribute($context["property"], "inputType", array()) == "textarea")) {
                // line 16
                echo "            <textarea name=\"data[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
                echo "]\">";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["property"], "defaultValues", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["defaultValue"]) {
                    echo twig_escape_filter($this->env, $context["defaultValue"], "html", null, true);
                    echo ", ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['defaultValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</textarea>
            ";
            }
            // line 18
            echo "            ";
            if (($this->getAttribute($context["property"], "inputType", array()) == "select")) {
                // line 19
                echo "            <select name=\"data[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
                echo "]\">
                ";
                // line 20
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["property"], "defaultValues", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["defaultValue"]) {
                    // line 21
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $context["defaultValue"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["defaultValue"], "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['defaultValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            </select>
            ";
            }
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </div>
    <div class=\"row\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "version", array()), "id", array()), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"contentID\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "content", array()), "id", array()), "html", null, true);
        echo "\" />
        <input type=\"submit\" nme=\"submit\" value=\"Save\" class=\"btn btn-primary\" />
    </div>
</form>
";
        // line 34
        $this->loadTemplate("content/admin/footer.html", "content/admin/version-edit.html", 34)->display($context);
    }

    public function getTemplateName()
    {
        return "content/admin/version-edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 34,  126 => 30,  122 => 29,  117 => 26,  111 => 25,  107 => 23,  96 => 21,  92 => 20,  87 => 19,  84 => 18,  68 => 16,  65 => 15,  49 => 13,  47 => 12,  42 => 11,  38 => 10,  32 => 7,  25 => 3,  21 => 2,  19 => 1,);
    }
}
