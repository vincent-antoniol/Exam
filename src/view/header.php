<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Movies Land</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<header>
    <nav>
        <div class="menu"><a href="?page=home">Home</a></div>
        <div class="menu"><a href="?page=movies">voir mes film</a></div>
        <div class="menu"><a href="?page=newMovies">ajouter un film</a></div>
    </nav>
</header>
<h2>
    <?php echo $this->title;?>
</h2>