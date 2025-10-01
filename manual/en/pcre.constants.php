<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pcre.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pcre.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pcre.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.pcre.php">
 <link rel="prev" href="https://www.php.net/manual/en/pcre.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/pcre.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pcre.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pcre.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pcre.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pcre.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pcre.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pcre.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pcre.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pcre.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pcre.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pcre.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pcre.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="pcre.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pcre.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      </ul>
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
            <option value='en/pcre.constants.php' selected="selected">English</option>
            <option value='de/pcre.constants.php'>German</option>
            <option value='es/pcre.constants.php'>Spanish</option>
            <option value='fr/pcre.constants.php'>French</option>
            <option value='it/pcre.constants.php'>Italian</option>
            <option value='ja/pcre.constants.php'>Japanese</option>
            <option value='pt_BR/pcre.constants.php'>Brazilian Portuguese</option>
            <option value='ru/pcre.constants.php'>Russian</option>
            <option value='tr/pcre.constants.php'>Turkish</option>
            <option value='uk/pcre.constants.php'>Ukrainian</option>
            <option value='zh/pcre.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pcre.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <table class="doctable table">
  <caption><strong>PREG constants</strong></caption>
  
   <thead>
    <tr>
     <th>Constants</th>
     <th>Description</th>
     <th>As of</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr id="constant.preg-pattern-order">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-pattern-order">PREG_PATTERN_ORDER</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      Orders results so that <var class="varname">$matches[0]</var> is an array of full pattern
      matches, <var class="varname">$matches[1]</var> is an array of strings matched by the first
      parenthesized subpattern, and so on. This flag is only used with
      <span class="function"><a href="function.preg-match-all.php" class="function">preg_match_all()</a></span>.
     </td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.preg-set-order">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-set-order">PREG_SET_ORDER</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      Orders results so that <var class="varname">$matches[0]</var> is an array of first set of
      matches, <var class="varname">$matches[1]</var> is an array of second set of matches, and so
      on. This flag is only used with <span class="function"><a href="function.preg-match-all.php" class="function">preg_match_all()</a></span>.
     </td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.preg-offset-capture">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-offset-capture">PREG_OFFSET_CAPTURE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      If this flag is set, for every occurring match the appendant byte
      offset will also be returned. Note that this changes the return
      values in an array where every element is an array consisting of the
      matched string at offset 0 and its string offset within subject at
      offset 1.
     </td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.preg-split-no-empty">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-split-no-empty">PREG_SPLIT_NO_EMPTY</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      This flag tells <span class="function"><a href="function.preg-split.php" class="function">preg_split()</a></span> to return only non-empty
      pieces.
     </td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.preg-split-delim-capture">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-split-delim-capture">PREG_SPLIT_DELIM_CAPTURE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      This flag tells <span class="function"><a href="function.preg-split.php" class="function">preg_split()</a></span> to capture
      parenthesized expression in the delimiter pattern as well.
     </td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.preg-split-offset-capture">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-split-offset-capture">PREG_SPLIT_OFFSET_CAPTURE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      See the description of <strong><code><a href="pcre.constants.php#constant.preg-offset-capture">PREG_OFFSET_CAPTURE</a></code></strong>.
      This flag is only used for <span class="function"><a href="function.preg-split.php" class="function">preg_split()</a></span>.
     </td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.preg-unmatched-as-null">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-unmatched-as-null">PREG_UNMATCHED_AS_NULL</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      This flag tells <span class="function"><a href="function.preg-match.php" class="function">preg_match()</a></span> and
      <span class="function"><a href="function.preg-match-all.php" class="function">preg_match_all()</a></span> to include unmatched subpatterns in
      <var class="varname">$matches</var> as <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> values. Without this flag, unmatched
      subpatterns are reported as empty strings, as if they were empty matches.
      Setting this flag allows to distinguish between these two cases.
     </td>
     <td>7.2.0</td>
    </tr>

    <tr id="constant.preg-no-error">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-no-error">PREG_NO_ERROR</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      Returned by <span class="function"><a href="function.preg-last-error.php" class="function">preg_last_error()</a></span> if there were no
      errors.
     </td>
     <td>5.2.0</td>
    </tr>

    <tr id="constant.preg-internal-error">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-internal-error">PREG_INTERNAL_ERROR</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      Returned by <span class="function"><a href="function.preg-last-error.php" class="function">preg_last_error()</a></span> if there was an
      internal PCRE error.
     </td>
     <td>5.2.0</td>
    </tr>

    <tr id="constant.preg-backtrack-limit-error">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-backtrack-limit-error">PREG_BACKTRACK_LIMIT_ERROR</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      Returned by <span class="function"><a href="function.preg-last-error.php" class="function">preg_last_error()</a></span> if <a href="pcre.configuration.php#ini.pcre.backtrack-limit" class="link">backtrack limit</a> was exhausted.
     </td>
     <td>5.2.0</td>
    </tr>

    <tr id="constant.preg-recursion-limit-error">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-recursion-limit-error">PREG_RECURSION_LIMIT_ERROR</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      Returned by <span class="function"><a href="function.preg-last-error.php" class="function">preg_last_error()</a></span> if <a href="pcre.configuration.php#ini.pcre.recursion-limit" class="link">recursion limit</a> was exhausted.
     </td>
     <td>5.2.0</td>
    </tr>

    <tr id="constant.preg-bad-utf8-error">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-bad-utf8-error">PREG_BAD_UTF8_ERROR</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      Returned by <span class="function"><a href="function.preg-last-error.php" class="function">preg_last_error()</a></span> if the last error was
      caused by malformed UTF-8 data (only when running a regex in <a href="reference.pcre.pattern.modifiers.php" class="link">UTF-8 mode</a>).
     </td>
     <td>5.2.0</td>
    </tr>

    <tr id="constant.preg-bad-utf8-offset-error">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-bad-utf8-offset-error">PREG_BAD_UTF8_OFFSET_ERROR</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      Returned by <span class="function"><a href="function.preg-last-error.php" class="function">preg_last_error()</a></span> if the offset didn&#039;t
      correspond to the begin of a valid UTF-8 code point (only when running
      a regex in <a href="reference.pcre.pattern.modifiers.php" class="link">UTF-8
      mode</a>).
     </td>
     <td>5.3.0</td>
    </tr>

    <tr id="constant.preg-jit-stacklimit-error">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-jit-stacklimit-error">PREG_JIT_STACKLIMIT_ERROR</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      Returned by <span class="function"><a href="function.preg-last-error.php" class="function">preg_last_error()</a></span> if the last PCRE function
      failed due to limited JIT stack space.
     </td>
     <td>7.0.0</td>
    </tr>

    <tr id="constant.pcre-version">
     <td>
      <strong><code><a href="pcre.constants.php#constant.pcre-version">PCRE_VERSION</a></code></strong>
      (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
     </td>
     <td>
      PCRE version and release date (e.g. &quot;<code class="literal">7.0 18-Dec-2006</code>&quot;).
     </td>
     <td>5.2.4</td>
    </tr>

    <tr id="constant.pcre-version-major">
     <td>
      <strong><code><a href="pcre.constants.php#constant.pcre-version-major">PCRE_VERSION_MAJOR</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      PCRE major version number.
     </td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.pcre-version-minor">
     <td>
      <strong><code><a href="pcre.constants.php#constant.pcre-version-minor">PCRE_VERSION_MINOR</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      PCRE minor version number.
     </td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.pcre-jit-support">
     <td>
      <strong><code><a href="pcre.constants.php#constant.pcre-jit-support">PCRE_JIT_SUPPORT</a></code></strong>
      (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
     </td>
     <td>
      Indicates whether PCRE JIT support is available.
     </td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.preg-grep-invert">
     <td>
      <strong><code><a href="pcre.constants.php#constant.preg-grep-invert">PREG_GREP_INVERT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>
      Return the elements that do not match a given pattern.
     </td>
     <td class="empty">&nbsp;</td>
    </tr>

   </tbody>
  
 </table>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpcre.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pcre.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pcre.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117743">  <div class="votes">
    <div id="Vu117743">
    <a href="/manual/vote-note.php?id=117743&amp;page=pcre.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117743">
    <a href="/manual/vote-note.php?id=117743&amp;page=pcre.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117743" title="67% like this...">
    27
    </div>
  </div>
  <a href="#117743" class="name">
  <strong class="user"><em>erutan409 at hotmail dot com</em></strong></a><a class="genanchor" href="#117743"> &para;</a><div class="date" title="2015-07-31 01:24"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117743">
<div class="phpcode"><code><span class="html">PREG_PATTERN_ORDER: 1<br />PREG_SET_ORDER: 2<br />PREG_OFFSET_CAPTURE: 256<br />PREG_SPLIT_NO_EMPTY: 1<br />PREG_SPLIT_DELIM_CAPTURE: 2<br />PREG_SPLIT_OFFSET_CAPTURE: 4<br />PREG_NO_ERROR: 0<br />PREG_INTERNAL_ERROR: 1<br />PREG_BACKTRACK_LIMIT_ERROR: 2<br />PREG_RECURSION_LIMIT_ERROR: 3<br />PREG_BAD_UTF8_ERROR: 4<br />PREG_BAD_UTF8_OFFSET_ERROR: 5<br />PCRE_VERSION: %YOUR_VERSION_NUMBER%</span></code></div>
  </div>
 </div>
  <div class="note" id="118538">  <div class="votes">
    <div id="Vu118538">
    <a href="/manual/vote-note.php?id=118538&amp;page=pcre.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118538">
    <a href="/manual/vote-note.php?id=118538&amp;page=pcre.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118538" title="68% like this...">
    16
    </div>
  </div>
  <a href="#118538" class="name">
  <strong class="user"><em>Robert</em></strong></a><a class="genanchor" href="#118538"> &para;</a><div class="date" title="2015-12-23 10:41"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118538">
<div class="phpcode"><code><span class="html">The new PREG_JIT_STACKLIMIT_ERROR constant introduced with PHP 7.0.0 has got a value of 6.<br /><br />I experienced this error code when parsing a 112KB file. preg_match_all failed with this error. Interesting was: The matches array contained some entries, but not all as the command failed (I missed to check the return value).<br /><br />Unfortunately you can not configure the stack-size of the PCRE JIT. The only way out was - at least for me - to disable the PCRE JIT via php.ini (pcre.jit=0).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pcre.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pcre.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.pcre.php">PCRE</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.pcre.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="pcre.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="pcre.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="pcre.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="pcre.pattern.php" title="PCRE Patterns">PCRE Patterns</a>
                        </li>
                                                <li class="">
                            <a href="ref.pcre.php" title="PCRE Functions">PCRE Functions</a>
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
