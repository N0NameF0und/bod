<?php

namespace App\Http\Controllers;


use App\Modelos\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class IngresoController extends Controller
{


    public function index()
    {
        return view('Login');
    }
    public function login(Request $request)
    {
        $usuarioData = new Usuario;

        /*  revisar inputs dd($request); */

        $formData = $request->all();
        $rules = [
            'nombre' => 'min:4|max:50',
            'contrasena' => 'min:4|max:30'
        ];
        $validator = Validator::make($formData, $rules);

        if ($validator->passes()) {

            /* depurar dd($formData['correo']); */
        
            $result = $usuarioData->where('nombre_usuario',$formData['nombre'])->first();
            
              /* dd($result); */ 
                /*           dd($formData['contrasena']); */
            if(!$result){
                $error ='Usuario no existe';
                session()->flash('error', 'Usuario no existe');
                return redirect('login');
/*                 return redirect::to('login',[$result])->withErrors(['error', 'Usuario no existe']); */

            }elseif(!$usuarioData->where([
                ['nombre_usuario','=',$formData['nombre']],
                ['password_usuario','=',$formData['contrasena']]])
                ->first()) {
                    $error ='Contrasena Incorrecta';
                    return redirect::to('login')->with($error);
                
            }else{
               /*  $userdata = array(
                    'email' => $formData['nombre'] ,
                    'password' => $formData['contrasena']
                  );

                  Auth::attempt($userdata); */
                  return Redirect::to('dashboard');

            }
                
        }
        /* console.log("Message here 2"); */

        return redirect('login');
    }
    public function logout()
    {
        Auth::logout(); // logging out user
        return Redirect::to('login');
    }
}
