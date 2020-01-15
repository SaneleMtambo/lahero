
@extends('home')

@section('content')
<section id="bricks">

<div class="row masonry">
<div>
      <a class="button button-primary full-width" href="/subscribedChannel/{{Auth::User()->id}}">Subscribed Channels</a>
      <a class="button full-width" href="/liveBroadcast">Live</a></div>

    <!-- brick-wrapper -->
  <div class="bricks-wrapper">

      <div class="grid-sizer"></div>
<!-- 
      <div class="brick entry featured-grid animate-this">
          <div class="entry-content">
              <div id="featured-post-slider" class="flexslider">
                    <ul class="slides">

                        <li>
                            <div class="featured-post-slide">

                                <div class="post-background" style="background-image:url('images/thumbs/featured/featured-1.jpg');"></div>

                                <div class="overlay"></div>			   		

                                <div class="post-content">
                                    <ul class="entry-meta">
                                         <li>September 06, 2016</li> 
                                         <li><a href="#" >Naruto Uzumaki</a></li>				
                                     </ul>	

                                    <h1 class="slide-title"><a href="single-standard.html" title="">Minimalism Never Goes Out of Style</a></h1> 
                                </div> 				   					  
                        
                            </div>
                        </li> 

                        <li>
                            <div class="featured-post-slide">

                                <div class="post-background" style="background-image:url('images/thumbs/featured/featured-2.jpg');"></div>

                                <div class="overlay"></div>			   		

                                <div class="post-content">
                                    <ul class="entry-meta">
                                         <li>August 29, 2016</li>
                                         <li><a href="#">Sasuke Uchiha</a></li>					
                                     </ul>	

                                    <h1 class="slide-title"><a href="single-standard.html" title="">Enhancing Your Designs with Negative Space</a></h1>
                                </div>		   				   					  
                        
                            </div>
                        </li> 

                        <li>
                            <div class="featured-post-slide">

                                <div class="post-background" style="background-image:url('images/thumbs/featured/featured-3.jpg');;"></div>

                                <div class="overlay"></div>			   		

                                <div class="post-content">
                                    <ul class="entry-meta">
                                         <li>August 27, 2016</li>
                                         <li><a href="#" class="author">Naruto Uzumaki</a></li>					
                                     </ul>	

                                    <h1 class="slide-title"><a href="single-standard.html" title="">Music Album Cover Designs for Inspiration</a></h1>
                                </div>

                            </div>
                        </li> 

                    </ul> 
                </div>   			
          </div>       		
      </div>
      -->
      @foreach($Videos as $video) 
         <article class="brick entry format-video animate-this">

        <div class="entry-thumb video-image">
           <a href="{{$video->video}}" data-lity>
               <img src="images/thumbs/ottawa-bokeh.jpg" alt="bokeh">                   
           </a>
        </div>

        <div class="entry-text">
            <div class="entry-header">

                <div class="entry-meta">
                    <span class="cat-links">
                        <a href="#">{{$video->user->name}}</a> 
                        <a href="#">{{$video->channel->name}}</a> 
                               			
                    </span>			
                </div>

                <h1 class="entry-title"><a href="/comments">  {{$video->title}}.</a></h1>
                
            </div>
                 <div class="entry-excerpt">
                 {{$video->description}}
                  </div>
                  <div style="float:right"><span class="cat-links"><p><a> <small >1 like<small></a>
       <small href=><a href="/comments">1 Comment</a><small></p>
       </span>	
        </div>
        <?php $chanId =   App\Subscriber::where('channel_id', $video->channel_id)->where('user_id',Auth::user()->id)->where('status','true')->get() ?>
        

    
        @if(count($chanId) === 1)
        
  
        <form id="uploadForm" action="api/unsubscibtion" method="post" enctype="multipart/form-data" class="form-horizontal">
@csrf
    <input class="full-width" type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
    <input class="full-width" type="hidden" id="channel_id" name="channel_id" value="{{$video->channel_id}}">
<div>


                        <button style="float:right" type="submit">Unsubscribe </button>  

                  
                        </form>   


                    @else






                    <form id="uploadForm" action="api/subscibtion" method="post" enctype="multipart/form-data" class="form-horizontal">
@csrf
    <input class="full-width" type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
    <input class="full-width" type="hidden" id="channel_id" name="channel_id" value="{{$video->channel_id}}">
<div>


                        <button style="float:right" type="submit">Subscribe </button>  

                    
                        </form> 
                    @endif
        </div>
      
         </article> <!-- end article -->
         @endforeach

  </div> <!-- end brick-wrapper --> 

</div> <!-- end row -->


<div class="row">
    
    <nav class="pagination">
       <span class="page-numbers prev inactive">Prev</span>
        <span class="page-numbers current">1</span>
        <a href="#" class="page-numbers">2</a>
       <a href="#" class="page-numbers">3</a>
       <a href="#" class="page-numbers">4</a>
       <a href="#" class="page-numbers">5</a>
       <a href="#" class="page-numbers">6</a>
       <a href="#" class="page-numbers">7</a>
       <a href="#" class="page-numbers">8</a>
       <a href="#" class="page-numbers">9</a>
        <a href="#" class="page-numbers next">Next</a>
   </nav>

</div>

</section> <!-- end bricks -->

@endsection