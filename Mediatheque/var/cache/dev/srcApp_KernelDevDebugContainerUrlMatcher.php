<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin/_partial/channels' => [[['_route' => 'sylius_admin_partial_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => ['repository' => ['method' => 'findAll'], 'template' => '$template', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
            '/admin/_partial/taxons/tree' => [[['_route' => 'sylius_admin_partial_taxon_tree', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findRootNodes'], 'permission' => true]], null, ['GET' => 0], null, false, false, null]],
            '/admin/ajax/taxons/root-nodes' => [[['_route' => 'sylius_admin_ajax_taxon_root_nodes', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findRootNodes']]], null, ['GET' => 0], null, false, false, null]],
            '/admin/ajax/taxons/leafs' => [[['_route' => 'sylius_admin_ajax_taxon_leafs', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findChildren', 'arguments' => ['parentCode' => '$parentCode']]]], null, ['GET' => 0], null, false, false, null]],
            '/admin/ajax/taxons/leaf' => [[['_route' => 'sylius_admin_ajax_taxon_by_code', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findBy', 'arguments' => [['code' => '$code']]]]], null, ['GET' => 0], null, false, false, null]],
            '/admin/ajax/taxons/search' => [[['_route' => 'sylius_admin_ajax_taxon_by_name_phrase', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByNamePart', 'arguments' => ['phrase' => '$phrase']]]], null, ['GET' => 0], null, false, false, null]],
            '/admin/ajax/taxons/generate-slug' => [[['_route' => 'sylius_admin_ajax_generate_taxon_slug', '_controller' => 'sylius.controller.taxon_slug:generateAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
            '/admin/ajax/products/generate-slug' => [[['_route' => 'sylius_admin_ajax_generate_product_slug', '_controller' => 'sylius.controller.product_slug:generateAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
            '/admin/ajax/products/search' => [[['_route' => 'sylius_admin_ajax_product_by_name_phrase', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByNamePart', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], null, ['GET' => 0], null, false, false, null]],
            '/admin/ajax/products/code' => [[['_route' => 'sylius_admin_ajax_product_by_code', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findBy', 'arguments' => [['code' => '$code']]]]], null, ['GET' => 0], null, false, false, null]],
            '/admin/ajax/products' => [[['_route' => 'sylius_admin_ajax_product_index', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => ['permission' => true, 'grid' => 'sylius_admin_product']], null, ['GET' => 0], null, true, false, null]],
            '/admin/ajax/product-taxons/update' => [[['_route' => 'sylius_admin_ajax_product_taxons_update_position', '_controller' => 'sylius.controller.product_taxon:updatePositionsAction', '_format' => 'json', '_sylius' => ['permission' => true]], null, ['PUT' => 0], null, false, false, null]],
            '/admin/ajax/product-variants/update' => [[['_route' => 'sylius_admin_ajax_product_variants_update_position', '_controller' => 'sylius.controller.product_variant:updatePositionsAction', '_format' => 'json', '_sylius' => ['permission' => true]], null, ['PUT' => 0], null, false, false, null]],
            '/admin/ajax/product-variants/search' => [[['_route' => 'sylius_admin_ajax_product_variants_by_phrase', '_controller' => 'sylius.controller.product_variant:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByPhraseAndProductCode', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'productCode' => '$productCode']]]], null, ['GET' => 0], null, false, false, null]],
            '/admin/ajax/product-variants' => [[['_route' => 'sylius_admin_ajax_product_variants_by_codes', '_controller' => 'sylius.controller.product_variant:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByCodesAndProductCode', 'arguments' => ['$code', '$productCode']]]], null, ['GET' => 0], null, true, false, null]],
            '/admin/ajax/render-province-form' => [[['_route' => 'sylius_admin_ajax_render_province_form', '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction', '_sylius' => ['template' => '@SyliusAdmin/Common/Form/_province.html.twig']], null, null, null, false, false, null]],
            '/admin/ajax/get-version' => [[['_route' => 'sylius_admin_ajax_get_version', '_controller' => 'sylius.controller.admin.notification:getVersionAction', '_format' => 'json'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'sylius_admin_dashboard', '_controller' => 'sylius.controller.admin.dashboard:indexAction'], null, null, null, true, false, null]],
            '/admin/users' => [[['_route' => 'sylius_admin_admin_user_index', '_controller' => 'sylius.controller.admin_user:indexAction', '_sylius' => ['grid' => 'sylius_admin_admin_user', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig'], 'icon' => 'lock']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/users/new' => [[['_route' => 'sylius_admin_admin_user_create', '_controller' => 'sylius.controller.admin_user:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/users/bulk-delete' => [[['_route' => 'sylius_admin_admin_user_bulk_delete', '_controller' => 'sylius.controller.admin_user:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/channels' => [[['_route' => 'sylius_admin_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => ['grid' => 'sylius_admin_channel', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig'], 'icon' => 'share alternate']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/channels/new' => [[['_route' => 'sylius_admin_channel_create', '_controller' => 'sylius.controller.channel:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/channels/bulk-delete' => [[['_route' => 'sylius_admin_channel_bulk_delete', '_controller' => 'sylius.controller.channel:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/countries' => [[['_route' => 'sylius_admin_country_index', '_controller' => 'sylius.controller.country:indexAction', '_sylius' => ['grid' => 'sylius_admin_country', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig'], 'icon' => 'flag']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/countries/new' => [[['_route' => 'sylius_admin_country_create', '_controller' => 'sylius.controller.country:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/countries/bulk-delete' => [[['_route' => 'sylius_admin_country_bulk_delete', '_controller' => 'sylius.controller.country:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/currencies' => [[['_route' => 'sylius_admin_currency_index', '_controller' => 'sylius.controller.currency:indexAction', '_sylius' => ['grid' => 'sylius_admin_currency', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig'], 'icon' => 'dollar']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/currencies/new' => [[['_route' => 'sylius_admin_currency_create', '_controller' => 'sylius.controller.currency:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/currencies/bulk-delete' => [[['_route' => 'sylius_admin_currency_bulk_delete', '_controller' => 'sylius.controller.currency:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/customers' => [[['_route' => 'sylius_admin_customer_index', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => ['grid' => 'sylius_admin_customer', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig'], 'icon' => 'users']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/customers/new' => [[['_route' => 'sylius_admin_customer_create', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/customers/bulk-delete' => [[['_route' => 'sylius_admin_customer_bulk_delete', '_controller' => 'sylius.controller.customer:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/orders-statistics' => [[['_route' => 'sylius_admin_customer_orders_statistics', '_controller' => 'sylius.controller.customer_statistics:renderAction', '_sylius' => ['section' => 'admin', 'permission' => true]], null, ['GET' => 0], null, false, false, null]],
            '/admin/customer-groups' => [[['_route' => 'sylius_admin_customer_group_index', '_controller' => 'sylius.controller.customer_group:indexAction', '_sylius' => ['grid' => 'sylius_admin_customer_group', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig'], 'icon' => 'archive']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/customer-groups/new' => [[['_route' => 'sylius_admin_customer_group_create', '_controller' => 'sylius.controller.customer_group:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/customer-groups/bulk-delete' => [[['_route' => 'sylius_admin_customer_group_bulk_delete', '_controller' => 'sylius.controller.customer_group:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/exchange-rates' => [[['_route' => 'sylius_admin_exchange_rate_index', '_controller' => 'sylius.controller.exchange_rate:indexAction', '_sylius' => ['grid' => 'sylius_admin_exchange_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig'], 'icon' => 'sliders']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/exchange-rates/new' => [[['_route' => 'sylius_admin_exchange_rate_create', '_controller' => 'sylius.controller.exchange_rate:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/exchange-rates/bulk-delete' => [[['_route' => 'sylius_admin_exchange_rate_bulk_delete', '_controller' => 'sylius.controller.exchange_rate:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/inventory' => [[['_route' => 'sylius_admin_inventory_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_inventory', 'section' => 'admin', 'permission' => true, 'vars' => ['icon' => 'history', 'templates' => ['breadcrumb' => '@SyliusAdmin/Inventory/Index/_breadcrumb.html.twig'], 'header' => 'sylius.ui.inventory', 'subheader' => 'sylius.ui.manage_inventory']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/locales' => [[['_route' => 'sylius_admin_locale_index', '_controller' => 'sylius.controller.locale:indexAction', '_sylius' => ['grid' => 'sylius_admin_locale', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig'], 'icon' => 'translate']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/locales/new' => [[['_route' => 'sylius_admin_locale_create', '_controller' => 'sylius.controller.locale:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/locales/bulk-delete' => [[['_route' => 'sylius_admin_locale_bulk_delete', '_controller' => 'sylius.controller.locale:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/orders' => [[['_route' => 'sylius_admin_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['grid' => 'sylius_admin_order', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/payment-methods' => [[['_route' => 'sylius_admin_payment_method_index', '_controller' => 'sylius.controller.payment_method:indexAction', '_sylius' => ['grid' => 'sylius_admin_payment_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'], 'icon' => 'payment']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/payment-methods/bulk-delete' => [[['_route' => 'sylius_admin_payment_method_bulk_delete', '_controller' => 'sylius.controller.payment_method:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/payment-gateways' => [[['_route' => 'sylius_admin_get_payment_gateways', '_controller' => 'sylius.controller.payment_method:getPaymentGatewaysAction', 'template' => '@SyliusAdmin/PaymentMethod/Gateways/paymentGateways.html.twig'], null, ['GET' => 0], null, false, false, null]],
            '/admin/products/bulk-delete' => [[['_route' => 'sylius_admin_product_bulk_delete', '_controller' => 'sylius.controller.product:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/products' => [[['_route' => 'sylius_admin_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/products/new/simple' => [[['_route' => 'sylius_admin_product_create_simple', '_controller' => 'sylius.controller.product:createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'factory' => ['method' => 'createWithVariant'], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig'], 'route' => ['name' => 'sylius_admin_product_create_simple']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/product-association-types' => [[['_route' => 'sylius_admin_product_association_type_index', '_controller' => 'sylius.controller.product_association_type:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_association_type', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig'], 'icon' => 'tasks']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/product-association-types/new' => [[['_route' => 'sylius_admin_product_association_type_create', '_controller' => 'sylius.controller.product_association_type:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/product-association-types/bulk-delete' => [[['_route' => 'sylius_admin_product_association_type_bulk_delete', '_controller' => 'sylius.controller.product_association_type:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/product-attributes' => [[['_route' => 'sylius_admin_product_attribute_index', '_controller' => 'sylius.controller.product_attribute:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_attribute', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'], 'icon' => 'cubes']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/product-attributes/bulk-delete' => [[['_route' => 'sylius_admin_product_attribute_bulk_delete', '_controller' => 'sylius.controller.product_attribute:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/attribute-types' => [[['_route' => 'sylius_admin_get_attribute_types', '_controller' => 'sylius.controller.product_attribute:getAttributeTypesAction', 'template' => '@SyliusAdmin/ProductAttribute/Types/attributeTypes.html.twig'], null, ['GET' => 0], null, false, false, null]],
            '/admin/attributes' => [[['_route' => 'sylius_admin_get_product_attributes', '_controller' => 'sylius.controller.product_attribute:renderAttributesAction', 'template' => '@SyliusAdmin/Product/Attribute/attributeChoice.html.twig'], null, ['GET' => 0], null, false, false, null]],
            '/admin/attribute-forms' => [[['_route' => 'sylius_admin_render_attribute_forms', '_controller' => 'sylius.controller.product_attribute:renderAttributeValueFormsAction', 'template' => '@SyliusAdmin/Product/Attribute/attributeValues.html.twig'], null, ['GET' => 0], null, false, false, null]],
            '/admin/product-options' => [[['_route' => 'sylius_admin_product_option_index', '_controller' => 'sylius.controller.product_option:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_option', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig'], 'icon' => 'options']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/product-options/new' => [[['_route' => 'sylius_admin_product_option_create', '_controller' => 'sylius.controller.product_option:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/product-options/bulk-delete' => [[['_route' => 'sylius_admin_product_option_bulk_delete', '_controller' => 'sylius.controller.product_option:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/product-reviews' => [[['_route' => 'sylius_admin_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_review', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig'], 'icon' => 'newspaper']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/product-reviews/bulk-delete' => [[['_route' => 'sylius_admin_product_review_bulk_delete', '_controller' => 'sylius.controller.product_review:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/promotions' => [[['_route' => 'sylius_admin_promotion_index', '_controller' => 'sylius.controller.promotion:indexAction', '_sylius' => ['grid' => 'sylius_admin_promotion', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig'], 'icon' => 'in cart']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/promotions/new' => [[['_route' => 'sylius_admin_promotion_create', '_controller' => 'sylius.controller.promotion:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/promotions/bulk-delete' => [[['_route' => 'sylius_admin_promotion_bulk_delete', '_controller' => 'sylius.controller.promotion:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/login' => [[['_route' => 'sylius_admin_login', '_controller' => 'sylius.controller.security:loginAction', '_sylius' => ['template' => '@SyliusAdmin/Security/login.html.twig', 'permission' => true, 'logged_in_route' => 'sylius_admin_dashboard']], null, ['GET' => 0], null, false, false, null]],
            '/admin/login-check' => [[['_route' => 'sylius_admin_login_check', '_controller' => 'sylius.controller.security:checkAction'], null, ['POST' => 0], null, false, false, null]],
            '/admin/logout' => [[['_route' => 'sylius_admin_logout'], null, ['GET' => 0], null, false, false, null]],
            '/admin/shipping-categories' => [[['_route' => 'sylius_admin_shipping_category_index', '_controller' => 'sylius.controller.shipping_category:indexAction', '_sylius' => ['grid' => 'sylius_admin_shipping_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig'], 'icon' => 'list layout']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/shipping-categories/new' => [[['_route' => 'sylius_admin_shipping_category_create', '_controller' => 'sylius.controller.shipping_category:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/shipping-categories/bulk-delete' => [[['_route' => 'sylius_admin_shipping_category_bulk_delete', '_controller' => 'sylius.controller.shipping_category:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/shipping-methods' => [[['_route' => 'sylius_admin_shipping_method_index', '_controller' => 'sylius.controller.shipping_method:indexAction', '_sylius' => ['grid' => 'sylius_admin_shipping_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig'], 'icon' => 'shipping']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/shipping-methods/new' => [[['_route' => 'sylius_admin_shipping_method_create', '_controller' => 'sylius.controller.shipping_method:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/shipping-methods/bulk-delete' => [[['_route' => 'sylius_admin_shipping_method_bulk_delete', '_controller' => 'sylius.controller.shipping_method:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/taxons/new' => [[['_route' => 'sylius_admin_taxon_create', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/taxons/bulk-delete' => [[['_route' => 'sylius_admin_taxon_bulk_delete', '_controller' => 'sylius.controller.taxon:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/taxons' => [[['_route' => 'sylius_admin_taxon_index', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_admin_taxon_create', 'permanent' => true], null, ['GET' => 0], null, true, false, null]],
            '/admin/tax-categories' => [[['_route' => 'sylius_admin_tax_category_index', '_controller' => 'sylius.controller.tax_category:indexAction', '_sylius' => ['grid' => 'sylius_admin_tax_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig'], 'icon' => 'tags']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/tax-categories/new' => [[['_route' => 'sylius_admin_tax_category_create', '_controller' => 'sylius.controller.tax_category:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/tax-categories/bulk-delete' => [[['_route' => 'sylius_admin_tax_category_bulk_delete', '_controller' => 'sylius.controller.tax_category:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/tax-rates' => [[['_route' => 'sylius_admin_tax_rate_index', '_controller' => 'sylius.controller.tax_rate:indexAction', '_sylius' => ['grid' => 'sylius_admin_tax_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig'], 'icon' => 'money']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/tax-rates/new' => [[['_route' => 'sylius_admin_tax_rate_create', '_controller' => 'sylius.controller.tax_rate:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/tax-rates/bulk-delete' => [[['_route' => 'sylius_admin_tax_rate_bulk_delete', '_controller' => 'sylius.controller.tax_rate:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/admin/zones' => [[['_route' => 'sylius_admin_zone_index', '_controller' => 'sylius.controller.zone:indexAction', '_sylius' => ['grid' => 'sylius_admin_zone', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig'], 'icon' => 'world']]], null, ['GET' => 0], null, true, false, null]],
            '/admin/zones/bulk-delete' => [[['_route' => 'sylius_admin_zone_bulk_delete', '_controller' => 'sylius.controller.zone:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
            '/api/oauth/v2/token' => [[['_route' => 'fos_oauth_server_token', '_controller' => 'fos_oauth_server.controller.token:tokenAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/payment/capture/session-token' => [[['_route' => 'payum_capture_do_session', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'sylius_shop_default_locale', '_controller' => 'sylius.controller.shop.locale_switch:switchAction'], null, ['GET' => 0], null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/media/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:61)'
                        .'|([A-z0-9_-]*)/(.+)(*:86)'
                    .')'
                    .'|/a(?'
                        .'|dmin/(?'
                            .'|_partial/(?'
                                .'|address/log\\-entry/([^/]++)(*:146)'
                                .'|customers/(?'
                                    .'|latest/([^/]++)(*:182)'
                                    .'|([^/]++)(*:198)'
                                .')'
                                .'|orders/(?'
                                    .'|latest/([^/]++)(?'
                                        .'|(*:235)'
                                        .'|/([^/]++)(*:252)'
                                    .')'
                                    .'|([^/]++)/shipments/([^/]++)/ship(*:293)'
                                .')'
                                .'|pro(?'
                                    .'|ducts/([^/]++)(*:322)'
                                    .'|motions/([^/]++)(*:346)'
                                .')'
                                .'|taxons/([^/]++)(*:370)'
                            .')'
                            .'|ajax/taxons/([^/]++)/move(*:404)'
                            .'|impersonate(?:/([^/]++))?(*:437)'
                            .'|users/([^/]++)(?'
                                .'|/edit(*:467)'
                                .'|(*:475)'
                            .')'
                            .'|c(?'
                                .'|hannels/([^/]++)(?'
                                    .'|/edit(*:512)'
                                    .'|(*:520)'
                                .')'
                                .'|ountries/([^/]++)/edit(*:551)'
                                .'|u(?'
                                    .'|rrencies/([^/]++)/edit(*:585)'
                                    .'|stomer(?'
                                        .'|s/([^/]++)(?'
                                            .'|/(?'
                                                .'|edit(*:623)'
                                                .'|orders(*:637)'
                                            .')'
                                            .'|(*:646)'
                                        .')'
                                        .'|\\-groups/([^/]++)(?'
                                            .'|/edit(*:680)'
                                            .'|(*:688)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|exchange\\-rates/([^/]++)(?'
                                .'|/edit(*:732)'
                                .'|(*:740)'
                            .')'
                            .'|locales/([^/]++)/edit(*:770)'
                            .'|orders/([^/]++)(?'
                                .'|(*:796)'
                                .'|/(?'
                                    .'|history(*:815)'
                                    .'|edit(*:827)'
                                    .'|cancel(*:841)'
                                    .'|payments/([^/]++)/(?'
                                        .'|complete(*:878)'
                                        .'|refund(*:892)'
                                    .')'
                                .')'
                            .')'
                            .'|([^/]++)/ship(*:916)'
                            .'|p(?'
                                .'|ayment\\-methods/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:963)'
                                        .'|(*:971)'
                                    .')'
                                    .'|new/([^/]++)(*:992)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|s/(?'
                                            .'|([^/]++)(?'
                                                .'|/edit(*:1034)'
                                                .'|(*:1043)'
                                            .')'
                                            .'|taxon/([^/]++)(*:1067)'
                                            .'|new(*:1079)'
                                            .'|([^/]++)/variants(?'
                                                .'|(*:1108)'
                                                .'|/(?'
                                                    .'|new(*:1124)'
                                                    .'|([^/]++)/edit(*:1146)'
                                                    .'|bulk\\-delete(*:1167)'
                                                    .'|([^/]++)(*:1184)'
                                                    .'|generate(*:1201)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|\\-(?'
                                            .'|a(?'
                                                .'|ssociation\\-types/([^/]++)(?'
                                                    .'|/edit(*:1256)'
                                                    .'|(*:1265)'
                                                .')'
                                                .'|ttributes/([^/]++)(?'
                                                    .'|/(?'
                                                        .'|edit(*:1304)'
                                                        .'|new(*:1316)'
                                                    .')'
                                                    .'|(*:1326)'
                                                .')'
                                            .')'
                                            .'|options/([^/]++)(?'
                                                .'|/edit(*:1361)'
                                                .'|(*:1370)'
                                            .')'
                                            .'|review(?'
                                                .'|s/([^/]++)(?'
                                                    .'|/edit(*:1407)'
                                                    .'|(*:1416)'
                                                .')'
                                                .'|/([^/]++)/(?'
                                                    .'|accept(*:1445)'
                                                    .'|reject(*:1460)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|motions/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:1500)'
                                            .'|coupons(?'
                                                .'|(*:1519)'
                                                .'|/(?'
                                                    .'|new(*:1535)'
                                                    .'|([^/]++)/edit(*:1557)'
                                                    .'|generate(*:1574)'
                                                    .'|bulk\\-delete(*:1595)'
                                                    .'|([^/]++)(*:1612)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|(*:1624)'
                                    .')'
                                .')'
                            .')'
                            .'|sh(?'
                                .'|ipping\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:1679)'
                                        .'|(*:1688)'
                                    .')'
                                    .'|methods/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:1725)'
                                            .'|archive(*:1741)'
                                        .')'
                                        .'|(*:1751)'
                                    .')'
                                .')'
                                .'|op\\-user/([^/]++)(*:1779)'
                            .')'
                            .'|tax(?'
                                .'|ons/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:1818)'
                                        .'|(*:1827)'
                                    .')'
                                    .'|new/([^/]++)(*:1849)'
                                .')'
                                .'|\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:1891)'
                                        .'|(*:1900)'
                                    .')'
                                    .'|rates/([^/]++)(?'
                                        .'|/edit(*:1932)'
                                        .'|(*:1941)'
                                    .')'
                                .')'
                            .')'
                            .'|zones/(?'
                                .'|([^/]++)(?'
                                    .'|/edit(*:1978)'
                                    .'|(*:1987)'
                                .')'
                                .'|(country|province|zone)/new(*:2024)'
                            .')'
                        .')'
                        .'|pi/v([^/]++)/(?'
                            .'|orders/([^/]++)(?'
                                .'|/(?'
                                    .'|adjustments(?'
                                        .'|(*:2087)'
                                        .'|/([^/]++)(?'
                                            .'|(*:2108)'
                                        .')'
                                    .')'
                                    .'|cancel(*:2125)'
                                    .'|shipments/([^/]++)/ship(*:2157)'
                                    .'|payments/([^/]++)/complete(*:2192)'
                                .')'
                                .'|(*:2202)'
                            .')'
                            .'|users(?'
                                .'|(*:2220)'
                                .'|/([^/]++)(?'
                                    .'|(*:2241)'
                                .')'
                            .')'
                            .'|c(?'
                                .'|arts(?'
                                    .'|(*:2263)'
                                    .'|/([^/]++)(?'
                                        .'|(*:2284)'
                                        .'|/items(?'
                                            .'|(*:2302)'
                                            .'|/([^/]++)(?'
                                                .'|(*:2323)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|h(?'
                                    .'|annels(?'
                                        .'|(*:2349)'
                                        .'|/([^/]++)(?'
                                            .'|(*:2370)'
                                        .')'
                                    .')'
                                    .'|eckouts/(?'
                                        .'|([^/]++)(*:2400)'
                                        .'|addressing/([^/]++)(*:2428)'
                                        .'|select\\-(?'
                                            .'|shipping/([^/]++)(?'
                                                .'|(*:2468)'
                                            .')'
                                            .'|payment/([^/]++)(?'
                                                .'|(*:2497)'
                                            .')'
                                        .')'
                                        .'|complete/([^/]++)(*:2525)'
                                    .')'
                                .')'
                                .'|ountries(?'
                                    .'|(*:2547)'
                                    .'|/([^/]++)(?'
                                        .'|(*:2568)'
                                        .'|/provinces/([^/]++)(?'
                                            .'|(*:2599)'
                                        .')'
                                    .')'
                                .')'
                                .'|u(?'
                                    .'|rrencies(?'
                                        .'|(*:2626)'
                                        .'|/([^/]++)(?'
                                            .'|(*:2647)'
                                        .')'
                                    .')'
                                    .'|stomers(?'
                                        .'|(*:2668)'
                                        .'|/([^/]++)(?'
                                            .'|(*:2689)'
                                            .'|/orders(*:2705)'
                                        .')'
                                        .'|(*:2715)'
                                    .')'
                                .')'
                            .')'
                            .'|exchange\\-rates(?'
                                .'|(*:2745)'
                                .'|/([^/\\-]++)\\-([^/]++)(?'
                                    .'|(*:2778)'
                                .')'
                            .')'
                            .'|locales(?'
                                .'|(*:2799)'
                                .'|/([^/]++)(?'
                                    .'|(*:2820)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment(?'
                                    .'|\\-methods/([^/]++)(*:2862)'
                                    .'|s(?'
                                        .'|(*:2875)'
                                        .'|/([^/]++)(*:2893)'
                                    .')'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|s(?'
                                            .'|(*:2920)'
                                            .'|/([^/]++)(?'
                                                .'|(*:2941)'
                                                .'|/(?'
                                                    .'|reviews(?'
                                                        .'|(*:2964)'
                                                        .'|/([^/]++)(?'
                                                            .'|(*:2985)'
                                                            .'|/(?'
                                                                .'|accept(*:3004)'
                                                                .'|reject(*:3019)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                    .'|variants(?'
                                                        .'|(*:3042)'
                                                        .'|/([^/]++)(?'
                                                            .'|(*:3063)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|\\-(?'
                                            .'|a(?'
                                                .'|ttributes(?'
                                                    .'|(*:3098)'
                                                    .'|/([^/]++)(?'
                                                        .'|(*:3119)'
                                                        .'|(*:3128)'
                                                    .')'
                                                .')'
                                                .'|ssociation\\-types(?'
                                                    .'|(*:3159)'
                                                    .'|/([^/]++)(?'
                                                        .'|(*:3180)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|options(?'
                                                .'|(*:3202)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:3223)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|motions(?'
                                        .'|(*:3246)'
                                        .'|/([^/]++)(?'
                                            .'|(*:3267)'
                                            .'|/coupons(?'
                                                .'|(*:3287)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:3308)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|tax(?'
                                .'|ons(?'
                                    .'|/([^/]++)(?'
                                        .'|/products(*:3356)'
                                        .'|(*:3365)'
                                    .')'
                                    .'|(*:3375)'
                                .')'
                                .'|\\-(?'
                                    .'|categories(?'
                                        .'|(*:3403)'
                                        .'|/([^/]++)(?'
                                            .'|(*:3424)'
                                        .')'
                                    .')'
                                    .'|rates(?'
                                        .'|(*:3443)'
                                        .'|/([^/]++)(*:3461)'
                                    .')'
                                .')'
                            .')'
                            .'|ship(?'
                                .'|ments(?'
                                    .'|(*:3488)'
                                    .'|/([^/]++)(*:3506)'
                                .')'
                                .'|ping\\-(?'
                                    .'|categories(?'
                                        .'|(*:3538)'
                                        .'|/([^/]++)(?'
                                            .'|(*:3559)'
                                        .')'
                                    .')'
                                    .'|methods/([^/]++)(*:3586)'
                                .')'
                            .')'
                            .'|zones(?'
                                .'|(*:3605)'
                                .'|/([^/]++)(?'
                                    .'|(*:3626)'
                                    .'|(*:3635)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/users/check(*:3690)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/cart/add(*:3738)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/cart/([^/]++)/remove(*:3798)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/render\\-province\\-form(*:3860)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/taxons/by\\-slug/(.+)(*:3924)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/taxons/by\\-code/([^/]++)(*:3992)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/cart/summary(*:4048)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/cart/add\\-item(*:4106)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/latest/([^/]++)(*:4174)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/([^/]++)(*:4235)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/([^/]++)/reviews/latest(?:/([^/]++))?(*:4325)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/([^/]++)/associations/([^/]++)(*:4408)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)(*:4442)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/login(*:4482)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/login\\-check(*:4529)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/logout(*:4570)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/register(*:4613)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/register\\-after\\-checkout/([^/]++)(*:4682)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/forgotten\\-password(*:4736)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/forgotten\\-password/([^/]++)(*:4799)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/verify(*:4840)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/verify/([^/]++)(*:4890)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/products/([^/]++)(*:4942)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/taxons/(.+)(*:4988)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/products/([^/]++)/reviews(*:5048)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/products/([^/]++)/reviews/new(*:5112)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/cart(?'
                        .'|(*:5154)'
                    .')'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout(*:5198)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/address(*:5249)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/select\\-shipping(*:5309)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/select\\-payment(*:5368)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/complete(*:5420)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/contact(*:5462)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/thank\\-you(*:5513)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/([^/]++)/pay(*:5566)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/after\\-pay(*:5617)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/([^/]++)(*:5666)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/orders(*:5715)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/orders/([^/]++)(*:5773)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book(*:5829)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/add(*:5889)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/([^/]++)/edit(*:5959)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/([^/]++)(*:6024)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/([^/]++)/set\\-as\\-default(*:6106)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account(*:6148)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/dashboard(*:6200)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/profile/edit(*:6255)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/change\\-password(*:6314)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/switch\\-currency/([^/]++)(*:6374)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/switch\\-locale/([^/]++)(*:6432)'
                    .'|/payment/(?'
                        .'|capture/([^/]++)(*:6469)'
                        .'|notify/(?'
                            .'|unsafe/([^/]++)(*:6503)'
                            .'|([^/]++)(*:6520)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:6562)'
                        .'|wdt/([^/]++)(*:6583)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:6630)'
                                .'|router(*:6645)'
                                .'|exception(?'
                                    .'|(*:6666)'
                                    .'|\\.css(*:6680)'
                                .')'
                            .')'
                            .'|(*:6691)'
                        .')'
                    .')'
                .')/?$}sD',
        ];
        $this->dynamicRoutes = [
            61 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
            86 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
            146 => [[['_route' => 'sylius_admin_partial_address_log_entry_index', '_controller' => 'sylius.controller.address_log_entry:indexAction', '_sylius' => ['template' => '@SyliusUi/Grid/_history.html.twig', 'grid' => 'sylius_admin_address_log_entry', 'section' => 'admin', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
            182 => [[['_route' => 'sylius_admin_partial_customer_latest', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => ['repository' => ['method' => 'findLatest', 'arguments' => ['!!int $count']], 'template' => '$template', 'permission' => true]], ['count'], ['GET' => 0], null, false, true, null]],
            198 => [[['_route' => 'sylius_admin_partial_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
            235 => [[['_route' => 'sylius_admin_partial_order_latest', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['repository' => ['method' => 'findLatest', 'arguments' => ['!!int $count']], 'template' => '$template', 'permission' => true]], ['count'], ['GET' => 0], null, false, true, null]],
            252 => [[['_route' => 'sylius_admin_partial_order_latest_in_channel', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['repository' => ['method' => 'findLatestInChannel', 'arguments' => ['count' => '!!int $count', 'channel' => 'expr:notFoundOnNull(service(\'sylius.repository.channel\').findOneByCode($channelCode))']], 'template' => '$template', 'permission' => true]], ['channelCode', 'count'], ['GET' => 0], null, false, true, null]],
            293 => [[['_route' => 'sylius_admin_partial_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Shipment/Partial/_ship.html.twig', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => ['route' => ['parameters' => ['orderId' => '$orderId', 'id' => '$id']]]]], ['orderId', 'id'], ['GET' => 0], null, false, false, null]],
            322 => [[['_route' => 'sylius_admin_partial_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
            346 => [[['_route' => 'sylius_admin_partial_promotion_show', '_controller' => 'sylius.controller.promotion:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
            370 => [[['_route' => 'sylius_admin_partial_taxon_show', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
            404 => [[['_route' => 'sylius_admin_ajax_taxon_move', '_controller' => 'sylius.controller.taxon:updateAction', '_format' => 'json', '_sylius' => ['permission' => true, 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonPositionType']], ['id'], ['PUT' => 0], null, false, false, null]],
            437 => [[['_route' => 'sylius_admin_impersonate_user', '_controller' => 'sylius.controller.impersonate_user:impersonateAction', 'username' => '$username'], ['username'], null, null, false, true, null]],
            467 => [[['_route' => 'sylius_admin_admin_user_update', '_controller' => 'sylius.controller.admin_user:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            475 => [[['_route' => 'sylius_admin_admin_user_delete', '_controller' => 'sylius.controller.admin_user:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            512 => [[['_route' => 'sylius_admin_channel_update', '_controller' => 'sylius.controller.channel:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            520 => [[['_route' => 'sylius_admin_channel_delete', '_controller' => 'sylius.controller.channel:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            551 => [[['_route' => 'sylius_admin_country_update', '_controller' => 'sylius.controller.country:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            585 => [[['_route' => 'sylius_admin_currency_update', '_controller' => 'sylius.controller.currency:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            623 => [[['_route' => 'sylius_admin_customer_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            637 => [[['_route' => 'sylius_admin_customer_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_customer_order', 'vars' => ['route' => ['parameters' => ['$customerId' => '$id']], 'templates' => ['breadcrumb' => '@SyliusAdmin/Customer/Order/Index/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/Customer/Order/Index/_headerTitle.html.twig'], 'subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart']]], ['id'], ['GET' => 0], null, false, false, null]],
            646 => [[['_route' => 'sylius_admin_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin/Customer/show.html.twig', 'permission' => true]], ['id'], null, null, false, true, null]],
            680 => [[['_route' => 'sylius_admin_customer_group_update', '_controller' => 'sylius.controller.customer_group:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            688 => [[['_route' => 'sylius_admin_customer_group_delete', '_controller' => 'sylius.controller.customer_group:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            732 => [[['_route' => 'sylius_admin_exchange_rate_update', '_controller' => 'sylius.controller.exchange_rate:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            740 => [[['_route' => 'sylius_admin_exchange_rate_delete', '_controller' => 'sylius.controller.exchange_rate:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            770 => [[['_route' => 'sylius_admin_locale_update', '_controller' => 'sylius.controller.locale:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            796 => [[['_route' => 'sylius_admin_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
            815 => [[['_route' => 'sylius_admin_order_history', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/history.html.twig']], ['id'], ['GET' => 0], null, false, false, null]],
            827 => [[['_route' => 'sylius_admin_order_update', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/update.html.twig', 'form' => ['options' => ['validation_groups' => ['sylius_shipping_address_update']]]]], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
            841 => [[['_route' => 'sylius_admin_order_cancel', '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_order', 'transition' => 'cancel'], 'redirect' => 'referer']], ['id'], ['PUT' => 0], null, false, false, null]],
            878 => [[['_route' => 'sylius_admin_order_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => 'referer']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
            892 => [[['_route' => 'sylius_admin_order_payment_refund', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'refund'], 'redirect' => 'referer', 'flash' => 'sylius.payment.refunded']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
            916 => [[['_route' => 'sylius_admin_order_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => 'referer', 'section' => 'admin', 'permission' => true, 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => ['route' => ['parameters' => ['orderId' => '$orderId', 'id' => '$id']]]]], ['id'], ['PUT' => 0], null, false, false, null]],
            963 => [[['_route' => 'sylius_admin_payment_method_update', '_controller' => 'sylius.controller.payment_method:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            971 => [[['_route' => 'sylius_admin_payment_method_delete', '_controller' => 'sylius.controller.payment_method:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            992 => [[['_route' => 'sylius_admin_payment_method_create', '_controller' => 'sylius.controller.payment_method:createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createWithGateway', 'arguments' => ['gatewayFactory' => '$factory']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'], 'route' => ['parameters' => ['factory' => '$factory']]]]], ['factory'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            1034 => [[['_route' => 'sylius_admin_product_update', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1043 => [[['_route' => 'sylius_admin_product_delete', '_controller' => 'sylius.controller.product:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1067 => [[['_route' => 'sylius_admin_product_per_taxon_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product_from_taxon', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube']]], ['taxonId'], ['GET' => 0], null, false, true, null]],
            1079 => [[['_route' => 'sylius_admin_product_create', '_controller' => 'sylius.controller.product:createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig'], 'route' => ['name' => 'sylius_admin_product_create']]]], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1108 => [[['_route' => 'sylius_admin_product_variant_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => ['template' => '@SyliusAdmin/ProductVariant/index.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']], 'templates' => ['breadcrumb' => '@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig'], 'icon' => 'cubes', 'subheader' => 'sylius.ui.manage_variants']]], ['productId'], ['GET' => 0], null, true, false, null]],
            1124 => [[['_route' => 'sylius_admin_product_variant_create', '_controller' => 'sylius.controller.product_variant:createAction', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']], 'templates' => ['form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/ProductVariant/Create/_headerTitle.html.twig']]]], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1146 => [[['_route' => 'sylius_admin_product_variant_update', '_controller' => 'sylius.controller.product_variant:updateAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']], 'vars' => ['route' => ['parameters' => ['id' => '$id', 'productId' => '$productId']], 'templates' => ['form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Update/_breadcrumb.html.twig']]]], ['productId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
            1167 => [[['_route' => 'sylius_admin_product_variant_bulk_delete', '_controller' => 'sylius.controller.product_variant:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['productId'], ['DELETE' => 0], null, false, false, null]],
            1184 => [[['_route' => 'sylius_admin_product_variant_delete', '_controller' => 'sylius.controller.product_variant:deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']]]], ['productId', 'id'], ['DELETE' => 0], null, false, true, null]],
            1201 => [[['_route' => 'sylius_admin_product_variant_generate', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => ['template' => '@SyliusAdmin/ProductVariant/generate.html.twig', 'section' => 'admin', 'permission' => true, 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'form' => ['type' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductGenerateVariantsType'], 'repository' => ['method' => 'find', 'arguments' => ['$productId']], 'flash' => 'sylius.product_variant.generate']], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1256 => [[['_route' => 'sylius_admin_product_association_type_update', '_controller' => 'sylius.controller.product_association_type:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1265 => [[['_route' => 'sylius_admin_product_association_type_delete', '_controller' => 'sylius.controller.product_association_type:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1304 => [[['_route' => 'sylius_admin_product_attribute_update', '_controller' => 'sylius.controller.product_attribute:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1316 => [[['_route' => 'sylius_admin_product_attribute_create', '_controller' => 'sylius.controller.product_attribute:createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'], 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1326 => [[['_route' => 'sylius_admin_product_attribute_delete', '_controller' => 'sylius.controller.product_attribute:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1361 => [[['_route' => 'sylius_admin_product_option_update', '_controller' => 'sylius.controller.product_option:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1370 => [[['_route' => 'sylius_admin_product_option_delete', '_controller' => 'sylius.controller.product_option:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1407 => [[['_route' => 'sylius_admin_product_review_update', '_controller' => 'sylius.controller.product_review:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_review_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1416 => [[['_route' => 'sylius_admin_product_review_delete', '_controller' => 'sylius.controller.product_review:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1445 => [[['_route' => 'sylius_admin_product_review_accept', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'accept'], 'redirect' => 'referer', 'flash' => 'sylius.review.accept']], ['id'], ['PUT' => 0], null, false, false, null]],
            1460 => [[['_route' => 'sylius_admin_product_review_reject', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'reject'], 'redirect' => 'referer', 'flash' => 'sylius.review.reject']], ['id'], ['PUT' => 0], null, false, false, null]],
            1500 => [[['_route' => 'sylius_admin_promotion_update', '_controller' => 'sylius.controller.promotion:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1519 => [[['_route' => 'sylius_admin_promotion_coupon_index', '_controller' => 'sylius.controller.promotion_coupon:indexAction', '_sylius' => ['template' => '@SyliusAdmin/PromotionCoupon/index.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']], 'templates' => ['breadcrumb' => '@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig'], 'icon' => 'tags', 'subheader' => 'sylius.ui.manage_coupons']]], ['promotionId'], ['GET' => 0], null, true, false, null]],
            1535 => [[['_route' => 'sylius_admin_promotion_coupon_create', '_controller' => 'sylius.controller.promotion_coupon:createAction', '_sylius' => ['factory' => ['method' => 'createForPromotion', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.promotion\').find($promotionId))']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']], 'templates' => ['form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/PromotionCoupon/Create/_headerTitle.html.twig']]]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1557 => [[['_route' => 'sylius_admin_promotion_coupon_update', '_controller' => 'sylius.controller.promotion_coupon:updateAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['id' => '$id', 'promotionId' => '$promotionId']], 'templates' => ['form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Update/_breadcrumb.html.twig'], 'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns']]], ['promotionId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
            1574 => [[['_route' => 'sylius_admin_promotion_coupon_generate', '_controller' => 'sylius.controller.promotion_coupon:generateAction', '_sylius' => ['template' => '@SyliusAdmin/PromotionCoupon/generate.html.twig', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1595 => [[['_route' => 'sylius_admin_promotion_coupon_bulk_delete', '_controller' => 'sylius.controller.promotion_coupon:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['promotionId'], ['DELETE' => 0], null, false, false, null]],
            1612 => [[['_route' => 'sylius_admin_promotion_coupon_delete', '_controller' => 'sylius.controller.promotion_coupon:deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true]], ['promotionId', 'id'], ['DELETE' => 0], null, false, true, null]],
            1624 => [[['_route' => 'sylius_admin_promotion_delete', '_controller' => 'sylius.controller.promotion:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1679 => [[['_route' => 'sylius_admin_shipping_category_update', '_controller' => 'sylius.controller.shipping_category:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1688 => [[['_route' => 'sylius_admin_shipping_category_delete', '_controller' => 'sylius.controller.shipping_category:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1725 => [[['_route' => 'sylius_admin_shipping_method_update', '_controller' => 'sylius.controller.shipping_method:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1741 => [[['_route' => 'sylius_admin_shipping_method_archive', '_controller' => 'sylius.controller.shipping_method:updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusUi/Grid/Action/archive.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ArchivableType'], 'redirect' => ['route' => 'sylius_admin_shipping_method_index', 'parameters' => []]]], ['id'], ['PATCH' => 0], null, false, false, null]],
            1751 => [[['_route' => 'sylius_admin_shipping_method_delete', '_controller' => 'sylius.controller.shipping_method:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1779 => [[['_route' => 'sylius_admin_shop_user_delete', '_controller' => 'sylius.controller.shop_user:deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1818 => [[['_route' => 'sylius_admin_taxon_update', '_controller' => 'sylius.controller.taxon:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/update.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1827 => [[['_route' => 'sylius_admin_taxon_delete', '_controller' => 'sylius.controller.taxon:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1849 => [[['_route' => 'sylius_admin_taxon_create_for_parent', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'factory' => ['method' => 'createForParent', 'arguments' => ['expr:notFoundOnNull(service("sylius.repository.taxon").find($id))']], 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            1891 => [[['_route' => 'sylius_admin_tax_category_update', '_controller' => 'sylius.controller.tax_category:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1900 => [[['_route' => 'sylius_admin_tax_category_delete', '_controller' => 'sylius.controller.tax_category:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1932 => [[['_route' => 'sylius_admin_tax_rate_update', '_controller' => 'sylius.controller.tax_rate:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1941 => [[['_route' => 'sylius_admin_tax_rate_delete', '_controller' => 'sylius.controller.tax_rate:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            1978 => [[['_route' => 'sylius_admin_zone_update', '_controller' => 'sylius.controller.zone:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            1987 => [[['_route' => 'sylius_admin_zone_delete', '_controller' => 'sylius.controller.zone:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
            2024 => [[['_route' => 'sylius_admin_zone_create', '_controller' => 'sylius.controller.zone:createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig'], 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            2087 => [
                [['_route' => 'sylius_admin_api_adjustment_index', '_controller' => 'sylius.controller.adjustment:indexAction', '_sylius' => ['serialization_version' => '$version', 'repository' => ['method' => 'findByOrder', 'arguments' => ['$orderId']], 'paginate' => false]], ['version', 'orderId'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_adjustment_create', '_controller' => 'sylius.controller.adjustment:createAction', '_sylius' => ['serialization_version' => '$version']], ['version', 'orderId'], ['POST' => 0], null, true, false, null],
            ],
            2108 => [
                [['_route' => 'sylius_admin_api_adjustment_update', '_controller' => 'sylius.controller.adjustment:updateAction', '_sylius' => ['serialization_version' => '$version']], ['version', 'orderId', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_adjustment_delete', '_controller' => 'sylius.controller.adjustment:deleteAction', '_sylius' => ['serialization_version' => '$version', 'filterable' => true, 'criteria' => ['order' => '$orderId'], 'csrf_protection' => false]], ['version', 'orderId', 'id'], ['DELETE' => 0], null, false, true, null],
            ],
            2125 => [[['_route' => 'sylius_admin_api_order_cancel', '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction', '_sylius' => ['section' => 'admin_api', 'state_machine' => ['graph' => 'sylius_order', 'transition' => 'cancel'], 'csrf_protection' => false, 'return_content' => false]], ['version', 'id'], ['PUT' => 0], null, false, false, null]],
            2157 => [[['_route' => 'sylius_admin_api_order_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType']], ['version', 'orderId', 'id'], ['PUT' => 0], null, false, false, null]],
            2192 => [[['_route' => 'sylius_admin_api_order_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'section' => 'admin_api', 'csrf_protection' => false, 'return_content' => false]], ['version', 'orderId', 'id'], ['PUT' => 0], null, false, false, null]],
            2202 => [[['_route' => 'sylius_admin_api_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version', 'id'], ['GET' => 0], null, false, true, null]],
            2220 => [
                [['_route' => 'sylius_api_admin_user_index', '_controller' => 'sylius.controller.admin_user:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'api', 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_api_admin_user_create', '_controller' => 'sylius.controller.admin_user:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'api', 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            2241 => [
                [['_route' => 'sylius_api_admin_user_update', '_controller' => 'sylius.controller.admin_user:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'api', 'permission' => false]], ['version', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_api_admin_user_show', '_controller' => 'sylius.controller.admin_user:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'api', 'permission' => false]], ['version', 'id'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_api_admin_user_delete', '_controller' => 'sylius.controller.admin_user:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'api', 'permission' => false]], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
            ],
            2263 => [
                [['_route' => 'sylius_admin_api_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_cart', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_cart_create', '_controller' => 'sylius.controller.order:createAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderType', 'serialization_groups' => ['Default', 'DetailedCart']]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            2284 => [
                [['_route' => 'sylius_admin_api_cart_update', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderPromotionCouponType', 'serialization_groups' => ['Default', 'DetailedCart']]], ['version', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_cart_delete', '_controller' => 'sylius.controller.order:deleteAction', '_format' => 'json', '_sylius' => ['serialization_version' => '$version', 'csrf_protection' => false, 'repository' => ['method' => 'findCartById', 'arguments' => ['$id']]]], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_cart_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['serialization_version' => '$version', 'repository' => ['method' => 'findCartById', 'arguments' => ['$id']], 'serialization_groups' => ['Default', 'DetailedCart']]], ['version', 'id'], ['GET' => 0], null, false, true, null],
            ],
            2302 => [[['_route' => 'sylius_admin_api_cart_item_create', '_controller' => 'sylius.controller.order_item:createAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType', 'factory' => ['method' => 'createForCart', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.order\').findCartById($cartId))']], 'serialization_groups' => ['Default', 'DetailedCart']]], ['version', 'cartId'], ['POST' => 0], null, true, false, null]],
            2323 => [
                [['_route' => 'sylius_admin_api_order_item_update', '_controller' => 'sylius.controller.order_item:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['cart' => '$cartId'], 'permission' => false]], ['version', 'cartId', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_order_item_delete', '_controller' => 'sylius.controller.order_item:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['cart' => '$cartId'], 'permission' => false]], ['version', 'cartId', 'id'], ['DELETE' => 0], null, false, true, null],
            ],
            2349 => [
                [['_route' => 'sylius_admin_api_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_channel_create', '_controller' => 'sylius.controller.channel:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            2370 => [
                [['_route' => 'sylius_admin_api_channel_update', '_controller' => 'sylius.controller.channel:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_channel_show', '_controller' => 'sylius.controller.channel:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_channel_delete', '_controller' => 'sylius.controller.channel:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            2400 => [[['_route' => 'sylius_admin_api_checkout_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Detailed']]], ['version', 'id'], ['GET' => 0], null, false, true, null]],
            2428 => [[['_route' => 'sylius_admin_api_checkout_addressing', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\AddressType', 'repository' => ['method' => 'find', 'arguments' => ['$orderId']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'address']]], ['version', 'orderId'], ['PUT' => 0], null, false, true, null]],
            2468 => [
                [['_route' => 'sylius_admin_api_checkout_available_shipping_methods', '_controller' => 'sylius.controller.show_available_shipping_methods:showAction'], ['version', 'orderId'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_checkout_select_shipping', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => ['method' => 'find', 'arguments' => ['$orderId']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_shipping']]], ['version', 'orderId'], ['PUT' => 0], null, false, true, null],
            ],
            2497 => [
                [['_route' => 'sylius_admin_api_checkout_available_payment_methods', '_controller' => 'sylius.controller.show_available_payment_methods:showAction'], ['version', 'orderId'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_checkout_select_payment', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'repository' => ['method' => 'find', 'arguments' => ['$orderId']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_payment']]], ['version', 'orderId'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            ],
            2525 => [[['_route' => 'sylius_admin_api_checkout_complete', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => ['validation_groups' => 'sylius_checkout_complete']], 'repository' => ['method' => 'find', 'arguments' => ['$orderId']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'complete']]], ['version', 'orderId'], ['PUT' => 0], null, false, true, null]],
            2547 => [
                [['_route' => 'sylius_admin_api_country_index', '_controller' => 'sylius.controller.country:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_country_create', '_controller' => 'sylius.controller.country:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            2568 => [
                [['_route' => 'sylius_admin_api_country_show', '_controller' => 'sylius.controller.country:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_country_delete', '_controller' => 'sylius.controller.country:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            2599 => [
                [['_route' => 'sylius_admin_api_province_delete', '_controller' => 'sylius.controller.province:deleteAction', '_sylius' => ['serialization_version' => '$version', 'criteria' => ['code' => '$code'], 'csrf_protection' => false]], ['version', 'countryCode', 'code'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_province_show', '_controller' => 'sylius.controller.province:showAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Detailed'], 'criteria' => ['code' => '$code']]], ['version', 'countryCode', 'code'], ['GET' => 0], null, false, true, null],
            ],
            2626 => [
                [['_route' => 'sylius_admin_api_currency_index', '_controller' => 'sylius.controller.currency:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_currency_create', '_controller' => 'sylius.controller.currency:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            2647 => [
                [['_route' => 'sylius_admin_api_currency_show', '_controller' => 'sylius.controller.currency:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_currency_delete', '_controller' => 'sylius.controller.currency:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            2668 => [[['_route' => 'sylius_admin_api_customer_index', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Default'], 'paginate' => '$limit', 'sortable' => true, 'sorting' => ['id' => 'desc']]], ['version'], ['GET' => 0], null, true, false, null]],
            2689 => [
                [['_route' => 'sylius_admin_api_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Detailed']]], ['version', 'id'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_customer_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['serialization_version' => '$version', 'form' => ['type' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType']]], ['version', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_customer_delete', '_controller' => 'sylius.controller.customer:deleteAction', '_sylius' => ['serialization_version' => '$version', 'csrf_protection' => false]], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
            ],
            2705 => [[['_route' => 'sylius_admin_api_customer_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['serialization_version' => '$version', 'paginate' => '$limit', 'filterable' => true, 'criteria' => ['customer' => '$id'], 'sortable' => true, 'sorting' => ['updatedAt' => 'desc'], 'csrf_protection' => false]], ['version', 'id'], ['GET' => 0], null, true, false, null]],
            2715 => [[['_route' => 'sylius_admin_api_customer_create', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Detailed'], 'form' => ['type' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType']]], ['version'], ['POST' => 0], null, true, false, null]],
            2745 => [
                [['_route' => 'sylius_admin_api_exchange_rate_index', '_controller' => 'sylius.controller.exchange_rate:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_exchange_rate_create', '_controller' => 'sylius.controller.exchange_rate:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            2778 => [
                [['_route' => 'sylius_admin_api_exchange_rate_update', '_controller' => 'sylius.controller.exchange_rate:updateAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Default', 'Detailed'], 'repository' => ['method' => 'findOneWithCurrencyPair', 'arguments' => ['$sourceCurrencyCode', '$targetCurrencyCode']]]], ['version', 'sourceCurrencyCode', 'targetCurrencyCode'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_exchange_rate_delete', '_controller' => 'sylius.controller.exchange_rate:deleteAction', '_sylius' => ['serialization_version' => '$version', 'repository' => ['method' => 'findOneWithCurrencyPair', 'arguments' => ['$sourceCurrencyCode', '$targetCurrencyCode']], 'csrf_protection' => false]], ['version', 'sourceCurrencyCode', 'targetCurrencyCode'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_exchange_rate_show', '_controller' => 'sylius.controller.exchange_rate:showAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Default', 'Detailed'], 'repository' => ['method' => 'findOneWithCurrencyPair', 'arguments' => ['$sourceCurrencyCode', '$targetCurrencyCode']]]], ['version', 'sourceCurrencyCode', 'targetCurrencyCode'], ['GET' => 0], null, false, true, null],
            ],
            2799 => [
                [['_route' => 'sylius_admin_api_locale_index', '_controller' => 'sylius.controller.locale:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_locale_create', '_controller' => 'sylius.controller.locale:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            2820 => [
                [['_route' => 'sylius_admin_api_locale_show', '_controller' => 'sylius.controller.locale:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_locale_delete', '_controller' => 'sylius.controller.locale:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            2862 => [[['_route' => 'sylius_admin_api_payment_method_show', '_controller' => 'sylius.controller.payment_method:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null]],
            2875 => [[['_route' => 'sylius_admin_api_payment_index', '_controller' => 'sylius.controller.payment:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_payment', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
            2893 => [[['_route' => 'sylius_admin_api_payment_show', '_controller' => 'sylius.controller.payment:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version', 'id'], ['GET' => 0], null, false, true, null]],
            2920 => [
                [['_route' => 'sylius_admin_api_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_product', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_product_create', '_controller' => 'sylius.controller.product:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            2941 => [
                [['_route' => 'sylius_admin_api_product_update', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_delete', '_controller' => 'sylius.controller.product:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            2964 => [
                [['_route' => 'sylius_admin_api_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_product_review', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version', 'productCode'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_product_review_create', '_controller' => 'sylius.controller.product_review:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 'factory' => ['method' => 'createForSubject', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByCode($productCode))']]]], ['version', 'productCode'], ['POST' => 0], null, true, false, null],
            ],
            2985 => [
                [['_route' => 'sylius_admin_api_product_review_update', '_controller' => 'sylius.controller.product_review:updateAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 'repository' => ['method' => 'findOneByIdAndProductCode', 'arguments' => ['$id', '$productCode']]]], ['version', 'productCode', 'id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_review_delete', '_controller' => 'sylius.controller.product_review:deleteAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'repository' => ['method' => 'findOneByIdAndProductCode', 'arguments' => ['$id', '$productCode']], 'csrf_protection' => false]], ['version', 'productCode', 'id'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_review_show', '_controller' => 'sylius.controller.product_review:showAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'serialization_groups' => ['Default', 'Detailed'], 'repository' => ['method' => 'findOneByIdAndProductCode', 'arguments' => ['$id', '$productCode']]]], ['version', 'productCode', 'id'], ['GET' => 0], null, false, true, null],
            ],
            3004 => [[['_route' => 'sylius_admin_api_product_review_accept', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => ['state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'accept'], 'csrf_protection' => false]], ['version', 'productCode', 'id'], ['POST' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            3019 => [[['_route' => 'sylius_admin_api_product_review_reject', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => ['state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'reject'], 'csrf_protection' => false]], ['version', 'productCode', 'id'], ['POST' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
            3042 => [
                [['_route' => 'sylius_admin_api_product_variant_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_product_variant', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version', 'productCode'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_product_variant_create', '_controller' => 'sylius.controller.product_variant:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType', 'factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByCode($productCode))']]]], ['version', 'productCode'], ['POST' => 0], null, true, false, null],
            ],
            3063 => [
                [['_route' => 'sylius_admin_api_product_variant_update', '_controller' => 'sylius.controller.product_variant:updateAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType', 'repository' => ['method' => 'findOneByCodeAndProductCode', 'arguments' => ['$code', '$productCode']]]], ['version', 'productCode', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_variant_delete', '_controller' => 'sylius.controller.product_variant:deleteAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'repository' => ['method' => 'findOneByCodeAndProductCode', 'arguments' => ['$code', '$productCode']], 'csrf_protection' => false]], ['version', 'productCode', 'code'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_variant_show', '_controller' => 'sylius.controller.product_variant:showAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'serialization_groups' => ['Default', 'Detailed'], 'repository' => ['method' => 'findOneByCodeAndProductCode', 'arguments' => ['$code', '$productCode']]]], ['version', 'productCode', 'code'], ['GET' => 0], null, false, true, null],
            ],
            3098 => [[['_route' => 'sylius_admin_api_product_attribute_index', '_controller' => 'sylius.controller.product_attribute:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
            3119 => [
                [['_route' => 'sylius_admin_api_product_attribute_update', '_controller' => 'sylius.controller.product_attribute:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_attribute_show', '_controller' => 'sylius.controller.product_attribute:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_attribute_delete', '_controller' => 'sylius.controller.product_attribute:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            3128 => [[['_route' => 'sylius_admin_api_product_attribute_create', '_controller' => 'sylius.controller.product_attribute:createAction', '_sylius' => ['serialization_version' => '$version', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']]]], ['version', 'type'], ['POST' => 0], null, false, true, null]],
            3159 => [
                [['_route' => 'sylius_admin_api_product_association_type_index', '_controller' => 'sylius.controller.product_association_type:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_product_association_type_create', '_controller' => 'sylius.controller.product_association_type:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            3180 => [
                [['_route' => 'sylius_admin_api_product_association_type_update', '_controller' => 'sylius.controller.product_association_type:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_association_type_show', '_controller' => 'sylius.controller.product_association_type:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_association_type_delete', '_controller' => 'sylius.controller.product_association_type:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            3202 => [
                [['_route' => 'sylius_admin_api_product_option_index', '_controller' => 'sylius.controller.product_option:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_product_option_create', '_controller' => 'sylius.controller.product_option:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            3223 => [
                [['_route' => 'sylius_admin_api_product_option_update', '_controller' => 'sylius.controller.product_option:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_option_show', '_controller' => 'sylius.controller.product_option:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_product_option_delete', '_controller' => 'sylius.controller.product_option:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            3246 => [
                [['_route' => 'sylius_admin_api_promotion_index', '_controller' => 'sylius.controller.promotion:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_promotion', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_promotion_create', '_controller' => 'sylius.controller.promotion:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            3267 => [
                [['_route' => 'sylius_admin_api_promotion_update', '_controller' => 'sylius.controller.promotion:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_promotion_show', '_controller' => 'sylius.controller.promotion:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_promotion_delete', '_controller' => 'sylius.controller.promotion:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            3287 => [
                [['_route' => 'sylius_admin_api_promotion_coupon_index', '_controller' => 'sylius.controller.promotion_coupon:indexAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Default'], 'section' => 'admin_api', 'repository' => ['method' => 'createPaginatorForPromotion', 'arguments' => ['$promotionCode']]]], ['version', 'promotionCode'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_promotion_coupon_create', '_controller' => 'sylius.controller.promotion_coupon:createAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'factory' => ['method' => 'createForPromotion', 'arguments' => ['expr:service(\'sylius.repository.promotion\').findOneByCode($promotionCode)']], 'criteria' => ['promotion' => '$promotionCode']]], ['version', 'promotionCode'], ['POST' => 0], null, true, false, null],
            ],
            3308 => [
                [['_route' => 'sylius_admin_api_promotion_coupon_update', '_controller' => 'sylius.controller.promotion_coupon:updateAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'repository' => ['method' => 'findOneByCodeAndPromotionCode', 'arguments' => ['$code', '$promotionCode']]]], ['version', 'promotionCode', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_promotion_coupon_show', '_controller' => 'sylius.controller.promotion_coupon:showAction', '_sylius' => ['serialization_version' => '$version', 'serialization_groups' => ['Default', 'Detailed'], 'section' => 'admin_api', 'repository' => ['method' => 'findOneByCodeAndPromotionCode', 'arguments' => ['$code', '$promotionCode']]]], ['version', 'promotionCode', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_promotion_coupon_delete', '_controller' => 'sylius.controller.promotion_coupon:deleteAction', '_sylius' => ['serialization_version' => '$version', 'section' => 'admin_api', 'csrf_protection' => false, 'repository' => ['method' => 'findOneByCodeAndPromotionCode', 'arguments' => ['$code', '$promotionCode']]]], ['version', 'promotionCode', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            3356 => [[['_route' => 'sylius_admin_api_taxon_products_update_position', '_controller' => 'sylius.controller.update_product_taxon_position:updatePositionsAction', '_sylius' => ['serialization_version' => '$version']], ['version', 'taxonCode'], ['PUT' => 0], null, false, false, null]],
            3365 => [
                [['_route' => 'sylius_admin_api_taxon_update', '_controller' => 'sylius.controller.taxon:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_taxon_show', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_taxon_delete', '_controller' => 'sylius.controller.taxon:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            3375 => [
                [['_route' => 'sylius_admin_api_taxon_index', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_taxon', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_taxon_create', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            3403 => [
                [['_route' => 'sylius_admin_api_tax_category_index', '_controller' => 'sylius.controller.tax_category:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_tax_category_create', '_controller' => 'sylius.controller.tax_category:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            3424 => [
                [['_route' => 'sylius_admin_api_tax_category_update', '_controller' => 'sylius.controller.tax_category:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_tax_category_show', '_controller' => 'sylius.controller.tax_category:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_tax_category_delete', '_controller' => 'sylius.controller.tax_category:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            3443 => [[['_route' => 'sylius_admin_api_tax_rate_index', '_controller' => 'sylius.controller.tax_rate:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
            3461 => [[['_route' => 'sylius_admin_api_tax_rate_show', '_controller' => 'sylius.controller.tax_rate:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null]],
            3488 => [[['_route' => 'sylius_admin_api_shipment_index', '_controller' => 'sylius.controller.shipment:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'grid' => 'sylius_admin_api_shipment', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
            3506 => [[['_route' => 'sylius_admin_api_shipment_show', '_controller' => 'sylius.controller.shipment:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false]], ['version', 'id'], ['GET' => 0], null, false, true, null]],
            3538 => [
                [['_route' => 'sylius_admin_api_shipping_category_index', '_controller' => 'sylius.controller.shipping_category:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_admin_api_shipping_category_create', '_controller' => 'sylius.controller.shipping_category:createAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['POST' => 0], null, true, false, null],
            ],
            3559 => [
                [['_route' => 'sylius_admin_api_shipping_category_update', '_controller' => 'sylius.controller.shipping_category:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_shipping_category_show', '_controller' => 'sylius.controller.shipping_category:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_shipping_category_delete', '_controller' => 'sylius.controller.shipping_category:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            3586 => [[['_route' => 'sylius_admin_api_shipping_method_show', '_controller' => 'sylius.controller.shipping_method:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null]],
            3605 => [[['_route' => 'sylius_admin_api_zone_index', '_controller' => 'sylius.controller.zone:indexAction', '_sylius' => ['serialization_groups' => ['Default'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version'], ['GET' => 0], null, true, false, null]],
            3626 => [
                [['_route' => 'sylius_admin_api_zone_update', '_controller' => 'sylius.controller.zone:updateAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
                [['_route' => 'sylius_admin_api_zone_show', '_controller' => 'sylius.controller.zone:showAction', '_sylius' => ['serialization_groups' => ['Default', 'Detailed'], 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['GET' => 0], null, false, true, null],
                [['_route' => 'sylius_admin_api_zone_delete', '_controller' => 'sylius.controller.zone:deleteAction', '_sylius' => ['csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => ['code' => '$code'], 'permission' => false]], ['version', 'code'], ['DELETE' => 0], null, false, true, null],
            ],
            3635 => [[['_route' => 'sylius_admin_api_zone_create', '_controller' => 'sylius.controller.zone:createAction', '_sylius' => ['serialization_version' => '$version', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']]]], ['version', 'type'], ['POST' => 0], null, false, true, null]],
            3690 => [[['_route' => 'sylius_shop_ajax_user_check_action', '_controller' => 'sylius.controller.shop_user:showAction', '_format' => 'json', '_sylius' => ['repository' => ['method' => 'findOneByEmail', 'arguments' => ['email' => '$email']], 'serialization_groups' => ['Secured']]], ['_locale'], ['GET' => 0], null, false, false, null]],
            3738 => [[['_route' => 'sylius_shop_ajax_cart_add_item', '_controller' => 'sylius.controller.order_item:addAction', '_format' => 'json', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []], 'flash' => 'sylius.cart.add_item']], ['_locale'], ['POST' => 0], null, false, false, null]],
            3798 => [[['_route' => 'sylius_shop_ajax_cart_item_remove', '_controller' => 'sylius.controller.order_item:removeAction', '_format' => 'json', '_sylius' => ['flash' => 'sylius.cart.remove_item']], ['_locale', 'id'], ['DELETE' => 0], null, false, false, null]],
            3860 => [[['_route' => 'sylius_shop_ajax_render_province_form', '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction', '_sylius' => ['template' => '@SyliusShop/Common/Form/_province.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
            3924 => [[['_route' => 'sylius_shop_partial_taxon_show_by_slug', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findOneBySlug', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
            3992 => [[['_route' => 'sylius_shop_partial_taxon_index_by_code', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findChildren', 'arguments' => ['$code', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
            4048 => [[['_route' => 'sylius_shop_partial_cart_summary', '_controller' => 'sylius.controller.order:widgetAction', '_sylius' => ['template' => '$template']], ['_locale'], ['GET' => 0], null, false, false, null]],
            4106 => [[['_route' => 'sylius_shop_partial_cart_add_item', '_controller' => 'sylius.controller.order_item:addAction', '_sylius' => ['template' => '$template', 'factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []]]], ['_locale'], ['GET' => 0], null, false, false, null]],
            4174 => [[['_route' => 'sylius_shop_partial_product_index_latest', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findLatestByChannel', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '!!int $count']]]], ['_locale', 'count'], ['GET' => 0], null, false, true, null]],
            4235 => [[['_route' => 'sylius_shop_partial_product_show_by_slug', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
            4325 => [[['_route' => 'sylius_shop_partial_product_review_latest', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findLatestByProductId', 'arguments' => ['$productId', '!!int $count']]], 'count' => 3], ['_locale', 'productId', 'count'], ['GET' => 0], null, false, true, null]],
            4408 => [[['_route' => 'sylius_shop_partial_product_association_show', '_controller' => 'sylius.controller.product_association:showAction', '_sylius' => ['template' => '$template']], ['_locale', 'productId', 'id'], ['GET' => 0], null, false, true, null]],
            4442 => [[['_route' => 'sylius_shop_homepage', '_controller' => 'sylius.controller.shop.homepage:indexAction'], ['_locale'], ['GET' => 0], null, true, true, null]],
            4482 => [[['_route' => 'sylius_shop_login', '_controller' => 'sylius.controller.security:loginAction', '_sylius' => ['template' => '@SyliusShop/login.html.twig', 'logged_in_route' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0], null, false, false, null]],
            4529 => [[['_route' => 'sylius_shop_login_check', '_controller' => 'sylius.controller.security:checkAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
            4570 => [[['_route' => 'sylius_shop_logout'], ['_locale'], ['GET' => 0], null, false, false, null]],
            4613 => [[['_route' => 'sylius_shop_register', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['template' => '@SyliusShop/register.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_account_dashboard'], 'flash' => 'sylius.customer.register']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            4682 => [[['_route' => 'sylius_shop_register_after_checkout', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'factory' => ['method' => ['expr:service("sylius.factory.customer_after_checkout")', 'createAfterCheckout'], 'arguments' => ['expr:service("sylius.repository.order").findOneByTokenValue($tokenValue)']], 'template' => '@SyliusShop/register.html.twig', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_account_dashboard'], 'flash' => 'sylius.customer.register']], ['_locale', 'tokenValue'], ['GET' => 0], null, false, true, null]],
            4736 => [[['_route' => 'sylius_shop_request_password_reset_token', '_controller' => 'sylius.controller.shop_user:requestPasswordResetTokenAction', '_sylius' => ['template' => '@SyliusShop/Account/requestPasswordReset.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            4799 => [[['_route' => 'sylius_shop_password_reset', '_controller' => 'sylius.controller.shop_user:resetPasswordAction', '_sylius' => ['template' => '@SyliusShop/Account/resetPassword.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            4840 => [[['_route' => 'sylius_shop_user_request_verification_token', '_controller' => 'sylius.controller.shop_user:requestVerificationTokenAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
            4890 => [[['_route' => 'sylius_shop_user_verification', '_controller' => 'sylius.controller.shop_user:verifyAction', '_sylius' => ['redirect' => 'sylius_shop_account_dashboard']], ['_locale', 'token'], ['GET' => 0], null, false, true, null]],
            4942 => [[['_route' => 'sylius_shop_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['template' => '@SyliusShop/Product/show.html.twig', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
            4988 => [[['_route' => 'sylius_shop_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['template' => '@SyliusShop/Product/index.html.twig', 'grid' => 'sylius_shop_product']], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
            5048 => [[['_route' => 'sylius_shop_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['template' => '@SyliusShop/ProductReview/index.html.twig', 'repository' => ['method' => 'findAcceptedByProductSlugAndChannel', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel()']]]], ['_locale', 'slug'], ['GET' => 0], null, true, false, null]],
            5112 => [[['_route' => 'sylius_shop_product_review_create', '_controller' => 'sylius.controller.product_review:createAction', '_sylius' => ['template' => '@SyliusShop/ProductReview/create.html.twig', 'form' => ['options' => ['validation_groups' => ['sylius', 'sylius_review']]], 'factory' => ['method' => 'createForSubjectWithReviewer', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByChannelAndSlug(service(\'sylius.context.channel\').getChannel(), service(\'sylius.context.locale\').getLocaleCode(), $slug))', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_product_show', 'parameters' => ['slug' => '$slug']], 'flash' => 'sylius.review.wait_for_the_acceptation']], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            5154 => [
                [['_route' => 'sylius_shop_cart_summary', '_controller' => 'sylius.controller.order:summaryAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType']], ['_locale'], ['GET' => 0], null, true, false, null],
                [['_route' => 'sylius_shop_cart_save', '_controller' => 'sylius.controller.order:saveAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'redirect' => 'sylius_shop_cart_summary', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType', 'flash' => 'sylius.cart.save']], ['_locale'], ['PUT' => 0, 'PATCH' => 1], null, true, false, null],
                [['_route' => 'sylius_shop_cart_clear', '_controller' => 'sylius.controller.order:clearAction', '_sylius' => ['redirect' => 'sylius_shop_cart_summary']], ['_locale'], ['DELETE' => 0], null, true, false, null],
            ],
            5198 => [[['_route' => 'sylius_shop_checkout_start', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_checkout_address'], ['_locale'], ['GET' => 0], null, true, false, null]],
            5249 => [[['_route' => 'sylius_shop_checkout_address', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'address', 'flash' => false, 'template' => '@SyliusShop/Checkout/address.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'findCartForAddressing', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'address']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
            5309 => [[['_route' => 'sylius_shop_checkout_select_shipping', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'select_shipping', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectShipping.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => ['method' => 'findCartForSelectingShipping', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_shipping']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
            5368 => [[['_route' => 'sylius_shop_checkout_select_payment', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'payment', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectPayment.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'repository' => ['method' => 'findCartForSelectingPayment', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_payment']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
            5420 => [[['_route' => 'sylius_shop_checkout_complete', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'complete', 'flash' => false, 'template' => '@SyliusShop/Checkout/complete.html.twig', 'repository' => ['method' => 'findCartForSummary', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'complete'], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => ['validation_groups' => 'sylius_checkout_complete']]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
            5462 => [[['_route' => 'sylius_shop_contact_request', '_controller' => 'sylius.controller.shop.contact:requestAction', '_sylius' => ['redirect' => 'sylius_shop_homepage']], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
            5513 => [[['_route' => 'sylius_shop_order_thank_you', '_controller' => 'sylius.controller.order:thankYouAction', '_sylius' => ['template' => '@SyliusShop/Order/thankYou.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
            5566 => [[['_route' => 'sylius_shop_order_pay', '_controller' => 'sylius.controller.payum:prepareCaptureAction', '_sylius' => ['redirect' => ['route' => 'sylius_shop_order_after_pay']]], ['_locale', 'tokenValue'], ['GET' => 0], null, false, false, null]],
            5617 => [[['_route' => 'sylius_shop_order_after_pay', '_controller' => 'sylius.controller.payum:afterCaptureAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            5666 => [[['_route' => 'sylius_shop_order_show', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['template' => '@SyliusShop/Order/show.html.twig', 'repository' => ['method' => 'findOneBy', 'arguments' => [['tokenValue' => '$tokenValue']]], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'options' => ['validation_groups' => []]], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'flash' => false]], ['_locale', 'tokenValue'], ['GET' => 0, 'PUT' => 1], null, false, true, null]],
            5715 => [[['_route' => 'sylius_shop_account_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/index.html.twig', 'grid' => 'sylius_shop_account_order']], ['_locale'], ['GET' => 0], null, true, false, null]],
            5773 => [[['_route' => 'sylius_shop_account_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/show.html.twig', 'repository' => ['method' => 'findOneByNumberAndCustomer', 'arguments' => ['$number', 'expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale', 'number'], ['GET' => 0], null, false, true, null]],
            5829 => [[['_route' => 'sylius_shop_account_address_book_index', '_controller' => 'sylius.controller.address:indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/index.html.twig', 'paginate' => false, 'repository' => ['method' => 'findByCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, true, false, null]],
            5889 => [[['_route' => 'sylius_shop_account_address_book_create', '_controller' => 'sylius.controller.address:createAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/create.html.twig', 'factory' => ['method' => 'createForCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.add_address']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            5959 => [[['_route' => 'sylius_shop_account_address_book_update', '_controller' => 'sylius.controller.address:updateAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/update.html.twig', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []]]], ['_locale', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
            6024 => [[['_route' => 'sylius_shop_account_address_book_delete', '_controller' => 'sylius.controller.address:deleteAction', '_sylius' => ['section' => 'shop_account', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => 'sylius_shop_account_address_book_index']], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
            6106 => [[['_route' => 'sylius_shop_account_address_book_set_as_default', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/_defaultAddressForm.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerDefaultAddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.set_address_as_default']], ['_locale', 'id'], ['GET' => 0, 'PATCH' => 1], null, false, false, null]],
            6148 => [[['_route' => 'sylius_shop_account_root', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_account_dashboard', 'permanent' => true], ['_locale'], ['GET' => 0], null, true, false, null]],
            6200 => [[['_route' => 'sylius_shop_account_dashboard', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['template' => '@SyliusShop/Account/dashboard.html.twig', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, false, false, null]],
            6255 => [[['_route' => 'sylius_shop_account_profile_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['template' => '@SyliusShop/Account/profileUpdate.html.twig', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerProfileType', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_profile_update', 'parameters' => []]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
            6314 => [[['_route' => 'sylius_shop_account_change_password', '_controller' => 'sylius.controller.shop_user:changePasswordAction', '_sylius' => ['template' => '@SyliusShop/Account/changePassword.html.twig', 'redirect' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            6374 => [[['_route' => 'sylius_shop_switch_currency', '_controller' => 'sylius.controller.shop.currency_switch:switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
            6432 => [[['_route' => 'sylius_shop_switch_locale', '_controller' => 'sylius.controller.shop.locale_switch:switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
            6469 => [[['_route' => 'payum_capture_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction'], ['payum_token'], null, null, false, true, null]],
            6503 => [[['_route' => 'payum_notify_do_unsafe', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction'], ['gateway'], null, null, false, true, null]],
            6520 => [[['_route' => 'payum_notify_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction'], ['payum_token'], null, null, false, true, null]],
            6562 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            6583 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            6630 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            6645 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            6666 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            6680 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            6691 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
