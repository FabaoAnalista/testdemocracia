@include('layout.header')
    @include('layout.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('Painel')
        <!-- Main content -->
        <section class="content">
              <div class="jumbotron text-center">
                  <h1>Painel de Projetos para Votação</h1>
              </div>
                <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Código</th>
                          <th>Titulo</th>
                          <th>Subtitulo</th>
                          <th>Desciçao</th>
                          <th>metaVotos</th>
                          <th>Votar</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                      </tbody>
                      </table>
                      @yield('content_page')
          </section><!-- /.content -->
      </div>

@include ('layout.footer')
