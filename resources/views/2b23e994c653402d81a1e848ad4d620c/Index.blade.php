@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
<table id="tb123ba2e643984264bdc21553a4fbccf6" data-paging="true" data-ordering="true" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th data-visible="true" data-width="200px" data-data="fl7509fd5af7ad49768872e6975fa38e06" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg55b7df7507404c3695fcd985de873e01'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl8a7cefb0fc06420ab2ed65ff03186bf4" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb4b532b80c2b4f8eaa09453371b2c94d'); ?></th>
<th data-visible="true" data-width="200px" data-data="flad2aef9103b542fa982133c8a770b809" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg93b71af9353a415e8d21820943c0de5a'); ?></th>
<th data-visible="true" data-width="200px" data-data="flf980b4c6b5b34399bdd09a678e5f1845" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgfc58cf985e1a4ec79e4d00d590517961'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl15fd490db5eb41d58666174bf95ff20b" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6cd8ef19abeb43ca8096a247100a311d'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl2a804360e1144fb8961cf7db9795f599" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg97c7b275b2c2440184635d5bf75cf548'); ?></th>
<th data-visible="false" data-width="200px" data-data="fl4a77a76e36d0448392ae75bb5122c1ed" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="fl62a7f8b9b8d64542ba3e5b9dd38f90ad" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="flb6a9c9c0cc7e43399fe8a1aa490f03ab" data-orderable="false" data-class="">
</th>
<th data-visible="false" data-width="200px" data-data="flf0faf16607dd4080a1331ea60819ed47" data-orderable="false" data-class="">
</th>
<th data-visible="true" data-width="{Width}px" data-data="fl4a77a76e36d0448392ae75bb5122c1ed" data-orderable="false">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?>
</th>
</tr>
</thead>
<tbody>
</tbody>
</table>

<div class="modal fade" id="mdl06ce92bc945c4191b4190f1ef3b9c0fe" tabindex="-1" role="dialog" aria-labelledby="mdlLabel06ce92bc945c4191b4190f1ef3b9c0fe">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose06ce92bc945c4191b4190f1ef3b9c0fe" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel06ce92bc945c4191b4190f1ef3b9c0fe"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifr06ce92bc945c4191b4190f1ef3b9c0fe"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose06ce92bc945c4191b4190f1ef3b9c0fe" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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

@if ($vb7697704dd2d49a18c6c39a73ba364cc == null || count($vb7697704dd2d49a18c6c39a73ba364cc) == 0)

@else
    @foreach ($vb7697704dd2d49a18c6c39a73ba364cc as $item)
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
<div class="modal fade" id="mdlf4f4d07bc010481086b60286527d5c62" tabindex="-1" role="dialog" aria-labelledby="mdlLabelf4f4d07bc010481086b60286527d5c62">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClosef4f4d07bc010481086b60286527d5c62" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabelf4f4d07bc010481086b60286527d5c62"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifrf4f4d07bc010481086b60286527d5c62"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClosef4f4d07bc010481086b60286527d5c62" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/jquery.dataTables.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/dataTables.responsive.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/dataTables.bootstrap4.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/responsive.bootstrap4.min.js" ></script><script type="text/javascript">$.fn.dataTable.ext.errMode=function(e,settings,techNote,message){console.log(message);};dt123ba2e643984264bdc21553a4fbccf6=false;rel123ba2e643984264bdc21553a4fbccf6=false;tot123ba2e643984264bdc21553a4fbccf6={!! str_replace("{Extra}","",$v123ba2e643984264bdc21553a4fbccf6Total) !!};var tbObj123ba2e643984264bdc21553a4fbccf6;$(function(){tbObj123ba2e643984264bdc21553a4fbccf6=$('#tb123ba2e643984264bdc21553a4fbccf6').DataTable({'drawCallback':function(settings){},columnDefs:[{targets:10,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="$(\'#ifr06ce92bc945c4191b4190f1ef3b9c0fe\').attr(\'src\',\'<?php echo URL::to("/") ?>/choferForm/'+encodeURIComponent(row.flf0faf16607dd4080a1331ea60819ed47 == '' ? '' : row.flf0faf16607dd4080a1331ea60819ed47)+'\');$(\'#mdl06ce92bc945c4191b4190f1ef3b9c0fe\').modal(\'show\');"><img src="data:image/x-png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAAA+VJREFUWIXFl21MG3Ucx7+9u/a4apNG9gjJXhSJGbM1rFHIiGuhxZDAEh/ADVMjJvrCzGwqcW9MeIEvjBm6V2bzhbMuZt3GtmIM05aY+vCqLh0sjI6u9GgZRSfEIvbpWnrnC1xlQNv/tUa/L+9+9/18/v/k/rkD/uco5AwbjUalTqd7T6VSxYrNiaLIOxyOr0k6GTkCBr1+uaWlRb3faCw6d9vvz9TX1x8bHBz8VE5/0bx59OjKxMSE9NXIiFQqiURC6u/vHyXppUjhJ4eGNEqlkkg2l8tBEAQWANrb2x+qSOA+nGVZIvj6WCwWXSaTuWkxm2+WJVAJPJlMcpAkH0PTdaAog6WtLSVLoBL4wsICNBpNM8dx2nWXq9paWzM9PT10SYFK4JG5ebx6PgKqdj9lMreC47j8PYVCoVxaXEyYTKb827dJoBJ4OHIXL9p5xPY8A5emG1FxG0zmVqjV6vwMRVEsTdPBrq4u9SaBUnAhnYZWq93yHj8bweEvZrFSe3BttZk47BkrQqvbcdBkfkACkrQrlUodAf4+CY1Go/IJg2H52PHj6kKvmpBO4+fr19HX14eNgjwfRu+Xc3k4nfgN4QSDhPIRMKtJvC5egE4Vw48/fI94IpGlgCvfeTy9eQGbzXai5cCBD2tqaraEA4BWq8VTTU2oqqp64HqID+OlAnAA0C76EF+l8ZrWiz1MTPKMuX1jHs+T959n1nZEEpqam9HY2FhQYKsEZ3jYzs8XhS9LDwM0cPb3RunQr59Mr4fnBcpJMBjCy45oaTgASszgsbkL01eunmvY2EN0FG/MnWAINkcUfxDC981+fnvy6qlNcKCMHZgOBPHKxV+IV76Pt09NOk89XqhP1g7M3Y3Kgjfw9qlJ58cF4bIEYrEY3vrsJyI4LWVhDJ+N3yoBlyUwMjKCdzvqULsyXhJ+KHsNTbtXvSS9xALz81GwKgYfPA2wK3xB+LOiC+fef4O0lkwgEomgTqdbg1DA6Q4We9Pjm+DPiS5c/qifGE4sMDo6iqmpW0in0wAAhgLsHcBu8V4e/rzkxrBMOLHADZ8PXq8XZ86cRjKZ/Efi8C4YFHfwAsZwaegd2XAigZmZGaQFAQCwEI1iePgScrkcAoEAXN9cwwnDn7h48u2y4ADBQeR2u7G0tASGYVC9bTtSyRTGx2/AarWit/dI2WBigUAggJ07dmBvQwM6Ozuh1+srhsoSGBgYQHV19b8KXR8KAGiazqkKfIiUA6dpGizLCiSzDADE43GX2+2+J0rSzmw2Kxu4MX6/X+A4zkkym/857e7uflTFMFYAdJF5omQEIXTZ6fy20p7/JH8B35D5JVEPO54AAAAASUVORK5CYII=" /></a>';}},],autoWidth:false,processing:true,serverSide:true,searching:false,responsive:true,pagingType:'full_numbers',language:{processing:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5f91e3098ee74310b3d96087e7895256'); ?>'+'',emptyTable:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg53a001ed5802492dbd17759a893862a7'); ?>'+'',lengthMenu:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg787a0a3e158a4492b11380b709d0d9a3'); ?>'+'',info:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16bdfb61f662468d8f80e80bd3b8b1f6'); ?>'+'',infoEmpty:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2646df37ab049a9aea0ee0eb8d99d0e'); ?>'+'',paginate:{first:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg673755107d9e4f5cb0eef6837c91b302'); ?>'+'',last:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50b13adc5284e92844239ca59bf38e5'); ?>'+'',next:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6d4792f9962a46f2b37bbf9af604eda9'); ?>'+'',previous:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9d046e3adb7647fc95991757861b6f28'); ?>'+''},},'lengthMenu': [ [10,20,50,100], [10,20,50,100] ],ajax: function(data, callback, settings) {var info=$('#tb123ba2e643984264bdc21553a4fbccf6').DataTable().page.info();var order=$('#tb123ba2e643984264bdc21553a4fbccf6').DataTable().order();var orderby='-';switch(order[0][0]){}order123ba2e643984264bdc21553a4fbccf6=order;orderby123ba2e643984264bdc21553a4fbccf6=orderby;page123ba2e643984264bdc21553a4fbccf6=(info.page + 1);pagesize123ba2e643984264bdc21553a4fbccf6=info.length;if(rel123ba2e643984264bdc21553a4fbccf6){$.ajax({url:getUrl123ba2e643984264bdc21553a4fbccf6Count(),async:false,success:function(res){tot123ba2e643984264bdc21553a4fbccf6=res;}});}$.get(getUrl123ba2e643984264bdc21553a4fbccf6(),function(res) {callback({recordsTotal:tot123ba2e643984264bdc21553a4fbccf6,recordsFiltered:tot123ba2e643984264bdc21553a4fbccf6,data: res});});}});});var orderby123ba2e643984264bdc21553a4fbccf6;var order123ba2e643984264bdc21553a4fbccf6;var page123ba2e643984264bdc21553a4fbccf6;var pagesize123ba2e643984264bdc21553a4fbccf6;function getUrl123ba2e643984264bdc21553a4fbccf6Count(){urlpath=('{!! str_replace("{Extra}","",$v123ba2e643984264bdc21553a4fbccf6Ajax) !!}').replace('ea0b74ab72a04e34aa10f369a5565537','ea0b74ab72a04e34aa10f369a5565537Count');urlpath=urlpath.replace('/{page}','');urlpath=urlpath.replace('/{pagesize}','');urlpath=urlpath.replace('/{orderColumn}','');urlpath=urlpath.replace('/{orderType}','');return urlpath;}function getUrl123ba2e643984264bdc21553a4fbccf6(){urlpath='{!! str_replace("{Extra}","",$v123ba2e643984264bdc21553a4fbccf6Ajax) !!}';urlpath=urlpath.replace('{page}',page123ba2e643984264bdc21553a4fbccf6);if(dt123ba2e643984264bdc21553a4fbccf6){urlpath=urlpath.replace('{pagesize}',10000);dt123ba2e643984264bdc21553a4fbccf6=false;}else{urlpath=urlpath.replace('{pagesize}',pagesize123ba2e643984264bdc21553a4fbccf6);}urlpath=urlpath.replace('{orderColumn}',orderby123ba2e643984264bdc21553a4fbccf6);urlpath=urlpath.replace('{orderType}',order123ba2e643984264bdc21553a4fbccf6[0][1].toUpperCase());return urlpath;}</script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew1d83539ff85f42adb5d4449c0899e3df=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df').click(function(){$('#ifrf4f4d07bc010481086b60286527d5c62').attr('src','<?php echo URL::to("/") ?>/choferForm/0');$('#mdlf4f4d07bc010481086b60286527d5c62').modal('show');return false;});</script>
@endsection
