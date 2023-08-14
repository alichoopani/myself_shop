<?php

namespace App\Http\Livewire;

use App\Models\Bag;
use App\Models\CarAccessory;
use App\Models\Favorite;
use App\Models\Hat;
use App\Models\PhoneCover;
use App\Models\T_Shirt;
use App\Models\TuningPart;
use App\Models\Tyre;
use App\Models\Wheel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use function Laravel\Prompts\select;

class Favorites extends Component
{

    //this will use as a Saved products page;
    public $type;
    public $item;
    public $itemId;
    public $favorite;

    public function favorite()
    {
        if (Auth::check()) {
            if (isset($this->favorite)) {
                $this->favorite->delete();
            } else {
                $addFavorite = new Favorite();
                $addFavorite->user_id = Auth::id();
                $this->item->favorite()->save($addFavorite);
            }
        } else {
            $this->redirect(route('login'));
        }
    }


    public function render()
    {
        if ($this->type == 'car_accessories')
            $this->item = CarAccessory::query()->select('id')->find($this->itemId);
        elseif ($this->type == 'hats')
            $this->item = Hat::query()->select('id')->find($this->itemId);
        elseif ($this->type == 'bags')
            $this->item = Bag::query()->select('id')->find($this->itemId);
        elseif ($this->type == 'phone_covers')
            $this->item = PhoneCover::query()->select('id')->find($this->itemId);
        elseif ($this->type == 'tuning_parts')
            $this->item = TuningPart::query()->select('id')->find($this->itemId);
        elseif ($this->type == 't_shirts')
            $this->item = T_Shirt::query()->select('id')->find($this->itemId);
        elseif ($this->type == 'tyres')
            $this->item = Tyre::query()->select('id')->find($this->itemId);
        elseif ($this->type == 'wheels')
            $this->item = Wheel::query()->select('id')->find($this->itemId);

            return view('livewire.favorites');
    }
}
