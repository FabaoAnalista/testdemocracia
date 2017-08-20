@include('layout.header')

    @include('layout.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('title_page')
      <!-- Main content -->
        <section class="content">
          @section('conteudo')
          <h1>Excluir Projetos</h1>
          <p>Id:{{$projetos->idProjeto}}</p>
          <p>Titulo:{{$projetos->titulo}}</p>
          <p>Subtitulo:{{$projetos->subTitulo}}</p>
          <form method="post" action="/projetos/{{$projetos->idProjeto}}">
            <!-- cria tokens para as rotas -->
            {{csrf_field()}}
            <!-- cria input do tipo RAIDEN e cria a rota para o methodo pretendido-->
            {{method_field('DELETE')}}
            <input type="submit" class="btn btn-primary" value="Confirmar Exclusão">
            <a href="/projetos" class="btn btn-primary">Voltar</a>
          </form>
          @endsection
          @yield('conteudo')
          <!-- Your Page Content Here -->
        @yield('content_page')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@include ('layout.footer')
