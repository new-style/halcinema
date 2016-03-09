$(function(){
	var human = [0,0,0,0];
	var price = [1800,1500,1000,500];
	var sheetNum = '';
	$('[name=human]').change(function(){
		var sum =0;
		var count = 0;
		for(var i = 0;i< 4;i++){
			human[i]=($('.l-select').eq(i).children('[name=human]').val())
			sum += parseInt(human[i])*parseInt(price[i]);
			count += parseInt(human[i]);
		}
		$('.l-price').eq(4).html(sum+'円');
		$('.l-select').eq(4).html(count+'枚');
	});


	$('.sheet').on('click',function(){
		var aaa = $(this).children('input').val();
		var bbb = $(this).parent().find('.sheetName').children('input').val();
		sheetNum = aaa+bbb;
		$(this).toggleClass('sheetActive');
		if( $(this).hasClass('sheetActive') ){
			$('.sheetWrap').append('<input type="hidden" name="sheetNo[]" value="'+sheetNum+'" class="'+sheetNum+'">');
		}else{
			$('.'+sheetNum).remove();
		}
	});
});







