<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_3300a4ec3a645fe01d4c286a3a4ef93307f2afa975196a97dc91f7b48b3af51b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        $context["admin_macro"] = $this->env->loadTemplate("TopxiaAdminBundle::macro.html.twig");
        // line 3
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 15
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 16
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 18
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>

";
        // line 29
        $context["nav"] = ((array_key_exists("nav", $context)) ? (_twig_default_filter((isset($context["nav"]) ? $context["nav"] : null), null)) : (null));
        // line 30
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null));
        // line 31
        echo "
<body>
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getUrl("admin");
        echo "\">";
        if ((!$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned"))) {
            echo "EduSoho";
        }
        echo "管理后台</a>
      </div>
      <div class=\"navbar-collapse collapse\">

        <ul class=\"nav navbar-nav\">
      ";
        // line 46
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 47
            echo "          <li ";
            if (((isset($context["nav"]) ? $context["nav"] : null) == "course")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_course");
            echo "\">课程</a></li>
          <li ";
            // line 48
            if (((isset($context["nav"]) ? $context["nav"] : null) == "user")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_user");
            echo "\">用户</a></li>
          <li ";
            // line 49
            if (((isset($context["nav"]) ? $context["nav"] : null) == "content")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_navigation");
            echo "\">内容</a></li>          
          <li ";
            // line 50
            if (((isset($context["nav"]) ? $context["nav"] : null) == "group")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_group");
            echo "\">小组</a></li>
          ";
            // line 51
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstaled("Classroom")) {
                // line 52
                echo "            <li ";
                if (((isset($context["nav"]) ? $context["nav"] : null) == "classroom")) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_classroom");
                echo "\">班级</a></li>
          ";
            }
            // line 54
            echo "          <li ";
            if (((isset($context["nav"]) ? $context["nav"] : null) == "app")) {
                echo "class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("admin_app_installed");
            echo "\">应用</a>
          </li>
        ";
        }
        // line 58
        echo "
          ";
        // line 59
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 60
            echo "            <li ";
            if (((isset($context["nav"]) ? $context["nav"] : null) == "system")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_site");
            echo "\">系统</a></li>
          ";
        }
        // line 62
        echo "
        </ul>

        <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> 回首页</a></li>
          <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "uri", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "uri", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo "</a></li>
          <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>

  <div class=\"container\">
    <div class=\"row\">";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
  </div>


  ";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 81
        echo "
  ";
        // line 82
        $this->env->loadTemplate("TopxiaWebBundle::script_boot.html.twig")->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 83
        echo "
  <div id=\"modal\" class=\"modal\" ></div>
</body>
</html>";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        if ((!$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned"))) {
            echo "EduSoho";
        }
        echo "管理后台";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 80,  253 => 76,  248 => 22,  239 => 14,  232 => 83,  230 => 82,  227 => 81,  225 => 80,  218 => 76,  207 => 68,  201 => 67,  197 => 66,  191 => 62,  181 => 60,  179 => 59,  176 => 58,  170 => 55,  163 => 54,  153 => 52,  151 => 51,  143 => 50,  135 => 49,  127 => 48,  118 => 47,  116 => 46,  104 => 41,  92 => 31,  90 => 30,  88 => 29,  81 => 25,  77 => 24,  74 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  55 => 18,  49 => 16,  47 => 15,  43 => 14,  39 => 13,  27 => 3,  25 => 2,  23 => 1,);
    }
}
