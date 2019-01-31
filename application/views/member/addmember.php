

<!-- add member -->
<div class="modal fade" tabindex="-1" role="dialog" id="addMember">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Member</h4>
      </div>
      <form method="post" action="index.php/welcome/create" id="createForm">
      <div class="modal-body">        
			  <div class="form-group">
			    <label for="fname">First Name * </label>
			    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
			  </div>
			  <div class="form-group">
			    <label for="lname">Last Name</label>
			    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
			  </div>	
			  <div class="form-group">
			    <label for="age">Age * </label>
			    <input type="text" class="form-control" id="age" name="age" placeholder="Age">
			  </div>	
			  <div class="form-group">
			    <label for="contact">Contact * </label>
			    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
			  </div>	
				<div class="form-group">
			    <label for="contact">Drive </label>
			    <input type="text" class="form-control" id="drive" name="drive" placeholder="drive">
			  </div>
				<div class="form-group">
			    <label for="contact">Barangay </label>
			    <input type="text" class="form-control" id="barangay" name="barangay" placeholder="barangay">
			  </div>
			  <div class="form-group">
			    <label for="address">Address</label>
			    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
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
	<!-- /add mmebers -->