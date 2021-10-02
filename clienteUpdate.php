<?php

helper('form');

echo '<pre>';

echo form_open('cliente/update');

echo form_label('ID: ');
echo form_input('TB_CLIENTE_ID', $edit['TB_CLIENTE_ID'], 'readonly');

echo form_label('Digite o nome do cliente: ');
echo form_input('TB_CLIENTE_NOME', $edit['TB_CLIENTE_NOME']);

echo form_label('Digite o telefone: ');
echo form_input('TB_CLIENTE_TEL', $edit['TB_CLIENTE_TEL']);

echo form_label('Digite o sexo: ');
echo form_input('TB_CLIENTE_SEXO', $edit['TB_CLIENTE_SEXO']);

echo form_label('Digite o email: ');
echo form_input('TB_CLIENTE_EMAIL', $edit['TB_CLIENTE_EMAIL']);

echo form_label('Digite a senha: ');
echo form_input('TB_CLIENTE_SENHA', $edit['TB_CLIENTE_SENHA']);

echo form_label('Digite o endereco: ');
echo form_input('TB_CLIENTE_ENDERECO', $edit['TB_CLIENTE_ENDERECO']);

echo form_label('Digite o complemento: ');
echo form_input('TB_CLIENTE_COMPLEMENTO', $edit['TB_CLIENTE_COMPLEMENTO']);

echo form_label('Digite o bairro: ');
echo form_input('TB_CLIENTE_BAIRRO', $edit['TB_CLIENTE_BAIRRO']);

echo form_label('Digite a cidade: ');
echo form_input('TB_CLIENTE_CIDADE', $edit['TB_CLIENTE_CIDADE']);

echo form_label('Digite o estado: ');
echo form_input('TB_CLIENTE_UF', $edit['TB_CLIENTE_UF']);

echo form_label('Digite a data de nascimento: ');
echo form_input('TB_CLIENTE_DT_NASC', $edit['TB_CLIENTE_DT_NASC']);

echo form_label('Digite a data de ncadastro: ');
echo form_input('TB_CLIENTE_DT_CAD', $edit['TB_CLIENTE_DT_CAD']);

echo form_submit('ok', 'OK');

echo form_close();

?>