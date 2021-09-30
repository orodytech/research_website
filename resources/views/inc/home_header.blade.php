<div class="carousel">
    <div class="carousel-inner">
      <div class="carousel-item">
        <img src="{{ asset('img/carousel.jpg') }}" alt="writing and research">
        <div class="caption">
          <h5>....</h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/carousel3.jpg') }}" alt="writing and research">
        <div class="caption">
          <h5>....</h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/carousel2.jpg') }}" alt="writing and research">
        <div class="caption">
          <h5>....</h5>
          <p></p>
        </div>
      </div>
    </div>
  </div>

  @section('script')
<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>
	
@endsection

