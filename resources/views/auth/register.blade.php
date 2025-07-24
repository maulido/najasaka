@extends('layouts.auth')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Register</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-4">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" class="w-full border rounded px-3 py-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="w-full border rounded px-3 py-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="w-full border rounded px-3 py-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="w-full border rounded px-3 py-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border rounded px-3 py-2 mt-1" required>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Register</button>
        </div>
    </form>
</div>
@endsection
