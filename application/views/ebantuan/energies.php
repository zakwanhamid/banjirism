<table class="table table-sm">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">location</th>
        <th scope="col">Date</th>
        <th scope="col">Number Member</th>
        <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <?php  
         foreach ($energies->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->energies_id;?></td>  
            <td><?php echo $row->location_energies;?></td> 
            <td><?php echo $row->date_energies;?></td>
            <td><?php echo $row->num_member_energies;?></td>  
            <td><?php echo $row->phone_number_energies;?></td> 
            </tr>  
         <?php }  
         ?> 
  </tbody>
  <div class="card-body text-center py-4">
      <h4 class="card-title">Energies</h4>
      <p class="card-text mx-2">Click the button below to enter your details in order to join the volunteerism to help those who affected by the flood </p>
      <a href="<?php echo base_url('energies/create'); ?>" class="btn btn-outline-primary btn-lg mt-3">Click here</a>
  </div>
</table>