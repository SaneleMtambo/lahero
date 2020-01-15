<div class="modal fade" id="UpdateForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Bio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="UpdateForm" action="api/updateBio" method="post" enctype="multipart/form-data" class="form-horizontal">
@csrf
    <input class="full-width" type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
<div>
			        	<label for="sampleInput">Profile Picture</label>
			        	<input accept="image/*" class="form-control" type="file"  id="upload-image" name="upload-image">
			      </div>


                  <div>
			        	<label for="sampleInput">Bio</label>
			        	<textarea class="full-width" type="text" id="bio" name="bio"></textarea>
			      </div>




      </div>
      <div class="modal-footer">
        <button type="close" class="button button-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="button">Add</button>
        </form>
      </div>
      
    </div>
  </div>
</div>
















