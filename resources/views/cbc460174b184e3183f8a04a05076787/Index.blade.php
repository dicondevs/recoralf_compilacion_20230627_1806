@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
<div class="box box-info">
    <div class="box-header ui-sortable-handle" style="cursor: move;">
        <div class="row">
            <div class="col-lg-12">
             
              
            </div>
        </div>
    </div>
                            
                            
                 
    
  
    <div class="box-body">
                    <div class="table-responsive no-padding">

    {!! str_replace("{Extra}","",$v520d233cb92b46fd882feac1efc1eb30) !!}

   <tbody class="ctla5f75a61cc2f41e3ae01a602cf8c5601">
@if ($v2457b7f084a54553b567410f3d6ad7b2 == null || count($v2457b7f084a54553b567410f3d6ad7b2) == 0)

@else
    @foreach ($v2457b7f084a54553b567410f3d6ad7b2 as $item)
{!! $item["fleb5bf57c038144d283aaec74ff8b1310"] !!}

    @endforeach
@endif

</tbody>
    
     </tbody></table>
                </div>
        <div class="box-footer clearfix">
                        <div class="row"><div class="col-md-6"><nav><ul data-id="ul07035f51936848fcbf4bffa3cc70eac2"  class="pagination" >{!! str_replace("{Extra}","",$v07035f51936848fcbf4bffa3cc70eac2) !!}</ul></nav></div><div class="col-md-4" id="totalText07035f51936848fcbf4bffa3cc70eac2">1 de 200 registros</div><div class="col-md-2" style="display:none;" ><select data-id="cmbOrder07035f51936848fcbf4bffa3cc70eac2" class="form-control" ><option value="-|-"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9e21373bc88541cb9e55b08992d3a0b0'); ?></option></select></div><div class="col-md-2"><select data-id="cmb07035f51936848fcbf4bffa3cc70eac2" class="form-control" ><option value="10" >10</option><option value="20" >20</option><option value="50" >50</option><option value="100" >100</option><option value="0" >0</option></select></div></div>
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

@if ($ve8925e1dc3fc4fa69ab38afdadac35d8 == null || count($ve8925e1dc3fc4fa69ab38afdadac35d8) == 0)

@else
    @foreach ($ve8925e1dc3fc4fa69ab38afdadac35d8 as $item)
{!! $item["flf910c387adfc4f8396804c4a557fc8be"] !!}

    @endforeach
@endif


@endsection
@section('footer')

@endsection
@section('formbusqueda')
<form method="POST" enctype="multipart/form-data" id="frmff3fdec3cccb42c2b1899c5cf35c1e33"><input type="hidden" name="hidff3fdec3cccb42c2b1899c5cf35c1e33" id="hidff3fdec3cccb42c2b1899c5cf35c1e33" value="ff3fdec3cccb42c2b1899c5cf35c1e33" />{!! csrf_field() !!}<div class="row"><div class="col-md-2"><div class="form-group"><label for="ctl48bd46807c70413a9a6ee30efc4ea9fa_ff3fdec3cccb42c2b1899c5cf35c1e33"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg39cc58adb2d2457cac8046e1aca821e1'); ?> </label><input oninvalid="this.setCustomValidity('')"  type="number" step="1"  tabindex="1" id="ctl48bd46807c70413a9a6ee30efc4ea9fa_ff3fdec3cccb42c2b1899c5cf35c1e33" name="ctl48bd46807c70413a9a6ee30efc4ea9fa_ff3fdec3cccb42c2b1899c5cf35c1e33" class="isNumber form-control"  /></div></div><div class="col-md-2"><div class="form-group"><label for="ctl178684d6d66f405bab445bcb2053deca_ff3fdec3cccb42c2b1899c5cf35c1e33"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2535b5b59b045c1b7d2307a28250b09'); ?> </label><input type="text" tabindex="2" id="ctl178684d6d66f405bab445bcb2053deca_ff3fdec3cccb42c2b1899c5cf35c1e33" name="ctl178684d6d66f405bab445bcb2053deca_ff3fdec3cccb42c2b1899c5cf35c1e33" class="form-control"  /></div></div><div class="col-md-2"><div class="form-group"><label for="ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg745b1477b553429c8e6b06e17647b7ec'); ?> </label><input type="hidden" value="" id="nameee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33" name="nameee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33" /><input type="hidden" value="" id="hidee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33" name="hidee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33" /><select tabindex="3" id="ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33" name="ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33" class="form-control ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($v9f0cd5a341744b939041e0484375719a == null || count($v9f0cd5a341744b939041e0484375719a) == 0)

@else
    @foreach ($v9f0cd5a341744b939041e0484375719a as $item)
<option value="{!! $item["fldf916fe90fb041509c32bcec85fb81da"] !!}">{!! $item["fl612167a26162462a8c0cfa013f926228"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-2"><div class="form-group"><label for="ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7e33ddaab425456d8757aaed2eb49e96'); ?> </label><input type="hidden" value="" id="name78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33" name="name78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33" /><input type="hidden" value="" id="hid78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33" name="hid78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33" /><select tabindex="4" id="ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33" name="ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33" class="form-control ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33" ></select></div></div><div class="col-md-2"><div class="form-group"><label for="ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6e2e48a6cb2043658d61726417f8c6a1'); ?> </label><input type="hidden" value="" id="name631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33" name="name631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33" /><input type="hidden" value="" id="hid631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33" name="hid631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33" /><select tabindex="5" id="ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33" name="ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33" class="form-control ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($v5f0909f6994b4717b4644c1d7679447e == null || count($v5f0909f6994b4717b4644c1d7679447e) == 0)

@else
    @foreach ($v5f0909f6994b4717b4644c1d7679447e as $item)
<option value="{!! $item["fl36412fbdccc24ca69d92061a72dd3d88"] !!}">{!! $item["fl4c8c7e0f915840d8ac378d60fa63660a"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-2"><div class="form-group"><label for="ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg501a3d0918a4451aafc1b1f33b20298e'); ?> </label><input type="hidden" value="" id="name93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33" name="name93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33" /><input type="hidden" value="" id="hid93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33" name="hid93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33" /><select tabindex="6" id="ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33" name="ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33" class="form-control ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($v0808b7023c1b4f72825d5771c7e80a88 == null || count($v0808b7023c1b4f72825d5771c7e80a88) == 0)

@else
    @foreach ($v0808b7023c1b4f72825d5771c7e80a88 as $item)
<option value="{!! $item["fl36412fbdccc24ca69d92061a72dd3d88"] !!}">{!! $item["fl4c8c7e0f915840d8ac378d60fa63660a"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-2"><div class="form-group"><label for="ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbeeb4af96a8a4cae8bdda1920e120cb1'); ?> </label><input type="hidden" value="" id="name69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33" name="name69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33" /><input type="hidden" value="" id="hid69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33" name="hid69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33" /><select tabindex="7" id="ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33" name="ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33" class="form-control ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($ve366d029182d4a45ae4f172b427cbe1a == null || count($ve366d029182d4a45ae4f172b427cbe1a) == 0)

@else
    @foreach ($ve366d029182d4a45ae4f172b427cbe1a as $item)
<option value="{!! $item["flf8a1d5202fb546e88fc20116fc658896"] !!}">{!! $item["fl027a19cd5af54e5f8ff059c056ff3331"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-8"></div><div class="col-md-2"><button tabindex="8" type="submit" id="ctl8c85bbebc56641c783799f73abd05075_ff3fdec3cccb42c2b1899c5cf35c1e33" name="ctl8c85bbebc56641c783799f73abd05075_ff3fdec3cccb42c2b1899c5cf35c1e33" class="btn btn-default" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9de03f0b3c0f47acb79e80b1ae0707a7'); ?></button></div></div></form>
@endsection
@section('nuevoregistro')
<form method="POST" enctype="multipart/form-data" id="frm3799fa8c0bfa4831bae7e15e3e2481cc"><input type="hidden" name="hid3799fa8c0bfa4831bae7e15e3e2481cc" id="hid3799fa8c0bfa4831bae7e15e3e2481cc" value="3799fa8c0bfa4831bae7e15e3e2481cc" />{!! csrf_field() !!}<div class="row"><div class="col-md-12"><button tabindex="1" type="submit" id="ctl299d63993c6e4976a547d09f0bc448ba_3799fa8c0bfa4831bae7e15e3e2481cc" name="ctl299d63993c6e4976a547d09f0bc448ba_3799fa8c0bfa4831bae7e15e3e2481cc" class="alta btn" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg46e1f1b20f52427b991bf7582e95cda7'); ?></button></div></div></form>
<div class="modal fade" id="mdled18703faed6496294f5a72bc30cf77c" tabindex="-1" role="dialog" aria-labelledby="mdlLabeled18703faed6496294f5a72bc30cf77c">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnCloseed18703faed6496294f5a72bc30cf77c" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabeled18703faed6496294f5a72bc30cf77c"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg46e1f1b20f52427b991bf7582e95cda7'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifred18703faed6496294f5a72bc30cf77c"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnCloseed18703faed6496294f5a72bc30cf77c" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script>
@endsection
@section('scripts')
<script type="text/javascript">function chg07035f51936848fcbf4bffa3cc70eac2(size,total,current){$('#totalText07035f51936848fcbf4bffa3cc70eac2').html(((current*size) > total ? total : (current*size))+' de '+total+' registros');if(Math.ceil(total/size)<current){location='{!! str_replace("{Extra}","",$v07035f51936848fcbf4bffa3cc70eac2Link) !!}'.replace('{pagenumber}',Math.ceil(total/size)).replace('{pagesize}',size).replace('{orderColumn}',$('*[data-id="cmbOrder07035f51936848fcbf4bffa3cc70eac2"]').val().split('|')[0]).replace('{orderType}',$('*[data-id="cmbOrder07035f51936848fcbf4bffa3cc70eac2"]').val().split('|')[1]);}else{location='{!! str_replace("{Extra}","",$v07035f51936848fcbf4bffa3cc70eac2Link) !!}'.replace('{pagenumber}',current).replace('{pagesize}',size).replace('{orderColumn}',$('*[data-id="cmbOrder07035f51936848fcbf4bffa3cc70eac2"]').val().split('|')[0]).replace('{orderType}',$('*[data-id="cmbOrder07035f51936848fcbf4bffa3cc70eac2"]').val().split('|')[1]);}}var cur07035f51936848fcbf4bffa3cc70eac2=1;$(function(){$('*[data-id="cmb07035f51936848fcbf4bffa3cc70eac2"]').change(function(){chg07035f51936848fcbf4bffa3cc70eac2($(this).val(),{!! str_replace("{Extra}","",$v07035f51936848fcbf4bffa3cc70eac2Total) !!},{!! str_replace("{Extra}","",$v07035f51936848fcbf4bffa3cc70eac2Actual) !!});});$('*[data-id="cmb07035f51936848fcbf4bffa3cc70eac2"]').val({!! str_replace("{Extra}","",$v07035f51936848fcbf4bffa3cc70eac2Current) !!});$('*[data-id="cmbOrder07035f51936848fcbf4bffa3cc70eac2"]').change(function(){chg07035f51936848fcbf4bffa3cc70eac2($('*[data-id="cmb07035f51936848fcbf4bffa3cc70eac2"]').val(),{!! str_replace("{Extra}","",$v07035f51936848fcbf4bffa3cc70eac2Total) !!},{!! str_replace("{Extra}","",$v07035f51936848fcbf4bffa3cc70eac2Actual) !!});});if($('*[data-id="cmbOrder07035f51936848fcbf4bffa3cc70eac2"] option[value="{!! str_replace("{Extra}","",$v07035f51936848fcbf4bffa3cc70eac2Order) !!}"]').length > 0){$('*[data-id="cmbOrder07035f51936848fcbf4bffa3cc70eac2"]').val('{!! str_replace("{Extra}","",$v07035f51936848fcbf4bffa3cc70eac2Order) !!}');}});</script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNewff3fdec3cccb42c2b1899c5cf35c1e33=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();if('{!! \Route::current()->parameter("codigo") !!}'!='-'){$('#ctl48bd46807c70413a9a6ee30efc4ea9fa_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("codigo") !!}');}if('{!! \Route::current()->parameter("productor") !!}'!='-'){$('#ctl178684d6d66f405bab445bcb2053deca_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("productor") !!}');$('#ctl178684d6d66f405bab445bcb2053deca_ff3fdec3cccb42c2b1899c5cf35c1e33').change();}if('{!! \Route::current()->parameter("centrotrabajo") !!}'!='-'){if ($('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="'+'{!! \Route::current()->parameter("centrotrabajo") !!}'+'"]').length>0){$('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("centrotrabajo") !!}');}$('#nameee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#hidee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("centrotrabajo") !!}');if ($('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33 option').length>0){$('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').change();$('#hidee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("centrotrabajo") !!}');}if('{!! \Route::current()->parameter("centrotrabajo") !!}'==''&&$('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="ff3fdec3cccb42c2b1899c5cf35c1e33"]').length>0){$('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val('ff3fdec3cccb42c2b1899c5cf35c1e33');$('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').change();}}if('{!! \Route::current()->parameter("centroacopio") !!}'!='-'){if ($('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="'+'{!! \Route::current()->parameter("centroacopio") !!}'+'"]').length>0){$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("centroacopio") !!}');}$('#name78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#hid78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("centroacopio") !!}');if ($('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33 option').length>0){$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').change();$('#hid78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("centroacopio") !!}');}if('{!! \Route::current()->parameter("centroacopio") !!}'==''&&$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="ff3fdec3cccb42c2b1899c5cf35c1e33"]').length>0){$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val('ff3fdec3cccb42c2b1899c5cf35c1e33');$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').change();}}if('{!! \Route::current()->parameter("tamanoproductor") !!}'!='-'){if ($('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="'+'{!! \Route::current()->parameter("tamanoproductor") !!}'+'"]').length>0){$('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("tamanoproductor") !!}');}$('#name631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#hid631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("tamanoproductor") !!}');if ($('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33 option').length>0){$('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').change();$('#hid631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("tamanoproductor") !!}');}if('{!! \Route::current()->parameter("tamanoproductor") !!}'==''&&$('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="ff3fdec3cccb42c2b1899c5cf35c1e33"]').length>0){$('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val('ff3fdec3cccb42c2b1899c5cf35c1e33');$('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').change();}}if('{!! \Route::current()->parameter("tipoleche") !!}'!='-'){if ($('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="'+'{!! \Route::current()->parameter("tipoleche") !!}'+'"]').length>0){$('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("tipoleche") !!}');}$('#name93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#hid93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("tipoleche") !!}');if ($('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33 option').length>0){$('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').change();$('#hid93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("tipoleche") !!}');}if('{!! \Route::current()->parameter("tipoleche") !!}'==''&&$('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="ff3fdec3cccb42c2b1899c5cf35c1e33"]').length>0){$('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val('ff3fdec3cccb42c2b1899c5cf35c1e33');$('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').change();}}if('{!! \Route::current()->parameter("estatus") !!}'!='-'){if ($('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="'+'{!! \Route::current()->parameter("estatus") !!}'+'"]').length>0){$('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("estatus") !!}');}$('#name69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#hid69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("estatus") !!}');if ($('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33 option').length>0){$('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').change();$('#hid69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val('{!! \Route::current()->parameter("estatus") !!}');}if('{!! \Route::current()->parameter("estatus") !!}'==''&&$('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="ff3fdec3cccb42c2b1899c5cf35c1e33"]').length>0){$('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val('ff3fdec3cccb42c2b1899c5cf35c1e33');$('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').change();}}$('#ctl8c85bbebc56641c783799f73abd05075_ff3fdec3cccb42c2b1899c5cf35c1e33').click(function(){location='<?php echo URL::to("/") ?>/productoresGrid/'+encodeURIComponent(($('#ctl48bd46807c70413a9a6ee30efc4ea9fa_ff3fdec3cccb42c2b1899c5cf35c1e33').val() == '' ? '-' : $('#ctl48bd46807c70413a9a6ee30efc4ea9fa_ff3fdec3cccb42c2b1899c5cf35c1e33').val()))+'/'+encodeURIComponent(($('#ctl178684d6d66f405bab445bcb2053deca_ff3fdec3cccb42c2b1899c5cf35c1e33').val() == '' ? '-' : $('#ctl178684d6d66f405bab445bcb2053deca_ff3fdec3cccb42c2b1899c5cf35c1e33').val()))+'/'+encodeURIComponent(($('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val() == '' ? '-' : $('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val()))+'/'+encodeURIComponent(($('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val() == '' ? '-' : $('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val()))+'/'+encodeURIComponent(($('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val() == '' ? '-' : $('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val()))+'/'+encodeURIComponent(($('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val() == '' ? '-' : $('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val()))+'/'+encodeURIComponent(($('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val() == '' ? '-' : $('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val()))+'/1/'+encodeURIComponent('{!! \Route::current()->parameter("count") !!}' == '' ? '-' : '{!! \Route::current()->parameter("count") !!}')+'/'+encodeURIComponent('{!! \Route::current()->parameter("titulo") !!}' == '' ? '-' : '{!! \Route::current()->parameter("titulo") !!}')+'';return false;});$('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').change(function(){console.log('Lista Centros de Acopio');$('#div78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').show();$('#div78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').css('width',$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').outerWidth(true)+'px');$('#div78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').css('margin-top',-$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').outerHeight(true)+'px');$('#div78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').css('height',$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').outerHeight(true)+'px');$('#div78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').css('line-height',$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').outerHeight(true)+'px');$.ajax({async:false,url:'{!! str_replace("{Extra}","",$v0fd03293293f41f280a549c232cecb45Ajax) !!}'.replace('{page}','0').replace('{pagesize}','0').replace('{orderColumn}','-').replace('{orderType}','-'),error:function(jqXHR, exception){$('#div78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').hide();},error:function(errormessage){$('#div78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').hide();htmlOption='';htmlOption+='<option value="">'+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?>'+'</option>';if($('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').length>0){$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').html(htmlOption);$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').change();}else{$('.ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').html(htmlOption);$('.ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').change();}},success:function(result){$('#div78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').hide();htmlOption='';htmlOption+='<option value="">'+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?>'+'</option>';$.each(result,function(index){htmlOption+='<option value="'+result[index].fld6ec044255824ee89f9baf63b219b766+'">'+result[index].flcb6074d137d34615807b330f8a90bcae+'</option>';});if($('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').length>0){$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').html(htmlOption);if ($('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33 option[value="'+$('#hid78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val()+'"]').length > 0){$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#hid78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val());}$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').change();}else{$('.ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').html(htmlOption);$.each($('.ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33'),function(){id=$(this).attr('id').replace('ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33_','');valor=$('#hid78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33_'+id).val();$(this).val(valor);});}}});});$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').parent().append('<div id="div78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33" style="display:none;text-align:center;position:absolute;background-color:#FFF;opacity:0.7;"><img src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///5AA/+TC/qxC/pAA/7pi/siC/s+S/iH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==" /></div>');$('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').change();$('#ctl48bd46807c70413a9a6ee30efc4ea9fa_ff3fdec3cccb42c2b1899c5cf35c1e33').change(function(){if(parseFloat($(this).val())>parseFloat($(this).attr('max'))){$(this).val($(this).attr('max'));}if(parseFloat($(this).val())<parseFloat($(this).attr('min'))){$(this).val($(this).attr('min'));}});$('#ctl48bd46807c70413a9a6ee30efc4ea9fa_ff3fdec3cccb42c2b1899c5cf35c1e33').keypress(function(evt){var charCode=(evt.which)?evt.which:event.keyCode;if(charCode==46){if(!($(this).indexOf('.')>-1)){return true;}}if(charCode>31&&(charCode<48||charCode>57)){return false;}return true;});$('#nameee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').change(function(){$('#nameee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#hidee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctlee2eba3f950143ab833007d599a1665c_ff3fdec3cccb42c2b1899c5cf35c1e33').val());});$('#name78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').change(function(){$('#name78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#hid78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl78a9fb35d67e457f97a0b7bff98f2fa7_ff3fdec3cccb42c2b1899c5cf35c1e33').val());});$('#name631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').change(function(){$('#name631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#hid631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl631c0ca1510e4f41930f2d32a4e4e86d_ff3fdec3cccb42c2b1899c5cf35c1e33').val());});$('#name93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').change(function(){$('#name93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#hid93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl93d31273097949fd8df281842c37ae02_ff3fdec3cccb42c2b1899c5cf35c1e33').val());});$('#name69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').change(function(){$('#name69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33 option:selected').text());$('#hid69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val($('#ctl69b2dfe13f10447e88b962545b0cef21_ff3fdec3cccb42c2b1899c5cf35c1e33').val());});</script><script type="text/javascript">var fromButton='';var isNew3799fa8c0bfa4831bae7e15e3e2481cc=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctl299d63993c6e4976a547d09f0bc448ba_3799fa8c0bfa4831bae7e15e3e2481cc').click(function(){$('#ifred18703faed6496294f5a72bc30cf77c').attr('src','<?php echo URL::to("/") ?>/productorForm/0/-');$('#mdled18703faed6496294f5a72bc30cf77c').modal('show');return false;});</script>
@endsection