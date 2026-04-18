<x-filament-widgets::widget>
    <div class="space-y-4">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Doctor Management
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach($this->getActions() as $action)
                <a
                    href="{{ $action['url'] }}"
                    class="inline-flex items-center justify-center px-4 py-3 bg-{{ $action['color'] }}-600 hover:bg-{{ $action['color'] }}-700 text-white font-medium rounded-lg transition-colors duration-200 w-full"
                >
                    <x-heroicon-o-{{ $action['icon'] }} class="w-5 h-5 mr-2" />
                    {{ $action['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</x-filament-widgets::widget>