
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>UAS</title>
  </head>
  <style type="text/css">



  </style>
  <body style="background:black;">
 
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title">TABEL HEWAN</h5>
       
      </div>
      <div class="modal-body bg-dark"><br/>
	<br/>
	
	 <table class="table">
  <thead>
    <tr>
      <th class="text-light" scope="col">NO</th>
      <th class="text-light" scope="col">NAMA HEWAN</th>
      <th class="text-light" scope="col">GOLONGAN</th>
      <th class="text-light" scope="col">HABITAT</th>
	  <th class="text-light" scope="col">OPSI</th>
    </tr>
  </thead>
  <tbody>
  <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from hewan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td class="text-light"><?php echo $no++; ?></td>
				<td class="text-light"><?php echo $d['nama_hewan']; ?></td>
				<td class="text-light"><?php echo $d['golongan']; ?></td>
				<td class="text-light"><?php echo $d['habitat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>

  </tbody>
</table>

      <div class="modal-header"><button onclick='change();'  value='show' id='btn1' type="button" class="btn btn-primary">TAMBAH HEWAN</button></a>
  </div>
<br>


<div id='div1' style="visibility:hidden;">
<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td class="text-light">Nama Hewan</td>
				<td><input type="text" name="nama_hewan"></td>
			</tr>
			<tr>
				<td class="text-light">Golongan</td>
				<td><input type="text" name="golongan"></td>
			</tr>
			<tr>
				<td class="text-light">Habitat</td>
				<td><input type="text" name="habitat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</div>

<script>
function change()
{
    var btn_text = $("#btn1").val();
    if(btn_text == "hide")
    {
      document.getElementById("div1").style.visibility = "hidden";
      $("#btn1").val("show");

    }
    else if(btn_text == "show")
    {
      document.getElementById("div1").style.visibility = "visible";
      $("#btn1").val("hide");

    }
}
</script>
      </div>
    </div>
  </div>


<script type="text/JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>