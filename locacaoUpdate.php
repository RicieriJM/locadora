<?php

helper('form');

echo '<pre>';

echo form_open('locacao/update');

echo form_label('ID: ');
echo form_input('TB_LOCACAO_ID', $edit['TB_LOCACAO_ID'], 'readonly');

echo form_label('Digite o tipo de locação: ');
echo form_input('TB_LOCACAO_TIPO', $edit['TB_LOCACAO_TIPO']);

echo form_label('Digite o valor: ');
echo form_input('TB_LOCACAO_VALOR', $edit['TB_LOCACAO_VALOR']);

echo form_label('Digite a data de início: ');
echo form_input('TB_LOCACAO_DT_INICIO', $edit['TB_LOCACAO_DT_INICIO']);

echo form_label('Digite a data de fim: ');
echo form_input('TB_LOCACAO_DT_FIM', $edit['TB_LOCACAO_DT_FIM']);

echo form_submit('ok', 'OK');

echo form_close();

?>