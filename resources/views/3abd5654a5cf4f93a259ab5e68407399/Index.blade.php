@extends('layouts.mt4442dc848d66403ba717298b663cf8f5')
    @section('dzContenidoPag')
{!! str_replace("{Extra}","",$v4a021de58a344c32960a08292f88ce1f) !!}
<form method="POST" enctype="multipart/form-data" id="frm8d619ddc976c4ff58669c8d69a56cf79"><input type="hidden" name="hid8d619ddc976c4ff58669c8d69a56cf79" id="hid8d619ddc976c4ff58669c8d69a56cf79" value="8d619ddc976c4ff58669c8d69a56cf79" />{!! csrf_field() !!}<div class="row"><div class="col-md-4"><div class="form-group"><label for="ctl77ae46d0e5b14bed8771d755541cdcce_8d619ddc976c4ff58669c8d69a56cf79"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb511fe0b98b44915bee0864037c0a0af'); ?> </label><input type="text" tabindex="1" id="ctl77ae46d0e5b14bed8771d755541cdcce_8d619ddc976c4ff58669c8d69a56cf79" name="ctl77ae46d0e5b14bed8771d755541cdcce_8d619ddc976c4ff58669c8d69a56cf79" readonly="readonly"  class="form-control"  /></div></div></div></form><span class="rec8c236d151faf4c3eab73d5dda226a54f" style="display:none;">
@if ($v203c6840fd68478b908500f6710549b3 == null || count($v203c6840fd68478b908500f6710549b3) == 0)

@else
    @foreach ($v203c6840fd68478b908500f6710549b3 as $item)
<span class="rec0b2cd5b8287844eaa0d9e3de129b8094">{!! $item["fl0b2cd5b8287844eaa0d9e3de129b8094"] !!}</span>
    @endforeach
@endif

</span><form method="POST" enctype="multipart/form-data" id="frm1dbb17db07f54dc0a55f2a82be1a7b9e"><input type="hidden" name="hid1dbb17db07f54dc0a55f2a82be1a7b9e" id="hid1dbb17db07f54dc0a55f2a82be1a7b9e" value="1dbb17db07f54dc0a55f2a82be1a7b9e" />{!! csrf_field() !!}<div class="row"><div class="col-md-4"><div class="form-group"><label for="ctl75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3ecb2a7d27bd445bbb2ddf735a7e74e1'); ?> </label><input type="hidden" value="" id="name75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e" name="name75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e" /><input type="hidden" value="" id="hid75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e" name="hid75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e" /><select tabindex="17" id="ctl75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e" name="ctl75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e" class="form-control ctl75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e" ><option value=""><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1'); ?></option>
@if ($v505aaceaee984d49ad5ee169af034329 == null || count($v505aaceaee984d49ad5ee169af034329) == 0)

@else
    @foreach ($v505aaceaee984d49ad5ee169af034329 as $item)
<option value="{!! $item["fl3a4a429aa1554af1ad09550527c32990"] !!}">{!! $item["flea17abf4c1ee4f398e98e7007ea45675"] !!}</option>
    @endforeach
@endif

</select></div></div><div class="col-md-2"><div class="checkbox"><input type="checkbox" tabindex="2" id="ctl41332b542a734638b2276a180f65af00_1dbb17db07f54dc0a55f2a82be1a7b9e" value="true" name="ctl41332b542a734638b2276a180f65af00_1dbb17db07f54dc0a55f2a82be1a7b9e" class="ctl41332b542a734638b2276a180f65af00_1dbb17db07f54dc0a55f2a82be1a7b9e"  checked="checked" /><label><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd4bebf2ba4284f458a722a1e54dfcc82'); ?></label></div></div><div class="col-md-2"><button tabindex="3" type="submit" id="ctl19b1bedba7d546529c0aa54c7e4d2040_1dbb17db07f54dc0a55f2a82be1a7b9e" name="ctl19b1bedba7d546529c0aa54c7e4d2040_1dbb17db07f54dc0a55f2a82be1a7b9e" class="btn btn-default" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga17b7aaf1e824a75a5aa63b0d5382379'); ?></button></div></div></form><div class="ovb68e123c3a6d4e38ac89099137a00554" style="display:none;background-color:rgba(255,255,255,0.5);"></div><div class="lob68e123c3a6d4e38ac89099137a00554" style="display:none"><i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom" style="color:blue"></i></div>
<div class="modal fade" id="mdlb68e123c3a6d4e38ac89099137a00554Captcha" tabindex="-1" role="dialog" aria-labelledby="mdlLabelb68e123c3a6d4e38ac89099137a00554Captcha">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnCloseb68e123c3a6d4e38ac89099137a00554Captcha" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabelb68e123c3a6d4e38ac89099137a00554Captcha">[[00000000-0000-0000-0000-000000000000]]</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnCloseb68e123c3a6d4e38ac89099137a00554Captcha" data-dismiss="modal">[[00000000-0000-0000-0000-000000000000]]</button>
      </div>
    </div>
  </div>
</div>
  
@endsection
@section('styles')
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/Switchery/dist/switchery.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.css" />
@endsection
@section('scripts')
<script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew8d619ddc976c4ff58669c8d69a56cf79=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();if($('.rec8c236d151faf4c3eab73d5dda226a54f').children().length>0){isNew8d619ddc976c4ff58669c8d69a56cf79=false;if($('.rec0b2cd5b8287844eaa0d9e3de129b8094').length>0){$('#ctl77ae46d0e5b14bed8771d755541cdcce_8d619ddc976c4ff58669c8d69a56cf79').val($('.rec0b2cd5b8287844eaa0d9e3de129b8094').html());$('#ctl77ae46d0e5b14bed8771d755541cdcce_8d619ddc976c4ff58669c8d69a56cf79').change();}}</script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Switchery/dist/switchery.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/src/extra/validator/customvalidators.js" ></script><script type="text/javascript">var fromButton='';var isNew1dbb17db07f54dc0a55f2a82be1a7b9e=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();function validFunc1dbb17db07f54dc0a55f2a82be1a7b9e(){if ($('.isNumber').length>0){$('.isNumber').each(function(){$(this).val($(this).val().replace(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgMoneySymbol'); ?>'+'','').replace(new RegExp(monThousands,'g'),''));});}$('#frm1dbb17db07f54dc0a55f2a82be1a7b9e').parsley().destroy();$('#frm1dbb17db07f54dc0a55f2a82be1a7b9e').parsley();Parsley.on('field:validated',function(fieldInstance){if(fieldInstance.$element.is(":hidden")&&!fieldInstance.$element.hasClass("autoCompleteSelect")){fieldInstance._ui.$errorsWrapper.css('display','none');fieldInstance.validationResult=true;return true;}});var validated=$('#frm1dbb17db07f54dc0a55f2a82be1a7b9e').parsley().validate();return validated;}function errFunc1dbb17db07f54dc0a55f2a82be1a7b9e(){if ($('.isMoney').length>0){$('.isMoney').maskMoney('mask');}}$('#ctl19b1bedba7d546529c0aa54c7e4d2040_1dbb17db07f54dc0a55f2a82be1a7b9e').click(function(){validated=validFunc1dbb17db07f54dc0a55f2a82be1a7b9e();if (!validated){errFunc1dbb17db07f54dc0a55f2a82be1a7b9e();}else{$('#ctl19b1bedba7d546529c0aa54c7e4d2040_1dbb17db07f54dc0a55f2a82be1a7b9e').attr('disabled','disabled');$('.ovb68e123c3a6d4e38ac89099137a00554').css('top','0px');$('.ovb68e123c3a6d4e38ac89099137a00554').css('left','0px');$('.ovb68e123c3a6d4e38ac89099137a00554').css('position','fixed');$('.ovb68e123c3a6d4e38ac89099137a00554').css('z-index','100000');$('.ovb68e123c3a6d4e38ac89099137a00554').css('height','100%');$('.ovb68e123c3a6d4e38ac89099137a00554').css('width','100%');$('.ovb68e123c3a6d4e38ac89099137a00554').show();$('.lob68e123c3a6d4e38ac89099137a00554').css('top','50%');$('.lob68e123c3a6d4e38ac89099137a00554').css('left','50%');$('.lob68e123c3a6d4e38ac89099137a00554').css('position','fixed');$('.lob68e123c3a6d4e38ac89099137a00554').css('z-index','100001');$('.lob68e123c3a6d4e38ac89099137a00554').show();$('.lob68e123c3a6d4e38ac89099137a00554').css('margin-left','-16px');$('.lob68e123c3a6d4e38ac89099137a00554').css('margin-top','-16px');if (window.FormData){var frmData=new FormData($('#frm1dbb17db07f54dc0a55f2a82be1a7b9e')[0]);frmData.append('ctl19b1bedba7d546529c0aa54c7e4d2040_1dbb17db07f54dc0a55f2a82be1a7b9e','1');$.ajax({url:'{!! Request::fullUrl() !!}',type:'POST',data:frmData,success:function(data,textStatus,jqXHR){$('#ctl19b1bedba7d546529c0aa54c7e4d2040_1dbb17db07f54dc0a55f2a82be1a7b9e').removeAttr('disabled');$('.ovb68e123c3a6d4e38ac89099137a00554').hide();$('.lob68e123c3a6d4e38ac89099137a00554').hide();if (data=='InvalidCaptcha'){$('#mdlb68e123c3a6d4e38ac89099137a00554Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/redirigir/'+encodeURIComponent(($('#ctlc3ddcec421964d0a9d813f1de97f380c_1dbb17db07f54dc0a55f2a82be1a7b9e').val() == '' ? '-' : $('#ctlc3ddcec421964d0a9d813f1de97f380c_1dbb17db07f54dc0a55f2a82be1a7b9e').val()))+'/2';},processData:false,contentType:false});}else{var  iframeId='unique'+(new Date().getTime());var iframe=$('<iframe src="javascript:false;" name="'+iframeId+'" />');iframe.hide();$('#frm1dbb17db07f54dc0a55f2a82be1a7b9e').attr('target',iframeId);$('#frm1dbb17db07f54dc0a55f2a82be1a7b9e').attr('action','{!! Request::fullUrl() !!}');iframe.appendTo('body');iframe.load(function(e){$('#ctl19b1bedba7d546529c0aa54c7e4d2040_1dbb17db07f54dc0a55f2a82be1a7b9e').removeAttr('disabled');$('.ovb68e123c3a6d4e38ac89099137a00554').hide();$('.lob68e123c3a6d4e38ac89099137a00554').hide();var doc=getDocb68e123c3a6d4e38ac89099137a00554(iframe[0]);var docRoot=doc.body?doc.body:doc.documentElement;var data = docRoot.innerHTML;if (data=='InvalidCaptcha'){$('#mdlb68e123c3a6d4e38ac89099137a00554Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/redirigir/'+encodeURIComponent(($('#ctlc3ddcec421964d0a9d813f1de97f380c_1dbb17db07f54dc0a55f2a82be1a7b9e').val() == '' ? '-' : $('#ctlc3ddcec421964d0a9d813f1de97f380c_1dbb17db07f54dc0a55f2a82be1a7b9e').val()))+'/2';});$('#frm1dbb17db07f54dc0a55f2a82be1a7b9e').submit();}}return false;});$('#name75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e').val($('#ctl75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e option:selected').text());$('#ctl75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e').change(function(){$('#name75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e').val($('#ctl75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e option:selected').text());$('#hid75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e').val($('#ctl75a6e0797cc54d8d828a39dfda3307fe_1dbb17db07f54dc0a55f2a82be1a7b9e').val());});var el41332b542a734638b2276a180f65af00_1dbb17db07f54dc0a55f2a82be1a7b9e = Array.prototype.slice.call(document.querySelectorAll('.ctl41332b542a734638b2276a180f65af00_1dbb17db07f54dc0a55f2a82be1a7b9e'));el41332b542a734638b2276a180f65af00_1dbb17db07f54dc0a55f2a82be1a7b9e.forEach(function(html) {var sw41332b542a734638b2276a180f65af00_1dbb17db07f54dc0a55f2a82be1a7b9e = new Switchery(html,{color:'#64bd63'});});</script>
@endsection