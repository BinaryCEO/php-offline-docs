<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Integers - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.types.integer.php">
 <link rel="shorturl" href="https://www.php.net/types.integer">
 <link rel="alternate" href="https://www.php.net/types.integer" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.types.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.types.boolean.php">
 <link rel="next" href="https://www.php.net/manual/en/language.types.float.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.types.integer.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.types.integer.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.types.integer.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.types.integer.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.types.integer.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.types.integer.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.types.integer.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.types.integer.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.types.integer.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.types.integer.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.types.integer.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Integers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Integers - Manual" />
<meta name="twitter:description" content="Integers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Integers - Manual" />
<meta itemprop="description" content="Integers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Integers" />

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
        <a href="language.types.float.php">
          Floating point numbers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.types.boolean.php">
          &laquo; Booleans        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.types.php'>Types</a></li>      </ul>
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
            <option value='en/language.types.integer.php' selected="selected">English</option>
            <option value='de/language.types.integer.php'>German</option>
            <option value='es/language.types.integer.php'>Spanish</option>
            <option value='fr/language.types.integer.php'>French</option>
            <option value='it/language.types.integer.php'>Italian</option>
            <option value='ja/language.types.integer.php'>Japanese</option>
            <option value='pt_BR/language.types.integer.php'>Brazilian Portuguese</option>
            <option value='ru/language.types.integer.php'>Russian</option>
            <option value='tr/language.types.integer.php'>Turkish</option>
            <option value='uk/language.types.integer.php'>Ukrainian</option>
            <option value='zh/language.types.integer.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.types.integer" class="sect1">
 <h2 class="title">Integers</h2>

 <p class="simpara">
  An <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> is a number of the set
  ℤ = {..., -2, -1, 0, 1, 2, ...}.
 </p>

 <div class="sect2">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="language.types.float.php" class="link">Floating point numbers</a></li>
    <li><a href="book.bc.php" class="link">Arbitrary precision / BCMath</a></li>
    <li><a href="book.gmp.php" class="link">Arbitrary length integer / GMP</a></li>
   </ul>
  </p>
 </div>

 <div class="sect2" id="language.types.integer.syntax">
  <h3 class="title">Syntax</h3>

  <p class="simpara">
   <span class="type"><a href="language.types.integer.php" class="type Int">Int</a></span>s can be specified in decimal (base 10), hexadecimal
   (base 16), octal (base 8) or binary (base 2) notation.
   The <a href="language.operators.arithmetic.php" class="link">negation operator</a>
   can be used to denote a negative <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
  </p>

  <p class="para">
   To use octal notation, precede the number with a <code class="literal">0</code> (zero).
   As of PHP 8.1.0, octal notation can also be preceded with <code class="literal">0o</code> or <code class="literal">0O</code>.
   To use hexadecimal notation precede the number with <code class="literal">0x</code>.
   To use binary notation precede the number with <code class="literal">0b</code>.
  </p>

  <p class="para">
   As of PHP 7.4.0, integer literals may contain underscores (<code class="literal">_</code>) between digits,
   for better readability of literals. These underscores are removed by PHP&#039;s scanner.
  </p>

  <div class="example" id="example-46">
   <p><strong>Example #1 Integer literals</strong></p>
   <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1234</span><span style="color: #007700">; </span><span style="color: #FF8000">// decimal number<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">0123</span><span style="color: #007700">; </span><span style="color: #FF8000">// octal number (equivalent to 83 decimal)<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">0o123</span><span style="color: #007700">; </span><span style="color: #FF8000">// octal number (as of PHP 8.1.0)<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">0x1A</span><span style="color: #007700">; </span><span style="color: #FF8000">// hexadecimal number (equivalent to 26 decimal)<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">0b11111111</span><span style="color: #007700">; </span><span style="color: #FF8000">// binary number (equivalent to 255 decimal)<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1_234_567</span><span style="color: #007700">; </span><span style="color: #FF8000">// decimal number (as of PHP 7.4.0)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <p class="para">
   Formally, the structure for <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> literals is as of PHP 8.1.0
   (previously, the <code class="literal">0o</code> or <code class="literal">0O</code> octal
   prefixes were not allowed, and prior to PHP 7.4.0 the underscores were
   not allowed):
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="annotation-interactive cdata"><pre>
decimal     : [1-9][0-9]*(_[0-9]+)*
            | 0

hexadecimal : 0[xX][0-9a-fA-F]+(_[0-9a-fA-F]+)*

octal       : 0[oO]?[0-7]+(_[0-7]+)*

binary      : 0[bB][01]+(_[01]+)*

integer     : decimal
            | hexadecimal
            | octal
            | binary
</pre></div>
   </div>

  </div>

  <p class="para">
   The size of an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> is platform-dependent, although a maximum
   value of about two billion is the usual value (that&#039;s 32 bits signed).
   64-bit platforms usually have a maximum value of about 9E18.
   PHP does not support unsigned <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>s.
   <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> size can be determined
   using the constant <strong><code><a href="reserved.constants.php#constant.php-int-size">PHP_INT_SIZE</a></code></strong>, maximum value using
   the constant <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>,
   and minimum value using the constant <strong><code><a href="reserved.constants.php#constant.php-int-min">PHP_INT_MIN</a></code></strong>.
  </p>
 </div>

 <div class="sect2" id="language.types.integer.overflow">
  <h3 class="title">Integer overflow</h3>

  <p class="para">
   If PHP encounters a number beyond the bounds of the <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   type, it will be interpreted as a <span class="type"><a href="language.types.float.php" class="type float">float</a></span> instead. Also, an
   operation which results in a number beyond the bounds of the
   <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> type will return a <span class="type"><a href="language.types.float.php" class="type float">float</a></span> instead.
  </p>

  <div class="example" id="example-47">
   <p><strong>Example #2 Integer overflow</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$large_number </span><span style="color: #007700">= </span><span style="color: #0000BB">50000000000000000000</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$large_number</span><span style="color: #007700">);         </span><span style="color: #FF8000">// float(5.0E+19)<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_INT_MAX </span><span style="color: #007700">+ </span><span style="color: #0000BB">1</span><span style="color: #007700">);       </span><span style="color: #FF8000">// 32-bit system: float(2147483648)<br />                                 // 64-bit system: float(9.2233720368548E+18)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="language.types.integer.division">
  <h3 class="title">Integer division</h3>

  <p class="para">
   There is no <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> division operator in PHP, to achieve this
   use the <span class="function"><a href="function.intdiv.php" class="function">intdiv()</a></span> function.
   <code class="literal">1/2</code> yields the <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="literal">0.5</code>.
   The value can be cast to an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> to round it towards zero, or
   the <span class="function"><a href="function.round.php" class="function">round()</a></span> function provides finer control over rounding.
  </p>

  <div class="example" id="example-48">
   <p><strong>Example #3 Divisions</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">7</span><span style="color: #007700">);         </span><span style="color: #FF8000">// float(3.5714285714286)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">((int) (</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">7</span><span style="color: #007700">)); </span><span style="color: #FF8000">// int(3)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">25</span><span style="color: #007700">/</span><span style="color: #0000BB">7</span><span style="color: #007700">));  </span><span style="color: #FF8000">// float(4)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="language.types.integer.casting">
  <h3 class="title">Converting to integer</h3>

  <p class="simpara">
   To explicitly convert a value to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, use either the
   <code class="literal">(int)</code> or <code class="literal">(integer)</code> casts. However, in
   most cases the cast is not needed, since a value will be automatically
   converted if an operator, function or control structure requires an
   <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> argument. A value can also be converted to
   <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> with the <span class="function"><a href="function.intval.php" class="function">intval()</a></span> function.
  </p>

  <p class="simpara">
   If a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> is converted to an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, then
   the result will be the unique resource number assigned to the
   <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> by PHP at runtime.
  </p>

  <p class="simpara">
   See also <a href="language.types.type-juggling.php" class="link">Type Juggling</a>.
  </p>

  <div class="sect3" id="language.types.integer.casting.from-boolean">
   <h4 class="title">From <a href="language.types.boolean.php" class="link">booleans</a></h4>

   <p class="simpara">
    <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> will yield <code class="literal">0</code> (zero), and <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> will yield
    <code class="literal">1</code> (one).
   </p>
  </div>

  <div class="sect3" id="language.types.integer.casting.from-float">
   <h4 class="title">
    From <a href="language.types.float.php" class="link">floating point numbers</a>
   </h4>

   <p class="simpara">
    When converting from <span class="type"><a href="language.types.float.php" class="type float">float</a></span> to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, the number
    will be rounded <em>towards zero</em>.
    As of PHP 8.1.0, a deprecation notice is emitted when implicitly converting a non-integral <span class="type"><a href="language.types.float.php" class="type float">float</a></span> to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> which loses precision.
   </p>

   <div class="example" id="example-49">
    <p><strong>Example #4 Casting from Float</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">): </span><span style="color: #0000BB">int </span><span style="color: #007700">{<br />  return </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">8.1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// "Deprecated: Implicit conversion from float 8.1 to int loses precision" as of PHP 8.1.0<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">8.1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// 8 prior to PHP 8.1.0<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">8.0</span><span style="color: #007700">)); </span><span style="color: #FF8000">// 8 in both cases<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">((int) </span><span style="color: #0000BB">8.1</span><span style="color: #007700">); </span><span style="color: #FF8000">// 8 in both cases<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">8.1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// 8 in both cases<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="para">
    If the float is beyond the boundaries of <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> (usually
    <code class="literal">+/- 2.15e+9 = 2^31</code> on 32-bit platforms and
    <code class="literal">+/- 9.22e+18 = 2^63</code> on 64-bit platforms),
    the result is undefined, since the <span class="type"><a href="language.types.float.php" class="type float">float</a></span> doesn&#039;t
    have enough precision to give an exact <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> result.
    No warning, not even a notice will be issued when this happens!
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     <code class="literal">NaN</code>, <code class="literal">Inf</code> and <code class="literal">-Inf</code> will always be zero when cast to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
    </p>
   </p></blockquote>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="para">
     Never cast an unknown fraction to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, as this can
     sometimes lead to unexpected results.
    </p>

    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo (int) ( (</span><span style="color: #0000BB">0.1</span><span style="color: #007700">+</span><span style="color: #0000BB">0.7</span><span style="color: #007700">) * </span><span style="color: #0000BB">10 </span><span style="color: #007700">); </span><span style="color: #FF8000">// echoes 7!<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <p class="para">
     See also the <a href="language.types.float.php#warn.float-precision" class="link">warning about float
     precision</a>.
    </p>
   </div>
  </div>

  <div class="sect3" id="language.types.integer.casting.from-string">
   <h4 class="title">From strings</h4>

   <p class="simpara">
    If the string is
    <a href="language.types.numeric-strings.php" class="link">numeric</a>
    or leading numeric then it will resolve to the
    corresponding integer value, otherwise it is converted to zero
    (<code class="literal">0</code>).
   </p>
  </div>

  <div class="sect3" id="language.types.integer.casting-from-null">
   <h4 class="title">From <span class="type"><a href="language.types.null.php" class="type NULL">NULL</a></span></h4>

   <p class="simpara">
    <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is always converted to zero (<code class="literal">0</code>).
   </p>
  </div>

  <div class="sect3" id="language.types.integer.casting.from-other">
   <h4 class="title">From other types</h4>

   <div class="caution"><strong class="caution">Caution</strong>
    <p class="simpara">
     The behaviour of converting to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> is undefined for other
     types. Do <em>not</em> rely on any observed behaviour, as it
     can change without notice.
    </p>
   </div>
  </div>

 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/types/integer.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.types.integer%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.types.integer&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.integer.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111523">  <div class="votes">
    <div id="Vu111523">
    <a href="/manual/vote-note.php?id=111523&amp;page=language.types.integer&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111523">
    <a href="/manual/vote-note.php?id=111523&amp;page=language.types.integer&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111523" title="62% like this...">
    131
    </div>
  </div>
  <a href="#111523" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#111523"> &para;</a><div class="date" title="2013-02-28 06:25"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111523">
<div class="phpcode"><code><span class="html">A leading zero in a numeric literal means "this is octal". But don't be confused: a leading zero in a string does not. Thus:<br />$x = 0123;          // 83<br />$y = "0123" + 0     // 123</span></code></div>
  </div>
 </div>
  <div class="note" id="77056">  <div class="votes">
    <div id="Vu77056">
    <a href="/manual/vote-note.php?id=77056&amp;page=language.types.integer&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77056">
    <a href="/manual/vote-note.php?id=77056&amp;page=language.types.integer&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77056" title="57% like this...">
    55
    </div>
  </div>
  <a href="#77056" class="name">
  <strong class="user"><em>d_n at NOSPAM dot Loryx dot com</em></strong></a><a class="genanchor" href="#77056"> &para;</a><div class="date" title="2007-08-13 05:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77056">
<div class="phpcode"><code><span class="html">Here are some tricks to convert from a "dotted" IP address to a LONG int, and backwards. This is very useful because accessing an IP addy in a database table is very much faster if it's stored as a BIGINT rather than in characters.<br /><br />IP to BIGINT:<br /><span class="default">&lt;?php<br />  $ipArr    </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">,</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REMOTE_ADDR'</span><span class="keyword">]);<br />  </span><span class="default">$ip       </span><span class="keyword">= </span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] * </span><span class="default">0x1000000<br />            </span><span class="keyword">+ </span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] * </span><span class="default">0x10000<br />            </span><span class="keyword">+ </span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] * </span><span class="default">0x100<br />            </span><span class="keyword">+ </span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]<br />            ;<br /></span><span class="default">?&gt;<br /></span><br />IP as BIGINT read from db back to dotted form:<br /><br />Keep in mind, PHP integer operators are INTEGER -- not long. Also, since there is no integer divide in PHP, we save a couple of S-L-O-W floor (&lt;division&gt;)'s by doing bitshifts. We must use floor(/) for $ipArr[0] because though $ipVal is stored as a long value, $ipVal &gt;&gt; 24 will operate on a truncated, integer value of $ipVal! $ipVint is, however, a nice integer, so <br />we can enjoy the bitshifts.<br /><br /><span class="default">&lt;?php<br />        $ipVal </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">[</span><span class="string">'client_IP'</span><span class="keyword">];<br />        </span><span class="default">$ipArr </span><span class="keyword">= array(</span><span class="default">0 </span><span class="keyword">=&gt;<br />                    </span><span class="default">floor</span><span class="keyword">(  </span><span class="default">$ipVal               </span><span class="keyword">/ </span><span class="default">0x1000000</span><span class="keyword">) );<br />        </span><span class="default">$ipVint   </span><span class="keyword">= </span><span class="default">$ipVal</span><span class="keyword">-(</span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]*</span><span class="default">0x1000000</span><span class="keyword">); </span><span class="comment">// for clarity<br />        </span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = (</span><span class="default">$ipVint </span><span class="keyword">&amp; </span><span class="default">0xFF0000</span><span class="keyword">)  &gt;&gt; </span><span class="default">16</span><span class="keyword">;<br />        </span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = (</span><span class="default">$ipVint </span><span class="keyword">&amp; </span><span class="default">0xFF00  </span><span class="keyword">)  &gt;&gt; </span><span class="default">8</span><span class="keyword">;<br />        </span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] =  </span><span class="default">$ipVint </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />        </span><span class="default">$ipDotted </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$ipArr</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125251">  <div class="votes">
    <div id="Vu125251">
    <a href="/manual/vote-note.php?id=125251&amp;page=language.types.integer&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125251">
    <a href="/manual/vote-note.php?id=125251&amp;page=language.types.integer&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125251" title="58% like this...">
    13
    </div>
  </div>
  <a href="#125251" class="name">
  <strong class="user"><em>ganlvtech at qq dot com</em></strong></a><a class="genanchor" href="#125251"> &para;</a><div class="date" title="2020-08-07 07:34"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125251">
<div class="phpcode"><code><span class="html">Be aware of float to int cast overflow<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// You may expected these<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">0x7fffffffffffffff</span><span class="keyword">);                </span><span class="comment">// int(9223372036854775807)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">0x7fffffffffffffff </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">);            </span><span class="comment">// float(9.2233720368548E+18)<br /></span><span class="default">var_dump</span><span class="keyword">((int)(</span><span class="default">0x7fffffffffffffff </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">));     </span><span class="comment">// int(9223372036854775807)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">0x7fffffffffffffff </span><span class="keyword">+ </span><span class="default">1 </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">);        </span><span class="comment">// bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">((int)(</span><span class="default">0x7fffffffffffffff </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">); </span><span class="comment">// bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">((int)</span><span class="string">'9223372036854775807'</span><span class="keyword">);        </span><span class="comment">// int(9223372036854775807)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">9223372036854775808</span><span class="keyword">);               </span><span class="comment">// float(9.2233720368548E+18)<br /></span><span class="default">var_dump</span><span class="keyword">((int)</span><span class="string">'9223372036854775808'</span><span class="keyword">);        </span><span class="comment">// int(9223372036854775807)<br /></span><span class="default">var_dump</span><span class="keyword">((int)</span><span class="default">9223372036854775808</span><span class="keyword">);          </span><span class="comment">// int(9223372036854775807)<br /><br />// But actually, it likes these<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">0x7fffffffffffffff</span><span class="keyword">);                </span><span class="comment">// int(9223372036854775807)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">0x7fffffffffffffff </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">);            </span><span class="comment">// float(9.2233720368548E+18)<br /></span><span class="default">var_dump</span><span class="keyword">((int)(</span><span class="default">0x7fffffffffffffff </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">));     </span><span class="comment">// int(-9223372036854775808)   &lt;-----<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">0x7fffffffffffffff </span><span class="keyword">+ </span><span class="default">1 </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">);        </span><span class="comment">// bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">((int)(</span><span class="default">0x7fffffffffffffff </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">); </span><span class="comment">// bool(false)                 &lt;-----<br /></span><span class="default">var_dump</span><span class="keyword">((int)</span><span class="string">'9223372036854775807'</span><span class="keyword">);        </span><span class="comment">// int(9223372036854775807)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">9223372036854775808</span><span class="keyword">);               </span><span class="comment">// float(9.2233720368548E+18)<br /></span><span class="default">var_dump</span><span class="keyword">((int)</span><span class="string">'9223372036854775808'</span><span class="keyword">);        </span><span class="comment">// int(9223372036854775807)<br /></span><span class="default">var_dump</span><span class="keyword">((int)</span><span class="default">9223372036854775808</span><span class="keyword">);          </span><span class="comment">// int(-9223372036854775808)   &lt;-----<br /><br /></span><span class="default">?&gt;<br /></span><br />These overflows are dangerous when you try to compare it with zero, or substract it from another value (e.g. money).</span></code></div>
  </div>
 </div>
  <div class="note" id="121917">  <div class="votes">
    <div id="Vu121917">
    <a href="/manual/vote-note.php?id=121917&amp;page=language.types.integer&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121917">
    <a href="/manual/vote-note.php?id=121917&amp;page=language.types.integer&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121917" title="56% like this...">
    17
    </div>
  </div>
  <a href="#121917" class="name">
  <strong class="user"><em>egwayjen at gmail dot com</em></strong></a><a class="genanchor" href="#121917"> &para;</a><div class="date" title="2017-11-27 10:01"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121917">
<div class="phpcode"><code><span class="html">"There is no integer division operator in PHP". But since PHP 7, there is the intdiv function.</span></code></div>
  </div>
 </div>
  <div class="note" id="121886">  <div class="votes">
    <div id="Vu121886">
    <a href="/manual/vote-note.php?id=121886&amp;page=language.types.integer&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121886">
    <a href="/manual/vote-note.php?id=121886&amp;page=language.types.integer&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121886" title="54% like this...">
    13
    </div>
  </div>
  <a href="#121886" class="name">
  <strong class="user"><em>dhairya lakhera</em></strong></a><a class="genanchor" href="#121886"> &para;</a><div class="date" title="2017-11-20 04:04"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121886">
<div class="phpcode"><code><span class="html">-------------------------------------------------------------------------<br />Question : <br />var_dump((int) 010);  //Output 8<br /><br />var_dump((int) "010"); //output 10<br /><br />First one is octal notation so the output is correct. But what about the when converting "010" to integer. it should be also output 8 ?<br />--------------------------------------------------------------------------<br />Answer :<br /><br />Casting to an integer using (int) will always cast to the default base, which is 10.<br /><br />Casting a string to a number this way does not take into account the many ways of formatting an integer value in PHP (leading zero for base 8, leading "0x" for base 16, leading "0b" for base 2). It will simply look at the first characters in a string and convert them to a base 10 integer. Leading zeroes will be stripped off because they have no meaning in numerical values, so you will end up with the decimal value 10 for (int)"010".<br /><br />Converting an integer value between bases using (int)010 will take into account the various ways of formatting an integer. A leading zero like in 010 means the number is in octal notation, using (int)010 will convert it to the decimal value 8 in base 10.<br /><br />This is similar to how you use 0x10 to write in hexadecimal (base 16) notation. Using (int)0x10 will convert that to the base 10 decimal value 16, whereas using (int)"0x10" will end up with the decimal value 0: since the "x" is not a numerical value, anything after that will be ignored.<br /><br />If you want to interpret the string "010" as an octal value, you need to instruct PHP to do so. intval("010", 8) will interpret the number in base 8 instead of the default base 10, and you will end up with the decimal value 8. You could also use octdec("010") to convert the octal string to the decimal value 8. Another option is to use base_convert("010", 8, 10) to explicitly convert the number "010" from base 8 to base 10, however this function will return the string "8" instead of the integer 8.<br /><br />Casting a string to an integer follows the same the logic used by the intval function:<br /><br />Returns the integer value of var, using the specified base for the conversion (the default is base 10).<br />intval allows specifying a different base as the second argument, whereas a straight cast operation does not, so using (int) will always treat a string as being in base 10.<br /><br />php &gt; var_export((int) "010");<br />10<br />php &gt; var_export(intval("010"));<br />10<br />php &gt; var_export(intval("010", 8));<br />8</span></code></div>
  </div>
 </div>
  <div class="note" id="116479">  <div class="votes">
    <div id="Vu116479">
    <a href="/manual/vote-note.php?id=116479&amp;page=language.types.integer&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116479">
    <a href="/manual/vote-note.php?id=116479&amp;page=language.types.integer&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116479" title="51% like this...">
    7
    </div>
  </div>
  <a href="#116479" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116479"> &para;</a><div class="date" title="2015-01-09 09:31"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116479">
<div class="phpcode"><code><span class="html">Converting to an integer works only if the input begins with a number<br />(int) "5txt" // will output the integer 5<br />(int) "before5txt" // will output the integer 0<br />(int) "53txt" // will output the integer 53<br />(int) "53txt534text" // will output the integer 53</span></code></div>
  </div>
 </div>
  <div class="note" id="73766">  <div class="votes">
    <div id="Vu73766">
    <a href="/manual/vote-note.php?id=73766&amp;page=language.types.integer&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73766">
    <a href="/manual/vote-note.php?id=73766&amp;page=language.types.integer&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73766" title="51% like this...">
    7
    </div>
  </div>
  <a href="#73766" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#73766"> &para;</a><div class="date" title="2007-03-09 07:26"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73766">
<div class="phpcode"><code><span class="html">To force the correct usage of 32-bit unsigned integer in some functions, just add '+0'  just before processing them.<br /><br />for example <br />echo(dechex("2724838310"));<br />will print '7FFFFFFF'<br />but it should print 'A269BBA6'<br /><br />When adding '+0' php will handle the 32bit unsigned integer<br />correctly<br />echo(dechex("2724838310"+0));<br />will print 'A269BBA6'</span></code></div>
  </div>
 </div>
  <div class="note" id="71709">  <div class="votes">
    <div id="Vu71709">
    <a href="/manual/vote-note.php?id=71709&amp;page=language.types.integer&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71709">
    <a href="/manual/vote-note.php?id=71709&amp;page=language.types.integer&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71709" title="50% like this...">
    5
    </div>
  </div>
  <a href="#71709" class="name">
  <strong class="user"><em>rustamabd@gmail-you-know-what</em></strong></a><a class="genanchor" href="#71709"> &para;</a><div class="date" title="2006-12-12 01:42"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71709">
<div class="phpcode"><code><span class="html">Be careful with using the modulo operation on big numbers, it will cast a float argument to an int and may return wrong results. For example:<br /><span class="default">&lt;?php<br />    $i </span><span class="keyword">= </span><span class="default">6887129852</span><span class="keyword">;<br />    echo </span><span class="string">"i=</span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;<br />    echo </span><span class="string">"i%36="</span><span class="keyword">.(</span><span class="default">$i</span><span class="keyword">%</span><span class="default">36</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"alternative i%36="</span><span class="keyword">.(</span><span class="default">$i</span><span class="keyword">-</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">/</span><span class="default">36</span><span class="keyword">)*</span><span class="default">36</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Will output:<br />i=6.88713E+009<br />i%36=-24<br />alternative i%36=20</span></code></div>
  </div>
 </div>
  <div class="note" id="118903">  <div class="votes">
    <div id="Vu118903">
    <a href="/manual/vote-note.php?id=118903&amp;page=language.types.integer&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118903">
    <a href="/manual/vote-note.php?id=118903&amp;page=language.types.integer&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118903" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#118903" class="name">
  <strong class="user"><em>litbai</em></strong></a><a class="genanchor" href="#118903"> &para;</a><div class="date" title="2016-02-25 08:26"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118903">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$ipArr </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$ipString</span><span class="keyword">);<br /></span><span class="default">$ipVal </span><span class="keyword">= (</span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &lt;&lt; </span><span class="default">24</span><span class="keyword">)<br />       + (</span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &lt;&lt; </span><span class="default">16</span><span class="keyword">)<br />       + (</span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] &lt;&lt; </span><span class="default">8</span><span class="keyword">)<br />       + </span><span class="default">$ipArr</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]<br />        ;<br /></span><span class="default">?&gt;<br /></span>1. the priority of bit op is lower than '+',so there should be brackets.<br />2. there is no unsighed int in PHP, if you use 32 bit version，the code above will get negative result when the first position of IP string greater than 127.<br />3. what the code actually do is calculate the integer value of transformed 32 binary bit from IP string.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.types.integer&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.integer.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.types.php">Types</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.types.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-system.php" title="Type System">Type System</a>
                        </li>
                                                <li class="">
                            <a href="language.types.null.php" title="NULL">NULL</a>
                        </li>
                                                <li class="">
                            <a href="language.types.boolean.php" title="Booleans">Booleans</a>
                        </li>
                                                <li class="current">
                            <a href="language.types.integer.php" title="Integers">Integers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.float.php" title="Floating point numbers">Floating point numbers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.string.php" title="Strings">Strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.numeric-strings.php" title="Numeric strings">Numeric strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.array.php" title="Arrays">Arrays</a>
                        </li>
                                                <li class="">
                            <a href="language.types.object.php" title="Objects">Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.types.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.resource.php" title="Resources">Resources</a>
                        </li>
                                                <li class="">
                            <a href="language.types.callable.php" title="Callbacks / Callables">Callbacks / Callables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.mixed.php" title="Mixed">Mixed</a>
                        </li>
                                                <li class="">
                            <a href="language.types.void.php" title="Void">Void</a>
                        </li>
                                                <li class="">
                            <a href="language.types.never.php" title="Never">Never</a>
                        </li>
                                                <li class="">
                            <a href="language.types.relative-class-types.php" title="Relative class types">Relative class types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.singleton.php" title="Singleton types">Singleton types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.iterable.php" title="Iterables">Iterables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.declarations.php" title="Type declarations">Type declarations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-juggling.php" title="Type Juggling">Type Juggling</a>
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
