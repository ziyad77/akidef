<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_4f18283c830c2574f233b9f00280e717 extends Twig_Template
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
    <div id=\"myCarousel\" class=\"carousel slide\">
      <div class=\"carousel-inner\">
        <div class=\"item active\">
          <img src=\"../assets/img/examples/slide-01.jpg\" alt=\"\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Article 1</h1>
              <p class=\"lead\">Je suis l'article 1.</p>
              <a class=\"btn btn-large btn-primary\" href=\"#\">voir l'article</a>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"../assets/img/examples/slide-02.jpg\" alt=\"\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Article 2.</h1>
              <p class=\"lead\">Je suis l'article 2.</p>
              <a class=\"btn btn-large btn-primary\" href=\"#\">voir l'article</a>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img src=\"../assets/img/examples/slide-03.jpg\" alt=\"\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Article 3.</h1>
              <p class=\"lead\">Je suis l'article 3.</p>
              <a class=\"btn btn-large btn-primary\" href=\"#\">voir l'article</a>
            </div>
          </div>
        </div>
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
    </div><!-- /.carousel -->

    <!--<div class=\"container\">
        <div class=\"row-fluid\">
            <div class=\"container\">
                <legend>Accueil</legend>
            <div class=\"span3\">
                <legend> Dernières Actus </legend>
            </div>
            <div class=\"span3 offset9\">
                <legend>Dernières vidéos</legend>
            </div>
            </div>
       </div>

    ";
        // line 90
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "MainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 90,  31 => 4,  28 => 3,);
    }
}
