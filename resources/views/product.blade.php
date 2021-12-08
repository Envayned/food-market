<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <body>
        <article>
            <img src="https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg" alt="Not Found" width="250" height="100">
            <h1>{{$product ?? ''}}</h1>

            <div>

                <a href="/product/{{$product->id}}/delete"> delete</a>
            </div>
        </article>

        <a href="/products">Go back</a>
    </body>
</x-app-layout>
