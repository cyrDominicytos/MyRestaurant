<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    

    public function new(){
        return view('admin.table.new');
    }

    public function store(Request $request){
        $request->validate([
            "table_number"=>['required', 'numeric',],
            "table_number_personne"=>['required', 'string', 'max:255'],
         ]);

        $table=new Table();
        $table->table_number=$request->table_number;
        $table->table_number_personne=$request->table_number_personne;
        $table->save();
        return redirect()->route('listTable')->with('succes','Table creer avec succès');
    }
    public function index() {
        $tables=Table::all();

     return view('admin.table.list',compact('tables'));
    }
}
