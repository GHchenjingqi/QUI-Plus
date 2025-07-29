
let QUI = {
    data: {
        title: "QUIPlus",
        name: "QUIPlus",
        des: "QUI是一款开源的WEB端ui框架，项目使用开源插件框架：JQuery,Wordpress,swiper等。",
        titleInPage:"欢迎回来，EMO~", //进入页面提示语
        titleOutPage:"不要走嘛，再看看！", //进入页面提示语
    },
    dataBase: {
    	themes:[{
			id:0,
			name:"无图模式",
			files:"none",
		},
		{
			id:1,
			name:"鬼刀魔女",
			files:"https://cdn.jsdelivr.net/gh/GHchenjingqi/qui/img/bz01.jpg",
		},{
			id:2,
			name:"COS可爱",
			files:"https://cdn.jsdelivr.net/gh/GHchenjingqi/qui/img/bz02.jpg",
		},{
			id:3,
			name:"机车靓妹",
			files:"https://cdn.jsdelivr.net/gh/GHchenjingqi/qui/img/bz03.jpg",
		}],
		voices:[{
			id:0,
			title:"风声~",
			files:""
		}],
    },
    debugs:["debug","log","warn","info"],
    size:{
    	width:1920,
    	height:1080
    }
};
//初始化必须数据
QUI.Init = async function (themeName) {
	//禁用调试
    this.debugs = this.debugs
    this.debugs.forEach((item)=>{
    	console[item] = function(){return null}
    })
    //正式环境下开启
    this.width = this.GetWinWidth() //设备宽度
    window.onresize = () => {
        this.width = this.GetWinWidth()
    }
    this.dataBase.url = this.GetUrl()
    themeName = themeName?themeName:"Sky"
    this.title = this.data.title+"-"+themeName+"主题";
	
    this.Error(this.title)
    this.Error(this.data.des)
    await QUI.WindowSize();
     
}

//设备分辨率
QUI.WindowSize= async function (){
 	let h = window.screen.height;
 	let w =  window.screen.width;
 	QUI.size = {
 		width:w,
 		height:h
 	}
}

QUI.TitleChange = function (){
	//动态标题
	let OriginTitile = document.title,titleTime;
	document.addEventListener("visibilitychange",function() {
	    if (document.hidden) {
	        document.title = QUI.data.titleInPage;
	        clearTimeout(titleTime)
	    } else {
	        document.title = QUI.data.titleOutPage;
	        titleTime = setTimeout(function() {
	            document.title = OriginTitile
	        },
	        1000)
	    }
	});
}
// 常用方法归档：
QUI.Log = function (val) {
    return console.log(val)
}
QUI.Error = function (val) {
    return console.error(val)
}

QUI.GetUrl = function(){
	let webSite = {}
	try{
			console.log("进入获取url模块~")
			webSite.url = window.location.href
			webSite.domain = window.location.host
			webSite.port = window.location.port
			webSite.search = window.location.search
			webSite.hash = window.location.hash
			webSite.pathname = window.location.pathname
			console.log("退出获取url模块~")
	}
	catch{
			console.error("Url初始化失败，请求获取失败！")
	}
	return webSite;
}
// 判断参数是否为空
QUI.IsEmpty = function (obj) {
    if (obj == undefined || obj == null || obj == '' || obj == [] || obj == {}) {
		return true;
	} else {
		return false;
	}
}
// 判断参数类型
QUI.TypeTest = function (obj) {
    let res = Object.prototype.toString.call(val).slice(8,-1);
	return res;
}

// 断言
QUI.Assert = function (condition, msg) {
    if (!condition) {
        throw new Error((msg))
    }
}

// 获取当前浏览器的宽度
QUI.GetWinWidth = function () {
    let width = document.body.getBoundingClientRect().width
    if (width) {
        return width
    }
}
// 判断是否含有某个字符
QUI.IsHas = function (obj, param) {
    if (typeof (obj) == 'object') {
        // 判断是否为数组or对象
        if (Array.isArray(obj)) { // 数组
            for (let i in obj) {
                if (Object.prototype.hasOwnProperty.call(obj, i)) {
                    if (obj[i] === param) {
                        return true
                    }
                }
            }
        } else { // 对象
            for (let i in obj) {
                if (i === param) {
                    return true
                }
            }
        }
    } else { //当字符串处理
        if (obj.indexOf(param) > -1) {
            return true;
        }
    }
    return false;
}

// 创建js
QUI.CreateScript = function (src) {
    var el = document.createElement('script');
    el.src = src;
    el.async = true;
    el.defer = true;
    document.body.appendChild(el);
}


// 防抖
QUI.Debounce = function (fn, wait) {
    var timer = null;
    return function () {
        if (timer !== null) {
            clearTimeout(timer);
        }
        timer = setTimeout(fn, wait);
    }
}

// 时间格式化
QUI.DateFormat = function (date, formatStr) {
    var str = formatStr;
    var Week = ['日', '一', '二', '三', '四', '五', '六'];

    str = str.replace(/yyyy|YYYY/, date.getFullYear());
    str = str.replace(/yy|YY/, (date.getYear() % 100) > 9 ? (date.getYear() % 100).toString() : '0' + (date.getYear() %
        100));
    var month = date.getMonth() + 1;
    str = str.replace(/MM/, month > 9 ? month.toString() : '0' + month);
    str = str.replace(/M/g, month);

    str = str.replace(/w|W/g, Week[date.getDay()]);

    str = str.replace(/dd|DD/, date.getDate() > 9 ? date.getDate().toString() : '0' + date.getDate());
    str = str.replace(/d|D/g, date.getDate());

    str = str.replace(/hh|HH/, date.getHours() > 9 ? date.getHours().toString() : '0' + date.getHours());
    str = str.replace(/h|H/g, date.getHours());
    str = str.replace(/mm/, date.getMinutes() > 9 ? date.getMinutes().toString() : '0' + date.getMinutes());
    str = str.replace(/m/g, date.getMinutes());

    str = str.replace(/ss|SS/, date.getSeconds() > 9 ? date.getSeconds().toString() : '0' + date.getSeconds());
    str = str.replace(/s|S/g, date.getSeconds());
    return str;
}

// 获取当前时间戳
QUI.GetTimeHCuo = function () {
    return new Date().getTime()
}
// 更新时间是否过期：6小时更新一次 —— 参数均为时间戳
QUI.GetTimeHour = function (time, oldTime) {
    let newTime = (time - oldTime) / 1000 / 60 / 60;// 转换为 小时
    return newTime
}
// 当前时间段欢迎语
QUI.GetTimeWord = function () {
    let str = ""
    let hour = new Date().getHours()
    if (hour < 6) {
        str = "凌晨好！"
    } else if (hour < 9) {
        str = "早上好！"
    } else if (hour < 12) {
        str = "上午好！"
    } else if (hour < 14) {
        str = "中午好！"
    } else if (hour < 17) {
        str = "下午好！"
    } else if (hour < 19) {
        str = "傍晚好！"
    } else if (hour < 22) {
        str = "晚上好！"
    } else {
        str = "夜里好！"
    }
    return str
}
//时间戳转换成时间
QUI.TimeStampToDate = function (timestamp) {
    var time = new Date(timestamp) //先将时间戳转为Date对象，然后才能使用Date的方法
    var year = time.getFullYear();
    var month = time.getMonth() + 1; //月份是从0开始的
    month = month < 10 ? '0' + month : month;
    var day = time.getDate();
    day = day < 10 ? '0' + day : day;
    var hour = time.getHours();
    hour = hour < 10 ? '0' + hour : hour;
    var minute = time.getMinutes();
    minute = minute < 10 ? '0' + minute : minute;
    var second = time.getSeconds();
    second = second < 10 ? '0' + second : second;
    return year + '-' + month + '-' + day + '' + hour + ':' + minute + ':' + second;
}

// 获取url对应参数
QUI.GetQuery = function (name) {
    var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
    var r = window.location.search.substr(1).match(reg);
    if (r != null) {
        return unescape(r[2]);
    }
    return null;
}

// 返回对应天气类型的index序号
QUI.FilterWeatherType = function (arr, val) {
    let n = 0
    arr.forEach((item, index) => {
        if (item.state.indexOf(val) > -1) {
            n = index
        }
    })
    return n
}

// 获取当前ip路径两个自定字符串之前的字符串
QUI.GetABc = function (param1, param2) {
    let urls = window.location.pathname;
    let start = urls.indexOf(param1);
    let end = urls.indexOf(param2);
    let str;
    if (start > -1 && end > -1) {
        str = urls.slice(start + param1.length, end);
    }
    return str;
}

// 清空指定字符串
QUI.EmptyStr = function (str, param) {
    let reg = new RegExp(param, 'gm');
    return str.replace(reg, "");
}

// 替换指定字符串,sign不存在为清空,等同于emptyStr
QUI.RepStr = function (str, param, sign) {
    let reg = new RegExp(param, 'gm');
    sign = sign || '';
    return str.replace(reg, sign);
}


// 获取n个随机数
QUI.RomCode = function (n) {
    //将数字、小写字母及大写字母输入
    var str = "1234567890qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM";
    //给一个空字符串
    var res = '';
    //循环4次，得到4个字符
    for (var i = 0; i < n; i++) {
        //将得到的结果给字符串，调用随机函数，0最小数，62表示数字加字母的总数
        res += str[QUI.Random(0, 62)];
    }
    return res;
}
//随机数
QUI.Random = function (max, min) {
    return Math.round(Math.random() * (max - min) + min);
}

// cookie使用:增删改查
QUI.Cookie = {
    //根据key值获取对应的cookie
    get: function (key) {

        //获取cookie
        let data = document.cookie;
        //获取key第一次出现的位置    pwd=
        let startIndex = data.indexOf(key + '=');
        //  name=123;pwd=abc
        //如果开始索引值大于0表示有cookie
        if (startIndex > -1) {

            //key的起始位置等于出现的位置加key的长度+1
            startIndex = startIndex + key.length + 1;

            //结束位置等于从key开始的位置之后第一次;号所出现的位置

            let endIndex = data.indexOf(';', startIndex);

            //如果未找到结尾位置则结尾位置等于cookie长度，之后的内容全部获取
            endIndex = endIndex < 0 ? data.length : endIndex;

            return decodeURIComponent(data.substring(startIndex, endIndex));


        } else {

            return '';
        }

    },

    set: function (key, value, time) {
        //默认保存时间
        time = time || 7; //默认七天
        //获取当前时间
        let cur = new Date();

        let undefined;

        //设置指定时间
        cur.setTime(cur.getTime() + time * 24 * 3600 * 1000);

        //创建cookie  并且设置生存周期为GMT时间
        document.cookie = key + '=' + encodeURIComponent(value) + ';expires=' + (time === undefined ? '' : cur.toGMTString());

    },

    del: function (key) {

        //获取cookie
        let data = this.get(key);

        //如果获取到cookie则重新设置cookie的生存周期为过去时间
        if (data !== false) {

            this.set(key, data, -1);

        }

    }
}

// H5存储:增删改查
class Storage {
    constructor(type) {
        this.type = type || 'localStorage'; //设置默认缓存类型为localStorage
        this.options = {
            startTime: 0, // 开始时间(ms)
            duration: 0,  // 有效持续时间(ms)
        };
    }

    set(name, data, duration) {
        this.options.startTime = new Date().getTime();
        this.options.duration = duration || 1 * 24 * 3600; // 默认一天有效
        let value = null;
        if (typeof data !== 'object' || data == null) {
            value = data;
        } else {
            value = JSON.stringify(data);
        }
        if (this.type === "localStorage") {
            localStorage.setItem(name, value);
        } else {
            sessionStorage.setItem(name, value);
        }
    }

    get(name) {
        let item = this.type === "localStorage" ? localStorage.getItem(name) : sessionStorage.getItem(name);
        try {
            item = JSON.parse(item);
        } catch (e) {
            item = item;
        }
        if (this.options.startTime > 0) {
            const now = new Date().getTime();
            if (now - this.options.startTime > this.options.duration) {
                this.removeItem(name);
                return null;
            }
        }
        return item;
    }

    del(name) {
        if (this.type === "localStorage") {
            localStorage.removeItem(name);
        } else {
            sessionStorage.removeItem(name);
        }
    }

    clear() {
        if (this.type === "localStorage") {
            localStorage.clear();
        } else {
            sessionStorage.clear();
        }
    }
}

QUI.LocalStg = new Storage("localStorage");
QUI.SessionStg = new Storage("sessionStorage");

//export default QUI;