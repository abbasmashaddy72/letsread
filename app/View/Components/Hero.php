<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->content = $data;
        // dd($data);
        // $this->type = $data['type'];
        // $this->cta = $data['cta'];

        // if ($data['type'] == 'oembed') {
        //     $this->media = $data['oembed'];
        // } else {
        //     $this->media = config('curator.model')::where('id', $data['image'])->first();
        // }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero');
    }
}
