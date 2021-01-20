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
  <link href="../bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../ruang-admin.min.css" rel="stylesheet">
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
  <?php
  if(!isset($_GET["id"]) && !isset($_GET["judul"])){
    header("Location: ../index.php");
  }
  $set_url = "https://y-api.org/button/?v=".$_GET["id"]."&f=mp3&bc=#0087ff";
  $set_embed = "https://www.youtube.com/embed/".$_GET["id"]."?playsinline=1";
  ?>
  <center>
    <img src="https://i.ibb.co/pQ1bpx7/e56c22d9-d57e-4b1c-81db-ef4d3dc7e247.png" alt="LOGO" class="avatar">
  </center>
  <div class="col-lg-6">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">RESULT</h6>
      </div>
      <div class="card-body">
        <center><a href="../index.php" class="btn btn-outline-dark"><i class="fa fa-dashboard"></i> KEMBALI KE DASHBOARD</a></center><br>
        <center><iframe style="border-radius: 20px" src="<?= $set_embed; ?>" rel="nofollow preconnect" width="90%" height="280" donotallowfullscreen></iframe></center>
        <hr>
        <center><b><?= $_GET["judul"]; ?></b></center><br>
        <iframe src="https://lagugratis.me/convert.php?link=<?= $_GET["id"]; ?>" scrolling="no" sandbox="allow-scripts allow-same-origin allow-downloads" width="300" height="40" frameborder="0" marginwidth="0" marginheight="0"></iframe>
      </div>
    </div>
  </div> 
  <script src="../jquery.min.js"></script>
  <script src="../bootstrap.bundle.min.js"></script>
  <script src="../jquery.easing.min.js"></script>
</body>
</html>