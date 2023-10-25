<?php

use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Title('Upgrading')] class extends Component {
}; ?>

<div class="docs">
    <x-anchor title="Upgrading" />

    <p>
        You should keep an eye on Mary's <a href="https://github.com/robsontenorio/mary/releases">releases pages</a> to stay updated.
    </p>

    <x-code no-render language="bash">
        composer require robsontenorio/mary
    </x-code>

    <p>
        As Mary uses <strong>daisyUI</strong> and <strong>Tailwind</strong> you should consider as well upgrade regularly their NPM packages and dependencies.
    </p>

    <x-code no-render language="bash">
        yarn add --D daisyui tailwindcss postcss autoprefixer
    </x-code>

    <x-anchor title="Recent releases" size="text-2xl" class="mt-10 mb-5" />

    <livewire:releases lazy />
</div>
