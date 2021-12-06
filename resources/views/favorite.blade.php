<x-app-layout>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Favorite') }}
        </h2>
    </x-slot>

    <body>
        <article>
            <h1>{{$favorite ?? ''}}</h1>

            <div>
{{--                @foreach($collection as $favorite)--}}
{{--                    {{$favorite->product->name}}--}}
{{--                @endforeach--}}
            </div>
            <div>
                <a href="/favorite/{{$favorite->id}}/delete"> <i class="far fa-heart"></i></a>
            </div>
        </article>

    <a href="/favorites"><i class="fas fa-arrow-circle-left"></i></a>
    </body>
   
</x-app-layout>
