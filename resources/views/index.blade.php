@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
            @foreach(get_categories() as $category)
          <div class="col-lg-1 mx-1 col-md-1 cat-btn">
            <a href="{{url('')}}/{{$category->slug}}" style="color: #000">{{$category->name}}</a>
          </div>
          @endforeach
        </div>
      </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="row">
          @foreach($statuses as $status)
          <div class="col-lg-3 col-md-6">
            <div class="icon-box">
              <p class="description" id="status_{{$status->id}}">{{$status->status}}</p>
              <div class="d-flex">
                <div class="col-md-6">
                  <div class="col-md-6 mx-1 col-md-1 cat-div copy-btn" data-copy-btn="{{$status->id}}">
                    Copy
                  </div>
                </div>
                <div class="col-md-6 px-2" style="text-align: end;cursor: pointer;">
                  <!-- <i class="fa-solid fa-thumbs-up text-gray" style="cursor: pointer;"></i> -->
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

  

    <!-- ======= Gallery Section ======= 
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section> End Gallery Section -->


  </main><!-- End #main -->
@endsection

@section('scripts')
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
        })
    </script>
@endsection