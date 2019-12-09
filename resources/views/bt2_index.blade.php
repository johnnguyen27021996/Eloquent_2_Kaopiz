<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent BT2</title>
</head>
<body>
    <form action="{{ route('bt2.search') }}" method="post">
        @csrf
        <label for="user_id">User ID</label>
        <input type="text" name="user_id" id="user_id" placeholder="Enter User ID ...">
        <label for="phone_number">Phone Number</label>
        <input type="text" name="number" id="phone_number" placeholder="Enter Phone Number ...">
        <label for="role_name">Role Name</label>
        <input type="text" name="role_name" id="role_name" placeholder="Enter Role Name ...">
        <br><br>
        <button type="submit">Search</button>
    </form>
    <h1>Search Result</h1>
    @if(session()->has('data') && count(session()->get('data')) > 0)
        <table border="1">
            <thead>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach(session()->get('data') as $user)
                <tr>
                    <td> {{ $user['id'] }}</td>
                    <td> {{ $user['firstname'] }}</td>
                    <td> {{ $user['lastname'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <?php echo 'Không có dữ liệu cần tìm kiếm'; ?>
    @endif
</body>
</html>
