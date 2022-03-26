<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Planilha</title>
</head>
<body>
    <?php

    //DEFINE O NOME DO ARQUIVO
    $arquivo = 'msgcontatos.xls';

    //CRIAMOS UMA TABELA HTML COM O FORMATO DA PLANILHA
    $html = '';
    $html.= '<table border="1">';
    $html.= '<tr>';
    $html.= '<td colspan="5">Planilha Mensagens de Contatos</td>';
    $html.= '</tr>';

    $html.= '<tr>';
    $html.= '<td> ID </td>';
    $html.= '<td> Nome </td>';
    $html.= '<td> E-mail </td>';
    $html.= '<td> Assunto </td>';
    $html.= '<td> Data </td>';
    $html.= '</tr>';

    $html.= '<tr>';
    $html.= '<td> 1 </td>';
    $html.= '<td> Tomas Edson </td>';
    $html.= '<td> tomas@gmail.com </td>';
    $html.= '<td> Novo cadastro criado </td>';
    $html.= '<td> 26/03/2022 </td>';
    $html.= '</tr>';

    $html.= '<tr>';
    $html.= '<td> 2 </td>';
    $html.= '<td> Gabriel da Silva </td>';
    $html.= '<td> gabriel@gmail.com </td>';
    $html.= '<td> Novo cadastro Gabriel </td>';
    $html.= '<td> 20/03/2022 </td>';
    $html.= '</tr>';

    $html.= '<tr>';
    $html.= '<td> 3 </td>';
    $html.= '<td> Joelma Ribeiro </td>';
    $html.= '<td> joelma@gmail.com </td>';
    $html.= '<td> Novo cadastro Joelma </td>';
    $html.= '<td> 29/02/2022 </td>';
    $html.= '</tr>';

    $html.= '</table>';
   
   // Configurações header para forçar o download
		header ("Expires: Mon, 07 Jul 2016 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit;?>
    
</body>
</html>