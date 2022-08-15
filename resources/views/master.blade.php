<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ultimate Punjabi Status Collection | PunjabiStatus.xyz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('')}}/assets/img/favicon.png" rel="icon">
  <link href="{{url('')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{url('')}}/assets/Raajaa_Bold.ttf" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('')}}/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
</head>

<body>

  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')
  @yield('scripts')
  <script>
    $(".copy-btn").click(function(){
        $(this).html('Copied');
        setTimeout(()=>{
            $(this).html('Copy');
        },2000);
        var status_id = $(this).data('copy-btn');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($("#status_"+status_id).text()).select();
        document.execCommand("copy");
        $temp.remove();
    });
  </script>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{url('')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{url('')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('')}}/assets/js/main.js"></script>

</body>

</html>