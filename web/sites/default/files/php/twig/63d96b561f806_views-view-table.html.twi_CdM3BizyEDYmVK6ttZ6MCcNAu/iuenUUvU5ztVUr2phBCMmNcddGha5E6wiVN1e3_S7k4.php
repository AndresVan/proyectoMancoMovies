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

/* core/themes/olivero/templates/views/views-view-table.html.twig */
class __TwigTemplate_3211175ebd31a330ba82fabf6131b3dbdf887b8bf9df1519e9f42a9e9c64b0ba extends \Twig\Template
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
        // line 37
        $context["classes"] = [0 => "views-table", 1 => ("cols-" . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(        // line 39
($context["header"] ?? null), 39, $this->source))), 2 => ((        // line 40
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), 3 => ((        // line 41
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 44
        echo "<table";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ">
  ";
        // line 45
        if (($context["caption_needed"] ?? null)) {
            // line 46
            echo "    <caption>
    ";
            // line 47
            if (($context["caption"] ?? null)) {
                // line 48
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 48, $this->source), "html", null, true);
                echo "
    ";
            } else {
                // line 50
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 50, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 52
            echo "    ";
            if ( !twig_test_empty(($context["summary_element"] ?? null))) {
                // line 53
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary_element"] ?? null), 53, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 55
            echo "    </caption>
  ";
        }
        // line 57
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 58
            echo "    <thead>
      <tr>
        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 61
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 61)) {
                    // line 62
                    echo "            ";
                    // line 63
                    $context["column_classes"] = [0 => "views-field", 1 => ("views-field-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =                     // line 65
($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 65, $this->source))];
                    // line 68
                    echo "          ";
                }
                // line 69
                echo "          <th";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 69), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 69), "setAttribute", [0 => "scope", 1 => "col"], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                echo ">";
                // line 70
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 70)) {
                    // line 71
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                    echo ">";
                    // line 72
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 72)) {
                        // line 73
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        echo "\" rel=\"nofollow\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 75
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                    }
                    // line 77
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 79
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 79)) {
                        // line 80
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        echo "\" rel=\"nofollow\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 82
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                    }
                }
                // line 85
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "      </tr>
    </thead>
  ";
        }
        // line 90
        echo "  <tbody>
    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 92
            echo "      <tr";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo ">
        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 93));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 94
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 94)) {
                    // line 95
                    echo "            ";
                    // line 96
                    $context["column_classes"] = [0 => "views-field"];
                    // line 100
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 100));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 101
                        echo "              ";
                        $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 101, $this->source), [0 => ("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"], 101, $this->source))]);
                        // line 102
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "          ";
                }
                // line 104
                echo "          <td";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 104), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 104), 104, $this->source), "html", null, true);
                echo ">";
                // line 105
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 105)) {
                    // line 106
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 107));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 108
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "              </";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 112
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 112));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 113
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 116
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/views/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 120,  252 => 118,  245 => 116,  237 => 113,  233 => 112,  228 => 110,  218 => 108,  214 => 107,  209 => 106,  207 => 105,  203 => 104,  200 => 103,  194 => 102,  191 => 101,  186 => 100,  184 => 96,  182 => 95,  179 => 94,  175 => 93,  170 => 92,  166 => 91,  163 => 90,  158 => 87,  151 => 85,  146 => 82,  136 => 80,  134 => 79,  129 => 77,  125 => 75,  115 => 73,  113 => 72,  109 => 71,  107 => 70,  103 => 69,  100 => 68,  98 => 65,  97 => 63,  95 => 62,  92 => 61,  88 => 60,  84 => 58,  81 => 57,  77 => 55,  71 => 53,  68 => 52,  62 => 50,  56 => 48,  54 => 47,  51 => 46,  49 => 45,  44 => 44,  42 => 41,  41 => 40,  40 => 39,  39 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/views/views-view-table.html.twig", "/var/www/html/web/core/themes/olivero/templates/views/views-view-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 37, "if" => 45, "for" => 60);
        static $filters = array("length" => 39, "escape" => 44, "merge" => 101);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
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
