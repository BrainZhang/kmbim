<?php

/* TopxiaAdminBundle:System:site.html.twig */
class __TwigTemplate_3055d8a5ef10882f67d440ca4e34833ed30d265eac7e6c2f910eaca10bcdfbff extends Twig_Template
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
        $context["menu"] = "site";
        // line 6
        $context["script_controller"] = "setting/site";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "站点设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<style>
#site-logo-container,#site-favicon-container img {max-width: 80%; margin-bottom: 10px;}
</style>

<div class=\"page-header\"><h1>站点设置</h1></div>

";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"site-form\" method=\"post\">
  
  <fieldset>
    <legend>基础信息</legend>
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">网站名称</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"slogan\">网站副标题</label> 
      </div>
      <div class=\"col-md-8 controls\">
         <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "slogan", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"url\">网站域名</label> 
      </div>
      <div class=\"col-md-8 controls\">
       <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">以\"http://\"或\"https://\"开头</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"logo\">网站LOGO</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-logo-container\">";
        // line 56
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <button class=\"btn btn-default btn-sm\" id=\"site-logo-upload\" type=\"button\" data-url=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("admin_setting_logo_upload");
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"site-logo-remove\" type=\"button\" data-url=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("admin_setting_logo_remove");
        echo "\" ";
        if ((!$this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过50*250。</p>
        <input type=\"hidden\" name=\"logo\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"favicon\">浏览器图标</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-favicon-container\">";
        // line 69
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <button class=\"btn btn-default\" id=\"site-favicon-upload\" type=\"button\" data-url=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("admin_setting_favicon_upload");
        echo "\">上传</button>
        <button class=\"btn btn-default\" id=\"site-favicon-remove\" type=\"button\" data-url=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("admin_setting_favicon_remove");
        echo "\" ";
        if ((!$this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
        <p class=\"help-block\">请上传ico格式的图标文件。</p>
        <input type=\"hidden\" name=\"favicon\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_keywords\">SEO关键词</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "seo_keywords", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_description\">SEO描述信息</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "seo_description", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"master_email\">管理员邮箱地址</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"master_email\" name=\"master_email\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "master_email", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"copyright\">课程内容版权方</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">您可以填写网站名称或公司名称。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"icp\">ICP备案号</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "icp", array()), "html", null, true);
        echo "\">
      </div>
    </div>

  </fieldset>

<br>

  <fieldset>
    <legend>网站统计分析代码部署</legend>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"analytics\">统计分析代码</label>
      </div>
      <div class=\"col-md-8 controls\">

        <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "analytics", array()), "html", null, true);
        echo "</textarea>

        <p class=\"help-block\">
          建议使用下列统计分析的一种：
          <a href=\"http://www.google.cn/intl/zh-CN_ALL/analytics/\" target=\"_blank\">谷歌分析</a>、
          <a href=\"http://tongji.baidu.com/\" target=\"_blank\">百度统计</a>、
          <a href=\"http://ta.qq.com/\" target=\"_blank\">腾讯分析</a>、
          <a href=\"http://www.cnzz.com/\" target=\"_blank\">CNZZ</a>。
        </p>
      </div>
    </div>
  </fieldset>

  <fieldset style=\"display:none;\">
    <legend>站点状态</legend>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >网站状态</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 156
        echo $this->env->getExtension('topxia_html_twig')->radios("status", array("open" => "开放", "closed" => "关闭"), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "status", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>网站关闭公告</label>
      </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "closed_note", array()), "html", null, true);
        echo "</textarea>
        <p class=\"help-block\">网站处于关闭状态时，用户访问网站将显示此公告，支持HTML代码。</p>
      </div>
    </div>
  </fieldset>

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 177,  274 => 165,  262 => 156,  238 => 135,  219 => 119,  206 => 109,  194 => 100,  182 => 91,  170 => 82,  158 => 73,  149 => 71,  145 => 70,  137 => 69,  125 => 60,  116 => 58,  112 => 57,  104 => 56,  91 => 46,  79 => 37,  67 => 28,  52 => 16,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
