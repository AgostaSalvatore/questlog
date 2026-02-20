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
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        h1 {
            margin: 0 0 1.5rem 0;
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--text);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.25rem;
            font-weight: 500;
            color: var(--text);
        }

        input, select, textarea {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 0.95rem;
            transition: border-color 0.15s;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.625rem 1.25rem;
            border-radius: 6px;
            font-size: 0.95rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.15s;
        }

        button:hover {
            background: #1d4ed8;
        }

        .btn-secondary {
            background: var(--muted);
        }

        .btn-secondary:hover {
            background: #4b5563;
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
