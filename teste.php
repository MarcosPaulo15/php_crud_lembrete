<?php	
    session_start();	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .ClasseTexto {color: blue;}
    </style>
    <link rel="stylesheet" type="text/css" href="tarefas/style.css">

    <title>Document</title>
</head>
<body>
    
    <form>
        <fieldset>
            <legend>Nova	tarefa</legend>
            <label>
                Tarefa:
                <input	type="text" name="nome"	/>
            </label>
            <input	type="submit" value="Cadastrar"	/>
        </fieldset>
    </form>

    <?php
    if	(array_key_exists('nome',	$_GET))	{
            $_SESSION['lista_tarefas'][]	=	$_GET['nome'];
    }
        $lista_tarefas	=	[];
    if	(array_key_exists('lista_tarefas',	$_SESSION))	{
            $lista_tarefas	=	$_SESSION['lista_tarefas'];
    }
    ?>

<table>
    <tr>
        <th>Tarefas</th>
    </tr>
    <?php foreach	($lista_tarefas as $tarefa)	:	?>
            <tr>
                <td><?php	echo $tarefa;	?></td>
            </tr>
    <?php	endforeach;	?>
</table>

</body>
</html>

