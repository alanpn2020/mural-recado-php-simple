<?php
require 'config.php';
require 'adicionar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Crud PHP Simple</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<script type="text/javascript" src="assets/javascript/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>

<form method="POST">
	Nome:</br>
	<input type="text" name="name"/><br/><br/>
	Titulo:<br/>
	<input type="text" name="title" /><br/><br/>
	Mensagem:<br/>
	<textarea name="message" rows="4" cols="90"></textarea><br/>
	<input type="submit" class="btn btn-primary" value="Adicionar Recado">
</form>
<br>


	<?php
	$sql = "SELECT * FROM recado";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0) {
		foreach($sql->fetchAll() as $recado) {
			echo '<table border="0" width="50%">';
			echo '<tr class="table-danger">';
			echo '<td><b>Título: </b> '.$recado['title'].'</td>';
			echo '</tr>';
			echo '<tr class="table-info">';
			echo '<td>Nome: '.$recado['name'].'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>'.$recado['message'].'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td><a href="excluir.php?id='.$recado['id'].'">Excluir Recado</a></td>';
			echo '</tr>';
			echo '</table>';
			echo '<br>';
		}
	}
	?>


<body>

</html>






