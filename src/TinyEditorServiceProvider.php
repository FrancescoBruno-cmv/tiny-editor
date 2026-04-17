<?php
// src/TinyEditorServiceProvider.php
namespace FrancescoBrunoCmv\TinyEditor;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class TinyEditorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Registra il componente Livewire
        Livewire::component('tiny-editor', Components\TinyEditor::class);

        // Pubblica le views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tiny-editor');
    }
}