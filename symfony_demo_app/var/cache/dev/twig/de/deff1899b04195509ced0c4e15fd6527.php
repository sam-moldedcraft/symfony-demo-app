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

/* form/fields.html.twig */
class __TwigTemplate_1490f69e0c204a3e22d9fc2bcdbb840c extends Template
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
            'date_time_picker_widget' => [$this, 'block_date_time_picker_widget'],
            'tags_input_widget' => [$this, 'block_tags_input_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('date_time_picker_widget', $context, $blocks);
        // line 17
        yield "
";
        // line 18
        yield from $this->unwrap()->yieldBlock('tags_input_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_time_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        yield "    <div class=\"input-group flatpickr\">
        ";
        // line 12
        yield from         $this->unwrap()->yieldBlock("datetime_widget", $context, $blocks);
        yield "
        <button class=\"btn btn-outline-secondary\" data-toggle type=\"button\">";
        // line 13
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:calendar-month"]);
        yield "</button>
        <button class=\"btn btn-outline-danger\" data-clear type=\"button\">";
        // line 14
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:trash"]);
        yield "</button>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tags_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tags_input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tags_input_widget"));

        // line 19
        yield "    <div class=\"input-group\">
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'widget', ["attr" => ["data-toggle" => "tagsinput", "data-tags" => json_encode((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 20, $this->source); })()))]]);
        yield "
        <span class=\"input-group-text\">";
        // line 21
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:tags"]);
        yield "</span>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "form/fields.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  127 => 21,  123 => 20,  120 => 19,  107 => 18,  93 => 14,  89 => 13,  85 => 12,  82 => 11,  69 => 10,  58 => 18,  55 => 17,  53 => 10,  50 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
    Each field type is rendered by a template fragment, which is determined
    by the name of your form type class (DateTimePickerType -> date_time_picker)
    and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
    in DateTimePickerType.

    See https://symfony.com/doc/current/form/create_custom_field_type.html#creating-the-form-type-template
#}

{% block date_time_picker_widget %}
    <div class=\"input-group flatpickr\">
        {{ block('datetime_widget') }}
        <button class=\"btn btn-outline-secondary\" data-toggle type=\"button\">{{ component('ux:icon', { name: 'tabler:calendar-month' }) }}</button>
        <button class=\"btn btn-outline-danger\" data-clear type=\"button\">{{ component('ux:icon', { name: 'tabler:trash' }) }}</button>
    </div>
{% endblock %}

{% block tags_input_widget %}
    <div class=\"input-group\">
        {{ form_widget(form, {attr: {'data-toggle': 'tagsinput', 'data-tags': tags|json_encode}}) }}
        <span class=\"input-group-text\">{{ component('ux:icon', { name: 'tabler:tags' }) }}</span>
    </div>
{% endblock %}
", "form/fields.html.twig", "C:\\Users\\Sam\\my_project_directory_sam\\symfony_demo_app\\symfony_demo_app\\templates\\form\\fields.html.twig");
    }
}
