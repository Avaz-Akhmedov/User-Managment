<x-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100 mt-12">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
            <h3 class="text-2xl font-bold text-center">Join us</h3>
            <form method="POST" action="{{url("/register")}}">
                @csrf
                <div class="mt-4">
                    <div>
                        <label class="block" for="Name">Name<label>
                                <input type="text"
                                       name="name"
                                       placeholder="Name"
                                       value="{{old("name")}}"
                                       class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"/>
                                @error("name")
                                <span class="text-xs text-red-400">{{$message}}</span>
                                 @enderror
                    </div>
                    <div class="mt-4">
                        <label class="block" for="email">Email<label>
                                <input type="text"
                                       name="email"
                                       placeholder="Email"
                                       value="{{old("email")}}"
                                       class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"/>
                                @error("email")
                                <span class="text-xs text-red-400">{{$message}}</span>
                                @enderror
                    </div>
                    <div class="mt-4">
                        <label class="block">Password<label>
                                <input type="password"
                                       name="password"
                                       placeholder="Password"
                                       value="{{old("password")}}"
                                       class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600/">
                                @error("password")
                                <span class="text-xs text-red-400">{{$message}}</span>
                               @enderror
                    </div>
                    <div class="mt-4">
                        <label class="block">Confirm Password<label>
                                <input type="password"
                                       name="password_confirmation"
                                       placeholder="Password"
                                       class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"/>
                                @error("password_confirm")
                                <span class="text-xs text-red-400">{{$message}}</span>
                                @enderror
                    </div>
                    <div class="flex">
                        <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Create
                            Account
                        </button>
                    </div>
                    <div class="mt-6 text-grey-dark">
                        Already have an account?
                        <a class="text-blue-600 hover:underline" href="/login">
                            Log in
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-layout>
