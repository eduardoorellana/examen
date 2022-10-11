<!-- mostrar actividades sentencia preparada-->
<?php

try
{

$base = new PDO('mysql:host=localhost; dbname=registro', 'root','');
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$base->exec("SET CHARACTER SET Utf8");

$sql = "SELECT nombre,email,fono,cursos FROM datos";
$resultado = $base->prepare($sql);

$resultado->execute(array('datos'));

while($datos=$resultado->fetch(PDO::FETCH_ASSOC))
{

echo '<tr>';

echo '<td>' .$datos['nombre']. '</td>';
echo '<td>' .$datos['email']. '</td>';
echo '<td>' .$datos['fono']. '</td>';
echo '<td>' .$datos['cursos']. '</td>';

 


echo '</tr>';
}

}
catch(Exception $e)
{
die("Error" . $e->GetMessage());
}
finally
{
$base=null;
}


      





?>
