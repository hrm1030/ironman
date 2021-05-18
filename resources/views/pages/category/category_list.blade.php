@extends('layouts.app')

@section('page-content')
<section id="contact" class="account">

    <img class="login-detail-left" src="assets/images/login-detail-left.png">

    <img class="login-detail-right" src="assets/images/login-detail-right.png">
    
    <div class="background-wrapper">

        <h2 class="text-center"><strong>Browse companies by category</strong></h2>

        <div class="container h-100 review-box">

            <div class="row h-100 height-auto">

                <div class="col-lg-5 h-100 height-auto px-0">

                    <div class="navbar-light h-100 height-auto">

                        <div class="h-100">

                            <div class="d-flex nav mt-0">

                                <ul class="nav nav-tabs d-flex flex-column mx-auto mx-lg-0" id="myAccount">
                                    {{-- @foreach ($categories as $category) --}}
                                    <li class="nav-item">

                                        <a href="#2" class="nav-link py-2" data-toggle="tab">sdfsafsadfsa</a>

                                    </li>
                                    <li class="nav-item">

                                        <a href="#9" class="nav-link py-2" data-toggle="tab">sdfsafsadfsa</a>

                                    </li>
                                    {{-- @endforeach --}}
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-lg-7">

                    <div class="pl-sm-0 h-100 input-box pb-lg-0 pb-3 tab-content">
                        {{-- @php
                            $num = 1;
                        @endphp
                        @foreach ($categories as $category)
                        @php
                            if($num == 1) {
                                $active = 'active';
                            } else {
                                $active = 'fade';
                            }
                            $num++;
                        @endphp --}}
                        <div class="tab-pane active" id="2">

                            <div class="row">

                                <div class="col-md-6 text-center text-lg-left">
                                    weqrwerqerwqrewqrqwr
                                    {{-- <h3 class="mt-2 account-settings-name mb-0">{{ $category['name'] }}</h3> --}}


                                </div>

                                <div class="col-md-6 account-numbers">
                                   
                                    <ul>
                                        {{-- @if (count($category['children'])> 0)
                                            @foreach ($category['children'] as $ch_cat)
                                                <li>{{ $ch_cat->name }}</li>
                                            @endforeach
                                        @endif --}}
                                    </ul>
                                </div>

                            </div>

                        </div>
                        {{-- @endforeach	 --}}
                        <div class="tab-pane fade" id="9">

                            <div class="row">

                                <div class="col-md-6 text-center text-lg-left">
                                    asdfasfsadf
                                    {{-- <h3 class="mt-2 account-settings-name mb-0">{{ $category['name'] }}</h3> --}}


                                </div>

                                <div class="col-md-6 account-numbers">
                                   
                                    <ul>
                                        {{-- @if (count($category['children'])> 0)
                                            @foreach ($category['children'] as $ch_cat)
                                                <li>{{ $ch_cat->name }}</li>
                                            @endforeach
                                        @endif --}}
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

</section>	
@endsection