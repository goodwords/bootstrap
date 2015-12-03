---
layout: docs
title: Kickstart
group: goodwords
---

["Optimised for change"](https://wunderprojects.atlassian.net/wiki/x/KIB7) also means kickstarting new opportunities. 

### Requirements

- Node.js
- gulp (installed globally)
- bower (installed globally)


### Initial setup

Clone or update the following files from `bower_components/styleguide/blueprint` directory to your root project directory

- `.gitignore`
- `package.json`
- `bower.json`
- `gulpfile.js`

Install the dependencies running these commands in terminal

{% highlight text %}
npm install
bower install
{% endhighlight %}


Create your `resources/assets/sass/app.scss` file with imports from Styleguide.
Add your own components at the bottom of the file.

{% highlight scss %}
@import "./bower_components/styleguide/scss/styleguide-reboot";
@import "./bower_components/styleguide/scss/type";
@import "./bower_components/styleguide/scss/grid";
@import "./bower_components/styleguide/scss/tables";
@import "./bower_components/styleguide/scss/forms";
@import "./bower_components/styleguide/scss/buttons";
{% endhighlight %}


### Use 

Create basic layout `resources/views/layouts/body.blade.php`

{% highlight html %}
{% raw %}
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>{{ $title or '' }}</title>

    <link rel="stylesheet" href="{{ built_asset('assets/app.css') }}">

</head>
<body class="{{ $class or '' }}">

    @section('body')
        @yield('content')
    @endsection

    @yield('body')

    <script src="{{ built_asset('assets/app.js') }}"></script>

</body>
</html>
{% endraw %}
{% endhighlight %}

To use `built_asset()` helper add this to `composer.json` and then run `composer dump-autload` in terminal

{% highlight json %}
"autoload": {
    "classmap": [
    ],
    "psr-4": {
    },
    "files": [
        "bower_components/styleguide/blueprint/built_asset.helper.php"
    ]
}
{% endhighlight %}

### Build

Build assets by running `gulp`

To get minified assets run `gulp --production` 

