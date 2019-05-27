var Countdown = {
	timeLeft:null,
	timeToCountDown:null,
	timerId:null,
	day:null,
	hour:null,
	min:null,
	sec:null,
	init:function(){
		var _self = this;
		_self.timeToCountDown = new Date("December 31,2020 00:00:00");
		_self.day = document.getElementById("day");
		_self.hour = document.getElementById("hour");
		_self.min = document.getElementById("min");
		_self.sec = document.getElementById("sec");
		_self.coutndown();
	},
	coutndown:function(){
		var _self = this;
		_self.timerId =  setTimeout(function(){
			
			var currentTime = new Date();
			_self.timeLeft = _self.timeToCountDown - currentTime;
			
			if(_self.timeLeft < 0){
				clearTimeout(_self.timerId);
				return;
			}

			var day 	= Math.floor((_self.timeToCountDown - currentTime)/(24*60*60*1000));
			var hour 	= Math.floor(((_self.timeToCountDown - currentTime)%(24*60*60*1000))/(60*60*1000));
			var min 	= Math.floor(((_self.timeToCountDown - currentTime)%(24*60*60*1000))/(60*1000))%60;
			var sec 	= Math.floor(((_self.timeToCountDown - currentTime)%(24*60*60*1000))/1000)%60%60;
			
			day 		= ('0' + day).slice('-3');
			hour 		= ('0' + hour).slice('-2');
			min 		= ('0' + min).slice('-2');
			sec 		= ('0' + sec).slice('-2');

			_self.day.innerText = String(day) + "days";
			_self.hour.innerText = String(hour) + "hour";
			_self.min.innerText = String(min) + "minutes";
			_self.sec.innerText = String(sec) + "seconds";

			_self.coutndown();
		},10);
	}
}


window.onload = function(){
	Countdown.init();	
}

