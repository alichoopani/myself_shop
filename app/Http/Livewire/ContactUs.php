<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactUs extends Component
{

    public $createContact;
    public $email;
    public $name;

    public function submit()
    {
        $this->validate([
            'createContact' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email'
        ]);
        \App\Models\ContactUs::create(
            [
                'name' => $this->name,
                'email' => $this->email,
                'content' => $this->createContact
            ]
        );
        dd($this->email);

        $this->reset('createContact');
        session()->flash('message', 'Your message Submitted successfully 😄');
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
