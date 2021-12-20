<?php

namespace App\Http\Livewire\Queue;

use Livewire\Component;

class QueueItem extends Component
{
    public $name;
    public $status;
    public $datetime;

    public function render()
    {
        return view('livewire.queue.queue-item');
    }
}
