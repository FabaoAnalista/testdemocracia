@extends('layout.app')
@section('content_page')

          <h1>Excluir Projetos</h1>
          <p>Id: {{$projetos->idProjeto}}</p>
          <p>Título :{{$projetos->titulo}}</p>
          <p>Sub-título :{{$projetos->subTitulo}}</p>
          <form method="post" action="/projetos/{{$projetos->idProjeto}}">
            <!-- cria tokens para as rotas -->
            {{csrf_field()}}
            <!-- cria input do tipo RAIDEN e cria a rota para o methodo pretendido-->
            {{method_field('DELETE')}}
            <input type="submit" class="btn btn-primary" value="Confirmar Exclusão">
            <a href="/projetos" class="btn btn-primary">Voltar</a>
          </form>
@endsection