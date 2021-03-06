<?php

/* TopxiaAdminBundle:Navigation:tbody.html.twig */
class __TwigTemplate_7c5142e08381e78d55678d444541cd6a95fc47654a709cbf3a832ad46c46e4b0 extends Twig_Template
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
        echo "<tbody data-update-seqs-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_navigation_seqs_update");
        echo "\">
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigations"]) ? $context["navigations"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["navigation"]) {
            // line 3
            echo "\t\t<tr class=\"";
            if (($this->getAttribute($context["navigation"], "parentId", array()) == 0)) {
                echo " has-subItems ";
            } else {
                echo " child ";
            }
            echo "\" id=\"navigations-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\" data-parent-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "parentId", array()), "html", null, true);
            echo "\">
\t\t  <td style=\"vertical-align: middle;\">
        ";
            // line 5
            if (($this->getAttribute($context["navigation"], "parentId", array()) == 0)) {
                // line 6
                echo "          <span class=\"glyphicon glyphicon-resize-vertical\"></span>
        ";
            }
            // line 8
            echo "        ";
            if (($this->getAttribute($context["navigation"], "parentId", array()) > 0)) {
                echo "<span class=\"indentation\">&nbsp;&nbsp;&nbsp;&nbsp; └─</span>";
            }
            // line 9
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute($context["navigation"], "url", array())), "html", null, true);
            echo "\" target=\"_blank\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "name", array()), "html", null, true);
            echo " </a>
      </td>
\t\t  <td>
\t\t\t\t";
            // line 12
            if (($this->getAttribute($context["navigation"], "isNewWin", array()) == 0)) {
                echo "否";
            } else {
                echo "是";
            }
            // line 13
            echo "  \t\t</td>
\t\t  <td>
        ";
            // line 15
            if (($this->getAttribute($context["navigation"], "isOpen", array()) == 1)) {
                echo "开启";
            } else {
                echo "关闭";
            }
            // line 16
            echo "  \t\t</td>
\t\t  <td>
        ";
            // line 18
            if ((($this->getAttribute($context["navigation"], "type", array()) == "top") && ($this->getAttribute($context["navigation"], "parentId", array()) == 0))) {
                // line 19
                echo "\t        <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_create", array("type" => $this->getAttribute($context["navigation"], "type", array()), "parentId" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\">添加二级导航</button>
        ";
            }
            // line 21
            echo "          <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_update", array("id" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">编辑</button>
\t        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_delete", array("id" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\">删除</button>
\t\t   </td>
\t\t </tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">暂无导航记录</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navigation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
</tbody>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  109 => 26,  98 => 22,  93 => 21,  87 => 19,  85 => 18,  81 => 16,  75 => 15,  71 => 13,  65 => 12,  56 => 9,  51 => 8,  47 => 6,  45 => 5,  29 => 3,  24 => 2,  19 => 1,);
    }
}
