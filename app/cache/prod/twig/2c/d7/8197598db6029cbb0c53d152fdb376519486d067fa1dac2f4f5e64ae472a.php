<?php

/* TopxiaWebBundle:Course:archive.html.twig */
class __TwigTemplate_2cd78197598db6029cbb0c53d152fdb376519486d067fa1dac2f4f5e64ae472a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程存档 -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"es-row-wrap container-gap\">
\t<div class=\"row\">
\t    <div class=\"col-md-12\">
\t      <div class=\"page-header\"><h1>课程存档</h1></div>
\t    </div>

\t    <div class=\"col-md-12\">
\t    \t";
        // line 14
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 15
            echo "\t    \t<ul class=\"media-list\">
\t    \t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 17
                echo "\t    \t\t";
                $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
                // line 18
                echo "\t    \t\t";
                $context["tags"] = $this->getAttribute($context["course"], "tags", array());
                // line 19
                echo "\t\t        <li class=\"media\">
\t\t        \t<h4><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_archive_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a></h4>
              <div class=\"fsn text-muted\">
\t\t        \t";
                // line 22
                if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                    // line 23
                    echo "  \t\t        \t教师： <a class=\"teacher-nickname mrl\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                    echo "</a>
\t\t        \t";
                }
                // line 25
                echo "\t\t        \t";
                if ((isset($context["tags"]) ? $context["tags"] : null)) {
                    // line 26
                    echo "\t\t\t        \t<span class=\"text-muted\">标签：</span>
                ";
                    // line 27
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 28
                        echo "\t                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                        echo "\" class=\"mrs\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                        echo "</a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "\t\t        \t";
                }
                // line 31
                echo "\t\t\t        </div>
\t\t\t    </li>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t    </ul> 
\t\t    ";
        } else {
            // line 36
            echo "\t\t    \t<div class=\"empty\">目前暂时无课程</div>
\t\t    ";
        }
        // line 38
        echo "\t\t    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
\t    </div>
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  120 => 36,  116 => 34,  108 => 31,  105 => 30,  94 => 28,  90 => 27,  87 => 26,  84 => 25,  76 => 23,  74 => 22,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  54 => 16,  51 => 15,  49 => 14,  39 => 6,  36 => 5,  29 => 3,);
    }
}
