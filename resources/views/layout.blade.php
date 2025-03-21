<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$title ?? 'Workopia | Find and list jobs'}}</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
  <x-header/>
  @if (request()->is('/'))
  <x-hero/>
  <x-top-banner/>
  @endif
  <main class="container mx-auto p-4 mt-4">
    {{$slot}}
  </main>
  @vite('resources/js/app.js')
</body>
</html>
