<?php
    session_start();
    if (isset($_POST['logout'])) {
        // untuk mengklir kan data
        session_unset();
        // untuk menghancurkan data
        session_destroy();
        header('location: index.php');
    }
?>
<!-- pelengkap -->
<?php include "layout/header.html" ?>
<?php include "layout/footer.html" ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daarulhikam Batam</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <!--aos-->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   <link rel="shortcut icon" href="logo.png" type="x-icon">

</head>
<body>
   
<!-- header section starts  -->
<header class="header">
   <nav class="navbar">
      <a href="#" class="logo">Daarulhikam Batam</a>
      <div class="links">
         <a href="#home">Home</a>
         <a href="#about">about</a>
         <a href="#Profiles">Profiles</a>
         <a href="#gallery">gallery</a>
         <a href="#myustadz">Asatid</a>
         <a href="#reviews">reviews</a>
         <a href="#contact">contact</a>
      </div>
      <div id="menu-btn" class="fa fa-bars"></div>
   </nav>
</header>
<!-- header section ends -->


<!-- home section starts  -->
<section class="home" id="home" >

   <div class="image" data-aos="zoom-in" data-aos-duration="2000">
      <img src="logo.png" alt="">
   </div>

   <div class="content" data-aos="zoom-in" data-aos-duration="2000">
      <h3>Selamat datang <?= $_SESSION["username"] ?></h3>
      <p>Daarulhikam hadir dengan harapan mampu menciptakan pendidikan yang berkualitas guna membentuk generasi Qurani yang spesial. Untuk turut hadir dan berkontribusi kepada dunia, ummat, bangsa, dan negara.</p>
      <a href="#about" class="tooltip">Read more
         <span class="tootip-text">Selengkapnya 👀</span>
      </a>
   </div>

</section>
<!-- home section ends -->


<!-- fun fact section starts  -->
<section class="fun-fact">

   <div class="box" data-aos="fade-up" data-aos-duration="3000">
      <img src="Muslim_Couple_Kids_Cartoon_Isolated_Stock_Vector_-_Illustration_of_isolated__bible__181358942-removebg-preview.png" alt="" >
     <div class="info">
      <h3>80</h3>
      <p>Santri</p>
     </div>
   </div>

   <div class="box" data-aos="fade-down" data-aos-duration="3000">
      <img src="p3.jpg" alt="">
      <div class="info">
         <h3>6</h3>
         <p>Program Utama</p>
      </div>
   </div>

   <div class="box" data-aos="fade-up" data-aos-duration="3000">
      <img src="Color Book Knowledge  Vector Illustration PNG Images,  Book Clipart, Clipart, Color Vector PNG Transparent Background - Pngtree.jpeg" alt="">
      <div class="info">
         <h3>6</h3>
         <p>Pelajaran tambahan (ets school)</p>
      </div>
   </div>

   <div class="box" data-aos="fade-down" data-aos-duration="3000">
      <img src="fun-fact-icon-3.svg" alt="">
      <div class="info">
         <h3>350</h3>
         <p>Antusias peminat</p>
      </div>
   </div>
</section>
<!-- fun fact section ends -->


<!-- about section starts  -->
<section class="about" id="about">

   <div class="content" data-aos="fade-up"
   data-aos-duration="3000">
      <h3>MENGENAL PPS Daarulhikam</h3>
      <p>Assalamualaikum wr wb alhamdulillah PPS Daarulhikam telah membuka pendaftaran baru untuk para calon santri yang berada di batam maupun di luar batam Pendaftaran nya sangat gampang tinggal anda Mendaftarkan melalui website kami (online) Atau anda bisa langsung mendatangi pondok pesantren daarulhikam yang berada di batam tepatnya di Tiban info selengkapanya silahkan tekan Tombol</p>
      <a href="registrasi.html" class="tooltip">Pendaftaran
        <span class="tootip-text">{✔}Click</span>
      </a>
   </div>

   <div class="image" data-aos="fade-up"
   data-aos-duration="3000">
      <img src="image.png" alt="">
   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="Profiles" id="Profiles">

   <h1 class="heading"> Pelajaran <span> Yang kami Ajarkan</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in-left" data-aos-duration="3000">
         <img src="6b4d93b3-dc27-4a32-b512-86dfcfda8793.jpeg" alt="">
         <h3>Kitab Kuning</h3>
         <p>Belajar dan juga bisa membaca Kitab kuning</p>
         <p></p>
         <p></p>
      </div>

      <div class="box" data-aos="zoom-in-left" data-aos-duration="3000" data-aos-delay="200">
         <img src="1696b058-78ed-40e7-868a-aa70e5949437.jpeg" alt="">
         <h3>Publick speaking</h3>
         <p>Belajar Berani berbicara di depan banyak orang dan berinteraksi</p>
         <p></p>
         <p></p>
      </div>

      <div class="box" data-aos="zoom-in-left" data-aos-duration="3000" data-aos-delay="400">
         <img src="Premium Vector _ Vector hadroh tambourine musical instrument logo.jpeg" alt="">
         <h3>Hadroh</h3>
         <p>Belajar Hadroh dan mengewasai beragam pukulan</p>
         <p></p>
         <p></p>
      </div>

      <div class="box" data-aos="zoom-in-left" data-aos-duration="3000" data-aos-delay="600">
         <img src="Book Pile PNG Image, Cartoon Book Pile Decoration Illustration, Book Clipart, Stack Of Books, Book PNG Image For Free Download.jpeg" alt="">
         <h3>Belajar formal</h3>
         <p>Belajar formal seperti sekolah pada umum nya</p>
         <p>Mts setara smp</p>
         <p></p>
      </div>

      <div class="box" data-aos="zoom-in-left" data-aos-duration="3000" data-aos-delay="800">
         <img src="Prayer Beads PNG Image, Black Qur An With Circular Prayer Beads, Al Quran, Prayer Beads, Moslem PNG Image For Free Download.jpeg" alt="">
         <h3>AL,Quran</h3>
         <p>Mengahafal</p>
         <p>Mehami</p>
         <p></p>
      </div>

      <div class="box" data-aos="zoom-in-left" data-aos-duration="3000" data-aos-delay="1000">
         <img src="Technology Communication Clipart Hd PNG, Vector Businessman With Modern Communications Technology, Strategy, Workplace, Symbol PNG Image For Free Download.jpeg" alt="">
         <h3>Tecknology</h3>
         <p>Koding</p>
         <p>Design</p>
      </div>
   </div>

</section>

<section class="left" id="about">

   <div class="image" data-aos="zoom-in" data-aos-duration="3000">
      <img src="Technology Communication Clipart Hd PNG, Vector Businessman With Modern Communications Technology, Strategy, Workplace, Symbol PNG Image For Free Download.jpeg" alt="left">
   </div>

   <div class="content" data-aos="zoom-in" data-aos-duration="3000">
      <h3>Information AND Technology (IT)</h3>
      <p>Di Daarulhikam juga akan di ajarkan agar anak santri dapat menggunakan Tecknology dengan baik di zaman ini di karnakan di zaman sekarang ke banyakan orang memakai Tecknology dengan negative seperti berkomentar yang tidak tau akan menimbul apa kedepannya </p>
   </div>

   

</section>


<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <h1 class="heading"> Dokumentasi <span> PPS Daarulhikam</span> </h1>

   <div class="gallery-container">

      <a class="box" href="image3.png"><img src="image3.png" alt=""></a>
      <a class="box" href="image4.png"><img src="image4.png" alt=""></a>
      <a class="box" href="image5.png"><img src="image5.png" alt=""></a>
      <a class="box" href="S1.png"><img src="S1.png" alt=""></a>
      <a class="box" href="S2.png"><img src="S2.png" alt=""></a>
      <a class="box" href="S9.png"><img src="S9.png" alt=""></a>
      <a class="box" href="S2.png"><img src="S2.png" alt=""></a>
      <a class="box" href="S3.png"><img src="S3.png" alt=""></a>
      <a class="box" href="S4.png"><img src="S4.png" alt=""></a>
      <a class="box" href="S6.png"><img src="S6.png" alt=""></a>
      <a class="box" href="S13.png"><img src="S13.png" alt=""></a>
      <a class="box" href="S8.png"><img src="S8.png" alt=""></a>
   </div>

</section>
<!-- gallery section ends -->


<!-- facilities section starts  -->
<section class="facilities">

   <h1 class="heading"> Pilar <span>Sukses </span> </h1>

   <div class="box-container">

      <div class="box" data-aos="fade-down" data-aos-duration="3000">
         <img src="p20.jpg" alt="">
         <h3>NIAT YANG MURNI</h3>
         <p>Kenapa harus memiliki niat yang murni? <br>
            Karena Niat menjadi kunci utama bagi kita menentukan Tujuan terhadap apa yang akan dan ingin kita tuju. </p>
      </div>

      <div class="box" data-aos="fade-down" data-aos-duration="3000">
         <img src="p20.jpg" alt="">
         <h3>JIHAD YANG MAKSIMAL</h3>
         <p>Kenapa harus disertai dengan Jihad yang maksimal? <br> Karena Jihad merupakan salah satu cara atau jalan bagi kita untuk bisa mencapai impian yang ingin kita capai </p>
      </div>

      <div class="box" data-aos="fade-down" data-aos-duration="3000">
         <img src="p20.jpg" alt="">
         <h3>SABAR TANPA BATAS</h3>
         <p>Kenpa harus disertai dengan sabar tanpa batas? <br> karena semua hal yang menjadi tujuan kita yang ingin kita tuju, impian yang ingin kita capai semua itu tidaklah mudah pasti akan ada cobaan dan ujiannya oleh karena itu kita harus memiliki rasa sabar tanpa batas.</p>
      </div>

   </div>

</section>

<!-- facilities section ends -->

<!-- team section starts  -->

<section class="myustadz" id="myustadz">

   <h1 class="heading"> Ustadz <span>&</span> Ustazah </h1>

   <div class="box-container">

      <div class="box" data-aos="fade-right" data-aos-duration="3000">
         <img src="guru2.jpeg" alt="">
         <div class="content">
            <h3>Umi Novi</h3>
            <p>Pengasuh Pondok</p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
         </div>
      </div>

      <div class="box" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="200">
         <img src="guru1.jpeg" alt="">
         <div class="content">
            <h3>Teh Angel</h3>
            <p>Ustazah</p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
         </div>
      </div>

      <div class="box" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="400">
         <img src="guru4.jpeg" alt="">
         <div class="content">
            <h3>Ust. Hasan</h3>
            <p>Ustadz</p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
         </div>
      </div>

      <div class="box" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="400">
         <img src="guru3.jpeg" alt="">
         <div class="content">
            <h3>Guru</h3>
            <p>Ustadz</p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
         </div>
      </div>

      <div class="box" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="400">
         <img src="guru5.jpeg" alt="">
         <div class="content">
            <h3>Guru</h3>
            <p>Ustadz</p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
         </div>
      </div>

      <div class="box" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="400">
         <img src="guru8.jpeg" alt="">
         <div class="content">
            <h3>Guru</h3>
            <p>Ustadz</p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
         </div>
      </div>

      <div class="box" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="400">
         <img src="guru6.jpeg" alt="">
         <div class="content">
            <h3>GUru</h3>
            <p>Ustadz</p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
         </div>
      </div>

      <div class="box" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="400">
         <img src="guru7.jpeg" alt="">
         <div class="content">
            <h3>Guru</h3>
            <p>Ustadz</p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
         </div>
      </div>
   </div>

</section>

<!-- team section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> clients <span>reviews</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="fade-left" data-aos-duration="3000">
         <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <div class="text">
            <p contenteditable="true">PPS Daarulhikam adalah tempat yang bagus dan cocok buat para penghafal Al-qur'an dan bagi orang-orang yang ingin belajar IT Dan Kitab Kuning</p>
         </div>
         <div class="user">
            <img src="p28.jpg" alt="">
            <h3>Rafa</h3>
         </div>
      </div>

      <div class="box" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="200">
         <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <div class="text">
          
            <p contenteditable="true">Selama di Daarulhikam saya mendapatkan banyak sekali ilmu diantaranya adalah ilmu Al-qur'an dan pengetahuan dan praktek ilmu IT sekaligus Menguasai Kitab kuning Dasar.</p>
         </div>
         <div class="user">
            <img src="p28.jpg" alt="">
            <h3>Rifaldi</h3>
         </div>
      </div>

      <div class="box" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="400">
         <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <div class="text">
            <i class="fas fa-quote-right"></i>
            <p contenteditable="true">PPS Daarulhikam adalah tempat bagi orang-orang yang mulia baik mulia di dunia maupun mulia di akhirat, mulia di dunia dengan teknologi dan Dakwah serta mulia di akhirat dengan Al-qur'an </p>
         </div>
         <div class="user">
            <img src="p28.jpg" alt="">
            <h3>Mail</h3>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading"> <span>contact</span> us </h1>

   <div class="row" data-aos="zoom-in" data-aos-duration="3000">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.780021075548!2d103.96176390000001!3d1.1246867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98bf2a2bce4cd%3A0xdce498099bf82a6c!2sPondok%20Pesantren%20Daarul%20Hikam%20Batam!5e1!3m2!1sid!2sid!4v1729084665721!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <form action="">
         <h3>get in touch</h3>
         <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
         </div>
         <div class="inputBox">
            <input type="number" placeholder="phone">
            <input type="text" placeholder="subject">
         </div>
         <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="btn">
      </form>

   </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a class="link" href="#home"> <i class="fas fa-angle-right"></i> home</a>
         <a class="link" href="#about"> <i class="fas fa-angle-right"></i> about</a>
         <a class="link" href="#Profiles"> <i class="fas fa-angle-right"></i> Profiles</a>
         <a class="link" href="#gallery"> <i class="fas fa-angle-right"></i> gallery</a>
         <a class="link" href="#myustadz"> <i class="fas fa-angle-right"></i> Asatid</a>
         <a class="link" href="#reviews"> <i class="fas fa-angle-right"></i> reviews</a>
         <a class="link" href="#contact"> <i class="fas fa-angle-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>aktivitas on day</h3>
         <p> <span>monday :</span> Formal-Kitab-quran-it</p>
         <p> <span>tuesday :</span> Formal-Kitab-quran-it </p>
         <p> <span>wednesday :</span> Formal-Kitab-quran-it</p>
         <p> <span>thursday :</span>Formal-Kitab-quran-it</p>
         <p> <span>friday :</span> Formal-Kitab-quran-it </p>
         <p> <span>saturday :</span> Formal-Kitab-quran-it-hadroh </p>
         <p> <span>sunday :</span> Free day (libur)</p>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#" class="link"> <i class="fas fa-phone"></i>08117091978 </a>
         <a href="#" class="link"> <i class="fas fa-envelope"></i> novikurniani@gmail.com </a>
         <a href="#" class="link"> <i class="fas fa-map"></i> Patam Lestari, Kec. Sekupang, Kota Batam, Kepulauan Riau 29424 </a>
      </div>

      <div class="box">
         <h3>newsletter</h3>
         <p>subscribe for latest updates</p>
         <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="btn">
         </form>
         <div class="share">
            <marquee class="mantap"  direction="right">Sosial media 🤳</marquee>
            <a href="https://facebook.com/pg/yusufsubhanofficial" class="fab fa-facebook-f"></a>
            <a href="https://whatsapp.com/pg/08117091978" class="fab fa-whatsapp"></a>
            <a href="https://Instagram.com/ponpes.daarulhikambatam" class="fab fa-instagram"></a>
            <a href="https://youtube.com/YusufSubhanOfficial" class="fab fa-youtube"></a>
         </div>
      </div>

   </div>
   <!-- tombol logout -->
   <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">logout</button>
    </form>

   <div class="credit"> created by <span>Daarulhikam</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

<script>
   lightGallery(document.querySelector('.gallery .gallery-container'));
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
   AOS.init();
 </script>

</body>
</html>