<table border="1">  
      <tbody>  
         <tr>  
            <td>Country Id</td>  
            <td>Country Name</td>  
         </tr>  
         <?php  
         foreach ($finance->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->location_finance;?></td>  
            <td><?php echo $row->ngo_name_finance;?></td> 
            <td><?php echo $row->acc_name_finance;?></td>  
            <td><?php echo $row->acc_num_finance;?></td> 
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>

   <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">location</th>
      <th scope="col">NGO Name</th>
      <th scope="col">Account Name</th>
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
            <td><?php echo $row->location_finance;?></td>  
            <td><?php echo $row->ngo_name_finance;?></td> 
            <td><?php echo $row->acc_name_finance;?></td>  
            <td><?php echo $row->acc_num_finance;?></td> 
            </tr>  
         <?php }  
         ?> 
  </tbody>
</table>