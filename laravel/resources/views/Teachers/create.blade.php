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

    <form action="{{route('teacher.store')}}" method="POST">
    @csrf
    @method('post')
    <div>
        <label>NAME</label>
        <input type="text" name="name" placeholder="Enter your name">
    </div>
    <div>
        <label>AGE</label>
        <input type="text" name="age" placeholder="Enter your age">
    </div>
    <div>
        <label>ADDRESS</label>
        <input type="text" name="address" placeholder="Enter your address">
    </div>
    <div>
        <label>DEPARTMENT</label>
        <input type="text" name="department" placeholder="Enter your department">
    </div>
    <div>
        <input type="submit" value="Add">
    </div>
</form>
    
</body>
</html> 