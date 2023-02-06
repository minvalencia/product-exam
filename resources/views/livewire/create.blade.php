<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Name:</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Description:</label>
        <textarea type="text" class="form-control" wire:model="description" placeholder="Enter Description"></textarea>
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Price:</label>
        <textarea type="text" class="form-control" wire:model="price" placeholder="Enter Price"></textarea>
        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
