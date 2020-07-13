<?php
include "header.php";
?>
<title>Coffee Shop</title>
<div class="card" align="center">
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Brand</th>
	  <th scope="col">Size</th>
	  <th scope="col">Buy</th>
      <th scope="col">Option</th>
    </tr>
	<?php 
		include 'koneksi.php';
		$beli = mysqli_query($koneksi,"SELECT * FROM beli");
		$no = 1;		
		while($d = mysqli_fetch_array($beli)){
			?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $d['brand']; ?></td>
	  <td><?php echo $d['size']; ?></td>
	  <td><?php echo $d['buy']; ?></td>
      <td>
		<a href="edit.php?id=<?php echo $d['id']; ?>">Update</a>
		<a href="delete.php?id=<?php echo $d['id']; ?>">Delete</a>
	  </td>
    </tr>
	<?php 
		}
		?>
  </tbody>
</table>
  </div>
</div>

<?php
include "footer.php";
?>