<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        
        Label, input {display: block}
        </style>
</head>
<body>
<fieldset>
<legend>Cadastro de Pessoa</legend>

<form method="post" action="/pessoa/form/save">

<label> for="nome"> Nome:</label>
<input id="nome" name="nome" type="text"/>

<label> for="cpf">CPF:</label>
<input id="cpf" name="cpf" type="numberS"/>

<label> for="data_nascimento"Data Nascimento:</label>
<input id="data_nacimento" name="data_nascimento" type="data"/>
<button type="submit"> Salvar</button>
</fieldset>

         
</body>
</html>