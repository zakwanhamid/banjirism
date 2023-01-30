<h2>
  <?= $title; ?>
</h2>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<section>
  <div class="container-lg">
    <h2 class="mb-5">Stock Item required by
      <?php echo $name; ?>
    </h2>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">Item Quantity</th>
          <th scope="col">Item Category</th>
          <th scope="col">Item Name</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"></th>
          <?php
          foreach ($commHall as $row) {
            ?>
          <tr>
            <td id=number>
              <?php echo $row->quantity; ?>
            </td>
            <td>
              <?php echo $row->item_desc; ?>
            </td>
            <td>
              <?php echo $row->item_name; ?>
            </td>
            <td><a class="btn">Supply</a></td>
          <?php }
          ?>
      </tbody>
    </table>
  </div>
</section>
<script>
  $(document).ready(function () {
    $(".btn").click(function () {
      var currentNumber = parseInt($("#number").text());
      $("#number").text(currentNumber - 1);
    });
  });
</script>