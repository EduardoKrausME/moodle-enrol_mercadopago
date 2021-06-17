<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * MercadoPago enrolment plugin
 *
 * @package    enrol_mercadopago
 * @copyright  2021 Eduardo Kraus
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole'] = 'Atribuir função';
$string['access_token'] = 'Mercado Pago Access Token';
$string['access_token_desc'] = 'O token de acesso de sua conta do Mercado Pago';
$string['public_key'] = 'Chave pública do Mercado Pago';
$string['public_key_desc'] = 'A chave pública da sua conta do Mercado Pago';
$string['cost'] = 'Custo de inscrição';
$string['costerror'] = 'O custo da inscrição não é numérico';
$string['costorkey'] = 'Por favor, escolha um dos seguintes métodos de inscrição.';
$string['currency'] = 'Moeda';
$string['defaultrole'] = 'Atribuição de função padrão';
$string['defaultrole_desc'] = 'Selecione a função que deve ser atribuída aos usuários durante as inscrições no Mercado Pago';
$string['enrolenddate'] = 'Data de término';
$string['enrolenddate_help'] = 'Se habilitado, os usuários podem ser inscritos somente até esta data.';
$string['enrolenddaterror'] = 'A data de término da inscrição não pode ser anterior à data de início';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Período de tempo padrão que a inscrição é válida. Se definido como zero, a duração da inscrição será ilimitada por padrão. ';
$string['enrolperiod_help'] = 'Tempo que a inscrição é válida, a partir do momento em que o usuário está inscrito. Se desativado, a duração da inscrição será ilimitada. ';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se habilitado, os usuários podem ser inscritos somente a partir desta data.';
$string['errdisabled'] = 'O plugin de inscrição Mercado Pago está desabilitado e não aceita notificações de pagamento.';
$string['erripninvalid'] = 'Notificação instantânea de pagamento não foi verificada pelo Mercado Pago.';
$string['errconnect'] = 'Não foi possível conectar-se a {$a->url} para verificar a notificação de pagamento instantâneo: {$a->result}';
$string['expiredaction'] = 'Ação de expiração de inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser executada quando a inscrição do usuário expirar. Observe que alguns dados e configurações do usuário são removidos do curso durante o cancelamento da inscrição. ';
$string['mailadmins'] = 'Notificar admin';
$string['mailstudents'] = 'Notificar alunos';
$string['mailteachers'] = 'Notificar professores';
$string['messageprovider:mercadopago_enrolment'] = 'mensagens de inscrição Mercado Pago';
$string['nocost'] = 'Não há custo associado à inscrição neste curso!';
$string['mercadopago:config'] = 'Configurar instâncias de registro do Mercado Pago';
$string['mercadopago:manage'] = 'Gerenciar usuários inscritos';
$string['mercadopago:unenrol'] = 'Cancelar inscrição de usuários do curso';
$string['mercadopago:unenrolself'] = 'Desinscrever-se do curso';
$string['accepted'] = 'Pagamentos de mercado pago aceitos';
$string['pluginname'] = 'Mercado Pago';
$string['pluginname_desc'] = 'O módulo Mercado Pago permite que você configure cursos pagos. Se o custo de qualquer curso for zero, os alunos não serão solicitados a pagar pela entrada. Há um custo para todo o site que você define aqui como padrão para todo o site e, em seguida, uma configuração de curso que pode ser definida para cada curso individualmente. O custo do curso substitui o custo do site. ';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago'] = 'Informações sobre as transações de Mercado Pago para inscrições de Mercado Pago.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:business'] = 'Endereço de e-mail ou ID da conta do Mercado Pago do destinatário do pagamento (ou seja, o comerciante).';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:courseid'] = 'O ID do curso que é vendido.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:instanceid'] = 'O ID da instância de inscrição no curso.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:item_name'] = 'Nome completo do curso cuja inscrição foi vendida.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:memo'] = 'Uma nota inserida pelo comprador no campo de nota de pagamentos do site Mercado Pago.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:option_selection1_x'] = 'Nome completo do comprador.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:parent_txn_id'] = 'No caso de reembolso, estorno ou estorno cancelado, este seria o ID da transação original.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:payment_status'] = 'O status do pagamento.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:payment_type'] = 'Retém se o pagamento foi financiado com um eCheck (echeck) ou com saldo de Mercado Pago, cartão de crédito ou transferência instantânea (instantânea).';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:pending_reason'] = 'O motivo pelo qual o status do pagamento está pendente (se for o caso).';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:reason_code'] = 'O motivo pelo qual o status do pagamento é Estornado, Reembolsado, Cancelado_Reversal ou Negado (se o status for um deles).';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:receiver_email'] = 'Endereço de e-mail principal do destinatário do pagamento (ou seja, o comerciante).';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:receiver_id'] = 'ID exclusivo da conta Mercado Pago do destinatário do pagamento (ou seja, o comerciante).';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:tax'] = 'Valor do imposto cobrado no pagamento.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:timeupdated'] = 'A hora em que o Moodle foi notificado pelo Mercado Pago sobre o pagamento.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:txn_id'] = 'O número de identificação da transação original do comerciante para o pagamento do comprador, contra o qual o caso foi registrado';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:userid'] = 'ID do usuário que comprou a inscrição no curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com'] = 'O plugin de inscrição Mercado Pago transmite dados do usuário do Moodle para o site do Mercado Pago.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:address'] = 'Endereço do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:city'] = 'Cidade do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:country'] = 'País do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:custom'] = 'Uma string separada por hífen que contém ID do usuário (o comprador), ID do curso, ID da instância de inscrição.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:email'] = 'Endereço de e-mail do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:first_name'] = 'Nome do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:last_name'] = 'Sobrenome do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:os0'] = 'Nome completo do comprador.';
$string['processexpirationstask'] = 'inscrição mercado pago enviar tarefa de notificações de expiração';
$string['sendpaymentbutton'] = 'Enviar pagamento via mercado pago';
$string['status'] = 'Permitir inscrições mercado pago';
$string['status_desc'] = 'Permitir que os usuários usem o mercado pago para se inscrever em um curso por padrão.';
$string['transactions'] = 'transações mercado pago';
$string['unenrolselfconfirm'] = 'Deseja mesmo cancelar a sua inscrição no curso "{$a}"?';