# Drupal 7 Base Theme

This is the repository for TricomB2B's Drupal 7 base theme. It's kewl!

## Requirements

First things first, this is a gulp-based workflow, so you'll need [Node](https://nodejs.org/), [NPM](https://www.npmjs.com/), and [Gulp](http://gulpjs.com/) installed. Also recommend [Yarn](https://yarnpkg.com/).

#### Install Node and NPM

If you do not already have Node and NPM installed, follow the instructions on the [Official Node Installation Page](https://nodejs.org/en/download/package-manager/). Recommended to install the LTS version (labeled "Recommended for most users").

#### Install Gulp

From a shell prompt:

```sh
$ npm install -g gulp-cli
```

#### Install Yarn (optional)

You can optionally install Yarn. This is an alternate package manager to NPM. It is much faster, improves dependency management, and allows for a lock on package versioning, which is beneficial when working with a team.

Follow the [Official Yarn Installation](https://yarnpkg.com/en/docs/install) instructions for your OS.

You're now ready to go!

## Theme Installation

In your Drupal 7 installation, copy or clone this repository into `/sites/all/themes/`. At this point you may want to change the name of the theme directory to something more project-specific, as well as edit th theme's `.info` file and name with project specific data.

Next install the dependencies:

```sh
$ cd /path/to/drupal/sites/all/themes/tricom
$ yarn
```

## Info File

```
name = TricomB2B Base Theme
description = TricomB2B's base Drupal 7 theme. Includes a sexy gulp workflow utilizing Sass and so much more.
version = 1.0.0
core = 7.x
engine = phptemplate

stylesheets[all][] = dist/css/main.min.css
scripts[] = dist/js/main.min.js

regions[header] = Header
regions[highlighted] = Highlighted
regions[help] = Help
regions[content] = Content
regions[sidebar_first] = Left sidebar
regions[sidebar_second] = Right sidebar
regions[footer] = Footer

features[] = logo
features[] = name
features[] = slogan
features[] = node_user_picture
features[] = comment_user_picture
features[] = comment_user_verification
features[] = favicon
features[] = main_menu
features[] = secondary_menu

settings[toggle_logo] = 1
settings[toggle_name] = 1
settings[toggle_slogan] = 1
settings[toggle_node_user_picture] = 1
settings[toggle_comment_user_picture] = 1
settings[toggle_comment_user_verification] = 1
settings[toggle_favicon] = 1
settings[toggle_main_menu] = 1
settings[toggle_secondary_menu] = 1
```

`name` and `description` can be adjusted on a per-project basis.

`version` should stay unchanged so we have a reference point to which version of the base theme was used.

`stylesheets` and `scripts` reference the compiled CSS and JavaScript files built by the Gulp workflow.

`regions`, `features`, and `settings` are all the default Drupal 7 values. These can be completely removed and it will not change the behavior of the theme. They are included here for completeness and ease of adjusting theme features, etc.

## Favicons

Favicons can be generated at [RealFaviconGenerator](http://realfavicongenerator.net/) and can very easily be inserted (and replace) the default favicon using the [Responsive Favicons](https://www.drupal.org/project/responsive_favicons) module.

Every site should have a nice favicon. It adds a level of polish to the site and shows an attention to detail.

## SVG

For client logos, try to use SVG format. SVG is well-supported across modern browsers, is scalable and coloration can generally be modified via CSS. In short, it just works better for logos, looks good at any resolution, sizes well with `em`s, and has a reasonably small filesize.

For icons, also use SVGs, for many of the same reasons. Something like Font Awesome is nice, but is often fairly heavy-weight and if you only use a few glyphs, you've added a lot of CSS for very little value. [Entypo+](http://www.entypo.com/) is an SVG icon library I've often utilized.

One thing to keep in mind is that for full SVG support you will need to provide both a width and height property in the CSS. Most browsers will handle automatically scaling one property or the other as necessary, but not all of them do. Providing a width and height will resolve most SVG sizing issues in certain browsers (Internet Explorer, hah).

## Base Modules

We have a set of modules we rely on for our Drupal 7 sites.

#### General for ALL Sites

- [Admin Menu](https://www.drupal.org/project/admin_menu)
- [Backup & Migrate](https://www.drupal.org/project/backup_migrate)
- [Block Group](https://www.drupal.org/project/blockgroup)
- [CK Editor](https://www.drupal.org/project/ckeditor)
- [colorbox](https://www.drupal.org/project/colorbox)
- [Context](https://www.drupal.org/project/context)
- [cTools](https://www.drupal.org/project/ctools)
- [Date](https://www.drupal.org/project/date)
- [Devel](https://www.drupal.org/project/devel)
- [Entity API](https://www.drupal.org/project/entity)
- [Entity Reference](https://www.drupal.org/project/entityreference)
- [Field Group](https://www.drupal.org/project/field_group)
- [Field Group: Easy Responsive Tabs](https://www.drupal.org/project/field_group_easy_responsive_tabs)
- [Google Analytics](https://www.drupal.org/project/google_analytics)
- [Honeypot](https://www.drupal.org/project/honeypot)
- [IMCE](https://www.drupal.org/project/imce)
- [jQuery Update](https://www.drupal.org/project/jquery_update)
- [Libraries API](https://www.drupal.org/project/libraries)
- [Menu Attributes](https://www.drupal.org/project/menu_attributes)
- [Menu Block](https://www.drupal.org/project/menu_block)
- [Metatags](https://www.drupal.org/project/metatag)
- [Module Filter](https://www.drupal.org/project/module_filter)
- [Page Title](https://www.drupal.org/project/page_title)
- [pathAuto](https://www.drupal.org/project/pathauto)
- [Redirect](https://www.drupal.org/project/redirect)
- [Responsive Favicons](https://www.drupal.org/project/responsive_favicons)
- [Responsive Menu](https://www.drupal.org/project/responsive_menus)
- [Rules](https://www.drupal.org/project/rules)
- [Scheduler](https://www.drupal.org/project/scheduler)
- [Tokens](https://www.drupal.org/project/token)
- [URL Redirect](https://www.drupal.org/project/url_redirect)
- [Views 3](https://www.drupal.org/project/views)
- [Webform 4](https://www.drupal.org/project/webform)
- [XML Sitemap](https://www.drupal.org/project/xmlsitemap)

#### Recommended for SOME sites

- [Views Slideshow](https://www.drupal.org/project/views_slideshow) - Good for adding slideshows to Views.
- [Views PHP](https://www.drupal.org/project/views_php) - Can add a considerable performance hit, so has very limited usecases.

#### Repository

We also maintain a public GitHub repository for quick and easy installation of the base modules. It can be found at [drupal-7-base-modules](https://github.com/TricomB2B/drupal-7-base-modules).

## Gulp

The Gulp workflow is designed around JavaScript and Sass capabilities. The biggest chunk of what Gulp does for us is concatenating, compiling, and minifying the JavaScript and Sass codebase. Here is a high-level bullet of the Gulp feature-set:

- Lint, concatenate, compile ES6 syntax, and minify JavaScript.
- Concatenate, compile, and minify Sass.
- Launch a [BrowserSync](https://browsersync.io/) server for live-reload and CSS injection.
- Watch all `.js`, `.scss`, and `.php` files for changes, and react to those changes as needed.
- Capability to concatenate and minify SVG files.
- Capability to optimize `.png` and `.jpg` images via the [TinyPNG](https://tinypng.com/) API.

#### Running Gulp

Most of the time while developing, you will have Gulp running in the background. You should launch Gulp via a terminal window, and just leave it running while you work. Here is how you would run the default task:

```sh
$ cd /path/to/drupal/sites/all/themes/tricom
$ gulp
[14:02:48] Requiring external module babel-register
[14:02:49] Using gulpfile ~/Projects/tricom-drupal-7-base/gulpfile.babel.js
[14:02:49] Starting 'fonts'...
[14:02:49] Finished 'fonts' after 2.83 ms
[14:02:49] Starting 'styles'...
[14:02:49] Starting 'js-lint'...
[14:02:49] Starting 'browser-sync-local'...
[14:02:49] Finished 'browser-sync-local' after 21 ms
[14:02:49] Starting 'watch'...
[14:02:51] Finished 'watch' after 1.39 s
[BS] Access URLs:
 ----------------------------------------
       Local: http://localhost:3000
    External: http://192.168.179.107:3000
 ----------------------------------------
          UI: http://localhost:3001
 UI External: http://192.168.179.107:3001
 ----------------------------------------
[BS] Serving files from: ./
[14:02:51] Finished 'js-lint' after 1.76 s
[14:02:51] Starting 'scripts'...
[14:02:52] Finished 'styles' after 3.04 s
[BS] 2 files changed (main.min.js.map, main.min.js)
[14:02:52] Finished 'scripts' after 1.13 s
[14:02:52] Starting 'default'...
[14:02:52] Finished 'default' after 2.29 μs
```

Note that the task does not end. Gulp is now actively watching all of your `.js`, `.scss`, and `.php` files for changes. Once a change is detected, it will re-run the relevant task and reload your browser once finished.

#### Gulpfile Settings

There are a handful of settings you can modify in `gulpfile.babel.js`. These can all be found at the top of the file.

```js
// Proxy URL (optional)
const proxyUrl = '*.dev';
// API keys
const TINYPNG_KEY = '';
// fonts
const fonts = [];
// vendors
const jsVendors  = [];
const cssVendors = [];
```

- **proxyUrl** - If you like to set up your local dev environment using vHosts, you can run BrowserSync and have it proxy a local URL. Use this variable for informing BrowserSync of this URL.
- **TINYPNG_KEY** - This is your API key to interface with TinyPNG. You can sign up for a free account which gives you 500 free requests per month.
- **fonts** - This is an array of any font files that will be required by the project. For the most part these will just be copied from the `src` directory over to the `dist` directory.
- **jsVendors** - This is an array list of 3rd party JavaScript libraries. The list will be concatenated and minified and made available in `./dist/vendors`. If you are adding vendor libraries, be sure to include the `./dist/vendors/vendors.min.js` in your `.info` file.
- **cssVendors** - Same as `jsVendors`, just for CSS libraries instead.

#### Gulp Tasks

Here's a list of the most common task chains made available via Gulp.

- `gulp` - Default task. Compiles source code, launches a standalone BrowserSync server, and watches for changes.
- `gulp local` - Same as the default task.
- `gulp proxy` - Compiles source code, launches a proxied BrowserSync server, and watches for changes. Note that in order for this to work, you must set the `proxyUrl` setting in the gulpfile.
- `gulp build` - Compiles source code and vendor files.
- `gulp vendors` - Compiles vendor files.
- `gulp images` - Concatenates SVG icons (in `./img/icons/*.svg`) and outputs an SVGStore file, optimizes all `.png` and `.jpg` files via TinyPNG API.

There are many more one-off gulp tasks. The are all documented in the gulpfile, feel free to peruse.

## License

See LICENSE file.