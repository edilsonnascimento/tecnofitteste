<?php

function dataAtual(){
	$fuso = new DateTimeZone('America/Sao_Paulo');
	$data = new DateTime();
	$data->setTimezone($fuso);
	return $data->format('Y-m-d H:i:s');
}