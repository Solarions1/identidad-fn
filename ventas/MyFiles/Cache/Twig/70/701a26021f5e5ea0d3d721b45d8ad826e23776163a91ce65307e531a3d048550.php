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

/* Tab/SalesDocument.html.twig */
class __TwigTemplate_33ac17487065a8a01096b38b71cdc07e854d1b3d51221ac199430fa6014821e0 extends Template
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
        // line 1
        $context["model"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 1), "model", [], "any", false, false, false, 1);
        // line 2
        echo "
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<script>
    let waitCounter = 0;
    let keyupInputName = null;

    function findProduct() {
        \$(\"#findProductInput\").autocomplete({
            source: function (request, response) {
                \$.ajax({
                    method: \"POST\",
                    url: '";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 26), "html", null, true);
        echo "',
                    data: {action: 'autocomplete-product', term: request.term},
                    dataType: \"json\",
                    success: function (results) {
                        let values = [];
                        results.forEach(function (element) {
                            if (element.key === null || element.key === element.value) {
                                values.push(element);
                            } else {
                                values.push({key: element.key, value: element.key + \" | \" + element.value});
                            }
                        });
                        response(values);
                    },
                    error: function (msg) {
                        alert(msg.status + \" \" + msg.responseText);
                    }
                });
            },
            select: function (event, ui) {
                if (ui.item.key !== null) {
                    const value = ui.item.value.split(\" | \");
                    salesFormAction(\"fast-product\", value[0]);
                }
            }
        });
    }

    function salesFastLine(e) {
        if (e.which == 13) {
            salesFormAction('fast-line', '0');
        }
    }

    function salesFormAction(action, selectedLine) {
        animateSpinner('add');
        \$('#headerModal').modal('hide');

        document.forms['salesForm']['action'].value = action;
        document.forms['salesForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['salesForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['salesForm']['code'].value);
        data.append('multireqtoken', document.forms['salesForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['salesForm']['selectedLine'].value);
        data.append('data', formDataJsonString);
        console.log(data);

        fetch('";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 79), "html", null, true);
        echo "', {
            method: 'POST',
            body: data
        }).then(function (response) {
            animateSpinner('remove', true);
            if (response.ok) {
                return response.json();
            }
            return Promise.reject(response);
        }).then(function (data) {
            if (data.header !== '') {
                document.getElementById(\"salesFormHeader\").innerHTML = data.header;
            }
            if (data.lines !== '') {
                document.getElementById(\"salesFormLines\").innerHTML = data.lines;
            } else {
                \$.each(data.linesMap, function (index, value) {
                    if (document.forms['salesForm'][index] != null) {
                        document.forms['salesForm'][index].value = value;
                    }
                });
            }
            if (data.footer !== '') {
                document.getElementById(\"salesFormFooter\").innerHTML = data.footer;
            }
            if (data.products !== '') {
                document.getElementById(\"findProductList\").innerHTML = data.products;
            }
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            switch (document.forms['salesForm']['action'].value) {
                case 'add-product':
                case 'fast-product':
                    \$(\".doc-line-qty:last\").select();
                    break;

                case 'fast-line':
                    document.forms['salesForm']['fastli'].focus();
                    break;

                case 'new-line':
                    \$(\".doc-line-desc:last\").focus();
                    break;

                case 'set-customer':
                    \$(\"#findProductInput\").focus();
                    break;
            }

            // si no hay foco, establecemos el foco si tenemos el name del input donde se estaba escribiendo
            if (document.activeElement.name === undefined && keyupInputName !== null) {
                let focusInput = \$('input[name=\"' + keyupInputName + '\"]');
                let focusLength = focusInput.val().length;
                let focusType = focusInput[0].type;
                // para establecer el cursor al final de input el type debe ser text
                if (focusType !== 'text') {
                    focusInput[0].type = 'text';
                }
                focusInput.focus();
                focusInput[0].setSelectionRange(focusLength, focusLength);
                focusInput[0].type = focusType;
                keyupInputName = null;
            }

            findProduct();
        }).catch(function (error) {
            alert('error');
            console.warn(error);
            animateSpinner('remove', false);
        });

        return false;
    }

    async function salesFormActionWait(action, selectedLine, event) {
        if (event.keyCode === 9) {
            // si se pulsa tabulador no hacemos nada
            return false;
        }

        animateSpinner('add');

        // usamos un contador y un temporizador para solamente procesar la última llamada
        waitCounter++;
        let waitNum = waitCounter;
        await new Promise(r => setTimeout(r, 300));
        if (waitNum < waitCounter) {
            return false;
        }

        // obtenemos el name del input si cumple la condición de pulsado
        if (\$(event.target).is('input') && ['keyup', 'keypress', 'change'].includes(event.type)) {
            keyupInputName = event.target.name;
        }

        console.log('waitNum: ' + waitNum);
        return salesFormAction(action, selectedLine)
    }

    function salesFormSave(action, selectedLine) {
        animateSpinner('add');
        setOrdenLines();

        document.forms['salesForm']['action'].value = action;
        document.forms['salesForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['salesForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['salesForm']['code'].value);
        data.append('multireqtoken', document.forms['salesForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['salesForm']['selectedLine'].value);
        data.append('data', formDataJsonString);
        console.log(data);

        fetch('";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 198), "html", null, true);
        echo "', {
            method: 'POST',
            body: data
        }).then(function (response) {
            animateSpinner('remove', true);
            if (response.ok) {
                return response.json();
            }
            return Promise.reject(response);
        }).then(function (data) {
            console.log(data);
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            if (data.ok) {
                window.location.replace(data.newurl);
            }
        }).catch(function (error) {
            alert('error');
            console.warn(error);
            animateSpinner('remove', false);
        });

        return false;
    }

    function salesLineTotalWithTaxes(id) {
        const total = parseFloat(prompt('";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total-with-taxes"], "method", false, false, false, 225), "html", null, true);
        echo "').replace(',', '.')) || 0;
        const dtopor = parseFloat(document.forms['salesForm']['dtopor_' + id].value) || 0;
        const dtopor2 = parseFloat(document.forms['salesForm']['dtopor2_' + id].value) || 0;
        const iva = parseFloat(document.forms['salesForm']['iva_' + id].value) || 0;
        const recargo = document.forms['salesForm']['recargo_' + id] ? parseFloat(document.forms['salesForm']['recargo_' + id].value) || 0 : 0;
        const irpf = parseFloat(document.forms['salesForm']['irpf_' + id].value) || 0;
        const cantidad = parseFloat(document.forms['salesForm']['cantidad_' + id].value) || 0;
        if (total <= 0) {
            alert('total > 0');
        } else if (cantidad <= 0) {
            alert('cantidad > 0');
        } else {
            let pvpSinDto = (100 * total / cantidad) / (100 + iva + recargo - irpf);
            let pvp = 10000 * pvpSinDto / ((100 - dtopor) * (100 - dtopor2));
            document.forms['salesForm']['pvpunitario_' + id].value = Math.round(pvp * 100000) / 100000;
            salesFormAction('recalculate', '0');
        }
    }

    function setOrdenLines() {
        let orderInputs = \$(\"input[name^='orden_']\");
        let count = orderInputs.length * 10;
        orderInputs.each(function (index) {
            \$(this).val(count - (index * 10));
        });
    }

    function sortableEnable() {
        \$(\"#salesFormLines\").sortable({
            update: function (event, ui) {
                setOrdenLines();
            }
        });
        \$(\"#salesFormLines\").sortable(\"option\", \"disabled\", false);
        \$(\"#salesFormLines\").disableSelection();
    }

    function sortableDisable() {
        \$(\"#salesFormLines\").sortable(\"disable\");
    }

    \$(document).on('keyup', '.doc-line-desc', function (e) {
        while (\$(this).outerHeight() < this.scrollHeight + parseFloat(\$(this).css(\"borderTopWidth\")) + parseFloat(\$(this).css(\"borderBottomWidth\"))) {
            \$(this).height(\$(this).height() + 1);
            if (\$(this).height() > 200) {
                break;
            }
        }
    });

    ";
        // line 275
        if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "editable", [], "any", false, false, false, 275)) {
            // line 276
            echo "    let sortable = false;

    \$(document).on('click', '#sortableBtn', function () {
        if (sortable) {
            sortableDisable();
            sortable = false;
            \$(this).removeClass('btn-secondary').addClass('btn-light');
        } else {
            sortableEnable();
            sortable = true;
            \$(this).removeClass('btn-light').addClass('btn-secondary');
        }
    });
    ";
        }
        // line 290
        echo "
    \$(document).ready(function () {
        findProduct();

        if (document.forms['salesForm']['codcliente'].value === '') {
            \$('#btnFindCustomerModal').click();
        }

        \$(\"#findCustomerInput\").autocomplete({
            autoFocus: true,
            source: function (request, response) {
                \$.ajax({
                    method: \"POST\",
                    url: '";
        // line 303
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 303), "html", null, true);
        echo "',
                    data: {action: 'find-customer', term: request.term},
                    dataType: \"json\",
                    success: function (results) {
                        response(results);
                    },
                    error: function (msg) {
                        alert(msg.status + \" \" + msg.responseText);
                    }
                });
            },
            select: function (event, ui) {
                if (ui.item.key !== null) {
                    const value = ui.item.value.split(\" | \");
                    if (value.length > 1) {
                        document.forms['salesForm']['codcliente'].value = value[0];
                        ui.item.value = value[1];
                    }
                    \$(\"#findCustomerModal\").modal(\"hide\");
                    salesFormAction(\"set-customer\", \"0\");
                }
            },
            open: function (event, ui) {
                \$(this).autocomplete('widget').css('z-index', 1500);
                return false;
            }
        });
    });
</script>

<form name=\"salesForm\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 335
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumnValue", [], "method", false, false, false, 335), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 336
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 336), "newToken", [], "method", false, false, false, 336), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"selectedLine\"/>
    ";
        // line 338
        echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "renderSalesForm", [0 => ($context["model"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getLines", [], "method", false, false, false, 338)], "method", false, false, false, 338);
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "Tab/SalesDocument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 338,  398 => 336,  394 => 335,  359 => 303,  344 => 290,  328 => 276,  326 => 275,  273 => 225,  243 => 198,  121 => 79,  65 => 26,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/SalesDocument.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Tab\\SalesDocument.html.twig");
    }
}
