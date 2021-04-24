<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class StatusFilters extends Component
{
    public $status = 'All';

    protected   $queryString = [
        'status'
    ];

    public function mount()
    {
        if (Route::CurrentRouteName() === 'idea.show') {
            $this->status = null;
            $this->queryString = [];
        }
    }

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;

        // I'll fix it later.
        // if ($this->previousRouterName() === 'idea.show') {
            return redirect(route('idea.index', [
                'status' => $this->status
            ]));
        // }
    }

    public function render()
    {
        return view('livewire.status-filters');
    }

    protected function previousRouterName() 
    {
        return app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
    }
}
