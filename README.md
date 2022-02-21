# Extended Env Manager extension for laravel-admin
This extension is an additional requirement to update env file other than in the current project, so you can point to another env file in the same server.

## Requirements

* laravel-admin >= 1.6

## Installation

```bash
composer require fadlisaad/ext-env-manager

# If you want to add a link entry in the left menu, use the following command to import
php artisan admin:import ext-env-manager
```

## Configurations

Add `extensions` option in your `config/admin.php` configuration file:

```php
'extensions' => [
    'ext-env-manager' => [
        // If the value is set to false, this extension will be disabled
        'enable' => true
    ]
]
```

## Usage

Open http://your-host/admin/ext-env-manager

And you can find the `.env` variables.

## License

Licensed under [The MIT License (MIT)](LICENSE).

