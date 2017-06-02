<?php

/* base.html.twig_ */
class __TwigTemplate_25a3fda011779ecbc789d85a294518b020d3977219c3e9be53753135800ec30f extends Twig_Template
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
        $__internal_20e8328a9abcd66fc4b0b4168e6d71621b69d43610c5a0b3dfb73974ab2fed4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e8328a9abcd66fc4b0b4168e6d71621b69d43610c5a0b3dfb73974ab2fed4f->enter($__internal_20e8328a9abcd66fc4b0b4168e6d71621b69d43610c5a0b3dfb73974ab2fed4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig_"));

        $__internal_0099df284ca242e0cf272f851cbe6782af521cfea79b5239da35ca9a3a818214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0099df284ca242e0cf272f851cbe6782af521cfea79b5239da35ca9a3a818214->enter($__internal_0099df284ca242e0cf272f851cbe6782af521cfea79b5239da35ca9a3a818214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig_"));

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
        
        $__internal_20e8328a9abcd66fc4b0b4168e6d71621b69d43610c5a0b3dfb73974ab2fed4f->leave($__internal_20e8328a9abcd66fc4b0b4168e6d71621b69d43610c5a0b3dfb73974ab2fed4f_prof);

        
        $__internal_0099df284ca242e0cf272f851cbe6782af521cfea79b5239da35ca9a3a818214->leave($__internal_0099df284ca242e0cf272f851cbe6782af521cfea79b5239da35ca9a3a818214_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_24706101f418e5187e7f1ec33b5765b270b866857fa1caf7c6111b400f329915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24706101f418e5187e7f1ec33b5765b270b866857fa1caf7c6111b400f329915->enter($__internal_24706101f418e5187e7f1ec33b5765b270b866857fa1caf7c6111b400f329915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e99a41bb924a3be4cdc16ba0f959b82d0ec21ef15b6c58ba833d7005be889b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99a41bb924a3be4cdc16ba0f959b82d0ec21ef15b6c58ba833d7005be889b62->enter($__internal_e99a41bb924a3be4cdc16ba0f959b82d0ec21ef15b6c58ba833d7005be889b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sac - Longevo";
        
        $__internal_e99a41bb924a3be4cdc16ba0f959b82d0ec21ef15b6c58ba833d7005be889b62->leave($__internal_e99a41bb924a3be4cdc16ba0f959b82d0ec21ef15b6c58ba833d7005be889b62_prof);

        
        $__internal_24706101f418e5187e7f1ec33b5765b270b866857fa1caf7c6111b400f329915->leave($__internal_24706101f418e5187e7f1ec33b5765b270b866857fa1caf7c6111b400f329915_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2edf8c701d294948eab84b3cccb4bfc77ff23cbe154c4b5771bf2aa6e83b4769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edf8c701d294948eab84b3cccb4bfc77ff23cbe154c4b5771bf2aa6e83b4769->enter($__internal_2edf8c701d294948eab84b3cccb4bfc77ff23cbe154c4b5771bf2aa6e83b4769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6241ff1678f56b91d3cccfec553df4d7bc47ee302ad42970342cee44bf90711a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6241ff1678f56b91d3cccfec553df4d7bc47ee302ad42970342cee44bf90711a->enter($__internal_6241ff1678f56b91d3cccfec553df4d7bc47ee302ad42970342cee44bf90711a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6241ff1678f56b91d3cccfec553df4d7bc47ee302ad42970342cee44bf90711a->leave($__internal_6241ff1678f56b91d3cccfec553df4d7bc47ee302ad42970342cee44bf90711a_prof);

        
        $__internal_2edf8c701d294948eab84b3cccb4bfc77ff23cbe154c4b5771bf2aa6e83b4769->leave($__internal_2edf8c701d294948eab84b3cccb4bfc77ff23cbe154c4b5771bf2aa6e83b4769_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5542fa5adc2c507e1f80192f4d8033166ca764f8c7962e37849fa15ad8f0e0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5542fa5adc2c507e1f80192f4d8033166ca764f8c7962e37849fa15ad8f0e0b7->enter($__internal_5542fa5adc2c507e1f80192f4d8033166ca764f8c7962e37849fa15ad8f0e0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_20fa07b36a69445ae6f9001fa21a132b32f6be6cddcda9d2febeac15cc27bd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fa07b36a69445ae6f9001fa21a132b32f6be6cddcda9d2febeac15cc27bd02->enter($__internal_20fa07b36a69445ae6f9001fa21a132b32f6be6cddcda9d2febeac15cc27bd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_20fa07b36a69445ae6f9001fa21a132b32f6be6cddcda9d2febeac15cc27bd02->leave($__internal_20fa07b36a69445ae6f9001fa21a132b32f6be6cddcda9d2febeac15cc27bd02_prof);

        
        $__internal_5542fa5adc2c507e1f80192f4d8033166ca764f8c7962e37849fa15ad8f0e0b7->leave($__internal_5542fa5adc2c507e1f80192f4d8033166ca764f8c7962e37849fa15ad8f0e0b7_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_997f47bde5642bd024e3fd0f5bc7a5a7771c20191a11b74975b4172c0baccec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997f47bde5642bd024e3fd0f5bc7a5a7771c20191a11b74975b4172c0baccec2->enter($__internal_997f47bde5642bd024e3fd0f5bc7a5a7771c20191a11b74975b4172c0baccec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f54535be4149b78427af5ded2383c7ea007000515e61b180c3e3ce1b66f1fda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54535be4149b78427af5ded2383c7ea007000515e61b180c3e3ce1b66f1fda0->enter($__internal_f54535be4149b78427af5ded2383c7ea007000515e61b180c3e3ce1b66f1fda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_f54535be4149b78427af5ded2383c7ea007000515e61b180c3e3ce1b66f1fda0->leave($__internal_f54535be4149b78427af5ded2383c7ea007000515e61b180c3e3ce1b66f1fda0_prof);

        
        $__internal_997f47bde5642bd024e3fd0f5bc7a5a7771c20191a11b74975b4172c0baccec2->leave($__internal_997f47bde5642bd024e3fd0f5bc7a5a7771c20191a11b74975b4172c0baccec2_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_689b8be9ff660d23373572b7d830e9f0419f677ced5d625969c6ba5fa1bf7284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689b8be9ff660d23373572b7d830e9f0419f677ced5d625969c6ba5fa1bf7284->enter($__internal_689b8be9ff660d23373572b7d830e9f0419f677ced5d625969c6ba5fa1bf7284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44ab8d6996b891a96ce82afca2bf76ae2755868582d21eb31ddfd5762008debd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ab8d6996b891a96ce82afca2bf76ae2755868582d21eb31ddfd5762008debd->enter($__internal_44ab8d6996b891a96ce82afca2bf76ae2755868582d21eb31ddfd5762008debd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_44ab8d6996b891a96ce82afca2bf76ae2755868582d21eb31ddfd5762008debd->leave($__internal_44ab8d6996b891a96ce82afca2bf76ae2755868582d21eb31ddfd5762008debd_prof);

        
        $__internal_689b8be9ff660d23373572b7d830e9f0419f677ced5d625969c6ba5fa1bf7284->leave($__internal_689b8be9ff660d23373572b7d830e9f0419f677ced5d625969c6ba5fa1bf7284_prof);

    }

    // line 55
    public function block_titpag($context, array $blocks = array())
    {
        $__internal_ead33f3d74f2fb995c7d0aebd2fd131b2a5b0644f53cd4f225db276e8935437c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead33f3d74f2fb995c7d0aebd2fd131b2a5b0644f53cd4f225db276e8935437c->enter($__internal_ead33f3d74f2fb995c7d0aebd2fd131b2a5b0644f53cd4f225db276e8935437c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        $__internal_afc14b0152d83b6103e78c8bc00f63dfe6df2254b0dc1c9cff78111f652173cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc14b0152d83b6103e78c8bc00f63dfe6df2254b0dc1c9cff78111f652173cb->enter($__internal_afc14b0152d83b6103e78c8bc00f63dfe6df2254b0dc1c9cff78111f652173cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        
        $__internal_afc14b0152d83b6103e78c8bc00f63dfe6df2254b0dc1c9cff78111f652173cb->leave($__internal_afc14b0152d83b6103e78c8bc00f63dfe6df2254b0dc1c9cff78111f652173cb_prof);

        
        $__internal_ead33f3d74f2fb995c7d0aebd2fd131b2a5b0644f53cd4f225db276e8935437c->leave($__internal_ead33f3d74f2fb995c7d0aebd2fd131b2a5b0644f53cd4f225db276e8935437c_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_7715f5ff327301669b8d58c976e06628aa96443f5bcea60aabed4123c48fa3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7715f5ff327301669b8d58c976e06628aa96443f5bcea60aabed4123c48fa3d1->enter($__internal_7715f5ff327301669b8d58c976e06628aa96443f5bcea60aabed4123c48fa3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fa4357375ccfe7b84610bbbc1fdcb2b52ff7282689c9ae61792f75ae0fae57a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4357375ccfe7b84610bbbc1fdcb2b52ff7282689c9ae61792f75ae0fae57a6->enter($__internal_fa4357375ccfe7b84610bbbc1fdcb2b52ff7282689c9ae61792f75ae0fae57a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fa4357375ccfe7b84610bbbc1fdcb2b52ff7282689c9ae61792f75ae0fae57a6->leave($__internal_fa4357375ccfe7b84610bbbc1fdcb2b52ff7282689c9ae61792f75ae0fae57a6_prof);

        
        $__internal_7715f5ff327301669b8d58c976e06628aa96443f5bcea60aabed4123c48fa3d1->leave($__internal_7715f5ff327301669b8d58c976e06628aa96443f5bcea60aabed4123c48fa3d1_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0858d64310591506e82d0d16946b4e43b49a847421daa739b0cb5a6a8f67fc62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0858d64310591506e82d0d16946b4e43b49a847421daa739b0cb5a6a8f67fc62->enter($__internal_0858d64310591506e82d0d16946b4e43b49a847421daa739b0cb5a6a8f67fc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a397ea7afb0ce5350498b2416aa275641007520bf7143073955a40c5743a083d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a397ea7afb0ce5350498b2416aa275641007520bf7143073955a40c5743a083d->enter($__internal_a397ea7afb0ce5350498b2416aa275641007520bf7143073955a40c5743a083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_a397ea7afb0ce5350498b2416aa275641007520bf7143073955a40c5743a083d->leave($__internal_a397ea7afb0ce5350498b2416aa275641007520bf7143073955a40c5743a083d_prof);

        
        $__internal_0858d64310591506e82d0d16946b4e43b49a847421daa739b0cb5a6a8f67fc62->leave($__internal_0858d64310591506e82d0d16946b4e43b49a847421daa739b0cb5a6a8f67fc62_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1c38d1cd9f91e4b1b0986e50d01ec2d7d18ff632f9b977846776391b72c3939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c38d1cd9f91e4b1b0986e50d01ec2d7d18ff632f9b977846776391b72c3939->enter($__internal_b1c38d1cd9f91e4b1b0986e50d01ec2d7d18ff632f9b977846776391b72c3939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_557ddc8d85e45dbb74245e20b21dd5dabd34c9120e02126f2df1cc8844792854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557ddc8d85e45dbb74245e20b21dd5dabd34c9120e02126f2df1cc8844792854->enter($__internal_557ddc8d85e45dbb74245e20b21dd5dabd34c9120e02126f2df1cc8844792854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_557ddc8d85e45dbb74245e20b21dd5dabd34c9120e02126f2df1cc8844792854->leave($__internal_557ddc8d85e45dbb74245e20b21dd5dabd34c9120e02126f2df1cc8844792854_prof);

        
        $__internal_b1c38d1cd9f91e4b1b0986e50d01ec2d7d18ff632f9b977846776391b72c3939->leave($__internal_b1c38d1cd9f91e4b1b0986e50d01ec2d7d18ff632f9b977846776391b72c3939_prof);

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
", "base.html.twig_", "/var/www/html/app_task/app/Resources/views/base.html.twig_");
    }
}
