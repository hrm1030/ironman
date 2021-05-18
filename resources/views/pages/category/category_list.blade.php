@extends('layouts.app')

@section('page-content')
<section id="contact" class="account">

    <img class="login-detail-left" src="assets/images/login-detail-left.png">

    <img class="login-detail-right" src="assets/images/login-detail-right.png">
    
    <div class="background-wrapper">

        <h2 class="text-center"><strong>Browse companies by category</strong></h2>

        <div class="container w-100 cat-list-box">

            <div class="row">
                <div class="col-md-5">
                    <div class="d-flex nav mt-0">

                        <ul class="nav nav-tabs d-flex flex-column mx-auto mx-lg-0" id="myAccount">
                            @foreach ($categories as $category)
                            <li class="nav-item">
        
                                <a href="#tab{{ $category['id'] }}" class="nav-link py-2" data-toggle="tab">{{ $category['name'] }}</a>
        
                            </li>
                            @endforeach
                            
        
                        </ul>
        
                    </div>
                </div>
                <div class="col-md-7">

                    <div class="pl-sm-0 h-100 input-box pb-lg-0 pb-3 tab-content">
                        @foreach ($categories as $tabcategory)
                        <div class="tab-pane fade  text-center text-lg-left" id="tab{{ $tabcategory['id'] }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="text-info">{{ $tabcategory['name'] }}</h5>
                                </div>
                                <div class="col-md-6" style="border-left: 2px solid #BDE8F4;">
                                    @if (count($tabcategory['children'])>0)
                                        <ul>
                                            @foreach ($tabcategory['children'] as $ch_cat)
                                                <li><a href="{{ url( 'category/'.$tabcategory['id'].'/'.$ch_cat->id ) }}">{{ $ch_cat->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                        

                    </div>

                </div>
            </div>
        </div>

</section>	
@endsection