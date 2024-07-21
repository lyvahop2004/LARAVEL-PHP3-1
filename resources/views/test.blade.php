<html>

<head>danh sach user</head>

<body>
    @foreach ($users as $user)
        <p>Name:{{ $user->name }}</p>
        <p>Email:{{ $user->email }}</p>
        <hr />
    @endforeach
</body>

</html>
