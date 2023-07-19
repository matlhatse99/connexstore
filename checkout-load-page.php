
<?php
include_once('functions-page.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>connexstore online shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="font" rel="preload" as="font" type="font/woff2" crossorigin href="https://connexstore.co.za/themes/AngarTheme/assets/css/fonts/material_icons.woff2" />
    <link rel="font" rel="preload" as="font" type="font/woff2" crossorigin href="https://connexstore.co.za/themes/AngarTheme/assets/css/fonts/fontawesome-webfont.woff2?v=4.7.0" />
   
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/theme.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/libs/jquery.bxslider.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/font-awesome.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/home_modyficators.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/rwd.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/black.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/blockreassurance/views/dist/front.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/modules/ps_searchbar/ps_searchbar.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/productcomments/views/css/productcomments.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarbanners/views/css/hooks.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarcatproduct/views/css/at_catproduct.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarcmsinfo/views/css/angarcmsinfo.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarfacebook/views/css/angarfacebook.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarhomecat/views/css/at_homecat.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarslider/views/css/angarslider.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarscrolltop/views/css/angarscrolltop.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/prestanotifypro/views/css/shadowbox/shadowbox.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/ets_banneranywhere/views/css/front.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/roja45quotationspro/views/css/roja45quotationspro17.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/ybc_productimagehover/views/css/fix17.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/nkmdeliverydate//views/css/front.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/responsive/views/css/fluid.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/carrieronorder//views/css/front.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/codwfeeplus/views/css/style-front_17.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/js/jquery/ui/themes/base/minified/jquery-ui.min.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/js/jquery/ui/themes/base/minified/jquery.ui.theme.min.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/modules/blockwishlist/public/wishlist.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/js/jquery/plugins/fancybox/jquery.fancybox.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/js/jquery/plugins/growl/jquery.growl.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/custom.css" media="all" />

    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/libs/jquery.bxslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/angartheme.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/home_modyficators.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/rwd.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/black.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/blockreassurance/views/dist/front.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/modules/ps_searchbar/ps_searchbar.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/productcomments/views/css/productcomments.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarbanners/views/css/hooks.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarcatproduct/views/css/at_catproduct.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarcmsinfo/views/css/angarcmsinfo.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarfacebook/views/css/angarfacebook.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarhomecat/views/css/at_homecat.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarslider/views/css/angarslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarscrolltop/views/css/angarscrolltop.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/prestanotifypro/views/css/shadowbox/shadowbox.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/ets_banneranywhere/views/css/front.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/roja45quotationspro/views/css/roja45quotationspro17.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/ybc_productimagehover/views/css/fix17.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/nkmdeliverydate//views/css/front.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/responsive/views/css/fluid.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/carrieronorder//views/css/front.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/codwfeeplus/views/css/style-front_17.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/js/jquery/ui/themes/base/minified/jquery-ui.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/js/jquery/ui/themes/base/minified/jquery.ui.theme.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/modules/blockwishlist/public/wishlist.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/js/jquery/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/js/jquery/plugins/growl/jquery.growl.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/custom.css" type="text/css" media="all">

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/angartheme.css" type="text/css">
    <link rel="stylesheet" href="css/res-style.css" type="text/css">
    <link rel="stylesheet" rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Poppins:400,600&amp;subset=latin,latin-ext&display=block" type="text/css" media="all" />

    <script type="text/javascript">
        var blockwishlistController = "https:\/\/connexstore.co.za\/module\/blockwishlist\/action";
        var codwfeeplus_codproductid = "4710";
        var codwfeeplus_codproductreference = "COD";
        var codwfeeplus_is17 = true;
        var prestashop = {
            "cart": {
                "products": [],
                "totals": {
                    "total": {
                        "type": "total",
                        "label": "Total",
                        "amount": 0,
                        "value": "R\u00a00.00"
                    },
                    "total_including_tax": {
                        "type": "total",
                        "label": "Total (tax incl.)",
                        "amount": 0,
                        "value": "R\u00a00.00"
                    },
                    "total_excluding_tax": {
                        "type": "total",
                        "label": "Total (tax excl.)",
                        "amount": 0,
                        "value": "R\u00a00.00"
                    }
                },
                "subtotals": {
                    "products": {
                        "type": "products",
                        "label": "Subtotal",
                        "amount": 0,
                        "value": "R\u00a00.00"
                    },
                    "discounts": null,
                    "shipping": {
                        "type": "shipping",
                        "label": "Shipping",
                        "amount": 0,
                        "value": ""
                    },
                    "tax": null
                },
                "products_count": 0,
                "summary_string": "0 items",
                "vouchers": {
                    "allowed": 0,
                    "added": []
                },
                "discounts": [],
                "minimalPurchase": 0,
                "minimalPurchaseRequired": ""
            },
            "currency": {
                "id": 2,
                "name": "South African Rand",
                "iso_code": "ZAR",
                "iso_code_num": "710",
                "sign": "R"
            },
            "customer": {
                "lastname": null,
                "firstname": null,
                "email": null,
                "birthday": null,
                "newsletter": null,
                "newsletter_date_add": null,
                "optin": null,
                "website": null,
                "company": null,
                "siret": null,
                "ape": null,
                "is_logged": false,
                "gender": {
                    "type": null,
                    "name": null
                },
                "addresses": []
            },
            "language": {
                "name": "English (English)",
                "iso_code": "en",
                "locale": "en-US",
                "language_code": "en-za",
                "is_rtl": "0",
                "date_format_lite": "m\/d\/Y",
                "date_format_full": "m\/d\/Y H:i:s",
                "id": 1
            },
            "page": {
                "title": "",
                "canonical": null,
                "meta": {
                    "title": "connexstore.co.za: shop online, save time and money.",
                    "description": "connex store, shop all things online.",
                    "keywords": "connex store, shop all things online.",
                    "robots": "index"
                },
                "page_name": "index",
                "body_classes": {
                    "lang-en": true,
                    "lang-rtl": false,
                    "country-ZA": true,
                    "currency-ZAR": true,
                    "layout-left-column": true,
                    "page-index": true,
                    "tax-display-enabled": true
                },
                "admin_notifications": []
            },
            "shop": {
                "name": "Connex Store",
                "logo": "https:\/\/connexstore.co.za\/img\/logo-1671096750.jpg",
                "stores_icon": "https:\/\/connexstore.co.za\/img\/logo_stores.png",
                "favicon": "https:\/\/connexstore.co.za\/img\/favicon.ico"
            },
            "urls": {
                "base_url": "https:\/\/connexstore.co.za\/",
                "current_url": "https:\/\/connexstore.co.za\/",
                "shop_domain_url": "https:\/\/connexstore.co.za",
                "img_ps_url": "https:\/\/connexstore.co.za\/img\/",
                "img_cat_url": "https:\/\/connexstore.co.za\/img\/c\/",
                "img_lang_url": "https:\/\/connexstore.co.za\/img\/l\/",
                "img_prod_url": "https:\/\/connexstore.co.za\/img\/p\/",
                "img_manu_url": "https:\/\/connexstore.co.za\/img\/m\/",
                "img_sup_url": "https:\/\/connexstore.co.za\/img\/su\/",
                "img_ship_url": "https:\/\/connexstore.co.za\/img\/s\/",
                "img_store_url": "https:\/\/connexstore.co.za\/img\/st\/",
                "img_col_url": "https:\/\/connexstore.co.za\/img\/co\/",
                "img_url": "https:\/\/connexstore.co.za\/themes\/AngarTheme\/assets\/img\/",
                "css_url": "https:\/\/connexstore.co.za\/themes\/AngarTheme\/assets\/css\/",
                "js_url": "https:\/\/connexstore.co.za\/themes\/AngarTheme\/assets\/js\/",
                "pic_url": "https:\/\/connexstore.co.za\/upload\/",
                "pages": {
                    "address": "https:\/\/connexstore.co.za\/address",
                    "addresses": "https:\/\/connexstore.co.za\/addresses",
                    "authentication": "https:\/\/connexstore.co.za\/login",
                    "cart": "https:\/\/connexstore.co.za\/cart",
                    "category": "https:\/\/connexstore.co.za\/index.php?controller=category",
                    "cms": "https:\/\/connexstore.co.za\/index.php?controller=cms",
                    "contact": "https:\/\/connexstore.co.za\/contact-us",
                    "discount": "https:\/\/connexstore.co.za\/discount",
                    "guest_tracking": "https:\/\/connexstore.co.za\/guest-tracking",
                    "history": "https:\/\/connexstore.co.za\/order-history",
                    "identity": "https:\/\/connexstore.co.za\/identity",
                    "index": "https:\/\/connexstore.co.za\/",
                    "my_account": "https:\/\/connexstore.co.za\/my-account",
                    "order_confirmation": "https:\/\/connexstore.co.za\/order-confirmation",
                    "order_detail": "https:\/\/connexstore.co.za\/index.php?controller=order-detail",
                    "order_follow": "https:\/\/connexstore.co.za\/order-follow",
                    "order": "https:\/\/connexstore.co.za\/order",
                    "order_return": "https:\/\/connexstore.co.za\/index.php?controller=order-return",
                    "order_slip": "https:\/\/connexstore.co.za\/credit-slip",
                    "pagenotfound": "https:\/\/connexstore.co.za\/page-not-found",
                    "password": "https:\/\/connexstore.co.za\/password-recovery",
                    "pdf_invoice": "https:\/\/connexstore.co.za\/index.php?controller=pdf-invoice",
                    "pdf_order_return": "https:\/\/connexstore.co.za\/index.php?controller=pdf-order-return",
                    "pdf_order_slip": "https:\/\/connexstore.co.za\/index.php?controller=pdf-order-slip",
                    "prices_drop": "https:\/\/connexstore.co.za\/prices-drop",
                    "product": "https:\/\/connexstore.co.za\/index.php?controller=product",
                    "search": "https:\/\/connexstore.co.za\/search",
                    "sitemap": "https:\/\/connexstore.co.za\/sitemap",
                    "stores": "https:\/\/connexstore.co.za\/stores",
                    "supplier": "https:\/\/connexstore.co.za\/supplier",
                    "register": "https:\/\/connexstore.co.za\/login?create_account=1",
                    "order_login": "https:\/\/connexstore.co.za\/order?login=1"
                },
                "alternative_langs": [],
                "theme_assets": "\/themes\/AngarTheme\/assets\/",
                "actions": {
                    "logout": "https:\/\/connexstore.co.za\/?mylogout="
                },
                "no_picture_image": {
                    "bySize": {
                        "small_default": {
                            "url": "https:\/\/connexstore.co.za\/img\/p\/en-default-small_default.jpg",
                            "width": 98,
                            "height": 98
                        },
                        "cart_default": {
                            "url": "https:\/\/connexstore.co.za\/img\/p\/en-default-cart_default.jpg",
                            "width": 125,
                            "height": 125
                        },
                        "home_default": {
                            "url": "https:\/\/connexstore.co.za\/img\/p\/en-default-home_default.jpg",
                            "width": 259,
                            "height": 259
                        },
                        "medium_default": {
                            "url": "https:\/\/connexstore.co.za\/img\/p\/en-default-medium_default.jpg",
                            "width": 400,
                            "height": 200
                        },
                        "large_default": {
                            "url": "https:\/\/connexstore.co.za\/img\/p\/en-default-large_default.jpg",
                            "width": 800,
                            "height": 400
                        }
                    },
                    "small": {
                        "url": "https:\/\/connexstore.co.za\/img\/p\/en-default-small_default.jpg",
                        "width": 98,
                        "height": 98
                    },
                    "medium": {
                        "url": "https:\/\/connexstore.co.za\/img\/p\/en-default-home_default.jpg",
                        "width": 259,
                        "height": 259
                    },
                    "large": {
                        "url": "https:\/\/connexstore.co.za\/img\/p\/en-default-large_default.jpg",
                        "width": 800,
                        "height": 400
                    },
                    "legend": ""
                }
            },
            "configuration": {
                "display_taxes_label": true,
                "display_prices_tax_incl": true,
                "is_catalog": false,
                "show_prices": true,
                "opt_in": {
                    "partner": false
                },
                "quantity_discount": {
                    "type": "price",
                    "label": "Unit price"
                },
                "voucher_enabled": 0,
                "return_enabled": 0
            },
            "field_required": [],
            "breadcrumb": {
                "links": [{
                    "title": "Home",
                    "url": "https:\/\/connexstore.co.za\/"
                }],
                "count": 1
            },
            "link": {
                "protocol_link": "https:\/\/",
                "protocol_content": "https:\/\/"
            },
            "time": 1674119152,
            "static_token": "3a6692178813dd428366c5889a7a5c84",
            "token": "7d38470dc3ead053a12a78899efd1f89",
            "debug": false
        };
        var productsAlreadyTagged = [];
        var psemailsubscription_subscription = "https:\/\/connexstore.co.za\/module\/ps_emailsubscription\/subscription";
        var psr_icon_color = "#F19D76";
        var removeFromWishlistUrl = "https:\/\/connexstore.co.za\/module\/blockwishlist\/action?action=deleteProductFromWishlist";
        var roja45_hide_add_to_cart = 0;
        var roja45_hide_price = 0;
        var roja45_quotation_useajax = 1;
        var roja45quotationspro_added_failed = "Unable to add product to your request.";
        var roja45quotationspro_added_success = "Product added to your request successfully.";
        var roja45quotationspro_allow_modifications = 0;
        var roja45quotationspro_button_addquote = "Add To Quote";
        var roja45quotationspro_button_text = "Request Quote";
        var roja45quotationspro_button_text_2 = "Request New Quote";
        var roja45quotationspro_cart_modified = 0;
        var roja45quotationspro_cartbutton_text = "Add To Quote";
        var roja45quotationspro_catalog_mode = 0;
        var roja45quotationspro_change_qty = 0;
        var roja45quotationspro_controller = "https:\/\/connexstore.co.za\/module\/roja45quotationspro\/QuotationsProFront?token=3a6692178813dd428366c5889a7a5c84";
        var roja45quotationspro_delete_products = 0;
        var roja45quotationspro_deleted_failed = "Unable to remove product from your request.";
        var roja45quotationspro_deleted_success = "Product removed from your request successfully.";
        var roja45quotationspro_enable_captcha = 0;
        var roja45quotationspro_enable_captchatype = 0;
        var roja45quotationspro_enable_inquotenotify = 1;
        var roja45quotationspro_enable_quote_dropdown = 0;
        var roja45quotationspro_enablequotecart = 1;
        var roja45quotationspro_enablequotecartpopup = 1;
        var roja45quotationspro_error_title = "Error";
        var roja45quotationspro_in_cart = 0;
        var roja45quotationspro_instantresponse = 0;
        var roja45quotationspro_label_position = "";
        var roja45quotationspro_new_quote_available = "A new quotation is available in your account.";
        var roja45quotationspro_productlistitemselector = "article.product-miniature";
        var roja45quotationspro_productlistselector_addtocart = "";
        var roja45quotationspro_productlistselector_buttons = "";
        var roja45quotationspro_productlistselector_flag = ".product-flags";
        var roja45quotationspro_productlistselector_price = ".product-price-and-shipping";
        var roja45quotationspro_productselector_addtocart = ".product-add-to-cart";
        var roja45quotationspro_productselector_price = "div.product-prices";
        var roja45quotationspro_productselector_qty = ".quote_quantity_wanted";
        var roja45quotationspro_quote_link_text = "Get A Quote";
        var roja45quotationspro_quote_modified = "Your cart has changed, you can request a new quote or reload an existing quote by clicking the link below.";
        var roja45quotationspro_recaptcha_site_key = "";
        var roja45quotationspro_request_buttons = "";
        var roja45quotationspro_responsivecartnavselector = "._desktop_quotecart";
        var roja45quotationspro_responsivecartselector = "#header .header-nav div.hidden-md-up";
        var roja45quotationspro_sent_failed = "Unable to send request. Please try again later.";
        var roja45quotationspro_sent_success = "Request received, we will be in touch shortly. Thank You.";
        var roja45quotationspro_show_label = 1;
        var roja45quotationspro_success_title = "Success";
        var roja45quotationspro_touchspin = 1;
        var roja45quotationspro_unknown_error = "An unexpected error has occurred, please raise this with your support provider.";
        var roja45quotationspro_usejs = 1;
        var roja45quotationspro_warning_title = "Warning";
        var wishlistAddProductToCartUrl = "https:\/\/connexstore.co.za\/module\/blockwishlist\/action?action=addProductToCart";
        var wishlistUrl = "https:\/\/connexstore.co.za\/module\/blockwishlist\/view";
    </script>

</head>

<body id="index" class="lang-en country-za currency-zar layout-left-column page-index tax-display-enabled live_edit_0  1.7.8.8 ps_178
	no_bg #ffffff bg_attatchment_fixed bg_position_tl bg_repeat_xy bg_size_initial slider_position_column slider_controls_black banners_top2 banners_top_tablets2 banners_top_phones1 banners_bottom2 banners_bottom_tablets2 banners_bottom_phones1 submenu1 pl_1col_qty_6 pl_2col_qty_6 pl_3col_qty_4 pl_1col_qty_bigtablets_4 pl_2col_qty_bigtablets_3 pl_3col_qty_bigtablets_2 pl_1col_qty_tablets_3 pl_1col_qty_phones_1 home_tabs2 pl_border_type2 45 14 12 pl_button_icon_no pl_button_qty2 pl_desc_no pl_reviews_no pl_availability_no  hide_reference_no hide_reassurance_yes product_tabs1    menu_sep0 header_sep1 slider_full_width feat_cat_style2 feat_cat6 feat_cat_bigtablets4 feat_cat_tablets4 feat_cat_phones0 all_products_yes pl_colors_yes newsletter_info_yes stickycart_yes stickymenu_yes homeicon_no pl_man_no product_hide_man_no  pl_ref_yes  mainfont_Poppins bg_white standard_carusele not_logged  ">



    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=AW-749461096" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->




    <main>
        <header id="header">
            <div class="header-banner">

            </div>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 hidden-sm-down2" id="_desktop_logo">
                            <h1>
                                <a href="#Home"><img class="logo img-responsive" src="images/logo.jpg" alt="Connex Store"></a>
                            </h1>
                        </div>
                       
                        
                        <!-- Block search module TOP -->
                        <div id="_desktop_search_widget" class="col-lg-4 col-md-4 col-sm-12 search-widget hidden-sm-down ">
                            <div id="search_widget">
                                <form method="get" action="">
                                    <input type="hidden" name="controller" value="search">
                                    <input type="text" name="s" value="" placeholder="Search our catalog" aria-label="Search">
                                    <button type="submit">
                                        <i class="material-icons search">&#xE8B6;</i>
                                        <span class="hidden-xl-down">Search</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <!-- /Block search module TOP -->

                        <div id="_mobile_cart" class="rwd_menu_item"><div class="cart_top">

		<div class="blockcart cart-preview inactive" data-refresh-url="//connexstore.co.za/module/ps_shoppingcart/ajax">
			<div class="header">
			
            <div class="cart_index_title">
               
               <a class="cart_link" rel="nofollow" href="checkoutpage.php">
                   <i class="material-icons shopping-cart">shopping_cart</i>
                   <span class="hidden-sm-down cart_title">Cart:</span>
                   <span class="cart-products-count"><?php $total = 0;
foreach ($_SESSION as $key=>$val) {$total++;} echo $total;?>
                       <span> Products - R&nbsp;<?php echo("R$total"); ?></span>
                   </span>
               </a>
           </div>



				<div id="subcart">

					<ul class="cart_products">

											<li>There are no more items in your cart</li>
					
										</ul>

					<ul class="cart-subtotals">

				
						<li>
							<span class="text">Shipping</span>
							<span class="value"></span>
							<span class="clearfix"></span>
						</li>

						<li>
							<span class="text">Total</span>
							<span class="value">R&nbsp;</span>
							<span class="clearfix"></span>
						</li>

					</ul>

					<div class="cart-buttons">
						<a class="btn btn-primary viewcart" href="">Check Out <i class="material-icons"></i></a>
											</div>

				</div>

			</div>
		</div>

	</div></div>

                        <div class="clearfix"></div>
                    </div>
                </div>

                <div id="rwd_menu" class="hidden-md-up">
                    <div class="container">
                        <div id="menu-icon2" class="rwd_menu_item"><i class="material-icons d-inline">&#xE5D2;</i></div>
                        <div id="search-icon" class="rwd_menu_item"><i class="material-icons search">&#xE8B6;</i></div>
                        <div id="user-icon" class="rwd_menu_item"><i class="material-icons logged">&#xE7FF;</i></div>
                        <div id="_mobile_cart" class="rwd_menu_item"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="container">
                    <div id="mobile_top_menu_wrapper2" class="rwd_menu_open hidden-md-up" style="display:none;">
                        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                    </div>
                    <div id="mobile_search_wrapper" class="rwd_menu_open hidden-md-up" style="display:none;">
                        <div id="_mobile_search_widget"></div>
                    </div>
                    <div id="mobile_user_wrapper" class="rwd_menu_open hidden-md-up" style="display:none;">
                        <div id="_mobile_user_info"></div>
                    </div>
                </div>
            </div>
            <div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
                <ul class="top-menu container" id="top-menu" data-depth="0">
                    <li class="home_icon"><a href="index.html"><i class="icon-home"></i><span>Home</span></a></li>
                    <li class="category" id="category-2">
                        <a class="dropdown-item sf-with-ul" href="#" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_72226" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Home
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_72226">
                            <ul class="top-menu container" data-depth="1">
                                <li class="category" id="category-327">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_80555" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Gaming
                                    </a>
                                    <div class="collapse" id="top_sub_menu_80555">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-479">
                                                <a class="dropdown-item" href="#" data-depth="2">Pico</a>
                                            </li>
                                            <li class="category" id="category-328">
                                                <a class="dropdown-item" href="#" data-depth="2">Oculus</a>
                                            </li>
                                            <li class="category" id="category-329">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Gaming Accessories
                                                </a>
                                            </li>
                                            <li class="category" id="category-330">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Playstation
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-252">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_64529" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Automation
                                    </a>
                                    <div class="collapse" id="top_sub_menu_64529">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-255">
                                                <a class="dropdown-item" href="#" data-depth="2">BMW</a>
                                            </li>
                                            <li class="category" id="category-413">
                                                <a class="dropdown-item" href="#" data-depth="2">Car Accessories</a>
                                            </li>
                                            <li class="category" id="category-425">
                                                <a class="dropdown-item" href="#" data-depth="2">DIY</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-323">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_66394" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Beauty And Personal Care
                                    </a>
                                    <div class="collapse" id="top_sub_menu_66394">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-324">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_33790" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Hair Shaver
                                                </a>
                                                <div class="collapse" id="top_sub_menu_33790">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-325">
                                                            <a class="dropdown-item" href="#" data-depth="3">Philips</a>
                                                        </li>
                                                        <li class="category" id="category-326">
                                                            <a class="dropdown-item" href="#" data-depth="3">Hatteker</a>
                                                        </li>
                                                        <li class="category" id="category-401">
                                                            <a class="dropdown-item" href="#" data-depth="3">TRU BARBER</a>
                                                        </li>
                                                        <li class="category" id="category-459">
                                                            <a class="dropdown-item" href="#" data-depth="3">Braun</a>
                                                        </li>
                                                        <li class="category" id="category-472">
                                                            <a class="dropdown-item" href="#" data-depth="3">Gillette</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-438">
                                                <a class="dropdown-item" href="#" data-depth="2">Nail Care</a>
                                            </li>
                                            <li class="category" id="category-461">
                                                <a class="dropdown-item" href="#" data-depth="2">Hair Care</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-363">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_11113" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Computers
                                    </a>
                                    <div class="collapse" id="top_sub_menu_11113">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-365">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_83203" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Tablets
                                                </a>
                                                <div class="collapse" id="top_sub_menu_83203">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-373">
                                                            <a class="dropdown-item" href="#" data-depth="3">Samsung</a>
                                                        </li>
                                                        <li class="category" id="category-374">
                                                            <a class="dropdown-item" href="#" data-depth="3">Huawei</a>
                                                        </li>
                                                        <li class="category" id="category-375">
                                                            <a class="dropdown-item" href="#" data-depth="3">Lenovo</a>
                                                        </li>
                                                        <li class="category" id="category-408">
                                                            <a class="dropdown-item" href="#" data-depth="3">Tablet Accessories</a>
                                                        </li>
                                                        <li class="category" id="category-450">
                                                            <a class="dropdown-item" href="#" data-depth="3">Kindle</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-367">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_78071" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Projector
                                                </a>
                                                <div class="collapse" id="top_sub_menu_78071">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-404">
                                                            <a class="dropdown-item" href="#" data-depth="3">BenQ</a>
                                                        </li>
                                                        <li class="category" id="category-405">
                                                            <a class="dropdown-item" href="#" data-depth="3">Epson</a>
                                                        </li>
                                                        <li class="category" id="category-457">
                                                            <a class="dropdown-item" href="#" data-depth="3">ViewSonic</a>
                                                        </li>
                                                        <li class="category" id="category-458">
                                                            <a class="dropdown-item" href="#" data-depth="3">Philips Projector</a>
                                                        </li>
                                                        <li class="category" id="category-480">
                                                            <a class="dropdown-item" href="#" data-depth="3">Acer</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-364">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_47446" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Laptops
                                                </a>
                                                <div class="collapse" id="top_sub_menu_47446">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-376">
                                                            <a class="dropdown-item" href="#" data-depth="3">Lenovo</a>
                                                        </li>
                                                        <li class="category" id="category-377">
                                                            <a class="dropdown-item sf-with-ul" href="#" data-depth="3">
                                                                <span class="float-xs-right hidden-md-up">
                                                                    <span data-target="#top_sub_menu_40146" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                                        <i class="material-icons add">&#xE313;</i>
                                                                        <i class="material-icons remove">&#xE316;</i>
                                                                    </span>
                                                                </span>
                                                                HP
                                                            </a>
                                                            <div class="collapse" id="top_sub_menu_40146">
                                                                <ul class="top-menu container" data-depth="4">
                                                                    <li class="category" id="category-451">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Pavillion</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="category" id="category-378">
                                                            <a class="dropdown-item" href="#" data-depth="3">Samsung</a>
                                                        </li>
                                                        <li class="category" id="category-380">
                                                            <a class="dropdown-item" href="#" data-depth="3">Jumper</a>
                                                        </li>
                                                        <li class="category" id="category-381">
                                                            <a class="dropdown-item" href="#" data-depth="3">Huawei</a>
                                                        </li>
                                                        <li class="category" id="category-402">
                                                            <a class="dropdown-item" href="#" data-depth="3">ACER</a>
                                                        </li>
                                                        <li class="category" id="category-417">
                                                            <a class="dropdown-item" href="#" data-depth="3">Laptop Bags</a>
                                                        </li>
                                                        <li class="category" id="category-418">
                                                            <a class="dropdown-item" href="#" data-depth="3">Dell</a>
                                                        </li>
                                                        <li class="category" id="category-419">
                                                            <a class="dropdown-item" href="#" data-depth="3">Asus</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-368">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_83248" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Networking
                                                </a>
                                                <div class="collapse" id="top_sub_menu_83248">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-420">
                                                            <a class="dropdown-item sf-with-ul" href="#" data-depth="3">
                                                                <span class="float-xs-right hidden-md-up">
                                                                    <span data-target="#top_sub_menu_94401" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                                        <i class="material-icons add">&#xE313;</i>
                                                                        <i class="material-icons remove">&#xE316;</i>
                                                                    </span>
                                                                </span>
                                                                Routers
                                                            </a>
                                                            <div class="collapse" id="top_sub_menu_94401">
                                                                <ul class="top-menu container" data-depth="4">
                                                                    <li class="category" id="category-421">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Netgear</a>
                                                                    </li>
                                                                    <li class="category" id="category-422">
                                                                        <a class="dropdown-item" href="#" data-depth="4">D-Link</a>
                                                                    </li>
                                                                    <li class="category" id="category-423">
                                                                        <a class="dropdown-item" href="#" data-depth="4">TP-Link</a>
                                                                    </li>
                                                                    <li class="category" id="category-424">
                                                                        <a class="dropdown-item" href="#" data-depth="4">ASUS</a>
                                                                    </li>
                                                                    <li class="category" id="category-426">
                                                                        <a class="dropdown-item" href="#" data-depth="4">GL.iNet</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-370">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_19329" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Components
                                                </a>
                                                <div class="collapse" id="top_sub_menu_19329">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-382">
                                                            <a class="dropdown-item sf-with-ul" href="#" data-depth="3">
                                                                <span class="float-xs-right hidden-md-up">
                                                                    <span data-target="#top_sub_menu_6459" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                                        <i class="material-icons add">&#xE313;</i>
                                                                        <i class="material-icons remove">&#xE316;</i>
                                                                    </span>
                                                                </span>
                                                                Memory Modules
                                                            </a>
                                                            <div class="collapse" id="top_sub_menu_6459">
                                                                <ul class="top-menu container" data-depth="4">
                                                                    <li class="category" id="category-383">
                                                                        <a class="dropdown-item" href="#" data-depth="4">PATRIOT</a>
                                                                    </li>
                                                                    <li class="category" id="category-410">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Gigastone</a>
                                                                    </li>
                                                                    <li class="category" id="category-411">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Timetec</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="category" id="category-416">
                                                            <a class="dropdown-item" href="#" data-depth="3">Hard Drives</a>
                                                        </li>
                                                        <li class="category" id="category-454">
                                                            <a class="dropdown-item" href="#" data-depth="3">Keyboard</a>
                                                        </li>
                                                        <li class="category" id="category-455">
                                                            <a class="dropdown-item" href="#" data-depth="3">Processors</a>
                                                        </li>
                                                        <li class="category" id="category-476">
                                                            <a class="dropdown-item" href="#" data-depth="3">Motherboard</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-371">
                                                <a class="dropdown-item" href="" data-depth="2">Monitors</a>
                                            </li>
                                            <li class="category" id="category-369">
                                                <a class="dropdown-item" href="" data-depth="2">Storage</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-433">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_4290" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Camping and Outdoor
                                    </a>
                                    <div class="collapse" id="top_sub_menu_4290">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-434">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_96566" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Water Storage
                                                </a>
                                                <div class="collapse" id="top_sub_menu_96566">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-435">
                                                            <a class="dropdown-item" href="#" data-depth="3">Water Bottles</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-336">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_24744" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Electronics
                                    </a>
                                    <div class="collapse" id="top_sub_menu_24744">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-337">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_93689" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Cameras
                                                </a>
                                                <div class="collapse" id="top_sub_menu_93689">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-346">
                                                            <a class="dropdown-item" href="#" data-depth="3">LOGITECH</a>
                                                        </li>
                                                        <li class="category" id="category-347">
                                                            <a class="dropdown-item" href="#" data-depth="3">GOPRO</a>
                                                        </li>
                                                        <li class="category" id="category-348">
                                                            <a class="dropdown-item" href="#" data-depth="3">SONY</a>
                                                        </li>
                                                        <li class="category" id="category-428">
                                                            <a class="dropdown-item sf-with-ul" href="#" data-depth="3">
                                                                <span class="float-xs-right hidden-md-up">
                                                                    <span data-target="#top_sub_menu_24963" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                                        <i class="material-icons add">&#xE313;</i>
                                                                        <i class="material-icons remove">&#xE316;</i>
                                                                    </span>
                                                                </span>
                                                                Binoculars
                                                            </a>
                                                            <div class="collapse" id="top_sub_menu_24963">
                                                                <ul class="top-menu container" data-depth="4">
                                                                    <li class="category" id="category-429">
                                                                        <a class="dropdown-item" href="#" data-depth="4">occer</a>
                                                                    </li>
                                                                    <li class="category" id="category-430">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Nikon</a>
                                                                    </li>
                                                                    <li class="category" id="category-431">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Vortex</a>
                                                                    </li>
                                                                    <li class="category" id="category-432">
                                                                        <a class="dropdown-item" href="#" data-depth="4">SkyGenius</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="category" id="category-436">
                                                            <a class="dropdown-item" href="#" data-depth="3">Camera Accessories</a>
                                                        </li>
                                                        <li class="category" id="category-440">
                                                            <a class="dropdown-item" href="#" data-depth="3">Panasonic</a>
                                                        </li>
                                                        <li class="category" id="category-441">
                                                            <a class="dropdown-item" href="3" data-depth="3">Canon</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-338">
                                                <a class="dropdown-item" href="#" data-depth="2">GPS and Navigation</a>
                                            </li>
                                            <li class="category" id="category-339">
                                                <a class="dropdown-item" href="#" data-depth="2">Car and Vehicle Electronics</a>
                                            </li>
                                            <li class="category" id="category-340">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_73195" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Smartwatch
                                                </a>
                                                <div class="collapse" id="top_sub_menu_73195">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-442">
                                                            <a class="dropdown-item" href="#" data-depth="3">Fossil</a>
                                                        </li>
                                                        <li class="category" id="category-342">
                                                            <a class="dropdown-item" href="#" data-depth="3">Garmin</a>
                                                        </li>
                                                        <li class="category" id="category-345">
                                                            <a class="dropdown-item" href="#" data-depth="3">Huawei</a>
                                                        </li>
                                                        <li class="category" id="category-474">
                                                            <a class="dropdown-item" href="#" data-depth="3">Nokia</a>
                                                        </li>
                                                        <li class="category" id="category-343">
                                                            <a class="dropdown-item" href="#" data-depth="3">Samsung</a>
                                                        </li>
                                                        <li class="category" id="category-453">
                                                            <a class="dropdown-item" href="#" data-depth="3">Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-341">
                                                <a class="dropdown-item" href="#" data-depth="2">Audio</a>
                                            </li>
                                            <li class="category" id="category-427">
                                                <a class="dropdown-item" href="#" data-depth="2">Fogger machines</a>
                                            </li>
                                            <li class="category" id="category-448">
                                                <a class="dropdown-item" href="#" data-depth="2">Components</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-437">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">Engraving Machine</a>
                                </li>
                                <li class="category" id="category-443">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_30460" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Garden, Pool and Patio
                                    </a>
                                    <div class="collapse" id="top_sub_menu_30460">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-444">
                                                <a class="dropdown-item" href="#" data-depth="2">Pool Equipment</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-385">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_92500" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Printers
                                    </a>
                                    <div class="collapse" id="top_sub_menu_92500">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-386">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_52907" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Printers
                                                </a>
                                                <div class="collapse" id="top_sub_menu_52907">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-395">
                                                            <a class="dropdown-item" href="#" data-depth="3">HP</a>
                                                        </li>
                                                        <li class="category" id="category-396">
                                                            <a class="dropdown-item" href="#" data-depth="3">Lexmark</a>
                                                        </li>
                                                        <li class="category" id="category-397">
                                                            <a class="dropdown-item" href="#" data-depth="3">Canon</a>
                                                        </li>
                                                        <li class="category" id="category-398">
                                                            <a class="dropdown-item" href="#" data-depth="3">Brother</a>
                                                        </li>
                                                        <li class="category" id="category-409">
                                                            <a class="dropdown-item" href="#" data-depth="3">Thermal Printer</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-387">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_95042" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Inks
                                                </a>
                                                <div class="collapse" id="top_sub_menu_95042">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-392">
                                                            <a class="dropdown-item" href="#" data-depth="3">HP</a>
                                                        </li>
                                                        <li class="category" id="category-393">
                                                            <a class="dropdown-item" href="#" data-depth="3">Lexmark</a>
                                                        </li>
                                                        <li class="category" id="category-394">
                                                            <a class="dropdown-item" href="#" data-depth="3">Canon</a>
                                                        </li>
                                                        <li class="category" id="category-399">
                                                            <a class="dropdown-item" href="#" data-depth="3">Brother</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-388">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_66407" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Toner Cartridges
                                                </a>
                                                <div class="collapse" id="top_sub_menu_66407">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-389">
                                                            <a class="dropdown-item" href="#" data-depth="3">HP</a>
                                                        </li>
                                                        <li class="category" id="category-390">
                                                            <a class="dropdown-item" href="#" data-depth="3">Lexmark</a>
                                                        </li>
                                                        <li class="category" id="category-391">
                                                            <a class="dropdown-item" href="#" data-depth="3">Canon</a>
                                                        </li>
                                                        <li class="category" id="category-400">
                                                            <a class="dropdown-item" href="#" data-depth="3">Brother</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-456">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_87190" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Scanner
                                                </a>
                                                <div class="collapse" id="top_sub_menu_87190">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-462">
                                                            <a class="dropdown-item" href="#" data-depth="3">Brother</a>
                                                        </li>
                                                        <li class="category" id="category-463">
                                                            <a class="dropdown-item" href="#" data-depth="3">HP</a>
                                                        </li>
                                                        <li class="category" id="category-464">
                                                            <a class="dropdown-item" href="#" data-depth="3">Epson</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-403">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">Daily Deals</a>
                                </li>
                                <li class="category" id="category-349">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_86067" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Smart Home
                                    </a>
                                    <div class="collapse" id="top_sub_menu_86067">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-351">
                                                <a class="dropdown-item" href="#" data-depth="2">Kitchen Tools</a>
                                            </li>
                                            <li class="category" id="category-460">
                                                <a class="dropdown-item" href="#" data-depth="2">Solar Panels</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-331">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_26168" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Smartphones
                                    </a>
                                    <div class="collapse" id="top_sub_menu_26168">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-332">
                                                <a class="dropdown-item" href="#" data-depth="2">Apple</a>
                                            </li>
                                            <li class="category" id="category-333">
                                                <a class="dropdown-item" href="#" data-depth="2">Samsung</a>
                                            </li>
                                            <li class="category" id="category-334">
                                                <a class="dropdown-item" href="#" data-depth="2">HUAWEI</a>
                                            </li>
                                            <li class="category" id="category-384">
                                                <a class="dropdown-item" href="#" data-depth="2">Smartphone Accessories</a>
                                            </li>
                                            <li class="category" id="category-412">
                                                <a class="dropdown-item" href="#" data-depth="2">Motorola</a>
                                            </li>
                                            <li class="category" id="category-414">
                                                <a class="dropdown-item" href="#" data-depth="2">realme</a>
                                            </li>
                                            <li class="category" id="category-415">
                                                <a class="dropdown-item" href="#" data-depth="2">Blackview</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-352">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">Software</a>
                                </li>
                                <li class="category" id="category-445">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_80988" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Fashion and Luggage
                                    </a>
                                    <div class="collapse" id="top_sub_menu_80988">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-446">
                                                <a class="dropdown-item" href="3" data-depth="2">Dresses</a>
                                            </li>
                                            <li class="category" id="category-447">
                                                <a class="dropdown-item" href="#" data-depth="2">Fashion Boots</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-467">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_38312" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Entertainment
                                    </a>
                                    <div class="collapse" id="top_sub_menu_38312">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-468">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_45307" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Sound
                                                </a>
                                                <div class="collapse" id="top_sub_menu_45307">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-469">
                                                            <a class="dropdown-item" href="#" data-depth="3">SENNHEISER</a>
                                                        </li>
                                                        <li class="category" id="category-470">
                                                            <a class="dropdown-item" href="#" data-depth="3">Bose</a>
                                                        </li>
                                                        <li class="category" id="category-471">
                                                            <a class="dropdown-item" href="#" data-depth="3">Sony</a>
                                                        </li>
                                                        <li class="category" id="category-478">
                                                            <a class="dropdown-item" href="#" data-depth="3">Pioneer</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-128">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">On Sale</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="category" id="category-363">
                        <a class="dropdown-item sf-with-ul" href="#" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_5086" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Computers
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_5086">
                            <ul class="top-menu container" data-depth="1">
                                <li class="category" id="category-365">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_77930" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Tablets
                                    </a>
                                    <div class="collapse" id="top_sub_menu_77930">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-373">
                                                <a class="dropdown-item" href="#" data-depth="2">Samsung</a>
                                            </li>
                                            <li class="category" id="category-374">
                                                <a class="dropdown-item" href="#" data-depth="2">Huawei</a>
                                            </li>
                                            <li class="category" id="category-375">
                                                <a class="dropdown-item" href="3" data-depth="2">Lenovo</a>
                                            </li>
                                            <li class="category" id="category-408">
                                                <a class="dropdown-item" href="#" data-depth="2">Tablet Accessories</a>
                                            </li>
                                            <li class="category" id="category-450">
                                                <a class="dropdown-item" href="#" data-depth="2">Kindle</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-367">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_99527" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Projector
                                    </a>
                                    <div class="collapse" id="top_sub_menu_99527">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-404">
                                                <a class="dropdown-item" href="#" data-depth="2">BenQ</a>
                                            </li>
                                            <li class="category" id="category-405">
                                                <a class="dropdown-item" href="#" data-depth="2">Epson</a>
                                            </li>
                                            <li class="category" id="category-457">
                                                <a class="dropdown-item" href="#" data-depth="2">ViewSonic</a>
                                            </li>
                                            <li class="category" id="category-458">
                                                <a class="dropdown-item" href="#" data-depth="2">Philips Projector</a>
                                            </li>
                                            <li class="category" id="category-480">
                                                <a class="dropdown-item" href="#" data-depth="2">Acer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-364">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_16496" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Laptops
                                    </a>
                                    <div class="collapse" id="top_sub_menu_16496">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-376">
                                                <a class="dropdown-item" href="#" data-depth="2">Lenovo</a>
                                            </li>
                                            <li class="category" id="category-377">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_46233" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    HP
                                                </a>
                                                <div class="collapse" id="top_sub_menu_46233">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-451">
                                                            <a class="dropdown-item" href="#" data-depth="3">Pavillion</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-378">
                                                <a class="dropdown-item" href="#" data-depth="2">Samsung</a>
                                            </li>
                                            <li class="category" id="category-380">
                                                <a class="dropdown-item" href="#" data-depth="2">Jumper</a>
                                            </li>
                                            <li class="category" id="category-381">
                                                <a class="dropdown-item" href="#" data-depth="2">Huawei</a>
                                            </li>
                                            <li class="category" id="category-402">
                                                <a class="dropdown-item" href="#" data-depth="2">ACER</a>
                                            </li>
                                            <li class="category" id="category-417">
                                                <a class="dropdown-item" href="#" data-depth="2">Laptop Bags</a>
                                            </li>
                                            <li class="category" id="category-418">
                                                <a class="dropdown-item" href="#" data-depth="2">Dell</a>
                                            </li>
                                            <li class="category" id="category-419">
                                                <a class="dropdown-item" href="#" data-depth="2">Asus</a>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-368">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_25388" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Networking
                                    </a>
                                    <div class="collapse" id="top_sub_menu_25388">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-420">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_80503" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Routers
                                                </a>
                                                <div class="collapse" id="top_sub_menu_80503">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-421">
                                                            <a class="dropdown-item" href="#" data-depth="3">Netgear</a>
                                                        </li>
                                                        <li class="category" id="category-422">
                                                            <a class="dropdown-item" href="#" data-depth="3">D-Link</a>
                                                        </li>
                                                        <li class="category" id="category-423">
                                                            <a class="dropdown-item" href="#" data-depth="3">TP-Link</a>
                                                        </li>
                                                        <li class="category" id="category-424">
                                                            <a class="dropdown-item" href="#" data-depth="3">ASUS</a>
                                                        </li>
                                                        <li class="category" id="category-426">
                                                            <a class="dropdown-item" href="#" data-depth="3">GL.iNet</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-370">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_94926" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Components
                                    </a>
                                    <div class="collapse" id="top_sub_menu_94926">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-382">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_8021" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Memory Modules
                                                </a>
                                                <div class="collapse" id="top_sub_menu_8021">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-383">
                                                            <a class="dropdown-item" href="#" data-depth="3">PATRIOT</a>
                                                        </li>
                                                        <li class="category" id="category-410">
                                                            <a class="dropdown-item" href="#" data-depth="3">Gigastone</a>
                                                        </li>
                                                        <li class="category" id="category-411">
                                                            <a class="dropdown-item" href="#" data-depth="3">Timetec</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-416">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Hard Drives
                                                </a>
                                            </li>
                                            <li class="category" id="category-454">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Keyboard
                                                </a>
                                            </li>
                                            <li class="category" id="category-455">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Processors
                                                </a>
                                            </li>
                                            <li class="category" id="category-476">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Motherboard
                                                </a>
                                            </li>


                                        </ul>


                                    </div>
                                </li>
                                <li class="category" id="category-371">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Monitors
                                    </a>
                                </li>
                                <li class="category" id="category-369">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Storage
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/363-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-331">
                        <a class="dropdown-item sf-with-ul" href="" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_28388" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Smartphones
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_28388">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-332">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Apple
                                    </a>
                                </li>
                                <li class="category" id="category-333">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Samsung
                                    </a>
                                </li>
                                <li class="category" id="category-334">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        HUAWEI
                                    </a>
                                </li>
                                <li class="category" id="category-384">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Smartphone Accessories
                                    </a>
                                </li>
                                <li class="category" id="category-412">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Motorola
                                    </a>
                                </li>
                                <li class="category" id="category-414">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        realme
                                    </a>
                                </li>
                                <li class="category" id="category-415">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Blackview
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/331-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-365">
                        <a class="dropdown-item sf-with-ul" href="#" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_19784" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Tablets
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_19784">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-373">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Samsung
                                    </a>
                                </li>
                                <li class="category" id="category-374">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Huawei
                                    </a>
                                </li>
                                <li class="category" id="category-375">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Lenovo
                                    </a>
                                </li>
                                <li class="category" id="category-408">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Tablet Accessories
                                    </a>
                                </li>
                                <li class="category" id="category-450">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Kindle
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/365-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-327">
                        <a class="dropdown-item sf-with-ul" href="" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_68763" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Gaming
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_68763">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-479">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Pico
                                    </a>
                                </li>
                                <li class="category" id="category-328">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Oculus
                                    </a>
                                </li>
                                <li class="category" id="category-329">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Gaming Accessories
                                    </a>
                                </li>
                                <li class="category" id="category-330">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Playstation
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/327-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-340">
                        <a class="dropdown-item sf-with-ul" href="" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_56386" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Smartwatch
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_56386">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-442">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Fossil
                                    </a>
                                </li>
                                <li class="category" id="category-342">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Garmin
                                    </a>
                                </li>
                                <li class="category" id="category-345">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Huawei
                                    </a>
                                </li>
                                <li class="category" id="category-474">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Nokia
                                    </a>
                                </li>
                                <li class="category" id="category-343">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Samsung
                                    </a>
                                </li>
                                <li class="category" id="category-453">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Accessories
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/340-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-385">
                        <a class="dropdown-item sf-with-ul" href="" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_35649" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Printers
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_35649">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-386">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_81219" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Printers
                                    </a>
                                    <div class="collapse" id="top_sub_menu_81219">


                                        <ul class="top-menu container" data-depth="2">



                                            <li class="category" id="category-395">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    HP
                                                </a>
                                            </li>
                                            <li class="category" id="category-396">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Lexmark
                                                </a>
                                            </li>
                                            <li class="category" id="category-397">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Canon
                                                </a>
                                            </li>
                                            <li class="category" id="category-398">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Brother
                                                </a>
                                            </li>
                                            <li class="category" id="category-409">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Thermal Printer
                                                </a>
                                            </li>


                                        </ul>


                                    </div>
                                </li>
                                <li class="category" id="category-387">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_59363" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Inks
                                    </a>
                                    <div class="collapse" id="top_sub_menu_59363">


                                        <ul class="top-menu container" data-depth="2">



                                            <li class="category" id="category-392">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    HP
                                                </a>
                                            </li>
                                            <li class="category" id="category-393">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Lexmark
                                                </a>
                                            </li>
                                            <li class="category" id="category-394">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Canon
                                                </a>
                                            </li>
                                            <li class="category" id="category-399">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Brother
                                                </a>
                                            </li>


                                        </ul>


                                    </div>
                                </li>
                                <li class="category" id="category-388">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_76458" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Toner Cartridges
                                    </a>
                                    <div class="collapse" id="top_sub_menu_76458">


                                        <ul class="top-menu container" data-depth="2">



                                            <li class="category" id="category-389">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    HP
                                                </a>
                                            </li>
                                            <li class="category" id="category-390">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Lexmark
                                                </a>
                                            </li>
                                            <li class="category" id="category-391">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Canon
                                                </a>
                                            </li>
                                            <li class="category" id="category-400">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Brother
                                                </a>
                                            </li>


                                        </ul>


                                    </div>
                                </li>
                                <li class="category" id="category-456">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_4786" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Scanner
                                    </a>
                                    <div class="collapse" id="top_sub_menu_4786">


                                        <ul class="top-menu container" data-depth="2">



                                            <li class="category" id="category-462">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Brother
                                                </a>
                                            </li>
                                            <li class="category" id="category-463">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    HP
                                                </a>
                                            </li>
                                            <li class="category" id="category-464">
                                                <a class="dropdown-item" href="" data-depth="2">
                                                    Epson
                                                </a>
                                            </li>


                                        </ul>


                                    </div>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/385-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-371">
                        <a class="dropdown-item" href="" data-depth="0">
                            Monitors
                        </a>
                    </li>
                    <li class="category" id="category-367">
                        <a class="dropdown-item sf-with-ul" href="" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_11926" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Projector
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_11926">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-404">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        BenQ
                                    </a>
                                </li>
                                <li class="category" id="category-405">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Epson
                                    </a>
                                </li>
                                <li class="category" id="category-457">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        ViewSonic
                                    </a>
                                </li>
                                <li class="category" id="category-458">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Philips Projector
                                    </a>
                                </li>
                                <li class="category" id="category-480">
                                    <a class="dropdown-item dropdown-submenu" href="" data-depth="1">
                                        Acer
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/367-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-403">
                        <a class="dropdown-item" href="" data-depth="0">
                            Daily Deals
                        </a>
                    </li>


                </ul>








                <div id="likebox_content">
                    <h4>Follow us on Facebook</h4>
                    <div class="likebox_tab"></div>
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote><a href="#">Facebook</a></blockquote>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <?php

include_once("functions-page.php");

if (isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address= $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $cvv = $_POST['cvv'];
    insert_info($conn,$dbname,'post3',"email",$email);
    update_info($conn,$dbname,'post3',"name","email",$name,$email);
    update_info($conn,$dbname,'post3',"address","email",$address,$email);
    update_info($conn,$dbname,'post3',"city","email",$city,$email);
    update_info($conn,$dbname,'post3',"state","email",$state,$email);
    update_info($conn,$dbname,'post3',"zip","email",$zip,$email);
    update_info($conn,$dbname,'post3',"cardname","email",$cardname,$email);
    update_info($conn,$dbname,'post3',"cardnumber","email",$cardnumber,$email);
    update_info($conn,$dbname,'post3',"expmonth","email",$expmonth,$email);
    update_info($conn,$dbname,'post3',"cvv","email",$cvv,$email);

        echo("<br>");
        echo("<p style='font-size: 20px; text-align: center;'>Your payment is be Successful. Thank you, please check your email.</p>");
        echo("<br>"); 
        echo("<a  href='logout.php' button type='button' class='btn btn-primary'>Back to the site</button></a>");
   
}

 ?>    




        <div class="footer-sub">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <div class="label-sub">
                            Sign up for Superbalist
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="label-sub">
                            <div class="label-mov">
                                <form method="get" action="">
                                    <input type="text" name="s" value="" placeholder="Search our catalog" aria-label="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="label-sub">
                            <div id="search_widget">
                                <form method="get" action="">
                                    <button type="submit" value="Signup">Signup
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="footer-container">
                <div class="container">
                    <div class="row">
                        <div class="h3 hidden-sm-down">SUPERBALIST</div>
                        <div class="col-md-2 links wrapper">
                            <div class="h4 hidden-sm-down"><span>Account</span></div>
                            <ul id="footer_sub_menu_89968" class="collapse">
                                <li>
                                    <a id="link-product-page-prices-drop-1" class="cms-page-link" href="#" title="View details into accounts">Account Details</a>
                                </li>
                                <li>
                                    <a id="link-product-page-new-products-1" class="cms-page-link" href="#" title="Our new products">
                                        Orders
                                    </a>
                                </li>
                                <li>
                                    <a id="link-product-page-best-sales-1" class="cms-page-link" href="#" title="Our best sales">
                                        Returns & Exchanges
                                    </a>
                                </li>
                                <li>
                                    <a id="link-product-page-best-sales-1" class="cms-page-link" href="#" title="Our best sales">
                                        Wishlist
                                    </a>
                                </li>
                                <li>
                                    <a id="link-product-page-best-sales-1" class="cms-page-link" href="#" title="Our best sales">
                                        Notifications Settings
                                    </a>
                                </li>
                                <li>
                                    <a id="link-product-page-best-sales-1" class="cms-page-link" href="#" title="Our best sales">
                                        Buy Gift Vouchers
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2 links wrapper">
                            <div class="h4 hidden-sm-down"><span>Client Concierge</span></div>
                            <ul id="footer_sub_menu_18950" class="collapse">
                                <li>
                                    <a id="link-cms-page-1-2" class="cms-page-link" href="#" title="View out help Centre">
                                        Help Centre
                                    </a>
                                </li>
                                <li>
                                    <a id="link-cms-page-2-2" class="cms-page-link" href="#" title="Check out FAQs">
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a id="link-cms-page-3-2" class="cms-page-link" href="#" title="view out payment options">
                                        Payment Options
                                    </a>
                                </li>
                                <li>
                                    <a id="link-cms-page-4-2" class="cms-page-link" href="#" title="Learn about our delivery Options">
                                        Delivery Options
                                    </a>
                                </li>
                                <li>
                                    <a id="link-cms-page-5-2" class="cms-page-link" href="#" title="click and connect">
                                        Click & Connect
                                    </a>
                                </li>
                                <li>
                                    <a id="link-static-page-contact-2" class="cms-page-link" href="#" title="Check our return policy">
                                        Return Policy
                                    </a>
                                </li>
                                <li>
                                    <a id="link-static-page-sitemap-2" class="cms-page-link" href="#" title="View our Privacy policy">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2 links wrapper">
                            <div class="h4 hidden-sm-down"><span>The Company</span></div>
                            <ul id="footer_sub_menu_18950" class="collapse">
                                <li>
                                    <a id="link-cms-page-1-2" class="cms-page-link" href="#" title="Read more about us">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a id="link-cms-page-2-2" class="cms-page-link" href="#" title="Check careers under Superbalist">
                                        Careers at Superbalist
                                    </a>
                                </li>
                                <li>
                                    <a id="link-cms-page-3-2" class="cms-page-link" href="#" title="view careers in Tech">
                                        Tech Careers
                                    </a>
                                </li>
                                <li>
                                    <a id="link-cms-page-4-2" class="cms-page-link" href="#" title="Learn more about our marketing services">
                                        Marketing Services
                                    </a>
                                </li>
                                <li>
                                    <a id="link-cms-page-5-2" class="cms-page-link" href="#" title="click and connect">
                                        Click & Connect
                                    </a>
                                </li>
                                <li>
                                    <a id="link-static-page-contact-2" class="cms-page-link" href="#" title="Check out out cop gift vouchers">
                                        Corporate Gift Vouchers
                                    </a>
                                </li>
                                <li>
                                    <a id="link-static-page-sitemap-2" class="cms-page-link" href="#" title="conscious Journey">
                                        Conscious Journey
                                    </a>
                                </li>
                                <li>
                                    <a id="link-static-page-sitemap-2" class="cms-page-link" href="#" title="view our conacts">
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a id="link-static-page-sitemap-2" class="cms-page-link" href="#" title="View Human rights group under Takealot">
                                        Takealot Group Human Rights
                                    </a>
                                </li>
                                <li>
                                    <a id="link-static-page-sitemap-2" class="cms-page-link" href="#" title="Statements">
                                        Statement
                                    </a>
                                </li>
                                <li>
                                    <a id="link-static-page-sitemap-2" class="cms-page-link" href="#" title="speack up process">
                                        Speak Up Process
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2 links wrapper">
                            <div class="h4 hidden-sm-down"><span>Takealot Group</span></div>
                            <ul id="footer_sub_menu_18950" class="collapse">
                                <li>
                                    <a id="link-cms-page-1-2" class="cms-page-link" href="#" title="View and Order on Mr D Foods">Mr D Foods</a>
                                </li>
                                <li>
                                    <a id="link-cms-page-2-2" class="cms-page-link" href="#" title="View and Order on Takealot">Takealot</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-3 links wrapper">
                            <div class="row">
                                <div class="h4 block-social hidden-sm-down"><span style="color:#3cd062">Log in to your Account</span></div>
                                <div class="block-social col-lg-8">
                                    <ul>
                                        <li class="fa fa-facebook"><a href="#" target="_blank"><span>Facebook</span></a></li>
                                        <li class="fa fa-twitter"><a href="#" target="_blank"><span>Twitter</span></a></li>
                                        <li class="fa fa-youtube"><a href="#" target="_blank"><span>YouTube</span></a></li>
                                        <li class="fa fa-instagram"><a href="#" target="_blank"><span>Instagram</span></a></li>
                                    </ul>
                                    <p id="block-social-label">Follow us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <div class="links-foot">
                            <a href="#" title="">Terms & Conditions</a>
                            <a href="#" title="">Privacy Policy</a>
                            <a href="#" title="">Shopping Glossary</a>
                            <a href="#" title="">Fulfilment by Takealot Delivery Team</a>
                        </div>

                    </div>

                </div>

        </footer>
      
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script type="text/javascript" src="https://connexstore.co.za/themes/core.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/themes/AngarTheme/assets/js/theme.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/themes/AngarTheme/assets/js/libs/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/themes/AngarTheme/assets/js/angartheme.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/ps_emailsubscription/views/js/ps_emailsubscription.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/blockreassurance/views/dist/front.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/ps_emailalerts/js/mailalerts.js"></script>
    <script type="text/javascript" src="https://sfdr.co/sfdr.js?platform=prestashop"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/productcomments/views/js/jquery.rating.pack.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/productcomments/views/js/jquery.textareaCounter.plugin.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/productcomments/views/js/productcomments.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/angarfacebook/views/js/angarfacebook.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/angarscrolltop/views/js/angarscrolltop.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/prestanotifypro/views/js/shadowbox/shadowbox.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/ets_banneranywhere/views/js/front.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/roja45quotationspro/views/js/roja45quotationspro17.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/roja45quotationspro/views/js/roja45quotationspro_cart17.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/roja45quotationspro/views/js/validate.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/roja45quotationspro/views/js/roja45quotationspro_preventcartmods17.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/ybc_productimagehover/views/js/productimagehover.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/responsive/views/js/layout.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/carrieronorder//views/js/front.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/codwfeeplus/views/js/front.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/codwfeeplus/views/js/front-reorder.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/js/jquery/ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/blockwishlist/public/product.bundle.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/js/jquery/plugins/growl/jquery.growl.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/themes/AngarTheme/modules/ps_searchbar/ps_searchbar.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/themes/AngarTheme/modules/ps_shoppingcart/ps_shoppingcart.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/blockwishlist/public/graphql.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/modules/blockwishlist/public/vendors.js"></script>
    <script type="text/javascript" src="https://connexstore.co.za/themes/AngarTheme/assets/js/custom.js"></script>





    <script>
        $(window).load(function() {
            $('#angarslider').bxSlider({
                maxSlides: 1,
                slideWidth: 1920,
                infiniteLoop: true,
                auto: true,
                pager: 1,
                autoHover: 1,
                speed: 500,
                pause: 5000,
                adaptiveHeight: true,
                touchEnabled: true
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#bxslider_1').bxSlider({
                auto: true,
                minSlides: 5,
                maxSlides: 5,
                mode: 'vertical',
                pager: false,
                pause: 3000,
                nextSelector: '#home-next_1',
                prevSelector: '#home-prev_1',
                nextText: '>',
                prevText: '<',
                moveSlides: 5,
                infiniteLoop: true,
                hideControlOnEnd: true,
                useCSS: false,
            });
        });
    </script>
    <script type="text/javascript">
        var time_start;
        $(window).load(
            function() {
                time_start = new Date();
            }
        );
        $(window).unload(
            function() {
                var time_end = new Date();
                var pagetime = new Object;
                pagetime.type = "pagetime";
                pagetime.id_connections = "34732";
                pagetime.id_page = "12";
                pagetime.time_start = "2023-01-19 11:05:53";
                pagetime.token = "83103390224fc93e969bf51dca8edb97cf6553f0";
                pagetime.time = time_end - time_start;
                $.post("https://connexstore.co.za/index.php?controller=statistics", pagetime);
            }
        );
    </script>

</body>

</html>
