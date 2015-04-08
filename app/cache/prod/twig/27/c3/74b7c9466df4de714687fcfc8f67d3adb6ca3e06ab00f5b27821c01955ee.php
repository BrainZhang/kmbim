<?php

/* TopxiaAdminBundle:Default:system.status.html.twig */
class __TwigTemplate_27c374b7c9466df4de714687fcfc8f67d3adb6ca3e06ab00f5b27821c01955ee extends Twig_Template
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
        echo "<table class=\"table table-condensed table-bordered table-striped table-hover\" >
  ";
        // line 2
        $context["status"] = 0;
        // line 3
        echo "  ";
        if (((isset($context["error"]) ? $context["error"] : null) != "error")) {
            // line 4
            echo "    ";
            if ((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : null)) {
                // line 5
                echo "      ";
                $context["status"] = 1;
                // line 6
                echo "      <tr>
        <td>主系统</td>
        <td>
          <a class=\"btn btn-xs btn-info pull-right\" href=\"";
                // line 9
                echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
                echo "\">立即更新</a>
          <span class=\"glyphicon glyphicon-info-sign text-info\"></span>
          最新版本:";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : null), "package", array()), "toVersion", array()), "html", null, true);
                echo "
          当前版本: ";
                // line 12
                echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
                echo "
        </td>
      </tr>
    ";
            } else {
                // line 16
                echo "      <tr>
        <td>主系统</td>
        <td>
          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          已是最新版本 ";
                // line 20
                echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
                echo "
        </td>
      </tr>
    ";
            }
            // line 24
            echo "
  ";
        }
        // line 26
        echo "
      ";
        // line 27
        if (((isset($context["error"]) ? $context["error"] : null) == "error")) {
            // line 28
            echo "        <tr><td>主系统</td><td rowspan=\"4\"><div class=\"empty\"><span  style=\"color:#cc0000;float:left;text-align:left;\">云平台参数设置不正确，会影响到系统正常的运行，<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">请修改设置。</a></sapn></div></td></tr>
        <tr><td>应用更新</td></tr>

        <tr ><td>新应用</td></tr>

        <tr><td>云视频</td></tr>

      ";
        } else {
            // line 36
            echo "        <tr><td>应用更新</td><td>";
            if ((isset($context["app_count"]) ? $context["app_count"] : null)) {
                // line 37
                echo "          ";
                if (((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), 0)) : (0)) == 1) && ((isset($context["app_count"]) ? $context["app_count"] : null) == 1))) {
                    // line 38
                    echo "          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 所有应用都已是最新版本
          ";
                } else {
                    // line 39
                    echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还有 <span class=\"badge\" style=\"background-color:#cc0000;\">
          ";
                    // line 40
                    if ((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), 0)) : (0)) == 1)) {
                        echo twig_escape_filter($this->env, ((isset($context["app_count"]) ? $context["app_count"] : null) - 1), "html", null, true);
                    } else {
                        // line 41
                        echo "          ";
                        echo twig_escape_filter($this->env, (isset($context["app_count"]) ? $context["app_count"] : null), "html", null, true);
                        echo "
          ";
                    }
                    // line 42
                    echo "</span> 个应用没有更新 <a class=\"btn btn-xs btn-info pull-right\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
                    echo "\">立即更新</a>
          ";
                }
                // line 44
                echo "          ";
            } else {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 所有应用都已是最新版本
      ";
            }
            // line 45
            echo "</td></tr>

        <tr><td>新应用</td><td>";
            // line 47
            if (((isset($context["unInstallAppCount"]) ? $context["unInstallAppCount"] : null) > 0)) {
                echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还有 <span class=\"badge\">";
                echo twig_escape_filter($this->env, (isset($context["unInstallAppCount"]) ? $context["unInstallAppCount"] : null), "html", null, true);
                echo "</span> 个应用没有安装<a class=\"pull-right\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_app_center");
                echo "\">查看</a>";
            } else {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已安装了全部应用
      ";
            }
            // line 48
            echo "</td></tr>

        <tr><td>云视频</td><td>";
            // line 50
            if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_bucket") != "")) {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已开通";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") != "cloud")) {
                    echo "(尚未启用)<a class=\"pull-right\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
                    echo "\">查看</a>";
                }
            } else {
                echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还未开通<a class=\"pull-right\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
                echo "\">查看</a>
      ";
            }
            // line 51
            echo "</td></tr>
      ";
        }
        // line 53
        echo "        <tr>
          <td>直播</td>
          <td>
            ";
        // line 56
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_student_capacity", 0) > 0)) {
            // line 57
            echo "              <span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 
              已开通
              ";
            // line 59
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled") == 0)) {
                // line 60
                echo "                (尚未启用)
                <a class=\"pull-right\" href=\"";
                // line 61
                echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
                echo "#live-course-set\">查看</a>
              ";
            } else {
                // line 63
                echo "                ";
                if ((twig_length_filter($this->env, (isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null)) > 0)) {
                    // line 64
                    echo "                  ";
                    if (((($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array()), "")) : ("")) == "normal")) {
                        // line 65
                        echo "                    (有效期至";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "expire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "expire", array()), "0")) : ("0")), "Y-m-d"), "html", null, true);
                        echo " )
                  ";
                    } elseif (((($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array()), "")) : ("")) == "tryOut")) {
                        // line 66
                        echo " 
                    (体验用户)
                  ";
                    }
                    // line 68
                    echo "                  
                ";
                }
                // line 70
                echo "              ";
            }
            // line 71
            echo "
            ";
        } else {
            // line 73
            echo "              <span class=\"glyphicon glyphicon-info-sign text-info\"></span> 
              还未开通
              <a class=\"pull-right\" href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
            echo "#live-course-set\">查看</a>
            ";
        }
        // line 77
        echo "          </td>
        </tr>

        <tr><td>移动客户端</td><td>";
        // line 80
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("mobile"), "enabled", array()), null)) : (null))) {
            echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已启用";
        } else {
            echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还未启用<a class=\"pull-right\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
            echo "\">查看</a>
      ";
        }
        // line 81
        echo "</td></tr>

</table>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:system.status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 81,  223 => 80,  218 => 77,  213 => 75,  209 => 73,  205 => 71,  202 => 70,  198 => 68,  193 => 66,  187 => 65,  184 => 64,  181 => 63,  176 => 61,  173 => 60,  171 => 59,  167 => 57,  165 => 56,  160 => 53,  156 => 51,  142 => 50,  138 => 48,  127 => 47,  123 => 45,  117 => 44,  111 => 42,  105 => 41,  101 => 40,  98 => 39,  94 => 38,  91 => 37,  88 => 36,  76 => 28,  74 => 27,  71 => 26,  67 => 24,  60 => 20,  54 => 16,  47 => 12,  43 => 11,  38 => 9,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
