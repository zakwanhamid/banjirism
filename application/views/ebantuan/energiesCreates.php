<h2><?= $title;?> </h2>
<?php echo validation_errors(); ?>
<?php echo form_open("Energies/create"); ?>
<form>
  <div class="mb-3">
    <label>Location</label>
    <input type="text" class="form-control" name="location_energies" placeholder="Add Location">
  </div>
  <div class="mb-3">
    <label>Number Member</label>
    <input type="text" class="form-control" name="num_member_energies" placeholder="Add Number Member">
  </div>
  <div class="mb-3">
    <label>Phone Number</label>
    <input type="text" class="form-control" name="phone_number_energies" placeholder="Add Phone Number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>