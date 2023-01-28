<table class="table table-sm">
  <thead>
    <tr>
        <th scope="col">Date</th>
        <th scope="col">Ngo Name</th>
        <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <?php  
         foreach ($status as $row)
         {  
            ?><tr>  
            <td><?php echo $row->date_request;?></td>  
            <td><?php echo $row->ngo_name;?></td>
            <td><?php echo $row->status; ?></td>> 
            </tr>  
         <?php }  
         ?> 
  </tbody>
</table>