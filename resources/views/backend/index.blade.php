@extends('backend.mastaring.master')
@section('experiencearea','active')
@section('content')

<style>
  .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }

</style>
@if (Auth::user()->role == '1')
<div class="row">
  <div class="col-md-3">
    <div class="card-counter primary">
      <i class="fa fa-users  nav-icon" aria-hidden="true"></i>
      <span class="count-numbers">{{$total_user}}</span>
      <span class="count-name">Total User</span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card-counter danger">
      <i class="fa-solid fa-location-dot"></i>
      <span class="count-numbers">{{$total_destination}}</span>
      <span class="count-name">Total Destination</span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card-counter success">
      <i class="fa fa-database"></i>
      <span class="count-numbers">{{$total_contact_message}}</span>
      <span class="count-name">Total Message</span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card-counter info">
      <i class="nav-icon fa-solid fa-building-columns"></i>
      <span class="count-numbers">{{$total_partner}}</span>
      <span class="count-name">Total Institute</span>
    </div>
  </div>
</div>
@else  
<div class="card"> 
  <h3 class="p-3">Your Survey Report</h3><hr>
<div class="card-body"> 
    <p class="text-bold m-0">1. Are you married?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->married}}</p>

    <p class="text-bold m-0">2. Do you have children under the age of 21?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->children}}</p>

    <p class="text-bold m-0">3. Do you have children 21 years of age or older?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->children1}}</p>

    <p class="text-bold m-0">4. Do you have any family in the U.S.?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->family}}</p>

    <p class="text-bold m-0">5. Have you ever lived in the U.S.?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->lived}}</p>

    <p class="text-bold m-0">6. Have you already applied for an immigrant visa?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->visa}}</p>

    <p class="text-bold m-0">7. Have you submitted a form l-485 to acquire a Green Card?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->green}}</p>

    <p class="text-bold m-0">8. Have you ever been barred from entering the U.S.?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->entearing}}</p>

    <p class="text-bold m-0">9. Do you have any past or outstareIng immigration issues with the U.S</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->removal}}</p>

    <p class="text-bold m-0">10. Have you entered or attempted to enter the U.S. illegally?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->illegally}}</p>

    <p class="text-bold m-0">11. Were you ever removed from the U.S. under any legal order?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->remove}}</p>

    <p class="text-bold m-0">12. Have you ever renounced U.S. citizenship?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->citizen}}</p>

    <p class="text-bold m-0">13. Have you ever participated in any criminal activity or enterprise?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->criminal}}</p>

    <p class="text-bold m-0">14. Do you intend on engaging any criminal activity or enterprise in the U.S.?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->enterprise}}</p>

    <p class="text-bold m-0">15. Do you intend to engage in any activity against the U.S. or U.S. allies?</p>
    <p class="ml-3">Answer: {{@$data->registerSurvey->engage}}</p>
</div> 
</div>
@endif


@endsection