<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_d0e29f0d94714dd3592ed1f98a325867feb1bcd51e6a5a26c5c00e2949817b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Default:layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["bodyClass"] = "homepage";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/default/css/class-default.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"es-row-wrap container-gap\">

  ";
        // line 13
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "home_top_banner", array())) {
            // line 14
            echo "    <div class=\"homepage-feature homepage-feature-slides mbl\">
      <div class=\"cycle-pager\"></div>
      ";
            // line 16
            echo $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "home_top_banner", array());
            echo "
    </div>
  ";
        }
        // line 19
        echo "
  <div class=\"row row-9-3\">

    <div class=\"col-md-9\">

      ";
        // line 24
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstaled("Classroom") && $this->env->getExtension('topxia_web_twig')->getSetting("classroom.enabled"))) {
            // line 25
            echo "      ";
            $context["items"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendClassrooms", array("count" => 6));
            // line 26
            echo "          <div class=\"es-box\">
              <div class=\"es-box-heading\">
                <h2>";
            // line 28
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</h2>
                <a class=\"pull-right\" href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\">更多&gt;</a>
              </div>
              <div class=\"es-box-body\">
                 ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "classrooms", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 33
                echo "                 ";
                $context["teachers"] = (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "users", array(), "any", false, true), $this->getAttribute($context["classroom"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "users", array(), "any", false, true), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), null)) : (null));
                // line 34
                echo "                 ";
                if (($this->getAttribute($context["loop"], "index", array()) <= 5)) {
                    // line 35
                    echo "                <ul class=\"home-class-list\">
                  <li class=\"class-item\">
                    <a class=\"class-picture-link\" href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">
                      <img class=\"img-responsive\" src=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("classroomPicture", $this->getAttribute($context["classroom"], "largePicture", array()), "large"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                    echo "\">
                    </a>
                    <div class=\"class-body\">
                      <h3 class=\"class-title\">
                        <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                    echo "</a>
                      </h3>
                      <div class=\"class-metas\">
                        ";
                    // line 45
                    if ((isset($context["teachers"]) ? $context["teachers"] : null)) {
                        // line 46
                        echo "                      <span class=\"class-teacher\">
                        <i class=\"fa fa-user\"></i>
                        ";
                        // line 48
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : null));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                            // line 49
                            echo "                          ";
                            if (($this->getAttribute($context["loop"], "index", array()) <= 5)) {
                                // line 50
                                echo "                             <a class=\"teacher-nickname mrl\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "nickname", array()), "html", null, true);
                                echo "</a>
                           ";
                            }
                            // line 52
                            echo "                        ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 53
                        echo "                      </span>
                    ";
                    }
                    // line 55
                    echo "                        <span class=\"class-student hidden-md\"><i class=\"fa fa-users\"></i>";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                    echo "</span>
                        <span class=\"class-price\">

                          ";
                    // line 58
                    if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                        // line 59
                        echo "                              ";
                        if (($this->getAttribute($context["classroom"], "price", array()) > 0)) {
                            // line 60
                            echo "                               ";
                            echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                            echo "
                              ";
                        } else {
                            // line 62
                            echo "                                免费
                              ";
                        }
                        // line 64
                        echo "                          ";
                    } else {
                        // line 65
                        echo "                              ";
                        if (($this->getAttribute($context["classroom"], "price", array()) > 0)) {
                            // line 66
                            echo "                                ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "price", array()), "html", null, true);
                            echo "元
                              ";
                        } else {
                            // line 68
                            echo "                                免费
                              ";
                        }
                        // line 70
                        echo "                          ";
                    }
                    // line 71
                    echo "
                        </span>
                      </div>
                      <div class=\"course-num\">共";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "allClassrooms", array()), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "courseNum", array()), "html", null, true);
                    echo "课程</div>
                    </div>
                  </li>
                   ";
                }
                // line 78
                echo "                 ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                </ul>
              </div>
            </div>
            ";
        }
        // line 83
        echo "

      ";
        // line 85
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 86
            echo "        <div class=\"es-box\">
          <div class=\"es-box-heading\">
            <h2>课程</h2>
            <a class=\"pull-right\" href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">更多&gt;</a>
          </div>
          <div class=\"es-box-body\">
              ";
            // line 92
            echo $this->getAttribute($this, "course_lists", array(0 => $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => 5))), "method");
            echo "
          </div>
        </div>
      ";
        }
        // line 95
        echo " 

      ";
        // line 97
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 98
            echo "
        ";
            // line 99
            if ((isset($context["recentLiveCourses"]) ? $context["recentLiveCourses"] : null)) {
                // line 100
                echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <h2>最新直播</h2>
              ";
                // line 103
                if ((twig_length_filter($this->env, (isset($context["recentLiveCourses"]) ? $context["recentLiveCourses"] : null)) >= 1)) {
                    // line 104
                    echo "                <a class=\"pull-right\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("live_course_explore");
                    echo "\">更多&gt;</a>
              ";
                }
                // line 105
                echo " 
            </div>
            <div class=\"es-box-body\">
              ";
                // line 108
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:LiveCourse:coursesBlock", array("courses" => (isset($context["recentLiveCourses"]) ? $context["recentLiveCourses"] : null), "view" => "list")));
                echo "
            </div>
          </div>
        ";
            }
            // line 112
            echo "      
      ";
        }
        // line 114
        echo "
      ";
        // line 116
        echo "      ";
        $context["articles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("count" => 4));
        // line 117
        echo "      ";
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 118
            echo "        <div class=\"es-box news\">
          <div class=\"es-box-heading\">
            <h2>最新资讯</h2>
            <a class=\"pull-right\" href=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("article_show");
            echo "\">更多&gt;</a>
          </div>
          <div class=\"es-box-body\">
            <ul class=\"row\">
            ";
            // line 125
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 126
                echo "              ";
                if ($context["article"]) {
                    // line 127
                    echo "                <li class=\"col-md-6\">
                  <em>";
                    // line 128
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "updatedTime", array()), "m-d H:i"), "html", null, true);
                    echo " </em>
                  <a href=\"";
                    // line 129
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\"> <span>[";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["article"], "category", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["article"], "category", array(), "any", false, true), "name", array()), "未分类")) : ("未分类")), "html", null, true);
                    echo "]</span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo " </a>
                </li>
              ";
                }
                // line 132
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "            </ul>
          </div>
        </div>
      ";
        }
        // line 137
        echo "
      ";
        // line 139
        echo "      ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled")) {
            // line 140
            echo "        ";
            $context["levels"] = $this->env->getExtension('topxia_data_twig')->getData("VipLevels", array("count" => 100));
            // line 141
            echo "        ";
            if ((isset($context["levels"]) ? $context["levels"] : null)) {
                // line 142
                echo "          <div class=\"es-box vip\">
            <div class=\"es-box-heading\">
              <h2>会员专区</h2>
              <a class=\"pull-right\" href=\"";
                // line 145
                echo $this->env->getExtension('routing')->getPath("vip");
                echo "\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row vip-lists\">
                  ";
                // line 149
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    // line 150
                    echo "                    <li class=\"col-sm-12\">
                      <div class=\"vip-item\">
                        <div class=\"row\">
                          <div class=\"col-sm-4 col-md-4\">
                            <a href=\"";
                    // line 154
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_course_explore", array("levelId" => $this->getAttribute($context["level"], "id", array()))), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\" src=\"";
                    // line 155
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["level"], "picture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["level"], "picture", array()), $this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))) : ($this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                    echo "\">
                          </div>
                          </a>
                          <div class=\"col-sm-5 col-md-5\">
                            <h3>";
                    // line 159
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                    echo "</h3>
                            <p>";
                    // line 160
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["level"], "description", array()), 40);
                    echo "</p>
                          </div>
                          <div class=\"vip-price col-sm-3 col-md-3\">
                          ";
                    // line 163
                    if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                        // line 164
                        echo "                            <h4> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetPrice(($this->getAttribute($context["level"], "monthPrice", array()) * (isset($context["cashRate"]) ? $context["cashRate"] : null))), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                        echo "</h4>
                           ";
                    } else {
                        // line 166
                        echo "                            <h4>¥&nbsp;";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "monthPrice", array()), "html", null, true);
                        echo "</h4>
                         ";
                    }
                    // line 168
                    echo "                            <h4><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_buy");
                    echo "\" class=\"btn btn-success\">立即购买</a></h4>
                          </div>
                        </div>
                      </div>      
                    </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "              </ul>
            </div>
          </div>
        ";
            }
            // line 177
            echo "   
      ";
        }
        // line 179
        echo "
      ";
        // line 181
        echo "      ";
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array()), 1)) : (1))) {
            // line 182
            echo "        ";
            $context["groups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 15));
            // line 183
            echo "        ";
            if ((isset($context["groups"]) ? $context["groups"] : null)) {
                // line 184
                echo "          <div class=\"es-box hot-group\">
            <div class=\"es-box-heading\"><h2>最热小组</h2><a href=\"";
                // line 185
                echo $this->env->getExtension('routing')->getPath("group_search_group");
                echo "\" class=\"pull-right\">更多&gt;</a></div>
            <div class=\"es-box-body\">
               <ul class=\"list-unstyled\">
                ";
                // line 188
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 189
                    echo "                  ";
                    if (($this->getAttribute($context["group"], "status", array()) == "open")) {
                        echo " 
                    <li class=\"col-md-4\"> 
                      <div class=\"panel\">
                         <div class=\"media\">
                            <a href=\"";
                        // line 193
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                        echo "\" class=\"pull-left\">
                              ";
                        // line 194
                        if ($this->getAttribute($context["group"], "logo", array())) {
                            // line 195
                            echo "                              <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($context["group"], "logo", array())), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                            echo "\">
                              ";
                        } else {
                            // line 197
                            echo "                              <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                            echo "\">
                              ";
                        }
                        // line 199
                        echo "                            </a>
                            <div class=\"media-body\">
                              <p><a  href=\"";
                        // line 201
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["group"], "title", array()), 10);
                        echo "</a></p>
                              <div class=\"text-muted text-normal\">
                                ";
                        // line 203
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
                        echo "个成员&nbsp;
                                ";
                        // line 204
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
                        echo "个话题
                              </div>
                            </div> 
                          </div>
                        </div>
                      </li>
                    ";
                    }
                    // line 211
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "              </ul>
            </div>
          </div>
        ";
            }
            // line 216
            echo "      ";
        }
        // line 217
        echo "    </div>

    <div class=\"col-md-3\">
      ";
        // line 220
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:promotedTeacherBlock"));
        echo "

      ";
        // line 223
        echo "      ";
        $context["learns"] = $this->env->getExtension('topxia_data_twig')->getData("PersonDynamic", array("count" => 5));
        // line 224
        echo "      ";
        if ((isset($context["learns"]) ? $context["learns"] : null)) {
            // line 225
            echo "        <div class=\"es-box status-side\">
          <div class=\"es-box-heading\">
            <h2>";
            // line 227
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "动态</h2>
          </div>
            <div class=\"es-box-body\">
              <ul class=\"media-list\">
                ";
            // line 231
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["learns"]) ? $context["learns"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["learn"]) {
                // line 232
                echo "                  ";
                if (($this->getAttribute($context["learn"], "type", array()) == "finished_testpaper")) {
                    // line 233
                    echo "                  <li class=\"media\">
                    <a class=\"pull-left\" href=\"";
                    // line 234
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                      <img class=\"media-object\" src=\"";
                    // line 235
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "mediumAvatar", array()), ""), "html", null, true);
                    echo "\">
                    </a>
                    <div class=\"media-body\">
                      <a href=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "nickname", array()), "html", null, true);
                    echo "</a>
                      完成了考试 ";
                    // line 239
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array()), "testpaper", array()), "name", array()), 15);
                    echo "
                    </div>
                  </li>

                ";
                } elseif (($this->getAttribute($context["learn"], "type", array()) == "finished_homework")) {
                    // line 244
                    echo "                <li class=\"media\">
                  <a class=\"pull-left\" href=\"";
                    // line 245
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                    <img class=\"media-object\" src=\"";
                    // line 246
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "mediumAvatar", array()), ""), "html", null, true);
                    echo "\">
                  </a>
                  <div class=\"media-body\">
                    <a href=\"";
                    // line 249
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "nickname", array()), "html", null, true);
                    echo "</a>
                    完成了 课程 ";
                    // line 250
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter((($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array(), "any", false, true), "course", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array(), "any", false, true), "course", array(), "any", false, true), "title", array()), "")) : ("")), 15);
                    echo " 课时 ";
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter((($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array(), "any", false, true), "lesson", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array(), "any", false, true), "lesson", array(), "any", false, true), "title", array()), "")) : ("")), 15);
                    echo " 下的作业
                  </div>
                </li>




                ";
                } elseif (($this->getAttribute($context["learn"], "type", array()) == "finished_exercise")) {
                    // line 258
                    echo "                <li class=\"media\">
                  <a class=\"pull-left\" href=\"";
                    // line 259
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                    <img class=\"media-object\" src=\"";
                    // line 260
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "mediumAvatar", array()), ""), "html", null, true);
                    echo "\">
                  </a>
                  <div class=\"media-body\">
                    <a href=\"";
                    // line 263
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "nickname", array()), "html", null, true);
                    echo "</a>
                    完成了 课程 ";
                    // line 264
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter((($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array(), "any", false, true), "course", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array(), "any", false, true), "course", array(), "any", false, true), "title", array()), "")) : ("")), 15);
                    echo " 课时 ";
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter((($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array(), "any", false, true), "lesson", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array(), "any", false, true), "lesson", array(), "any", false, true), "title", array()), "")) : ("")), 15);
                    echo " 下的练习
                  </div>
                </li>

                  ";
                } elseif ((($this->getAttribute($context["learn"], "objectType", array()) == "course") && ($this->getAttribute($context["learn"], "type", array()) == "become_student"))) {
                    // line 269
                    echo "                  <li class=\"media\">
                    <a class=\"pull-left\" href=\"";
                    // line 270
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                      <img class=\"media-object\" src=\"";
                    // line 271
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "mediumAvatar", array()), ""), "html", null, true);
                    echo "\">
                    </a>
                    <div class=\"media-body\">
                      <a href=\"";
                    // line 274
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "nickname", array()), "html", null, true);
                    echo "</a>
                      加入了课程 ";
                    // line 275
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array()), "course", array()), "title", array()), 15);
                    echo "
                    </div>
                  </li>
                  ";
                } elseif ((($this->getAttribute($context["learn"], "objectType", array()) == "classroom") && ($this->getAttribute($context["learn"], "type", array()) == "become_student"))) {
                    // line 279
                    echo "                    <li class=\"media\">
                    <a class=\"pull-left\" href=\"";
                    // line 280
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                      <img class=\"media-object\" src=\"";
                    // line 281
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "mediumAvatar", array()), ""), "html", null, true);
                    echo "\">
                    </a>
                    <div class=\"media-body\">
                      <a href=\"";
                    // line 284
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "nickname", array()), "html", null, true);
                    echo "</a>
                      成为了";
                    // line 285
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array()), "classroom", array()), "title", array()), 15);
                    echo " 的学员
                    </div>
                  </li>

                      ";
                } elseif ((($this->getAttribute($context["learn"], "objectType", array()) == "classroom") && ($this->getAttribute($context["learn"], "type", array()) == "become_auditor"))) {
                    // line 290
                    echo "                       <li class=\"media\">
                    <a class=\"pull-left\" href=\"";
                    // line 291
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                      <img class=\"media-object\" src=\"";
                    // line 292
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "mediumAvatar", array()), ""), "html", null, true);
                    echo "\">
                    </a>
                    <div class=\"media-body\">
                      <a href=\"";
                    // line 295
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "nickname", array()), "html", null, true);
                    echo "</a>
                      成为了";
                    // line 296
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array()), "classroom", array()), "title", array()), 15);
                    echo " 的旁听生
                    </div>
                  </li>
 
                  
                  ";
                } elseif (($this->getAttribute($context["learn"], "type", array()) == "learned_lesson")) {
                    // line 302
                    echo "                  <li class=\"media\">
                    <a class=\"pull-left\" href=\"";
                    // line 303
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                      <img class=\"media-object\" src=\"";
                    // line 304
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "mediumAvatar", array()), ""), "html", null, true);
                    echo "\">
                    </a>
                    <div class=\"media-body\">
                      <a href=\"";
                    // line 307
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "nickname", array()), "html", null, true);
                    echo "</a>
                      完成了课时 ";
                    // line 308
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array()), "lesson", array()), "title", array()), 15);
                    echo "
                    </div>
                  </li>
                  ";
                } elseif (($this->getAttribute($context["learn"], "type", array()) == "favorite_course")) {
                    // line 312
                    echo "                    <li class=\"media\">
                      <a class=\"pull-left\" href=\"";
                    // line 313
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                        <img class=\"media-object\" src=\"";
                    // line 314
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "mediumAvatar", array()), ""), "html", null, true);
                    echo "\">
                      </a>
                      <div class=\"media-body\">
                        <a href=\"";
                    // line 317
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "nickname", array()), "html", null, true);
                    echo "</a>
                        收藏了课程 ";
                    // line 318
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array()), "course", array()), "title", array()), 15);
                    echo "
                      </div>
                    </li>
                    ";
                } elseif (($this->getAttribute($context["learn"], "type", array()) == "start_learn_lesson")) {
                    // line 322
                    echo "                    <li class=\"media\">
                      <a class=\"pull-left\" href=\"";
                    // line 323
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                        <img class=\"media-object\" src=\"";
                    // line 324
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "mediumAvatar", array()), ""), "html", null, true);
                    echo "\">
                      </a>
                      <div class=\"media-body\">
                        <a href=\"";
                    // line 327
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["learn"], "user", array()), "nickname", array()), "html", null, true);
                    echo "</a>
                        开始学习课时 ";
                    // line 328
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["learn"], "properties", array()), "lesson", array()), "title", array()), 15);
                    echo "
                      </div>
                    </li>
                  ";
                }
                // line 332
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 337
        echo "      
      ";
        // line 338
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:latestReviewsBlock", array("number" => 5)));
        echo "

      ";
        // line 341
        echo "      ";
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array()), 1)) : (1))) {
            // line 342
            echo "        ";
            $context["hotThreads"] = $this->env->getExtension('topxia_data_twig')->getData("HotThreads", array("count" => 11));
            // line 343
            echo "        ";
            if ((isset($context["hotThreads"]) ? $context["hotThreads"] : null)) {
                // line 344
                echo "          <div class=\"es-box hot-threads\">
            <div class=\"es-box-heading\"><h2>最热话题</h2></div>
            <div class=\"es-box-body\">
              <ul class=\"text-list\">
                ";
                // line 348
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hotThreads"]) ? $context["hotThreads"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                    // line 349
                    echo "                  ";
                    if ($context["thread"]) {
                        // line 350
                        echo "                    <li style=\"border-bottom:none;background:url('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/triangle.png"), "html", null, true);
                        echo "') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;\"><a  href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($context["thread"], "groupId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["thread"], "title", array()), 15);
                        echo "</a></li>
                  ";
                    }
                    // line 352
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 353
                echo "              </ul>
            </div>
          </div>
        ";
            }
            // line 357
            echo "      ";
        }
        // line 358
        echo "
    </div>

  </div>

</div>
";
    }

    // line 366
    public function getcourse_lists($__courses__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "courses" => $__courses__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 367
            echo "  ";
            $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter((isset($context["mode"]) ? $context["mode"] : null), "default")) : ("default"));
            // line 368
            echo "  <ul class=\"course-wide-list\">
    ";
            // line 369
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 370
                echo "    <li class=\"course-item clearfix\">
      <a class=\"course-picture-link\" href=\"";
                // line 371
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">
        <img class=\"course-picture\" src=\"";
                // line 372
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($context["course"], "middlePicture", array()), "large"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
      </a>
      <div class=\"course-body\">
          <div style=\"float:right;\" class=\"text-muted mrm mls\">
            ";
                // line 376
                if (($this->env->getExtension('topxia_web_twig')->getSetting("course.coursesPrice") == 0)) {
                    // line 377
                    echo "              ";
                    if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                        // line 378
                        echo "                <span class=\"course-price\" style=\"display:inline\">";
                        if (($this->getAttribute($context["course"], "coinPrice", array()) > 0)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "coinPrice", array()), "html", null, true);
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                        } else {
                            echo "免费";
                        }
                        // line 379
                        echo "                </span>
              ";
                    } else {
                        // line 381
                        echo "                <span class=\"course-price\">";
                        if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                            echo "元";
                        } else {
                            echo "免费";
                        }
                        // line 382
                        echo "                </span>
              ";
                    }
                    // line 384
                    echo "            ";
                }
                // line 385
                echo "            </div>
        <h4 class=\"course-title\"><a href=\"";
                // line 386
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
        ";
                // line 387
                if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                    // line 388
                    echo "          <span class=\"label label-success \">更新中</span>
        ";
                } elseif (($this->getAttribute($context["course"], "serializeMode", array()) == "finished")) {
                    // line 390
                    echo "          <span class=\"label label-warning \">已完结</span>
        ";
                }
                // line 392
                echo "        ";
                if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                    // line 393
                    echo "            ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                    // line 394
                    echo "            ";
                    if ((((isset($context["lesson"]) ? $context["lesson"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array())))) {
                        // line 395
                        echo "              <span class=\"label label-warning series-mode-label\">正在直播中</span>
            ";
                    } else {
                        // line 397
                        echo "              <span class=\"label label-success series-mode-label\">直播</span>
            ";
                    }
                    // line 399
                    echo "        ";
                }
                // line 400
                echo "        </h4>

        ";
                // line 402
                if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                    // line 403
                    echo "          ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array()), null)) : (null));
                    // line 404
                    echo "          ";
                    if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                        // line 405
                        echo "            <div class=\"live-course-lesson mbm\">
              <span class=\"text-success fsm mrm\">";
                        // line 406
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), "n月j日 H:i"), "html", null, true);
                        echo " ~ ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array()), "H:i"), "html", null, true);
                        echo "</span>
              <span class=\"text-muted fsm mrm\">第";
                        // line 407
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                        echo "课时</span>
            </div>
          ";
                    }
                    // line 410
                    echo "        ";
                } else {
                    // line 411
                    echo "          <div class=\"course-about ellipsis\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                    echo "</div>
        ";
                }
                // line 413
                echo "
        <div class=\"course-footer clearfix\">

          ";
                // line 416
                $context["teacher"] = _twig_default_filter(twig_first($this->env, $this->getAttribute($context["course"], "teachers", array())), null);
                // line 417
                echo "          ";
                if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                    // line 418
                    echo "            <div class=\"teacher\">
              <a href=\"";
                    // line 419
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "smallAvatar", array()), ""), "html", null, true);
                    echo "\" class=\"teacher-avatar\"></a>
              <a class=\"teacher-nickname ellipsis\" href=\"";
                    // line 420
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                    echo "</a>
              <span class=\"teacher-title ellipsis\">";
                    // line 421
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array()), "html", null, true);
                    echo "</span>
            </div>
          ";
                }
                // line 424
                echo "          <div class=\"course-metas\">
            <span class=\"stars-";
                // line 425
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["course"], "rating", array())), "html", null, true);
                echo "\">&nbsp;</span>
            ";
                // line 426
                if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                    // line 427
                    echo "            <span class=\"divider\"></span>
            <span class=\"text-muted mrm mls\"><strong>";
                    // line 428
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                    echo "</strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 430
                echo "          </div>
        </div>
      </div>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 435
            echo "  </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1151 => 435,  1141 => 430,  1134 => 428,  1131 => 427,  1129 => 426,  1125 => 425,  1122 => 424,  1116 => 421,  1110 => 420,  1104 => 419,  1101 => 418,  1098 => 417,  1096 => 416,  1091 => 413,  1085 => 411,  1082 => 410,  1076 => 407,  1070 => 406,  1067 => 405,  1064 => 404,  1061 => 403,  1059 => 402,  1055 => 400,  1052 => 399,  1048 => 397,  1044 => 395,  1041 => 394,  1038 => 393,  1035 => 392,  1031 => 390,  1027 => 388,  1025 => 387,  1019 => 386,  1016 => 385,  1013 => 384,  1009 => 382,  1001 => 381,  997 => 379,  989 => 378,  986 => 377,  984 => 376,  975 => 372,  971 => 371,  968 => 370,  964 => 369,  961 => 368,  958 => 367,  947 => 366,  937 => 358,  934 => 357,  928 => 353,  922 => 352,  912 => 350,  909 => 349,  905 => 348,  899 => 344,  896 => 343,  893 => 342,  890 => 341,  885 => 338,  882 => 337,  876 => 333,  870 => 332,  863 => 328,  857 => 327,  851 => 324,  847 => 323,  844 => 322,  837 => 318,  831 => 317,  825 => 314,  821 => 313,  818 => 312,  811 => 308,  805 => 307,  799 => 304,  795 => 303,  792 => 302,  781 => 296,  775 => 295,  769 => 292,  765 => 291,  762 => 290,  752 => 285,  746 => 284,  740 => 281,  736 => 280,  733 => 279,  726 => 275,  720 => 274,  714 => 271,  710 => 270,  707 => 269,  697 => 264,  691 => 263,  685 => 260,  681 => 259,  678 => 258,  665 => 250,  659 => 249,  653 => 246,  649 => 245,  646 => 244,  638 => 239,  632 => 238,  626 => 235,  622 => 234,  619 => 233,  616 => 232,  612 => 231,  601 => 227,  597 => 225,  594 => 224,  591 => 223,  586 => 220,  581 => 217,  578 => 216,  572 => 212,  566 => 211,  556 => 204,  552 => 203,  543 => 201,  539 => 199,  531 => 197,  523 => 195,  521 => 194,  515 => 193,  507 => 189,  503 => 188,  497 => 185,  494 => 184,  491 => 183,  488 => 182,  485 => 181,  482 => 179,  478 => 177,  472 => 174,  459 => 168,  453 => 166,  446 => 164,  444 => 163,  438 => 160,  434 => 159,  425 => 155,  421 => 154,  415 => 150,  411 => 149,  404 => 145,  399 => 142,  396 => 141,  393 => 140,  390 => 139,  387 => 137,  381 => 133,  375 => 132,  365 => 129,  361 => 128,  358 => 127,  355 => 126,  351 => 125,  344 => 121,  339 => 118,  336 => 117,  333 => 116,  330 => 114,  326 => 112,  319 => 108,  314 => 105,  308 => 104,  306 => 103,  301 => 100,  299 => 99,  296 => 98,  294 => 97,  290 => 95,  283 => 92,  277 => 89,  272 => 86,  270 => 85,  266 => 83,  260 => 79,  246 => 78,  239 => 74,  234 => 71,  231 => 70,  227 => 68,  221 => 66,  218 => 65,  215 => 64,  211 => 62,  203 => 60,  200 => 59,  198 => 58,  191 => 55,  187 => 53,  173 => 52,  165 => 50,  162 => 49,  145 => 48,  141 => 46,  139 => 45,  131 => 42,  122 => 38,  118 => 37,  114 => 35,  111 => 34,  108 => 33,  91 => 32,  85 => 29,  81 => 28,  77 => 26,  74 => 25,  72 => 24,  65 => 19,  59 => 16,  55 => 14,  53 => 13,  48 => 10,  45 => 9,  39 => 6,  34 => 5,  31 => 4,  26 => 2,);
    }
}
