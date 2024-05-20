@extends('template.index')

@section('content')
	<!-- Breadcrumb -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-20">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="{{ url('/') }}" class="breadcrumb-item f1-s-3 cl9">
					Inicio 
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					{{ $note->category->name }}
				</span>
                <span class="breadcrumb-item f1-s-3 cl9">
					{{ ucfirst($note->title) }}
				</span>
			</div>
		</div>
	</div>}
    
    	<!-- Content -->
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                                {{ $note->category->name }}
							</a>

							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                                {{ ucfirst($note->title) }}
							</h3>
							
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    {{ ucfirst($note->author->name) }}
									</a>

									<span class="m-rl-3">-</span>

									<span>
                                        {{ ucfirst($note->created_at->locale('es')->isoFormat('LLLL')) }}
									</span>
								</span>
							</div>

							<div class="wrap-pic-max-w p-b-30">
								<img src="{{ asset($note->picture->title) }}" alt="IMG">
							</div>

							<p class="f1-s-11 cl6 p-b-25">
                                {{ ucfirst($note->description) }}
                        	</p>
						</div>
					</div>
				</div>
                @include('layouts.home.modules.most-popular')
			</div>
		</div>
	</section>

@endsection
