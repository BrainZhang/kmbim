<?php

/* TopxiaWebBundle:Default:foot-navigation.html.twig */
class __TwigTemplate_553aa300ecdebb07eb941ac6877304de811ebfd4affdd846d445233cfd360fff extends Twig_Template
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
        echo "<ul class=\"site-footer-links\">
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigations"]) ? $context["navigations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 3
            echo "\t  ";
            if ($this->getAttribute($context["nav"], "isOpen", array())) {
                // line 4
                echo "\t\t  <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute($context["nav"], "url", array())), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["nav"], "isNewWin", array())) {
                    echo "target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nav"], "name", array()), "html", null, true);
                echo "</a></li>
\t\t";
            }
            // line 6
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:foot-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  41 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
