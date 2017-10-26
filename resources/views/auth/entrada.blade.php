@extends('master')
@section('content')
    @foreach($user as $user_entries)
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="/blog/entries/{{$user_entries->id}}">
                                <h3>{{$user_entries->blog_titulo}}</h3>
                            </a>
                        </div>
                        <div class="panel-body">
                            <div id="usuari_nom" class="col-md-12">
                                <p>{{$user_entries->blog_entrada}}</p>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <p>Usuario:
                                <a href="/blog/users/{{$user_entries->user_name}}">
                                    <strong>{{ucfirst($user_entries->user_name)}}</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop
