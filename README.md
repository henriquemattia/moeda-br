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

### Optional Methods

You can customize the behavior of the field using the following methods:

- **Multiply the value by a factor**:
  
  Use the `multiplyValueBy` method to multiply the input value by a specific integer. For example, to multiply the value by 100:

  ```php
  MoedaBr::make('Valor', 'value')->multiplyValueBy(100),
    ```

- **Display the value divided by a factor**:
  
  Use the `displayValueDividedBy` method to divide the displayed value by a specific integer. This is useful when you want to format or scale the value for display purposes. For example, if you want to display the value divided by 100:

  ```php
  MoedaBr::make('Valor', 'value')->displayValueDividedBy(100),
  ```


## Demo

![Demo](https://raw.githubusercontent.com/henriquemattia/moeda-br/main/docs/demo.gif)