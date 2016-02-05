<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d90912b43aa329ce2fe2b1f9112f6eaa818e527435dfd93f50572043be58295a extends Twig_Template
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
        $__internal_5fd8bac934c97f5284850ac1beb8a0da3d50e13f036866ea4246895a1fe1b466 = $this->env->getExtension("native_profiler");
        $__internal_5fd8bac934c97f5284850ac1beb8a0da3d50e13f036866ea4246895a1fe1b466->enter($__internal_5fd8bac934c97f5284850ac1beb8a0da3d50e13f036866ea4246895a1fe1b466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fd8bac934c97f5284850ac1beb8a0da3d50e13f036866ea4246895a1fe1b466->leave($__internal_5fd8bac934c97f5284850ac1beb8a0da3d50e13f036866ea4246895a1fe1b466_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d56baed398e0587017015711bc742dfe0043c4a0fea298ddc16deaf187c9e6c6 = $this->env->getExtension("native_profiler");
        $__internal_d56baed398e0587017015711bc742dfe0043c4a0fea298ddc16deaf187c9e6c6->enter($__internal_d56baed398e0587017015711bc742dfe0043c4a0fea298ddc16deaf187c9e6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d56baed398e0587017015711bc742dfe0043c4a0fea298ddc16deaf187c9e6c6->leave($__internal_d56baed398e0587017015711bc742dfe0043c4a0fea298ddc16deaf187c9e6c6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c297601c3954d23d65274fc6819a031e2d7a4d26fbd6214d05ef997c2703afae = $this->env->getExtension("native_profiler");
        $__internal_c297601c3954d23d65274fc6819a031e2d7a4d26fbd6214d05ef997c2703afae->enter($__internal_c297601c3954d23d65274fc6819a031e2d7a4d26fbd6214d05ef997c2703afae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c297601c3954d23d65274fc6819a031e2d7a4d26fbd6214d05ef997c2703afae->leave($__internal_c297601c3954d23d65274fc6819a031e2d7a4d26fbd6214d05ef997c2703afae_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2322632fc05f9fad618f5dd2362aa822034efd4174fbdfc556040b801341474 = $this->env->getExtension("native_profiler");
        $__internal_c2322632fc05f9fad618f5dd2362aa822034efd4174fbdfc556040b801341474->enter($__internal_c2322632fc05f9fad618f5dd2362aa822034efd4174fbdfc556040b801341474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c2322632fc05f9fad618f5dd2362aa822034efd4174fbdfc556040b801341474->leave($__internal_c2322632fc05f9fad618f5dd2362aa822034efd4174fbdfc556040b801341474_prof);

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
