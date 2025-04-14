<x-dashboard>
    <h1 style="top: 10%; left: 17%; position: absolute;">Edit Categories</h1>
    <a class="back-button" href="{{ route('admin.categories.index') }}">
        <i class="fas fa-long-arrow-left"></i>
        <span>Edit Category</span>
    </a>

    <section class="addProduct">
        <div class="spacial-content">
            >

        </div>
        <div class="container">
            <div class="product-group">
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="form grid">
                    @csrf
                    @method('PUT') <!-- Laravel form method override -->

                    <!-- Name Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Name</label>
                            <input type="text" name="name"
                                class="form-control form-input @error('name') is-invalid @enderror"
                                placeholder="Name" value="{{ old('name', $category->name) }}" />
                            @error('name')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Image Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label for="productImage">Image:</label>
                            <input type="file" id="productImage" name="image" class="form-input">
                            @error('image')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                            <img src="{{ asset('images/'.$category->image()?->first()?->path) }}" alt="" style="
    width: 100px;
    height: 100px;
">
                        </div>
                    </div>


                    <!-- Description Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Description</label>
                            <textarea name="description" class="form-input @error('description') is-invalid @enderror"
                                placeholder="Description" cols="30" rows="5">{{ old('description', $category->description) }}</textarea>

                            @error('description')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Update Button -->
                    <div class="form-row">
                        <div class="form-item add">
                            <button type="submit" class="add">Update</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
</x-dashboard>