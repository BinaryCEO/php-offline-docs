<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pack - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pack.php">
 <link rel="shorturl" href="https://www.php.net/pack">
 <link rel="alternate" href="https://www.php.net/pack" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.misc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ignore-user-abort.php">
 <link rel="next" href="https://www.php.net/manual/en/function.php-strip-whitespace.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pack.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pack.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pack.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pack.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pack.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pack.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pack.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pack.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pack.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pack.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pack.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Pack data into binary string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pack - Manual" />
<meta name="twitter:description" content="Pack data into binary string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pack - Manual" />
<meta itemprop="description" content="Pack data into binary string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Pack data into binary string" />

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
        <a href="function.php-strip-whitespace.php">
          php_strip_whitespace &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ignore-user-abort.php">
          &laquo; ignore_user_abort        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.misc.php'>Misc.</a></li>      <li><a href='ref.misc.php'>Misc. Functions</a></li>      </ul>
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
            <option value='en/function.pack.php' selected="selected">English</option>
            <option value='de/function.pack.php'>German</option>
            <option value='es/function.pack.php'>Spanish</option>
            <option value='fr/function.pack.php'>French</option>
            <option value='it/function.pack.php'>Italian</option>
            <option value='ja/function.pack.php'>Japanese</option>
            <option value='pt_BR/function.pack.php'>Brazilian Portuguese</option>
            <option value='ru/function.pack.php'>Russian</option>
            <option value='tr/function.pack.php'>Turkish</option>
            <option value='uk/function.pack.php'>Ukrainian</option>
            <option value='zh/function.pack.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pack" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pack</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pack</span> &mdash; <span class="dc-title">Pack data into binary string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.pack-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pack</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$values</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Pack given arguments into a binary string according to
   <code class="parameter">format</code>. 
  </p>
  <p class="para">
   The idea for this function was taken from Perl and all formatting codes
   work the same as in Perl. However, there are some formatting codes that are
   missing such as Perl&#039;s &quot;u&quot; format code.
  </p>
  <p class="para">
   Note that the distinction between signed and unsigned values only
   affects the function <span class="function"><a href="function.unpack.php" class="function">unpack()</a></span>, where as
   function <span class="function"><strong>pack()</strong></span> gives the same result for
   signed and unsigned format codes.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.pack-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">format</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">format</code> string consists of format codes
       followed by an optional repeater argument. The repeater argument can
       be either an integer value or <code class="literal">*</code> for repeating to
       the end of the input data. For a, A, h, H the repeat count specifies
       how many characters of one data argument are taken, for @ it is the
       absolute position where to put the next data, for everything else the
       repeat count specifies how many data arguments are consumed and packed
       into the resulting binary string.
      </p>
      <p class="para">
       Currently implemented formats are:
       <table class="doctable table">
        <caption><strong><span class="function"><strong>pack()</strong></span> format characters</strong></caption>
        
         <thead>
          <tr>
           <th>Code</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>a</td>
           <td>NUL-padded string</td>
          </tr>

          <tr>
           <td>A</td>
           <td>SPACE-padded string</td></tr>

          <tr>
           <td>h</td>
           <td>Hex string, low nibble first</td></tr>

          <tr>
           <td>H</td>
           <td>Hex string, high nibble first</td></tr>

          <tr><td>c</td><td>signed char</td></tr>

          <tr>
           <td>C</td>
           <td>unsigned char</td></tr>

          <tr>
           <td>s</td>
           <td>signed short (always 16 bit, machine byte order)</td>
          </tr>

          <tr>
           <td>S</td>
           <td>unsigned short (always 16 bit, machine byte order)</td>
          </tr>

          <tr>
           <td>n</td>
           <td>unsigned short (always 16 bit, big endian byte order)</td>
          </tr>

          <tr>
           <td>v</td>
           <td>unsigned short (always 16 bit, little endian byte order)</td>
          </tr>

          <tr>
           <td>i</td>
           <td>signed integer (machine dependent size and byte order)</td>
          </tr>

          <tr>
           <td>I</td>
           <td>unsigned integer (machine dependent size and byte order)</td>
          </tr>

          <tr>
           <td>l</td>
           <td>signed long (always 32 bit, machine byte order)</td>
          </tr>

          <tr>
           <td>L</td>
           <td>unsigned long (always 32 bit, machine byte order)</td>
          </tr>

          <tr>
           <td>N</td>
           <td>unsigned long (always 32 bit, big endian byte order)</td>
          </tr>

          <tr>
           <td>V</td>
           <td>unsigned long (always 32 bit, little endian byte order)</td>
          </tr>

          <tr>
           <td>q</td>
           <td>signed long long (always 64 bit, machine byte order)</td>
          </tr>

          <tr>
           <td>Q</td>
           <td>unsigned long long (always 64 bit, machine byte order)</td>
          </tr>

          <tr>
           <td>J</td>
           <td>unsigned long long (always 64 bit, big endian byte order)</td>
          </tr>

          <tr>
           <td>P</td>
           <td>unsigned long long (always 64 bit, little endian byte order)</td>
          </tr>

          <tr>
           <td>f</td>
           <td>float (machine dependent size and representation)</td>
          </tr>

          <tr>
           <td>g</td>
           <td>float (machine dependent size, little endian byte order)</td>
          </tr>

          <tr>
           <td>G</td>
           <td>float (machine dependent size, big endian byte order)</td>
          </tr>

          <tr>
           <td>d</td>
           <td>double (machine dependent size and representation)</td>
          </tr>

          <tr>
           <td>e</td>
           <td>double (machine dependent size, little endian byte order)</td>
          </tr>

          <tr>
           <td>E</td>
           <td>double (machine dependent size, big endian byte order)</td>
          </tr>

          <tr>
           <td>x</td>
           <td>NUL byte</td>
          </tr>

          <tr>
           <td>X</td>
           <td>Back up one byte</td>
          </tr>

          <tr>
           <td>Z</td>
           <td>NUL-terminated (ASCIIZ) string, will be NUL padded</td>
          </tr>

          <tr>
           <td>@</td>
           <td>NUL-fill to absolute position</td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">values</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.pack-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a binary string containing data.
  </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-function.pack-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.0.0</td>
       <td>
        This function no longer returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        <span class="type"><a href="language.types.float.php" class="type float">float</a></span> and <span class="type"><a href="language.types.float.php" class="type double">double</a></span> types supports both Big Endian and Little Endian.
       </td>
      </tr>

      <tr>
       <td>7.0.15, 7.1.1</td>
       <td>
        The &quot;e&quot;, &quot;E&quot;, &quot;g&quot; and &quot;G&quot; codes were added to enable byte order support for float and double.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.pack-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3753">
    <p><strong>Example #1 <span class="function"><strong>pack()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$binarydata </span><span style="color: #007700">= </span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">"nvc*"</span><span style="color: #007700">, </span><span style="color: #0000BB">0x1234</span><span style="color: #007700">, </span><span style="color: #0000BB">0x5678</span><span style="color: #007700">, </span><span style="color: #0000BB">65</span><span style="color: #007700">, </span><span style="color: #0000BB">66</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     The resulting binary string will be 6 bytes long and contain
     the byte sequence 0x12, 0x34, 0x78, 0x56, 0x41, 0x42.
    </p></div>
   </div>
  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-function.pack-notes">
  <h3 class="title">Notes</h3>
  <div class="caution"><strong class="caution">Caution</strong>
    <p class="simpara">Format codes <code class="literal">q</code>, <code class="literal">Q</code>, <code class="literal">J</code> and <code class="literal">P</code> are not available on 32-bit PHP builds.</p>
  </div>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">Note that PHP internally stores <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> values as
    signed values of a machine-dependent size.
    Integer literals and operations that yield numbers outside the bounds of the  
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> type will be stored as <span class="type"><a href="language.types.float.php" class="type float">float</a></span>.
    When packing these floats as integers, they are first cast into the integer   
    type. This may or may not result in the desired byte pattern.
   </p>
   <p class="para">The most relevant case is when packing unsigned numbers that would
    be representable with the <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> type if it were unsigned.
    In systems where the <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> type has a 32-bit size, the cast
    usually results in the same byte pattern as if the <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> were
    unsigned (although this relies on implementation-defined unsigned to signed
    conversions, as per the C standard). In systems where the
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> type has 64-bit size, the <span class="type"><a href="language.types.float.php" class="type float">float</a></span> most
    likely does not have a mantissa large enough to hold the value without
    loss of precision. If those systems also have a native 64-bit C
    <code class="literal">int</code> type (most UNIX-like systems don&#039;t), the only way to  
    use the <code class="literal">I</code> pack format in the upper range is to create
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> negative values with the same byte representation
    as the desired unsigned value.
   </p>
  </div>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.pack-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.unpack.php" class="function" rel="rdfs-seeAlso">unpack()</a> - Unpack data from binary string</span></li>
   </ul>
  </p>
 </div>

 
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/misc/functions/pack.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pack%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pack&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pack.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107649">  <div class="votes">
    <div id="Vu107649">
    <a href="/manual/vote-note.php?id=107649&amp;page=function.pack&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107649">
    <a href="/manual/vote-note.php?id=107649&amp;page=function.pack&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107649" title="86% like this...">
    90
    </div>
  </div>
  <a href="#107649" class="name">
  <strong class="user"><em>chadm at codeangel dot org</em></strong></a><a class="genanchor" href="#107649"> &para;</a><div class="date" title="2012-02-23 09:13"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107649">
<div class="phpcode"><code><span class="html">If you'd like to understand pack/unpack. There is a tutorial here in perl, that works equally well in understanding it for php:<br /><br /><a href="http://perldoc.perl.org/perlpacktut.html" rel="nofollow" target="_blank">http://perldoc.perl.org/perlpacktut.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="119402">  <div class="votes">
    <div id="Vu119402">
    <a href="/manual/vote-note.php?id=119402&amp;page=function.pack&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119402">
    <a href="/manual/vote-note.php?id=119402&amp;page=function.pack&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119402" title="75% like this...">
    34
    </div>
  </div>
  <a href="#119402" class="name">
  <strong class="user"><em>stanislav dot eckert at vizson dot de</em></strong></a><a class="genanchor" href="#119402"> &para;</a><div class="date" title="2016-05-29 03:14"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119402">
<div class="phpcode"><code><span class="html">A helper class to convert integer to binary strings and vice versa. Useful for writing and reading integers to / from files or sockets.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">class </span><span class="default">int_helper<br />    </span><span class="keyword">{<br />        public static function </span><span class="default">int8</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) {<br />            return </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"c"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">) : </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"c"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">)[</span><span class="default">1</span><span class="keyword">];<br />        }<br /><br />        public static function </span><span class="default">uInt8</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) {<br />            return </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"C"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">) : </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"C"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">)[</span><span class="default">1</span><span class="keyword">];<br />        }<br /><br />        public static function </span><span class="default">int16</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) {<br />            return </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">) : </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">)[</span><span class="default">1</span><span class="keyword">];<br />        }<br /><br />        public static function </span><span class="default">uInt16</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$endianness</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$f </span><span class="keyword">= </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="string">"pack" </span><span class="keyword">: </span><span class="string">"unpack"</span><span class="keyword">;<br /><br />            if (</span><span class="default">$endianness </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">) {  </span><span class="comment">// big-endian<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">(</span><span class="string">"n"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />            }<br />            else if (</span><span class="default">$endianness </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {  </span><span class="comment">// little-endian<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">(</span><span class="string">"v"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />            }<br />            else if (</span><span class="default">$endianness </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {  </span><span class="comment">// machine byte order<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">(</span><span class="string">"S"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />            }<br /><br />            return </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="default">$i</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] : </span><span class="default">$i</span><span class="keyword">;<br />        }<br /><br />        public static function </span><span class="default">int32</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) {<br />            return </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"l"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">) : </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"l"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">)[</span><span class="default">1</span><span class="keyword">];<br />        }<br /><br />        public static function </span><span class="default">uInt32</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$endianness</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$f </span><span class="keyword">= </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="string">"pack" </span><span class="keyword">: </span><span class="string">"unpack"</span><span class="keyword">;<br /><br />            if (</span><span class="default">$endianness </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">) {  </span><span class="comment">// big-endian<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">(</span><span class="string">"N"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />            }<br />            else if (</span><span class="default">$endianness </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {  </span><span class="comment">// little-endian<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />            }<br />            else if (</span><span class="default">$endianness </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {  </span><span class="comment">// machine byte order<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">(</span><span class="string">"L"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />            }<br /><br />            return </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="default">$i</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] : </span><span class="default">$i</span><span class="keyword">;<br />        }<br /><br />        public static function </span><span class="default">int64</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) {<br />            return </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"q"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">) : </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"q"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">)[</span><span class="default">1</span><span class="keyword">];<br />        }<br /><br />        public static function </span><span class="default">uInt64</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$endianness</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$f </span><span class="keyword">= </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="string">"pack" </span><span class="keyword">: </span><span class="string">"unpack"</span><span class="keyword">;<br /><br />            if (</span><span class="default">$endianness </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">) {  </span><span class="comment">// big-endian<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">(</span><span class="string">"J"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />            }<br />            else if (</span><span class="default">$endianness </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {  </span><span class="comment">// little-endian<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">(</span><span class="string">"P"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />            }<br />            else if (</span><span class="default">$endianness </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {  </span><span class="comment">// machine byte order<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">(</span><span class="string">"Q"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />            }<br /><br />            return </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) ? </span><span class="default">$i</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] : </span><span class="default">$i</span><span class="keyword">;<br />        }<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Usage example:<br /><span class="default">&lt;?php<br />    Header</span><span class="keyword">(</span><span class="string">"Content-Type: text/plain"</span><span class="keyword">);<br />    include(</span><span class="string">"int_helper.php"</span><span class="keyword">);<br /><br />    echo </span><span class="default">int_helper</span><span class="keyword">::</span><span class="default">uInt8</span><span class="keyword">(</span><span class="default">0x6b</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;  </span><span class="comment">// k<br />    </span><span class="keyword">echo </span><span class="default">int_helper</span><span class="keyword">::</span><span class="default">uInt8</span><span class="keyword">(</span><span class="default">107</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;  </span><span class="comment">// k<br />    </span><span class="keyword">echo </span><span class="default">int_helper</span><span class="keyword">::</span><span class="default">uInt8</span><span class="keyword">(</span><span class="string">"\x6b"</span><span class="keyword">) . </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;  </span><span class="comment">// 107<br /><br />    </span><span class="keyword">echo </span><span class="default">int_helper</span><span class="keyword">::</span><span class="default">uInt16</span><span class="keyword">(</span><span class="default">4101</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;  </span><span class="comment">// \x05\x10<br />    </span><span class="keyword">echo </span><span class="default">int_helper</span><span class="keyword">::</span><span class="default">uInt16</span><span class="keyword">(</span><span class="string">"\x05\x10"</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;  </span><span class="comment">// 4101<br />    </span><span class="keyword">echo </span><span class="default">int_helper</span><span class="keyword">::</span><span class="default">uInt16</span><span class="keyword">(</span><span class="string">"\x05\x10"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">) . </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;  </span><span class="comment">// 1296<br /><br />    </span><span class="keyword">echo </span><span class="default">int_helper</span><span class="keyword">::</span><span class="default">uInt32</span><span class="keyword">(</span><span class="default">2147483647</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;  </span><span class="comment">// \xff\xff\xff\x7f<br />    </span><span class="keyword">echo </span><span class="default">int_helper</span><span class="keyword">::</span><span class="default">uInt32</span><span class="keyword">(</span><span class="string">"\xff\xff\xff\x7f"</span><span class="keyword">) . </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;  </span><span class="comment">// 2147483647<br /><br />    // Note: Test this with 64-bit build of PHP<br />    </span><span class="keyword">echo </span><span class="default">int_helper</span><span class="keyword">::</span><span class="default">uInt64</span><span class="keyword">(</span><span class="default">9223372036854775807</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;  </span><span class="comment">// \xff\xff\xff\xff\xff\xff\xff\x7f<br />    </span><span class="keyword">echo </span><span class="default">int_helper</span><span class="keyword">::</span><span class="default">uInt64</span><span class="keyword">(</span><span class="string">"\xff\xff\xff\xff\xff\xff\xff\x7f"</span><span class="keyword">) . </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;  </span><span class="comment">// 9223372036854775807<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="7653">  <div class="votes">
    <div id="Vu7653">
    <a href="/manual/vote-note.php?id=7653&amp;page=function.pack&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd7653">
    <a href="/manual/vote-note.php?id=7653&amp;page=function.pack&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V7653" title="78% like this...">
    18
    </div>
  </div>
  <a href="#7653" class="name">
  <strong class="user"><em>plutus at gmx dot de</em></strong></a><a class="genanchor" href="#7653"> &para;</a><div class="date" title="2000-08-10 04:14"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom7653">
<div class="phpcode"><code><span class="html">Note that the the upper command in perl looks like this:
<br />
<br />$binarydata = pack ("n v c*", 0x1234, 0x5678, 65, 66);
<br />In PHP it seems that no whitespaces are allowed in the first parameter. So if you want to convert your pack command from perl -&gt; PHP, don't forget to remove the whitespaces!</span></code></div>
  </div>
 </div>
  <div class="note" id="100518">  <div class="votes">
    <div id="Vu100518">
    <a href="/manual/vote-note.php?id=100518&amp;page=function.pack&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100518">
    <a href="/manual/vote-note.php?id=100518&amp;page=function.pack&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100518" title="68% like this...">
    13
    </div>
  </div>
  <a href="#100518" class="name">
  <strong class="user"><em>FrozenFire</em></strong></a><a class="genanchor" href="#100518"> &para;</a><div class="date" title="2010-10-20 09:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100518">
<div class="phpcode"><code><span class="html">If you need to unpack a signed short from big-endian or little-endian specifically, instead of machine-byte-order, you need only unpack it as the unsigned form, and then if the result is &gt;= 2^15, subtract 2^16 from it.
<br />
<br />And example would be:
<br />
<br /><span class="default">&lt;?php
<br />$foo </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"n"</span><span class="keyword">, </span><span class="default">$signedbigendianshort</span><span class="keyword">);
<br /></span><span class="default">$foo </span><span class="keyword">= </span><span class="default">$foo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />if(</span><span class="default">$foo </span><span class="keyword">&gt;= </span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">)) </span><span class="default">$foo </span><span class="keyword">-= </span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63105">  <div class="votes">
    <div id="Vu63105">
    <a href="/manual/vote-note.php?id=63105&amp;page=function.pack&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63105">
    <a href="/manual/vote-note.php?id=63105&amp;page=function.pack&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63105" title="66% like this...">
    6
    </div>
  </div>
  <a href="#63105" class="name">
  <strong class="user"><em>j.s.hoekstra</em></strong></a><a class="genanchor" href="#63105"> &para;</a><div class="date" title="2006-03-13 08:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63105">
<div class="phpcode"><code><span class="html">/* Convert float from HostOrder to Network Order */<br />function FToN( $val )<br />{<br />    $a = unpack("I",pack( "f",$val ));<br />    return pack("N",$a[1] );<br />}<br />    <br />/* Convert float from Network Order to HostOrder */<br />function NToF($val )<br />{<br />    $a = unpack("N",$val);<br />    $b = unpack("f",pack( "I",$a[1]));<br />    return $b[1];<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="57697">  <div class="votes">
    <div id="Vu57697">
    <a href="/manual/vote-note.php?id=57697&amp;page=function.pack&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57697">
    <a href="/manual/vote-note.php?id=57697&amp;page=function.pack&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57697" title="57% like this...">
    2
    </div>
  </div>
  <a href="#57697" class="name">
  <strong class="user"><em>Patrik Fimml</em></strong></a><a class="genanchor" href="#57697"> &para;</a><div class="date" title="2005-10-11 10:42"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57697">
<div class="phpcode"><code><span class="html">You will get the same effect with<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">_readInt</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)<br />{<br />   return </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'V'</span><span class="keyword">, </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />or unpack('N', ...) for big-endianness.</span></code></div>
  </div>
 </div>
  <div class="note" id="109328">  <div class="votes">
    <div id="Vu109328">
    <a href="/manual/vote-note.php?id=109328&amp;page=function.pack&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109328">
    <a href="/manual/vote-note.php?id=109328&amp;page=function.pack&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109328" title="55% like this...">
    2
    </div>
  </div>
  <a href="#109328" class="name">
  <strong class="user"><em>petepostma at gmail dot spam dot com</em></strong></a><a class="genanchor" href="#109328"> &para;</a><div class="date" title="2012-07-06 05:26"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109328">
<div class="phpcode"><code><span class="html">Even though in a 64-bit architecure intval(6123456789) = 6123456789, and sprintf('%b', 5000000000) = 100101010000001011111001000000000
<br />pack will not treat anything passed to it as 64-bit.  If you want to pack a 64-bit integer:
<br />
<br /><span class="default">&lt;?php
<br />$big </span><span class="keyword">= </span><span class="default">5000000000</span><span class="keyword">;
<br />
<br /></span><span class="default">$left </span><span class="keyword">= </span><span class="default">0xffffffff00000000</span><span class="keyword">;
<br /></span><span class="default">$right </span><span class="keyword">= </span><span class="default">0x00000000ffffffff</span><span class="keyword">;
<br />
<br /></span><span class="default">$l </span><span class="keyword">= (</span><span class="default">$big </span><span class="keyword">&amp; </span><span class="default">$left</span><span class="keyword">) &gt;&gt;</span><span class="default">32</span><span class="keyword">;
<br /></span><span class="default">$r </span><span class="keyword">= </span><span class="default">$big </span><span class="keyword">&amp; </span><span class="default">$right</span><span class="keyword">;
<br />
<br /></span><span class="default">$good </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'NN'</span><span class="keyword">, </span><span class="default">$l</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">);
<br />
<br /></span><span class="default">$urlsafe </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'+'</span><span class="keyword">,</span><span class="string">'/'</span><span class="keyword">), array(</span><span class="string">'-'</span><span class="keyword">,</span><span class="string">'_'</span><span class="keyword">), </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$good</span><span class="keyword">));
<br />
<br /></span><span class="comment">//done!
<br />
<br />//rebuild:
<br /></span><span class="default">$unurl </span><span class="keyword">=  </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'-'</span><span class="keyword">,</span><span class="string">'_'</span><span class="keyword">), array(</span><span class="string">'+'</span><span class="keyword">,</span><span class="string">'/'</span><span class="keyword">), </span><span class="default">$urlsafe</span><span class="keyword">);
<br /></span><span class="default">$binary </span><span class="keyword">= </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$unurl</span><span class="keyword">);
<br />
<br /></span><span class="default">$set </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'N2'</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$set</span><span class="keyword">);
<br />
<br /></span><span class="default">$original </span><span class="keyword">= </span><span class="default">$set</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &lt;&lt; </span><span class="default">32 </span><span class="keyword">| </span><span class="default">$set</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />echo </span><span class="default">$original</span><span class="keyword">, </span><span class="string">"\\r\\n"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />results in:
<br />Array
<br />(
<br />    [1] =&gt; 1
<br />    [2] =&gt; 705032704
<br />)
<br />5000000000
<br />
<br />but ONLY on a 64-bit enabled machine and PHP distro.</span></code></div>
  </div>
 </div>
  <div class="note" id="83059">  <div class="votes">
    <div id="Vu83059">
    <a href="/manual/vote-note.php?id=83059&amp;page=function.pack&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83059">
    <a href="/manual/vote-note.php?id=83059&amp;page=function.pack&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83059" title="55% like this...">
    2
    </div>
  </div>
  <a href="#83059" class="name">
  <strong class="user"><em>php at nagler-ihlein dot de</em></strong></a><a class="genanchor" href="#83059"> &para;</a><div class="date" title="2008-05-08 07:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83059">
<div class="phpcode"><code><span class="html">Be aware of format code H always padding the 0 for byte-alignment to the right (for odd count of nibbles).<br /><br />So pack("H", "7") results in 0x70 (ASCII character 'p') and not in 0x07 (BELL character)<br />as well as pack("H*", "347") results in 0x34 ('4') and 0x70 ('p') and not 0x03 and 0x47.</span></code></div>
  </div>
 </div>
  <div class="note" id="121351">  <div class="votes">
    <div id="Vu121351">
    <a href="/manual/vote-note.php?id=121351&amp;page=function.pack&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121351">
    <a href="/manual/vote-note.php?id=121351&amp;page=function.pack&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121351" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121351" class="name">
  <strong class="user"><em>ru</em></strong></a><a class="genanchor" href="#121351"> &para;</a><div class="date" title="2017-07-11 05:45"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121351">
<div class="phpcode"><code><span class="html">pack()<br />h    Hex string, low nibble first (not same hex2bin())<br />H    Hex string, high nibble first (same hex2bin())</span></code></div>
  </div>
 </div>
  <div class="note" id="98528">  <div class="votes">
    <div id="Vu98528">
    <a href="/manual/vote-note.php?id=98528&amp;page=function.pack&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98528">
    <a href="/manual/vote-note.php?id=98528&amp;page=function.pack&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98528" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#98528" class="name">
  <strong class="user"><em>Ammar Hameed</em></strong></a><a class="genanchor" href="#98528"> &para;</a><div class="date" title="2010-06-21 04:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98528">
<div class="phpcode"><code><span class="html">Using pack to write Arabic char(s) to a file.<br /><br /><span class="default">&lt;?php<br />$text </span><span class="keyword">= </span><span class="string">"&amp;#13574;&amp;#13830;&amp;#13830;"</span><span class="keyword">;<br /><br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="string">"UCS-2BE"</span><span class="keyword">, </span><span class="string">"HTML-ENTITIES"</span><span class="keyword">);<br /><br /></span><span class="default">$len </span><span class="keyword">=  </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="default">$bom </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="string">"&amp;#65534;"</span><span class="keyword">, </span><span class="string">"unicode"</span><span class="keyword">, </span><span class="string">"HTML-ENTITIES"</span><span class="keyword">);<br /><br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'text.txt'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br /><br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'a2'</span><span class="keyword">, </span><span class="default">$bom</span><span class="keyword">));  <br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"a</span><span class="keyword">{</span><span class="default">$len</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">));<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'a2'</span><span class="keyword">, </span><span class="default">$bom</span><span class="keyword">)); <br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'a2'</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">));<br /><br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pack&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pack.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.misc.php">Misc. Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.connection-aborted.php" title="connection_&#8203;aborted">connection_&#8203;aborted</a>
                        </li>
                                                <li class="">
                            <a href="function.connection-status.php" title="connection_&#8203;status">connection_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.constant.php" title="constant">constant</a>
                        </li>
                                                <li class="">
                            <a href="function.define.php" title="define">define</a>
                        </li>
                                                <li class="">
                            <a href="function.defined.php" title="defined">defined</a>
                        </li>
                                                <li class="">
                            <a href="function.die.php" title="die">die</a>
                        </li>
                                                <li class="">
                            <a href="function.eval.php" title="eval">eval</a>
                        </li>
                                                <li class="">
                            <a href="function.exit.php" title="exit">exit</a>
                        </li>
                                                <li class="">
                            <a href="function.get-browser.php" title="get_&#8203;browser">get_&#8203;browser</a>
                        </li>
                                                <li class="">
                            <a href="function.halt-compiler.php" title="_&#8203;_&#8203;halt_&#8203;compiler">_&#8203;_&#8203;halt_&#8203;compiler</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-file.php" title="highlight_&#8203;file">highlight_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-string.php" title="highlight_&#8203;string">highlight_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.hrtime.php" title="hrtime">hrtime</a>
                        </li>
                                                <li class="">
                            <a href="function.ignore-user-abort.php" title="ignore_&#8203;user_&#8203;abort">ignore_&#8203;user_&#8203;abort</a>
                        </li>
                                                <li class="current">
                            <a href="function.pack.php" title="pack">pack</a>
                        </li>
                                                <li class="">
                            <a href="function.php-strip-whitespace.php" title="php_&#8203;strip_&#8203;whitespace">php_&#8203;strip_&#8203;whitespace</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-conv.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;conv">sapi_&#8203;windows_&#8203;cp_&#8203;conv</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-get.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;get">sapi_&#8203;windows_&#8203;cp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-is-utf8.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8">sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-set.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;set">sapi_&#8203;windows_&#8203;cp_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-generate-ctrl-event.php" title="sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event">sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-set-ctrl-handler.php" title="sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler">sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-vt100-support.php" title="sapi_&#8203;windows_&#8203;vt100_&#8203;support">sapi_&#8203;windows_&#8203;vt100_&#8203;support</a>
                        </li>
                                                <li class="">
                            <a href="function.show-source.php" title="show_&#8203;source">show_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.sleep.php" title="sleep">sleep</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-getloadavg.php" title="sys_&#8203;getloadavg">sys_&#8203;getloadavg</a>
                        </li>
                                                <li class="">
                            <a href="function.time-nanosleep.php" title="time_&#8203;nanosleep">time_&#8203;nanosleep</a>
                        </li>
                                                <li class="">
                            <a href="function.time-sleep-until.php" title="time_&#8203;sleep_&#8203;until">time_&#8203;sleep_&#8203;until</a>
                        </li>
                                                <li class="">
                            <a href="function.uniqid.php" title="uniqid">uniqid</a>
                        </li>
                                                <li class="">
                            <a href="function.unpack.php" title="unpack">unpack</a>
                        </li>
                                                <li class="">
                            <a href="function.usleep.php" title="usleep">usleep</a>
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
