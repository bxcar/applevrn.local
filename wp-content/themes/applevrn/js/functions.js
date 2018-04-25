jQuery(function(){
	jQuery.fn.wait = function(time, type) {
		time = time || 1000;
		type = type || "fx";
		return this.queue(type, function() {
			var self = this;
			setTimeout(function() {
				jQuery(self).dequeue();
			}, time);
		});
	};
    
	if(jQuery(".b-item-cont").length){
		var _b = jQuery(".b-item-cont"),
			images = _b.find(".view-wrap .item"),
			pointer = _b.find(".view-list-pointer");
		
		_b.find(".view-list .imglink").click(function(){
			var _li = jQuery(this).parent(),
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
			jQuery(this).addClass("inactive").unbind("click");
			
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
						jQuery(this).addClass("notfilled")
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
			
			jQuery(this).find("input[type=text]").each(function(){
				if(!jQuery(this).val()){
					blinking(jQuery(this).parent());
					stop = true;
				}
				
				if(/\[email\]/.test(jQuery(this).attr('name'))){
					if(!(/.+@.+\..+/.test(jQuery(this).val()))){
						blinking(jQuery(this).parent());
						stop = true;
					}
				}
			});
			
			if(stop) return false;
		});
		
		jQuery("input").focusin(function(){
			jQuery(this).parent().removeClass("notfilled");
		});
	}
});