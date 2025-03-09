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
            'content' => [$this, 'block_content'],
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
        yield "
 ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootbase/flickity"), "html", null, true);
        yield "

";
        // line 13
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        // line 26
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "attributes", "content"]);        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "\t<div ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 14), "html", null, true);
        yield " id=\"paragraphs-sliders-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 14), "html", null, true);
        yield "\">
\t\t ";
        // line 15
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 23
        yield "
\t</div>
";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h2>Скриншоты</h2>\t
\t\t\t\t\t<div class=\"service-block-image\">
\t\t\t\t\t\t";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t ";
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
        return array (  103 => 19,  98 => 16,  91 => 15,  84 => 23,  82 => 15,  75 => 14,  68 => 13,  61 => 26,  59 => 13,  54 => 11,  51 => 10,  49 => 7,  48 => 6,  47 => 5,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/light/templates/paragraphs/paragraph--sliders.html.twig", "/var/www/html/recommended-project/web/themes/light/templates/paragraphs/paragraph--sliders.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "block" => 13];
        static $filters = ["clean_class" => 5, "escape" => 11];
        static $functions = ["attach_library" => 11];

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
