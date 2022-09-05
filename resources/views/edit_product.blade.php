@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex;justify-content: space-between;align-items: center;">
                    <h5>Add New Product</h5>
                </div>
            <form method="POST" action="/products/{{ $product->id }}" enctype="multipart/form-data">
                {{Method_field('PUT')}}
                <div class="card-body">
                        @csrf
                        <!-- product Name -->
                        <div class="row mb-3">
                            <label for="product_name" class="col-md-4 col-form-label text-md-end">Product Name (*)</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" value="{{ $product->product_name }}" class="form-control" name="product_name" required autocomplete="false" >
                            </div>
                        </div>


                        <!-- product Price -->
                        <div class="row mb-3">
                            <label for="product_price" class="col-md-4 col-form-label text-md-end">Product Price (*)</label>

                            <div class="col-md-6">
                                <input id="product_price" type="text" class="form-control" name="product_price" value="{{ $product->product_price }}" required autocomplete="false" >
                            </div>
                        </div>



                        <!-- product Category -->
                        <div class="row mb-3">
                            <label for="product_category" class="col-md-4 col-form-label text-md-end">Product Category (*)</label>

                            <select class="form-select" style="width: 399px; margin-left: 10px;" name="product_category">
                              <option selected>{{ $product->category->category_name }}</option>
                              @foreach($categories as $item)
                              <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                              @endforeach
                            </select>
                        </div>

                        



                        <!-- product Tag -->
                        <div class="row mb-3">
                            <label for="product_tag" class="col-md-4 col-form-label text-md-end">Product tag (*)</label>

                            <select class="form-select" style="width: 399px; margin-left: 10px;" name="product_tag">
                              <option selected>{{ $product->tag->tag_name }}</option>
                              @foreach($tags as $item)
                              <option value="{{ $item->id }}">{{ $item->tag_name }}</option>
                              @endforeach
                            </select>
                        </div>

                        

                        <!-- publication Status -->
                        <div class="row mb-3">
                            <label for="product_tag" class="col-md-4 col-form-label text-md-end">Publication Status (*)</label>

                            <select class="form-select" style="width: 399px; margin-left: 10px;" name="product_tag">
                              <option selected>
                                  @if($product->publication_status == 1)
                                      Publish
                                      @else
                                      Disable
                                  @endif
                              </option>
                              <option value="1">Publish</option>
                              <option value="0">Disable</option>
                            </select>
                        </div>
                        <!-- product color -->
                        <div class="row mb-3">
                            <label for="product_image" class="col-md-4 col-form-label text-md-end">Product Image</label>
                          <input name="product_image" style="margin-left: 10px;width: 399px;" class="form-control form-control-lg" id="formFileLg" type="file">
                        </div>


                        
                        <!-- product size -->
                        <div class="row mb-3">
                            <label for="product_size" class="col-md-4 col-form-label text-md-end">Product Size</label>

                            <div class="col-md-6">
                                <input id="product_size" value="{{ $product->product_size }}" type="text" class="form-control" name="product_size" required autocomplete="false" >
                            </div>
                        </div>

                        
                        <!-- product size -->
                        <div class="row mb-3">
                            <label for="product_color" class="col-md-4 col-form-label text-md-end">Product Color</label>

                            <div class="col-md-6">
                                <input id="product_color" type="text" class="form-control" name="product_color" value="{{ $product->product_color }}" required autocomplete="false" >
                            </div>
                        </div>



                        <!-- product size -->
                        <div class="row mb-3" >
                              <label for="product_des" class="col-md-4 col-form-label text-md-end"> Description (*)</label>

                        
                          <textarea class="form-control" name="product_des" rows="5" style="width: 399px;">{{ $product->description }}</textarea>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
