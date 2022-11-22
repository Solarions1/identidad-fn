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

/* Master/MicroTemplate.html.twig */
class __TwigTemplate_4b1b8df27ce40749eedf2a7a092545ec812abce16108ffb48f1b761b3a726676 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" xml:lang=\"";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" >
    <head>
        ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('icons', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 21
        echo "        ";
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "css"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "        ";
        // line 30
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "js"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 31
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $context["js"], "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 33);
        echo "
    </head>
    ";
        // line 35
        $this->displayBlock('fullBody', $context, $blocks);
        // line 49
        echo "</html>";
    }

    // line 5
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>
            <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "meta-description"], "method", false, false, false, 8), "html", null, true);
        echo "\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"Manuel\" />
            <meta name=\"robots\" content=\"noindex\" />
        ";
    }

    // line 13
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        echo "\" />
        ";
    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 35
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        <body>
            ";
        // line 37
        $this->displayBlock('messages', $context, $blocks);
        // line 44
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 46);
        echo "
        </body>
    ";
    }

    // line 37
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MicroTemplate.html.twig", 38)->unwrap();
        // line 39
        echo "                ";
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 39, $context, $this->getSourceContext());
        echo "
                ";
        // line 40
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "warning"], "warning"], 40, $context, $this->getSourceContext());
        echo "
                ";
        // line 41
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "notice"], "success"], 41, $context, $this->getSourceContext());
        echo "
                ";
        // line 42
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "info"], "info"], 42, $context, $this->getSourceContext());
        echo "
            ";
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "            ";
    }

    public function getTemplateName()
    {
        return "Master/MicroTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 45,  221 => 44,  215 => 42,  211 => 41,  207 => 40,  202 => 39,  199 => 38,  195 => 37,  187 => 46,  184 => 44,  182 => 37,  179 => 36,  175 => 35,  169 => 27,  164 => 26,  160 => 25,  154 => 19,  149 => 18,  145 => 17,  139 => 15,  134 => 14,  130 => 13,  121 => 8,  117 => 7,  114 => 6,  110 => 5,  106 => 49,  104 => 35,  98 => 33,  89 => 31,  84 => 30,  82 => 29,  79 => 25,  70 => 23,  65 => 22,  63 => 21,  60 => 17,  57 => 13,  55 => 5,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MicroTemplate.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Master\\MicroTemplate.html.twig");
    }
}
