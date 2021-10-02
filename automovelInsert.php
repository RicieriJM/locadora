<?php

helper('form');

echo '<pre>';

echo form_open('automovel/insert');

echo form_label('Digite o nome do veículo: ');
echo form_input('TB_AUTOMOVEL_NOME', '');

echo form_label('Digite o ano de fabricação: ');
echo form_input('TB_AUTOMOVEL_ANO_FAB', '');

echo form_label('Digite a cor: ');
echo form_input('TB_AUTOMOVEL_COR', '');

echo form_label('Digite KM rodado: ');
echo form_input('TB_AUTOMOVEL_KM', '');

echo form_label('Digite o valor: ');
echo form_input('TB_AUTOMOVEL_VALOR_D', '');

echo form_label('Digite o status: ');
echo form_input('TB_AUTOMOVEL_STATUS', '');

echo form_label('Digite a marca: ');
echo form_input('TB_MARCA_ID', '');

echo form_label('Digite o modelo: ');
echo form_input('TB_MODELO_ID', '');

echo form_submit('ok', 'OK');

echo form_close();

?>