<?php

namespace App\Http\Controllers;
use PDF;
use App\Http\Requests\PersonasCreateRequest;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Persona;
use App\Cargo;

class PersonaController extends Controller
{
	public function index(Request $request)
	{
        $cedula = $request->get('cedula');

		$personas = Persona::orderBY('id', 'ASC')
        ->where('cedula', 'LIKE', "%$cedula%")
        ->paginate(10);
        return view('personas.list', compact('personas'));
	}

    public function reporte()
    {

        $personas = Persona::get();
        $pdf = PDF::loadView('personas.reporte', compact('personas'));
        return $pdf->stream('personas_systemyunior.pdf');
    }

    public function grafico()
    {
        $data = Persona::from('personas as p')
        ->select(DB::raw('c.nombre,COUNT(c.id) as total'))
        ->join('cargos as c', 'p.cargo_id', 'c.id')
        ->gropBy('p.cargo_id')
        ->get();

        return response()->json([
            'data' => $data
        ], 200, array(), JSON_PRETTY_PRINT);
    }

	public function create()
    {
        $cargos = Cargo::get();
        return view('personas.create', compact('cargos'));
    }

    public function store(PersonasCreateRequest $request)
    {
        $persona = Persona::create($request->all());

        return redirect()->route('personas.index');
    }

    public function edit(Persona $persona)
    {
        $cargos = Cargo::get();
        return view('personas.edit', compact('persona','cargos'));
    }

    public function update(Request $request, Persona $persona)
    {

        $this->validate(Request(), [
            'cedula' =>['required', 'min:6', 'max:6', 'unique:personas,cedula,'.$persona->id],
            'nombre' => ['required'],
            'correo' => ['required', 'email'],
            'cargo_id' => 'nullable'
        ]);
        
        $persona->update($request->all());

        return redirect()->route('personas.index');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return back();
    }
}
