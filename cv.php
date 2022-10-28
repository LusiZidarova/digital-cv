<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Людмила Зидарова</title>
  <meta content="" name="description">
  <meta content="" name="keywords">




  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
  </link>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script src="//code.jquery.com/jquery-3.1.0.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>



  <!-- Main CSS File -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<style>
  .img {
    cursor: zoom-in;
    cursor: -webkit-zoom-in;
    cursor: -moz-zoom-in;
    width: 100px;
  }
</style>
<script type="text/javascript">
  $(function() {
    var previous = 0;

    $('.img').click(function() {
      var s = $(this).attr('id');
      $('#' + s).animate({
        'width': '350px'
      });
      $('#' + s).css({
        'cursor': 'zoom-out'
      });
      if ($('#' + previous).width() != 100) {
        $('#' + previous).animate({
          'width': '80px'
        });
        $('#' + previous).css({
          'cursor': 'zoom-in'
        });
      }
      previous = s;
    });
  });
</script>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-top">
    <div class="container">

      <h1><a href="/">Людмила Зидарова</a></h1>
      <h2>PHP <span>програмист </span> Пловдив,България</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#resume">Резюме</a></li>
          <li><a class="nav-link" href="#contact">Контакти</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume section-show">
    <div class="container">

      <div class="section-title">
        <h2>Резюме</h2><a href="printResume.html" target="_blank">Print-friendly version</a>
      </div>

      <div class="row">
        <div class="col-7">

          <h3 class="resume-title">Summary</h3>
          <div class="resume-item pb-0">
            <h4>Людмила Зидарова</h4>
            </p>
            <ul>
              <li><i class="fa-solid fa-phone"></i> +359 879 275 057</li>
              <li><i class="fa-solid fa-envelope"></i> lusizidarova@gmail.com</li>
              <li>Пловдив, България</li>
            </ul>
            <p></p>
          </div>

          <h3 class="resume-title"> <i class="fa-solid fa-book"></i> Образование</h3>
          <div class="resume-item">
            <h4>Магистър: Бизнес - администрация</h4>
            <h5>2003 - 2005</h5>
            <p><em>ПУ "Паисий Хилендарски" - гр.Пловдив</em></p>
          </div>
          <div class="resume-item">
            <h4>Бакалавър: Информатика</h4>
            <h5>1999 - 2003</h5>
            <p><em>ПУ "Паисий Хилендарски" - гр.Пловдив</em></p>
          </div>


          <h3 class="resume-title">Сертификати</h3>
          <div class="resume-item">
            <h4>Сертификат: PHP Web Development Basics - май 2020</h4>
            <p>

              <img id="1" class="img" src="./assets/img/Sertifikat_PHP_Web_Development_Basic.png">

            </p>
            <h5>05/2020 - 07/2020 </h5>
            <p><em>SoftUni Софтуерен университет ЕООД - София, България</em></p>
            <p>
            </p>
            <ul>
              <li>Изучаване на: PHP 7,MySQL, OOP</li>
            </ul>
            <p></p>
          </div>
          <div class="resume-item">
            <h4>Сертификат: Programming Basics with C# - април 2020</h4>
            <h5>04/2020 - 06/2020</h5>
            <p><em> SoftUni Софтуерен университет ЕООД - София, България</em></p>
            <p>
            </p>
          </div>
          <div class="resume-item">
            <h4>Сертификат: PHP Fundamentals – декември 2019</h4>
            <p>
              <img id="2" class="img" src="./assets/img/Sertifikat_PHP_Fundamentals.png">
            </p>
            <h5>12/2019 - 04/2020 </h5>
            <p><em> SoftUni Софтуерен университет ЕООД - София, България</em></p>
            <p>
            </p>

            <p></p>
          </div>
          <div class="resume-item">
            <h4>Сертификат: Front End за напреднали</h4>

            <p><img id="3" class="img" src="./assets/img/lyudmila_zidarova_wa_certificate_page-0001.jpg"></p>

            <h5>01/2018 - 04/2018 </h5>
            <p><em> Уеб Академи - гр.Пловдив</em></p>
            <ul>
              <li>Изучаване на HTML5, CSS3, Semantic Web, AJAX и JQuery</li>
            </ul>
            <p>
            </p>
          </div>

          <h3 class="resume-title"><i class="fa-brands fa-square-github"></i> Проекти GitHub</h3>
          <div class="resume-item pb-0">
            <ul>
              <li>https://github.com/LusiZidarova/laravel8_task
              </li>
              <li>https://github.com/LusiZidarova/Project_couriers</li>
              <li>https://github.com/LusiZidarova/PHP/tree/main/PHP_Web_De
                velopment_Basics/Project%20Courses</li>
              <li>https://github.com/LusiZidarova/PHP/tree/main/PHP_Web_De
                velopment_Basics/Project%20Shoes</li>
              <li>https://github.com/LusiZidarova/PHP/tree/main/PHP_Symfony
                /Blog_Symfony</li>

            </ul>

          </div>

        </div>
        <div class="col-5">
          <!--  <i class='fas fa-briefcase fa-spin fa-pulse fa-3x'></i> -->

          <h3 class="resume-title">
            <i class='fas fa-briefcase'> Професионален опит</i>
          </h3>
          <div class="resume-item">
            <h4>Програмист,системи за управление на бизнеса</h4>
            <h5>07/2022 - 09/2022</h5>
            <p><em>Некст Лоджистикс ООД</em></p>
            <p>
            </p>
            <ul>
              <li>Използвани технологии: PHP7, MySQL, Laravel 8, JS, JQuery, BitBucket
            </ul>
            <p></p>
          </div>
          <div class="resume-item">
            <h4>Програмист,Софтуерни приложения</h4>
            <h5>06/2021 - 07/2022</h5>
            <p><em>Меркари България ООД - гр.Пловдив</em></p>
            <p>
            </p>
            <ul>
              <li>Използвани технологии: PHP7,MySQL,CodeIgniter3-4,
                Datatables,JS,JQuery,Ajax,Bootstrap,GitHub,Linux Mgaento 2</li>
            </ul>
            <p></p>
          </div>

          <div class="resume-item">
            <h4>Спедитор с Испански език</h4>
            <h5>03/2011 - 12/2018</h5>
            <p><em> АИТ Интернешънъл Транспорт ЕООД - гр.Пловдив</em></p>
            <p>
            </p>
            <ul>
              <li>Организиране на товари и контролиране на процеса на
                транспортиране</li>
            </ul>
            <p></p>
          </div>
          <div class="resume-item">
            <h4>Мениджър , ключови клиенти</h4>
            <h5>12/2004 - 06/2005</h5>
            <p><em>Полиграфически комплекс “СТОВИ”ЕООД -с.Лесичово</em></p>
            <p>
            </p>
            <p></p>
          </div>
          <div class="resume-item">
            <h4>Системен Администратор </h4>
            <h5>12/2004 - 06/2005</h5>
            <p><em>Интернет клуб “СПИЙД”- ООД - гр.Пловдив</em></p>
            <p>
            </p>
            <p></p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Контакти</h2>
        <!--  <p>Contact Me</p> -->
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>lusizidarova@gmail.com</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Телефон:</h3>
            <p>+359 879 275 057</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Адрес</h3>
            <p>Пловдив, България</p>
          </div>
        </div>



      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>