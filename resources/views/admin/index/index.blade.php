@extends('adminlte::page')

@section('css')

@stop
@section('title', __('Inicio'))

@section('content_header')
    <h1>{{ __('Inicio') }}</h1>
@stop
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Disciplinas') }}</p>
                            <p>{{ isset($numDisciplinas) ? $numDisciplinas : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-child text-light"></i>
                        </div>
                        <a href="{{ route('admin.disciplinas.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Estilos') }}</p>
                            <p>{{ isset($numEstilos) ? $numEstilos : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sitemap text-light"></i>
                        </div>
                        <a href="{{ route('admin.estilos.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Federaciones') }}</p>
                            <p>{{ isset($numFederaciones) ? $numFederaciones : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-building text-light"></i>
                        </div>
                        <a href="{{ route('admin.federaciones.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Reglamentos') }}</p>
                            <p>{{ isset($numReglamentos) ? $numReglamentos : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book text-light"></i>
                        </div>
                        <a href="{{ route('admin.reglamentos.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <p>{{ __('Usuarios') }}</p>
                            <p>{{ isset($numUsuarios) ? $numUsuarios : 'Error' }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users text-light"></i>
                        </div>
                        <a href="{{ route('admin.usuarios.index') }}" class="small-box-footer">{{ __('Ir ') }}<i class="fas fa-arrow-circle-right"></i></a>
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
<script>
    $(document).ready(function(){

    });
</script>
@stop
