<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Student Portal' }}</title>
    <style>
        body { font-family: system-ui, sans-serif; margin: 0; background: #f8fafc; color: #0f172a; line-height: 1.6; }
        .container { max-width: 800px; margin: 0 auto; padding: 0 1rem; }
        .card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.25rem; margin-bottom: 1rem; }
        .btn { display: inline-block; background: #0284c7; color: #fff; padding: 0.4rem 0.8rem; border-radius: 4px; text-decoration: none; border: none; cursor: pointer; }
        .alert { padding: 0.75rem 1rem; border-radius: 6px; margin-bottom: 1.25rem; font-weight: 500; }
        .alert-info { background: #e0f2fe; color: #0369a1; border: 1px solid #bae6fd; }
        .alert-success { background: #dcfce7; color: #15803d; border: 1px solid #bbf7d0; }
        .alert-danger { background: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; }
    </style>
</head>
<body>
    @include('partials.nav')

    <main class="container">
        {{ $slot }}
    </main>

    @include('partials.footer')
</body>
</html>