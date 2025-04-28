<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $successMessage = '';

    // Validation rules
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:customers,email',
        'message' => 'required|min:10',
    ];

    // Real-time validation
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function submitForm()
    {
        // Validate all fields
        $this->validate();

        // Create a new customer record
        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        
        // Show success message
        $this->successMessage = 'Thank you for your submission, ' . $this->name . '!';
        
        // Reset form fields but keep the submitted data displayed
        $this->reset(['name', 'email', 'message']);
    }

    public $customers;

    public function mount()
    {
        $this->customers = Customer::all();
    }
    
    public function render()
    {
        return view('livewire.contact-form');
    }
}