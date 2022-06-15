@extends('adminlte::page')

@section('title', __('Gimnasios'))

@section('content_header')
    <h1>{{ __('Mis gimnasios') }}</h1>
@stop
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <section class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Mis disciplinas') }}</p>
                            <p>{{ isset($numMisDisciplinas) ? $numMisDisciplinas : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-child text-light"></i>
                        </div>
                        <a href="{{ route('usuario.aamm.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-3">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Mis gimnasios') }}</p>
                            <p>{{ isset($numMisGimnasios) ? $numMisGimnasios : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-university text-light"></i>
                        </div>
                        <a href="{{ route('usuario.gimnasios.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Cursos disponibles') }}</p>
                            <p>{{ isset($numMisCursosDisponibles) ? $numMisCursosDisponibles : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-graduation-cap text-light"></i>
                        </div>
                        <a href="{{ route('usuario.cursos.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Mi perfil') }}</p>

                        </div>
                        <div class="icon">
                            <i class="fas fa-users text-light"></i>
                        </div>
                        <a href="{{ route('usuario.perfil.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Mis compañeros') }}</p>
                            <p>{{ isset($numUsuarios) ? $numUsuarios : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users text-light"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Cuotas') }}</p>
                            <p>{{ isset($numCuotas) ? $numCuotas : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-credit-card text-light"></i>
                        </div>
                        <a href="{{ route('admin.cuotas.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Campeonatos') }}</p>
                            <p>{{ isset($numCampeonatos) ? $numCampeonatos : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-trophy text-light"></i>
                        </div>
                        <a href="{{ route('admin.campeonatos.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Arbitros') }}</p>
                            <p>{{ isset($numArbitros) ? $numArbitros : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user text-light"></i>
                        </div>
                        <a href="{{ route('admin.arbitros.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Gimnasios') }}</p>
                            <p>{{ isset($numGimnasios) ? $numGimnasios : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-university text-light"></i>
                        </div>
                        <a href="{{ route('admin.gimnasios.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Cursos') }}</p>
                            <p>{{ isset($numCursos) ? $numCursos : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-graduation-cap text-light"></i>
                        </div>
                        <a href="{{ route('admin.cursos.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Productos') }}</p>
                            <p>{{ isset($numProductos) ? $numProductos : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart text-light"></i>
                        </div>
                        <a href="{{ route('admin.productos.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Marcas') }}</p>
                            <p>{{ isset($numMarcas) ? $numMarcas : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-trademark text-light"></i>
                        </div>
                        <a href="{{ route('admin.marcas.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Categorias') }}</p>
                            <p>{{ isset($numCategorias) ? $numCategorias : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-map-signs text-light"></i>
                        </div>
                        <a href="{{ route('admin.categorias.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script>
        $(document).ready(function (){

        });
    </script>
@stop
