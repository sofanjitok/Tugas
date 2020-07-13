<?php
include "header.php";
?>
<title>Coffee Shop</title>
<form method="post" action="input.php">
<div class="card" align="center">
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Brand</th>
	  <th scope="col">Size</th>
	  <th scope="col">buy</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td><input type="text" name="brand"></td>
	  <td><input type="number" name="size"></td>
	  <td><input type="number" name="buy"></td>
      <td>
		<input type="submit" value="Order">
	  </td>
    </tr>
	
  </tbody>
</table>
  </div>
</div>
</form>
<?php
include "footer.php";
?>