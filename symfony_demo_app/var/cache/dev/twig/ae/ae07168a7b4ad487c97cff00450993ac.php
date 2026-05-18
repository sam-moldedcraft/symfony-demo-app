<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* default/_language_selector.html.twig */
class __TwigTemplate_3697c7c7ba2c3f7f72ad672388d1a35e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_language_selector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_language_selector.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_render_language_selector($display_current_language = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "display_current_language" => $display_current_language,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_language_selector"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_language_selector"));

            // line 2
            yield "    <a class=\"nav-link language-selector-dropdown-button\" href=\"#\" role=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#locale-selector-modal\">
        ";
            // line 3
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:world"]);
            yield "
        ";
            // line 4
            if ((($tmp = (isset($context["display_current_language"]) || array_key_exists("display_current_language", $context) ? $context["display_current_language"] : (function () { throw new RuntimeError('Variable "display_current_language" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "            <span class=\"current-language\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getLocaleName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "locale", [], "any", false, false, false, 5)), "html", null, true);
                yield "</span>
        ";
            }
            // line 7
            yield "        <span class=\"sr-only\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.choose_language"), "html", null, true);
            yield "</span>
    </a>

    <div id=\"locale-selector-modal\" class=\"modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-lg modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    ";
            // line 15
            yield "                    <h1 class=\"modal-title\" lang=\"en\">Choose your language</h1>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
            yield "\"></button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"locales\">
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->env->getRuntime('App\Twig\AppExtension')->getLocales());
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 22
                $context["is_active"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "locale", [], "any", false, false, false, 22) == CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 22));
                // line 23
                yield "<li class=\"";
                yield (((($tmp = (isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield (((($tmp = $this->env->getRuntime('App\Twig\AppExtension')->isRtl(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 23))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" rtl") : (""));
                yield "\" translate=\"no\">
                                <a class=\"stretched-link\" lang=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 24), "html", null, true);
                yield "\" hreflang=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 24), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "current_route", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "current_route", [], "any", false, false, false, 24)) : ("blog_index")), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "current_route_parameters", [], "any", false, false, false, 24), ["_locale" => CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 24)])), "html", null, true);
                yield "\">
                                    ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 25)), "html", null, true);
                yield " <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 25), "html", null, true);
                yield "</small>
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "                    </ul>
                </div>
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/_language_selector.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  144 => 29,  132 => 25,  124 => 24,  118 => 23,  116 => 22,  112 => 21,  104 => 16,  101 => 15,  90 => 7,  84 => 5,  82 => 4,  78 => 3,  75 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro render_language_selector(display_current_language = false) %}
    <a class=\"nav-link language-selector-dropdown-button\" href=\"#\" role=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#locale-selector-modal\">
        {{ component('ux:icon', { name: 'tabler:world' }) }}
        {% if display_current_language %}
            <span class=\"current-language\">{{ app.locale|locale_name }}</span>
        {% endif %}
        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
    </a>

    <div id=\"locale-selector-modal\" class=\"modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-lg modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    {# Display this title always in English to make the language selector easier to use #}
                    <h1 class=\"modal-title\" lang=\"en\">Choose your language</h1>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"{{ 'action.close'|trans }}\"></button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"locales\">
                        {% for locale in locales() %}
                            {%- set is_active = app.locale == locale.code -%}
                            <li class=\"{{ is_active ? 'active' }}{{ is_rtl(locale.code) ? ' rtl' }}\" translate=\"no\">
                                <a class=\"stretched-link\" lang=\"{{ locale.code }}\" hreflang=\"{{ locale.code }}\" href=\"{{ path(app.current_route ?? 'blog_index', app.current_route_parameters|merge({_locale: locale.code})) }}\">
                                    {{ locale.name|capitalize }} <small>{{ locale.code }}</small>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endmacro %}
", "default/_language_selector.html.twig", "C:\\Users\\Sam\\my_project_directory_sam\\symfony_demo_app\\symfony_demo_app\\templates\\default\\_language_selector.html.twig");
    }
}
