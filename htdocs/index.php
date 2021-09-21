<!DOCTYPE html>
<html lang = "en">
<title>Art Store</title>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="A02_styles.css">
  </head>
  <body>
    <header>
      <div id = "topHeaderRow">
        <nav>
          <ul>
            <li><a href = "#">My Account</a></li>
            <li><a href = "#">Wish List</a></li>
            <li><a href = "#">Shopping Cart</a></li>
            <li><a href = "#">Checkout</a></li>
          <ul>
        </nav>
      </div>
      <h1>Art Store</h1>
      <div id = "mainNavigationRow">
        <nav>
          <ul>
            <li><a href = "index.php">Home</a></li>
            <li><a href = "about.php">About us</a></li>
            <li><a href = "#">Art Works</a></li>
            <li><a href = "#">Artists</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <h2>Self Portrait in a Straw Hat</h2>
        By <a href = "#">Louise Elizabeth Lebrun</a> </br>
        <figure>
          <img src = "images/113010.jpg" alt = "Louise Elizabeth Lebrun" width = "288">
            <figcaption>
              LeBrun's Orgininal is recorded in a private </br>
              collection in France.
            </figcaption>
          </figure>
        <p id = "info">
          The painting appeals, after cleaning, to be an autograph replica of a picture, the</br>
          orignal of which was painted in brussels in 1782 in free imitation of Rubens's </br>
          'Chapeau de Paille'. which Lebrun had seen in Antwerp. It was exhibited in Paris</br>
          in 1782 at the Salon de la Correspondance.
        </p>
        <p class = "price" id = "info">
          $700
        </p>
          <a href = "#" id = "buttons">
            <button type = "button">
                <strong>Add to Wish List</strong>
            </button>
          </a>
          <a href = "#" id = "buttons">
            <button type = "button">
                <strong>Add to Shopping Cart</strong>
            </button>
          </a>
        <table id = "info">
          <tr>
            <th colspan = "2"><h3>Product Details</h3></th>
          </tr>
          <tr>
            <td><strong>Date:</strong></td>
            <td>1782</td>
          </tr>
          <tr>
            <td><strong>Medium:</strong></td>
            <td>Oil on canvas</td>
          </tr>
          <tr>
            <td><strong>Dimensions:</strong></td>
            <td>98cm x 71cm</td>
          </tr>
          <tr>
            <td><strong>Home:</strong></td>
            <td><a href = "https://www.nationalgallery.org.uk/">National Gallery, London</a></td>
          </tr>
          <tr>
            <td><strong>Genres:</strong></td>
            <td><a href = "https://www.tate.org.uk/art/art-terms/r/realism">Realism,
              <a href = "https://en.wikipedia.org/wiki/Rococo">Rococo</a></td>
          </tr>
          <tr>
            <td><strong>Subjects:</strong></td>
            <td><a href = "https://www.tate.org.uk/art/artists/a-z">People,</a>
              <a href = "https://en.wikipedia.org/wiki/The_arts">Arts</a></td>
          </tr>
        </table>
        <h3>Similar Products</h3>
        <table id = "similar">
          <tr>
            <th class = "box"><img src = "images/thumbs/116010.jpg" alt = "Artist with thistle" class = "centeredInside">
              <a href = "#"><p class="similarTitle">Arist Holding a Thistle</p></a></th>
            <th class = "box"><img src = "images/thumbs/120010.jpg" alt = "Eleanor of Toledo" class = "centeredInside">
              <a href = "#"><p class="similarTitle">Portrait of Eleanor of Toledo</p></a></th>
            <th class = "box"><img src = "images/thumbs/107010.jpg" alt = "Madame de Dompodour" class = "centeredInside">
              <a href = "#"><p class="similarTitle">Madame de Pompadour</p></a></th>
            <th class = "box"><img src = "images/thumbs/106020.jpg" alt = "Girl with a Pearl Earring" class = "centeredInside">
              <a href = "#"><p class="similarTitle">Girl with a Pearl Earring</p></a></th>
          </tr>
        </table>
    </main>
  </body>
  <footer>
    All images are copyright to their owners. This is just a hypothetical site &copy; 2014 Copyright Art Store
  </footer>
</html>
