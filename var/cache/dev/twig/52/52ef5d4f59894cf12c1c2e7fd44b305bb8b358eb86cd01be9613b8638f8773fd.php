<?php

/* base.html.twig_ */
class __TwigTemplate_d5388c571b8961b353353e50f2355ef4057d31c6856f9e7401e00c8f65e5e344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'titpag' => array($this, 'block_titpag'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c7ddaefba5b82f7e4d6ac32f00dd6661017c4dafa0caaa4ef45988e88d7d6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7ddaefba5b82f7e4d6ac32f00dd6661017c4dafa0caaa4ef45988e88d7d6bf->enter($__internal_6c7ddaefba5b82f7e4d6ac32f00dd6661017c4dafa0caaa4ef45988e88d7d6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig_"));

        $__internal_3b7c6c4676121b390331d5bf66308cdaa4cd4acbca2c5a2580c3c9577ed27415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7c6c4676121b390331d5bf66308cdaa4cd4acbca2c5a2580c3c9577ed27415->enter($__internal_3b7c6c4676121b390331d5bf66308cdaa4cd4acbca2c5a2580c3c9577ed27415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig_"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 20
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "
        <div class=\"container body-container\">
            ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        </div>

        ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 85
        echo "
       
    </body>
</html>
";
        
        $__internal_6c7ddaefba5b82f7e4d6ac32f00dd6661017c4dafa0caaa4ef45988e88d7d6bf->leave($__internal_6c7ddaefba5b82f7e4d6ac32f00dd6661017c4dafa0caaa4ef45988e88d7d6bf_prof);

        
        $__internal_3b7c6c4676121b390331d5bf66308cdaa4cd4acbca2c5a2580c3c9577ed27415->leave($__internal_3b7c6c4676121b390331d5bf66308cdaa4cd4acbca2c5a2580c3c9577ed27415_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3979900fae8151ac983f16f21f0499bf3f225135e590d953f1e639ee034d852e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3979900fae8151ac983f16f21f0499bf3f225135e590d953f1e639ee034d852e->enter($__internal_3979900fae8151ac983f16f21f0499bf3f225135e590d953f1e639ee034d852e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_158ba9070c73a16c27f28f46a6c6296162000886a856e5347d10efbfb422e858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158ba9070c73a16c27f28f46a6c6296162000886a856e5347d10efbfb422e858->enter($__internal_158ba9070c73a16c27f28f46a6c6296162000886a856e5347d10efbfb422e858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sac - Longevo";
        
        $__internal_158ba9070c73a16c27f28f46a6c6296162000886a856e5347d10efbfb422e858->leave($__internal_158ba9070c73a16c27f28f46a6c6296162000886a856e5347d10efbfb422e858_prof);

        
        $__internal_3979900fae8151ac983f16f21f0499bf3f225135e590d953f1e639ee034d852e->leave($__internal_3979900fae8151ac983f16f21f0499bf3f225135e590d953f1e639ee034d852e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e501da40a04a88212671fb016421b49352dda206c2b4e285c5cdeaa48465d6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e501da40a04a88212671fb016421b49352dda206c2b4e285c5cdeaa48465d6a8->enter($__internal_e501da40a04a88212671fb016421b49352dda206c2b4e285c5cdeaa48465d6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a9f6d07fcd234cb236870df1525b0ae3e88e6541206a001b17cea80ecfba5f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f6d07fcd234cb236870df1525b0ae3e88e6541206a001b17cea80ecfba5f3f->enter($__internal_a9f6d07fcd234cb236870df1525b0ae3e88e6541206a001b17cea80ecfba5f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/bootstrap-flatly-3.3.7.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/font-awesome-4.6.3.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/font-lato.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/highlight-solarized-light.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/jquery.dataTables.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_a9f6d07fcd234cb236870df1525b0ae3e88e6541206a001b17cea80ecfba5f3f->leave($__internal_a9f6d07fcd234cb236870df1525b0ae3e88e6541206a001b17cea80ecfba5f3f_prof);

        
        $__internal_e501da40a04a88212671fb016421b49352dda206c2b4e285c5cdeaa48465d6a8->leave($__internal_e501da40a04a88212671fb016421b49352dda206c2b4e285c5cdeaa48465d6a8_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f429f1e9a312e943142c3957d304eb7c18078c685b5df8bd2435531011a95d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f429f1e9a312e943142c3957d304eb7c18078c685b5df8bd2435531011a95d99->enter($__internal_f429f1e9a312e943142c3957d304eb7c18078c685b5df8bd2435531011a95d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_64ba6d880a787d86d159b48d57d7d8003fdf789b2eb1dc81e2dd5b27a4190eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ba6d880a787d86d159b48d57d7d8003fdf789b2eb1dc81e2dd5b27a4190eea->enter($__internal_64ba6d880a787d86d159b48d57d7d8003fdf789b2eb1dc81e2dd5b27a4190eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_64ba6d880a787d86d159b48d57d7d8003fdf789b2eb1dc81e2dd5b27a4190eea->leave($__internal_64ba6d880a787d86d159b48d57d7d8003fdf789b2eb1dc81e2dd5b27a4190eea_prof);

        
        $__internal_f429f1e9a312e943142c3957d304eb7c18078c685b5df8bd2435531011a95d99->leave($__internal_f429f1e9a312e943142c3957d304eb7c18078c685b5df8bd2435531011a95d99_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_8cbb1605d3cccd0c9146cdd28edd4eb2e94166c168820ef7eaa50f1d3d2b872f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbb1605d3cccd0c9146cdd28edd4eb2e94166c168820ef7eaa50f1d3d2b872f->enter($__internal_8cbb1605d3cccd0c9146cdd28edd4eb2e94166c168820ef7eaa50f1d3d2b872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0b37d32eafc022537042286b1b04085fef56c6bc4c10e7a36bc4f93b793e8928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b37d32eafc022537042286b1b04085fef56c6bc4c10e7a36bc4f93b793e8928->enter($__internal_0b37d32eafc022537042286b1b04085fef56c6bc4c10e7a36bc4f93b793e8928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sac_index");
        echo "\">
                                LONGEVO - SAC
                            </a>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sac_index");
        echo "\">
                                        <i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> Cadastro de Chamado
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_index");
        echo "\">
                                        <i class=\"fa fa-list\" aria-hidden=\"true\"></i> Lista de Chamados
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_0b37d32eafc022537042286b1b04085fef56c6bc4c10e7a36bc4f93b793e8928->leave($__internal_0b37d32eafc022537042286b1b04085fef56c6bc4c10e7a36bc4f93b793e8928_prof);

        
        $__internal_8cbb1605d3cccd0c9146cdd28edd4eb2e94166c168820ef7eaa50f1d3d2b872f->leave($__internal_8cbb1605d3cccd0c9146cdd28edd4eb2e94166c168820ef7eaa50f1d3d2b872f_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_e07b91c11d80878755e5d2ac8eb8ccb88e5188a4a5cad22ff237ca2e4b7c8e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07b91c11d80878755e5d2ac8eb8ccb88e5188a4a5cad22ff237ca2e4b7c8e83->enter($__internal_e07b91c11d80878755e5d2ac8eb8ccb88e5188a4a5cad22ff237ca2e4b7c8e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e908b5e3ae63540ee90cfe4a1f36ea6087de87cf57a3d3acc76ef5b55d46036c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e908b5e3ae63540ee90cfe4a1f36ea6087de87cf57a3d3acc76ef5b55d46036c->enter($__internal_e908b5e3ae63540ee90cfe4a1f36ea6087de87cf57a3d3acc76ef5b55d46036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-12\">
                        ";
        // line 54
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "
                        <h1>";
        // line 55
        $this->displayBlock('titpag', $context, $blocks);
        echo "</h1>
                        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "                    </div>                    
                </div>
            ";
        
        $__internal_e908b5e3ae63540ee90cfe4a1f36ea6087de87cf57a3d3acc76ef5b55d46036c->leave($__internal_e908b5e3ae63540ee90cfe4a1f36ea6087de87cf57a3d3acc76ef5b55d46036c_prof);

        
        $__internal_e07b91c11d80878755e5d2ac8eb8ccb88e5188a4a5cad22ff237ca2e4b7c8e83->leave($__internal_e07b91c11d80878755e5d2ac8eb8ccb88e5188a4a5cad22ff237ca2e4b7c8e83_prof);

    }

    // line 55
    public function block_titpag($context, array $blocks = array())
    {
        $__internal_e94074dd6502b4d86e9fb37a306d483d0ac76992ee2fe622d5b6a41994ca4e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94074dd6502b4d86e9fb37a306d483d0ac76992ee2fe622d5b6a41994ca4e66->enter($__internal_e94074dd6502b4d86e9fb37a306d483d0ac76992ee2fe622d5b6a41994ca4e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        $__internal_7d2248c42f4fcc5923cc47d06fb5115627dd7b553c111ea7ed3648a63aeece08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2248c42f4fcc5923cc47d06fb5115627dd7b553c111ea7ed3648a63aeece08->enter($__internal_7d2248c42f4fcc5923cc47d06fb5115627dd7b553c111ea7ed3648a63aeece08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        
        $__internal_7d2248c42f4fcc5923cc47d06fb5115627dd7b553c111ea7ed3648a63aeece08->leave($__internal_7d2248c42f4fcc5923cc47d06fb5115627dd7b553c111ea7ed3648a63aeece08_prof);

        
        $__internal_e94074dd6502b4d86e9fb37a306d483d0ac76992ee2fe622d5b6a41994ca4e66->leave($__internal_e94074dd6502b4d86e9fb37a306d483d0ac76992ee2fe622d5b6a41994ca4e66_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_62ea4e45fa94cae425c0bb9c62463ed88b3116a0ce490e5a42142fe82213b545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ea4e45fa94cae425c0bb9c62463ed88b3116a0ce490e5a42142fe82213b545->enter($__internal_62ea4e45fa94cae425c0bb9c62463ed88b3116a0ce490e5a42142fe82213b545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_553b241381b2a980f50b5730cf097eaaebc9e6d5740157eefc1586c46022f826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553b241381b2a980f50b5730cf097eaaebc9e6d5740157eefc1586c46022f826->enter($__internal_553b241381b2a980f50b5730cf097eaaebc9e6d5740157eefc1586c46022f826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_553b241381b2a980f50b5730cf097eaaebc9e6d5740157eefc1586c46022f826->leave($__internal_553b241381b2a980f50b5730cf097eaaebc9e6d5740157eefc1586c46022f826_prof);

        
        $__internal_62ea4e45fa94cae425c0bb9c62463ed88b3116a0ce490e5a42142fe82213b545->leave($__internal_62ea4e45fa94cae425c0bb9c62463ed88b3116a0ce490e5a42142fe82213b545_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_aa3104d92ec800e46a7dbbf64665ea429740b365c85fbd229b52634b2aa1e46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3104d92ec800e46a7dbbf64665ea429740b365c85fbd229b52634b2aa1e46b->enter($__internal_aa3104d92ec800e46a7dbbf64665ea429740b365c85fbd229b52634b2aa1e46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_eadb76d1140e8e34acefe5dc50269e3c7ae4eb09b6e857f2ecbfc64116009da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadb76d1140e8e34acefe5dc50269e3c7ae4eb09b6e857f2ecbfc64116009da2->enter($__internal_eadb76d1140e8e34acefe5dc50269e3c7ae4eb09b6e857f2ecbfc64116009da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Teste Longevo</p>
                            <p>Daniel Bueno da Silva</p>
                        </div>
                        
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_eadb76d1140e8e34acefe5dc50269e3c7ae4eb09b6e857f2ecbfc64116009da2->leave($__internal_eadb76d1140e8e34acefe5dc50269e3c7ae4eb09b6e857f2ecbfc64116009da2_prof);

        
        $__internal_aa3104d92ec800e46a7dbbf64665ea429740b365c85fbd229b52634b2aa1e46b->leave($__internal_aa3104d92ec800e46a7dbbf64665ea429740b365c85fbd229b52634b2aa1e46b_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d9aa239813de98dd4f3986bfcd3847d5336520d78dab8584fae5c5feceb48ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9aa239813de98dd4f3986bfcd3847d5336520d78dab8584fae5c5feceb48ad->enter($__internal_9d9aa239813de98dd4f3986bfcd3847d5336520d78dab8584fae5c5feceb48ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fecf4a28da1a07ff370d60a3d13d31878582fb64178c9efe5d2484f4b6ad8dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecf4a28da1a07ff370d60a3d13d31878582fb64178c9efe5d2484f4b6ad8dad->enter($__internal_fecf4a28da1a07ff370d60a3d13d31878582fb64178c9efe5d2484f4b6ad8dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/bootstrap-3.3.7.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/highlight.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_fecf4a28da1a07ff370d60a3d13d31878582fb64178c9efe5d2484f4b6ad8dad->leave($__internal_fecf4a28da1a07ff370d60a3d13d31878582fb64178c9efe5d2484f4b6ad8dad_prof);

        
        $__internal_9d9aa239813de98dd4f3986bfcd3847d5336520d78dab8584fae5c5feceb48ad->leave($__internal_9d9aa239813de98dd4f3986bfcd3847d5336520d78dab8584fae5c5feceb48ad_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig_";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 83,  362 => 82,  358 => 81,  354 => 80,  350 => 79,  346 => 78,  341 => 77,  332 => 76,  314 => 67,  308 => 63,  299 => 62,  282 => 56,  265 => 55,  253 => 57,  251 => 56,  247 => 55,  243 => 54,  239 => 52,  230 => 51,  210 => 39,  202 => 34,  192 => 27,  186 => 23,  177 => 22,  160 => 20,  148 => 15,  144 => 14,  140 => 13,  136 => 12,  132 => 11,  128 => 10,  123 => 9,  114 => 8,  96 => 6,  82 => 85,  80 => 76,  77 => 75,  75 => 62,  71 => 60,  69 => 51,  65 => 49,  63 => 22,  58 => 20,  51 => 17,  49 => 8,  44 => 6,  37 => 2,  34 => 1,);
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
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Sac - Longevo{% endblock %}</title>
        
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/bootstrap-flatly-3.3.7.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/font-awesome-4.6.3.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/font-lato.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/bootstrap-datetimepicker.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/highlight-solarized-light.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/main.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/jquery.dataTables.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('bundles/favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"{{ path('sac_index') }}\">
                                LONGEVO - SAC
                            </a>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"{{ path('sac_index') }}\">
                                        <i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> Cadastro de Chamado
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path('chamado_index') }}\">
                                        <i class=\"fa fa-list\" aria-hidden=\"true\"></i> Lista de Chamados
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}

        <div class=\"container body-container\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-12\">
                        {{ include('default/_flash_messages.html.twig') }}
                        <h1>{% block titpag %}{% endblock %}</h1>
                        {% block content %}{% endblock %}
                    </div>                    
                </div>
            {% endblock %}
        </div>

        {% block footer %}
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; {{ 'now'|date('Y') }} - Teste Longevo</p>
                            <p>Daniel Bueno da Silva</p>
                        </div>
                        
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('bundles/longevosac/js/jquery-2.2.4.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/moment.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/bootstrap-3.3.7.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/highlight.pack.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/bootstrap-datetimepicker.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/main.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/jquery.dataTables.min.js') }}\"></script>
        {% endblock %}

       
    </body>
</html>
", "base.html.twig_", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\base.html.twig_");
    }
}
