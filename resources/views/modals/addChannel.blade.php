
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Channel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<form id="uploadForm" action="api/createChannel" method="post" enctype="multipart/form-data" class="form-horizontal">
@csrf
    <input class="full-width" type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
<div>
			        	<label for="sampleInput">Name of Channel</label>
			        	<input class="full-width" type="text" id="name" name="name">
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
