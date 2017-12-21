<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_15459bd6ad04978e93af6066f700dec7446c1bfa3536f175590c13bcf746d920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15459bd6ad04978e93af6066f700dec7446c1bfa3536f175590c13bcf746d920->enter($__internal_15459bd6ad04978e93af6066f700dec7446c1bfa3536f175590c13bcf746d920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_41a74a852269246314d3cce53c0131606372f2e0af5faacdc7e57dc162ce6d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a74a852269246314d3cce53c0131606372f2e0af5faacdc7e57dc162ce6d32->enter($__internal_41a74a852269246314d3cce53c0131606372f2e0af5faacdc7e57dc162ce6d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15459bd6ad04978e93af6066f700dec7446c1bfa3536f175590c13bcf746d920->leave($__internal_15459bd6ad04978e93af6066f700dec7446c1bfa3536f175590c13bcf746d920_prof);

        
        $__internal_41a74a852269246314d3cce53c0131606372f2e0af5faacdc7e57dc162ce6d32->leave($__internal_41a74a852269246314d3cce53c0131606372f2e0af5faacdc7e57dc162ce6d32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4c3575a7356a0778098d613e9897292a87bea2d6fd42cdc5a1332d0ebb297b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c3575a7356a0778098d613e9897292a87bea2d6fd42cdc5a1332d0ebb297b2->enter($__internal_d4c3575a7356a0778098d613e9897292a87bea2d6fd42cdc5a1332d0ebb297b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bd1512fb77570015a07c26675a15edacc85c64069f1fd2ebe6b025788965bf7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1512fb77570015a07c26675a15edacc85c64069f1fd2ebe6b025788965bf7c->enter($__internal_bd1512fb77570015a07c26675a15edacc85c64069f1fd2ebe6b025788965bf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bd1512fb77570015a07c26675a15edacc85c64069f1fd2ebe6b025788965bf7c->leave($__internal_bd1512fb77570015a07c26675a15edacc85c64069f1fd2ebe6b025788965bf7c_prof);

        
        $__internal_d4c3575a7356a0778098d613e9897292a87bea2d6fd42cdc5a1332d0ebb297b2->leave($__internal_d4c3575a7356a0778098d613e9897292a87bea2d6fd42cdc5a1332d0ebb297b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a531b448ebf8abcb1eb084e5aa90f35edc251bfd0bc3b14914b6abd95bf9a2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a531b448ebf8abcb1eb084e5aa90f35edc251bfd0bc3b14914b6abd95bf9a2b2->enter($__internal_a531b448ebf8abcb1eb084e5aa90f35edc251bfd0bc3b14914b6abd95bf9a2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_50f5302d04f4d338fb9effb102d7b4dec9a105869e4b7d5dbf83888e6dd0d233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f5302d04f4d338fb9effb102d7b4dec9a105869e4b7d5dbf83888e6dd0d233->enter($__internal_50f5302d04f4d338fb9effb102d7b4dec9a105869e4b7d5dbf83888e6dd0d233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_50f5302d04f4d338fb9effb102d7b4dec9a105869e4b7d5dbf83888e6dd0d233->leave($__internal_50f5302d04f4d338fb9effb102d7b4dec9a105869e4b7d5dbf83888e6dd0d233_prof);

        
        $__internal_a531b448ebf8abcb1eb084e5aa90f35edc251bfd0bc3b14914b6abd95bf9a2b2->leave($__internal_a531b448ebf8abcb1eb084e5aa90f35edc251bfd0bc3b14914b6abd95bf9a2b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_461473addccc9a580fb34ca303e65db72bb80e10f2ca54070658305ac331c0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461473addccc9a580fb34ca303e65db72bb80e10f2ca54070658305ac331c0f7->enter($__internal_461473addccc9a580fb34ca303e65db72bb80e10f2ca54070658305ac331c0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7d102f89496e73c38781ff3a5277f1888678612e2f60e8ab9207fca035d763a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d102f89496e73c38781ff3a5277f1888678612e2f60e8ab9207fca035d763a->enter($__internal_d7d102f89496e73c38781ff3a5277f1888678612e2f60e8ab9207fca035d763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7d102f89496e73c38781ff3a5277f1888678612e2f60e8ab9207fca035d763a->leave($__internal_d7d102f89496e73c38781ff3a5277f1888678612e2f60e8ab9207fca035d763a_prof);

        
        $__internal_461473addccc9a580fb34ca303e65db72bb80e10f2ca54070658305ac331c0f7->leave($__internal_461473addccc9a580fb34ca303e65db72bb80e10f2ca54070658305ac331c0f7_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/hurricane8/WorkSpace/Projets Perso/MimounCorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
