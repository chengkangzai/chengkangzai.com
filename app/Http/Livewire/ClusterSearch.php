<?php

namespace App\Http\Livewire;

use App\Models\Covid\Cluster;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use SEO;

class ClusterSearch extends Component
{
    use WithPagination;

    public string $search = '';
    public string $sort = '';
    public string $sortDirection = 'asc';
    public string $updated_at;
    /**
     * For Searching purpose
     */
    public $categoryFilter;
    public $state;

    public function mount()
    {
        SEO::setTitle(__('COVID Dashboard') . ' - ' . __('Clusters'));
        SEO::setDescription(__('A page that help to search or query the Covid-19 cluster in Malaysia'));
        $this->updated_at = cache()->remember('cluster', 60, fn() => Cluster::orderByDesc('id')->first())->updated_at;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function sort($filterBy): string
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

    public function render(): Factory|View|Application
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
