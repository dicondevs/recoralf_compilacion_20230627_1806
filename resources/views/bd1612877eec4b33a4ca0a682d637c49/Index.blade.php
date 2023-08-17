@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
<table id="tbe604b0cd6ca6492287921fcf6a140ec9" data-paging="true" data-ordering="true" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th data-visible="true" data-width="200px" data-data="fl5c80a7c9e7aa4b3aa70ed47b3d653877" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7bbe20f5bf7545d5917dd26660ed2800'); ?></th>
<th data-visible="false" data-width="200px" data-data="fle81f4e1bada84282af601af5a0c3a927" data-orderable="false" data-class="">
</th>
<th data-visible="true" data-width="{Width}px" data-data="fl5c80a7c9e7aa4b3aa70ed47b3d653877" data-orderable="false">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbeeb4af96a8a4cae8bdda1920e120cb1'); ?>
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

@if ($v23d90efa187a41d19acbc4d8eff6f964 == null || count($v23d90efa187a41d19acbc4d8eff6f964) == 0)

@else
    @foreach ($v23d90efa187a41d19acbc4d8eff6f964 as $item)
{!! $item["flf910c387adfc4f8396804c4a557fc8be"] !!}

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
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/css/jquery.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/css/responsive.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/css/dataTables.bootstrap4.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/css/responsive.bootstrap4.min.css" />
@endsection
@section('scripts')
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/jquery.dataTables.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/dataTables.responsive.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/dataTables.bootstrap4.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/responsive.bootstrap4.min.js" ></script><script type="text/javascript">$.fn.dataTable.ext.errMode=function(e,settings,techNote,message){console.log(message);};dte604b0cd6ca6492287921fcf6a140ec9=false;rele604b0cd6ca6492287921fcf6a140ec9=false;tote604b0cd6ca6492287921fcf6a140ec9={!! str_replace("{Extra}","",$ve604b0cd6ca6492287921fcf6a140ec9Total) !!};var tbObje604b0cd6ca6492287921fcf6a140ec9;$(function(){tbObje604b0cd6ca6492287921fcf6a140ec9=$('#tbe604b0cd6ca6492287921fcf6a140ec9').DataTable({'drawCallback':function(settings){},columnDefs:[{targets:2,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="location=\'<?php echo URL::to("/") ?>/estatusGrid/'+encodeURIComponent(row.fle81f4e1bada84282af601af5a0c3a927 == '' ? '' : row.fle81f4e1bada84282af601af5a0c3a927)+'/0/'+encodeURIComponent('{!! \Route::current()->parameter("titulo") !!}' == '' ? '-' : '{!! \Route::current()->parameter("titulo") !!}')+'\';"><img src="data:image/x-png;base64,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" /></a>';}},],autoWidth:false,processing:true,serverSide:true,searching:false,responsive:true,pagingType:'full_numbers',language:{processing:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5f91e3098ee74310b3d96087e7895256'); ?>'+'',emptyTable:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg53a001ed5802492dbd17759a893862a7'); ?>'+'',lengthMenu:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg787a0a3e158a4492b11380b709d0d9a3'); ?>'+'',info:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16bdfb61f662468d8f80e80bd3b8b1f6'); ?>'+'',infoEmpty:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2646df37ab049a9aea0ee0eb8d99d0e'); ?>'+'',paginate:{first:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg673755107d9e4f5cb0eef6837c91b302'); ?>'+'',last:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50b13adc5284e92844239ca59bf38e5'); ?>'+'',next:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6d4792f9962a46f2b37bbf9af604eda9'); ?>'+'',previous:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9d046e3adb7647fc95991757861b6f28'); ?>'+''},},'lengthMenu': [ [10,20,50,100], [10,20,50,100] ],ajax: function(data, callback, settings) {var info=$('#tbe604b0cd6ca6492287921fcf6a140ec9').DataTable().page.info();var order=$('#tbe604b0cd6ca6492287921fcf6a140ec9').DataTable().order();var orderby='-';switch(order[0][0]){}ordere604b0cd6ca6492287921fcf6a140ec9=order;orderbye604b0cd6ca6492287921fcf6a140ec9=orderby;pagee604b0cd6ca6492287921fcf6a140ec9=(info.page + 1);pagesizee604b0cd6ca6492287921fcf6a140ec9=info.length;if(rele604b0cd6ca6492287921fcf6a140ec9){$.ajax({url:getUrle604b0cd6ca6492287921fcf6a140ec9Count(),async:false,success:function(res){tote604b0cd6ca6492287921fcf6a140ec9=res;}});}$.get(getUrle604b0cd6ca6492287921fcf6a140ec9(),function(res) {callback({recordsTotal:tote604b0cd6ca6492287921fcf6a140ec9,recordsFiltered:tote604b0cd6ca6492287921fcf6a140ec9,data: res});});}});});var orderbye604b0cd6ca6492287921fcf6a140ec9;var ordere604b0cd6ca6492287921fcf6a140ec9;var pagee604b0cd6ca6492287921fcf6a140ec9;var pagesizee604b0cd6ca6492287921fcf6a140ec9;function getUrle604b0cd6ca6492287921fcf6a140ec9Count(){urlpath=('{!! str_replace("{Extra}","",$ve604b0cd6ca6492287921fcf6a140ec9Ajax) !!}').replace('bf50d34494904519a21c959221f160a6','bf50d34494904519a21c959221f160a6Count');urlpath=urlpath.replace('/{page}','');urlpath=urlpath.replace('/{pagesize}','');urlpath=urlpath.replace('/{orderColumn}','');urlpath=urlpath.replace('/{orderType}','');return urlpath;}function getUrle604b0cd6ca6492287921fcf6a140ec9(){urlpath='{!! str_replace("{Extra}","",$ve604b0cd6ca6492287921fcf6a140ec9Ajax) !!}';urlpath=urlpath.replace('{page}',pagee604b0cd6ca6492287921fcf6a140ec9);if(dte604b0cd6ca6492287921fcf6a140ec9){urlpath=urlpath.replace('{pagesize}',10000);dte604b0cd6ca6492287921fcf6a140ec9=false;}else{urlpath=urlpath.replace('{pagesize}',pagesizee604b0cd6ca6492287921fcf6a140ec9);}urlpath=urlpath.replace('{orderColumn}',orderbye604b0cd6ca6492287921fcf6a140ec9);urlpath=urlpath.replace('{orderType}',ordere604b0cd6ca6492287921fcf6a140ec9[0][1].toUpperCase());return urlpath;}</script>
@endsection
