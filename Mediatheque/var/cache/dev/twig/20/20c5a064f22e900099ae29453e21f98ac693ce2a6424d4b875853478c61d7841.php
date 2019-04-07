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

/* SyliusUiBundle::_flashes.html.twig */
class __TwigTemplate_bd7dccfc1e8249514ee1073f34612a26c2637bc0413f21367d3fdbc5e4420b1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusUiBundle::_flashes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusUiBundle::_flashes.html.twig"));

        // line 1
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [])) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", []), "started", []))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable([0 => "success", 1 => "error", 2 => "info", 3 => "warning"]);
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 3
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", []), "flashbag", []), "get", [0 => $context["type"]], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 4
                    echo "            ";
                    if (("error" == $context["type"])) {
                        // line 5
                        echo "                ";
                        $context["result"] = "negative";
                        // line 6
                        echo "                ";
                        $context["icon"] = "remove";
                        // line 7
                        echo "            ";
                    }
                    // line 8
                    echo "            ";
                    if (("info" == $context["type"])) {
                        // line 9
                        echo "                ";
                        $context["result"] = "info";
                        // line 10
                        echo "                ";
                        $context["icon"] = "info";
                        // line 11
                        echo "            ";
                    }
                    // line 12
                    echo "            <div class=\"ui icon ";
                    echo twig_escape_filter($this->env, (((isset($context["result"]) || array_key_exists("result", $context))) ? (_twig_default_filter((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 12, $this->source); })()), "positive")) : ("positive")), "html", null, true);
                    echo " message sylius-flash-message\">
                <i class=\"close icon\"></i>
                <i class=\"";
                    // line 14
                    echo twig_escape_filter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 14, $this->source); })()), "checkmark")) : ("checkmark")), "html", null, true);
                    echo " icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        ";
                    // line 17
                    $context["header"] = ("sylius.ui." . $context["type"]);
                    // line 18
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 18, $this->source); })())), "html", null, true);
                    echo "
                    </div>
                    <p>
                    ";
                    // line 21
                    if (twig_test_iterable($context["flash"])) {
                        // line 22
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["flash"], "message", []), twig_get_attribute($this->env, $this->source, $context["flash"], "parameters", []), "flashes"), "html", null, true);
                        echo "
                    ";
                    } else {
                        // line 24
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["flash"], [], "flashes"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 26
                    echo "                    </p>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle::_flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  112 => 26,  106 => 24,  100 => 22,  98 => 21,  91 => 18,  89 => 17,  83 => 14,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  48 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.session is not null and app.session.started %}
    {% for type in ['success', 'error', 'info', 'warning'] %}
        {% for flash in app.session.flashbag.get(type) %}
            {% if 'error' == type %}
                {% set result = 'negative' %}
                {% set icon = 'remove' %}
            {% endif %}
            {% if 'info' == type %}
                {% set result = 'info' %}
                {% set icon = 'info' %}
            {% endif %}
            <div class=\"ui icon {{ result|default('positive') }} message sylius-flash-message\">
                <i class=\"close icon\"></i>
                <i class=\"{{ icon|default('checkmark') }} icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        {% set header = 'sylius.ui.'~type %}
                        {{ header|trans }}
                    </div>
                    <p>
                    {% if flash is iterable %}
                        {{ flash.message|trans(flash.parameters, 'flashes') }}
                    {% else %}
                        {{ flash|trans({}, 'flashes') }}
                    {% endif %}
                    </p>
                </div>
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}
", "SyliusUiBundle::_flashes.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/_flashes.html.twig");
    }
}
