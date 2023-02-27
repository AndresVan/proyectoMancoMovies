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

/* themes/contrib/business/templates/menu--main.html.twig */
class __TwigTemplate_d0c3e989141b8065cbced4a5e59e74619aad234852a910d7a3a5867a431528f8 extends \Twig\Template
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
        // line 10
        echo "
";
        // line 12
        echo "<div class=\"navbar\">
  <div class=\"navbar-header pull-right\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <div class=\"collapse navbar-collapse\">
      ";
        // line 20
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 21
        echo "      ";
        // line 25
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 25, $context, $this->getSourceContext()));
        echo "

      ";
        // line 55
        echo "
    </div>
  </div>
</div>
";
    }

    // line 27
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 28
            echo "        ";
            $macros["menus"] = $this;
            // line 29
            echo "        ";
            if (($context["items"] ?? null)) {
                // line 30
                echo "          ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 31
                    echo "            <ul class=\"nav navbar-nav\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
          ";
                } else {
                    // line 33
                    echo "            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
          ";
                }
                // line 35
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 36
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 36)) {
                        // line 37
                        echo "              ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 38
                            echo "                <li class=\"dropdown\">
                  <a href=\"";
                            // line 39
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                            echo "\" class=\"dropdown-toggle\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                            echo " <span class=\"caret\"></span></a>
                  ";
                            // line 40
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 40), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 40, $context, $this->getSourceContext()));
                            echo "
                </li>
              ";
                        } else {
                            // line 43
                            echo "                <li class=\"dropdown-submenu\">
                  <a href=\"";
                            // line 44
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                            echo "\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                            echo "</a>
                  ";
                            // line 45
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 45), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 45, $context, $this->getSourceContext()));
                            echo "
                </li>
              ";
                        }
                        // line 48
                        echo "            ";
                    } else {
                        // line 49
                        echo "              <li ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), 49, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), 49, $this->source)), "html", null, true);
                        echo "</li>
            ";
                    }
                    // line 51
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "          </ul>
        ";
            }
            // line 54
            echo "      ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/business/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 54,  160 => 52,  154 => 51,  146 => 49,  143 => 48,  137 => 45,  131 => 44,  128 => 43,  122 => 40,  116 => 39,  113 => 38,  110 => 37,  107 => 36,  102 => 35,  98 => 33,  94 => 31,  91 => 30,  88 => 29,  85 => 28,  70 => 27,  62 => 55,  56 => 25,  54 => 21,  52 => 20,  42 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/business/templates/menu--main.html.twig", "/var/www/html/web/themes/contrib/business/templates/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 20, "macro" => 27, "if" => 29, "for" => 35);
        static $filters = array("escape" => 39);
        static $functions = array("link" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link']
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
