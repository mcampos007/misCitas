<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Speciality;
use App\Http\Controllers\Controller;

class SpecialityController extends Controller
{
    //

    public function index()
    {
        $specialities = Speciality::all();
        return view('specialities.index',compact('specialities'));
    }
    public function create()
    {
        return view('specialities.create');
    }

    private function performValidation(Request $request){

        $rules = [
            'name' => 'required|min:3',
            'description' => 'required'
        ];
        $messages = [
            'name.required' => 'Es necesario Ingresar un nombre',
            'name.min' => 'Como mínimo el nombre debe tener 3 caracteres',
            'description.required' => 'En necesario ingresar una Descripción'
        ];
        $this->validate($request, $rules, $messages);
    }
    public function store(Request $request)
    {
        // code...
        //dd($reuest->all());
        
        $this->performValidation($request);
        $speciality = new Speciality();
        $speciality->name = $request->input('name');
        $speciality->description = $request->input('description');
        $speciality->save();

        $notification = "La especialidad se ha registrado correctamente";
        return redirect('/specialities')->with(compact('notification'));

    }

    public function edit(Speciality $speciality){
        return view('specialities.edit',compact('speciality'));
    }

    public function update(Request $request, Speciality $speciality)
    {
        // code...
        //dd($reuest->all());
        $this->performValidation($request);

       // $speciality = new Speciality();
        $speciality->name = $request->input('name');
        $speciality->description = $request->input('description');
        $speciality->save();

        $notification = "La especialidad se ha Acttualizado correctamente";
        return redirect('/specialities')->with(compact('notification'));

    }

    public function destroy(Speciality $speciality){
        $deletedName = $speciality->name;
        $speciality->delete();
        $notification = 'La especialidad '.$deletedName.' se ha eliminado correctamente';
        return redirect('/specialities')->with(compact('notification'));

    }

}
