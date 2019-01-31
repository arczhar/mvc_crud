<!-- edit member -->
<div class="modal fade" tabindex="-1" role="dialog" id="editMemberModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Member</h4>
      </div>
      <form method="post" action="index.php/welcome/edit" id="editForm">
      <div class="modal-body">        
			  <div class="form-group">
			    <label for="editFname">First Name * </label>
			    <input type="text" class="form-control" id="editFname" name="editFname" placeholder="First Name">
			  </div>
			  <div class="form-group">
			    <label for="editLname">Last Name</label>
			    <input type="text" class="form-control" id="editLname" name="editLname" placeholder="Last Name">
			  </div>	
			  <div class="form-group">
			    <label for="editAge">Age * </label>
			    <input type="text" class="form-control" id="editAge" name="editAge" placeholder="Age">
			  </div>	
			  <div class="form-group">
			    <label for="editContact">Contact * </label>
			    <input type="text" class="form-control" id="editContact" name="editContact" placeholder="Contact">
			  </div>	
				<div class="form-group">
			    <label for="editdrive">Drive</label>
			    <input type="text" class="form-control" id="editdrive" name="editdrive" placeholder="Drive">
			  </div>	
				<div class="form-group">
			    <label for="editbarangay">Barangay</label>
			    <input type="text" class="form-control" id="editbarangay" name="editbarangay" placeholder="Barangay">
			  </div>	
			  <div class="form-group">
			    <label for="editAddress">Address</label>
			    <input type="text" class="form-control" id="editAddress" name="editAddress" placeholder="Address">
			  </div>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!-- /edit mmebers -->
