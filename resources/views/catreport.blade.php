@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Cartera Personal de {{Auth::user()->name}}</div>

                <div class="panel-body">

<!-- Forma para generar reporte con transacciones de x categoria-->
                  <form class="form" action='' method="post">
                  <div class="form-group">
                      Seleccione la categoria de la cual desea visualizar todas las transacciones.<br><br>
                    <select required class="form-control" name="categoria" >
                      <option>Starbucks</option>
                      <option>Comida</option>
                      <option>Uber</option>
                      <option>Fiesta</option>
                      <option>Útiles Escolares</option>
                    </select>
                  </div>
                  <button type="submit" name = "reporteCategoria" class="btn btn-success btn-lg btn-block">Generar Reporte</button>
                  <input type="submit" name="insert" value="Insert" />

                  </form>


<?php

if(isset($_POST['reporteCategoria'])){
$category=$_POST['categoria'];
echo $category;

}
$userId = Auth::user()->id;
$conn = mysqli_connect("127.0.0.1", "root", "kyubi", "homestead");
$query = mysqli_query($conn,"SELECT amount,created_at FROM transactions WHERE user_id=$userId and category='Fiesta'");
//$row = mysqli_fetch_array($query);
//echo "<div class='.table-responsive'>";
echo "<br><table class=table><tr><th>Fecha</th><th>Cantidad</th></tr>";
while($row = mysqli_fetch_array($query))
{
$cantidad = $row['amount'];
$fecha = date('M j Y', strtotime($row['created_at']));
echo "<tr><td>".$fecha."</td><td>$".$cantidad.".00</td></tr>";
}
echo "</table>";



 ?>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
