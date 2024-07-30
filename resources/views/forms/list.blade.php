@extends('layouts.app')

@section('title', 'List')

@section('content')
<h2 class="mb-2 text-xl font-medium">Task List(Disc)</h2>
<ul class="mb-2 max-w-md list-inside list-disc space-y-1 px-4">
  <li>Walking outside</li>
  <li>Have Breakfast</li>
  <li>Reading Books</li>
</ul>

<h2 class="mb-2 text-xl font-medium">Task List(Number)</h2>
<ul class="mb-2 max-w-md list-inside list-decimal space-y-1 px-4">
  <li>Walking outside</li>
  <li>Have Breakfast</li>
  <li>Reading Books</li>
</ul>

<h2 class="mb-2 text-xl font-medium">Task List(None)</h2>
<ul class="max-w-md list-inside list-none space-y-1 px-4">
  <li>Walking outside</li>
  <li>Have Breakfast</li>
  <li>Reading Books</li>
</ul>

<h2 class="mb-2 text-xl font-medium">Task List(Icon)</h2>
<ul class="max-w-md list-inside list-decimal space-y-1 px-4">
  <li class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2 size-6 text-green-500">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg>
    Walking outside
  </li>
  <li class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6 text-green-500">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg
    >Have Breakfast
  </li>
  <li class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2 size-6 text-gray-600">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg
    >Reading Books
  </li>
</ul>
@endsection
