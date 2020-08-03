<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <style>
        la
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1 class="title m-b-md">
            Urls
        </h1>
            @forelse($urls as $url)
                <div class="item item-url">
                    <label>Id:</label> <strong>{{ $url->id }}</strong><br />
                    <label>Url:</label> <strong>{{ $url->url }}</strong><br />
                    <label>Slug:</label> <strong>{{ $url->slug }}</strong>
                </div>
            @empty
                <div class="item empty">
                    No urls
                </div>
            @endforelse
        </div>
    </div>
</div>
</body>
</html>
