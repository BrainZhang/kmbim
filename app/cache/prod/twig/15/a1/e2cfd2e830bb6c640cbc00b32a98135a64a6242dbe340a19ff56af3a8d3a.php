<?php

/* TopxiaAdminBundle:Coin:coin-ul.html.twig */
class __TwigTemplate_15a1e2cfd2e830bb6c640cbc00b32a98135a64a6242dbe340a19ff56af3a8d3a extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs mbl\">
  <li class=\"";
        // line 2
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "settings")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_coin_settings");
        echo "\">虚拟币设置</a></li>
  <li class=\"";
        // line 3
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "model")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_coin_model");
        echo "\">使用方式设置</a></li>
  <li class=\"";
        // line 4
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "user-records")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_coin_user_records");
        echo "\">用户虚拟币</a></li>
  <li class=\"";
        // line 5
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "orders")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_coin_orders");
        echo "\">充值订单</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  38 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
