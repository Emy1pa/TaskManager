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
    <div class="flex h-screen bg-indigo-700">
        <div class="w-full max-w-md m-auto bg-indigo-100 rounded p-5">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center text-indigo-600">Create Task</h1>
            
            <!-- Task Creation Form -->
            <form action="/edit-task/{{$task->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label class="block mb-2 text-indigo-500" for="title">Title</label>
                    <input
                        class="w-full p-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                        type="text" value="{{$task->title}}" name="title">
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-indigo-500" for="description">Description</label>
                    <textarea
                        class="resize-none w-full p-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                        name="description">{{$task->description}}</textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded">
                        Save Changes </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
