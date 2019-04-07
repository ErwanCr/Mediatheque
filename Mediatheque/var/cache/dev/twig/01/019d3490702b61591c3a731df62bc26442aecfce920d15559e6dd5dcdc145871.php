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

/* @SyliusShop/Product/Index/_sorting.html.twig */
class __TwigTemplate_0ebc5d8b648aa9a1590dc8518925fda57d96d938830c07ee2d600653db61dca0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_sorting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_sorting.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 1, $this->source); })()), "data", []), "nbResults", []) > 0)) {
            // line 2
            echo "
";
            // line 3
            $context["definition"] = twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 3, $this->source); })()), "definition", []);
            // line 4
            echo "
";
            // line 5
            $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method");
            // line 6
            $context["route_parameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route_params"], "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", []), "query", []), "all", []));
            // line 7
            echo "
";
            // line 8
            $context["criteria"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", []), "query", []), "get", [0 => "criteria", 1 => []], "method");
            // line 9
            echo "
";
            // line 10
            $context["default_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 10, $this->source); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 10, $this->source); })()), ["sorting" => null, "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 10, $this->source); })())]));
            // line 11
            $context["from_a_to_z_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 11, $this->source); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 11, $this->source); })()), ["sorting" => ["name" => "asc"], "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 11, $this->source); })())]));
            // line 12
            $context["from_z_to_a_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 12, $this->source); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 12, $this->source); })()), ["sorting" => ["name" => "desc"], "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 12, $this->source); })())]));
            // line 13
            $context["oldest_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 13, $this->source); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 13, $this->source); })()), ["sorting" => ["createdAt" => "asc"], "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 13, $this->source); })())]));
            // line 14
            $context["newest_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 14, $this->source); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 14, $this->source); })()), ["sorting" => ["createdAt" => "desc"], "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 14, $this->source); })())]));
            // line 15
            $context["cheapest_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 15, $this->source); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 15, $this->source); })()), ["sorting" => ["price" => "asc"], "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 15, $this->source); })())]));
            // line 16
            $context["most_expensive_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 16, $this->source); })()), ["sorting" => ["price" => "desc"], "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 16, $this->source); })())]));
            // line 17
            echo "
";
            // line 18
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", []), "query", []), "get", [0 => "sorting"], "method"))) {
                // line 19
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.by_position"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "sorting"], "method", false, true), "name", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", []), "query", []), "get", [0 => "sorting"], "method"), "name", []) == "asc"))) {
                // line 21
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_a_to_z"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "sorting"], "method", false, true), "name", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", []), "query", []), "get", [0 => "sorting"], "method"), "name", []) == "desc"))) {
                // line 23
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_z_to_a"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "sorting"], "method", false, true), "createdAt", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", []), "query", []), "get", [0 => "sorting"], "method"), "createdAt", []) == "desc"))) {
                // line 25
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.newest_first"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "sorting"], "method", false, true), "createdAt", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", []), "query", []), "get", [0 => "sorting"], "method"), "createdAt", []) == "asc"))) {
                // line 27
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.oldest_first"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 28
($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "sorting"], "method", false, true), "price", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", []), "query", []), "get", [0 => "sorting"], "method"), "price", []) == "asc"))) {
                // line 29
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cheapest_first"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
($context["app"] ?? null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "sorting"], "method", false, true), "price", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", []), "query", []), "get", [0 => "sorting"], "method"), "price", []) == "desc"))) {
                // line 31
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.most_expensive_first"));
            }
            // line 33
            echo "
<div class=\"ui right floated small header\">
    <div class=\"content\">
        ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sort"), "html", null, true);
            echo "
        <div class=\"ui inline dropdown\">
            <div class=\"text\">";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["current_sorting_label"]) || array_key_exists("current_sorting_label", $context) ? $context["current_sorting_label"] : (function () { throw new RuntimeError('Variable "current_sorting_label" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "</div>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                <a class=\"item\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["default_path"]) || array_key_exists("default_path", $context) ? $context["default_path"] : (function () { throw new RuntimeError('Variable "default_path" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.by_position")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.by_position"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["from_a_to_z_path"]) || array_key_exists("from_a_to_z_path", $context) ? $context["from_a_to_z_path"] : (function () { throw new RuntimeError('Variable "from_a_to_z_path" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_a_to_z")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_a_to_z"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["from_z_to_a_path"]) || array_key_exists("from_z_to_a_path", $context) ? $context["from_z_to_a_path"] : (function () { throw new RuntimeError('Variable "from_z_to_a_path" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_z_to_a")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_z_to_a"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["newest_first_path"]) || array_key_exists("newest_first_path", $context) ? $context["newest_first_path"] : (function () { throw new RuntimeError('Variable "newest_first_path" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.newest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.newest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["oldest_first_path"]) || array_key_exists("oldest_first_path", $context) ? $context["oldest_first_path"] : (function () { throw new RuntimeError('Variable "oldest_first_path" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.oldest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.oldest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["cheapest_first_path"]) || array_key_exists("cheapest_first_path", $context) ? $context["cheapest_first_path"] : (function () { throw new RuntimeError('Variable "cheapest_first_path" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cheapest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cheapest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["most_expensive_first_path"]) || array_key_exists("most_expensive_first_path", $context) ? $context["most_expensive_first_path"] : (function () { throw new RuntimeError('Variable "most_expensive_first_path" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.most_expensive_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.most_expensive_first"), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 47,  172 => 46,  164 => 45,  156 => 44,  148 => 43,  140 => 42,  132 => 41,  126 => 38,  121 => 36,  116 => 33,  112 => 31,  110 => 30,  107 => 29,  105 => 28,  102 => 27,  100 => 26,  97 => 25,  95 => 24,  92 => 23,  90 => 22,  87 => 21,  85 => 20,  82 => 19,  80 => 18,  77 => 17,  75 => 16,  73 => 15,  71 => 14,  69 => 13,  67 => 12,  65 => 11,  63 => 10,  60 => 9,  58 => 8,  55 => 7,  53 => 6,  51 => 5,  48 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if resources.data.nbResults > 0 %}

{% set definition = resources.definition %}

{% set route = app.request.attributes.get('_route') %}
{% set route_parameters = app.request.attributes.get('_route_params')|merge(app.request.query.all) %}

{% set criteria = app.request.query.get('criteria', {}) %}

{% set default_path = path(route, route_parameters|merge({'sorting': null, 'criteria': criteria})) %}
{% set from_a_to_z_path = path(route, route_parameters|merge({'sorting': {'name': 'asc'}, 'criteria': criteria})) %}
{% set from_z_to_a_path = path(route, route_parameters|merge({'sorting': {'name': 'desc'}, 'criteria': criteria})) %}
{% set oldest_first_path = path(route, route_parameters|merge({'sorting': {'createdAt': 'asc'}, 'criteria': criteria})) %}
{% set newest_first_path = path(route, route_parameters|merge({'sorting': {'createdAt': 'desc'}, 'criteria': criteria})) %}
{% set cheapest_first_path = path(route, route_parameters|merge({'sorting': {'price': 'asc'}, 'criteria': criteria})) %}
{% set most_expensive_first_path = path(route, route_parameters|merge({'sorting': {'price': 'desc'}, 'criteria': criteria})) %}

{% if app.request.query.get('sorting') is empty %}
    {% set current_sorting_label = 'sylius.ui.by_position'|trans|lower %}
{% elseif app.request.query.get('sorting').name is defined and app.request.query.get('sorting').name == 'asc'%}
    {% set current_sorting_label = 'sylius.ui.from_a_to_z'|trans|lower %}
{% elseif app.request.query.get('sorting').name is defined and app.request.query.get('sorting').name == 'desc'%}
    {% set current_sorting_label = 'sylius.ui.from_z_to_a'|trans|lower %}
{% elseif app.request.query.get('sorting').createdAt is defined and app.request.query.get('sorting').createdAt == 'desc'%}
    {% set current_sorting_label = 'sylius.ui.newest_first'|trans|lower %}
{% elseif app.request.query.get('sorting').createdAt is defined and app.request.query.get('sorting').createdAt == 'asc'%}
    {% set current_sorting_label = 'sylius.ui.oldest_first'|trans|lower %}
{% elseif app.request.query.get('sorting').price is defined and app.request.query.get('sorting').price == 'asc'%}
    {% set current_sorting_label = 'sylius.ui.cheapest_first'|trans|lower %}
{% elseif app.request.query.get('sorting').price is defined and app.request.query.get('sorting').price == 'desc' %}
    {% set current_sorting_label = 'sylius.ui.most_expensive_first'|trans|lower %}
{% endif %}

<div class=\"ui right floated small header\">
    <div class=\"content\">
        {{ 'sylius.ui.sort'|trans }}
        <div class=\"ui inline dropdown\">
            <div class=\"text\">{{ current_sorting_label }}</div>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                <a class=\"item\" href=\"{{ default_path }}\" data-text=\"{{ 'sylius.ui.by_position'|trans|lower }}\">{{ 'sylius.ui.by_position'|trans }}</a>
                <a class=\"item\" href=\"{{ from_a_to_z_path }}\" data-text=\"{{ 'sylius.ui.from_a_to_z'|trans|lower }}\">{{ 'sylius.ui.from_a_to_z'|trans }}</a>
                <a class=\"item\" href=\"{{ from_z_to_a_path }}\" data-text=\"{{ 'sylius.ui.from_z_to_a'|trans|lower }}\">{{ 'sylius.ui.from_z_to_a'|trans }}</a>
                <a class=\"item\" href=\"{{ newest_first_path }}\" data-text=\"{{ 'sylius.ui.newest_first'|trans|lower }}\">{{ 'sylius.ui.newest_first'|trans }}</a>
                <a class=\"item\" href=\"{{ oldest_first_path }}\" data-text=\"{{ 'sylius.ui.oldest_first'|trans|lower }}\">{{ 'sylius.ui.oldest_first'|trans }}</a>
                <a class=\"item\" href=\"{{ cheapest_first_path }}\" data-text=\"{{ 'sylius.ui.cheapest_first'|trans|lower }}\">{{ 'sylius.ui.cheapest_first'|trans }}</a>
                <a class=\"item\" href=\"{{ most_expensive_first_path }}\" data-text=\"{{ 'sylius.ui.most_expensive_first'|trans|lower }}\">{{ 'sylius.ui.most_expensive_first'|trans }}</a>
            </div>
        </div>
    </div>
</div>
{% endif %}
", "@SyliusShop/Product/Index/_sorting.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_sorting.html.twig");
    }
}
