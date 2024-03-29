<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'Projet Labs',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => 'Project',
    'logo_img' => 'img/logo.png',
    'logo_img_class' => 'brand-image',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Extra Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#66-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_header' => 'container-fluid',
    'classes_content' => 'container-fluid',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand-md',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#67-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#68-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#69-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#610-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#611-menu
    |
    */

    'menu' => [

        [
            'text' => 'Retourner au site',
            'url' => '/',
            'icon' => 'fas fa-undo'
        ],
        [
            'text'=>'Profil',
            'icon'=>'fas fa-user-cog',
            'url'=>'profile'
        ],
        [
            'can'=>'manage-user',
            'text' => 'User Management',
            'icon' => 'fas fa-fw fa-user',
            'submenu' => [
                [
                    'text' => 'Role',
                    'url'  => 'admin/role',
                    'icon' => 'fas fa-fw fa-user-tag',
                    'can'=>'admin',
                ],
                [
                    'text' => 'Users',
                    'url'  => 'admin/user',
                    'icon' => 'fas fa-fw fa-users',
                    'can'=>'ceo'
                ],
                [
                    'text' => 'Changement',
                    'url'  => 'admin/changement',
                    'icon' => 'fas fa-fw fa-save',
                    'can'=>'change'
                ],
            ]
        ],
        [
            'can'=>'manage-article',
            'text' => 'Article Management',
            'icon' => 'fas fa-newspaper',
            'submenu' => [
                [
                    'text' => 'Article',
                    'url'  => 'admin/article',
                    'icon' => 'fas fa-fw fa-newspaper',
                    'can'=>'add-article'
                ],
                [
                    'text' => 'Categorie',
                    'url'  => 'admin/categorie',
                    'icon' => 'fas fa-fw fa-list-ul',
                    'can'=>'admin'
                ],
                [
                    'text' => 'Tag',
                    'url'  => 'admin/tag',
                    'icon' => 'fas fa-fw fa-tags',
                    'can'=>'admin'
                ],
                [
                    'text' => 'Comment',
                    'url'  => 'admin/comment',
                    'icon' => 'fas fa-fw fa-comment',
                    'can'=>'admin'
                ],
            ]
        ],

        [
            'text' => 'Mail Management',
            'icon' => 'fas fa-fw fa-mail-bulk',
            'can'=>'admin',
            'submenu' => [
                [
                    'text' => 'Newsletter',
                    'url'  => 'admin/newsletter',
                    'icon' => 'fas fa-fw fa-envelope',
                    'can'=>'admin'
                ],
                [
                    'text' => 'Messages',
                    'url'  => 'admin/formulaire',
                    'icon' => 'fas fa-fw fa-envelope-square',
                    'can'=>'admin'
                ],
            ]
        ],
        [
            'text'=>'Website Settings',
            'icon'=>'fas fa-globe',
            'can'=>'admin',
            'submenu'=>[
                [
                    'text' => 'Accueil',
                    'url'  => 'admin/accueil',
                    'icon' => 'fas fa-fw fa-home',
                    'can'=>'admin'
                ],
        
                [
                    'text' => 'Blog',
                    'url'  => 'admin/blog',
                    'icon' => 'fas fa-fw fa-blog',
                    'can'=>'admin'
                ],
                [
                    'text' => 'Carousel',
                    'url'  => 'admin/carousel',
                    'icon' => 'fas fa-fw fa-images',
                    'can'=>'admin'
                ],
                
        
        
                [
                    'text' => 'Contact',
                    'url'  => 'admin/contact',
                    'icon' => 'fas fa-fw fa-phone-alt',
                    'can'=>'admin'
                ],
                [
                    'text' => 'Footer',
                    'url'  => 'admin/footer',
                    'icon' => 'fas fa-fw fa-copyright',
                    'can'=>'admin'
                ],
        
        
                [
                    'text' => 'Services',
                    'url'  => 'admin/service',
                    'icon' => 'fas fa-fw fa-cogs',
                    'can'=>'admin'
                ],
                [
                    'text' => 'Page Service',
                    'url'  => 'admin/servicepage',
                    'icon' => 'fab fa-fw fa-servicestack',
                    'can'=>'admin'
                ],
        
        
                [
                    'text' => 'Testimonial',
                    'url'  => 'admin/testimonial',
                    'icon' => 'fas fa-fw fa-comment',
                    'can'=>'admin'
                ],
            ]
        ],
        

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#612-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#613-plugins
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
