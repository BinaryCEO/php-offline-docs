<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: New features - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration71.new-features.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration71.new-features.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration71.new-features.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration71.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration71.php">
 <link rel="next" href="https://www.php.net/manual/en/migration71.new-functions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration71.new-features.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration71.new-features.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration71.new-features.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration71.new-features.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration71.new-features.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration71.new-features.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration71.new-features.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration71.new-features.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration71.new-features.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration71.new-features.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration71.new-features.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="New features" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: New features - Manual" />
<meta name="twitter:description" content="New features" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: New features - Manual" />
<meta itemprop="description" content="New features" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="New features" />

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
        <a href="migration71.new-functions.php">
          New functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration71.php">
          &laquo; Migrating from PHP 7.0.x to PHP 7.1.x        </a>
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
            <option value='en/migration71.new-features.php' selected="selected">English</option>
            <option value='de/migration71.new-features.php'>German</option>
            <option value='es/migration71.new-features.php'>Spanish</option>
            <option value='fr/migration71.new-features.php'>French</option>
            <option value='it/migration71.new-features.php'>Italian</option>
            <option value='ja/migration71.new-features.php'>Japanese</option>
            <option value='pt_BR/migration71.new-features.php'>Brazilian Portuguese</option>
            <option value='ru/migration71.new-features.php'>Russian</option>
            <option value='tr/migration71.new-features.php'>Turkish</option>
            <option value='uk/migration71.new-features.php'>Ukrainian</option>
            <option value='zh/migration71.new-features.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration71.new-features" class="sect1">
 <h2 class="title">New features</h2>

 <div class="sect2" id="migration71.new-features.nullable-types">
  <h3 class="title">Nullable types</h3>

  <p class="para">
   Type declarations for parameters and return values can now be marked as
   nullable by prefixing the type name with a question mark. This signifies
   that as well as the specified type, <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> can be passed as an argument, or
   returned as a value, respectively.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">testReturnA</span><span style="color: #007700">(): ?</span><span style="color: #0000BB">string<br /></span><span style="color: #007700">{<br />    return </span><span style="color: #DD0000">'elePHPant'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">testReturnA</span><span style="color: #007700">());<br /><br />function </span><span style="color: #0000BB">testReturnB</span><span style="color: #007700">(): ?</span><span style="color: #0000BB">string<br /></span><span style="color: #007700">{<br />    return </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">testReturnB</span><span style="color: #007700">());<br /><br />function </span><span style="color: #0000BB">test</span><span style="color: #007700">(?</span><span style="color: #0000BB">string $name</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #DD0000">'elePHPant'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">test</span><span style="color: #007700">();</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
string(9) &quot;elePHPant&quot;
NULL
string(9) &quot;elePHPant&quot;
NULL
Fatal error: Uncaught ArgumentCountError: Too few arguments to function test(), 0 passed in...
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration71.new-features.void-functions">
  <h3 class="title">Void functions</h3>

  <p class="para">
   A <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span> return type has been introduced. Functions declared with
   void as their return type must either omit their return statement altogether,
   or use an empty return statement. <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is not a valid return value for a
   void function.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">swap</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$left</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">$right</span><span style="color: #007700">): </span><span style="color: #0000BB">void<br /></span><span style="color: #007700">{<br />    if (</span><span style="color: #0000BB">$left </span><span style="color: #007700">=== </span><span style="color: #0000BB">$right</span><span style="color: #007700">) {<br />        return;<br />    }<br /><br />    </span><span style="color: #0000BB">$tmp </span><span style="color: #007700">= </span><span style="color: #0000BB">$left</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$left </span><span style="color: #007700">= </span><span style="color: #0000BB">$right</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$right </span><span style="color: #007700">= </span><span style="color: #0000BB">$tmp</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">swap</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">), </span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
null
int(2)
int(1)
</pre></div>
   </div>
  </div>

  <p class="para">
   Attempting to use a void function&#039;s return value simply evaluates to
   <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, with no warnings emitted. The reason for this is because warnings
   would implicate the use of generic higher order functions.
  </p>
 </div>

 <div class="sect2" id="migration71.new-features.symmetric-array-destructuring">
  <h3 class="title">Symmetric array destructuring</h3>

  <p class="para">
   The shorthand array syntax (<code class="literal">[]</code>) may now be used to
   destructure arrays for assignments (including within
   <code class="literal">foreach</code>), as an alternative to the existing
   <span class="function"><a href="function.list.php" class="function">list()</a></span> syntax, which is still supported.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$data </span><span style="color: #007700">= [<br />    [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">'Tom'</span><span style="color: #007700">],<br />    [</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">'Fred'</span><span style="color: #007700">],<br />];<br /><br /></span><span style="color: #FF8000">// list() style<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$id1</span><span style="color: #007700">, </span><span style="color: #0000BB">$name1</span><span style="color: #007700">) = </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">// [] style<br /></span><span style="color: #007700">[</span><span style="color: #0000BB">$id1</span><span style="color: #007700">, </span><span style="color: #0000BB">$name1</span><span style="color: #007700">] = </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">// list() style<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$data </span><span style="color: #007700">as list(</span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">)) {<br />    </span><span style="color: #FF8000">// logic here with $id and $name<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #FF8000">// [] style<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$data </span><span style="color: #007700">as [</span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">]) {<br />    </span><span style="color: #FF8000">// logic here with $id and $name<br /></span><span style="color: #007700">}</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration71.new-features.class-constant-visibility">
  <h3 class="title">Class constant visibility</h3>

  <p class="para">
   Support for specifying the visibility of class constants has been added.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">ConstDemo<br /></span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">PUBLIC_CONST_A </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    public const </span><span style="color: #0000BB">PUBLIC_CONST_B </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />    protected const </span><span style="color: #0000BB">PROTECTED_CONST </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br />    private const </span><span style="color: #0000BB">PRIVATE_CONST </span><span style="color: #007700">= </span><span style="color: #0000BB">4</span><span style="color: #007700">;<br />}</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration71.new-features.iterable-pseudo-type">
  <h3 class="title"><span class="type"><a href="language.types.iterable.php" class="type iterable">iterable</a></span> pseudo-type</h3>

  <p class="para">
   A new pseudo-type (similar to <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>) called
   <span class="type"><a href="language.types.iterable.php" class="type iterable">iterable</a></span> has been introduced. It may be used in parameter
   and return types, where it accepts either arrays or objects that implement
   the <span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span> interface. With respect to subtyping,
   parameter types of child classes may broaden a parent&#039;s declaration of <span class="type"><a href="language.types.array.php" class="type array">array</a></span> 
   or <span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span> to <span class="type"><a href="language.types.iterable.php" class="type iterable">iterable</a></span>. With return types,
   child classes may narrow a parent&#039;s return type of <span class="type"><a href="language.types.iterable.php" class="type iterable">iterable</a></span> to
   <span class="type"><a href="language.types.array.php" class="type array">array</a></span> or an object that implements <span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span>.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">iterator</span><span style="color: #007700">(</span><span style="color: #0000BB">iterable $iter</span><span style="color: #007700">)<br />{<br />    foreach (</span><span style="color: #0000BB">$iter </span><span style="color: #007700">as </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        </span><span style="color: #FF8000">//<br />    </span><span style="color: #007700">}<br />}</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration71.new-features.mulit-catch-exception-handling">
  <h3 class="title">Multi catch exception handling</h3>

  <p class="para">
   Multiple exceptions per catch block may now be specified using the pipe
   character (<code class="literal">|</code>). This is useful for when different
   exceptions from different class hierarchies are handled the same.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">try {<br />    </span><span style="color: #FF8000">// some code<br /></span><span style="color: #007700">} catch (</span><span style="color: #0000BB">FirstException </span><span style="color: #007700">| </span><span style="color: #0000BB">SecondException $e</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// handle first and second exceptions<br /></span><span style="color: #007700">}</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration71.new-features.support-for-keys-in-list">
  <h3 class="title">Support for keys in <span class="function"><a href="function.list.php" class="function">list()</a></span></h3>

  <p class="para">
   You can now specify keys in <span class="function"><a href="function.list.php" class="function">list()</a></span>, or its new shorthand
   <code class="literal">[]</code> syntax. This enables destructuring of arrays with
   non-integer or non-sequential keys.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$data </span><span style="color: #007700">= [<br />    [</span><span style="color: #DD0000">"id" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Tom'</span><span style="color: #007700">],<br />    [</span><span style="color: #DD0000">"id" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Fred'</span><span style="color: #007700">],<br />];<br /><br /></span><span style="color: #FF8000">// list() style<br /></span><span style="color: #007700">list(</span><span style="color: #DD0000">"id" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$id1</span><span style="color: #007700">, </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$name1</span><span style="color: #007700">) = </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">// [] style<br /></span><span style="color: #007700">[</span><span style="color: #DD0000">"id" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$id1</span><span style="color: #007700">, </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$name1</span><span style="color: #007700">] = </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">// list() style<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$data </span><span style="color: #007700">as list(</span><span style="color: #DD0000">"id" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$name</span><span style="color: #007700">)) {<br />    </span><span style="color: #FF8000">// logic here with $id and $name<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #FF8000">// [] style<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$data </span><span style="color: #007700">as [</span><span style="color: #DD0000">"id" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$name</span><span style="color: #007700">]) {<br />    </span><span style="color: #FF8000">// logic here with $id and $name<br /></span><span style="color: #007700">}</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration71.new-features.support-for-negative-string-offsets">
  <h3 class="title">Support for negative string offsets</h3>

  <p class="para">
   Support for negative string offsets has been added to the
   <a href="book.strings.php" class="link">string manipulation functions</a>
   accepting offsets, as well as to
   <a href="language.types.string.php#language.types.string.substr" class="link">string indexing</a> with
   <code class="literal">[]</code> or <code class="literal">{}</code>. In such cases, a negative
   offset is interpreted as being an offset from the end of the string.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcdef"</span><span style="color: #007700">[-</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #DD0000">"aabbcc"</span><span style="color: #007700">, </span><span style="color: #DD0000">"b"</span><span style="color: #007700">, -</span><span style="color: #0000BB">3</span><span style="color: #007700">));</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
string (1) &quot;e&quot;
int(3)
</pre></div>
   </div>
  </div>

  <p class="para">
   Negative string and array offsets are now also supported in the simple
   variable parsing syntax inside of strings.
  </p>
  
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"The last character of '</span><span style="color: #0000BB">$string</span><span style="color: #DD0000">' is '</span><span style="color: #0000BB">$string</span><span style="color: #007700">[-</span><span style="color: #0000BB">1</span><span style="color: #007700">]</span><span style="color: #DD0000">'.\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
The last character of &#039;bar&#039; is &#039;r&#039;.
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration71.new-features.support-for-aead-in-ext-openssl">
  <h3 class="title">Support for AEAD in ext/openssl</h3>

  <p class="para">
   Support for AEAD (modes GCM and CCM) have been added by extending the
   <span class="function"><a href="function.openssl-encrypt.php" class="function">openssl_encrypt()</a></span> and
   <span class="function"><a href="function.openssl-decrypt.php" class="function">openssl_decrypt()</a></span> functions with additional parameters.
  </p>
 </div>

 <div class="sect2" id="migration71.new-features.convert-callables-to-closures">
  <h3 class="title">Convert callables to <span class="classname"><a href="class.closure.php" class="classname">Closure</a></span>s with <span class="methodname"><a href="closure.fromcallable.php" class="methodname">Closure::fromCallable()</a></span></h3>

  <p class="para">
   A new static method has been introduced to the <span class="classname"><a href="class.closure.php" class="classname">Closure</a></span>
   class to allow for <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>s to be easily converted into
   <span class="classname"><a href="class.closure.php" class="classname">Closure</a></span> objects.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">exposeFunction</span><span style="color: #007700">()<br />    {<br />        return </span><span style="color: #0000BB">Closure</span><span style="color: #007700">::</span><span style="color: #0000BB">fromCallable</span><span style="color: #007700">([</span><span style="color: #0000BB">$this</span><span style="color: #007700">, </span><span style="color: #DD0000">'privateFunction'</span><span style="color: #007700">]);<br />    }<br /><br />    private function </span><span style="color: #0000BB">privateFunction</span><span style="color: #007700">(</span><span style="color: #0000BB">$param</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$param</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$privFunc </span><span style="color: #007700">= (new </span><span style="color: #0000BB">Test</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">exposeFunction</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$privFunc</span><span style="color: #007700">(</span><span style="color: #DD0000">'some value'</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
string(10) &quot;some value&quot;
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration71.new-features.asynchronous-signal-handling">
  <h3 class="title">Asynchronous signal handling</h3>

  <p class="para">
   A new function called <span class="function"><a href="function.pcntl-async-signals.php" class="function">pcntl_async_signals()</a></span> has been
   introduced to enable asynchronous signal handling without using ticks (which
   introduce a lot of overhead).
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />pcntl_async_signals</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">); </span><span style="color: #FF8000">// turn on async signals<br /><br /></span><span style="color: #0000BB">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #0000BB">SIGHUP</span><span style="color: #007700">,  function(</span><span style="color: #0000BB">$sig</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"SIGHUP\n"</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #0000BB">posix_kill</span><span style="color: #007700">(</span><span style="color: #0000BB">posix_getpid</span><span style="color: #007700">(), </span><span style="color: #0000BB">SIGHUP</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
SIGHUP
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration71.new-features.http2-server-push-support-in-ext-curl">
  <h3 class="title">HTTP/2 server push support in ext/curl</h3>

  <p class="para">
   Support for server push has been added to the CURL extension (requires
   version 7.46 and above). This can be leveraged through the
   <span class="function"><a href="function.curl-multi-setopt.php" class="function">curl_multi_setopt()</a></span> function with the new
   <strong><code><a href="curl.constants.php#constant.curlmopt-pushfunction">CURLMOPT_PUSHFUNCTION</a></code></strong> constant. The constants
   <strong><code><a href="curl.constants.php#constant.curl-push-ok">CURL_PUSH_OK</a></code></strong> and <strong><code><a href="curl.constants.php#constant.curl-push-deny">CURL_PUSH_DENY</a></code></strong> have also been
   added so that the execution of the server push callback can either be
   approved or denied.
  </p>
 </div>

 <div class="sect2" id="migration71.new-features.stream-context-options">
  <h3 class="title">Stream Context Options</h3>

  <p class="para">
   The <a href="context.socket.php#context.socket.tcp_nodelay" class="link">tcp_nodelay</a> stream
   context option has been added.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration71/new-features.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration71.new-features%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration71.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration71.new-features.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122606">  <div class="votes">
    <div id="Vu122606">
    <a href="/manual/vote-note.php?id=122606&amp;page=migration71.new-features&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122606">
    <a href="/manual/vote-note.php?id=122606&amp;page=migration71.new-features&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122606" title="80% like this...">
    78
    </div>
  </div>
  <a href="#122606" class="name">
  <strong class="user"><em>DYM</em></strong></a><a class="genanchor" href="#122606"> &para;</a><div class="date" title="2018-04-09 10:36"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122606">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">swap</span><span class="keyword">( &amp;</span><span class="default">$a</span><span class="keyword">, &amp;</span><span class="default">$b </span><span class="keyword">): </span><span class="default">void<br />  </span><span class="keyword">{ [ </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">] = [ </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a </span><span class="keyword">]; }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122592">  <div class="votes">
    <div id="Vu122592">
    <a href="/manual/vote-note.php?id=122592&amp;page=migration71.new-features&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122592">
    <a href="/manual/vote-note.php?id=122592&amp;page=migration71.new-features&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122592" title="66% like this...">
    28
    </div>
  </div>
  <a href="#122592" class="name">
  <strong class="user"><em>unti1x</em></strong></a><a class="genanchor" href="#122592"> &para;</a><div class="date" title="2018-04-06 11:20"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122592">
<div class="phpcode"><code><span class="html">Note that declaring nullable return type does not mean that you can skip return statement at all. For example:<br /><br />php &gt; function a(): ?string { }<br />php &gt; a();<br />PHP Warning:  Uncaught TypeError: Return value of a() must be of the type string or null, none returned in php shell code:2<br /><br />php &gt; function b(): ?string { return; }<br />PHP Fatal error:  A function with return type must return a value (did you mean "return null;" instead of "return;"?) in php shell code on line 2</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration71.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration71.new-features.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration71.php">Migrating from PHP 7.0.x to PHP 7.1.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="migration71.new-features.php" title="New features">New features</a>
                        </li>
                                                <li class="">
                            <a href="migration71.new-functions.php" title="New functions">New functions</a>
                        </li>
                                                <li class="">
                            <a href="migration71.constants.php" title="New global constants">New global constants</a>
                        </li>
                                                <li class="">
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
