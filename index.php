<?php
  
  include 'config.php';
  
  if (isset($_POST['post_koment'])) {
   
    $nama = $_POST['nama'];
    $konfirmasi = $_POST['konfirmasi'];
    $komentar = $_POST['komentar'];
    
   $sql = "INSERT INTO tamu (nama, konfirmasi, komentar)
    VALUES ('$nama', '$konfirmasi', '$komentar')";

  if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Undangan digital</title>
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@700&family=Sacramento&family=Work+Sans:wght@100;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Source+Code+Pro:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="botnav.css">
    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--Simply countdown  -->
  <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css"/>
    <script src="countdown/simplyCountdown.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
<!--  -->
</head>
  <body >
   <section id="home" class="home w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
    <main>
        <h4>Sabtu, 30 September 2023 </h4>
        <h1> Irgiw & Fulan</h1>
        <p>Hello, We Are Getting Married</p>
        <!-- <div class="simply-countdown"></div> -->
        <!-- <a href="#home" class="btn btn-lg mt-4" onClick="enableScroll()">Lihat Undangan</a> -->
    </main>
   </section>
  <!-- bottom navigasi -->
  <div class="botnav">
    <div class="navigation">
      <ul>
        <li class="list active">
          <a href="#home">
            <span class="icon"><i class="ri-home-4-line"></i></span>
            <span class="text">Home</span>
          </a>
        </li>
        <li class="list">
          <a href="#profile">
            <span class="icon"><i class="ri-group-line"></i></span>
            <span class="text">Profile</span>
          </a>
        </li>
        <li class="list">
          <a href="#info">
            <span class="icon"><i class="ri-calendar-line"></i></span>
            <span class="text">Acara</span>
          </a>
        </li>
        <li class="list">
          <a href="#story">
            <span class="icon"><i class="ri-book-open-line"></i></span>
            <span class="text">Story</span>
          </a>
        </li>
        <li class="list">
          <a href="#gallery">
            <span class="icon"><i class="ri-gallery-line"></i></span>
            <span class="text">Gallery</span>
          </a>
        </li>
        <li class="list">
          <a href="#gifts">
            <span class="icon"><i class="ri-gift-2-line"></i></span>
            <span class="text">Gifts</span>
          </a>
        </li>
        <li class="list">
          <a href="#rspv">
            <span class="icon"><i class="ri-message-2-line"></i></span>
            <span class="text">RSPV</span>
          </a>
        </li>
        <div class="indicator"></div>
      </ul>
    </div>
  </div>
  
  <!-- countdown -->
  <div id="countdown" class="countdown">
    <h2>Countdown</h2>
    <div class="simply-countdown"  data-aos="fade-up" data-aos-duration="1000"></div>
  </div>
<!-- profile -->
  <section id="profile" class="profile">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h2>Bride & Groom</h2>
          <h3>Assalamu’alaikum Warahmatullahi Wabarakatuh</h3>
          <p>Maha suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan.
            Ya Allah, perkenankanlah kami merangkai kasih sayang yang Kau ciptakan di antara putra-putri kami:</p>
        </div>
      </div>
      <div class="row couple">
          <div class="row img-">
            <div class="col-6 img" data-aos="fade-right" data-aos-duration="1000">
              <img src="img/biru.png" alt="irgiw" class="img-responsive rounded-circle img-bg">
              <h2>Irgiw</h2>
              <h4>Muhamad Virgiawansyah</h4>
              <p>Putra pertama <br> dari Bpk. Lorem dan Ibu Ipsum</p>
              <p style="color: rgb(160, 46, 46)"><i class="ri-map-pin-line"></i> Bogor</p>
              <p class="icon-profile">
                <a href=""><i class="ri-instagram-line"></i></a>
                <a href=""><i class="ri-facebook-circle-fill"></i></i></a>
                <a href=""><i class="ri-tiktok-fill"></i></a>
              </p>
            </div>
            <div class="col-6 img" data-aos="fade-left" data-aos-duration="2000">
              <img src="img/biruu cewe.png" alt="fulanah" class="img-responsive rounded-circle img-bg">
              <h2>Fulanah</h3>
              <h4>fulanah fulanah</h4>
              <p>Putri kedua <br> dari Bpk. Lorem dan Ibu Ipsum</p>
              <p style="color: rgb(160, 46, 46)"><i class="ri-map-pin-line"></i> Bogor</p>
              <p>
                <a href=""><i class="ri-instagram-line"></i></a>
                <a href=""><i class="ri-facebook-circle-fill"></i></i></a>
                <a href=""><i class="ri-tiktok-fill"></i></a>
              </p>
            </div>  
          </div>
      </div>
      </div>
  </section>
<!-- info -->
  <section id="info" class="info">
    <div class="container">
      <div class="row row-cols-2 justify-content-center mt-4">
        <div class="col acara"data-aos="fade-up" data-aos-duration="1000">
          <div class="card text-center text-bg-light mb-4 ">
            <div class="card-header">
              <h3>Akad Nikah</h3>
              <span><i class="bi bi-calendar3 d-block" style="color: black"></i>Jum'at, 29 September 2023</span>
              <p>08.00 - 10.00</p>
              <p>Kp Jemser, Cihideung Ilir, Kec. Ciampea, Kabupaten Bogor, Jawa Barat 16620
              </p>
              <a href="https://goo.gl/maps/3ZqPqKBrVRXuRGRS7" target="-blank" class="btn btn-primary btn-sm my-3">Google Map</a>
            </div>
          </div>
        </div>
        <div class="col acara" data-aos="fade-up" data-aos-duration="2000">
          <div class="card text-center text-bg-light">
            <div class="card-header">
              <h3>Resepsi</h3>
              <span><i class="bi bi-calendar3 d-block" style="color: black"></i>Sabtu, 30 September 2023</span>
              <p>09.00 - Selesai WIB</p>
              <p>Kp Jemser, Cihideung Ilir, Kec. Ciampea, Kabupaten Bogor, Jawa Barat 16620
              </p>
              <a href="https://goo.gl/maps/3ZqPqKBrVRXuRGRS7" target="-blank" class="btn btn-primary btn-sm my-3">Google Map</a>
            </div>
          </div>
        </div>
        <div class="col-md-8 text-center ">
          <p class="description">Diharapkan untuk tidak salah alamat dan tanggal. Manakala tiba di tujuan namun tidak ada tanda-tanda sedang dilangsungkan pernikahan boleh jadi Anda salah jadwal, atau salah tempat.</p>
        </div>
      </div>
    </div>
  </section>
<!-- Story -->
  <section id="story" class="story">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <!-- <span>Bagaimana Cinta Kami Bersemi</span> -->
          <h2>Cerita Kami</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur odio esse corrupti eos aspernatur dolorem!</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <ul class="timeline">
            <li>
              <div class="timeline-img" style="background-image: url(img/story1.png);" data-aos="zoom-in" data-aos-duration="1000"></div>
              <div class="timeline-panel" data-aos="zoom-in-right" data-aos-duration="1000">
                <div class="timeline-heading">
                <h3>Pertama Bertemu</h3>
                <span>1 Juni 2016</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, qui.</p>
                </div>
              </div>
            </li>

            <li class="timeline-kebalikan">
              <div class="timeline-img" style="background-image: url(https://picsum.photos/300/300);"data-aos="zoom-in"data-aos-duration="2000"></div>
              <div class="timeline-panel" data-aos="zoom-in-right" data-aos-duration="2000">
                <div class="timeline-heading">
                <h3>Menyatakan Cinta</h3>
                <span>21 Agustus 2019</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis incidunt vero modi laborum, quidem quas..</p>
                </div>
              </div>
            </li>
            <li class="timeline">
              <div class="timeline-img" style="background-image: url(https://picsum.photos/301/301);" data-aos="zoom-in" data-aos-duration="3000"></div>
              <div class="timeline-panel" data-aos="zoom-in-right" data-aos-duration="3000">
                <div class="timeline-heading">
                <h3>Tunangan</h3>
                <span>21 Agustus 2019</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, corporis? Nulla.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- Gallery -->
  <section id="gallery" class="gallery">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>Memory Kisah Kami</span>
          <h2>Gallery Foto</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur odio esse corrupti eos aspernatur dolorem!</p>
        </div>
      </div>

      <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
        <div class="col mt-3">
          <a href="img/gallery/1.png" data-toggle="lightbox" data-caption="irgiw" data-gallery="mygallery">
            <img src="img/gallery/thumbnail/1.png" alt="irgiw" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/307/1200/768" data-toggle="lightbox" data-caption="irgiw1" data-gallery="mygallery">
            <img src="https://picsum.photos/id/307/300/400" alt="irgiw" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/308/1200/768" data-toggle="lightbox" data-caption="irgiw2" data-gallery="mygallery">
            <img src="https://picsum.photos/id/308/300/400" alt="irgiw" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/309/1200/768" data-toggle="lightbox" data-caption="irgiw3" data-gallery="mygallery">
            <img src="https://picsum.photos/id/309/300/400" alt="irgiw" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/305/1200/768" data-toggle="lightbox" data-caption="irgiw4" data-gallery="mygallery">
            <img src="https://picsum.photos/id/305/300/400" alt="irgiw" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/304/1200/768"data-toggle="lightbox" data-caption="irgiw5" data-gallery="mygallery">
            <img src="https://picsum.photos/id/304/300/400" alt="irgiw" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/310/1200/768" data-toggle="lightbox" data-caption="irgiw6" data-gallery="mygallery">
            <img src="https://picsum.photos/id/310/300/400" alt="irgiw" class="img-fluid w-100 rounded">
          </a>
        </div>
      </div>
    </div>
  </section>

 
<!-- Gifts -->
  <section id="gifts" class="gifts">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>Ungkapan tanda kasih</span>
          <h2>Kirim Hadiah</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, ipsam mollitia.</p>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="fw-bold">BCA </div>
              123456789 - Irgiw
            </li>
            <li class="list-group-item">
              <div class="fw-bold">MANDIRI </div>
              981238428 - Irgiw
            </li>
            <li class="list-group-item">
              <div class="fw-bold">DANA </div>
             <img src="img/Screenshot_2023-09-01-23-02-01-492_id.dana~2.jpg" alt="Dana" class="img-thumbnail" width="150">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- rsvp -->
  <section id="rspv" class="rsvp" style="background-color: #eaeaea;">
    <div class="container" style=" width: 50rem; background: rgb(247, 245, 245);border-radius: 5px; border: 0.8px solid #cac8c8; padding: 30px;">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2>Konfirmasi Kehadiran</h2>
          <p>Isi form dibawah ini untuk konfirmasi kehadiran.</p>
        </div>
      </div>
      <form class="row align-items-center justify-content-center" method="post" action="" >
        <div class="col-12">
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="nama">
          </div>
          </div>
        <div class="col-9">
          <div class="mb-3">
            <label for="jumlahkehadiran" class="form-label">Jumlah Kehadiran</label>
            <input type="number" class="form-control" id="jumlahkehadiran" name="Jumlah" min="1" max="10" length="1" value="1">
          </div>
          </div>
        <div class="col-3">
          <div class="mb-3">
            <label for="Status" class="form-label">Konfirmasi</label>
            <select name="konfirmasi" id="status" class="form-select">
              <option selected>Pilih salah satu</option>
              <option value="Hadir">Hadir</option>
              <option value="Belum Pasti">Belum Pasti</option>
              <option value="Tidak Hadir">Tidak Hadir</option>
            </select>
          </div>
          </div>
          <div class="col-12">
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Ucapan / Doa</label>
              <textarea class="form-control" name="komentar" id="ucapan" ></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="post_koment">Kirim</button>
          </div>
          </form>
          <div class="container scroll-bar">
            
            <?php 
                    $sql = "SELECT * FROM tamu";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        
                        
                        ?>

        <div class="row content">
          <div class="col-1">
            <img src="img/pp.png" class="komen-img">
          </div>
              <div class="col komen" >
                <div class="card w-75 komen-area">
                    <h5 class="k-nama" style="font-size: 18px; margin: 8px;"> <?php echo $row ['nama']; ?>
                      <span class="status"><?php echo $row ['konfirmasi']; ?></span></h5>
                        <p class="card-text"><?php echo $row ['komentar']; ?></p>
                  </div>
              </div>
        </div>
              <!-- <span class="s-comment">04 September 2023</span> -->
              <?php } } ?>
                </div>
                  </div>
                    </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <small class="block">&copy; 2023 Irgiw Wedding. All Right Reserved.</small>
          <small class="block">Design by <a href="https://instagram.com/irgiw_">@Irgiw_</a></small>

          <ul class="mt-3">
            <li>
              <a href="https://instagram.com/irgiw_"><i class="bi bi-instagram"></i></a>
              <a href="https://wa.link/g1eas6"><i class="bi bi-whatsapp"></i></a>
              <a href="https://facebook.com/irgiw12"><i class="bi bi-facebook"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- <script src="./main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <script>
      const list = document.querySelectorAll('.list');
      function activeLink(){
        list.forEach((item) =>
        item.classList.remove('active'));
        this.classList.add('active');
      }
      list.forEach((item) =>
      item.addEventListener('click',activeLink))
    </script>
   <script>
        simplyCountdown('.simply-countdown', {
            year: 2023, // required
            month: 9, // required
            day: 28, // required
            hours: 8, // Default is 0 [0-23] integer
            words: { //words displayed into the countdown
                days: { singular: 'hari', plural: 'hari' },
                hours: { singular: 'jam', plural: 'jam' },
                minutes: { singular: 'menit', plural: 'menit' },
                seconds: { singular: 'detik', plural: 'detik' }
            },
    });
        </script>
<!-- <script>
  const rootElement = document.querySelector(":root");


  function disableScroll() {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

    window.onscroll = function () {
      window.scrollTo(scrollTop, scrollLeft);
    }
    
    rootElement.style.scrollBehavior = 'auto';
  }

  function enableScroll() {
    window.onscroll = function () {
      rootElement.style.scrollBehavior = 'smooth';
      localStorage.setItem('opened', 'true');
       
    }
  }

  if(!localStorage.getItem('opened')) {
    disableScroll();

  } -->

</script>
<!-- Aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>