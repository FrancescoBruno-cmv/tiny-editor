<?php
// src/Components/TinyEditor.php
namespace FrancescoBrunoCmv\TinyEditor\Components;

use Livewire\Component;

class TinyEditor extends Component
{
    public string $value = '';
    public string $apiKey = '';

    public function mount(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function render()
    {
        return view('tiny-editor::tiny-editor', [
            'apiKey' => $this->apiKey,
            'id' => $this->getId(), // ID univoco del componente Livewire
        ]);
    }
}