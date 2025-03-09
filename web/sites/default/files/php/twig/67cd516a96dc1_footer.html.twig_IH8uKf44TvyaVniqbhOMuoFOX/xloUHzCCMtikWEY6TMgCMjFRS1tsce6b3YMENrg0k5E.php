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

/* themes/light/templates/layout/footer.html.twig */
class __TwigTemplate_7bf2171a9ef5796031e36999fb24c1ea extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["telega"] = (("/" . ($context["directory"] ?? null)) . "/images/telega.svg");
        // line 2
        $context["vk"] = (("/" . ($context["directory"] ?? null)) . "/images/vk.svg");
        // line 3
        $context["rutube"] = (("/" . ($context["directory"] ?? null)) . "/images/rutube.svg");
        // line 4
        yield "
<div class=\"container\">
\t<div class=\"contacts\" id=\"contacts\">
\t\t<div class=\"left\">
\t\t\t<h2>Контакты</h2>
\t\t\t<div class=\"label\">
\t\t\t\tОтдел продаж:
\t\t\t</div>
\t\t\t<div class=\"text\">телефон:</div>
\t\t\t<a href=\"tel:+78000000000\">+7 800 000 00 00</a>
\t\t\t<div class=\"text\">почта:</div>
\t\t\t<a href=\"mailto:price@email.ru\">price@email.ru</a>
\t\t\t<div class=\"text\">адрес:</div>
\t\t\t<span>777777, Россия, г. Москва, ул. Московская, 01А</span>
\t\t\t<div class=\"label\">
\t\t\t\tТехподдержка:
\t\t\t</div>
\t\t\t<div class=\"text\">телефон:</div>
\t\t\t<a href=\"tel:+78000000000\">+7 800 000 00 00</a>
\t\t\t<div class=\"text\">почта:</div>
\t\t\t<a href=\"mailto:support@email.ru\">support@email.ru</a>
\t\t</div>
\t\t<div class=\"right\">
\t\t\t<iframe src=\"https://yandex.ru/map-widget/v1/?um=constructor%3A62fad3759f0b05059ccae142387875026b93871d5b0924bb67d07745353f38d6&amp;source=constructor\" width=\"850\" height=\"508\" frameborder=\"0\">
\t\t\t</iframe>
\t\t</div>
\t</div>
</div>
<footer class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"wrapper\">
\t\t\t<div class=\"left\">
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t<a href=\"";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("user.login"));
        yield "\">©</a>
\t\t\t\t\tГруппа компаний «КОМПАНИЯ» 2001 - 2024
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" target=\"_blank\">
\t\t\t\t\tПолитика конфиденциальности
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"right\">
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["telega"] ?? null), "html", null, true);
        yield "\" alt=\"telegramm\"></a>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["vk"] ?? null), "html", null, true);
        yield "\" alt=\"vk\"></a>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rutube"] ?? null), "html", null, true);
        yield "\" alt=\"rutube\"></a>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/light/templates/layout/footer.html.twig";
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
        return array (  104 => 47,  100 => 46,  96 => 45,  85 => 37,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/light/templates/layout/footer.html.twig", "/var/www/html/recommended-project/web/themes/light/templates/layout/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1];
        static $filters = ["escape" => 45];
        static $functions = ["url" => 37];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
