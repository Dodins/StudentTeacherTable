<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Table</title>
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
        <h1>Student Table</h1>
    </div>

    <div>
        <a href="{{ route('student.create') }}"><b>ADD A TEACHER</b></a>
    </div>
    <br>

    <table border="1">
        <tr>
            <th>NAME</th>
            <th>AGE</th>
            <th>ADDRESS</th>
            <th>COURSE</th>
            <TH>SUBJECT</TH>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>

        @foreach ($Students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->subject }}</td>
            <td><a href="{{ route('student.edit', ['id' => $student]) }}" class="edit">Edit</a></td>
            <td>
                <form action="{{ route('student.delete', ['id' => $student]) }}" method="post">
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
