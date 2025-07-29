import Q from "../../../static/QUI3.0/js/main.js"
// 运行Q入口函数
let options = {
	callback: "init",
	debug: true,
	loadingSrc:"/wp-content/themes/QUIPlus/static/QUI3.0/css/icons/loading.gif"
}
let localhost = window.location.origin;
options.loadingSrc = localhost + options.loadingSrc
await Q.startRun(options)

init();
function init(){
	//一次性效果初始化
	TopImgClose();
	boom()
	MiniInit();
	search();//搜索
	header();//top悬浮
}
function TopImgClose(){
	//顶部图片关闭
    let tobEvent = document.getElementsByClassName("top-close-icon")[0];
    let imgbox = document.getElementsByClassName("top-img")[0];
    if(tobEvent && imgbox){
	    tobEvent.onclick = function(){
	    	let topFlag = Q.LocalStg.get('QTopImgFlag');
	    	if(topFlag == null){
	    		Q.LocalStg.set('QTopImgFlag',1,1*60);
	    	}
	    	imgbox.style.display = "none";
	    }
    }
}
function boom(){
		if(timestart && timeend){
			debugger
			let a = new Date(timestart);
			let aa = Date.parse(a);
			let b = new Date(timeend);
			let bb = Date.parse(b);
			let todate =  new Date;
			let tt = Date.parse(todate);
			debugger
			if(tt > aa && tt < bb){
				let boomFlag = Q.LocalStg.get('QUIBoomFlag');
				let boombox = document.getElementsByClassName("qui-boom")[0];
				if(boombox){
					if(boomFlag == 1){
						$(".qui-boom").hide();
					}else{
						$(".qui-boom").fadeIn(200);
						BoomClose()
					}
				}
			}else{
				console.error("弹窗已经过期，请重新设置弹窗时间！弹窗有效时间："+timeend)
			}
		}else{
				let boomFlag = Q.LocalStg.get('QUIBoomFlag');
				let boombox = document.getElementsByClassName("qui-boom")[0];
				if(boombox){
					if(boomFlag == 1){
						$(".qui-boom").hide();
					}else{
						$(".qui-boom").fadeIn(200);
						BoomClose()
					}34
				}
		}
}
function BoomClose(){
	//轮播图片关闭
    let Event = document.getElementById("ui-boom-close");
    let boombox = document.getElementsByClassName("qui-boom")[0];
    if(Event && boombox){
	    Event.onclick = function(){
	    	let topFlag = Q.LocalStg.get('QUIBoomFlag');
	    	if(topFlag == null){
	    		Q.LocalStg.set('QUIBoomFlag',1,1*60);
	    	}
	    	$(".qui-boom").fadeOut(200);
	    }
    }
}
//一次性效果初始化
function MiniInit(){
	//顶部图片是否隐藏
	let topFlag = Q.LocalStg.get('QTopImgFlag');
	let imgbox = document.getElementsByClassName("top-img")[0];
	if(imgbox){
		if(topFlag == 1){
		    imgbox.style.display = "none";
		}else{
			imgbox.style.display = "block";
		}
	}
}
function search(){
	let search = document.getElementsByClassName("search-input")[0];
	let start = document.getElementById("searchStart");
	let content = document.getElementById("searchContent");
	start.addEventListener('click',function(){
		start.style.display = "none";
		content.style.display = "block";
		search.focus();
	})
	search.onblur = function () {
		if(search.value.length===0){
			start.style.display = "block";
			content.style.display = "none";
		}
	}
}

function header(){
	var innerHeight = window.innerHeight;
	var mainHeight = $("body").innerHeight();
	var menuOffset = $(".ui-header").offset().top;
	if(Q.size && Q.size.width < 768){
		$(window).scroll(function () {
		    let amountScrolled = $(window).scrollTop();
		    if (mainHeight > innerHeight) {
		        if (amountScrolled >= menuOffset + 350 ) {
		        	$(".ui-welcome").hide();
		            $(".ui-header").addClass("header-fixed");
		        } else {
		        	$(".ui-welcome").show();
		            $(".ui-header").removeClass("header-fixed");
		        }
		    }
		    if(amountScrolled == 0){
		    		$(".ui-welcome").show();
		            $(".ui-header").removeClass("header-fixed");
		    }
		    
		    if(amountScrolled > 300){
		    	$("#go-top-link").show();
            	goto('header')
		    }else{
		    	$("#go-top-link").hide();
		    }
		});
	}else{
		$(window).scroll(function () {
		    let amountScrolled = $(window).scrollTop();
		    if (mainHeight > innerHeight) {
		        if (amountScrolled >= menuOffset + 350 ) {
		            $(".ui-header").addClass("header-fixed");
		        } else {
		            $(".ui-header").removeClass("header-fixed");
		        }
		    }
		    if(amountScrolled == 0){
		            $(".ui-header").removeClass("header-fixed");
		    }
		    
		    if(amountScrolled > 300){
		    	$("#go-top-link").show();
		    	goto('header')
		    }else{
		    	$("#go-top-link").hide();
		    }
		});
	}
	
}

function goto(id){
    let idevent =  document.getElementById("go-top-link");
    let ids = document.getElementById(id) || 'header';
    idevent.addEventListener('click',function(){
	    ids.scrollIntoView({behavior:"smooth",block:"start",inline:"nearest"})
	})
}