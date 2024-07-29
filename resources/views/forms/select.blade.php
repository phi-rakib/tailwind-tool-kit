@extends('layouts.app')

@section('title', 'Form Select Input')

@section('content')
<form action="" class="mx-auto max-w-sm">
    <label for="" class="mb-2 block text-md font-medium text-gray-900">Select Language</label>
    <select name="language" id="" class="block w-full rounded-lg border-2 border-gray-400 bg-gray-50 p-2.5 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
      <option value="bn">Bangla</option>
      <option value="en">English</option>
      <option value="hi">Hindi</option>
    </select>
  </form>  
@endsection
