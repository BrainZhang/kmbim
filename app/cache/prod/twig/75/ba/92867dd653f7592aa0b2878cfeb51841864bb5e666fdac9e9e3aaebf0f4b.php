<?php

/* TopxiaAdminBundle:System:payment.html.twig */
class __TwigTemplate_75ba92867dd653f7592aa0b2878cfeb51841864bb5e666fdac9e9e3aaebf0f4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:payment-set.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:payment-set.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "system/payment";
        // line 7
        $context["submenu"] = "payment";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "支付方式 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header\"><h1>支付方式</h1></div>

";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"payment-form\" novalidate >
  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >支付功能</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 22
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "enabled", array()));
        echo "
    </div>
  </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"disabled_message\">支付关闭时的提示信息</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"disabled_message\" name=\"disabled_message\" class=\"form-control\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "disabled_message", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">提示信息支持HTML标签。</div>
      </div>
    </div>


  <fieldset>
    <legend>支付宝</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>接口状态</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 44
        echo $this->env->getExtension('topxia_html_twig')->radios("alipay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_enabled", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">接口类型</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 53
        echo $this->env->getExtension('topxia_html_twig')->radios("alipay_type", array("direct" => "立即到账接口", "escow" => "担保交易接口", "dualfun" => "标准双接口"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_type", array()));
        echo "
        <div class=\"help-block\">
          支付宝规定，“立即到账接口”只能以企业名义申请，个人用户只能申请“担保交易接口”。
          <a href=\"http://www.edusoho.com/intro/96#payment\" target=\"_blank\">如何申请？</a>
          <br>
          \"立即到账接口\"如需在移动客户端使用，还需开通<a href=\"https://b.alipay.com/order/productDetail.htm?productId=2013080604609688\" target=\"blank\">手机网站支付</a>
          <br>
          “标准双接口”在2014-12-29日已被支付宝下线，此时间前申请成功的用户还可以在签约期内使用，建议签约担保交易以免过期后影响正常支付。
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_key\" name=\"alipay_key\" class=\"form-control\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_key", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_secret\" name=\"alipay_secret\" class=\"form-control\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_secret", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">支付宝账户</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_account\" name=\"alipay_account\" class=\"form-control\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_account", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">如需开启移动客户端支付，需填写支付宝账户。</div>
      </div>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>


  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 103,  144 => 88,  132 => 79,  120 => 70,  100 => 53,  88 => 44,  72 => 31,  60 => 22,  48 => 13,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
