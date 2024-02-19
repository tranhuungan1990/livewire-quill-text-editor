<?php

namespace App\Livewire;

use Livewire\Component;

class Quill extends Component
{
    public $quill_content;
    public $quillId;
    public $theme;

    public function mount($quill_content = '', $theme = 'snow')
    {
        $this->quill_content = $quill_content;
        $this->quillId       = 'quill-'.uniqid();
    }

    public function updatedQuillContent($quill_content)
    {
        $this->dispatch('quill_value_updated', quill_content: $this->quill_content);
    }

    public function render()
    {
        return view('livewire.quill');
    }
}
