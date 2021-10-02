<?php

helper('form');

echo '<pre>';

echo form_open('funcionario/insert');

echo form_label('Digite o nome do funcionário: ');
echo form_input('TB_FUNCIONARIO_NOME', '');

echo form_label('Digite o telefone: ');
echo form_input('TB_FUNCIONARIO_TEL', '');

echo form_label('Digite a data de cadastro: ');
echo form_input('TB_FUNCIONARIO_DT_CONTRATO', '');

echo form_submit('ok', 'OK');

echo form_close();

?>