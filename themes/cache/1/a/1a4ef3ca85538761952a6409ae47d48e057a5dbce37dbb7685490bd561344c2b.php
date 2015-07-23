<?php

/* content/admin/index.html */
class __TwigTemplate_1a4ef3ca85538761952a6409ae47d48e057a5dbce37dbb7685490bd561344c2b extends Twig_Template
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
        $this->loadTemplate("content/admin/head.html", "content/admin/index.html", 1)->display($context);
        // line 2
        echo "    <h1>Content Editor</h1>
    <h2>Content Types</h2>
    <ul>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "types", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 6
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
            echo "/admin/type/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
            echo "</a> | <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
            echo "/admin/content/edit/0\">Add content</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        <li><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/admin/type/edit/0\">add new content type</a></li>
    </ul>

<h2>Latest Content</h2>

<ul>
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "contents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 15
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
            echo "/admin/content/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "name", array()), "html", null, true);
            echo "</a>
        <ul>";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "versions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 17
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
                echo "/admin/version/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "id", array()), "html", null, true);
                echo "/edit\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "name", array()), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            <li><a href=\"\">add new version</a></li>
        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </li>
</ul>

";
        // line 25
        $this->loadTemplate("content/admin/footer.html", "content/admin/index.html", 25)->display($context);
    }

    public function getTemplateName()
    {
        return "content/admin/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  93 => 22,  85 => 19,  72 => 17,  68 => 16,  59 => 15,  55 => 14,  45 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
