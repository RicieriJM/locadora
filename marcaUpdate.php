<?php

helper('form');

echo '<pre>';

echo form_open('marca/update');

echo form_label('ID: ');
echo form_input('TB_MARCA_ID', $edit['TB_MARCA_ID'], 'readonly');

echo form_label('Digite o nome da marca: ');
echo form_input('TB_MARCA_NOME', $edit['TB_MARCA_NOME']);

echo form_submit('ok', 'OK');

echo form_close();

?>