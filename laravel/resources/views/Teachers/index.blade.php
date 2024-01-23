<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        a {
            text-decoration: none;
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            display: inline-block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        td a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            color: #fff;
        }

        td a.edit {
            background-color: #007bff;
        }

        td a.delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>

    <div>
        <h1>Teacher Table</h1>
    </div>

    <div>
        <a href="{{ route('teacher.create') }}"><b>ADD A TEACHER</b></a>
    </div>
    <br>

    <table border="1">
        <tr>
            <th>NAME</th>
            <th>AGE</th>
            <th>ADDRESS</th>
            <th>DEPARTMENT</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>

        @foreach ($Teachers as $teacher)
        <tr>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->age }}</td>
            <td>{{ $teacher->address }}</td>
            <td>{{ $teacher->department }}</td>
            <td><a href="{{ route('teacher.edit', ['id' => $teacher]) }}" class="edit">Edit</a></td>
            <td>
                <form action="{{ route('teacher.delete', ['id' => $teacher]) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</body>
</html>
