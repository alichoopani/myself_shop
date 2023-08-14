<?php

namespace App\Http\Livewire;

use App\Models\Bag;
use App\Models\CarAccessory;
use App\Models\Hat;
use App\Models\Like;
use App\Models\PhoneCover;
use App\Models\T_Shirt;
use App\Models\TuningPart;
use App\Models\Tyre;
use App\Models\Wheel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Likes extends Component
{
    public $likes;
    public $item;
    public $itemId;
    public $type;

    public function likes()
    {
        if (Auth::check()) {
            if (isset($this->likes)) {
                $this->likes->delete();
            } else {
                $addLike = new Like();
                $addLike->user_id = Auth::id();
                $this->item->like()->save($addLike);
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

        return view('livewire.likes');
    }
}
