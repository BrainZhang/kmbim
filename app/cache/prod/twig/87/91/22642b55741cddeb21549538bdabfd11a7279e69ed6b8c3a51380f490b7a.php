<?php

/* TopxiaAdminBundle:Default:cloud-notice.html.twig */
class __TwigTemplate_879122642b55741cddeb21549538bdabfd11a7279e69ed6b8c3a51380f490b7a extends Twig_Template
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
        $context["admin_macro"] = $this->env->loadTemplate("TopxiaAdminBundle::macro.html.twig");
        // line 2
        echo "  ";
        if ((isset($context["notices"]) ? $context["notices"] : null)) {
            // line 3
            echo "  <div class=\"col-md-12\">
    <div class=\"main-system-alert\">
      <h2> 站长公告</h2>
        <ul class=\"alert-list\">
        ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 8
                echo "          <li class=\"glyphicon glyphicon-bell\" style=\"color:#fed032;font-size:16px;\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "detailUrl", array()), "html", null, true);
                echo "\" style=\"margin-left:22px;\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "content", array()), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notice"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </ul>
    </div>
  </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:cloud-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  34 => 8,  30 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
