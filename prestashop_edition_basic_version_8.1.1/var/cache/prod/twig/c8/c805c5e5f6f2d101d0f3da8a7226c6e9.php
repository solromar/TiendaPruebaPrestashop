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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig */
class __TwigTemplate_9c5c0b038c35b98ab3cf79af3adf459b extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"card\" id=\"customer-search-block\">
  <h3 class=\"card-header\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "</h3>
  <div class=\"card-body\">
    <div class=\"row js-search-customer-row mb-4\">
      <label class=\"col-md-3 text-md-right col-form-label\" for=\"customer-search-input\">
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a customer", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </label>
      <div class=\"col-md-4 mb-2\">
        <input type=\"text\"
               class=\"form-control\"
               id=\"customer-search-input\"
        >
        <small class=\"form-text\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for an existing customer by typing the first letters of his/her name.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
          ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use OR to broaden your search", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
        </small>
      </div>
      <div class=\"col\">
        <span class=\"mr-2\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>
        <a id=\"customer-add-btn\" class=\"btn btn-primary\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_create", ["liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
        echo "\">
          ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new customer", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </a>
      </div>
    </div>

    <div id=\"customer-search-empty-result-warn\" class=\"d-none\">
        <div class=\"alert alert-warning\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No customers found", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div id=\"customer-search-loading-notice\" class=\"d-none\">
        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for customers", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
          </p>
        </div>
    </div>

    <div class=\"row js-customer-search-results\"></div>
    <div class=\"d-none mt-4\" id=\"customer-checkout-history\">
        <ul class=\"nav nav-pills\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active show js-customer-carts-tab\"
               id=\"customer-carts-tab\"
               data-toggle=\"pill\"
               href=\"#customer-carts-tab-content\"
               role=\"tab\"
               aria-controls=\"pills-home\"
               aria-expanded=\"true\"
               aria-selected=\"true\"
            >
              ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-customer-orders-tab\"
               id=\"customer-orders-tab\"
               data-toggle=\"pill\"
               href=\"#customer-orders-tab-content\"
               role=\"tab\"
               aria-controls=\"pills-home\"
               aria-expanded=\"true\"
               aria-selected=\"true\"
            >
              ";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item ml-auto\">
            <button class=\"navbar-toggler\" type=\"button\"
                    data-toggle=\"collapse\"
                    data-target=\"#customer-tab-content-container\"
                    id=\"customer-tab-content-container-toggler\"
                    aria-expanded=\"true\"
                    aria-label=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle", [], "Admin.Global"), "html", null, true);
        echo "\">
              <p class=\"mb-0 mt-2\"><i class=\"material-icons\"></i></p>
            </button>
          </li>
        </ul>
        <div class=\"tab-content collapse show\" id=\"customer-tab-content-container\">
          <div class=\"tab-pane fade active show\" id=\"customer-carts-tab-content\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            <div class=\"table-responsive\">
              <table class=\"table mb-0\" id=\"customer-carts-table\">
                <thead class=\"d-none\">
                  <tr>
                    <th>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</th>
                    <th>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "</th>
                    <th>";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
          <div class=\"tab-pane fade\" id=\"customer-orders-tab-content\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            <div class=\"table-responsive\">
              <table class=\"table mb-0\" id=\"customer-orders-table\">
                <thead class=\"d-none\">
                <tr>
                  <th>";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</th>
                  <th>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "</th>
                  <th>";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "</th>
                  <th>";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total paid", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
                  <th>";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment", [], "Admin.Global"), "html", null, true);
        echo "</th>
                  <th>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "</th>
                  <th></th>
                </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<div id=\"customer-search-result-template\" class=\"d-none\">
  <div class=\"col-sm-6 col-md-4 col-xl-3 js-customer-search-result-col\">
    <div class=\"card js-customer-search-result\">
      <div class=\"card-header\">
        <h3 class=\"card-header-title d-inline-block js-customer-name\"></h3>
        <div class=\"d-inline-block float-right\">
          #<span class=\"js-customer-id\"></span>
        </div>
      </div>
      <div class=\"card-body\">
        <p class=\"mb-0 js-customer-email\"></p>
        <p class=\"mb-0 js-customer-birthday\"></p>
        ";
        // line 156
        if (($context["isB2BEnabled"] ?? null)) {
            // line 157
            echo "          <p class=\"mb-0 js-customer-company\"></p>
        ";
        }
        // line 159
        echo "        <p class=\"mb-0 js-customer-groups\"></p>
      </div>
      <div class=\"card-footer\">
        <a class=\"btn btn-outline-secondary js-details-customer-btn\">
          ";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details", [], "Admin.Global"), "html", null, true);
        echo "
        </a>
        <button type=\"button\" class=\"btn btn-outline-primary float-right js-choose-customer-btn\">
          ";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
        <button type=\"button\" class=\"btn btn-outline-primary float-right js-change-customer-btn d-none\">
          ";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
</div>

<script id=\"customer-carts-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-cart-id\"></td>
    <td class=\"js-cart-date\"></td>
    <td class=\"js-cart-total\"></td>
    <td class=\"text-right\">
      <a
        title=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View this cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "\"
        class=\"btn btn-outline-primary js-cart-details-btn\">
        ";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details", [], "Admin.Global"), "html", null, true);
        echo "
      </a>

      <button
        title=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use this cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "\"
        class=\"btn btn-outline-primary js-use-cart-btn\">
        ";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </button>
    </td>
  </tr>
</script>

<script id=\"customer-orders-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-order-id\"></td>
    <td class=\"js-order-date\"></td>
    <td class=\"js-order-products\"></td>
    <td class=\"js-order-total-paid\"></td>
    <td class=\"js-order-payment-method\"></td>
    <td class=\"js-order-status\"></td>
    <td class=\"text-right\">
      <a
        title=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View this order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "\"
        class=\"btn btn-outline-secondary js-order-details-btn\">
        ";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details", [], "Admin.Global"), "html", null, true);
        echo "
      </a>

      <button
        title=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplicate this order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "\"
        class=\"btn btn-outline-primary js-use-order-btn\">
        ";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </button>
    </td>
  </tr>
</script>

<script id=\"js-empty-list-row\" type=\"text/template\">
  <tr class=\"empty_row js-empty-row\">
    <td colspan=\"8\" class=\"border-0\">
      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">warning</i></p>
        <p class=\"mb-2\">";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No records found", [], "Admin.Global"), "html", null, true);
        echo "</p>
      </div>
    </td>
  </tr>
</script>

<script id=\"js-loading-list-row\" type=\"text/template\">
  <tr class=\"empty_row js-empty-row\">
    <td colspan=\"8\" class=\"border-0\">
      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">autorenew</i></p>
        <p class=\"mb-2\">";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading...", [], "Admin.Global"), "html", null, true);
        echo "</p>
      </div>
    </td>
  </tr>
</script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 237,  341 => 226,  327 => 215,  322 => 213,  315 => 209,  310 => 207,  291 => 191,  286 => 189,  279 => 185,  274 => 183,  257 => 169,  251 => 166,  245 => 163,  239 => 159,  235 => 157,  233 => 156,  205 => 131,  201 => 130,  197 => 129,  193 => 128,  189 => 127,  185 => 126,  169 => 113,  165 => 112,  161 => 111,  147 => 100,  135 => 91,  119 => 78,  98 => 60,  88 => 53,  78 => 46,  74 => 45,  70 => 44,  63 => 40,  59 => 39,  48 => 31,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig", "/app/prestashop_edition_basic_version_8.1.1/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig");
    }
}
