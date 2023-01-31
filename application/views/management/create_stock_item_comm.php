<section >
  <div id="create-form" class="container-lg"> 
    <h2>Create stock item</h2>
    <form action="<?= base_url()?>Stock_item_comm/createItem" method="post">
      <div class="form-row">
        <div class="col-lg-7">
          <select class="form-select my-3 px-4" name="item_cat_name" id="identity" aria-label="Default select example">
            <option selected>Select Item Category</option>
            <?php foreach($category as $cat) { ?>
              <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
            <option value="<?php echo $cat->item_CAT_id; ?>"><?php echo $cat->item_cat_name; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="mb-3">
        <label>item name</label>
        <input type="text" class="form-control" name="item_name" placeholder="Add Item Name">
      </div>
      <div class="mb-3">
        <label>Item Description</label>
        <input type="text" class="form-control" name="item_desc" placeholder="Add Item Description">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section >
