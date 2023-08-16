<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactUs extends Component
{

    public $name;
    public $email;
    public $content;

    public function submit()
    {
        $this->validate([
            'content' => 'required|max:255',
            'email' => 'required|email',
            'name' => 'required|max:255'
        ]);

        \App\Models\ContactUs::query()->create(
            [
                'name' => $this->name,
                'email' => $this->email,
                'content' => $this->content
            ]
        );

        $this->reset('createContact');
        session()->flash('message', 'Your message Submitted successfully 😄');
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
