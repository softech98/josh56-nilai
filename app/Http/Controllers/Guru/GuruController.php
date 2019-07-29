<?php namespace App\Http\Controllers\Guru;
use App\Http\Controllers\JoshController;
use App\Http\Requests\UserRequest;
use App\Mail\Register;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use File;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Redirect;
use Sentinel;
use URL;
use View;
use Yajra\DataTables\DataTables;
use Validator;
Use App\Mail\Restore;

class GuruController extends JoshController
{
        public function show($id)
            {
                
                    // Get the user information
                    $check = Sentinel::getUser()->id;
                    // dd($user);
                   if($id != Sentinel::getUser()->id) 
                   {
                    return view ('401');
                   }
                   else
                   {

                    $user = Sentinel::findById($id);
                    return view('admin.users.show', compact('user'));
                    }
             
            }
}