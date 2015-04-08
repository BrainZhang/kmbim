<?php

/* TopxiaAdminBundle:System:logs.html.twig */
class __TwigTemplate_0bd41d0559ea9eeaeaabe1a447abbe1c5a28cca4a9e72be72a9bd2572270109a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "logs";
        // line 7
        $context["script_controller"] = "log/list";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "系统日志 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header\"><h1>系统日志</h1></div>

";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"level\">
        ";
        // line 19
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("logLevel"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "level"), "method"), "--所有等级--");
        echo "
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"startDateTime\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" name=\"startDateTime\" class=\"form-control\" placeholder=\"起始时间\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"endDateTime\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" name=\"endDateTime\" class=\"form-control\" placeholder=\"结束时间\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"module\" name=\"module\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "module"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"模块名\" style=\"width:100px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"action\" name=\"action\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "action"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"操作名\" style=\"width:100px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"用户昵称\" style=\"width:120px;\">
  </div>

  <button class=\"btn btn-primary\">搜索</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"15%\">用户</th>
      <th width=\"55%\">操作</th>
      <th width=\"10%\">日志等级</th>
      <th width=\"20%\">时间/IP</th>
    </tr>   
    ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 55
            echo "      ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array"), null)) : (null));
            // line 56
            echo "      <tr>
        <td>
          ";
            // line 58
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 59
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null)), "method"), "html", null, true);
                echo "
          ";
            } else {
                // line 61
                echo "            --
          ";
            }
            // line 63
            echo "        <td>
          <div style=\"word-break: break-all;word-wrap: break-word;\">
            ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
            echo "
            ";
            // line 66
            if ($this->getAttribute($context["log"], "data", array())) {
                // line 67
                echo "              <a href=\"javascript:;\" class=\"text-sm text-warning show-data\">查看数据</a>
              <a href=\"javascript:;\" class=\"text-sm text-warning hide-data\" style=\"display:none;\">隐藏数据</a>
              <div class=\"data\" style=\"display:none;\">";
                // line 69
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["log"], "data", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 71
            echo "          </div>
          <span class=\"text-muted text-sm\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "module", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "action", array()), "html", null, true);
            echo "</span>
        </td>
        <td>";
            // line 74
            echo $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("logLevel:html"), $this->getAttribute($context["log"], "level", array()), array(), "array");
            echo "</td>
        <td>
          <span class=\"\">";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
          <br />
          <a  class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "ip", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "ip", array()), "html", null, true);
            echo "</a>
        </td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "      <tr><td class=\"empty\" colspan=\"20\">无日志记录</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "  </table>

  ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 86,  191 => 84,  184 => 82,  173 => 78,  168 => 76,  163 => 74,  156 => 72,  153 => 71,  148 => 69,  144 => 67,  142 => 66,  138 => 65,  134 => 63,  130 => 61,  124 => 59,  122 => 58,  118 => 56,  115 => 55,  110 => 54,  93 => 40,  86 => 36,  79 => 32,  72 => 28,  65 => 24,  57 => 19,  48 => 13,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
