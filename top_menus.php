

<nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primary mb-3">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="collapsingNavbar">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<h2><a class="nav-link" href="books.php">Gestión de Librería <span class="sr-only">CWEB</span></a></h2>
			</li>
			
		</ul>
		<ul class="navbar-nav ml-auto">
			<?php if (!empty($_SESSION) && $_SESSION["userid"]) { ?>
				<li class="nav-item">
					<a class="nav-link"><?php echo ucfirst($_SESSION["name"]); ?></a>
				</li>


				<div class="row mb-3">
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
              <div class="card-block bg-success">
                <div class="rotate">
                  <i class="fa fa-user fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Total de Libros</h6>
                <h1 class="display-1"><a href="../view/books.php"><?php echo $book->getTotalBooks(); ?></a></h1>
              </div>
            </div>
          </div>
          
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-warning">
              <div class="card-block bg-warning">
                <div class="rotate">
                  <i class="fa fa-share fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Libros Devueltos</h6>
                <h1 class="display-1"><a href="../view/books.php"><?php echo $book->getTotalReturnedBooks(); ?></a></h1>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-danger">
              <div class="card-block bg-danger">
                <div class="rotate">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Libros Prestados</h6>
                <h1 class="display-1"><a href="../view/issue_books.php"><?php echo $book->getTotalIssuedBooks(); ?></a></h1>
              </div>
            </div>
          </div>
        </div>

			<?php } else { ?>
			<?php } ?>
		</ul>
	</div>
</nav>