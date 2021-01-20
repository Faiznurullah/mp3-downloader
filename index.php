<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="AUTO DOWNLOADER, MUSIC, DJ, MP3">
  <link href="https://i.ibb.co/pQ1bpx7/e56c22d9-d57e-4b1c-81db-ef4d3dc7e247.png" rel="icon">
  <title>MP3 MUSIC DOWNLOADER ~ rizky</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="ruang-admin.min.css" rel="stylesheet">
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      *{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
      }
      .avatar{
        vertical-align: middle;
        width: 100px;
        height: 100px;
        border-radius: 50%;
      }
  </style>
</head>
<body class="bg-gradient-login">
  <center>
    <img src="https://i.ibb.co/pQ1bpx7/e56c22d9-d57e-4b1c-81db-ef4d3dc7e247.png" alt="LOGO" class="avatar">
  </center>
  <div class="col-lg-6">
    <div class="card mb-4"><br />
      <h6 style="text-align: center">MP3 MUSIC DOWNLOADER</h6>
      <div class="card-body">
        <div class="alert alert-info alert-dismissible" role="alert">
          <h6><i class="fa fa-info-circle"></i><b> Information</b></h6>
          SEARCH JUDUL LAGU YANG INGIN ANDA DOWNLOAD, JIKA TERJADI ERROR SILAHKAN CARI CHANEL LAGU LAIN xD
        </div>
      </div>
      <form class="navbar-search" action="" method="post">
        <div class="input-group">
          <input type="text" name="judul" class="form-control bg-light border-1 small" placeholder="search judul lagu"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3abaf4;">
          <div class="input-group-append">
            <button class="btn btn-info" type="submit" name="cari">
              <i>CARI</i>
            </button>
          </div>
        </div>
      </form>
      <br>
    </div>
  </div>
  <?php
  include("simple_html_dom.php");
  
  if(isset($_POST["cari"])){
    if(empty($_POST["judul"])){
      ?>
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">RESULT</h6>
          </div>
          <div class="card-body">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <h6><i class="fa fa-exclamation-circle"></i><b> Warning!</b></h6>
              SEARCH LAGU KEBUTUHAN ANDA, ATAU PASTE URL VIDEO YOUTUBE AGAR DI CONVERT MENJADI MP3
            </div>
          </div>
        </div>
      </div>
      <?php
    }else{
      $cek_teks = $_POST["judul"];
      $cut_teks = str_replace(" ","+",$cek_teks);
      $cek = file_get_html("https://unexhibitsny.org/?search=".$cut_teks);
      ?>
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">RESULT</h6>
          </div>
          <div class="card-body">
      <?php
      foreach ($cek->find("div[class=menu]") as $menu){
        foreach ($menu->find("img") as $data){
          foreach ($menu->find("span[class=sg]") as $sg){
            foreach ($sg->find("b[class=play-count]") as $author){
              ?>
              <div style="align: justify;">
                <img height="60" src="<?= $data->src; ?>" style="float: left; margin: 0px 9px 3px 0px; border-radius: 2%;" width="60" />
              </div>
              <b>JUDUL : </b><?= $data->alt; ?><br>
              <b>DETAIL: </b><?= $author->plaintext; ?><br><br>
              <a href="next-step/index.php?id=<?= $data->id; ?>&judul=<?= $data->alt; ?>" target="_blank" class="btn btn-info btn-block">DOWNLOAD <i class="fa fa-download"></i></a>
              <hr><br>
              <?php
            }
          }
        }
      }
      ?>
          </div>
        </div>
      </div>
      <?php
    }
  }
  ?>

 <!--
  <div class="col-lg-6">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">RESULT</h6>
      </div>
      <div class="card-body">
        <a href="#" class="btn btn-info btn-block">DOWNLOAD <i class="fa fa-download"></i></a>
        <hr>
      </div>
    </div>
  </div> -->
  <script src="jquery.min.js"></script>
  <script src="bootstrap.bundle.min.js"></script>
  <script src="jquery.easing.min.js"></script>
</body>

</html>
