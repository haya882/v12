<x-dashboard title="Edit Category {{ $category->name }}">
    {{-- <h1 style="top: 10%; left: 17%; position: absolute;">Edit Category {{ $category->name }}</h1> --}}
    <a class="back-button" href="{{ route('admin.categories.index') }}">
        <i class="fas fa-long-arrow-left"></i>
        <span>All Categories</span>
    </a>

    <section class="addProduct">
        <div class="spacial-content">
            

        </div>
        <div class="container">
            <div class="product-group">
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST"
                    enctype="multipart/form-data" class="form grid">
                    @csrf
                    @method('PUT') <!-- Laravel form method override -->

                    <!-- Name Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Name</label>
                            <input type="text" name="name"
                                class="form-control form-input @error('name') is-invalid @enderror" placeholder="Name"
                                value="{{ old('name', $category->name) }}" />
                            @error('name')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Image Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label for="productImage">Image:</label>
                            <input type="file" id="productImage" name="image" value="{{ $category->image()?->first()?->path }}" class="form-input" 
                                onchange="showImg(event)">
                            @error('image')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror

                            <!-- Current image (will be hidden when selecting new one) -->
                            <img id="currentImage" src="{{ asset('images/' . $category->image()?->first()?->path) }}"
                                alt="Current Image"
                                style="width: 150px; max-height: 120px; object-fit: contain; margin-top: 5px;">

                            <!-- Preview of new image (hidden until selected) -->
                            <img id="preview" src="" alt="Image Preview"
                                style="display: none; width: 150px; max-height: 120px; object-fit: contain; margin-top: 10px;">
                        </div>
                    </div>



                    <!-- Description Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Description</label>
                            <textarea name="description" class="form-input @error('description') is-invalid @enderror" placeholder="Description"
                                cols="30" rows="5">{{ old('description', $category->description) }}</textarea>

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
    @push('scripts')
    <script>
        function showImg(event) {
            const reader = new FileReader();
            const preview = document.getElementById('preview');
            const currentImage = document.getElementById('currentImage');
    
            reader.onload = function () {
                preview.src = reader.result;
                preview.style.display = 'block';
                preview.style.width = '150px';
                preview.style.maxHeight = '120px';
                preview.style.objectFit = 'contain';
    
                // Hide current image
                if (currentImage) {
                    currentImage.style.display = 'none';
                }
            };
    
            if (event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
            } else {
                preview.style.display = 'none';
                if (currentImage) {
                    currentImage.style.display = 'block';
                }
            }
        }
    </script>
    @endpush
    
            </x-dashboard>
