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
            ->join('hats', '*', '=', 'hats.*')
            ->join('cam_shafts', '*', '=', 'cam_shafts.*')
            ->join('car_accessories', '*', '=', 'car_accessories.*')
            ->join('crank_shafts', '*', '=', 'crank_shafts.*')
            ->join('ecus', '*', '=', 'ecus.*')
            ->join('headers', '*', '=', 'headers.*')
            ->join('phone_covers', '*', '=', 'phone_covers.*')
            ->join('pistons', '*', '=', 'pistons.*')
            ->join('tyres', '*', '=', 'tyres.*')
            ->join('t_shirts', '*', '=', 't_shirts.*')
            ->join('valves', '*', '=', 'valves.*')
            ->join('wheels', '*', '=', 'wheels.*')
            ->select([
                'brand',
                'name',
                '',
                '',
                ''
            ]);

        return view('livewire.search', ['products' => $products]);
    }
}
