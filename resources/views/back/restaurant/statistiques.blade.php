@extends('back.restaurant.index')

@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Stock de mon restaurant :</h2>
                    </div>
                </div><br/>
    </div>

    <div class="container-fluid">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label for="customRange1">Année : &nbsp</label>
                @foreach ($years as $year)
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="{{ $year }}" name="year" class="custom-control-input" value="{{ $year }}" @if($actualYear == $year) checked @endif>
                    <label class="custom-control-label" for="{{ $year }}">{{ $year }}</label>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div id="ordersChart" style="height: 300px;" class="card-body">
            </div>
          </div>
        </div>
      </div>


</div>
