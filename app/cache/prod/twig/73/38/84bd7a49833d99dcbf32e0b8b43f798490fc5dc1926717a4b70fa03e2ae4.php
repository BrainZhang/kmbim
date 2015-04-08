<?php

/* TopxiaAdminBundle:Coin:cash-bill.html.twig */
class __TwigTemplate_733884bd7a49833d99dcbf32e0b8b43f798490fc5dc1926717a4b70fa03e2ae4 extends Twig_Template
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
        // line 7
        $context["menu"] = "coin-bill";
        // line 8
        $context["submenu"] = "coin-bill";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "现金账单 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "

  <ul class=\"nav nav-tabs mbl\">
    <li class=\"";
        // line 13
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "coin-bill")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("admin_bill");
        echo "\">现金账单
        </a>
    </li>

    <li class=\"";
        // line 18
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "records")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("admin_coin_records");
        echo "\">虚拟币账单
        </a>
    </li>    
  </ul>




  ";
        // line 28
        echo "
      
    <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"lastHowManyMonths\"  onchange=\"submit();\">
          ";
        // line 33
        $context["options"] = array("" => "全部记录", "oneWeek" => "最近一周", "twoWeeks" => "最近两周", "oneMonth" => "最近一个月", "twoMonths" => "最近两个月", "threeMonths" => "最近三个月");
        // line 34
        echo "          ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lastHowManyMonths"), "method"));
        echo "
        </select>
      </div>
    <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" placeholder=\"用户名\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

    </form>

    <p class=\"text-muted\">
      <span class=\"mrl\">收入：<strong class=\"inflow-num\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["amountInflow"]) ? $context["amountInflow"] : null), "html", null, true);
        echo "</strong> 元</span>
      <span class=\"mrl\">支出：<strong class=\"outflow-num\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["amountOutflow"]) ? $context["amountOutflow"] : null), "html", null, true);
        echo "</strong> 元</span>
    </p>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        ";
        // line 52
        if ((isset($context["cashes"]) ? $context["cashes"] : null)) {
            // line 53
            echo "        <tr>
          <th><span class=\"text-sm\">流水号</span></th>
          <th><span class=\"text-sm\">名称</span></th>  
          <th><span class=\"text-sm\">用户名</span></th>             
          <th><span class=\"text-sm\">成交时间</span></th>
          <th class=\"text-right\" style=\"padding-right: 60px;\"><span class=\"text-sm\">收支</span></th>
          
          <th><span class=\"text-sm\">支付方式</span></th>
        </tr>
        ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
                // line 63
                echo "           <tr>
            <td><span class=\"text-sm\">";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "sn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "name", array()), "html", null, true);
                echo "</span><br>
                <span class=\"text-muted text-sm\">订单号：";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "orderSn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\"><a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["cash"], "userId", array()))), "html", null, true);
                echo "\">
            ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["cash"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</a></span></td>            
            <td><span class=\"text-sm\">";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cash"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td>

            ";
                // line 71
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 72
                    echo "            <td class=\"text-right\" style=\"color:#1bb974;padding-right: 50px;\">
               ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo " 
            </td>
            ";
                }
                // line 76
                echo "            ";
                if (($this->getAttribute($context["cash"], "type", array()) == "outflow")) {
                    // line 77
                    echo "            <td  class=\"text-right\" style=\"color:#ff7b0e;padding-right: 50px;\">
               -&nbsp;";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo "               
            </td>
            ";
                }
                // line 81
                echo "           
            <td>
              <span class=\"text-sm\">
                ";
                // line 84
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 85
                    echo "                  支付宝 
                ";
                } else {
                    // line 87
                    echo "                  网校支付
                ";
                }
                // line 89
                echo "              </span>
            </td> 
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        ";
        } else {
            // line 94
            echo "        <div class=\"empty\">暂无记录</div>
        ";
        }
        // line 96
        echo "      </table>
    </div>
 ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:cash-bill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 98,  217 => 96,  213 => 94,  210 => 93,  201 => 89,  197 => 87,  193 => 85,  191 => 84,  186 => 81,  180 => 78,  177 => 77,  174 => 76,  168 => 73,  165 => 72,  163 => 71,  158 => 69,  154 => 68,  150 => 67,  146 => 66,  142 => 65,  138 => 64,  135 => 63,  131 => 62,  120 => 53,  118 => 52,  110 => 47,  106 => 46,  95 => 38,  87 => 34,  85 => 33,  78 => 28,  67 => 19,  61 => 18,  54 => 14,  48 => 13,  43 => 10,  40 => 9,  33 => 5,  28 => 8,  26 => 7,);
    }
}
