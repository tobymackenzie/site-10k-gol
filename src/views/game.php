<?php
?><div class="game" data-tick="<?=$game->getTick()?>"><?php
	?><div class="gameHeader"><?php
		?><ul class="gameControls"><?php
			?><li><a class="previousTick"<?php if($game->getTick() > 1){ ?> href="<?=$this->getPreviousUrl()?>"<?php } ?>>Previous<i> tick</i></a></li><?php
			?><li><a class="nextTick" href="<?=$this->getNextUrl()?>">Next<i> tick</i></a></li><?php
			?><li><a href="#settings">Settings</a></li><?php
		?></ul><?php
		?><span class="tickCount"><strong>Tick:</strong> <b><?=$game->getTick()?></b></span><?php
	?></div><?php
	include(__DIR__ . '/grid.php');
?></div><?php
include(__DIR__ . '/settings.php');
