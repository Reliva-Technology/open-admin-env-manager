# Env Manager extension for Open Admin
This extension is an additional requirement to update env file other than in the current project, so you can point to another env file in the same server.

## Requirements

* open-admin >= 1.6

## Installation

```bash
composer require reliva-technology/open-admin-env-manager

# If you want to add a link entry in the left menu, use the following command to import
php artisan admin:import open-admin-env-manager
```

## Configurations

Add `extensions` option in your `config/admin.php` configuration file:

```php
'extensions' => [
    'open-admin-env-manager' => [
        // If the value is set to false, this extension will be disabled
        'enable' => true
    ]
]
```

## Usage

Open http://your-host/admin/env-manager

And you can find the `.env` variables.

## License

Licensed under [The MIT License (MIT)](LICENSE).

