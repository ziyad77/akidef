<?php

/* MainBundle:Default:NosArtistes.html.twig */
class __TwigTemplate_435c830f78c5a9eaf6c093545dbd0f2e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container\">
    <article>
    <header>
        <div class=\"row-fluid\">
            <div class=\"span6\">
            
                <h2> Biographie </h2>

            </div>
            <div class=\"span6\">
                
            </div>   
        </div>

    </header>
    <hr>
    <div class=\"content\">
        <blockquote>
        <p>
Aki La Machine est un rappeur français originaire du 18ème arrondissement de Paris . Découvert sur la compilation Explicit 18 en 2003 avec son morceau Ma mentalité, il a après participé à d’innombrables projets (Flynt, Néochrome3, Sidi-Omar, Départements 75, Talents Fâchés3, des compilations \"Appelle Moi Mc\", \"Photo De Famille\" ou encore plus récemment sur l'album de Mokless \"Le Poids des Mots\"'). Aki réalise en 2008, son premier Street-CV Un pied dans la street et l'autre en studio. Un projet composé de 17 titres et dans lequel on retrouve notamment certains morceaux avec les artistes de la scène rap tel que Mokless, Twin Gambino ( Infamous Mobb), Koma, Tarik ( Marché Noir), Ekoué...
Aki la Machine dote le rap français d’un esprit, d’une conscience. Véritable produit de l’underground, c’est un artiste engagé et ses paroles sont teintées d’un réalisme parfois déconcertant. 
Aki la machine prépare son Maxi téléchargeable 5 titres, Quartier rouge  et annonce la  sortie très prochaine de son premier album.        </p>
        </blockquote>
    </div>
</article>

</div>

";
    }

    public function getTemplateName()
    {
        return "MainBundle:Default:NosArtistes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  100 => 33,  81 => 25,  65 => 22,  34 => 11,  76 => 33,  58 => 24,  265 => 56,  146 => 36,  127 => 24,  124 => 23,  77 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 13,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 90,  70 => 30,  67 => 36,  61 => 21,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 28,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 34,  138 => 57,  136 => 32,  121 => 22,  117 => 13,  105 => 40,  91 => 11,  62 => 32,  49 => 21,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 58,  47 => 9,  40 => 8,  37 => 13,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 33,  131 => 27,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 32,  83 => 6,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 25,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 55,  168 => 40,  164 => 59,  162 => 62,  154 => 38,  149 => 37,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 31,  86 => 7,  82 => 36,  80 => 19,  73 => 19,  64 => 27,  60 => 6,  57 => 20,  54 => 23,  51 => 14,  48 => 22,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 7,  30 => 10,);
    }
}
