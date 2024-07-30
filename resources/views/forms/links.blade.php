@extends('layouts.app')

@section('title', 'Link')

@section('content')
<a href="#" class="font-medium text-blue-500 hover:underline">Default Link</a>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia, facere consectetur qui numquam eveniet iusto <a href="#" class="font-medium text-blue-500 underline hover:no-underline">paragraph link</a> sed praesentium, vitae placeat quae atque hic cum nobis minus molestiae esse cumque?</p>
<p>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad officia, facere consectetur qui numquam eveniet iusto
  <a href="#" class="inline-flex items-baseline font-medium text-blue-500 underline hover:no-underline"
    ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg>
    icon link
  </a>
  sed praesentium, vitae placeat quae atque hic cum nobis minus molestiae esse cumque?
</p> 
@endsection
