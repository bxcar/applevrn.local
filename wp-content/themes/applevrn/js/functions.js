$(function(){
	$.fn.wait = function(time, type) {
		time = time || 1000;
		type = type || "fx";
		return this.queue(type, function() {
			var self = this;
			setTimeout(function() {
				$(self).dequeue();
			}, time);
		});
	};
    
	if($(".b-item-cont").length){
		var _b = $(".b-item-cont"),
			images = _b.find(".view-wrap .item"),
			pointer = _b.find(".view-list-pointer");
		
		_b.find(".view-list .imglink").click(function(){
			var _li = $(this).parent(),
				oldImg = images.filter(":visible"),
				newIndex = _li.index();
			
			if(oldImg.index() != newIndex){
				oldImg.hide(250);
				images.eq( newIndex ).show(250);
				
				var p = _li.position();
				pointer.animate({
					top: p.top
				}, 250);
			}
			
			return false;
		});
		
		_b.find(".buy .b-bigbtn").click(function(){
			$(this).addClass("inactive").unbind("click");
			
			_b.find(".order").show(250, function(){
				_b.find(".order input:visible").eq(0).focus();
			});
			
			return false;
		});
		
		_b.find(".order form").submit(function(){
			var stop = false;
			
			function blinking(obj){
				var s = 100;
				
				obj.wait(1)
					.animate({"opacity": 0.1},s, function(){
						$(this).addClass("notfilled")
					})
					.wait(1)
					.animate({"opacity": 1},s)
					.wait(1)
					.animate({"opacity": 0.1},s)
					.wait(1)
					.animate({"opacity": 1},s)
					.wait(1)
					.animate({"opacity": 0.1},s)
					.wait(1)
					.animate({"opacity": 1},s);
			}
			
			$(this).find("input[type=text]").each(function(){
				if(!$(this).val()){
					blinking($(this).parent());
					stop = true;
				}
				
				if(/\[email\]/.test($(this).attr('name'))){
					if(!(/.+@.+\..+/.test($(this).val()))){
						blinking($(this).parent());
						stop = true;
					}
				}
			});
			
			if(stop) return false;
		});
		
		$("input").focusin(function(){
			$(this).parent().removeClass("notfilled");
		});
	}
});