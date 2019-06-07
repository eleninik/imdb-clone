<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;
use App\People;
use App\PeopleProfession;

class AdminPeopleController extends Controller
{

    public function index()
    {
        $people = People::all();
        return view('admin.indexPeople')->with('people', $people);
    }


    public function create()
    {
        return view('admin.createPeople');
    }


    public function store(Request $request)
    {
        $people = $this->validate(request(), [
            'firstname' => 'required', 
            'lastname' => 'required',
            'born' => 'required', 
            'bio' => 'required',
            'photo' => 'required',
            'awards' => 'required'
        ]);

        People::create($people);

        return redirect('/admin')->with('success', 'Person added!');
    }


    public function show($id)
    {
        $people = People::findOrFail($id);
        $movies = People::with('movies')
        ->where('id', $id)
        ->get();

        return view('admin.showPeople', compact('people', 'movies'));
    }


    public function destroy($id)
    {
        $people = People::find($id);
        $people->delete();

        return redirect('admin/people')->with('success', 'Person has been deleted!');
    }

    
    public function edit($id)
    {
        $people = People::find($id);
        return view('admin.editPeople', compact('people', 'id'));
    }


    public function update(Request $request, $id)
    {
        $people = People::find($id);
        $this->validate(request(), [

            'firstname' => 'required',
            'lastname' => 'required',
            'born' => 'required', 
            'bio' => 'required',
            'photo' => 'required',
            'awards' => 'required'
        ]);

        $people->firstname = $request->get('firstname');
        $people->lastname = $request->get('lastname');
        $people->born = $request->get('born');
        $people->bio = $request->get('bio');
        $people->photo = $request->get('photo');
        $people->awards = $request->get('awards');
        $people->save();

        return redirect('admin/people')->with('success', 'Person has been updated');
    }


    public function attach(Request $request)
    { 

        $id = explode(',  ', $request['people_id'], 2);
        $people_id = (int) $id[1];

        // Change 'people_id' to $people_id that now only contains the id from the input field (Name and id is shown in searchresult)
        $request->merge(array('people_id' => $people_id));

        $profession = $this->validate(request(), [
            'people_id' => 'required', 
            'cast_id' => 'required', 
            'cast_type' => 'required',
            'profession_id' => 'required',
            'role' => 'nullable'
        ]);

        PeopleProfession::create($profession);  

        return back()->with('success','Person is now connected to profession!');

    }


    public function delete(Request $request, $id)
    {
        $cast_id = $request['cast_id'];
        $cast_type = $request['cast_type'];

        foreach ($request->people_id as $peopleId) {
        $people = PeopleProfession::all()
        ->where('people_id', $peopleId)
        ->where('cast_id', $cast_id)
        ->where('cast_type', $cast_type)
        ->first();

        $people->delete();
        }

        return back()->with('success', 'Members of the cast were successfully deleted!');
    }
}
