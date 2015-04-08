<?php

/* TopxiaWebBundle::script_boot.html.twig */
class __TwigTemplate_a7172b7989d0a530dc80d9b177ba69741636720aab8e156aecfff5323a5f9a0a extends Twig_Template
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
        if (($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : null), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null))) : ("")) == "/")))) {
            // line 2
            $context["consult"] = $this->env->getExtension('topxia_web_twig')->getSetting("consult");
            // line 3
            echo "  <div id=\"float-consult\" class=\"float-consult\">
    <div class=\"btn-group-vertical\">

      ";
            // line 6
            $context["break"] = 0;
            // line 7
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                if (((!twig_test_empty($this->getAttribute($context["qq"], "name", array()))) && ((isset($context["break"]) ? $context["break"] : null) == 0))) {
                    // line 8
                    echo "        <span class=\"btn btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                    echo " float-consult-qq-btn\" data-container=\".float-consult-qq-btn\" data-title=\"QQ客服\" data-content-element=\"#consult-qq-content\"><span class=\"icon icon-qq\"></span></span>
        ";
                    // line 9
                    $context["break"] = 1;
                    // line 10
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
      ";
            // line 12
            $context["break"] = 0;
            // line 13
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                if (((!twig_test_empty($this->getAttribute($context["qqgroup"], "name", array()))) && ((isset($context["break"]) ? $context["break"] : null) == 0))) {
                    // line 14
                    echo "        <span class=\"btn btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                    echo " float-consult-qqgroup-btn\" data-container=\".float-consult-qqgroup-btn\" data-title=\"QQ群\" data-content-element=\"#consult-qqgroup-content\"><span class=\"icon icon-qqgroup\"></span></span>
        ";
                    // line 15
                    $context["break"] = 1;
                    // line 16
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 

      ";
            // line 18
            $context["break"] = 0;
            // line 19
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                if (((!twig_test_empty($this->getAttribute($context["phone"], "name", array()))) && ((isset($context["break"]) ? $context["break"] : null) == 0))) {
                    echo " 
        <span class=\"btn btn-";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                    echo " float-consult-phone-btn\" data-container=\".float-consult-phone-btn\" data-title=\"电话客服\" data-content-element=\"#consult-phone-content\"><span class=\"icon icon-phone\"></span></span>
        ";
                    // line 21
                    $context["break"] = 1;
                    // line 22
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 

      ";
            // line 24
            if ((!twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())))) {
                // line 25
                echo "        <span class=\"btn btn-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                echo " float-consult-weixin-btn\" data-container=\".float-consult-weixin-btn\" data-title=\"微信公众号\" data-content-element=\"#consult-weixin-content\"><span class=\"icon icon-weixin\"></span></span>
      ";
            }
            // line 27
            echo "      
      ";
            // line 28
            if ((!twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array())))) {
                // line 29
                echo "        <span class=\"btn btn-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                echo " float-consult-email-btn\" data-container=\".float-consult-email-btn\" data-title=\"电子邮箱\" data-content-element=\"#consult-email-content\"><span class=\"icon icon-email\"></span></span>
      ";
            }
            // line 31
            echo "    </div>

    <div class=\"consult-contents\">
      <div id=\"consult-qq-content\">
        ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                if ((!twig_test_empty($this->getAttribute($context["qq"], "name", array())))) {
                    // line 36
                    echo "          <p>
            <a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                    echo "&site=qq&menu=yes\" >
              <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                    echo ":52\" alt=\"\" title=\"点击这里给我发消息\"/>
              ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "
            </a>
          </p>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </div>

      <div id=\"consult-qqgroup-content\">
        ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                if ((!twig_test_empty($this->getAttribute($context["qqgroup"], "name", array())))) {
                    // line 47
                    echo "          <p>
            <span class=\"icon icon-qqgroup text-muted\" style=\"font-size:14px;\"></span>
            ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
                    echo " 
            <br> <span class=\"text-info\" style=\"margin-left:20px;\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
                    echo "</span>
          </p>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </div>
      <div id=\"consult-phone-content\">
        <p>
          <strong>服务时间：</strong> ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "worktime", array()), "html", null, true);
            echo "
        </p>

        ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                if ((!twig_test_empty($this->getAttribute($context["phone"], "name", array())))) {
                    // line 60
                    echo "          <p>
            ";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
                    echo "： ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                    echo "
          </p>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "      </div>

      
      <div id=\"consult-weixin-content\">
        <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())), "html", null, true);
            echo "\" class=\"qrcode center-block\">
      </div>

      <div id=\"consult-email-content\">
       <a href=\"mailto:";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
            echo "</a>
      </div>

    </div>
  </div>
";
        }
        // line 78
        echo "
<script>
  var app = {};
  app.debug = ";
        // line 81
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
  app.version = '";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetsVersion(), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBasePath", array(), "method"), "html", null, true);
        echo "';
  app.theme = '";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';
  app.themeGlobalScript = '";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getThemeGlobalScript(), "html", null, true);
        echo "';
  app.jsPaths = ";
        // line 87
        echo twig_jsonencode_filter($this->env->getExtension('topxia_web_twig')->getJsPaths());
        echo ";

  var CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';

  app.config = ";
        // line 91
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.renren_key", ""))), "cloud" => array("video_player" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player"), "video_player_watermark_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_watermark_plugin"), "video_player_fingerprint_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_fingerprint_plugin")), "loading_img_path" => $this->env->getExtension('assets')->getAssetUrl("assets/img/default/loading.gif")));
        // line 106
        echo ";

  app.arguments = {};
  ";
        // line 109
        if (array_key_exists("script_controller", $context)) {
            // line 110
            echo "    app.controller = '";
            echo twig_escape_filter($this->env, (isset($context["script_controller"]) ? $context["script_controller"] : null), "html", null, true);
            echo "';
  ";
        }
        // line 112
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 113
            echo "    app.arguments = ";
            echo twig_jsonencode_filter((isset($context["script_arguments"]) ? $context["script_arguments"] : null));
            echo ";
  ";
        }
        // line 115
        echo "  
  app.scripts = ";
        // line 116
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->exportScripts(), null));
        echo ";

  app.mainScript = '";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["script_main"]) ? $context["script_main"] : null), "html", null, true);
        echo "';
</script>
";
        // line 120
        if ($this->env->getExtension('topxia_web_twig')->getSetting("cdn.enabled")) {
            echo " ";
            $context["cdnUrl"] = $this->env->getExtension('topxia_web_twig')->getSetting("cdn.url");
            echo " ";
        } else {
            echo " ";
            $context["cdnUrl"] = "";
            echo " ";
        }
        // line 121
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["cdnUrl"]) ? $context["cdnUrl"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["cdnUrl"]) ? $context["cdnUrl"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs-style/1.0.2/seajs-style.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["cdnUrl"]) ? $context["cdnUrl"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"></script>
<script>
  seajs.use(app.mainScript);
</script>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 123,  332 => 122,  326 => 121,  316 => 120,  311 => 118,  306 => 116,  303 => 115,  297 => 113,  294 => 112,  288 => 110,  286 => 109,  281 => 106,  279 => 91,  272 => 87,  268 => 86,  264 => 85,  260 => 84,  256 => 83,  252 => 82,  244 => 81,  239 => 78,  228 => 72,  221 => 68,  215 => 64,  203 => 61,  200 => 60,  195 => 59,  189 => 56,  184 => 53,  174 => 50,  170 => 49,  166 => 47,  161 => 46,  156 => 43,  145 => 39,  141 => 38,  137 => 37,  134 => 36,  129 => 35,  123 => 31,  117 => 29,  115 => 28,  112 => 27,  106 => 25,  104 => 24,  94 => 22,  92 => 21,  88 => 20,  80 => 19,  78 => 18,  68 => 16,  66 => 15,  61 => 14,  55 => 13,  53 => 12,  50 => 11,  43 => 10,  41 => 9,  36 => 8,  30 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
