<?php
require_once 'dados/post.php';

$id = 1;

function geradorId()
{

    static $contador = 0;
    $contador++;

    return  $contador;
}


function slug(string $texto) 
{
    $mapa['a'] = 'àáâãäèéêëìíîïòóôõöùúûüçñÀÁÂÃÄÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÇÑ!"#$%&\'()*+,-\'\./:;<=>?@[\\]^_`{|}~ <>';

    $mapa['b'] = 'aaaaaeeeeiiiiooooouuuucnAAAAAEEEEIIIIOOOOOUUUUCN';

    //($utf8_string, 'ISO-8859-1', 'UTF-8');
    
    // funcao para transcrever caracteres
    $slug = strtr(utf8_decode($texto), utf8_decode($mapa['a']), $mapa['b']);
    
    $slug = str_replace(' ', '-',$slug);

    return $slug;
}


function formantandoData(string $data) 
{
    date_default_timezone_set('America/Sao_Paulo');

    $datar = strtotime($data);
    $agora = time();

    $diferença = $agora - strtotime($data);

    $segundos =  $diferença;
    $minutos = round($diferença / 60);
    $hora = round($diferença / 3600);
    $dia = round($diferença / 86400);
    

    if($segundos <= 60) {
        return "agora";
        
    }
    if($minutos <= 60) {
        return $minutos == 1 ? "há 1 minuto " : "há ". $minutos. " minutos";
    }
    if($hora <= 24){
        return $hora == 1 ? "há 1 hora " : "há ". $hora. " horas";
    }
    if($dia <= 6){
        return  $dia == 1 ? "há 1 dia " : "há ".$dia." dias";
    }
    

    $semana = ['domingo','segunda-feira','terça-feira','quarta-feira','quinta-feira','sexta-feira','sabado'];
    $meses = ['janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro'];

    $diaMes = date('d', $datar);
    $diaSemana = date('w',$datar);
    $mes = date('n',$datar) - 1;
    $ano = date('Y',$datar);
    
    return $semana[$diaSemana]. " dia ". $diaMes. " de ". $meses[$mes]. " de ". $ano;
}



/**
 * 
 * @param string $context e aonde fica o texto do poster
 * @param int $limite e limitação de caracteres que pode aparecer
 * @param string $continuacao e oq sera incrito apos o limite como (clique para ver tudo, ler mais etc)
 * @return string retorno
 * 
 */
function resumo(string $context,int $limite, string $continuacao = ".....", string $slug) : string
{
    $textolimpo = trim($context);

    if(mb_strlen($textolimpo) <= $limite){
        return $textolimpo;
    }

    $lower = strtolower($slug);

    $resumido = mb_substr($textolimpo, 0, mb_strrpos(mb_substr($textolimpo,0,$limite), ' '));

    return $resumido." "."<a href='./post.php?post=$lower'>". $continuacao . "</a>";
    
}




// mb_Strrpos pega a ultima ocorrencia de uma string 
// mb_substr conta a posição a parti do inicio(que sera definido)
/*
 if($seman <= 4){
        return $semana[$seman + 1]. ", dia ". ($diaMes - $dia). " de ". $meses[$mes]. " de ". $ano;
    }
    if($mes <= 12){
        return $semana[$seman / round( $dia / $mes_1)]. ", dia ". round( $dia / $mes_1) . " de ". $meses[$mes]. " de ". $ano - $ano_1;
    }
    if($ano_1 > 1){
        return $semana[$seman  / $mes_1]. ", dia ". round( $dia / $mes_1 - 1) . " de ". $meses[$mes]. " de ". $ano - $ano_1;
    }
*/