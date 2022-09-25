<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class MyEditor extends Component
{
    public $title;
    public $content;

    public function mount()
    {
        // $article = Article::find(2);
        // $this->title = $article->title;
        // $this->content = $article->content;
    }
    public function render()
    {
        return view('livewire.my-editor', [
            'articles' => Article::orderBy('id', 'desc')->get()
        ]);
    }

    public function articleStore()
    {
        $data = [
            'title' => $this->title,
            'content' => $this->content
        ];

        $store = Article::create($data);
        if ($store) {
            $this->title = NULL;
            $this->dispatchBrowserEvent('articleStore');
        }
    }
}
