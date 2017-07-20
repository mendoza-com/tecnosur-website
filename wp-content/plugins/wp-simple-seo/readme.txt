=== WP Simple SEO ===
Contributors: wpsimpleseo
Donate link: https://wpsimpleseo.com
Tags: bing, canonical, google, google search console, google sitemap, google webmaster tools, meta, meta description, robots, search engine optimization, seo, sitemap, sitemaps, social, xml sitemap
Requires at least: 4.5
Tested up to: 4.7.3
Stable tag: trunk
License: GPLv2 or later

Simple, effective SEO for your WordPress web site.

== Description ==

= WordPress SEO Plugin =

SEO should be simple and *just work, without* needing to hire developers and SEO experts to get the basics right.

That's why we've built <a href="https://wpsimpleseo.com" title="WordPress SEO Plugin" rel="friend">WP Simple SEO</a>
- a simple, effective WordPress search engine optimization plugin that automatically configures SEO for your WordPress web site.

= Single Page Setup =

When you first activate and access WP Simple SEO, our single page setup screen provides the key steps that need completing.

= Easy Migration =

If you're coming from Yoast and AIOSEO Pack, you can automatically import your existing Yoast or AIOSEO configuration.

= Simple Site Submission and Verification =

By using our one page setup screen, you can:

* Register your site with Google (Search Console / Webmaster Tools), 
* Verify ownership of your site
* Submit WP Simple SEO's XML sitemap to Google

There's no need to copy access tokens, meta verification strings, XML sitemap URLs or learn how to use Google Search Console to submit a 
sitemap.  WP Simple SEO does all of this for you, right from within the WordPress Administration interface.

See for yourself:
[youtube http://www.youtube.com/watch?v=wIx1maL5vCo]

= Metadata =

By default, Page Titles and Meta Description tags are automatically set.  

You can change them easily, and using our template tags build dynamic Page Titles and Meta Descriptions.

= XML Sitemaps =

By default, WP Simple SEO generates the XML sitemap the search engines need to index your content.  Again, there are no complex steps -
you can submit your sitemap to Google right from within the WordPress Administration interface.

Don't want to use our XML Sitemaps? No problem - simply disable them in the Sitemaps section of the plugin.

= Social Metadata =

By default, Open Graph and Twitter card metadata is enabled.

Don't want to use our social metadata? No problem - simply disable them in the Social section of the plugin.

= Google Knowledge Graph =

Combining Social Metadata, and some extra options, WP Simple SEO outputs the necessary schema data which Google can use for its
Knowledge Graph.

= SERP Snippet Preview =

On single Pages, Posts, Custom Post Types and Taxonomy Terms, WP Simple SEO displays a snippet preview of how the individual Page
will display in the search engine results.  The Title and Description can be edited, to differ from your site wide Metadata settings.

= robots.txt =

We define your robots.txt file content to allow search engines to crawl your site.  

= Environment Detection =

Running WP Simple SEO on a local, development or staging site?  WP Simple SEO detects this, and automatically does the following:

* Disables XML sitemap submission,
* Blocks search engines from crawling your site (using robots.txt and User-Agent detection)

This ensures your test sites don't get accidentally indexed by the search engines.

= Duplicate Content Avoidance =

WP Simple SEO prevents search engines from indexing specific sections of your web site that might result in a duplicate content penalty
(such as your author and date-based blog post archives, if you're running a single author WordPress Blog).

Canonical URLs can be specified on individual Posts to further prevent duplicate content penalties.

= Intelligent Configuration Options =

By choice, WP Simple SEO provides only the options you need.  Chosen not to index a specific Taxonomy Term? WP Simple SEO automatically 
detects this, and won't include this content in your XML sitemap, or submit it to Google.

= Fully Documented =

We understand that no WordPress Plugin is good if you don't know how to use it.  That's why we provide extensive, full documentation
covering all aspects of WP Simple SEO:

<a href="https://wpsimpleseo.com/documentation" title="WP Simple SEO Documentation">https://wpsimpleseo.com/documentation</a>

Best of all, you'll find contextual Documentation links from within WP Simple SEO's interface.

= Fully Supported =

> We truly want WP Simple SEO to be the best WordPress SEO Plugin.  If you have any questions, or something goes wrong, please reach out to
> us through the wordpress.org Support Forums. 
> This not only helps fix your support issue, but improves WP Simple SEO for everyone.

= Technical =

For developers and more advanced users, here's a full breakdown of what WP Simple SEO offers and can do:

- General: Register and Verify Site with Google Search Console via oAuth
- General: Verify Site with Bing Webmaster Tools
- General: Google Knowledge Graph (Entity Type, Name, Logo, plus Social Media Profile links), output using LD+JSON schema
- General: Enable/disable Google Sitelinks Search Box
- Meta: Page Titles, Meta Descriptions and noindex options for Home Page, all public Post Types, all public Taxonomies, Author Archives,
Date-based Archives and Search Results
- Meta: Page Title option for 404 Page
- Social: OpenGraph Social Metadata, output using LD+JSON schema
- Social: Social Media Profile links for Facebook, Twitter, Google+, Instagram, YouTube, LinkedIn, MySpace, Pinterest, SoundCloud and Tumblr
- Social: Twitter Card Type and Username
- Sitemaps: XML Sitemap generation (noindexed items are automatically excluded from the XML sitemap)
- Sitemaps: Submit XML sitemap automatically to Google
- Canonical links, including prev and next, automatically set for paginated archives and single Pages/Posts with pagination
- robots.txt automatically generated
- Export Plugin Settings to JSON file
- Import Plugin Settings from JSON file

== Installation ==

1. Install WP Simple SEO via the Plugins > Add New section of your WordPress Installation, or by uploading the downloaded
ZIP file via Plugins > Add New > Upload Plugin.
2. Active the WP Simple SEO plugin through the 'Plugins' menu in WordPress
3. Run the first time setup by going to the WP Simple SEO menu that appears in your admin menu

== Frequently Asked Questions ==

= Where can I find an SEO Score / Keyword Analysis? =

Our focus is to ensure that your core SEO plugin remains stable and just works. Whilst other SEO plugins offer these features for free,
the results are not always accurate, and some users simply don't need them.

SEO scoring, focus keywords, page analysis, ranking and more will be made available through individual paid-for Addons for WP Simple SEO
at a later date.

== Screenshots ==

1. Welcome Screen
2. General Settings
3. Meta Settings
4. Social Settings
5. Sitemap Settings

== Changelog ==

= 1.0.3 =
* Fix: Only display Review Helper for Super Admin and Admin
* Fix: Strip HTML tags from meta and title output
* Fix: Stripslashes from meta and title output
* Fix: Undefined function get_author_ids() in sitemaps.php

= 1.0.2 =
* Added: Contextual Documentation Tabs, linking to the correct Documentation depending on the settings tab in view
* Added: Review Helper
* Fix: Cache: Allow caching to be enabled/disabled using WP_DEBUG and the wp_simple_seo_cache_enabled filter
* Fix: General: Bing: Meta Verification: Extract verification value when the whole <meta> verification tag has been pasted

= 1.0.1 =
* Added: Posts: Canonical URL option
* Added: Posts: Documentation Tab
* Added: Terms: Documentation Tab
* Fix: Posts: Display Noindex and Nofollow override options
* Fix: Terms: Display Noindex override options
* Fix: Terms: Removed unused remove_stopwords_from_slug() function
* Fix: Caching: Clear transients when a setting, Post or Term is created/edited/deleted (ensures sitemaps are rebuilt)
* Fix: Permalinks: Only remove stop words the first time the Permalink / Slug is generated. Honor the user's decision if they change it to include stopwords.
* Enhancement: Moved get_import_sources() from WP_Simple_SEO_Common to WP_Simple_SEO_Import

= 1.0.0 =
* First release.

== Upgrade Notice ==
