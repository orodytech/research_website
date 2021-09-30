@extends('layouts.app')
@section('contact')

<section class="relative  bg-gradient-to-b from-indigo-500 to-blue-700">
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
                background-image: url('./img/contact.jpg');
              ">
              <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
              <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                  <div class="pr-12">
                    <h1 class="text-white capitalize font-semibold text-3xl sm:text-4xl md:text-5xl">
                      get in touch with vyfco team
                    </h1>
                    <p class="mt-4 text-lg text-blue-200">
                      We are here to help you any time any moment
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
              <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
              </svg>
            </div>
          </div>
          <section class="pb-10 bg-blueGray-200 -mt-24">
            <div class="container mx-auto px-4">
              <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                    <div class="px-4 py-5 flex-auto">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                        </svg>
                      </div>
                      <h6 class="text-xl font-semibold">24/7 Support</h6>
                      <p class="mt-2 mb-4 text-gray-500">
                       Get in touch with our team at any moment, get a quick response.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                    <div class="px-4 py-5 flex-auto">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-indigo-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                          <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                        </svg>
                      </div>
                      <h6 class="text-xl  font-semibold">Chat Online</h6>
                      <p class="mt-2 mb-4 text-gray-500">
                        You can get help with our Chatbot any time!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                    <div class="px-4 py-5 flex-auto">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                          <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                        </svg>
                      </div>
                      <h6 class="text-xl font-semibold">Delivery On Time</h6>
                      <p class="mt-2 mb-4 text-gray-500">
                        Once you have placed your order, our team will deliver your paper on time.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="relative flex items-top justify-center min-h-screen rounded-lg bg-gradient-to-b from-indigo-500 to-pink-600 shadow-md sm:items-center sm:pt-0">
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="mt-8 overflow-hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="p-6 mr-2 bg-gray-100 rounded-md dark:bg-gray-800 sm:rounded-lg">
                                <h1 class="text-4xl capitalize sm:text-5xl text-indigo-600 dark:text-white font-extrabold tracking-tight">
                                    Get in touch
                                </h1>
                                <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">
                                    Get Help with a team
                                </p>
        
                                <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                  </svg>
                                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                        Name, Street, State,
                                        Postal Code
                                    </div>
                                </div>
        
                                <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    <path d="M16.707 3.293a1 1 0 010 1.414L15.414 6l1.293 1.293a1 1 0 01-1.414 1.414L14 7.414l-1.293 1.293a1 1 0 11-1.414-1.414L12.586 6l-1.293-1.293a1 1 0 011.414-1.414L14 4.586l1.293-1.293a1 1 0 011.414 0z" />
                                  </svg>
                                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                        + xxx xxx xx
                                    </div>
                                </div>
        
                                <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                  </svg>
                                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                        info@vyfco.com
                                    </div>
                                </div>
                            </div>
        
                            <form class="p-6 flex flex-col justify-center">
                              <div class="pb-2">
                                <label class="ml-3 text-sm font-bold text-gray-200 tracking-wide">Full Name</label>
                                <input
                                  class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-md focus:border-indigo-500"
                                  type="" placeholder="Full Name">
                              </div>
                              <div class="pb-2">
                                <label class="ml-3 text-sm font-bold text-gray-200 tracking-wide">Subject:</label>
                                <input
                                  class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-md focus:border-indigo-500"
                                  type="" placeholder="Enter Subject">
                              </div>
                              <div class="pb-2">
                                <label class="ml-3 text-sm font-bold text-gray-200 tracking-wide">Email</label>
                                <input
                                  class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-md focus:border-indigo-500"
                                  type="" placeholder="Enter email">
                              </div>
                              <div>
                                <label class="ml-3 text-sm font-bold text-gray-200 tracking-wide">Write Message</label>
                                <textarea class="resize border rounded-md w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" placeholder="Write Your Message"></textarea>
                              </div>
        
                                <button type="submit" class="md:w-32 bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</section>


@endsection

