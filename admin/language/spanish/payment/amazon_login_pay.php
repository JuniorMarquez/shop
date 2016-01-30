<?php
//Headings
$_['heading_title']                 = 'Acceso y pago con Amazon';

//Text
$_['text_success']                  = 'Acceso y pago con Amazon se ha actualizadomodule has been updated';
$_['text_ipn_url']					= 'Cron Job\'s URL';
$_['text_ipn_token']				= 'Llave Secreta';
$_['text_us']						= 'US';
$_['text_germany']                  = 'Alemania';
$_['text_uk']                       = 'Reino Unido';
$_['text_live']                     = 'Modo Real';
$_['text_sandbox']                  = 'Modo Prueba';
$_['text_auth']						= 'Autorización';
$_['text_payment']                  = 'Pago';
$_['text_no_capture']               = '--- Sin captura automatica ---';
$_['text_all_geo_zones']            = 'Todas las zonas';
$_['text_button_settings']          = 'Configurar boton de pago';
$_['text_colour']                   = 'Color';
$_['text_orange']                   = 'Naranja';
$_['text_tan']                      = 'Bronceado';
$_['text_white']                    = 'Blanco';
$_['text_light']                    = 'Claro';
$_['text_dark']                     = 'Obscuro';
$_['text_size']                     = 'Tamaño';
$_['text_medium']                   = 'Medio';
$_['text_large']                    = 'Grande';
$_['text_x_large']                  = 'Extra Grandw';
$_['text_background']               = 'Fondo';
$_['text_edit']						= 'Editar Acceso y pago con Amazon';
$_['text_amazon_login_pay']         = '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Registro a Acceso y pago con Amazon"><img src="view/image/payment/amazon.png" alt="Acceso y pago con Amazon" title="Acceso y pago con Amazon" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join']              = '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Registro a Acceso y pago con Amazon"><u>Registro a Acceso y pago con Amazon</u></a>';
$_['entry_login_pay_test']          = 'Modo Prueba';
$_['entry_login_pay_mode']          = 'Modo Cobro';
$_['text_payment_info']				= 'Información de pago';
$_['text_capture_ok']				= 'Captura fue exitosa';
$_['text_capture_ok_order']			= 'Captura fue exitosa, la autorización ha sido totalmente capturado';
$_['text_refund_ok']				= 'Reembolso se solicitó con éxito';
$_['text_refund_ok_order']			= 'Reembolso se solicitó con éxito, cantidad totalmente reembolsado';
$_['text_cancel_ok']				= 'Cancelación éxitosa, el estado del pedido se actualizo ha cancelado';
$_['text_capture_status']			= 'Pago capturado';
$_['text_cancel_status']			= 'Pago cancelado';
$_['text_refund_status']			= 'Pago reembolsado';
$_['text_order_ref']				= 'Orden ref';
$_['text_order_total']				= 'Total autorizado';
$_['text_total_captured']			= 'Total capturado';
$_['text_transactions']				= 'Transacciones';
$_['text_column_authorization_id']	= 'Amazon Autorización ID';
$_['text_column_capture_id']		= 'Amazon Captura ID';
$_['text_column_refund_id']			= 'Amazon Reembolso ID';
$_['text_column_amount']			= 'Cantidad';
$_['text_column_type']				= 'Tipo';
$_['text_column_status']			= 'Estado';
$_['text_column_date_added']		= 'Agregado';
$_['text_confirm_cancel']			= 'Decea cancelar el pago?';
$_['text_confirm_capture']			= 'Decea capturar el pago?';
$_['text_confirm_refund']			= 'Decea reembolsar el pago?';
$_['text_minimum_total']            = 'Total minimo para pedido';
$_['text_geo_zone']                 = 'Zona';
$_['text_status']                   = 'Estado';
$_['text_declined_codes']           = 'Probar codigos de rechazo';
$_['text_sort_order']               = 'Ordenar por';
$_['text_amazon_invalid']           = 'MetodoDePagoInvalido';
$_['text_amazon_rejected']          = 'AmazonRechazado';
$_['text_amazon_timeout']           = 'TranzacciónFueraDeTiempo';
$_['text_amazon_no_declined']       = '--- Sin rechazo automatico ---';

// Columns
$_['column_status']                 = 'Estado';

//entry
$_['entry_merchant_id']             = 'Tienda ID';
$_['entry_access_key']              = 'Llave de Acceso';
$_['entry_access_secret']           = 'Llave Secreta';
$_['entry_client_id']               = 'Cliente ID';
$_['entry_client_secret']           = 'Cliente Secreto';
$_['entry_marketplace']             = 'Marketplace';
$_['entry_capture_status']          = 'Estado Captura Automatico';
$_['entry_pending_status']          = 'Estado Ordenes Pendientes';
$_['entry_ipn_url']					= 'IPN\'s URL';
$_['entry_ipn_token']				= 'Token Secreto';
$_['entry_debug']					= 'Registro de desarrollo';


// Help
$_['help_pay_mode']					= 'El pago esta disponible en el mercado de U.S.A';
$_['help_capture_status']			= 'Elija el estado del pedido que activará la captura automática de un pago autorizado';
$_['help_ipn_url']					= 'Configura la URL de mercante en Amazon Seller Central';
$_['help_ipn_token']				= 'Complica mas el poder desifrar los datos';
$_['help_debug']					= 'Habilitat el registro se guardara información delicada. Desactivalo antes de pasar a modo producción';
$_['help_declined_codes']			= 'Esto es para propositos de prueba';

// Order Info
$_['tab_order_adjustment']          = 'Ajustar Ordenes';

// Errors
$_['error_permission']              = 'No tienes permiso para administrar este modulo';
$_['error_merchant_id']			    = 'Tienda ID es requerida';
$_['error_access_key']			    = 'Llave de Acceso es requerida';
$_['error_access_secret']		    = 'Llave Secreta es requerida';
$_['error_client_id']			    = 'Cliente ID es requerida';
$_['error_client_secret']			= 'Llave Cliente es requerida';
$_['error_pay_mode']				= 'El pago esta disponible en el mercado de U.S.A';
$_['error_curreny']                 = 'Tu tienda debe tener la moneda %s instalada y activa';
$_['error_upload']                  = 'Carga fallida';
$_['error_data_missing'] 			= 'Datos requeridos faltantes';

// Buttons
$_['button_capture']				= 'Capturar';
$_['button_refund']					= 'Reembolsar';
$_['button_cancel']					= 'Cancelar';
