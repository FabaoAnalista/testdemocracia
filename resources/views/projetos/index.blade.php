@include('layout.header')

    @include('layout.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('Exibe Projetos')
        <!-- Main content -->
        <section class="content">
          @section('conteudo')
              <div class="jumbotron text-center">
                  <h1>Exibe Projetos</h1>
              </div>
              <a class="btn btn-primary" href="/projetos/create">Inserir</a>
                  <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Código</th>
                          <th>Titulo</th>
                          <th>Subtitulo</th>
                          <th>metaVotos</th>
                          <th>Editar</th>
                          <th>Excluir</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($projetos as $p)
                    <tr>
                      <td>{{$p->id }}</td>
                      <td>{{$p->titulo }}</td>
                      <td>{{$p->subtitulo }}</td>
                        <td>{{$p->metaVotos }}</td>
                      <td><a href="/projetos/{{ $p->id }}edit"><i class="fa fa-pencil fa-fw"></i>Editar</a></td>
                      <td><a href="/projetos/{{ $p->id }}"><i class="fa fa-trash-o fa-fw"></i> Excluir</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
          @endsection
        @yield('conteudo')
      @yield('content_page')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@include ('layout.footer')
