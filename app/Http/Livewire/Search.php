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

    public $show = false;

    protected $listeners = [
        'show' => 'show'
    ];

    public function show()
    {
        $this->show = true;
    }


    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }



    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';

        $student= new Student;
        $this->users = $student->search_student($searchTerm, $this->sortField, $this->sortAsc ? 'asc' : 'desc', $limit = 10);
//var_dump($this->users);
        return view('livewire.search');
    }
}
