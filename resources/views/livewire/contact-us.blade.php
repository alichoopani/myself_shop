<div>

    <form wire:submit.prevent="submit">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <fieldset>
                    @error('name')<span class="text-red-600">{{$message}}</span> @enderror
                    <input wire:model="name" type="text" placeholder="Your name" >
                </fieldset>
            </div>
            <div class="col-lg-6">
                <fieldset>
                    @error('email')<span class="text-red-600">{{$message}}</span> @enderror
                    <input wire:model="email" type="text" placeholder="Your email" >
                </fieldset>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    @error('createContact')<span class="text-red-600">{{$message}}</span> @enderror
                    <textarea wire:model="createContact" rows="6" placeholder="Your message" ></textarea>
                </fieldset>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    <button type="submit" id="form-submit" class="main-dark-button">
                        <i class="fa fa-paper-plane"></i>
                    </button>
                </fieldset>
            </div>
        </div>
    </form>

</div>
