<div>
    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

    <!-- Create the editor container -->
    <div wire:ignore>
        <textarea id="{{ $quillId }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
    </div>

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        const quill = new Quill('#{{ $quillId }}', {
            theme: '{{ $theme }}',
            bounds: '#{{ $quillId }}'
        });

        quill.on('text-change', function () {
            let value = document.getElementsByClassName('ql-editor')[0].innerHTML;
            @this.set('value', value)
        })
    </script>
    
    <script>
        addEventListener("trix-blur", function(event) {
            @this.set('value', trixEditor.getAttribute('value'))
        })
    </script>
</div>
