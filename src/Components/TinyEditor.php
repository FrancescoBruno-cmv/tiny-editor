<?php
// src/Components/TinyEditor.php
namespace FrancescoBrunoCmv\TinyEditor\Components;

use Livewire\Component;

class TinyEditor extends Component
{
    public string $value = '';
    public string $apiKey = '';
    public string $model = '';

    public function mount(string $apiKey, string $model = 'content')
    {
        $this->apiKey = $apiKey;
        $this->model = $model;
    }

    public function render()
    {
        return view('tiny-editor::tiny-editor');
    }
}