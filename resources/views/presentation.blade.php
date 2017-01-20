@extends('templates.base'.ucwords( App::getLocale() ) )
@section('title', trans('presentation.title'))
@section('content')
<div class="container">
    <div class="selfPres">
        <h2 style='text-align: center;'>{{trans('presentation.whoami')}}</h2>
        <br>
        <p>
        <div style='text-align: center;'>{{trans('presentation.myname')}}</div>
        <br>
        {{trans('presentation.selfPres1')}}
        <abbr title="{{trans('presentation.ISN')}}">ISN</abbr>
        {{trans('presentation.selfPres2')}}
        <strong>{{trans('presentation.THAT')}}</strong>
        {{trans('presentation.selfPres3')}}
        <br>
        {{trans('presentation.selfPres4')}}
        </p>
    </div>
    
    <div class="container" id="skillBox">
        <p>{{trans('presentation.skills')}}</p>

        <div class="fundo">
            <span class="area ">Python</span>
            <div id="progresso1"></div>
            <span class="porcentagem ">60%</span>
        </div>
        
        <div class="fundo">
            <span class="area ">HTML</span>
            <div id="progresso2"></div>
            <span class="porcentagem ">65%</span>
        </div>

        <div class="fundo">
            <span class="area">CSS</span>
            <div id="progresso3"></div>
            <span class="porcentagem ">50%</span>
        </div>

        <div class="fundo">
            <span style="color:white;" class="area">PHP</span>
            <div id="progresso4"></div>
            <span style="color:white;" class="porcentagem ">40%</span>
        </div>

        <div class="fundo">
        <span class="area ">Laravel</span>
            <div id="progresso5"></div>
            <span class="porcentagem ">30%</span>
        </div>

    </div>


    <div id="hobbies">
        <h3>Hobbies</h3>
        <div>
        <span>{{trans('presentation.bass')}}</span>
        <br>
        <span>Heavy metal</span>
        <br>
        <span>{{trans('presentation.vidya')}} (League of legends, warframe, etc...)</span>
        <br>
        <span>Manga & Anime</span>
        </div>
    </div>

    </div>
@endsection