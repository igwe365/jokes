<form action="editjoke.html.php" method="post">
<input type="hidden" name="id" value="<?php echo $results['id']; ?>"/>
<label for="joketext">Type your joke here:</label>
<textarea id="joketext" name="joketext" rows="20" cols="50"><?php echo $results['joketext'] ?></textarea>
<input type="submit" value="Add">
</form>