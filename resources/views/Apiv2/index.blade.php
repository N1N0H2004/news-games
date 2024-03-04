<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Api v2') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                @if (isset($games))
                    @foreach ($games as $game)
                        <div style='padding-top: 30px; display: flex; padding-left: 100px;'>
                            <div style='background-color: #6B7280; border-radius: 0.75rem; width: 680px; height: 300px; border-color: #000000; border-width: 4px; display: flex;'>
                                <div style='flex: 2; display: flex; flex-direction: column; justify-content: center; align-items: center; padding-left: 10px; padding-right: 6px;'>
                                    <strong style='font-size: 36px;'>{{ $game['naam'] }}</strong>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    Kon geen game data ophalen.
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
