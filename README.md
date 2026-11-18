# Stepper

The theme of [stepper.19h47.fr](https://stepper.19h47.fr): one page, in English, which says what the site is and the plugins it runs, [Run](https://github.com/19h47/run), [Library](https://github.com/19h47/library) and [Moodboard](https://github.com/19h47/moodboard). Any other URL is not found, `404.php`.

- `index.php` holds the HTML of the page, `404.php` the one of a page not found, between `header.php` and `footer.php`.
- `app-style.css` is the base shared by 19h47's small apps, a copy of [the gist](https://gist.github.com/19h47/27df983fac74beb8d3e0a30688654498) with its revision in its comment: an update is a new copy. `style.css` holds the header of the theme and the styles of the page, in the layer `app`.
- `functions.php` loads both and takes off the styles of core for blocks and emoji, which the page has none of.

## Deploying

Bump `Version` in `style.css`, for the browsers to load the styles again, then upload the files of the theme by SFTP to `wp-content/themes/stepper/`, `.git` and `README.md` aside. The theme of the server, an app of JavaScript that renders nothing, is replaced as a whole: delete its files first.
