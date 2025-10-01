<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: setlocale - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.setlocale.php">
 <link rel="shorturl" href="https://www.php.net/setlocale">
 <link rel="alternate" href="https://www.php.net/setlocale" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.rtrim.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sha1.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.setlocale.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.setlocale.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.setlocale.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.setlocale.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.setlocale.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.setlocale.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.setlocale.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.setlocale.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.setlocale.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.setlocale.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.setlocale.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set locale information" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: setlocale - Manual" />
<meta name="twitter:description" content="Set locale information" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: setlocale - Manual" />
<meta itemprop="description" content="Set locale information" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set locale information" />

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
        <a href="function.sha1.php">
          sha1 &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.rtrim.php">
          &laquo; rtrim        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.setlocale.php' selected="selected">English</option>
            <option value='de/function.setlocale.php'>German</option>
            <option value='es/function.setlocale.php'>Spanish</option>
            <option value='fr/function.setlocale.php'>French</option>
            <option value='it/function.setlocale.php'>Italian</option>
            <option value='ja/function.setlocale.php'>Japanese</option>
            <option value='pt_BR/function.setlocale.php'>Brazilian Portuguese</option>
            <option value='ru/function.setlocale.php'>Russian</option>
            <option value='tr/function.setlocale.php'>Turkish</option>
            <option value='uk/function.setlocale.php'>Ukrainian</option>
            <option value='zh/function.setlocale.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.setlocale" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">setlocale</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">setlocale</span> &mdash; <span class="dc-title">Set locale information</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.setlocale-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>setlocale</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$category</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locales</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">...$rest</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="simpara">Alternative signature (not supported with named arguments):</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>setlocale</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$category</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$locale_array</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Sets locale information.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The locale information is maintained per process, not per thread. If you
    are running PHP on a multithreaded server API
    , you may experience sudden changes in locale settings while a
    script is running, though the script itself never called 
    <span class="function"><strong>setlocale()</strong></span>. This happens due to other scripts
    running in different threads of the same process at the same time,
    changing the process-wide locale using <span class="function"><strong>setlocale()</strong></span>.
    On Windows, locale information is maintained per thread as of PHP 7.0.5.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.setlocale-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">category</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">category</code> is a named constant specifying the
       category of the functions affected by the locale setting:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="string.constants.php#constant.lc-all">LC_ALL</a></code></strong> for all of the below
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="string.constants.php#constant.lc-collate">LC_COLLATE</a></code></strong> for string comparison, see
          <span class="function"><a href="function.strcoll.php" class="function">strcoll()</a></span>
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="string.constants.php#constant.lc-ctype">LC_CTYPE</a></code></strong> for character classification and conversion, for
          example <span class="function"><a href="function.ctype-alpha.php" class="function">ctype_alpha()</a></span>
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="string.constants.php#constant.lc-monetary">LC_MONETARY</a></code></strong> for <span class="function"><a href="function.localeconv.php" class="function">localeconv()</a></span>
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="string.constants.php#constant.lc-numeric">LC_NUMERIC</a></code></strong> for decimal separator (See also
          <span class="function"><a href="function.localeconv.php" class="function">localeconv()</a></span>)
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="string.constants.php#constant.lc-time">LC_TIME</a></code></strong> for date and time formatting with
          <span class="function"><a href="function.strftime.php" class="function">strftime()</a></span>
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="string.constants.php#constant.lc-messages">LC_MESSAGES</a></code></strong> for system responses (available if PHP was compiled with
          <code class="literal">libintl</code>)
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">locales</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">locales</code> is the empty string
       <code class="literal">&quot;&quot;</code> or is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the locale names will be set from the
       values of environment variables with the same names as the above
       categories, or from &quot;LANG&quot;.
      </p>
      <p class="para">
       If <code class="parameter">locales</code> is <code class="literal">&quot;0&quot;</code>,
       the locale setting is not affected, only the current setting is returned.
      </p>
      <p class="para">
       If <code class="parameter">locales</code> is followed by additional
       parameters then each parameter is tried to be set as
       new locale until success. This is useful if a locale is known under
       different names on different systems or for providing a fallback
       for a possibly not available locale.
      </p>
     </dd>
    
    
     <dt><code class="parameter">rest</code></dt>
     <dd>
      <p class="para">
       Optional string parameters to try as locale settings until
       success.
      </p>
     </dd>
    
    
     <dt><code class="parameter">locale_array</code></dt>
     <dd>
      <p class="para">
       Each array element is tried to be set as
       new locale until success. This is useful if a locale is known under
       different names on different systems or for providing a fallback
       for a possibly not available locale.
      </p>
     </dd>
    
   </dl>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     On Windows, setlocale(LC_ALL, &#039;&#039;) sets the locale names from the
     system&#039;s regional/language settings (accessible via Control Panel).
    </p>
   </p></blockquote>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.setlocale-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the new current locale, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the locale functionality is
   not implemented on your platform, the specified locale does not exist or
   the category name is invalid.
  </p>
  <p class="para">
   An invalid category name also causes a warning message. Category/locale
   names can be found in <a href="https://datatracker.ietf.org/doc/html/rfc1766" class="link external">&raquo;&nbsp;RFC 1766</a>
   and <a href="http://www.loc.gov/standards/iso639-2/php/code_list.php" class="link external">&raquo;&nbsp;ISO 639</a>.
   Different systems have different naming schemes for locales.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The return value of <span class="function"><strong>setlocale()</strong></span> depends
    on the system that PHP is running.  It returns exactly
    what the system <code class="literal">setlocale</code> function returns.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 examples" id="refsect1-function.setlocale-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5108">
    <p><strong>Example #1 <span class="function"><strong>setlocale()</strong></span> Examples</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Set locale to Dutch */<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_ALL</span><span style="color: #007700">, </span><span style="color: #DD0000">'nl_NL'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Output: vrijdag 22 december 1978 */<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%A %e %B %Y"</span><span style="color: #007700">, </span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">12</span><span style="color: #007700">, </span><span style="color: #0000BB">22</span><span style="color: #007700">, </span><span style="color: #0000BB">1978</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">/* try different possible locale names for german */<br /></span><span style="color: #0000BB">$loc_de </span><span style="color: #007700">= </span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_ALL</span><span style="color: #007700">, </span><span style="color: #DD0000">'de_DE@euro'</span><span style="color: #007700">, </span><span style="color: #DD0000">'de_DE'</span><span style="color: #007700">, </span><span style="color: #DD0000">'de'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ge'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Preferred locale for german on this system is '</span><span style="color: #0000BB">$loc_de</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5109">
    <p><strong>Example #2 <span class="function"><strong>setlocale()</strong></span> Retrieve current setting</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Retrieve current setting */<br /></span><span style="color: #0000BB">$current </span><span style="color: #007700">= </span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_ALL</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"Current locale '</span><span style="color: #0000BB">$current</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5110">
    <p><strong>Example #3 <span class="function"><strong>setlocale()</strong></span> Examples for Windows</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Set locale to Dutch */<br /></span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_ALL</span><span style="color: #007700">, </span><span style="color: #DD0000">'nld_nld'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Output: vrijdag 22 december 1978 */<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%A %d %B %Y"</span><span style="color: #007700">, </span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">12</span><span style="color: #007700">, </span><span style="color: #0000BB">22</span><span style="color: #007700">, </span><span style="color: #0000BB">1978</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">/* try different possible locale names for german */<br /></span><span style="color: #0000BB">$loc_de </span><span style="color: #007700">= </span><span style="color: #0000BB">setlocale</span><span style="color: #007700">(</span><span style="color: #0000BB">LC_ALL</span><span style="color: #007700">, </span><span style="color: #DD0000">'de_DE@euro'</span><span style="color: #007700">, </span><span style="color: #DD0000">'de_DE'</span><span style="color: #007700">, </span><span style="color: #DD0000">'deu_deu'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Preferred locale for german on this system is '</span><span style="color: #0000BB">$loc_de</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.setlocale-notes">
  <h3 class="title">Notes</h3>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    Windows users will find useful information about
    <code class="parameter">locales</code> strings at Microsoft&#039;s
    <abbr title="Microsoft Developer Network">MSDN</abbr> website. Supported language strings can be found
    in the
    <a href="http://msdn.microsoft.com/en-us/library/39cwe7zf.aspx" class="link external">&raquo;&nbsp;language strings documentation</a>
    and supported country/region strings in the
    <a href="http://msdn.microsoft.com/en-us/library/cdax410z.aspx" class="link external">&raquo;&nbsp;country/region strings documentation</a>.
   </p>
  </div>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/setlocale.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.setlocale%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.setlocale&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.setlocale.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">34 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="25041">  <div class="votes">
    <div id="Vu25041">
    <a href="/manual/vote-note.php?id=25041&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25041">
    <a href="/manual/vote-note.php?id=25041&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25041" title="82% like this...">
    174
    </div>
  </div>
  <a href="#25041" class="name">
  <strong class="user"><em>r dot nospam dot velseboer at quicknet dot nospam dot nl</em></strong></a><a class="genanchor" href="#25041"> &para;</a><div class="date" title="2002-09-08 07:02"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25041">
<div class="phpcode"><code><span class="html">be careful with the LC_ALL setting, as it may introduce some unwanted conversions. For example, I used <br /><br />setlocale (LC_ALL, "Dutch");<br /><br />to get my weekdays in dutch on the page. From that moment on (as I found out many hours later) my floating point values from MYSQL where interpreted as integers because the Dutch locale wants a comma (,) instead of a point (.) before the decimals. I tried printf, number_format, floatval.... all to no avail. 1.50 was always printed as 1.00 :(<br /><br />When I set my locale to :<br /><br /> setlocale (LC_TIME, "Dutch");<br /><br />my weekdays are good now and my floating point values too. <br /><br />I hope I can save some people the trouble of figuring this out by themselves.<br /><br />Rob</span></code></div>
  </div>
 </div>
  <div class="note" id="106811">  <div class="votes">
    <div id="Vu106811">
    <a href="/manual/vote-note.php?id=106811&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106811">
    <a href="/manual/vote-note.php?id=106811&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106811" title="74% like this...">
    54
    </div>
  </div>
  <a href="#106811" class="name">
  <strong class="user"><em>russ at eatmymonkeydust dot com</em></strong></a><a class="genanchor" href="#106811"> &para;</a><div class="date" title="2011-12-08 03:45"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106811">
<div class="phpcode"><code><span class="html">If you are looking for a getlocale() function simply pass 0 (zero) as the second parameter to setlocale().<br /><br />Beware though if you use the category LC_ALL and some of the locales differ as a string containing all the locales is returned:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">// LC_CTYPE=en_US.UTF-8;LC_NUMERIC=C;LC_TIME=C;LC_COLLATE=C;LC_MONETARY=C;LC_MESSAGES=C;LC_PAPER=C;LC_NAME=C;<br />// LC_ADDRESS=C;LC_TELEPHONE=C;LC_MEASUREMENT=C;LC_IDENTIFICATION=C<br /><br /></span><span class="keyword">echo </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_CTYPE</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">// en_US.UTF-8<br /><br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">"en_US.UTF-8"</span><span class="keyword">);<br />echo </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">// en_US.UTF-8<br /><br /></span><span class="default">?&gt;<br /></span><br />If you are looking to store and reset the locales you could do something like this:<br /><br /><span class="default">&lt;?php<br /><br />$originalLocales </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">";"</span><span class="keyword">, </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">"nb_NO.utf8"</span><span class="keyword">);<br /><br /></span><span class="comment">// Do something<br /><br /></span><span class="keyword">foreach (</span><span class="default">$originalLocales </span><span class="keyword">as </span><span class="default">$localeSetting</span><span class="keyword">) {<br />  if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$localeSetting</span><span class="keyword">, </span><span class="string">"="</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) {<br />    list (</span><span class="default">$category</span><span class="keyword">, </span><span class="default">$locale</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"="</span><span class="keyword">, </span><span class="default">$localeSetting</span><span class="keyword">);<br />  }<br />  else {<br />    </span><span class="default">$category </span><span class="keyword">= </span><span class="default">LC_ALL</span><span class="keyword">;<br />    </span><span class="default">$locale   </span><span class="keyword">= </span><span class="default">$localeSetting</span><span class="keyword">;<br />  }<br />  </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">$category</span><span class="keyword">, </span><span class="default">$locale</span><span class="keyword">); <br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />The above works here (Ubuntu Linux) but as the setlocale() function is just wrapping the equivalent system calls, your mileage may vary on the result.</span></code></div>
  </div>
 </div>
  <div class="note" id="124185">  <div class="votes">
    <div id="Vu124185">
    <a href="/manual/vote-note.php?id=124185&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124185">
    <a href="/manual/vote-note.php?id=124185&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124185" title="80% like this...">
    13
    </div>
  </div>
  <a href="#124185" class="name">
  <strong class="user"><em>epistomai at gmail dot com</em></strong></a><a class="genanchor" href="#124185"> &para;</a><div class="date" title="2019-09-10 07:39"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124185">
<div class="phpcode"><code><span class="html">setlocale(LC_MONETARY, 'en_US') doesn't work anymore (at least in PHP Version 7.3.8).<br /><br />I've used 'en_US.UTF-8' instead</span></code></div>
  </div>
 </div>
  <div class="note" id="90919">  <div class="votes">
    <div id="Vu90919">
    <a href="/manual/vote-note.php?id=90919&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90919">
    <a href="/manual/vote-note.php?id=90919&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90919" title="67% like this...">
    19
    </div>
  </div>
  <a href="#90919" class="name">
  <strong class="user"><em>Kari Sderholm aka Haprog</em></strong></a><a class="genanchor" href="#90919"> &para;</a><div class="date" title="2009-05-16 04:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90919">
<div class="phpcode"><code><span class="html">It took me a while to figure out how to get a Finnish locale correctly set on Ubuntu Server with Apache2 and PHP5.<br /><br />At first the output for "locale -a" was this:<br />C<br />en_US.utf8<br />POSIX<br /><br />I had to install a finnish language pack with<br />"sudo apt-get install language-pack-fi-base"<br /><br />Now the output for "locale -a" is:<br />C<br />en_US.utf8<br />fi_FI.utf8<br />POSIX<br /><br />The last thing you need to do after installing the correct language pack is restart Apache with "sudo apache2ctl restart". The locale "fi_FI.utf8" can then be used in PHP5 after restarting Apache.<br /><br />For setting Finnish timezone and locale in PHP use:<br /><span class="default">&lt;?php<br />date_default_timezone_set</span><span class="keyword">(</span><span class="string">'Europe/Helsinki'</span><span class="keyword">);<br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, array(</span><span class="string">'fi_FI.UTF-8'</span><span class="keyword">,</span><span class="string">'fi_FI@euro'</span><span class="keyword">,</span><span class="string">'fi_FI'</span><span class="keyword">,</span><span class="string">'finnish'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118076">  <div class="votes">
    <div id="Vu118076">
    <a href="/manual/vote-note.php?id=118076&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118076">
    <a href="/manual/vote-note.php?id=118076&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118076" title="66% like this...">
    15
    </div>
  </div>
  <a href="#118076" class="name">
  <strong class="user"><em>Shashakhmetov Talgat</em></strong></a><a class="genanchor" href="#118076"> &para;</a><div class="date" title="2015-09-29 04:41"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118076">
<div class="phpcode"><code><span class="html">//Fix encoding for russian locale on windows<br />$locale = setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');<br /><br />function strftime_fix($format, $locale, $timestamp = time()){<br />    // Fix %e for windows<br />    if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {<br />        $format = preg_replace('#(?&lt;!%)((?:%%)*)%e#', '\1%#d', $format);<br />    }<br />    // convert<br />    $date_str = strftime($format, $timestamp);<br />    if (stripos($locale, "1251") !== false) {<br />      return iconv("windows-1251","utf-8", $date_str);<br />    } elseif (stripos($locale, "1252") !== false) {<br />      return iconv("windows-1252","utf-8", $date_str);<br />    } else {<br />      return $date_str;<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="126828">  <div class="votes">
    <div id="Vu126828">
    <a href="/manual/vote-note.php?id=126828&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126828">
    <a href="/manual/vote-note.php?id=126828&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126828" title="66% like this...">
    1
    </div>
  </div>
  <a href="#126828" class="name">
  <strong class="user"><em>lingureanumanuel at yahoo dot com</em></strong></a><a class="genanchor" href="#126828"> &para;</a><div class="date" title="2022-02-05 10:12"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126828">
<div class="phpcode"><code><span class="html">for windows<br /><br />setlocale(LC_ALL, 'Greenlandic_Greenland.1252');<br />will return false<br /><br />to make it work use<br />setlocale(LC_ALL, 'Kalaallisut_Greenland.1252');</span></code></div>
  </div>
 </div>
  <div class="note" id="89076">  <div class="votes">
    <div id="Vu89076">
    <a href="/manual/vote-note.php?id=89076&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89076">
    <a href="/manual/vote-note.php?id=89076&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89076" title="65% like this...">
    14
    </div>
  </div>
  <a href="#89076" class="name">
  <strong class="user"><em>brice/axice/be</em></strong></a><a class="genanchor" href="#89076"> &para;</a><div class="date" title="2009-02-20 05:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89076">
<div class="phpcode"><code><span class="html">Pay attention to the syntax.
<br />- UTF8 without dash ('-')
<br />- locale.codeset and not locale-codeset.
<br />
<br />Stupid newbie error but worth knowing them when starting with gettext.
<br />
<br /><span class="default">&lt;?php
<br />$codeset </span><span class="keyword">= </span><span class="string">"UTF8"</span><span class="keyword">;  </span><span class="comment">// warning ! not UTF-8 with dash '-'
<br />        
<br />// for windows compatibility (e.g. xampp) : theses 3 lines are useless for linux systems 
<br />
<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'LANG='</span><span class="keyword">.</span><span class="default">$lang</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$codeset</span><span class="keyword">);
<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'LANGUAGE='</span><span class="keyword">.</span><span class="default">$lang</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$codeset</span><span class="keyword">);
<br /></span><span class="default">bind_textdomain_codeset</span><span class="keyword">(</span><span class="string">'mydomain'</span><span class="keyword">, </span><span class="default">$codeset</span><span class="keyword">);
<br />
<br /></span><span class="comment">// set locale
<br /></span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="string">'mydomain'</span><span class="keyword">, </span><span class="default">ABSPATH</span><span class="keyword">.</span><span class="string">'/locale/'</span><span class="keyword">);
<br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="default">$lang</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$codeset</span><span class="keyword">);
<br /></span><span class="default">textdomain</span><span class="keyword">(</span><span class="string">'mydomain'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />where directory structure of locale is (for example) :
<br />locale/fr_FR/LC_MESSAGES/mydomain.mo
<br />locale/en_US/LC_MESSAGES/mydomain.mo
<br />
<br />and ABSPATH is the absolute path to the locale dir
<br />
<br />further note, under linux systems, it seems to be necessary to create the locale at os level using 'locale-gen'.</span></code></div>
  </div>
 </div>
  <div class="note" id="46640">  <div class="votes">
    <div id="Vu46640">
    <a href="/manual/vote-note.php?id=46640&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46640">
    <a href="/manual/vote-note.php?id=46640&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46640" title="65% like this...">
    9
    </div>
  </div>
  <a href="#46640" class="name">
  <strong class="user"><em>pigmeu at pigmeu dot net</em></strong></a><a class="genanchor" href="#46640"> &para;</a><div class="date" title="2004-10-18 01:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46640">
<div class="phpcode"><code><span class="html">!!WARNING!!<br /><br />The "locale" always depend on the server configuration.<br /><br />i.e.:<br />When trying to use "pt_BR" on some servers you will ALWAYS get false. Even with other languages.<br /><br />The locale string need to be supported by the server. Sometimes there are diferents charsets for a language, like "pt_BR.utf-8" and "pt_BR.iso-8859-1", but there is no support for a _standard_ "pt_BR".<br /><br />This problem occours in Windows platform too. Here you need to call "portuguese" or "spanish" or "german" or...<br /><br />Maybe the only way to try to get success calling the function setlocale() is:<br />setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese", ...);<br /><br />But NEVER trust on that when making functions like date conversions or number formating. The best way to make sure you are doing the right thing, is using the default "en_US" or "en_UK", by not calling the setlocale() function. Or, make sure that your server support the lang you want to use, with some tests.<br /><br />Remember that: Using the default locale setings is the best way to "talk" with other applications, like dbs or rpc servers, too.<br /><br />[]s<br /><br />Pigmeu</span></code></div>
  </div>
 </div>
  <div class="note" id="122317">  <div class="votes">
    <div id="Vu122317">
    <a href="/manual/vote-note.php?id=122317&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122317">
    <a href="/manual/vote-note.php?id=122317&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122317" title="62% like this...">
    2
    </div>
  </div>
  <a href="#122317" class="name">
  <strong class="user"><em>stepdate at gmail dot com</em></strong></a><a class="genanchor" href="#122317"> &para;</a><div class="date" title="2018-01-27 05:03"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122317">
<div class="phpcode"><code><span class="html">If you have Locales installed and things won't work check the spelling: for German all the comments suggested "setlocale(LC_TIME, "de_DE.utf8")", but it has to be "setlocale(LC_TIME, "de_DE.UTF-8")"-&gt; UTF-8 instead of utf8.</span></code></div>
  </div>
 </div>
  <div class="note" id="117529">  <div class="votes">
    <div id="Vu117529">
    <a href="/manual/vote-note.php?id=117529&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117529">
    <a href="/manual/vote-note.php?id=117529&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117529" title="60% like this...">
    8
    </div>
  </div>
  <a href="#117529" class="name">
  <strong class="user"><em>jose dot nobile at gmail dot com</em></strong></a><a class="genanchor" href="#117529"> &para;</a><div class="date" title="2015-06-25 01:05"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117529">
<div class="phpcode"><code><span class="html">For Windows users complaining about setlocale. <br /><br />The locale argument to the setlocale function takes the following form:<br />setlocale( LC_ALL, "&lt;language&gt;_&lt;country&gt;.&lt;code_page&gt;" );<br /><br />in short, if you  want use for example: es_CO.UTF-8 it must be in Windows: Spanish_Colombia.1252<br /><br />The code page 1252 is ISO-8859-1 (windows-1252    ANSI Latin 1; Western European (Windows)<br /><br />Windows use different languages code from Unix, for example, es_CO becomes es-CO or Spanish_Colombia, also it doesn't support UTF-8 charset as is shown in their website: <a href="https://msdn.microsoft.com/en-us/library/x99tb11d(v=vs.140" rel="nofollow" target="_blank">https://msdn.microsoft.com/en-us/library/x99tb11d(v=vs.140</a>).aspx<br /><br />"The set of available locale names, languages, country/region codes, and code pages includes all those supported by the Windows NLS API except code pages that require more than two bytes per character, such as UTF-7 and UTF-8. If you provide a code page value of UTF-7 or UTF-8, setlocale will fail, returning NULL."<br /><br />Please check the updated website of language and code pages:<br /><br /><a href="https://msdn.microsoft.com/en-us/library/39cwe7zf(v=vs.140" rel="nofollow" target="_blank">https://msdn.microsoft.com/en-us/library/39cwe7zf(v=vs.140</a>).aspx<br />and<br /><a href="https://msdn.microsoft.com/en-us//goglobal/bb895996" rel="nofollow" target="_blank">https://msdn.microsoft.com/en-us//goglobal/bb895996</a><br /><br />Here a copy paste in case the link is removed:<br /><br />Afrikaans<br />Albanian<br />Arabic_Saudi_Arabia<br />Arabic_Iraq<br />Arabic_Egypt<br />Arabic_Libya<br />Arabic_Algeria<br />Arabic_Morocco<br />Arabic_Tunisia<br />Arabic_Oman<br />Arabic_Yemen<br />Arabic_Syria<br />Arabic_Jordan<br />Arabic_Lebanon<br />Arabic_Kuwait<br />Arabic_UAE<br />Arabic_Bahrain<br />Arabic_Qatar<br />Armenian<br />Azeri_Latin<br />Azeri_Cyrillic<br />Basque<br />Belarusian<br />Bengali_India<br />Bosnian_Latin<br />Bulgarian<br />Catalan<br />Chinese_Taiwan<br />Chinese_PRC<br />Chinese_Hong_Kong<br />Chinese_Singapore<br />Chinese_Macau<br />Croatian<br />Croatian_Bosnia_Herzegovina<br />Czech<br />Danish<br />Divehi<br />Dutch_Standard<br />Dutch_Belgian<br />English_United_States<br />English_United_Kingdom<br />English_Australian<br />English_Canadian<br />English_New_Zealand<br />English_Ireland<br />English_South_Africa<br />English_Jamaica<br />English_Caribbean<br />English_Belize<br />English_Trinidad<br />English_Zimbabwe<br />English_Philippines<br />Estonian<br />Faeroese<br />Farsi<br />Finnish<br />French_Standard<br />French_Belgian<br />French_Canadian<br />French_Swiss<br />French_Luxembourg<br />French_Monaco<br />Georgian<br />Galician<br />German_Standard<br />German_Swiss<br />German_Austrian<br />German_Luxembourg<br />German_Liechtenstein<br />Greek<br />Gujarati<br />Hebrew<br />Hindi<br />Hungarian<br />Icelandic<br />Indonesian<br />Italian_Standard<br />Italian_Swiss<br />Japanese<br />Kannada<br />Kazakh<br />Konkani<br />Korean<br />Kyrgyz<br />Latvian<br />Lithuanian<br />Macedonian<br />Malay_Malaysia<br />Malay_Brunei_Darussalam<br />Malayalam<br />Maltese<br />Maori<br />Marathi<br />Mongolian<br />Norwegian_Bokmal<br />Norwegian_Nynorsk<br />Polish<br />Portuguese_Brazilian<br />Portuguese_Standard<br />Punjabi<br />Quechua_Bolivia<br />Quechua_Ecuador<br />Quechua_Peru<br />Romanian<br />Russian<br />Sami_Inari<br />Sami_Lule_Norway<br />Sami_Lule_Sweden<br />Sami_Northern_Finland<br />Sami_Northern_Norway<br />Sami_Northern_Sweden<br />Sami_Skolt<br />Sami_Southern_Norway<br />Sami_Southern_Sweden<br />Sanskrit<br />Serbian_Latin<br />Serbian_Latin_Bosnia_Herzegovina<br />Serbian_Cyrillic<br />Serbian_Cyrillic_Bosnia_Herzegovina<br />Slovak<br />Slovenian<br />Spanish_Traditional_Sort<br />Spanish_Mexican<br />Spanish_Modern_Sort<br />Spanish_Guatemala<br />Spanish_Costa_Rica<br />Spanish_Panama<br />Spanish_Dominican_Republic<br />Spanish_Venezuela<br />Spanish_Colombia<br />Spanish_Peru<br />Spanish_Argentina<br />Spanish_Ecuador<br />Spanish_Chile<br />Spanish_Uruguay<br />Spanish_Paraguay<br />Spanish_Bolivia<br />Spanish_El_Salvador<br />Spanish_Honduras<br />Spanish_Nicaragua<br />Spanish_Puerto_Rico<br />Swahili<br />Swedish<br />Swedish_Finland<br />Syriac<br />Tamil<br />Tatar<br />Telugu<br />Thai<br />Tswana<br />Ukrainian<br />Turkish<br />Ukrainian<br />Urdu<br />Uzbek_Latin<br />Uzbek_Cyrillic<br />Vietnamese<br />Welsh<br />Xhosa<br />Zulu<br /><br />The code pages identifiers:<br /><br /><a href="https://msdn.microsoft.com/en-us/library/windows/desktop/dd317756(v=vs.85" rel="nofollow" target="_blank">https://msdn.microsoft.com/en-us/library/windows/desktop/dd317756(v=vs.85</a>).aspx</span></code></div>
  </div>
 </div>
  <div class="note" id="105074">  <div class="votes">
    <div id="Vu105074">
    <a href="/manual/vote-note.php?id=105074&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105074">
    <a href="/manual/vote-note.php?id=105074&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105074" title="61% like this...">
    3
    </div>
  </div>
  <a href="#105074" class="name">
  <strong class="user"><em>phcorp</em></strong></a><a class="genanchor" href="#105074"> &para;</a><div class="date" title="2011-07-26 06:16"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105074">
<div class="phpcode"><code><span class="html">To find the locale of a Unix system:<br /><span class="default">&lt;?php system</span><span class="keyword">(</span><span class="string">'locale -a'</span><span class="keyword">) </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103627">  <div class="votes">
    <div id="Vu103627">
    <a href="/manual/vote-note.php?id=103627&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103627">
    <a href="/manual/vote-note.php?id=103627&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103627" title="60% like this...">
    4
    </div>
  </div>
  <a href="#103627" class="name">
  <strong class="user"><em>tomas dot hampl at gmail dot com</em></strong></a><a class="genanchor" href="#103627"> &para;</a><div class="date" title="2011-04-23 01:35"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103627">
<div class="phpcode"><code><span class="html">On Linux, setlocale() depends on the installed locales. To see which locales are available to PHP, run this from the terminal:<br /><br />"locale -a"<br /><br />Provided list are all locales that are available on your server for PHP to use. To add a new one, run<br /><br />locale-gen &lt;locale name&gt; (this may need sudo / root permissions), for example to add a Czech locale, run something like this:<br /><br />"sudo locale-gen cs_CZ.utf8"<br /><br />Then you can use this locale declaration:<br /><br />setlocale(LC_ALL, 'cs_CZ.utf8');</span></code></div>
  </div>
 </div>
  <div class="note" id="55834">  <div class="votes">
    <div id="Vu55834">
    <a href="/manual/vote-note.php?id=55834&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55834">
    <a href="/manual/vote-note.php?id=55834&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55834" title="59% like this...">
    4
    </div>
  </div>
  <a href="#55834" class="name">
  <strong class="user"><em>birkholz at web dot de</em></strong></a><a class="genanchor" href="#55834"> &para;</a><div class="date" title="2005-08-14 08:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55834">
<div class="phpcode"><code><span class="html">When i tried to get the current locale (e.g. after i set the lang to german with setlocale(LC_ALL, 'de_DE'); ), the following did not work on my suse linux 9.0-box:<br />$currentLocale = setlocale(LC_ALL, NULL);<br />This code did a reset to the server-setting.<br /><br />$currentLocale = setlocale(LC_ALL, 0); works perfectly for me, but the manual says NULL and 0 are equal in this case, but NULL seems to act like "".</span></code></div>
  </div>
 </div>
  <div class="note" id="62748">  <div class="votes">
    <div id="Vu62748">
    <a href="/manual/vote-note.php?id=62748&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62748">
    <a href="/manual/vote-note.php?id=62748&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62748" title="58% like this...">
    5
    </div>
  </div>
  <a href="#62748" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#62748"> &para;</a><div class="date" title="2006-03-08 12:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62748">
<div class="phpcode"><code><span class="html">The example from bruno dot cenou at revues dot org below shows the possibility, but I want to spell it out: you can add charset info to setlocale.<br /><br />Example:<br /><br />Into my utf-8-encoded page I want to insert the name of the current month, which happens to be March, in German "März" - with umlaut. If you use<br /><br />   setlocale(LC_TIME, 'de_DE');<br />   echo strftime("%B");<br /><br />this will return "M&amp;auml;rz", but that html-entity will look like this on a utf-8 page: "M?rz". Not what I want.<br /><br />But if you use<br /><br />   setlocale(LC_TIME, 'de_DE.UTF8');  // note the charset info !<br />   echo strftime("%B");<br /><br />this returns "M√§rz", which, on utf-8, looks like it should: "März".</span></code></div>
  </div>
 </div>
  <div class="note" id="80540">  <div class="votes">
    <div id="Vu80540">
    <a href="/manual/vote-note.php?id=80540&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80540">
    <a href="/manual/vote-note.php?id=80540&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80540" title="58% like this...">
    2
    </div>
  </div>
  <a href="#80540" class="name">
  <strong class="user"><em>bryn AT lunarvis DOT com</em></strong></a><a class="genanchor" href="#80540"> &para;</a><div class="date" title="2008-01-21 05:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80540">
<div class="phpcode"><code><span class="html">Posting this in the hope it might be useful to others, as I could find very little info anywhere. If you want to use a Welsh locale and have the suitable language support installed, you pass 'cym' (abbreviated form of Cymraeg) to setlocale:<br /><br /><span class="default">&lt;?php<br />setlocale</span><span class="keyword">(</span><span class="default">LC_TIME</span><span class="keyword">, </span><span class="string">'cym'</span><span class="keyword">);<br /></span><span class="default">$welsh</span><span class="keyword">= </span><span class="default">gmstrftime</span><span class="keyword">(</span><span class="string">"%A, %B %Y - %H:%M"</span><span class="keyword">,</span><span class="default">time</span><span class="keyword">());<br />echo </span><span class="default">$welsh</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />The above certainly applies to Windows systems, but should also apply to Unix if the required support is installed.<br /><br />Cheers,<br /><br />Bryn.</span></code></div>
  </div>
 </div>
  <div class="note" id="111150">  <div class="votes">
    <div id="Vu111150">
    <a href="/manual/vote-note.php?id=111150&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111150">
    <a href="/manual/vote-note.php?id=111150&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111150" title="57% like this...">
    3
    </div>
  </div>
  <a href="#111150" class="name">
  <strong class="user"><em>data dot ocean dot italia at gmail dot com</em></strong></a><a class="genanchor" href="#111150"> &para;</a><div class="date" title="2013-01-20 07:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111150">
<div class="phpcode"><code><span class="html">Instead, using php with IIS, I had to use this line for Italian language...<br /><br /><span class="default">&lt;?php setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'Italian_Italy.1250'</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113764">  <div class="votes">
    <div id="Vu113764">
    <a href="/manual/vote-note.php?id=113764&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113764">
    <a href="/manual/vote-note.php?id=113764&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113764" title="57% like this...">
    2
    </div>
  </div>
  <a href="#113764" class="name">
  <strong class="user"><em>RobQuist</em></strong></a><a class="genanchor" href="#113764"> &para;</a><div class="date" title="2013-11-28 02:51"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113764">
<div class="phpcode"><code><span class="html">In addition to russ, about getting / backing up the locale:<br />I'm using this in unit-tests. I wanted to test something based on locale, and reset the locale after the tests were done.<br /><br />Yet there were some errors;<br />* setlocale doesn't like strings anymore. You need to use constants.<br />* Some contants don't exist anymore. <br /><br />Here's an updated piece of code:<br /><br /><span class="default">&lt;?php<br />$originalLocales </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">";"</span><span class="keyword">, </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'nl_NL.UTF-8'</span><span class="keyword">);<br /><br /></span><span class="comment">//Do something here<br /><br />//Recover to the default setting<br />        </span><span class="default">$skipConstants </span><span class="keyword">= array( </span><span class="comment">//these will be returned by setlocale(LC_ALL, 0), but don't exist anymore.<br />            </span><span class="string">'LC_PAPER'</span><span class="keyword">,<br />            </span><span class="string">'LC_NAME'</span><span class="keyword">,<br />            </span><span class="string">'LC_ADDRESS'</span><span class="keyword">,<br />            </span><span class="string">'LC_TELEPHONE'</span><span class="keyword">,<br />            </span><span class="string">'LC_MEASUREMENT'</span><span class="keyword">,<br />            </span><span class="string">'LC_IDENTIFICATION'<br />        </span><span class="keyword">);<br /><br />        foreach (</span><span class="default">$originalLocales </span><span class="keyword">as </span><span class="default">$localeSetting</span><span class="keyword">) {<br />            if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$localeSetting</span><span class="keyword">, </span><span class="string">"="</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) {<br />                list (</span><span class="default">$category</span><span class="keyword">, </span><span class="default">$locale</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"="</span><span class="keyword">, </span><span class="default">$localeSetting</span><span class="keyword">);<br />            } else {<br />                </span><span class="default">$category </span><span class="keyword">= </span><span class="default">LC_ALL</span><span class="keyword">;<br />                </span><span class="default">$locale   </span><span class="keyword">= </span><span class="default">$localeSetting</span><span class="keyword">;<br />            }<br /><br />            if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$category</span><span class="keyword">, </span><span class="default">$skipConstants</span><span class="keyword">)) {<br />                </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">constant</span><span class="keyword">(</span><span class="default">$category</span><span class="keyword">), </span><span class="default">$locale</span><span class="keyword">); </span><span class="comment">//Using strings is deprecated.<br />            </span><span class="keyword">}<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77795">  <div class="votes">
    <div id="Vu77795">
    <a href="/manual/vote-note.php?id=77795&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77795">
    <a href="/manual/vote-note.php?id=77795&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77795" title="57% like this...">
    3
    </div>
  </div>
  <a href="#77795" class="name">
  <strong class="user"><em>Periklis</em></strong></a><a class="genanchor" href="#77795"> &para;</a><div class="date" title="2007-09-13 02:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77795">
<div class="phpcode"><code><span class="html">In *some* Windows systems, setting LC_TIME only will not work, you must either set LC_ALL or both LC_CTYPE and LC_TIME. BUT if you have already set LC_TIME using setlocale earlier in the script, dates will not be affected! For example:<br /><span class="default">&lt;?php<br />setlocale</span><span class="keyword">(</span><span class="default">LC_TIME</span><span class="keyword">, </span><span class="string">'greek'</span><span class="keyword">);<br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_CTYPE</span><span class="keyword">, </span><span class="string">'greek'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>will not work, while <br /><span class="default">&lt;?php<br />setlocale</span><span class="keyword">(</span><span class="default">LC_CTYPE</span><span class="keyword">, </span><span class="string">'greek'</span><span class="keyword">);<br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_TIME</span><span class="keyword">, </span><span class="string">'greek'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>will do the job.</span></code></div>
  </div>
 </div>
  <div class="note" id="86078">  <div class="votes">
    <div id="Vu86078">
    <a href="/manual/vote-note.php?id=86078&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86078">
    <a href="/manual/vote-note.php?id=86078&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86078" title="56% like this...">
    4
    </div>
  </div>
  <a href="#86078" class="name">
  <strong class="user"><em>Leigh Morresi</em></strong></a><a class="genanchor" href="#86078"> &para;</a><div class="date" title="2008-10-01 11:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86078">
<div class="phpcode"><code><span class="html">Setting locale that is not supported by your system will result in some string operations returning a question mark "?" in your strings where it needs to perform transliteration.<br /><br />1) Always check the return of setlocale() to ensure it has set to something supported<br /><br />2) on Linux you can use the "locale -a" command to find a list of supported locales</span></code></div>
  </div>
 </div>
  <div class="note" id="116796">  <div class="votes">
    <div id="Vu116796">
    <a href="/manual/vote-note.php?id=116796&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116796">
    <a href="/manual/vote-note.php?id=116796&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116796" title="55% like this...">
    1
    </div>
  </div>
  <a href="#116796" class="name">
  <strong class="user"><em>aaaaa976 at gmail dot com</em></strong></a><a class="genanchor" href="#116796"> &para;</a><div class="date" title="2015-03-02 08:36"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116796">
<div class="phpcode"><code><span class="html">In Windows some times setlocale don't work, it return a empty array, buts the locale is set. I found that apache start before windows "load" locales, you must restart apache to solve this.</span></code></div>
  </div>
 </div>
  <div class="note" id="84719">  <div class="votes">
    <div id="Vu84719">
    <a href="/manual/vote-note.php?id=84719&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84719">
    <a href="/manual/vote-note.php?id=84719&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84719" title="55% like this...">
    2
    </div>
  </div>
  <a href="#84719" class="name">
  <strong class="user"><em>michal dot kocarek at brainbox dot cz</em></strong></a><a class="genanchor" href="#84719"> &para;</a><div class="date" title="2008-07-27 08:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84719">
<div class="phpcode"><code><span class="html">Note about using UTF-8 locale charset on Windows systems:
<br />
<br />According to MSDN, Windows setlocale()'s implementation does not support UTF-8 encoding.
<br />
<br />Citation from "MSDN setlocale, _wsetlocale" page (<a href="http://msdn.microsoft.com/en-us/library/x99tb11d.aspx" rel="nofollow" target="_blank">http://msdn.microsoft.com/en-us/library/x99tb11d.aspx</a>):
<br />The set of available languages, country/region codes, and code pages includes all those supported by the Win32 NLS API except code pages that require more than two bytes per character, such as UTF-7 and UTF-8. If you provide a code page like UTF-7 or UTF-8, setlocale will fail, returning NULL.
<br />
<br />So basically, code like
<br /><span class="default">&lt;?php setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'Czech_Czech Republic.65001'</span><span class="keyword">); </span><span class="comment">// 65001 is UTF-8 codepage </span><span class="default">?&gt;
<br /></span>does not work on Windows at all.
<br />
<br />(written in time of PHP 5.2.4)</span></code></div>
  </div>
 </div>
  <div class="note" id="39370">  <div class="votes">
    <div id="Vu39370">
    <a href="/manual/vote-note.php?id=39370&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39370">
    <a href="/manual/vote-note.php?id=39370&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39370" title="56% like this...">
    3
    </div>
  </div>
  <a href="#39370" class="name">
  <strong class="user"><em>mk at totu dot com</em></strong></a><a class="genanchor" href="#39370"> &para;</a><div class="date" title="2004-01-26 04:59"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39370">
<div class="phpcode"><code><span class="html">Be carefull - setting a locale which uses commas instead of dots in numbers may cause a mysql db not to understand the query:
<br /><span class="default">&lt;?php
<br />setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">,</span><span class="string">"pl"</span><span class="keyword">);
<br /></span><span class="default">$price </span><span class="keyword">= </span><span class="default">1234 </span><span class="keyword">/ </span><span class="default">100</span><span class="keyword">; </span><span class="comment">// now the price looks like 12,34
<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="default">mysql_query</span><span class="keyword">(</span><span class="string">"SELECT Id FROM table WHERE price='"</span><span class="keyword">.</span><span class="default">$price</span><span class="keyword">.</span><span class="string">"'"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>Even if there is a price 12.34 - nothing will be found</span></code></div>
  </div>
 </div>
  <div class="note" id="98649">  <div class="votes">
    <div id="Vu98649">
    <a href="/manual/vote-note.php?id=98649&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98649">
    <a href="/manual/vote-note.php?id=98649&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98649" title="55% like this...">
    2
    </div>
  </div>
  <a href="#98649" class="name">
  <strong class="user"><em>garygendron at yahoo dot com</em></strong></a><a class="genanchor" href="#98649"> &para;</a><div class="date" title="2010-06-28 08:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98649">
<div class="phpcode"><code><span class="html">For a php Mysql query, you could also use, for french canadian, in this example :<br /><br />$query = 'SET lc_time_names = "fr_CA"';<br />$result = mysql_query($query) or die("Query failed");<br /><br />$query = 'SELECT @@lc_time_names';<br />$result = mysql_query($query) or die("Query failed");<br /><br />$query = 'SELECT id, created, YEAR(created) as year, MONTH(created) as month,' .<br />' CONCAT_WS(" ", MONTHNAME(created), YEAR(created)) as archive' .            <br />' FROM #__TABLE as e' .<br />' GROUP BY archive' .<br />' ORDER BY id DESC'; <br /><br />Your data will be displayed in any locale setting you want. You may even $_GET[lc_time_name] from your multilanguage website.</span></code></div>
  </div>
 </div>
  <div class="note" id="118200">  <div class="votes">
    <div id="Vu118200">
    <a href="/manual/vote-note.php?id=118200&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118200">
    <a href="/manual/vote-note.php?id=118200&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118200" title="53% like this...">
    1
    </div>
  </div>
  <a href="#118200" class="name">
  <strong class="user"><em>internationalist</em></strong></a><a class="genanchor" href="#118200"> &para;</a><div class="date" title="2015-10-25 02:14"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118200">
<div class="phpcode"><code><span class="html">My script runs a loop that changes the locale (multilingual application). I've noticed that on some random occasion the locale still hasn't changed despite the setlocale() function being executed a step earlier. I had to add wait time for this condition. Interestingly enough, this was the case only with the 'nl_NL.UTF8' locale.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//some code<br /></span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">counter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="comment">// some code<br /></span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">locale </span><span class="keyword">= </span><span class="string">'nl_NL.UTF8'</span><span class="keyword">;<br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">locale</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">counter</span><span class="keyword">++;<br />    if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">locale </span><span class="keyword">!== </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_CTYPE</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)) { </span><span class="comment">// Locale not changed yet.<br />      </span><span class="keyword">if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">counter </span><span class="keyword">&gt; </span><span class="default">10</span><span class="keyword">) {<br />        return;<br />      }<br />      </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    }<br /></span><span class="comment">// some code<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99415">  <div class="votes">
    <div id="Vu99415">
    <a href="/manual/vote-note.php?id=99415&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99415">
    <a href="/manual/vote-note.php?id=99415&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99415" title="53% like this...">
    1
    </div>
  </div>
  <a href="#99415" class="name">
  <strong class="user"><em>leif at neland dot dk</em></strong></a><a class="genanchor" href="#99415"> &para;</a><div class="date" title="2010-08-16 04:38"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99415">
<div class="phpcode"><code><span class="html">Regarding dash'es in locale, it appears they should be omitted entirely.<br /><br />In /etc/locale.gen I have<br /><br />da_DK.ISO-8859-15 ISO-8859-15<br /><br />but locale -a gives <br /><br />da_DK.iso885915<br /><br />which is the format setlocale()  wants.<br /><br />(Debian)</span></code></div>
  </div>
 </div>
  <div class="note" id="87038">  <div class="votes">
    <div id="Vu87038">
    <a href="/manual/vote-note.php?id=87038&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87038">
    <a href="/manual/vote-note.php?id=87038&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87038" title="53% like this...">
    2
    </div>
  </div>
  <a href="#87038" class="name">
  <strong class="user"><em>Un_passant</em></strong></a><a class="genanchor" href="#87038"> &para;</a><div class="date" title="2008-11-16 03:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87038">
<div class="phpcode"><code><span class="html">For debian/ubuntu, don't forget the charset UFT8. <br /><br />// Works on Ubuntu 8.04 Server<br />setlocale(LC_TIME, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');</span></code></div>
  </div>
 </div>
  <div class="note" id="67436">  <div class="votes">
    <div id="Vu67436">
    <a href="/manual/vote-note.php?id=67436&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67436">
    <a href="/manual/vote-note.php?id=67436&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67436" title="53% like this...">
    1
    </div>
  </div>
  <a href="#67436" class="name">
  <strong class="user"><em>Sven K</em></strong></a><a class="genanchor" href="#67436"> &para;</a><div class="date" title="2006-06-07 03:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67436">
<div class="phpcode"><code><span class="html">If your system doesn't show any installed locales by "locale -a", try installing them by "dpkg-reconfigure locales" (on debian).</span></code></div>
  </div>
 </div>
  <div class="note" id="80054">  <div class="votes">
    <div id="Vu80054">
    <a href="/manual/vote-note.php?id=80054&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80054">
    <a href="/manual/vote-note.php?id=80054&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80054" title="52% like this...">
    1
    </div>
  </div>
  <a href="#80054" class="name">
  <strong class="user"><em>ostapk</em></strong></a><a class="genanchor" href="#80054"> &para;</a><div class="date" title="2007-12-27 02:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80054">
<div class="phpcode"><code><span class="html">There is a new PECL extension under development called intl (it will be available in PHP5.3). Meanwhile all who rely on the setlocale() and friends should be aware about the limitations of them as covered in this post on the onPHP5.com blog: <a href="http://www.onphp5.com/article/22" rel="nofollow" target="_blank">http://www.onphp5.com/article/22</a></span></code></div>
  </div>
 </div>
  <div class="note" id="129091">  <div class="votes">
    <div id="Vu129091">
    <a href="/manual/vote-note.php?id=129091&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129091">
    <a href="/manual/vote-note.php?id=129091&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129091" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129091" class="name">
  <strong class="user"><em>info AT hipot-studio DOT com</em></strong></a><a class="genanchor" href="#129091"> &para;</a><div class="date" title="2023-12-06 05:57"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129091">
<div class="phpcode"><code><span class="html">In PHP 8.2 and later, PHP's internal case conversion functions are made locale-independent, which affects the following functions:<br /><br />    strtolower<br />    strtoupper<br />    lcfirst<br />    ucfirst<br />    ucwords<br />    stristr<br />    stripos<br />    strripos<br />    str_ireplace<br /><br />All of the functions above only perform case conversion and comparisons in the ASCII character range.</span></code></div>
  </div>
 </div>
  <div class="note" id="73347">  <div class="votes">
    <div id="Vu73347">
    <a href="/manual/vote-note.php?id=73347&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73347">
    <a href="/manual/vote-note.php?id=73347&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73347" title="52% like this...">
    1
    </div>
  </div>
  <a href="#73347" class="name">
  <strong class="user"><em>szepeshazi at gmail dot com</em></strong></a><a class="genanchor" href="#73347"> &para;</a><div class="date" title="2007-02-18 07:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73347">
<div class="phpcode"><code><span class="html">For those of you who are unfortunate enough (like me) to work in Windows environment, and try to set the locale to a language _and_ to UTF-8 charset, and were unable to do it, here is a workaround.<br /><br />For example to output the date in hungarian with UTF-8 charset, this will work:<br /><br />    $dateString = "%B %d., %A";<br />    setlocale(LC_ALL,'hungarian');<br />    $res=strftime($dateString);<br />    echo(iconv('ISO-8859-1', 'UTF-8', $res));<br /><br />If anybody knows how to set the locale on Windows to the equivalent of "hu_HU.UTF-8" on unix, please do tell me.</span></code></div>
  </div>
 </div>
  <div class="note" id="123811">  <div class="votes">
    <div id="Vu123811">
    <a href="/manual/vote-note.php?id=123811&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123811">
    <a href="/manual/vote-note.php?id=123811&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123811" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123811" class="name">
  <strong class="user"><em>tim dot peters at live dot com</em></strong></a><a class="genanchor" href="#123811"> &para;</a><div class="date" title="2019-05-01 09:18"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123811">
<div class="phpcode"><code><span class="html">Maybe obvious, but I would expect that setlocale constantes (LC_*) would be bitwise, but they're not.<br /><br />In example, doing this:<br /><br /><span class="default">&lt;?php<br />    setlocale</span><span class="keyword">(</span><span class="default">LC_TIME </span><span class="keyword">+ </span><span class="default">LC_COLLATE</span><span class="keyword">, </span><span class="string">'nl'</span><span class="keyword">);<br /><br />    echo </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>would cause the following result:<br /><br />LC_CTYPE=C;LC_NUMERIC=C;LC_TIME=C;LC_COLLATE=C;LC_MONETARY=C;LC_MESSAGES=nl;LC_PAPER=C;<br />LC_NAME=C;LC_ADDRESS=C;LC_TELEPHONE=C;LC_MEASUREMENT=C;LC_IDENTIFICATION=C<br /><br />Note that LC_MESSAGES has changed, instead of LC_TIME and LC_COLLATE. (Because LC_TIME + LC_COLLATE = LC_MESSAGES).<br /><br />Instead you would need to specify them individually, if you don't wish to use LC_ALL:<br /><br /><span class="default">&lt;?php<br />    setlocale</span><span class="keyword">(</span><span class="default">LC_TIME</span><span class="keyword">, </span><span class="string">'nl'</span><span class="keyword">);<br />    </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_COLLATE</span><span class="keyword">, </span><span class="string">'nl'</span><span class="keyword">);<br /><br />    echo </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;</span> LC_CTYPE=C;LC_NUMERIC=C;LC_TIME=nl;LC_COLLATE=nl;LC_MONETARY=C;LC_MESSAGES=C;LC_PAPER=C;<br />LC_NAME=C;LC_ADDRESS=C;LC_TELEPHONE=C;LC_MEASUREMENT=C;LC_IDENTIFICATION=C</span></code></div>
  </div>
 </div>
  <div class="note" id="75032">  <div class="votes">
    <div id="Vu75032">
    <a href="/manual/vote-note.php?id=75032&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75032">
    <a href="/manual/vote-note.php?id=75032&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75032" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#75032" class="name">
  <strong class="user"><em>mvanbaak</em></strong></a><a class="genanchor" href="#75032"> &para;</a><div class="date" title="2007-05-09 05:03"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75032">
<div class="phpcode"><code><span class="html">To complement Sven K's tip about debian:<br /><br />You can also install the package locales-all<br />That one holds all the locales there are in compiled form.</span></code></div>
  </div>
 </div>
  <div class="note" id="104441">  <div class="votes">
    <div id="Vu104441">
    <a href="/manual/vote-note.php?id=104441&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104441">
    <a href="/manual/vote-note.php?id=104441&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104441" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#104441" class="name">
  <strong class="user"><em>flavioacvalverde at gmail dot com</em></strong></a><a class="genanchor" href="#104441"> &para;</a><div class="date" title="2011-06-15 09:28"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104441">
<div class="phpcode"><code><span class="html">For Portugal I had to use
<br />
<br /><span class="default">&lt;?php setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'Portuguese_Portugal.1252'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />using php with IIS on Windows server.</span></code></div>
  </div>
 </div>
  <div class="note" id="127181">  <div class="votes">
    <div id="Vu127181">
    <a href="/manual/vote-note.php?id=127181&amp;page=function.setlocale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127181">
    <a href="/manual/vote-note.php?id=127181&amp;page=function.setlocale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127181" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#127181" class="name">
  <strong class="user"><em>divinity76 at gmail dot com</em></strong></a><a class="genanchor" href="#127181"> &para;</a><div class="date" title="2022-06-17 01:36"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127181">
<div class="phpcode"><code><span class="html">if someone is looking for a getlocale(), <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"getlocale"</span><span class="keyword">)){<br />    function </span><span class="default">getlocale</span><span class="keyword">(</span><span class="default">int $category</span><span class="keyword">)</span><span class="comment">/*:string|false*/</span><span class="keyword">{<br />        return </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">$category</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.setlocale&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.setlocale.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="current">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
