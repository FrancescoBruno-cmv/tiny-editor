{{-- resources/views/tiny-editor.blade.php --}}
<div>
    <script src="https://cdn.tiny.cloud/1/{{ $apiKey }}/tinymce/8/tinymce.min.js" referrerpolicy="origin"></script>
    
    <div wire:ignore>
        <textarea id="tiny-editor-{{ $this->getId() }}"></textarea>
    </div>

    <script>
        tinymce.init({
            selector: '#tiny-editor-{{ $this->getId() }}',
            setup: function(editor) {
                editor.on('change', function() {
                    @this.set('value', editor.getContent());
                    $wire.dispatch('editor-updated', { value: editor.getContent() });
                });
            }
        });
    </script>
</div>