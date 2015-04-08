<?php

/* TopxiaAdminBundle:Coin:coin-settings.html.twig */
class __TwigTemplate_a8ba96fa5b9574e681411987dca7c681d6fe1ab58a1c11feb2f708a40bac60bf extends Twig_Template
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
        // line 6
        $context["script_controller"] = "coin/range";
        // line 7
        $context["menu"] = "coin";
        // line 8
        $context["submenu"] = "settings";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "虚拟币管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "  <div class=\"page-header\"><h1>虚拟币管理</h1></div>
  ";
        // line 12
        $this->env->loadTemplate("TopxiaAdminBundle:Coin:coin-ul.html.twig")->display($context);
        // line 13
        echo "
  ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
  <form class=\"form-horizontal\" method=\"post\" id=\"coin-settings-form\">
  

      <style type=\"text/css\">
      .popover{
        z-index: 9999;
            }
        </style>
        <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
         <div id=\"article-property-tips-html\" style=\"display:none;\">
            <div style=\"width:250px;font-size:14px;\">
              <span style=\"color:blue;\"> 说明：</span><br>
              虚拟币是可以在网校内进行支付消费的虚拟货币<br>
              <span style=\"color:blue;\">推广建议：</span><br>
              1、 建议网校使用虚拟币对网校内课程进行标价；<br>
              2、 网校可鼓励";
        // line 30
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "充值，可提升用户忠诚度；<br>
              3、 建议配合使用学习卡（商业应用），给予一定优惠；<br>
            </div>
        </div>

      <div class=\"form-group\">
    \t\t<div class=\"col-md-3 control-label\">
    \t\t\t<label for=\"coin_name\">虚拟币名称</label>
    \t\t</div>
    \t\t<div class=\"controls col-md-4\">
    \t\t\t<input type=\"text\" id=\"coin_name\" name=\"coin_name\" class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coin_settings_posted"]) ? $context["coin_settings_posted"] : null), "coin_name", array()), "html", null, true);
        echo "\">
    \t\t</div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"coin_picture\">虚拟币图片</label>
        </div>
        <div class=\"col-md-7 controls\">
        <div >

          <div id=\"coin-picture-largeSize\" style=\"display:inline;\">";
        // line 51
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture")), "html", null, true);
            echo "\">";
        }
        echo "</div>
          <div id=\"coin-picture-middleSize\" style=\"display:none;\">";
        // line 52
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_30_30")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_30_30")), "html", null, true);
            echo "\">";
        }
        echo "</div>
          <div id=\"coin-picture-smallSize\" style=\"display:none;\">";
        // line 53
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_20_20")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_20_20")), "html", null, true);
            echo "\">";
        }
        echo "</div>
          <div id=\"coin-picture-extraSmallSize\" style=\"display:none;\">";
        // line 54
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_10_10")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_10_10")), "html", null, true);
            echo "\">";
        }
        echo "</div>
        </div></br>

          <button class=\"btn btn-default btn-sm\" id=\"coin-picture-upload\" type=\"button\" data-url=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("admin_coin_picture");
        echo "\">上传</button>
          <button class=\"btn btn-default btn-sm\" id=\"coin-picture-remove\" type=\"button\" data-url=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("admin_coin_picture_remove");
        echo "\" ";
        if ((!$this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
          <p class=\"help-block\">
          请上传png, gif, jpg格式的超过50*50的等比例图片，否则无法上传
          </p>
          <input type=\"hidden\" name=\"coin_picture\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_50_50\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_50_50"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_30_30\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_30_30"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_20_20\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_20_20"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_10_10\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_10_10"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"cash_rate\" ";
        // line 67
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"1\" ";
        }
        echo ">
          <input type=\"hidden\" name=\"coin_enabled\" ";
        // line 68
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
          <input type=\"hidden\" name=\"cash_model\" ";
        // line 69
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_model")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_model"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"none\" ";
        }
        echo ">
        </div>
    </div>

        <div class=\"form-group\">
              <div class=\"col-md-3 control-label\">
                <label for=\"coin_content\">虚拟币说明</label>
              </div>
          <div class=\"controls col-md-8\">
            <textarea class=\"form-control\" id=\"coin_content\" rows=\"16\" name=\"coin_content\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coin_settings_posted"]) ? $context["coin_settings_posted"] : null), "coin_content", array()), "html", null, true);
        echo "\" data-image-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["coin_settings_posted"]) ? $context["coin_settings_posted"] : null), "coin_content");
        echo "</textarea>
            <p class=\"help-block\">虚拟币说明可用于描述虚拟币特点，用途，获得的途径等虚拟币的相关内容
            </p>
          </div>
        </div> 

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    <div class=\"row form-group\">
    \t<div class=\"controls col-md-offset-3 col-md-8\">
    \t\t<button type=\"submit\" class=\"btn btn-primary\" >提交更新</button>
    \t</div>
    </div>
  </form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 84,  210 => 78,  192 => 69,  182 => 68,  172 => 67,  168 => 66,  164 => 65,  160 => 64,  156 => 63,  152 => 62,  141 => 58,  137 => 57,  127 => 54,  119 => 53,  111 => 52,  103 => 51,  89 => 40,  72 => 30,  53 => 14,  50 => 13,  48 => 12,  45 => 11,  42 => 10,  35 => 4,  30 => 8,  28 => 7,  26 => 6,);
    }
}
