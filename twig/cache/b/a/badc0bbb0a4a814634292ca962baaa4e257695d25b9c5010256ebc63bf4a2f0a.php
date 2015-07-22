<?php

/* content/admin/type-edit.html */
class __TwigTemplate_badc0bbb0a4a814634292ca962baaa4e257695d25b9c5010256ebc63bf4a2f0a extends Twig_Template
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
        $this->loadTemplate("content/admin/head.html", "content/admin/type-edit.html", 1)->display($context);
        // line 2
        $context["i"] = (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "type", array()), "data", array())) + 1);
        // line 3
        echo twig_var_dump($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "type", array()), "data", array()));
        echo "
<form action=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/admin/type/update\" method=\"post\">
    <div class=\"row\">
        <label for=\"name\">Name:</label><br />
        <input type=\"text\" name=\"name\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "type", array()), "name", array()), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "type", array()), "data", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 10
            echo "    ";
            $this->loadTemplate("content/admin/type-edit-row.html", "content/admin/type-edit.html", 10)->display(array_merge($context, array("id" => $context["key"])));
            // line 11
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <div id=\"newPropertyContainer\">
        <h3>add property</h3>
        ";
        // line 14
        $this->loadTemplate("content/admin/type-edit-row.html", "content/admin/type-edit.html", 14)->display(array_merge($context, array("id" => (isset($context["i"]) ? $context["i"] : null))));
        // line 15
        echo "    </div>
    <div class=\"row\">
        <a class=\"newProperty md-col-4 btn btn-primary\" id=\"newPropertyLink\">add another</a>
    </div>
    <div class=\"row\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "type", array()), "id", array()), "html", null, true);
        echo "\" />
        <input type=\"submit\" value=\"save\" />
    </div>
</form>
<script>
    var newPropertyID = parseInt(";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
        echo ") + 1;
    \$('#newPropertyLink').click(function () {

        \$.ajax({
            url : \"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/admin/type/property-row\",
            data : {
                \"id\" : newPropertyID
            }
        }).done( function (data) {
            \$('#newPropertyContainer').append(data);
            newPropertyID = newPropertyID + 1;
        });

    });

    \$('body').on('click', '.insertDefaultValueLink', function (e) {
        e.preventDefault();
        var defaultValueID = parseInt(\$(e.target).siblings('.defaultValuesSection').find('input.defaultValueInput').length) + 1,
                propertyID = parseInt(\$(e.target).closest('.propertyContainer').data('property-id'));
        \$.ajax({
            url : \$(e.target).attr('href'),
            data : {
                'defaultValueID' : defaultValueID,
                'id' : propertyID
            }
        }).done( function (data) {
            \$(e.target).siblings('.defaultValuesSection').append(data);
        })
    });
</script>
";
        // line 55
        $this->loadTemplate("content/admin/footer.html", "content/admin/type-edit.html", 55)->display($context);
    }

    public function getTemplateName()
    {
        return "content/admin/type-edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 55,  100 => 29,  93 => 25,  85 => 20,  78 => 15,  76 => 14,  72 => 12,  58 => 11,  55 => 10,  38 => 9,  33 => 7,  27 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
