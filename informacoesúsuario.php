<?php 
/*Criando variáveis para os dados que queremos.*/
$nome = ("Daniel Silva");
$idade = 23;
$datanascimento = date('13/09/2000');
/*No php para inserir a data de hoje ou a data de nascimento, usamos $hoje = date('d/m/Y'); echo $hoje; E este código exibiria: 13/09/2023 . Como você já deve ter suposto, o d representa o dia, m representa o mês enquanto Y representa o ano com 4 dígitos. Se quiséssemos o ano apenas com 2 dígitos (19 no nosso exemplo), bastaria utilizar y (em minúsculo). */
$altura = 1.65;
$corFavorita = 'Vermelho';
$timeCoracao = "São Paulo Fc";

//Escrevendo na tela as informações.
echo "Meu nome é $nome, tenho $idade de idade, nasci em $datanascimento, tenho $altura de altura. <br>Minha cor favorita é $corFavorita e o meu clube do coração é $timeCoracao";