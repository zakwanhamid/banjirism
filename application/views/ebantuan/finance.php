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
                    <th scope="col">Account Name</th>
                    <th scope="col">NGO Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Account Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <?php  
                      foreach ($finance->result() as $row)  
                      {  
                          ?><tr>  
                          <td><?php echo $row->ngo_name_finance;?></td> 
                          <td><?php echo $row->acc_name_finance;?></td>  
                          <td><?php echo $row->location_finance;?></td>  
                          <td><?php echo $row->acc_num_finance;?></td> 
                          </tr>  
                      <?php }  
                      ?> 
                </tbody>
                <div class="card-body text-center py-4">
                    <h4 class="card-title">Finances</h4>
                    <p class="card-text mx-2">These are all the list of certified NGO and their account numbers</p>
                </div>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
