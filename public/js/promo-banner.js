function promoBanner(){var e=document.querySelectorAll(".premiumPromoBannerWrapper"),n=SessionStorageManager.getInstance();!e.length||""==smallImageFg&&""==smallImageBg||(MG_Utils.addEventHandler(document.querySelector(".premiumPromoBannerClose"),"click",function(e){e.preventDefault?e.preventDefault():e.returnValue=!1,"persistant"==persistantMode?n.set("promoBannerPersistant","1",1):n.set("premiumPromoBanner"+promobannerId,"1",1),this.closest(".premiumPromoBannerWrapper").style.display="none"}),"persistant"==persistantMode?n.get("promoBannerPersistant")||(e[0].style.display="block"):n.get("premiumPromoBanner"+promobannerId)||(e[0].style.display="block"),MG_Utils.addEventHandler(document.querySelector(".promoBannerClassAnchor"),"click",function(){"undefined"!=typeof mixpanel&&"undefined"!=typeof promoClick&&mixpanel.track("Promo Banner",promoClick)}))}MG_Utils.domReady(promoBanner);