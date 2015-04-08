<?php

/* TopxiaAdminBundle:System:user_set.layout.html.twig */
class __TwigTemplate_b172c328e5497e424a2364d5601fcbfdb67b6bf38e372f0f504446955d3368ad extends Twig_Template
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
        $context["menu"] = "user_set";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 用户相关设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav nav-tabs mbl\">
  <li class=\"";
        // line 9
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "auth")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("admin_setting_auth");
        echo "\">注册设置
  \t</a>
  </li>\t
  <li class=\"";
        // line 13
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "login_bind")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("admin_setting_login_bind");
        echo "\">登录设置
  \t</a>
  </li>
  <li class=\"";
        // line 17
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "user_center")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("admin_setting_user_center");
        echo "\">用户中心设置
    </a>
  </li>
  <li class=\"";
        // line 21
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "user_fields")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("admin_setting_user_fields");
        echo "\">字段自定义
    </a>
  </li>

</ul>


  ";
        // line 29
        $this->displayBlock('maincontent', $context, $blocks);
    }

    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user_set.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  87 => 22,  81 => 21,  75 => 18,  69 => 17,  63 => 14,  57 => 13,  51 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 3,  27 => 5,);
    }
}
