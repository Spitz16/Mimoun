<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_0cee56cc80a042d6c573e679e035bc6aef4d69aab7f70f0a8ba9589f87c6dec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cee56cc80a042d6c573e679e035bc6aef4d69aab7f70f0a8ba9589f87c6dec1->enter($__internal_0cee56cc80a042d6c573e679e035bc6aef4d69aab7f70f0a8ba9589f87c6dec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b8dac25b96b49393517ad38928126f7a266c7d0f6ed35e57452605c023b7fa9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8dac25b96b49393517ad38928126f7a266c7d0f6ed35e57452605c023b7fa9a->enter($__internal_b8dac25b96b49393517ad38928126f7a266c7d0f6ed35e57452605c023b7fa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_0cee56cc80a042d6c573e679e035bc6aef4d69aab7f70f0a8ba9589f87c6dec1->leave($__internal_0cee56cc80a042d6c573e679e035bc6aef4d69aab7f70f0a8ba9589f87c6dec1_prof);

        
        $__internal_b8dac25b96b49393517ad38928126f7a266c7d0f6ed35e57452605c023b7fa9a->leave($__internal_b8dac25b96b49393517ad38928126f7a266c7d0f6ed35e57452605c023b7fa9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b29487354d5094cb075e0c29ebc162e71d6483fa7b64a6b8951d0730c97d1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b29487354d5094cb075e0c29ebc162e71d6483fa7b64a6b8951d0730c97d1fc->enter($__internal_2b29487354d5094cb075e0c29ebc162e71d6483fa7b64a6b8951d0730c97d1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5b229d3144100a3b9475c04360d934e15e2870dcec45bc7351c1a799534ca9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b229d3144100a3b9475c04360d934e15e2870dcec45bc7351c1a799534ca9c->enter($__internal_a5b229d3144100a3b9475c04360d934e15e2870dcec45bc7351c1a799534ca9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a5b229d3144100a3b9475c04360d934e15e2870dcec45bc7351c1a799534ca9c->leave($__internal_a5b229d3144100a3b9475c04360d934e15e2870dcec45bc7351c1a799534ca9c_prof);

        
        $__internal_2b29487354d5094cb075e0c29ebc162e71d6483fa7b64a6b8951d0730c97d1fc->leave($__internal_2b29487354d5094cb075e0c29ebc162e71d6483fa7b64a6b8951d0730c97d1fc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b975bf6f6ce615f10ddf656d573ab92faea5e9dcaa349b4b43358a8089ef051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b975bf6f6ce615f10ddf656d573ab92faea5e9dcaa349b4b43358a8089ef051->enter($__internal_4b975bf6f6ce615f10ddf656d573ab92faea5e9dcaa349b4b43358a8089ef051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_38ed50f2f9cba2745c28a4247a057f6086c42785f9a40520a693df557fde569e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ed50f2f9cba2745c28a4247a057f6086c42785f9a40520a693df557fde569e->enter($__internal_38ed50f2f9cba2745c28a4247a057f6086c42785f9a40520a693df557fde569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_38ed50f2f9cba2745c28a4247a057f6086c42785f9a40520a693df557fde569e->leave($__internal_38ed50f2f9cba2745c28a4247a057f6086c42785f9a40520a693df557fde569e_prof);

        
        $__internal_4b975bf6f6ce615f10ddf656d573ab92faea5e9dcaa349b4b43358a8089ef051->leave($__internal_4b975bf6f6ce615f10ddf656d573ab92faea5e9dcaa349b4b43358a8089ef051_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_319e8827af48824e88661a21ca66464aeeaf58da0181138eeb682081ee05d536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319e8827af48824e88661a21ca66464aeeaf58da0181138eeb682081ee05d536->enter($__internal_319e8827af48824e88661a21ca66464aeeaf58da0181138eeb682081ee05d536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec389220d15446c1cb3356daaa2d308a9c8840ab958c54406e1d0a003dc16676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec389220d15446c1cb3356daaa2d308a9c8840ab958c54406e1d0a003dc16676->enter($__internal_ec389220d15446c1cb3356daaa2d308a9c8840ab958c54406e1d0a003dc16676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec389220d15446c1cb3356daaa2d308a9c8840ab958c54406e1d0a003dc16676->leave($__internal_ec389220d15446c1cb3356daaa2d308a9c8840ab958c54406e1d0a003dc16676_prof);

        
        $__internal_319e8827af48824e88661a21ca66464aeeaf58da0181138eeb682081ee05d536->leave($__internal_319e8827af48824e88661a21ca66464aeeaf58da0181138eeb682081ee05d536_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f36a0bc6f433ec94ed9fdce97c295765aaccff5ba5a52c99ea8ae5315e2ea2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f36a0bc6f433ec94ed9fdce97c295765aaccff5ba5a52c99ea8ae5315e2ea2c->enter($__internal_3f36a0bc6f433ec94ed9fdce97c295765aaccff5ba5a52c99ea8ae5315e2ea2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b8b2e9a025e572bd4cee3c1c48ae2d348dc04c1f3d716d43866434401d4e20fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b2e9a025e572bd4cee3c1c48ae2d348dc04c1f3d716d43866434401d4e20fd->enter($__internal_b8b2e9a025e572bd4cee3c1c48ae2d348dc04c1f3d716d43866434401d4e20fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8b2e9a025e572bd4cee3c1c48ae2d348dc04c1f3d716d43866434401d4e20fd->leave($__internal_b8b2e9a025e572bd4cee3c1c48ae2d348dc04c1f3d716d43866434401d4e20fd_prof);

        
        $__internal_3f36a0bc6f433ec94ed9fdce97c295765aaccff5ba5a52c99ea8ae5315e2ea2c->leave($__internal_3f36a0bc6f433ec94ed9fdce97c295765aaccff5ba5a52c99ea8ae5315e2ea2c_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/hurricane8/WorkSpace/Projets Perso/MimounCorp/app/Resources/views/base.html.twig");
    }
}
