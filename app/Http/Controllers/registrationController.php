<?php

namespace App\Http\Controllers;

use App\Models\registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class registrationController extends Controller
{
    public function Registrations(Request $request)
    {
        $username    = $request->username;
        $email    = $request->email;
        $name = $request ->name;
        $qualification = $request ->qualification;
        $universityAttended = $request ->universityAttended;
        $dateOfGraduation = $request ->dateOfGraduation;
        $file_path = $request->file('certificate');
        $file_tmp = $_FILES['certificate']['tmp_name'];
        $password = $request->password;
       
        $id = mt_rand(100000, 999999);
        $userId =date("dmY").$id;
        $size = filesize($file_tmp);

       if($size >20000)
       {
          return back()->with('error', 'File too large, only 20k is allowed, Please Try Again');
       }
        $ck = DB::table('registrations')->where('email', $email)->first();
        $u =  DB::table('registrations')->where('username', strtolower($username))->first();
        if($u)
        {
            return back()->with('error', $username . ' Alreddy Exist, Please Try Again');
        }
        if($ck)
        {
            return back()->with('error', $email . ' Alreddy Exist, Please Try Again');
        }
        if(!$ck)
        {
            /**
             * Upload files
             */
            $file_path = $request->file('certificate');
            $input['imagename'] = $userId.'.'.$file_path->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $file_path->move($destinationPath, $input['imagename']);
            $imgP=$input['imagename'];
            $certificate= $imgP;
            $guid=Str::uuid()->toString();
            $sv = registration::create([
                'username'=>strtolower($username),
                'email'=>$email,
                'name'=>$name,
                'qualification'=>$qualification,
                'universityAttended'=>$universityAttended,
                'dateOfGraduation'=>$dateOfGraduation,
                'certificate'=> $certificate,
                'password' => Hash::make($password),
                'guid'=>$guid
            ]);
            // if($request->has('certificate')){
            //     $registration['cetificate'] = $request->file['certificate']->store('img', 'public');
            // }
   
            if($sv)
            {
                return back()->with('success', 'Record Saved Successfully');
            }
            else
            {
                return back()->with('error', 'Sorry, Operation Faileds, Please Try Again');
            }
        }
        else{
            return back()->with('error', 'Sorry, Email Adddress Exist, Please Try Again');
        }

        }
        public function register()
        {
            return view('register');
        }

}

