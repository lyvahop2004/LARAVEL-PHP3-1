<html>

<head>danh sach user</head>

<body>
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="query" placeholder="Nhập từ khóa tìm kiếm">
        <button type="submit">Tìm kiếm</button>
        @csrf
    </form>

    @foreach ($product as $product)
        <p>Name:{{ $product->name }}</p>
        <img src="{{ $product->image }}"></img>
        <p>Price:{{ $product->price }}</p>
        <button>xem chi tiết</button>
        <hr />
    @endforeach
</body>

</html>
