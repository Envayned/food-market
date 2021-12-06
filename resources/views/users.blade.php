<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="divide-y-2 divide-gray-200">

        {{--        @php--}}
        {{--            use Illuminate\Support\Facades\Auth;--}}
        {{--            $id = Auth::id();--}}
        {{--        @endphp--}}

        @foreach ($user as $user)
            @if (Auth::user()->is_admin)
                <article>
                    <h1>
                            {{$user->name}}
                    </h1>

                    <div>
                        <p>
                            {{$user->email}}
                            <br>
                            {{$user->id}}
                            <br>
{{--                            <a href=""></a>--}}
                        </p>
                    </div>
                </article>
                @continue
            @endif
        @endforeach
    </div>
</x-app-layout>

