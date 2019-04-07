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

/* @SyliusAdmin/Customer/Show/_address.html.twig */
class __TwigTemplate_7017e54aabea1bb5bde3524efd6372bdcbbc439e48a4c5745fc1350ee640e784 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/_address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/_address.html.twig"));

        // line 1
        echo "<div class=\"eight wide column\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sylius.admin.customer.show.before_address", ["resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 2, $this->source); })())]]);
        echo "

    <h4 class=\"ui top attached styled header\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.default_address"), "html", null, true);
        echo "
    </h4>

    <div class=\"ui attached segment\" id=\"default-address\">
        ";
        // line 9
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 9, $this->source); })()), "defaultAddress", []))) {
            // line 10
            echo "            ";
            $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "@SyliusAdmin/Customer/Show/_address.html.twig", 10)->display(twig_array_merge($context, ["address" => twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 10, $this->source); })()), "defaultAddress", [])]));
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.this_customer_does_not_have_a_default_address"), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "    </div>

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sylius.admin.customer.show.after_address", ["resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 16, $this->source); })())]]);
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  71 => 14,  65 => 12,  62 => 11,  59 => 10,  57 => 9,  50 => 5,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"eight wide column\">
    {{ sonata_block_render_event('sylius.admin.customer.show.before_address', {'resource': resource}) }}

    <h4 class=\"ui top attached styled header\">
        {{ 'sylius.ui.default_address'|trans }}
    </h4>

    <div class=\"ui attached segment\" id=\"default-address\">
        {% if customer.defaultAddress is not null %}
            {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': customer.defaultAddress} %}
        {% else %}
            {{ 'sylius.ui.this_customer_does_not_have_a_default_address'|trans }}
        {% endif %}
    </div>

    {{ sonata_block_render_event('sylius.admin.customer.show.after_address', {'resource': resource}) }}
</div>
", "@SyliusAdmin/Customer/Show/_address.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_address.html.twig");
    }
}
