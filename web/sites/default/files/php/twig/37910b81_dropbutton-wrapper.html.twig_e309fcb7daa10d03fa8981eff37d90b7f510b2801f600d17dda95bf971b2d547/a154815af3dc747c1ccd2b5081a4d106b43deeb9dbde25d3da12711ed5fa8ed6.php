<?php

/* core/themes/classy/templates/form/dropbutton-wrapper.html.twig */
class __TwigTemplate_e309fcb7daa10d03fa8981eff37d90b7f510b2801f600d17dda95bf971b2d547 extends Twig_Template
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
        // line 13
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 14
            echo "  ";
            ob_start();
            // line 15
            echo "    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        ";
            // line 17
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
            echo "
      </div>
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 17,  24 => 15,  21 => 14,  19 => 13,);
    }
}
