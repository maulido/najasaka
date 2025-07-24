@extends('layouts.auth')

@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Najasaka Logo"
                class="mx-auto h-10 w-auto" />
            <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Create your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="full_name" class="block text-sm font-medium text-gray-900">Full Name</label>
                    <div class="mt-2">
                        <input id="full_name" name="full_name" type="text" required autofocus
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" required autocomplete="email"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" required autocomplete="new-password"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-900">Confirm
                        Password</label>
                    <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                            autocomplete="new-password"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Register
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign in</a>
            </p>
        </div>
    </div>
@endsection
