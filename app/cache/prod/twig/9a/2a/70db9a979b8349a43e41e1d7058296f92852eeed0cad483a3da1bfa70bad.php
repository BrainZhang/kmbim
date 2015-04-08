<?php

/* TopxiaAdminBundle:System:mobile.html.twig */
class __TwigTemplate_9a2a70db9a979b8349a43e41e1d7058296f92852eeed0cad483a3da1bfa70bad extends Twig_Template
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
        $context["menu"] = "client";
        // line 6
        $context["script_controller"] = "setting/mobile";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "移动客户端设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "<style>
#mobile-logo-container img ,
#mobile-splash1-container img , 
#mobile-splash2-container img , 
#mobile-splash3-container img , 
#mobile-splash4-container img , 
#mobile-splash5-container img ,
#mobile-banner1-container img , 
#mobile-banner2-container img , 
#mobile-banner3-container img , 
#mobile-banner4-container img , 
#mobile-banner5-container img 
{max-width: 80%; margin-bottom: 10px;}

.course-grids {
  margin:0 -15px 0 0;
  padding:0;
  list-style: none;
}

.course-grid {
  display: inline-block;
  vertical-align: top;
  margin: 15px 15px 15px 0;
  border: 1px solid #e1e1e1;
  border-radius: 4px;
}

.banner-course .course-grid {
  margin: 0 0 0 0;
  margin-left: 10px;
}

.course-grid .series-mode-label {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
}

.course-grid .grid-body {
  position: relative;
  width: 170px;
  display: block;
  overflow: hidden;
  border-radius: 4px;
  color: #353535;
}

.grid-body a{
  text-decoration: none;
}

.course-grid .title {
  display: block;
  padding: 10px;
  min-height: 52px;
  color: #555;
  font-weight: bold;
}

.course-grid .add-course {
  font-size: 80px;
  height: 148px;
  text-align: center;
  padding-top: 30px;
}

</style>

<div class=\"page-header\"><h1>移动客户端设置</h1></div>

";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label >是否开启客户端</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 91
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "enabled", array()));
        echo "
      <div class=\"help-block\">开启后，网站首页顶部导航会出现客户端入口</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile_about\">网校简介</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" id=\"mobile_about\" rows=\"10\" name=\"about\" data-image-upload-url=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "about", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">此简介将显示在移动客户端的\"关于网校\"</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">网校LOGO</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-logo-container\">";
        // line 111
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-upload\" type=\"button\" data-url=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "logo"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-remove\" type=\"button\" data-url=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "logo"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。</p>
      <input type=\"hidden\" name=\"logo\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">公告</label>
    </div>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" class=\"form-control\" name=\"notice\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "notice", array()), "html", null, true);
        echo "\">
      <p class=\"help-block\">将会在手机端banner下面显示网校的公告，建议用简练概括的语言描述，字数在20字以下。</p>
    </div>
  </div>

  <fieldset>
    <legend>banner设置</legend>
    
    
    <div class=\"help-block\">客户端显示的轮播图。最多5张，建议图片大小为640*330，格式支持jpg、png。</div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner1\">轮播图1</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner1-container\">";
        // line 139
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-upload\" type=\"button\" data-url=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "banner1"));
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-remove\" type=\"button\" data-url=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "banner1"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>







        <div class=\"banner-setting\" role=\"banner1-setting\" ";
        // line 152
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" ";
        // line 153
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"1\" ";
        // line 154
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到连接地址

          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"2\" ";
        // line 156
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) == "2")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到内部课程

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl1\" name=\"bannerUrl1\" class=\"form-control\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl1", array()), "html", null, true);
        echo "\" placeholder=\"请填写连接地址\" ";
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) != "1")) {
            echo "style=\"display:none\"";
        }
        echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse1\" data-role=\"selectBannerCourse\" ";
        // line 164
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) != "2")) {
            echo "style=\"display:none\"";
        }
        echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
        echo "\" >
             选课
            </a>
            <div name=\"bannerCourseShow1\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
        // line 170
        $this->env->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig")->display(array_merge($context, array("course" => (isset($context["bannerCourse1"]) ? $context["bannerCourse1"] : null))));
        // line 171
        echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId1\" class=\"form-control\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId1", array()), "html", null, true);
        echo "\" placeholder=\"请填写内部课程Id\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner1\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner2\">轮播图2</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner2-container\">";
        // line 187
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-upload\" type=\"button\" data-url=\"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "banner2"));
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-remove\" type=\"button\" data-url=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "banner2"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>







        <div class=\"banner-setting\" role=\"banner2-setting\" ";
        // line 200
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" ";
        // line 201
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"1\" ";
        // line 202
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到连接地址

          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"2\" ";
        // line 204
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) == "2")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到内部课程

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl2\" name=\"bannerUrl2\" class=\"form-control\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl2", array()), "html", null, true);
        echo "\" placeholder=\"请填写连接地址\" ";
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) != "1")) {
            echo "style=\"display:none\"";
        }
        echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse2\" data-role=\"selectBannerCourse\" ";
        // line 212
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) != "2")) {
            echo "style=\"display:none\"";
        }
        echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 213
        echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
        echo "\" >
             选课
            </a>
            <div name=\"bannerCourseShow2\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
        // line 218
        $this->env->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig")->display(array_merge($context, array("course" => (isset($context["bannerCourse2"]) ? $context["bannerCourse2"] : null))));
        // line 219
        echo "              </ul>
            </div>

            <input type=\"text\" name=\"bannerJumpToCourseId2\" class=\"form-control\" value=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId2", array()), "html", null, true);
        echo "\" placeholder=\"请填写内部课程Id\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner2\" value=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner3\">轮播图3</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner3-container\">";
        // line 236
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-upload\" type=\"button\" data-url=\"";
        // line 238
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "banner3"));
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-remove\" type=\"button\" data-url=\"";
        // line 239
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "banner3"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>







        <div class=\"banner-setting\" role=\"banner3-setting\" ";
        // line 249
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" ";
        // line 250
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"1\" ";
        // line 251
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到连接地址

          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"2\" ";
        // line 253
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) == "2")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到内部课程

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl3\" name=\"bannerUrl3\" class=\"form-control\" value=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl3", array()), "html", null, true);
        echo "\" placeholder=\"请填写连接地址\" ";
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) != "1")) {
            echo "style=\"display:none\"";
        }
        echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse3\" data-role=\"selectBannerCourse\" ";
        // line 261
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) != "2")) {
            echo "style=\"display:none\"";
        }
        echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 262
        echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
        echo "\" >
             选课
            </a>
            <div name=\"bannerCourseShow3\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
        // line 267
        $this->env->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig")->display(array_merge($context, array("course" => (isset($context["bannerCourse3"]) ? $context["bannerCourse3"] : null))));
        // line 268
        echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId3\" class=\"form-control\" value=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId3", array()), "html", null, true);
        echo "\" placeholder=\"请填写内部课程Id\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner3\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array()), "html", null, true);
        echo "\">
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner4\">轮播图4</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner4-container\">";
        // line 285
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-upload\" type=\"button\" data-url=\"";
        // line 287
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "banner4"));
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-remove\" type=\"button\" data-url=\"";
        // line 288
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "banner4"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>







        <div class=\"banner-setting\" role=\"banner4-setting\" ";
        // line 298
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" ";
        // line 299
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"1\" ";
        // line 300
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到连接地址

          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"2\" ";
        // line 302
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) == "2")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到内部课程

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl4\" name=\"bannerUrl4\" class=\"form-control\" value=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl4", array()), "html", null, true);
        echo "\" placeholder=\"请填写连接地址\" ";
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) != "1")) {
            echo "style=\"display:none\"";
        }
        echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse4\" data-role=\"selectBannerCourse\" ";
        // line 310
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) != "2")) {
            echo "style=\"display:none\"";
        }
        echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 311
        echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
        echo "\" >
             选课
            </a>
            <div name=\"bannerCourseShow4\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
        // line 316
        $this->env->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig")->display(array_merge($context, array("course" => (isset($context["bannerCourse4"]) ? $context["bannerCourse4"] : null))));
        // line 317
        echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId4\" class=\"form-control\" value=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId4", array()), "html", null, true);
        echo "\" placeholder=\"请填写内部课程Id\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner4\" value=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array()), "html", null, true);
        echo "\">
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner5\">轮播图5</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner5-container\">";
        // line 334
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-upload\" type=\"button\" data-url=\"";
        // line 336
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "banner5"));
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-remove\" type=\"button\" data-url=\"";
        // line 337
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "banner5"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>







        <div class=\"banner-setting\" role=\"banner5-setting\" ";
        // line 347
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" ";
        // line 348
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"1\" ";
        // line 349
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到连接地址

          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"2\" ";
        // line 351
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) == "2")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到内部课程

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl5\" name=\"bannerUrl5\" class=\"form-control\" value=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl5", array()), "html", null, true);
        echo "\" placeholder=\"请填写连接地址\" ";
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) != "1")) {
            echo "style=\"display:none\"";
        }
        echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse5\" data-role=\"selectBannerCourse\" ";
        // line 359
        if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) != "2")) {
            echo "style=\"display:none\"";
        }
        echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 360
        echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
        echo "\" >
             选课
            </a>
            <div name=\"bannerCourseShow5\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
        // line 365
        $this->env->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig")->display(array_merge($context, array("course" => (isset($context["bannerCourse5"]) ? $context["bannerCourse5"] : null))));
        // line 366
        echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId5\" class=\"form-control\" value=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId5", array()), "html", null, true);
        echo "\" placeholder=\"请填写内部课程Id\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner5\" value=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    
  </fieldset>


  <fieldset>
  <legend>设置启动图</legend>
  <div class=\"help-block\">最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。</div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash1\">启动图1</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash1-container\">";
        // line 389
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-upload\" type=\"button\" data-url=\"";
        // line 390
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash1"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-remove\" type=\"button\" data-url=\"";
        // line 391
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash1"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash1\" value=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash2\">启动图2</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash2-container\">";
        // line 402
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-upload\" type=\"button\" data-url=\"";
        // line 403
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash2"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-remove\" type=\"button\" data-url=\"";
        // line 404
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash2"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash2\" value=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash3\">启动图3</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash3-container\">";
        // line 415
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-upload\" type=\"button\" data-url=\"";
        // line 416
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash3"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-remove\" type=\"button\" data-url=\"";
        // line 417
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash3"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash3\" value=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash4\">启动图4</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash4-container\">";
        // line 428
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-upload\" type=\"button\" data-url=\"";
        // line 429
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash4"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-remove\" type=\"button\" data-url=\"";
        // line 430
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash4"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash4\" value=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash5\">启动图5</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash5-container\">";
        // line 441
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-upload\" type=\"button\" data-url=\"";
        // line 442
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash5"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-remove\" type=\"button\" data-url=\"";
        // line 443
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash5"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array()))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash5\" value=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  </fieldset>


  <fieldset>
    <legend>每周精选课程</legend>
    <div class=\"help-block\">所选择的课程将会在客户端【每周精选】栏目中显示，最多选择三门。<br>
    客户端【每周精选】栏目中默认显示的是网站中";
        // line 455
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "数最多的课程，最多显示三门。
    </div>
    <div class=\"form-group\">
      <input type='hidden' name=\"courseIds\" value=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "courseIds", array()), "html", null, true);
        echo "\"/>
      <div class=\"col-md-12\" role=\"course-item-container\">
        <ul class=\"course-grids\">
          ";
        // line 461
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("courses", $context)) ? (_twig_default_filter((isset($context["courses"]) ? $context["courses"] : null), null)) : (null)));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 462
            echo "          ";
            $this->env->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig")->display(array_merge($context, array("course" => $context["course"], "showDelBtn" => true)));
            // line 463
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 464
        echo "          <li class=\"course-grid related-course-grid\" role=\"add-course\" 
          style=\"cursor:pointer
          ";
        // line 466
        if ((twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : null)) >= 3)) {
            // line 467
            echo "          ;display:none
          ";
        }
        // line 469
        echo "          \"
          data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 470
        echo $this->env->getExtension('routing')->getPath("admin_course_search");
        echo "\">
            <div class=\"add-course grid-body glyphicon glyphicon-plus\">
              
            </div>
          </li>
        </ul>
      </div>
    </div>
  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1005 => 480,  992 => 470,  989 => 469,  985 => 467,  983 => 466,  979 => 464,  965 => 463,  962 => 462,  945 => 461,  939 => 458,  929 => 455,  916 => 445,  907 => 443,  903 => 442,  895 => 441,  883 => 432,  874 => 430,  870 => 429,  862 => 428,  850 => 419,  841 => 417,  837 => 416,  829 => 415,  817 => 406,  808 => 404,  804 => 403,  796 => 402,  784 => 393,  775 => 391,  771 => 390,  763 => 389,  744 => 373,  736 => 368,  732 => 366,  730 => 365,  722 => 360,  716 => 359,  705 => 355,  696 => 351,  689 => 349,  683 => 348,  677 => 347,  660 => 337,  656 => 336,  647 => 334,  634 => 324,  626 => 319,  622 => 317,  620 => 316,  612 => 311,  606 => 310,  595 => 306,  586 => 302,  579 => 300,  573 => 299,  567 => 298,  550 => 288,  546 => 287,  537 => 285,  524 => 275,  516 => 270,  512 => 268,  510 => 267,  502 => 262,  496 => 261,  485 => 257,  476 => 253,  469 => 251,  463 => 250,  457 => 249,  440 => 239,  436 => 238,  427 => 236,  415 => 227,  407 => 222,  402 => 219,  400 => 218,  392 => 213,  386 => 212,  375 => 208,  366 => 204,  359 => 202,  353 => 201,  347 => 200,  330 => 190,  326 => 189,  317 => 187,  305 => 178,  297 => 173,  293 => 171,  291 => 170,  283 => 165,  277 => 164,  266 => 160,  257 => 156,  250 => 154,  244 => 153,  238 => 152,  221 => 142,  217 => 141,  208 => 139,  190 => 124,  178 => 115,  169 => 113,  165 => 112,  157 => 111,  142 => 101,  129 => 91,  117 => 82,  43 => 10,  40 => 9,  33 => 3,  28 => 6,  26 => 5,);
    }
}
