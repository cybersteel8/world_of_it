<?php

echo '<main style="background-image: url(../../assets/img/bg-temp.png)">';
	echo '<div class="container" style="min-height: 800px;">';
		echo '<h1 id="quoteHeader">Request a personalized quote:</h1>';
		if(isset($quoteHeader))
		{
			echo '<p id="quoteHeaderSubText">'.$quoteHeader.'</p>';
		}

		echo form_open(BASE_URL.'submitQuote', 'id="quoteForm"'); ?>
			<div class="quoteFormSection">
				<table>
					<tr>
						<td class="tableLabel"><h2 id="quoteHeader2">Your details:</h2></td>
						<td></td>
					</tr>
					<tr>
						<td class="tableLabel"><label for="quoteFName">First Name</label></td>
						<td class="tableInput"><input type="text" id="quoteFName" name="quoteFName" size="20" maxlength="120" value="<?php echo (isset($quoteFName) ? $quoteFName : ''); ?>"></td>
						<td><span id="quoteFNameError" style="display: none;">You must enter a name</span></td>
					</tr>
					<tr>
						<td class="tableLabel"><label for="quoteLName">Last Name</label></td>
						<td class="tableInput"><input type="text" id="quoteLName" name="quoteLName" size="20" maxlength="120" value="<?php echo (isset($quoteLName) ? $quoteLName : ''); ?>"></td>
						<td><span id="quoteLNameError" style="display: none;">You must enter a name</span></td>
					</tr>
					<tr>
						<td class="tableLabel"><label for="quoteEmail">Contact Email</label></td>
						<td class="tableInput"><input type="email" id="email" name="email" size="20" maxlength="120" value="<?php echo (isset($quoteEmail) ? $quoteEmail : ''); ?>" onblur="validateEmail(value)"></td>
						<td><span id="emailError" style="display: none;">You must enter a valid email address</span></td>
					</tr>
					<tr>
						<td class="tableLabel"><label for="quotePhone">Contact Number</label></td>
						<td class="tableInput"><input type="text" id="quotePhone" name="quotePhone" size="20" maxlength="120" value="<?php echo (isset($newsletterEmail) ? $newsletterEmail : ''); ?>"></td>
						<td><span id="emailError" style="display: none;">You must enter a valid email address</span></td>
					</tr>
				</table>
			</div>
			<div class="quoteFormSection">
				<table>
					<tr>
						<td class="tableLabel"><h2 id="quoteHeader2">Tell us about your business:</h2></td>
						<td></td>
					</tr>
					<tr>
						<td class="tableLabel"><label for="quoteFName">Where are you located?</label></td>
						<td class="tableInput"><input type="text" id="quoteFName" name="quoteFName" size="20" maxlength="120" value="<?php echo (isset($quoteFName) ? $quoteFName : ''); ?>"></td>
					</tr>
					<tr>
						<td class="tableLabel"><label for="quoteLName">What's your business name?</label></td>
						<td class="tableInput"><input type="text" id="quoteLName" name="quoteLName" size="20" maxlength="120" value="<?php echo (isset($quoteLName) ? $quoteLName : ''); ?>"></td>
					</tr>
					<tr>
						<td class="tableLabel"><label for="quoteEmail">Current website (If you have one)</label></td>
						<td class="tableInput"><input type="email" id="quoteEmail" name="quoteEmail" size="20" maxlength="120" value="<?php echo (isset($quoteEmail) ? $quoteEmail : ''); ?>"></td>
					</tr>
					<tr>
						<td class="tableLabel"><label for="quotePhone">What type of website do you want?</label></td>
						<td class="tableInput"><input type="text" id="quotePhone" name="quotePhone" size="20" maxlength="120" value="<?php echo (isset($newsletterEmail) ? $newsletterEmail : ''); ?>"></td>
					</tr>
				</table>
			</div>
<?php   echo form_submit('submit', 'Submit');
		echo form_close();
	echo '</div>';
echo '</main>';

/* Quote form

Your details:
	your name
	your email
	your phone

Your business:
	Where are you located?
	Your business' name?
	Do you have a current website?
	What sort of website do you want us to create?

Features:
	features you want in your new website

- Instantaneous feedback when your typing
 * */