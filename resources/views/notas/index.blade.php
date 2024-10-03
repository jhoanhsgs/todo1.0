@extends('layouts.app')

@section('content')
    <nav class="flex p-4">
        <router-link to="/" class="text-xl text-white mx-3 p-2" active-class="font-bold exact">
            Notas
        </router-link>
        <router-link to="/form" class="text-xl text-white mx-3 p-2" active-class="font-bold exact">
            Nueva nota
        </router-link>
    </nav>
    <div class="flex  mt-5 ml-5">
        <router-view></router-view>
    </div>

@endsection
