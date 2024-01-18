<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- Tailwind --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- FLOWBITE --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>{{ $title }}</title>
  </head>
  <body class="max-w-screen h-screen font-rubik bg-background1">