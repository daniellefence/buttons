{{--
    DanielleFence/Button Component
    ------------------------------
    A wrapper around DaisyUI's `btn` that supports:
      • size:     xs | sm | md | lg | xl
      • variant:  neutral | primary | secondary | accent | info | success | warning | danger | error
      • soft:     bool  – applies DaisyUI `btn-soft`
      • outline:  bool  – applies DaisyUI `btn-outline`
      • dashed:   bool  – adds `border-dashed`
      • ghost:    bool  – applies DaisyUI `btn-ghost`
      • link:     bool  – applies DaisyUI `btn-link`
      • active:   bool  – adds `btn-active`
      • disabled: bool  – adds `btn-disabled`
      • wide:     bool  – adds `btn-wide`
      • block:    bool  – adds `btn-block`
      • square:   bool  – adds `btn-square`
      • circle:   bool  – adds `btn-circle`
--}}
@props([
    'size'     => 'normal',   // xs | sm | md | lg | xl
    'variant'  => 'neutral',  // neutral | primary | secondary | accent | info | success | warning | danger/error
    'soft'     => false,
    'outline'  => false,
    'dashed'   => false,
    'ghost'    => false,
    'link'     => false,
    'active'   => false,
    'disabled' => false,
    'wide'     => false,
    'block'    => false,
    'square'   => false,
    'circle'   => false,
])

@php
    /**
     * Build the complete class string for the <button>.
     * – $base         : Shared DaisyUI button base.
     * – $variantClasses: Color theme (btn-primary, btn-success, …).
     * – $sizeClasses   : Sizing helpers (btn-xs, btn-sm, …).
     * – Optional toggles:
     *     $softClass   : Lighter “soft” color.
     *     $outlineClass: Outline-only style.
     *     $dashedClass : Dashed border.
     *     $activeClass : Active/pressed state.
     */
    // DaisyUI base class
    $base = 'btn inline-flex items-center justify-center transition';

    // Variant → DaisyUI color class
    $variantClasses = match ($variant) {
        'primary'   => 'btn-primary',
        'secondary' => 'btn-secondary',
        'accent'    => 'btn-accent',
        'success'   => 'btn-success',
        'danger', 'error' => 'btn-error',
        'warning'   => 'btn-warning',
        'info'      => 'btn-info',
        'neutral'  => 'btn-neutral',
        default    => 'btn-neutral',
    };

    // Size → DaisyUI size class
    $sizeClasses = match ($size) {
        'xs'            => 'btn-xs',
        'sm', 'small'   => 'btn-sm',
        'lg', 'large'   => 'btn-lg',
        'xl'            => 'btn-xl',
        default         => 'btn-md', // "normal"
    };

    // Extra style toggles
    $softClass     = $soft ? 'btn-soft' : '';
    $outlineClass  = $outline ? 'btn-outline' : '';
    $dashedClass   = $dashed ? 'border border-dashed' : '';
    $ghostClass    = $ghost ? 'btn-ghost' : '';
    $linkClass     = $link ? 'btn-link' : '';
    $activeClass   = $active ? 'btn-active' : '';
    $disabledClass = $disabled ? 'btn-disabled' : '';
    $wideClass     = $wide ? 'btn-wide' : '';
    $blockClass    = $block ? 'btn-block' : '';
    $squareClass   = $square ? 'btn-square' : '';
    $circleClass   = $circle ? 'btn-circle' : '';

    $class = trim("$base $variantClasses $sizeClasses $softClass $outlineClass $dashedClass $ghostClass $linkClass $activeClass $disabledClass $wideClass $blockClass $squareClass $circleClass");

    // Capture slot('icon') if defined
    $icon = $icon ?? ($component->slots['icon'] ?? null);
@endphp

@isset($icon)
    @php $hasIcon = true; @endphp
@else
    @php $hasIcon = false; @endphp
@endisset

@if ($attributes->has('href'))
    <a {{ $attributes->merge(['class' => $class]) }}>
        @isset($icon)
            <span class="mr-2" wire:loading.remove>
                {{ $icon }}
            </span>
        @endisset

        <span class="mr-2" wire:loading>
            <span class="loading loading-spinner"></span>
        </span>

        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $class]) }}>
        @isset($icon)
            <span class="mr-2" wire:loading.remove>
                {{ $icon }}
            </span>
        @endisset

        <span class="mr-2" wire:loading>
            <span class="loading loading-spinner"></span>
        </span>

        {{ $slot }}
    </button>
@endif