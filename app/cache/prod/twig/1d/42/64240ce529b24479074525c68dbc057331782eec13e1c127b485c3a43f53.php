<?php

/* TopxiaWebBundle:Login:index.html.twig */
class __TwigTemplate_1d4264240ce529b24479074525c68dbc057331782eec13e1c127b485c3a43f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "auth/login";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3\">

    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>登录</h2></div>

      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">

        ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 16
            echo "          <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array())), "html", null, true);
            echo "</div>
        ";
        }
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"login_username\">帐号</label>
          <div class=\"controls\">
            <input class=\"form-control\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required />
            <div class=\"help-block\">请输入Email地址 / 用户昵称</div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"login_password\">密码</label>
          <div class=\"controls\">
            <input class=\"form-control\" id=\"login_password\" type=\"password\" name=\"_password\" required />
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"controls\">
            <span class=\"checkbox mtm pull-right\">
              <label> <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> 记住密码 </label>
            </span>
            <button type=\"submit\" class=\"btn btn-fat btn-primary btn-large\">登录</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["_target_path"]) ? $context["_target_path"] : null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

      <div class=\"ptl\">
          <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\">找回密码</a>
          <span class=\"text-muted mhs\">|</span>
          <span class=\"text-muted\">还没有注册帐号？</span>
          <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">立即注册</a>
      </div>

      ";
        // line 53
        if ($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.enabled")) {
            // line 54
            echo "        <div class=\"social-logins\">
          ";
            // line 55
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null))));
            echo "
        </div>
      ";
        }
        // line 58
        echo "    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 58,  120 => 55,  117 => 54,  115 => 53,  109 => 50,  103 => 47,  96 => 43,  92 => 42,  69 => 22,  62 => 18,  56 => 16,  54 => 15,  49 => 13,  41 => 7,  38 => 6,  31 => 3,  26 => 4,);
    }
}
