function LaunchBanner(){var e=document.querySelectorAll(".launchBannerWrapper");e.length&&(MG_Utils.addEventHandler(document.querySelector(".launchClose"),"click",function(e){e.preventDefault?e.preventDefault():e.returnValue=!1,setCookie("launchBanner","1",{expires:9999});var n=MG_Utils.closest(this,".launchBannerWrapper");MG_Utils.removeClass(n,"block")}),null==getCookie("launchBanner")&&MG_Utils.addClass(e[0],"block"))}MG_Utils.domReady(LaunchBanner);
function closeModal(){var i=isNotifiedObj.modalId,o=isNotifiedObj.notificationId,t=isNotifiedObj.token;$j.ajax({url:isNotifiedObj.ajaxUrl,data:{token:t,notificationId:o},type:"post",success:function(){setCookie("notified_sponsor_"+isNotifiedObj.liuId,1,365),setTimeout(function(){$j("#"+i).hide(200)},5e3)}})}