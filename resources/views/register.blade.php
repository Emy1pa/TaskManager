<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <div class="flex h-screen bg-indigo-700">
        <div class="w-full max-w-md m-auto bg-indigo-100 rounded p-5">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center text-indigo-600">TASK REGISTER</h1>
            @if ($errors->any())
        <div class="bg-red-500 text-white p-4 mb-4 rounded-md">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
            <form action="/register" method="POST">
                @csrf
                <div class="flex mb-6">
                    <div class="w-1/2 pr-2">
                        <label class="block mb-2 text-indigo-500" for="username">Name</label>
                        <input
                            class="w-full p-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                            type="text" name="name" value="{{old('name')}}">
                    </div>
                    <div class="w-1/2 pl-2">
                        <label class="block mb-2 text-indigo-500" for="email">Email</label>
                        <input
                            class="w-full p-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                            type="email" name="email" value="{{old('email')}}">
                    </div>
                </div>
                <div class="flex mb-6">
                    <div class="w-1/2 pr-2">
                        <label class="block mb-2 text-indigo-500" for="password">Password</label>
                        <input
                            class="w-full p-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                            type="password" name="password" value="{{old('password')}}">
                    </div>
                    <div class="w-1/2 pl-2">
                        <label class="block mb-2 text-indigo-500" for="cpassword"> C_Password</label>
                        <input
                            class="w-full p-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                            type="password" name="password_confirmation">
                    </div>
                </div>
                <div>
                    <input class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded"
                        type="submit" value="Register">
                </div>
            </form>
            <div class="text-center">
                <p>Already have an account? <a href="/login" class="text-indigo-500">Login here</a></p>
            </div>
        </div>
    </div>   
</body>

</html>
