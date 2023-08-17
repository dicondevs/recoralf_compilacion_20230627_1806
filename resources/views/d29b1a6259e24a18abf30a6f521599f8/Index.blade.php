@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
<table id="tb1447968abc224051bfd879206d0cb62f" data-paging="true" data-ordering="true" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th data-visible="true" data-width="200px" data-data="fla58c0435f5d3420399ecf4e8f2cf55f1" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgeb135ebe852640b0a8e09f7e423cfade'); ?></th>
<th data-visible="true" data-width="200px" data-data="fld5cc19ea9c9d4277a74c8f260d29cc25" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb4b532b80c2b4f8eaa09453371b2c94d'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl82a4ca6f54514dad9a137816ddcaa489" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5c87e158b3ee4b0cbdce9485facb3ec6'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl321116e6328e48f7b8f7cd9d274e9911" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga09d3cea66d44dd4868cb2a531bf7d8c'); ?></th>
<th data-visible="true" data-width="200px" data-data="flc38a91e3b79c465bbd30d7cb6cee7a41" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgaf0bade9884945e0b59e36bae08dbdaf'); ?></th>
<th data-visible="false" data-width="200px" data-data="flfa25ee818fc0479a9275e022591c3a2f" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="fl62a454af701541e9a08ecdda674f51e2" data-orderable="false" data-class="">
</th>
<th data-visible="true" data-width="{Width}px" data-data="fla58c0435f5d3420399ecf4e8f2cf55f1" data-orderable="false">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?>
</th>
</tr>
</thead>
<tbody>
</tbody>
</table>

<div class="modal fade" id="mdl16aff3187b88435f8a6371a7300bae4e" tabindex="-1" role="dialog" aria-labelledby="mdlLabel16aff3187b88435f8a6371a7300bae4e">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose16aff3187b88435f8a6371a7300bae4e" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel16aff3187b88435f8a6371a7300bae4e"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifr16aff3187b88435f8a6371a7300bae4e"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose16aff3187b88435f8a6371a7300bae4e" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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

@if ($va8369652b8224b24be74855c5420d80f == null || count($va8369652b8224b24be74855c5420d80f) == 0)

@else
    @foreach ($va8369652b8224b24be74855c5420d80f as $item)
{!! $item["flf910c387adfc4f8396804c4a557fc8be"] !!}

    @endforeach
@endif


@endsection
@section('footer')

@endsection
@section('formbusqueda')

@endsection
@section('nuevoregistro')
<form method="POST" enctype="multipart/form-data" id="frm1d83539ff85f42adb5d4449c0899e3df"><input type="hidden" name="hid1d83539ff85f42adb5d4449c0899e3df" id="hid1d83539ff85f42adb5d4449c0899e3df" value="1d83539ff85f42adb5d4449c0899e3df" />{!! csrf_field() !!}<div class="row"><div class="col-md-12"><button tabindex="1" type="submit" id="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" name="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" class="alta btn" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></button></div></div></form>
<div class="modal fade" id="mdl0450e20d00c14c3eb6f1aabf8ed86179" tabindex="-1" role="dialog" aria-labelledby="mdlLabel0450e20d00c14c3eb6f1aabf8ed86179">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose0450e20d00c14c3eb6f1aabf8ed86179" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel0450e20d00c14c3eb6f1aabf8ed86179"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifr0450e20d00c14c3eb6f1aabf8ed86179"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose0450e20d00c14c3eb6f1aabf8ed86179" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/jquery.dataTables.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/dataTables.responsive.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/dataTables.bootstrap4.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/responsive.bootstrap4.min.js" ></script><script type="text/javascript">$.fn.dataTable.ext.errMode=function(e,settings,techNote,message){console.log(message);};dt1447968abc224051bfd879206d0cb62f=false;rel1447968abc224051bfd879206d0cb62f=false;tot1447968abc224051bfd879206d0cb62f={!! str_replace("{Extra}","",$v1447968abc224051bfd879206d0cb62fTotal) !!};var tbObj1447968abc224051bfd879206d0cb62f;$(function(){tbObj1447968abc224051bfd879206d0cb62f=$('#tb1447968abc224051bfd879206d0cb62f').DataTable({'drawCallback':function(settings){},columnDefs:[{targets:7,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="$(\'#ifr16aff3187b88435f8a6371a7300bae4e\').attr(\'src\',\'<?php echo URL::to("/") ?>/menuForm/'+encodeURIComponent(row.fl62a454af701541e9a08ecdda674f51e2 == '' ? '' : row.fl62a454af701541e9a08ecdda674f51e2)+'\');$(\'#mdl16aff3187b88435f8a6371a7300bae4e\').modal(\'show\');"><img src="data:image/x-png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAAA+VJREFUWIXFl21MG3Ucx7+9u/a4apNG9gjJXhSJGbM1rFHIiGuhxZDAEh/ADVMjJvrCzGwqcW9MeIEvjBm6V2bzhbMuZt3GtmIM05aY+vCqLh0sjI6u9GgZRSfEIvbpWnrnC1xlQNv/tUa/L+9+9/18/v/k/rkD/uco5AwbjUalTqd7T6VSxYrNiaLIOxyOr0k6GTkCBr1+uaWlRb3faCw6d9vvz9TX1x8bHBz8VE5/0bx59OjKxMSE9NXIiFQqiURC6u/vHyXppUjhJ4eGNEqlkkg2l8tBEAQWANrb2x+qSOA+nGVZIvj6WCwWXSaTuWkxm2+WJVAJPJlMcpAkH0PTdaAog6WtLSVLoBL4wsICNBpNM8dx2nWXq9paWzM9PT10SYFK4JG5ebx6PgKqdj9lMreC47j8PYVCoVxaXEyYTKb827dJoBJ4OHIXL9p5xPY8A5emG1FxG0zmVqjV6vwMRVEsTdPBrq4u9SaBUnAhnYZWq93yHj8bweEvZrFSe3BttZk47BkrQqvbcdBkfkACkrQrlUodAf4+CY1Go/IJg2H52PHj6kKvmpBO4+fr19HX14eNgjwfRu+Xc3k4nfgN4QSDhPIRMKtJvC5egE4Vw48/fI94IpGlgCvfeTy9eQGbzXai5cCBD2tqaraEA4BWq8VTTU2oqqp64HqID+OlAnAA0C76EF+l8ZrWiz1MTPKMuX1jHs+T959n1nZEEpqam9HY2FhQYKsEZ3jYzs8XhS9LDwM0cPb3RunQr59Mr4fnBcpJMBjCy45oaTgASszgsbkL01eunmvY2EN0FG/MnWAINkcUfxDC981+fnvy6qlNcKCMHZgOBPHKxV+IV76Pt09NOk89XqhP1g7M3Y3Kgjfw9qlJ58cF4bIEYrEY3vrsJyI4LWVhDJ+N3yoBlyUwMjKCdzvqULsyXhJ+KHsNTbtXvSS9xALz81GwKgYfPA2wK3xB+LOiC+fef4O0lkwgEomgTqdbg1DA6Q4We9Pjm+DPiS5c/qifGE4sMDo6iqmpW0in0wAAhgLsHcBu8V4e/rzkxrBMOLHADZ8PXq8XZ86cRjKZ/Efi8C4YFHfwAsZwaegd2XAigZmZGaQFAQCwEI1iePgScrkcAoEAXN9cwwnDn7h48u2y4ADBQeR2u7G0tASGYVC9bTtSyRTGx2/AarWit/dI2WBigUAggJ07dmBvQwM6Ozuh1+srhsoSGBgYQHV19b8KXR8KAGiazqkKfIiUA6dpGizLCiSzDADE43GX2+2+J0rSzmw2Kxu4MX6/X+A4zkkym/857e7uflTFMFYAdJF5omQEIXTZ6fy20p7/JH8B35D5JVEPO54AAAAASUVORK5CYII=" /></a>';}},],autoWidth:false,processing:true,serverSide:true,searching:false,responsive:true,pagingType:'full_numbers',language:{processing:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5f91e3098ee74310b3d96087e7895256'); ?>'+'',emptyTable:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg53a001ed5802492dbd17759a893862a7'); ?>'+'',lengthMenu:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg787a0a3e158a4492b11380b709d0d9a3'); ?>'+'',info:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16bdfb61f662468d8f80e80bd3b8b1f6'); ?>'+'',infoEmpty:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2646df37ab049a9aea0ee0eb8d99d0e'); ?>'+'',paginate:{first:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg673755107d9e4f5cb0eef6837c91b302'); ?>'+'',last:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50b13adc5284e92844239ca59bf38e5'); ?>'+'',next:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6d4792f9962a46f2b37bbf9af604eda9'); ?>'+'',previous:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9d046e3adb7647fc95991757861b6f28'); ?>'+''},},'lengthMenu': [ [10,20,50,100], [10,20,50,100] ],ajax: function(data, callback, settings) {var info=$('#tb1447968abc224051bfd879206d0cb62f').DataTable().page.info();var order=$('#tb1447968abc224051bfd879206d0cb62f').DataTable().order();var orderby='-';switch(order[0][0]){}order1447968abc224051bfd879206d0cb62f=order;orderby1447968abc224051bfd879206d0cb62f=orderby;page1447968abc224051bfd879206d0cb62f=(info.page + 1);pagesize1447968abc224051bfd879206d0cb62f=info.length;if(rel1447968abc224051bfd879206d0cb62f){$.ajax({url:getUrl1447968abc224051bfd879206d0cb62fCount(),async:false,success:function(res){tot1447968abc224051bfd879206d0cb62f=res;}});}$.get(getUrl1447968abc224051bfd879206d0cb62f(),function(res) {callback({recordsTotal:tot1447968abc224051bfd879206d0cb62f,recordsFiltered:tot1447968abc224051bfd879206d0cb62f,data: res});});}});});var orderby1447968abc224051bfd879206d0cb62f;var order1447968abc224051bfd879206d0cb62f;var page1447968abc224051bfd879206d0cb62f;var pagesize1447968abc224051bfd879206d0cb62f;function getUrl1447968abc224051bfd879206d0cb62fCount(){urlpath=('{!! str_replace("{Extra}","",$v1447968abc224051bfd879206d0cb62fAjax) !!}').replace('3fe306b72357482f944c8144f1783915','3fe306b72357482f944c8144f1783915Count');urlpath=urlpath.replace('/{page}','');urlpath=urlpath.replace('/{pagesize}','');urlpath=urlpath.replace('/{orderColumn}','');urlpath=urlpath.replace('/{orderType}','');return urlpath;}function getUrl1447968abc224051bfd879206d0cb62f(){urlpath='{!! str_replace("{Extra}","",$v1447968abc224051bfd879206d0cb62fAjax) !!}';urlpath=urlpath.replace('{page}',page1447968abc224051bfd879206d0cb62f);if(dt1447968abc224051bfd879206d0cb62f){urlpath=urlpath.replace('{pagesize}',10000);dt1447968abc224051bfd879206d0cb62f=false;}else{urlpath=urlpath.replace('{pagesize}',pagesize1447968abc224051bfd879206d0cb62f);}urlpath=urlpath.replace('{orderColumn}',orderby1447968abc224051bfd879206d0cb62f);urlpath=urlpath.replace('{orderType}',order1447968abc224051bfd879206d0cb62f[0][1].toUpperCase());return urlpath;}</script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew1d83539ff85f42adb5d4449c0899e3df=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df').click(function(){$('#ifr0450e20d00c14c3eb6f1aabf8ed86179').attr('src','<?php echo URL::to("/") ?>/menuForm/0');$('#mdl0450e20d00c14c3eb6f1aabf8ed86179').modal('show');return false;});</script>
@endsection
