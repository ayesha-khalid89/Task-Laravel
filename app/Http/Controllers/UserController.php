<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{
    public function index(Request $request){
        $query = User::query();

        if ($request->has('first_name') && !empty($request->input('first_name'))) {
            $query->where('first_name', $request->input('first_name'));
        }

        if ($request->has('gender') && !empty($request->input('gender'))) {
            $query->where('gender', $request->input('gender'));
        }

        if ($request->has('date_of_birth') && !empty($request->input('date_of_birth'))) {
            $query->where('date_of_birth', $request->input('date_of_birth'));
        }

        if ($request->has('email') && !empty($request->input('email'))) {
            $query->where('email', $request->input('email'));
        }
        $users = $query->get();

        return view('users.index', ['users' => $users]);
    }
    public function create(){
        return view('users.create');
    }
    public function details($user){
        $user = User::findOrFail($user);;
        return view('users.details',['user'=>$user]);        
    }
    public function store(Request $request){
        $data=$request->validate([
            'first_name'=>"required",
            'last_name'=>'required',
            'date_of_birth'=>"required",
            'gender'=>'required',
            'email'=>"required|email",
            'password'=>'required|min:6',
        ]);
        $userExists = User::where('email', $data['email'])->exists();

        if ($userExists) {
            return redirect()->back()->withErrors(['email' => 'The email address is already registered.']);
        }
        $newUser=User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'password' => $data['password'], 
        ]);
        return redirect(route('home.index'));
    }
    public function edit(User $user){
        return view('users.edit',['user' => $user]);
    }

    public function update(User $user, Request $request){
        $data=$request->validate([
            'first_name'=>"required",
            'last_name'=>'required',
            'date_of_birth'=>"required",
            'gender'=>'required',
            'email'=>"required|email",
            'password'=>'required|min:6',
        ]);
        $user->update($data);
        return redirect(route('user.index'))->with('success','User updated successfully!');
    }
    public function delete(User $user){
        $user->delete();
        return redirect(route('user.index'))->with('success','User deleted successfully!'); 
    }
}
