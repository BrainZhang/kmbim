<?php

/* TopxiaAdminBundle:CloudSetting:layout.html.twig */
class __TwigTemplate_3a5c396057097e80b1825f820e3135df22d83a0347684e366c1c9d3c2518b823 extends Twig_Template
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
        $context["menu"] = "cloud";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "云平台设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav nav-tabs mbl\">

  <li class=\"";
        // line 10
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "key")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_setting_cloud_key");
        echo "\">授权码设置
    </a>
  </li>

  <li class=\"";
        // line 15
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "video")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("admin_setting_cloud_video");
        echo "\">云视频设置
    </a>
  </li>

  <li class=\"";
        // line 20
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "sms")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("admin_edu_cloud_sms");
        echo "\">云短信设置
    </a>
  </li>

</ul>

  ";
        // line 27
        $this->displayBlock('maincontent', $context, $blocks);
    }

    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudSetting:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  78 => 21,  72 => 20,  65 => 16,  59 => 15,  52 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 3,  27 => 5,);
    }
}
