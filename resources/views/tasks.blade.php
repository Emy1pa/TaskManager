<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Task</title>
</head>

<body>
    <form action="/logout" method="post" class="absolute top-0 right-0 mt-2 mr-2">
        @csrf
        <button type="submit" class="bg-pink-700 hover:bg-pink-900 text-white font-medium rounded-lg text-sm px-5 py-2.5">
            Log out
        </button>
    </form>
    <div class="flex h-screen bg-indigo-700">
        <div class="w-full max-w-md m-auto bg-indigo-100 rounded p-5">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center text-indigo-600">Create Task</h1>
            
            <!-- Task Creation Form -->
            <form action="/create" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 text-indigo-500" for="title">Title</label>
                    <input
                        class="w-full p-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                        type="text" name="title">
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-indigo-500" for="description">Description</label>
                    <textarea
                        class="resize-none w-full p-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                        name="description"></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded">
                        Create Task
                    </button>
                </div>
                
            </form>
            
            <!-- Link to Tasks List -->
            <div class="text-center">
                <p>View all tasks? <a href="/showtasks" class="text-indigo-500">Go to Tasks</a></p>
            </div>
        </div>
    </div>
</body>

</html>
