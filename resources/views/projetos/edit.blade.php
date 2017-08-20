@include('layout.header')
    @include('layout.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('title_page')
        <section class="content">
          @section('conteudo')
          <div class="jumbotron text-center">
            <h1>Editar Projetos</h1>
          </div>
          </div>
              <div class="row">
                <div class="col-sm-4">
                  <form method ="post" action="/projetos/{{$projetos->id}}" class="horizontal">
                    <!-- comando para reconhecer o cliente -->
                    {{csrf_field()}}
                    <!-- conversão do metodo post -->
                    {{method_field('PATCH')}}
                    <div class="form-group">
                      <label for="nome" class="control-label">Titulo</label>
                      <input type="text" name="titulo" class="form-control" placeholder="titulo" value="{{$projetos->titulo}}">
                    </div>
                    <div class="form-group">
                      <label for="subtitulo">Subtitulo</label>
                      <input type="text" name="subtitulo" class="form-control" placeholder="subtitulo" value="{{$projetos->subtitulo}}">
                    </div>
                    <div class="form-group">
                      <label for="descricao">Descricao</label>
                      <input type="text" name="descricao" class="form-control" placeholder="descricao" value="{{$projetos->descricao}}">
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                      <input type="number" name="status" class="form-control" placeholder="status" value="{{$projetos->status}}">
                    </div>
                    <input type="submit" name ="botaoSalvar" value="Salvar">
                  </div>
              </div>
          @endsection
        @yield('conteudo')
        <!-- Your Page Content Here -->
      @yield('content_page')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@include ('layout.footer')
