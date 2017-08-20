@extends('layout.app')
@section('content_page')
 <div class="jumbotron text-center">
                  <h1>Usuários do Sistema</h1>
              </div>
              <a class="btn btn-primary" href="/users/create">Inserir ADM</a>
                  <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Código</th>
                          <th>Nome</th>
                          <th>Título de Eleitor</th>
                          <th>CPF</th>
                          <th>Data de Nascimento</th>
                          <th>Editar</th>
                          <th>Excluir</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($users as u)
                      <tr>
                      <td>{{$u->id}}</td>
                      <td>{{$u->name}}</td>
                      <td>{{$u->titEleitor}}</td>
                      <td>{{$u->cpf}}</td>
                      <td>{{$u->dataNascimento}}</td>
                      <td><a href="/users/{{ $u->id}}/edit"><i class="fa fa-pencil fa-fw"></i>Editar</a></td>
                      <td><a href="/users/{{ $u->id }}"><i class="fa fa-trash-o fa-fw"></i> Excluir</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
@endsection