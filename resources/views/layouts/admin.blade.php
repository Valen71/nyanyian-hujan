<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Admin Nyanyian Hujan')
    </title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;

            font-family:
                Arial,
                sans-serif;

            background: #f1f5f9;

            color: #111827;
        }

        .admin-layout {
            min-height: 100vh;
        }

        .admin-main {
            min-height: 100vh;

            padding: 30px;
        }
    </style>
</head>

<body>

    <div class="admin-layout">

        <main class="admin-main">

            @yield('content')

        </main>

    </div>

</body>

</html>