<div>
    <form wire:submit.prevent="save" method="post">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" wire:model="title" id="title" class="form-control shadow-none @error('title')  is-invalid @enderror">
            @error('title') <p class="small text-danger">{{ $message }}</p> @enderror
        </div>
        <div class="row">
            <div class="mb-3 col">
                <label for="author">Author</label>
                <input type="text" wire:model="author" id="author" class="form-control shadow-none @error('author')  is-invalid @enderror">
                @error('author') <p class="small text-danger">{{ $message }}</p> @enderror

            </div>
            <div class="mb-3 col">
                <label for="edition">Edition</label>
                <input type="text" wire:model="edition" id="edition" class="form-control shadow-none @error('edition')  is-invalid @enderror">
                @error('edition') <p class="small text-danger">{{ $message }}</p> @enderror

            </div>
        </div>
        <div class="mb-3">
            <label for="language">Language</label>
            <input type="text" wire:model="language" id="language" class="form-control shadow-none @error('language')  is-invalid @enderror">
            @error('language') <p class="small text-danger">{{ $message }}</p> @enderror

        </div>
        <div class="mb-3">
            <label for="price">Price</label>
            <input type="text" wire:model="rent_price" id="rent_price" class="form-control shadow-none @error('rent_price')  is-invalid @enderror">
            @error('rent_price') <p class="small text-danger">{{ $message }}</p> @enderror

        </div>
        <div class="row">
            <div class="mb-3 col">
                <label for="nop">No of pages</label>
                <input type="text" wire:model="no_of_page" id="nop" class="form-control shadow-none @error('nop')  is-invalid @enderror">
                @error('no_of_page') <p class="small text-danger">{{ $message }}</p> @enderror

            </div>
            <div class="mb-3 col">
                <label for="isbn">ISBN</label>
                <input type="text" wire:model="isbn" id="isbn" class="form-control shadow-none @error('isbn')  is-invalid @enderror">
                @error('isbn') <p class="small text-danger">{{ $message }}</p> @enderror

            </div>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-dark float-end shadow-none">
        </div>
    </form>
</div>
