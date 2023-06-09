@extends('layouts.app')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 mt-6">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 bg-neutral-800">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-white dark:text-white">
                Planeterium<span class="text-4xl text-amber-600">.</span>
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route("register") }}" autocomplete="off">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
                            @error('name')
                            <span class="invalid-feedback text-amber-600" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" placeholder="name@company.com">
                            @error('email')
                            <span class="invalid-feedback text-amber-600" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                            <input id="checkbox" type="checkbox" value="" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300" style="padding-right: 240px">Show Password</label>
                            @error('password')
                            <span class="invalid-feedback text-amber-600" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>
                            <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                            <input id="password-confirm" type="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Password must be a minimum of <strong>10 characters</strong> with:
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                -at least <strong>one uppercase</strong> letter
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                -at least <strong>one lowercase</strong> letter
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                -at least <strong>one number</strong>
                            </p><p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                -at least <strong>one symbol</strong>
                            </p>

                        </div>
{{--                        <div class="flex items-start">--}}
{{--                            <div class="flex items-center h-5">--}}
{{--                                <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">--}}
{{--                            </div>--}}
{{--                            <div class="ml-3 text-sm">--}}
{{--                                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <button type="submit" class="w-full text-white bg-neutral-600 hover:bg-neutral-700 focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800">Register</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="/login" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#checkbox').on('change', function() {
                $('#password').attr('type',$('#checkbox').prop('checked')==true ? "text" : "password");
            });
        });
    </script>
@endsection
