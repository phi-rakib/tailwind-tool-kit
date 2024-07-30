@extends('layouts.app')

@section('title', 'Alert')

@section('content')
<div class="flex flex-col">
    <div class="text-md m-2 block w-full rounded border-2 border-blue-500 bg-blue-500 p-2.5 text-center font-medium text-white">Info Alert</div>
    <div class="text-md m-2 block w-full rounded border-2 border-red-500 bg-red-500 p-2.5 text-center font-medium text-white">Danger Alert</div>
    <div class="text-md m-2 block w-full rounded border-2 border-green-500 bg-green-500 p-2.5 text-center font-medium text-white">Success Alert</div>
    <div class="text-md m-2 block w-full rounded border-2 border-yellow-500 bg-yellow-500 p-2.5 text-center font-medium text-white">Warning Alert</div>
    <div class="text-md m-2 block w-full rounded border-2 border-black bg-black p-2.5 text-center font-medium text-white">Dark Alert</div>
</div>    
@endsection
