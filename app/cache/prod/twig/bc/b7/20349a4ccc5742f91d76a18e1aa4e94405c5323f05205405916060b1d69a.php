<?php

/* TopxiaWebBundle:Default:top-navigation.html.twig */
class __TwigTemplate_bcb720349a4ccc5742f91d76a18e1aa4e94405c5323f05205405916060b1d69a extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav\">
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigations"]) ? $context["navigations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 3
            echo "    ";
            if ($this->getAttribute($context["nav"], "isOpen", array())) {
                // line 4
                echo "    ";
                $context["subNavs"] = (($this->getAttribute($context["nav"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", array()), array())) : (array()));
                // line 5
                echo "      <li class=\"";
                if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
                    echo " dropdown ";
                }
                if (((isset($context["siteNav"]) ? $context["siteNav"] : null) && ((isset($context["siteNav"]) ? $context["siteNav"] : null) == $this->getAttribute($context["nav"], "url", array())))) {
                    echo "active ";
                }
                echo "\">
        <a href=\"";
                // line 6
                if ($this->getAttribute($context["nav"], "url", array())) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute($context["nav"], "url", array())), "html", null, true);
                } else {
                    echo "javascript:;";
                }
                echo "\" class=\"";
                if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
                    echo " dropdown-toggle ";
                }
                echo "\" ";
                if ($this->getAttribute($context["nav"], "isNewWin", array())) {
                    echo "target=\"_blank\"";
                }
                echo " ";
                if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
                    echo " data-toggle=\"dropdown\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "name", array()), "html", null, true);
                echo " ";
                if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
                    echo " <b class=\"caret\"></b>";
                }
                echo "</a>
        ";
                // line 7
                if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
                    // line 8
                    echo "          <ul class=\"dropdown-menu\">
            ";
                    // line 9
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["subNavs"]) ? $context["subNavs"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["subNav"]) {
                        // line 10
                        echo "              ";
                        if ($this->getAttribute($context["subNav"], "isOpen", array())) {
                            // line 11
                            echo "              <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute($context["subNav"], "url", array())), "html", null, true);
                            echo "\"  ";
                            if ($this->getAttribute($context["subNav"], "isNewWin", array())) {
                                echo "target=\"_blank\"";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["subNav"], "name", array()), "html", null, true);
                            echo "</a></li>
              ";
                        }
                        // line 13
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subNav'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "          </ul>
        ";
                }
                // line 16
                echo "      </li>
    ";
            }
            // line 18
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:top-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 19,  106 => 18,  102 => 16,  98 => 14,  92 => 13,  80 => 11,  77 => 10,  73 => 9,  70 => 8,  68 => 7,  42 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
