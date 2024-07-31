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

      <ul class="flex border-b border-gray-300 mb-4">
        <li class="me-2">
          <a href="#" class="inline-flex border-b border-blue-300 p-4 font-serif font-medium text-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2 h-6 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            Dashboard</a
          >
        </li>
        <li class="me-2">
          <a href="#" class="inline-flex p-4 font-serif font-medium text-blue-400 hover:border-b hover:border-blue-300 hover:text-blue-500"
            ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2 h-6 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>
            Services</a
          >
        </li>
        <li class="me-2">
          <a href="#" class="inline-flex p-4 font-serif font-medium text-blue-400 hover:border-b hover:border-blue-300 hover:text-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2 h-6 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
            </svg>
            Posts</a
          >
        </li>
        <li class="me-2">
          <a href="#" class="inline-flex p-4 font-serif font-medium text-blue-400 hover:border-b hover:border-blue-300 hover:text-blue-500"
            ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2 h-6 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            Settings</a
          >
        </li>
      </ul>
      
      
@endsection