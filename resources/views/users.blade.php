<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="divide-y-2 divide-x-2 divide-gray-200  grid grid-cols-3 text-center">

        {{--        @php--}}
        {{--            use Illuminate\Support\Facades\Auth;--}}
        {{--            $id = Auth::id();--}}
        {{--        @endphp--}}

        @foreach ($user as $user)
            @if (Auth::user()->is_admin)
                <article>
                    <h1>
                            User Name: {{$user->name}}
                    </h1>

                    <div>
                        <p>
                            User Email: {{$user->email}}
                            <br>
                            User ID: {{$user->id}}
                            <br>
                        <div>
                            <a href="/user/{{$user->id}}/delete"> delete user</a>
                        </div>
                        </p>
                    </div>
                </article>
                @continue
            @endif
        @endforeach
    </div>
</x-app-layout>

