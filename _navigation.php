<?php
	$page = $_SERVER['SCRIPT_NAME'];
	if (preg_match("/([0-9a-z_]*)\.php/i", $page, $matches)) {
		$page = $matches[1];
	}
?>
<ul class="nav navbar-nav">
	<li <?php if ($page === 'index'): ?>class="active"<?php endif; ?>><a href="/">Welcome</a></li>
	<li <?php if ($page === 'ourstory'): ?>class="active"<?php endif; ?>><a href="/ourstory/">Our Story</a></li>
	<li <?php if ($page === 'weddingweekend'): ?>class="active"<?php endif; ?>><a href="/weddingweekend/">Wedding Weekend</a></li>
	<li <?php if ($page === 'islainfo'): ?>class="active"<?php endif; ?>><a href="/islainfo/">Isla Info</a></li>
	<li><a href="http://www.amazon.com/registry/wedding/3FZT3RVMAX0Q1">Registry</a></li>
	<li <?php if ($page === 'rsvp'): ?>class="active"<?php endif; ?>><a href="/rsvp/">RSVP</a></li>
</ul>