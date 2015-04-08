<?php

/* TopxiaAdminBundle:System:operation.layout.html.twig */
class __TwigTemplate_ad37dcac6aad9f420bc7fc76e621d92aaa1b46576e7e831f865abaeb5455847e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "operation";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "全局设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav nav-tabs mbl\">

  <li class=\"";
        // line 10
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "course_setting")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_setting_course_setting");
        echo "\">课程设置
    </a>
  </li>

  <li class=\"";
        // line 15
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "questions_setting")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("admin_setting_questions_setting");
        echo "\">题库设置
    </a>
  </li>

  <li class=\"";
        // line 20
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "consult_setting")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("admin_setting_consult_setting");
        echo "\">客服设置
    </a>
  </li>

  <li class=\"";
        // line 25
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "mailer")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("admin_setting_mailer");
        echo "\">邮件服务器设置
  \t</a>
  </li>
  <li class=\"";
        // line 29
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "theme")) {
            echo "active";
        }
        echo "\">
       <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_setting_theme");
        echo "\">主题设置</a>
  </li>

   <li class=\"";
        // line 33
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "default")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("admin_setting_default");
        echo "\">系统默认设置
    </a>
  </li>
  <li class=\"";
        // line 37
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "share")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("admin_setting_share");
        echo "\">分享设置
    </a>
  </li>
  <li class=\"";
        // line 41
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "customer_service")) {
            echo "active";
        }
        echo "\" style=\"display:none;\">
    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getUrl("admin_customer_service");
        echo "\">在线客户服务
    </a>
  </li>

</ul>


  ";
        // line 49
        $this->displayBlock('maincontent', $context, $blocks);
    }

    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 49,  139 => 42,  133 => 41,  127 => 38,  121 => 37,  115 => 34,  109 => 33,  103 => 30,  97 => 29,  91 => 26,  85 => 25,  78 => 21,  72 => 20,  65 => 16,  59 => 15,  52 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 3,  27 => 5,);
    }
}
