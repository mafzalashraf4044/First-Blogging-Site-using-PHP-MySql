<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form action="submitPost.php" method="POST">



        <br>
        <label for="html">html: </label>
        <input type="radio" name="category" value="html" id="html">
        
        <label for="css">css: </label>
        <input type="radio" name="category" value="css" id="css">
        
        <label for="bootstrap">bootstrap: </label>
        <input type="radio" name="category" value="bootstrap" id="bootstrap">
        
        <label for="javascript">javascript: </label>
        <input type="radio" name="category" value="javascript" id="javascript">
        
        <label for="jquery">jquery: </label>
        <input type="radio" name="category" value="jquery" id="jquery">
        
        <label for="php">php: </label>
        <input type="radio" name="category" value="php" id="php">
        
        <label for="mysql">mysql: </label>
        <input type="radio" name="category" value="mysql" id="mysql">

        <br> <br>


        <label for="title">Title: </label>
        <input type="text" name="title" id="title">
        <br>
        <label for="dateTime">Date: </label>
        <input type="datetime-local" name="dateTime" id="dateTime">

        <br>
        <label for="user">User: </label>
        <input type="text" name="user" id="user">

        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>

        <br>
        <label for="likes">Likes: </label>
        <input type="number" name="likes" id="likes">

        <br>
        <label for="totalComments">Comments: </label>
        <input type="number" name="totalComments" id="totalComments">

        <br>
        <input type="submit" id="submit" name="submitPost" value="Submit">
          
    </form>

</body>
</html>