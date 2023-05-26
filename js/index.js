// Add SDK credentials
// REPLACE WITH YOUR PUBLIC KEY AVAILABLE IN: https://developers.mercadopago.com/panel
const mp = new MercadoPago('TEST-4abed0-CLAVE-PUBLICA-66c8f51', {
  locale: 'es-AR' // The most common are: 'pt-BR', 'es-AR' and 'en-US'
});

const bricksBuilder = mp.bricks();

// Realizar una solicitud al lado del servidor para obtener el ID de la preferencia
fetch('server.php')
	.then(response => response.json())
	.then(preference => {
		// Inicializar la billetera de Mercado Pago con el ID de la preferencia
		mp.bricks().create(
			'wallet',
			'button-checkout',
			{
			initialization: {
				preferenceId: preference.preferenceId,
			},
		});
	});

