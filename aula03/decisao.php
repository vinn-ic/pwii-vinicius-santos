<form type="get" action="decisao.php">

    <label>nota 1: </label>
        <input type="number" name="nota1" required>
        <br><br>

        <label>nota 2: </label>
        <input type="number" name="nota2" required>
        <br><br>
    
    <input type="submit" value="enviar">

</form>

<?php 
if(!isset($_GET['nota1']) || !isset($_GET['nota2'])){
    return;
}

$nota1 = (int) $_GET['nota1'];
$nota2 = (int) $_GET['nota2'];

$media = ($nota1 + $nota2)/2; 

echo "a media é: {$media}";
?>