<table class="table table-sm">
  <thead>
    <tr>
        <th scope="col">Item Code</th>
        <th scope="col">Item Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Requested</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <?php  
         foreach ($item as $row)
         {  
            ?><tr>  
            <td><?php echo $row->item_request_id;?></td>  
            <td><?php echo $row->item_name;?></td>
            <td><?php echo $row->quantity_request; ?></td>>
            <td><?php echo $row->balance_quantity;?></td>  
            </tr>  
         <?php }  
         ?> 
  </tbody>
</table>