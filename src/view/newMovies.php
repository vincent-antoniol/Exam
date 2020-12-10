<?php
include(__DIR__ . "./header.php");
      
/*
Les alertes ne fonctionne pas je n'arrrive pas a les afficher

if (isset($_POST["movies_name"]) && isset($_POST["movies_url"]) && isset($_POST["movies_release"]))
      {
			  echo "votre film a bien été enregistrée";
      }  

*/
 
					?> 
<form action="?page=newMovies" method="post">
  <div class="form-group">
    <label for="title">Movie Title</label>
    <input type="text" name="title" class="form-control" id="title" required>
  </div>
  <div class="form-group">
    <label for="img">Movie Poster</label>
    <input type="text" name="img" class="form-control" id="img" required>
  </div>
  <div class="form-group">
    <label for="year">Movie year</label>
    <input type="number" name="year" class="form-control" id="year" min="1950" max="2035" required>
  </div>
  <button type="submit" class="btn btn-primary" class="alert alert-success" role="alert">Add Movie</button>
</form>

<?php 
include(__DIR__ . "./footer.php"); 
?>