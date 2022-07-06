<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>

<?php 


echo $_POST['estado']; 
echo "</br>";	
		
// Verifica se usuário escolheu vários estados
if(isset($_POST["estados"]))
{
    echo "O(s) Estadoso(s) selecionados são:<br>";
    // Faz loop para os livros
    foreach($_POST["estados"] as $estados)
    {
        echo "- " . $estados . "<br>";
    }
}
else
{
    echo "Você não escolheu nenhum estado!";
}
	
?>

</body>
</html>