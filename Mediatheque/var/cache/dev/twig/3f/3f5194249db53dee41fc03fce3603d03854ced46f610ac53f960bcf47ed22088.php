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

/* @SyliusShop/Cart/Summary/_item.html.twig */
class __TwigTemplate_f1eea82f85cbd7cc48e316e72dcebe6070710f61e2f92194b3d1fdeb41fdc9a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_item.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Cart/Summary/_item.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["product"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "product", []);
        // line 4
        $context["product_variant"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "variant", []);
        // line 5
        echo "
<tr>
    <td class=\"single line\">
        ";
        // line 8
        $this->loadTemplate("@SyliusShop/Product/_info.html.twig", "@SyliusShop/Cart/Summary/_item.html.twig", 8)->display(twig_array_merge($context, ["variant" => (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "    </td>
    <td class=\"right aligned\">
        ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "unitPrice", []) != twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "discountedUnitPrice", []))) {
            // line 12
            echo "            <span class=\"sylius-regular-unit-price\">";
            echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "unitPrice", []));
            echo "</span>
        ";
        }
        // line 14
        echo "        <span class=\"sylius-unit-price\">";
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "discountedUnitPrice", []));
        echo "</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "quantity", []), 'widget');
        echo "</span>
    </td>
    <td class=\"center aligned\">
        <button type=\"button\" data-redirect=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_summary");
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_cart_item_remove", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" class=\"ui circular icon button sylius-cart-remove-button\" data-csrf-token=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "id", [])), "html", null, true);
        echo "\"><i class=\"remove icon\"></i></button>
    </td>
    <td class=\"right aligned\">
        <span class=\"sylius-total\">";
        // line 23
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "subtotal", []));
        echo "</span>
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/Summary/_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  82 => 20,  76 => 17,  69 => 14,  63 => 12,  61 => 11,  57 => 9,  55 => 8,  50 => 5,  48 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set product = item.product %}
{% set product_variant = item.variant %}

<tr>
    <td class=\"single line\">
        {% include '@SyliusShop/Product/_info.html.twig' with {'variant': product_variant} %}
    </td>
    <td class=\"right aligned\">
        {% if item.unitPrice != item.discountedUnitPrice %}
            <span class=\"sylius-regular-unit-price\">{{ money.convertAndFormat(item.unitPrice) }}</span>
        {% endif %}
        <span class=\"sylius-unit-price\">{{ money.convertAndFormat(item.discountedUnitPrice) }}</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity\">{{ form_widget(form.quantity) }}</span>
    </td>
    <td class=\"center aligned\">
        <button type=\"button\" data-redirect=\"{{ path('sylius_shop_cart_summary') }}\" data-url=\"{{ path('sylius_shop_ajax_cart_item_remove', {'id': item.id}) }}\" class=\"ui circular icon button sylius-cart-remove-button\" data-csrf-token=\"{{ csrf_token(item.id) }}\"><i class=\"remove icon\"></i></button>
    </td>
    <td class=\"right aligned\">
        <span class=\"sylius-total\">{{ money.convertAndFormat(item.subtotal) }}</span>
    </td>
</tr>
", "@SyliusShop/Cart/Summary/_item.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_item.html.twig");
    }
}
