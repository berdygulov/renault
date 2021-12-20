<div class="bg-renault-black text-white p-6 border-4 border-transparent">
    <div class="text-5xl mb-4">{{ $name ?? 'Unknown' }}</div>
    <div>
        @if($status == 'process')
            <div class="text-renault-black bg-renault-yellow text-3xl p-2 uppercase">В работе</div>
        @else
            <div class="text-renault-white text-3xl p-2 uppercase">40 минут до начала работ</div>
        @endif
    </div>
    <div class="">{{ $datetime }}</div>
</div>
