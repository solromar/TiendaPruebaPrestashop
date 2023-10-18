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

/* __string_template__e70be13b090716aa937d564ab70a5b57 */
class __TwigTemplate_d9435ae3dc16720acf99defb37f0d58e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Administración de clientes • Popotitos</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCustomers';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '3504abe7eb0762920ead16c50162ffe3';
    var currentIndex = 'index.php?controller=AdminCustomers';
    var employee_token = '5b61ca95d8d65d662993477a1bca71a5';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/admin710ansr8k8zhfdrtx46/index.php/improve/modules/manage?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw';
    var admin_notification_get_link = '/admin710ansr8k8zhfdrtx46/index.php/common/notifications?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw';
    var admin_notification_push_link = adminNotificationPushLink = '/admin710ansr8k8zhfdrtx46/index.php/common/notifications/ack?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw';
    var tab_modules_list = '';
    var upda";
        // line 42
        echo "te_success_msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/admin710ansr8k8zhfdrtx46/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin710ansr8k8zhfdrtx46/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin710ansr8k8zhfdrtx46/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin710ansr8k8zhfdrtx46/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin710ansr8k8zhfdrtx46\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin710ansr8k8zhfdrtx46\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionD";
        // line 67
        echo "igits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin710ansr8k8zhfdrtx46/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/admin710ansr8k8zhfdrtx46/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/admin710ansr8k8zhfdrtx46/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin710ansr8k8zhfdrtx46/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin710ansr8k8zhfdrtx46/index.php/common/notifications?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es admincustomers\"
  data-base-url=\"/admin710ansr8k8zhfdrtx46/index.php\"  data-token=\"nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminDashboard&amp;token=d4d1fc09af67914932dc6d49f5cc3d18\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0963464f465bbb270992a7be2ef9b13a\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php/improve/modules/manage?token=9170ecda8ca284bbc136d84f96a0876e\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php/sell/catalog/categories/new?token=9170ecda8ca284bbc136d84f96a0876e\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php/sell/catalo";
        // line 136
        echo "g/products-v2/create?token=9170ecda8ca284bbc136d84f96a0876e\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=14d195d89193a1fd1ee5292b988d606a\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php/sell/orders?token=9170ecda8ca284bbc136d84f96a0876e\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"60\"
        data-icon=\"icon-AdminParentCustomer\"
        data-method=\"add\"
        data-url=\"index.php/sell/customers/?-3KKqQhVw\"
        data-post-link=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminQuickAccesses&token=39dedc5fc77981b4ad0c6264947cf8d7\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Clientes - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminQuickAccesses&token=39dedc5fc77981b4ad0c6264947cf8d7\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin710ansr8k8zhfdrtx46/index";
        // line 175
        echo ".php?controller=AdminSearch&amp;token=247a618727378222c3cdf483ee0a7751\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a";
        // line 192
        echo " class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0963464f465bbb270992a7be2ef9b13a\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php/improve/modules/manage?token=9170ecda8ca284bbc136d84f96a0876e\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php/sell/catalog/categories/new?token=9170ecda8ca284bbc136d84f96a0876e\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php/sell/catalog/products-v2/create?token=9170ecda8ca284bbc136d84f96a0876e\"
             ";
        // line 226
        echo "data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=14d195d89193a1fd1ee5292b988d606a\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php/sell/orders?token=9170ecda8ca284bbc136d84f96a0876e\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"148\"
      data-icon=\"icon-AdminParentCustomer\"
      data-method=\"add\"
      data-url=\"index.php/sell/customers/?-3KKqQhVw\"
      data-post-link=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminQuickAccesses&token=39dedc5fc77981b4ad0c6264947cf8d7\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Clientes - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminQuickAccesses&token=39dedc5fc77981b4ad0c6264947cf8d7\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://tiendaprestashop.lndo.site/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
          </div>
                          <div class=\"co";
        // line 272
        echo "mponent header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://";
        // line 324
        echo "tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=2eebb22ad869c71cf8911b4f58cff994\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </di";
        // line 369
        echo "v>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://tiendaprestashop.lndo.site/img/pr/default.jpg\" alt=\"SOLEDAD\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, SOLEDAD</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/employees/1/edit?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminLogin&amp;logout=1&amp;token=21812d45f65afbd4513f87d22613973e\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/employees/toggle-navigation?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminDashboard&amp;token=d4d1fc09af67914932dc6d49f5cc3d18\"></a>
          <span id=\"shop_";
        // line 412
        echo "version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminDashboard&amp;token=d4d1fc09af67914932dc6d49f5cc3d18\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/orders/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                       ";
        // line 454
        echo "         <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/orders/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/orders/invoices/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/orders/credit-slips/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/orders/delivery-slips/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
         ";
        // line 485
        echo "                     <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminCarts&amp;token=2eebb22ad869c71cf8911b4f58cff994\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/catalog/products?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/catalog/products?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Productos
                                </a>
                              </li>

                                                          ";
        // line 515
        echo "                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/catalog/categories?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/catalog/monitoring/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminAttributesGroups&amp;token=579c90114a694ac5f412d1b6e609f4cb\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/catalog/brands/?_token=nAoqJtVGemzkw";
        // line 543
        echo "lxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/attachments/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminCartRules&amp;token=14d195d89193a1fd1ee5292b988d606a\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/stocks/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
    ";
        // line 576
        echo "                                                      
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/customers/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/customers/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/addresses/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                         ";
        // line 604
        echo "                                                           </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminCustomerThreads&amp;token=a2b3428006902052dd3b084ecc171536\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminCustomerThreads&amp;token=a2b3428006902052dd3b084ecc171536\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin710ansr8k8";
        // line 633
        echo "zhfdrtx46/index.php/sell/customer-service/order-messages/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminReturn&amp;token=75001e9153632980e445287163ad8296\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminStats&amp;token=0963464f465bbb270992a7be2ef9b13a\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"categ";
        // line 668
        echo "ory-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/modules/manage?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/modules/manage?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminPar";
        // line 701
        echo "entThemes\">
                    <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/design/themes/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/design/themes/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/design/mail_theme/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-lev";
        // line 731
        echo "eltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/design/cms-pages/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/design/modules/positions/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminImages&amp;token=bb3e9a5644c9fba1ff10f5d22c4b26bb\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/modules/link-widget/list?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                  ";
        // line 760
        echo "                            </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminCarriers&amp;token=badc4b3169c3d6f0bb1f1e34417ee5c3\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminCarriers&amp;token=badc4b3169c3d6f0bb1f1e34417ee5c3\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/shipping/preferences/?_token=";
        // line 789
        echo "nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/payment/payment_methods?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/payment/payment_methods?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" i";
        // line 821
        echo "d=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/payment/preferences?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/international/localization/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/international/localization/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                           ";
        // line 851
        echo "       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/international/zones/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/international/taxes/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/improve/international/translations/settings?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

            ";
        // line 887
        echo "                  
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/shop/preferences/preferences?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/shop/preferences/preferences?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/shop/order-preferences/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Configuración de pedidos
                     ";
        // line 915
        echo "           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/shop/product-preferences/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/shop/customer-preferences/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/shop/contacts/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
   ";
        // line 946
        echo "                             <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/shop/seo-urls/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminSearchConf&amp;token=f3ca71d35dcad3f31d92236455fe0356\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/system-information/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                  ";
        // line 975
        echo "                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/system-information/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/performance/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/administration/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/emails/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3K";
        // line 1003
        echo "KqQhVw\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/import/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/employees/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/sql-requests/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
           ";
        // line 1035
        echo "                     <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/logs/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/webservice-keys/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/feature-flags/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin710ansr8k8zhfdrtx46/index.php/configure/advanced/security/?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\" class=\"link\"> Seguridad
            ";
        // line 1060
        echo "                    </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Clientes</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Administración de clientes          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/customers/new?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\"                  title=\"Añadir nuevo cliente\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir nuevo cliente
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin710ansr8k8zhfdrtx46/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminCustomers%253Fversion%253D8.1.2%2526country%253Des/Ayuda?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>";
        // line 1117
        echo "

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin710ansr8k8zhfdrtx46/index.php/sell/customers/new?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\"              title=\"Añadir nuevo cliente\"            >
              Añadir nuevo cliente
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin710ansr8k8zhfdrtx46/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminCustomers%253Fversion%253D8.1.2%2526country%253Des/Ayuda?_token=nAoqJtVGemzkwlxcoqU5AxVs9qG7PUWo9n-3KKqQhVw\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1159
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://tiendaprestashop.lndo.site/admin710ansr8k8zhfdrtx46/index.php?controller=AdminDashboard&amp;token=d4d1fc09af67914932dc6d49f5cc3d18\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1193
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1159
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1193
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__e70be13b090716aa937d564ab70a5b57";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1356 => 1193,  1335 => 1159,  1324 => 102,  1315 => 1193,  1275 => 1159,  1231 => 1117,  1172 => 1060,  1145 => 1035,  1111 => 1003,  1081 => 975,  1050 => 946,  1017 => 915,  987 => 887,  949 => 851,  917 => 821,  883 => 789,  852 => 760,  821 => 731,  789 => 701,  754 => 668,  717 => 633,  686 => 604,  656 => 576,  621 => 543,  591 => 515,  559 => 485,  526 => 454,  482 => 412,  437 => 369,  390 => 324,  336 => 272,  288 => 226,  252 => 192,  233 => 175,  192 => 136,  153 => 102,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e70be13b090716aa937d564ab70a5b57", "");
    }
}
