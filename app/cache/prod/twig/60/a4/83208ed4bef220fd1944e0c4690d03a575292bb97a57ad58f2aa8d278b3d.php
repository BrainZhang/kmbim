<?php

/* TopxiaAdminBundle:App:layout.html.twig */
class __TwigTemplate_60a483208ed4bef220fd1944e0c4690d03a575292bb97a57ad58f2aa8d278b3d extends Twig_Template
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
        $context["nav"] = "app";
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
        // line 22
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 24
        $this->displayBlock('main', $context, $blocks);
        // line 25
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">应用管理</div>
        <div class=\"list-group\">
          <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_app_center");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "center")) {
            echo "active";
        }
        echo "\">应用中心</a>
          <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_app_installed");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "installed")) {
            echo "active";
        }
        echo "\">已安装应用</a>
          <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "upgrades")) {
            echo "active";
        }
        echo "\">检查应用更新</a>
          <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_app_logs");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "logs")) {
            echo "active";
        }
        echo "\">应用更新日志</a>
        </div>

      </div>


    ";
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  84 => 15,  76 => 14,  68 => 13,  60 => 12,  54 => 8,  51 => 7,  46 => 25,  44 => 24,  40 => 22,  38 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
