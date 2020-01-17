<?php


use App\Channel;


use App\Videos;

use App\Subscriber;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::post('/uploadNewVideo', 'VideosController@addVideo');

route::get('/Dashboard', function(){


    $Videos=Videos::with('user','channel')->get();

   // $VideosSub['channel_id']=Videos::with('user')->pluck('channel_id')->toArray();

//    $VideosSub=Videos::with('user','channel')->get();
   
$VideosSub=Videos::all()->first();
   
   //return json_encode($VideosSub);

   
$subscribe = Subscriber::where('user_id',auth::user()->id)
 ->where('channel_id', $VideosSub->channel_id)
//->where('status','true')
->get();


//return json_encode($VideosSub);

    return view('dashboard/dashboard')->with(compact('Videos','subscribe'));

});

route::get('/myVideos', function(){

    $Videos=Videos::where('user_id',Auth::user()->id)->get();

    $Videosget=Videos::where('user_id',Auth::user()->id)->first();

    //$Subscriber=Subscriber::where('user_id',$Videosget->id)->get();

    $Channels=Channel::where('user_id',Auth::user()->id)->get();

    //return json_encode($Subscriber);
    
    return view('user/myChannel')
    ->with(compact('Videos','Channels','Videosget'));

});




route::get('/myChannel/{id}', function($id){



    $Videos=Videos::where('channel_id',$id)->get();

//     $Channels=Channel::where('user_id',Auth::user()->id)->get();

    return view('user/myvideos')->with(compact('Videos'));

});


route::get('/uploadVideo', function(){

$channels=Channel::where('user_id',Auth::user()->id)->with('User')->get();

// return json_encode($channels);

    return view('manageVideos/uploadVideo')->with(compact('channels'));
    
});


route::get('/liveBroadcast', function(){




    $Videos=Videos::all();



    return view('liveBroadcasting/live')->with(compact('Videos'));

});





route::get('/subscribedChannel/{id}', function ($id) {


//must change first
    $Subscribers= Subscriber::where('user_id',$id)->pluck('channel_id')->toArray();

    // return json_encode($Subscribers);

    $Videos=Videos::whereIn('channel_id',$Subscribers)->get();

//return json_encode($Subscribers);

    return view('user/mySubscription')->with(compact('Videos'));

});

route::get('/profile', function () {
    
    
//     $Channel = App\Subscriber::all()->last();

//     if($Channel == 1){

// $subscribers= App\User::where('id',$Channel->user_id)->get();

//     }else{
        
//         $subscribers['name'] = "you have no subscibers yet.";
    
//     }
//eturn json_encode($subscribers);

    return view('user/profile/profile');

});

route::get('/comments', function () {
    
    return view('user/posts/comments');

});


route::get('/myBroadcast', function () {
    
    return view('liveBroadcasting/myBroadcast');

});


