@extends('layouts.app')

@section('title', 'Alert')

@section('content')
    <div class="container mx-auto max-w-md">
        <ul class="inline-flex -space-x-px font-serif">
            <li><a href="#" class="flex items-center justify-center rounded-s-lg border border-e-0 border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">Previous</a></li>
            <li><a href="#" class="flex items-center justify-center border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">1</a></li>
            <li><a href="#" class="flex items-center justify-center border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">2</a></li>
            <li><a href="#" class="flex items-center justify-center border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">3</a></li>
            <li><a href="#" class="flex items-center justify-center border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">4</a></li>
            <li><a href="#" class="flex items-center justify-center border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">5</a></li>
            <li><a href="#" class="flex items-center justify-center rounded-e-lg border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">Next</a></li>
        </ul>
    </div>  
    
    <div class="flex justify-center gap-2 font-serif mt-4 mb-4">
        <a href="" class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-blue-400 p-2.5 font-medium text-white hover:bg-blue-600 hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg
          >Previous</a
        >
        <a href="" class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-blue-400 p-2.5 font-medium text-white hover:bg-blue-600 hover:text-white">
          Next<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
          </svg>
        </a>
      </div>   
      
      <div class="flex mb-4 items-center justify-center">
        <a href="#" class="rounded-l-md border-r border-white bg-gray-500 p-2.5 font-serif font-medium text-white hover:bg-blue-400">Prev</a>
        <a href="#" class="rounded-r-md border-r-white bg-gray-500 p-2.5 font-serif font-medium text-white hover:bg-blue-400">Next</a>
      </div>
      
      <div class="flex mb-4 items-center justify-center">
        <div class="inline-flex items-center rounded-l-md border-r border-white bg-gray-500 p-2.5 font-serif font-medium text-white hover:bg-blue-400">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2 h-4 w-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
          </svg>
          <a href="#" class="">Prev</a>
        </div>
        <div class="inline-flex items-center rounded-r-md bg-gray-500 p-2.5 font-serif font-medium text-white hover:bg-blue-400">
          <a href="#" class="">Next</a>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ms-2 h-4 w-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
          </svg>
        </div>
      </div>      
@endsection
