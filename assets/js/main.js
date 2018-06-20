
//ajax 发送翻译信息的请求，并返回翻译后结果
function checkWord(word="", ReturnDiv="", url="") {
	v = encodeURIComponent(word);
	var info = "word="+v;
	var TW = new XMLHttpRequest();
	TW.onreadystatechange = function(){
		if (TW.readyState == 4) {
			document.getElementById(ReturnDiv).innerHTML = TW.responseText;
		}
	}
	TW.open('post', url);
	TW.setRequestHeader("content-type","application/x-www-form-urlencoded")
	TW.send(info);
}
//选取文字
function select(o, fn, ck, checkWord, url){
var My;var Mx;
	o.onmouseup = function(e){
	var event = window.event || e;
	var target = event.srcElement ? event.srcElement : event.target;
		if (/input|textarea/i.test(target.tagName) && /firefox/i.test(navigator.userAgent)) {
		//Firefox在文本框内选择文字
			var staIndex=target.selectionStart;
			var endIndex=target.selectionEnd;
			if(staIndex!=endIndex){
				var sText=target.value.substring(staIndex,endIndex);
				fn(sText,target);
				if (ck) {
					mouseMove();
					checkWord(sText,'returnCheck',url);
				}
			}
		}
		else{
		//获取选中文字
		var sText = document.selection == undefined ? document.getSelection().toString():document.selection.createRange().text;
			if (sText != "") {
			//将参数传入回调函数fn
				fn(sText, target);
				if (ck) {
					mouseMove();
					checkWord(sText,'returnCheck',url);
				}
			}
		}
	}
	return 1;
}
//输出内容
function tanchu(txt="",tar=""){
	document.getElementById('WordByTran').innerHTML=txt;
}
//鼠标点击控制遮罩影藏
mocd();
function mocd() {
	var oDiv=document.getElementById('moveDiv');
	oDiv.onclick = function() {
		var oDiv=document.getElementById('moveDiv').style.display="none";
		var s=document.getElementById("ModleByall").style.display="none";
	};
	var s = document.getElementById("ModleByall");
	s.onclick = function() {
		var oDiv=document.getElementById('moveDiv').style.display="none";
		var s=document.getElementById("ModleByall").style.display="none";
	};
}
//获取坐标
function mousePosition(ev){
	 if(ev.pageX || ev.pageY){
		 return {x:ev.pageX, y:ev.pageY};
	 }
	 return {
		 x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,
		 y:ev.clientY + document.body.scrollTop - document.body.clientTop
	 };
}
function mouseMove(ev){
 ev = ev || window.event;
 var mousePos = mousePosition(ev);
	 var Mx = mousePos.x;
	 var My = mousePos.y;
	 toGreen(Mx,My);
}
//输出显示位置
function toGreen(y,x){
				var oDiv=document.getElementById('moveDiv');
				oDiv.style.position='absolute';
				oDiv.style.top= 10+x+'px';
				oDiv.style.left= 5+y+'px';
				oDiv.style.display="inline";
				var s = document.getElementById("ModleByall");
				s.style.display = "block";
}
//判断登录和注册框输入内容是否为空
function CKPas() {

	var pass = document.getElementById('pas1').value;
	var pass2 = document.getElementById('pas2').value;
	if (pass != pass2) {
		document.getElementById('checkPas').innerHTML="两次输入密码不同";
	}
}