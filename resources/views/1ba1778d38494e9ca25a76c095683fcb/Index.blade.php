@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
{!! str_replace("{Extra}","",$v414c7ea2afa545dab0565e3fc633654f) !!}

@endsection
@section('dzMenuNavigation')
{!! str_replace("{Extra}","",$vc6b6e29e400848f28bd9fd731f1866d2) !!}

@endsection
@section('dzMenuUser')
{!! str_replace("{Extra}","",$v92a91ae1869649cfba97f4807bb4c17f) !!}

@endsection
@section('dzTitleEncabezadoPagina')
{!! str_replace("{Extra}","",$vdde5233d314b47b5838b6b75eb095b54) !!}

@if ($v678c8cb8eeec4d0aab6bee672de9ae9c == null || count($v678c8cb8eeec4d0aab6bee672de9ae9c) == 0)

@else
    @foreach ($v678c8cb8eeec4d0aab6bee672de9ae9c as $item)
{!! $item["fl321116e6328e48f7b8f7cd9d274e9911"] !!}

    @endforeach
@endif


@endsection
@section('footer')

@endsection
@section('formbusqueda')

@endsection
@section('nuevoregistro')

@endsection
@section('RecentActivity')

@endsection
@section('titsystem')

@if ($ve926bc3fad6e4b979b6119419cdb0b3a == null || count($ve926bc3fad6e4b979b6119419cdb0b3a) == 0)

@else
    @foreach ($ve926bc3fad6e4b979b6119419cdb0b3a as $item)
<span class="logo-lg"><b>{!! $item["fl0c7586107c9443f8be389366c46668c2"] !!}</b></span>


    @endforeach
@endif


@endsection
@section('styles')
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script>
@endsection
@section('scripts')

@endsection
