<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enkripsi Permutasi</title>

    <link
      rel="stylesheet"
      href="assets/libraries/bootstrap/css/bootstrap.css"
    />
    <link rel="stylesheet" href="assets/styles/main.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <section id="hero">
      <div class="container" >
        <h3 data-aos="zoom-in-up" data-aos-easing="ease" data-aos-delay=100>Permutasi</h3>
        <h1 data-aos="zoom-in-up" data-aos-easing="ease" data-aos-delay=200>Teknik Dasar Enkripsi</h1>
        <h2 data-aos="fade-up" data-aos-easing="ease" data-aos-delay=300>Memindahkan atau merotasikan karakter dengan aturan tertentu</h2>

        <form action="" method="POST" enctype="multipart/form-data">
          <input
            type="text" size="80"
            class="form-control form-control-lg mb-5 rounded-pill"
            placeholder="Masukkan kalimat yang ingin dienkripsi"
            name="kalimat"
            required
            autofocus
          />

          <input
            type="number"
            class="form-control form-control-lg mb-5 rounded-pill"
            placeholder="Masukkan banyak kolom transposisi"
            name="kolom"
            required
            autofocus
          />

          <button type="submit" href="#result" class="btn-get-started scrollto" data-aos="zoom-in-up" data-aos-easing="ease" data-aos-delay=600>
            Let's Encrypt
          </button>
        </form>
      </div>
    </section>

    

    <section id="result">
      <div class="container mt-5" >
        
        <h2 class="mb-5" data-aos="fade-up" data-aos-easing="ease" data-aos-delay=100>Hasil Enkripsi</h2>
        
        <div class="container col-6" data-aos="fade-up" data-aos-easing="ease" data-aos-delay=200>
          <?php 
            include "aksi.php";
          ?>
        </div>


        <h3 data-aos="fade-up" data-aos-easing="ease" data-aos-delay=300>Plain text</h3>
        <input
          type="text" value="<?php if(isset($_POST['kalimat'])) {echo $kalimat;}?>"
          class="form-control form-control-lg mb-5 rounded-pill bg-light" disabled data-aos="fade-up" data-aos-easing="ease" data-aos-delay=400
        />

        <h3 data-aos="fade-up" data-aos-easing="ease" data-aos-delay=500>Chiper text</h3>
        <input
          type="text" value="<?php if(isset($_POST['kalimat'])) {echo $hasil;}?>"
          class="form-control form-control-lg mb-5 rounded-pill bg-light"disabled  data-aos="fade-up" data-aos-easing="ease" data-aos-delay=600
        />
      </div>
    </section>
    
    

    <footer class="container-fluid">
      <div
        class="row border-top justify-content-center align-items-center pt-4 mb-4"
      >
        <div class="col-auto text-gray-500">
          2020 Copyright • Kelompok 3 4KA21
        </div>
      </div>
    </footer>
    <script src="assets/libraries/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
