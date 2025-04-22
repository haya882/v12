<x-dashboard title="Edit Product {{ $product->name }}">
    <a class="back-button" href="{{ route('admin.products.index') }}">
        <i class="fas fa-long-arrow-left"></i>
        <span>All Products</span>
    </a>

    <section class="addProduct">
        <div class="container">
            <div class="product-group">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                      enctype="multipart/form-data" class="form grid">
                    @csrf
                    @method('PUT')

                    <!-- Name -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Name</label>
                            <input type="text" name="name" class="form-input @error('name') is-invalid @enderror"
                                   value="{{ old('name', $product->name) }}">
                            @error('name')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Description</label>
                            <textarea name="description" class="form-input @error('description') is-invalid @enderror"
                                      rows="4">{{ old('description', $product->description) }}</textarea>
                            @error('description')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="form-row">
                        <div class="form-item" style="flex: 1;">
                            <label>Image</label>
                            <input type="file" onchange="showMainImg(event)" name="image"
                                   class="form-input @error('image') is-invalid @enderror">
                            @error('image')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror

                            <img id="previewMainImg" src="{{ $product->img_path }}"
                                 style="width: 120px; max-height: 100px; object-fit: contain; margin-top: 10px;">
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Gender</label>
                            <div class="form-row" style="display: flex; gap: 20px;">
                                @foreach ($genders as $value => $label)
                                    <div class="gender">
                                        <input type="radio" id="gender_{{ $value }}" name="gender"
                                               value="{{ $value }}"
                                               {{ old('gender', $product->gender) === $value ? 'checked' : '' }}>
                                        <label for="gender_{{ $value }}">{{ $label }}</label>
                                    </div>
                                @endforeach
                            </div>
                            @error('gender')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Price, Quantity, Category -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Price</label>
                            <input type="number" name="price" class="form-input @error('price') is-invalid @enderror"
                                   value="{{ old('price', $product->price) }}">
                            @error('price')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-item">
                            <label>Quantity</label>
                            <input type="number" name="quantity"
                                   class="form-input @error('quantity') is-invalid @enderror"
                                   value="{{ old('quantity', $product->quantity) }}">
                            @error('quantity')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-item">
                            <label>Category</label>
                            <select name="category_id" class="form-input @error('category_id') is-invalid @enderror">
                                <option value="">Select</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit -->
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
            function showMainImg(event) {
                const preview = document.getElementById('previewMainImg');
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.onload = e => {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            }
        </script>
    @endpush
</x-dashboard>
