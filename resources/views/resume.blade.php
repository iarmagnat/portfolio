@extends('templates.base'.ucwords( App::getLocale() ) )
@section('title', trans('home.title') )
@section('content')
    <div class="container">
        <div class="School">
            <h3>
            {{ trans('resume.education') }}
            </h3>
            <br>
            <ul>
            <li>{{ trans('resume.cared') }}</li>
            <li>{{ trans('resume.cpp') }}</li>
            <li>{{ trans('resume.bac') }}</li>
            </ul>
            <hr>
        </div>

        <div id="webProject">
            <h3>
            {{ trans('resume.webTitle') }}
            </h3>
            <p>
            {{ trans('resume.portFol1') }}
            <br>
            {{ trans('resume.portFol2') }}<a target="_blank" href="http://getbootstrap.com">bootstrap</a>{{ trans('resume.portFol3') }}
            <br>
            {{ trans('resume.portFol4') }}
            <br>
            {{ trans('resume.portFol5') }}<a target="_blank" href="https://github.com/iarmagnat/portfolio">github</a>.
            </p>
            <hr>
        </div>

        <div id="projets">
            <h3>{{ trans('resume.other') }}</h3>
            <div id="othello">
            <h4>{{ trans('resume.othelloTitle') }}</h4>
            <img src="/img/othelloScreen.png">
            <br>
        <br>
            <span>{{ trans('resume.othelloSource') }}<a target="_blank" href="https://github.com/iarmagnat/Othello">github</a>.</span>
            <br>
            <br>
            <p>
                {{ trans('resume.othelloTxt1') }}
                <br> 
                {{ trans('resume.othelloTxt2') }}
                <br>
                {{ trans('resume.othelloTxt3') }}
                <br>
                {{ trans('resume.othelloTxt4') }}
                <br>
                {{ trans('resume.othelloTxt5') }}
                <br>
                {{ trans('resume.othelloTxt6') }}
                <br>
                {{ trans('resume.othelloTxt7') }}
            </p>
            </div>
        </div>

    </div>
@endsection