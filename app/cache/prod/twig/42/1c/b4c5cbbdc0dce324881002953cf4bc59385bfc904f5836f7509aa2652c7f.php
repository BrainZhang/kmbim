<?php

/* TopxiaAdminBundle:User:layout.html.twig */
class __TwigTemplate_421cb4c5cbbdc0dce324881002953cf4bc59385bfc904f5836f7509aa2652c7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
            'page_script' => array($this, 'block_page_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "user";
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
        // line 26
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 28
        $this->displayBlock('main', $context, $blocks);
        // line 29
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
        echo $this->env->getExtension('routing')->getUrl("admin_user");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "user")) {
            echo "active";
        }
        echo "\">用户管理</a>

      ";
        // line 11
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstaled("UserImporter") && $this->env->getExtension('topxia_web_twig')->getSetting("plugin_userImporter_enabled", 1))) {
            // line 12
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_user_import");
            echo "\" class=\"list-group-item ";
            if (((isset($context["menu"]) ? $context["menu"] : null) == "user-lead")) {
                echo "active";
            }
            echo "\">用户导入</a>
      ";
        }
        // line 14
        echo "
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("admin_teacher");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "teacher")) {
            echo "active";
        }
        echo "\">教师管理</a>

        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("admin_approval_approving");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "approval")) {
            echo "active";
        }
        echo "\">实名认证</a>

        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("admin_message");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "message")) {
            echo "active";
        }
        echo "\">私信管理</a>
        
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("admin_money_card");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "money_card")) {
            echo "active";
        }
        echo "\" style=\"display:none;\">充值卡管理</a>

        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_login_record");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "login_record")) {
            echo "active";
        }
        echo "\">用户登录日志</a>
      </div>
    ";
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
    }

    // line 31
    public function block_page_script($context, array $blocks = array())
    {
        echo " app.load('user') ";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 31,  129 => 28,  118 => 23,  109 => 21,  100 => 19,  91 => 17,  82 => 15,  79 => 14,  69 => 12,  67 => 11,  58 => 9,  55 => 8,  52 => 7,  47 => 29,  45 => 28,  41 => 26,  39 => 7,  36 => 6,  33 => 5,  28 => 3,);
    }
}
