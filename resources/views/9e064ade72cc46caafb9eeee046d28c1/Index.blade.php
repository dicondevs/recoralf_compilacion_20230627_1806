@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
<table id="tbea54df4ad16745bda417718574be30a2" data-paging="true" data-ordering="true" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th data-visible="true" data-width="200px" data-data="fl0c7586107c9443f8be389366c46668c2" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="fl070afcffd48244e69022d4797ca75733" data-orderable="false" data-class="">
</th>
<th data-visible="true" data-width="{Width}px" data-data="fl0c7586107c9443f8be389366c46668c2" data-orderable="false">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?>
</th>
<th data-visible="true" data-width="{Width}px" data-data="fl0c7586107c9443f8be389366c46668c2" data-orderable="false">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg12af90313939475b85285e3ae0ce9ff8'); ?>
</th>
</tr>
</thead>
<tbody>
</tbody>
</table>

<div class="modal fade" id="mdlb0bb6d150ed54118ab5441fbce1e0df6" tabindex="-1" role="dialog" aria-labelledby="mdlLabelb0bb6d150ed54118ab5441fbce1e0df6">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnCloseb0bb6d150ed54118ab5441fbce1e0df6" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabelb0bb6d150ed54118ab5441fbce1e0df6"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg299c305627644674b912e34a1b1a97cb'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifrb0bb6d150ed54118ab5441fbce1e0df6"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnCloseb0bb6d150ed54118ab5441fbce1e0df6" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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

@if ($v231c4b0e7a764083a0c9141939304f29 == null || count($v231c4b0e7a764083a0c9141939304f29) == 0)

@else
    @foreach ($v231c4b0e7a764083a0c9141939304f29 as $item)
{!! $item["flf910c387adfc4f8396804c4a557fc8be"] !!}

    @endforeach
@endif


@endsection
@section('footer')

@endsection
@section('formbusqueda')
<form method="POST" enctype="multipart/form-data" id="frm1495db41b4c84fbf8dbf012ab9de7e4d"><input type="hidden" name="hid1495db41b4c84fbf8dbf012ab9de7e4d" id="hid1495db41b4c84fbf8dbf012ab9de7e4d" value="1495db41b4c84fbf8dbf012ab9de7e4d" />{!! csrf_field() !!}<div class="row"><div class="col-md-4"><div class="form-group"><label for="ctl59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg299c305627644674b912e34a1b1a97cb'); ?> </label><input type="hidden" value="" id="name59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d" name="name59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d" /><input type="hidden" value="" id="hid59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d" name="hid59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d" /><select tabindex="1" id="ctl59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d" name="ctl59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d" class="form-control ctl59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($v724de5746c4344579bcc65a0c1f13188 == null || count($v724de5746c4344579bcc65a0c1f13188) == 0)

@else
    @foreach ($v724de5746c4344579bcc65a0c1f13188 as $item)
<option value="{!! $item["fl070afcffd48244e69022d4797ca75733"] !!}">{!! $item["fl0c7586107c9443f8be389366c46668c2"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-4"><div class="form-group"><label for="ctlf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg45e15a4acf6c4f70a8be3a6b0dce1671'); ?> </label><input type="hidden" value="" id="namef7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d" name="namef7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d" /><input type="hidden" value="" id="hidf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d" name="hidf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d" /><select tabindex="2" id="ctlf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d" name="ctlf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d" class="form-control ctlf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($vd180d5810a054e659544d398d79cdcab == null || count($vd180d5810a054e659544d398d79cdcab) == 0)

@else
    @foreach ($vd180d5810a054e659544d398d79cdcab as $item)
<option value="{!! $item["fl62a454af701541e9a08ecdda674f51e2"] !!}">{!! $item["fld5cc19ea9c9d4277a74c8f260d29cc25"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-3"><button tabindex="28" type="submit" id="ctl3f4c37c6271849e1afdcbaa396e78f3f_1495db41b4c84fbf8dbf012ab9de7e4d" name="ctl3f4c37c6271849e1afdcbaa396e78f3f_1495db41b4c84fbf8dbf012ab9de7e4d" class="btn btn-default" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7944980fefd04578a55d6306133c453b'); ?></button></div></div></form><div class="ov01e2546237c34bbe8bbb11c279340855" style="display:none;background-color:rgba(255,255,255,0.5);"></div><div class="lo01e2546237c34bbe8bbb11c279340855" style="display:none"><i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom" style="color:blue"></i></div>
<div class="modal fade" id="mdl01e2546237c34bbe8bbb11c279340855Captcha" tabindex="-1" role="dialog" aria-labelledby="mdlLabel01e2546237c34bbe8bbb11c279340855Captcha">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose01e2546237c34bbe8bbb11c279340855Captcha" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel01e2546237c34bbe8bbb11c279340855Captcha">[[00000000-0000-0000-0000-000000000000]]</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose01e2546237c34bbe8bbb11c279340855Captcha" data-dismiss="modal">[[00000000-0000-0000-0000-000000000000]]</button>
      </div>
    </div>
  </div>
</div>
  
@endsection
@section('nuevoregistro')
<form method="POST" enctype="multipart/form-data" id="frm1d83539ff85f42adb5d4449c0899e3df"><input type="hidden" name="hid1d83539ff85f42adb5d4449c0899e3df" id="hid1d83539ff85f42adb5d4449c0899e3df" value="1d83539ff85f42adb5d4449c0899e3df" />{!! csrf_field() !!}<div class="row"><div class="col-md-12"><button tabindex="1" type="submit" id="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" name="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" class="alta btn" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></button></div></div></form>
<div class="modal fade" id="mdlf1993afe941f491085df1663e98bf04b" tabindex="-1" role="dialog" aria-labelledby="mdlLabelf1993afe941f491085df1663e98bf04b">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClosef1993afe941f491085df1663e98bf04b" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabelf1993afe941f491085df1663e98bf04b"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg299c305627644674b912e34a1b1a97cb'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifrf1993afe941f491085df1663e98bf04b"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClosef1993afe941f491085df1663e98bf04b" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/css/jquery.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/css/responsive.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/css/dataTables.bootstrap4.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/css/responsive.bootstrap4.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.css" /><style type="text/css">

</style>
@endsection
@section('scripts')
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/jquery.dataTables.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/dataTables.responsive.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/dataTables.bootstrap4.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/responsive.bootstrap4.min.js" ></script><script type="text/javascript">$.fn.dataTable.ext.errMode=function(e,settings,techNote,message){console.log(message);};dtea54df4ad16745bda417718574be30a2=false;relea54df4ad16745bda417718574be30a2=false;totea54df4ad16745bda417718574be30a2={!! str_replace("{Extra}","",$vea54df4ad16745bda417718574be30a2Total) !!};var tbObjea54df4ad16745bda417718574be30a2;$(function(){tbObjea54df4ad16745bda417718574be30a2=$('#tbea54df4ad16745bda417718574be30a2').DataTable({'drawCallback':function(settings){},columnDefs:[{targets:2,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="$(\'#ifrb0bb6d150ed54118ab5441fbce1e0df6\').attr(\'src\',\'<?php echo URL::to("/") ?>/perfilForm/'+encodeURIComponent(row.fl070afcffd48244e69022d4797ca75733 == '' ? '' : row.fl070afcffd48244e69022d4797ca75733)+'\');$(\'#mdlb0bb6d150ed54118ab5441fbce1e0df6\').modal(\'show\');"><img src="data:image/x-png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAAA+VJREFUWIXFl21MG3Ucx7+9u/a4apNG9gjJXhSJGbM1rFHIiGuhxZDAEh/ADVMjJvrCzGwqcW9MeIEvjBm6V2bzhbMuZt3GtmIM05aY+vCqLh0sjI6u9GgZRSfEIvbpWnrnC1xlQNv/tUa/L+9+9/18/v/k/rkD/uco5AwbjUalTqd7T6VSxYrNiaLIOxyOr0k6GTkCBr1+uaWlRb3faCw6d9vvz9TX1x8bHBz8VE5/0bx59OjKxMSE9NXIiFQqiURC6u/vHyXppUjhJ4eGNEqlkkg2l8tBEAQWANrb2x+qSOA+nGVZIvj6WCwWXSaTuWkxm2+WJVAJPJlMcpAkH0PTdaAog6WtLSVLoBL4wsICNBpNM8dx2nWXq9paWzM9PT10SYFK4JG5ebx6PgKqdj9lMreC47j8PYVCoVxaXEyYTKb827dJoBJ4OHIXL9p5xPY8A5emG1FxG0zmVqjV6vwMRVEsTdPBrq4u9SaBUnAhnYZWq93yHj8bweEvZrFSe3BttZk47BkrQqvbcdBkfkACkrQrlUodAf4+CY1Go/IJg2H52PHj6kKvmpBO4+fr19HX14eNgjwfRu+Xc3k4nfgN4QSDhPIRMKtJvC5egE4Vw48/fI94IpGlgCvfeTy9eQGbzXai5cCBD2tqaraEA4BWq8VTTU2oqqp64HqID+OlAnAA0C76EF+l8ZrWiz1MTPKMuX1jHs+T959n1nZEEpqam9HY2FhQYKsEZ3jYzs8XhS9LDwM0cPb3RunQr59Mr4fnBcpJMBjCy45oaTgASszgsbkL01eunmvY2EN0FG/MnWAINkcUfxDC981+fnvy6qlNcKCMHZgOBPHKxV+IV76Pt09NOk89XqhP1g7M3Y3Kgjfw9qlJ58cF4bIEYrEY3vrsJyI4LWVhDJ+N3yoBlyUwMjKCdzvqULsyXhJ+KHsNTbtXvSS9xALz81GwKgYfPA2wK3xB+LOiC+fef4O0lkwgEomgTqdbg1DA6Q4We9Pjm+DPiS5c/qifGE4sMDo6iqmpW0in0wAAhgLsHcBu8V4e/rzkxrBMOLHADZ8PXq8XZ86cRjKZ/Efi8C4YFHfwAsZwaegd2XAigZmZGaQFAQCwEI1iePgScrkcAoEAXN9cwwnDn7h48u2y4ADBQeR2u7G0tASGYVC9bTtSyRTGx2/AarWit/dI2WBigUAggJ07dmBvQwM6Ozuh1+srhsoSGBgYQHV19b8KXR8KAGiazqkKfIiUA6dpGizLCiSzDADE43GX2+2+J0rSzmw2Kxu4MX6/X+A4zkkym/857e7uflTFMFYAdJF5omQEIXTZ6fy20p7/JH8B35D5JVEPO54AAAAASUVORK5CYII=" /></a>';}},{targets:3,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="location=\'<?php echo URL::to("/") ?>/perfilMenu/'+encodeURIComponent(row.fl070afcffd48244e69022d4797ca75733 == '' ? '' : row.fl070afcffd48244e69022d4797ca75733)+'/0\';"><img src="data:image/pjpeg;base64,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" /></a>';}},],autoWidth:false,processing:true,serverSide:true,searching:false,responsive:true,pagingType:'full_numbers',language:{processing:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5f91e3098ee74310b3d96087e7895256'); ?>'+'',emptyTable:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg53a001ed5802492dbd17759a893862a7'); ?>'+'',lengthMenu:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg787a0a3e158a4492b11380b709d0d9a3'); ?>'+'',info:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16bdfb61f662468d8f80e80bd3b8b1f6'); ?>'+'',infoEmpty:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2646df37ab049a9aea0ee0eb8d99d0e'); ?>'+'',paginate:{first:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg673755107d9e4f5cb0eef6837c91b302'); ?>'+'',last:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50b13adc5284e92844239ca59bf38e5'); ?>'+'',next:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6d4792f9962a46f2b37bbf9af604eda9'); ?>'+'',previous:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9d046e3adb7647fc95991757861b6f28'); ?>'+''},},'lengthMenu': [ [10,20,50,100], [10,20,50,100] ],ajax: function(data, callback, settings) {var info=$('#tbea54df4ad16745bda417718574be30a2').DataTable().page.info();var order=$('#tbea54df4ad16745bda417718574be30a2').DataTable().order();var orderby='-';switch(order[0][0]){}orderea54df4ad16745bda417718574be30a2=order;orderbyea54df4ad16745bda417718574be30a2=orderby;pageea54df4ad16745bda417718574be30a2=(info.page + 1);pagesizeea54df4ad16745bda417718574be30a2=info.length;if(relea54df4ad16745bda417718574be30a2){$.ajax({url:getUrlea54df4ad16745bda417718574be30a2Count(),async:false,success:function(res){totea54df4ad16745bda417718574be30a2=res;}});}$.get(getUrlea54df4ad16745bda417718574be30a2(),function(res) {callback({recordsTotal:totea54df4ad16745bda417718574be30a2,recordsFiltered:totea54df4ad16745bda417718574be30a2,data: res});});}});});var orderbyea54df4ad16745bda417718574be30a2;var orderea54df4ad16745bda417718574be30a2;var pageea54df4ad16745bda417718574be30a2;var pagesizeea54df4ad16745bda417718574be30a2;function getUrlea54df4ad16745bda417718574be30a2Count(){urlpath=('{!! str_replace("{Extra}","",$vea54df4ad16745bda417718574be30a2Ajax) !!}').replace('d1f2d9029cda4a078d86938214048578','d1f2d9029cda4a078d86938214048578Count');urlpath=urlpath.replace('/{page}','');urlpath=urlpath.replace('/{pagesize}','');urlpath=urlpath.replace('/{orderColumn}','');urlpath=urlpath.replace('/{orderType}','');return urlpath;}function getUrlea54df4ad16745bda417718574be30a2(){urlpath='{!! str_replace("{Extra}","",$vea54df4ad16745bda417718574be30a2Ajax) !!}';urlpath=urlpath.replace('{page}',pageea54df4ad16745bda417718574be30a2);if(dtea54df4ad16745bda417718574be30a2){urlpath=urlpath.replace('{pagesize}',10000);dtea54df4ad16745bda417718574be30a2=false;}else{urlpath=urlpath.replace('{pagesize}',pagesizeea54df4ad16745bda417718574be30a2);}urlpath=urlpath.replace('{orderColumn}',orderbyea54df4ad16745bda417718574be30a2);urlpath=urlpath.replace('{orderType}',orderea54df4ad16745bda417718574be30a2[0][1].toUpperCase());return urlpath;}</script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/src/extra/validator/customvalidators.js" ></script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew1495db41b4c84fbf8dbf012ab9de7e4d=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();function validFunc1495db41b4c84fbf8dbf012ab9de7e4d(){if ($('.isNumber').length>0){$('.isNumber').each(function(){$(this).val($(this).val().replace(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgMoneySymbol'); ?>'+'','').replace(new RegExp(monThousands,'g'),''));});}$('#frm1495db41b4c84fbf8dbf012ab9de7e4d').parsley().destroy();$('#frm1495db41b4c84fbf8dbf012ab9de7e4d').parsley();Parsley.on('field:validated',function(fieldInstance){if(fieldInstance.$element.is(":hidden")&&!fieldInstance.$element.hasClass("autoCompleteSelect")){fieldInstance._ui.$errorsWrapper.css('display','none');fieldInstance.validationResult=true;return true;}});var validated=$('#frm1495db41b4c84fbf8dbf012ab9de7e4d').parsley().validate();return validated;}function errFunc1495db41b4c84fbf8dbf012ab9de7e4d(){if ($('.isMoney').length>0){$('.isMoney').maskMoney('mask');}}var alreadySended01e2546237c34bbe8bbb11c279340855=false;$('#ctl3f4c37c6271849e1afdcbaa396e78f3f_1495db41b4c84fbf8dbf012ab9de7e4d').click(function(){validated=validFunc1495db41b4c84fbf8dbf012ab9de7e4d();if (!validated){errFunc1495db41b4c84fbf8dbf012ab9de7e4d();}else{console.log(alreadySended01e2546237c34bbe8bbb11c279340855);if(alreadySended01e2546237c34bbe8bbb11c279340855){return false;}alreadySended01e2546237c34bbe8bbb11c279340855=true;$('#ctl3f4c37c6271849e1afdcbaa396e78f3f_1495db41b4c84fbf8dbf012ab9de7e4d').attr('disabled','disabled');$('.ov01e2546237c34bbe8bbb11c279340855').css('top','0px');$('.ov01e2546237c34bbe8bbb11c279340855').css('left','0px');$('.ov01e2546237c34bbe8bbb11c279340855').css('position','fixed');$('.ov01e2546237c34bbe8bbb11c279340855').css('z-index','100000');$('.ov01e2546237c34bbe8bbb11c279340855').css('height','100%');$('.ov01e2546237c34bbe8bbb11c279340855').css('width','100%');$('.ov01e2546237c34bbe8bbb11c279340855').show();$('.lo01e2546237c34bbe8bbb11c279340855').css('top','50%');$('.lo01e2546237c34bbe8bbb11c279340855').css('left','50%');$('.lo01e2546237c34bbe8bbb11c279340855').css('position','fixed');$('.lo01e2546237c34bbe8bbb11c279340855').css('z-index','100001');$('.lo01e2546237c34bbe8bbb11c279340855').show();$('.lo01e2546237c34bbe8bbb11c279340855').css('margin-left','-16px');$('.lo01e2546237c34bbe8bbb11c279340855').css('margin-top','-16px');if (window.FormData){formdata=new FormData($('#frm1495db41b4c84fbf8dbf012ab9de7e4d')[0]);formdata.append('ctl3f4c37c6271849e1afdcbaa396e78f3f_1495db41b4c84fbf8dbf012ab9de7e4d','1');if(fromButton!=''){formdata.append(fromButton,'1');}$.ajax({url:'{!! Request::fullUrl() !!}',type:'POST',data:formdata,success:function(data,textStatus,jqXHR){$('#ctl3f4c37c6271849e1afdcbaa396e78f3f_1495db41b4c84fbf8dbf012ab9de7e4d').removeAttr('disabled');$('.ov01e2546237c34bbe8bbb11c279340855').hide();$('.lo01e2546237c34bbe8bbb11c279340855').hide();if (data=='NotExists'){alreadySended01e2546237c34bbe8bbb11c279340855=false;}if (data=='AlreadyExists'){alreadySended01e2546237c34bbe8bbb11c279340855=false;}if (data=='InvalidCaptcha'){alreadySended01e2546237c34bbe8bbb11c279340855=false;$('#mdl01e2546237c34bbe8bbb11c279340855Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/menuGrid/'+encodeURIComponent('{!! \Route::current()->parameter("t") !!}' == '' ? '-' : '{!! \Route::current()->parameter("t") !!}')+'';},processData:false,contentType:false});}else{var  iframeId='unique'+(new Date().getTime());var iframe=$('<iframe src="javascript:false;" name="'+iframeId+'" />');iframe.hide();$('#frm1495db41b4c84fbf8dbf012ab9de7e4d').attr('target',iframeId);$('#frm1495db41b4c84fbf8dbf012ab9de7e4d').attr('action','{!! Request::fullUrl() !!}');iframe.appendTo('body');iframe.load(function(e){$('#ctl3f4c37c6271849e1afdcbaa396e78f3f_1495db41b4c84fbf8dbf012ab9de7e4d').removeAttr('disabled');$('.ov01e2546237c34bbe8bbb11c279340855').hide();$('.lo01e2546237c34bbe8bbb11c279340855').hide();var doc=getDoc01e2546237c34bbe8bbb11c279340855(iframe[0]);var docRoot=doc.body?doc.body:doc.documentElement;var data = docRoot.innerHTML;if (data=='AlreadyExists'){}if (data=='InvalidCaptcha'){$('#mdl01e2546237c34bbe8bbb11c279340855Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/menuGrid/'+encodeURIComponent('{!! \Route::current()->parameter("t") !!}' == '' ? '-' : '{!! \Route::current()->parameter("t") !!}')+'';});$('#frm1495db41b4c84fbf8dbf012ab9de7e4d').submit();}}return false;});function getDoc01e2546237c34bbe8bbb11c279340855(frame) {var doc=null;try {if (frame.contentWindow){doc = frame.contentWindow.document;}} catch(err) {}if (doc){return doc;}try {doc = frame.contentDocument ? frame.contentDocument : frame.document;} catch(err) {doc = frame.document;}return doc;}$('#name59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d').val($('#ctl59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d option:selected').text());$('#ctl59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d').change(function(){$('#name59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d').val($('#ctl59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d option:selected').text());$('#hid59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d').val($('#ctl59d9f671dd2a4f4593b62d681ebc0981_1495db41b4c84fbf8dbf012ab9de7e4d').val());});$('#namef7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d').val($('#ctlf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d option:selected').text());$('#ctlf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d').change(function(){$('#namef7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d').val($('#ctlf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d option:selected').text());$('#hidf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d').val($('#ctlf7b8aa4429fe4ad382494802a7fbd287_1495db41b4c84fbf8dbf012ab9de7e4d').val());});</script><script type="text/javascript">var fromButton='';var isNew1d83539ff85f42adb5d4449c0899e3df=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df').click(function(){$('#ifrf1993afe941f491085df1663e98bf04b').attr('src','<?php echo URL::to("/") ?>/perfilForm/0');$('#mdlf1993afe941f491085df1663e98bf04b').modal('show');return false;});</script>
@endsection
