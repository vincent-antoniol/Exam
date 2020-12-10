<?php

include(__DIR__ . "./header.php");
?>
<div class="movies">
<?php

if($this->moviesList)
{
foreach ($this->moviesList as $movie)
    {?>
    <div class="movies">
        <div class="movies_url"><img src="<?php echo $movie['movies_url']?>" alt=""></div>
        <p class="movies_name"><?php echo $movie['movies_name']?></p>
    </div><?php 
    }
}
else
{
    echo 'Aucun film pour le moment';
}
?>
</div>
<?php
include(__DIR__ . "./footer.php");