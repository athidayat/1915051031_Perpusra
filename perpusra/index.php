<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi Digital Perpusra</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/style1.css" media="screen"/>

  <script>
  function showHint(str) {
    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "gethint.php?q=" + str, true);
      xmlhttp.send();
    }
  }
  </script>

</head>

<body>
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" >Perpusra</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">BERANDA</a></li>
            <li><a href="#services">KOLEKSI</a></li>
            <li><a href="#portfolio">SEKILAS</a></li>
            <li><a href="#pricing">KONTAK</a></li>
            <li><a href="http://localhost/perpusra/admin/">LOGIN</a></li>
          </ul>
        </div>
      </div>
  </nav>


  <div class="jumbotron text-center">
    <h1>PERPUSRA</h1>
    <p>"Baca Bukumu !"</p>
   
  </div> 

  <div class="content">
    <div class="descriptions" align="center">
    <h2 style="margin: 0px;" >Selamat Datang di Aplikasi Digital Perpusra</h2>
      <h3 style="margin: 0px;"> Silahkan Login !</h3>
        
          <hr>
    </div>
    <div class="descriptions" align="center">
      <img src="assets/perpustaan.jpeg">
        <h1> Perpustakaan Rakyat </h1>
        <hr>
          <p>Perpustakaan Rakyat (Perpusra) adalah sebuah perpustaakn online berbasis website yang dapat diakses oleh semua orang dari berbagai kalangan seperti siswa, mahasiswa, guru atau masyarakat umum secara GRATIS. Pembuatan Website ini bertujuan sebagai media pembelajaran untuk mewujudkan merdeka belajar dan untuk menyongsong sumberdaya manusia Indonesia yang berkwalitas</p>
    </div>
  </div>

</body>

<footer class="container-fluid text-center">
  <a href="http://localhost/perpusra/" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <div class="footer" align="center">
    <h5>Copyleft 2020 @taufiqhidayat15</h5>
  </div>
  </footer>

</html> 