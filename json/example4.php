<script type="text/javascript" src="JQuery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("$b1").click(function(){
			$.ajax({
			url:"result.php",
			type:"POST",
			dataType:"JSON",
			data:$("#user_form").serialize(),
			success:function(res)
			{
				var jsn_txt = JSON.stringify(res,null,null);
				var obj = JSON.parse(jsn_txt);
				$("dis").show();
				$("uid").html(obj.userid);
				$("pwd").show(obj.p);

			}
		})
		})
		
	})
</script>
<form id="user_form">
User Id : <input type="text" name="userid" id="t1"><br />
<input type="button" value="Find"  name="Find" id="b1"></form><br />
<div id="dis" style="display: none">
user id : <span id="uid"></span><hr>
Password : <span id="pwd"></span>
</div>
