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

    require_once 'conexao.php';

    $banco = new db();

    $link = $banco->conecta_mysql();

    $sql = 'SELECT * FROM funcionarios_grat';

    $consulta = mysqli_query($link,$sql);

  



    //DEFINE O NOME DO ARQUIVO
    $arquivo = 'aval_gcm.xls';

    //CRIAMOS UMA TABELA HTML COM O FORMATO DA PLANILHA
    $html = '';
    $html.= '<table border="1">';
    $html.= '<tr>';
    $html.= '<td colspan="16">Valores da GCM após avaliação</td>';
    $html.= '</tr>';

    $html.= '<tr>';
    $html.= '<td> Matrícula </td>';
    $html.= '<td> Funcionário </td>';
    $html.= '<td> Função </td>';
    $html.= '<td> Organograma </td>';
    $html.= '<td> Valor_Grat </td>';
    $html.= '<td> Período_aval </td>';
    $html.= '<td> CPF_chefia </td>';
    $html.= '<td> Nome_chefia </td>';
    $html.= '<td> Atrasos </td>';
    $html.= '<td> Faltas </td>';
    $html.= '<td> Cooperacao </td>';
    $html.= '<td> Eficiência </td>';
    $html.= '<td> Total_pontos </td>';
    $html.= '<td> porcentagem </td>';
    $html.= '<td> grat_final </td>';
    $html.= '<td> Status </td>';
    $html.= '</tr>';

    if($consulta){
        while($resultado_consulta = mysqli_fetch_assoc($consulta)){

            $html.= '<tr>';
            $html.= '<td>'.$resultado_consulta["matricula"].'</td>';
            $html.= '<td>'.$resultado_consulta["nome_func"].'</td>';
            $html.= '<td>'.$resultado_consulta["funcao_func"].'</td>';
            $html.= '<td>'.$resultado_consulta["organograma"].'</td>';
            $html.= '<td>'.$resultado_consulta["valor_grat"].'</td>';
            $html.= '<td>'.$resultado_consulta["periodo_aval"].'</td>';
            $html.= '<td>'.$resultado_consulta["cpf_chefia"].'</td>';
            $html.= '<td>'.$resultado_consulta["nome_chefia"].'</td>';
            $html.= '<td>'.$resultado_consulta["atrasos"].'</td>';
            $html.= '<td>'.$resultado_consulta["falta"].'</td>';
            $html.= '<td>'.$resultado_consulta["cooperacao"].'</td>';
            $html.= '<td>'.$resultado_consulta["eficiencia"].'</td>';
            $html.= '<td>'.$resultado_consulta["total_pontos"].'</td>';
            $html.= '<td>'.$resultado_consulta["porcentagem"].'</td>';
            $html.= '<td>'.$resultado_consulta["grat_final"].'</td>';
            $html.= '<td>'.$resultado_consulta["status"].'</td>';
    
            $html.= '</tr>';

        }

      
    }else{
        echo 'Erro ao tentar se conectar ao banco de dados!';
        die();
    }

 

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