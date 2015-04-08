<?php

/* TopxiaAdminBundle:App:logs.html.twig */
class __TwigTemplate_76931c789353cafc4036bebc965bac65a03b60f3b97ad904b5323d6b7d1faed1 extends Twig_Template
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
        $context["script_controller"] = "app/logs";
        // line 7
        $context["menu"] = "logs";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "应用更新日志 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <style>
    .table .popover {
      max-width: 400px;
    }
  </style>

  <div class=\"page-header\">
    <h1>应用更新日志</h1>
  </div>

  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>应用名称</th>
        <th>类型</th>
        <th>操作人</th>
        <th>状态</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 31
            echo "        <tr>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "name", array()), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 34
            if (($this->getAttribute($context["log"], "type", array()) == "install")) {
                // line 35
                echo "              安装
              <br> <small class=\"text-muted\">(";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "toVersion", array()), "html", null, true);
                echo ")</small>
            ";
            } else {
                // line 38
                echo "              升级
              <br> <small class=\"text-muted\">版本： ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "fromVersion", array()), "html", null, true);
                echo " -&gt; ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "toVersion", array()), "html", null, true);
                echo "</small>
            ";
            }
            // line 41
            echo "          </td>
          <td>
            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array")), "method"), "html", null, true);
            echo "
            <br>
            <small class=\"text-muted\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</small>
          </td>
          <td>
            ";
            // line 48
            if (($this->getAttribute($context["log"], "status", array()) == "ROLLBACK")) {
                // line 49
                echo "              <strong class=\"text-danger\">需要回滚</strong>
            ";
            } elseif (($this->getAttribute($context["log"], "status", array()) == "ERROR")) {
                // line 51
                echo "              <strong class=\"text-warning\">更新失败</strong>
            ";
            } elseif (($this->getAttribute($context["log"], "status", array()) == "SUCCESS")) {
                // line 53
                echo "              <strong class=\"text-success\">更新成功</strong>
            ";
            } elseif (($this->getAttribute($context["log"], "status", array()) == "RECOVERED")) {
                // line 55
                echo "              <strong class=\"text-info\">已恢复</strong>
            ";
            }
            // line 57
            echo "            ";
            if ($this->getAttribute($context["log"], "message", array())) {
                // line 58
                echo "              <a href=\"javascript:;\" class=\"btn btn-sm btn-info log-message-btn\" data-content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
                echo "\">详情</a>
            ";
            }
            // line 60
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 63,  139 => 60,  133 => 58,  130 => 57,  126 => 55,  122 => 53,  118 => 51,  114 => 49,  112 => 48,  106 => 45,  101 => 43,  97 => 41,  90 => 39,  87 => 38,  82 => 36,  79 => 35,  77 => 34,  72 => 32,  69 => 31,  65 => 30,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
