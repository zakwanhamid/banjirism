<h2><?= $title;?> </h2>
<section>
  <div class="container-lg">
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
            foreach ($item_requests as $row)
            {  
                ?><tr>  
                <td><?php echo $row['item_id'];?></td>  
                <td><?php echo $row['item_cat_name'];?></td>
                <td><?php echo $row['item_name'];?></td>
                <td><a href="<?= base_url("Stock_item_comm/requestView/".$row['item_id']) ?>" class="btn" >Request</a></td>
            <?php }  
            ?> 
      </tbody>
    </table>
    <div class="card-body text-end py-4">
      <a href="<?php echo base_url('Stock_item_comm/itemForm'); ?>" class="btn">Create New Item</a>
    </div>
  </div>
</section>