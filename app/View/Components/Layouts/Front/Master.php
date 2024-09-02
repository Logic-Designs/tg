<?php

namespace App\View\Components\Layouts\Front;

use App\Models\ContactContent;
use App\Models\Setting;
use Illuminate\View\Component;

class Master extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $setting;
    public $contcat_content;

    public function __construct()
    {
        $this->setting = Setting::first();
        $this->contcat_content = ContactContent::first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.front.master');
    }
}
