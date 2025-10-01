<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Backward incompatible changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration71.incompatible.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration71.incompatible.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration71.incompatible.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration71.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration71.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/migration71.deprecated.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration71.incompatible.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration71.incompatible.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration71.incompatible.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration71.incompatible.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration71.incompatible.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration71.incompatible.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration71.incompatible.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration71.incompatible.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration71.incompatible.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration71.incompatible.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration71.incompatible.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Backward incompatible changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Backward incompatible changes - Manual" />
<meta name="twitter:description" content="Backward incompatible changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Backward incompatible changes - Manual" />
<meta itemprop="description" content="Backward incompatible changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Backward incompatible changes" />

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
        <a href="migration71.deprecated.php">
          Deprecated features in PHP 7.1.x &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration71.constants.php">
          &laquo; New global constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration71.php'>Migrating from PHP 7.0.x to PHP 7.1.x</a></li>      </ul>
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
            <option value='en/migration71.incompatible.php' selected="selected">English</option>
            <option value='de/migration71.incompatible.php'>German</option>
            <option value='es/migration71.incompatible.php'>Spanish</option>
            <option value='fr/migration71.incompatible.php'>French</option>
            <option value='it/migration71.incompatible.php'>Italian</option>
            <option value='ja/migration71.incompatible.php'>Japanese</option>
            <option value='pt_BR/migration71.incompatible.php'>Brazilian Portuguese</option>
            <option value='ru/migration71.incompatible.php'>Russian</option>
            <option value='tr/migration71.incompatible.php'>Turkish</option>
            <option value='uk/migration71.incompatible.php'>Ukrainian</option>
            <option value='zh/migration71.incompatible.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration71.incompatible" class="sect1">
 <h2 class="title">Backward incompatible changes</h2>

 <div class="sect2" id="migration71.incompatible.too-few-arguments-exception">
  <h3 class="title">Throw on passing too few function arguments</h3>

  <p class="para">
   Previously, a warning would be emitted for invoking user-defined functions
   with too few arguments. Now, this warning has been promoted to an Error
   exception. This change only applies to user-defined functions, not internal
   functions. For example:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">$param</span><span style="color: #007700">){}<br /></span><span style="color: #0000BB">test</span><span style="color: #007700">();</span></span></code></div>
   </div>

   <p class="para">The above example will output
something similar to:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Fatal error: Uncaught ArgumentCountError: Too few arguments to function test(), 0 passed in %s on line %d and exactly 1 expected in %s:%d
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration71.incompatible.forbid-dynamic-calls-to-scope-introspection-functions">
  <h3 class="title">Forbid dynamic calls to scope introspection functions</h3>

  <p class="para">
   Dynamic calls for certain functions have been forbidden (in the form of
   <code class="literal">$func()</code> or <code class="literal">array_map(&#039;extract&#039;, ...)</code>,
   etc). These functions either inspect or modify another scope, and present
   with them ambiguous and unreliable behavior. The functions are as follows:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.assert.php" class="function">assert()</a></span> - with a string as the first argument
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.compact.php" class="function">compact()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.extract.php" class="function">extract()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.func-get-args.php" class="function">func_get_args()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.func-get-arg.php" class="function">func_get_arg()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.func-num-args.php" class="function">func_num_args()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.get-defined-vars.php" class="function">get_defined_vars()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.mb-parse-str.php" class="function">mb_parse_str()</a></span> - with one arg
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.parse-str.php" class="function">parse_str()</a></span> - with one arg
    </span>
   </li>
  </ul>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">(function () {<br />    </span><span style="color: #0000BB">$func </span><span style="color: #007700">= </span><span style="color: #DD0000">'func_num_args'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$func</span><span style="color: #007700">();<br />})();</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Warning: Cannot call func_num_args() dynamically in %s on line %d
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration71.incompatible.invalid-class-names">
  <h3 class="title">Invalid class, interface, and trait names</h3>

  <p class="para">
   The following names cannot be used to name classes, interfaces, or traits:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span></span>
   </li>
   <li class="listitem">
    <span class="simpara"><span class="type"><a href="language.types.iterable.php" class="type iterable">iterable</a></span></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration71.incompatible.numerical-strings-scientific-notation">
  <h3 class="title">Numerical string conversions now respect scientific notation</h3>

  <p class="para">
   Integer operations and conversions on numerical strings now respect
   scientific notation. This also includes the <code class="literal">(int)</code> cast
   operation, and the following functions: <span class="function"><a href="function.intval.php" class="function">intval()</a></span> (where
   the base is 10), <span class="function"><a href="function.settype.php" class="function">settype()</a></span>, <span class="function"><a href="function.decbin.php" class="function">decbin()</a></span>,
   <span class="function"><a href="function.decoct.php" class="function">decoct()</a></span>, and <span class="function"><a href="function.dechex.php" class="function">dechex()</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.fixes-to-mt_rand-algorithm">
  <h3 class="title">Fixes to <span class="function"><a href="function.mt-rand.php" class="function">mt_rand()</a></span> algorithm</h3>

  <p class="para">
   <span class="function"><a href="function.mt-rand.php" class="function">mt_rand()</a></span> will now default to using the fixed version of
   the Mersenne Twister algorithm. If deterministic output from
   <span class="function"><a href="function.mt-rand.php" class="function">mt_rand()</a></span> was relied upon, then
   <strong><code><a href="random.constants.php#constant.mt-rand-php">MT_RAND_PHP</a></code></strong> can be used as optional second parameter
   to <span class="function"><a href="function.mt-srand.php" class="function">mt_srand()</a></span> to preserve the old (incorrect)
   implementation.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.rand-srand-aliases">
  <h3 class="title">
   <span class="function"><a href="function.rand.php" class="function">rand()</a></span> aliased to <span class="function"><a href="function.mt-rand.php" class="function">mt_rand()</a></span> and
   <span class="function"><a href="function.srand.php" class="function">srand()</a></span> aliased to <span class="function"><a href="function.mt-srand.php" class="function">mt_srand()</a></span>
  </h3>

  <p class="para">
   <span class="function"><a href="function.rand.php" class="function">rand()</a></span> and <span class="function"><a href="function.srand.php" class="function">srand()</a></span> have now been made
   aliases to <span class="function"><a href="function.mt-rand.php" class="function">mt_rand()</a></span> and <span class="function"><a href="function.mt-srand.php" class="function">mt_srand()</a></span>,
   respectively. This means that the output for the following functions have
   changed: <span class="function"><a href="function.rand.php" class="function">rand()</a></span>, <span class="function"><a href="function.shuffle.php" class="function">shuffle()</a></span>,
   <span class="function"><a href="function.str-shuffle.php" class="function">str_shuffle()</a></span>, and <span class="function"><a href="function.array-rand.php" class="function">array_rand()</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.delete-control-character-in-identifiers">
  <h3 class="title">Disallow the ASCII delete control character in identifiers</h3>

  <p class="para">
   The ASCII delete control character (<code class="literal">0x7F</code>) can no longer
   be used in identifiers that are not quoted.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.error_log-syslog">
  <h3 class="title">
   <code class="parameter">error_log</code> changes with <code class="literal">syslog</code>
   value
  </h3>

  <p class="para">
   If the <code class="parameter">error_log</code> ini setting is set to
   <code class="literal">syslog</code>, the PHP error levels are mapped to the syslog
   error levels. This brings finer differentiation in the error logs in
   contrary to the previous approach where all the errors are logged with the
   notice level only.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.dont-call-destructors">
  <h3 class="title">Do not call destructors on incomplete objects</h3>

  <p class="para">
   Destructors are now never called for objects that throw an exception during
   the execution of their constructor. In previous versions this behavior
   depended on whether the object was referenced outside the constructor (e.g.
   by an exception backtrace).
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.call_user_func-with-ref-args">
  <h3 class="title">
   <span class="function"><a href="function.call-user-func.php" class="function">call_user_func()</a></span> handling of reference arguments
  </h3>

  <p class="para">
   <span class="function"><a href="function.call-user-func.php" class="function">call_user_func()</a></span> will now always generate a warning
   upon calls to functions that expect references as arguments. Previously
   this depended on whether the call was fully qualified.
  </p>
  <p class="para">
   Additionally, <span class="function"><a href="function.call-user-func.php" class="function">call_user_func()</a></span> and
   <span class="function"><a href="function.call-user-func-array.php" class="function">call_user_func_array()</a></span> will no longer abort the function
   call in this case. The &quot;expected reference&quot; warning will be emitted, but the
   call will proceed as usual.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.empty-string-index-operator">
  <h3 class="title">
   The empty index operator is not supported for strings anymore
  </h3>

  <p class="para">
   Applying the empty index operator to a string (e.g. <code class="literal">$str[] = $x</code>)
   throws a fatal error instead of converting silently to array.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.empty-string-modifcation-by-character">
  <h3 class="title">Assignment via string index access on an empty string</h3>
  <p class="para">
   String modification by character on an empty string now works like for non-empty
   strings, i.e. writing to an out of range offset pads the string with spaces,
   where non-integer types are converted to integer, and only the first character of
   the assigned string is used. Formerly, empty strings where silently treated like
   an empty array.
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #0000BB">10</span><span style="color: #007700">] = </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <p class="para">Output of the above example in PHP 7.0:</p>
    <div class="example-contents screen">
<div class="cdata"><pre>
array(1) {
  [10]=&gt;
  string(3) &quot;foo&quot;
}
</pre></div>
    </div>
    <p class="para">Output of the above example in PHP 7.1:</p>
    <div class="example-contents screen">
<div class="cdata"><pre>
string(11) &quot;          f&quot;
</pre></div>
    </div>
   </div>
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.removed-ini-directives">
  <h3 class="title">Removed ini directives</h3>

  <p class="para">
   The following ini directives have been removed:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <code class="parameter">session.entropy_file</code>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <code class="parameter">session.entropy_length</code>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <code class="parameter">session.hash_function</code>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <code class="parameter">session.hash_bits_per_character</code>
    </span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration71.incompatible.array-order">
  <h3 class="title">
   Array ordering when elements are automatically created during by reference
   assignments has changed
  </h3>

  <p class="para">
   The order of the elements in an array has changed when those elements have
   been automatically created by referencing them in a by reference
   assignment. For example:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= [];<br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #DD0000">"a"</span><span style="color: #007700">] =&amp; </span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #DD0000">"b"</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #DD0000">"b"</span><span style="color: #007700">] = </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">Output of the above example in PHP 7.0:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
array(2) {
  [&quot;a&quot;]=&gt;
  &amp;int(1)
  [&quot;b&quot;]=&gt;
  &amp;int(1)
}
</pre></div>
   </div>
   <p class="para">Output of the above example in PHP 7.1:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
array(2) {
  [&quot;b&quot;]=&gt;
  &amp;int(1)
  [&quot;a&quot;]=&gt;
  &amp;int(1)
}
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration71.incompatible.sort-order">
  <h3 class="title">Sort order of equal elements</h3>
  <p class="para">
   The internal sorting algorithm has been improved, what may result in
   different sort order of elements, which compare as equal, than before.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Don&#039;t rely on the order of elements which compare as equal; it might change
    anytime.
   </p>
  </p></blockquote>
 </div>

 <div class="sect2" id="migration71.incompatible.e-recoverable">
  <h3 class="title">Error message for E_RECOVERABLE errors</h3>
  <p class="para">
   The error message for E_RECOVERABLE errors has been changed from &quot;Catchable
   fatal error&quot; to &quot;Recoverable fatal error&quot;.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.unserialize">
  <h3 class="title">$options parameter of unserialize()</h3>
  <p class="para">
   The <code class="literal">allowed_classes</code> element of the $options parameter of
   <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span> is now strictly typed, i.e. if anything
   other than an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> or a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> is given,
   unserialize() returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> and issues an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.datetime-microseconds">
  <h3 class="title">DateTime constructor incorporates microseconds</h3>
  <p class="para">
   <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> and <span class="classname"><a href="class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span>
   now properly incorporate microseconds when constructed from the current time,
   either explicitly or with a relative string (e.g. <code class="literal">&quot;first day of next
   month&quot;</code>). This means that naive comparisons of two newly created
   instances will now more likely return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> instead of <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>:
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">() == new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.fatal-errors-to-error-exceptions">
  <h3 class="title">Fatal errors to <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exceptions conversions</h3>
  <p class="para">
   In the Date extension, invalid serialization data for
   <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> or <span class="classname"><a href="class.dateperiod.php" class="classname">DatePeriod</a></span> classes,
   or timezone initialization failure from serialized data, will now throw an
   <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception from the
   <span class="methodname"><strong>__wakeup()</strong></span> or <span class="methodname"><strong>__set_state()</strong></span>
   methods, instead of resulting in a fatal error.
  </p>

  <p class="para">
   In the DBA extension, data modification functions (such as
   <span class="function"><a href="function.dba-insert.php" class="function">dba_insert()</a></span>) will now throw an
   <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of triggering a catchable
   fatal error if the key does not contain exactly two elements.
  </p>

  <p class="para">
   In the DOM extension, invalid schema or RelaxNG validation contexts will now
   throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of resulting in a
   fatal error. Similarly, attempting to register a node class that does not
   extend the appropriate base class, or attempting to read an invalid property
   or write to a readonly property, will also now throw an
   <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception.
  </p>

  <p class="para">
   In the IMAP extension, email addresses longer than 16385 bytes will throw an
   <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of resulting in a fatal error.
  </p>

  <p class="para">
   In the Intl extension, failing to call the parent constructor in a class
   extending <span class="classname"><a href="class.collator.php" class="classname">Collator</a></span> before invoking the parent methods
   will now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> instead of resulting in a
   recoverable fatal error. Also, cloning a
   <span class="classname"><a href="class.transliterator.php" class="classname">Transliterator</a></span> object will now throw an
   <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception on failure to clone the internal
   transliterator instead of resulting in a fatal error.
  </p>

  <p class="para">
   In the LDAP extension, providing an unknown modification type to
   <span class="function"><strong>ldap_batch_modify()</strong></span> will now throw an
   <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of resulting in a fatal error.
  </p>

  <p class="para">
   In the mbstring extension, the <span class="function"><a href="function.mb-ereg.php" class="function">mb_ereg()</a></span> and
   <span class="function"><a href="function.mb-eregi.php" class="function">mb_eregi()</a></span> functions will now throw a
   <span class="classname"><a href="class.parseerror.php" class="classname">ParseError</a></span> exception if an invalid PHP expression is
   provided and the &#039;e&#039; option is used.
  </p>

  <p class="para">
   In the Mcrypt extension, the <span class="function"><a href="function.mcrypt-encrypt.php" class="function">mcrypt_encrypt()</a></span> and
   <span class="function"><a href="function.mcrypt-decrypt.php" class="function">mcrypt_decrypt()</a></span> will now throw an
   <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of resulting in a fatal error
   if mcrypt cannot be initialized.
  </p>

  <p class="para">
   In the mysqli extension, attempting to read an invalid property or write to
   a readonly property will now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception
   instead of resulting in a fatal error.
  </p>

  <p class="para">
   In the Reflection extension, failing to retrieve a reflection object or
   retrieve an object property will now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span>
   exception instead of resulting in a fatal error.
  </p>

  <p class="para">
   In the Session extension, custom session handlers that do not return strings
   for session IDs will now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception
   instead of resulting in a fatal error when a function is called that must
   generate a session ID.
  </p>

  <p class="para">
   In the SimpleXML extension, creating an unnamed or duplicate attribute will
   now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of resulting in
   a fatal error.
  </p>

  <p class="para">
   In the SPL extension, attempting to clone an
   <span class="classname"><strong class="classname">SplDirectory</strong></span> object will now throw an
   <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of resulting in a fatal
   error. Similarly, calling <span class="methodname"><a href="arrayiterator.append.php" class="methodname">ArrayIterator::append()</a></span> when
   iterating over an object will also now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span>
   exception.
  </p>

  <p class="para">
   In the standard extension, the <span class="function"><a href="function.assert.php" class="function">assert()</a></span> function, when
   provided with a string argument as its first parameter, will now throw a
   <span class="classname"><a href="class.parseerror.php" class="classname">ParseError</a></span> exception instead of resulting in a
   catchable fatal error if the PHP code is invalid. Similarly, calling
   <span class="function"><a href="function.forward-static-call.php" class="function">forward_static_call()</a></span> outside of a class scope will now
   throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception.
  </p>

  <p class="para">
   In the Tidy extension, creating a <span class="classname"><a href="class.tidynode.php" class="classname">tidyNode</a></span> manually
   will now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of
   resulting in a fatal error.
  </p>

  <p class="para">
   In the WDDX extension, a circular reference when serializing will now throw
   an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of resulting in a fatal
   error.
  </p>

  <p class="para">
   In the XML-RPC extension, a circular reference when serializing will now
   throw an instance of <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of
   resulting in a fatal error.
  </p>

  <p class="para">
   In the Zip extension, the <span class="methodname"><a href="ziparchive.addglob.php" class="methodname">ZipArchive::addGlob()</a></span>
   method will now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception instead of
   resulting in a fatal error if glob support is not available.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.lexical-names">
  <h3 class="title">Lexically bound variables cannot reuse names</h3>

  <p class="para">
   Variables bound to a <a href="functions.anonymous.php" class="link">closure</a> via
   the <code class="literal">use</code> construct cannot use the same name as any
   <a href="language.variables.predefined.php" class="link">superglobals</a>, <var class="varname">$this</var>, or any parameter. For
   example, all of these function definition will result in a fatal error:

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$f </span><span style="color: #007700">= function () use (</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">) {};<br /></span><span style="color: #0000BB">$f </span><span style="color: #007700">= function () use (</span><span style="color: #0000BB">$this</span><span style="color: #007700">) {};<br /></span><span style="color: #0000BB">$f </span><span style="color: #007700">= function (</span><span style="color: #0000BB">$param</span><span style="color: #007700">) use (</span><span style="color: #0000BB">$param</span><span style="color: #007700">) {};</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.long2ip">
  <h3 class="title">long2ip() parameter type change</h3>
  <p class="para">
   <span class="function"><a href="function.long2ip.php" class="function">long2ip()</a></span> now expects an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> instead of a
   <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.json">
  <h3 class="title">JSON encoding and decoding</h3>
  <p class="para">
   The <code class="parameter">serialize_precision</code> ini setting now controls the
   serialization precision when encoding <span class="type"><a href="language.types.float.php" class="type float">float</a></span>s.
  </p>
  <p class="para">
   Decoding an empty key now results in an empty property name, rather than 
   <code class="literal">_empty_</code> as a property name.

   <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">([</span><span style="color: #DD0000">'' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">])));</span></span></code></div>
   </div>

   <p class="para">The above example will output
something similar to:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
object(stdClass)#1 (1) {
  [&quot;&quot;]=&gt;
  int(1)
}
</pre></div>
   </div>
  </div>
  </p>
  <p class="para">
   When supplying the <strong><code><a href="json.constants.php#constant.json-unescaped-unicode">JSON_UNESCAPED_UNICODE</a></code></strong> flag to
   <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span>, the sequences U+2028 and U+2029 are now
   escaped.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.mbstring">
  <h3 class="title">
   Changes to <span class="function"><a href="function.mb-ereg.php" class="function">mb_ereg()</a></span> and <span class="function"><a href="function.mb-eregi.php" class="function">mb_eregi()</a></span>
   parameter semantics
  </h3>
  <p class="para">
   The third parameter to the <span class="function"><a href="function.mb-ereg.php" class="function">mb_ereg()</a></span> and
   <span class="function"><a href="function.mb-eregi.php" class="function">mb_eregi()</a></span> functions (<code class="parameter">regs</code>) will now be
   set to an empty array if nothing was matched. Formerly, the parameter would
   not have been modified.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.openssl">
  <h3 class="title">Drop support for the sslv2 stream</h3>
  <p class="para">
   The sslv2 stream has now been dropped in OpenSSL.
  </p>
 </div>

 <div class="sect2" id="migration71.incompatible.typed-returns-compile-time">
  <h3 class="title">Forbid &quot;return;&quot; for typed returns already at compile-time</h3>
  <p class="para">
   Return statements without argument in functions which declare a return type
   now trigger <strong><code><a href="errorfunc.constants.php#constant.e-compile-error">E_COMPILE_ERROR</a></code></strong> (unless the return type is
   declared as <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span>), even if the return statement would never be
   reached.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration71/incompatible.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration71.incompatible%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration71.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration71.incompatible.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120221">  <div class="votes">
    <div id="Vu120221">
    <a href="/manual/vote-note.php?id=120221&amp;page=migration71.incompatible&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120221">
    <a href="/manual/vote-note.php?id=120221&amp;page=migration71.incompatible&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120221" title="80% like this...">
    44
    </div>
  </div>
  <a href="#120221" class="name">
  <strong class="user"><em>love at sickpeople dot se</em></strong></a><a class="genanchor" href="#120221"> &para;</a><div class="date" title="2016-11-24 07:59"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120221">
<div class="phpcode"><code><span class="html">For anyone migrating from 5.x to 7.1:<br /><br />About "Array ordering when elements are automatically created during by reference assignments has changed" on this page<br /><br />(<a href="http://php.net/manual/en/migration71.incompatible.php#migration71.incompatible.array-order" rel="nofollow" target="_blank">http://php.net/manual/en/migration71.incompatible.php#migration71.incompatible.array-order</a>)<br /><br />The behaviour of 7.1 is THE SAME as of PHP 5. It is only 7.0 that differs.<br /><br />See <a href="https://3v4l.org/frbUc" rel="nofollow" target="_blank">https://3v4l.org/frbUc</a><br /><br /><span class="default">&lt;?php<br /><br />$array </span><span class="keyword">= [];<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="string">"a"</span><span class="keyword">] =&amp; </span><span class="default">$array</span><span class="keyword">[</span><span class="string">"b"</span><span class="keyword">];<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="string">"b"</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120845">  <div class="votes">
    <div id="Vu120845">
    <a href="/manual/vote-note.php?id=120845&amp;page=migration71.incompatible&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120845">
    <a href="/manual/vote-note.php?id=120845&amp;page=migration71.incompatible&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120845" title="80% like this...">
    34
    </div>
  </div>
  <a href="#120845" class="name">
  <strong class="user"><em>kees at twekaers dot net</em></strong></a><a class="genanchor" href="#120845"> &para;</a><div class="date" title="2017-03-21 11:49"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120845">
<div class="phpcode"><code><span class="html">The backwards incompatible change 'The empty index operator is not supported for strings anymore' has a lot more implications than just a fatal error on the following code<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">[] = </span><span class="string">"hello world"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will give a fatal error in 7.1 but will work as expected in 7.0 or below and give you: (no notice, no warning)<br /><br />array(1) {<br />  [0]=&gt;<br />  string(11) "hello world"<br />}<br /><br />However, the following is also changed:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"hello world"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="comment">// 7.1: string(1) "h"<br />// pre-7.1: array(1) {  [0]=&gt;  string(11) "hello world" }<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] = </span><span class="string">"hello world"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="comment">// 7.1: string(6) "     h"<br />// pre-7.1: array(1) {  [0]=&gt;  string(11) "hello world" }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120393">  <div class="votes">
    <div id="Vu120393">
    <a href="/manual/vote-note.php?id=120393&amp;page=migration71.incompatible&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120393">
    <a href="/manual/vote-note.php?id=120393&amp;page=migration71.incompatible&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120393" title="68% like this...">
    17
    </div>
  </div>
  <a href="#120393" class="name">
  <strong class="user"><em>m dot r dot sopacua at gmail dot com</em></strong></a><a class="genanchor" href="#120393"> &para;</a><div class="date" title="2016-12-30 03:49"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120393">
<div class="phpcode"><code><span class="html">"OMFG! Why was session.hash_function removed?!? Dude!"<br /><br /><a href="https://wiki.php.net/rfc/session-id-without-hashing" rel="nofollow" target="_blank">https://wiki.php.net/rfc/session-id-without-hashing</a><br /><br />There. Saved ya a search.</span></code></div>
  </div>
 </div>
  <div class="note" id="121892">  <div class="votes">
    <div id="Vu121892">
    <a href="/manual/vote-note.php?id=121892&amp;page=migration71.incompatible&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121892">
    <a href="/manual/vote-note.php?id=121892&amp;page=migration71.incompatible&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121892" title="53% like this...">
    1
    </div>
  </div>
  <a href="#121892" class="name">
  <strong class="user"><em>mikem at gmail dot com</em></strong></a><a class="genanchor" href="#121892"> &para;</a><div class="date" title="2017-11-21 12:09"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121892">
<div class="phpcode"><code><span class="html">ArgumentCountError - this modification is the main reason to avoid this version on older projects.</span></code></div>
  </div>
 </div>
  <div class="note" id="123740">  <div class="votes">
    <div id="Vu123740">
    <a href="/manual/vote-note.php?id=123740&amp;page=migration71.incompatible&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123740">
    <a href="/manual/vote-note.php?id=123740&amp;page=migration71.incompatible&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123740" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123740" class="name">
  <strong class="user"><em>david at artefactual dot com</em></strong></a><a class="genanchor" href="#123740"> &para;</a><div class="date" title="2019-04-04 05:29"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123740">
<div class="phpcode"><code><span class="html">Regarding the ArgumentCountError, PHP 7.1+ does still support user functions with a variable number of arguments, using the "func(...$args) {}" syntax, see: <a href="https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list" rel="nofollow" target="_blank">https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration71.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration71.incompatible.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration71.php">Migrating from PHP 7.0.x to PHP 7.1.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration71.new-features.php" title="New features">New features</a>
                        </li>
                                                <li class="">
                            <a href="migration71.new-functions.php" title="New functions">New functions</a>
                        </li>
                                                <li class="">
                            <a href="migration71.constants.php" title="New global constants">New global constants</a>
                        </li>
                                                <li class="current">
                            <a href="migration71.incompatible.php" title="Backward incompatible changes">Backward incompatible changes</a>
                        </li>
                                                <li class="">
                            <a href="migration71.deprecated.php" title="Deprecated features in PHP 7.1.x">Deprecated features in PHP 7.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration71.changed-functions.php" title="Changed functions">Changed functions</a>
                        </li>
                                                <li class="">
                            <a href="migration71.other-changes.php" title="Other changes">Other changes</a>
                        </li>
                                                <li class="">
                            <a href="migration71.windows-support.php" title="Windows Support">Windows Support</a>
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
