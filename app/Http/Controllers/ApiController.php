<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Photo;

class ApiController extends Controller
{
    //
    //
    /*
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    */

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo_details_id' => 'required|integer',
    ]);

        $photo = $request->file('photo');
        $photoDetailsId = $request->input('photo_details_id');

    // Generar un nombre único para el archivo

        $id_usuario = auth()->id();
        $fileName = "{$id_usuario}_" . time() . '.' . $photo->getClientOriginalExtension();

    // Mover el archivo a la carpeta de destino
         $photo->move(public_path('selected_product_Images'), $fileName);


    // Guardar la ruta del archivo en la base de datos
        $photoModel = Photo::create([
            'user_id' => $id_usuario,
            'photo_details_id' => $photoDetailsId,
            'url' => 'selected_product_Images/' . $fileName,]);

    return response()->json(['message' => 'Photo uploaded successfully', 'photo' => $photoModel]);
    }

    public function photos(Request $request){


        if($request->has('id')){
            $id = $request->input('id');
            $fotos = Photo::where('id',$id)->get();
        }
        else{
            $fotos =Photo::all();
        }
        return response()->json($fotos);
    }

    public function users(Request $request){

    if($request->has('id')){
        $id = $request->input('id');
        $productos = user::where('id',$id)->get();
    }
    else{
        $productos =user::all();
    }
    return response()->json($productos);
}

}
