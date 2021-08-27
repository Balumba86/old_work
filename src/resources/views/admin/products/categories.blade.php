@foreach($categories as $category_list)
    <option value="{{$category_list->id ?? ""}}"
            @isset($product->id)
            @if($product->category_id == $category_list->id)
            selected
            @endif
        @endisset
    >{!! $delimiter ?? "" !!} {{$category_list->small_title ?? ""}}</option>
    @if(count($category_list->children) > 0)
        @include('admin.products.categories', ['categories' => $category_list->children, 'delimiter' => '--'.$delimiter])
    @endif
@endforeach
