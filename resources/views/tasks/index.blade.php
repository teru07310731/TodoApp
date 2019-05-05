<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewpoprt" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Todo App</title>
	<link rel="stylesheet" type="/css/styles.css">
</head>
<body>
	<header>
		<nav class="my-navbar"></nav>
			<a class="my-navbar-brand" href="">Todoapp</a>
		</nav>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col col-md-4">
					<nav class="panel panel-default">
						<div class="papnel-heading">Folder</div>
							<div class="panel-body">
								<a href="#" class="btn btn-default btn-block">
									Add Folder
								</a>
							</div>
							<div class="list-group">
								@foreach($folders as $folder)
									<a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="list-group-item">
										{{ $folder->title }}
									</a>
								@endforeach
							</div>
						</nav>
					</div>
					<div class="column col-md-8"></div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>