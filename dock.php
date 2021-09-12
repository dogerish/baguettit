<div id="dock">
	<a href="index.php" id="home" class="dock-nav dock-first">
		<img id="logo" src="baguette.svg" alt="Home" title="Home"></img>
	</a>
	<a href="all.php"    id="all"    class="dock-nav">All</a>
	<a href="tags.php"   id="tags"   class="dock-nav">Tags</a>
	<a href="search.php" id="search" class="dock-nav">Search</a>
	<div id="spacer" class="dock-nav"></div>
	<?php if (/*signed in*/ false): ?>
	<a href="settings.php" id="settings" class="dock-nav dock-last dock-user">Settings</a>
	<?php else: ?>
	<a href="signin.php" id="signin" class="dock-nav dock-last dock-user">Sign In</a>
	<?php endif; ?>
</div>
