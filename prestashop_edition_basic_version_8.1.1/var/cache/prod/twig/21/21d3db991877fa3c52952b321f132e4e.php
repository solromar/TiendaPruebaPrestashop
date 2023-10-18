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

/* @PrestaShop/Admin/Sell/Customer/modal_create_success.html.twig */
class __TwigTemplate_0204485b48311ab2efb08fbae2d30f8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Customer/modal_create_success.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "  <script type=\"text/javascript\">
    ";
        // line 34
        echo "
    // legacy behavior
    if (typeof window.parent.setupCustomer !== \"undefined\") {
      \$('#customer', window.parent.document).val('";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["customerEmail"] ?? null), "js"), "html", null, true);
        echo "');
      window.parent.setupCustomer(";
        // line 38
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["customerId"] ?? null), "js"), "html", null, true);
        echo ");
    }
    // symfony behavior
    if (typeof window.parent.order_create !== \"undefined\") {
      \$('#customer-search-input', window.parent.document).val('";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["customerEmail"] ?? null), "js"), "html", null, true);
        echo "');
      window.parent.order_create.searchCustomerByString('";
        // line 43
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["customerEmail"] ?? null), "js"), "html", null, true);
        echo "');
    }

    window.parent.\$.fancybox.close();
  </script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/modal_create_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 43,  76 => 42,  69 => 38,  65 => 37,  60 => 34,  57 => 32,  53 => 31,  47 => 28,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/modal_create_success.html.twig", "/app/prestashop_edition_basic_version_8.1.1/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/modal_create_success.html.twig");
    }
}
