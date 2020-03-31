<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(){
        return view('pages.account');
    }

    //edit account
    public function edit(Request $request, User $user){
        // $user->first_name = $request('firstname');
        // $user->last_name = $request('lastname');
        // $user->address = $request('address');
        // $user->birthdate = $request('birthdate');
        // $user->gender = $request('gender');

        // $user->save();
        // return redirect('/shop');
        if(Auth::user()){
            $user = User::find(Auth::user()->id);
            
            if($user){
                return view('pages.account')->withUser($user);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }
    }

       //update account
       public function update(Request $request, User $user){
        $user = User::find(Auth::user()->id);
        
        if($user){
            $user->first_name = $request['firstname'];
            $user->last_name = $request['lastname'];
            $user->address = $request['address'];
            $user->birthdate = $request['birthdate'];
            $user->gender = $request['gender'];

            $user->save();
            $request->session()->flash('success','User details have now been updated!');
            return redirect()->back();
        }
        else{
            $request->session()->flash('failed','User details have not been updated!');
            return redirect()->back();
        }
    }

    //delete account
    public function delete(User $user, Request $request){
        $user = User::find(Auth::user()->id); 
        if($user){
            $user->delete();
            $request->session()->flash('success','User has been deleted!');
            return redirect('/');
        }
        else{
            $request->session()->flash('failed','User failed to delete account!');
            return redirect()->back();
        }
    }

}
