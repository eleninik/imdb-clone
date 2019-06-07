<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\People;
use App\PeopleProfession;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return $people;
    }

    public function show($id)
    {
        $people = People::with('movies')
        ->where('id', $id)
        ->first();

        return view('people.show')->with('people', $people);
    }
}
