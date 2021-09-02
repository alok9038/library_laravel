<div>
    <form wire:submit.prevent="save" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" wire:model="name" id="name" class="form-control shadow-none @error('name')  is-invalid @enderror">
            <p class="small text-danger">@error('name') {{ $message }} @enderror</p>
        </div>
        <div class="row">
            <div class="mb-3 col">
                <label for="email">Email</label>
                <input type="text" wire:model="email" id="email" class="form-control shadow-none @error('email')  is-invalid @enderror">
                <p class="small text-danger">@error('email') {{ $message }} @enderror</p>

            </div>
            <div class="mb-3 col">
                <label for="aadhar">aadhar</label>
                <input type="text" wire:model="aadhaar" id="aadhaar" class="form-control shadow-none @error('aadhaar')  is-invalid @enderror">
                <p class="small text-danger">@error('aadhaar') {{ $message }} @enderror</p>

            </div>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" wire:model="password" id="password" class="form-control shadow-none @error('password')  is-invalid @enderror">
            <p class="small text-danger">@error('password') {{ $message }} @enderror</p>

        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-dark float-end shadow-none">
        </div>
    </form>
</div>
