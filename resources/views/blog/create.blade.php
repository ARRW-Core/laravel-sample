{{--
Make a form. The form should have a title, an except, a body, and a submit button.
Use tailwind classes for styling.
Use blade syntax for form action and method.
--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <title>Create</title>
</head>
<body>
    <div class="w-4/5 mx-auto">
        <div class="pt-10">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                < Back to previous page
            </a>
        </div>
{{--        create a div.
            use if statement to check if there are any errors.
            if there are errors, display them in a ul list.
            if there are no errors, display a message saying "No errors found."
            use tailwind classes for styling.
            use blade syntax for the if statement.
            use blade syntax for the ul list.
            use blade syntax for the li list.
            use blade syntax for the message.
            --}}
        <div class="pb-8">
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                <p class="font-bold">There are errors in your form</p>
                <p>Fix them before submitting again</p>
            </div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @else
                <p>No errors found.</p>
            @endif
        </div>
        {{--        Create a form. The form should have a title, an excerpt, a body, and a submit button.
            Use tailwind classes for styling.
            Use blade syntax for form action and method.
            --}}

        <form
            action="{{ route('blog.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            <div class="block lg:flex flex-row">
                <div class="basis-9/12 text-center sm:block sm:text-left">
                    <span class="text-left sm:text-center sm:text-left sm:inline block text-gray-900 pb-10 sm:pt-0 pt-0 sm:pt-10 pl-0 sm:pl-4 -mt-8 sm:-mt-0">
                        Made by:
                        <a
                            href=""
                            class="font-bold text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                            RAIG
                        </a>
                        On 17-07-2022
                    </span>
                </div>
            </div>

            <div class="pt-10 pb-10 text-gray-900 text-xl">
                <p class="font-bold text-2xl text-black pt-10">
                    <label for="is_published" class="text-gray-900 text-xl">Is Published</label>
                    <input type="checkbox" name="is_published" id="is_published" class="w-6 h-6">
                </p>
                <p class="font-bold text-2xl text-black pt-10">
                    <input type="text" name="title" placeholder="Title">
                </p>

                <p class="font-bold text-2xl text-black pt-10">
                    <input type="text" name="excerpt" placeholder="Excerpt">
                </p>

                <p class="text-base text-black pt-10">
                    <textarea name="body" id="" cols="30" rows="10" placeholder="Body"></textarea>
                </p>

                <p class="text-base text-black pt-10">
                    <label for="image" class="text-gray-900 text-xl">Image Path</label>
                    <input type="file" name="image" id="image">
                </p>

            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded font-medium">Submit</button>
        </form>
    </div>
</body>
</html>

{{--
