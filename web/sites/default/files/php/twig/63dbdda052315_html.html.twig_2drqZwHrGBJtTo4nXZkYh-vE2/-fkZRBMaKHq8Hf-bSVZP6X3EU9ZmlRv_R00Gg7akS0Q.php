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

/* themes/contrib/tara/templates/layout/html.html.twig */
class __TwigTemplate_a5f9301fbbdb58b0b30578943e7e245023f3f4f669cc144b23567a068ed568b4 extends \Twig\Template
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
        // line 27
        $context["body_classes"] = [0 => ((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("user-guest")), 1 => (( !        // line 29
($context["root_path"] ?? null)) ? ("frontpage") : (("inner-page path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), 2 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), 3 => ((( !twig_get_attribute($this->env, $this->source,         // line 31
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 31) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 31))) ? ("no-sidebar") : ("")), 4 => (((twig_get_attribute($this->env, $this->source,         // line 32
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 32) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 32))) ? ("one-sidebar sidebar-left") : ("")), 5 => (((twig_get_attribute($this->env, $this->source,         // line 33
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 33))) ? ("one-sidebar sidebar-right") : ("")), 6 => (((twig_get_attribute($this->env, $this->source,         // line 34
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 34) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34))) ? ("two-sidebar") : (""))];
        // line 37
        echo "<!DOCTYPE html>
<html";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 38, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 40, $this->source));
        echo "\">
    <title>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 41, $this->source), " | "));
        echo "</title>
    ";
        // line 42
        if ((($context["google_font"] ?? null) == "local")) {
            // line 43
            echo "    <link rel=\"preload\" as=\"font\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 43, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 43, $this->source)), "html", null, true);
            echo "/fonts/open-sans.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 44, $this->source)), "html", null, true);
            echo "/fonts/roboto.woff2\" type=\"font/woff2\" crossorigin>
    ";
        }
        // line 46
        echo "    <css-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 46, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 47, $this->source));
        echo "\">
";
        // line 48
        if (($context["css_extra"] ?? null)) {
            // line 49
            echo "<style>
";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_code"] ?? null), 50, $this->source), "html", null, true);
            echo "
</style>
";
        }
        // line 53
        echo "  </head>
  <body";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
        echo ">
    ";
        // line 59
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 62, $this->source), "html", null, true);
        echo "
    ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 63, $this->source), "html", null, true);
        echo "
    ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 64, $this->source), "html", null, true);
        echo "
    ";
        // line 65
        if ((($context["google_font"] ?? null) == "googlecdn")) {
            // line 66
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/googlefontscdn"), "html", null, true);
            echo "
    ";
        } elseif ((        // line 67
($context["google_font"] ?? null) == "local")) {
            // line 68
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/googlefontslocal"), "html", null, true);
            echo "
    ";
        }
        // line 70
        echo "    <js-bottom-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 70, $this->source));
        echo "\">
";
        // line 71
        $this->loadTemplate("@tara/template-parts/settings.html.twig", "themes/contrib/tara/templates/layout/html.html.twig", 71)->display($context);
        // line 72
        if ((($context["slider_show"] ?? null) && ($context["is_front"] ?? null))) {
            echo "\t
<script>
jQuery(document).ready(function (\$) {
\$('.home-slider').owlCarousel({
  items: 1,
  loop: true,
  autoplay: true,
  nav: false,
  dots: ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_dots"] ?? null), 80, $this->source), "html", null, true);
            echo ",
  autoplayTimeout: ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_time"] ?? null), 81, $this->source), "html", null, true);
            echo ",
});
});
</script>
";
        }
        // line 86
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/tara/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 86,  160 => 81,  156 => 80,  145 => 72,  143 => 71,  138 => 70,  132 => 68,  130 => 67,  125 => 66,  123 => 65,  119 => 64,  115 => 63,  111 => 62,  106 => 60,  103 => 59,  99 => 54,  96 => 53,  90 => 50,  87 => 49,  85 => 48,  81 => 47,  76 => 46,  71 => 44,  66 => 43,  64 => 42,  60 => 41,  56 => 40,  51 => 38,  48 => 37,  46 => 34,  45 => 33,  44 => 32,  43 => 31,  42 => 30,  41 => 29,  40 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/tara/templates/layout/html.html.twig", "/var/www/html/web/themes/contrib/tara/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 42, "include" => 71);
        static $filters = array("clean_class" => 29, "escape" => 38, "raw" => 40, "safe_join" => 41, "t" => 60);
        static $functions = array("attach_library" => 66);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
                ['attach_library']
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
