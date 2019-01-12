<?php
    $isi   =  $_GET['isi'];

    $konten = [
        [
          'judul'=>'Candi Bojong Menje',
          'gambar'=>'https://sejarahlengkap.com/wp-content/uploads/2018/07/Candi-Bojong-Menje-300x194.jpg','video'=>'https://www.youtube.com/embed/Qdr0wPFWM7U',
          'isi'=>'<p>Candi Bojong menje atau yang lebih dikenal di masyarakat sebagai Situs Rancaekek, merupakan komplek peninggalan purbakala yang diduga oleh para arkeologi merupakan peninggalan masa pra-Islam di Jawa Barat yang terletak di Dusun Bojongmenje, Kalurahan Cangkuang, Kecamatan Rancaekek, Kota Bandung, Provinsi Jawa Barat. Situs Bojong menje terletak di dekat kawasan industri di daerah Bandung sehingga keberadaan dari situs ini dapat terancam.</p>
          <p>Pada bulan Agustus tahun 2002, secara tidak sengaja seorang warga di Kampung Bojong menje, Desa Cangkuang, Kecamatan Rancaekek yang hendak mencari tanah guna untuk menggaruk sebuah gang yang tanahnya tidak rata, warga tersebut menemukan sebuah rongga di dalam tanah yang di sekelilingnya terdapat sebuah tumpukan batu yang tertata sangat rapi. Penemuan dari tumpukan batu tersebut akhirnya diputuskan oleh para arkeologi sebagai bagian dari suatu candi, semenjak saat itu dilokasi tersebut dilakukan ekskavasi oleh para arkeologi untuk penemuan dan penelitian lebih lanjut di candi tersebut.</p>'
        ],
        [
          'judul'=>'Candi Cangkuang',
          'gambar'=>'https://sejarahlengkap.com/wp-content/uploads/2018/07/Candi-Cangkuang-300x199.jpg',
          'video'=>'https://www.youtube.com/embed/i7E5EKE4KIU',
          'isi'=>'<p>Candi Cangkuang adalah sebuah Candi Hindu di Indonesia yang terdapat di Kampung Pulo, wilayah Cangkuang, Kecamatan Leles, Garut, Jawa Barat. Candi Cangkuang juga yang pertama kali ditemukan di Tatar Sunda serta merupakan satu-satunya candi Hindu di Tatar Sunda. Candi ini terletak bersebelahan dengan makam yang sangat bersejarah yaitu Embah Dalem Arief Muhammad, sebuah makam kuno pemuka agama Islam yang dipercaya oleh warga setempat sebagai leluhur penduduk Desa Cangkuang.</p>
          <p>Candi Cangkuang pertama kali ditemukan pada tahun 1966 oleh tim peneliti Harsoyo dan Uka Tjandrasasmita berdasarkan dari laporan Vorderman dalam buku yang dia tulis “Notulen Bataviaasch Genotschap” terbitan tahun 1893 mengenainya adanya sebuah arca yang rusak serta makam kuno di bukit Kampung Pulo, Leles yang tertulis di dalam buku itu. Makam dan arca Syiwa yang dimaksud dalam buku itu memang diketemukan oleh tim peneliti Harsoyo dan Uka Tjandrasasmita.</p>'
        ],
        [
          'judul'=>'Candi Jiwa',
          'gambar'=>'https://sejarahlengkap.com/wp-content/uploads/2018/07/Candi-Jiwa-300x157.jpg',
          'video'=>'https://www.youtube.com/embed/r2xwXJH8EGI',
          'isi'=>'<p>Sejarah Candi Jiwa yang ditemukan di kompleks situs Batujaya seperti candi Jiwa, struktur bagian atas dari candi ini menunjukkan bentuk dari sebuah bunga padma (bunga teratai). Pada bagian tengah dari candi ini terdapat sebuah denah yang dibuat dengan struktur melingkar yang sepertinya adalah bekas stupa atau lapik patung Buddha. Pada candi ini tidak ditemukan adanya sebuah tangga, sehingga wujudnya mirip dengan stupa atau arca Buddha di atas dari bunga teratai tersebut. Seperti sebuah teratai yang sedang berbunga mekar dan terapung di atas air. Bentuk seperti yang ada di bangunan candi ini adalah unik dan belum pernah ditemukan di candi yang ada di Indonesia.</p>'
        ],
        
      ];

    // die(print_r($konten[0]['judul']));
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">

  <title><?php echo $konten[$isi]['judul'];?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
      <h1 class="display-4"><?php echo $konten[$isi]['judul'];?></h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
  </div>

  <section class="video" id="video">
    <div class="container">
      <h4 class="text-center pt-4 pb-3">Vidio</h4>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="<?php echo $konten[$isi]['video']?>" allowfullscreen></iframe>
      </div>
    </div>
  </section>
  

  <section id="about" class="about mt-5 pb-5 rgba-black-strong">
    <div class="container">
      <h4 class="text-center pt-4 pb-3">Tentang Candi</h4>
      <div class="text-justify">
        <?php echo $konten[$isi]['isi'];?>
      </div>
    </div>
  </section>

  <footer class="badge-dark p-3">
    <p class="text-center">&copy 2019 TUBES SISMUL </p>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
</body>

</html>