<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class Search extends Component
{
    public $sortField = 'name'; // default sorting field
    public $sortAsc = true; // default sort direction
    public $searchTerm;
    public $users;

    protected $listeners = ['delete', 'triggerRefresh' => '$refresh'];


    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function delete($Zathetka)
    {
        echo '111';
//        User::find($id)
//            ->delete();
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';

        $student= new Student;
        $this->users = $student->search_student($searchTerm, $this->sortField, $this->sortAsc ? 'asc' : 'desc', $limit = 10);

        return view('livewire.search');
    }
}
