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

/* @PrestaShop/Admin/Sell/Order/Order/create.html.twig */
class __TwigTemplate_11abc5d4171eb04437f8f0e5ab459d4b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create order", [], "Admin.Orderscustomers.Feature");
        // line 54
        $context["js_translatable"] = twig_array_merge(["Customer search - group default" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("default", [], "Admin.Orderscustomers.Feature"), "Customer search - group label single" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Orderscustomers.Feature"), "Customer search - group label multiple" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Groups", [], "Admin.Orderscustomers.Feature")],         // line 58
($context["js_translatable"] ?? null));
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/orders" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "  <div id=\"order-creation-container\">
    ";
        // line 37
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 37)->display($context);
        // line 38
        echo "    <div id=\"js-cart-info-wrapper\">
      ";
        // line 39
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 39)->display($context);
        // line 40
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 40)->display($context);
        // line 41
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 41)->display($context);
        // line 42
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 42)->display($context);
        // line 43
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", 43)->display($context);
        // line 44
        echo "    </div>
  </div>
";
    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/order_create.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 51,  105 => 49,  101 => 48,  95 => 44,  92 => 43,  89 => 42,  86 => 41,  83 => 40,  81 => 39,  78 => 38,  76 => 37,  73 => 36,  69 => 35,  63 => 32,  58 => 31,  54 => 30,  49 => 26,  47 => 58,  46 => 54,  44 => 28,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/create.html.twig", "/app/prestashop_edition_basic_version_8.1.1/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/create.html.twig");
    }
}
