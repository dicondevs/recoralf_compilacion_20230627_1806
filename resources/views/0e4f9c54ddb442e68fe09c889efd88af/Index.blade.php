@extends('layouts.mt4442dc848d66403ba717298b663cf8f5')
    @section('dzContenidoPag')
{!! str_replace("{Extra}","",$v4a021de58a344c32960a08292f88ce1f) !!}
<form method="POST" enctype="multipart/form-data" id="frm2b6173d7eceb4b9fabf3d44ffdff13ba"><input type="hidden" name="hid2b6173d7eceb4b9fabf3d44ffdff13ba" id="hid2b6173d7eceb4b9fabf3d44ffdff13ba" value="2b6173d7eceb4b9fabf3d44ffdff13ba" />{!! csrf_field() !!}<div class="row"><div class="col-md-9"><div class="form-group"><label for="ctl3607329572c440d9b68ef4a6c13f5921_2b6173d7eceb4b9fabf3d44ffdff13ba"><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9afdef6278254095be063c7dbf6e5cff'); ?> </label><input type="text" tabindex="1" id="ctl3607329572c440d9b68ef4a6c13f5921_2b6173d7eceb4b9fabf3d44ffdff13ba" name="ctl3607329572c440d9b68ef4a6c13f5921_2b6173d7eceb4b9fabf3d44ffdff13ba" class="form-control"  /></div></div></div><div class="row"><div class="col-md-7"><button tabindex="2" type="submit" id="ctl19b1bedba7d546529c0aa54c7e4d2040_2b6173d7eceb4b9fabf3d44ffdff13ba" name="ctl19b1bedba7d546529c0aa54c7e4d2040_2b6173d7eceb4b9fabf3d44ffdff13ba" class="btn btn-default" ><?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga17b7aaf1e824a75a5aa63b0d5382379'); ?></button></div></div></form><span class="rece3c15edbd66c4ecf9fa80c41a7f909a6" style="display:none;">
@if ($v3ed385dc42704305bcd03b8e24f4aec6 == null || count($v3ed385dc42704305bcd03b8e24f4aec6) == 0)

@else
    @foreach ($v3ed385dc42704305bcd03b8e24f4aec6 as $item)
<span class="rec0b2cd5b8287844eaa0d9e3de129b8094">{!! $item["fl0b2cd5b8287844eaa0d9e3de129b8094"] !!}</span>
    @endforeach
@endif

</span><div class="ove653cb9925714ea8b506819ea895b232" style="display:none;background-color:rgba(255,255,255,0.5);"></div><div class="loe653cb9925714ea8b506819ea895b232" style="display:none"><i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom" style="color:blue;"></i></div>
<div class="modal fade" id="mdle653cb9925714ea8b506819ea895b232Captcha" tabindex="-1" role="dialog" aria-labelledby="mdlLabele653cb9925714ea8b506819ea895b232Captcha">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClosee653cb9925714ea8b506819ea895b232Captcha" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabele653cb9925714ea8b506819ea895b232Captcha">[[00000000-0000-0000-0000-000000000000]]</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClosee653cb9925714ea8b506819ea895b232Captcha" data-dismiss="modal">[[00000000-0000-0000-0000-000000000000]]</button>
      </div>
    </div>
  </div>
</div>
  
@endsection
@section('styles')
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.3.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.css" /><style type="text/css">

</style>
@endsection
@section('scripts')
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/src/extra/validator/customvalidators.js" ></script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew2b6173d7eceb4b9fabf3d44ffdff13ba=true;var monThousands=''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();function validFunc2b6173d7eceb4b9fabf3d44ffdff13ba(){if ($('.isNumber').length>0){$('.isNumber').each(function(){$(this).val($(this).val().replace(''+'<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgMoneySymbol'); ?>'+'','').replace(new RegExp(monThousands,'g'),''));});}$('#frm2b6173d7eceb4b9fabf3d44ffdff13ba').parsley().destroy();$('#frm2b6173d7eceb4b9fabf3d44ffdff13ba').parsley();Parsley.on('field:validated',function(fieldInstance){if(fieldInstance.$element.is(":hidden")&&!fieldInstance.$element.hasClass("autoCompleteSelect")){fieldInstance._ui.$errorsWrapper.css('display','none');fieldInstance.validationResult=true;return true;}});var validated=$('#frm2b6173d7eceb4b9fabf3d44ffdff13ba').parsley().validate();return validated;}function errFunc2b6173d7eceb4b9fabf3d44ffdff13ba(){if ($('.isMoney').length>0){$('.isMoney').maskMoney('mask');}}var alreadySendede653cb9925714ea8b506819ea895b232=false;$('#ctl19b1bedba7d546529c0aa54c7e4d2040_2b6173d7eceb4b9fabf3d44ffdff13ba').click(function(){validated=validFunc2b6173d7eceb4b9fabf3d44ffdff13ba();if (!validated){errFunc2b6173d7eceb4b9fabf3d44ffdff13ba();}else{console.log(alreadySendede653cb9925714ea8b506819ea895b232);if(alreadySendede653cb9925714ea8b506819ea895b232){return false;}alreadySendede653cb9925714ea8b506819ea895b232=true;$('#ctl19b1bedba7d546529c0aa54c7e4d2040_2b6173d7eceb4b9fabf3d44ffdff13ba').attr('disabled','disabled');$('.ove653cb9925714ea8b506819ea895b232').css('top','0px');$('.ove653cb9925714ea8b506819ea895b232').css('left','0px');$('.ove653cb9925714ea8b506819ea895b232').css('position','fixed');$('.ove653cb9925714ea8b506819ea895b232').css('z-index','100000');$('.ove653cb9925714ea8b506819ea895b232').css('height','100%');$('.ove653cb9925714ea8b506819ea895b232').css('width','100%');$('.ove653cb9925714ea8b506819ea895b232').show();$('.loe653cb9925714ea8b506819ea895b232').css('top','50%');$('.loe653cb9925714ea8b506819ea895b232').css('left','50%');$('.loe653cb9925714ea8b506819ea895b232').css('position','fixed');$('.loe653cb9925714ea8b506819ea895b232').css('z-index','100001');$('.loe653cb9925714ea8b506819ea895b232').show();$('.loe653cb9925714ea8b506819ea895b232').css('margin-left','-16px');$('.loe653cb9925714ea8b506819ea895b232').css('margin-top','-16px');if (window.FormData){formdata=new FormData($('#frm2b6173d7eceb4b9fabf3d44ffdff13ba')[0]);formdata.append('ctl19b1bedba7d546529c0aa54c7e4d2040_2b6173d7eceb4b9fabf3d44ffdff13ba','1');if(fromButton!=''){formdata.append(fromButton,'1');}$.ajax({url:'{!! Request::fullUrl() !!}',type:'POST',data:formdata,success:function(data,textStatus,jqXHR){$('#ctl19b1bedba7d546529c0aa54c7e4d2040_2b6173d7eceb4b9fabf3d44ffdff13ba').removeAttr('disabled');$('.ove653cb9925714ea8b506819ea895b232').hide();$('.loe653cb9925714ea8b506819ea895b232').hide();if (data=='NotExists'){alreadySendede653cb9925714ea8b506819ea895b232=false;}if (data=='AlreadyExists'){alreadySendede653cb9925714ea8b506819ea895b232=false;}if (data=='InvalidCaptcha'){alreadySendede653cb9925714ea8b506819ea895b232=false;$('#mdle653cb9925714ea8b506819ea895b232Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/redirigir/'+encodeURIComponent(data[0].PK_REGION)+'/1';},processData:false,contentType:false});}else{var  iframeId='unique'+(new Date().getTime());var iframe=$('<iframe src="javascript:false;" name="'+iframeId+'" />');iframe.hide();$('#frm2b6173d7eceb4b9fabf3d44ffdff13ba').attr('target',iframeId);$('#frm2b6173d7eceb4b9fabf3d44ffdff13ba').attr('action','{!! Request::fullUrl() !!}');iframe.appendTo('body');iframe.load(function(e){$('#ctl19b1bedba7d546529c0aa54c7e4d2040_2b6173d7eceb4b9fabf3d44ffdff13ba').removeAttr('disabled');$('.ove653cb9925714ea8b506819ea895b232').hide();$('.loe653cb9925714ea8b506819ea895b232').hide();var doc=getDoce653cb9925714ea8b506819ea895b232(iframe[0]);var docRoot=doc.body?doc.body:doc.documentElement;var data = docRoot.innerHTML;if (data=='AlreadyExists'){}if (data=='InvalidCaptcha'){$('#mdle653cb9925714ea8b506819ea895b232Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/redirigir/'+encodeURIComponent(data[0].PK_REGION)+'/1';});$('#frm2b6173d7eceb4b9fabf3d44ffdff13ba').submit();}}return false;});function getDoce653cb9925714ea8b506819ea895b232(frame) {var doc=null;try {if (frame.contentWindow){doc = frame.contentWindow.document;}} catch(err) {}if (doc){return doc;}try {doc = frame.contentDocument ? frame.contentDocument : frame.document;} catch(err) {doc = frame.document;}return doc;}if($('.rece3c15edbd66c4ecf9fa80c41a7f909a6').children().length>0){isNew2b6173d7eceb4b9fabf3d44ffdff13ba=false;if($('.rec0b2cd5b8287844eaa0d9e3de129b8094').length>0){$('#ctl3607329572c440d9b68ef4a6c13f5921_2b6173d7eceb4b9fabf3d44ffdff13ba').val($('.rec0b2cd5b8287844eaa0d9e3de129b8094').html());$('#ctl3607329572c440d9b68ef4a6c13f5921_2b6173d7eceb4b9fabf3d44ffdff13ba').change();}}</script>
@endsection
