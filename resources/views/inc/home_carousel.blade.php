{{-- 
<div class="carousel py-10">
	<div class="slide slide-1">
		<div class="slide-content">
			<h1>Welcome to Vyfco</h1>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit minus, velit ipsum dolore pariatur esse qui corporis cum sapiente inventore vero ullam repellendus libero quibusdam porro aspernatur consequuntur dolor iure.</p>
			<button>Subscribe</button>
		</div>
	</div>
	<div class="slide slide-2">
		<div class="slide-content">
			<h1>Welcome to Vyfco</h1>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit minus, velit ipsum dolore pariatur esse qui corporis cum sapiente inventore vero ullam repellendus libero quibusdam porro aspernatur consequuntur dolor iure.</p>
			<button>Subscribe</button>
		</div>
	</div>
	<div class="slide slide-3">
		<div class="slide-content">
			<h1>Welcome to Vyfco</h1>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit minus, velit ipsum dolore pariatur esse qui corporis cum sapiente inventore vero ullam repellendus libero quibusdam porro aspernatur consequuntur dolor iure.</p>
			<button>Subscribe</button>
		</div>
	</div>
</div>

@section('script')
<script>
	$('.carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
	
@endsection


 
{{-- 
<!----- Carousel ------->

<div class="carousel relative shadow-2xl">
	<div class="carousel-inner relative overflow-hidden lg:h-screen md:h-80 w-full">
	  <!--Slide 1-->
		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="py-40  md:pt-40 md:pl-40 lg:pt-80 pl-20 lg:h-screen md:h-80 h-full w-full flex-col items-center bg-cover" style="background-image: url('./img/carousel.jpg'); background:cover;">
      <div class="bg-gradient-to-r from-black to-transparent py-6 px-6 rounded-l-xl">
        <h1 class="text-white text-3xl md:text-3xl lg:text-4xl lg:pb-4">Welcome to Vyfco</h1>
        <p class="text-white md:text-2xl lg:text-2xl">We will Help your with Your Academic Paper</p>
        <button class="px-4 py-2 lg:text-xl bg-blue-600 rounded-md text-white mt-2 hover:bg-white hover:text-blue-600">Place Order</button>
      </div>
      </div>
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
		
		<!--Slide 2-->
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
      <div class="py-20 md:pt-40 md:pl-40 lg:pt-80 pl-20 lg:h-screen md:h-80 h-full w-full flex-col items-center bg-cover" style="background-image: url('./img/carousel2.jpg'); background:cover;">
        <div class="bg-gradient-to-r from-black to-transparent py-6 px-6 rounded-l-xl">
          <h1 class="text-white text-3xl md:text-4xl lg:text-6xl lg:pb-4">We Handle Your Paper</h1>
          <p class="text-white md:text-2xl lg:text-4xl">We will Help your with Your Academic Paper</p>
          <button class="px-4 py-2 lg:text-3xl bg-blue-600 rounded-md text-white mt-2 hover:bg-blue-400">Place Order</button>
        </div>
      </div>
		</div>
		<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
		
		<!--Slide 3-->
		<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
      <div class="py-40 md:pt-40 md:pl-40 lg:pt-80 pl-20 lg:h-screen md:h-80  h-full w-full flex-col items-center bg-cover" style="background-image: url('./img/carousel3.jpg'); background:cover;">
        <div class="bg-gradient-to-r from-black to-transparent py-6 px-6 rounded-l-xl">
          <h1 class="text-white text-3xl md:text-4xl lg:text-6xl lg:pb-4">Place Order and Relax</h1>
          <p class="text-white md:text-2xl lg:text-4xl">We will Help your with Your Academic Paper</p>
          <button class="px-4 py-2 lg:text-3xl bg-blue-600 rounded-md text-white mt-2 hover:bg-blue-400">Place Order</button>
        </div>
      </div>
		</div>
		<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<!-- Add additional indicators for each slide-->
		<ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
		</ol>
		
	</div>
</div> --}} --}}


{{-- <div class="carousel relative shadow-2xl">
	<div class="carousel-inner relative overflow-hidden lg:h-screen md:h-80 w-full">
	  <!--Slide 1-->
		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="py-40  md:pt-40 md:pl-40 lg:pt-80 pl-20 lg:h-screen md:h-80 h-full w-full flex-col items-center bg-cover" style="background-image: url('./img/carousel.jpg'); background:cover;">
      <div class="bg-gradient-to-r from-black to-transparent py-6 px-6 rounded-l-xl">
        <h1 class="text-white text-3xl md:text-3xl lg:text-4xl lg:pb-4">Welcome to Vyfco</h1>
        <p class="text-white md:text-2xl lg:text-2xl">We will Help your with Your Academic Paper</p>
        <button class="px-4 py-2 lg:text-xl bg-blue-600 rounded-md text-white mt-2 hover:bg-white hover:text-blue-600">Place Order</button>
      </div>
      </div>
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
		
		<!--Slide 2-->
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
      <div class="py-20 md:pt-40 md:pl-40 lg:pt-80 pl-20 lg:h-screen md:h-80 h-full w-full flex-col items-center bg-cover" style="background-image: url('./img/carousel2.jpg'); background:cover;">
        <div class="bg-gradient-to-r from-black to-transparent py-6 px-6 rounded-l-xl">
          <h1 class="text-white text-3xl md:text-4xl lg:text-6xl lg:pb-4">We Handle Your Paper</h1>
          <p class="text-white md:text-2xl lg:text-4xl">We will Help your with Your Academic Paper</p>
          <button class="px-4 py-2 lg:text-3xl bg-blue-600 rounded-md text-white mt-2 hover:bg-blue-400">Place Order</button>
        </div>
      </div>
		</div>
		<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
		
		<!--Slide 3-->
		<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
      <div class="py-40 md:pt-40 md:pl-40 lg:pt-80 pl-20 lg:h-screen md:h-80  h-full w-full flex-col items-center bg-cover" style="background-image: url('./img/carousel3.jpg'); background:cover;">
        <div class="bg-gradient-to-r from-black to-transparent py-6 px-6 rounded-l-xl">
          <h1 class="text-white text-3xl md:text-4xl lg:text-6xl lg:pb-4">Place Order and Relax</h1>
          <p class="text-white md:text-2xl lg:text-4xl">We will Help your with Your Academic Paper</p>
          <button class="px-4 py-2 lg:text-3xl bg-blue-600 rounded-md text-white mt-2 hover:bg-blue-400">Place Order</button>
        </div>
      </div>
		</div>
		<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<!-- Add additional indicators for each slide-->
		<ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
		</ol>
		
	</div>
</div> --}}
