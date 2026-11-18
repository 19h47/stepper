<?php
/**
 * The landing: what the site is, and the plugins it runs.
 *
 * @package Stepper
 */

get_header();
?>
<header class="app-header">
	<h1>Stepper</h1>
	<p>
		A private WordPress, behind a login. It runs three plugins by 19h47, for the runs, the books
		and the images of every day. Their code is open, on GitHub: any WordPress can install them.
	</p>
</header>

<ul class="app-list">
	<li class="app-item">
		<h2>Run</h2>
		<p class="app-item__meta"><span>Runs</span> <span>Dashboard widget</span></p>
		<p>
			Log your runs, their date, duration, steps and weight, and see them in a widget of the
			dashboard: one chart per measure, over a week, a month, six months or a year.
		</p>
		<p><a href="https://github.com/19h47/run">19h47/run on GitHub</a></p>
	</li>
	<li class="app-item">
		<h2>Library</h2>
		<p class="app-item__meta"><span>Books</span> <span>Phone app</span></p>
		<p>
			Catalogue your books and log your readings: people, series, publishers, ratings, a
			dashboard, achievements and the recap of each year. Its app, on a phone, scans the barcode
			of a book and fills it from the catalogue of the BnF.
		</p>
		<p><a href="https://github.com/19h47/library">19h47/library on GitHub</a></p>
	</li>
	<li class="app-item">
		<h2>Moodboard</h2>
		<p class="app-item__meta"><span>Images</span> <span>Phone app</span></p>
		<p>
			Gather images, files, texts and links in channels, and see them in a clean grid. Its app
			installs on a phone and takes what is shared to it.
		</p>
		<p><a href="https://github.com/19h47/moodboard">19h47/moodboard on GitHub</a></p>
	</li>
</ul>
<?php
get_footer();
