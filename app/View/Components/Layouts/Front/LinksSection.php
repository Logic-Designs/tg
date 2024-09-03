<?php

namespace App\View\Components\Layouts\Front;

use Illuminate\View\Component;

class LinksSection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $setting, public $contact_content, public $logo)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.front.links-section');
    }
}
