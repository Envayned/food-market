<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Favorites') }}
        </h2>
    </x-slot>
    <div class="divide-y-2 divide-gray-200">

{{--        @php--}}
{{--            use Illuminate\Support\Facades\Auth;--}}
{{--            $id = Auth::id();--}}
{{--        @endphp--}}

        @foreach ($favorites as $favorite)
           @if (Auth::id() == $favorite->user_id)
                <article>
                    <h1>
                        <a href= "/favorite/{{$favorite->id}}">
                            {{$favorite->product->name }}
                        </a>
                    </h1>

                    <div>
                        <p>
                            {{$favorite->product->description}}
                            <br>
                            {{$favorite->product->price}}
                        </p>
                    </div>
                </article>
                @continue
            @endif
        @endforeach
    </div>
</x-app-layout>

