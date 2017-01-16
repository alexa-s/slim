<?php

/* index.phtml */
class __TwigTemplate_d50f7c2a7ae3988b14cf123e3194425a219a0e68b2dd0639227386d0f89174ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.phtml", "index.phtml", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div class=\"container-fluid\">
    <div class=\"row\">
        <div id=\"carouselControls\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\" role=\"listbox\">
                <?php 
                    define('HOMEIMAGEPATH', 'images/homepage/');
                    foreach(glob(HOMEIMAGEPATH.'*') as \$filename) {
                ?>
                    <div class=\"carousel-item\">
                        <img class=\"d-block img-fluid img-responsive col-xs-12\" src=\"<?php echo HOMEIMAGEPATH.basename(\$filename)?>\" alt=\"<?php echo basename(\$filename)?> \"/>
                    </div>
                <?php 
                    }
                ?>
            <a class=\"carousel-control-prev\" href=\"#carouselControls\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselControls\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.phtml", "C:\\wamp64\\www\\slimgallery\\templates\\index.phtml");
    }
}
