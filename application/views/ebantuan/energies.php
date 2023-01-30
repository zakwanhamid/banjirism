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
                      <th class="text-center" scope="col">No.</th>
                      <th class="text-center" scope="col">location</th>
                      <th class="text-center" scope="col">Date</th>
                      <th class="text-center" scope="col">Number Member</th>
                      <th class="text-center" scope="col">Phone Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <?php  
                      foreach ($energies->result() as $row)  
                      {  
                          ?><tr>  
                          <td class="text-center"><?php echo $row->energies_id;?></td>  
                          <td class="text-center"><?php echo $row->location_energies;?></td> 
                          <td class="text-center"><?php echo $row->energies_date;?></td>
                          <td class="text-center"><?php echo $row->num_member_energies;?></td>  
                          <td class="text-center"><?php echo $row->phone_number_energies;?></td> 
                          </tr>  
                      <?php }  
                      ?> 
                </tbody>
                <div class="card-body text-center py-4">
                    <h4 class="card-title">Energies</h4>
                    <p class="card-text mx-2">Click the button below to enter your details in order to join the volunteerism to help those who affected by the flood </p>
                </div>
                <div class="card-body text-end py-1">
                  <a href="<?php echo base_url('energies/create'); ?>" id = "creat-post" class="btn btn-outline-primary btn-md mt-3">Create Post</a>
                </div>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
