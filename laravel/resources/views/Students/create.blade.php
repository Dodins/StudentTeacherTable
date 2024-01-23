<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
          margin: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
        }
    
        form {
          background-color: #fff;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
        label {
          display: block;
          margin-bottom: 8px;
          font-weight: bold;
        }
    
        input, select {
          width: 100%;
          padding: 8px;
          margin-bottom: 16px;
          box-sizing: border-box;
        }
    
        button {
          background-color: #4caf50;
          color: #fff;
          padding: 10px 15px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          font-size: 16px;
        }
    
        button:hover {
          background-color: #45a049;
        }
      </style>
</head>
<body>
    <form action="{{route('student.register')}}" method="POST">
    @csrf
    @method('post')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your name">
    </div>
    <div>
        <label>Age</label>
        <input type="text" name="age" placeholder="Enter your age">
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address" placeholder="Enter your address">
    </div>
    <div>
        <label>Course</label>
        <input type="text" name="course" placeholder="Enter your course">
    </div>
    <div>
        <label>Subject</label>
        <input type="text" name="subject" placeholder="Enter your subject">
    </div>
    <div>
        <input type="submit" value="Register">
    </div>
</form>
</body>
</html>