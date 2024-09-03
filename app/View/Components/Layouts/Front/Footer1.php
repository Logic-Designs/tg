<?php

namespace App\View\Components\Layouts\Front;

use App\Models\ContactContent;
use Illuminate\View\Component;

class Footer1 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $contact_content;

    public function __construct(public $setting)
    {
        $this->contact_content = ContactContent::first();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.front.footer1');
    }
}
