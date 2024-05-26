<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Noscrape - Example</title>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%


        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .flex {
            display: flex;
            flex-direction: column;
        }

        .min-h-screen {
            min-height: 100vh
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .relative {
            position: relative
        }
    </style>

    <style>
        @font-face {
            font-family: 'ubuntu';
            src: url(font/ubuntu.ttf);
        }

    @if($font)
        @font-face {
            font-family: 'noscrape-obfuscated';
            src: url("data:font/truetype;charset=utf-8;base64,{{ $font }}");
        }
    @endif
        .obfuscated {
            font-family: "noscrape-obfuscated";

        }

        body {
            color: white;
            font-family: 'ubuntu', sans-serif;
            background: darkslategray;
            text-align: center;
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex flex-col items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">

    <h1 class="obfuscated">{{ $title }}</h1>
    <h4 class="obfuscated" style="margin: 0;">{{ $description }}</h4>
    <h4 style="margin: 0;">this is not obfuscated</h4>
</div>
</body>
</html>

<?php
    unset($font);
    unset($title);
    unset($description);
