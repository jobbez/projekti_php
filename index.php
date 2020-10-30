
<!DOCTYPE html>
<html>
<head>




<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<form id="lomake"  action="database.php" method="POST">
    <h1>Lisää Elokuva</h1>
    <br>
    <input type="text" name="title" placeholder="Elokuvan nimi" required>
    <br>
    <textarea type="text" name="description" placeholder="Kuvaus"></textarea>
    <br>
    <input type="text" name="release_year" minlength="4" maxlength="4" placeholder="Julkaisu Vuosi(xxxx)">
    <br>
  <select name="language_id" id="language_id" required>
    <option value="kieli" disabled>Valitse Kieli</option>
    <option value="1">English</option>
    <option value="2">Italian</option>
    <option value="3">Japanese</option>
    <option value="4">Mandarin</option>
    <option value="5">French</option>
    <option value="6">German</option>
  </select>
    <br>
    <input type="text" name="rental_duration" placeholder="Vuokra-aika(pv)" required>
    <br>
    <input type="text" name="rental_rate" placeholder="Vuokrahinta(€)" required>
    <br>
    <input type="text" name="length" placeholder="Pituus(min)">git fetch --prune
    <br>
    <input type="text" name="replacement_cost" placeholder="Korvaushinta(€)" required>
    <br>
    Ikäraja
  <input type="radio" name="rating" id="rating" value="G" checked="checked"><b>G</b>
  <input type="radio" name="rating" id="rating" value="PG"><b>PG</b>
  <input type="radio" name="rating" id="rating" value="PG-13"><b>PG-13</b>
  <input type="radio" name="rating" id="rating" value="R"><b>R</b>
  <input type="radio" name="rating" id="rating" value="NC-17"><b>NC-17</b>
    <br>
  Special features<br>
  <input type="checkbox" id="Trailers" name="special_features[]" value="Trailers">
  <label for="Trailers"> Trailers</label><br>
  <input type="checkbox" id="Commentaries" name="special_features[]" value="Commentaries">
  <label for="Commentaries"> Commentaries</label><br>
  <input type="checkbox" id="Behind the Scenes" name="special_features[]" value="Behind the Scenes">
  <label for="Behind the Scenes">Behind the Scenes</label><br>
  <input type="checkbox" id="Deleted Scenes" name="special_features[]" value="Deleted Scenes">
  <label for="Deleted Scenes">Deleted Scenes</label>
  <br>

     
  <button type="submit" name="lisää">Lisää</button>
</div>
</form>
</div>
</body>
</html>

