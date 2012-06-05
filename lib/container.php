    <div class="container">

      <h1>Random Password Generator</h1>
      <p>Create strong and secure Passwords</p>


          <div class="hero-unit">
	    <div class="form-horizontal">
		    <fieldset>
		    <legend>Random Password Generator</legend>
		    <div class="control-group">
			    <label class="control-label" for="input01">Symbols used</label>
			    <div class="controls">
				    <div class="btn-group">
	 				<input type="text" class="input-xlarge" id="input01" value="<?=passwords($_GET['s'])?>">
				    </div>
				<?php if ($_GET['s'] and $_GET['l']) { ?>
				    	<p class="help-block">Your generated password</p>
				<?php } else { ?>
				    	<p class="help-block">Select Password length and then characters</p>
				<?php } ?>
			    </div>

			    <label class="control-label" for="input01">Characters</label>
			    <div class="controls">
				    <div class="btn-group">
					<?php
						for ($i = 0; $i < 6; $i++)
						{
							if ($_GET['s'] == $types[$i])
							{ 
								echo '<a class="btn active" href="?s='.$types[$i].'&amp;l='.$_GET['l'].'">'.reMe($types[$i]).'</a>';
							}
							else
							{
								echo '<a class="btn" href="?s='.$types[$i].'&amp;l='.$_GET['l'].'">'.reMe($types[$i]).'</a>';
							}
	
						}
					?>
				    </div>
			    	<p class="help-block">Choose the characters</p>
			    </div>

			    <label class="control-label" for="input01">Password length</label>
			    <div class="controls">
				    <div class="btn-group">
					<?php
						for ($i = 6; $i < 13; $i++) 
						{
	
							if ($_GET['l'] == $i) 
							{ 
								echo '<a class="btn active" href="?s='.$_GET['s'].'&amp;l='.$i.'">'.$i.'</a>';
							}
							else 
							{
								 echo '<a class="btn" href="?s='.$_GET['s'].'&amp;l='.$i.'"> '.$i.' </a> ';
							}

						}
					?>
				    </div>
			    	<p class="help-block">Select the length of the password</p>
			    </div>
		    </div>
		    </fieldset>
	    </div>
          </div>

    </div> <!-- /container -->
