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
<table class="table table-hover clientes">
    {!! str_replace("{Extra}","",$v5cbe059215b6482c8054d39c2c4eda81) !!}

 <tbody class="ctl9b231a9a2a64407fb6654fedfdaae7f6">
@if ($veb1ccba0317e4134adb949fa68a53578 == null || count($veb1ccba0317e4134adb949fa68a53578) == 0)

@else
    @foreach ($veb1ccba0317e4134adb949fa68a53578 as $item)
{!! $item["fl720e5954d1a442e09d9b59ef996ae985"] !!}

    @endforeach
@endif

</tbody>
    
     </table>
                </div>
        <div class="box-footer clearfix">
                       <div class="row"><div class="col-md-6"><nav><ul data-id="ul3253ea2e034946eb838680708782f8cc"  class="pagination" >{!! str_replace("{Extra}","",$v3253ea2e034946eb838680708782f8cc) !!}</ul></nav></div><div class="col-md-4" id="totalText3253ea2e034946eb838680708782f8cc">1 de 200 registros</div><div class="col-md-2" style="display:none;" ><select data-id="cmbOrder3253ea2e034946eb838680708782f8cc" class="form-control" ><option value="-|-"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9e21373bc88541cb9e55b08992d3a0b0'); ?></option></select></div><div class="col-md-2"><select data-id="cmb3253ea2e034946eb838680708782f8cc" class="form-control" ><option value="10" >10</option><option value="20" >20</option><option value="50" >50</option><option value="100" >100</option><option value="0" >0</option></select></div></div>
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

@if ($v387a70e79818431baf6829182fb8d4ef == null || count($v387a70e79818431baf6829182fb8d4ef) == 0)

@else
    @foreach ($v387a70e79818431baf6829182fb8d4ef as $item)
{!! $item["flf910c387adfc4f8396804c4a557fc8be"] !!}

    @endforeach
@endif


@endsection
@section('footer')

@endsection
@section('formbusqueda')
<form method="POST" enctype="multipart/form-data" id="frm8832ac841f0d43f5bfad042194440bb9"><input type="hidden" name="hid8832ac841f0d43f5bfad042194440bb9" id="hid8832ac841f0d43f5bfad042194440bb9" value="8832ac841f0d43f5bfad042194440bb9" />{!! csrf_field() !!}<div class="row"><div class="col-md-3"><div class="form-group"><label for="ctl178684d6d66f405bab445bcb2053deca_8832ac841f0d43f5bfad042194440bb9"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2535b5b59b045c1b7d2307a28250b09'); ?> </label><input type="text" tabindex="1" id="ctl178684d6d66f405bab445bcb2053deca_8832ac841f0d43f5bfad042194440bb9" name="ctl178684d6d66f405bab445bcb2053deca_8832ac841f0d43f5bfad042194440bb9" class="form-control"  /></div></div><div class="col-md-2"><div class="form-group"><label for="ctl0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg15aaaea753fc485f8f75b36fe2f45d6b'); ?> </label><input type="hidden" value="" id="name0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9" name="name0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9" /><input type="hidden" value="" id="hid0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9" name="hid0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9" /><select tabindex="2" id="ctl0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9" name="ctl0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9" class="form-control autoCompleteSelect  ctl0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($v78f67fd204844d7db82b1df3826dcf4d == null || count($v78f67fd204844d7db82b1df3826dcf4d) == 0)

@else
    @foreach ($v78f67fd204844d7db82b1df3826dcf4d as $item)
<option value="{!! $item["fl54a19e79999945e2b49a8a078915989a"] !!}">{!! $item["fl6836cc348e834ea3a63e6401f99ea491"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-2"><div class="form-group"><label for="ctl93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg501a3d0918a4451aafc1b1f33b20298e'); ?> </label><input type="hidden" value="" id="name93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9" name="name93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9" /><input type="hidden" value="" id="hid93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9" name="hid93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9" /><select tabindex="3" id="ctl93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9" name="ctl93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9" class="form-control ctl93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($ve629324b842b4ad8831a9db90413582b == null || count($ve629324b842b4ad8831a9db90413582b) == 0)

@else
    @foreach ($ve629324b842b4ad8831a9db90413582b as $item)
<option value="{!! $item["fl36412fbdccc24ca69d92061a72dd3d88"] !!}">{!! $item["fl4c8c7e0f915840d8ac378d60fa63660a"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-2"><div class="form-group"><label for="ctld38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgef2960eb43c6421897322de014661835'); ?></label><div class="input-group date" id="dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9"><input autocomplete="false" type="text" tabindex="4" id="ctld38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9" name="ctld38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9" class="form-control"  /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div></div><input type="hidden" id="hidd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9" name="hidd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9" /></div><div class="col-md-2"><div class="form-group"><label for="ctl263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgcd0ba0dce5bc4e07a4b9b15275483753'); ?></label><div class="input-group date" id="dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9"><input autocomplete="false" type="text" tabindex="5" id="ctl263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9" name="ctl263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9" class="form-control"  /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div></div><input type="hidden" id="hid263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9" name="hid263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9" /></div><div class="col-md-2"><div class="form-group"><label for="ctlf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg745b1477b553429c8e6b06e17647b7ec'); ?> </label><input type="hidden" value="" id="namef629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9" name="namef629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9" /><input type="hidden" value="" id="hidf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9" name="hidf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9" /><select tabindex="2" id="ctlf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9" name="ctlf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9" class="form-control ctlf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($vb5103549474841d7b72a049be14b859b == null || count($vb5103549474841d7b72a049be14b859b) == 0)

@else
    @foreach ($vb5103549474841d7b72a049be14b859b as $item)
<option value="{!! $item["fl6db6fe0700a2492ab254232484650e02"] !!}">{!! $item["fl0a754e10e6774d44a950add92e1d71e4"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-2"><div class="form-group"><label for="ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7e33ddaab425456d8757aaed2eb49e96'); ?> </label><input type="hidden" value="" id="name3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9" name="name3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9" /><input type="hidden" value="" id="hid3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9" name="hid3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9" /><select tabindex="3" id="ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9" name="ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9" class="form-control ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9" ></select></div></div><div class="col-md-1"><button tabindex="8" type="submit" id="ctl8c85bbebc56641c783799f73abd05075_8832ac841f0d43f5bfad042194440bb9" name="ctl8c85bbebc56641c783799f73abd05075_8832ac841f0d43f5bfad042194440bb9" class="btn btn-default" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9de03f0b3c0f47acb79e80b1ae0707a7'); ?></button></div></div></form>
@endsection
@section('nuevoregistro')
<form method="POST" enctype="multipart/form-data" id="frm1d83539ff85f42adb5d4449c0899e3df"><input type="hidden" name="hid1d83539ff85f42adb5d4449c0899e3df" id="hid1d83539ff85f42adb5d4449c0899e3df" value="1d83539ff85f42adb5d4449c0899e3df" />{!! csrf_field() !!}<div class="row"><div class="col-md-12"><button tabindex="1" type="submit" id="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" name="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" class="alta btn" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></button></div></div></form>
<div class="modal fade" id="mdl5e04bf64d0f948a4a2efe8e4a045a7e6" tabindex="-1" role="dialog" aria-labelledby="mdlLabel5e04bf64d0f948a4a2efe8e4a045a7e6">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose5e04bf64d0f948a4a2efe8e4a045a7e6" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel5e04bf64d0f948a4a2efe8e4a045a7e6"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0" style="width:100%;height:500px;" id="ifr5e04bf64d0f948a4a2efe8e4a045a7e6"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose5e04bf64d0f948a4a2efe8e4a045a7e6" data-dismiss="modal"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439'); ?></button>
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
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/Choosen/chosen.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/BootStrapDatePicker/build/css/bootstrap-datetimepicker.min.css" />
@endsection
@section('scripts')
<script type="text/javascript">function chg3253ea2e034946eb838680708782f8cc(size,total,current){$('#totalText3253ea2e034946eb838680708782f8cc').html(((current*size) > total ? total : (current*size))+' de '+total+' registros');if(Math.ceil(total/size)<current){location='{!! str_replace("{Extra}","",$v3253ea2e034946eb838680708782f8ccLink) !!}'.replace('{pagenumber}',Math.ceil(total/size)).replace('{pagesize}',size).replace('{orderColumn}',$('*[data-id="cmbOrder3253ea2e034946eb838680708782f8cc"]').val().split('|')[0]).replace('{orderType}',$('*[data-id="cmbOrder3253ea2e034946eb838680708782f8cc"]').val().split('|')[1]);}else{location='{!! str_replace("{Extra}","",$v3253ea2e034946eb838680708782f8ccLink) !!}'.replace('{pagenumber}',current).replace('{pagesize}',size).replace('{orderColumn}',$('*[data-id="cmbOrder3253ea2e034946eb838680708782f8cc"]').val().split('|')[0]).replace('{orderType}',$('*[data-id="cmbOrder3253ea2e034946eb838680708782f8cc"]').val().split('|')[1]);}}var cur3253ea2e034946eb838680708782f8cc=1;$(function(){$('*[data-id="cmb3253ea2e034946eb838680708782f8cc"]').change(function(){chg3253ea2e034946eb838680708782f8cc($(this).val(),{!! str_replace("{Extra}","",$v3253ea2e034946eb838680708782f8ccTotal) !!},{!! str_replace("{Extra}","",$v3253ea2e034946eb838680708782f8ccActual) !!});});$('*[data-id="cmb3253ea2e034946eb838680708782f8cc"]').val({!! str_replace("{Extra}","",$v3253ea2e034946eb838680708782f8ccCurrent) !!});$('*[data-id="cmbOrder3253ea2e034946eb838680708782f8cc"]').change(function(){chg3253ea2e034946eb838680708782f8cc($('*[data-id="cmb3253ea2e034946eb838680708782f8cc"]').val(),{!! str_replace("{Extra}","",$v3253ea2e034946eb838680708782f8ccTotal) !!},{!! str_replace("{Extra}","",$v3253ea2e034946eb838680708782f8ccActual) !!});});if($('*[data-id="cmbOrder3253ea2e034946eb838680708782f8cc"] option[value="{!! str_replace("{Extra}","",$v3253ea2e034946eb838680708782f8ccOrder) !!}"]').length > 0){$('*[data-id="cmbOrder3253ea2e034946eb838680708782f8cc"]').val('{!! str_replace("{Extra}","",$v3253ea2e034946eb838680708782f8ccOrder) !!}');}});</script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Choosen/chosen.jquery.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Moment/moment-with-locales.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/BootStrapDatePicker/build/js/bootstrap-datetimepicker.min.js" ></script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew8832ac841f0d43f5bfad042194440bb9=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctlf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9').change(function(){console.log('Lista Centros de Acopio Recibas');$('#div3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').show();$('#div3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').css('width',$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').outerWidth(true)+'px');$('#div3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').css('margin-top',-$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').outerHeight(true)+'px');$('#div3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').css('height',$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').outerHeight(true)+'px');$('#div3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').css('line-height',$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').outerHeight(true)+'px');$.ajax({async:false,url:'{!! str_replace("{Extra}","",$v34dea539354d479394e3f52e84995097Ajax) !!}'.replace('{page}','0').replace('{pagesize}','0').replace('{orderColumn}','-').replace('{orderType}','-'),error:function(jqXHR, exception){$('#div3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').hide();},error:function(errormessage){$('#div3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').hide();htmlOption='';htmlOption+='<option value="">'+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?>'+'</option>';if($('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').length>0){$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').html(htmlOption);$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').change();}else{$('.ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').html(htmlOption);$('.ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').change();}},success:function(result){$('#div3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').hide();htmlOption='';htmlOption+='<option value="">'+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?>'+'</option>';$.each(result,function(index){htmlOption+='<option value="'+result[index].flbba5c31ef533494dbb886a074cfafa7a+'">'+result[index].fl97b9f7f523f14e849d80a350e2068e59+'</option>';});if($('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').length>0){$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').html(htmlOption);if ($('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9 option[value="'+$('#hid3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').val()+'"]').length > 0){$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').val($('#hid3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').val());}$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').change();}else{$('.ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').html(htmlOption);$.each($('.ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9'),function(){id=$(this).attr('id').replace('ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9_','');valor=$('#hid3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9_'+id).val();$(this).val(valor);});}}});});$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').parent().append('<div id="div3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9" style="display:none;text-align:center;position:absolute;background-color:#FFF;opacity:0.7;"><img src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///5AA/+TC/qxC/pAA/7pi/siC/s+S/iH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==" /></div>');$('#ctlf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9').change();$('#name0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9').val($('#ctl0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9 option:selected').text());$('#ctl0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9').change(function(){$('#name0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9').val($('#ctl0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9 option:selected').text());$('#hid0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9').val($('#ctl0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9').val());});$('#ctl0cdefc706f3d49ce9d3b43f7553ac7de_8832ac841f0d43f5bfad042194440bb9').chosen({no_results_text:'[[00000000-0000-0000-0000-000000000000]]'});$('#name93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9').val($('#ctl93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9 option:selected').text());$('#ctl93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9').change(function(){$('#name93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9').val($('#ctl93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9 option:selected').text());$('#hid93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9').val($('#ctl93d31273097949fd8df281842c37ae02_8832ac841f0d43f5bfad042194440bb9').val());});try{moment.locale((''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>'+'').substring(0,2));if($('#dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').length>0){if(false){$('#dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').find('.input-group-addon').hide();$('#dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').find('input').hide();}$('#dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').datetimepicker({inline:false,locale:(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>'+'').substring(0,2),format:'L',useCurrent:false,allowInputToggle:true,ignoreReadonly:false}).on('dp.change',function(e){$('#ctld38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').change();});if($('#hidd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').length>0&&$('#hidd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').val()!=''){var dt=moment($('#hidd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').val().split(' ')[0],(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase());if (!dt.isValid()){dt=moment($('#hidd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').val().split(' ')[0],('yyyy-mm-dd').toUpperCase())}$('#dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').defaultDate(dt);$('#dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').viewDate(dt);}$('#dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').locale((''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>'+'').substring(0,2));}}catch(e){console.log(e);}try{if($('#hidd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').length==0||$('#hidd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').val()==''){var dd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9=new Date();dd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9.setDate(dd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9.getDate()+0);$('#dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').defaultDate(moment(dd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9));$('#dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').viewDate(moment(dd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9));}}catch(e){console.log(e);}var dd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9=new Date();dd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9.setDate(dd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9.getDate()+0);try{$('#dtd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').minDate(moment(dd38af91d717e44188a493faea2a667c2_8832ac841f0d43f5bfad042194440bb9));}catch(e){console.log(e);}try{moment.locale((''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>'+'').substring(0,2));if($('#dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').length>0){if(false){$('#dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').find('.input-group-addon').hide();$('#dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').find('input').hide();}$('#dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').datetimepicker({inline:false,locale:(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>'+'').substring(0,2),format:'L',useCurrent:false,allowInputToggle:true,ignoreReadonly:false}).on('dp.change',function(e){$('#ctl263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').change();});if($('#hid263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').length>0&&$('#hid263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').val()!=''){var dt=moment($('#hid263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').val().split(' ')[0],(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase());if (!dt.isValid()){dt=moment($('#hid263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').val().split(' ')[0],('yyyy-mm-dd').toUpperCase())}$('#dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').defaultDate(dt);$('#dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').viewDate(dt);}$('#dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').locale((''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>'+'').substring(0,2));}}catch(e){console.log(e);}try{if($('#hid263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').length==0||$('#hid263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').val()==''){var d263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9=new Date();d263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9.setDate(d263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9.getDate()+0);$('#dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').defaultDate(moment(d263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9));$('#dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').viewDate(moment(d263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9));}}catch(e){console.log(e);}var d263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9=new Date();d263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9.setDate(d263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9.getDate()+0);try{$('#dt263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9').data('DateTimePicker').minDate(moment(d263d485730e145209c2848a360339e48_8832ac841f0d43f5bfad042194440bb9));}catch(e){console.log(e);}$('#namef629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9').val($('#ctlf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9 option:selected').text());$('#ctlf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9').change(function(){$('#namef629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9').val($('#ctlf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9 option:selected').text());$('#hidf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9').val($('#ctlf629596e10c040759fdb8c929935e636_8832ac841f0d43f5bfad042194440bb9').val());});$('#name3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').val($('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9 option:selected').text());$('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').change(function(){$('#name3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').val($('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9 option:selected').text());$('#hid3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').val($('#ctl3479b87a77894583a5e9cb5388ab8816_8832ac841f0d43f5bfad042194440bb9').val());});</script><script type="text/javascript">var fromButton='';var isNew1d83539ff85f42adb5d4449c0899e3df=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df').click(function(){$('#ifr5e04bf64d0f948a4a2efe8e4a045a7e6').attr('src','<?php echo URL::to("/") ?>/recibasForm/0');$('#mdl5e04bf64d0f948a4a2efe8e4a045a7e6').modal('show');return false;});</script>
@endsection
