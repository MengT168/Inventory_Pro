@extends('master')

@section('Content')
<style>
 .btn-primary-custom {
    background-color: black;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    width: 300px;
    color: white; /* Text color */
    transition: all 0.3s ease;
}

.btn-primary-custom:hover {
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    color: white; /* Text color on hover */
}

/*
.background-container {
    height: 67vh;
    background: url('/upload/Dash.jpg') no-repeat center center;
    background-size: cover;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
    display: flex;
    justify-content: center;
    align-items: center;
}

/* ====================================== */

.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}
.l-bg-cherry {
    background: linear-gradient(to right, #493240, #f09) !important;
    color: #fff;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #373b44, #4286f4) !important;
    color: #fff;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #0a504a, #38ef7d) !important;
    color: #fff;
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #a86008, #ffba56) !important;
    color: #fff;
}

.card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.card .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -5px;
    top: 20px;
    opacity: 0.1;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

.l-bg-green {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
    color: #fff;
}

.l-bg-orange {
    background: linear-gradient(to right, #f9900e, #ffba56) !important;
    color: #fff;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

#card:hover{
    box-shadow: 2px 0px 2px white;
    transition: all .7s ease-in;
    background: #f5f5f5; 
}

#word{
    font-family: "Anton SC", sans-serif;
  font-weight: 400;
  font-style: normal;
  color: antiquewhite ;
  font-size: 30px;
}

#number{
    font-family: "Anton SC", sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 30px;
}

</style>
<div class="row">
    <div class="container-fluid background-container">
        <!-- <div>
            <a class="btn btn-primary-custom" href="/admin/list_car">View Car</a>
        </div> -->
        <div class="row ">
        <!-- <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-cherry" id="card" >
                <a href="/admin/list_car" style="text-decoration: none;" >
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-car"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0" id="word" >Cars Stock</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0" id="number" style="color: #000;" >
                                
                            </h2>
                        </div>
                       
                    </div>
                </div>
                </a>
            </div>
        </div> -->
        <!-- <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-blue-dark" id="card" >
                <a href="/admin/sold_car" style="text-decoration: none;" >
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-car"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0" id="word" >Car Sold</h5>
                    </div>
                    <div class="row align-items -center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0" id="number" style="color: #000;" >
                            
                            </h2>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div> -->
        <!-- <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-green-dark" id="card" >
               <a href="/admin/list_model" style="text-decoration: none;"  >
               <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-car"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0" id="word" >Model</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0" id="number" style="color: #000;" >
                            
                            </h2>
                        </div>
                    </div>
                </div>
               </a>
            </div>
        </div> -->
        <!-- <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-orange-dark" id="card" >
                <a href="/admin/list_income" style="text-decoration: none;" >
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0" id="word" >Total Revenue</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0" id="number" style="color: #000;" >
                            </h2>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div> -->
    </div>
</div>
    </div>
</div>
@endsection
