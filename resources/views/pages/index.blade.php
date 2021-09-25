@extends('layouts.app')

@section('content')

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
</div>

<!------- Hero Section -------->
{{-- <section class="hero py-4 px-24 pt-4 flex-wrap bg-gradient-to-br from-gray-100 to-gray-300">

    <!----- Contetent ---->
    <div class="relative py-4 pt-20">
        <div class="container mx-auto">
            <div class="rounded-xl shadow-2xl border flex divide-x bg-white">
                <div class="p-4 flex-1">
                    <img src="{{ asset('img/writer.jpg') }}" alt="research writer">
                </div>
                <div class="p-4 flex-1">
                   <div class="flex items-center">
                       <div class="inline-flex items-center flex-shrink-0 justify-center h-12 w-12 rounded-full shadow-md bg-blue-600 sm:mx-0 sm:h-10 sm:w-10 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
                          </svg>
                       </div>    
                       <h2 class="text-3xl font-medium ml-4 text-blue-800">
                           What Makes Us Stand Out
                       </h2>
                   </div>
                   <p class="text-gray-500 text-lg mt-2 mb-1">
                    Vyfco is dedicated in improving learning process by:
                   </p>
                    <div class="divide-y mt-4">
                        <div class="flex items-center py-1">
                            <div class="inline-flex items-center flex-shrink-0 justify-center h-8 w-8 rounded-full bg-gray-200 sm:mx-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                  </svg>
                            </div>    
                            <div class="text-xl ml-4 text-gray-700">
                                Providing professionals to our clients
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="inline-flex items-center flex-shrink-0 justify-center h-8 w-8 rounded-full bg-gray-200 sm:mx-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                  </svg>
                            </div>    
                            <div class="text-xl ml-4 text-gray-700">
                                Top rated professionals at Vyfco.
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="inline-flex items-center flex-shrink-0 justify-center h-8 w-8 rounded-full bg-gray-200 sm:mx-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                  </svg>
                            </div>    
                            <div class="text-xl ml-4 text-gray-700">
                                Professionals who passed Vyfco Exam.
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="inline-flex items-center flex-shrink-0 justify-center h-8 w-8 rounded-full bg-gray-200 sm:mx-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                  </svg>
                            </div>    
                            <div class="text-xl ml-4 text-gray-700">
                                Experienced professionals.
                            </div>
                        </div>
                        <a href="#" class="mt-8 px-6 py-3 items-center justify-center hover:bg-gray-200 active 
                        border-t-2 border-indigo-400 bg-gradient-to-br from-purple-500 to-indigo-600
                        hover:from-green-600 hover:via-blue-700
                        hover:to-purple-700 text-white rounded-md
                        flex md:inline-flex font-medium cursor-pointer hover:shadow-lg transition">
                    Read More<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                      </svg></a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!----- Our Services -------->
<section class="bg-gradient-to-br from-blue-600 to-purple-800 pt-20 -mt-40">
    <h1 class="mt-8 text-center text-5xl text-white font-bold pt-20">Our Services</h1>
    
    <div class="md:flex md:justify-center md:space-x-4 md:px-8">
      <!-- Essay Writing-->
      <div class="mt-16 py-4 px-4 w-72 bg-gradient-to-br from-blue-400 to-purple-600 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
        <div class="w-sm">
          <img class="w-64" src="{{ asset('img/writer2.jpg') }}" alt="Essay writing" />
          <div class="mt-4 text-yellow-200 text-center">
            <h1 class="text-xl font-bold">Writing</h1>
            <p class="mt-4 text-white">Simply provide us with the specifications, and we will write a paper from scratch. Select a writer and only approve the payment when you are fully satisfied.</p>
            <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-white shadow-md text-blue-400 tracking-widest hover:bg-blue-500 hover:text-white transition duration-200"><a href="{{ url('/services') }}">MORE</a></button>
          </div>
        </div>
      </div>

      <!-- Essay Writing-->
      <div class="mt-16 py-4 px-4 w-72 bg-gradient-to-br from-blue-400 to-purple-600 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
        <div class="w-sm">
          <img class="w-64" src="{{ asset('img/service2.jpg') }}" alt="Essay writing" />
          <div class="mt-4 text-yellow-200 text-center">
            <h1 class="text-xl font-bold">Rewriting</h1>
            <p class="mt-4 text-white">Our experts will totally rewrite your paper - originality guaranteed - if you've done the research and need an expert to make it worthy of high grades.</p>
            <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-white shadow-md text-blue-400 tracking-widest hover:bg-blue-500 hover:text-white transition duration-200"><a href="{{ url('/services') }}">MORE</a></button>
          </div>
        </div>
      </div>

      <!-- Research Proposal -->
      <div class="mt-16 py-4 px-4 bg-whit w-72 bg-gradient-to-br from-blue-400 to-purple-600 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
        <div class="w-sm">
          <img class="w-64" src="{{ asset('img/service3.jpg') }}" alt="" />
          <div class="mt-4 text-yellow-200 text-center">
            <h1 class="text-xl font-bold">Proofreading</h1>
            <p class="mt-4 text-white">Vyfco experts will go over your finished work for a professional touch, double-checking spelling, punctuation, and formatting to ensure the project looks polished and top-notch.</p>
            <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-white shadow-md text-blue-400 tracking-widest hover:bg-blue-500 hover:text-white transition duration-200"><a href="{{ url('/services') }}">MORE</a></button>
          </div>
        </div>
      </div>

      <!-- Discussion Paper -->
      <div class="mt-16 py-4 px-4 bg-whit w-72 bg-gradient-to-br from-blue-400 to-purple-600 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
        <div class="w-sm">
          <img class="w-64" src="{{ asset('img/service4.jpg') }}" alt="" />
          <div class="mt-4 text-yellow-200 text-center">
            <h1 class="text-xl font-bold">Editing</h1>
            <p class="mt-4 text-white">Do you have a project that needs some last-minute modification? Send it to us with directions for corrections, and we'll get back to you as soon as possible.</p>
            <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-white shadow-md text-blue-400 tracking-widest hover:bg-blue-500 hover:text-white transition duration-200"><a href="{{ url('/services') }}">MORE</a></button>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="bg-gradient-to-bl from-purple-800 to-blue-600">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-8">
      <div class="w-full mb-6 lg:mb-0 text-center">
        <h1 class="mt-8 text-center text-5xl text-white font-bold pt-20">We Value</h1>
      </div>
    </div>
    <div class="flex flex-wrap mx-auto">
      <div class="p-4 lg:w-1/3 w-full transform hover:scale-105 transition duration-300">
        <div class="flex rounded-lg h-full bg-gradient-to-br from-pink-600 to-blue-500 p-8 flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd" />
                  </svg>
            </div>
            <h2 class="text-white text-lg title-font font-medium">Free Turnitin Report</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base text-white">We place a high value on originality. Every essay comes with a FREE Turnitin report, ensuring that it is 100% plagiarism-free!</p>
            <a href="{{ asset('/services') }}" class="mt-3 text-yellow-200 hover:text-gray-900 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/3 w-full transform hover:scale-105 transition duration-300">
        <div class="flex rounded-lg h-full bg-gradient-to-br from-pink-600 to-blue-500 p-8 flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                  </svg>
            </div>
            <h2 class="text-white text-lg title-font font-medium">Quality Assurance</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base text-white">It never hurts to have an additional pair of eyes! Before your essay is delivered to you, it is reviewed by our quality assurance team.</p>
            <a href="{{ asset('/services') }}" class="mt-3 text-yellow-200 hover:text-gray-900 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/3 w-full transform hover:scale-105 transition duration-300">
        <div class="flex rounded-lg h-full bg-gradient-to-br from-pink-600 to-blue-500 p-8 flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
                    <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                  </svg>
            </div>
            <h2 class="text-white text-lg title-font font-medium">Robust Turnaround</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base text-white">Do you experience a challenge due to a looming deadline?  Our experts will work on your paper in six hours or less. Send us a message via chat, and we'll get right on it.</p>
            <a href="{{ asset('/services') }}" class="mt-3 text-yellow-200 hover:text-gray-900 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!------ Testimonials ------>
<section class="bg-gradient-to-br from-blue-600 to-purple-800 pt-5">
    <div class="w-full pb-10 px-5 text-gray-800">
        <div class="w-full max-w-6xl mx-auto">
            <div class="text-center max-w-xl mx-auto">
                <h1 class="text-3xl md:text-7xl font-bold mb-5 text-white">What people <br> <span class="text-yellow-200">are saying.</span></h1>
                <div class="text-center mb-10">
                    <span class="inline-block w-1 h-1 rounded-full bg-yellow-100 ml-1"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-yellow-200 ml-1"></span>
                    <span class="inline-block w-40 h-1 rounded-full bg-white"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-yellow-200 ml-1"></span>
                    <span class="inline-block w-1 h-1 rounded-full bg-yellow-100 ml-1"></span>
                </div>
            </div>
            <div class="-mx-3 md:flex items-start">
                <div class="px-3 md:w-1/3">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=1" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">First-name Surname.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint recusandae cum tempora nemo commodi soluta deleniti.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=2" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">First-name Surname.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint recusandae cum tempora nemo commodi soluta deleniti.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                </div>
                <div class="px-3 md:w-1/3">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=3" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">First-name Surname.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint recusandae cum tempora nemo commodi soluta deleniti.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=4" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">First-name Surname.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint recusandae cum tempora nemo commodi soluta deleniti.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                </div>
                <div class="px-3 md:w-1/3">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=5" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">First-name Surname.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint recusandae cum tempora nemo commodi soluta deleniti.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=6" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">First-name Surname.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint recusandae cum tempora nemo commodi soluta deleniti.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

     <!---- Achievement Section ----->
     <section class="container px-20 py-10 bg-gray-200 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500">
         <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
             <h1 class="text-3xl text-center text-white pb-6"><span class="text-black">Our</span> Achievements</h1>
             <p class="text-center text-white">We have Achieved great as Vyfco for the past years
             </p>
         </div>
        <div class="flex items-center text-gray-800">
          <div class="p-4 w-full">
            <div class="lg:ml-20 md:ml-20 grid grid-cols-10 gap-3 justify-center items-center">
              <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                  <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                  </div>
                  <div class="flex flex-col flex-grow ml-4">
                    <div class="text-sm text-gray-500">Clients</div>
                    <div class="font-bold text-lg">1259</div>
                  </div>
                </div>
              </div>
              <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                  <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                  </div>
                  <div class="flex flex-col flex-grow ml-4">
                    <div class="text-sm text-gray-500">Orders</div>
                    <div class="font-bold text-lg">230</div>
                  </div>
                </div>
              </div>
              <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                  <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                  </div>
                  <div class="flex flex-col flex-grow ml-4">
                    <div class="text-sm text-gray-500">Reviews</div>
                    <div class="font-bold text-lg">1259</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         
     </section>
@endsection