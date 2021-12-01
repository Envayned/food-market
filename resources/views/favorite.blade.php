<x-app-layout>
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
                <a href="/favorite/{{$favorite->id}}/delete"> delete from favorites</a>
            </div>
        </article>

    <a href="/favorites">Go back</a>
    </body>
</x-app-layout>
