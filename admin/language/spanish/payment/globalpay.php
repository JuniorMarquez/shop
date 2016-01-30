<?php
// Heading
$_['heading_title']					 = 'Globalpay Redirect';

// Text
$_['text_payment']				  	 = 'Pago';
$_['text_success']					 = 'Correcto: Modificaste el modulo Globalpay Redirct!';
$_['text_edit']                      = 'Editar Globalpay Redirect';
$_['text_card_type']				 = 'Tipo de tarjeta';
$_['text_enabled']					 = 'Activado';
$_['text_use_default']				 = 'Usar predeterminado';
$_['text_merchant_id']				 = 'Merchant ID';
$_['text_subaccount']				 = 'Subcuenta';
$_['text_secret']					 = 'Secreto compartido';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'Mastercard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch/Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'Captura correcta';
$_['text_capture_ok_order']			 = 'Captura correcta, estado del pedido actualizado con éxito - se instaló';
$_['text_rebate_ok']				 = 'Rebaja fue exitosa';
$_['text_rebate_ok_order']			 = 'Rebaja fue exitosa, orden actualizada a rebajada';
$_['text_void_ok']					 = 'Anulado exitoso, el estado del pedido actualiza para anulado';
$_['text_settle_auto']				 = 'Auto';
$_['text_settle_delayed']			 = 'Retrsado';
$_['text_settle_multi']				 = 'Multi';
$_['text_url_message']				 = 'Debes especificar la URL de tu tienda en el administrador de cuenta Globalpay antes de entrar en producción';
$_['text_payment_info']				 = 'Información de pago';
$_['text_capture_status']			 = 'Pago capturado';
$_['text_void_status']				 = 'Pago anulado';
$_['text_rebate_status']			 = 'Pago rebajdo';
$_['text_order_ref']				 = 'Orden ref';
$_['text_order_total']				 = 'Total autorizado';
$_['text_total_captured']			 = 'Total capturado';
$_['text_transactions']				 = 'Transacción';
$_['text_column_amount']			 = 'Monto';
$_['text_column_type']				 = 'Tipo';
$_['text_column_date_added']		 = 'Creado';
$_['text_confirm_void']				 = 'Deceea anular el pago?';
$_['text_confirm_capture']			 = 'Decea capturar el pago?';
$_['text_confirm_rebate']			 = 'Decea rebajar el pago?';
$_['text_globalpay']                 = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant_id']				 = 'Mercantr ID';
$_['entry_secret']					 = 'Secreto Compartido';
$_['entry_rebate_password']			 = 'Contraseña de rabaja';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Ordenar';
$_['entry_geo_zone']				 = 'Zona';
$_['entry_status']					 = 'Estado';
$_['entry_debug']					 = 'Registro desarrollo';
$_['entry_live_demo']				 = 'Producción / Demo';
$_['entry_auto_settle']				 = 'Settlement type';
$_['entry_card_select']				 = 'Select card';
$_['entry_tss_check']				 = 'TSS checks';
$_['entry_live_url']				 = 'Producción URL';
$_['entry_demo_url']				 = 'Demo URL';
$_['entry_status_success_settled']	 = 'Correcto - iniciado';
$_['entry_status_success_unsettled'] = 'Correcto - no iniciado';
$_['entry_status_decline']			 = 'Declinado';
$_['entry_status_decline_pending']	 = 'Declinado - fuera de linea';
$_['entry_status_decline_stolen']	 = 'Declinado - tarjeta perdida o robada';
$_['entry_status_decline_bank']		 = 'Declinado - error banco';
$_['entry_status_void']				 = 'Anulado';
$_['entry_status_rebate']			 = 'Rebajado';
$_['entry_notification_url']		 = 'URL de notificación';

// Help
$_['help_total']					 = 'Pagar Total de la orden debe alcanzar antes de que este método de pago se activa';
$_['help_card_select']				 = 'Pida al usuario de elegir su tipo de tarjeta antes de que se redirigen';
$_['help_notification']				 = 'Debe suministrar este URL para GlobalPay recibir notificaciones de pago';
$_['help_debug']					 = 'depuración que permite escribirá los datos sensibles a un archivo de registro. Usted debe siempre deshabilita a menos que se indique lo contrario';
$_['help_dcc_settle']				 = 'Si su subcuenta es activar DCC debe utilizar Autosettle';

// Tab
$_['tab_api']					     = 'Detalles API';
$_['tab_account']		     		 = 'Cuentas';
$_['tab_order_status']				 = 'Estado de Ordenes';
$_['tab_payment']					 = 'Opciones de pago';
$_['tab_advanced']					 = 'Advanzado';

// Button
$_['button_capture']				 = 'Capturado';
$_['button_rebate']					 = 'Rebajado / reembolsado';
$_['button_void']					 = 'Anulado';

// Error
$_['error_merchant_id']				 = 'Mercante ID es requerido';
$_['error_secret']					 = 'Secreto compartido es requerido';
$_['error_live_url']				 = 'Producción URL es requerido';
$_['error_demo_url']				 = 'Demo URL es requerido';
$_['error_data_missing']			 = 'Información faltante';
$_['error_use_select_card']			 = 'Debe tener "Seleccionar tarjeta" habilitado para el enrutamiento subcuenta según el tipo de tarjeta de trabajar';