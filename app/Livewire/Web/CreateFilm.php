<?php

namespace App\Livewire\Web;

use Livewire\Component;

use Livewire\WithFileUploads;

class CreateFilm extends Component
{

    public $title, $director, $summary, $cover;

    use WithFileUploads;

    public function store()
    {

        $this->validate([
            'title' => 'required',
            'director' => 'required',
            'summary' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $coverpath = $this->cover->store('covers', 'public');
        $film = new \App\Models\Film;
        $film->title = $this->title;
        $film->director = $this->director;
        $film->summary = $this->summary;
        $film->cover = $coverpath;
        $film->save();

        session()->flash('message', 'Filme Criado com Sucesso!');   
        return redirect()->route('see', ['id' => $film->id]);
    }

    public function render()
    {
        return view('livewire.web.create-film');
    }
}
