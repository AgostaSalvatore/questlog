<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Questlog')</title>

    <style>
        :root {
            --bg: #f5f7fb;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #e5e7eb;
            --primary: #2563eb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: var(--bg);
            color: var(--text);
        }

        header {
            background: var(--card);
            border-bottom: 1px solid var(--border);
            padding: 1rem 1.5rem;
        }

        .brand {
            margin: 0;
            font-size: 1.2rem;
            color: var(--primary);
        }

        .container {
            max-width: 960px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 1.25rem;
        }

        footer {
            text-align: center;
            color: var(--muted);
            padding: 1rem;
            border-top: 1px solid var(--border);
            margin-top: 2rem;
            background: var(--card);
        }
    </style>

    @stack('styles')
</head>
<body>
    <header>
        <h1 class="brand">Questlog</h1>
    </header>

    <main class="container">
        <div class="card">
            @yield('content')
        </div>
    </main>

    <footer>
        <small>&copy; {{ date('Y') }} Questlog</small>
    </footer>

    @stack('scripts')
</body>
</html>
