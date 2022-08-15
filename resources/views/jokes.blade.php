@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
            @foreach(get_jokes_categories() as $category)
          <div class="col-lg-1 mx-1 col-md-1 cat-btn">
            <a href="{{url('jokes')}}/{{$category->slug}}" style="color: #000">{{$category->name}}</a>
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
                  <div class="col-md-6 mx-1 col-md-1 copy-btn" data-copy-btn="{{$status->id}}">
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


  </main>
@endsection

@section('scripts')
    
@endsection