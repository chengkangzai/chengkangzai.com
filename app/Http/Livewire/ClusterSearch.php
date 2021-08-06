<?php

namespace App\Http\Livewire;

use App\Models\Covid\Cluster;
use DB;
use Livewire\Component;
use Livewire\WithPagination;

class ClusterSearch extends Component
{
    use WithPagination;

    public $search = '';
    public $sort = '';
    public $sortDirection = 'asc';
    public $updated_at;

    public $categoryFilter;
    public $state;

    public function mount()
    {
        $this->updated_at = cache()->remember('cluster', 60, fn() => Cluster::orderByDesc('id')->first())->updated_at;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function sort($filterBy)
    {
        /**
         * Set Ascending or Descending
         */

        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }


        if ($filterBy == 'positiveRate') {
            return $this->sort = 'cases_total / tests';
        }

        return $this->sort = $filterBy;
    }

    public function render()
    {
        return view('livewire.cluster-search', [
            'clusters' => Cluster::query()
                ->when($this->search, function ($query) {
                    return $query
                        ->orWhere('state', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('cluster', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('district', 'LIKE', '%' . $this->search . '%');
                })
                ->when($this->sort, function ($query) {
                    return $query->orderBy(DB::raw($this->sort), $this->sortDirection);
                })
                ->when($this->categoryFilter, function ($query) {
                    return $query->where('category', $this->categoryFilter);
                })
                ->when($this->state, function ($query) {
                    return $query->where('state', $this->state);
                })
                ->where('status', '=', 'active')
                ->paginate()
        ]);
    }

}
