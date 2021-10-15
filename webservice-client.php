<?php

	/*  
	  ini_set('display_errors', true);
	  error_reporting(E_ALL); 
	 */
  
	require_once('lib/nusoap.php');
	$error  = '';
	$result = array();
	$response = '';
	$wsdl = "http://localhost/warung-novel/webservice-server.php?wsdl";
	if(isset($_POST['sub'])){
		$title = trim($_POST['title']);
		if(!$title){
			$error = 'Tittle cannot be left blank.';
		}

		if(!$error){
			//create client object
			$client = new nusoap_client($wsdl, true);
			$err = $client->getError();
			if ($err) {
				echo '<h2>Constructor error</h2>' . $err;
				// At this point, you know the call that follows will fail
			    exit();
			}
			 try {
				$result = $client->call('fetchBookData', array($title));
				$result = json_decode($result);
			  }catch (Exception $e) {
			    echo 'Caught exception: ',  $e->getMessage(), "\n";
			 }
		}
	}	


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Warung Novel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Style CSS -->
	<link rel="stylesheet" href="style.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="untuk-bg">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <h1>⋆｡˚Warung Novel˚｡⋆｡</h1>
    <h3 class="display-4"><br>Jelajahi Dunia <br>Dengan Membaca Buku</h3>
  </div>
</div>

<div class="container">
  <div class="cari">
	  <p>Masukkan <strong>Judul</strong> Novel untuk Mendapatkan Informasi <strong>Harga</strong></p>
	  <br />       
	  <div class='row'>
		  <form class="form-inline" method = 'post' name='form1'>
			  <?php if($error) { ?> 
				<div class="alert alert-danger fade in">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<strong>Error!</strong>&nbsp;<?php echo $error; ?> 
				</div>
			<?php } ?>
			<div class="form-group">
			  <label for="email">Judul:</label>
			  <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Judul" required>
			</div>
			<button type="submit" name='sub' class="btn btn-default">Cek Harga</button>
		</form>
	   </div>
	   <br />
  </div>
   <h2>Informasi Novel</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Harga</th>
        <th>ISBN</th>
        <th>Genre</th>
      </tr>
    </thead>
    <tbody>
    <?php if($result){ ?>
      	
		      <tr>
		        <td><?php echo $result->title; ?></td>
		        <td><?php echo $result->author_name; ?></td>
		        <td><?php echo $result->price; ?></td>
		        <td><?php echo $result->isbn; ?></td>	
		        <td><?php echo $result->category; ?></td>
		      </tr>
      <?php 
  		}else{ ?>
  			<tr>
		        <td colspan='5'>Belum Ada Hasil</td>
		      </tr>
  		<?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>



