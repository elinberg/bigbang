<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_12195f0b538419fea2aa4a9323ad44a374bffdeda6e4ffda9cc6167ceb8351ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eff1cd40aae745b43891a4a5ba1ff38b5eacb0e66e65b16d22f933b68ef2b3a5 = $this->env->getExtension("native_profiler");
        $__internal_eff1cd40aae745b43891a4a5ba1ff38b5eacb0e66e65b16d22f933b68ef2b3a5->enter($__internal_eff1cd40aae745b43891a4a5ba1ff38b5eacb0e66e65b16d22f933b68ef2b3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eff1cd40aae745b43891a4a5ba1ff38b5eacb0e66e65b16d22f933b68ef2b3a5->leave($__internal_eff1cd40aae745b43891a4a5ba1ff38b5eacb0e66e65b16d22f933b68ef2b3a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1963189e6b39f94630b00020e0ce4a5fac6681cfc8bbbc8e559ce1c4f999b881 = $this->env->getExtension("native_profiler");
        $__internal_1963189e6b39f94630b00020e0ce4a5fac6681cfc8bbbc8e559ce1c4f999b881->enter($__internal_1963189e6b39f94630b00020e0ce4a5fac6681cfc8bbbc8e559ce1c4f999b881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1963189e6b39f94630b00020e0ce4a5fac6681cfc8bbbc8e559ce1c4f999b881->leave($__internal_1963189e6b39f94630b00020e0ce4a5fac6681cfc8bbbc8e559ce1c4f999b881_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a600b39c48e675ba102f55625aad550045d5cb7145191454042dde525474808e = $this->env->getExtension("native_profiler");
        $__internal_a600b39c48e675ba102f55625aad550045d5cb7145191454042dde525474808e->enter($__internal_a600b39c48e675ba102f55625aad550045d5cb7145191454042dde525474808e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a600b39c48e675ba102f55625aad550045d5cb7145191454042dde525474808e->leave($__internal_a600b39c48e675ba102f55625aad550045d5cb7145191454042dde525474808e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7b60be8fefcfac287c8573f451b7f1d8a9be988fd99ffb137d6ed805b903bd4 = $this->env->getExtension("native_profiler");
        $__internal_d7b60be8fefcfac287c8573f451b7f1d8a9be988fd99ffb137d6ed805b903bd4->enter($__internal_d7b60be8fefcfac287c8573f451b7f1d8a9be988fd99ffb137d6ed805b903bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d7b60be8fefcfac287c8573f451b7f1d8a9be988fd99ffb137d6ed805b903bd4->leave($__internal_d7b60be8fefcfac287c8573f451b7f1d8a9be988fd99ffb137d6ed805b903bd4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
