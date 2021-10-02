<?php

helper('form');

echo '<pre>';

echo form_open('cliente/insert');

echo form_label('Digite o nome do cliente: ');
echo form_input('TB_CLIENTE_NOME', '');

echo form_label('Digite o telefone: ');
echo form_input('TB_CLIENTE_TEL', '');

echo form_label('Digite o sexo: ');
echo form_input('TB_CLIENTE_SEXO', '');

echo form_label('Digite o e-mail: ');
echo form_input('TB_CLIENTE_EMAIL', '');

echo form_label('Digite a senha: ');
echo form_input('TB_CLIENTE_SENHA', '');

echo form_label('Digite o endereco: ');
echo form_input('TB_CLIENTE_ENDERECO', '');

echo form_label('Digite o complemento: ');
echo form_input('TB_CLIENTE_COMPLEMENTO', '');

echo form_label('Digite o bairro: ');
echo form_input('TB_CLIENTE_BAIRRO', '');

echo form_label('Digite a cidade: ');
echo form_input('TB_CLIENTE_CIDADE', '');

echo form_label('Digite o estado: ');
echo form_input('TB_CLIENTE_UF', '');

echo form_label('Digite a data de nascimento: ');
echo form_input('TB_CLIENTE_DT_NASC', '');

echo form_label('Digite a data de cadastro: ');
echo form_input('TB_CLIENTE_DT_CAD', '');

echo form_submit('ok', 'OK');

echo form_close();

?>