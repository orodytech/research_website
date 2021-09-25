@extends('layouts.app')
@section('about')

<section class="container mx-auto mt-10">

    <!-------- About Section ------->
    <div>
        <h1 class="uppercase text-4xl font-semibold text-center">About <span class="text-blue-800">Vyfco</span> </h1>
        <div class="flex flex-col md:flex-row-reverse lg:mx-auto md:space-x-2 lg:flex-row-reverse lg:space-x-0">
            <div class="px-4">
                <p class="text-justify text-gray-600 lg:text-xl md:text-lg mt-2">
                    Vyfco is a group of seasoned professionals and enthusiastic geeks who are dedicated to improving educational processes 
                    all over the world. Cooperation, we feel, is the most effective approach to make learning simpler and more successful. 
                    That's why, in cooperation with leading educators from across the world, we create ground-breaking Education Tech solutions 
                    to help students achieve their most zealous goals. Through this platform, we match qualified expert writers with students who 
                    want a high-quality outcome in a short time frame. Our professionals are graduates from the world's most prestigious institutions, 
                    and all of them have passed the Vyfco exam and have demonstrated their expertise to our staff.
                </p>
            </div>
            <div class="h-full p-4">
                <img src="{{ asset('img/writer.jpg') }}" alt="Research and Writing" class="lg:h-full lg:w-full md:h-full w-full object-center object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>

    <!------- Vision and Mission ------>
    <div class="flex flex-col md:flex-row md:space-x-4 p-4">
        <div class="h-40 md:flex-1 rounded-lg shadow-lg p-4 bg-gradient-to-bl from-blue-800 to-blue-500 bg-opacity-50 mb-4">
            <h2 class="text-2xl text-yellow-200 text-center">Our Mission</h2>
            <p class="text-gray-200 text-justify">To make your academic journey easier and assist you to graduate on time.</p>
        </div> 
        <div class="h-40 md:flex-1 rounded-lg shadow-lg p-4 bg-gradient-to-bl from-blue-800 to-blue-500 bg-opacity-50">
            <h2 class="text-2xl text-yellow-200 text-center">Our Vision</h2>
            <p class="text-gray-200 text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum distinctio quam fugiat, et sit porro odit odio eveniet blanditiis est laudantium, placeat sint ipsum ratione corporis ullam sed dolores officiis.</p>
        </div> 
    </div>

    <!---------- Asked Questions -------->
    <div class="p-4 w-full mx-auto">
        <div class="accordion">
            <h2 class="text-xl text-center font-semibold mb-4 text-gray-700">Frequently Asked Questions</h2>
            <div class="accordion-item bg-pink-700 rounded-lg mb-4 p-2 shadow-lg" id="question1">
                <a href="#question1" class="accordion-link text-xl font-medium text-gray-100 w-full flex py-2 px-2 justify-between items-center">
                    What is Vyfco?
                <ion-icon class="add p-0.5" name="chevron-up-outline"></ion-icon>
                <ion-icon class="remove p-0.5" name="chevron-down-outline"></ion-icon>
                </a>
                <div class="answer bg-gradient-to-b from-pink-700 to-pink-800 rounded-lg">
                    <p class="text-white font-medium p-2 text-justify">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Hic beatae assumenda laborum mollitia atque, adipisci officiis 
                        blanditiis id nostrum harum laudantium aut iure illum facere cupiditate 
                         a. Deleniti, voluptas quo?
                    </p>
                </div>
            </div>
            <div class="accordion-item bg-pink-700 rounded-lg mb-4 p-2 shadow-lg" id="question2">
                <a href="#question2" class="accordion-link text-xl font-medium text-gray-100 w-full flex py-2 px-2 justify-between items-center">
                    How can I place my order?
                <ion-icon class="add p-0.5" name="chevron-up-outline"></ion-icon>
                <ion-icon class="remove p-0.5" name="chevron-down-outline"></ion-icon>
                </a>
                <div class="answer bg-gradient-to-b from-pink-700 to-pink-800 rounded-lg">
                    <p class="text-white font-medium p-2 text-justify">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Hic beatae assumenda laborum mollitia atque, adipisci officiis 
                        blanditiis id nostrum harum laudantium aut iure illum facere cupiditate 
                         a. Deleniti, voluptas quo?
                    </p>
                </div>
            </div>
            <div class="accordion-item bg-pink-700 rounded-lg mb-4 p-2 shadow-lg" id="question3">
                <a href="#question3" class="accordion-link text-xl font-medium text-gray-100 w-full flex py-2 px-2 justify-between items-center">
                    How much do you charge?
                <ion-icon class="add p-0.5" name="chevron-up-outline"></ion-icon>
                <ion-icon class="remove p-0.5" name="chevron-down-outline"></ion-icon>
                </a>
                <div class="answer bg-gradient-to-b from-pink-700 to-pink-800 rounded-lg">
                    <p class="text-white font-medium p-2 text-justify">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Hic beatae assumenda laborum mollitia atque, adipisci officiis 
                        blanditiis id nostrum harum laudantium aut iure illum facere cupiditate 
                         a. Deleniti, voluptas quo?
                    </p>
                </div>
            </div>
        </div>
    </div>    
</section>

@endsection