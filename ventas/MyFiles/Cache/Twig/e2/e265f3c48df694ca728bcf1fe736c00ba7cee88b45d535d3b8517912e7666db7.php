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

/* Macro/Utils.html.twig */
class __TwigTemplate_40300e571a32f0b49482ae7d0cf41b0fd00df7e4c301b81303bdb9b07515c030 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 21
        echo "
";
        // line 35
        echo "
";
    }

    // line 8
    public function macro_message($__log__ = null, $__levels__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "levels" => $__levels__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 9
            echo "    ";
            $context["messages"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "read", [0 => "master", 1 => ($context["levels"] ?? null)], "method", false, false, false, 9), twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "read", [0 => "database", 1 => ($context["levels"] ?? null)], "method", false, false, false, 9));
            // line 10
            echo "    ";
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["messages"] ?? null)), 0))) {
                // line 11
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
                echo "\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 16
                    echo "                <div>";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 16);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 23
    public function macro_messageCompat($__log__ = null, $__levels__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "levels" => $__levels__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 24
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "read", [], "method", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                echo "        ";
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "level", [], "any", false, false, false, 25), ($context["levels"] ?? null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 25), "master")))) {
                    // line 26
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
                    echo "\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div>";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 30);
                    echo "</div>
            </div>
        ";
                }
                // line 33
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 37
    public function macro_popoverTitle($__msg__ = null, $__position__ = "auto", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "msg" => $__msg__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 38
            echo "    ";
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["msg"] ?? null)), 0))) {
                echo "data-toggle=\"popover\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
                echo "\" data-trigger=\"hover\" data-content=\"";
                echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
                echo "\"";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Macro/Utils.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 38,  151 => 37,  138 => 33,  132 => 30,  124 => 26,  121 => 25,  116 => 24,  101 => 23,  90 => 18,  81 => 16,  77 => 15,  69 => 11,  66 => 10,  63 => 9,  48 => 8,  43 => 35,  40 => 21,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/Utils.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Macro\\Utils.html.twig");
    }
}
