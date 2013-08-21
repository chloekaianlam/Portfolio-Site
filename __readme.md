### Components

* HTML5 Boilerplate 4.1.0
* jQuery 1.9.1
* Modernizr 2.6.2
* LESS CSS starter file (normalize.css included)
* Facebook Open Graph meta stuff
* Javascript namespacing
* .htaccess file in /assets for delivering gziped css/js files, if apache is configured to handle gzipping
* CodeKit compatible directory structure
* Grunt for task automation


#### crossdomain.xml

Not much should be changed here, but it's included to prevent issues with browsers accessing content not from the original domain. It also addresses accessing content from non-secure to secure domains and visa-versa. It's worthwhile reading more about this.

#### robots.txt

From the HTML5 Boilerplate. This file exists to all crawling access from Google. It suppliments the robots <meta> tag in the header.

#### .htaccess

This top-level .htaccess file shouldn't need to be touched by anyone except the back-end developers. It usually contains application and server-specific configuration.

#### Gruntfile.js and package.json

These files allow us to use [Grunt](http://gruntjs.com/) to run more advanced or complcated tasks from the command line.

The following taks are included:

##### ```$ grunt modernizr```

 Run this from the command line and grunt will scan through all your JS and LESS files and create a custom build of Modernizr depanding on which tests you're using. For example…

```css
	/* CSS */
	.opacity {}
	.borderradius {}
```

and

```js
	// JS
	if (Modernizr.touch) {
		// enchance!
	}
```
will add ```touch opacity borderradius``` to the ```<html>``` class list.

##### ```$ grunt smushit```

All your images in ```assets/image/*``` will be optimised using Yahoo!'s [smush.it](http://www.smushit.com/) and placed in ```assets/image/o/```.

##### ```$ grunt build```

Runs *all the tasks*.

##### Grunt: Getting started

To get started with grunt and these tasks, make sure you run ```$ npm install```. This searches ```package.json``` for the files needed for grunt to work.

### CodeKit Setup

We use CodeKit to create a responsible workflow for combining and minifying Javascript as well as processing and importing CSS files using LESS. In order for this to work propery CodeKit needs to be configured to match the output paths, amongst the other settings.

Please use the following seenshots as a guide to match-up your local CodeKit setup. Additionally, here are a few usggestions you might want to add to **Skipped Items** under the **General** tab:

* log
* *.html
* *.php
* Gruntfile.js
* node_modules
* uploads
* system

![CodeKit - General](https://bitbucket.org/outsideline/outside-line-dev-html-boilerplate/downloads/codekit.general.png "CodeKit - General")
![CodeKit - LESS: Options](https://bitbucket.org/outsideline/outside-line-dev-html-boilerplate/downloads/codekit.less.options.png "CodeKit - LESS: Options")
![CodeKit - LESS: Ouput](https://bitbucket.org/outsideline/outside-line-dev-html-boilerplate/downloads/codekit.less.output.png "CodeKit - LESS: Ouput")
![CodeKit - JS: Options](https://bitbucket.org/outsideline/outside-line-dev-html-boilerplate/downloads/codekit.javascript.options.png "CodeKit - JS: Options")
![CodeKit - JS: Output](https://bitbucket.org/outsideline/outside-line-dev-html-boilerplate/downloads/codekit.javascript.output.png "CodeKit - JS: Output")
