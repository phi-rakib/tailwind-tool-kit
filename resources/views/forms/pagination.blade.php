@extends('layouts.app')

@section('title', 'Alert')

@section('content')
    <div class="container mx-auto max-w-md">
        <ul class="inline-flex -space-x-px">
            <li><a href="#" class="flex items-center justify-center rounded-s-lg border border-e-0 border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">Previous</a></li>
            <li><a href="#" class="flex items-center justify-center border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">1</a></li>
            <li><a href="#" class="flex items-center justify-center border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">2</a></li>
            <li><a href="#" class="flex items-center justify-center border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">3</a></li>
            <li><a href="#" class="flex items-center justify-center border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">4</a></li>
            <li><a href="#" class="flex items-center justify-center border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">5</a></li>
            <li><a href="#" class="flex items-center justify-center rounded-e-lg border border-gray-300 px-3 py-2 font-medium hover:bg-blue-600 hover:text-white">Next</a></li>
        </ul>
    </div>   
@endsection
