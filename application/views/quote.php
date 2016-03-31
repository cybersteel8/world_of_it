<?php

echo '<main style="background-image: url(../../assets/img/bg-temp.png)">';
	echo '<div class="container" style="min-height: 800px;">';
		echo '<h1 id="quoteHeader">Request a personalized quote:</h1>';
		if(isset($quoteHeader))
		{
			echo '<p id="quoteHeaderSubText">'.$quoteHeader.'</p>';
		}

		echo form_open(BASE_URL.'submitQuote', 'id="quoteForm"'); ?>
			<div id="quoteFormColumn">
				<h2 id="quoteHeader2">Your details:</h2>
				<label for="quoteFName">First Name</label>
				<input type="text" id="quoteFName" name="quoteFName" size="30" maxlength="120" value="<?php echo (isset($quoteFName) ? $quoteFName : ''); ?>">
				<label for="quoteLName">Last Name</label>
				<input type="text" id="quoteLName" name="quoteLName" size="30" maxlength="120" value="<?php echo (isset($quoteLName) ? $quoteLName : ''); ?>">
				<label for="quoteEmail">Contact Email</label>
				<input type="email" id="quoteEmail" name="quoteEmail" size="30" maxlength="120" value="<?php echo (isset($quoteEmail) ? $quoteEmail : ''); ?>">
				<label for="quotePhone">Contact Number</label>
				<input type="text" id="quotePhone" name="quotePhone" size="30" maxlength="120" value="<?php echo (isset($newsletterEmail) ? $newsletterEmail : ''); ?>">
			</div>
			<div id="quoteFormColumn">
				<label for="quoteFName">First Name</label>
				<input type="text" id="quoteFName" name="quoteFName" size="30" maxlength="120" value="<?php echo (isset($quoteFName) ? $quoteFName : ''); ?>">
				<input type="text" id="quoteLName" name="quoteLName" size="30" maxlength="120" value="<?php echo (isset($quoteLName) ? $quoteLName : ''); ?>">
				<input type="email" id="quoteEmail" name="quoteEmail" size="30" maxlength="120" value="<?php echo (isset($quoteEmail) ? $quoteEmail : ''); ?>">
				<input type="email" id="quoteEmail" name="quoteEmail" size="30" maxlength="120" value="<?php echo (isset($newsletterEmail) ? $newsletterEmail : ''); ?>">
			</div>
			<div id="quoteFormColumn">
				<label for="quoteFName">First Name</label>
				<input type="text" id="quoteFName" name="quoteFName" size="30" maxlength="120" value="<?php echo (isset($quoteFName) ? $quoteFName : ''); ?>">
				<input type="text" id="quoteLName" name="quoteLName" size="30" maxlength="120" value="<?php echo (isset($quoteLName) ? $quoteLName : ''); ?>">
				<input type="email" id="quoteEmail" name="quoteEmail" size="30" maxlength="120" value="<?php echo (isset($quoteEmail) ? $quoteEmail : ''); ?>">
				<input type="email" id="quoteEmail" name="quoteEmail" size="30" maxlength="120" value="<?php echo (isset($newsletterEmail) ? $newsletterEmail : ''); ?>">
			</div>
<?php   echo form_close();
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