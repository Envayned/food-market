<x-app-layout> 
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="divide-y-2 divide-x-2 divide-gray-200  grid grid-cols-3 text-center">
        <?php foreach ($products as $product) : ?>
            <article >
                <h1>
                    <a href= '/product/{{$product->id}}'>
                        Product Name: {{$product->name}}
                    </a>
                </h1>

                <div>
                    <p>
                        Product Description: {{$product->description}}
                    <br>
                        Price : {{$product->price}}
{{--                        {{$product->created_at}}--}}
                    </p>
                    <a href= "{{route('add-favorite', $product->id)}}">
                    <i class="fas fa-heart fa-lg"></i>&nbsp;&nbsp;&nbsp;

                        
                    </a>
                    <a href= '/cart/{{$product->id}}/add'>
                    <i class="fas fa-cart-plus fa-lg"></i>
                    </a>

                </div>
            </article>
        <?php endforeach;?>
    </div>
    <i class="fas fa-plus-circle fa-3x"></i>
</x-app-layout>

