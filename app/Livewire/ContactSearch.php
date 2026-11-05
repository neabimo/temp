<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactSearch extends Component
{
    use WithPagination;

    public $search = '';

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $contacts = Contact::query()
            ->when($this->search, function ($query) {
                return $query->where('name', 'LIKE', "%{$this->search}%")
                    ->orWhere('email', 'LIKE', "%{$this->search}%")
                    ->orWhere('phone', 'LIKE', "%{$this->search}%")
                    ->orWhere('notes', 'LIKE', "%{$this->search}%");
            })
            ->latest()
            ->paginate(10);

        return view('livewire.contact-search', [
            'contacts' => $contacts
        ]);
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->resetPage();
    }
}