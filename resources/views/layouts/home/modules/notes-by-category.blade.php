<!-- Post -->
<section class="bg0 p-t-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
            @foreach($bestCategories as $category)
                <div class="p-b-20">
                    <!-- Entertainment -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl12 tab01-title">
                                {{$category->name}}
                            </h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                            </ul>
                            <!--  -->
                            <a href="{{ route('category.show', [$category->id]) }}" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                Ver todas las notas
                                <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                            </a>
                        </div>
                        @include('layouts.home.modules.details-notes')
                    </div>
                </div>
            @endforeach
            </div>
            @include('layouts.home.modules.most-popular')
        </div>
    </div>
</section>