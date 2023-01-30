<div class="container-lg">
   
<table class="table table-sm">
  <thead>
    <tr>
        <th scope="col">#</th>
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
      <p class="card-text mx-2">Fill the form below to supply an item to those who suffer from flood</p>
      <p class="card-text mx-2">The Neighborhood community will contact you as soon as possible</p>
  </div>

  <a href="<?php echo base_url('energies/create'); ?>" class="btn btn-outline-primary btn-lg mt-3">Create Post</a>
</table>

</div>