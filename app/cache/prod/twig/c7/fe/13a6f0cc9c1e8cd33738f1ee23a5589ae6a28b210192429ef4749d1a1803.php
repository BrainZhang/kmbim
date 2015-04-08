<?php

/* TopxiaAdminBundle:App:center.html.twig */
class __TwigTemplate_c7fe13a6f0cc9c1e8cd33738f1ee23a5589ae6a28b210192429ef4749d1a1803 extends Twig_Template
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
        $context["menu"] = "center";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "应用中心 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"page-header\">
    <h1>应用中心</h1>
  </div>
  ";
        // line 11
        if ((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), null)) : (null)) == "error")) {
            // line 12
            echo "    <div class=\"alert alert-danger\">AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">请修改设置。</a></div>
  ";
        } elseif ((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), null)) : (null)) == "unlink")) {
            // line 14
            echo "    <div class=\"alert alert-danger\">您的服务器无法连接到更新服务器，请检查网络连接状况。</div>
  ";
        } else {
            // line 16
            echo "  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>应用描述</th>
        <th>开发者</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 26
                echo "        ";
                $context["installedApp"] = (($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array"), null)) : (null));
                // line 27
                echo "      <tr>
        <td>
          <div>
            <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                echo "\"><strong class=\"text-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
                echo "</strong></a>
             - 
            <span class=\"text-info\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "latestVersion", array()), "html", null, true);
                echo "</span>
            ";
                // line 33
                if ($this->getAttribute($context["app"], "licensed", array())) {
                    // line 34
                    echo "              <span class=\"label label-warning\">商业版应用</span>
            ";
                }
                // line 36
                echo "          </div>
          <div class=\"\">";
                // line 37
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["app"], "description", array()), 100);
                echo "</div>
          <div class=\"text-muted\"><small>最后更新： ";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["app"], "latestTime", array()), "Y-m-d"), "html", null, true);
                echo "</small></div>
        </td>
        <td>
          ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "developerName", array()), "html", null, true);
                echo "
        </td>
        <td>
          ";
                // line 44
                if ((isset($context["installedApp"]) ? $context["installedApp"] : null)) {
                    // line 45
                    echo "            <a href=\"javascript:;\" class=\"btn btn-default disabled\">已安装</a>
          ";
                } else {
                    // line 47
                    echo "            ";
                    if (($this->getAttribute($context["app"], "userAccess", array()) == "ok")) {
                        // line 48
                        echo "              <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                        echo "\" class=\"btn btn-primary\" data-keyboard=\"false\" data-backdrop=\"static\">安装</a>
            ";
                    } else {
                        // line 50
                        echo "              <a href=\"http://open.edusoho.com/app/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                        echo "\" class=\"btn btn-warning\" target=\"_blank\">购买</a>
            ";
                    }
                    // line 52
                    echo "          ";
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
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 56,  141 => 53,  138 => 52,  132 => 50,  126 => 48,  123 => 47,  119 => 45,  117 => 44,  111 => 41,  105 => 38,  101 => 37,  98 => 36,  94 => 34,  92 => 33,  88 => 32,  81 => 30,  76 => 27,  73 => 26,  69 => 25,  58 => 16,  54 => 14,  48 => 12,  46 => 11,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
