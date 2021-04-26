<?php

namespace App\Http\Livewire;

use App\Models\Status;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class StatusFilters extends Component
{
    public $status;
    public $statusCount;

    public function mount()
    {
        $this->statusCount = Status::getCount();
        $this->status = request()->status ?? 'All';

        if (Route::CurrentRouteName() === 'idea.show') {
            $this->status = null;
        }
    }

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;
        $this->emit('queryStringUpdatedStatus', $this->status);

        if ($this->previousRouterName() === 'idea.show') {
            return redirect(route('idea.index', [
                'status' => $this->status
            ]));
        }
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
