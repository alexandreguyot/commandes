'use strict';

$.fn.select2.defaults.set('language', 'fr');
$.fn.select2.defaults.set( "theme", "bootstrap" );
$.fn.modal.Constructor.prototype.enforceFocus = function() {};

$(document).ready(function() {
	$('#list_client').select2();
	$('#list_products').select2();
});


/*                 CLIENT                       */
$('#list_client').on('select2:select', function(e) {
	const data = e.params.data;
	const client = JSON.parse(data.id);
	addClient(client);
});


function addClient(client) {

}

/*                 PRODUCT                       */

let totale = 0;

function addTotalePrice(prix) {
	totale += prix;
	setPrice();
}

function removeTotalePrice(prix) {
	totale -= prix;
	if (totale < 0 ) {
		totale = 0;
	}
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

$('#list_products').on('select2:unselect', function(e) {
	const data = e.params.data;
	const product = JSON.parse(data.id);
	$('#product_id_'+product.id).remove();
	removeTotalePrice(product.prix);
});


function removeInSelectProduct(ref, nom, prix) {
	const title = ref + ' - ' + nom + ' - ' + prix +'€';
	$("li[title='"+ title +"'] span").click();
}

function removeProduct (id, ref, nom, prix) {
	$('#product_id_'+id).remove();
	removeTotalePrice(prix);
	removeInSelectProduct(ref, nom, prix);
}

function deleteNumberProduct(id, prix) {
	const nombre = $(`#product_${id}_numb`);
	if (parseInt(nombre.val()) < 0) {
		nombre.val(parseInt(nombre.val()) - 1);
		removeTotalePrice(prix);
	}
}

function addNumberProduct(id, prix) {
	const nombre = $(`#product_${id}_numb`);
	nombre.val(parseInt(nombre.val()) + 1);
	addTotalePrice(prix);
}

function addProducts (product)
{
	$('#products tbody')
	.append(`
		<tr name="products[${product.id}][nombre]" id="product_id_${product.id}"> 
			<td> 
				${ product.ref }
			</td>
			<td>
				${ product.nom } 
			</td>
			<td> 
				${ product.prix } € 
			</td>
			<td> 
				<button type="button" class="btn btn-default btn-sm" onclick="deleteNumberProduct(${product.id}, ${product.prix})">-</button>
				<input id="product_${product.id}_numb" name="products[id][nombre]" value="1">
				<button type="button" class="btn btn-default btn-sm" onclick="addNumberProduct(${product.id}, ${product.prix})">+</button>
			 </td>
			<td> 			
				<button type="button" class="btn btn-default btn-sm" onclick="removeProduct(${product.id}, '${product.ref}', '${product.nom}', '${product.prix}');">
				   Supprimer 
				</button>
			</td>
		</tr>
	`);
	addTotalePrice(product.prix);
}

