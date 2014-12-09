keepitsimple
============

A tiny small php framework for small business websites.

<strong>What is this?</strong>
============

Keep It Simple is tiny small php framework. It's been made to help you develop small business websites that are not going to get changed in a while. You can imagine it as a base structure for a small website. It doesn't provide any databases support and it's mostly used for content that doesn't change for a long time.

<strong>How does it work?</strong>
============

You download the framework from github and build over it. It has 7 folders - <strong>css, images, js, config, ext, layout, pages</strong>. The first 3 should be familiar to you if you are here. The <strong>config</strong> folder has one file by default and it's a php file that sets some constant values for the project to be used in the pages. The ext folder is for some plugins, extensions, addons or whatever additional package you're going to use that should be located in an external folder. The last 2 <strong>(layouts and pages)</strong> are the simple tiny framework core. <br><strong>layout</strong> has 5 files: 
<ul>
	<li><strong>head.php</strong> - The head declaration of the page.</li>
	<li><strong>header.php</strong> - The header that is going to be the beginning of every page. For example this page: logo and slogan.</li>
	<li><strong>menu.php</strong> - The menu for every page. For example the one you see on the top of this page: Home Downloads About Contacts.</li>
	<li><strong>body.php</strong> - The body for the particular page. It is loaded dynamically in a simple way that you need to repeat for your pages.</li>
	<li><strong>footer.php</strong> - The footer for every page. For example: People put their contacts their.</li>
</ul>

<strong>pages:</strong>

This folder contains the body content for the pages you have. In the layout/body.php their filenames have to be listed in order to get them loaded.

============

It's really that simple!