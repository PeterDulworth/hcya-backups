
<html !DOCTYPE>
	<html>
		<head>
			<title> HCYA | Membership </title>
			<style>
				.error {color: #FF0000;}
				/*.formPrompt {float: right;}*/
				.header { text-align: right;
					 padding-top: 5px; }
				#dropDown { text-align: left;}
				.input {text-align: left;}
			</style>
			<script src="/wp-includes/js/addInput.js" language="Javascript" type="text/javascript"></script>
		</head>
		<body>
			<table id="myTable">
				<form method="get" name ="registrationForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<tr>
						<td class = "header"><p class="formPrompt">Last Name:</p></td>
						<td class = "input"><input type="text" name="lname">
							<span class="error">*</span></td>
					</tr>
					<tr>
						<td class = "header"><p class="formPrompt">First Name:</p></td>
						<td class = "input"><input type="text" name="fname">
							<span class="error">*</span></td>
					</tr>
					<tr>
						<td class = "header"><p class="formPrompt">Spouse First Name:</p></td>
						<td class = "input"><input type="text" name="lname">
					</tr>
					<tr>
						<td class = "header"><p class="formPrompt">Address:</p></td>
						<td class = "input"><input type="text" name="lname">
							<span class="error">*</span></td>
					</tr>
					<tr>
						<td class = "header"><p class="formPrompt">City:</p></td>
						<td class = "input"><input type="text" name="lname">
							<span class="error">*</span></td>
					</tr>
					<tr>
						<td class = "header"><p class="formPrompt">State:</p></td>
						<td id="dropDown">
							<select name = "state">
								<option value="0">--</option>
								<option value="0">TX</option>
								<option value="0">WA</option>
							</select>
							<span class="error">*</span></td>
					</tr>
					<tr>
						<td class = "header"><p class="formPrompt">ZIP/Postal Code:</p></td>
						<td class = "input"><input type="text" name="lname">
							<span class="error">*</span></td>
					</tr>
					<tr>
						<td class = "header"><p class="formPrompt">Home Phone:</p></td>
						<td class = "input"><input type="text" name="lname">
							<span class="error">*</span></td>
					</tr>
					<tr>
						<td class = "header"><p class="formPrompt">Cell:</p></td>
						<td class = "input"><input type="text" name="lname">
							<span class="error">*</span></td>
					</tr>
					<tr>
						<td class = "header"><p class="formPrompt">Email:</p></td>
						<td class = "input"><input type="text" name="lname">
							<span class="error">*</span></td>
					</tr>
					<div id="testDiv">
					<tr>
						<td class = "header"><p class="formPrompt">Child 1:</p></td>
						<td class = "input">
							<div id="dynamicInput">
         	 					<input type="text" name="myInputs[]">
    						</div></td>
					</tr>
					</div>
					<tr>
						<td><input type="button" value="Add Child" onClick="addChild('testDiv');"></td>
						<!-- <td><input type="button" value="Remove Child" onClick="removeChild();"</td> -->
					</tr>
					<tr>
						<td><input type="submit" value="Submit">
					</tr>
				</form>
			</table>
			<script type="text/javascript">
				counter = 1;
				var limit = 5;
				function addChild(divName)	{
					if (counter == limit)  {
						alert("You have reached the limit of adding " + counter + " inputs");
					}
					else {
						var table = document.getElementById("myTable"); {
						var row = table.insertRow(counter + 10);
						var cell1 = row.insertCell(0);
						var cell2 = row.insertCell(1);
						cell1.innerHTML = "<div class='header'>Child " + (counter + 1) + ": " + "</div>";
						cell2.innerHTML = "<div class='input'><input type='text' name='myInputs[]'></div";
					}
						document.getElementById(divName).appendChild(newdiv);
						counter++;
					}
				}
			</script>
			<?php
				$name = $_GET['fname'];
				echo $name;
				$myInputs = $_GET["myInputs"];
				foreach ($myInputs as $eachInput) {
 			    echo $eachInput . "<br>";
				}
			?>
		</body>
	</html>