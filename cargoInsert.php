<?php

helper('form');

echo '<pre>';

echo form_open('cargo/insert');

echo form_label('Digite o nome do cargo: ');
echo form_input('TB_CARGO_NOME', '');

echo form_submit('ok', 'OK');

echo form_close();

?>