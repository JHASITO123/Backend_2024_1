<?php
namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Sanctum;

class TokenController extends Controller
{
    //
    public function generateToken(User $user)
        {
             //Generar un token personal de acceso


            $token = $user->createToken('token-name'); //Puedes personalizar el nombre del token 

            // Actualizar el campo 'remember_token' en la tabla 'users'
            $user->remember_token = $token->plainTextToken;
            $user->save();

            //Redirigirse o mostrar un mensaje de éxito 
            return redirect()->route('users.show', $user->id)->with('success', 'Token generado y guardado con éxito.');
        }
}
