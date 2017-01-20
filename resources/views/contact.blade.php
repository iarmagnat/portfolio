@extends('templates.base'.ucwords( App::getLocale() ) )
@section('title', trans('contact.title') )
@section('content')
    <div class="container">
        <h3>{{ trans('contact.pleaseContact') }}</h3>

        <div class="row">
        
        <div class="col-xs-4 col-sm-2 col-sm-offset-3">
            <p>Github:</p>
            <p><a href="https://github.com/iarmagnat"><i class="fa fa-github-square fa-5x"></i></a></p>
        </div>
        <div class="col-xs-4 col-sm-2">
            <p>Linkedin:</p>
            <p><a href="https://fr.linkedin.com/in/ivan-armagnat-0b40bb133"><i class="fa fa-linkedin-square fa-5x"></i></a></p>
        </div>
        <div class="col-xs-4 col-sm-2">
            <p>Viadeo:</p>
            <p><a href="http://www.viadeo.com/p/0022cx2fztumvq0c"><i class="fa fa-viadeo-square fa-5x"></i></a></p>
        </div>
        </div>


        <h3>
            {{ trans('contact.emailMe') }}
        </h3>

        @if (isset($mailreport) )
            <p style="color: red;">{{ $mailreport }}</p>
        @endif

        {{ Form::open(['url' => 'contact/' . App::getLocale(), 'id' => 'contactForm']) }}

            {{ Form::label('name', trans('contact.name')) }}
            {{ Form::text('name', '', ['placeholder' => trans('contact.name')]) }}

            {{ Form::label('email', 'E-Mail') }}
            {{ Form::text('email', '', ['placeholder' => 'Email']) }}

            {{ Form::textarea('message', '', ['placeholder' => 'Message...'] ) }}

            {{ Form::submit( trans('contact.send') ) }}

        {{ Form::close() }}


        <div>
        <h3>
            {{ trans('contact.location') }}
        </h3>
        </div>
        <div class="row">
            <iframe class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.6837559218848!2d4.860446615714585!3d45.777527720502015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea97372b28ed%3A0x3190fe102adecce4!2sAvenue+Roberto+Rossellini%2C+69100+Villeurbanne!5e0!3m2!1sfr!2sfr!4v1479378073890" width="200" height="450" frameborder="0" style="border:0" allowfullscreen> </iframe>
        </div>
        </div>
    </div>
@endsection