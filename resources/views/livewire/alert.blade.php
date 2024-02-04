@props(['is_dismissible' => null, 'is_active' => null])
<div>
    <div id="wrapper-{{ $id }}">

        @if($display && $is_active)

        @if($style == 'default')
        <div id="{{ $id }}" tabindex="-1"
            class="animate__animated animate__fadeInUp animate__delay-4s fixed bottom-5 right-5 z-50 mx-auto max-w-xl items-start justify-between gap-8 rounded-lg border border-b border-gray-200 bg-gray-50 bg-contain bg-center bg-no-repeat px-4 py-3 dark:border-secondary-800 dark:bg-secondary-950 sm:items-center lg:py-4">
            <span class="flex items-center gap-2 text-sm font-light">
                {!! $message !!}
                @if($is_dismissible)
                <x-ui.button class="px-3 py-2 text-xs" wire:click="close">Accept</x-ui.button>
                @endif
            </span>
        </div>
        @endif

        @if($style == 'bumper')
        {{-- Bumper a banner on Top --}}
        <div id="{{ $id }}" tabindex="-1"
            class="animate__animated animate__fadeInDown animate__delay-4s fixed left-0 right-0 top-0 z-50 mx-auto max-w-xl items-start justify-between gap-8 rounded-lg border border-b border-gray-200 bg-gray-50 bg-contain bg-center bg-no-repeat px-4 py-3 dark:border-secondary-800 dark:bg-secondary-950 sm:items-center lg:py-4">
            <span class="flex items-center gap-2 text-sm font-light">
                {!! $message !!}
                @if ($is_dismissible)
                <x-ui.button class="px-3 py-2 text-xs" wire:click="close">Accept</x-ui.button>
                @endif
            </span>
        </div>
        @endif


        @if($style == 'modal')
        <div id="{{ $id }}" class="fixed inset-0 z-50 overflow-y-auto bg-gray-900 bg-opacity-50">
            <div class="flex min-h-screen items-center justify-center">
                <div class="relative m-4 w-full max-w-lg rounded-lg bg-white p-4 shadow-lg dark:bg-secondary-950">
                    <div class="flex items-start justify-between">
                        <h2 class="text-md">{!! $message !!}</h2>
                    </div>
                    @if($is_dismissible)
                    <div class="mt-4 flex items-center justify-end gap-4">
                        <x-ui.button class="px-3 py-2 text-xs" wire:click="close">Accept</x-ui.button>
                        <x-ui.button class="px-3 py-2 text-xs" wire:click="close">Decline</x-ui.button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif


        @if($style == 'banner')
        {{-- Static simple banner --}}
        <div id="{{ $id }}" tabindex="-1"
            class="left-0 right-0 top-0 z-50 mx-auto items-start justify-between gap-8 rounded-lg border border-b border-gray-200 bg-gray-50 bg-contain bg-center bg-no-repeat px-4 py-3 dark:border-secondary-800 dark:bg-secondary-950 sm:items-center lg:py-4">
            <span class="flex items-center gap-2 text-sm font-light">
                {!! $message !!}
                <x-ui.button class="px-3 py-2 text-xs" wire:click="close">Accept</x-ui.button>
            </span>
        </div>
        @endif


        @endif

    </div>
</div>