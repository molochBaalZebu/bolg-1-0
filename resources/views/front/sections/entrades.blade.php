@if(Session::has('message'))
    <div id="message">
        <div>
            <p class="panel-heading">@lang('auth.title')</p>
            <h3>{{Session::get('message')}}</h3>
            <button class="btn btn-primary">Aceptar</button>
        </div>
    </div>
@endif
@if(!empty($blogs))
    @foreach($blogs as $entradas)
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="/blog/entries/{{$entradas->id}}">
                                <h3>{{$entradas->blog_titulo}}</h3>
                            </a>
                        </div>
                        <div class="panel-body">
                            <div id="usuari_nom" class="col-md-12">
                                <p>{{$entradas->blog_entrada}}</p>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <p>Usuario:
                                <a href="/blog/users/{{$entradas->user_name}}">
                                    <strong>{{ucfirst($entradas->user_name)}}</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif