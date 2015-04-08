<?php

/* TopxiaAdminBundle:App:installed.html.twig */
class __TwigTemplate_23681e7938499cc9667d4431e6e89371c0a5db16734fd612c26a12974dc8c767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:App:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:App:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "app/installed";
        // line 7
        $context["menu"] = "installed";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "已安装应用 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"page-header\">
    <h1>已安装应用</h1>
  </div>

  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th width=\"80%\">应用描述</th>
        <th width=\"10%\">开发者</th>
        <th width=\"10%\">操作</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 24
            echo "      <tr>
        <td>
          <div>
            <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
            echo "\">
              <strong class=\"text-primary\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
            echo " - </strong><span class=\"text-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "version", array()), "html", null, true);
            echo "</span>
            </a>

          </div>
          <div class=\"\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["app"], "description", array()), 100)), "html", null, true);
            echo "</div>
          <div class=\"text-muted\"><small>最后更新： ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["app"], "updatedTime", array()), "Y-m-d"), "html", null, true);
            echo "</small></div>
        </td>
        <td>
          ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright($this->getAttribute($context["app"], "developerName", array())), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 39
            if ((twig_lower_filter($this->env, $this->getAttribute($context["app"], "code", array())) == "vip")) {
                // line 40
                echo "            <a href=\"../vip/list\" class=\"btn btn-primary\">管理</a>
          ";
            } elseif ((twig_lower_filter($this->env, $this->getAttribute($context["app"], "code", array())) == "coupon")) {
                // line 42
                echo "            <a href=\"../coupon\" class=\"btn btn-primary\">管理</a>
          ";
            } elseif ((twig_lower_filter($this->env, $this->getAttribute($context["app"], "code", array())) == "questionplus")) {
                // line 44
                echo "            <a href=\"../question/plumber/setting\" class=\"btn btn-primary\">管理</a>
          ";
            } elseif (twig_in_filter(twig_lower_filter($this->env, $this->getAttribute($context["app"], "code", array())), array(0 => "homework", 1 => "materiallib"))) {
                // line 46
                echo "          ";
            } elseif (((twig_lower_filter($this->env, $this->getAttribute($context["app"], "code", array())) != "main") && ($this->getAttribute($context["app"], "type", array()) == "plugin"))) {
                // line 47
                echo "            <a href=\"../";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["app"], "code", array())), "html", null, true);
                echo "/index\" class=\"btn btn-primary\">管理</a>
          ";
            }
            // line 49
            echo "
          ";
            // line 50
            if (($this->env->getExtension('topxia_web_twig')->getSetting("developer.debug") && (twig_lower_filter($this->env, $this->getAttribute($context["app"], "code", array())) != "main"))) {
                // line 51
                echo "            <a href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_uninstall", array("code" => $this->getAttribute($context["app"], "code", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger uninstall-btn\">卸载</a>
          ";
            }
            // line 53
            echo "        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:installed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 56,  130 => 53,  124 => 51,  122 => 50,  119 => 49,  113 => 47,  110 => 46,  106 => 44,  102 => 42,  98 => 40,  96 => 39,  90 => 36,  84 => 33,  80 => 32,  71 => 28,  67 => 27,  62 => 24,  58 => 23,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
