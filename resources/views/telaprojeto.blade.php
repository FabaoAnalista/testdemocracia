@extends('layout.app')

@section('content_page')
          <!-- ifs para separar a exclusao de votacao -->
          <!-- @if (Auth::user()->type==2) -->
          <h1>Votação</h1>
          <div class="container-fluid">
            <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <p>NOME DO PROJETO</p><br>
                    <p>TITULO</p><br>
                    <p>DESCRIÇÃO<br>
                      <div class="container">
                          <div class='col-md-2'>
                              <div class="form-group">
                                  <div class='input-group date' id='datetimepicker6'>
                                      <input type='text' class="form-control" />
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class='col-md-2'>
                              <div class="form-group">
                                  <div class='input-group date' id='datetimepicker7'>
                                      <input type='text' class="form-control" />
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <form class="votar">
                      <a href="/projetos" class="btn btn-warning">Votar</a>
                      <a href="/projetos" class="btn btn-primary">Outros projetos</a>
                    </form>
                </div>
                  <div class="col-md-6">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan, massa tincidunt porttitor viverra,
                            diam magna varius tellus, ac tincidunt ligula mi nec arcu. In ac nisl vehicula, luctus nulla nec, pulvinar ante.
                            Cras in eros ac eros faucibus efficitur. Nam efficitur, dolor aliquam blandit venenatis, velit orci iaculis enim,
                            eget commodo magna justo ac risus. Nullam accumsan, justo ac consequat gravida, lectus tellus mollis metus,
                            sed interdum mi nisi vitae dolor. </p>
                  </div>
                  <!-- @else -->
                  <a href="/projetos" class="btn btn-primary">Outros projetos</a>
                <!--@endif -->
            </div>
            @endsection
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker6').datetimepicker();
                    $('#datetimepicker7').datetimepicker({
                        useCurrent: false //Important! See issue #1075
                    });
                    $("#datetimepicker6").on("dp.change", function (e) {
                        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
                    });
                    $("#datetimepicker7").on("dp.change", function (e) {
                        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
                    });
                });
    </script>

<footer>
          </footer>
