<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <title>Index</title>
</head>
<body>

<div class="w-4/5 mx-auto">
    <div class="text-center pt-20">
        <h1 class="text-3xl text-gray-700">
            All Articles
        </h1>
        <hr class="border border-1 border-gray-300 mt-10">
    </div>

    <div class="py-10 sm:py-20">
        <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
           href="{{ route('blog.create') }}">
            New Article
        </a>
    </div>
</div>

@foreach($posts as $post)
    <div class="w-4/5 mx-auto pb-10">
        <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
            <div class="w-11/12 mx-auto pb-10">
                <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                    <a href="{{ route('blog.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </h2>

                <p class="text-gray-900 text-lg py-8 w-full break-words">
                    {{ $post->excerpt }}
                </p>

                <span class="text-gray-500 text-sm sm:text-base">
                    Made by:
                        <a href=""
                           class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all">
                            RAIG
                        </a>
                    op 13-07-2022
                </span>
            </div>
        </div>
    </div>
@endforeach


{{--while posts variable is not empty, make a table of posts with database variables in blade format
table header should be gray color, each odd rows of table should be light gray,
table header must have border of width 2px, use tailwind classes--}}
{{--@if(!empty($posts))--}}
{{--    <table class="table-auto border-2 border-gray-500">--}}
{{--        <thead class="bg-gray-500">--}}
{{--        <tr>--}}
{{--            <th class="border-2 border-gray-500">Title</th>--}}
{{--            th for excerpt--}}
{{--            <th class="border-2 border-gray-500">Excerpt</th>--}}
{{--            <th class="border-2 border-gray-500">Content</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($posts as $post)--}}
{{--            <tr class="@if($post->is_published) bg-gray-200 @endif">--}}
{{--                <td class="border-2 border-gray-500">{{ $post->title }}</td>--}}
{{--                <td class="border-2 border-gray-500">{{ $post->excerpt }}</td>--}}
{{--                <td class="border-2 border-gray-500">{{ $post->body }}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--@endif--}}

</body>
</html>





