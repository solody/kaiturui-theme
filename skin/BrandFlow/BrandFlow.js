// JavaScript Document首页轮显组件
(function( $ ) {
  $.fn.BrandFlow = function( data, arrow_up,  arrow_dn ) {
	
	//构建HTML框架
	this.append('<div></div>\
				 <div></div>');
	
	var Frames = this.children('div');
	var Menu = Frames[1];
	var Stage = Frames[0];
	
	//设置HTML框架尺寸及布局
	var frame_width = 930;
	var frame_height = 400;
	var menu_width = 150;
	
	this.css({width:frame_width,
			 height:frame_height,
			 backgroundColor:"#F3F3F3",
			 overflow:"hidden"});
	$(Menu).css({width:menu_width,
				height:frame_height,
				 float:"left"});
	$(Stage).css({width:frame_width-menu_width,
				 height:frame_height,
				  float:"left",
				  overflow:"hidden",
			 backgroundColor:"#000"});
	
	
	//构建菜单
	var menu_item_count = 0;
	var menu_html = '<div></div><div style=" overflow:hidden; height:360px;"><ul style=" width:130px; margin:0 auto 0 auto; list-style:none; padding:1px 0 0 0;">';
	
	for( var data_item_index in data){
		menu_item_count++;
		var data_item = data[data_item_index];
		menu_html += '<li index="'+data_item_index+'" style=" height:59px; margin-left:0px; overflow:hidden; border-bottom:1px solid #DDD; "><img src="'+ data_item.brand.image +'" alt="'+ data_item.brand.name +'" /></li>';
	};

	menu_html += '</ul></div><div></div>';

	$(Menu).append( menu_html );
	
	//设置菜单项的点击事件处理器
	$(Menu).find("li").click(make_scene);

	//设置菜单箭头样式 箭头点击事件处理器
	var menu_nav_style = {height:"20px",
								lineHeight:"20px",
								background:"no-repeat center",
								cursor:"pointer",
								textAlign:"center"};
								
	$($(Menu).children("div")[0]).css(menu_nav_style).css({backgroundImage:"url("+arrow_up+")"}).click(click_up);
	$($(Menu).children("div")[2]).css(menu_nav_style).css({backgroundImage:"url("+arrow_dn+")"}).click(click_dn);
	
	var current_brand_index = 0;
	
	function click_up(){
		 if (check_menu_slide_state( "up" )){
			 current_brand_index--;
			 //alert("可以向上");
			 
			 var p = current_brand_index * 60;
			 
			 $(Menu).find("ul").animate({marginTop:-p});
			 
		 }
	}
	function click_dn(){
		 if (check_menu_slide_state( "dn" )){
			 current_brand_index++;
			 //alert("可以向下");
			 
			 var p = current_brand_index * 60;
			 
			 $(Menu).find("ul").animate({marginTop:-p});
			 
		 }
	}
	function check_menu_slide_state( flag ){
		//alert("项总数："+menu_item_count+" 当前项："+current_brand_index);
		
		if (flag == "up") {
			return (both()&&up());
		}else if (flag == "dn"){
			return (both()&&dn());
		}else{
			return false;
		}
		
		function both(){
			if ( menu_item_count > 8) return true;
		    else return false;
		}
		
		function up(){
			if ( current_brand_index >= 1 && current_brand_index <= (menu_item_count-6) ) return true;
		    else return false;
		}
		
		function dn(){
			if ( current_brand_index >= 0 && current_brand_index < (menu_item_count-6) ) return true;
		    else return false;
		}
		
	}
	

	var scene_auto_play = true;
	var scene_current_index = 0;
	var scene_image_count = 0;
	
	$(Stage).mouseover(function(e) {
        scene_auto_play = false
    }).mouseout(function(e) {
        scene_auto_play = true
    });;
	
	function scene_auto_play_proc(){
		if (scene_auto_play === true && scene_image_count>1){

			if (scene_current_index === (scene_image_count-1)) scene_current_index = 0;
			else scene_current_index++;
			
			$($($(Stage).children("ul")[0]).children("li")[scene_current_index]).click();
		}
	}
	
	
	//构建默认舞台
	function make_scene(){
		var brand_index = arguments[0];
		if (brand_index !== 0) {
			//从当前元素中取index属性值
			brand_index = $(this).attr("index");
		}
		//alert(brand_index);
		
		//构建舞台HTML
		var products_count = 0;
		var data_item = data[brand_index];
		var stage_html = '<ul style=" width:800px; margin:0; list-style:none; padding:0;">';
		var stage_nav_html = '<ul style=" margin:0; list-style:none; padding:0; position:absolute; margin:20px auto auto 750px; cursor:pointer;">';
		for ( var products_item_index in data_item.products ){
			products_count++;
			var products_item = data_item.products[products_item_index];
			stage_html += '<li style=" height:400px; margin-left:0px; overflow:hidden;"><a href="'+ products_item.link +'" title="'+ products_item.name +'" target="_blank"><img style=" border:none;" src="'+ products_item.image +'" alt="'+ products_item.name +'" /></a></li>';
			stage_nav_html += '<li index="'+products_item_index+'" style="width:15px; height:15px;opacity:0.6;filter: progid:DXImageTransform.Microsoft.Alpha(opacity=60); margin-left:0px; line-height:15px; text-align:center; font-size:12px; background-color:#F3F3F3;border:1px solid #999; margin-top:10px;">'+(parseInt(products_item_index)+1)+'</li>';
		}
		stage_html += "</ul>";
		stage_nav_html += "</ul>";
		
		$(Stage).empty();
		$(Stage).append(stage_nav_html+stage_html);
		
		scene_image_count = products_count;
		
		//为舞台导航条绑定点击事件处理器
		$($(Stage).children("ul")[0]).children("li").click(switch_to_index);
		$($(Stage).children("ul")[0]).children("li").mouseover(switch_to_index);
		
		function switch_to_index(){
			
			scene_current_index = parseInt($(this).attr("index"));
			var ofset = frame_height*scene_current_index;
			$($(Stage).children("ul")[1]).animate({marginTop:"-"+ofset+"px"});
		}
	}
	
	function rnd(start, end){return Math.floor(Math.random() * (end - start) + start);}
	
	$(Menu).find("li")[rnd(0,$(Menu).find("li").length)].click();
	
	//自动轮播
	setInterval(scene_auto_play_proc,3000);

  };
})( jQuery );