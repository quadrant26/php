function color_fn(obj){

	var r = Math.floor(Math.random()*255);
	var g = Math.floor(Math.random()*255);
	var b = Math.floor(Math.random()*255);

	obj.style.backgroundColor = "rgba("+ r +", "+ g +", "+ b +", 1)"
};

function pos_l(obj){

	// 出现的位置必须是10的倍数
	var iNum_bor = 2;
	var iNum_o = 10;											// 边框
	var i_box_w = obj.clientWidth + iNum_bor;					//	父级的宽度
	var i_box_h = obj.clientHeight + iNum_bor;					//	父级的高度

	var i_x =  parseInt(i_box_w/iNum_o);
	var i_y =  parseInt(i_box_h/iNum_o);

	var i_round_num_x = Math.floor( Math.random()*i_x ) * iNum_o;					// 出现的位置 X
	var i_round_num_y = Math.floor( Math.random()*i_y ) * iNum_o;					// 出现的位置 Y

	return {x:i_round_num_x,y:i_round_num_y};
};


function shake(obj,s_b_side){
	var aDiv = obj.children;
	var len = aDiv.length
	var oFirst = aDiv[0];
	var oLast = aDiv[len-1];
	var i_o_x = oFirst.offsetLeft;
	var i_o_y = oFirst.offsetTop;
	
	var i_t_x = oLast.offsetLeft;
	var i_t_y = oLast.offsetTop;

	console.log("i_o_x=" + i_o_x +"////i_o_y=" + i_o_y +"////i_t_x=" + i_t_x +"////i_t_y=" + i_t_y );

	switch(s_b_side){
		case 'bBottom':
			break;
		case 'bRight':
			o_top.style.left = o_top.offsetLeft + iSpeed_x + 'px';
			break;
		case 'bLeft':
			o_top.style.left = o_top.offsetLeft - iSpeed_x + 'px';
			break;
		case 'bTop':
			o_top.style.top = o_top.offsetTop - iSpeed_x + 'px';
			break;
	};

	// 遇到边界 挂了
	if(o_top.offsetTop <= 0 ){
		alert("你挂了");
		clearInterval(timer);
	}else if( o_top.offsetTop >= (i_box_h - iNum_o) ){

		alert("你挂了");
		clearInterval(timer);
	};

	if(o_top.offsetLeft <= 0 ){
		alert("你挂了");
		clearInterval(timer);
	}else if( o_top.offsetLeft >= (i_box_w - iNum_o) ){

		alert("你挂了");
		clearInterval(timer);
	};
}