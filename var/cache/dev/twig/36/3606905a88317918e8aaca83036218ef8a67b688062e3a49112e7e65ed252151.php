<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8d9db1e216a8fc7438d67609520c0df395effde1d8d561aa69bbdb9cf8df38a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9db1e216a8fc7438d67609520c0df395effde1d8d561aa69bbdb9cf8df38a6->enter($__internal_8d9db1e216a8fc7438d67609520c0df395effde1d8d561aa69bbdb9cf8df38a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_18954cc2ce1139af0d108447a4134ed583e20cd489e40852c53e5a894c07448f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18954cc2ce1139af0d108447a4134ed583e20cd489e40852c53e5a894c07448f->enter($__internal_18954cc2ce1139af0d108447a4134ed583e20cd489e40852c53e5a894c07448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d9db1e216a8fc7438d67609520c0df395effde1d8d561aa69bbdb9cf8df38a6->leave($__internal_8d9db1e216a8fc7438d67609520c0df395effde1d8d561aa69bbdb9cf8df38a6_prof);

        
        $__internal_18954cc2ce1139af0d108447a4134ed583e20cd489e40852c53e5a894c07448f->leave($__internal_18954cc2ce1139af0d108447a4134ed583e20cd489e40852c53e5a894c07448f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a838c1e403614221a260010f4ed743b9418a6b37cbad18437795b1381100275c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a838c1e403614221a260010f4ed743b9418a6b37cbad18437795b1381100275c->enter($__internal_a838c1e403614221a260010f4ed743b9418a6b37cbad18437795b1381100275c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d0f37410c2a45dedb8f3f555333dfaa11798dafbfaadf027c97e39cb95618295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f37410c2a45dedb8f3f555333dfaa11798dafbfaadf027c97e39cb95618295->enter($__internal_d0f37410c2a45dedb8f3f555333dfaa11798dafbfaadf027c97e39cb95618295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d0f37410c2a45dedb8f3f555333dfaa11798dafbfaadf027c97e39cb95618295->leave($__internal_d0f37410c2a45dedb8f3f555333dfaa11798dafbfaadf027c97e39cb95618295_prof);

        
        $__internal_a838c1e403614221a260010f4ed743b9418a6b37cbad18437795b1381100275c->leave($__internal_a838c1e403614221a260010f4ed743b9418a6b37cbad18437795b1381100275c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d88f767fdbe9ecc6ebaa0df5c0a49928eea1b0ec02a64ccd9347621118a6074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d88f767fdbe9ecc6ebaa0df5c0a49928eea1b0ec02a64ccd9347621118a6074->enter($__internal_1d88f767fdbe9ecc6ebaa0df5c0a49928eea1b0ec02a64ccd9347621118a6074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4942758b0bb108ae8ee12b7ba828a61e8981edb98e8e952c051af2101b08ad72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4942758b0bb108ae8ee12b7ba828a61e8981edb98e8e952c051af2101b08ad72->enter($__internal_4942758b0bb108ae8ee12b7ba828a61e8981edb98e8e952c051af2101b08ad72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4942758b0bb108ae8ee12b7ba828a61e8981edb98e8e952c051af2101b08ad72->leave($__internal_4942758b0bb108ae8ee12b7ba828a61e8981edb98e8e952c051af2101b08ad72_prof);

        
        $__internal_1d88f767fdbe9ecc6ebaa0df5c0a49928eea1b0ec02a64ccd9347621118a6074->leave($__internal_1d88f767fdbe9ecc6ebaa0df5c0a49928eea1b0ec02a64ccd9347621118a6074_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b5319758ac2a7d5dd9a9040106d4d568d5f493594e68c4acbe6e7505ce1da46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5319758ac2a7d5dd9a9040106d4d568d5f493594e68c4acbe6e7505ce1da46->enter($__internal_1b5319758ac2a7d5dd9a9040106d4d568d5f493594e68c4acbe6e7505ce1da46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0e975e2e00a95e314edf63198a03993c0306420164e726ae4d2b249fc234fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e975e2e00a95e314edf63198a03993c0306420164e726ae4d2b249fc234fe2->enter($__internal_e0e975e2e00a95e314edf63198a03993c0306420164e726ae4d2b249fc234fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e0e975e2e00a95e314edf63198a03993c0306420164e726ae4d2b249fc234fe2->leave($__internal_e0e975e2e00a95e314edf63198a03993c0306420164e726ae4d2b249fc234fe2_prof);

        
        $__internal_1b5319758ac2a7d5dd9a9040106d4d568d5f493594e68c4acbe6e7505ce1da46->leave($__internal_1b5319758ac2a7d5dd9a9040106d4d568d5f493594e68c4acbe6e7505ce1da46_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/hurricane8/WorkSpace/Projets Perso/MimounCorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
