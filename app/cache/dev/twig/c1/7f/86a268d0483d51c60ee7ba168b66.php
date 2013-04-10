<?php

/* ::base.html.twig */
class __TwigTemplate_c17f86a268d0483d51c60ee7ba168b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" charset=\"utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "     
    </head>

        ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "                        
                     <div class=\"container\">      
                          ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "                     </div>
                     <div id=\"push\"></div>
                     </div>

        ";
        // line 26
        $this->displayBlock('footer', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "        </body>
    </html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Aki La Machine | Site Officiel.";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "448637e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_448637e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/448637e_bootstrap_1.css");
            // line 11
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen\" />
            ";
            // asset "448637e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_448637e_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/448637e_responsive_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen\" />
            ";
            // asset "448637e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_448637e_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/448637e_sticky-footer_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen\" />
            ";
        } else {
            // asset "448637e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_448637e") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/448637e.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen\" />
            ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "        ";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->env->loadTemplate("MainBundle:Config:header.html.twig")->display($context);
        // line 18
        echo "        ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        // line 27
        echo "            ";
        $this->env->loadTemplate("MainBundle:Config:footer.html.twig")->display($context);
        // line 28
        echo "        ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a1366b1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a1366b1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a1366b1_jquery-1.9.1_1.js");
            // line 32
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        } else {
            // asset "a1366b1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a1366b1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a1366b1.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0deedda_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap_1.js");
            // line 49
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-transition_2.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-alert_3.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-button_4.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-carousel_5.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-collapse_6.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-dropdown_7.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-modal_8.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-tooltip_9.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-popover_10.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-scrollspy_11.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-tab_12.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-typeahead_13.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
            // asset "0deedda_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda_bootstrap-affix_14.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        } else {
            // asset "0deedda"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0deedda") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0deedda.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 50
        echo "     
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  256 => 50,  164 => 49,  159 => 34,  145 => 32,  140 => 31,  137 => 30,  133 => 28,  130 => 27,  127 => 26,  122 => 21,  118 => 18,  115 => 17,  112 => 16,  108 => 13,  82 => 11,  77 => 7,  74 => 6,  68 => 5,  63 => 52,  61 => 30,  58 => 29,  56 => 26,  50 => 22,  48 => 21,  44 => 19,  42 => 16,  37 => 13,  35 => 6,  31 => 5,  25 => 1,);
    }
}
