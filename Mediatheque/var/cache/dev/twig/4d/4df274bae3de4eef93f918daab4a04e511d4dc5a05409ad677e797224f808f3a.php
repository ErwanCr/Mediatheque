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

/* SyliusAdminBundle:Order/Show/Summary:_totals.html.twig */
class __TwigTemplate_c1b147e94efbb26d6efa0184f42b8380f22f6a5c2469c1fc393c9386419e54f9 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig", 1);
        // line 2
        echo "

";
        // line 4
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 5
        $context["orderShippingPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT");
        // line 6
        $context["itemPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT");
        // line 7
        $context["shippingAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 8
        $context["taxAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 9
        echo "
";
        // line 10
        $context["orderShippingPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "getAdjustmentsRecursively", [0 => (isset($context["orderShippingPromotionAdjustment"]) || array_key_exists("orderShippingPromotionAdjustment", $context) ? $context["orderShippingPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderShippingPromotionAdjustment" does not exist.', 10, $this->source); })())], "method")]);
        // line 11
        echo "
<tr>
    <th colspan=\"8\" id=\"items-total\" class=\"right aligned\">
        <strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</strong>:
        ";
        // line 15
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "itemsTotal", []), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "currencyCode", []));
        echo "
    </th>
</tr>
<tr>
    <td colspan=\"";
        // line 19
        echo (((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new RuntimeError('Variable "orderShippingPromotions" does not exist.', 19, $this->source); })())) ? (2) : (4));
        echo "\" id=\"shipping-charges\">
        ";
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "adjustments", [0 => (isset($context["shippingAdjustment"]) || array_key_exists("shippingAdjustment", $context) ? $context["shippingAdjustment"] : (function () { throw new RuntimeError('Variable "shippingAdjustment" does not exist.', 20, $this->source); })())], "method"), "isEmpty", [], "method")) {
            // line 21
            echo "            <div class=\"ui relaxed divided list\">
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "adjustments", [0 => (isset($context["shippingAdjustment"]) || array_key_exists("shippingAdjustment", $context) ? $context["shippingAdjustment"] : (function () { throw new RuntimeError('Variable "shippingAdjustment" does not exist.', 22, $this->source); })())], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 23
                echo "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adjustment"], "label", []), "html", null, true);
                echo "</span>
                            <div class=\"description\">
                                ";
                // line 27
                echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, $context["adjustment"], "amount", []), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()), "currencyCode", []));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </div>
        ";
        } else {
            // line 34
            echo "            <p><small>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_shipping_charges"), "html", null, true);
            echo "</small></p>
        ";
        }
        // line 36
        echo "    </td>
    ";
        // line 37
        if ( !twig_test_empty((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new RuntimeError('Variable "orderShippingPromotions" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "    <td colspan=\"2\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new RuntimeError('Variable "orderShippingPromotions" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 41
                echo "                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">";
                // line 43
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</div>
                        <div class=\"description\">
                            ";
                // line 45
                echo $context["money"]->macro_format($context["amount"], twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "currencyCode", []));
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </div>
    </td>
    ";
        }
        // line 53
        echo "    <td colspan=\"4\" id=\"shipping-total\" class=\"right aligned\">
        <strong>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 55
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "shippingTotal", []), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "currencyCode", []));
        echo "
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"taxes\">
        ";
        // line 60
        $context["taxAdjustments"] = twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 60, $this->source); })()), "getAdjustmentsRecursively", [0 => (isset($context["taxAdjustment"]) || array_key_exists("taxAdjustment", $context) ? $context["taxAdjustment"] : (function () { throw new RuntimeError('Variable "taxAdjustment" does not exist.', 60, $this->source); })())], "method");
        // line 61
        echo "        ";
        if ( !twig_test_empty((isset($context["taxAdjustments"]) || array_key_exists("taxAdjustments", $context) ? $context["taxAdjustments"] : (function () { throw new RuntimeError('Variable "taxAdjustments" does not exist.', 61, $this->source); })()))) {
            // line 62
            echo "            <div class=\"ui relaxed divided list\">
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), [(isset($context["taxAdjustments"]) || array_key_exists("taxAdjustments", $context) ? $context["taxAdjustments"] : (function () { throw new RuntimeError('Variable "taxAdjustments" does not exist.', 63, $this->source); })())]));
            foreach ($context['_seq'] as $context["taxLabel"] => $context["taxAmount"]) {
                // line 64
                echo "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">";
                // line 66
                echo twig_escape_filter($this->env, $context["taxLabel"], "html", null, true);
                echo "</span>
                            <div class=\"description\">
                                ";
                // line 68
                echo $context["money"]->macro_format($context["taxAmount"], twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "currencyCode", []));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['taxLabel'], $context['taxAmount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            </div>
        ";
        } else {
            // line 75
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_taxes"), "html", null, true);
            echo ".</p>
        ";
        }
        // line 77
        echo "    </td>
    <td colspan=\"4\" id=\"tax-total\" class=\"right aligned\">
        <strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 80
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 80, $this->source); })()), "taxTotal", []), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 80, $this->source); })()), "currencyCode", []));
        echo "
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"promotion-discounts\">
        ";
        // line 85
        $context["orderPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 85, $this->source); })()), "getAdjustmentsRecursively", [0 => (isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustment" does not exist.', 85, $this->source); })())], "method")]);
        // line 86
        echo "        ";
        if ( !twig_test_empty((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new RuntimeError('Variable "orderPromotions" does not exist.', 86, $this->source); })()))) {
            // line 87
            echo "            <div class=\"ui relaxed divided list\">
                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new RuntimeError('Variable "orderPromotions" does not exist.', 88, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 89
                echo "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">";
                // line 91
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</span>
                            <div class=\"description\">
                                ";
                // line 93
                echo $context["money"]->macro_format($context["amount"], twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 93, $this->source); })()), "currencyCode", []));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            </div>
        ";
        } else {
            // line 100
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_promotion"), "html", null, true);
            echo ".</p>
        ";
        }
        // line 102
        echo "    </td>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned\">
        <strong>";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotion_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 105
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 105, $this->source); })()), "orderPromotionTotal", []), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 105, $this->source); })()), "currencyCode", []));
        echo "
    </td>
</tr>
<tr>
    <td colspan=\"8\" id=\"total\" class=\"ui large header right aligned\">
        <strong>";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        echo "</strong>:
        ";
        // line 111
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 111, $this->source); })()), "total", []), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 111, $this->source); })()), "currencyCode", []));
        echo "
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 111,  290 => 110,  282 => 105,  278 => 104,  274 => 102,  268 => 100,  264 => 98,  253 => 93,  248 => 91,  244 => 89,  240 => 88,  237 => 87,  234 => 86,  232 => 85,  224 => 80,  220 => 79,  216 => 77,  210 => 75,  206 => 73,  195 => 68,  190 => 66,  186 => 64,  182 => 63,  179 => 62,  176 => 61,  174 => 60,  166 => 55,  162 => 54,  159 => 53,  154 => 50,  143 => 45,  138 => 43,  134 => 41,  130 => 40,  126 => 38,  124 => 37,  121 => 36,  115 => 34,  111 => 32,  100 => 27,  95 => 25,  91 => 23,  87 => 22,  84 => 21,  82 => 20,  78 => 19,  71 => 15,  67 => 14,  62 => 11,  60 => 10,  57 => 9,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}


{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set orderShippingPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT') %}
{% set itemPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT') %}
{% set shippingAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set taxAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::TAX_ADJUSTMENT') %}

{% set orderShippingPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderShippingPromotionAdjustment)) %}

<tr>
    <th colspan=\"8\" id=\"items-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.subtotal'|trans }}</strong>:
        {{ money.format(order.itemsTotal ,order.currencyCode) }}
    </th>
</tr>
<tr>
    <td colspan=\"{{ orderShippingPromotions ? 2 : 4 }}\" id=\"shipping-charges\">
        {% if not order.adjustments(shippingAdjustment).isEmpty() %}
            <div class=\"ui relaxed divided list\">
                {% for adjustment in order.adjustments(shippingAdjustment) %}
                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">{{ adjustment.label }}</span>
                            <div class=\"description\">
                                {{ money.format(adjustment.amount, order.currencyCode) }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p><small>{{ 'sylius.ui.no_shipping_charges'|trans }}</small></p>
        {% endif %}
    </td>
    {% if not orderShippingPromotions is empty %}
    <td colspan=\"2\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            {% for label, amount in orderShippingPromotions %}
                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">{{ label }}</div>
                        <div class=\"description\">
                            {{ money.format(amount, order.currencyCode) }}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </td>
    {% endif %}
    <td colspan=\"4\" id=\"shipping-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.shipping_total'|trans }}</strong>:
        {{ money.format(order.shippingTotal, order.currencyCode) }}
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"taxes\">
        {% set taxAdjustments = order.getAdjustmentsRecursively(taxAdjustment) %}
        {% if taxAdjustments is not empty %}
            <div class=\"ui relaxed divided list\">
                {% for taxLabel, taxAmount in sylius_aggregate_adjustments(taxAdjustments) %}
                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">{{ taxLabel }}</span>
                            <div class=\"description\">
                                {{ money.format(taxAmount, order.currencyCode) }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>{{ 'sylius.ui.no_taxes'|trans }}.</p>
        {% endif %}
    </td>
    <td colspan=\"4\" id=\"tax-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.tax_total'|trans }}</strong>:
        {{ money.format(order.taxTotal ,order.currencyCode) }}
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"promotion-discounts\">
        {% set orderPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderPromotionAdjustment)) %}
        {% if not orderPromotions is empty %}
            <div class=\"ui relaxed divided list\">
                {% for label, amount in orderPromotions %}
                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">{{ label }}</span>
                            <div class=\"description\">
                                {{ money.format(amount, order.currencyCode) }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>{{ 'sylius.ui.no_promotion'|trans }}.</p>
        {% endif %}
    </td>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.promotion_total'|trans }}</strong>:
        {{ money.format(order.orderPromotionTotal, order.currencyCode) }}
    </td>
</tr>
<tr>
    <td colspan=\"8\" id=\"total\" class=\"ui large header right aligned\">
        <strong>{{ 'sylius.ui.total'|trans }}</strong>:
        {{ money.format(order.total, order.currencyCode) }}
    </td>
</tr>
", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Summary/_totals.html.twig");
    }
}
