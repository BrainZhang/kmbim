<?php

/* TopxiaAdminBundle:System:layout.html.twig */
class __TwigTemplate_fc8034baea6e466a31e275d0f501e564731a57ba06116bfd5c8f72b840559c63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "system";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"col-md-2\">
    ";
        // line 7
        $this->displayBlock('sidebar', $context, $blocks);
        // line 33
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 35
        $this->displayBlock('main', $context, $blocks);
        // line 36
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "      <div class=\"list-group\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_setting_site");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "site")) {
            echo "active";
        }
        echo "\">站点设置</a>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "operation")) {
            echo "active";
        }
        echo "\">全局设置</a>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "cloud")) {
            echo "active";
        }
        echo "\">云平台设置</a>

        ";
        // line 13
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud")) {
            // line 14
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_cloud_bill");
            echo "\" class=\"list-group-item ";
            if (((isset($context["menu"]) ? $context["menu"] : null) == "bill")) {
                echo "active";
            }
            echo "\">云账单</a>
        ";
        }
        // line 16
        echo "
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_setting_payment");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "paymentGlobal")) {
            echo "active";
        }
        echo "\">支付设置</a>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_coin_settings");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "coin")) {
            echo "active";
        }
        echo "\">虚拟币管理</a>

        <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getUrl("admin_bill");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "coin-bill")) {
            echo "active";
        }
        echo "\">账单管理";
        echo "</a>

        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_setting_auth");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "user_set")) {
            echo "active";
        }
        echo "\">用户相关设置</a>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "client")) {
            echo "active";
        }
        echo "\">移动客户端设置</a>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("admin_setting_ip_blacklist");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "ip_blacklist")) {
            echo "active";
        }
        echo "\">IP黑名单</a>

        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("admin_optimize");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "optimize")) {
            echo "active";
        }
        echo "\">优化和备份</a>   

        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_operation_analysis_register", array("tab" => "trend", "analysisDateType" => "register")), "html", null, true);
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "analysis")) {
            echo "active";
        }
        echo "\">数据统计</a>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("admin_logs");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "logs")) {
            echo "active";
        }
        echo "\">系统日志</a>

      </div>
    ";
    }

    // line 35
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 35,  166 => 29,  158 => 28,  149 => 26,  140 => 24,  132 => 23,  124 => 22,  114 => 20,  105 => 18,  97 => 17,  94 => 16,  84 => 14,  82 => 13,  73 => 11,  65 => 10,  57 => 9,  54 => 8,  51 => 7,  46 => 36,  44 => 35,  40 => 33,  38 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
