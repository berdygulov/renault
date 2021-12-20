<?php

namespace App\Http\Livewire\Queue;

use App\Models\Application;
use Livewire\Component;

class QueueList extends Component
{
    public $applications;

    public function render()
    {
        $this->applications = Application::where('status', '!=', 'done')
            ->get();
        return view('livewire.queue.queue-list');
    }
}
