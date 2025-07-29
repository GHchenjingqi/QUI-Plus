 // 文章标题固定，阅读进度条开启
 let html = document.documentElement;
 let winW = html.getBoundingClientRect().width;
 let winH = html.getBoundingClientRect().height;
 let pre = document.getElementById('progress');
 let fixTit =  document.getElementById('fix-title');
 setTagHeight();//设置tag高度
 setPreWidth(0,window.innerHeight,document.body.offsetHeight);
 window.onscroll = function () {
    let scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    //设置进度条宽度
    setPreWidth(scrollTop,window.innerHeight,document.body.offsetHeight);
    //标题悬浮
    fixTit.style.display = scrollTop>120 ? "block" :"none";
    //if(winW>768){ //非手机端}
    if(getFooterOffset()<100){
    	fixTit.style.display = "none"
    }

    
 }
 //进度条宽度
 function setPreWidth(scrollTop,winHeight,artHeight){
 	let wid = scrollTop/(artHeight-winHeight) * 100;
 	pre.style.width = wid + '%';
 }
 //Tag高度
 function setTagHeight(){
 	 let postTag = document.getElementById('ui-tags');
	 let post = document.getElementById('post');
	 if(postTag){
	    let tagH = postTag.offsetHeight;
	    post.style.paddingBottom = tagH +'px';
	}
 }

//获取滑块到底部的距离
function getFooterOffset(){
	// 变量 scrollHeight 是滚动条的总高度
    let scrollHeight = document.documentElement.scrollHeight || document.body.scrollHeight
    // 变量 windowHeight 是可视区的高度
    let windowHeight = document.documentElement.clientHeight || document.body.clientHeight
    // 变量scrollTop为当前页面的滚动条纵坐标位置
    let scrollTop = document.documentElement.scrollTop || document.body.scrollTop
    // 滚动条到底部得距离 = 滚动条的总高度 - 可视区的高度 - 当前页面的滚动条纵坐标位置
    var scrollBottom = scrollHeight - windowHeight - scrollTop
    return scrollBottom  
}
