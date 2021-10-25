# Simple PHP8 Attributes implementation.

Data attributes validator implemented using PHP8 attributes feature.

## Example

```php
class Data {

    #[NotBlank]
    public int $id;

    #[NotBlank]
    public string $name;

    #[MinLength(5)]
    public string $account;
}

Validator::validate($data) // returns array of violations

```

## Running app for test

```
$ composer install
$ php app.php
```