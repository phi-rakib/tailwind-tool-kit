@extends('layouts.app')

@section('title', 'Tabs')

@section('content')
    <ul class="inline-flex gap-1 mb-4">
        <li class="active cursor-pointer rounded-t-lg bg-blue-500 p-2.5 font-serif text-white hover:bg-blue-500">Dashboard</li>
        <li class="cursor-pointer rounded-t-lg bg-gray-400 p-2.5 font-serif text-white hover:bg-blue-500">Portfolio</li>
        <li class="cursor-pointer rounded-t-lg bg-gray-400 p-2.5 font-serif text-white hover:bg-blue-500">About Us</li>
        <li class="cursor-pointer rounded-t-lg bg-gray-400 p-2.5 font-serif text-white hover:bg-blue-500">Contact Us</li>
    </ul>

    <ul class="flex border-b border-gray-300 mb-3">
        <li class="me-2">
          <a href="#" class="inline-block border-b-2 border-b-blue-500 p-2.5 font-serif text-blue-400">Dashboard</a>
        </li>
        <li class="me-2">
          <a href="#" class="inline-block p-2.5 font-serif font-medium text-blue-400 hover:border-b-2 hover:border-b-blue-500">Portfolio</a>
        </li>
        <li class="me-2">
          <a href="#" class="inline-block p-2.5 font-serif font-medium text-blue-400 hover:border-b-2 hover:border-b-blue-500">About Us</a>
        </li>
        <li class="me-2">
          <a href="#" class="inline-block p-2.5 font-serif font-medium text-blue-400 hover:border-b-2 hover:border-b-blue-500">Contact Us</a>
        </li>
      </ul>
      
@endsection
