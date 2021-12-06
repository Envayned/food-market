<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="divide-y-2 divide-gray-200">
        <?php foreach ($products as $product) : ?>
            <article>
                <h1>
                    <a href= '/product/{{$product->id}}'>
                        {{$product->name}}
                    </a>
                </h1>

                <div>
                    <p>
                        {{$product->description}}
                    <br>
                        {{$product->price}}
{{--                        {{$product->created_at}}--}}
                    </p>
                    <a href= "{{route('add-favorite', $product->id)}}">
                        <p>add to favorites</p>
                    </a>
                    <a href= '/cart/{{$product->id}}/add'>
                        <p>add to cart</p>
                    </a>

                </div>
            </article>
        <?php endforeach;?>
    </div>
</x-app-layout>

