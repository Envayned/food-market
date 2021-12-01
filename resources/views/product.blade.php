<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <body>
        <article>
            <h1>{{$product ?? ''}}</h1>

            <div>
                <a href="/product/{{$product->id}}/delete"> delete</a>
            </div>
        </article>

        <a href="/products">Go back</a>
    </body>
</x-app-layout>
