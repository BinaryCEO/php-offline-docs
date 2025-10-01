<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Gmagick::cyclecolormapimage - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/gmagick.cyclecolormapimage.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/gmagick.cyclecolormapimage.php">
 <link rel="alternate" href="https://www.php.net/manual/en/gmagick.cyclecolormapimage.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.gmagick.php">
 <link rel="prev" href="https://www.php.net/manual/en/gmagick.current.php">
 <link rel="next" href="https://www.php.net/manual/en/gmagick.deconstructimages.php">

 <link rel="alternate" href="https://www.php.net/manual/en/gmagick.cyclecolormapimage.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/gmagick.cyclecolormapimage.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/gmagick.cyclecolormapimage.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/gmagick.cyclecolormapimage.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/gmagick.cyclecolormapimage.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/gmagick.cyclecolormapimage.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/gmagick.cyclecolormapimage.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/gmagick.cyclecolormapimage.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/gmagick.cyclecolormapimage.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/gmagick.cyclecolormapimage.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/gmagick.cyclecolormapimage.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Displaces an image's colormap" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Gmagick::cyclecolormapimage - Manual" />
<meta name="twitter:description" content="Displaces an image's colormap" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Gmagick::cyclecolormapimage - Manual" />
<meta itemprop="description" content="Displaces an image's colormap" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Displaces an image's colormap" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="gmagick.deconstructimages.php">
          Gmagick::deconstructimages &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gmagick.current.php">
          &laquo; Gmagick::current        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.gmagick.php'>Gmagick</a></li>      <li><a href='class.gmagick.php'>Gmagick</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/gmagick.cyclecolormapimage.php' selected="selected">English</option>
            <option value='de/gmagick.cyclecolormapimage.php'>German</option>
            <option value='es/gmagick.cyclecolormapimage.php'>Spanish</option>
            <option value='fr/gmagick.cyclecolormapimage.php'>French</option>
            <option value='it/gmagick.cyclecolormapimage.php'>Italian</option>
            <option value='ja/gmagick.cyclecolormapimage.php'>Japanese</option>
            <option value='pt_BR/gmagick.cyclecolormapimage.php'>Brazilian Portuguese</option>
            <option value='ru/gmagick.cyclecolormapimage.php'>Russian</option>
            <option value='tr/gmagick.cyclecolormapimage.php'>Turkish</option>
            <option value='uk/gmagick.cyclecolormapimage.php'>Ukrainian</option>
            <option value='zh/gmagick.cyclecolormapimage.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="gmagick.cyclecolormapimage" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Gmagick::cyclecolormapimage</h1>
  <p class="verinfo">(PECL gmagick &gt;= Unknown)</p><p class="refpurpose"><span class="refname">Gmagick::cyclecolormapimage</span> &mdash; <span class="dc-title">Displaces an image&#039;s colormap</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-gmagick.cyclecolormapimage-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Gmagick::cyclecolormapimage</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$displace</code></span>): <span class="type"><a href="class.gmagick.php" class="type Gmagick">Gmagick</a></span></div>

  <p class="para rdfs-comment">
   Displaces an image&#039;s colormap by a given number of positions. If you cycle the colormap a number of times you can     
produce a psychedelic effect. 
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-gmagick.cyclecolormapimage-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">displace</code></dt>
     <dd>
      <p class="para">
       The amount to displace the colormap.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-gmagick.cyclecolormapimage-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns self on success.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-gmagick.cyclecolormapimage-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws an
<span class="classname"><strong class="classname">GmagickException</strong></span> on error.
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gmagick/gmagick/cyclecolormapimage.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fgmagick.cyclecolormapimage%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=gmagick.cyclecolormapimage&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gmagick.cyclecolormapimage.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.gmagick.php">Gmagick</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="gmagick.addimage.php" title="addimage">addimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.addnoiseimage.php" title="addnoiseimage">addnoiseimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.annotateimage.php" title="annotateimage">annotateimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.blurimage.php" title="blurimage">blurimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.borderimage.php" title="borderimage">borderimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.charcoalimage.php" title="charcoalimage">charcoalimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.chopimage.php" title="chopimage">chopimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.clear.php" title="clear">clear</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.commentimage.php" title="commentimage">commentimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.compositeimage.php" title="compositeimage">compositeimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.cropimage.php" title="cropimage">cropimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.cropthumbnailimage.php" title="cropthumbnailimage">cropthumbnailimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.current.php" title="current">current</a>
                        </li>
                                                <li class="current">
                            <a href="gmagick.cyclecolormapimage.php" title="cyclecolormapimage">cyclecolormapimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.deconstructimages.php" title="deconstructimages">deconstructimages</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.despeckleimage.php" title="despeckleimage">despeckleimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.destroy.php" title="destroy">destroy</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.drawimage.php" title="drawimage">drawimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.edgeimage.php" title="edgeimage">edgeimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.embossimage.php" title="embossimage">embossimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.enhanceimage.php" title="enhanceimage">enhanceimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.equalizeimage.php" title="equalizeimage">equalizeimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.flipimage.php" title="flipimage">flipimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.flopimage.php" title="flopimage">flopimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.frameimage.php" title="frameimage">frameimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.gammaimage.php" title="gammaimage">gammaimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getcopyright.php" title="getcopyright">getcopyright</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getfilename.php" title="getfilename">getfilename</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagebackgroundcolor.php" title="getimagebackgroundcolor">getimagebackgroundcolor</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageblueprimary.php" title="getimageblueprimary">getimageblueprimary</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagebordercolor.php" title="getimagebordercolor">getimagebordercolor</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagechanneldepth.php" title="getimagechanneldepth">getimagechanneldepth</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagecolors.php" title="getimagecolors">getimagecolors</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagecolorspace.php" title="getimagecolorspace">getimagecolorspace</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagecompose.php" title="getimagecompose">getimagecompose</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagedelay.php" title="getimagedelay">getimagedelay</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagedepth.php" title="getimagedepth">getimagedepth</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagedispose.php" title="getimagedispose">getimagedispose</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageextrema.php" title="getimageextrema">getimageextrema</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagefilename.php" title="getimagefilename">getimagefilename</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageformat.php" title="getimageformat">getimageformat</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagegamma.php" title="getimagegamma">getimagegamma</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagegreenprimary.php" title="getimagegreenprimary">getimagegreenprimary</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageheight.php" title="getimageheight">getimageheight</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagehistogram.php" title="getimagehistogram">getimagehistogram</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageindex.php" title="getimageindex">getimageindex</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageinterlacescheme.php" title="getimageinterlacescheme">getimageinterlacescheme</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageiterations.php" title="getimageiterations">getimageiterations</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagematte.php" title="getimagematte">getimagematte</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagemattecolor.php" title="getimagemattecolor">getimagemattecolor</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageprofile.php" title="getimageprofile">getimageprofile</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageredprimary.php" title="getimageredprimary">getimageredprimary</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagerenderingintent.php" title="getimagerenderingintent">getimagerenderingintent</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageresolution.php" title="getimageresolution">getimageresolution</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagescene.php" title="getimagescene">getimagescene</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagesignature.php" title="getimagesignature">getimagesignature</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagetype.php" title="getimagetype">getimagetype</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimageunits.php" title="getimageunits">getimageunits</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagewhitepoint.php" title="getimagewhitepoint">getimagewhitepoint</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getimagewidth.php" title="getimagewidth">getimagewidth</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getpackagename.php" title="getpackagename">getpackagename</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getquantumdepth.php" title="getquantumdepth">getquantumdepth</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getreleasedate.php" title="getreleasedate">getreleasedate</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getsamplingfactors.php" title="getsamplingfactors">getsamplingfactors</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getsize.php" title="getsize">getsize</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.getversion.php" title="getversion">getversion</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.hasnextimage.php" title="hasnextimage">hasnextimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.haspreviousimage.php" title="haspreviousimage">haspreviousimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.implodeimage.php" title="implodeimage">implodeimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.labelimage.php" title="labelimage">labelimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.levelimage.php" title="levelimage">levelimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.magnifyimage.php" title="magnifyimage">magnifyimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.mapimage.php" title="mapimage">mapimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.medianfilterimage.php" title="medianfilterimage">medianfilterimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.minifyimage.php" title="minifyimage">minifyimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.modulateimage.php" title="modulateimage">modulateimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.motionblurimage.php" title="motionblurimage">motionblurimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.newimage.php" title="newimage">newimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.nextimage.php" title="nextimage">nextimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.normalizeimage.php" title="normalizeimage">normalizeimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.oilpaintimage.php" title="oilpaintimage">oilpaintimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.previousimage.php" title="previousimage">previousimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.profileimage.php" title="profileimage">profileimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.quantizeimage.php" title="quantizeimage">quantizeimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.quantizeimages.php" title="quantizeimages">quantizeimages</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.queryfontmetrics.php" title="queryfontmetrics">queryfontmetrics</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.queryfonts.php" title="queryfonts">queryfonts</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.queryformats.php" title="queryformats">queryformats</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.radialblurimage.php" title="radialblurimage">radialblurimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.raiseimage.php" title="raiseimage">raiseimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.read.php" title="read">read</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.readimage.php" title="readimage">readimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.readimageblob.php" title="readimageblob">readimageblob</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.readimagefile.php" title="readimagefile">readimagefile</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.reducenoiseimage.php" title="reducenoiseimage">reducenoiseimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.removeimage.php" title="removeimage">removeimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.removeimageprofile.php" title="removeimageprofile">removeimageprofile</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.resampleimage.php" title="resampleimage">resampleimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.resizeimage.php" title="resizeimage">resizeimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.rollimage.php" title="rollimage">rollimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.rotateimage.php" title="rotateimage">rotateimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.scaleimage.php" title="scaleimage">scaleimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.separateimagechannel.php" title="separateimagechannel">separateimagechannel</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setcompressionquality.php" title="setCompressionQuality">setCompressionQuality</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setfilename.php" title="setfilename">setfilename</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagebackgroundcolor.php" title="setimagebackgroundcolor">setimagebackgroundcolor</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimageblueprimary.php" title="setimageblueprimary">setimageblueprimary</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagebordercolor.php" title="setimagebordercolor">setimagebordercolor</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagechanneldepth.php" title="setimagechanneldepth">setimagechanneldepth</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagecolorspace.php" title="setimagecolorspace">setimagecolorspace</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagecompose.php" title="setimagecompose">setimagecompose</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagedelay.php" title="setimagedelay">setimagedelay</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagedepth.php" title="setimagedepth">setimagedepth</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagedispose.php" title="setimagedispose">setimagedispose</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagefilename.php" title="setimagefilename">setimagefilename</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimageformat.php" title="setimageformat">setimageformat</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagegamma.php" title="setimagegamma">setimagegamma</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagegreenprimary.php" title="setimagegreenprimary">setimagegreenprimary</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimageindex.php" title="setimageindex">setimageindex</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimageinterlacescheme.php" title="setimageinterlacescheme">setimageinterlacescheme</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimageiterations.php" title="setimageiterations">setimageiterations</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimageprofile.php" title="setimageprofile">setimageprofile</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimageredprimary.php" title="setimageredprimary">setimageredprimary</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagerenderingintent.php" title="setimagerenderingintent">setimagerenderingintent</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimageresolution.php" title="setimageresolution">setimageresolution</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagescene.php" title="setimagescene">setimagescene</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagetype.php" title="setimagetype">setimagetype</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimageunits.php" title="setimageunits">setimageunits</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setimagewhitepoint.php" title="setimagewhitepoint">setimagewhitepoint</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setsamplingfactors.php" title="setsamplingfactors">setsamplingfactors</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setsize.php" title="setsize">setsize</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.shearimage.php" title="shearimage">shearimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.solarizeimage.php" title="solarizeimage">solarizeimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.spreadimage.php" title="spreadimage">spreadimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.stripimage.php" title="stripimage">stripimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.swirlimage.php" title="swirlimage">swirlimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.thumbnailimage.php" title="thumbnailimage">thumbnailimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.trimimage.php" title="trimimage">trimimage</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.write.php" title="write">write</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.writeimage.php" title="writeimage">writeimage</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
