# Campo de Moeda Br para laravel Nova

Mask field for brazilian currency

### Install

Run this command into your nova project:

`composer require henriquemattia/moeda-br`

### Add it to your Nova Resource:

```php
use Henriquemattia\MoedaBr\MoedaBr;

MoedaBr::make('Valor', 'value'),
```

## Demo

![Demo](https://raw.githubusercontent.com/henriquemattia/moeda-br/main/docs/demo.gif)