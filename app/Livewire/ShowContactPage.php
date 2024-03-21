<?php

namespace App\Livewire;

use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShowContactPage extends Component
{
    public $fname ='';
    public $lname ='';
    public $email ='';
    public $tel ='';
    public $subject ='';
    public $message ='';
    
    protected $rules =[
        'fname' => 'required',
        'email' => 'email | required',
        'tel' => 'min:10 | max:10 | required',
        'subject' => 'min:5| required',
    ];
    public function submit(){
        $this->validate();

        $mailData =[
            'subject' => $this->subject,
            'fname' => $this->fname,
            'lname' => $this->lname,
            'email' => $this->email,
            'message' => $this->message,
        ];

        Mail::to('admin@admin.com')->send(new ContactUs($mailData));

        $this->redirect('/contact-us');
        
        session()->flash('sucess','Thanks for contacting us');
    }
    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
