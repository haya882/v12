<x-dashboard title="Add New Category">
    {{-- <h1 style="top: 10%; left: 17%; position: absolute;">Edit Categories</h1> --}}

    <a class="back-button" href="{{ route('admin.categories.index') }}">
        <i class="fas fa-long-arrow-left"></i>
        <span>All Category</span>
    </a>
    <section class="addProduct">
        <div class="spacial-content"></div>
        <div class="container">
            <div class="product-group">
                <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data"
                    class="form grid">
                    @csrf

                    <!-- Name Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Name</label>
                            <input type="text" name="name"
                                class="form-control form-input @error('name') is-invalid @enderror" placeholder="Name"
                                value="{{ old('name') }}" />
                            @error('name')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Image Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Image</label>
                            <input type="file" onchange="showImg(event)" name="image"
                                class="form-input @error('image') is-invalid @enderror" />
                            @error('image')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                            <img width="150" height="120" id="preview" src="" alt="Image preview will appear here" style="display: none;" />
                        </div>
                    </div>

                    <!-- Description Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Description</label>
                            <textarea name="description" class="form-input @error('description') is-invalid @enderror" placeholder="Description"
                                cols="30" rows="5">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="form-item add">
                            <button class="add">➕ Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


   @push('scripts')
   <script>
     function showImg(event) {
        var reader = new FileReader();
        var preview = document.getElementById('preview');
        reader.onload = function() {
            preview.src = reader.result;
            preview.style.display = 'block';  
            preview.style.width = '150px';
                preview.style.maxHeight = '120px';
                preview.style.objectFit = 'contain';
        }   

        // If no file selected, reset the preview
        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        } else {
            preview.style.display = 'none';
        }
    }
    </script>
   @endpush
</x-dashboard>
