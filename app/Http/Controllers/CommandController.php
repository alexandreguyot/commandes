<?php

namespace App\Http\Controllers;

use App\Commands;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function show($id) {
        if ($id) {
            $command = Commands::find($id);
            return view('commands.show')->with('command', $command);
        } else {
            return view('commands.show');
        }
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
