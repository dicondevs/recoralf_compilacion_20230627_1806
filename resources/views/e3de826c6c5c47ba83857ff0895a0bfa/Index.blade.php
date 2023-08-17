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
   {!! str_replace("{Extra}","",$v4b69f816d4e142eea608908a58a1f4d1) !!}

<span class="ctl5ddbc9508cd948acb4f00a3fad76a3db">
@if ($v8f882c52327041d1840d84062e110e93 == null || count($v8f882c52327041d1840d84062e110e93) == 0)

@else
    @foreach ($v8f882c52327041d1840d84062e110e93 as $item)
{!! $item["flf104e683f2064d038b80b10be1e23875"] !!}

    @endforeach
@endif

</span>
    
     </table>
                </div>
        <div class="box-footer clearfix">
                       <div class="row"><div class="col-md-4"><nav><ul data-id="ul46cd75580bdb4bc8aba0dff69190e604"  class="pagination" >{!! str_replace("{Extra}","",$v46cd75580bdb4bc8aba0dff69190e604) !!}</ul></nav></div><div class="col-md-4" id="totalText46cd75580bdb4bc8aba0dff69190e604">1 de 200 registros</div><div class="col-md-2"><select data-id="cmbOrder46cd75580bdb4bc8aba0dff69190e604" class="form-control" ><option value="-|-"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9e21373bc88541cb9e55b08992d3a0b0'); ?></option></select></div><div class="col-md-2"><select data-id="cmb46cd75580bdb4bc8aba0dff69190e604" class="form-control" ><option value="10" >10</option><option value="20" >20</option><option value="50" >50</option><option value="100" >100</option></select></div></div>
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

@if ($v370a404095894cb1abd041feddee4cd9 == null || count($v370a404095894cb1abd041feddee4cd9) == 0)

@else
    @foreach ($v370a404095894cb1abd041feddee4cd9 as $item)
{!! $item["flf910c387adfc4f8396804c4a557fc8be"] !!}

    @endforeach
@endif


@endsection
@section('footer')

@endsection
@section('formbusqueda')
<form method="POST" enctype="multipart/form-data" id="frm0fbdc81518014450ae793800a8bfef89"><input type="hidden" name="hid0fbdc81518014450ae793800a8bfef89" id="hid0fbdc81518014450ae793800a8bfef89" value="0fbdc81518014450ae793800a8bfef89" />{!! csrf_field() !!}<div class="row"><div class="col-md-2"><div class="form-group"><label for="ctl9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg469c15941e0f47bbbc66dfa1650719b8'); ?></label><div class="input-group date" id="dt9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89"><input autocomplete="false" type="text" tabindex="1" id="ctl9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89" name="ctl9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89" class="form-control"  /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div></div><input type="hidden" id="hid9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89" name="hid9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89" /></div><div class="col-md-2"><div class="form-group"><label for="ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7831e574cc7a4ff09f9cfe535c72f6ca'); ?> </label><input type="hidden" value="" id="name3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89" name="name3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89" /><input type="hidden" value="" id="hid3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89" name="hid3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89" /><select tabindex="2" id="ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89" name="ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89" class="form-control ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($v3a6c00ab23e040f9bffde33aeb9d34c3 == null || count($v3a6c00ab23e040f9bffde33aeb9d34c3) == 0)

@else
    @foreach ($v3a6c00ab23e040f9bffde33aeb9d34c3 as $item)
<option value="{!! $item["fl44e7191511c34f6f93099aa421ff7286"] !!}">{!! $item["fl9130be9170da45bca75fa793dcd83a5d"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-2"><div class="form-group"><label for="ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbeeb4af96a8a4cae8bdda1920e120cb1'); ?> </label><input type="hidden" value="" id="name69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89" name="name69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89" /><input type="hidden" value="" id="hid69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89" name="hid69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89" /><select tabindex="3" id="ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89" name="ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89" class="form-control ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($vd136c0be3d0143d893da1b09680e28f0 == null || count($vd136c0be3d0143d893da1b09680e28f0) == 0)

@else
    @foreach ($vd136c0be3d0143d893da1b09680e28f0 as $item)
<option value="{!! $item["flf8a1d5202fb546e88fc20116fc658896"] !!}">{!! $item["fl027a19cd5af54e5f8ff059c056ff3331"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-2"><button tabindex="4" type="submit" id="ctl8c85bbebc56641c783799f73abd05075_0fbdc81518014450ae793800a8bfef89" name="ctl8c85bbebc56641c783799f73abd05075_0fbdc81518014450ae793800a8bfef89" class="btn btn-default" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9de03f0b3c0f47acb79e80b1ae0707a7'); ?></button></div></div></form>
@endsection
@section('nuevoregistro')
<form method="POST" enctype="multipart/form-data" id="frm1d83539ff85f42adb5d4449c0899e3df"><input type="hidden" name="hid1d83539ff85f42adb5d4449c0899e3df" id="hid1d83539ff85f42adb5d4449c0899e3df" value="1d83539ff85f42adb5d4449c0899e3df" />{!! csrf_field() !!}<div class="row"><div class="col-md-12"><button tabindex="1" type="submit" id="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" name="ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df" class="alta btn" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385'); ?></button></div></div></form>
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
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/BootStrapDatePicker/build/css/bootstrap-datetimepicker.min.css" />
@endsection
@section('scripts')
<script type="text/javascript">function chg46cd75580bdb4bc8aba0dff69190e604(size,total,current){$('#totalText46cd75580bdb4bc8aba0dff69190e604').html(((current*size) > total ? total : (current*size))+' de '+total+' registros');if(Math.ceil(total/size)<current){location='{!! str_replace("{Extra}","",$v46cd75580bdb4bc8aba0dff69190e604Link) !!}'.replace('{pagenumber}',Math.ceil(total/size)).replace('{pagesize}',size).replace('{orderColumn}',$('*[data-id="cmbOrder46cd75580bdb4bc8aba0dff69190e604"]').val().split('|')[0]).replace('{orderType}',$('*[data-id="cmbOrder46cd75580bdb4bc8aba0dff69190e604"]').val().split('|')[1]);}else{location='{!! str_replace("{Extra}","",$v46cd75580bdb4bc8aba0dff69190e604Link) !!}'.replace('{pagenumber}',current).replace('{pagesize}',size).replace('{orderColumn}',$('*[data-id="cmbOrder46cd75580bdb4bc8aba0dff69190e604"]').val().split('|')[0]).replace('{orderType}',$('*[data-id="cmbOrder46cd75580bdb4bc8aba0dff69190e604"]').val().split('|')[1]);}}var cur46cd75580bdb4bc8aba0dff69190e604=1;$(function(){$('*[data-id="cmb46cd75580bdb4bc8aba0dff69190e604"]').change(function(){chg46cd75580bdb4bc8aba0dff69190e604($(this).val(),{!! str_replace("{Extra}","",$v46cd75580bdb4bc8aba0dff69190e604Total) !!},{!! str_replace("{Extra}","",$v46cd75580bdb4bc8aba0dff69190e604Actual) !!});});$('*[data-id="cmb46cd75580bdb4bc8aba0dff69190e604"]').val({!! str_replace("{Extra}","",$v46cd75580bdb4bc8aba0dff69190e604Current) !!});$('*[data-id="cmbOrder46cd75580bdb4bc8aba0dff69190e604"]').change(function(){chg46cd75580bdb4bc8aba0dff69190e604($('*[data-id="cmb46cd75580bdb4bc8aba0dff69190e604"]').val(),{!! str_replace("{Extra}","",$v46cd75580bdb4bc8aba0dff69190e604Total) !!},{!! str_replace("{Extra}","",$v46cd75580bdb4bc8aba0dff69190e604Actual) !!});});if($('*[data-id="cmbOrder46cd75580bdb4bc8aba0dff69190e604"] option[value="{!! str_replace("{Extra}","",$v46cd75580bdb4bc8aba0dff69190e604Order) !!}"]').length > 0){$('*[data-id="cmbOrder46cd75580bdb4bc8aba0dff69190e604"]').val('{!! str_replace("{Extra}","",$v46cd75580bdb4bc8aba0dff69190e604Order) !!}');}});</script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Moment/moment-with-locales.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/BootStrapDatePicker/build/js/bootstrap-datetimepicker.min.js" ></script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew0fbdc81518014450ae793800a8bfef89=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();if('{!! \Route::current()->parameter("d") !!}'!='-'){if ($('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89 option[value="'+'{!! \Route::current()->parameter("d") !!}'+'"]').length>0){$('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val('{!! \Route::current()->parameter("d") !!}');}$('#name3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val($('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89 option:selected').text());$('#hid3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val('{!! \Route::current()->parameter("d") !!}');if ($('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89 option').length>0){$('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').change();$('#hid3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val('{!! \Route::current()->parameter("d") !!}');}if('{!! \Route::current()->parameter("d") !!}'==''&&$('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89 option[value="0fbdc81518014450ae793800a8bfef89"]').length>0){$('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val('0fbdc81518014450ae793800a8bfef89');$('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').change();}}if('{!! \Route::current()->parameter("e") !!}'!='-'){if ($('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89 option[value="'+'{!! \Route::current()->parameter("e") !!}'+'"]').length>0){$('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val('{!! \Route::current()->parameter("e") !!}');}$('#name69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val($('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89 option:selected').text());$('#hid69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val('{!! \Route::current()->parameter("e") !!}');if ($('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89 option').length>0){$('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').change();$('#hid69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val('{!! \Route::current()->parameter("e") !!}');}if('{!! \Route::current()->parameter("e") !!}'==''&&$('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89 option[value="0fbdc81518014450ae793800a8bfef89"]').length>0){$('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val('0fbdc81518014450ae793800a8bfef89');$('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').change();}}if('{!! \Route::current()->parameter("f") !!}'!='-'){$('#hid9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').val('{!! \Route::current()->parameter("f") !!}');}$('#ctl8c85bbebc56641c783799f73abd05075_0fbdc81518014450ae793800a8bfef89').click(function(){location='<?php echo URL::to("/") ?>/traspasosGrid/'+encodeURIComponent(($('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val() == '' ? '-' : $('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val()))+'/'+encodeURIComponent(($('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val() == '' ? '-' : $('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val()))+'/'+encodeURIComponent(($('#ctl9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').val() == '' ? '-' : moment($('#ctl9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').val(),currentSystemOriginalShortDatetimeFormat).format('YYYY-MM-DD') == 'Invalid date' ? '-' : moment($('#ctl9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').val(),currentSystemOriginalShortDatetimeFormat).format('YYYY-MM-DD')))+'/'+encodeURIComponent('{!! \Route::current()->parameter("p") !!}' == '' ? '-' : '{!! \Route::current()->parameter("p") !!}')+'/'+encodeURIComponent('{!! \Route::current()->parameter("c") !!}' == '' ? '-' : '{!! \Route::current()->parameter("c") !!}')+'/'+encodeURIComponent('{!! \Route::current()->parameter("t") !!}' == '' ? '-' : '{!! \Route::current()->parameter("t") !!}')+'';return false;});try{moment.locale((''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>'+'').substring(0,2));if($('#dt9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').length>0){if(false){$('#dt9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').find('.input-group-addon').hide();$('#dt9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').find('input').hide();}$('#dt9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').datetimepicker({inline:false,locale:(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>'+'').substring(0,2),format:'L',useCurrent:false,allowInputToggle:true,ignoreReadonly:false}).on('dp.change',function(e){$('#ctl9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').change();});if($('#hid9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').length>0&&$('#hid9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').val()!=''){var dt=moment($('#hid9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').val().split(' ')[0],(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase());if (!dt.isValid()){dt=moment($('#hid9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').val().split(' ')[0],('yyyy-mm-dd').toUpperCase())}$('#dt9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').data('DateTimePicker').defaultDate(dt);$('#dt9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').data('DateTimePicker').viewDate(dt);}$('#dt9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').data('DateTimePicker').locale((''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>'+'').substring(0,2));}}catch(e){console.log(e);}try{if($('#hid9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').length==0||$('#hid9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').val()==''){var d9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89=new Date();d9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89.setDate(d9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89.getDate()+0);$('#dt9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').data('DateTimePicker').defaultDate(moment(d9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89));$('#dt9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89').data('DateTimePicker').viewDate(moment(d9cb329b80af24e7986ab3b716b6770db_0fbdc81518014450ae793800a8bfef89));}}catch(e){console.log(e);}$('#name3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val($('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89 option:selected').text());$('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').change(function(){$('#name3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val($('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89 option:selected').text());$('#hid3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val($('#ctl3520fcb9033d4c089b180a6d9ebb049d_0fbdc81518014450ae793800a8bfef89').val());});$('#name69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val($('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89 option:selected').text());$('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').change(function(){$('#name69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val($('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89 option:selected').text());$('#hid69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val($('#ctl69b2dfe13f10447e88b962545b0cef21_0fbdc81518014450ae793800a8bfef89').val());});</script><script type="text/javascript">var fromButton='';var isNew1d83539ff85f42adb5d4449c0899e3df=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctl501db269d6234f37ae85856b13a68140_1d83539ff85f42adb5d4449c0899e3df').click(function(){location='<?php echo URL::to("/") ?>/traspasosForm/0/'+encodeURIComponent('{!! \Route::current()->parameter("t") !!}' == '' ? '-' : '{!! \Route::current()->parameter("t") !!}')+'';return false;});</script>
@endsection
