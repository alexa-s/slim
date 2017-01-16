<?php

/* layout.phtml */
class __TwigTemplate_acbc7cc5523c9f875a9e0789f6696051ff3f5975267ec86565a64164b1647895 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\"/>
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\" />

        <script type=\"text/javascript\" src=\"js/tether.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery-3.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>

        <script type=\"text/javascript\"  src=\"js/bootstrap.min.js\"></script>
    </head>
    <body>
        
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "layout.phtml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.phtml", "C:\\wamp64\\www\\slimgallery\\templates\\layout.phtml");
    }
}
