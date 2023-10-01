<!-- app/Views/register.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body style="background-color: black; color: gold; font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <div class="container" style="background-color: black; color: gold; border: 2px solid gold; border-radius: 8px; padding: 20px; margin: 100px auto; max-width: 400px; text-align: center;">
        <h2 style="color: gold;">Register</h2>
        <?php if(isset($validation)): ?>
            <div class="error" style="color: red; font-weight: bold; margin-top: 10px;">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>
        <form action="/register" method="post">
            <label for="username" style="display: block; margin-top: 10px; color: gold;">Username:</label>
            <input type="text" id="username" name="username" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid gold; border-radius: 4px; background-color: black; color: gold;">

            <label for="email" style="display: block; margin-top: 10px; color: gold;">Email:</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid gold; border-radius: 4px; background-color: black; color: gold;">

            <label for="password" style="display: block; margin-top: 10px; color: gold;">Password:</label>
            <input type="password" id="password" name="password" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid gold; border-radius: 4px; background-color: black; color: gold;">

            <button type="submit" style="background-color: gold; color: black; border: none; padding: 10px 20px; margin-top: 10px; border-radius: 4px; cursor: pointer;">Register</button>
        </form>
        <p style="color: gold;">Already have an account? <a href="/login" style="color: gold; text-decoration: none;">Login here</a></p>
    </div>
</body>
</html>
