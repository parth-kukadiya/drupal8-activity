<?php

/* core/modules/system/templates/form-element.html.twig */
class __TwigTemplate_4a3f2bc20393f445e34737f03aaa4a8ca506c0974bf57cf1b74ad37d19bb05ba extends Twig_Template
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
        $tags = array("set" => 50, "if" => 68);
        $filters = array("clean_class" => 53);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 50
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 53
($context["type"] ?? null))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["name"] ?? null))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 55
($context["name"] ?? null))), 5 => ((!twig_in_filter(        // line 56
($context["title_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 6 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 7 => ((        // line 58
($context["errors"] ?? null)) ? ("form-item--error") : ("")));
        // line 62
        $context["description_classes"] = array(0 => "description", 1 => (((        // line 64
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 67
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 68
        if (twig_in_filter(($context["label_display"] ?? null), array(0 => "before", 1 => "invisible"))) {
            // line 69
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 71
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 72
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "</span>
  ";
        }
        // line 74
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 75
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 76
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 79
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
  ";
        // line 80
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 81
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "</span>
  ";
        }
        // line 83
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 84
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 86
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 87
            echo "    <div class=\"form-item--error-message\">
      ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 91
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible")) && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 92
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">
      ";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 96
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 96,  132 => 93,  127 => 92,  124 => 91,  118 => 88,  115 => 87,  112 => 86,  106 => 84,  103 => 83,  97 => 81,  95 => 80,  90 => 79,  84 => 76,  79 => 75,  76 => 74,  70 => 72,  67 => 71,  61 => 69,  59 => 68,  54 => 67,  52 => 64,  51 => 62,  49 => 58,  48 => 57,  47 => 56,  46 => 55,  45 => 54,  44 => 53,  43 => 50,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/modules/system/templates/form-element.html.twig", "C:\\wamp64\\www\\drupal-8.6.7\\core\\modules\\system\\templates\\form-element.html.twig");
    }
}
