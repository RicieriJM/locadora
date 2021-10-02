<?php

helper('form');

echo '<pre>';

echo form_open('modelo/update');

echo form_label('ID: ');
echo form_input('TB_MODELO_ID', $edit['TB_MODELO_ID'], 'readonly');

echo form_label('Digite o desconto: ');
echo form_input('TB_MODELO_DESC', $edit['TB_MODELO_DESC']);

echo form_label('Digite a observação: ');
echo form_input('TB_MODELO_OBS', $edit['TB_MODELO_OBS']);

echo form_label('Digite a data: ');
echo form_input('TB_MODELO_DATA', $edit['TB_MODELO_DATA']);

echo form_submit('ok', 'OK');

echo form_close();

?>