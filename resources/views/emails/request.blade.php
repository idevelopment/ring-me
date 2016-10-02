<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

	body{
		background-color:#e5e9ec;
    font-family: 'Open Sans', sans-serif;
		color: #333536;
		font-size: 14px;
		margin: 0;
	}

	a	{
		color: #555;
		text-decoration: none;
	}

	a:hover	{
		color: #84ccc5;
	}

	.skin-font	{
		color: #84ccc5;
	}

	.bg-white	{
		background-color: #ffffff;
	}

	.bg-grey	{
		background-color: #fafafa;
	}

	.text-white	{
		color: #fff;
	}

	.text-skin	{
		color: #84ccc5;
	}

	.hover-white:hover	{
		color: #fff;
	}

	.email-btn	{
		background-color: #226FBC;
		border: 1px solid #eee;
		border-radius:4px;
		background-clip: padding-box;
		font-size:13px;
		text-align:center;
		color:#000;
		font-weight: 300;
	}

	.email-btn.skin-color	{
		background-color: #226FBC;
	}

	.email-btn.skin-color:hover	{
		background-color: #226FBC;
	}

	.email-btn.skin-color .btn-inner	{
		color: #fff;
	}

	.btn-inner	{
		display: block;
    color: #fff;
		padding: 7px 7px;
	}

</style>

</head>

<body>

<!-- Wrapper -->
<table width="100%" id="wrapper" border="0" cellspacing="0" cellpadding="0" bgcolor="#e5e9ec">
	<tbody>

		<!-- section1 -->
		<tr>
			<td>
				<table bgcolor="#226FBC" align="center" width="600" style="height:2px;">
					<tbody><tr><td></td></tr></tbody>
				</table>
			</td>
		</tr>
		<!-- end section1 -->
		<!-- section2 -->
	<tr>
	 <td>
	  <table bgcolor="#ffffff" align="center" width="600" style="border-bottom: 1px solid #eee; padding:15px 0;">
	   <tbody>
		<tr>
		 <td>
		  <table bgcolor="#ffffff" align="left" width="200" width="500">
			<tbody>
			<tr>
				<td width="300" align="left" valign="top">
				<table width="100%" width="500" border="0" align="center" cellpadding="0" cellspacing="0">
			<tbody>
		<tr>
		<td  align="left" valign="middle" style="font:20px; color:#84CCC5; padding-left:6px;">
			<a href="#" style=" color:#226FBC;">{{trans('callbacks.confirmationTitle')}} </a>
		</td>
		</tr>
		</tbody>
		</table>
		</td>
	</tr>
	</tbody>
 </table>

							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<!-- end section2 -->

		<!-- section3 -->
		<tr>
			<td>
				<table bgcolor="#ffffff" align="center" width="600" height="800" style="border-spacing: 0;">
					<tbody>
						<tr style="height:15px;"><td></td></tr>
						<tr align="left" style="padding-top: 10px;">
					     <td style="font:13px Open Sans, sans-serif; padding:0 50px 20px;">
                 <p>Dear {{ $user->name }} {{ $user->fname }},</p>
								  <div class="clearfix">&nbsp;</div>
                 <p>We have received your request and will contact you within the SLA times.</p>
								 <div class="clearfix">&nbsp;</div>
               </td>
						</tr>
						<tr style="height:40px;"><td></td></tr>
					</tbody>
				</table>
			</td>
		</tr>

		</tbody>
		</table>
