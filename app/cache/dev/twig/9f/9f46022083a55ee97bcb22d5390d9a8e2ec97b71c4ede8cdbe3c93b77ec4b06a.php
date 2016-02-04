<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_73394f7f690fb72fb5773b28aa4da4faa1074eff23022e53b257724665f9fb30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_789b3b9068551257d0a1dc7bac0ba208fcbae777349ebfd02170bf3e89e58f97 = $this->env->getExtension("native_profiler");
        $__internal_789b3b9068551257d0a1dc7bac0ba208fcbae777349ebfd02170bf3e89e58f97->enter($__internal_789b3b9068551257d0a1dc7bac0ba208fcbae777349ebfd02170bf3e89e58f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_789b3b9068551257d0a1dc7bac0ba208fcbae777349ebfd02170bf3e89e58f97->leave($__internal_789b3b9068551257d0a1dc7bac0ba208fcbae777349ebfd02170bf3e89e58f97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5886628b6372d8211e5f385f025904da10440969b82addd2020feab625210bf6 = $this->env->getExtension("native_profiler");
        $__internal_5886628b6372d8211e5f385f025904da10440969b82addd2020feab625210bf6->enter($__internal_5886628b6372d8211e5f385f025904da10440969b82addd2020feab625210bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5886628b6372d8211e5f385f025904da10440969b82addd2020feab625210bf6->leave($__internal_5886628b6372d8211e5f385f025904da10440969b82addd2020feab625210bf6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_206a166b82ae16e1bd6b119a8bcac74651999284761364039da3a6e1ac9684e2 = $this->env->getExtension("native_profiler");
        $__internal_206a166b82ae16e1bd6b119a8bcac74651999284761364039da3a6e1ac9684e2->enter($__internal_206a166b82ae16e1bd6b119a8bcac74651999284761364039da3a6e1ac9684e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_206a166b82ae16e1bd6b119a8bcac74651999284761364039da3a6e1ac9684e2->leave($__internal_206a166b82ae16e1bd6b119a8bcac74651999284761364039da3a6e1ac9684e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cd23245c5f035185a6b995714bd91e2b9b55f998b3d084f1d75733f04ed224e = $this->env->getExtension("native_profiler");
        $__internal_3cd23245c5f035185a6b995714bd91e2b9b55f998b3d084f1d75733f04ed224e->enter($__internal_3cd23245c5f035185a6b995714bd91e2b9b55f998b3d084f1d75733f04ed224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3cd23245c5f035185a6b995714bd91e2b9b55f998b3d084f1d75733f04ed224e->leave($__internal_3cd23245c5f035185a6b995714bd91e2b9b55f998b3d084f1d75733f04ed224e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
