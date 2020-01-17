<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    //

    public function updateBio(Request $request)
    {
        

        $updatebio = User::where('id',$request->input('user_id'))->first();



        
        $file = $request->file('upload-image');

        //you also need to keep file extension as well
        $name = $file->getClientOriginalName();

        //using the array instead of object
    $image['filePath'] = $name;
    $file->move(public_path().'/profilepicture/', $name);

    $updatebio->profile = env('APP_URL').'/profilepicture/'. $name;
    $updatebio->description = $request->input('bio');


        
$updatebio->save();



       
        return back();
    }

    
}
