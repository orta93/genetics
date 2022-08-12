<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <style>
        .short-description {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 90; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .list-disc {
            margin-left: 2rem;
        }

        .results-table th, .results-table td {
            text-align: left;
            padding: 0.7rem 1rem;
            border: 1px solid #ccc;
        }

        table.results-table tbody>tr:nth-child(odd)>td, table.results-table tbody>tr:nth-child(odd)>th {
            background-color: #f7f7f7;
        }
    </style>
</head>
<body class="bg-white text-black-primary">
    <div id="app">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        let modal = document.getElementById("myModal");
        let btn = document.getElementById("myBtn");
        let spans = document.getElementsByClassName("close");

        if (btn) {
            btn.onclick = function () {
                modal.style.display = "block";
            }
        }

        if (spans.length) {
            let span = spans[0];
            span.onclick = function () {
                modal.style.display = "none";
            }
        }

        window.onclick = function(event) {
            if (modal && event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
