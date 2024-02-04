<div>
    <div id="wrapper-{{ $id }}">

        @if($display)

        <x-ui.alert.default $display />
        <div id="{{ $id }}" tabindex="-1"
            class="animate__animated animate__fadeInUp animate__delay-4s fixed bottom-5 right-5 z-50 mx-auto max-w-xl items-start justify-between gap-8 rounded-lg border border-b border-gray-200 bg-gray-50 bg-contain bg-center bg-no-repeat px-4 py-3 dark:border-secondary-800 dark:bg-secondary-950 sm:items-center lg:py-4">
            <span class="flex items-center gap-2 text-sm font-light">
                {{ $message }} {{ $style }}
                <x-ui.button class="px-3 py-2 text-xs" wire:click="close">Accept</x-ui.button>
            </span>
        </div>
        @endif

    </div>
</div>
