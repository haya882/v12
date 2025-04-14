<x-dashboard>
    <h1 style="top: 10%; left: 17%; position: absolute;">Add New Categories</h1>
    <a class="back-button" href="{{ route('admin.categories.index') }}">
        <i class="fas fa-long-arrow-left"></i>
        <span>All Category</span>
    </a>

    <!-- Global Form Error Alert -->
    {{-- @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" style="margin: 20px auto; max-width: 800px;">
        <strong>Error!</strong> Please fix the following issues:
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif --}}

    <section class="addProduct">
        <div class="spacial-content"></div>
        <div class="container">
            <div class="product-group">
                <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" class="form grid">
                    @csrf

                    <!-- Name Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Name</label>
                            <input type="text" name="name"
                                   class="form-control form-input @error('name') is-invalid @enderror"
                                   placeholder="Name"
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
                            <img width="80" id="preview" src="" alt="">
                        </div>
                    </div>

                    <!-- Description Field -->
                    <div class="form-row">
                        <div class="form-item">
                            <label>Description</label>
                            <textarea name="description"
                                      class="form-input @error('description') is-invalid @enderror"
                                      placeholder="Description" cols="30" rows="5">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="alert alert-danger mt-2 p-2">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-item add">
                            <button class="add">➕ Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    {{-- @section('js')
    <script>
        function showImg(e) {

            const [file] = e.target.files
            if(file) {
               preview.src = URL.createObjectURL(file);
            }
        }
    </script>
    @endsection --}}
</x-dashboard>
