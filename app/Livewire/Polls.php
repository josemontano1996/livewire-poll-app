<?php

namespace App\Livewire;

use App\Models\Poll;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Polls extends Component
{

    /**
     * A collection of Poll objects.
     *
     * @var Collection<int, Poll>
     */
    public Collection $polls;

    protected $listeners = [
        'pollCreated' => 'render'
    ];

    public function render()
    {

        $this->polls = Poll::with('options.votes')->latest()->get();

        return view('livewire.polls');
    }
}
