<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <style>
            * { box-sizing: border-box; margin: 0; padding: 0; }
            body {
                background-color: #0a0a0a;
                color: #ededec;
                font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1.5rem;
            }
            .card {
                background-color: #161615;
                border: 1px solid #3e3e3a;
                border-radius: 0.5rem;
                padding: 2.5rem;
                width: 100%;
                max-width: 56rem;
            }
            .card h1 {
                font-size: 0.9375rem;
                font-weight: 600;
                margin-bottom: 0.25rem;
            }
            .card p {
                font-size: 0.8125rem;
                color: #a1a09a;
                margin-bottom: 1rem;
            }
            .badge {
                display: inline-block;
                padding: 0.375rem 1.25rem;
                background-color: #eeeeec;
                color: #1c1c1a;
                border: 1px solid #eeeeec;
                border-radius: 0.25rem;
                font-size: 0.875rem;
                font-weight: 500;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>Daffa Alyandra Putra Hermanto</h1>
            <p>20230140172</p>
            <span class="badge">Modul Pertemuan 1</span>
        </div>
    </body>
</html>