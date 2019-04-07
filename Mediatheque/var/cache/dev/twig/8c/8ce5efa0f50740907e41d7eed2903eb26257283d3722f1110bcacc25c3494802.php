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

/* SyliusAdminBundle:Taxon:_treeWithButtons.html.twig */
class __TwigTemplate_5489fdd7567681642a2f382402b2f4e85a30c99a133889d612293d158bf9a1d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig", 1);
        // line 2
        $context["tree"] = $this;
        // line 3
        echo "
";
        // line 36
        echo "
<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui large fluid labeled icon primary button\">
    <i class=\"plus icon\"></i>
    ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "html", null, true);
        echo "
</a>

<div class=\"ui segment\">
    <div class=\"ui list sylius-sortable-list\">
        ";
        // line 44
        echo $context["tree"]->macro_render((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new RuntimeError('Variable "taxons" does not exist.', 44, $this->source); })()));
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function macro_render($__taxons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "taxons" => $__taxons__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render"));

            // line 5
            echo "    ";
            $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig", 5);
            // line 6
            echo "    ";
            $context["tree"] = $this;
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new RuntimeError('Variable "taxons" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["taxon"], "id", []) != null)) {
                    // line 9
                    echo "        <div class=\"item\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", []), "html", null, true);
                    echo "\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_per_taxon_index", ["taxonId" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [])]), "html", null, true);
                    echo "\">
                        ";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "name", []), "html", null, true);
                    echo "
                    </a>
                    <br>
                    <div class=\"ui mini buttons\" style=\"margin-top: 5px;\">
                        ";
                    // line 18
                    echo $context["buttons"]->macro_create($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create_for_parent", ["id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [])]), "sylius.ui.add");
                    echo "
                        ";
                    // line 19
                    echo $context["buttons"]->macro_edit($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_update", ["id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [])]), null, null, false);
                    echo "
                        ";
                    // line 20
                    echo $context["buttons"]->macro_delete($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [])]), null, false, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", []));
                    echo "
                        <a class=\"ui icon button sylius-taxon-move-up\" data-url=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_move", ["id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [])]), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", []), "html", null, true);
                    echo "\" data-position=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "position", []), "html", null, true);
                    echo "\">
                            <i class=\"icon arrow up\"></i>
                        </a>
                        <a class=\"ui icon button sylius-taxon-move-down\" data-url=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_move", ["id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [])]), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", []), "html", null, true);
                    echo "\" data-position=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "position", []), "html", null, true);
                    echo "\">
                            <i class=\"icon arrow down\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"list\">
                    ";
                    // line 30
                    echo $context["tree"]->macro_render(twig_get_attribute($this->env, $this->source, $context["taxon"], "children", []));
                    echo "
                </div>
            </div>
        </div>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 30,  151 => 24,  141 => 21,  137 => 20,  133 => 19,  129 => 18,  122 => 14,  118 => 13,  110 => 9,  105 => 8,  102 => 7,  99 => 6,  96 => 5,  78 => 4,  64 => 44,  56 => 39,  51 => 37,  48 => 36,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import _self as tree %}

{% macro render(taxons) %}
    {% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
    {% import _self as tree %}

    {% for taxon in taxons if taxon.id != null %}
        <div class=\"item\" data-id=\"{{ taxon.id }}\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"{{ path('sylius_admin_product_per_taxon_index', {'taxonId': taxon.id}) }}\">
                        {{ taxon.name }}
                    </a>
                    <br>
                    <div class=\"ui mini buttons\" style=\"margin-top: 5px;\">
                        {{ buttons.create(path('sylius_admin_taxon_create_for_parent', { 'id': taxon.id }), 'sylius.ui.add') }}
                        {{ buttons.edit(path('sylius_admin_taxon_update', { 'id': taxon.id }), null, null, false) }}
                        {{ buttons.delete(path('sylius_admin_taxon_delete', { 'id': taxon.id }), null, false, taxon.id) }}
                        <a class=\"ui icon button sylius-taxon-move-up\" data-url=\"{{ path('sylius_admin_ajax_taxon_move', { id: taxon.id }) }}\" data-id=\"{{ taxon.id }}\" data-position=\"{{ taxon.position }}\">
                            <i class=\"icon arrow up\"></i>
                        </a>
                        <a class=\"ui icon button sylius-taxon-move-down\" data-url=\"{{ path('sylius_admin_ajax_taxon_move', { id: taxon.id }) }}\" data-id=\"{{ taxon.id }}\" data-position=\"{{ taxon.position }}\">
                            <i class=\"icon arrow down\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"list\">
                    {{ tree.render(taxon.children) }}
                </div>
            </div>
        </div>
    {% endfor %}
{% endmacro %}

<a href=\"{{ path('sylius_admin_taxon_create') }}\" class=\"ui large fluid labeled icon primary button\">
    <i class=\"plus icon\"></i>
    {{ 'sylius.ui.create'|trans }}
</a>

<div class=\"ui segment\">
    <div class=\"ui list sylius-sortable-list\">
        {{ tree.render(taxons) }}
    </div>
</div>
", "SyliusAdminBundle:Taxon:_treeWithButtons.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_treeWithButtons.html.twig");
    }
}
