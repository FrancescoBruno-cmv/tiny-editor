<div>
    <script src="https://cdn.tiny.cloud/1/{{ $apiKey }}/tinymce/8/tinymce.min.js" referrerpolicy="origin"></script>
    
    <div wire:ignore>
        <textarea id="tiny-editor-{{ $id }}"></textarea>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            tinymce.init({
                selector: '#tiny-editor-{{ $id }}',
                setup: function(editor) {
                    editor.on('init', function() {
                        editor.on('change keyup', function() {
                            Livewire.find('{{ $id }}').call('updateValue', editor.getContent());
                        });
                    });
                }
            });
        });
    </script>
</div>