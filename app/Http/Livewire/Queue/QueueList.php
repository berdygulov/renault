<?php

namespace App\Http\Livewire\Queue;

use App\Models\Application;
use Livewire\Component;

class QueueList extends Component
{
    public $applications;

    public function mount()
    {
        $this->applications = Application::where('status', '!=', 'done')
            ->get();
    }

    public function render()
    {
        return view('livewire.queue.queue-list');
    }
}
