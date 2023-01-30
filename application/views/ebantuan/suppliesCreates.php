<section >
  <div id="create-form" class="container-lg"> 
  <h2>Create post for supplies now!</h2>
  <h5 class="mb-3">Help others in need in term of energies</h5>
  <?php echo validation_errors(); ?>
  <?php echo form_open("Supplies/create"); ?>
  <form>
    <div class="mb-3">
      <label>Location</label>
      <input type="text" class="form-control" name="location_supplies" placeholder="Add Location">
    </div>
    <div class="mb-3">
      <label>Item</label>
      <input type="text" class="form-control" name="unit_item_supplies" placeholder="Add item and quantity (15 toothbrush, 20 toothpastes)">
    </div>
    <div class="mb-3">
      <label>Phone Number</label>
      <input type="text" class="form-control" name="phone_number_supplies" placeholder="Add Phone Number">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  </div>
</section>