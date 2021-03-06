@extends('layouts.app')

{{-- simple section --}}
@section('title','List')

@section('content')

<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
  <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
    <div>
      <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Press</h2>
      <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
        <p class="text-xl text-gray-500">Get weekly articles in your inbox on how to grow your business.</p>
        <form class="mt-6 flex flex-col sm:flex-row lg:mt-0 lg:justify-end">
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email-address" type="email" autocomplete="email" required class="appearance-none w-full px-4 py-2 border border-gray-300 text-base rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 lg:max-w-xs" placeholder="Enter your email">
          </div>
          <div class="mt-2 flex-shrink-0 w-full flex rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto sm:inline-flex">
            <button type="button" class="w-full bg-indigo-600 px-4 py-2 border border-transparent rounded-md flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-auto sm:inline-flex">Notify me</button>
          </div>
        </form>
      </div>
    </div>
    <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">

      @foreach ($posts as $post)
     
      <div>
        <p class="text-sm text-gray-500">
          <time datetime="2020-03-10">Mar 10, 2020</time>
        </p>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-semibold text-gray-900">{{ $post [ 'title'] }}</p>
          <p class="mt-3 text-base text-gray-500">{{ $post [ 'content'] }}</p>
        </a>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>
      @endforeach


      
   

     
    </div>
  </div>
</div>

@endsection