<?php

/* base.html.twig */
class __TwigTemplate_cd42fe32b58016e005dc64daeda5081b6f0ce16575225d9507353abf3abd5517 extends Twig_Template
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
        $__internal_1c7e0e00c642226a9a1273244ce471804513594845beec2ecbe3b92049f13b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7e0e00c642226a9a1273244ce471804513594845beec2ecbe3b92049f13b69->enter($__internal_1c7e0e00c642226a9a1273244ce471804513594845beec2ecbe3b92049f13b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a9f2434c70b15e9917ccc8d4afa33b9133c89a45374425cb07e31712766e910b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f2434c70b15e9917ccc8d4afa33b9133c89a45374425cb07e31712766e910b->enter($__internal_a9f2434c70b15e9917ccc8d4afa33b9133c89a45374425cb07e31712766e910b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 87
        echo "
       
    </body>
</html>
";
        
        $__internal_1c7e0e00c642226a9a1273244ce471804513594845beec2ecbe3b92049f13b69->leave($__internal_1c7e0e00c642226a9a1273244ce471804513594845beec2ecbe3b92049f13b69_prof);

        
        $__internal_a9f2434c70b15e9917ccc8d4afa33b9133c89a45374425cb07e31712766e910b->leave($__internal_a9f2434c70b15e9917ccc8d4afa33b9133c89a45374425cb07e31712766e910b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9beed346a7b4db18749da8ce183925719e32eff47c6fd612787ea26341324058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9beed346a7b4db18749da8ce183925719e32eff47c6fd612787ea26341324058->enter($__internal_9beed346a7b4db18749da8ce183925719e32eff47c6fd612787ea26341324058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df3f3559de05c91a9e41eec61fc26ccc988efafc14119455ca02554f435a5852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3f3559de05c91a9e41eec61fc26ccc988efafc14119455ca02554f435a5852->enter($__internal_df3f3559de05c91a9e41eec61fc26ccc988efafc14119455ca02554f435a5852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ATIVIDADES";
        
        $__internal_df3f3559de05c91a9e41eec61fc26ccc988efafc14119455ca02554f435a5852->leave($__internal_df3f3559de05c91a9e41eec61fc26ccc988efafc14119455ca02554f435a5852_prof);

        
        $__internal_9beed346a7b4db18749da8ce183925719e32eff47c6fd612787ea26341324058->leave($__internal_9beed346a7b4db18749da8ce183925719e32eff47c6fd612787ea26341324058_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb944a655fd13453553a8a60a77703020765ac1c1d80b289b632c70cfb3f2f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb944a655fd13453553a8a60a77703020765ac1c1d80b289b632c70cfb3f2f26->enter($__internal_cb944a655fd13453553a8a60a77703020765ac1c1d80b289b632c70cfb3f2f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d2f4e8047ad44550247861187918b3c961e0d739405708aafa88069927a1f106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f4e8047ad44550247861187918b3c961e0d739405708aafa88069927a1f106->enter($__internal_d2f4e8047ad44550247861187918b3c961e0d739405708aafa88069927a1f106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/bootstrap-flatly-3.3.7.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/font-awesome-4.6.3.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/font-lato.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/highlight-solarized-light.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/jquery.dataTables.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_d2f4e8047ad44550247861187918b3c961e0d739405708aafa88069927a1f106->leave($__internal_d2f4e8047ad44550247861187918b3c961e0d739405708aafa88069927a1f106_prof);

        
        $__internal_cb944a655fd13453553a8a60a77703020765ac1c1d80b289b632c70cfb3f2f26->leave($__internal_cb944a655fd13453553a8a60a77703020765ac1c1d80b289b632c70cfb3f2f26_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3dd53ae2d325562393881fe39df69cf045d711ec4ea1958c53bc9382178bc937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd53ae2d325562393881fe39df69cf045d711ec4ea1958c53bc9382178bc937->enter($__internal_3dd53ae2d325562393881fe39df69cf045d711ec4ea1958c53bc9382178bc937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_8cd872a10ecf8daab759ccf636f37b046fb445a5a1e303a9b4918d2a82252d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd872a10ecf8daab759ccf636f37b046fb445a5a1e303a9b4918d2a82252d6b->enter($__internal_8cd872a10ecf8daab759ccf636f37b046fb445a5a1e303a9b4918d2a82252d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_8cd872a10ecf8daab759ccf636f37b046fb445a5a1e303a9b4918d2a82252d6b->leave($__internal_8cd872a10ecf8daab759ccf636f37b046fb445a5a1e303a9b4918d2a82252d6b_prof);

        
        $__internal_3dd53ae2d325562393881fe39df69cf045d711ec4ea1958c53bc9382178bc937->leave($__internal_3dd53ae2d325562393881fe39df69cf045d711ec4ea1958c53bc9382178bc937_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_a8601005048cf4ed1b7c34947e42c24f5b31aa032b0b51a2a11f28bbd623e262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8601005048cf4ed1b7c34947e42c24f5b31aa032b0b51a2a11f28bbd623e262->enter($__internal_a8601005048cf4ed1b7c34947e42c24f5b31aa032b0b51a2a11f28bbd623e262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_14c86e32390ba535b0dd514c48f72e7e8c09e9d00a0635fc929f575966c8b9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c86e32390ba535b0dd514c48f72e7e8c09e9d00a0635fc929f575966c8b9b1->enter($__internal_14c86e32390ba535b0dd514c48f72e7e8c09e9d00a0635fc929f575966c8b9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_index");
        echo "\">
                                ATIVIDADES
                            </a>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cadastro_index");
        echo "\">
                                        <i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> Cadastro de Atividades
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_index");
        echo "\">
                                        <i class=\"fa fa-list\" aria-hidden=\"true\"></i> Lista de Atividades
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_14c86e32390ba535b0dd514c48f72e7e8c09e9d00a0635fc929f575966c8b9b1->leave($__internal_14c86e32390ba535b0dd514c48f72e7e8c09e9d00a0635fc929f575966c8b9b1_prof);

        
        $__internal_a8601005048cf4ed1b7c34947e42c24f5b31aa032b0b51a2a11f28bbd623e262->leave($__internal_a8601005048cf4ed1b7c34947e42c24f5b31aa032b0b51a2a11f28bbd623e262_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbc039f2fcbaf2f011312337c74fe05b56995c57369714af47fc9b39da201a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc039f2fcbaf2f011312337c74fe05b56995c57369714af47fc9b39da201a38->enter($__internal_bbc039f2fcbaf2f011312337c74fe05b56995c57369714af47fc9b39da201a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1c63c54fbfac6426a49634643aa34ee8c8aabb3974a04ac3d5e73801d7d5702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c63c54fbfac6426a49634643aa34ee8c8aabb3974a04ac3d5e73801d7d5702->enter($__internal_e1c63c54fbfac6426a49634643aa34ee8c8aabb3974a04ac3d5e73801d7d5702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1c63c54fbfac6426a49634643aa34ee8c8aabb3974a04ac3d5e73801d7d5702->leave($__internal_e1c63c54fbfac6426a49634643aa34ee8c8aabb3974a04ac3d5e73801d7d5702_prof);

        
        $__internal_bbc039f2fcbaf2f011312337c74fe05b56995c57369714af47fc9b39da201a38->leave($__internal_bbc039f2fcbaf2f011312337c74fe05b56995c57369714af47fc9b39da201a38_prof);

    }

    // line 55
    public function block_titpag($context, array $blocks = array())
    {
        $__internal_18a6a9b701e9cab6a8e7b293fa5983ecb3e38f139c71a173db8804bf0620ea05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a6a9b701e9cab6a8e7b293fa5983ecb3e38f139c71a173db8804bf0620ea05->enter($__internal_18a6a9b701e9cab6a8e7b293fa5983ecb3e38f139c71a173db8804bf0620ea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        $__internal_30c96a6bf5965871cb1089c71d0d7b7732396f99585950eb131dda7b6dfb4b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c96a6bf5965871cb1089c71d0d7b7732396f99585950eb131dda7b6dfb4b6f->enter($__internal_30c96a6bf5965871cb1089c71d0d7b7732396f99585950eb131dda7b6dfb4b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        
        $__internal_30c96a6bf5965871cb1089c71d0d7b7732396f99585950eb131dda7b6dfb4b6f->leave($__internal_30c96a6bf5965871cb1089c71d0d7b7732396f99585950eb131dda7b6dfb4b6f_prof);

        
        $__internal_18a6a9b701e9cab6a8e7b293fa5983ecb3e38f139c71a173db8804bf0620ea05->leave($__internal_18a6a9b701e9cab6a8e7b293fa5983ecb3e38f139c71a173db8804bf0620ea05_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_3db34974d14d214e0d8513ee7830d0bdcbe990a46f2c999195b7f09b034c4d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db34974d14d214e0d8513ee7830d0bdcbe990a46f2c999195b7f09b034c4d22->enter($__internal_3db34974d14d214e0d8513ee7830d0bdcbe990a46f2c999195b7f09b034c4d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_55fcc653ab5354275c35d7c3a796e516b3b16d598c1e1d8c65b2484a0ab097e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fcc653ab5354275c35d7c3a796e516b3b16d598c1e1d8c65b2484a0ab097e9->enter($__internal_55fcc653ab5354275c35d7c3a796e516b3b16d598c1e1d8c65b2484a0ab097e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_55fcc653ab5354275c35d7c3a796e516b3b16d598c1e1d8c65b2484a0ab097e9->leave($__internal_55fcc653ab5354275c35d7c3a796e516b3b16d598c1e1d8c65b2484a0ab097e9_prof);

        
        $__internal_3db34974d14d214e0d8513ee7830d0bdcbe990a46f2c999195b7f09b034c4d22->leave($__internal_3db34974d14d214e0d8513ee7830d0bdcbe990a46f2c999195b7f09b034c4d22_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_29bb011811a3011e28feb79e2ff51a727de9b07eb171b3dd77fc81f0aeb51354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29bb011811a3011e28feb79e2ff51a727de9b07eb171b3dd77fc81f0aeb51354->enter($__internal_29bb011811a3011e28feb79e2ff51a727de9b07eb171b3dd77fc81f0aeb51354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2325e7e7738659acca8183c0c6fd3e68a90439119b3be2020e5aabae0a38209e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2325e7e7738659acca8183c0c6fd3e68a90439119b3be2020e5aabae0a38209e->enter($__internal_2325e7e7738659acca8183c0c6fd3e68a90439119b3be2020e5aabae0a38209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Teste Duo System</p>
                            <p>Daniel Bueno da Silva</p>
                        </div>
                        
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_2325e7e7738659acca8183c0c6fd3e68a90439119b3be2020e5aabae0a38209e->leave($__internal_2325e7e7738659acca8183c0c6fd3e68a90439119b3be2020e5aabae0a38209e_prof);

        
        $__internal_29bb011811a3011e28feb79e2ff51a727de9b07eb171b3dd77fc81f0aeb51354->leave($__internal_29bb011811a3011e28feb79e2ff51a727de9b07eb171b3dd77fc81f0aeb51354_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91ea83db20efcfe442a4f3ca1269fb531c9bc5da79b44a4e2690457d4eec8418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ea83db20efcfe442a4f3ca1269fb531c9bc5da79b44a4e2690457d4eec8418->enter($__internal_91ea83db20efcfe442a4f3ca1269fb531c9bc5da79b44a4e2690457d4eec8418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bd07b760068893f14a0accd3db8cee4559745959aa1ced2a6c06c5ef4f664896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd07b760068893f14a0accd3db8cee4559745959aa1ced2a6c06c5ef4f664896->enter($__internal_bd07b760068893f14a0accd3db8cee4559745959aa1ced2a6c06c5ef4f664896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/bootstrap-3.3.7.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/highlight.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\"/>
        ";
        
        $__internal_bd07b760068893f14a0accd3db8cee4559745959aa1ced2a6c06c5ef4f664896->leave($__internal_bd07b760068893f14a0accd3db8cee4559745959aa1ced2a6c06c5ef4f664896_prof);

        
        $__internal_91ea83db20efcfe442a4f3ca1269fb531c9bc5da79b44a4e2690457d4eec8418->leave($__internal_91ea83db20efcfe442a4f3ca1269fb531c9bc5da79b44a4e2690457d4eec8418_prof);

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
        return array (  366 => 83,  362 => 82,  358 => 81,  354 => 80,  350 => 79,  346 => 78,  341 => 77,  332 => 76,  314 => 67,  308 => 63,  299 => 62,  282 => 56,  265 => 55,  253 => 57,  251 => 56,  247 => 55,  243 => 54,  239 => 52,  230 => 51,  210 => 39,  202 => 34,  192 => 27,  186 => 23,  177 => 22,  160 => 20,  148 => 15,  144 => 14,  140 => 13,  136 => 12,  132 => 11,  128 => 10,  123 => 9,  114 => 8,  96 => 6,  82 => 87,  80 => 76,  77 => 75,  75 => 62,  71 => 60,  69 => 51,  65 => 49,  63 => 22,  58 => 20,  51 => 17,  49 => 8,  44 => 6,  37 => 2,  34 => 1,);
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
        <title>{% block title %}ATIVIDADES{% endblock %}</title>
        
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/bootstrap-flatly-3.3.7.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/font-awesome-4.6.3.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/font-lato.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/bootstrap-datetimepicker.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/highlight-solarized-light.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/main.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/jquery.dataTables.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('bundles/favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"{{ path('atividade_index') }}\">
                                ATIVIDADES
                            </a>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"{{ path('cadastro_index') }}\">
                                        <i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> Cadastro de Atividades
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path('atividade_index') }}\">
                                        <i class=\"fa fa-list\" aria-hidden=\"true\"></i> Lista de Atividades
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
                            <p>&copy; {{ 'now'|date('Y') }} - Teste Duo System</p>
                            <p>Daniel Bueno da Silva</p>
                        </div>
                        
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('bundles/atividade/js/jquery-2.2.4.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/moment.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/bootstrap-3.3.7.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/highlight.pack.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/bootstrap-datetimepicker.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/main.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/jquery.dataTables.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\"/>
        {% endblock %}

       
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\base.html.twig");
    }
}
