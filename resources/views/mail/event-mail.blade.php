<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .mail-container{background-color: #F4F9FC; padding: 50px;}
        .mail-container tr td:nth-child(1){font-weight: 600;}
        .mail-container tr td:nth-child(2){padding: 5px 10px; font-weight: 600;}
    </style>
</head>
<body>
    <div class="mail-container">
		<table>
			<tbody>
				<tr>
					<td>Subject</td>
					<td>:</td>
					<td>{{ $mailinfo['subject'] }}</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td>{{ $mailinfo['name'] }}</td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td>:</td>
					<td>{{ $mailinfo['email'] }}</td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td>:</td>
					<td>{{ $mailinfo['phone'] }}</td>
				</tr>
				<tr>
					<td>Message</td>
					<td>:</td>
					<td>{{ $mailinfo['message'] }}</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>