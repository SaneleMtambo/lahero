@extends('home')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
<div class="col-six tab-full">




<h3 align="center">Upload Video</h3>


<form id="uploadForm" action="api/uploadNewVideo" method="POST" enctype="multipart/form-data" class="form-horizontal">
@csrf
<input type="hidden" name="user_id" id="user_id"value="{{Auth::user()->id}}"/>

<label for="exampleMessage">Select Video</label> <a style="float:right"  data-toggle="modal" data-target="#exampleModal"><small>NEW CHANNEL</small></a>

<input  class="form-control" type="file"  id="videoFile"  name="videoFile">
   
<div>
			        	<label for="sampleInput">Title</label>
			        	<input class="full-width" type="text" id="title" name="title">
			      </div>

<label for="exampleMessage">Description</label>
       <textarea class="full-width" placeholder="describe the content" id="description" name="description"></textarea>

    <div>
          <label for="sampleRecipientInput">Channel</label>
          <div class="ss-custom-select">
              <select class="full-width" id="channel_id"  name="channel_id">
              @foreach($channels as $channel) 
                  <option id="channel_id" name="channel_id" value="{{$channel->id}}">{{$channel->name}}</option>
                 @endforeach
              </select>
          </div>			         	
    </div>
     

    <input class="button-primary full-width-on-mobile" type="submit" value="Submit">
       <!-- <button type="submit" class="btn btn-primary full-width">submit</button> -->

 </form>	            

</div>


























     <!-- modal -->
     <!-- Modal -->
     <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
      <div class="card">
                            <div class="card-header">
                                <strong>Add Supplements</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form id="uploadForm" action="api/HCP/addstock" method="post" enctype="multipart/form-data" class="form-horizontal">
                                  @csrf
                                  <input type="hidden" name="ga_id" id="user_id"value="{{Auth::user()->id}}"/>
                                  <input type="hidden" name="hcp_id" id="hcp_id"value="1"/>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Cost Excl</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="cost_exc" name="cost_exc"  class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Cost Incl</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="cost_incl" name="cost_incl" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Perc Incl</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="perc_incl" name="perc_incl" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Cost Patient</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="cost_patient" name="cost_patient"  class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Stock Level</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="stock_level" name="stock_level"  class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Invoice ID</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="invoice_id" name="invoice_id" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Supplier ID</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="supplier_id" name="supplier_id" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Mini Levels</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="mini_levels" name="mini_levels" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Napi Code</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="napi_code" name="napi_code" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Discription</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="description" name="description" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                 
                                    
                               
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Save Changes
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Close
                                </button>
                            </div>
                        </div>
                        </form>
      </div>

    </div>
  </div>
</div> -->
@endsection

@include('modals/addChannel')