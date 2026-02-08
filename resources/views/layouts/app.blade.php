<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    {{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <link href="{{asset('admin-panel/css/style.css')}}" rel="stylesheet">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/47.4.0/ckeditor5.css">


</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
<script src="{{asset('admin-panel/js/script.js')}}" defer></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const textarea = document.querySelector('#content');
        if (textarea) {
            ClassicEditor
                .create(textarea, {
                    toolbar: [
                        'heading',
                        'bold', 'italic',
                        'link',
                        'bulletedList', 'numberedList',
                        'blockQuote',
                        'undo', 'redo'
                    ]
                })
                .then(editor => {
                    // editor.ui.view.editable.element.style.minHeight = '400px';
                })
                .catch(error => {
                    console.error(error);
                });
        }
    });
</script>


</body>
</html>
