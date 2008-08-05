=== Plugin Name ===
Contributors: massivo
Tags: linkex, blogroll, link
Requires at least: 2.0
Tested up to: 2.5
Stable tag: 0.2

LinkexWidget shows your LinkEX links in a widget that you can add to your sidebar like any other.

== Description ==

Many bloggers are using the fantastic application [LinkEX](http://linkex.dk/ "LinkEX") to manage their links to and from other blogs, but there aren't a widget that easily shows your links from LinkEX to the sidebar of your blog.

This is the simply role of LinkexWidget. It allows you to easily add a widget to your blog to display your links. Nothing more.

== Installation ==

1. Upload `linkexWidget.php` to the *`/wp-content/plugins/`* folder
2. Activate the plugin through the *Plugins* menu in WordPress
3. Go to *Design > Widgets* and add your *LinkexWidget* to your sidebar
4. Enter the URL of the file that contain your links.

This file is created by LinkEX, and must be in the folder `LINKEX_INSTALLATION_DIR/data/output/CATEGORY_ID`

You can access to this file easily typing the URL in your web browser.

For example `http://www.example.com/linkex/data/output/1001`

== Frequently Asked Questions ==

= How can I configure my LinkEX to show my links between li tags? =

Go to your LinkEX administration and *edit* the category where are the links that you would like to show in your blog.

In the *Template* section enter something like:

    <li><a href="{$URL}" title="{$ANCHOR}">{$ANCHOR}</a></li>

LinkexWidget adds automatically the `<ul>` tags.

= Can I remove the link that adds automatically at the end of my LinkexWidget? =

No, please... is the 'price' for our work, only is one link to one of our blogs

== Screenshots ==

1. LinkexWidget configuration form