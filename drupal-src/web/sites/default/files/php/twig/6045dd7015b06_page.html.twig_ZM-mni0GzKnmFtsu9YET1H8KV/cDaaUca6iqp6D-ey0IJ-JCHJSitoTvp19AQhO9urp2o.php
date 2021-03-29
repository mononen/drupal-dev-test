<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/omega/omega/templates/page.html.twig */
class __TwigTemplate_d68db73c915332864055667ff401069e88c915e0dd4b80b3fad9a7c536fea873 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 87];
        $filters = ["escape" => 77];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 76
        echo "<div id=\"page-wrapper\" class=\"clearfix\">
  <div id=\"page\" class=\"clearfix ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_classes"] ?? null)), "html", null, true);
        echo "\">

    <header id=\"header-outer-wrapper\" class=\"outer-wrapper clearfix ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["secondary_menu"] ?? null)) ? ("with-secondary-menu") : ("without-secondary-menu")));
        echo "\" role=\"banner\">
      <div id=\"header-layout\" class=\"";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_classes"] ?? null), "header", [])), "html", null, true);
        echo " inner-wrapper clearfix\">
        ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
      </div>
    </header> <!-- /.section, /#header-->
  
    <section id=\"core-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"core-layout\" class=\"";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_classes"] ?? null), "core", [])), "html", null, true);
        echo " inner-wrapper clearfix\">
        ";
        // line 87
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 88
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        ";
        }
        // line 90
        echo "      </div>
    </section>
    
    ";
        // line 93
        if (((($this->getAttribute(($context["page"] ?? null), "preface_first", []) || $this->getAttribute(($context["page"] ?? null), "preface_second", [])) || $this->getAttribute(($context["page"] ?? null), "preface_third", [])) || $this->getAttribute(($context["page"] ?? null), "preface_fourth", []))) {
            // line 94
            echo "    <section id=\"preface-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"preface-layout\" class=\"";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_classes"] ?? null), "preface", [])), "html", null, true);
            echo " inner-wrapper clearfix\">
        
        ";
            // line 97
            if ($this->getAttribute(($context["page"] ?? null), "preface_first", [])) {
                // line 98
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_first", [])), "html", null, true);
                echo "
        ";
            }
            // line 100
            echo "        
        ";
            // line 101
            if ($this->getAttribute(($context["page"] ?? null), "preface_second", [])) {
                // line 102
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_second", [])), "html", null, true);
                echo "
        ";
            }
            // line 104
            echo "        
        ";
            // line 105
            if ($this->getAttribute(($context["page"] ?? null), "preface_third", [])) {
                // line 106
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_third", [])), "html", null, true);
                echo "
        ";
            }
            // line 108
            echo "        
        ";
            // line 109
            if ($this->getAttribute(($context["page"] ?? null), "preface_fourth", [])) {
                // line 110
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_fourth", [])), "html", null, true);
                echo "
        ";
            }
            // line 112
            echo "        
      </div><!-- /#preface-layout -->
    </section> <!-- /#preface-wrapper -->
    ";
        }
        // line 116
        echo "
    <section id=\"content-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"main-layout\" class=\"";
        // line 118
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_classes"] ?? null), "main", [])), "html", null, true);
        echo " inner-wrapper clearfix\">
        
        ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 121
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
        ";
        }
        // line 122
        echo "  
    
        ";
        // line 124
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 125
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        ";
        }
        // line 127
        echo "    
        ";
        // line 128
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 129
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        ";
        }
        // line 131
        echo "    
      </div><!-- /#main -->
    </section><!-- /#main-outer-wrapper -->
  
    ";
        // line 135
        if (((($this->getAttribute(($context["page"] ?? null), "postscript_first", []) || $this->getAttribute(($context["page"] ?? null), "postscript_second", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_third", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_fourth", []))) {
            // line 136
            echo "    <section id=\"postscript-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"postscript-layout\" class=\"";
            // line 137
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_classes"] ?? null), "postscript", [])), "html", null, true);
            echo " inner-wrapper clearfix\">
        
        ";
            // line 139
            if ($this->getAttribute(($context["page"] ?? null), "postscript_first", [])) {
                // line 140
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_first", [])), "html", null, true);
                echo "
        ";
            }
            // line 142
            echo "        
        ";
            // line 143
            if ($this->getAttribute(($context["page"] ?? null), "postscript_second", [])) {
                // line 144
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_second", [])), "html", null, true);
                echo "
        ";
            }
            // line 146
            echo "        
        ";
            // line 147
            if ($this->getAttribute(($context["page"] ?? null), "postscript_third", [])) {
                // line 148
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_third", [])), "html", null, true);
                echo "
        ";
            }
            // line 150
            echo "        
        ";
            // line 151
            if ($this->getAttribute(($context["page"] ?? null), "postscript_fourth", [])) {
                // line 152
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_fourth", [])), "html", null, true);
                echo "
        ";
            }
            // line 154
            echo "        
      </div><!-- /#postscript-layout -->
    </section> <!-- /#postscript-outer-wrapper -->
    ";
        }
        // line 158
        echo "    
    ";
        // line 159
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 160
            echo "    <footer id=\"footer-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"footer-layout\" role=\"contentinfo\" class=\"";
            // line 161
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_classes"] ?? null), "footer", [])), "html", null, true);
            echo " inner-wrapper clearfix\">
        ";
            // line 162
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div> <!-- /#footer -->
    </footer> <!-- /#footer-outer-wrapper -->
    ";
        }
        // line 166
        echo "</div></div> <!-- /#page, /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/omega/omega/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 166,  268 => 162,  264 => 161,  261 => 160,  259 => 159,  256 => 158,  250 => 154,  244 => 152,  242 => 151,  239 => 150,  233 => 148,  231 => 147,  228 => 146,  222 => 144,  220 => 143,  217 => 142,  211 => 140,  209 => 139,  204 => 137,  201 => 136,  199 => 135,  193 => 131,  187 => 129,  185 => 128,  182 => 127,  176 => 125,  174 => 124,  170 => 122,  164 => 121,  162 => 120,  157 => 118,  153 => 116,  147 => 112,  141 => 110,  139 => 109,  136 => 108,  130 => 106,  128 => 105,  125 => 104,  119 => 102,  117 => 101,  114 => 100,  108 => 98,  106 => 97,  101 => 95,  98 => 94,  96 => 93,  91 => 90,  85 => 88,  83 => 87,  79 => 86,  71 => 81,  67 => 80,  63 => 79,  58 => 77,  55 => 76,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/omega/omega/templates/page.html.twig", "/app/web/themes/contrib/omega/omega/templates/page.html.twig");
    }
}
