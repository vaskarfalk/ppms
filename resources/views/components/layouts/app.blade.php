<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $description ?? 'Page Description' }}">
        <meta name="keywords" content="{{ $keywords ?? 'Page Keywords' }}">
        <meta name="author" content="{{ $author ?? 'Author Name' }}">
        <title>{{ $title ?? 'Page Title' }}</title>



    </head>
    <body>
        {{ $slot }}
    </body>
</html>
