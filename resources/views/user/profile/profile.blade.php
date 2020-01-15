
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
@extends('home')

@section('content')



  <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<article class="format-standard">  



					<div class="primary-content">
                    <div class="author-profile">
		  			   <a>	<img src="{{Auth::user()->profile}}" alt=""></a>

		  			   	<div class="about">
		  			   		<h4><a href="#">{{Auth::user()->name}}</a></h4>
		  			   	
		  			   		<p>{{Auth::user()->description}}<a  data-toggle="modal" data-target="#UpdateForm">  Update your bio?</a></p>

		  			   		<ul class="author-social">
		  			   			<li><a href="facebook.com">Facebook</a></li>
						        	<li><a href="twitter.com">Twitter</a></li>
						        	<li><a href="google.com">GooglePlus</a></li>
						        	<li><a href="instagram.com">Instagram</i></a></li>					        	
		  			   		</ul>
		  			   	</div>
		  			   </div> <!-- end author-profile -->
		
						<p class="tags">
		  			     	<span>Subscribers :</span>
		  				  	
						
								
						@foreach($subscribers as $sub)<a href="#">{{$sub->name}}</a>@endforeach
								<small><a>click to view more...<a></small>
								
								<!-- <a href="#">lectus</a><a href="#">varius</a><a href="#">turpis</a> -->
		  			   </p>

		  									

					</div> <!-- end entry-primary -->		  			   

				</article>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

	
   </section> <!-- end content -->
@endsection


