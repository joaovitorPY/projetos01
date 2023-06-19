<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>formulario</title>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="formulario.css">
</head>
<body>

<form method="post" action="cadastrar.php">
		<div class="cadastro">
		<h2>Cadastro de usuário</h2>
		<input type="text" name="nome" placeholder="nome" required>
		
		<input type="email" name="email" placeholder="email" required>

		<input type="password"  name="senha" placeholder="senha" required>
		
		<input type="submit" class="btn btn-primary btn-block btn-large" value="Cadastrar">
</form>
</div>
    
</body>
</html>