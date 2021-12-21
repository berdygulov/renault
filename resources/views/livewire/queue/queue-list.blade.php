<div class="px-6 py-12 grid grid-cols-3 gap-6" wire:poll.10000ms>
    @foreach($applications as $application)
        <div class="bg-renault-black text-white p-6 border-4 border-transparent">
            <div class="text-5xl mb-4">{{ $application->client_name ?? 'Unknown' }}</div>
            <div>
                @if($application->status == 'process')
                    <div class="text-renault-black bg-renault-yellow text-3xl p-2 uppercase">В работе</div>
                @else
                    <div class="text-renault-white text-3xl p-2 uppercase">40 минут до начала работ</div>
                @endif
            </div>
            <div class="">{{ $application->datetime }}</div>
        </div>
    @endforeach
</div>
