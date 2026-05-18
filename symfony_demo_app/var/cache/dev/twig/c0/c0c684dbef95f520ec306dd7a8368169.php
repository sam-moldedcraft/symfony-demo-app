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

/* security/login.html.twig */
class __TwigTemplate_c1162f4379ac1c4892db7eda2fac2e37 extends Template
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

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        yield "login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "    ";
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 11
        yield "
    ";
        // line 17
        yield "    <div class=\"row\" ";
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("login");
        yield ">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        yield "\" method=\"post\">
                    <fieldset>
                        <legend>";
        // line 22
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:lock"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.login"), "html", null, true);
        yield "</legend>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"username\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
        yield "</label>
                            <input class=\"form-control\" ";
        // line 25
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("login", "username");
        yield " id=\"username\" name=\"_username\" required=\"required\" type=\"text\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "\">
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"password\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.password"), "html", null, true);
        yield "</label>
                            <div class=\"input-group\">
                                <input class=\"form-control\" ";
        // line 31
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget("login", "password");
        yield " id=\"password\" name=\"_password\" required=\"required\" type=\"password\">
                                <button class=\"btn btn-primary\" type=\"button\" ";
        // line 32
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("login", "togglePasswordInputType");
        yield ">";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:eye", "aria-hidden" => "false", "aria-label" => "Toggle password visibility"]);
        yield "</button>
                            </div>
                        </div>

                        <div class=\"mb-3 form-check\">
                            <input class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" checked>
                            <label class=\"form-check-label\" for=\"remember_me\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.remember_me"), "html", null, true);
        yield "</label>
                        </div>

                        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "query", [], "any", false, false, false, 41), "get", ["redirect_to"], "method", false, false, false, 41), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:login"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.sign_in"), "html", null, true);
        yield "
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:arrow-left"]);
        yield "
                ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.login_users"), "html", null, true);
        yield "
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
        yield "</th>
                        <th scope=\"col\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.password"), "html", null, true);
        yield "</th>
                        <th scope=\"col\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.role"), "html", null, true);
        yield "</th>
                        <th scope=\"col\"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> (";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.role_user"), "html", null, true);
        yield ")</td>
                        <td>
                            <button class=\"btn btn-primary btn-sm\" ";
        // line 72
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("login", "prefillJohnUser");
        yield ">
                                ";
        // line 73
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:user", "aria-hidden" => "false", "aria-label" => "Log in as the user John"]);
        yield "
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> (";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.role_admin"), "html", null, true);
        yield ")</td>
                        <td>
                            <button class=\"btn btn-primary btn-sm\" ";
        // line 82
        yield $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("login", "prefillJaneAdmin");
        yield ">
                                ";
        // line 83
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:user", "aria-hidden" => "false", "aria-label" => "Log in as the user Jane"]);
        yield "
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"card\">
                <div class=\"card-body\">
                    <p class=\"card-text\">
                        <span class=\"badge text-bg-info\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("note"), "html", null, true);
        yield "</span>
                        ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.reload_fixtures"), "html", null, true);
        yield "<br>
                        <code class=\"d-block my-2 p-2\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p class=\"card-text\">
                        <span class=\"badge text-bg-info\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tip"), "html", null, true);
        yield "</span>
                        ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.add_user"), "html", null, true);
        yield "<br>
                        <code class=\"d-block my-2 p-2\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 110
        yield "    ";
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "

    ";
        // line 112
        yield $this->env->getRuntime('App\Twig\SourceCodeExtension')->showSourceCode($this->env, $this->getTemplateName());
        yield "
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
        return "security/login.html.twig";
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
        return array (  324 => 112,  318 => 110,  305 => 109,  286 => 100,  282 => 99,  274 => 94,  270 => 93,  257 => 83,  253 => 82,  248 => 80,  238 => 73,  234 => 72,  229 => 70,  218 => 62,  214 => 61,  210 => 60,  201 => 54,  197 => 53,  183 => 44,  178 => 42,  174 => 41,  168 => 38,  157 => 32,  153 => 31,  148 => 29,  139 => 25,  135 => 24,  128 => 22,  123 => 20,  116 => 17,  113 => 11,  107 => 8,  104 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'login' %}

{% block main %}
    {% if error %}
        <div class=\"alert alert-danger\" role=\"alert\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}

    {#
        This references the Stimulus controller defined in \"assets/controllers/login-controller.js\".
        See https://symfony.com/bundles/StimulusBundle/current/index.html
        For more info on Symfony UX see https://ux.symfony.com
    #}
    <div class=\"row\" {{ stimulus_controller('login') }}>
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"{{ path('security_login') }}\" method=\"post\">
                    <fieldset>
                        <legend>{{ component('ux:icon', { name: 'tabler:lock' }) }} {{ 'title.login'|trans }}</legend>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"username\">{{ 'label.username'|trans }}</label>
                            <input class=\"form-control\" {{ stimulus_target('login', 'username') }} id=\"username\" name=\"_username\" required=\"required\" type=\"text\" value=\"{{ last_username }}\">
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"password\">{{ 'label.password'|trans }}</label>
                            <div class=\"input-group\">
                                <input class=\"form-control\" {{ stimulus_target('login', 'password') }} id=\"password\" name=\"_password\" required=\"required\" type=\"password\">
                                <button class=\"btn btn-primary\" type=\"button\" {{ stimulus_action('login', 'togglePasswordInputType') }}>{{ component('ux:icon', { name: 'tabler:eye', 'aria-hidden': 'false', 'aria-label': 'Toggle password visibility' }) }}</button>
                            </div>
                        </div>

                        <div class=\"mb-3 form-check\">
                            <input class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" checked>
                            <label class=\"form-check-label\" for=\"remember_me\">{{ 'label.remember_me'|trans }}</label>
                        </div>

                        <input type=\"hidden\" name=\"_target_path\" value=\"{{ app.request.query.get('redirect_to') }}\">
                        <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"{{ csrf_token('authenticate') }}\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            {{ component('ux:icon', { name: 'tabler:login' }) }} {{ 'action.sign_in'|trans }}
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                {{ component('ux:icon', { name: 'tabler:arrow-left' }) }}
                {{ 'help.login_users'|trans }}
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">{{ 'label.username'|trans }}</th>
                        <th scope=\"col\">{{ 'label.password'|trans }}</th>
                        <th scope=\"col\">{{ 'label.role'|trans }}</th>
                        <th scope=\"col\"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> ({{ 'help.role_user'|trans }})</td>
                        <td>
                            <button class=\"btn btn-primary btn-sm\" {{ stimulus_action('login', 'prefillJohnUser') }}>
                                {{ component('ux:icon', { name: 'tabler:user', 'aria-hidden': 'false', 'aria-label': 'Log in as the user John' }) }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> ({{ 'help.role_admin'|trans }})</td>
                        <td>
                            <button class=\"btn btn-primary btn-sm\" {{ stimulus_action('login', 'prefillJaneAdmin') }}>
                                {{ component('ux:icon', { name: 'tabler:user', 'aria-hidden': 'false', 'aria-label': 'Log in as the user Jane' }) }}
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"card\">
                <div class=\"card-body\">
                    <p class=\"card-text\">
                        <span class=\"badge text-bg-info\">{{ 'note'|trans }}</span>
                        {{ 'help.reload_fixtures'|trans }}<br>
                        <code class=\"d-block my-2 p-2\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p class=\"card-text\">
                        <span class=\"badge text-bg-info\">{{ 'tip'|trans }}</span>
                        {{ 'help.add_user'|trans }}<br>
                        <code class=\"d-block my-2 p-2\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "security/login.html.twig", "C:\\Users\\Sam\\my_project_directory_sam\\symfony_demo_app\\symfony_demo_app\\templates\\security\\login.html.twig");
    }
}
