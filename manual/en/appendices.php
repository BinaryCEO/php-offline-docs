<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Appendices - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/appendices.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/appendices.php">
 <link rel="alternate" href="https://www.php.net/manual/en/appendices.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/index.php">
 <link rel="prev" href="https://www.php.net/manual/en/faq.misc.php">
 <link rel="next" href="https://www.php.net/manual/en/history.php">

 <link rel="alternate" href="https://www.php.net/manual/en/appendices.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/appendices.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/appendices.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/appendices.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/appendices.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/appendices.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/appendices.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/appendices.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/appendices.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/appendices.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/appendices.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Appendices" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Appendices - Manual" />
<meta name="twitter:description" content="Appendices" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Appendices - Manual" />
<meta itemprop="description" content="Appendices" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Appendices" />

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
        <a href="history.php">
          History of PHP and Related Projects &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="faq.misc.php">
          &laquo; Miscellaneous Questions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      </ul>
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
            <option value='en/appendices.php' selected="selected">English</option>
            <option value='de/appendices.php'>German</option>
            <option value='es/appendices.php'>Spanish</option>
            <option value='fr/appendices.php'>French</option>
            <option value='it/appendices.php'>Italian</option>
            <option value='ja/appendices.php'>Japanese</option>
            <option value='pt_BR/appendices.php'>Brazilian Portuguese</option>
            <option value='ru/appendices.php'>Russian</option>
            <option value='tr/appendices.php'>Turkish</option>
            <option value='uk/appendices.php'>Ukrainian</option>
            <option value='zh/appendices.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="appendices" class="book">
  <h1 class="title">Appendices</h1>
  






  



  



  



  



  



  






  






  






  






  






  







  







  

 



  





  






  




  





  


 



  





  





  





  






  






  




  






  







  



  
 <ul class="chunklist chunklist_book"><li><a href="history.php">History of PHP and Related Projects</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="history.php.php">History of PHP</a></li><li><a href="history.php.related.php">History of PHP related projects</a></li><li><a href="history.php.books.php">Books about PHP</a></li><li><a href="history.php.publications.php">Publications about PHP</a></li></ul></li><li><a href="examples.php">About manual examples</a></li><li><a href="migration84.php">Migrating from PHP 8.3.x to PHP 8.4.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration84.new-features.php">New Features</a></li><li><a href="migration84.new-classes.php">New Classes, Enums, and Interfaces</a></li><li><a href="migration84.new-functions.php">New Functions</a></li><li><a href="migration84.constants.php">New Global Constants</a></li><li><a href="migration84.incompatible.php">Backward Incompatible Changes</a></li><li><a href="migration84.deprecated.php">Deprecated Features</a></li><li><a href="migration84.removed-extensions.php">Removed Extensions</a></li><li><a href="migration84.other-changes.php">Other Changes</a></li><li><a href="migration84.windows-support.php">Windows Support</a></li></ul></li><li><a href="migration83.php">Migrating from PHP 8.2.x to PHP 8.3.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration83.new-features.php">New Features</a></li><li><a href="migration83.new-classes.php">New Classes and Interfaces</a></li><li><a href="migration83.new-functions.php">New Functions</a></li><li><a href="migration83.constants.php">New Global Constants</a></li><li><a href="migration83.incompatible.php">Backward Incompatible Changes</a></li><li><a href="migration83.deprecated.php">Deprecated Features</a></li><li><a href="migration83.other-changes.php">Other Changes</a></li><li><a href="migration83.windows-support.php">Windows Support</a></li></ul></li><li><a href="migration82.php">Migrating from PHP 8.1.x to PHP 8.2.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration82.new-features.php">New Features</a></li><li><a href="migration82.new-functions.php">New Functions</a></li><li><a href="migration82.constants.php">New Global Constants</a></li><li><a href="migration82.incompatible.php">Backward Incompatible Changes</a></li><li><a href="migration82.deprecated.php">Deprecated Features</a></li><li><a href="migration82.other-changes.php">Other Changes</a></li><li><a href="migration82.windows-support.php">Windows Support</a></li></ul></li><li><a href="migration81.php">Migrating from PHP 8.0.x to PHP 8.1.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration81.new-features.php">New Features</a></li><li><a href="migration81.new-classes.php">New Classes and Interfaces</a></li><li><a href="migration81.new-functions.php">New Functions</a></li><li><a href="migration81.constants.php">New Global Constants</a></li><li><a href="migration81.incompatible.php">Backward Incompatible Changes</a></li><li><a href="migration81.deprecated.php">Deprecated Features</a></li><li><a href="migration81.other-changes.php">Other Changes</a></li></ul></li><li><a href="migration80.php">Migrating from PHP 7.4.x to PHP 8.0.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration80.new-features.php">New Features</a></li><li><a href="migration80.new-classes.php">New Classes and Interfaces</a></li><li><a href="migration80.incompatible.php">Backward Incompatible Changes</a></li><li><a href="migration80.deprecated.php">Deprecated Features</a></li><li><a href="migration80.other-changes.php">Other Changes</a></li></ul></li><li><a href="migration74.php">Migrating from PHP 7.3.x to PHP 7.4.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration74.new-features.php">New Features</a></li><li><a href="migration74.new-classes.php">New Classes and Interfaces</a></li><li><a href="migration74.new-functions.php">New Functions</a></li><li><a href="migration74.constants.php">New Global Constants</a></li><li><a href="migration74.incompatible.php">Backward Incompatible Changes</a></li><li><a href="migration74.deprecated.php">Deprecated Features</a></li><li><a href="migration74.removed-extensions.php">Removed Extensions</a></li><li><a href="migration74.other-changes.php">Other Changes</a></li><li><a href="migration74.windows-support.php">Windows Support</a></li></ul></li><li><a href="migration73.php">Migrating from PHP 7.2.x to PHP 7.3.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration73.new-features.php">New Features</a></li><li><a href="migration73.new-functions.php">New Functions</a></li><li><a href="migration73.constants.php">New Global Constants</a></li><li><a href="migration73.incompatible.php">Backward Incompatible Changes</a></li><li><a href="migration73.deprecated.php">Deprecated Features</a></li><li><a href="migration73.other-changes.php">Other Changes</a></li><li><a href="migration73.windows-support.php">Windows Support</a></li></ul></li><li><a href="migration72.php">Migrating from PHP 7.1.x to PHP 7.2.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration72.new-features.php">New features</a></li><li><a href="migration72.new-functions.php">New functions</a></li><li><a href="migration72.constants.php">New global constants</a></li><li><a href="migration72.incompatible.php">Backward incompatible changes</a></li><li><a href="migration72.deprecated.php">Deprecated features in PHP 7.2.x</a></li><li><a href="migration72.other-changes.php">Other changes</a></li></ul></li><li><a href="migration71.php">Migrating from PHP 7.0.x to PHP 7.1.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration71.new-features.php">New features</a></li><li><a href="migration71.new-functions.php">New functions</a></li><li><a href="migration71.constants.php">New global constants</a></li><li><a href="migration71.incompatible.php">Backward incompatible changes</a></li><li><a href="migration71.deprecated.php">Deprecated features in PHP 7.1.x</a></li><li><a href="migration71.changed-functions.php">Changed functions</a></li><li><a href="migration71.other-changes.php">Other changes</a></li><li><a href="migration71.windows-support.php">Windows Support</a></li></ul></li><li><a href="migration70.php">Migrating from PHP 5.6.x to PHP 7.0.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration70.incompatible.php">Backward incompatible changes</a></li><li><a href="migration70.new-features.php">New features</a></li><li><a href="migration70.deprecated.php">Deprecated features in PHP 7.0.x</a></li><li><a href="migration70.changed-functions.php">Changed functions</a></li><li><a href="migration70.new-functions.php">New functions</a></li><li><a href="migration70.classes.php">New Classes and Interfaces</a></li><li><a href="migration70.constants.php">New Global Constants</a></li><li><a href="migration70.sapi-changes.php">Changes in SAPI Modules</a></li><li><a href="migration70.removed-exts-sapis.php">Removed Extensions and SAPIs</a></li><li><a href="migration70.other-changes.php">Other Changes</a></li></ul></li><li><a href="migration56.php">Migrating from PHP 5.5.x to PHP 5.6.x</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="migration56.incompatible.php">Backward incompatible changes</a></li><li><a href="migration56.new-features.php">New features</a></li><li><a href="migration56.deprecated.php">Deprecated features in PHP 5.6.x</a></li><li><a href="migration56.changed-functions.php">Changed functions</a></li><li><a href="migration56.new-functions.php">New functions</a></li><li><a href="migration56.openssl.php">OpenSSL changes in PHP 5.6.x</a></li><li><a href="migration56.extensions.php">Other changes to extensions</a></li><li><a href="migration56.constants.php">New global constants</a></li></ul></li><li><a href="debugger.php">Debugging in PHP</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="debugger-about.php">About debugging in PHP</a></li></ul></li><li><a href="configure.php">Configure options</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="configure.about.php">List of core configure options</a></li></ul></li><li><a href="ini.php">php.ini directives</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ini.list.php">List of php.ini directives</a></li><li><a href="ini.sections.php">List of php.ini sections</a></li><li><a href="ini.core.php">Description of core php.ini directives</a></li></ul></li><li><a href="extensions.php">Extension List/Categorization</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="extensions.alphabetical.php">Alphabetical</a></li><li><a href="extensions.membership.php">Membership</a></li><li><a href="extensions.state.php">State</a></li></ul></li><li><a href="aliases.php">List of Function Aliases</a></li><li><a href="reserved.php">List of Reserved Words</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="reserved.keywords.php">List of Keywords</a></li><li><a href="reserved.classes.php">Predefined Classes</a></li><li><a href="reserved.constants.php">Predefined Constants</a></li><li><a href="reserved.other-reserved-words.php">List of other reserved words</a></li></ul></li><li><a href="resource.php">List of Resource Types</a></li><li><a href="filters.php">List of Available Filters</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="filters.string.php">String Filters</a></li><li><a href="filters.convert.php">Conversion Filters</a></li><li><a href="filters.compression.php">Compression Filters</a></li><li><a href="filters.encryption.php">Encryption Filters</a></li></ul></li><li><a href="transports.php">List of Supported Socket Transports</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="transports.inet.php">Internet Domain: TCP, UDP, SSL, and TLS</a></li><li><a href="transports.unix.php">Unix Domain: Unix and UDG</a></li></ul></li><li><a href="types.comparisons.php">PHP type comparison tables</a></li><li><a href="tokens.php">List of Parser Tokens</a></li><li><a href="userlandnaming.php">Userland Naming Guide</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="userlandnaming.globalnamespace.php">Global Namespace</a></li><li><a href="userlandnaming.rules.php">Rules</a></li><li><a href="userlandnaming.tips.php">Tips</a></li></ul></li><li><a href="about.php">About the manual</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="about.formats.php">Formats</a></li><li><a href="about.notes.php">About user notes</a></li><li><a href="about.prototypes.php">How to read a function definition (prototype)</a></li><li><a href="about.phpversions.php">PHP versions documented in this manual</a></li><li><a href="about.more.php">How to find more information about PHP</a></li><li><a href="about.howtohelp.php">How to help improve the documentation</a></li><li><a href="about.generate.php">How we generate the formats</a></li><li><a href="about.translations.php">Translations</a></li></ul></li><li><a href="cc.license.php">Creative Commons Attribution 3.0</a></li><li><a href="indexes.php">Index listing</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="indexes.functions.php">Function and Method listing</a></li><li><a href="indexes.examples.php">Example listing</a></li></ul></li><li><a href="doc.changelog.php">Changelog</a></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-base/blob/master/manual.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fappendices%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=appendices&amp;repo=en&amp;redirect=https://www.php.net/manual/en/appendices.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="index.php">PHP Manual</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="copyright.php" title="Copyright">Copyright</a>
                        </li>
                                                <li class="">
                            <a href="preface.php" title="Preface">Preface</a>
                        </li>
                                                <li class="">
                            <a href="getting-started.php" title="Getting Started">Getting Started</a>
                        </li>
                                                <li class="">
                            <a href="install.php" title="Installation and Configuration">Installation and Configuration</a>
                        </li>
                                                <li class="">
                            <a href="langref.php" title="Language Reference">Language Reference</a>
                        </li>
                                                <li class="">
                            <a href="security.php" title="Security">Security</a>
                        </li>
                                                <li class="">
                            <a href="features.php" title="Features">Features</a>
                        </li>
                                                <li class="">
                            <a href="funcref.php" title="Function Reference">Function Reference</a>
                        </li>
                                                <li class="">
                            <a href="faq.php" title="FAQ">FAQ</a>
                        </li>
                                                <li class="current">
                            <a href="appendices.php" title="Appendices">Appendices</a>
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
