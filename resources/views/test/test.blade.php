<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Add post</h1>
    <form action="add/post" method="post">
        <div class="form-group">
            <input type="text" name="title" placeholder="Ten">
        </div>
        <div class="form-group">
            <input type="password" name="title" placeholder="Mat khau">
        </div>
        <div class="form-group">
            <input type="email" name="title" placeholder="Email">
        </div>
        <div class="form-group">
            <select name="title" id="">
                <option value="1">HN</option>
                <option value="2">Th</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="d">Sex</label>
            <br>
            <input name="gender" type="radio" value="Nam" />Nam
            <input name="gender" type="radio" value="Nữ" />Nữ
            <input name="gender" type="radio" value="Khác" />Khác
        </div>
        <br>
        <div class="form-group">
            <label for="d">Skill</label>
            <br>
            <input type="checkbox" name="skill" value="Đẹp" />Đẹp
            <input type="checkbox" name="skill" value="Xấu" />Xấu
        </div>
        <div class="form-group">
            <input type="date" name="date" id=" ">
        </div>
        <div class="form-group">
            <textarea name="content" id="" cols="10" rows="5">Content</textarea>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="btn-add">
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
