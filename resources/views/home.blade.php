@extends('templates.base'.ucwords( App::getLocale() ) )
@section('title', trans('home.title') )
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 style="text-align:center">Ivan Armagnat</h1>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-9 col-sm-offset-2 col-md-offset-3">
                <h3>{{ trans('home.job') }}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-1 col-xs-offset-10 col-md-offset-11">
                <a href="/presentation/{{App::getLocale()}}" id="continueButton"><i class="fa fa-angle-double-right fa-5x"></i></a>
            </div>
        </div>
    </div> 
  @endsection