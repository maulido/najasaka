@extends('layouts.auth')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Login</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="w-full border rounded px-3 py-2 mt-1" required autofocus>
        </div>

        <div class="mb-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="w-full border rounded px-3 py-2 mt-1" required>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Login</button>
        </div>
    </form>
</div>
@endsection
