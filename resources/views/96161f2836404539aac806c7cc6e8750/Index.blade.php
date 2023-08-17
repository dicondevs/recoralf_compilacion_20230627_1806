@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
<table id="tb93bc922499564b12b8d9ee66aef570b3" data-paging="true" data-ordering="true" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th data-visible="true" data-width="200px" data-data="fld95a933caf484a0781e006092fedeecc" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbeeb4af96a8a4cae8bdda1920e120cb1'); ?></th>
<th data-visible="true" data-width="200px" data-data="flea17abf4c1ee4f398e98e7007ea45675" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3ecb2a7d27bd445bbb2ddf735a7e74e1'); ?></th>
<th data-visible="false" data-width="200px" data-data="flaad0eb29cc58439abf6ef7b56863b2a2" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="fl50a776d322e147f58cef1065444d4994" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="fl0179af07461247b1b44e2433c3376cb4" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="flffbdabcb22584bf9a786b55c0aa13e59" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="fl3a4a429aa1554af1ad09550527c32990" data-orderable="false" data-class="">
</th>
<th data-visible="true" data-width="{Width}px" data-data="flaad0eb29cc58439abf6ef7b56863b2a2" data-orderable="false">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb888a749dd864d4c80534213173d18cf'); ?>
</th>
<th data-visible="true" data-width="{Width}px" data-data="flaad0eb29cc58439abf6ef7b56863b2a2" data-orderable="false">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?>
</th>
</tr>
</thead>
<tbody>
</tbody>
</table>

<div class="modal fade" id="mdl1a7bbefb9cd9402299675619152461ab" tabindex="-1" role="dialog" aria-labelledby="mdlLabel1a7bbefb9cd9402299675619152461ab">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose1a7bbefb9cd9402299675619152461ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel1a7bbefb9cd9402299675619152461ab"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifr1a7bbefb9cd9402299675619152461ab"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose1a7bbefb9cd9402299675619152461ab" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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
<form method="POST" enctype="multipart/form-data" id="frm8d619ddc976c4ff58669c8d69a56cf79"><input type="hidden" name="hid8d619ddc976c4ff58669c8d69a56cf79" id="hid8d619ddc976c4ff58669c8d69a56cf79" value="8d619ddc976c4ff58669c8d69a56cf79" />{!! csrf_field() !!}<div class="row"><div class="col-md-4"><div class="form-group"><label for="ctl77ae46d0e5b14bed8771d755541cdcce_8d619ddc976c4ff58669c8d69a56cf79"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb511fe0b98b44915bee0864037c0a0af'); ?> </label><input type="text" tabindex="1" id="ctl77ae46d0e5b14bed8771d755541cdcce_8d619ddc976c4ff58669c8d69a56cf79" name="ctl77ae46d0e5b14bed8771d755541cdcce_8d619ddc976c4ff58669c8d69a56cf79" readonly="readonly"  class="form-control"  /></div></div></div></form><span class="rec950fce59180245a9b60f39f96ee25cb3" style="display:none;">
@if ($vb53e650e4e254c1382963a3f411d2797 == null || count($vb53e650e4e254c1382963a3f411d2797) == 0)

@else
    @foreach ($vb53e650e4e254c1382963a3f411d2797 as $item)
<span class="rec0b2cd5b8287844eaa0d9e3de129b8094">{!! $item["fl0b2cd5b8287844eaa0d9e3de129b8094"] !!}</span>
    @endforeach
@endif

</span>
@endsection
@section('footer')

@endsection
@section('formbusqueda')

@if ($vb53e650e4e254c1382963a3f411d2797 == null || count($vb53e650e4e254c1382963a3f411d2797) == 0)

@else
    @foreach ($vb53e650e4e254c1382963a3f411d2797 as $item)
<div class="title">
<a href="/regionalgrid/{!! $item["fl547044ed2e314e8abe8913c8104b8426"] !!}/0/9">
<button type="button" class="btn btn-box-tool">
<i class="fa fa-reply"></i></button>
</a>
<H2>Administraci&#243;n de estados</H2>
</div>

    @endforeach
@endif


@endsection
@section('nuevoregistro')
<form method="POST" enctype="multipart/form-data" id="frm1d83539ff85f42adb5d4449c0899e3df"><input type="hidden" name="hid1d83539ff85f42adb5d4449c0899e3df" id="hid1d83539ff85f42adb5d4449c0899e3df" value="1d83539ff85f42adb5d4449c0899e3df" />{!! csrf_field() !!}<div class="row"><div class="col-md-12"><button tabindex="1" type="submit" id="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" name="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" class="alta btn" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></button></div></div></form>
<div class="modal fade" id="mdl40936831973f4c3b88a533f70c08fa58" tabindex="-1" role="dialog" aria-labelledby="mdlLabel40936831973f4c3b88a533f70c08fa58">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose40936831973f4c3b88a533f70c08fa58" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel40936831973f4c3b88a533f70c08fa58"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifr40936831973f4c3b88a533f70c08fa58"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose40936831973f4c3b88a533f70c08fa58" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/jquery.dataTables.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/dataTables.responsive.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/dataTables.bootstrap4.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/responsive.bootstrap4.min.js" ></script><script type="text/javascript">$.fn.dataTable.ext.errMode=function(e,settings,techNote,message){console.log(message);};dt93bc922499564b12b8d9ee66aef570b3=false;rel93bc922499564b12b8d9ee66aef570b3=false;tot93bc922499564b12b8d9ee66aef570b3={!! str_replace("{Extra}","",$v93bc922499564b12b8d9ee66aef570b3Total) !!};var tbObj93bc922499564b12b8d9ee66aef570b3;$(function(){tbObj93bc922499564b12b8d9ee66aef570b3=$('#tb93bc922499564b12b8d9ee66aef570b3').DataTable({'drawCallback':function(settings){},columnDefs:[{targets:7,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="location=\'<?php echo URL::to("/") ?>/centrosTrabajoGrid/'+encodeURIComponent(row.fl3a4a429aa1554af1ad09550527c32990 == '' ? '' : row.fl3a4a429aa1554af1ad09550527c32990)+'\';"><img src="data:image/x-png;base64,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" /></a>';}},{targets:8,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="$(\'#ifr1a7bbefb9cd9402299675619152461ab\').attr(\'src\',\'<?php echo URL::to("/") ?>/editarEstados/'+encodeURIComponent(row.fl3a4a429aa1554af1ad09550527c32990 == '' ? '' : row.fl3a4a429aa1554af1ad09550527c32990)+'\');$(\'#mdl1a7bbefb9cd9402299675619152461ab\').modal(\'show\');"><img src="data:image/x-png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAAA+VJREFUWIXFl21MG3Ucx7+9u/a4apNG9gjJXhSJGbM1rFHIiGuhxZDAEh/ADVMjJvrCzGwqcW9MeIEvjBm6V2bzhbMuZt3GtmIM05aY+vCqLh0sjI6u9GgZRSfEIvbpWnrnC1xlQNv/tUa/L+9+9/18/v/k/rkD/uco5AwbjUalTqd7T6VSxYrNiaLIOxyOr0k6GTkCBr1+uaWlRb3faCw6d9vvz9TX1x8bHBz8VE5/0bx59OjKxMSE9NXIiFQqiURC6u/vHyXppUjhJ4eGNEqlkkg2l8tBEAQWANrb2x+qSOA+nGVZIvj6WCwWXSaTuWkxm2+WJVAJPJlMcpAkH0PTdaAog6WtLSVLoBL4wsICNBpNM8dx2nWXq9paWzM9PT10SYFK4JG5ebx6PgKqdj9lMreC47j8PYVCoVxaXEyYTKb827dJoBJ4OHIXL9p5xPY8A5emG1FxG0zmVqjV6vwMRVEsTdPBrq4u9SaBUnAhnYZWq93yHj8bweEvZrFSe3BttZk47BkrQqvbcdBkfkACkrQrlUodAf4+CY1Go/IJg2H52PHj6kKvmpBO4+fr19HX14eNgjwfRu+Xc3k4nfgN4QSDhPIRMKtJvC5egE4Vw48/fI94IpGlgCvfeTy9eQGbzXai5cCBD2tqaraEA4BWq8VTTU2oqqp64HqID+OlAnAA0C76EF+l8ZrWiz1MTPKMuX1jHs+T959n1nZEEpqam9HY2FhQYKsEZ3jYzs8XhS9LDwM0cPb3RunQr59Mr4fnBcpJMBjCy45oaTgASszgsbkL01eunmvY2EN0FG/MnWAINkcUfxDC981+fnvy6qlNcKCMHZgOBPHKxV+IV76Pt09NOk89XqhP1g7M3Y3Kgjfw9qlJ58cF4bIEYrEY3vrsJyI4LWVhDJ+N3yoBlyUwMjKCdzvqULsyXhJ+KHsNTbtXvSS9xALz81GwKgYfPA2wK3xB+LOiC+fef4O0lkwgEomgTqdbg1DA6Q4We9Pjm+DPiS5c/qifGE4sMDo6iqmpW0in0wAAhgLsHcBu8V4e/rzkxrBMOLHADZ8PXq8XZ86cRjKZ/Efi8C4YFHfwAsZwaegd2XAigZmZGaQFAQCwEI1iePgScrkcAoEAXN9cwwnDn7h48u2y4ADBQeR2u7G0tASGYVC9bTtSyRTGx2/AarWit/dI2WBigUAggJ07dmBvQwM6Ozuh1+srhsoSGBgYQHV19b8KXR8KAGiazqkKfIiUA6dpGizLCiSzDADE43GX2+2+J0rSzmw2Kxu4MX6/X+A4zkkym/857e7uflTFMFYAdJF5omQEIXTZ6fy20p7/JH8B35D5JVEPO54AAAAASUVORK5CYII=" /></a>';}},],autoWidth:false,processing:true,serverSide:true,searching:false,responsive:true,pagingType:'full_numbers',language:{processing:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5f91e3098ee74310b3d96087e7895256'); ?>'+'',emptyTable:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg53a001ed5802492dbd17759a893862a7'); ?>'+'',lengthMenu:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg787a0a3e158a4492b11380b709d0d9a3'); ?>'+'',info:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16bdfb61f662468d8f80e80bd3b8b1f6'); ?>'+'',infoEmpty:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2646df37ab049a9aea0ee0eb8d99d0e'); ?>'+'',paginate:{first:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg673755107d9e4f5cb0eef6837c91b302'); ?>'+'',last:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50b13adc5284e92844239ca59bf38e5'); ?>'+'',next:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6d4792f9962a46f2b37bbf9af604eda9'); ?>'+'',previous:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9d046e3adb7647fc95991757861b6f28'); ?>'+''},},'lengthMenu': [ [10,20,50,100], [10,20,50,100] ],ajax: function(data, callback, settings) {var info=$('#tb93bc922499564b12b8d9ee66aef570b3').DataTable().page.info();var order=$('#tb93bc922499564b12b8d9ee66aef570b3').DataTable().order();var orderby='-';switch(order[0][0]){}order93bc922499564b12b8d9ee66aef570b3=order;orderby93bc922499564b12b8d9ee66aef570b3=orderby;page93bc922499564b12b8d9ee66aef570b3=(info.page + 1);pagesize93bc922499564b12b8d9ee66aef570b3=info.length;if(rel93bc922499564b12b8d9ee66aef570b3){$.ajax({url:getUrl93bc922499564b12b8d9ee66aef570b3Count(),async:false,success:function(res){tot93bc922499564b12b8d9ee66aef570b3=res;}});}$.get(getUrl93bc922499564b12b8d9ee66aef570b3(),function(res) {callback({recordsTotal:tot93bc922499564b12b8d9ee66aef570b3,recordsFiltered:tot93bc922499564b12b8d9ee66aef570b3,data: res});});}});});var orderby93bc922499564b12b8d9ee66aef570b3;var order93bc922499564b12b8d9ee66aef570b3;var page93bc922499564b12b8d9ee66aef570b3;var pagesize93bc922499564b12b8d9ee66aef570b3;function getUrl93bc922499564b12b8d9ee66aef570b3Count(){urlpath=('{!! str_replace("{Extra}","",$v93bc922499564b12b8d9ee66aef570b3Ajax) !!}').replace('9610894d477640eeb7d8beb0b86f7a72','9610894d477640eeb7d8beb0b86f7a72Count');urlpath=urlpath.replace('/{page}','');urlpath=urlpath.replace('/{pagesize}','');urlpath=urlpath.replace('/{orderColumn}','');urlpath=urlpath.replace('/{orderType}','');return urlpath;}function getUrl93bc922499564b12b8d9ee66aef570b3(){urlpath='{!! str_replace("{Extra}","",$v93bc922499564b12b8d9ee66aef570b3Ajax) !!}';urlpath=urlpath.replace('{page}',page93bc922499564b12b8d9ee66aef570b3);if(dt93bc922499564b12b8d9ee66aef570b3){urlpath=urlpath.replace('{pagesize}',10000);dt93bc922499564b12b8d9ee66aef570b3=false;}else{urlpath=urlpath.replace('{pagesize}',pagesize93bc922499564b12b8d9ee66aef570b3);}urlpath=urlpath.replace('{orderColumn}',orderby93bc922499564b12b8d9ee66aef570b3);urlpath=urlpath.replace('{orderType}',order93bc922499564b12b8d9ee66aef570b3[0][1].toUpperCase());return urlpath;}</script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew8d619ddc976c4ff58669c8d69a56cf79=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();if($('.rec950fce59180245a9b60f39f96ee25cb3').children().length>0){isNew8d619ddc976c4ff58669c8d69a56cf79=false;if($('.rec0b2cd5b8287844eaa0d9e3de129b8094').length>0){$('#ctl77ae46d0e5b14bed8771d755541cdcce_8d619ddc976c4ff58669c8d69a56cf79').val($('.rec0b2cd5b8287844eaa0d9e3de129b8094').html());$('#ctl77ae46d0e5b14bed8771d755541cdcce_8d619ddc976c4ff58669c8d69a56cf79').change();}}</script><script type="text/javascript">var fromButton='';var isNew1d83539ff85f42adb5d4449c0899e3df=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df').click(function(){$('#ifr40936831973f4c3b88a533f70c08fa58').attr('src','<?php echo URL::to("/") ?>/asignarEstadoRegion/'+encodeURIComponent('{!! \Route::current()->parameter("regiones") !!}' == '' ? '-' : '{!! \Route::current()->parameter("regiones") !!}')+'');$('#mdl40936831973f4c3b88a533f70c08fa58').modal('show');return false;});</script>
@endsection
