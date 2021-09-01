<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class AddBook extends Component
{
    public $title, $author, $isbn, $edition, $rent_price, $no_of_page, $language;

    protected $rules = [
        'title' => 'required',
        'author' => 'required',
        'isbn' => 'required',
        'language' => 'required',
        'edition' => 'required',
        'no_of_page' => 'required',
        'rent_price' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){
        $data = $this->validate();

        Book::create($data);

        $this->title =  $this->author = $this->isbn = $this->edition = $this->rent_price = $this->no_of_page = $this->language = "";
    }

    public function render()
    {
        return view('livewire.add-book');
    }
}
