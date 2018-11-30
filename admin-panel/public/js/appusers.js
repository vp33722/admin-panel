$(document).ready(function()
{
	$(function() 
	{
		$('#last_date_of_subscription').datepicker({
	        dateFormat: 'yy-dd-mm',
	        onSelect: function(datetext){
	            var d = new Date(); // for now
	            var h = d.getHours();
	        		h = (h < 10) ? ("0" + h) : h ;

	        		var m = d.getMinutes();
	            m = (m < 10) ? ("0" + m) : m ;

	            var s = d.getSeconds();
	            s = (s < 10) ? ("0" + s) : s ;

	        		datetext = datetext + " " + h + ":" + m + ":" + s;
	            $('#last_date_of_subscription').val(datetext);
	        },
	    });
	});


 
	$('#is_full_access').click(function()
	{
		
		if(this.checked==true)
		{
			$('#purchase_ads').attr('checked',true);
			$('#is_purchase_watermark').attr('checked',true);
			$('#is_purchase_unlimited').attr('checked',true);
			$('#is_purchase_subscription').attr('checked',true);

			var d=new Date();
			
					var h = d.getHours();
	        		h = (h < 10) ? ("0" + h) : h ;

	        		var m = d.getMinutes();
	            	m = (m < 10) ? ("0" + m) : m ;

	            	var s = d.getSeconds();
	            	s = (s < 10) ? ("0" + s) : s ;

	            	var mn=d.getMonth();
	            	mn=(mn<10) ?("0" +mn) : mn;

	            	var dts=d.getDate();
	            	dts=(dts<10) ? ("0" +dts) : dts;
					


			var lastdate=d.getFullYear()+20 + "-" + mn + "-" + dts + " " + h + ":" + m + ":" + s; 
			$('#last_date_of_subscription').val(lastdate);
			

		}
		else
		{
			$('#purchase_ads').attr('checked',false);
			$('#is_purchase_watermark').attr('checked',false);
			$('#is_purchase_unlimited').attr('checked',false);
			$('#is_purchase_subscription').attr('checked',false);
			$('#last_date_of_subscription').val("");
		}			

	});

});