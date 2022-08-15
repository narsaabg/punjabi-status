 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{url('')}}" class="logo"><img src="{{url('')}}/assets/img/punjabi-status.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/')}}">Home</a></li>
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach(get_categories() as $category)
              <li><a href="{{url('status')}}/{{$category->slug}}">{{$category->name}} ({{get_categories_status_count($category->id)}})</a></li>
              @endforeach
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Jokes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach(get_jokes_categories() as $category)
              <li><a href="{{url('jokes')}}/{{$category->slug}}">{{$category->name}} ({{get_jokes_categories_status_count($category->id)}})</a></li>
              @endforeach
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Shayari</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Test</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->