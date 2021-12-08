<x-app-layout>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Favorite') }}
        </h2>
    </x-slot>

    <body>
        <article>
            <img src="https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg" alt="Not Found" width="250" height="100">
            <h1>{{$favorite ?? ''}}</h1>

            <div>
            </div>
            <div>
                <a href="/favorite/{{$favorite->id}}/delete"> <i class="far fa-heart fa-2x"></i></a>
            </div>
        </article>
    <br>
    <a href="/favorites"><i class="fas fa-arrow-circle-left fa-2x"></i></a>
    </body>

</x-app-layout>
