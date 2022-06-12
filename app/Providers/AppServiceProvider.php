<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            //Navbar
            if(auth()->user()->tipo == "Administrador") {
                $event->menu->add(
                    [
                        'text' => __('Inicio'),
                        'icon' => 'fas fa-fw fa-home',
                        'url' => '/admin',
                    ]
                );
            }

            if(auth()->user()->tipo == "Normal") {
                $event->menu->add(
                    [
                        'text' => __('Inicio'),
                        'icon' => 'fas fa-fw fa-home',
                        'url' => '/usuario',
                    ]
                );
            }

            //Sidebar
            $event->menu->add(
                [
                    'type' => 'sidebar-menu-search',
                    'text' => __('Buscar'),
                ]
            );

            if(auth()->user()->tipo == "Administrador"){
                $event->menu->add(
                    [
                        'text'    => __('Artes Marciales'),
                        'icon'    => 'fas fa-fw fa-child',
                        'submenu' => [
                            [
                                'text' => 'Disciplinas',
                                'url'  => '/admin/disciplinas',
                            ],
                            [
                                'text' => 'Estilos',
                                'url'  => '/admin/estilos',
                            ],
                            [
                                'text' => 'Federaciones',
                                'url'  => '/admin/federaciones',
                            ],
                            [
                                'text' => 'Reglamentos',
                                'url'  => '/admin/reglamentos',
                            ],
                        ],
                    ],
                    [
                        'text'    => __('Usuarios'),
                        'icon'    => 'fas fa-fw fa-users',
                        'url'  => '/admin/usuarios',
                    ],
                    [
                        'text'    => __('Cuotas'),
                        'icon'    => 'fas fa-fw fa-credit-card',
                        'url'  => '/admin/cuotas',
                    ],
                    [
                        'text'    => 'Gimnasios',
                        'icon'    => 'fas fa-fw fa-university',
                        'url'  => '/admin/gimnasios',
                    ],
                    [
                        'text'    => 'Cursos',
                        'icon'    => 'fas fa-fw fa-graduation-cap',
                        'url'  => '/admin/cursos',
                    ],
                    [
                        'text'    => 'Campeonatos',
                        'icon'    => 'fas fa-fw fa-trophy',
                        'url'  => '/admin/campeonatos',
                    ],
                    [
                        'text'    => 'Arbitros',
                        'icon'    => 'fas fa-fw fa-user',
                        'url'  => '/admin/arbitros',
                    ],
                    [
                        'text'    => 'Tienda',
                        'icon'    => 'fas fa-fw fa-shopping-cart',
                        'submenu' => [
                            [
                                'text' => 'Tienda',
                                'url'  => '/tienda',
                            ],
                            [
                                'text' => 'Productos',
                                'url'  => '/admin/productos',
                            ],
                            [
                                'text' => 'Categorias',
                                'url'  => '/admin/categorias',
                            ],
                            [
                                'text' => 'Marcas',
                                'url'  => '/admin/marcas',
                            ],
                        ],
                    ],
                );
            }
            if(auth()->user()->tipo == "Normal"){
                $event->menu->add(
                    [
                        'text'    => __('Artes Marciales'),
                        'icon'    => 'fas fa-fw fa-child',
                        'submenu' => [
                            [
                                'text' => 'Disciplinas',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Federaciones',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Reglamentos',
                                'url'  => '#',
                            ],
                        ],
                    ],
                    [
                        'text'    => 'Gimnasio',
                        'icon'    => 'fas fa-fw fa-university',
                        'url'  => '#',
                    ],
                    [
                        'text'    => 'Cursos',
                        'icon'    => 'fas fa-fw fa-graduation-cap',
                        'url'  => '#',
                    ],
                    [
                        'text'    => 'Campeonatos',
                        'icon'    => 'fas fa-fw fa-trophy',
                        'url'  => '#',
                    ],
                    [
                        'text'    => 'Tienda',
                        'icon'    => 'fas fa-fw fa-shopping-cart',
                        'url'  => '/tienda',
                    ],
                );
            }
        });
    }
}
