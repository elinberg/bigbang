<?php

/* base.html.twig */
class __TwigTemplate_15012b6999d82d39a42f978f308b3daef8344c7fbace575476fdddc24006e0d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47ed51e49cda6374b1436a971153379b5eb194d7d1fd22a7692e9d1755406c26 = $this->env->getExtension("native_profiler");
        $__internal_47ed51e49cda6374b1436a971153379b5eb194d7d1fd22a7692e9d1755406c26->enter($__internal_47ed51e49cda6374b1436a971153379b5eb194d7d1fd22a7692e9d1755406c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_47ed51e49cda6374b1436a971153379b5eb194d7d1fd22a7692e9d1755406c26->leave($__internal_47ed51e49cda6374b1436a971153379b5eb194d7d1fd22a7692e9d1755406c26_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7029c0048dd622becdd72cd7752fa2272c1e655997c4ee4fb60122d7776563a = $this->env->getExtension("native_profiler");
        $__internal_a7029c0048dd622becdd72cd7752fa2272c1e655997c4ee4fb60122d7776563a->enter($__internal_a7029c0048dd622becdd72cd7752fa2272c1e655997c4ee4fb60122d7776563a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a7029c0048dd622becdd72cd7752fa2272c1e655997c4ee4fb60122d7776563a->leave($__internal_a7029c0048dd622becdd72cd7752fa2272c1e655997c4ee4fb60122d7776563a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a927250ef0ab0d7371deecf54841e6cec6155df0baa7492d7db44511d53bfd9 = $this->env->getExtension("native_profiler");
        $__internal_5a927250ef0ab0d7371deecf54841e6cec6155df0baa7492d7db44511d53bfd9->enter($__internal_5a927250ef0ab0d7371deecf54841e6cec6155df0baa7492d7db44511d53bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a927250ef0ab0d7371deecf54841e6cec6155df0baa7492d7db44511d53bfd9->leave($__internal_5a927250ef0ab0d7371deecf54841e6cec6155df0baa7492d7db44511d53bfd9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d75a280de4b146430d3e09c9bc01ca5e5bca43ac261195f207dc319949f3b7e = $this->env->getExtension("native_profiler");
        $__internal_7d75a280de4b146430d3e09c9bc01ca5e5bca43ac261195f207dc319949f3b7e->enter($__internal_7d75a280de4b146430d3e09c9bc01ca5e5bca43ac261195f207dc319949f3b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d75a280de4b146430d3e09c9bc01ca5e5bca43ac261195f207dc319949f3b7e->leave($__internal_7d75a280de4b146430d3e09c9bc01ca5e5bca43ac261195f207dc319949f3b7e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26faa3493aac13fab1ff6e63592aa90972f2f12b0c585b89c94b318f7230ac8e = $this->env->getExtension("native_profiler");
        $__internal_26faa3493aac13fab1ff6e63592aa90972f2f12b0c585b89c94b318f7230ac8e->enter($__internal_26faa3493aac13fab1ff6e63592aa90972f2f12b0c585b89c94b318f7230ac8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_26faa3493aac13fab1ff6e63592aa90972f2f12b0c585b89c94b318f7230ac8e->leave($__internal_26faa3493aac13fab1ff6e63592aa90972f2f12b0c585b89c94b318f7230ac8e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
