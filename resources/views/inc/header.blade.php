
<!-- Navbar goes here -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
          <div class="p-4 flex flex-row items-center justify-between">
              <a href="#"><img src="{{ asset('img/logo.png') }}" alt="Research and Writing" class="h-8 w-full"></a>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-blue-400 md:mt-0 md:ml-4" href="{{ url('/') }}">Home</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-blue-400 md:mt-0 md:ml-4" href="{{ url('/services') }}">Services</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-blue-400 md:mt-0 md:ml-4" href="{{ url('/samples') }}">Samples</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-blue-400 md:mt-0 md:ml-4" href="{{ url('/reviews') }}">Reviews</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-blue-400 md:mt-0 md:ml-4" href="{{ url('/contact') }}">Contact us</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg hover:text-blue-400 md:w-auto md:inline md:mt-0 md:ml-4">
                <span>About Us</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-blue-400 md:mt-0" href="{{ url('/about') }}">About Us</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-blue-400  md:mt-0" href="{{ url('/terms') }}">Terms of Service</a>
                </div>
              </div>
            </div>

            {{-- Add modal-open --}}
            <button class="px-2 py-1 bg-blue-600 text-white rounded hover:bg-blue-400"><a href="{{ url('/order') }}">Place Order</a></button>    
          </nav>
        </div>
      </div>
</nav>


  <!-- Sign In Modal-->
  <div class="z-20 modal opacity-0 mt-8 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">
      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-end items-center pb-3">
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>
        <h4 class="text-pink-600 text-center font-semibold text-2xl">Sign In</h4>
        {{-- Login/Register form --}}
        <form class="mt-8 space-y-6" action="#" method="POST">
          <input type="hidden" name="remember" value="true">
          <div class="relative">
            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Email</label>
            <input
              class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
              type="" placeholder="Enter email">
          </div>
          <div class="mt-8 content-center">
            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
              Password
            </label>
            <input
              class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
              type="" placeholder="Enter your password">
          </div>
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember_me" name="remember_me" type="checkbox"
                class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded">
              <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                Remember me
              </label>
            </div>
            <div class="text-sm">
              <a href="#" class="text-indigo-400 hover:text-blue-500">
                Forgot your password?
              </a>
            </div>
          </div>
          <div>
            <button type="submit"
              class="w-full flex justify-center bg-gradient-to-br from-pink-600 to-indigo-600  hover:bg-gradient-to-br hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-2  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
              Sign in
            </button>
          </div>
          <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
            <span>Don't have an account?</span>
            <a href="{{ url('/register') }}"
              class="text-indigo-400 hover:text-blue-500 no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign
              up</a>
          </p>
        </form>
      </div>
    </div>
  </div>



  @section('script')

  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
     
  </script>
      
  @endsection