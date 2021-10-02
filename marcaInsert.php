<?php

helper('form');

echo '<pre>';

echo form_open('marca/insert');

echo form_label('Digite o nome da marca: ');
echo form_input('TB_MARCA_NOME', '');

echo form_submit('ok', 'OK');

echo form_close();

?>