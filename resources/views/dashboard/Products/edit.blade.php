<x-dashboard>
    <h1 style="top: 10%; left: 17%; position: absolute;">Edit products</h1>
    <a class="back-button" href="{{ route('admin.products.index') }}">
        <i class="fas fa-long-arrow-left"></i>
        <span>Edit Product</span>
    </a>

    <section class="addProduct">
        <div class="spacial-content"></div>
        <div class="container">
            <div class="product-group">
                <form action="{{ route('admin.products.update', $product->id) }}"
                    method="POST" enctype="multipart/form-data" class="form grid">
                    @csrf
                    @method('PUT')

                    {{-- Name Field --}}
                    <div class="form-row">
                        <div class="form-item">
                            <label>Name</label>
                            <input type="text" name="name"
                                class="form-control form-input @error('name') is-invalid @enderror"
                                placeholder="Name" value="{{ old('name', $product->name) }}" />
                            @error('name')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Image Field --}}
                    {{-- <div class="form-row">
                        <div class="form-item">
                            <label for="productImage">Image:</label>
                            <input type="file" id="productImage" name="image" class="form-input">
                            @error('image')
                                <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
            </div>
        </div> --}}
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
                @php
                $url = '';
                if($product->image){
                $url = $product->img_path;
                }
                @endphp
                <img width="40" height="40" src="{{ $url }}" alt="" style="
    width: 100px;
    height: 100px;
">

            </div>


            <div class="form-item">
                <label>Gallery</label>
                <input type="file" name="gallery[]" multiple
                    class="form-input @error('gallery') is-invalid @enderror" />
                @error('gallery')
                <div class="alert alert-danger mt-2 p-2">
                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                </div>
                @enderror
                @php
                $url = '';
                if($product->image){
                $url = $product->img_path;
                }
                @endphp
                <img width="40" height="40" src="{{ $url }}" alt="" style="
    width: 100px;
    height: 100px;
">

            </div>
        </div>
        <div class="form-row ">
            <div class="form-item ">
                <label>Gender</label>
                <div class="gender">
                    <input type="radio" id="women" name="gender" value="women" @error('gender') is-invalid @enderror>
                    <label for="women">Women</label>
                </div>
                <div class="gender">
                    <input type="radio" id="men" name="gender" value="men">
                    <label for="men">Men</label>

                </div>
            </div>
        </div>


        {{-- Description Field --}}
        <div class="form-row">
            <div class="form-item">
                <label>Description</label>
                <textarea name="description" class="form-input @error('description') is-invalid @enderror"
                    placeholder="Description" cols="30" rows="5">{{ old('description', $product->description) }}</textarea>

                @error('description')
                <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="form-col" style="display: flex; align-items: center; gap: 5%;">

            <div class="form-row">
                <div class="form-item">
                    <div class="input-wrapper" style="position: relative; width: 360px;">
                        <label>Price</label>
                        <input type="number" name="price"
                            class="form-input @error('price') is-invalid @enderror"
                            value="{{ old('price', $product->price) }}" />
                        @error('price')
                        <div class="alert alert-danger mt-2 p-2">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form-row">
                <div class="form-item">
                    <div class="input-wrapper" style="position: relative; width: 360px;">
                        <label>Quantity</label>
                        <input type="number" name="quantity"
                            class="form-input @error('quantity') is-invalid @enderror"
                            value="{{ old('quantity', $product->quantity) }}" />
                        @error('quantity')
                        <div class="alert alert-danger mt-2 p-2">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-item">
                    <div class="input-wrapper" style="position: relative; width: 360px;">
                        <label>Category</label>
                        <select name="category_id"
                            class="form-input @error('category_id') is-invalid @enderror"
                            value="{{ old('category_id', $product->category_id) }}">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="alert alert-danger mt-2 p-2">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                        @enderror

                    </div>

                </div>
            </div>
        </div>

        {{-- Submit --}}
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