<x-app-layout>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="divide-y-2 divide-x-2 divide-gray-200  grid grid-cols-3 text-center">
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
                                <i class="fas fa-trash-alt"></i>
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

