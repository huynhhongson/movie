<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/movie_page.css" />
    <title>Home</title>
  </head>

  <body>
    <header class="main-header">
      <nav class="main-nav">
        <ion-icon class="logo" name="film-outline"></ion-icon>
        <a href="#" class="main-nav-el">
          <ion-icon class="nav-logo" name="home"></ion-icon>
          <span>Home</span>
        </a>
        <a href="#" class="main-nav-el">
          <ion-icon class="nav-logo" name="flame"></ion-icon>
          <span>Popular</span>
        </a>
        <a href="#" class="main-nav-el">
          <ion-icon class="nav-logo" name="star"></ion-icon>
          <span>My List</span>
        </a>
        <div class="search-bar">
          <input type="text" class="search-bar-input" placeholder="Search" />
          <button class="search-bar-submit">
            <ion-icon class="nav-logo" name="search"></ion-icon>
          </button>
        </div>
      </nav>

      <a href="#" class="main-nav-el"><ion-icon class="avatar" name="person-circle-outline"></ion-icon
      ></a>
    </header>

    <body>
      <main>
        <?php
        require_once('php/connection.php');
        $sql = "SELECT * from movie limit 1";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        echo "<section class='featured-movie-section'>
        <div class='featured-content'>
          <h2 class='heading-secondary featured-title'>$row[name_movie]</h2>
          <p class='description featured-description'>
            $row[movie_overview]
          </p>
          <button class='btn btn-play center-vertical'>
            <ion-icon name='caret-forward-outline'></ion-icon
            ><span>Play</span>
          </button>
        </div>
        <video class='featured-video' autoplay loop playsinline>
          <source src='https://youtu.be/CMOMeBjSRaI?list=RDCMOMeBjSRaI' type='video/mp4' />
        </video>
      </section>";
        ?>
    
        <!-- ON HOLD -->
        <section class="movies-section">
          <div class="container movies-carousel">
            <h3 class="movies-heading">For You</h3>
            <div class="grid movies-row">
              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <button class="carousel-btn movies-left-btn center-vertical">
                <ion-icon name="chevron-back-outline"></ion-icon>
              </button>
              <button class="carousel-btn movies-right-btn center-vertical">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </button>
              <div class="carousel-pagination">
                <button class="carousel-page carousel-active"></button>
                <button class="carousel-page"></button>
                <button class="carousel-page"></button>
              </div>
            </div>
          </div>

          <div class="container movies-carousel">
            <h3 class="movies-heading">Action</h3>
            <div class="grid movies-row">
              <!-- <div class="grid movies-container"> -->
              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <button class="carousel-btn movies-left-btn center-vertical">
                <ion-icon name="chevron-back-outline"></ion-icon>
              </button>
              <button class="carousel-btn movies-right-btn center-vertical">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </button>
              <div class="carousel-pagination">
                <button class="carousel-page carousel-active"></button>
                <button class="carousel-page"></button>
                <button class="carousel-page"></button>
              </div>
            </div>
          </div>

          <div class="container movies-carousel">
            <h3 class="movies-heading">Genre</h3>
            <div class="grid movies-row">
              <!-- <div class="grid movies-container"> -->
              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <div class="movie-card">
                <div class="card-front">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                </div>
                <div class="card-back">
                  <img
                    class="thumbnail"
                    src="images/gallery-img-1.jpg"
                    alt="movie thumbnail"
                  />
                  <div class="card-content">
                    <h5 class="movie-title">Irish Man</h5>
                    <p class="movie-length">1h 0m</p>
                    <div class="movie-buttons">
                      <a href="#"
                        ><ion-icon name="play-circle-outline"></ion-icon
                      ></a>
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>

              <button class="carousel-btn movies-left-btn center-vertical">
                <ion-icon name="chevron-back-outline"></ion-icon>
              </button>
              <button class="carousel-btn movies-right-btn center-vertical">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </button>
              <div class="carousel-pagination">
                <button class="carousel-page carousel-active"></button>
                <button class="carousel-page"></button>
                <button class="carousel-page"></button>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer class="footer">
        <div class="container grid grid--footer">
          <ul class="media-col">
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-youtube"></ion-icon
              ></a>
            </li>
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-facebook"></ion-icon
              ></a>
            </li>
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-twitter"></ion-icon
              ></a>
            </li>
          </ul>

          <nav class="nav-col">
            <p class="footer-heading">Account</p>
            <ul class="footer-nav flex-column">
              <li><a class="footer-link" href="#">Create Account</a></li>
              <li><a class="footer-link" href="#">Sign in</a></li>
              <li><a class="footer-link" href="#">iOS app</a></li>
              <li><a class="footer-link" href="#">Android app</a></li>
            </ul>
          </nav>

          <nav class="nav-col">
            <p class="footer-heading">Company</p>
            <ul class="footer-nav flex-column">
              <li><a class="footer-link" href="#">About Us</a></li>
              <li><a class="footer-link" href="#">Contact</a></li>
              <li><a class="footer-link" href="#">Partners</a></li>
              <li><a class="footer-link" href="#">Careers</a></li>
            </ul>
          </nav>

          <nav class="nav-col">
            <p class="footer-heading">Help center</p>
            <ul class="footer-nav flex-column">
              <li><a class="footer-link" href="#">Term of Use</a></li>
              <li><a class="footer-link" href="#">Plans & Pricing</a></li>
              <li><a class="footer-link" href="#">Privacy & terms</a></li>
            </ul>
          </nav>
        </div>
      </footer>
    </body>
    <script src="js/main.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
