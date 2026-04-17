{{-- resources/views/tiny-editor.blade.php --}}
<div>
    <script src="https://cdn.tiny.cloud/1/{{ $apiKey }}/tinymce/8/tinymce.min.js" referrerpolicy="origin"></script>
    
    <div wire:ignore>
        <textarea id="tiny-editor-{{ $id }}"></textarea>
    </div>

    <script>
        tinymce.init({
            selector: '#tiny-editor-{{ $id }}',
            setup: function(editor) {
                editor.on('change', function() {
                    const component = Livewire.find('{{ $id }}');
                    component.set('value', editor.getContent());
                });
            }
        });
    </script>
</div>