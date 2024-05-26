# Noscrape Laravel (Example)

## Try it out

``` shell
$ docker run -d -p 8181:8181 noscrape/laravel-example:latest

# on arm machines you may have to run (but a bit slow)
$ docker run -d --platform=amd64 -p 8181:8181 noscrape/laravel-example:latest
```

open http://localhost:8181/test



## Installation

Add the following lines to your `composer.json`

``` php
"repositories": [
    {
        "url": "https://github.com/noscrape/noscrape-php.git",
        "type": "git"
    }
],
```

ATTENTION! `noscrape-php` is not yet released but coming soon. 😉

## How it works

@see <a href="routes/web.php">web.php</a>

```php
Route::get('/test', function () {
    $noscrape = new Noscrape(public_path("font/ubuntu.ttf"));

    return view('welcome', [
        'title' => $noscrape->obfuscate("Welcome to Noscrape"),
        'description' => $noscrape->obfuscate("This is text is obfuscated."),
        'font' => $noscrape->render()
    ]);
});
```

@see <a href="resources/views/welcome.blade.php">welcome.blade.php</a>

``` bladehtml
<style>
    @font-face {
        font-family: 'noscrape-obfuscated';
        src: url("data:font/truetype;charset=utf-8;base64,{{ $font }}");
    }
    
    .obfuscated {
        font-family: "noscrape-obfuscated";
    }
</style>
...

<h1 class="obfuscated">{{ $title }}</h1>
```
