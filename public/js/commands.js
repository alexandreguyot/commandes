
$.fn.select2.defaults.set('language', 'fr');
$.fn.select2.defaults.set( "theme", "bootstrap" );

$(document).ready(function() {
	$('#liste_client').select2();
	$('#liste_products').select2();
});


$('#liste_products').on('select2:select', function(e) {
	var data = e.params.data;
	products = JSON.parse(data.id);
	console.warn('products', products);

});

$('#liste_client').on('select2:select', function(e) {
	var data = e.params.data;
	client = JSON.parse(data.id);
	console.warn('client', client);
});

