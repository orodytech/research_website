@extends('layouts.app')

@section('samples')

<div class="sample flex p-4 flex-col lg:flex-row lg:px-8">
    <div class="samples flex-wrap lg:pr-4 flex flex-col  lg:w-2/3">
        <h1 class="text-3xl font-semibold text-blue-900">Samples</h1>
        <h3 class="text-base mb-4 text-gray-400">Have a look at samples papers done by our team</h3> 
                {{-- sample 1 --}}
                <div class="item-1">
                    <div class="flex flex-col pb-4 lg:flex-row">
                        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-blue-900 text-xl lg:pr-40">Bayes Theorem</a>
                        <p class="text-gray-400 text-sm">#Probability</p>
                    </div>
                    <div class="description-content lg:space-x-2 flex flex-col lg:flex-row">
                        <div class="description text-sm lg:text-base lg:flex-1 text-justify text-gray-600 pb-3">
                            <p>a) Find the probability that the student made the
                                Dean's
                                list. </p>
                                <p>b)
                                Find the probability that the student
                                ,
                                given that the student made the
                                Dean's
                                list. came from a private high school.....................</p>
                        </div>
                        <div class="description flex lg:flex-1 flex-col items-center">
                            <div class="upper flex space-x-3 divide-x-2 mb-3 p-3 rounded-md shadow-md">
                                <div class="left flex-1 text-sm">
                                    <p><span class="text-gray-400">Number of Pages:</span> 3</p>
                                    <p><span class="text-gray-400">Style:</span> MLA</p>
                                    <p><span class="text-gray-400">Academic Level:</span> Undergraduate</p>
                                </div>
                                <div class="right pl-2 flex-1 text-sm">
                                    <p><span class="text-gray-400">Urgency:</span> 2 days</p>
                                    <p><span class="text-gray-400">Number of Sources:</span> 2</p>
                                    <p><span class="text-gray-400">Subject:</span> Probability</p>
                                    <p><span class="text-gray-400">Price:</span> <sup class="font-semibold text-blue-700">£</sup><Span class="font-bold text-xl text-blue-700">20.9</Span></p>
                                </div>
                            </div>
                            <div class="order-button mb-3">
                                <div class="flex items-center space-x-3">
                                    <div class="question">
                                        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-indigo-600 text-sm">Need A paper like this?<a/>
                                    </div>
                                    <div class="button p-1 hover:bg-indigo-400 bg-indigo-600 text-white rounded-md text-sm">
                                        <a href="#" class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                        </svg>Place Order</a>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
        
   {{-- sample 1 --}}
   <div class="item-1">
    <div class="flex flex-col pb-4 lg:flex-row">
        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-blue-900 text-xl lg:pr-40">Bayes Theorem</a>
        <p class="text-gray-400 text-sm">#Probability</p>
    </div>
    <div class="description-content lg:space-x-2 flex flex-col lg:flex-row">
        <div class="description text-sm lg:text-base lg:flex-1 text-justify text-gray-600 pb-3">
            <p>a) Find the probability that the student made the
                Dean's
                list. </p>
                <p>b)
                Find the probability that the student
                ,
                given that the student made the
                Dean's
                list. came from a private high school.....................</p>
        </div>
        <div class="description flex lg:flex-1 flex-col items-center">
            <div class="upper flex space-x-3 divide-x-2 mb-3 p-3 rounded-md shadow-md">
                <div class="left flex-1 text-sm">
                    <p><span class="text-gray-400">Number of Pages:</span> 3</p>
                    <p><span class="text-gray-400">Style:</span> MLA</p>
                    <p><span class="text-gray-400">Academic Level:</span> Undergraduate</p>
                </div>
                <div class="right pl-2 flex-1 text-sm">
                    <p><span class="text-gray-400">Urgency:</span> 2 days</p>
                    <p><span class="text-gray-400">Number of Sources:</span> 2</p>
                    <p><span class="text-gray-400">Subject:</span> Probability</p>
                    <p><span class="text-gray-400">Price:</span> <sup class="font-semibold text-blue-700">£</sup><Span class="font-bold text-xl text-blue-700">20.9</Span></p>
                </div>
            </div>
            <div class="order-button mb-3">
                <div class="flex items-center space-x-3">
                    <div class="question">
                        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-indigo-600 text-sm">Need A paper like this?<a/>
                    </div>
                    <div class="button p-1 hover:bg-indigo-400 bg-indigo-600 text-white rounded-md text-sm">
                        <a href="#" class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>Place Order</a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
{{-- sample 1 --}}
<div class="item-1">
    <div class="flex flex-col pb-4 lg:flex-row">
        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-blue-900 text-xl lg:pr-40">Bayes Theorem</a>
        <p class="text-gray-400 text-sm">#Probability</p>
    </div>
    <div class="description-content lg:space-x-2 flex flex-col lg:flex-row">
        <div class="description text-sm lg:text-base lg:flex-1 text-justify text-gray-600 pb-3">
            <p>a) Find the probability that the student made the
                Dean's
                list. </p>
                <p>b)
                Find the probability that the student
                ,
                given that the student made the
                Dean's
                list. came from a private high school.....................</p>
        </div>
        <div class="description flex lg:flex-1 flex-col items-center">
            <div class="upper flex space-x-3 divide-x-2 mb-3 p-3 rounded-md shadow-md">
                <div class="left flex-1 text-sm">
                    <p><span class="text-gray-400">Number of Pages:</span> 3</p>
                    <p><span class="text-gray-400">Style:</span> MLA</p>
                    <p><span class="text-gray-400">Academic Level:</span> Undergraduate</p>
                </div>
                <div class="right pl-2 flex-1 text-sm">
                    <p><span class="text-gray-400">Urgency:</span> 2 days</p>
                    <p><span class="text-gray-400">Number of Sources:</span> 2</p>
                    <p><span class="text-gray-400">Subject:</span> Probability</p>
                    <p><span class="text-gray-400">Price:</span> <sup class="font-semibold text-blue-700">£</sup><Span class="font-bold text-xl text-blue-700">20.9</Span></p>
                </div>
            </div>
            <div class="order-button mb-3">
                <div class="flex items-center space-x-3">
                    <div class="question">
                        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-indigo-600 text-sm">Need A paper like this?<a/>
                    </div>
                    <div class="button p-1 hover:bg-indigo-400 bg-indigo-600 text-white rounded-md text-sm">
                        <a href="#" class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>Place Order</a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
{{-- sample 1 --}}
<div class="item-1">
    <div class="flex flex-col pb-4 lg:flex-row">
        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-blue-900 text-xl lg:pr-40">Bayes Theorem</a>
        <p class="text-gray-400 text-sm">#Probability</p>
    </div>
    <div class="description-content lg:space-x-2 flex flex-col lg:flex-row">
        <div class="description text-sm lg:text-base lg:flex-1 text-justify text-gray-600 pb-3">
            <p>a) Find the probability that the student made the
                Dean's
                list. </p>
                <p>b)
                Find the probability that the student
                ,
                given that the student made the
                Dean's
                list. came from a private high school.....................</p>
        </div>
        <div class="description flex lg:flex-1 flex-col items-center">
            <div class="upper flex space-x-3 divide-x-2 mb-3 p-3 rounded-md shadow-md">
                <div class="left flex-1 text-sm">
                    <p><span class="text-gray-400">Number of Pages:</span> 3</p>
                    <p><span class="text-gray-400">Style:</span> MLA</p>
                    <p><span class="text-gray-400">Academic Level:</span> Undergraduate</p>
                </div>
                <div class="right pl-2 flex-1 text-sm">
                    <p><span class="text-gray-400">Urgency:</span> 2 days</p>
                    <p><span class="text-gray-400">Number of Sources:</span> 2</p>
                    <p><span class="text-gray-400">Subject:</span> Probability</p>
                    <p><span class="text-gray-400">Price:</span> <sup class="font-semibold text-blue-700">£</sup><Span class="font-bold text-xl text-blue-700">20.9</Span></p>
                </div>
            </div>
            <div class="order-button mb-3">
                <div class="flex items-center space-x-3">
                    <div class="question">
                        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-indigo-600 text-sm">Need A paper like this?<a/>
                    </div>
                    <div class="button p-1 hover:bg-indigo-400 bg-indigo-600 text-white rounded-md text-sm">
                        <a href="#" class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>Place Order</a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
{{-- sample 1 --}}
<div class="item-1">
    <div class="flex flex-col pb-4 lg:flex-row">
        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-blue-900 text-xl lg:pr-40">Bayes Theorem</a>
        <p class="text-gray-400 text-sm">#Probability</p>
    </div>
    <div class="description-content lg:space-x-2 flex flex-col lg:flex-row">
        <div class="description text-sm lg:text-base lg:flex-1 text-justify text-gray-600 pb-3">
            <p>a) Find the probability that the student made the
                Dean's
                list. </p>
                <p>b)
                Find the probability that the student
                ,
                given that the student made the
                Dean's
                list. came from a private high school.....................</p>
        </div>
        <div class="description flex lg:flex-1 flex-col items-center">
            <div class="upper flex space-x-3 divide-x-2 mb-3 p-3 rounded-md shadow-md">
                <div class="left flex-1 text-sm">
                    <p><span class="text-gray-400">Number of Pages:</span> 3</p>
                    <p><span class="text-gray-400">Style:</span> MLA</p>
                    <p><span class="text-gray-400">Academic Level:</span> Undergraduate</p>
                </div>
                <div class="right pl-2 flex-1 text-sm">
                    <p><span class="text-gray-400">Urgency:</span> 2 days</p>
                    <p><span class="text-gray-400">Number of Sources:</span> 2</p>
                    <p><span class="text-gray-400">Subject:</span> Probability</p>
                    <p><span class="text-gray-400">Price:</span> <sup class="font-semibold text-blue-700">£</sup><Span class="font-bold text-xl text-blue-700">20.9</Span></p>
                </div>
            </div>
            <div class="order-button mb-3">
                <div class="flex items-center space-x-3">
                    <div class="question">
                        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-indigo-600 text-sm">Need A paper like this?<a/>
                    </div>
                    <div class="button p-1 hover:bg-indigo-400 bg-indigo-600 text-white rounded-md text-sm">
                        <a href="#" class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>Place Order</a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
{{-- sample 1 --}}
<div class="item-1">
    <div class="flex flex-col pb-4 lg:flex-row">
        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-blue-900 text-xl lg:pr-40">Bayes Theorem</a>
        <p class="text-gray-400 text-sm">#Probability</p>
    </div>
    <div class="description-content lg:space-x-2 flex flex-col lg:flex-row">
        <div class="description text-sm lg:text-base lg:flex-1 text-justify text-gray-600 pb-3">
            <p>a) Find the probability that the student made the
                Dean's
                list. </p>
                <p>b)
                Find the probability that the student
                ,
                given that the student made the
                Dean's
                list. came from a private high school.....................</p>
        </div>
        <div class="description flex lg:flex-1 flex-col items-center">
            <div class="upper flex space-x-3 divide-x-2 mb-3 p-3 rounded-md shadow-md">
                <div class="left flex-1 text-sm">
                    <p><span class="text-gray-400">Number of Pages:</span> 3</p>
                    <p><span class="text-gray-400">Style:</span> MLA</p>
                    <p><span class="text-gray-400">Academic Level:</span> Undergraduate</p>
                </div>
                <div class="right pl-2 flex-1 text-sm">
                    <p><span class="text-gray-400">Urgency:</span> 2 days</p>
                    <p><span class="text-gray-400">Number of Sources:</span> 2</p>
                    <p><span class="text-gray-400">Subject:</span> Probability</p>
                    <p><span class="text-gray-400">Price:</span> <sup class="font-semibold text-blue-700">£</sup><Span class="font-bold text-xl text-blue-700">20.9</Span></p>
                </div>
            </div>
            <div class="order-button mb-3">
                <div class="flex items-center space-x-3">
                    <div class="question">
                        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-indigo-600 text-sm">Need A paper like this?<a/>
                    </div>
                    <div class="button p-1 hover:bg-indigo-400 bg-indigo-600 text-white rounded-md text-sm">
                        <a href="#" class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>Place Order</a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
{{-- sample 1 --}}
<div class="item-1">
    <div class="flex flex-col pb-4 lg:flex-row">
        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-blue-900 text-xl lg:pr-40">Bayes Theorem</a>
        <p class="text-gray-400 text-sm">#Probability</p>
    </div>
    <div class="description-content lg:space-x-2 flex flex-col lg:flex-row">
        <div class="description text-sm lg:text-base lg:flex-1 text-justify text-gray-600 pb-3">
            <p>a) Find the probability that the student made the
                Dean's
                list. </p>
                <p>b)
                Find the probability that the student
                ,
                given that the student made the
                Dean's
                list. came from a private high school.....................</p>
        </div>
        <div class="description flex lg:flex-1 flex-col items-center">
            <div class="upper flex space-x-3 divide-x-2 mb-3 p-3 rounded-md shadow-md">
                <div class="left flex-1 text-sm">
                    <p><span class="text-gray-400">Number of Pages:</span> 3</p>
                    <p><span class="text-gray-400">Style:</span> MLA</p>
                    <p><span class="text-gray-400">Academic Level:</span> Undergraduate</p>
                </div>
                <div class="right pl-2 flex-1 text-sm">
                    <p><span class="text-gray-400">Urgency:</span> 2 days</p>
                    <p><span class="text-gray-400">Number of Sources:</span> 2</p>
                    <p><span class="text-gray-400">Subject:</span> Probability</p>
                    <p><span class="text-gray-400">Price:</span> <sup class="font-semibold text-blue-700">£</sup><Span class="font-bold text-xl text-blue-700">20.9</Span></p>
                </div>
            </div>
            <div class="order-button mb-3">
                <div class="flex items-center space-x-3">
                    <div class="question">
                        <a href="{{ url('/img/pdf/bayes1.pdf') }}" class="text-indigo-600 text-sm">Need A paper like this?<a/>
                    </div>
                    <div class="button p-1 hover:bg-indigo-400 bg-indigo-600 text-white rounded-md text-sm">
                        <a href="#" class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>Place Order</a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
        
              
    </div>
<div class="side-content lg:w-1/3">
        <div class="payment shadow-lg px-4 pt-4 pb-6 mb-6 rounded-md">
            <div class="payment">
                <h1 class="capitalize text-blue-700 text-xl lg:text-xl text-center font-bold">Accepted payment methods</h1>
                <p class="mt-2 text-gray-600">You can make your payments via the following reliable methods:</p>
                <div class="flex mt-4 text-4xl text-gray-400 justify-center space-x-4 ">
                    <i class="fa fa-cc-visa hover:text-blue-400 transition ease-out" aria-hidden="true"></i>
                    <i class="fa fa-cc-mastercard hover:text-blue-400" aria-hidden="true"></i>
                    <i class="fa fa-cc-paypal hover:text-blue-400" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="order-form p-4 shadow-lg rounded-lg">
            <h2 class="text-center text-2xl font-semibold text-gray-800">Our Services</h2>
            <div class="divide-y-2">
                <p class="text-gray-500 text-xl py-2"><i class="fa fa fa-diamond mr-4 text-blue-400" aria-hidden="true"></i>
                    Writing</p>
                <p class="text-gray-500 text-xl py-2"><i class="fa fa fa-diamond mr-4 text-blue-400" aria-hidden="true"></i>
                        Proofreading</p>
                <p class="text-gray-500 text-xl py-2"><i class="fa fa fa-diamond mr-4 text-blue-400" aria-hidden="true"></i>
                            Editing</p>
                            <p class="text-gray-500 text-xl py-2"><i class="fa fa fa-diamond mr-4 text-blue-400" aria-hidden="true"></i>
                                Rewriting</p>
            </div>
            <div class="flex justify-center mt-4">
                <a href="#" class="px-4 py-2 bg-gradient-to-br from-indigo-600 to-pink-700 hover:bg-gradient-to-br hover:from-blue-600 hover:to-indigo-900 text-white rounded-lg shadow-md">Place Order</a>
            </div>
        </div>

</div>
</div>

@endsection

