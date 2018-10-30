<?php

namespace App\Http\Controllers;

use App\Client;
use App\Commands;
use App\Products;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function create_show() {
        $type = Commands::getPossibleEnumValues('type');
        $type_paiement = Commands::getPossibleEnumValues('type_paiement');
        $statut = Commands::getPossibleEnumValues('statut');
        $livraison = Commands::getPossibleEnumValues('livraison');
        $categorie = Client::getPossibleEnumValues('categorie');
        $products = Products::all();
        return view('commands.show')->with([
            'products' => $products,
            'type' => $type,
            'type_paiement' => $type_paiement,
            'statut' => $statut,
            'livraison' => $livraison,
            'categorie' => $categorie,
        ]);
    }

    public function edit_show(Request $request) {
        $command = Commands::find($request->id);
        return view('commands.show')->with('command', $command);
    }


    public function create() {

    }

    public function list() {

    }

    public function edit($id) {

    }

    public function delete($id) {

    }
}
