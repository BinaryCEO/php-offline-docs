<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Examples - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/seaslog.examples.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/seaslog.examples.php">
 <link rel="alternate" href="https://www.php.net/manual/en/seaslog.examples.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.seaslog.php">
 <link rel="prev" href="https://www.php.net/manual/en/seaslog.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.seaslog.php">

 <link rel="alternate" href="https://www.php.net/manual/en/seaslog.examples.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/seaslog.examples.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/seaslog.examples.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/seaslog.examples.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/seaslog.examples.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/seaslog.examples.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/seaslog.examples.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/seaslog.examples.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/seaslog.examples.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/seaslog.examples.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/seaslog.examples.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Examples" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Examples - Manual" />
<meta name="twitter:description" content="Examples" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Examples - Manual" />
<meta itemprop="description" content="Examples" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Examples" />

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
        <a href="ref.seaslog.php">
          Seaslog Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="seaslog.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.seaslog.php'>Seaslog</a></li>      </ul>
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
            <option value='en/seaslog.examples.php' selected="selected">English</option>
            <option value='de/seaslog.examples.php'>German</option>
            <option value='es/seaslog.examples.php'>Spanish</option>
            <option value='fr/seaslog.examples.php'>French</option>
            <option value='it/seaslog.examples.php'>Italian</option>
            <option value='ja/seaslog.examples.php'>Japanese</option>
            <option value='pt_BR/seaslog.examples.php'>Brazilian Portuguese</option>
            <option value='ru/seaslog.examples.php'>Russian</option>
            <option value='tr/seaslog.examples.php'>Turkish</option>
            <option value='uk/seaslog.examples.php'>Ukrainian</option>
            <option value='zh/seaslog.examples.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="seaslog.examples" class="chapter">
 <h1 class="title">Examples</h1>


 <div class="example" id="example-3810">
  <p><strong>Example #1 Get and set base path</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$basePath1 </span><span style="color: #007700">= </span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">setBasePath</span><span style="color: #007700">(</span><span style="color: #DD0000">'/log/base_test'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$basePath2 </span><span style="color: #007700">= </span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$basePath1</span><span style="color: #007700">,</span><span style="color: #0000BB">$basePath2</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
<div class="cdata"><pre>
string(12) &quot;/var/log/www&quot;
string(14) &quot;/log/base_test&quot;
</pre></div>
  </div>
 </div>

 <div class="example" id="example-3811">
  <p><strong>Example #2 Get and set logger</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$lastLogger1 </span><span style="color: #007700">= </span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">getLastLogger</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">setLogger</span><span style="color: #007700">(</span><span style="color: #DD0000">'testModule/app1'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$lastLogger2 </span><span style="color: #007700">= </span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">getLastLogger</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$lastLogger1</span><span style="color: #007700">,</span><span style="color: #0000BB">$lastLogger2</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
<div class="cdata"><pre>
string(7) &quot;default&quot;
string(15) &quot;testModule/app1&quot;
</pre></div>
  </div>
 </div>

 <div class="example" id="example-3812">
  <p><strong>Example #3 Fast write log</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">SEASLOG_ERROR</span><span style="color: #007700">,</span><span style="color: #DD0000">'this is a error test by ::log'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">debug</span><span style="color: #007700">(</span><span style="color: #DD0000">'this is a {userName} debug'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{userName}' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'neeke'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">info</span><span style="color: #007700">(</span><span style="color: #DD0000">'this is a info log'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">notice</span><span style="color: #007700">(</span><span style="color: #DD0000">'this is a notice log'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">warning</span><span style="color: #007700">(</span><span style="color: #DD0000">'your {website} was down,please {action} it ASAP!'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{website}' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'github.com'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{action}' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'rboot'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">error</span><span style="color: #007700">(</span><span style="color: #DD0000">'a error log'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">critical</span><span style="color: #007700">(</span><span style="color: #DD0000">'some thing was critical'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">alert</span><span style="color: #007700">(</span><span style="color: #DD0000">'yes this is a {messageName}'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{messageName}' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'alertMSG'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">emergency</span><span style="color: #007700">(</span><span style="color: #DD0000">'Just now, the house next door was completely burnt out! {note}'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{note}' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'it`s a joke'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>
   As the default, <em>seaslog.default_template = &quot;%T | %L | %P | %Q | %t | %M&quot;</em>.
   That&#039;s mean,as the default,log record style is： `{dateTime} | {level} | {pid} | {uniqid} | {timeStamp} | {logInfo}`.
  </p></div>
  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents"><p>
   <em>seaslog.appender = 1</em>
  </p></div>
  <div class="example-contents screen">
<div class="cdata"><pre>
2014-07-27 08:53:52 | ERROR | 23625 | 599159975a9ff | 1406422432.786 | this is a error test by log
2014-07-27 08:53:52 | DEBUG | 23625 | 599159975a9ff | 1406422432.786 | this is a neeke debug
2014-07-27 08:53:52 | INFO | 23625 | 599159975a9ff | 1406422432.787 | this is a info log
2014-07-27 08:53:52 | NOTICE | 23625 | 599159975a9ff | 1406422432.787 | this is a notice log
2014-07-27 08:53:52 | WARNING | 23625 | 599159975a9ff | 1406422432.787 | your github.com was down,please rboot it ASAP!
2014-07-27 08:53:52 | ERROR | 23625 | 599159975a9ff | 1406422432.787 | a error log
2014-07-27 08:53:52 | CRITICAL | 23625 | 599159975a9ff | 1406422432.787 | some thing was critical
2014-07-27 08:53:52 | EMERGENCY | 23625 | 599159975a9ff | 1406422432.787 | Just now, the house next door was completely burnt out! it is a joke
</pre></div>
  </div>
  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents"><p>
   <em>seaslog.appender = 2</em> or <em>seaslog.appender = 3</em>
  </p></div>
  <div class="example-contents screen">
<div class="cdata"><pre>
The log style finally formatted such as:
&lt;15&gt;1 2017-08-27T01:24:59+08:00 vagrant-ubuntu-trusty test/logger[27171]: 2016-06-25 00:59:43 | DEBUG | 21423 | 599157af4e937 | 1466787583.322 | this is a neeke debug
&lt;14&gt;1 2017-08-27T01:24:59+08:00 vagrant-ubuntu-trusty test/logger[27171]: 2016-06-25 00:59:43 | INFO | 21423 | 599157af4e937 | 1466787583.323 | this is a info log
&lt;13&gt;1 2017-08-27T01:24:59+08:00 vagrant-ubuntu-trusty test/logger[27171]: 2016-06-25 00:59:43 | NOTICE | 21423 | 599157af4e937 | 1466787583.324 | this is a notice log
</pre></div>
  </div>
 </div>

 <div class="example" id="example-3813">
  <p><strong>Example #4 Fast count some type of log count value</strong></p>
  <div class="example-contents"><p>
   <em>SeasLog</em> get count value of `grep -wc` use system pipe and return to PHP (array or int).
  </p></div>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$countResult1 </span><span style="color: #007700">= </span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">analyzerCount</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$countResult2 </span><span style="color: #007700">= </span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">analyzerCount</span><span style="color: #007700">(</span><span style="color: #0000BB">SEASLOG_WARNING</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$countResult3 </span><span style="color: #007700">= </span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">analyzerCount</span><span style="color: #007700">(</span><span style="color: #0000BB">SEASLOG_ERROR</span><span style="color: #007700">,</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Ymd'</span><span style="color: #007700">,</span><span style="color: #0000BB">time</span><span style="color: #007700">()));<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$countResult1</span><span style="color: #007700">,</span><span style="color: #0000BB">$countResult2</span><span style="color: #007700">,</span><span style="color: #0000BB">$countResult3</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
<div class="cdata"><pre>
array(8) {
  [&quot;DEBUG&quot;]=&gt;
  int(3)
  [&quot;INFO&quot;]=&gt;
  int(3)
  [&quot;NOTICE&quot;]=&gt;
  int(3)
  [&quot;WARNING&quot;]=&gt;
  int(3)
  [&quot;ERROR&quot;]=&gt;
  int(6)
  [&quot;CRITICAL&quot;]=&gt;
  int(3)
  [&quot;ALERT&quot;]=&gt;
  int(3)
  [&quot;EMERGENCY&quot;]=&gt;
  int(3)
}
int(7)
int(1)
</pre></div>
  </div>
 </div>

 <div class="example" id="example-3814">
  <p><strong>Example #5 Acquisit some type of log list</strong></p>
  <div class="example-contents"><p>
   <em>SeasLog</em> get count value of `grep -w` use system pipe and return array to PHP.
  </p></div>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$detailErrorArray </span><span style="color: #007700">= </span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">analyzerDetail</span><span style="color: #007700">(</span><span style="color: #0000BB">SEASLOG_ERROR</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$detailErrorArray</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">SeasLog</span><span style="color: #007700">::</span><span style="color: #0000BB">analyzerDetail</span><span style="color: #007700">(</span><span style="color: #0000BB">SEASLOG_ERROR</span><span style="color: #007700">,</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Ymd'</span><span style="color: #007700">,</span><span style="color: #0000BB">time</span><span style="color: #007700">())));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
<div class="cdata"><pre>
array(6) {
  [0] =&gt;
  string(83) &quot;2014-02-24 00:14:02 | ERROR | 8568 | 599157af4e937 | 1393172042.717 | test error 3 &quot;
  [1] =&gt;
  string(83) &quot;2014-02-24 00:14:04 | ERROR | 8594 | 5991576584446 | 1393172044.104 | test error 3 &quot;
  [2] =&gt;
  string(83) &quot;2014-02-24 00:14:04 | ERROR | 8620 | 1502697015147 | 1393172044.862 | test error 3 &quot;
  [3] =&gt;
  string(83) &quot;2014-02-24 00:14:05 | ERROR | 8646 | 599159975a9ff | 1393172045.989 | test error 3 &quot;
  [4] =&gt;
  string(83) &quot;2014-02-24 00:14:07 | ERROR | 8672 | 599159986ec28 | 1393172047.882 | test error 3 &quot;
  [5] =&gt;
  string(83) &quot;2014-02-24 00:14:08 | ERROR | 8698 | 5991599981cec | 1393172048.736 | test error 3 &quot;
}

array(2) {
  [0] =&gt;
  string(83) &quot;2014-02-24 00:14:02 | ERROR | 8568 | 599157af4e937 | 1393172042.717 | test error 3 &quot;
  [1] =&gt;
  string(83) &quot;2014-02-24 00:14:04 | ERROR | 8594 | 5991576584446 | 1393172044.104 | test error 3 &quot;
}
</pre></div>
  </div>
 </div>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/seaslog/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fseaslog.examples%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=seaslog.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/seaslog.examples.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.seaslog.php">Seaslog</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.seaslog.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="seaslog.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.seaslog.php" title="Seaslog Functions">Seaslog Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.seaslog.php" title="SeasLog">SeasLog</a>
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
