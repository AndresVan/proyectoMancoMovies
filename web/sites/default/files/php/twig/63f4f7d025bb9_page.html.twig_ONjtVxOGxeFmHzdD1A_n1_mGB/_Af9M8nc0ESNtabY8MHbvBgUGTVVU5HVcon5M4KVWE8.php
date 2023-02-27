<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/business/templates/page.html.twig */
class __TwigTemplate_cdb266308315928c6111718fd452553b0f81a0e29d391cb7a45d2aaced1db7a8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "<div id=\"page-wrapper\" class=\"container\">

  <header role=\"banner\" id=\"header\" class=\"clearfix\">
    ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
  </header>

  ";
        // line 80
        echo "  ";
        if (($context["slider"] ?? null)) {
            // line 81
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 84
                echo "          <li>
            <a href=\"";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "url", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "\"><img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "src", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "\"></a>
            <p class=\"flex-caption\">";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "</p>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "      </ul>
    </div>
  ";
        }
        // line 92
        echo "
  ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homequotes", [], "any", false, false, true, 93)) {
            // line 94
            echo "    <div id=\"home-quote\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homequotes", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "</div>
  ";
        }
        // line 96
        echo "
  ";
        // line 98
        echo "  ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high1", [], "any", false, false, true, 98) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high2", [], "any", false, false, true, 98)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high3", [], "any", false, false, true, 98))) {
            // line 99
            echo "    <div id=\"home-highlights\" class=\"row\">
      ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high1", [], "any", false, false, true, 100)) {
                // line 101
                echo "        <div class=\"home-high-1 col-md-4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high1", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 103
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high2", [], "any", false, false, true, 103)) {
                // line 104
                echo "        <div class=\"home-high-2 col-md-4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high2", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 106
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high3", [], "any", false, false, true, 106)) {
                // line 107
                echo "        <div class=\"home-high-3 col-md-4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_high3", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 109
            echo "    </div>
  ";
        }
        // line 111
        echo "
  <main id=\"main\" class=\"clearfix\">
    ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 113)) {
            // line 114
            echo "      <div id=\"sidebar-first\" class=\"sidebar ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 114, $this->source), "html", null, true);
            echo "\" role=\"complementary\">
        ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "
      </div> <!-- /#sidebar-first -->
    ";
        }
        // line 118
        echo "
    <div class=\"";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 119, $this->source), "html", null, true);
        echo "\" role=\"main\">
      ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 120)) {
            // line 121
            echo "        <div id=\"content_top\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 123
        echo "
      ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "

    </div>";
        // line 127
        echo "
    ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 128)) {
            // line 129
            echo "      <div id=\"sidebar-second\" class=\"sidebar ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 129, $this->source), "html", null, true);
            echo "\" role=\"complementary\">
        ";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "
      </div> <!-- /#sidebar-first -->
    ";
        }
        // line 133
        echo "
  </main>

  ";
        // line 137
        echo "  ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 137) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 137)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 137)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 137))) {
            // line 138
            echo "    <div id=\"footer-saran\" class=\"row\">
      <div id=\"footer-wrap\">
        ";
            // line 140
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 140)) {
                // line 141
                echo "          <div class=\"footer-1 col-md-3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 143
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 143)) {
                // line 144
                echo "          <div class=\"footer-2 col-md-3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 146
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 146)) {
                // line 147
                echo "          <div class=\"footer-3 col-md-3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 149
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 149)) {
                // line 150
                echo "          <div class=\"footer-4 col-md-3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 152
            echo "      </div>
    </div>
    <div class=\"clear\"></div>
  ";
        }
        // line 156
        echo "
  ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 157)) {
            // line 158
            echo "    <footer role=\"contentinfo\">
      ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 162
        echo "
  <div class=\"clear\"></div>
  <div id=\"copyright\">
  ";
        // line 165
        if (twig_get_attribute($this->env, $this->source, ($context["copyright"] ?? null), "footer_copyright", [], "any", false, false, true, 165)) {
            // line 166
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["copyright"] ?? null), "footer_copyright", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 168
        echo "
  <span class=\"credits\">Developed by <a href=\"http://dropthemes.in\" target=\"_blank\">Dropthemes.in</a> and <a href=\"http://www.devsaran.com\" target=\"_blank\">Devsaran</a>.</span>

  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/business/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 168,  264 => 166,  262 => 165,  257 => 162,  251 => 159,  248 => 158,  246 => 157,  243 => 156,  237 => 152,  231 => 150,  228 => 149,  222 => 147,  219 => 146,  213 => 144,  210 => 143,  204 => 141,  202 => 140,  198 => 138,  195 => 137,  190 => 133,  184 => 130,  179 => 129,  177 => 128,  174 => 127,  169 => 124,  166 => 123,  160 => 121,  158 => 120,  154 => 119,  151 => 118,  145 => 115,  140 => 114,  138 => 113,  134 => 111,  130 => 109,  124 => 107,  121 => 106,  115 => 104,  112 => 103,  106 => 101,  104 => 100,  101 => 99,  98 => 98,  95 => 96,  89 => 94,  87 => 93,  84 => 92,  79 => 89,  70 => 86,  64 => 85,  61 => 84,  57 => 83,  53 => 81,  50 => 80,  44 => 76,  39 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/business/templates/page.html.twig", "/var/www/html/web/themes/contrib/business/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 80, "for" => 83);
        static $filters = array("escape" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
