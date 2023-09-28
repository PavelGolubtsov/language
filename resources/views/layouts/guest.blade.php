<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">

        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: 'Nunito', sans-serif;
            }
            a{
                text-decoration: none;
                color: black;
            }
            header a:hover{
                color: green;
            }
            #language_title:hover{
                color: green;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
    <header style="box-shadow: 1px 1px 2px gray;">
        <div style="display:flex;justify-content:space-between;padding: 18px 2% 18px 2%;">
            <div>
                <a href="{{ route('home') }}">{{ __('Header')}}</a>
            </div>

            <div>
                <div id="language_title" style="position: relative;cursor: pointer;">
                    <span>@php
                        echo App::getLocale();
                    @endphp</span>
                    <span id="language_arrow" style="font-size: 8pt;vertical-align: baseline;">&#9660;</span>
                <x-language-button/>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

</body>
<script>
window.addEventListener('click', dropAllBlock, true)
function dropAllBlock(){
    language_button.setAttribute('hidden', '')
}

class Menu {
    handleEvent(event) {
        switch(event.type) {
        case 'mousedown':
            language_arrow.setAttribute('style', 'font-size: 8pt;vertical-align: bottom;')
        break
        case 'mouseup':
            language_arrow.setAttribute('style', 'font-size: 8pt;vertical-align: baseline;')
        break
        case 'click':
            if (language_button.hasAttribute('hidden')){
                language_button.removeAttribute('hidden')
            } else {
                language_button.setAttribute('hidden', '')
            }
        break
        }
    }
}

let menu = new Menu();
language_title.addEventListener('mousedown', menu);
language_title.addEventListener('mouseup', menu);
language_title.addEventListener('click', menu);
</script>
</html>
