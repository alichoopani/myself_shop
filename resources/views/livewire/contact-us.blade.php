<div>

    <form wire:submit.prevent="submit" method="post">
        @csrf
        <div class="row">


            <div class="col-lg-6">
                @error('name')<span class="text-red-600">{{$message}}</span> @enderror
                <input wire:model="name" type="text" placeholder="Your name" required />
            </div>
            {{-- input name Does not work!! --}}

            <div class="col-lg-6">
                @error('email')<span class="text-red-600">{{$message}}</span> @enderror
                <input wire:model="email" type="text" placeholder="Your email" required />
            </div>
            <div class="col-lg-12">
                @error('content')<span class="text-red-600">{{$message}}</span> @enderror
                <textarea wire:model="content" rows="6" placeholder="Your message" required></textarea>
            </div>
            <div class="col-lg-12">
                <button type="submit" id="form-submit" class="main-dark-button">
                    <i class="fa fa-paper-plane"></i>
                </button>
            </div>
        </div>
        @if(session()->has('message'))
            <div class="text-black-900">{{session('message')}}</div>
        @endif
    </form>

</div>
