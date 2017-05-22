@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Saldo</div>

                <div class="panel-body">
                    <b>Balance de cuenta: </b>$
                    
<?php
$userId = Auth::user()->id;
$conn = mysqli_connect("127.0.0.1", "root", "kyubi", "homestead");
$query = mysqli_query($conn,"SELECT sum(amount) as total FROM transactions WHERE user_id=$userId");
$row = mysqli_fetch_array($query);
print $row[0];
 ?>


                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Transacciones</div>

                <div class="panel-body">
                    <b>Detalles de cuenta</b>
<?php                    
$userId = Auth::user()->id;
$conn = mysqli_connect("127.0.0.1", "root", "kyubi", "homestead");
$query = mysqli_query($conn,"SELECT category,amount,created_at FROM transactions WHERE user_id=$userId");
//$row = mysqli_fetch_array($query);
//echo "<div class='.table-responsive'>";
echo "<br><table class=table><tr><th>Category</th><th>Fecha</th><th>Cantidad</th></tr>";
while($row = mysqli_fetch_array($query))
{
$category = $row['category'];
    $cantidad = $row['amount'];
$fecha = date('M j Y', strtotime($row['created_at']));
echo "<tr><td>".$category."</td><td>".$fecha."</td><td>$".$cantidad.".00</td></tr>";
}
echo "</table>";
?>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Porcentaje de Gastos </div>

                <div class="panel-body">
                    <b>Gastos</b>
<?php                    
$userId = Auth::user()->id;
$conn = mysqli_connect("127.0.0.1", "root", "kyubi", "homestead");
$query = mysqli_query($conn,"SELECT sum(amount) as total FROM transactions WHERE user_id=$userId and amount<0");
$row = mysqli_fetch_array($query);
$total = $row['total'];

$query = mysqli_query($conn,"SELECT sum(amount) as total FROM transactions WHERE user_id=$userId and category='Starbucks'");                    
$row = mysqli_fetch_array($query);                    
$sb= $row['total'];
//
$query = mysqli_query($conn,"SELECT sum(amount) as total FROM transactions WHERE user_id=$userId and category='Comida'");                    
$row = mysqli_fetch_array($query);                    
$com= $row['total'];
//    
$query = mysqli_query($conn,"SELECT sum(amount) as total FROM transactions WHERE user_id=$userId and category='Uber'");                    
$row = mysqli_fetch_array($query);                    
$ub= $row['total'];
//    
$query = mysqli_query($conn,"SELECT sum(amount) as total FROM transactions WHERE user_id=$userId and category='Fiesta'");                    
$row = mysqli_fetch_array($query);                    
$fs= $row['total'];
//    
$query = mysqli_query($conn,"SELECT sum(amount) as total FROM transactions WHERE user_id=$userId and category='Utiles Escolares'");                    
$row = mysqli_fetch_array($query);                    
$ue= $row['total'];
//    
echo "<br><table class=table><tr><th>Category</th><th>Porcentaje</th></tr>"; 
echo "<tr><td>Starbucks</td><td>".($sb/$total*100)."%</td></tr>";  
echo "<tr><td>Comida</td><td>".($com/$total*100)."%</td></tr>";  
echo "<tr><td>Uber</td><td>".($ub/$total*100)."%</td></tr>";  
echo "<tr><td>Fiesta</td><td>".($fs/$total*100)."%</td></tr>";  
echo "<tr><td>Utiles Escolares</td><td>".($ue/$total*100)."%</td></tr>";  

echo "</table>";
                     
                    
?>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>



@endsection