@extends ('layouts.master')

	@section ('content')

	 	<div class="row">

	 		<div class="col-sm-8 blog-main">

				<h1> {{ $post->title }} </h1>

					 {{ $post->body }}

			</div> <!-- /.blog-main -->


			@include ('layouts.sidebar')


		</div><!-- /.row -->

	@endsection