<?php

/* TopxiaAdminBundle:System:course-setting.html.twig */
class __TwigTemplate_a16b3baefd2499b740fe3f9c7d191db55454e221cb5c19a726b782b00b8983bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:operation.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "course_setting";
        // line 6
        $context["script_controller"] = "setting/course";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_maincontent($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\"><h1>课程设置</h1></div>

";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >给新";
        // line 17
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "发送欢迎私信</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 20
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_message_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "welcome_message_enabled", array()));
        echo "
      <p class=\"help-block\">开启后，新";
        // line 21
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "加入课程后，会收到教师的欢迎私信</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">欢迎私信内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "welcome_message_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 38
        echo "
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户昵称</li>
            <li>{{course}} 为课程名称</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >购买课程时填写个人资料</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 48
        echo $this->env->getExtension('topxia_html_twig')->radios("buy_fill_userinfo", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "buy_fill_userinfo", array()));
        echo "
      <p class=\"help-block\">开启后，";
        // line 49
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "购买课程时，需填写个人资料</p>
      </div>
      <div class=\"controls col-md-8 col-md-offset-3\"  id=\"show-list\">
        ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 53
            echo "            ";
            if (($context["sort"] == "truename")) {
                // line 54
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">真实姓名</button>
            ";
            }
            // line 56
            echo "            ";
            if (($context["sort"] == "mobile")) {
                // line 57
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">手机号码</button>
            ";
            }
            // line 59
            echo "            ";
            if (($context["sort"] == "qq")) {
                // line 60
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">QQ</button>
            ";
            }
            // line 62
            echo "            ";
            if (($context["sort"] == "company")) {
                // line 63
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">所在公司</button>
            ";
            }
            // line 65
            echo "            ";
            if (($context["sort"] == "idcard")) {
                // line 66
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">身份证号码</button>
            ";
            }
            // line 68
            echo "             ";
            if (($context["sort"] == "gender")) {
                // line 69
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">性别</button>
            ";
            }
            // line 71
            echo "             ";
            if (($context["sort"] == "job")) {
                // line 72
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">职业</button>
            ";
            }
            // line 74
            echo "             ";
            if (($context["sort"] == "weibo")) {
                // line 75
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">微博</button>
            ";
            }
            // line 77
            echo "             ";
            if (($context["sort"] == "weixin")) {
                // line 78
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">微信</button>
            ";
            }
            // line 80
            echo "            ";
            if ((isset($context["userFields"]) ? $context["userFields"] : null)) {
                // line 81
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 82
                    echo "                      ";
                    if (($context["sort"] == $this->getAttribute($context["field"], "fieldName", array()))) {
                        // line 83
                        echo "                           <button type=\"button\" class=\"btn btn-default btn-xs\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                        echo "</button>
                     ";
                    }
                    // line 85
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "            ";
            }
            // line 87
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        <div class=\"pull-right \"><a href=\"javascript:\" id=\"show-list-btn\">编辑 <span class=\"
  glyphicon glyphicon-chevron-down\"></span></a></div>
      </div>
      <div  class=\"controls col-md-8 col-md-offset-2\" id=\"buy-userinfo-list\">
            <div class=\"form-group\"><ul class=\"buy-userinfo-list sortable-list\" data-role=\"list\">
            ";
        // line 93
        if ($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFieldNameArray", array())) {
            // line 94
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFieldNameArray", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                // line 95
                echo "               ";
                if (($context["sort"] == "truename")) {
                    // line 96
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"truename\"  ";
                    // line 98
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "truename")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"truename\"></input> 真实姓名
                </li>
               ";
                }
                // line 101
                echo "               ";
                if (($context["sort"] == "mobile")) {
                    // line 102
                    echo "                  <li class=\"list-group-item clearfix\" data-role=\"item\" >
                    <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                    &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"mobile\" ";
                    // line 104
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "mobile")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"mobile\"></input> 手机号码(带格式校检)
                  </li>
               ";
                }
                // line 107
                echo "               ";
                if (($context["sort"] == "qq")) {
                    // line 108
                    echo "                      <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\"  ";
                    // line 110
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "qq")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "  name=\"userinfoFields[]\" value=\"qq\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"qq\"></input> QQ（带格式校验）
                    </li>
               ";
                }
                // line 113
                echo "               ";
                if (($context["sort"] == "company")) {
                    // line 114
                    echo "                    <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\" ";
                    // line 116
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "company")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"company\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"company\"></input> 所在公司
                    </li>
               ";
                }
                // line 119
                echo "               ";
                if (($context["sort"] == "idcard")) {
                    // line 120
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 122
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "idcard")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"idcard\"></input> 身份证号码(带格式校检)
                </li>
               ";
                }
                // line 125
                echo "               ";
                if (($context["sort"] == "gender")) {
                    // line 126
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 128
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "gender")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"gender\"></input> 性别
                </li>
               ";
                }
                // line 131
                echo "               ";
                if (($context["sort"] == "job")) {
                    // line 132
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 134
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "job")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"job\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"job\"></input> 职业
                </li>
               ";
                }
                // line 137
                echo "               ";
                if (($context["sort"] == "weibo")) {
                    // line 138
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 140
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "weibo")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"weibo\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weibo\"></input> 微博
                </li>
               ";
                }
                // line 143
                echo "               ";
                if (($context["sort"] == "weixin")) {
                    // line 144
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 146
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "weixin")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"weixin\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weixin\"></input> 微信
                </li>
               ";
                }
                // line 149
                echo "               ";
                if ((isset($context["userFields"]) ? $context["userFields"] : null)) {
                    // line 150
                    echo "               ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 151
                        echo "                ";
                        if (($context["sort"] == $this->getAttribute($context["field"], "fieldName", array()))) {
                            // line 152
                            echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\"  ";
                            // line 154
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                                if (($context["sort"] == $this->getAttribute($context["field"], "fieldName", array()))) {
                                    echo "checked=true";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo " name=\"userinfoFields[]\" value=\"";
                            echo twig_escape_filter($this->env, $context["sort"], "html", null, true);
                            echo "\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                            echo twig_escape_filter($this->env, $context["sort"], "html", null, true);
                            echo "\"></input> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                            echo "
                </li>            
               ";
                        }
                        // line 157
                        echo "               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "               ";
                }
                // line 159
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "            ";
        } else {
            // line 161
            echo "            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"truename\" ></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"truename\"></input> 真实姓名
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"mobile\" ></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"mobile\"></input> 手机号码(带格式校检)
            </li>
              <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"qq\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"qq\"></input> QQ（带格式校验）
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"company\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"company\"></input> 所在公司
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"job\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"job\"></input> 职业
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"gender\"></input> 性别
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"idcard\"></input> 身份证号码(带格式校检)
            </li>
              <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"weibo\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weibo\"></input> 微博
            </li>
              <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"weixin\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weixin\"></input> 微信
            </li>
            ";
            // line 197
            if ((isset($context["userFields"]) ? $context["userFields"] : null)) {
                // line 198
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 199
                    echo "                    <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\"></input> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo "            ";
            }
            // line 205
            echo "          ";
        }
        // line 206
        echo "            </ul><div style=\"text-align:center;\"><a href=\"javascript:\" id=\"hide-list-btn\">收起 <span class=\"
glyphicon glyphicon-chevron-up\"></span></a></div>
  </div></div>

    </div>
";
        // line 222
        echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师设置课程价格</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 227
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_modify_price", array(1 => "是", 0 => "否"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_modify_price", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师添加/移除";
        // line 233
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 236
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_manage_student", array(1 => "是", 0 => "否"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_manage_student", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师导出";
        // line 242
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "资料</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 245
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_export_student", array(1 => "是", 0 => "否"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_export_student", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许";
        // line 251
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "下载课时的音视频</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 254
        echo $this->env->getExtension('topxia_html_twig')->radios("student_download_media", array(0 => "不允许", 1 => "允许"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "student_download_media", array()));
        echo "
        <div class=\"help-block\">开启此项设置后，";
        // line 255
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "可在课时学习界面侧栏的\"资料\"面板中下载。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>课程详情页显示相关课程</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 264
        echo $this->env->getExtension('topxia_html_twig')->radios("relatedCourses", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "relatedCourses", array()));
        echo "
        <div class=\"help-block\">根据课程的标签，显示相关课程</div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>免费课时允许未登录用户观看</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 273
        echo $this->env->getExtension('topxia_html_twig')->radios("allowAnonymousPreview", array(1 => "允许", 0 => "不允许"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "allowAnonymousPreview", array()));
        echo "
        <div class=\"help-block\">如果允许此项设置,未登录用户（游客）可观看免费课时</div>
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>图文课时防复制</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 283
        echo $this->env->getExtension('topxia_html_twig')->radios("copy_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "copy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>课程图片预览</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 293
        echo $this->env->getExtension('topxia_html_twig')->radios("picturePreview_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "picturePreview_enabled", array()));
        echo "
        <div class=\"help-block\">如果允许此项设置,点击课程图片预览课程首个免费视频</div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">课程中允许显示";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
        echo "人数</label>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 301
        echo $this->env->getExtension('topxia_html_twig')->radios("show_student_num_enabled", array("1" => "开启", "0" => "关闭"), (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "show_student_num_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "show_student_num_enabled", array()), "1")) : ("1")));
        echo "
      </div>
    </div>


";
        // line 314
        echo "
  </fieldset>
  <fieldset>
    <legend id=\"live-course-set\">直播课程</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >开启状态</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 324
        echo $this->env->getExtension('topxia_html_twig')->radios("live_course_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_course_enabled", array()));
        echo "
      </div>
    </div>

    ";
        // line 328
        if (((($this->getAttribute((isset($context["capacity"]) ? $context["capacity"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["capacity"]) ? $context["capacity"] : null), "code", array()), 0)) : (0)) == 2)) {
            // line 329
            echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"logo\">直播LOGO</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"live-course-logo-container\">";
            // line 334
            if ((($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array()), false)) : (false))) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
        <button class=\"btn btn-default btn-sm\" id=\"live-course-logo-upload\" type=\"button\" data-url=\"";
            // line 335
            echo $this->env->getExtension('routing')->getPath("admin_setting_live_logo_upload");
            echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"live-course-logo-remove\" type=\"button\" data-url=\"";
            // line 336
            echo $this->env->getExtension('routing')->getPath("admin_setting_live_logo_remove");
            echo "\" ";
            if ((!(($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array()), false)) : (false)))) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>
        <p class=\"help-block\">
          <b>只针对直播新方案。</b><br>
          请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过100*23。</p>
        <input type=\"hidden\" name=\"live_logo\" value=\"";
            // line 340
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array()), "")) : ("")), "html", null, true);
            echo "\">
      </div>
    </div>
    ";
        }
        // line 344
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>同时在线人数上限</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"mts text-muted\" >";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_student_capacity", array()), "html", null, true);
        echo "人</div>
        <input class=\"form-control\" name=\"live_student_capacity\" type=\"hidden\" data-value=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_student_capacity", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\"><a href=\"http://www.edusoho.com/services/liveroom\" target=\"_blank\">点击查看如何购买扩充在线人数</a></p>
      </div>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  794 => 363,  779 => 351,  775 => 350,  767 => 344,  760 => 340,  749 => 336,  745 => 335,  737 => 334,  730 => 329,  728 => 328,  721 => 324,  709 => 314,  701 => 301,  696 => 299,  687 => 293,  674 => 283,  661 => 273,  649 => 264,  633 => 255,  629 => 254,  619 => 251,  610 => 245,  600 => 242,  591 => 236,  581 => 233,  572 => 227,  565 => 222,  558 => 206,  555 => 205,  552 => 204,  539 => 201,  535 => 199,  530 => 198,  528 => 197,  490 => 161,  487 => 160,  481 => 159,  478 => 158,  472 => 157,  451 => 154,  447 => 152,  444 => 151,  439 => 150,  436 => 149,  421 => 146,  417 => 144,  414 => 143,  399 => 140,  395 => 138,  392 => 137,  377 => 134,  373 => 132,  370 => 131,  355 => 128,  351 => 126,  348 => 125,  333 => 122,  329 => 120,  326 => 119,  311 => 116,  307 => 114,  304 => 113,  289 => 110,  285 => 108,  282 => 107,  267 => 104,  263 => 102,  260 => 101,  245 => 98,  241 => 96,  238 => 95,  233 => 94,  231 => 93,  224 => 88,  218 => 87,  215 => 86,  209 => 85,  203 => 83,  200 => 82,  195 => 81,  192 => 80,  188 => 78,  185 => 77,  181 => 75,  178 => 74,  174 => 72,  171 => 71,  167 => 69,  164 => 68,  160 => 66,  157 => 65,  153 => 63,  150 => 62,  146 => 60,  143 => 59,  139 => 57,  136 => 56,  132 => 54,  129 => 53,  125 => 52,  115 => 49,  111 => 48,  92 => 38,  87 => 30,  71 => 21,  67 => 20,  57 => 17,  47 => 10,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
