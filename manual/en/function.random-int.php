<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: random_int - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.random-int.php">
 <link rel="shorturl" href="https://www.php.net/random-int">
 <link rel="alternate" href="https://www.php.net/random-int" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.random.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.random-bytes.php">
 <link rel="next" href="https://www.php.net/manual/en/function.srand.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.random-int.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.random-int.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.random-int.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.random-int.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.random-int.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.random-int.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.random-int.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.random-int.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.random-int.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.random-int.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.random-int.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get a cryptographically secure, uniformly selected integer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: random_int - Manual" />
<meta name="twitter:description" content="Get a cryptographically secure, uniformly selected integer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: random_int - Manual" />
<meta itemprop="description" content="Get a cryptographically secure, uniformly selected integer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get a cryptographically secure, uniformly selected integer" />

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
        <a href="function.srand.php">
          srand &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.random-bytes.php">
          &laquo; random_bytes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.random.php'>Random</a></li>      <li><a href='ref.random.php'>Random Functions</a></li>      </ul>
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
            <option value='en/function.random-int.php' selected="selected">English</option>
            <option value='de/function.random-int.php'>German</option>
            <option value='es/function.random-int.php'>Spanish</option>
            <option value='fr/function.random-int.php'>French</option>
            <option value='it/function.random-int.php'>Italian</option>
            <option value='ja/function.random-int.php'>Japanese</option>
            <option value='pt_BR/function.random-int.php'>Brazilian Portuguese</option>
            <option value='ru/function.random-int.php'>Russian</option>
            <option value='tr/function.random-int.php'>Turkish</option>
            <option value='uk/function.random-int.php'>Ukrainian</option>
            <option value='zh/function.random-int.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.random-int" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">random_int</h1>
  <p class="verinfo">(PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">random_int</span> &mdash; <span class="dc-title">Get a cryptographically secure, uniformly selected integer</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.random-int-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>random_int</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$min</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$max</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Generates a uniformly selected integer between the given minimum and maximum.
  </p>
  <p class="para">
   The randomness generated by this function is suitable for all applications, including
   the generation of long-term secrets, such as encryption keys.
  </p>
  
<p class="para">
 The sources of randomness in the order of priority are as follows:
</p>
<ul class="itemizedlist">
 <li class="listitem">
  <p class="para">
   Linux: <a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">&raquo;&nbsp;getrandom()</a>, <var class="filename">/dev/urandom</var>
  </p>
 </li>
 <li class="listitem">
  <p class="para">
   FreeBSD &gt;= 12 (PHP &gt;= 7.3): <a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">&raquo;&nbsp;getrandom()</a>, <var class="filename">/dev/urandom</var>
  </p>
 </li>
 <li class="listitem">
  <p class="para">
   Windows (PHP &gt;= 7.2): <a href="https://docs.microsoft.com/en-us/windows/desktop/SecCNG/cng-portal" class="link external">&raquo;&nbsp;CNG-API</a>
  </p>
  <p class="para">
   Windows: <a href="https://msdn.microsoft.com/en-us/library/windows/desktop/aa379942(v=vs.85).aspx" class="link external">&raquo;&nbsp;CryptGenRandom</a>
  </p>
 </li>
 <li class="listitem">
  <p class="para">
   macOS (PHP &gt;= 8.2; &gt;= 8.1.9; &gt;= 8.0.22 if CCRandomGenerateBytes is available at compile time): CCRandomGenerateBytes()
  </p>
  <p class="para">
   macOS (PHP &gt;= 8.1; &gt;= 8.0.2): arc4random_buf(), <var class="filename">/dev/urandom</var>
  </p>
 </li>
 <li class="listitem">
  <p class="para">
   NetBSD &gt;= 7 (PHP &gt;= 7.1; &gt;= 7.0.1): arc4random_buf(), <var class="filename">/dev/urandom</var>
  </p>
 </li>
 <li class="listitem">
  <p class="para">
   OpenBSD &gt;= 5.5 (PHP &gt;= 7.1; &gt;= 7.0.1): arc4random_buf(), <var class="filename">/dev/urandom</var>
  </p>
 </li>
 <li class="listitem">
  <p class="para">
   DragonflyBSD (PHP &gt;= 8.1): <a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">&raquo;&nbsp;getrandom()</a>, <var class="filename">/dev/urandom</var>
  </p>
 </li>
 <li class="listitem">
  <p class="para">
   Solaris (PHP &gt;= 8.1): <a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">&raquo;&nbsp;getrandom()</a>, <var class="filename">/dev/urandom</var>
  </p>
 </li>
 <li class="listitem">
  <span class="simpara">
   Any combination of operating system and PHP version not previously mentioned: <var class="filename">/dev/urandom</var>
  </span>
 </li>
 <li class="listitem">
  <span class="simpara">
   If none of the sources are available or they all fail to generate
   randomness, then a <span class="classname"><a href="class.random-randomexception.php" class="classname">Random\RandomException</a></span>
   will be thrown.
  </span>
 </li>
</ul>

  
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   Although this function was added to PHP in PHP 7.0, a
   <a href="https://github.com/paragonie/random_compat" class="link external">&raquo;&nbsp;userland implementation</a>
   is available for PHP 5.2 to 5.6, inclusive.
  </span>
 </p></blockquote>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.random-int-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">min</code></dt>
    <dd>
     <p class="para">
      The lowest value to be returned.
     </p>
    </dd>
   
   
    <dt><code class="parameter">max</code></dt>
    <dd>
     <p class="para">
      The highest value to be returned.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.random-int-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A cryptographically secure, uniformly selected integer from the closed interval
   [<code class="parameter">min</code>, <code class="parameter">max</code>]. Both
   <code class="parameter">min</code> and <code class="parameter">max</code> are
   possible return values.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.random-int-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <ul class="itemizedlist">
   
 <li class="listitem">
  <span class="simpara">
   If an appropriate source of randomness cannot be found,
   a <span class="classname"><a href="class.random-randomexception.php" class="classname">Random\RandomException</a></span> will be thrown.
  </span>
 </li>

   <li class="listitem">
    <span class="simpara">
     If <code class="parameter">max</code> is less than <code class="parameter">min</code>, a
     <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> will be thrown.
    </span>
   </li>
  </ul>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.random-int-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.2.0</td>
      <td>
       In case of a <abbr title="Cryptographically Secure PseudoRandom Number Generator">CSPRNG</abbr> failure, this function will now throw a
       <span class="classname"><a href="class.random-randomexception.php" class="classname">Random\RandomException</a></span>. Previously a plain
       <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span> was thrown.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.random-int-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="random-int.example.basic">
   <p><strong>Example #1 <span class="function"><strong>random_int()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">random_int</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">999</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">random_int</span><span style="color: #007700">(-</span><span style="color: #0000BB">1000</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">int(248)
int(-898)</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.random-int-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="methodname"><a href="random-randomizer.getint.php" class="methodname" rel="rdfs-seeAlso">Random\Randomizer::getInt()</a> - Get a uniformly selected integer</span></li>
   <li><span class="function"><a href="function.random-bytes.php" class="function" rel="rdfs-seeAlso">random_bytes()</a> - Get cryptographically secure random bytes</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/random/functions/random-int.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.random-int%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.random-int&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.random-int.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119670">  <div class="votes">
    <div id="Vu119670">
    <a href="/manual/vote-note.php?id=119670&amp;page=function.random-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119670">
    <a href="/manual/vote-note.php?id=119670&amp;page=function.random-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119670" title="57% like this...">
    19
    </div>
  </div>
  <a href="#119670" class="name">
  <strong class="user"><em>s rotondo90 at gmail com</em></strong></a><a class="genanchor" href="#119670"> &para;</a><div class="date" title="2016-07-30 01:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119670">
<div class="phpcode"><code><span class="html">Here is a simple backporting function, it works for PHP &gt;= 5.1<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'random_int'</span><span class="keyword">)) {<br />    function </span><span class="default">random_int</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">) {<br />        if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mcrypt_create_iv'</span><span class="keyword">)) {<br />            </span><span class="default">trigger_error</span><span class="keyword">(<br />                </span><span class="string">'mcrypt must be loaded for random_int to work'</span><span class="keyword">, <br />                </span><span class="default">E_USER_WARNING<br />            </span><span class="keyword">);<br />            return </span><span class="default">null</span><span class="keyword">;<br />        }<br />        <br />        if (!</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">) || !</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$max</span><span class="keyword">)) {<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'$min and $max must be integer values'</span><span class="keyword">, </span><span class="default">E_USER_NOTICE</span><span class="keyword">);<br />            </span><span class="default">$min </span><span class="keyword">= (int)</span><span class="default">$min</span><span class="keyword">;<br />            </span><span class="default">$max </span><span class="keyword">= (int)</span><span class="default">$max</span><span class="keyword">;<br />        }<br />        <br />        if (</span><span class="default">$min </span><span class="keyword">&gt; </span><span class="default">$max</span><span class="keyword">) {<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'$max can\'t be lesser than $min'</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />            return </span><span class="default">null</span><span class="keyword">;<br />        }<br />        <br />        </span><span class="default">$range </span><span class="keyword">= </span><span class="default">$counter </span><span class="keyword">= </span><span class="default">$max </span><span class="keyword">- </span><span class="default">$min</span><span class="keyword">;<br />        </span><span class="default">$bits </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />        <br />        while (</span><span class="default">$counter </span><span class="keyword">&gt;&gt;= </span><span class="default">1</span><span class="keyword">) {<br />            ++</span><span class="default">$bits</span><span class="keyword">;<br />        }<br />        <br />        </span><span class="default">$bytes </span><span class="keyword">= (int)</span><span class="default">max</span><span class="keyword">(</span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$bits</span><span class="keyword">/</span><span class="default">8</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$bitmask </span><span class="keyword">= </span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$bits</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br /> <br />        if (</span><span class="default">$bitmask </span><span class="keyword">&gt;= </span><span class="default">PHP_INT_MAX</span><span class="keyword">) {<br />            </span><span class="default">$bitmask </span><span class="keyword">= </span><span class="default">PHP_INT_MAX</span><span class="keyword">;<br />        }<br /> <br />        do {<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(<br />                </span><span class="default">bin2hex</span><span class="keyword">(<br />                    </span><span class="default">mcrypt_create_iv</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">, </span><span class="default">MCRYPT_DEV_URANDOM</span><span class="keyword">)<br />                )<br />            ) &amp; </span><span class="default">$bitmask</span><span class="keyword">;<br />        } while (</span><span class="default">$result </span><span class="keyword">&gt; </span><span class="default">$range</span><span class="keyword">);<br /> <br />        return </span><span class="default">$result </span><span class="keyword">+ </span><span class="default">$min</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Randomness test<br /><br /><span class="default">&lt;?php<br />$max </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">; </span><span class="comment">// number of random values<br /></span><span class="default">$test </span><span class="keyword">= </span><span class="default">1000000</span><span class="keyword">;<br /><br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$test</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />    ++</span><span class="default">$array</span><span class="keyword">[</span><span class="default">random_int</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">)];<br />}<br /><br />function </span><span class="default">arrayFormatResult</span><span class="keyword">(&amp;</span><span class="default">$item</span><span class="keyword">) {<br />    global </span><span class="default">$test</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">; </span><span class="comment">// try to avoid this nowdays ;)<br />    <br />    </span><span class="default">$perc </span><span class="keyword">= (</span><span class="default">$item</span><span class="keyword">/(</span><span class="default">$test</span><span class="keyword">/</span><span class="default">$max</span><span class="keyword">))-</span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$item </span><span class="keyword">.= </span><span class="string">' '</span><span class="keyword">. </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$perc</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">) .</span><span class="string">'%'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="string">'arrayFormatResult'</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125333">  <div class="votes">
    <div id="Vu125333">
    <a href="/manual/vote-note.php?id=125333&amp;page=function.random-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125333">
    <a href="/manual/vote-note.php?id=125333&amp;page=function.random-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125333" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#125333" class="name">
  <strong class="user"><em>bens at effortlessis dot com</em></strong></a><a class="genanchor" href="#125333"> &para;</a><div class="date" title="2020-09-05 04:21"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125333">
<div class="phpcode"><code><span class="html">On my system (5th gen i7) random_int() takes about 14x longer to do the same number of calculations than rand(). <br /><br />for ($i=0; $i&lt;10000000; $i++)<br />        $x = rand(1, PHP_INT_MAX);<br /><br />Takes 0.86 seconds for rand(), 12.29 seconds for random_int(). So use random_int() somewhat sparingly. <br /><br />If it's not really important to be truly random, use rand() instead, especially in a tight loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="124010">  <div class="votes">
    <div id="Vu124010">
    <a href="/manual/vote-note.php?id=124010&amp;page=function.random-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124010">
    <a href="/manual/vote-note.php?id=124010&amp;page=function.random-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124010" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#124010" class="name">
  <strong class="user"><em>ccb_bc at hotmail dot com</em></strong></a><a class="genanchor" href="#124010"> &para;</a><div class="date" title="2019-07-04 03:02"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124010">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br />    </span><span class="comment">// PHP &gt;= 7<br />    </span><span class="keyword">function </span><span class="default">str_rand</span><span class="keyword">(</span><span class="default">int $length </span><span class="keyword">= </span><span class="default">16</span><span class="keyword">){<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />            </span><span class="default">$x </span><span class="keyword">.= </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">random_int</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">));<br />        }<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />    }<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">str_rand</span><span class="keyword">());<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128851">  <div class="votes">
    <div id="Vu128851">
    <a href="/manual/vote-note.php?id=128851&amp;page=function.random-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128851">
    <a href="/manual/vote-note.php?id=128851&amp;page=function.random-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128851" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#128851" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#128851"> &para;</a><div class="date" title="2023-09-02 12:51"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128851">
<div class="phpcode"><code><span class="html">A small function for generating version 4 GUIDs.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">v4uuid</span><span class="keyword">()<br />{<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">dechex</span><span class="keyword">(</span><span class="default">random_int</span><span class="keyword">(</span><span class="default">0x0000_0000</span><span class="keyword">, </span><span class="default">0xffff_ffff</span><span class="keyword">)), </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">dechex</span><span class="keyword">(</span><span class="default">random_int</span><span class="keyword">(</span><span class="default">0x0000</span><span class="keyword">, </span><span class="default">0xffff</span><span class="keyword">)), </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />    </span><span class="default">$c </span><span class="keyword">= </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">random_int</span><span class="keyword">(</span><span class="default">0x4000</span><span class="keyword">, </span><span class="default">0x4fff</span><span class="keyword">));<br />    </span><span class="default">$d </span><span class="keyword">= </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">random_int</span><span class="keyword">(</span><span class="default">0x8000</span><span class="keyword">, </span><span class="default">0xbfff</span><span class="keyword">));<br />    </span><span class="default">$e </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">dechex</span><span class="keyword">(</span><span class="default">random_int</span><span class="keyword">(</span><span class="default">0x0000_0000_0000</span><span class="keyword">, </span><span class="default">0xffff_ffff_ffff</span><span class="keyword">)), </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />    return </span><span class="string">"</span><span class="default">$a</span><span class="string">-</span><span class="default">$b</span><span class="string">-</span><span class="default">$c</span><span class="string">-</span><span class="default">$d</span><span class="string">-</span><span class="default">$e</span><span class="string">"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.random-int&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.random-int.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.random.php">Random Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.getrandmax.php" title="getrandmax">getrandmax</a>
                        </li>
                                                <li class="">
                            <a href="function.mt-getrandmax.php" title="mt_&#8203;getrandmax">mt_&#8203;getrandmax</a>
                        </li>
                                                <li class="">
                            <a href="function.mt-rand.php" title="mt_&#8203;rand">mt_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.mt-srand.php" title="mt_&#8203;srand">mt_&#8203;srand</a>
                        </li>
                                                <li class="">
                            <a href="function.rand.php" title="rand">rand</a>
                        </li>
                                                <li class="">
                            <a href="function.random-bytes.php" title="random_&#8203;bytes">random_&#8203;bytes</a>
                        </li>
                                                <li class="current">
                            <a href="function.random-int.php" title="random_&#8203;int">random_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.srand.php" title="srand">srand</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.lcg-value.php" title="lcg_&#8203;value">lcg_&#8203;value</a>
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
