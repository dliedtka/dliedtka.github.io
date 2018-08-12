<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projections</title>

    <!-- Bootstrap core CSS -->
    <link href="../scrolling-nav/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../scrolling-nav/css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.html">David Liedtka</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive"></div>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projections">Projections</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
          </ul>
      </div>
    </nav>


    <section id="projections">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Projections</h2>
          </div>
        </div>
      </div>
    </section>


    <section id="about" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About this project</h2>
            <p>
              I began working on this project in a class (Advanced Web and Internet Systems) during my senior
              year at the Naval Academy.  The assignment was simply to build a website that demonstrated
              proficiency in web development, using an API, using databases, and human-computer interaction.
            </p>
            <p>
              Having spent the previous few semesters conducting independent machine learning research and
              being close to finishing my Trident Scholar project at that time, I decided it would be fun
              to design a website combining machine learning with another one of my passions, sports.
            </p>
            <p>
              I train simple machine learning models (linear regression and nearest neighbors regression)
              on data for football players found on <a href="www.pro-football-reference.com">Pro Football
              Reference</a>.  Users can enter their own (or a hypothetical player's) measurables and the
              models will provide projected statistics for that player's "career."
            </p>
            <p>
              Obviously, there is a ton of bias in these models, but the site is just for fun. I trained
              only on a set of players drafted since 2000 into the NFL.  So, for example, there is an
              inherent athleticism variable that the average person lacks and measurables do not always
              attone for.  The API is limited, as it required manual data entry on my part, and I chose
              to focus on functionality (for the sake of my grade) over having enough training data.
            </p>
            <p>
              In the future, as someone who loves sports, I think this could continue to be a fun side
              project for me.  Potential improvements include:
            </p>
            <ul>
              <li>A better/more comprehensive API (I'm sure PFR has a way for me to download a bunch of
                their data instead of having to punch it in by myself, but I need to look into that)</li>
              <li>A more functional "player comparison feature" (allow me to compare my projected age
                27-34 seasons against Donovan McNabb's, for example)</li>
              <li>Adding functionality for more football positions</li>
              <li>Adding functionality for basketball and baseball (with different positions)</li>
              <li>More useful/comprehensive (or maybe just more) categories of statistics</li>
              <li>Re-integrate database support (have the site remember your measurables; database
                functionality was a casualty of transferring this project from my account at the
                Naval Academy to my personal account)</li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"><a href="../index.html" style="color:white;">Return to homepage</a></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="scrolling-nav/vendor/jquery/jquery.min.js"></script>
    <script src="scrolling-nav/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="scrolling-nav/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="scrolling-nav/js/scrolling-nav.js"></script>

  </body>

</html>
