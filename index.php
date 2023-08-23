<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulis Apapun</title>
    <link rel="shortcut icon" href="asset/favicon.png" type="image/x-icon">
    <meta name="description" content="Tulis apa aja, terserah!">t
    <?php
    include "koneksi.php";   

    if(isset($_POST['tambah']))
{
    //Data akan disimpan Baru
    $simpan = mysqli_query($koneksi, "INSERT INTO catatan (catatan)
                    VALUES ('$_POST[catatan]')
                   ");
  }
    // Css style $heet
    echo "<link rel='stylesheet' type='text/css' href='style.css' />";
?>
</head>
<body>
        <div class="header">
            <!-- <img src="asset/logo.png" alt="" width="30px"> -->
            <h1>Tulis Apapun</h1>
        </div>
    <div class="container">
        <form action="" method="post">
            <label for="catatan"></label>
            <input type="text" name="catatan" id="tulis" rows="3" maxlength="50" placeholder="Tulis apa aja, terserah!" required></input>
           <button type="submit" class="tambah" name="tambah">Simpan</button>
        </form>
	    <div class="container-catatan">
        <?php
    $tampil = mysqli_query($koneksi, "SELECT catatan FROM catatan");
    $catatanArray = array();

    while ($data = mysqli_fetch_array($tampil)) {
        $catatanArray[] = $data['catatan'];
    }

    $catatanArray = array_reverse($catatanArray); // Balik urutan array

    foreach ($catatanArray as $index => $catatan) {
        if ($index % 2 === 0) {
            echo '<div class="catatan">
                    <p>' . $catatan . '</p>
                  </div>';
        } else {
            echo '<div class="catatan2">
                    <p>' . $catatan . '</p>
                  </div>';
        }
    }
?>





            
        </div>
    </div>
</body>

</html>