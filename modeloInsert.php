<?php

helper('form');

echo '<pre>';

echo form_open('modelo/insert');

echo form_label('Digite o desconto: ');
echo form_input('TB_MODELO_DESC', '');

echo form_label('Digite a observação: ');
echo form_input('TB_MODELO_OBS', '');

echo form_label('Digite a data: ');
echo form_input('TB_MODELO_DATA', '');

echo form_submit('ok', 'OK');

echo form_close();

?>