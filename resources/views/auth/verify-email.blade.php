@extends('layouts.auth')

@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Najasaka Logo"
                class="mx-auto h-10 w-auto" />
            <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Verifikasi Email</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm text-center">
            <p class="mb-4 text-sm text-gray-700">
                Terima kasih telah mendaftar.<br>
                Silakan cek email kamu dan klik link verifikasi untuk mengaktifkan akun.
            </p>

            @if (session('status'))
                <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}" class="mb-4">
                @csrf
                <button type="submit"
                    class="w-full justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Kirim Ulang Email Verifikasi
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-gray-600 underline hover:text-gray-800">
                    Logout
                </button>
            </form>
        </div>
    </div>
@endsection
