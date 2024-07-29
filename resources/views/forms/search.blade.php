@extends('layouts.app')

@section('title', 'Search')

@section('content')
<div class="container mx-auto max-w-lg">
  <form action="" class="mx-auto max-w-md">
    <div class="relative">
      <div class="pointer-events-none absolute inset-4 start-3 text-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
      </div>
      <input type="text" class="block w-full rounded-md border-2 border-gray-300 p-4 ps-10 focus:outline-blue-400" />
      <button class="absolute bottom-2.5 end-2 rounded-md bg-blue-500 px-4 py-2 text-white">Search</button>
    </div>
  </form>
</div>
@endsection
