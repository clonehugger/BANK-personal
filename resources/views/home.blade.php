@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Cartera Personal de {{Auth::user()->name}}</div>

                <div class="panel-body">

<!-- Forma de registro de altas y bajas en el saldo-->
                  <form class="form">
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">Cantidad (en pesos)</label>
                    <div class="input-group">
                      <div class="input-group-addon">$</div>
                      <input required type="text" class="form-control" id="exampleInputAmount" placeholder="Cantidad (en pesos)">
                      <div class="input-group-addon">.00</div>
                    </div>
                      <br>
                    <select required class="form-control">
                      <option>Deposito</option>
                      <option>Starbucks</option>
                      <option>Comida</option>
                      <option>Uber</option>
                      <option>Fiesta</option>
                      <option>Útiles Escolares</option>
                    </select>
                  </div>
                  <button type="submit" name = "transactions" value = "positive" class="btn btn-success btn-lg btn-block">Ingreso</button>
                  <button type="submit" name = "transactions" value = "negative" class="btn btn-danger btn-lg btn-block">Gasto</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
