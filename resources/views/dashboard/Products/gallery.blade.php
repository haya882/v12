<x-dashboard title="Manage Gallery ">
    <h1 style="top: 10%; left: 17%; position: absolute;">Manage Gallery for {{ $product->name }}</h1>

    {{-- Alert --}}
    @include('components.alert')
    <a href="{{ route('admin.products.index') }}" class="back-button">
        <i class="fas fa-arrow-left"></i> All Products
    </a>
    <section class="addProduct" >
        <div class="container">

            {{-- Upload New Gallery Images --}}
            <form action="{{ route('admin.products.gallery.upload', $product->id) }}" method="POST" enctype="multipart/form-data" class="form" style="margin-bottom: 30px;">
                @csrf
            
                <div class="form-row" style="display: flex; align-items: center; gap: 15px;">
                    <label for="gallery">Upload New Images:</label>
            
                    <!-- File Input -->
                    <input type="file" name="gallery[]" id="galleryInput" multiple accept="image/*"
                        class="form-input @error('gallery') is-invalid @enderror"
                        onchange="previewGallery(event)" style="flex: 1;" />
            
                    <!-- Styled Upload Button -->
                   
                    <a class="update" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                        <button type="button"><i class="fas fa-upload"></i> Upload</button>
                    </a>
                </div>
            
                @error('gallery')
                    <div class="alert alert-danger mt-2 p-2">
                        <i class="fas fa-exclamation-circle"></i> {{ $message }}
                    </div>
                @enderror
            
                <!-- Image Previews -->
                <div id="galleryPreview" class="gallery-preview" style="margin-top: 20px;"></div>
            </form>
            
            {{-- Gallery Section --}}
            <h3 style="margin-bottom: 15px;">🖼️ Gallery Images</h3>
            <div class="gallery-grid">
                @forelse ($product->gallery as $img)
                    <div class="gallery-card">
                        <img src="{{ asset('images/' . $img->path) }}" alt="Gallery Image">
                        <form action="{{ route('admin.products.gallery.delete', $img->id) }}" method="POST" onsubmit="return confirm('Delete this image?')">
                            @csrf
                            @method('DELETE')
                            <button class="delete-btn">🗑️ Delete</button>
                        </form>
                    </div>
                @empty
                    <p style="font-style: italic;">No images uploaded yet.</p>
                @endforelse
            </div>

        </div>
    </section>

    @push('styles')
    <style>
        .gallery-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .gallery-card {
            width: 140px;
            text-align: center;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            background: #f9f9f9;
        }

        .gallery-card img {
            width: 120px;
            height: 100px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .delete-btn {
            background-color: #dc3545;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }
        .gallery-preview {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .update button {
    background-color: #0d6efd; /* Bootstrap primary blue */
    color: #fff;
    padding: 8px 16px;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: background-color 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.update button i {
    font-size: 14px;
}

.update button:hover {
    background-color: #0b5ed7;
}
.update button i {
    color: #ffffff;
    font-weight: bold;
}
.addProduct{
    margin-top: 20px;
}

    </style>
    @endpush
    @push('scripts')
<script>
    function previewGallery(event) {
        const previewContainer = document.getElementById('galleryPreview');
        previewContainer.innerHTML = ""; // Clear old previews

        const files = event.target.files;

        if (files) {
            Array.from(files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.style.width = "100px";
                    img.style.height = "80px";
                    img.style.objectFit = "cover";
                    img.style.margin = "5px";
                    img.style.border = "1px solid #ddd";
                    img.style.borderRadius = "5px";
                    previewContainer.appendChild(img);
                }
                reader.readAsDataURL(file);
            });
        }
    }
</script>
@endpush

</x-dashboard>
