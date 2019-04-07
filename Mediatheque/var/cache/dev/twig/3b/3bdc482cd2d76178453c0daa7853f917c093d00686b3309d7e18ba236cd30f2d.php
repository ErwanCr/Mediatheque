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

/* SyliusAdminBundle:Order/Show:_summary.html.twig */
class __TwigTemplate_4ec9fbd012011dc825783919390d5dab21734639b97caf9c5e83301e11271a35 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_summary.html.twig"));

        // line 1
        echo "<table class=\"ui celled compact small table fixed\">
    <thead>
    <tr>
        <th class=\"six wide sylius-table-column-item\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order_item_product"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-unit_price\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.unit_price"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-discounted_unit_price\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discounted_unit_price"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-quantity\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.quantity"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-subtotal\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-discount\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discount"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-tax\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-total\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "items", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "        ";
            $this->loadTemplate("@SyliusAdmin/Order/Show/Summary/_item.html.twig", "SyliusAdminBundle:Order/Show:_summary.html.twig", 16)->display($context);
            // line 17
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </tbody>
    <tfoot>
    ";
        // line 20
        $this->loadTemplate("@SyliusAdmin/Order/Show/Summary/_totals.html.twig", "SyliusAdminBundle:Order/Show:_summary.html.twig", 20)->display($context);
        // line 21
        echo "    </tfoot>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 21,  119 => 20,  115 => 18,  101 => 17,  98 => 16,  81 => 15,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"ui celled compact small table fixed\">
    <thead>
    <tr>
        <th class=\"six wide sylius-table-column-item\">{{ 'sylius.ui.order_item_product'|trans }}</th>
        <th class=\"center aligned sylius-table-column-unit_price\">{{ 'sylius.ui.unit_price'|trans }}</th>
        <th class=\"center aligned sylius-table-column-discounted_unit_price\">{{ 'sylius.ui.discounted_unit_price'|trans }}</th>
        <th class=\"center aligned sylius-table-column-quantity\">{{ 'sylius.ui.quantity'|trans }}</th>
        <th class=\"center aligned sylius-table-column-subtotal\">{{ 'sylius.ui.subtotal'|trans }}</th>
        <th class=\"center aligned sylius-table-column-discount\">{{ 'sylius.ui.discount'|trans }}</th>
        <th class=\"center aligned sylius-table-column-tax\">{{ 'sylius.ui.tax'|trans }}</th>
        <th class=\"center aligned sylius-table-column-total\">{{ 'sylius.ui.total'|trans }}</th>
    </tr>
    </thead>
    <tbody>
    {% for item in order.items %}
        {% include '@SyliusAdmin/Order/Show/Summary/_item.html.twig' %}
    {% endfor %}
    </tbody>
    <tfoot>
    {% include '@SyliusAdmin/Order/Show/Summary/_totals.html.twig' %}
    </tfoot>
</table>
", "SyliusAdminBundle:Order/Show:_summary.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_summary.html.twig");
    }
}
