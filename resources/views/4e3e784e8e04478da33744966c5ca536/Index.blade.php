@extends('layouts.mt2219a59ceb17495698938b21e0e92a37')
    @section('dzContenidoPag')
<table id="tbf96dc600deb54a12a6adf253bbfad509" data-paging="true" data-ordering="true" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th data-visible="true" data-width="200px" data-data="fl50975c47998445c9bc8a76dd8bdec022" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9afdef6278254095be063c7dbf6e5cff'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl98736691c70b413ba2d66ec058f9dc02" data-orderable="false" data-class="">
<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3'); ?></th>
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

@endsection
@section('footer')

@endsection
@section('formbusqueda')
<form method="POST" enctype="multipart/form-data" id="frme50c77fb915044819be0166aaf8c07aa"><input type="hidden" name="hide50c77fb915044819be0166aaf8c07aa" id="hide50c77fb915044819be0166aaf8c07aa" value="e50c77fb915044819be0166aaf8c07aa" />{!! csrf_field() !!}<div class="row"><div class="col-md-3"><div class="form-group"><label for="ctlf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg45e15a4acf6c4f70a8be3a6b0dce1671'); ?> </label><input type="hidden" value="" id="namef7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa" name="namef7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa" /><input type="hidden" value="" id="hidf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa" name="hidf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa" /><select tabindex="1" id="ctlf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa" name="ctlf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa" class="form-control ctlf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($vcd1d0930812c4ea1a093cebcda9c27f4 == null || count($vcd1d0930812c4ea1a093cebcda9c27f4) == 0)

@else
    @foreach ($vcd1d0930812c4ea1a093cebcda9c27f4 as $item)
<option value="{!! $item["fl62a454af701541e9a08ecdda674f51e2"] !!}">{!! $item["fld5cc19ea9c9d4277a74c8f260d29cc25"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-3"><button tabindex="2" type="submit" id="ctl19b1bedba7d546529c0aa54c7e4d2040_e50c77fb915044819be0166aaf8c07aa" name="ctl19b1bedba7d546529c0aa54c7e4d2040_e50c77fb915044819be0166aaf8c07aa" class="btn btn-default" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga17b7aaf1e824a75a5aa63b0d5382379'); ?></button></div></div></form><div class="ov5d906619d7dc445e89d7e9779a6d89a8" style="display:none;background-color:rgba(255,255,255,0.5);"></div><div class="lo5d906619d7dc445e89d7e9779a6d89a8" style="display:none"><i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom" style="color:blue"></i></div>
<div class="modal fade" id="mdl5d906619d7dc445e89d7e9779a6d89a8Captcha" tabindex="-1" role="dialog" aria-labelledby="mdlLabel5d906619d7dc445e89d7e9779a6d89a8Captcha">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose5d906619d7dc445e89d7e9779a6d89a8Captcha" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel5d906619d7dc445e89d7e9779a6d89a8Captcha">[[00000000-0000-0000-0000-000000000000]]</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose5d906619d7dc445e89d7e9779a6d89a8Captcha" data-dismiss="modal">[[00000000-0000-0000-0000-000000000000]]</button>
      </div>
    </div>
  </div>
</div>
  
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
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/css/jquery.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/css/responsive.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/css/dataTables.bootstrap4.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/css/responsive.bootstrap4.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.css" /><style type="text/css">

</style>
@endsection
@section('scripts')
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/jquery.dataTables.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/dataTables.responsive.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/dataTables.bootstrap4.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/responsive.bootstrap4.min.js" ></script><script type="text/javascript">$.fn.dataTable.ext.errMode=function(e,settings,techNote,message){console.log(message);};dtf96dc600deb54a12a6adf253bbfad509=false;relf96dc600deb54a12a6adf253bbfad509=false;totf96dc600deb54a12a6adf253bbfad509={!! str_replace("{Extra}","",$vf96dc600deb54a12a6adf253bbfad509Total) !!};var tbObjf96dc600deb54a12a6adf253bbfad509;$(function(){tbObjf96dc600deb54a12a6adf253bbfad509=$('#tbf96dc600deb54a12a6adf253bbfad509').DataTable({'drawCallback':function(settings){},columnDefs:[],autoWidth:false,processing:true,serverSide:true,searching:false,responsive:true,pagingType:'full_numbers',language:{processing:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5f91e3098ee74310b3d96087e7895256'); ?>'+'',emptyTable:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg53a001ed5802492dbd17759a893862a7'); ?>'+'',lengthMenu:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg787a0a3e158a4492b11380b709d0d9a3'); ?>'+'',info:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16bdfb61f662468d8f80e80bd3b8b1f6'); ?>'+'',infoEmpty:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2646df37ab049a9aea0ee0eb8d99d0e'); ?>'+'',paginate:{first:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg673755107d9e4f5cb0eef6837c91b302'); ?>'+'',last:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50b13adc5284e92844239ca59bf38e5'); ?>'+'',next:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6d4792f9962a46f2b37bbf9af604eda9'); ?>'+'',previous:''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9d046e3adb7647fc95991757861b6f28'); ?>'+''},},'lengthMenu': [ [10,20,50,100], [10,20,50,100] ],ajax: function(data, callback, settings) {var info=$('#tbf96dc600deb54a12a6adf253bbfad509').DataTable().page.info();var order=$('#tbf96dc600deb54a12a6adf253bbfad509').DataTable().order();var orderby='-';switch(order[0][0]){}orderf96dc600deb54a12a6adf253bbfad509=order;orderbyf96dc600deb54a12a6adf253bbfad509=orderby;pagef96dc600deb54a12a6adf253bbfad509=(info.page + 1);pagesizef96dc600deb54a12a6adf253bbfad509=info.length;if(relf96dc600deb54a12a6adf253bbfad509){$.ajax({url:getUrlf96dc600deb54a12a6adf253bbfad509Count(),async:false,success:function(res){totf96dc600deb54a12a6adf253bbfad509=res;}});}$.get(getUrlf96dc600deb54a12a6adf253bbfad509(),function(res) {callback({recordsTotal:totf96dc600deb54a12a6adf253bbfad509,recordsFiltered:totf96dc600deb54a12a6adf253bbfad509,data: res});});}});});var orderbyf96dc600deb54a12a6adf253bbfad509;var orderf96dc600deb54a12a6adf253bbfad509;var pagef96dc600deb54a12a6adf253bbfad509;var pagesizef96dc600deb54a12a6adf253bbfad509;function getUrlf96dc600deb54a12a6adf253bbfad509Count(){urlpath=('{!! str_replace("{Extra}","",$vf96dc600deb54a12a6adf253bbfad509Ajax) !!}').replace('aa7f2fe267ab46daa2ebbb8120a72f1e','aa7f2fe267ab46daa2ebbb8120a72f1eCount');urlpath=urlpath.replace('/{page}','');urlpath=urlpath.replace('/{pagesize}','');urlpath=urlpath.replace('/{orderColumn}','');urlpath=urlpath.replace('/{orderType}','');return urlpath;}function getUrlf96dc600deb54a12a6adf253bbfad509(){urlpath='{!! str_replace("{Extra}","",$vf96dc600deb54a12a6adf253bbfad509Ajax) !!}';urlpath=urlpath.replace('{page}',pagef96dc600deb54a12a6adf253bbfad509);if(dtf96dc600deb54a12a6adf253bbfad509){urlpath=urlpath.replace('{pagesize}',10000);dtf96dc600deb54a12a6adf253bbfad509=false;}else{urlpath=urlpath.replace('{pagesize}',pagesizef96dc600deb54a12a6adf253bbfad509);}urlpath=urlpath.replace('{orderColumn}',orderbyf96dc600deb54a12a6adf253bbfad509);urlpath=urlpath.replace('{orderType}',orderf96dc600deb54a12a6adf253bbfad509[0][1].toUpperCase());return urlpath;}</script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/src/extra/validator/customvalidators.js" ></script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNewe50c77fb915044819be0166aaf8c07aa=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();function validFunce50c77fb915044819be0166aaf8c07aa(){if ($('.isNumber').length>0){$('.isNumber').each(function(){$(this).val($(this).val().replace(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgMoneySymbol'); ?>'+'','').replace(new RegExp(monThousands,'g'),''));});}$('#frme50c77fb915044819be0166aaf8c07aa').parsley().destroy();$('#frme50c77fb915044819be0166aaf8c07aa').parsley();Parsley.on('field:validated',function(fieldInstance){if(fieldInstance.$element.is(":hidden")&&!fieldInstance.$element.hasClass("autoCompleteSelect")){fieldInstance._ui.$errorsWrapper.css('display','none');fieldInstance.validationResult=true;return true;}});var validated=$('#frme50c77fb915044819be0166aaf8c07aa').parsley().validate();return validated;}function errFunce50c77fb915044819be0166aaf8c07aa(){if ($('.isMoney').length>0){$('.isMoney').maskMoney('mask');}}var alreadySended5d906619d7dc445e89d7e9779a6d89a8=false;$('#ctl19b1bedba7d546529c0aa54c7e4d2040_e50c77fb915044819be0166aaf8c07aa').click(function(){validated=validFunce50c77fb915044819be0166aaf8c07aa();if (!validated){errFunce50c77fb915044819be0166aaf8c07aa();}else{console.log(alreadySended5d906619d7dc445e89d7e9779a6d89a8);if(alreadySended5d906619d7dc445e89d7e9779a6d89a8){return false;}alreadySended5d906619d7dc445e89d7e9779a6d89a8=true;$('#ctl19b1bedba7d546529c0aa54c7e4d2040_e50c77fb915044819be0166aaf8c07aa').attr('disabled','disabled');$('.ov5d906619d7dc445e89d7e9779a6d89a8').css('top','0px');$('.ov5d906619d7dc445e89d7e9779a6d89a8').css('left','0px');$('.ov5d906619d7dc445e89d7e9779a6d89a8').css('position','fixed');$('.ov5d906619d7dc445e89d7e9779a6d89a8').css('z-index','100000');$('.ov5d906619d7dc445e89d7e9779a6d89a8').css('height','100%');$('.ov5d906619d7dc445e89d7e9779a6d89a8').css('width','100%');$('.ov5d906619d7dc445e89d7e9779a6d89a8').show();$('.lo5d906619d7dc445e89d7e9779a6d89a8').css('top','50%');$('.lo5d906619d7dc445e89d7e9779a6d89a8').css('left','50%');$('.lo5d906619d7dc445e89d7e9779a6d89a8').css('position','fixed');$('.lo5d906619d7dc445e89d7e9779a6d89a8').css('z-index','100001');$('.lo5d906619d7dc445e89d7e9779a6d89a8').show();$('.lo5d906619d7dc445e89d7e9779a6d89a8').css('margin-left','-16px');$('.lo5d906619d7dc445e89d7e9779a6d89a8').css('margin-top','-16px');if (window.FormData){formdata=new FormData($('#frme50c77fb915044819be0166aaf8c07aa')[0]);formdata.append('ctl19b1bedba7d546529c0aa54c7e4d2040_e50c77fb915044819be0166aaf8c07aa','1');if(fromButton!=''){formdata.append(fromButton,'1');}$.ajax({url:'{!! Request::fullUrl() !!}',type:'POST',data:formdata,success:function(data,textStatus,jqXHR){$('#ctl19b1bedba7d546529c0aa54c7e4d2040_e50c77fb915044819be0166aaf8c07aa').removeAttr('disabled');$('.ov5d906619d7dc445e89d7e9779a6d89a8').hide();$('.lo5d906619d7dc445e89d7e9779a6d89a8').hide();if (data=='NotExists'){alreadySended5d906619d7dc445e89d7e9779a6d89a8=false;}if (data=='AlreadyExists'){alreadySended5d906619d7dc445e89d7e9779a6d89a8=false;}if (data=='InvalidCaptcha'){alreadySended5d906619d7dc445e89d7e9779a6d89a8=false;$('#mdl5d906619d7dc445e89d7e9779a6d89a8Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/perfilMenu/'+encodeURIComponent('{!! \Route::current()->parameter("p") !!}' == '' ? '-' : '{!! \Route::current()->parameter("p") !!}')+'/0';},processData:false,contentType:false});}else{var  iframeId='unique'+(new Date().getTime());var iframe=$('<iframe src="javascript:false;" name="'+iframeId+'" />');iframe.hide();$('#frme50c77fb915044819be0166aaf8c07aa').attr('target',iframeId);$('#frme50c77fb915044819be0166aaf8c07aa').attr('action','{!! Request::fullUrl() !!}');iframe.appendTo('body');iframe.load(function(e){$('#ctl19b1bedba7d546529c0aa54c7e4d2040_e50c77fb915044819be0166aaf8c07aa').removeAttr('disabled');$('.ov5d906619d7dc445e89d7e9779a6d89a8').hide();$('.lo5d906619d7dc445e89d7e9779a6d89a8').hide();var doc=getDoc5d906619d7dc445e89d7e9779a6d89a8(iframe[0]);var docRoot=doc.body?doc.body:doc.documentElement;var data = docRoot.innerHTML;if (data=='AlreadyExists'){}if (data=='InvalidCaptcha'){$('#mdl5d906619d7dc445e89d7e9779a6d89a8Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/perfilMenu/'+encodeURIComponent('{!! \Route::current()->parameter("p") !!}' == '' ? '-' : '{!! \Route::current()->parameter("p") !!}')+'/0';});$('#frme50c77fb915044819be0166aaf8c07aa').submit();}}return false;});function getDoc5d906619d7dc445e89d7e9779a6d89a8(frame) {var doc=null;try {if (frame.contentWindow){doc = frame.contentWindow.document;}} catch(err) {}if (doc){return doc;}try {doc = frame.contentDocument ? frame.contentDocument : frame.document;} catch(err) {doc = frame.document;}return doc;}$('#namef7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa').val($('#ctlf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa option:selected').text());$('#ctlf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa').change(function(){$('#namef7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa').val($('#ctlf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa option:selected').text());$('#hidf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa').val($('#ctlf7b8aa4429fe4ad382494802a7fbd287_e50c77fb915044819be0166aaf8c07aa').val());});</script>
@endsection
