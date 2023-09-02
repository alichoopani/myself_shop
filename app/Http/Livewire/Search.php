<?php

namespace App\Http\Livewire;

use App\Models\Bag;
use Livewire\Component;

class Search extends Component
{

    public $query;

    public function render()
    {
        $products = Bag::query()
            ->join('hats', 'brand', '=', 'hats.brand')
            ->join('cam_shafts', 'brand', '=', 'cam_shafts.brand')
            ->join('car_accessories', 'brand', '=', 'car_accessories.brand')
            ->join('crank_shafts', 'brand', '=', 'crank_shafts.brand')
            ->join('ecus', 'brand', '=', 'ecus.brand')
            ->join('headers', 'brand', '=', 'headers.brand')
            ->join('phone_covers', 'brand', '=', 'phone_covers.brand')
            ->join('pistons', 'brand', '=', 'pistons.brand')
            ->join('tyres', 'brand', '=', 'tyres.brand')
            ->join('t_shirts', 'brand', '=', 't_shirts.brand')
            ->join('valves', 'brand', '=', 'valves.brand')
            ->join('wheels', 'brand', '=', 'wheels.brand');

        return view('livewire.search', ['products' => $products]);
    }
}
