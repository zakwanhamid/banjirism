<section>
  <div class="container-lg">
    <div class="row">
      <div class="col-12 ">
        <div class="card ">
          <div class="card-body">
            <div class="table-responsive">
              <h2 class="mb-5">Stock Item </h2>
              <table class="table table-sm">
                <thead>
                  <tr>
                      <th scope="col">Item Code</th>
                      <th scope="col">Item Category</th>
                      <th scope="col">Item Name</th>
                      <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <?php  
                      foreach ($items as $row)
                      {  
                          ?><tr>  
                          <td><?php echo $row['item_id'];?></td>  
                          <td><?php echo $row['item_cat_name'];?></td>
                          <td><?php echo $row['item_name'];?></td>
                          <td><a href="<?= base_url("Stock_item_comm/requestView/".$row['item_id']) ?>" class="btn" >Request</a></td>
                          </tr>  
                      <?php }  
                      ?> 
                </tbody>
              </table>
              <div class="card-body text-end py-4">
              <?php
              foreach ($items as $row)
                      {  
                          ?>
                          <a href="<?php echo base_url("Stock_item_comm/itemForm/".$row['item_id']); ?>" class="btn">Create New Item</a>  
                      <?php }
                      ?>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
