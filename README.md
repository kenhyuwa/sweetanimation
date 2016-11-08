![Notify](https://s3.amazonaws.com/s3.codecourse.com/github/banners/notify.png)

> This is Flexible Notification customize from Codecourse/Notify. Thanks to Alex Garrett.

## Install

Using Composer

```
composer require ken/sweetanimation
```

Add the service provider to `config/app.php`

```php
Ken\Sweetanimation\Provider\SpiderServiceProvider::class,
```

Optionally include the Facade in `config/app.php` if you'd like.

```php
'Sweet' => Ken\Sweetanimation\Facades\Sweetanimation::class,
```

> Note, there is a animation() function available, so unless you really want to use the Facade, there's no need to include it.

## Usage

### Basic

From your application, call the `flash` method with a message and type.

```php
animation()->flash('Welcome back!', 'success');
```

Within a view, you can now check if a flash message exists and output it.

```php
@if (animation()->ready())
    <div class="alert-box {{ sweet()->type() }}">
        {{ animation()->message() }}
    </div>
@endif
```
> Notify is front-end framework agnostic, so you're free to easily implement the output however you choose.

### Options

You can pass additional options to the `flash` method, which are then easily accessible within your view.

```php
animation()->flash('Welcome back!', 'success', [
    'timer' => 3000,
    'text' => 'It\'s really great to see you again',
    'animate' => 'animate flash'
]);
```

Then, in your view.

```javascript
@if (animation()->ready())
    <script>
        swal({
            title: "{!! animation()->message() !!}",
            text: "{!! animation()->option('text') !!}",
            type: "{{ animation()->type() }}",
            @if (animation()->option('timer'))
                timer: {{ animation()->option('timer') }},
                showConfirmButton: false,
            @endif
            @if (animation()->option('animate'))
                animation: false,
                customClass: {{ animation()->option('animate') }},
                showConfirmButton: true
            @endif
        });
    </script>
@endif
```

![SweetAlert example](https://s3.amazonaws.com/s3.codecourse.com/github/notify/swal-example.png)

> The above example uses SweetAlert, but the flexibily of SweetAlert and Animate.css means you can easily use it with any JavaScript alert solution.

## Issues and contribution

Just submit an issue or pull request through GitHub. Thanks!
