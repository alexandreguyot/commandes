'use strict';

$.fn.select2.defaults.set('language', 'fr');
$.fn.select2.defaults.set( "theme", "bootstrap" );

$(document).ready(function() {
	$('#list_client').select2();
	$('#list_products').select2();
});

let totale = 0;

function addTotalePrice(prix) {
	totale += prix;
	setPrice();
}

function removeTotalePrice(prix) {
	totale -= prix;
	setPrice();
}
function setPrice() {
	$('#totale').text(totale+ ' €')
}



$('#list_products').on('select2:select', function(e) {
	const data = e.params.data;
	const product = JSON.parse(data.id);
	addProducts(product);
});

$('#list_client').on('select2:select', function(e) {
	const data = e.params.data;
	const client = JSON.parse(data.id);
	addClient(client);
});
function addClient(client) {

}

function removeInSelectProduct(ref, nom, prix) {
	const title = ref + ' - ' + nom + ' - ' + prix +'€';
	$("li[title='"+ title +"']").next('span').click();
}

function removeProduct (id, ref, nom, prix) {
	$('#product_id_'+id).remove();
	removeTotalePrice(prix);
	removeInSelectProduct(ref, nom, prix);
}



function addProducts (product)
{
	console.warn('product', product);
	$('#products tbody')
	.append(`
		<tr id="product_id_${product.id}"> 
			<td> ${ product.ref } </td>
			<td> ${ product.nom } </td>
			<td> ${ product.prix } € </td>
			<td> 			
				<button type="button" class="btn btn-default btn-sm" onclick="removeProduct(${product.id}, '${product.ref}', '${product.nom}', '${product.prix}');">
				   Supprimer 
				</button>
			</td>
		</tr>
	`);
	addTotalePrice(product.prix);
}

