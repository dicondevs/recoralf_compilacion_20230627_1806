@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
<table id="tb505876fc262a4cf4a8c0597cbbd4740e" data-paging="true" data-ordering="true" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th data-visible="true" data-width="200px" data-data="fl6836cc348e834ea3a63e6401f99ea491" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9afdef6278254095be063c7dbf6e5cff'); ?></th>
<th data-visible="true" data-width="200px" data-data="fleceb21f074054271864a254413280b43" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgef2960eb43c6421897322de014661835'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl9548975be9294c3b8cb7dd44b5c802c7" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgcd0ba0dce5bc4e07a4b9b15275483753'); ?></th>
<th data-visible="false" data-width="200px" data-data="flaf87761a57bb46919b3f6c3752d5746c" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgcd0ba0dce5bc4e07a4b9b15275483753'); ?></th>
<th data-visible="false" data-width="200px" data-data="fl9994a67fdf6e4b77a7e66311765e434c" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgef2960eb43c6421897322de014661835'); ?></th>
<th data-visible="false" data-width="200px" data-data="fl54a19e79999945e2b49a8a078915989a" data-orderable="false" data-class="">
</th>
<th data-visible="true" data-width="{Width}px" data-data="fl9548975be9294c3b8cb7dd44b5c802c7" data-orderable="false">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?>
</th>
</tr>
</thead>
<tbody>
</tbody>
</table>

<div class="modal fade" id="mdlc3c5be9315b44d069e726f0fa7dce6d0" tabindex="-1" role="dialog" aria-labelledby="mdlLabelc3c5be9315b44d069e726f0fa7dce6d0">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClosec3c5be9315b44d069e726f0fa7dce6d0" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabelc3c5be9315b44d069e726f0fa7dce6d0"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifrc3c5be9315b44d069e726f0fa7dce6d0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClosec3c5be9315b44d069e726f0fa7dce6d0" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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

@if ($v10e10de5df2f4354b2e376fdc6f717c0 == null || count($v10e10de5df2f4354b2e376fdc6f717c0) == 0)

@else
    @foreach ($v10e10de5df2f4354b2e376fdc6f717c0 as $item)
{!! $item["flf910c387adfc4f8396804c4a557fc8be"] !!}

    @endforeach
@endif


@endsection
@section('footer')

@endsection
@section('formbusqueda')
<form method="POST" enctype="multipart/form-data" id="frma99f16e2a80242f8ac76b63c4c58ef41"><input type="hidden" name="hida99f16e2a80242f8ac76b63c4c58ef41" id="hida99f16e2a80242f8ac76b63c4c58ef41" value="a99f16e2a80242f8ac76b63c4c58ef41" />{!! csrf_field() !!}<div class="row"><div class="col-md-3"><div class="form-group"><label for="ctl3607329572c440d9b68ef4a6c13f5921_a99f16e2a80242f8ac76b63c4c58ef41"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9afdef6278254095be063c7dbf6e5cff'); ?> </label><input type="text" tabindex="1" id="ctl3607329572c440d9b68ef4a6c13f5921_a99f16e2a80242f8ac76b63c4c58ef41" name="ctl3607329572c440d9b68ef4a6c13f5921_a99f16e2a80242f8ac76b63c4c58ef41" class="form-control"  /></div></div><div class="col-md-2"><input type="image" class="circle" id="ctlb24dc91fae244347aac31b01e90b710d_a99f16e2a80242f8ac76b63c4c58ef41" name="ctlb24dc91fae244347aac31b01e90b710d_a99f16e2a80242f8ac76b63c4c58ef41" src="data:image/pjpeg;base64,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" /></div></div></form>
@endsection
@section('nuevoregistro')
<form method="POST" enctype="multipart/form-data" id="frm1d83539ff85f42adb5d4449c0899e3df"><input type="hidden" name="hid1d83539ff85f42adb5d4449c0899e3df" id="hid1d83539ff85f42adb5d4449c0899e3df" value="1d83539ff85f42adb5d4449c0899e3df" />{!! csrf_field() !!}<div class="row"><div class="col-md-12"><button tabindex="1" type="submit" id="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" name="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" class="alta btn" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></button></div></div></form>
<div class="modal fade" id="mdl7433150d37e14f1aa47a5d7fd147fe2a" tabindex="-1" role="dialog" aria-labelledby="mdlLabel7433150d37e14f1aa47a5d7fd147fe2a">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose7433150d37e14f1aa47a5d7fd147fe2a" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel7433150d37e14f1aa47a5d7fd147fe2a"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifr7433150d37e14f1aa47a5d7fd147fe2a"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose7433150d37e14f1aa47a5d7fd147fe2a" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/jquery.dataTables.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/dataTables.responsive.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/dataTables.bootstrap4.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/responsive.bootstrap4.min.js" ></script><script type="text/javascript">$.fn.dataTable.ext.errMode=function(e,settings,techNote,message){console.log(message);};dt505876fc262a4cf4a8c0597cbbd4740e=false;rel505876fc262a4cf4a8c0597cbbd4740e=false;tot505876fc262a4cf4a8c0597cbbd4740e={!! str_replace("{Extra}","",$v505876fc262a4cf4a8c0597cbbd4740eTotal) !!};var tbObj505876fc262a4cf4a8c0597cbbd4740e;$(function(){tbObj505876fc262a4cf4a8c0597cbbd4740e=$('#tb505876fc262a4cf4a8c0597cbbd4740e').DataTable({'drawCallback':function(settings){},columnDefs:[{targets:6,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="$(\'#ifrc3c5be9315b44d069e726f0fa7dce6d0\').attr(\'src\',\'<?php echo URL::to("/") ?>/semanaForm/'+encodeURIComponent(row.fl54a19e79999945e2b49a8a078915989a == '' ? '' : row.fl54a19e79999945e2b49a8a078915989a)+'/-\');$(\'#mdlc3c5be9315b44d069e726f0fa7dce6d0\').modal(\'show\');"><img src="data:image/x-png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAAA+VJREFUWIXFl21MG3Ucx7+9u/a4apNG9gjJXhSJGbM1rFHIiGuhxZDAEh/ADVMjJvrCzGwqcW9MeIEvjBm6V2bzhbMuZt3GtmIM05aY+vCqLh0sjI6u9GgZRSfEIvbpWnrnC1xlQNv/tUa/L+9+9/18/v/k/rkD/uco5AwbjUalTqd7T6VSxYrNiaLIOxyOr0k6GTkCBr1+uaWlRb3faCw6d9vvz9TX1x8bHBz8VE5/0bx59OjKxMSE9NXIiFQqiURC6u/vHyXppUjhJ4eGNEqlkkg2l8tBEAQWANrb2x+qSOA+nGVZIvj6WCwWXSaTuWkxm2+WJVAJPJlMcpAkH0PTdaAog6WtLSVLoBL4wsICNBpNM8dx2nWXq9paWzM9PT10SYFK4JG5ebx6PgKqdj9lMreC47j8PYVCoVxaXEyYTKb827dJoBJ4OHIXL9p5xPY8A5emG1FxG0zmVqjV6vwMRVEsTdPBrq4u9SaBUnAhnYZWq93yHj8bweEvZrFSe3BttZk47BkrQqvbcdBkfkACkrQrlUodAf4+CY1Go/IJg2H52PHj6kKvmpBO4+fr19HX14eNgjwfRu+Xc3k4nfgN4QSDhPIRMKtJvC5egE4Vw48/fI94IpGlgCvfeTy9eQGbzXai5cCBD2tqaraEA4BWq8VTTU2oqqp64HqID+OlAnAA0C76EF+l8ZrWiz1MTPKMuX1jHs+T959n1nZEEpqam9HY2FhQYKsEZ3jYzs8XhS9LDwM0cPb3RunQr59Mr4fnBcpJMBjCy45oaTgASszgsbkL01eunmvY2EN0FG/MnWAINkcUfxDC981+fnvy6qlNcKCMHZgOBPHKxV+IV76Pt09NOk89XqhP1g7M3Y3Kgjfw9qlJ58cF4bIEYrEY3vrsJyI4LWVhDJ+N3yoBlyUwMjKCdzvqULsyXhJ+KHsNTbtXvSS9xALz81GwKgYfPA2wK3xB+LOiC+fef4O0lkwgEomgTqdbg1DA6Q4We9Pjm+DPiS5c/qifGE4sMDo6iqmpW0in0wAAhgLsHcBu8V4e/rzkxrBMOLHADZ8PXq8XZ86cRjKZ/Efi8C4YFHfwAsZwaegd2XAigZmZGaQFAQCwEI1iePgScrkcAoEAXN9cwwnDn7h48u2y4ADBQeR2u7G0tASGYVC9bTtSyRTGx2/AarWit/dI2WBigUAggJ07dmBvQwM6Ozuh1+srhsoSGBgYQHV19b8KXR8KAGiazqkKfIiUA6dpGizLCiSzDADE43GX2+2+J0rSzmw2Kxu4MX6/X+A4zkkym/857e7uflTFMFYAdJF5omQEIXTZ6fy20p7/JH8B35D5JVEPO54AAAAASUVORK5CYII=" /></a>';}},],autoWidth:false,processing:true,serverSide:true,searching:false,responsive:true,pagingType:'full_numbers',language:{processing:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5f91e3098ee74310b3d96087e7895256'); ?>'+'',emptyTable:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg53a001ed5802492dbd17759a893862a7'); ?>'+'',lengthMenu:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg787a0a3e158a4492b11380b709d0d9a3'); ?>'+'',info:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16bdfb61f662468d8f80e80bd3b8b1f6'); ?>'+'',infoEmpty:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2646df37ab049a9aea0ee0eb8d99d0e'); ?>'+'',paginate:{first:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg673755107d9e4f5cb0eef6837c91b302'); ?>'+'',last:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50b13adc5284e92844239ca59bf38e5'); ?>'+'',next:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6d4792f9962a46f2b37bbf9af604eda9'); ?>'+'',previous:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9d046e3adb7647fc95991757861b6f28'); ?>'+''},},'lengthMenu': [ [10,20,50,100], [10,20,50,100] ],ajax: function(data, callback, settings) {var info=$('#tb505876fc262a4cf4a8c0597cbbd4740e').DataTable().page.info();var order=$('#tb505876fc262a4cf4a8c0597cbbd4740e').DataTable().order();var orderby='-';switch(order[0][0]){}order505876fc262a4cf4a8c0597cbbd4740e=order;orderby505876fc262a4cf4a8c0597cbbd4740e=orderby;page505876fc262a4cf4a8c0597cbbd4740e=(info.page + 1);pagesize505876fc262a4cf4a8c0597cbbd4740e=info.length;if(rel505876fc262a4cf4a8c0597cbbd4740e){$.ajax({url:getUrl505876fc262a4cf4a8c0597cbbd4740eCount(),async:false,success:function(res){tot505876fc262a4cf4a8c0597cbbd4740e=res;}});}$.get(getUrl505876fc262a4cf4a8c0597cbbd4740e(),function(res) {callback({recordsTotal:tot505876fc262a4cf4a8c0597cbbd4740e,recordsFiltered:tot505876fc262a4cf4a8c0597cbbd4740e,data: res});});}});});var orderby505876fc262a4cf4a8c0597cbbd4740e;var order505876fc262a4cf4a8c0597cbbd4740e;var page505876fc262a4cf4a8c0597cbbd4740e;var pagesize505876fc262a4cf4a8c0597cbbd4740e;function getUrl505876fc262a4cf4a8c0597cbbd4740eCount(){urlpath=('{!! str_replace("{Extra}","",$v505876fc262a4cf4a8c0597cbbd4740eAjax) !!}').replace('f653797b67a241e98e0a363b26f2b0b4','f653797b67a241e98e0a363b26f2b0b4Count');urlpath=urlpath.replace('/{page}','');urlpath=urlpath.replace('/{pagesize}','');urlpath=urlpath.replace('/{orderColumn}','');urlpath=urlpath.replace('/{orderType}','');return urlpath;}function getUrl505876fc262a4cf4a8c0597cbbd4740e(){urlpath='{!! str_replace("{Extra}","",$v505876fc262a4cf4a8c0597cbbd4740eAjax) !!}';urlpath=urlpath.replace('{page}',page505876fc262a4cf4a8c0597cbbd4740e);if(dt505876fc262a4cf4a8c0597cbbd4740e){urlpath=urlpath.replace('{pagesize}',10000);dt505876fc262a4cf4a8c0597cbbd4740e=false;}else{urlpath=urlpath.replace('{pagesize}',pagesize505876fc262a4cf4a8c0597cbbd4740e);}urlpath=urlpath.replace('{orderColumn}',orderby505876fc262a4cf4a8c0597cbbd4740e);urlpath=urlpath.replace('{orderType}',order505876fc262a4cf4a8c0597cbbd4740e[0][1].toUpperCase());return urlpath;}</script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNewa99f16e2a80242f8ac76b63c4c58ef41=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();if('{!! \Route::current()->parameter("b") !!}'!='-'){$('#ctl3607329572c440d9b68ef4a6c13f5921_a99f16e2a80242f8ac76b63c4c58ef41').val('{!! \Route::current()->parameter("b") !!}');$('#ctl3607329572c440d9b68ef4a6c13f5921_a99f16e2a80242f8ac76b63c4c58ef41').change();}$('#ctlb24dc91fae244347aac31b01e90b710d_a99f16e2a80242f8ac76b63c4c58ef41').click(function(){location='<?php echo URL::to("/") ?>/semanasGrid/'+encodeURIComponent(($('#ctl3607329572c440d9b68ef4a6c13f5921_a99f16e2a80242f8ac76b63c4c58ef41').val() == '' ? '-' : $('#ctl3607329572c440d9b68ef4a6c13f5921_a99f16e2a80242f8ac76b63c4c58ef41').val()))+'/-/-/'+encodeURIComponent('{!! \Route::current()->parameter("t") !!}' == '' ? '-' : '{!! \Route::current()->parameter("t") !!}')+'';return false;});</script><script type="text/javascript">var fromButton='';var isNew1d83539ff85f42adb5d4449c0899e3df=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df').click(function(){$('#ifr7433150d37e14f1aa47a5d7fd147fe2a').attr('src','<?php echo URL::to("/") ?>/semanaForm/0/0');$('#mdl7433150d37e14f1aa47a5d7fd147fe2a').modal('show');return false;});</script>
@endsection
