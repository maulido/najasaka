@extends('layouts.auth')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Verifikasi Email</h1>

    <p class="mb-4">Terima kasih telah mendaftar. Silakan cek email kamu dan klik link verifikasi untuk mengaktifkan akun.</p>

    @if (session('status'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Kirim Ulang Email Verifikasi
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}" class="mt-4">
        @csrf
        <button type="submit" class="text-sm text-gray-500 underline">
            Logout
        </button>
    </form>
</div>
@endsection
