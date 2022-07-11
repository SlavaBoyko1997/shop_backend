@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати товар</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Головна</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{route('product.update',$product->id)}} " method="post">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Товар" value="{{$product->title}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Опис" value="{{$product->description}}">
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Контент">{{$product->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="Ціна" value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="old_price" class="form-control" placeholder="Стара ціна" value="{{$product->old_price}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="count" class="form-control" placeholder="Кількість на складі" value="{{$product->count}}">
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Вибнріть фото</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <select name="category_id" class="form-control select2" style="width: 100%;">
                            <option selected="selected" disabled>Виберіть категорію</option>
                            @foreach($categories as $category)
                                <option {{$product->category->title == $category->title ? 'selected':''}} value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Виберіть тег" style="width: 100%;">--}}
{{--                            @foreach($tags as $tag)--}}
{{--                                <option  value="{{$tag->id}}">{{$tag->title}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Виберіть колір" style="width: 100%;">--}}
{{--                            @foreach($colors as $color)--}}
{{--                                <option value="{{$color->id}}">{{$color->title}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Зберегти">
                    </div>
                </form>


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
