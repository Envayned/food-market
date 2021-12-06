<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="divide-y-2 divide-gray-200">
        @foreach ($items as $item)
            @if (Auth::id() == $item->user_id)
                <article>
                    <h1>
                        <a href= '/product/{{$item->item_id}}'>
                            {{$item->product->name }}
                        </a>
                    </h1>

                    <div>
                        <p>
                            {{$item->product->description}}
                            <br>
                            {{$item->product->price}}
                            <br>
                            {{$item->quantity}}
                            <p>
                                <a href= '{{route('remove-cart', $item->id)}}'>
                                    remove from cart
                                </a>
                            </p>
                        </p>
                    </div>
                </article>
                @continue
            @endif
        @endforeach
    </div>
</x-app-layout>

