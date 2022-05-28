
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<style type="text/css">
body {
    background-color: #e0ffff;
}h2{
    font-size:45px;
}</style>
<body>
    <h2>Contato</h2>
<div>
    <form action="processa.php" method="POST">
        <label for="">Nome</label><br>
        <input type="text" name="nome" id="" required><br>
        <label for="">Email</label><br>
        <input type="text" name="assunto" id="" required><br>
        <label for="">Mensagem</label><br>
        <textarea name="mensagem" id="textarea" cols="30" rows="10" required></textarea><br><br>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>