<div>
    <div class="container" style="padding:30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Chỉnh sửa sách
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Toàn bộ sách</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form wire:submit.prevent="updateProduct" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Tên</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Tên" class="form-control input-md" wire:model="name" wire:keyup="generateSlug">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Slug" class="form-control input-md"wire:model="slug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Mô tả ngắn</label>
                                <div class="col-md-4">
                                   <textarea class="form-control" placeholder="Mô tả ngắn" wire:model="short_description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Mô tả</label>
                                <div class="col-md-4">
                                   <textarea class="form-control" placeholder="Mô tả" wire:model="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Giá</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Giá" class="form-control input-md" wire:model="regular_price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Giá khuyến mãi</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Giá khuyến mãi" class="form-control input-md" wire:model="sale_price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Tình trạng</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="stock_status">
                                        <option value="instock">Còn hàng</option>
                                        <option value="outofstock">Hết hàng</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Nổi bật</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="featured">
                                        <option value="0">Không</option>
                                        <option value="1">Có</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Số lượng</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Số lượng" class="form-control input-md" wire:model="quantity">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Ảnh</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newimage">
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120">
                                    @else
                                        <img src="{{asset('assets/images/products/'.$image)}}" width="120">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Danh mục</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="category_id">
                                        <option value="">Chọn danh mục</option>
                                        @foreach($categories as $category)
                                          <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary ">Cập nhật</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

