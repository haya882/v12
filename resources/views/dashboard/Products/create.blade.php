<x-dashboard>
    <h1 style= "top: 10%; left: 17%; position: absolute;">Add New Categories </h1>
    <a class="back-button" href="{{ route('admin.categories.index') }} ">
        {{-- <button > --}}
        <i class="fas fa-long-arrow-left"></i>
        <span>All Category</span>
    </a>

    <section class="addProduct">
        <div class="spacial-content">

        </div>
        <div class="container">
            <div class="product-group">
                <form action="{{ route('admin.categories.store') }}"method="POST"  enctype="multipart/form-data" class="form grid">
                    @csrf
                    <div class="form-row">
                        <div class="form-item">
                            <label > Name</label>
                            <input type="text" name="name"
                                class="form-control form-input @error('name')
                            is-invalid @enderror"  placeholder="Name"
                                value="{{ old('name') }}" />
                            @error('name')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror

                        </div>

                    </div>



                    <div class="form-row">
                        <div class="form-item">
                            <label >Image</label>
                            <input type="file" onchange="showImg(event)" name="Image" class="form-input @error('image')is-invalid @enderror" />
                           @error('image')
                           <small class="invalid-feedback">{{ $message }}</small>
                       @enderror
                       <img width="80"id="preview" src="" alt="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-item">
                            <label>Description</label>
                            <textarea name="description" class="form-input @error('description')
                            is-invalid @enderror"
                                placeholder="Description" cols="30" rows="5">{{ old('description') }}</textarea>

                            @error('description')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror

                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-item add ">
                            <button type="submit" class="add ">➕ Add</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </section>
    <!-- ------------End of Profile-------------------->



@section('js')
<script>
    function showImg(e){
        console.log(e.target.files);

    }
</script>
@endsection

</x-dashboard>
