
<x-dashboard>

    <h1 style="top: 10%; left: 17%; position: absolute;">Add New Products</h1>
    <a class="back-button" href="{{ route('admin.categories.index') }}">
        <i class="fas fa-long-arrow-left"></i>
        <span>All Category</span>
    </a>

    {{-- <!-- Success Message -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" style="margin: 20px auto; max-width: 800px;">
        <i class="fas fa-check-circle"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif --}}

    <!-- Error Message -->
    {{-- @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" style="margin: 20px auto; max-width: 800px;">
        <i class="fas fa-exclamation-triangle"></i> <strong>Error!</strong> Please fix the following issues:
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
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="form grid">
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
                            @php
                                $url = '';
                                if($product->image){
                                    $url = $product->img_path;
                                }
                            @endphp
                            <img width="80" id="preview" src="{{ $url }}" alt="">

                        </div>


                            <div class="form-item">
                                <label>Gallery</label>
                                <input type="file" name="gallery[]"multiple
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
                                <img width="80" id="preview" src="{{ $url }}" alt="">

                            </div>
                        </div>

                  <div class="form-row ">
                    <div class="form-item ">
                        <label>Gender</label>
                        <div class="gender">
                            <input   type="radio" id="women" name="gender" value="women">
                          <label for="women">Women</label>
                        </div>
                        <div class="gender">
                            <input   type="radio" id="men" name="gender" value="men">
                          <label for="men">Men</label>

                        </div>
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
                    <div class="form-col" style="display: flex; align-items: center; gap: 5%;">

                        <div class="form-row">
                            <div class="form-item">
                                <div class="input-wrapper" style="position: relative; width: 360px;">
                                    <label>Price</label>
                                    <input type="number"  name="price"
                                           class="form-input @error('price') is-invalid @enderror" />
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
                                    <input type="number"  name="quantity"
                                           class="form-input @error('quantity') is-invalid @enderror" />
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
                                                <select  name="category_id"
                                                       class="form-input @error('category_id') is-invalid @enderror" >
                                                       @foreach ($categories as $category)
                                                       <option value="{{ $category->id }}"></option>
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
                        <div class="form-row">
                            <div class="form-item add">
                                <button type="submit" class="add">➕ Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </section>


  </x-dashboard>
