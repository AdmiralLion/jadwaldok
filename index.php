<html>
  <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
<body class="background-col">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  
  <script  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src=getDokter2.js></script>
  <div class="card col-sm-9 align-middle">
  <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="card-img-top d-block w-100" src="img/645bebf2-91fa-44d8-85fd-d9745751475f.jpeg" alt="Card image cap">
                </div>
                <div class="carousel-item">
                <img class="card-img-top d-block w-100" src="img/e02a90c6-d3a9-430f-b083-335ac022f84f.jpeg" alt="Card image cap">
                </div>
            </div>
    <div class="card-body">
      <div class="container">
        <div class="container-fluid">
        <h2 style="text-align:center">Jadwal Dokter <span class="bg-maroon">RSI Darus Syifa' Surabaya</span></h2>
        <br><br>
          <div class="container">
            <div class="row">
              <div class="col">
              <h3 class="col-sm-6">Unit Pelayanan</h3>
              </div>
              <div class="col">
              <h3 class="col-sm-6">Pilih hari</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
              <?php 
                require ("koneksi.php");
                $sql = "SELECT * from b_ms_unit WHERE nama LIKE 'Poli%' AND aktif=1 GROUP BY nama";
                $result = $conn->query($sql);
                echo "<select id='dokter' onchange='selectDokter()' class='selectpicker col-sm-12' data-live-search='true' data-style='btn-success btn-lg' >";
                if ($result->num_rows > 0) {
                  while($rows = $result->fetch_assoc()) {
                    echo "<option selected='selected' value=".$rows['id'].">".$rows['nama']."</option>";
                    }
                  }
                  
                echo "</select>";
                ?>
              </div>
              <div class="col-6">
              <select name="hari" id="hari" onchange="selectHari()" class="selectpicker col-sm-12" data-style='btn-info btn-lg'>
                  <option value="1">Senin</option>
                  <option value="2">Selasa</option>
                  <option value="3">Rabu</option>
                  <option value="4">Kamis</option>
                  <option value="5">Jumat</option>
                  <option value="6">Sabtu</option>
                  <option value="7">Minggu</option>
                </select>
              </div>
                </div>
          <br><br>
        <hr/>
              <table class="table table-striped">
                <thead>
                  <th class='hidden'>ID</th>
                  <th>Nama Dokter</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Hari</th>
              </thead>
              <tbody id="coba">
              </tbody>
          </table>
                <?php 
              ?>
              <br>
              <a href="../index.html" class="btn btn-success">Kembali</a> 
              <br><br>
        </div>
        </div>
    </div>
  </div>
</body>
</html>