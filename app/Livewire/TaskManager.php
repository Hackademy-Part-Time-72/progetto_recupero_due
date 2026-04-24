<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskManager extends Component
{
    public $title = '';

    public function addTask()
    {
        $this->validate([
            'title' => 'required|min:3'
        ]);

        Task::create([
            'title' => $this->title
        ]);

        $this->title = '';
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            <form wire:submit.prevent="addTask">
                <input type="text" wire:model="title" placeholder="Nuovo task">
                <button type="submit">Aggiungi</button>
            </form>

            <ul>
                @foreach (\App\Models\Task::latest()->get() as $task)
                    <li>{{ $task->title }}</li>
                @endforeach
            </ul>
        </div>
        HTML;
    }
}
