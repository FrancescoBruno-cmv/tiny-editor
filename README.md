# Tiny Editor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/francescobruno-cmv/tiny-editor.svg?style=flat-square)](https://packagist.org/packages/francescobruno-cmv/tiny-editor)
[![Total Downloads](https://img.shields.io/packagist/dt/francescobruno-cmv/tiny-editor.svg?style=flat-square)](https://packagist.org/packages/francescobruno-cmv/tiny-editor)
[![License](https://img.shields.io/packagist/l/francescobruno-cmv/tiny-editor.svg?style=flat-square)](LICENSE.md)

Un **Rich Text Editor** basato su **TinyMCE**, completamente compatibile con **Livewire 3 e 4**.

---

## ✨ Features

- ✅ Integrazione semplice con Livewire
- 🎯 Compatibile con Livewire 3 e 4
- 📝 Editor basato su TinyMCE
- 🔄 Aggiornamento reattivo tramite eventi
- ⚡ Facile da integrare in qualsiasi form

---

## 📦 Installazione

Installa il pacchetto tramite Composer:

```bash
composer require francescobruno-cmv/tiny-editor
```

## ⚙️ Requisiti

- PHP >= 8.1  
- Laravel >= 10  
- Livewire 3 o 4  
- API Key TinyMCE  

---

## 🚀 Utilizzo

### Componente Livewire

```php
<?php

use Livewire\Component;

new class extends Component
{
    public $body;

    protected $listeners = ['editorUpdated' => 'setBody'];

    public function setBody($content)
    {
        $this->body = $content;
    }

    public function create()
    {
        dd($this->body);
    }
};
```

```blade
<div>
    <livewire:tiny-editor api-key="tua-tiny-mce-key" />

    <x-button wire:click="create">
        Salva
    </x-button>
</div>
```

### Configurazione

Inserisci la tua API Key di TinyMCE:

```blade
<livewire:tiny-editor api-key="tua-tiny-mce-key" />
```

👉 Puoi ottenere una API key gratuita su: [TinyMCE](https://www.tiny.cloud/)


## 🤝 Contributi

Le contribuzioni sono benvenute!

1. Fai fork del progetto  
2. Crea un branch (`feature/nome-feature`)  
3. Commit delle modifiche  
4. Push sul branch  
5. Apri una Pull Request  

---

## 📄 Licenza

Questo pacchetto è distribuito sotto licenza MIT.  
Vedi il file `LICENSE.md` per maggiori dettagli.

---

## 👤 Autore

**Francesco Bruno**

---

## ⭐ Supporto

Se il pacchetto ti è utile, lascia una ⭐ su GitHub!
