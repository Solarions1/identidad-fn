<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Master/MenuBgTemplate.html.twig */
class __TwigTemplate_8bb28c28712c7da95746acad3a0ce553fb7eb101b23a98c4625386e0468b822f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Master/MenuBgTemplate.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <body class=\"bg-light\">
    ";
        // line 6
        $this->displayBlock('navbar', $context, $blocks);
        // line 9
        echo "    <div class=\"pt-3\">
        ";
        // line 10
        $this->displayBlock('messages', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('bodyHeaderOptions', $context, $blocks);
        // line 16
        echo "    </div>
    ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "    <br/>
    <br/>
    <br/>
    ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 23);
        echo "
    </body>
";
    }

    // line 6
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
    }

    // line 10
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
        ";
    }

    // line 13
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
        ";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "Master/MenuBgTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 18,  117 => 17,  110 => 14,  106 => 13,  99 => 11,  95 => 10,  88 => 7,  84 => 6,  77 => 23,  72 => 20,  70 => 17,  67 => 16,  64 => 13,  62 => 10,  59 => 9,  57 => 6,  54 => 5,  50 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MenuBgTemplate.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Master\\MenuBgTemplate.html.twig");
    }
}
