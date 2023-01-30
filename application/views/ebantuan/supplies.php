<section>
  <div class="container-lg">
  <div class="row">
    <div class="col-12 ">
      <div class="card ">
          <div class="card-body">
            <div class="table-responsive">
              <table id="dtBasicExample" class="table table-striped table-bordered table-sm mt-2" cellspacing="0" width="100%">
                <thead>
                  <tr>
                      <th scope="col">Supplies ID</th>
                      <th scope="col">location</th>
                      <th scope="col">Date</th>
                      <th scope="col">Item</th>
                      <th scope="col">Phone Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <?php  
                      foreach ($supplies->result() as $row)
                      {  
                          ?><tr>  
                          <td><?php echo $row->supplies_id;?></td>  
                          <td><?php echo $row->location_supplies;?></td> 
                          <td><?php echo $row->date_supplies;?></td>
                          <td><?php echo $row->unit_item_supplies;?></td>  
                          <td><?php echo $row->phone_number_supplies;?></td> 
                          </tr>  
                      <?php }  
                      ?> 
                </tbody>
                <div class="card-body text-center py-4">
                    <h4 class="card-title">Supplies</h4>
                    <p class="card-text mx-2">Click the button if you have extra that can be donated to create new post!</p>
                    <p class="card-text mx-2">If you are in need of supplies, feel free to contact the person in the post.</p>
                </div>
                <div class="card-body text-end py-1">
                <a href="<?php echo base_url('supplies/create'); ?>" class="btn btn-outline-primary btn-lg mt-3">Create Post</a>
                </div>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>