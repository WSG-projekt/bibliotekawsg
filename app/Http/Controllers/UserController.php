<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= DB::table('users')->where('isAdmin',null)->get();
        return view('users.index',[
            'users'=>$users
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show',[
            'user'=>$user
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, Request $request): JsonResponse
    {

        try {
            $user->delete();
            $request->session()->flash('message', 'Użytkownik Usunięty');
            return response()->json([
                'status'=>'succes'
            ]);
        }catch (Exception $e){
            return response()->json([
                'status'=>'error',
                'message'=>'Wystąpił błąd!'
            ])->setStatusCode(500);
        }
    }
}
