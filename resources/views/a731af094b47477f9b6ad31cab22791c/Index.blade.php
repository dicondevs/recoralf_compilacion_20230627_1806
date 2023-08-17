@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
<table id="tb0457aaab5ba6420fa24ec1144945684f" data-paging="true" data-ordering="true" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th data-visible="true" data-width="100px" data-data="fl1ee2c96dd6634baa92354d8e33164002" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbeeb4af96a8a4cae8bdda1920e120cb1'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl0a754e10e6774d44a950add92e1d71e4" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb4b532b80c2b4f8eaa09453371b2c94d'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl5151dc8c007646d9855ce9c8db749593" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg484758ac16274fb3881a6c34500c0817'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl2f1244c1317e494ebad0653307841e94" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3d8412adbe7643e689d995bde2d88fbf'); ?></th>
<th data-visible="false" data-width="200px" data-data="flc8979f99814b4c06bbcf0c69714a6d7c" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="fl43420ddb4df54c11b76a6c9ab32c87ee" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="flccc619599f854c5199ee6d0ae5bc1309" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="flbea0930a9f054dae99d1d7f5d23bb3f3" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="fl3b876363326141bcb4e30c8aef736910" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="fl6db6fe0700a2492ab254232484650e02" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg64f79bf0782b40bc910c1c05b90f065e'); ?></th>
<th data-visible="true" data-width="{Width}px" data-data="flc8979f99814b4c06bbcf0c69714a6d7c" data-orderable="false">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5fab7ee14afc4c2e8ae46b489520fe40'); ?>
</th>
<th data-visible="true" data-width="{Width}px" data-data="flc8979f99814b4c06bbcf0c69714a6d7c" data-orderable="false">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?>
</th>
</tr>
</thead>
<tbody>
</tbody>
</table>

<div class="modal fade" id="mdl6844ff2058d94c4490651b6f0d8198f3" tabindex="-1" role="dialog" aria-labelledby="mdlLabel6844ff2058d94c4490651b6f0d8198f3">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose6844ff2058d94c4490651b6f0d8198f3" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel6844ff2058d94c4490651b6f0d8198f3"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifr6844ff2058d94c4490651b6f0d8198f3"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose6844ff2058d94c4490651b6f0d8198f3" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
      </div>
    </div>
  </div>
</div>
  
@endsection
@section('dzMenuNavigation')
{!! str_replace("{Extra}","",$vc6b6e29e400848f28bd9fd731f1866d2) !!}

@endsection
@section('dzMenuUser')
{!! str_replace("{Extra}","",$v92a91ae1869649cfba97f4807bb4c17f) !!}

@endsection
@section('dzTitleEncabezadoPagina')
{!! str_replace("{Extra}","",$vdde5233d314b47b5838b6b75eb095b54) !!}
<form method="POST" enctype="multipart/form-data" id="frmbca8d83b4e9c4cb7a086deb21f0bc6c0"><input type="hidden" name="hidbca8d83b4e9c4cb7a086deb21f0bc6c0" id="hidbca8d83b4e9c4cb7a086deb21f0bc6c0" value="bca8d83b4e9c4cb7a086deb21f0bc6c0" />{!! csrf_field() !!}<div class="row"><div class="col-md-4"><div class="form-group"><label for="ctl861d3889278e46d28b766d0ab1fa841f_bca8d83b4e9c4cb7a086deb21f0bc6c0"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3ecb2a7d27bd445bbb2ddf735a7e74e1'); ?> </label><input type="text" tabindex="1" id="ctl861d3889278e46d28b766d0ab1fa841f_bca8d83b4e9c4cb7a086deb21f0bc6c0" name="ctl861d3889278e46d28b766d0ab1fa841f_bca8d83b4e9c4cb7a086deb21f0bc6c0" readonly="readonly"  class="form-control"  /></div></div></div></form><span class="recf5790fd35b334d228e1b216489616caa" style="display:none;">
@if ($vfe1a5b820abb4a3784d0587a241c5154 == null || count($vfe1a5b820abb4a3784d0587a241c5154) == 0)

@else
    @foreach ($vfe1a5b820abb4a3784d0587a241c5154 as $item)
<span class="recea17abf4c1ee4f398e98e7007ea45675">{!! $item["flea17abf4c1ee4f398e98e7007ea45675"] !!}</span>
    @endforeach
@endif

</span>
@endsection
@section('footer')

@endsection
@section('formbusqueda')

@if ($v6821693fde2f4605a543895f5e75ec9a == null || count($v6821693fde2f4605a543895f5e75ec9a) == 0)

@else
    @foreach ($v6821693fde2f4605a543895f5e75ec9a as $item)
<div class="title"   ><a href="/estadosGrid/{!! $item["fl50a776d322e147f58cef1065444d4994"] !!}/">
<button type="button" class="btn btn-box-tool">
<i class="fa fa-reply"></i></button>
</a>
<h2>Administraci&#243;n de Centros de trabajo</h2>
</div>

    @endforeach
@endif


@endsection
@section('nuevoregistro')
<form method="POST" enctype="multipart/form-data" id="frm1d83539ff85f42adb5d4449c0899e3df"><input type="hidden" name="hid1d83539ff85f42adb5d4449c0899e3df" id="hid1d83539ff85f42adb5d4449c0899e3df" value="1d83539ff85f42adb5d4449c0899e3df" />{!! csrf_field() !!}<div class="row"><div class="col-md-12"><button tabindex="1" type="submit" id="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" name="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" class="alta btn" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></button></div></div></form>
<div class="modal fade" id="mdl7bf15ebceebb4847bdd28ac0263c8e97" tabindex="-1" role="dialog" aria-labelledby="mdlLabel7bf15ebceebb4847bdd28ac0263c8e97">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose7bf15ebceebb4847bdd28ac0263c8e97" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel7bf15ebceebb4847bdd28ac0263c8e97"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifr7bf15ebceebb4847bdd28ac0263c8e97"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose7bf15ebceebb4847bdd28ac0263c8e97" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
      </div>
    </div>
  </div>
</div>
  
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
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/jquery.dataTables.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/dataTables.responsive.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/dataTables.bootstrap4.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/responsive.bootstrap4.min.js" ></script><script type="text/javascript">$.fn.dataTable.ext.errMode=function(e,settings,techNote,message){console.log(message);};dt0457aaab5ba6420fa24ec1144945684f=false;rel0457aaab5ba6420fa24ec1144945684f=false;tot0457aaab5ba6420fa24ec1144945684f={!! str_replace("{Extra}","",$v0457aaab5ba6420fa24ec1144945684fTotal) !!};var tbObj0457aaab5ba6420fa24ec1144945684f;$(function(){tbObj0457aaab5ba6420fa24ec1144945684f=$('#tb0457aaab5ba6420fa24ec1144945684f').DataTable({'drawCallback':function(settings){},columnDefs:[{targets:10,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="location=\'<?php echo URL::to("/") ?>/centrosacopioGrid/'+encodeURIComponent(row.fl6db6fe0700a2492ab254232484650e02 == '' ? '' : row.fl6db6fe0700a2492ab254232484650e02)+'\';"><img src="data:image/x-png;base64,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" /></a>';}},{targets:11,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="$(\'#ifr6844ff2058d94c4490651b6f0d8198f3\').attr(\'src\',\'<?php echo URL::to("/") ?>/centrostrabajoForm/'+encodeURIComponent('{!! \Route::current()->parameter("estados") !!}' == '' ? '-' : '{!! \Route::current()->parameter("estados") !!}')+'/'+encodeURIComponent(row.fl6db6fe0700a2492ab254232484650e02 == '' ? '' : row.fl6db6fe0700a2492ab254232484650e02)+'\');$(\'#mdl6844ff2058d94c4490651b6f0d8198f3\').modal(\'show\');"><img src="data:image/x-png;base64,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" /></a>';}},],autoWidth:false,processing:true,serverSide:true,searching:false,responsive:true,pagingType:'full_numbers',language:{processing:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5f91e3098ee74310b3d96087e7895256'); ?>'+'',emptyTable:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg53a001ed5802492dbd17759a893862a7'); ?>'+'',lengthMenu:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg787a0a3e158a4492b11380b709d0d9a3'); ?>'+'',info:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16bdfb61f662468d8f80e80bd3b8b1f6'); ?>'+'',infoEmpty:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2646df37ab049a9aea0ee0eb8d99d0e'); ?>'+'',paginate:{first:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg673755107d9e4f5cb0eef6837c91b302'); ?>'+'',last:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50b13adc5284e92844239ca59bf38e5'); ?>'+'',next:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6d4792f9962a46f2b37bbf9af604eda9'); ?>'+'',previous:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9d046e3adb7647fc95991757861b6f28'); ?>'+''},},'lengthMenu': [ [10,20,50,100], [10,20,50,100] ],ajax: function(data, callback, settings) {var info=$('#tb0457aaab5ba6420fa24ec1144945684f').DataTable().page.info();var order=$('#tb0457aaab5ba6420fa24ec1144945684f').DataTable().order();var orderby='-';switch(order[0][0]){}order0457aaab5ba6420fa24ec1144945684f=order;orderby0457aaab5ba6420fa24ec1144945684f=orderby;page0457aaab5ba6420fa24ec1144945684f=(info.page + 1);pagesize0457aaab5ba6420fa24ec1144945684f=info.length;if(rel0457aaab5ba6420fa24ec1144945684f){$.ajax({url:getUrl0457aaab5ba6420fa24ec1144945684fCount(),async:false,success:function(res){tot0457aaab5ba6420fa24ec1144945684f=res;}});}$.get(getUrl0457aaab5ba6420fa24ec1144945684f(),function(res) {callback({recordsTotal:tot0457aaab5ba6420fa24ec1144945684f,recordsFiltered:tot0457aaab5ba6420fa24ec1144945684f,data: res});});}});});var orderby0457aaab5ba6420fa24ec1144945684f;var order0457aaab5ba6420fa24ec1144945684f;var page0457aaab5ba6420fa24ec1144945684f;var pagesize0457aaab5ba6420fa24ec1144945684f;function getUrl0457aaab5ba6420fa24ec1144945684fCount(){urlpath=('{!! str_replace("{Extra}","",$v0457aaab5ba6420fa24ec1144945684fAjax) !!}').replace('996abab0c8e04982b42cb42b87ebb4de','996abab0c8e04982b42cb42b87ebb4deCount');urlpath=urlpath.replace('/{page}','');urlpath=urlpath.replace('/{pagesize}','');urlpath=urlpath.replace('/{orderColumn}','');urlpath=urlpath.replace('/{orderType}','');return urlpath;}function getUrl0457aaab5ba6420fa24ec1144945684f(){urlpath='{!! str_replace("{Extra}","",$v0457aaab5ba6420fa24ec1144945684fAjax) !!}';urlpath=urlpath.replace('{page}',page0457aaab5ba6420fa24ec1144945684f);if(dt0457aaab5ba6420fa24ec1144945684f){urlpath=urlpath.replace('{pagesize}',10000);dt0457aaab5ba6420fa24ec1144945684f=false;}else{urlpath=urlpath.replace('{pagesize}',pagesize0457aaab5ba6420fa24ec1144945684f);}urlpath=urlpath.replace('{orderColumn}',orderby0457aaab5ba6420fa24ec1144945684f);urlpath=urlpath.replace('{orderType}',order0457aaab5ba6420fa24ec1144945684f[0][1].toUpperCase());return urlpath;}</script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNewbca8d83b4e9c4cb7a086deb21f0bc6c0=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();if($('.recf5790fd35b334d228e1b216489616caa').children().length>0){isNewbca8d83b4e9c4cb7a086deb21f0bc6c0=false;if($('.recea17abf4c1ee4f398e98e7007ea45675').length>0){$('#ctl861d3889278e46d28b766d0ab1fa841f_bca8d83b4e9c4cb7a086deb21f0bc6c0').val($('.recea17abf4c1ee4f398e98e7007ea45675').html());$('#ctl861d3889278e46d28b766d0ab1fa841f_bca8d83b4e9c4cb7a086deb21f0bc6c0').change();}}</script><script type="text/javascript">var fromButton='';var isNew1d83539ff85f42adb5d4449c0899e3df=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df').click(function(){$('#ifr7bf15ebceebb4847bdd28ac0263c8e97').attr('src','<?php echo URL::to("/") ?>/centrostrabajoForm/'+encodeURIComponent('{!! \Route::current()->parameter("estados") !!}' == '' ? '-' : '{!! \Route::current()->parameter("estados") !!}')+'/0');$('#mdl7bf15ebceebb4847bdd28ac0263c8e97').modal('show');return false;});</script>
@endsection
