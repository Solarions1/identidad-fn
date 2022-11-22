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

/* Backup.html.twig */
class __TwigTemplate_c88dd8a17320e6ce01ecb7ee2a2c895cbe9f7e3059933e68a74c2c2e36e8f238 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Backup.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"bg-light pt-4 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"h3\">
                        <i class=\"fas fa-save fa-fw\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: -40px;\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-body\">
                        <h2 class=\"h4\">
                            <i class=\"fas fa-download fa-fw\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "download-backup"], "method", false, false, false, 21), "html", null, true);
        echo "
                        </h2>
                        <p>
                            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "download-backup-p"], "method", false, false, false, 24), "html", null, true);
        echo "
                        </p>
                        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 26), "html", null, true);
        echo "?action=download-db\" class=\"btn btn-primary\">
                            <i class=\"fas fa-download fa-fw\"></i> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "database"], "method", false, false, false, 27), "html", null, true);
        echo "
                        </a>
                        &nbsp;
                        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 30), "html", null, true);
        echo "?action=download-files\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-download fa-fw\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "files"], "method", false, false, false, 31), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>

                <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 36), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"action\" value=\"restore-backup\" />
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-body text-white bg-warning\">
                            <h2 class=\"h4 mb-0\">
                                <i class=\"fas fa-upload fa-fw\"></i> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "restore-backup"], "method", false, false, false, 41), "html", null, true);
        echo "
                            </h2>
                        </div>
                        <div class=\"card-body\">
                            <p>
                                ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "restore-backup-p"], "method", false, false, false, 46), "html", null, true);
        echo "
                                <span class=\"text-danger\">
                                    ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "restore-backup-warning"], "method", false, false, false, 48), "html", null, true);
        echo "
                                </span>
                            </p>
                            <div class=\"form-row align-items-end\">
                                <div class=\"col-sm-9\">
                                    <div class=\"form-group\">
                                        ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "database"], "method", false, false, false, 54), "html", null, true);
        echo "
                                        <input type=\"file\" name=\"dbfile\" accept=\".sql\" class=\"form-control-file\" required=\"\"/>
                                    </div>
                                    <p class=\"mb-1\">
                                        ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 58)]], "method", false, false, false, 58), "html", null, true);
        echo "
                                    </p>
                                </div>
                                <div class=\"col-sm text-right\">
                                    <button type=\"submit\" class=\"btn btn-warning\">
                                        ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "restore"], "method", false, false, false, 63), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Backup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 63,  142 => 58,  135 => 54,  126 => 48,  121 => 46,  113 => 41,  105 => 36,  97 => 31,  93 => 30,  87 => 27,  83 => 26,  78 => 24,  72 => 21,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Backup.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Backup.html.twig");
    }
}
