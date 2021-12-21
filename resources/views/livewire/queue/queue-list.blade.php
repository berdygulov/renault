<div class="px-6 py-12 grid grid-cols-3 gap-6" wire:poll.10000ms>
    @foreach($applications as $idx => $application)
        <div class="bg-renault-yellow text-black p-6 border-4 border-transparent">
            <div class="text-5xl mb-4">{{ $idx + 1 }}. {{ $application->client_full_name ?? 'Unknown' }}</div>
            <div class="text-3xl mb-4">Авто: {{ $application->car_brand }} {{ $application->car_model }} ({{ $application->car_production_year }})</div>
            <div class="text-3xl mb-4">VIN: {{ $application->car_vin_number }}</div>
            <div class="text-3xl mb-4">Время назначения: {{ \Carbon\Carbon::make($application->date_time)->isoFormat('D MMM YYYY, HH:mm') }}</div>
            <div>
                @if($application->status == 'process')
                    <div class="text-white bg-renault-black text-3xl p-2 uppercase">В работе</div>
                @endif
            </div>
        </div>
    @endforeach
</div>
