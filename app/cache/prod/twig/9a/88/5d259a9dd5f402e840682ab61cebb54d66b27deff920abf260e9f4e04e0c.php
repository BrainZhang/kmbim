<?php

/* TopxiaAdminBundle:System:auth.html.twig */
class __TwigTemplate_9a885d259a9dd5f402e840682ab61cebb54d66b27deff920abf260e9f4e04e0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:user_set.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:user_set.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "auth";
        // line 6
        $context["script_controller"] = "setting/auth";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "注册设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_maincontent($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"page-header\"><h1>注册设置</h1></div>

";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form  id=\"auth-form\" class=\"form-horizontal\" method=\"post\" novalidate>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >新用户注册</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 20
        echo $this->env->getExtension('topxia_html_twig')->radios("register_mode", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >注册防护机制</label>
    </div>
    <div class=\"controls col-md-8 \">
      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"register_protective\" id=\"none\" value=\"none\" ";
        // line 30
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "none")) {
            echo "checked=\"checked\"";
        }
        echo "> 无
      </label>
      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"register_protective\" id=\"low\" value=\"low\" ";
        // line 33
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "low")) {
            echo "checked=\"checked\"";
        }
        echo "> 低
      </label>
      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"register_protective\" id=\"middle\" value=\"middle\" ";
        // line 36
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "middle")) {
            echo "checked=\"checked\"";
        }
        echo "> 中
      </label>
      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"register_protective\" id=\"high\" value=\"high\"";
        // line 39
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "high")) {
            echo "checked=\"checked\"";
        }
        echo "> 高
      </label>
    </div>

    <div class=\"controls col-md-8 mtl low register-help\" ";
        // line 43
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "low")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
      <div class=\"well\">
        方案说明：
            <p class=\"mll mtm\">1：注册时需填写验证码。</p>
      </div>
    </div>

    <div class=\"controls col-md-8 mtl middle register-help\" ";
        // line 50
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "middle")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
      <div class=\"well\">
        方案说明：
            <p class=\"mll mtm\">1：注册时需填写验证码。</p>
            <p class=\"mll mtm\">2：同一IP24小时內只能注册30次。</p>
      </div>
    </div>

    <div class=\"controls col-md-8 mtl high register-help\" ";
        // line 58
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "high")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
      <div class=\"well\">
        方案说明：
            <p class=\"mll mtm\">1：注册时需填写验证码。</p>
            <p class=\"mll mtm\">2：同一IP24小时內只能注册10次。</p>
            <p class=\"mll mtm\">3：同一IP1小时內只能注册1个账号。</p>
      </div>
    </div>
";
        // line 94
        echo "  </div>


";
        // line 106
        echo "
\t<div class=\"form-group\">
\t  <div class=\"col-md-3 control-label\">
\t    <label >邮箱验证登录</label>
\t  </div>
\t  <div class=\"controls col-md-8 radios\">
\t    ";
        // line 112
        echo $this->env->getExtension('topxia_html_twig')->radios("email_enabled", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "email_enabled", array()));
        echo "
\t  </div>
\t</div>
\t<div class=\"help-block\" style=\"margin-left:250px;margin-top:-15px;\">开启后,邮箱未验证的用户将无法登录</div>
\t<input type=\"hidden\" name=\"setting_time\"  value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("auth.setting_time"), "html", null, true);
        echo "\" >
  
  <fieldset>
    <legend>新用户激活邮件设置</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"email_activation_title\" >新用户激活邮件标题</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"email_activation_title\" name=\"email_activation_title\" class=\"form-control\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "email_activation_title", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"email_activation_body\">新用户激活邮件内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"email_activation_body\" name=\"email_activation_body\" class=\"form-control\" rows=\"5\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "email_activation_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 145
        echo "
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户昵称</li>
            <li>{{sitename}} 为网站名称</li>
            <li>{{siteurl}} 为网站的地址</li>
            <li>{{verifyurl}} 为邮箱验证地址</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend>注册信息字段设置</legend>
      <div class=\"row\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_body\">注册时需提供</label>
        </div>
        <div class=\"controls col-md-8 \"  id=\"show-list\">
        ";
        // line 157
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "registerSort", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 158
            echo "            ";
            if (($context["sort"] == "email")) {
                // line 159
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">邮箱地址</button>
            ";
            }
            // line 161
            echo "            ";
            if (($context["sort"] == "nickname")) {
                // line 162
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">昵称</button>
            ";
            }
            // line 164
            echo "            ";
            if (($context["sort"] == "password")) {
                // line 165
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">密码</button>
            ";
            }
            // line 167
            echo "            ";
            if (($context["sort"] == "truename")) {
                // line 168
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">姓名</button>
            ";
            }
            // line 170
            echo "            ";
            if (($context["sort"] == "idcard")) {
                // line 171
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">身份证号码</button>
            ";
            }
            // line 173
            echo "             ";
            if (($context["sort"] == "mobile")) {
                // line 174
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">手机号码</button>
            ";
            }
            // line 176
            echo "             ";
            if (($context["sort"] == "job")) {
                // line 177
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">职业</button>
            ";
            }
            // line 179
            echo "             ";
            if (($context["sort"] == "gender")) {
                // line 180
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">性别</button>
            ";
            }
            // line 182
            echo "             ";
            if (($context["sort"] == "company")) {
                // line 183
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">公司</button>
            ";
            }
            // line 185
            echo "            ";
            if ((isset($context["userFields"]) ? $context["userFields"] : null)) {
                // line 186
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 187
                    echo "                      ";
                    if (($context["sort"] == $this->getAttribute($context["field"], "fieldName", array()))) {
                        // line 188
                        echo "                           <button type=\"button\" class=\"btn btn-default btn-xs\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                        echo "</button>
                     ";
                    }
                    // line 190
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "            ";
            }
            // line 192
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "        <div class=\"pull-right \"><a href=\"javascript:\" id=\"show-list-btn\">编辑 <span class=\"
  glyphicon glyphicon-chevron-down\"></span></a></div>
      </div>
        <div  class=\"controls col-md-8 \" id=\"show-register-list\">
          <div class=\"form-group \"><ul class=\"sortable-list\" data-role=\"list\">
          </div>
            <div class=\"form-group\"><ul class=\"register-list sortable-list\" data-role=\"list\">
            ";
        // line 200
        if ($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "registerFieldNameArray", array())) {
            // line 201
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "registerFieldNameArray", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                // line 202
                echo "               ";
                if (($context["sort"] == "email")) {
                    // line 203
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"email\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"email\"></input> 邮箱地址<span class=\"text-muted\"> (系统必需，不可取消)</span>
                </li>
                
               ";
                }
                // line 209
                echo "               ";
                if (($context["sort"] == "nickname")) {
                    // line 210
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"nickname\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"nickname\"></input> 昵称<span class=\"text-muted\"> (系统必需，不可取消)</span>
                </li>
               ";
                }
                // line 215
                echo "               ";
                if (($context["sort"] == "password")) {
                    // line 216
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerSort[]\" value=\"confirmPassword\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"confirmPassword\"></input> 密码<span class=\"text-muted\"> (系统必需，不可取消)</span>
                </li>
               ";
                }
                // line 221
                echo "               ";
                if (($context["sort"] == "truename")) {
                    // line 222
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 224
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "registerSort", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "truename")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"truename\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"truename\"></input> 姓名
                </li>
               ";
                }
                // line 227
                echo "               ";
                if (($context["sort"] == "mobile")) {
                    // line 228
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 230
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "registerSort", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "mobile")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"mobile\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"mobile\"></input> 手机号码<span class=\"text-muted\"> (带格式校检)</span>
                </li>
               ";
                }
                // line 233
                echo "               ";
                if (($context["sort"] == "idcard")) {
                    // line 234
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 236
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "registerSort", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "idcard")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"idcard\"></input> 身份证号码<span class=\"text-muted\"> (带格式校检)</span>
                </li>
               ";
                }
                // line 239
                echo "               ";
                if (($context["sort"] == "gender")) {
                    // line 240
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 242
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "registerSort", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "gender")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"gender\"></input> 性别
                </li>
               ";
                }
                // line 245
                echo "               ";
                if (($context["sort"] == "job")) {
                    // line 246
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 248
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "registerSort", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "job")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"job\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"job\"></input> 职业
                </li>
               ";
                }
                // line 251
                echo "               ";
                if (($context["sort"] == "company")) {
                    // line 252
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\"  ";
                    // line 254
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "registerSort", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (($context["sort"] == "company")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"company\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"company\"></input> 公司
                </li>            
               ";
                }
                // line 257
                echo "               ";
                if ((isset($context["userFields"]) ? $context["userFields"] : null)) {
                    // line 258
                    echo "               ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 259
                        echo "                ";
                        if (($context["sort"] == $this->getAttribute($context["field"], "fieldName", array()))) {
                            // line 260
                            echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\"  ";
                            // line 262
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "registerSort", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                                if (($context["sort"] == $this->getAttribute($context["field"], "fieldName", array()))) {
                                    echo "checked=true";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo " name=\"registerSort[]\" value=\"";
                            echo twig_escape_filter($this->env, $context["sort"], "html", null, true);
                            echo "\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
                            echo twig_escape_filter($this->env, $context["sort"], "html", null, true);
                            echo "\"></input> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                            echo "
                </li>            
               ";
                        }
                        // line 265
                        echo "               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 266
                    echo "               ";
                }
                // line 267
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "            ";
        } else {
            // line 269
            echo "            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"email\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"email\"></input> 邮箱地址<span class=\"text-muted\"> (系统必需，不可取消)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"nickname\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"nickname\"></input> 昵称<span class=\"text-muted\"> (系统必需，不可取消)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerSort[]\" value=\"confirmPassword\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"confirmPassword\"></input> 密码<span class=\"text-muted\"> (系统必需，不可取消)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"truename\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"truename\"></input> 姓名
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"mobile\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"mobile\"></input> 手机号码<span class=\"text-muted\"> (带格式校检)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"idcard\"></input> 身份证号码<span class=\"text-muted\"> (带格式校检)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"gender\"></input> 性别
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"job\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"job\"></input> 职业
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"company\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"company\"></input> 公司
            </li>
            ";
            // line 305
            if ((isset($context["userFields"]) ? $context["userFields"] : null)) {
                // line 306
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 307
                    echo "                    <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"";
                    // line 309
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
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
                // line 312
                echo "            ";
            }
            // line 313
            echo "            ";
        }
        // line 314
        echo "            </ul>
            <span class=\"help-block pull-right\">可拖动调整先后次序.勾选后，在注册时就必须要填写该项目，将会增加注册难度，请谨慎使用</span>
          </div>
          <div style=\"text-align:center;\"><a href=\"javascript:\" id=\"hide-list-btn\">收起 <span class=\"
glyphicon glyphicon-chevron-up\"></span></a></div>
        </div>
    </div>
  </fieldset>
  <fieldset>
    <legend>欢迎信息设置</legend>

    <div class=\"form-group\" style=\"display:none;\">
      <div class=\"col-md-3 control-label\">
        <label>发送欢迎信息</label>
      </div>
      <div class=\"controls col-md-8 checkboxs\">
        ";
        // line 330
        echo $this->env->getExtension('topxia_html_twig')->checkboxs("welcome_methods", array("message" => "站内私信", "email" => "电子邮件"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_methods", array()));
        echo "
        <div class=\"help-block\">新用户邮件激活开启时，电子邮件的发送欢迎信息方式无效。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">发送欢迎信息</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 340
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_enabled", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_enabled", array()));
        echo "
        <div class=\"help-block\">欢迎信以站内私信的方式，发送给新用户。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_sender\">欢迎信息发送方</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_sender\" name=\"welcome_sender\" class=\"form-control\" value=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_sender", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">通常为这个网站的管理员，请输入用户昵称。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">欢迎信息标题</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_title\" name=\"welcome_title\" class=\"form-control\" value=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_title", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_body\">欢迎信息内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_body\" name=\"welcome_body\" class=\"form-control\" rows=\"5\">";
        // line 369
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 379
        echo "
          <div>注意： 私信长度不能超过1000个字符</div>
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户昵称</li>
            <li>{{sitename}} 为网站名称</li>
            <li>{{siteurl}} 为网站的地址</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>服务条款设置</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms\">是否开启服务条款</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 392
        echo $this->env->getExtension('topxia_html_twig')->radios("user_terms", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "user_terms", array()));
        echo "
        <div class=\"help-block\">开启后用户注册时必须同意条款才能注册</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms_body\">条款内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea class=\"form-control\" id=\"user_terms_body\" rows=\"16\" name=\"user_terms_body\" data-image-upload-url=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "user_terms_body", array()), "html", null, true);
        echo "</textarea>
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
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  747 => 414,  730 => 402,  717 => 392,  693 => 379,  688 => 369,  676 => 360,  663 => 350,  650 => 340,  637 => 330,  619 => 314,  616 => 313,  613 => 312,  600 => 309,  596 => 307,  591 => 306,  589 => 305,  551 => 269,  548 => 268,  542 => 267,  539 => 266,  533 => 265,  512 => 262,  508 => 260,  505 => 259,  500 => 258,  497 => 257,  482 => 254,  478 => 252,  475 => 251,  460 => 248,  456 => 246,  453 => 245,  438 => 242,  434 => 240,  431 => 239,  416 => 236,  412 => 234,  409 => 233,  394 => 230,  390 => 228,  387 => 227,  372 => 224,  368 => 222,  365 => 221,  358 => 216,  355 => 215,  348 => 210,  345 => 209,  337 => 203,  334 => 202,  329 => 201,  327 => 200,  318 => 193,  312 => 192,  309 => 191,  303 => 190,  297 => 188,  294 => 187,  289 => 186,  286 => 185,  282 => 183,  279 => 182,  275 => 180,  272 => 179,  268 => 177,  265 => 176,  261 => 174,  258 => 173,  254 => 171,  251 => 170,  247 => 168,  244 => 167,  240 => 165,  237 => 164,  233 => 162,  230 => 161,  226 => 159,  223 => 158,  219 => 157,  196 => 145,  191 => 135,  179 => 126,  166 => 116,  159 => 112,  151 => 106,  146 => 94,  132 => 58,  118 => 50,  105 => 43,  96 => 39,  88 => 36,  80 => 33,  72 => 30,  59 => 20,  48 => 12,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
