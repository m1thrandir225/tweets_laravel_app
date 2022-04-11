<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Frist Laravel project</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="bg-blue-900 pt-20 text-blue-100">
        <div class="max-w-5xl mx-auto">
            <div>
                <form action='/tweets' method="POST" class='mb-20'>
                    @csrf
                    <input type='text' name='body' class='mb-4 w-full p-2 border-2 border-blue-500 text-black' placeholder="What's happening?">
                    <button type='submit' class='bg-yellow-300 text-black py-3 px-6 rounded-full'> Tweet </button>
                </form>
            </div>

            <div>
                @foreach($tweets as $tweet)
                    <div class='border-2 border-blue-500 p-2 py-3 m-2'>
                        <form action='/tweets/{{ $tweet->id }}' method="POST" class='flex space-x-2'>
                            @csrf 
                            @method("PUT")
                            <input type='text' name='body' value="{{$tweet->body}}" class='bg-white py-2 px-4 rounded-full text-black w-full'> 
                            <button class='bg-blue-300 text-blue-900 py-3 px-4 rounded-full' type='submit'> Edit </button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
