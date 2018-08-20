<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use Session;
use Redirect;
use DB;
use Input;
use Validator;
use App\User;
use Hash;

class user_module extends Controller
{
    public function dash_view(){
        return view('user.user_dashboard');
    }

    public function login(Request $request)
    {
     $data=Input::except(array('_token'));
     $rule=array('username'=>'required','password'=>'required');
     $message=array('username.required'=>'The username cant empty','password.required'=>'This filed never empty');
     $validator=Validator::make($data,$rule,$message);
     if($validator->fails()){
       return Redirect::to('/')->withErrors($validator);
     }
     else{
       $userdata=array('username'=>Input::get('username'),'password'=>Input::get('password'),'banned'=>0); //bcrypt(Input::get('password'))
       if(Auth::attempt($userdata)){
         $username=$request->get('username');
         $role_id=DB::table('users')->join('users_roles','users.id','=','users_roles.user_id')->select('users_roles.role_id')->where('users.username','=',$username)->get();
         //print_r($role_id); 
         $permissions=DB::select('select * from permissions where id=?',[DB::select('select permission_id from permission_roles where role_id=?',[$role_id[0]->role_id])[0]->permission_id]);
          
           $user_id=DB::table('users')->where('username',$username)->pluck('id');

         //print_r($permissions);
         $role=$role_id[0]->role_id;
         //echo $role;

         Session(['username'=>$username,'role'=>$role,'permissions'=>$permissions,'user_id'=>$user_id]);
         Session::put('username1', Input::get('username'));
         Session::put('password1', Input::get('password'));
        // ////$userrole=DB::select('select userrole from users where username=? and password=?',[$userdata['username'],$userdata['password']]);
        /* $role_permission=DB::table('permissions')->join('permission_roles','permissions.id','=','permission_roles.permission_id')->select('permissions.*')->where('permission_roles.role_id','=',$role)->get();
         $permission=DB::select('select * from permission_maps');
         $change_password=DB::table('users')->where('username',$username)->pluck('change_password');*/

         //print_r($permission);
         //print_r($role_permission);
         //return view('admin.dashboard',compact('role_permission'))->with('permission',$permission);//->with('role_permission',$role_permission);
         //return Redirect::to('user/dashboard')->with('name', 'amal');
       //  if($change_password[0]==1){
         return Redirect::to('user/dashboard');//->with('permission',$permission)->with('role_permission',$role_permission);
       // }
      //  else{
     //     return redirect('change_password')->with('username',$username); 
     //   }
          //return redirect()->route('user/dashboard', ['permission' => $permission,'role_permission'=>$role_permission]);
         //return Redirect::to('user/dashboard',['role_permission'=>$role_permission,'permission'=>$permission]);
       }
       else{
        $errors = array('err_msg' => 'Email and/or password invalid.');
         return Redirect::to('/')->withErrors($errors);
         //echo $userdata['password'];

       }

     }
    }

    public function dash(){
       // {{ $role=Session::get('role'); }}
        //$role_permission=DB::table('permissions')->join('permission_roles','permissions.id','=','permission_roles.permission_id')->select('permissions.*')->where('permission_roles.role_id','=',$role)->get();
      //  $permission=DB::select('select * from permission_maps');
       return view('user.user_dashboard');//,compact('role_permission'))->with('permission',$permission);
     
      }

      public function doLogout(Request $request){
        Auth::logout(); // log the user out of our application
        Session::flush();
        return Redirect::to('/'); // redirect the user to the login screen
            }

      //create user

      public function create_user(Request $request){
        $data=Input::except(array('_token'));
        $rule=array('name'=>'required','city'=>'required','district'=>'required','state'=>'required','address'=>'required','phone_no'=>'required','password'=>'required','username'=>'required','role_id'=>'required','gender'=>'required','age'=>'required');
       // $message=array('stagename.required'=>'The stagename cant empty','description.required'=>'Enter description');
       
        $validator=Validator::make($data,$rule);
        if($validator->fails()){
            return Redirect::to('user/dashboard')->withErrors($validator);
        }
        //print_r($user_details);
        if(DB::insert('insert into users (name,address,city,district,state,phone_no,password,username,role,gender,age) values(?,?,?,?,?,?,?,?,?,?,?)',[$request->name,$request->address,$request->city,$request->district,$request->state,$request->phone_no,$request->password,$request->username,$request->role_id,$request->gender,$request->age])){
          
           // \Session::flash('flash_message','New User created successfully.');  
            return Redirect::to('user/dashboard');
        }
        else{
            $errors = array('err_msg' => 'Email and/or password invalid.');
            \Session::flash('error_message','Database encountered some error. Please try again');
            return Redirect::to('user/create_user')->withErrors($errors);
        }
      }

}
