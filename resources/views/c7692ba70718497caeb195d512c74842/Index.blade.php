@extends('layouts.mt4442dc848d66403ba717298b663cf8f5')
    @section('dzContenidoPag')
{!! str_replace("{Extra}","",$v4a021de58a344c32960a08292f88ce1f) !!}
<form method="POST" enctype="multipart/form-data" id="frm052042f196684c299e4d1165179a5737"><input type="hidden" name="hid052042f196684c299e4d1165179a5737" id="hid052042f196684c299e4d1165179a5737" value="052042f196684c299e4d1165179a5737" />{!! csrf_field() !!}<div class="row"><div class="col-md-3"><div class="form-group"><label for="ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9afdef6278254095be063c7dbf6e5cff'); ?> </label><input type="text" tabindex="1" id="ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737" name="ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737" class="form-control"  /></div></div><div class="col-md-3"><div class="checkbox"><input type="checkbox" tabindex="2" id="ctl41332b542a734638b2276a180f65af00_052042f196684c299e4d1165179a5737" value="true" name="ctl41332b542a734638b2276a180f65af00_052042f196684c299e4d1165179a5737" class="ctl41332b542a734638b2276a180f65af00_052042f196684c299e4d1165179a5737"  checked="checked" /><label><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd4bebf2ba4284f458a722a1e54dfcc82'); ?></label></div></div><div class="col-md-3"><button tabindex="3" type="submit" id="ctl19b1bedba7d546529c0aa54c7e4d2040_052042f196684c299e4d1165179a5737" name="ctl19b1bedba7d546529c0aa54c7e4d2040_052042f196684c299e4d1165179a5737" class="btn btn-default" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga17b7aaf1e824a75a5aa63b0d5382379'); ?></button></div></div></form><span class="rec4971d1f8833e44eab7c1de85754a9be3" style="display:none;">
@if ($v511e4aeb97cd4071b5bd9bc88eb47ed4 == null || count($v511e4aeb97cd4071b5bd9bc88eb47ed4) == 0)

@else
    @foreach ($v511e4aeb97cd4071b5bd9bc88eb47ed4 as $item)
<span class="rec0179af07461247b1b44e2433c3376cb4">{!! $item["fl0179af07461247b1b44e2433c3376cb4"] !!}</span><span class="recea17abf4c1ee4f398e98e7007ea45675">{!! $item["flea17abf4c1ee4f398e98e7007ea45675"] !!}</span>
    @endforeach
@endif

</span><div class="ov8f8f957754724ceeae057fb23e848b90" style="display:none;background-color:rgba(255,255,255,0.5);"></div><div class="lo8f8f957754724ceeae057fb23e848b90" style="display:none"><i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom" style="color:blue"></i></div>
<div class="modal fade" id="mdl8f8f957754724ceeae057fb23e848b90Captcha" tabindex="-1" role="dialog" aria-labelledby="mdlLabel8f8f957754724ceeae057fb23e848b90Captcha">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose8f8f957754724ceeae057fb23e848b90Captcha" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel8f8f957754724ceeae057fb23e848b90Captcha">[[00000000-0000-0000-0000-000000000000]]</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose8f8f957754724ceeae057fb23e848b90Captcha" data-dismiss="modal">[[00000000-0000-0000-0000-000000000000]]</button>
      </div>
    </div>
  </div>
</div>
  
@endsection
@section('styles')
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/Switchery/dist/switchery.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.css" /><style type="text/css">

</style>
@endsection
@section('scripts')
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Switchery/dist/switchery.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/src/extra/validator/customvalidators.js" ></script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew052042f196684c299e4d1165179a5737=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();function validFunc052042f196684c299e4d1165179a5737(){if ($('.isNumber').length>0){$('.isNumber').each(function(){$(this).val($(this).val().replace(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgMoneySymbol'); ?>'+'','').replace(new RegExp(monThousands,'g'),''));});}$('#frm052042f196684c299e4d1165179a5737').parsley().destroy();$('input[type="checkbox"][name="ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737"]').first().attr('data-parsley-mincheck','1');$('input[type="checkbox"][name="ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737"]').first().attr('data-parsley-mincheck-message',''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2db03180b074915983cdd914c98a8a1'); ?>'+'');$('[name="ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737"]').first().attr('data-parsley-required', 'true');$('[name="ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737"]').attr('data-parsley-required-message', ''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2db03180b074915983cdd914c98a8a1'); ?>'+'');$('[name="ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737[]"]').first().attr('data-parsley-required', 'true');$('[name="ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737[]"]').attr('data-parsley-required-message', ''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2db03180b074915983cdd914c98a8a1'); ?>'+'');$('#ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737').attr('data-parsley-required', 'true');$('#ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737').attr('data-parsley-required-message', ''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2db03180b074915983cdd914c98a8a1'); ?>'+'');$('#frm052042f196684c299e4d1165179a5737').parsley();Parsley.on('field:validated',function(fieldInstance){if(fieldInstance.$element.is(":hidden")&&!fieldInstance.$element.hasClass("autoCompleteSelect")){fieldInstance._ui.$errorsWrapper.css('display','none');fieldInstance.validationResult=true;return true;}});var validated=$('#frm052042f196684c299e4d1165179a5737').parsley().validate();return validated;}function errFunc052042f196684c299e4d1165179a5737(){if ($('.isMoney').length>0){$('.isMoney').maskMoney('mask');}}var alreadySended8f8f957754724ceeae057fb23e848b90=false;$('#ctl19b1bedba7d546529c0aa54c7e4d2040_052042f196684c299e4d1165179a5737').click(function(){validated=validFunc052042f196684c299e4d1165179a5737();if (!validated){errFunc052042f196684c299e4d1165179a5737();}else{console.log(alreadySended8f8f957754724ceeae057fb23e848b90);if(alreadySended8f8f957754724ceeae057fb23e848b90){return false;}alreadySended8f8f957754724ceeae057fb23e848b90=true;$('#ctl19b1bedba7d546529c0aa54c7e4d2040_052042f196684c299e4d1165179a5737').attr('disabled','disabled');$('.ov8f8f957754724ceeae057fb23e848b90').css('top','0px');$('.ov8f8f957754724ceeae057fb23e848b90').css('left','0px');$('.ov8f8f957754724ceeae057fb23e848b90').css('position','fixed');$('.ov8f8f957754724ceeae057fb23e848b90').css('z-index','100000');$('.ov8f8f957754724ceeae057fb23e848b90').css('height','100%');$('.ov8f8f957754724ceeae057fb23e848b90').css('width','100%');$('.ov8f8f957754724ceeae057fb23e848b90').show();$('.lo8f8f957754724ceeae057fb23e848b90').css('top','50%');$('.lo8f8f957754724ceeae057fb23e848b90').css('left','50%');$('.lo8f8f957754724ceeae057fb23e848b90').css('position','fixed');$('.lo8f8f957754724ceeae057fb23e848b90').css('z-index','100001');$('.lo8f8f957754724ceeae057fb23e848b90').show();$('.lo8f8f957754724ceeae057fb23e848b90').css('margin-left','-16px');$('.lo8f8f957754724ceeae057fb23e848b90').css('margin-top','-16px');if (window.FormData){formdata=new FormData($('#frm052042f196684c299e4d1165179a5737')[0]);formdata.append('ctl19b1bedba7d546529c0aa54c7e4d2040_052042f196684c299e4d1165179a5737','1');if(fromButton!=''){formdata.append(fromButton,'1');}$.ajax({url:'{!! Request::fullUrl() !!}',type:'POST',data:formdata,success:function(data,textStatus,jqXHR){$('#ctl19b1bedba7d546529c0aa54c7e4d2040_052042f196684c299e4d1165179a5737').removeAttr('disabled');$('.ov8f8f957754724ceeae057fb23e848b90').hide();$('.lo8f8f957754724ceeae057fb23e848b90').hide();if (data=='NotExists'){alreadySended8f8f957754724ceeae057fb23e848b90=false;}if (data=='AlreadyExists'){alreadySended8f8f957754724ceeae057fb23e848b90=false;}if (data=='InvalidCaptcha'){alreadySended8f8f957754724ceeae057fb23e848b90=false;$('#mdl8f8f957754724ceeae057fb23e848b90Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/redirigir/'+encodeURIComponent(($('#ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737').val() == '' ? '-' : $('#ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737').val()))+'/2';},processData:false,contentType:false});}else{var  iframeId='unique'+(new Date().getTime());var iframe=$('<iframe src="javascript:false;" name="'+iframeId+'" />');iframe.hide();$('#frm052042f196684c299e4d1165179a5737').attr('target',iframeId);$('#frm052042f196684c299e4d1165179a5737').attr('action','{!! Request::fullUrl() !!}');iframe.appendTo('body');iframe.load(function(e){$('#ctl19b1bedba7d546529c0aa54c7e4d2040_052042f196684c299e4d1165179a5737').removeAttr('disabled');$('.ov8f8f957754724ceeae057fb23e848b90').hide();$('.lo8f8f957754724ceeae057fb23e848b90').hide();var doc=getDoc8f8f957754724ceeae057fb23e848b90(iframe[0]);var docRoot=doc.body?doc.body:doc.documentElement;var data = docRoot.innerHTML;if (data=='AlreadyExists'){}if (data=='InvalidCaptcha'){$('#mdl8f8f957754724ceeae057fb23e848b90Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/redirigir/'+encodeURIComponent(($('#ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737').val() == '' ? '-' : $('#ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737').val()))+'/2';});$('#frm052042f196684c299e4d1165179a5737').submit();}}return false;});function getDoc8f8f957754724ceeae057fb23e848b90(frame) {var doc=null;try {if (frame.contentWindow){doc = frame.contentWindow.document;}} catch(err) {}if (doc){return doc;}try {doc = frame.contentDocument ? frame.contentDocument : frame.document;} catch(err) {doc = frame.document;}return doc;}if($('.rec4971d1f8833e44eab7c1de85754a9be3').children().length>0){isNew052042f196684c299e4d1165179a5737=false;if($('.rec0179af07461247b1b44e2433c3376cb4').length>0){if ($('.rec0179af07461247b1b44e2433c3376cb4').length>0&&($('.rec0179af07461247b1b44e2433c3376cb4').html()=='1'||$('.rec0179af07461247b1b44e2433c3376cb4').html().toLowerCase()=='true')){$('#ctl41332b542a734638b2276a180f65af00_052042f196684c299e4d1165179a5737')[0].checked=true;}else{$('#ctl41332b542a734638b2276a180f65af00_052042f196684c299e4d1165179a5737')[0].checked=false;}}if($('.recea17abf4c1ee4f398e98e7007ea45675').length>0){$('#ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737').val($('.recea17abf4c1ee4f398e98e7007ea45675').html());$('#ctl3607329572c440d9b68ef4a6c13f5921_052042f196684c299e4d1165179a5737').change();}}var el41332b542a734638b2276a180f65af00_052042f196684c299e4d1165179a5737 = Array.prototype.slice.call(document.querySelectorAll('.ctl41332b542a734638b2276a180f65af00_052042f196684c299e4d1165179a5737'));el41332b542a734638b2276a180f65af00_052042f196684c299e4d1165179a5737.forEach(function(html) {var sw41332b542a734638b2276a180f65af00_052042f196684c299e4d1165179a5737 = new Switchery(html,{color:'#64bd63'});});</script>
@endsection
