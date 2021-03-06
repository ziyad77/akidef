<?php

/* MainBundle:Compagnie:Contact.html.twig */
class __TwigTemplate_cd605bc1d0ac222c236cdc534d055d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"container\">
    <div class=\"content\">
        
        <div class=\"row\">
            
            <div class=\"hero-unit\">
                <h1>Restons en contact !</h1>
                <p class=\"tagline\">
                    Merci d'avoir visité notre site web. Si vous voulez contacter notre équipe n'hésitez pas à remplir le formulaire si dessous.
                </p>  
            </div><!--end hero unit -->
            
            <section class=\"span6\">
                <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("urbanet_main_contact"), "html", null, true);
        echo "\" method=\"POST\">
                    <div class=\"control-group\">
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom"), 'row');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prenom"), 'row');
        echo "
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email"), 'row');
        echo "   
                    </div>
                    <div class=\"control-group\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Objet"), 'row');
        echo "   
                    </div>
                    <div class=\"input-xxlarge control-group\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Message"), 'row');
        echo "
                    </div>
                    
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "
                    <div class=\"control-group\">
                        <div class=\"controls\">
                            <button type=\"submit\" class=\"btn btn-success\"> Envoyer </button>
                        </div>
                    </div>
                </form>
                <br class=\"clear\">
            </section><!-- end left -->

            <section class=\"span6\">
                <div class=\"well\">
                    <iframe width=\"100%\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" 
                            src=\"https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=new+york+city&aq=&sll=37.6,-95.665&sspn=80.867771,100.263672&t=m&ie=UTF8&hq=&hnear=Fontainebleau&z=11&iwloc=A&output=embed\">
                    </iframe>
                </div><!--end well -->
            </section><!--end right -->
            
      </div><!--end row -->

      <hr>
      
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "MainBundle:Compagnie:Contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 33,  58 => 24,  265 => 56,  146 => 36,  127 => 24,  124 => 23,  77 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 30,  67 => 36,  61 => 13,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 28,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 34,  138 => 57,  136 => 32,  121 => 22,  117 => 13,  105 => 40,  91 => 11,  62 => 32,  49 => 21,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 58,  47 => 9,  40 => 8,  37 => 13,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 33,  131 => 27,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 6,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 25,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 55,  168 => 40,  164 => 59,  162 => 62,  154 => 38,  149 => 37,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 7,  82 => 36,  80 => 19,  73 => 19,  64 => 27,  60 => 6,  57 => 11,  54 => 23,  51 => 14,  48 => 22,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 7,  30 => 6,);
    }
}
