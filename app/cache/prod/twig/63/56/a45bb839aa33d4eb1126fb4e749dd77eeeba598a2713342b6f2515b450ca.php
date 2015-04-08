<?php

/* TopxiaAdminBundle:Group:layout.html.twig */
class __TwigTemplate_6356a45bb839aa33d4eb1126fb4e749dd77eeeba598a2713342b6f2515b450ca extends Twig_Template
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
        $context["nav"] = "group";
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
        // line 18
        echo "  </div>


  <div class=\"col-md-10\">
      ";
        // line 22
        $this->displayBlock('main', $context, $blocks);
        // line 23
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "
      <div class=\"list-group\">
        
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_group_set");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "set")) {
            echo "active";
        }
        echo "\">小组设置</a>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_group");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "group")) {
            echo "active";
        }
        echo "\">小组管理</a>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_groupThread");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "thread")) {
            echo "active";
        }
        echo "\">话题管理</a>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\" class=\"list-group-item\" target=\"_blank\">小组首页</a>
      
      </div>
    ";
    }

    // line 22
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  85 => 14,  77 => 13,  69 => 12,  61 => 11,  56 => 8,  53 => 7,  48 => 23,  46 => 22,  40 => 18,  38 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
