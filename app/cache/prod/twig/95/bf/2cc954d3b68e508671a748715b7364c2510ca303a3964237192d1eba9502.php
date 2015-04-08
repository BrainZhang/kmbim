<?php

/* TopxiaAdminBundle:System:optimize.html.twig */
class __TwigTemplate_95bf2cc954d3b68e508671a748715b7364c2510ca303a3964237192d1eba9502 extends Twig_Template
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
        $context["menu"] = "optimize";
        // line 7
        $context["script_controller"] = "optimize/optimize";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "优化和备份 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
\t<div class=\"page-header\"><h1>优化和备份</h1></div>

\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "




<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">刷新缓存</h3>
  </div>
  <div class=\"panel-body\">
  \t<p>
      刷新并重建缓存,让系统保持最优的状态。 
    </p>
    <p >
  \t\t<button id=\"removecache\" class=\"btn btn-primary fr \" data-url=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_cache");
        echo "\">刷新缓存</button>
  \t</p>
  </div>
</div>

\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading\">
\t    <h3 class=\"panel-title\">优化磁盘空间</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p>
\t       移除系统的临时数据，释放出更多磁盘空间。
\t    </p>
\t    <p >
\t  \t\t<button id=\"removeTmp\" class=\"btn btn-primary fr\" data-url=\"";
        // line 41
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_tmp");
        echo "\">优化磁盘空间</button>
\t  \t</p>
\t  </div>
\t</div>


<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">数据库备份和下载</h3>
  </div>
  <div class=\"panel-body\">
   \t<p>
       备份数据库，并下载备份文件。 下载完成后请<span class=\"text-info\">优化磁盘空间</span>。
    </p>
    <p>
  \t\t<button id=\"backupDatabase\" class=\"btn btn-primary fr\" data-url=\"";
        // line 56
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_backupdb");
        echo "\">数据库备份和下载</button>
  \t</p>
  \t<p>
  \t\t<span id=\"dbbackup\" class=\"glyphicon glyphicon-download-alt hide\"><a id=\"dbdownload\" href=\"#\" target=\"_blank\">下载数据库备份</a></span>
  \t</p>
  </div>
</div>

<hr/>
<h1><small>谨慎操作区域</small></h1>
<hr/>

";
        // line 68
        if (!twig_in_filter("upgrade", (isset($context["disabled_features"]) ? $context["disabled_features"] : null))) {
            // line 69
            echo "\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading \">
\t    <h3 class=\"panel-title text-warning\">清空系统备份数据</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p class=\"text-warning\">
\t       慎重：请确保当前系统已经升级成功。当系统升级过程中发生意外，备份的系统文件和数据库可用于恢复。
\t    </p>   \t
\t    <p>
\t       清空系统升级过程中备份的系统文件和备数据库。通过清空系统备份数据，可以让系统释放出更多的磁盘空间
\t    <p/>
\t    <p >
\t  \t\t<button id=\"removeBackup\" class=\"btn btn-warning fr\" data-url=\"";
            // line 81
            echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_backup");
            echo "\">清空系统备份数据</button>
\t  \t</p>
\t  </div>
\t</div>

";
        }
        // line 87
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title text-warning\">优化课程视频和相关资料文件</h3>
  </div>
  <div class=\"panel-body\">
   \t<p class=\"text-warning\">
       注意：该功能慎用。请仔细阅读下列说明： 
    </p>
     <p>
       优化课程文件，将已经不存在系统中的课程相关上传文件移除。假如您希望保留这些数据，
       请不要执行该功能。
    </p>
    <p>
  \t\t<button id=\"optimizeFile\" class=\"btn btn-danger fr\" type=\"button\"  data-url=\"";
        // line 101
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_upload_files");
        echo "\">优化课程文件</button>
  \t</p>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:optimize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 101,  140 => 87,  131 => 81,  117 => 69,  115 => 68,  100 => 56,  82 => 41,  65 => 27,  48 => 13,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
