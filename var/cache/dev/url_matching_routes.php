<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/token/refresh' => [
            [['_route' => 'gesdinet_jwt_refresh_token'], null, null, null, false, false, null],
            [['_route' => 'esdinet_jwt_refresh_token', '_controller' => 'gesdinet.jwtrefreshtoken::refresh'], null, null, null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/clients' => [[['_route' => 'admin_clients_index', '_controller' => 'App\\Controller\\Admin\\ClientController::index'], null, null, null, true, false, null]],
        '/admin/produits' => [[['_route' => 'admin_produits_index', '_controller' => 'App\\Controller\\Admin\\ProduitsController::index'], null, null, null, true, false, null]],
        '/admin/produits/ajout' => [[['_route' => 'admin_produits_add', '_controller' => 'App\\Controller\\Admin\\ProduitsController::add'], null, null, null, false, false, null]],
        '/api/post_image' => [[['_route' => 'app_api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\CatalogueController::acceuil'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, true, false, null]],
        '/panier/delete' => [[['_route' => 'panier_delete_all', '_controller' => 'App\\Controller\\PanierController::deleteAll'], null, null, null, false, false, null]],
        '/panier/validation' => [[['_route' => 'panier_validation', '_controller' => 'App\\Controller\\PanierController::validation'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, true, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/auth' => [[['_route' => 'auth'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:111)'
                            .'|adresses(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:156)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:182)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:220)'
                                .')'
                            .')'
                            .'|c(?'
                                .'|ategories(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:272)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:298)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:336)'
                                    .')'
                                .')'
                                .'|lients(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:381)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:407)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:445)'
                                    .')'
                                .')'
                                .'|o(?'
                                    .'|efficients(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:498)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:524)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:562)'
                                        .')'
                                    .')'
                                    .'|mm(?'
                                        .'|andes(?'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:611)'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:637)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:675)'
                                            .')'
                                        .')'
                                        .'|ercials(?'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:721)'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:747)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:785)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|f(?'
                                .'|actures(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:838)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:864)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:902)'
                                    .')'
                                .')'
                                .'|ournisseurs(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:952)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:978)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1016)'
                                    .')'
                                .')'
                            .')'
                            .'|historiques(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1068)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1095)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1134)'
                                .')'
                            .')'
                            .'|livraisons(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1184)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1211)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1250)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|hotos(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1299)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1326)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1365)'
                                    .')'
                                .')'
                                .'|roduits(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1412)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1439)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1478)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/produits/(?'
                        .'|edition/([^/]++)(*:1525)'
                        .'|suppression/([^/]++)(*:1554)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1596)'
                    .'|wdt/([^/]++)(*:1617)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1664)'
                            .'|router(*:1679)'
                            .'|exception(?'
                                .'|(*:1700)'
                                .'|\\.css(*:1714)'
                            .')'
                        .')'
                        .'|(*:1725)'
                    .')'
                .')'
                .'|/cat/([^/]++)(*:1749)'
                .'|/p(?'
                    .'|roduit/([^/]++)(*:1778)'
                    .'|anier/(?'
                        .'|add/([^/]++)(*:1808)'
                        .'|remove/([^/]++)(*:1832)'
                        .'|delete/([^/]++)(*:1856)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        156 => [[['_route' => '_api_/adresses/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        182 => [
            [['_route' => '_api_/adresses{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/adresses{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        220 => [
            [['_route' => '_api_/adresses/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/adresses/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/adresses/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        272 => [[['_route' => '_api_/categories/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_operation_name' => '_api_/categories/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        298 => [
            [['_route' => '_api_/categories{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_operation_name' => '_api_/categories{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categories{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_operation_name' => '_api_/categories{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        336 => [
            [['_route' => '_api_/categories/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_operation_name' => '_api_/categories/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_operation_name' => '_api_/categories/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_operation_name' => '_api_/categories/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        381 => [[['_route' => '_api_/clients/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        407 => [
            [['_route' => '_api_/clients{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/clients{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        445 => [
            [['_route' => '_api_/clients/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/clients/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/clients/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        498 => [[['_route' => '_api_/coefficients/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Coefficient', '_api_operation_name' => '_api_/coefficients/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        524 => [
            [['_route' => '_api_/coefficients{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Coefficient', '_api_operation_name' => '_api_/coefficients{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/coefficients{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Coefficient', '_api_operation_name' => '_api_/coefficients{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        562 => [
            [['_route' => '_api_/coefficients/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Coefficient', '_api_operation_name' => '_api_/coefficients/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/coefficients/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Coefficient', '_api_operation_name' => '_api_/coefficients/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/coefficients/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Coefficient', '_api_operation_name' => '_api_/coefficients/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        611 => [[['_route' => '_api_/commandes/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        637 => [
            [['_route' => '_api_/commandes{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/commandes{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        675 => [
            [['_route' => '_api_/commandes/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/commandes/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/commandes/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        721 => [[['_route' => '_api_/commercials/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commercial', '_api_operation_name' => '_api_/commercials/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        747 => [
            [['_route' => '_api_/commercials{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commercial', '_api_operation_name' => '_api_/commercials{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/commercials{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commercial', '_api_operation_name' => '_api_/commercials{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        785 => [
            [['_route' => '_api_/commercials/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commercial', '_api_operation_name' => '_api_/commercials/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/commercials/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commercial', '_api_operation_name' => '_api_/commercials/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/commercials/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commercial', '_api_operation_name' => '_api_/commercials/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        838 => [[['_route' => '_api_/factures/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Facture', '_api_operation_name' => '_api_/factures/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        864 => [
            [['_route' => '_api_/factures{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Facture', '_api_operation_name' => '_api_/factures{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/factures{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Facture', '_api_operation_name' => '_api_/factures{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        902 => [
            [['_route' => '_api_/factures/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Facture', '_api_operation_name' => '_api_/factures/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/factures/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Facture', '_api_operation_name' => '_api_/factures/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/factures/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Facture', '_api_operation_name' => '_api_/factures/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        952 => [[['_route' => '_api_/fournisseurs/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        978 => [
            [['_route' => '_api_/fournisseurs{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/fournisseurs{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1016 => [
            [['_route' => '_api_/fournisseurs/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/fournisseurs/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/fournisseurs/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1068 => [[['_route' => '_api_/historiques/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Historique', '_api_operation_name' => '_api_/historiques/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1095 => [
            [['_route' => '_api_/historiques{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Historique', '_api_operation_name' => '_api_/historiques{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/historiques{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Historique', '_api_operation_name' => '_api_/historiques{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1134 => [
            [['_route' => '_api_/historiques/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Historique', '_api_operation_name' => '_api_/historiques/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/historiques/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Historique', '_api_operation_name' => '_api_/historiques/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/historiques/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Historique', '_api_operation_name' => '_api_/historiques/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1184 => [[['_route' => '_api_/livraisons/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_operation_name' => '_api_/livraisons/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1211 => [
            [['_route' => '_api_/livraisons{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_operation_name' => '_api_/livraisons{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/livraisons{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_operation_name' => '_api_/livraisons{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1250 => [
            [['_route' => '_api_/livraisons/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_operation_name' => '_api_/livraisons/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/livraisons/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_operation_name' => '_api_/livraisons/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/livraisons/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_operation_name' => '_api_/livraisons/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1299 => [[['_route' => '_api_/photos/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1326 => [
            [['_route' => '_api_/photos{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/photos{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1365 => [
            [['_route' => '_api_/photos/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/photos/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/photos/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1412 => [[['_route' => '_api_/produits/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1439 => [
            [['_route' => '_api_/produits{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/produits{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1478 => [
            [['_route' => '_api_/produits/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/produits/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/produits/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1525 => [[['_route' => 'admin_produits_edit', '_controller' => 'App\\Controller\\Admin\\ProduitsController::edit'], ['id'], null, null, false, true, null]],
        1554 => [[['_route' => 'admin_produits_delete', '_controller' => 'App\\Controller\\Admin\\ProduitsController::delete'], ['id'], null, null, false, true, null]],
        1596 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1617 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1664 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1679 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1700 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1714 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1725 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1749 => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CatalogueController::categorie'], ['slug'], null, null, false, true, null]],
        1778 => [[['_route' => 'produit', '_controller' => 'App\\Controller\\CatalogueController::produit'], ['slug'], null, null, false, true, null]],
        1808 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        1832 => [[['_route' => 'panier_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null]],
        1856 => [
            [['_route' => 'panier_delete', '_controller' => 'App\\Controller\\PanierController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
