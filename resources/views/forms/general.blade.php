@extends('layouts.app')

@section('title', 'Ratings')

@section('content')
<form action="">
    <div class="mb-4 grid gap-4 sm:grid-cols-2">
      <div>
        <label for="firstName" class="mb-2 block text-sm font-medium">First Name</label>
        <input type="text" class="w-full rounded-lg border-2 border-gray-400 p-2 text-sm focus:outline-blue-400" />
      </div>
      <div>
        <label for="lastName" class="mb-2 block text-sm font-medium">Last Name</label>
        <input type="text" class="w-full rounded-lg border-2 border-gray-400 p-2 text-sm focus:outline-blue-400" />
      </div>
      <div>
        <label for="company" class="mb-2 block text-sm font-medium">Company</label>
        <input type="text" class="w-full rounded-lg border-2 border-gray-400 p-2 text-sm focus:outline-blue-400" />
      </div>
      <div>
        <label for="phoneNumber" class="mb-2 block text-sm font-medium">Phone Number</label>
        <input type="number" class="w-full rounded-lg border-2 border-gray-400 p-2 text-sm focus:outline-blue-400" />
      </div>
      <div class="sm:col-span-2">
        <label for="email" class="mb-2 block text-sm font-medium">Email Address</label>
        <input type="email" class="block w-full rounded-lg border-2 border-gray-400 p-2 text-sm focus:outline-blue-400" />
      </div>
      <div class="sm:col-span-2">
        <label for="password" class="mb-2 block text-sm font-medium">Password</label>
        <input type="password" class="block w-full rounded-lg border-2 border-gray-400 p-2 text-sm focus:outline-blue-400" />
      </div>
      <div class="sm:col-span-2">
        <label for="confirmPassword" class="mb-2 block text-sm font-medium">Confirm Password</label>
        <input type="password" class="block w-full rounded-lg border-2 border-gray-400 p-2 text-sm focus:outline-blue-400" />
      </div>
    </div>
    <div class="flex mb-4 items-center">
      <input type="checkbox" name="" id="" class="h-4 w-4 rounded border border-gray-300" />
      <label for="" class="ms-2">
        <a href="#" class="font-serif text-sm text-gray-700 hover:text-blue-500 hover:underline">Terms & Conditions</a>
      </label>
    </div>
    <button type="submit" class="block w-full rounded-lg bg-blue-500 px-3 py-2 font-serif font-medium text-white sm:w-auto">Submit</button>
  </form>  
@endsection
