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

@endsection