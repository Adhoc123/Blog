@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
          <h1 class="text-6xl">
              Blog Posts
          </h1>
    </div>
</div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2020/01/26/20/14/computer-4795762_960_720.jpg" width="700" alt="">
        </div>
        <div>
           <h2 class="text-gray-700 font-bold text-5xl pb-4">
               Learn How To Write Laravel Code
           </h2>
            <span class="text-gray-500">
               By<span class="font-bold italic text-gray-800">Code with emon, </span>
            </span>
        </div>
    </div>
@endsection
