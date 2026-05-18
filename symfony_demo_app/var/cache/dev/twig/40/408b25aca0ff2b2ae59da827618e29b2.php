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

/* debug/source_code.html.twig */
class __TwigTemplate_9828ace76eb3b2a6928b196684423e4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "debug/source_code.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "debug/source_code.html.twig"));

        // line 1
        yield "<div class=\"section source-code\">
    <p>
        ";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.show_code");
        yield "
    </p>

    <button type=\"button\" class=\"btn btn-secondary py-3 btn-lg btn-block\" data-bs-toggle=\"modal\" data-bs-target=\"#sourceCodeModal\">
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:code"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show_code"), "html", null, true);
        yield "
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 14
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:code"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.source_code"), "html", null, true);
        yield "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
        yield "\"></button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"controller-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#controller-code\" type=\"button\" role=\"tab\" aria-controls=\"controller-code\" aria-selected=\"true\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.controller_code"), "html", null, true);
        yield "</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"template-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#template-code\" type=\"button\" role=\"tab\" aria-controls=\"template-code\" aria-selected=\"false\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.twig_template_code"), "html", null, true);
        yield "</button>
                        </li>
                    </ul>

                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane show active\" id=\"controller-code\" role=\"tabpanel\" aria-labelledby=\"controller-tab\" tabindex=\"0\">
                            ";
        // line 30
        if ((($tmp = (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                                <p class=\"file-link\">";
            yield $this->env->getRuntime('App\Twig\SourceCodeExtension')->linkSourceFile($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 31, $this->source); })()), "file_path", [], "any", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 31, $this->source); })()), "starting_line", [], "any", false, false, false, 31));
            yield "</p>
                                <pre><code class=\"php\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 32, $this->source); })()), "source_code", [], "any", false, false, false, 32), "html", null, true);
            yield "</code></pre>
                            ";
        } else {
            // line 34
            yield "                                <pre><code>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_available"), "html", null, true);
            yield "</code></pre>
                            ";
        }
        // line 36
        yield "                        </div>

                        <div class=\"tab-pane\" id=\"template-code\" role=\"tabpanel\" aria-labelledby=\"template-tab\" tabindex=\"0\">
                            <p class=\"file-link\">";
        // line 39
        yield $this->env->getRuntime('App\Twig\SourceCodeExtension')->linkSourceFile($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 39, $this->source); })()), "file_path", [], "any", false, false, false, 39), CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 39, $this->source); })()), "starting_line", [], "any", false, false, false, 39));
        yield "</p>
                            <pre><code class=\"twig\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 40, $this->source); })()), "source_code", [], "any", false, false, false, 40), "html", null, true);
        yield "</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "debug/source_code.html.twig";
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
        return array (  128 => 40,  124 => 39,  119 => 36,  113 => 34,  108 => 32,  103 => 31,  101 => 30,  92 => 24,  86 => 21,  77 => 15,  71 => 14,  59 => 7,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"section source-code\">
    <p>
        {{ 'help.show_code'|trans|raw }}
    </p>

    <button type=\"button\" class=\"btn btn-secondary py-3 btn-lg btn-block\" data-bs-toggle=\"modal\" data-bs-target=\"#sourceCodeModal\">
        {{ component('ux:icon', { name: 'tabler:code' }) }} {{ 'action.show_code'|trans }}
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ component('ux:icon', { name: 'tabler:code' }) }} {{ 'title.source_code'|trans }}</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ 'action.close'|trans }}\"></button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"controller-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#controller-code\" type=\"button\" role=\"tab\" aria-controls=\"controller-code\" aria-selected=\"true\">{{ 'title.controller_code'|trans }}</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"template-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#template-code\" type=\"button\" role=\"tab\" aria-controls=\"template-code\" aria-selected=\"false\">{{ 'title.twig_template_code'|trans }}</button>
                        </li>
                    </ul>

                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane show active\" id=\"controller-code\" role=\"tabpanel\" aria-labelledby=\"controller-tab\" tabindex=\"0\">
                            {% if controller %}
                                <p class=\"file-link\">{{ link_source_file(controller.file_path, controller.starting_line) }}</p>
                                <pre><code class=\"php\">{{ controller.source_code }}</code></pre>
                            {% else %}
                                <pre><code>{{ 'not_available'|trans }}</code></pre>
                            {% endif %}
                        </div>

                        <div class=\"tab-pane\" id=\"template-code\" role=\"tabpanel\" aria-labelledby=\"template-tab\" tabindex=\"0\">
                            <p class=\"file-link\">{{ link_source_file(template.file_path, template.starting_line) }}</p>
                            <pre><code class=\"twig\">{{ template.source_code }}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "debug/source_code.html.twig", "C:\\Users\\Sam\\my_project_directory_sam\\symfony_demo_app\\symfony_demo_app\\templates\\debug\\source_code.html.twig");
    }
}
