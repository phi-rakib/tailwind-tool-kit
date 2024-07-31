@extends('layouts.app')

@section('title', 'Alert')

@section('content')
    <ul class="inline-flex gap-1">
        <li class="active cursor-pointer rounded-t-lg bg-blue-500 p-2.5 font-serif text-white hover:bg-blue-500">Dashboard</li>
        <li class="cursor-pointer rounded-t-lg bg-gray-400 p-2.5 font-serif text-white hover:bg-blue-500">Portfolio</li>
        <li class="cursor-pointer rounded-t-lg bg-gray-400 p-2.5 font-serif text-white hover:bg-blue-500">About Us</li>
        <li class="cursor-pointer rounded-t-lg bg-gray-400 p-2.5 font-serif text-white hover:bg-blue-500">Contact Us</li>
    </ul>
@endsection
