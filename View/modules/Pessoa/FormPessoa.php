<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font awasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- App CSS -->
    <link rel="stylesheet" href="/View/css/style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
</head>
<body>
<fieldset>
<legend>Cadastro de Pessoa</legend>

<form method="post" action="/pessoa/form/save">

<label for="nome"> Nome:</label>
<input id="nome" name="nome" type="text"/>

<label for="cpf">CPF:</label>
<input id="cpf" name="cpf" type="number"/>

<label for="data_nascimento">Data Nascimento:</label>
<input id="data_nacimento" name="data_nascimento" type="data"/>
<button type="submit"> Salvar</button>
</form>
</fieldset>

         
</body>
</html>