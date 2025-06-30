# Danielle Fence Button Component for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/daniellefence/buttons.svg?style=flat-square)](https://packagist.org/packages/daniellefence/buttons)
[![Total Downloads](https://img.shields.io/packagist/dt/daniellefence/buttons.svg?style=flat-square)](https://packagist.org/packages/daniellefence/buttons)
![GitHub Actions](https://github.com/daniellefence/buttons/actions/workflows/main.yml/badge.svg)

This package provides a robust `<x-df::button>` Blade component designed for use with Laravel, Tailwind CSS, and DaisyUI. It supports all DaisyUI button variants, including color states (primary, secondary, accent, etc.), sizes (xs through xl), styles (ghost, link, outline, soft, etc.), and modifiers (block, wide, square, circle, etc.).

Built for full Livewire compatibility, it also includes support for icon slots, a `loading` prop to show spinners, and loading indicators, making it ideal for building interactive, consistent interfaces quickly.

## Installation

You can install the package via composer:

```bash
composer require daniellefence/buttons
```

## Usage

```php
// Basic usage
<x-df::button>
    Default
</x-df::button>

// With variant and size
<x-df::button variant="primary" size="lg">
    Submit
</x-df::button>

// With outline and block
<x-df::button variant="secondary" outline block>
    Full Width
</x-df::button>

// With an icon
<x-df::button variant="success">
    <x-slot name="icon">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
    </x-slot>
    Save
</x-df::button>

// With Livewire loading indicator
<x-df::button wire:click="save" wire:loading.attr="disabled">
    <x-slot name="icon">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
    </x-slot>
    Saving...
</x-df::button>

// With loading spinner
<x-df::button loading>
    Loading...
</x-df::button>
```

## Contributing

Contributions are welcome! See [CONTRIBUTING](CONTRIBUTING.md) for guidelines.

### Security

If you discover any security-related issues, please email sbarron@daniellefence.net instead of using the issue tracker.

## Credits

Developed and maintained by the IT/Marketing department at Danielle Fence and Outdoor Living.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md) and is © Danielle Fence and Outdoor Living.
