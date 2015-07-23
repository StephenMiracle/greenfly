<?php

/* content/admin/type-edit-row.html */
class __TwigTemplate_7b8584d4afe395b3975a5f8ddeb46b444b117a7047c51cd8bde64e362724086c extends Twig_Template
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
        echo "
<div class='row propertyContainer' data-property-id='";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "'>
    <div class='col-md-6'>
        <label for='name'>Name:</label><br />
        <input type='text' name='data[";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "][name]' value='";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "name", array()), "html", null, true);
        echo "' />
    </div>
    <div class='col-md-2'>
        <label for='inputType'>Input Type:</label><br />
        <select name='data[";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "][inputType]'>
            <option value='";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "inputType", array()), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "inputType", array()), "html", null, true);
        echo "</option>
            <option value='text'>text</option>
            <option value='textarea'>textarea</option>
            <option value='select'>select</option>
            <option value='radio'>radio</option>
            <option value='text'>checkbox</option>
        </select>
    </div>
    <div class='col-md-2'>
        <label for='name'>Default Values:</label><br />
        <div class='defaultValuesSection' data-default-values-count='";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "defaultValues", array())), "html", null, true);
        echo "'>
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "defaultValues", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["defaultValue"]) {
            // line 22
            echo "            ";
            $this->loadTemplate("content/admin/default-value-input.html", "content/admin/type-edit-row.html", 22)->display(array_merge($context, array("defaultValueID" => $this->getAttribute($context["defaultValue"], "index", array()))));
            // line 23
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['defaultValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
        <a class='btn insertDefaultValueLink' href='";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/admin/type/default-value-input'>add default value</a>
    </div>
    <div class='col-md-2'>
        <input type='checkbox' name='data[";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "][required]' ";
        if (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "required", array()) == true)) {
            echo " checked ";
        }
        echo " />
        <label for='required'>Required</label>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "content/admin/type-edit-row.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  97 => 25,  94 => 24,  80 => 23,  77 => 22,  60 => 21,  56 => 20,  41 => 10,  37 => 9,  28 => 5,  22 => 2,  19 => 1,);
    }
}
