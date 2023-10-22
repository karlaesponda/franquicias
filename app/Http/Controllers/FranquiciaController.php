<?php

namespace App\Http\Controllers;

use App\Models\Franquicia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\FranquiciaRequest;

class FranquiciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Mostrar las franquicias en el admin
        $user = Auth::user();
        $franquicias = Franquicia::where('user_id', $user->id)
                        ->orderBy('id','desc')
                        ->simplePaginate(10);
        return view('admin.franquicias.index', compact('franquicias'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.franquicias.create', compact('franquicias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FranquiciaRequest $request)
    {
        //
        $request->merge([
            'user_id'=> Auth::user()->id,
        ]);
        //Guardo la solicitud en una variables
        $franquicia = $request->all();
        //Validar si hay un archivo en el request
        if($request->hasFile('logotipo')){
            $franquicia['logotipo'] = $request->file('logotipo')->store('franquicias');
        }

        Franquicia::create($franquicia);

        return redirect()->action([FranquiciaController::class, 'index'])
                                ->with('success-create', 'Franquicia creada con éxito');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Busca la franquicia por su ID
        $franquicia = Franquicia::findOrFail($id);
    
        // Ahora tienes la franquicia cargada y puedes acceder a sus propiedades
        $comments = $franquicia->comments()->simplePaginate(5);
    
        // Devuelve la vista con los datos de la franquicia
        return view('subscriber.franquicias.show', compact('franquicia', 'comments'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Franquicia $franquicia)
    {
        //
        return view('admin.franquicias.edit', compact('franquicia'));
   

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FranquiciaRequest $request, Franquicia $franquicia)
    {
        //Sie l usuario sube una nueva imagen
        if($request->hasFile('logotipo')){
            //Eliminar logotipo anterior
            File::delete(public_path('storage/' . $franquicia->logotipo));
            //Asigna el nuevo logotipo
            $franquicia['logotipo'] = $request->file('logotipo')->store('franquicias');
        }

        //Actualiza los daots
        $franquicia->update([
            'title' => $request->title,
            'nombre_restaurante' => $request-> nombre_restaurante,
            'slug' => $request-> slug,
            'razon_social' => $request-> razon_social,
            'rfc' => $request-> rfc,
            'anios_operacion' => $request-> anios_operacion,
            'num_sucursales' => $request-> num_sucursales,
            'marca_registrada' => $request-> marca_registrada,
            'costo_marca' => $request-> costo_marca,
            'tipo_restaurante' => $request-> tipo_restaurante,
            'website' => $request-> website,
            'facebook' => $request-> facebook,
            'instagram' => $request-> instagram,
            'descripcion' => $request-> descripcion,
            'historia' => $request-> historia,
            'mision' => $request-> mision,
            'vision' => $request-> vision,
            'estandar_calidad' => $request-> estandar_calidad,
            'mercado_meta' => $request-> mercado_meta,
            'menu' => $request-> menu,
            'inf_financiera' => $request-> inf_financiera,
            'soporte' => $request-> soporte,
            'entrenamiento' => $request->entrenamiento,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->action([FranquiciaController::class, 'index'])
                            ->with('success-update', 'Franquicia modificada con éxito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Franquicia $franquicia)
    {
        //Eliminar el logotipo de la carpeta
        if($franquicia->logotipo){
            File::delete(public_path('storage/' . $franquicia->logotipo));
        }
        

        //Eliminar franquicia
        $franquicia->delete();

        return redirect()->action([FranquiciaController::class, 'index'], compact('franquicia'))
        ->with('success-delete', 'Franquicia eliminada con éxito');

    }

    public function lista()
    {
        $franquicias = Franquicia::all(); // Obtén todas las franquicias
    
        return view('subscriber.franquicias.lista', compact('franquicias'));
    }
    
    
}
