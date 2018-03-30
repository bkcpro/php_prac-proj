//delete line: ctrl+shift+k

<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Testing simple php website</title>


    <style>

      body{
        background: #1b1b1b;
      }

      .container{
        margin: 0 auto;
        max-width: 1200px;
      }

      header{
        margin: 100px 0 0;
        background: #000;
        color: white;
        text-align: center;
      }

      section{
        background: #fff;
        min-height: 600px;
      }

      header a{
        color: white;
        padding: 20px;
        display: inline-block;
      }
    </style>

  </head>

  <body>
    <div class = "container">
      <header>
        <nav>
          <a href="/simple_site"> Home </a>
          <a href="/simple_site/about.php"> About </a>
          <a href="/simple_site/projects.php"> Projects </a>
          <a href="/simple_site/contact.php"> Contacts </a>
        </nav>
      </header>

      <section>

        <h1> Projects </h1>
      </section>
    </div>
  </body>

</html>
