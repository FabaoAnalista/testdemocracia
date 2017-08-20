@extends('layout.app')
@section('content_page')
          <!-- ifs para separar a exclusao de votacao -->
          @if (Auth::user()->type==1)
          <h1>Excluir Projetos</h1>
          @else 
          <h1>Projeto: {{$projetos->titulo}}</h1>
          <h2>{{$projetos->descriçao}}</h2>
          @endif
          <p>Id: {{$projetos->idProjeto}}</p>
          <p>Título :{{$projetos->titulo}}</p>
          <p>Sub-título :{{$projetos->subTitulo}}</p>
          @if (Auth::user()->type==1)

          <form method="post" action="/projetos/{{$projetos->idProjeto}}">
            <!-- cria tokens para as rotas -->
            {{csrf_field()}}
            <!-- cria input do tipo RAIDEN e cria a rota para o methodo pretendido-->
            {{method_field('DELETE')}}
            <input type="submit" class="btn btn-primary" value="Confirmar Exclusão">
            <a href="/projetos" class="btn btn-primary">Voltar</a>
          </form>



          @else 
            <form method="post" action="/projetos/{{$projetos->idProjeto}}">
            <input type="submit" class="btn btn-warning" value="Votar">
            <a href="/projetos" class="btn btn-primary">Outros projetos</a>
          @endif
@endsection