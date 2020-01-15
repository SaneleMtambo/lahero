@extends('home')

@section('content')
<section id="bricks">

<div class="row masonry">
<div>
      <a class="button button-primary full-width" href="/uploadVideo">Upload</a>
      <a class="button full-width" href="/myBroadcast">Go Live</a></div>

      <div class="row half-bottom">

<div class="col-twelve">

     <h3 align="center">Channels</h3>

   <ul class="stats-tabs">
 


   @foreach($Channels as $Channel)
  
   <?php $chanId =   App\Subscriber::where('channel_id', $Channel->id)->where('status','true')->get()?>
        
        <li><a href="{{ url('/myChannel/'.$Channel->id) }}">{{($chanId)->count()}} <em>{{$Channel->name}}</em></a></li>

@endforeach
     </ul>	      		

</div>	      	

</div> <!-- end row -->

@endsection