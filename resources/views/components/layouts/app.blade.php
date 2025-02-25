<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        ::-webkit-scrollbar {
            width: 4px;
            height: 4px;
            ;
        }

        ::-webkit-scrollbar-track {
            background: #18181b
        }

        ::-webkit-scrollbar-thumb {
            background: #dc2626
        }
    </style>
</head>

<body class="bg-zinc-950 text-zinc-50">
    <livewire:web.components.navbar />
    {{ $slot }}
</body>

</html>
