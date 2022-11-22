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

/* Master/MenuTemplate.html.twig */
class __TwigTemplate_cb2006e5577f17ecba1305a0c51d27ee148591e4b46f494041ff3dd495420370 extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'navbarContent' => [$this, 'block_navbarContent'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\"
      xml:lang=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\">
<head>
    ";
        // line 9
        $this->displayBlock('meta', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('icons', $context, $blocks);
        // line 22
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "css"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 29
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "js"], "method", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 41
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $context["js"], "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 43);
        echo "
</head>
";
        // line 45
        $this->displayBlock('fullBody', $context, $blocks);
        // line 119
        echo "</html>
";
    }

    // line 9
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <title>Identidad</title>
        <meta name=\"description\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "meta-description"], "method", false, false, false, 12), "html", null, true);
        echo "\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"generator\" content=\"FacturaScripts\"/>
        <meta name=\"robots\" content=\"noindex\"/>
    ";
    }

    // line 17
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        echo "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"180x180\"
              href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        echo "\"/>
    ";
    }

    // line 22
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        echo "?v=3\"/>
    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootbox/dist/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootbox/dist/bootbox.locales.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/JS/Custom.js"), "html", null, true);
        echo "?v=5\"></script>
    ";
    }

    // line 45
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    <body>
    ";
        // line 47
        $this->displayBlock('navbar', $context, $blocks);
        // line 94
        echo "    <div class=\"pt-3\">
        ";
        // line 95
        $this->displayBlock('messages', $context, $blocks);
        // line 108
        echo "        ";
        $this->displayBlock('bodyHeaderOptions', $context, $blocks);
        // line 110
        echo "    </div>
    ";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "    <br/>
    <br/>
    <br/>
    ";
        // line 116
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 116);
        echo "
    </body>
";
    }

    // line 47
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "        <nav class=\"navbar navbar-expand navbar-dark bg-primary sticky-top d-print-none\">
            ";
        // line 49
        $this->displayBlock('navbarContent', $context, $blocks);
        // line 92
        echo "        </nav>
    ";
    }

    // line 49
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                <a class=\"navbar-brand d-none d-sm-inline\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "homepage"], "method", false, false, false, 50), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/logo-white.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\"
                         class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                    <span class=\"d-none d-xl-inline-block\">";
        // line 53
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 53), "nombrecorto", [], "any", false, false, false, 53);
        echo "</span>
                </a>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"navbar-nav pt-1\">
                        ";
        // line 57
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "Master/MenuTemplate.html.twig", 57)->unwrap();
        // line 58
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 59
            echo "                            ";
            echo twig_call_macro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 59, $context, $this->getSourceContext());
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </ul>
                    <ul class=\"navbar-nav flex-row ml-auto\">
                        <li class=\"nav-item";
        // line 63
        echo (((0 === twig_compare(($context["template"] ?? null), "MegaSearch.html.twig"))) ? (" active") : (""));
        echo "\"
                            title=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 64), "html", null, true);
        echo "\">
                            <a class=\"nav-link\" href=\"MegaSearch\">
                                <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\" title=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help"], "method", false, false, false, 69), "html", null, true);
        echo "\">
                            <a class=\"nav-link\" href=\"https://facturascripts.com/ayuda\" rel=\"nofollow\" target=\"_blank\">
                                <i class=\"fas fa-question-circle\" aria-hidden=\"true\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown\" title=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 74), "html", null, true);
        echo "\">
                            <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-toggle=\"dropdown\"
                               aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"user-list\">
                                <a class=\"dropdown-item\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 80), "url", [], "method", false, false, false, 80), "html", null, true);
        echo "\">
                                    <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i> ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 81), "nick", [], "any", false, false, false, 81), "html", null, true);
        echo "
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"?logout=TRUE\">
                                    <i class=\"fas fa-door-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "logout"], "method", false, false, false, 85), "html", null, true);
        echo "
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            ";
    }

    // line 95
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "            ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MenuTemplate.html.twig", 96)->unwrap();
        // line 97
        echo "            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 100
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 100, $context, $this->getSourceContext());
        echo "
                        ";
        // line 101
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "warning"], "warning"], 101, $context, $this->getSourceContext());
        echo "
                        ";
        // line 102
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "notice"], "success"], 102, $context, $this->getSourceContext());
        echo "
                        ";
        // line 103
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "info"], "info"], 103, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
            </div>
        ";
    }

    // line 108
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "        ";
    }

    // line 111
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "    ";
    }

    public function getTemplateName()
    {
        return "Master/MenuTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 112,  381 => 111,  377 => 109,  373 => 108,  364 => 103,  360 => 102,  356 => 101,  352 => 100,  347 => 97,  344 => 96,  340 => 95,  329 => 85,  322 => 81,  318 => 80,  309 => 74,  301 => 69,  293 => 64,  289 => 63,  285 => 61,  276 => 59,  271 => 58,  269 => 57,  262 => 53,  257 => 51,  250 => 50,  246 => 49,  241 => 92,  239 => 49,  236 => 48,  232 => 47,  225 => 116,  220 => 113,  218 => 111,  215 => 110,  212 => 108,  210 => 95,  207 => 94,  205 => 47,  202 => 46,  198 => 45,  192 => 37,  188 => 36,  184 => 35,  180 => 34,  176 => 33,  171 => 32,  167 => 31,  161 => 25,  157 => 24,  152 => 23,  148 => 22,  142 => 20,  136 => 18,  132 => 17,  123 => 12,  119 => 10,  115 => 9,  110 => 119,  108 => 45,  102 => 43,  93 => 41,  88 => 40,  86 => 39,  83 => 31,  74 => 29,  69 => 28,  67 => 27,  64 => 22,  61 => 17,  59 => 9,  54 => 7,  50 => 6,  47 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MenuTemplate.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Master\\MenuTemplate.html.twig");
    }
}
