Small quality of live improvement.

Provides small enum and a `gettype` function which instead of set of strings as original `\gettype` does, returns proper enum value.

Especially when you are running with phpstan level max.

So to avoid annoying:
```
Diagnostics:
1. Parameter #1 $externalUrl of class CLI\SayHelloFromExternalServerCommand constructor expects string, string|false given.
```

Do:

```php
use function gulasz101\gettype;

$app->add(new SayHalloFromDBCommand(
    new PDO(
        match (gettype($dsn = getenv('CLI_DB_DSN'))) {
            Type::BOOLEAN => throw new RuntimeException('CLI_DB_DSN env is missing'),
            Type::STRING => $dsn,
            default => throw new RuntimeException('CLI_DB_DSN env is setup with wrong type'),
        }
    ))
);

```

Install it with:
```shell
composer require gulasz101/gettype
```
