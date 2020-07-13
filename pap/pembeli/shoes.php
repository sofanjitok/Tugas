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
	  <th scope="col">Price</th>
      <th scope="col">Option</th>
    </tr>
	<?php 
		include 'koneksi.php';
		$produk = mysqli_query($koneksi,"SELECT * FROM produk");
		$no = 1;		
		while($d = mysqli_fetch_array($produk)){
			?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $d['brand']; ?></td>
	  <td><?php echo $d['size']; ?></td>
      <td><?php echo $d['price']; ?></td>
      <td>
		<a href="input.php?id=<?php echo $d['id']; ?>"><a href="buy.php"> Order</a>
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