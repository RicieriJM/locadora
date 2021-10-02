<?php

helper('form');

echo '<pre>';

echo form_open('cargo/update');

echo form_label('ID: ');
echo form_input('TB_CARGO_ID', $edit['TB_CARGO_ID'], 'readonly');

echo form_label('Digite o nome do cargo: ');
echo form_input('TB_CARGO_NOME', $edit['TB_CARGO_NOME']);

echo form_submit('ok', 'OK');

echo form_close();

?>