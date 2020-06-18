<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Page1</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">E-Boutique ENIG</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="">Home</a></li>
					<li><a href='#'>Promotions</a></li>
					<li><a href='#'>Ventes Flash</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"> Mon Panier() </a> </li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="container">

		<div class="row" style="margin-top: 80px;">



			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-body">


						<form method="get" action="verif1.php" class="form-horizontal">
							<h4 align="center">Vous Avez Déjà Un Compte E-Boutique ?<br>
								Connectez-Vous !
							</h4>
							<br>
							<div class="form-group">
								<label class="col-md-4 control-label">Email</label>
								<div class="col-md-8">
									<input type="email" class="form-control" placeholder="Email" type="text" name="email">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Mot de passe</label>
								<div class="col-md-8">
									<input type="password" class="form-control" placeholder="Password" name="password">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-info">Se Connecter</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
			<div class="col-md-6" style="margin-left:-20px;">
				<div class="panel panel-info">
					<div class="panel-body">
						<form class="form-horizontal">
							<h4 align="center">Je Suis Un Nouveau Client </h4>
							<br />
							<h5>Créer un nouveau compte client</h5>
							<br />
							<div class="form-group">
								<label class="col-md-4 control-label">Nom</label>
								<div class="col-md-8">
									<input type="text" class="form-control" placeholder="Nom">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Prénom</label>
								<div class="col-md-8">
									<input type="text" class="form-control" placeholder="Prenom">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Adresse</label>
								<div class="col-md-8">
									<input type="text" class="form-control" placeholder="Adresse">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Email</label>
								<div class="col-md-8">
									<input type="email" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Mot de passe</label>
								<div class="col-md-8">
									<input type="password" class="form-control" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-info">S'inscrire</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>


		</div>


	</div>


</body>

</html>