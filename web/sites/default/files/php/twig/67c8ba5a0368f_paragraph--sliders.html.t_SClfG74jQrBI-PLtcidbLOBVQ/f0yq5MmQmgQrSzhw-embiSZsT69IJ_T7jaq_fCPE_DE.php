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

/* themes/light/templates/paragraphs/paragraph--sliders.html.twig */
class __TwigTemplate_2a59624969a23268b62f0a87f5aa4efe extends Template
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
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = ["paragraph", "service-block", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 5))), ((        // line 6
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("paragraph--unpublished") : (""))];
        // line 10
        $context["slide1"] = (("/" . ($context["directory"] ?? null)) . "/images/slide1.png");
        // line 11
        $context["slide2"] = (("/" . ($context["directory"] ?? null)) . "/images/slide2.png");
        // line 12
        $context["slide3"] = (("/" . ($context["directory"] ?? null)) . "/images/slide3.png");
        // line 13
        yield "
 ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootbase/flickity"), "html", null, true);
        yield "

";
        // line 16
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        // line 49
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "directory", "attributes"]);        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "\t<div ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 17), "html", null, true);
        yield " id=\"paragraphs-sliders-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 17), "html", null, true);
        yield "\">
\t\t";
        // line 26
        yield "
\t\t<div class=\"container\">
\t\t\t<h2>Скриншоты</h2>\t
\t\t\t<div class=\"items\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide1"] ?? null), "html", null, true);
        yield "\" alt=\"slide\">
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide2"] ?? null), "html", null, true);
        yield "\" alt=\"slide\">
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide3"] ?? null), "html", null, true);
        yield "\" alt=\"slide\">
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide2"] ?? null), "html", null, true);
        yield "\" alt=\"slide\">
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide3"] ?? null), "html", null, true);
        yield "\" alt=\"slide\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/light/templates/paragraphs/paragraph--sliders.html.twig";
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
        return array (  118 => 43,  112 => 40,  106 => 37,  100 => 34,  94 => 31,  87 => 26,  80 => 17,  73 => 16,  66 => 49,  64 => 16,  59 => 14,  56 => 13,  54 => 12,  52 => 11,  50 => 10,  48 => 7,  47 => 6,  46 => 5,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/light/templates/paragraphs/paragraph--sliders.html.twig", "/var/www/html/recommended-project/web/themes/light/templates/paragraphs/paragraph--sliders.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "block" => 16];
        static $filters = ["clean_class" => 5, "escape" => 14];
        static $functions = ["attach_library" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape'],
                ['attach_library'],
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
