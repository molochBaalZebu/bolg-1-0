@extends('master')
@section('content')
    @guest
        <div id="entrades_lab" class="col-md-9">
            Ultimas Entradas
        </div>
        <section id="entrades_out" class="col-md-9">
            @include('front.sections.entrades')
        </section>
        <style>
            #entrades {
            }
        </style>
        @else
            <div id="entrades_lab" class="col-md-9">
                <p>Ultimas Entradas</p>
            </div>
            <section id="entrades" class="col-md-9">
                @include('front.sections.entrades')
            </section>
            <section id="registre_entrada">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Nueva Entrada</div>
                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="/blog">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="titulo" class="col-md-12 control-label">Titulo</label>

                                            <div class="col-md-12">
                                                <input id="titulo" type="text" class="form-control" name="titulo"
                                                       value="{{ old('titulo') }}" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="entrada" class="col-md-12 control-label">Entrada</label>
                                            <div class="col-md-12">
                                                <textarea id="entrada" class="form-control" rows="5" name="entrada"
                                                          required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">
                                                    Enviar
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endguest
@stop
