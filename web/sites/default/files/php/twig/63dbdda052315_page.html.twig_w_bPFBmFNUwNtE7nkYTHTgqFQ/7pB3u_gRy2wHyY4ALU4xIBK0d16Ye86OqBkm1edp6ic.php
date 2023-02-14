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

/* themes/contrib/danland/templates/page.html.twig */
class __TwigTemplate_b6de5afc641602d14d20650a50a1a4108004a518b75acdcc7d46923441ccdecd extends \Twig\Template
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
        // line 2
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["danland_layout"] ?? null), 2, $this->source), "html", null, true);
        echo ">

  <div id=\"header\">
    <div id=\"header-wrapper\">

      ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "

      ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 9)) {
            // line 10
            echo "        <div id=\"search-box\">
          ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
        </div><!-- /search-box -->
      ";
        }
        // line 14
        echo "
      ";
        // line 15
        if (($context["feed_icons"] ?? null)) {
            // line 16
            echo "        <div class=\"feed-wrapper\">
          ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 17, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 20
        echo "
    </div><!-- end header-wrapper -->
  </div> <!-- /header -->

  <div style=\"clear:both\"></div>

  <div id=\"menu\" class=\"clearfix\">
      ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 27)) {
            // line 28
            echo "        <div id=\"nav\">
          ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 32
        echo "  </div> <!-- end menu -->

  <div style=\"clear:both\"></div>

  ";
        // line 36
        if (($context["is_front"] ?? null)) {
            // line 37
            echo "    <div id=\"slideshow-wrapper\">
      <div class=\"slideshow-inner\">
        ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface", [], "any", false, false, true, 39)) {
                // line 40
                echo "          <div id=\"slideshow-preface\">
            <div id=\"preface\">
              ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "
            </div><!-- end preface -->
          </div>
        ";
            }
            // line 46
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 46)) {
                // line 47
                echo "          <div id=\"slideshow-bottom\">
            <div id=\"mission\">";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "</div>
          </div>
        ";
            }
            // line 51
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 51)) {
                // line 52
                echo "          <div class=\"custom-slideshow\">
            ";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "
          </div>
\t\t";
            } else {
                // line 56
                echo "          <div class=\"slideshow\">
            <img src=\"";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide1_image"] ?? null), 57, $this->source), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" />
            <img src=\"";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide2_image"] ?? null), 58, $this->source), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" />
            <img src=\"";
                // line 59
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide3_image"] ?? null), 59, $this->source), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" />
          </div>
        ";
            }
            // line 62
            echo "      </div>
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface_first", [], "any", false, false, true, 66) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface_middle", [], "any", false, false, true, 66)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface_last", [], "any", false, false, true, 66))) {
            // line 67
            echo "    <div style=\"clear:both\"></div>
    <div id=\"preface-wrapper\" ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["danland_preface"] ?? null), 68, $this->source), "html", null, true);
            echo ">
      ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface_first", [], "any", false, false, true, 69)) {
                // line 70
                echo "        <div class=\"column A\">
          ";
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface_first", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 74
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface_middle", [], "any", false, false, true, 74)) {
                // line 75
                echo "        <div class=\"column B\">
          ";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface_middle", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 79
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface_last", [], "any", false, false, true, 79)) {
                // line 80
                echo "        <div class=\"column C\">
          ";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "preface_last", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 84
            echo "      <div style=\"clear:both\"></div>
    </div>
  ";
        }
        // line 87
        echo "
  <div style=\"clear:both\"></div>

  <div id=\"wrapper\">

    <div id=\"content\">

      <a id=\"main-content\"></a>
      ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 95)) {
            // line 96
            echo "        <div class=\"content-top\">
          ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 100
        echo "
      ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        echo "

      ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "

      ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 105, $this->source), "html", null, true);
        echo "

      ";
        // line 107
        if (($context["title"] ?? null)) {
            // line 108
            echo "        <h1 class=\"title\" id=\"page-title\">
          ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 109, $this->source), "html", null, true);
            echo "
        </h1>
      ";
        }
        // line 112
        echo "
      ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 113, $this->source), "html", null, true);
        echo "

      ";
        // line 115
        if (($context["tabs"] ?? null)) {
            // line 116
            echo "        <div class=\"tabs\">
          ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 117, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 120
        echo "
      ";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
        echo "

      ";
        // line 123
        if (($context["action_links"] ?? null)) {
            // line 124
            echo "        <ul class=\"action-links\">
          ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 125, $this->source), "html", null, true);
            echo "
        </ul>
      ";
        }
        // line 128
        echo "
      ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 129)) {
            // line 130
            echo "        <div class=\"content-middle\">
          ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 134
        echo "
      ";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 135)) {
            // line 136
            echo "        <div class=\"content-bottom\">
          ";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 140
        echo "
    </div> <!-- end content -->

    ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 143)) {
            // line 144
            echo "      <div id=\"sidebar-left\" class=\"column sidebar\">
        <div class=\"section\">
          ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
        </div>
      </div> <!-- end sidebar-first -->
    ";
        }
        // line 150
        echo "
    ";
        // line 151
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 151)) {
            // line 152
            echo "      <div id=\"sidebar-right\" class=\"column sidebar\">
        <div class=\"section\">
          ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
        </div>
      </div> <!-- end sidebar-second -->
    ";
        }
        // line 158
        echo "
    <div style=\"clear:both\"></div>

  </div> <!-- end wrapper -->


  ";
        // line 164
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 164) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_middle", [], "any", false, false, true, 164)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_last", [], "any", false, false, true, 164))) {
            // line 165
            echo "    <div style=\"clear:both\"></div>
    <div id=\"bottom-teaser\" ";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["danland_bottom_a"] ?? null), 166, $this->source), "html", null, true);
            echo ">
      ";
            // line 167
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 167)) {
                // line 168
                echo "        <div class=\"column A\">
          ";
                // line 169
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 172
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_middle", [], "any", false, false, true, 172)) {
                // line 173
                echo "        <div class=\"column B\">
          ";
                // line 174
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_middle", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 177
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_last", [], "any", false, false, true, 177)) {
                // line 178
                echo "        <div class=\"column C\">
          ";
                // line 179
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_last", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 182
            echo "      <div style=\"clear:both\"></div>
    </div> <!-- end bottom first etc. -->
  ";
        }
        // line 185
        echo "

  ";
        // line 187
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_1", [], "any", false, false, true, 187) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_2", [], "any", false, false, true, 187)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_3", [], "any", false, false, true, 187)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_4", [], "any", false, false, true, 187))) {
            // line 188
            echo "    <div style=\"clear:both\"></div><!-- Do not touch -->
    <div id=\"bottom-wrapper\" ";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["danland_bottom_b"] ?? null), 189, $this->source), "html", null, true);
            echo ">
      ";
            // line 190
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_1", [], "any", false, false, true, 190)) {
                // line 191
                echo "        <div class=\"column A\">
          ";
                // line 192
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_1", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 195
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_2", [], "any", false, false, true, 195)) {
                // line 196
                echo "        <div class=\"column B\">
          ";
                // line 197
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_2", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 200
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_3", [], "any", false, false, true, 200)) {
                // line 201
                echo "        <div class=\"column C\">
          ";
                // line 202
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_3", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 205
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_4", [], "any", false, false, true, 205)) {
                // line 206
                echo "        <div class=\"column D\">
          ";
                // line 207
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_4", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 210
            echo "      <div style=\"clear:both\"></div>
    </div><!-- end bottom -->
  ";
        }
        // line 213
        echo "
  <div style=\"clear:both\"></div>

  <div id=\"footer-wrapper\">
    ";
        // line 217
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 217)) {
            // line 218
            echo "      <div id=\"footer\">
        ";
            // line 219
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 222
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 222)) {
            // line 223
            echo "      <div id=\"secondary-menu\">
        ";
            // line 224
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 224), 224, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 227
        echo "  </div> <!-- end footer wrapper -->

  <div style=\"clear:both\"></div>

  <div id=\"notice\">
    <p>Theme by <a href=\"http://www.danetsoft.com\">Danetsoft</a> and <a href=\"http://www.danpros.com\">Danang Probo Sayekti</a> inspired by <a href=\"http://www.maksimer.no\">Maksimer</a></p>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/danland/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 227,  516 => 224,  513 => 223,  510 => 222,  504 => 219,  501 => 218,  499 => 217,  493 => 213,  488 => 210,  482 => 207,  479 => 206,  476 => 205,  470 => 202,  467 => 201,  464 => 200,  458 => 197,  455 => 196,  452 => 195,  446 => 192,  443 => 191,  441 => 190,  437 => 189,  434 => 188,  432 => 187,  428 => 185,  423 => 182,  417 => 179,  414 => 178,  411 => 177,  405 => 174,  402 => 173,  399 => 172,  393 => 169,  390 => 168,  388 => 167,  384 => 166,  381 => 165,  379 => 164,  371 => 158,  364 => 154,  360 => 152,  358 => 151,  355 => 150,  348 => 146,  344 => 144,  342 => 143,  337 => 140,  331 => 137,  328 => 136,  326 => 135,  323 => 134,  317 => 131,  314 => 130,  312 => 129,  309 => 128,  303 => 125,  300 => 124,  298 => 123,  293 => 121,  290 => 120,  284 => 117,  281 => 116,  279 => 115,  274 => 113,  271 => 112,  265 => 109,  262 => 108,  260 => 107,  255 => 105,  250 => 103,  245 => 101,  242 => 100,  236 => 97,  233 => 96,  231 => 95,  221 => 87,  216 => 84,  210 => 81,  207 => 80,  204 => 79,  198 => 76,  195 => 75,  192 => 74,  186 => 71,  183 => 70,  181 => 69,  177 => 68,  174 => 67,  172 => 66,  169 => 65,  164 => 62,  158 => 59,  154 => 58,  150 => 57,  147 => 56,  141 => 53,  138 => 52,  135 => 51,  129 => 48,  126 => 47,  123 => 46,  116 => 42,  112 => 40,  110 => 39,  106 => 37,  104 => 36,  98 => 32,  92 => 29,  89 => 28,  87 => 27,  78 => 20,  72 => 17,  69 => 16,  67 => 15,  64 => 14,  58 => 11,  55 => 10,  53 => 9,  48 => 7,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/danland/templates/page.html.twig", "/var/www/html/web/themes/contrib/danland/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
