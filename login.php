<!DOCTYPE html>
<html>
<head>
<form method="post"action="todo.php">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    form {
      width: 300px;
      margin: auto;
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      display: block;
      margin: 10px auto;
      padding: 5px;
      width: 100%;
      max-width: 300px;
      box-sizing: border-box;
    }

    button[type="submit"] {
      display: block;
      margin: 10px auto;
      padding: 5px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #3e8e41;
    }

    .error {
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Login</h1>
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="nim" placeholder="nim" required>
    <button name="login" type="submit"value ="login">Login</button>
  </form>
  <?php if (isset($error)) { ?>
    <div class="error"><?php echo $error; ?></div>
  <?php } ?>
</body>
</html>