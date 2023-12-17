<?php

namespace App\View\Components;
use Illuminate\View\Component;

class ComentComponent extends Component
{
   public string $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $text="text")
    {
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.coment-component', ['text'=>$this->text]);
    }
}
