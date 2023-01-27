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
</table>