<?php include('header.php');?>
<div class="container">
	
		<?php echo form_open('register/sucsesful');?>
	  <fieldset>
	    <legend>Registration</legend>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Team Name</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="team" id="inputEmail" placeholder="Team Name" value="<?php echo set_value('team');?>">
	        <?php echo form_error("team","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Password   </label>
	      <div class="col-lg-10">
	        <input type="password" class="form-control" name="pass" id="inputEmail" placeholder="Password">
	        <?php echo form_error("pass","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    <legend>First Member Details</legend>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Full Name</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="fname" id="inputEmail" placeholder="Name" value="<?php echo set_value('fname');?>">
	      	<?php echo form_error("fname","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputPassword" class="col-lg-2 control-label">Email</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="femail" id="inputPassword" placeholder="Email" value="<?php echo set_value('femail');?>">
	     	<?php echo form_error("femail","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    <legend>Second Member Details</legend>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Full Name</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="sname" id="inputEmail" placeholder="Name" value="<?php echo set_value('sname');?>">
	      	<?php echo form_error("sname","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputPassword" class="col-lg-2 control-label">Email</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="semail" id="inputPassword" placeholder="Email" value="<?php echo set_value('semail');?>">
	      	<?php echo form_error("semail","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    <legend>Thrid Member Details</legend>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Full Name</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="tname" id="inputEmail" placeholder="Name" value="<?php echo set_value('tname');?>">
	     	<?php echo form_error("tname","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputPassword" class="col-lg-2 control-label">Email</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="temail" id="inputPassword" placeholder="Email" value="<?php echo set_value('temail');?>">
	     	<?php echo form_error("temail","<p class='text-danger'>","</p>");?>
	      </div>
	    </div>

	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	      	<br />
	        <button type="reset" class="btn btn-default">Cancel</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	        <br />
	        <br />
	      </div>
	    </div>
	  </fieldset>
	</form>
</div>
<?php include('footer.php');?>