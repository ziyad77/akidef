<?php

/* MainBundle:Config:header.html.twig */
class __TwigTemplate_15fb6afdbe9f2000edd4df9fa4eefd10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<TABLE BORDER=\"0\" background=\"http://xn--80aqafcrtq.cc/img/4/8/8/%D0%A2%D0%B5%D0%BA%D1%81%D1%82%D1%83%D1%80%D0%B0,%20%D1%87%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20%D1%84%D0%BE%D0%BD,%20%D0%B1%D0%B5%D0%BB%D1%8B%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%BE%D1%81%D1%8B,%20%D0%B0%D1%81%D1%84%D0%B0%D0%BB%D1%8C%D1%82,%20%D0%B4%D0%BE%D1%80%D0%BE%D0%B3%D0%B0,%201920x1200.jpg\" WIDTH=100%> 
    <TR>
        <TD>
            <p align=\"center\">";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9412bef_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9412bef_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/9412bef_entete_1.png");
            // line 5
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"aki entete\" />
                              ";
        } else {
            // asset "9412bef"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9412bef") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/9412bef.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"aki entete\" />
                              ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "            </p>
        </TD>
    </TR>
</TABLE>
<div class=\"navbar\"> 
    <div class=\"navbar navbar-inverse\">
        <div class=\"navbar-inner\">
            <a class=\"btn btn-navbar collapsed\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>

            <a class=\"brand\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">
                    ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "be2ad6f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_be2ad6f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/be2ad6f_logo_1.png");
            // line 22
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Urbanetwork logo\" class=\"img-circle\" />
                </a>  
                    ";
        } else {
            // asset "be2ad6f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_be2ad6f") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/be2ad6f.png");
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Urbanetwork logo\" class=\"img-circle\" />
                </a>  
                    ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "
                <div class=\"nav-collapse navbar-responsive-collapse collapse\" />
                <ul class=\"nav pull-left\">
                    <li class=\"active\">
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
                    </li>
                    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Biographie"), "html", null, true);
        echo "\">Biographie</a></li>
                    <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Discographie"), "html", null, true);
        echo "\">Discographie</a></li>
                    <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Videos"), "html", null, true);
        echo "\">Vidéos</a></li>
                    <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Photos"), "html", null, true);
        echo "\">photos</a></li>
                </ul>
            </div>
        </div>
    </div>      
</div>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Config:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  100 => 33,  96 => 32,  92 => 31,  87 => 29,  81 => 25,  65 => 22,  61 => 21,  57 => 20,  42 => 7,  24 => 4,  19 => 1,  265 => 56,  173 => 55,  168 => 40,  154 => 38,  149 => 37,  146 => 36,  142 => 34,  139 => 33,  136 => 32,  131 => 27,  127 => 24,  124 => 23,  121 => 22,  117 => 13,  91 => 11,  86 => 7,  83 => 6,  77 => 5,  69 => 58,  67 => 36,  64 => 35,  62 => 32,  56 => 28,  54 => 27,  50 => 25,  48 => 22,  37 => 13,  35 => 6,  25 => 1,  84 => 90,  31 => 5,  28 => 5,);
    }
}
