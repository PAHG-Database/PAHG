<?php

/* @Installation/cannotConnectToDb.twig */
class __TwigTemplate_149eb1c5fa1cfd0d1beb47269ce201b746a23380de384492a1d1ed075be571aa extends Twig_Template
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
        echo "<p>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_CannotConnectToDb")), "html", null, true);
        echo ":</p>

<p><strong>";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["exceptionMessage"]) ? $context["exceptionMessage"] : $this->getContext($context, "exceptionMessage")), "html", null, true);
        echo "</strong></p>

<p>";
        // line 5
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_CannotConnectToDbResolvingExplanation", "<a href=\"javascript:window.location.reload()\">", "</a>"));
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@Installation/cannotConnectToDb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* <p>{{ 'Installation_CannotConnectToDb'|translate }}:</p>*/
/* */
/* <p><strong>{{ exceptionMessage }}</strong></p>*/
/* */
/* <p>{{ 'Installation_CannotConnectToDbResolvingExplanation'|translate('<a href="javascript:window.location.reload()">', '</a>')|raw }}</p>*/
