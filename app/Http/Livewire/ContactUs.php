<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactUs extends Component
{

    public $user;
    public $email;
    public $content;

    public function submit()
    {
        $this->validate([
            'content' => 'required',
            'email' => 'required|email',
            'user' => 'required|max:255'
        ]);
        \App\Models\ContactUs::query()->create(
            [
                'user' => $this->user,
                'email' => $this->email,
                'content' => $this->content
            ]
        );
        $this->reset('content');
        session()->flash('message', 'Your message Submitted successfully 😄');
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
