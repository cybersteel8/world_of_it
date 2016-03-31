<?php
$base_url = 'http://' . $_SERVER['SERVER_NAME'] . '/world_of_it/';

echo '<main style="background-image: url(../../assets/img/bg-temp.png)">';
	echo '<div class="container" style="min-height: 800px;">';
		echo '<h1 id="quoteHeader">Request a personalized quote:</h1>';
		if(isset($quoteHeader))
		{
			echo '<p id="quoteHeaderSubText">'.$quoteHeader.'</p>';
		}
		echo '<h2 id="quoteHeader2">Your details:</h2>';
		echo form_open($base_url.'submitQuote', 'id="quoteForm"');
?>
		<label for="quoteFName" style="font-size: 20px;">First Name</label>
		<input type="text" id="quoteFName" class="quoteInput" name="quoteFName" size="21" maxlength="120" placeholder="" value="<?php echo (isset($quoteFName) ? $quoteFName : ''); ?>">
		<input type="text" id="quoteLName" class="quoteInput" name="quoteLName" size="21" maxlength="120" placeholder="Last Name" value="<?php echo (isset($quoteLName) ? $quoteLName : ''); ?>">
		<input type="email" id="quoteEmail" class="quoteInput" name="quoteEmail" size="21" maxlength="120" placeholder="Your Email" value="<?php echo (isset($quoteEmail) ? $quoteEmail : ''); ?>">
		<input type="email" id="quoteEmail" class="quoteInput" name="quoteEmail" size="21" maxlength="120" placeholder="Your Email" value="<?php echo (isset($newsletterEmail) ? $newsletterEmail : ''); ?>">

<?php
		echo form_close();

	echo '</div>';
echo '</main>';