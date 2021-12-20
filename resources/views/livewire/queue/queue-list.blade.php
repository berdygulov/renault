<div class="px-6 py-12 grid grid-cols-3 gap-6">
    @foreach($applications as $application)
        <livewire:queue.queue-item name="{{ $application->client_name }}" status="{{ $application->status }}" datetime="{{ $application->date_time }}"/>
    @endforeach
</div>
