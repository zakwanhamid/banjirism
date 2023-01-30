<section >
  <div id="create-form" class="container-lg"> 



    <h2>Create post for energies now!</h2>
    <h5 class="mb-3">Help others in need in term of energies</h5>
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
  </div>
</section>