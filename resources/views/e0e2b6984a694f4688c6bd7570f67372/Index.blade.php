@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
<table id="tb500d7d5b41f8482ebc04deff5eef7483" data-paging="true" data-ordering="true" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th data-visible="true" data-width="200px" data-data="fl254300e73ffe4a328fd46392753e47d1" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg0e1504a78c9d454285f6eff96d79a802'); ?></th>
<th data-visible="true" data-width="200px" data-data="flac7cd95e697b4bd8ba011b51665a5693" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgf86b540a2b1c4cdcb5e9a71ef99a3b3e'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl180f3161da8e4d808633ff010dd7e256" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg58395ed2c35e4860ae2f2ac9bb3df906'); ?></th>
<th data-visible="false" data-width="200px" data-data="fl5e9c6bb6654e46dd9dfb9cd00a2459f7" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="fl2cb59277e3084c8f8084881a3d010f70" data-orderable="false" data-class="">
</th>
</tr>
</thead>
<tbody>
</tbody>
</table>

@endsection
@section('dzMenuNavigation')
{!! str_replace("{Extra}","",$vc6b6e29e400848f28bd9fd731f1866d2) !!}

@endsection
@section('dzMenuUser')
{!! str_replace("{Extra}","",$v92a91ae1869649cfba97f4807bb4c17f) !!}

@endsection
@section('dzTitleEncabezadoPagina')
{!! str_replace("{Extra}","",$vdde5233d314b47b5838b6b75eb095b54) !!}

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
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/css/jquery.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/css/responsive.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/css/dataTables.bootstrap4.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/css/responsive.bootstrap4.min.css" />
@endsection
@section('scripts')
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/jquery.dataTables.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/dataTables.responsive.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/dataTables.bootstrap4.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/responsive.bootstrap4.min.js" ></script><script type="text/javascript">$.fn.dataTable.ext.errMode=function(e,settings,techNote,message){console.log(message);};dt500d7d5b41f8482ebc04deff5eef7483=false;rel500d7d5b41f8482ebc04deff5eef7483=false;tot500d7d5b41f8482ebc04deff5eef7483={!! str_replace("{Extra}","",$v500d7d5b41f8482ebc04deff5eef7483Total) !!};var tbObj500d7d5b41f8482ebc04deff5eef7483;$(function(){tbObj500d7d5b41f8482ebc04deff5eef7483=$('#tb500d7d5b41f8482ebc04deff5eef7483').DataTable({'drawCallback':function(settings){},columnDefs:[],autoWidth:false,processing:true,serverSide:true,searching:false,responsive:true,pagingType:'full_numbers',language:{processing:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5f91e3098ee74310b3d96087e7895256'); ?>'+'',emptyTable:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg53a001ed5802492dbd17759a893862a7'); ?>'+'',lengthMenu:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg787a0a3e158a4492b11380b709d0d9a3'); ?>'+'',info:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16bdfb61f662468d8f80e80bd3b8b1f6'); ?>'+'',infoEmpty:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2646df37ab049a9aea0ee0eb8d99d0e'); ?>'+'',paginate:{first:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg673755107d9e4f5cb0eef6837c91b302'); ?>'+'',last:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50b13adc5284e92844239ca59bf38e5'); ?>'+'',next:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6d4792f9962a46f2b37bbf9af604eda9'); ?>'+'',previous:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9d046e3adb7647fc95991757861b6f28'); ?>'+''},},'lengthMenu': [ [10,20,50,100], [10,20,50,100] ],ajax: function(data, callback, settings) {var info=$('#tb500d7d5b41f8482ebc04deff5eef7483').DataTable().page.info();var order=$('#tb500d7d5b41f8482ebc04deff5eef7483').DataTable().order();var orderby='-';switch(order[0][0]){}order500d7d5b41f8482ebc04deff5eef7483=order;orderby500d7d5b41f8482ebc04deff5eef7483=orderby;page500d7d5b41f8482ebc04deff5eef7483=(info.page + 1);pagesize500d7d5b41f8482ebc04deff5eef7483=info.length;if(rel500d7d5b41f8482ebc04deff5eef7483){$.ajax({url:getUrl500d7d5b41f8482ebc04deff5eef7483Count(),async:false,success:function(res){tot500d7d5b41f8482ebc04deff5eef7483=res;}});}$.get(getUrl500d7d5b41f8482ebc04deff5eef7483(),function(res) {callback({recordsTotal:tot500d7d5b41f8482ebc04deff5eef7483,recordsFiltered:tot500d7d5b41f8482ebc04deff5eef7483,data: res});});}});});var orderby500d7d5b41f8482ebc04deff5eef7483;var order500d7d5b41f8482ebc04deff5eef7483;var page500d7d5b41f8482ebc04deff5eef7483;var pagesize500d7d5b41f8482ebc04deff5eef7483;function getUrl500d7d5b41f8482ebc04deff5eef7483Count(){urlpath=('{!! str_replace("{Extra}","",$v500d7d5b41f8482ebc04deff5eef7483Ajax) !!}').replace('5ef7e39563104b76806ed5e7742b50e2','5ef7e39563104b76806ed5e7742b50e2Count');urlpath=urlpath.replace('/{page}','');urlpath=urlpath.replace('/{pagesize}','');urlpath=urlpath.replace('/{orderColumn}','');urlpath=urlpath.replace('/{orderType}','');return urlpath;}function getUrl500d7d5b41f8482ebc04deff5eef7483(){urlpath='{!! str_replace("{Extra}","",$v500d7d5b41f8482ebc04deff5eef7483Ajax) !!}';urlpath=urlpath.replace('{page}',page500d7d5b41f8482ebc04deff5eef7483);if(dt500d7d5b41f8482ebc04deff5eef7483){urlpath=urlpath.replace('{pagesize}',10000);dt500d7d5b41f8482ebc04deff5eef7483=false;}else{urlpath=urlpath.replace('{pagesize}',pagesize500d7d5b41f8482ebc04deff5eef7483);}urlpath=urlpath.replace('{orderColumn}',orderby500d7d5b41f8482ebc04deff5eef7483);urlpath=urlpath.replace('{orderType}',order500d7d5b41f8482ebc04deff5eef7483[0][1].toUpperCase());return urlpath;}</script>
@endsection
