

<!DOCTYPE html>
<html>
<head>
    <title>Query Page</title>
    <link rel="stylesheet" href="query.css">
</head>
<body>
    <div class="container">
        <h2>Reply query</h2>
        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">reply</label>
                <input type="text" id="message" name="message" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Reply</button>
            </div>
        </form>
    </div>
</body>
</html>
