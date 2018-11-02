'use strict';

$.fn.select2.defaults.set('language', 'fr');
$.fn.select2.defaults.set( "theme", "bootstrap" );
let totale = 0;

$(document).ready(function() {
	$('#list_client').select2({
		placeholder: "Rechercher un client",
		allowClear: true
	});
	$('#list_products').select2({
		allowClear: true,
		placeholder: "Sélectionner des produits",
	});
	$('#champs_livraison').hide();
	totale = parseFloat($('#TTTC').val());
});

$('#checkboxMemeAdresse').on('change', (e) => {
	if ($('#champs_livraison').is(":visible")){
		$('#champs_livraison').hide();
	} else {
		$('#champs_livraison').show();
	}
});

/*                 CLIENT                       */
$('#list_client').on('select2:select', function(e) {
	const data = e.params.data;
	const client = JSON.parse(data.id);
	addClient(client);
});


function addClient(client) {
	$('#client_id').val(client.id);
	$('#nom').val(client.nom);
	$('#prenom').val(client.prenom);
	$('#email').val(client.email);
	$('#telephone').val(client.telephone);
	$('#telephone_secondaire').val(client.telephone_secondaire);
	$('#adresse').val(client.adresse);
	$('#code_postal').val(client.code_postal);
	$('#ville').val(client.ville);
	$('#pays').val(client.pays);

	$('#livraison_nom').val(client.livraison_nom);
	$('#livraison_prenom').val(client.livraison_prenom);
	$('#livraison_adresse').val(client.livraison_adresse);
	$('#livraison_code_postal').val(client.livraison_code_postal);
	$('#livraison_ville').val(client.livraison_ville);
	$('#livraison_pays').val(client.livraison_pays);

	$(`#categorie option[value=${client.categorie}]`).attr('selected','selected');
}

/*                 PRODUCT                       */


function addTotalePrice(prix) {
	totale += prix;
	setPrice();
}

function removeTotalePrice(prix, nb) {
	console.warn('prix', prix);
	console.warn('nb', nb);
	if (nb > 1 ) {
		prix = nb * prix;
	}
	totale -= prix;
	if (totale < 0 ) {
		totale = 0;
	}
	setPrice();
}
function setPrice() {
	$('#TTTC').val(totale);
	$('#totale_label').text(totale+ ' €')
}

function setPrixLivraison() {
	const ancien_prix = $('#ancien_prix_livraison').val() ? parseFloat($('#ancien_prix_livraison').val()) : 0;
	const prix = parseFloat($('#prix_livraison').val());
	if (ancien_prix > prix) {
		totale -= (ancien_prix - prix);
	}

	if (ancien_prix < prix) {
		totale -= ancien_prix;
		totale += prix;
	}
	$('#ancien_prix_livraison').val(prix);
	setPrice();
}

function setRemise() {
	const ancien_prix = $('#ancienne_remise').val() ? parseFloat($('#ancienne_remise').val()) : 0;
	const prix = parseFloat($('#remise').val());
	if (ancien_prix > prix) {
		totale += ancien_prix;
		totale -= prix;
	}
	if (ancien_prix < prix) {
		totale += ancien_prix;
		totale -= prix;
	}
	$('#ancienne_remise').val(prix);
	setPrice();
}

$('#list_products').on('select2:select', function(e) {
	const data = e.params.data;
	const product = JSON.parse(data.id);
	addProducts(product);
});

$('#list_products').on('select2:unselect', function(e) {
	const data = e.params.data;
	const product = JSON.parse(data.id);
	const nombre = $(`#product_${product.id}_numb`).val();
	$('#product_id_'+product.id).remove();
	removeTotalePrice(product.prix, parseInt(nombre));
});


function removeInSelectProduct(ref, nom, prix) {
	const title = ref + ' - ' + nom + ' - ' + prix +'€';
	$("li[title='"+ title +"'] span").click();
}

function removeProduct (id, ref, nom, prix) {
	$('#product_id_'+id).remove();
	removeInSelectProduct(ref, nom, prix);
}

function deleteNumberProduct(id, prix) {
	const nombre = $(`#product_${id}_numb`);
	if (parseInt(nombre.val()) > 0) {
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
				<input id="product_${product.id}_numb" name="products[${product.id}][nombre]" value="1">
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

function filterTableau() {
	// Declare variables
	let input, filter, table, tr, td, i;
	input = document.getElementById("filtre");
	filter = input.value.toUpperCase();
	table = document.getElementById("liste_commandes");
	tr = table.getElementsByTagName("tr");

	// Loop through all table rows, and hide those who don't match the search query
	for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[2];
		if (td) {
			if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
		}
	}
}

