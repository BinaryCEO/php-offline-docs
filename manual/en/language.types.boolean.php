<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Booleans - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.types.boolean.php">
 <link rel="shorturl" href="https://www.php.net/types.boolean">
 <link rel="alternate" href="https://www.php.net/types.boolean" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.types.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.types.null.php">
 <link rel="next" href="https://www.php.net/manual/en/language.types.integer.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.types.boolean.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.types.boolean.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.types.boolean.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.types.boolean.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.types.boolean.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.types.boolean.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.types.boolean.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.types.boolean.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.types.boolean.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.types.boolean.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.types.boolean.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Booleans" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Booleans - Manual" />
<meta name="twitter:description" content="Booleans" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Booleans - Manual" />
<meta itemprop="description" content="Booleans" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Booleans" />

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
        <a href="language.types.integer.php">
          Integers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.types.null.php">
          &laquo; NULL        </a>
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
            <option value='en/language.types.boolean.php' selected="selected">English</option>
            <option value='de/language.types.boolean.php'>German</option>
            <option value='es/language.types.boolean.php'>Spanish</option>
            <option value='fr/language.types.boolean.php'>French</option>
            <option value='it/language.types.boolean.php'>Italian</option>
            <option value='ja/language.types.boolean.php'>Japanese</option>
            <option value='pt_BR/language.types.boolean.php'>Brazilian Portuguese</option>
            <option value='ru/language.types.boolean.php'>Russian</option>
            <option value='tr/language.types.boolean.php'>Turkish</option>
            <option value='uk/language.types.boolean.php'>Ukrainian</option>
            <option value='zh/language.types.boolean.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.types.boolean" class="sect1">
 <h2 class="title">Booleans</h2>

 <p class="simpara">
  The <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> type only has two values, and is used to express
  a truth value. It can be either <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
 </p>

 <div class="sect2" id="language.types.boolean.syntax">
  <h3 class="title">Syntax</h3>
  <p class="para">
   To specify a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> literal, use the constants <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> or
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Both are case-insensitive.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$foo </span><span style="color: #007700">= </span><span style="color: #0000BB">True</span><span style="color: #007700">; </span><span style="color: #FF8000">// assign the value TRUE to $foo<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <p class="para">
   Typically, the result of an <a href="language.operators.php" class="link">operator</a>
   which returns a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> value is passed on to a
   <a href="language.control-structures.php" class="link">control structure</a>.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// == is an operator which tests<br />// equality and returns a boolean<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$action </span><span style="color: #007700">== </span><span style="color: #DD0000">"show_version"</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"The version is 1.23"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// this is not necessary...<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$show_separators </span><span style="color: #007700">== </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"&lt;hr&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// ...because this can be used with exactly the same meaning:<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$show_separators</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"&lt;hr&gt;\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="language.types.boolean.casting">
  <h3 class="title">Converting to boolean</h3>

  <p class="simpara">
   To explicitly convert a value to <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, use the
   <code class="literal">(bool)</code> cast. Generally this is not necessary because when
   a value is used in a logical context it will be automatically interpreted
   as a value of type <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>. For more information see the
   <a href="language.types.type-juggling.php" class="link">Type Juggling</a> page.
  </p>

  <p class="para">
   When converting to <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, the following values are considered
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     the <a href="language.types.boolean.php" class="link">boolean</a> <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> itself
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     the <a href="language.types.integer.php" class="link">integer</a>
     <code class="literal">0</code> (zero)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     the <a href="language.types.float.php" class="link">float</a>s
     <code class="literal">0.0</code> and <code class="literal">-0.0</code> (zero)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     the empty <a href="language.types.string.php" class="link">string</a> <code class="literal">&quot;&quot;</code>,
     and the <a href="language.types.string.php" class="link">string</a> <code class="literal">&quot;0&quot;</code>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     an <a href="language.types.array.php" class="link">array</a> with zero elements
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     the unit type <a href="language.types.null.php" class="link">NULL</a> (including
     unset variables)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Internal objects that overload their casting behaviour to bool.
     For example: <a href="ref.simplexml.php" class="link">SimpleXML</a> objects
     created from empty elements without attributes.
    </span>
   </li>
  </ul>

  <p class="para">
   Every other value is considered <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
   (including <a href="language.types.resource.php" class="link">resource</a>
   and <strong><code><a href="math.constants.php#constant.nan">NAN</a></code></strong>).
  </p>

  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    <code class="literal">-1</code> is considered <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, like any other non-zero
    (whether negative or positive) number!
   </p>
  </div>

  <div class="example" id="example-45">
   <p><strong>Example #1 Casting to Boolean</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">((bool) </span><span style="color: #DD0000">""</span><span style="color: #007700">);        </span><span style="color: #FF8000">// bool(false)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">((bool) </span><span style="color: #DD0000">"0"</span><span style="color: #007700">);       </span><span style="color: #FF8000">// bool(false)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">((bool) </span><span style="color: #0000BB">1</span><span style="color: #007700">);         </span><span style="color: #FF8000">// bool(true)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">((bool) -</span><span style="color: #0000BB">2</span><span style="color: #007700">);        </span><span style="color: #FF8000">// bool(true)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">((bool) </span><span style="color: #DD0000">"foo"</span><span style="color: #007700">);     </span><span style="color: #FF8000">// bool(true)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">((bool) </span><span style="color: #0000BB">2.3e5</span><span style="color: #007700">);     </span><span style="color: #FF8000">// bool(true)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">((bool) array(</span><span style="color: #0000BB">12</span><span style="color: #007700">)); </span><span style="color: #FF8000">// bool(true)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">((bool) array());   </span><span style="color: #FF8000">// bool(false)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">((bool) </span><span style="color: #DD0000">"false"</span><span style="color: #007700">);   </span><span style="color: #FF8000">// bool(true)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/language/types/boolean.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.types.boolean%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.types.boolean&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.boolean.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112190">  <div class="votes">
    <div id="Vu112190">
    <a href="/manual/vote-note.php?id=112190&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112190">
    <a href="/manual/vote-note.php?id=112190&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112190" title="77% like this...">
    1002
    </div>
  </div>
  <a href="#112190" class="name">
  <strong class="user"><em>Fred Koschara</em></strong></a><a class="genanchor" href="#112190"> &para;</a><div class="date" title="2013-05-15 05:38"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112190">
<div class="phpcode"><code><span class="html">Ah, yes, booleans - bit values that are either set (TRUE) or not set (FALSE).  Now that we have 64 bit compilers using an int variable for booleans, there is *one* value which is FALSE (zero) and 2**64-1 values that are TRUE (everything else).  It appears there's a lot more truth in this universe, but false can trump anything that's true...<br /><br />PHP's handling of strings as booleans is *almost* correct - an empty string is FALSE, and a non-empty string is TRUE - with one exception:  A string containing a single zero is considered FALSE.  Why?  If *any* non-empty strings are going to be considered FALSE, why *only* a single zero?  Why not "FALSE" (preferably case insensitive), or "0.0" (with how many decimal places), or "NO" (again, case insensitive), or ... ?<br /><br />The *correct* design would have been that *any* non-empty string is TRUE - period, end of story.  Instead, there's another GOTCHA for the less-than-completely-experienced programmer to watch out for, and fixing the language's design error at this late date would undoubtedly break so many things that the correction is completely out of the question.<br /><br />Speaking of GOTCHAs, consider this code sequence:<br /><span class="default">&lt;?php<br />$x</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">;<br /></span><span class="default">$y</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">;<br /></span><span class="default">$z</span><span class="keyword">=</span><span class="default">$y </span><span class="keyword">OR </span><span class="default">$x</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Is $z TRUE or FALSE?<br /><br />In this case, $z will be FALSE because the above code is equivalent to <span class="default">&lt;?php </span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">=</span><span class="default">$y</span><span class="keyword">) OR </span><span class="default">$x ?&gt;</span> rather than <span class="default">&lt;?php $z</span><span class="keyword">=(</span><span class="default">$y </span><span class="keyword">OR </span><span class="default">$x</span><span class="keyword">) </span><span class="default">?&gt;</span> as might be expected - because the OR operator has lower precedence than assignment operators.<br /><br />On the other hand, after this code sequence:<br /><span class="default">&lt;?php<br />$x</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">;<br /></span><span class="default">$y</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">;<br /></span><span class="default">$z</span><span class="keyword">=</span><span class="default">$y </span><span class="keyword">|| </span><span class="default">$x</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />$z will be TRUE, as expected, because the || operator has higher precedence than assignment:  The code is equivalent to $z=($y OR $x).<br /><br />This is why you should NEVER use the OR operator without explicit parentheses around the expression where it is being used.</span></code></div>
  </div>
 </div>
  <div class="note" id="121143">  <div class="votes">
    <div id="Vu121143">
    <a href="/manual/vote-note.php?id=121143&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121143">
    <a href="/manual/vote-note.php?id=121143&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121143" title="70% like this...">
    180
    </div>
  </div>
  <a href="#121143" class="name">
  <strong class="user"><em>Mark Simon</em></strong></a><a class="genanchor" href="#121143"> &para;</a><div class="date" title="2017-05-28 02:19"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121143">
<div class="phpcode"><code><span class="html">Note for JavaScript developers:<br /><br />In PHP, an empty array evaluates to false, while in JavaScript an empty array evaluates to true.<br /><br />In PHP, you can test an empty array as <span class="default">&lt;?php </span><span class="keyword">if(!</span><span class="default">$stuff</span><span class="keyword">) </span><span class="default">…</span><span class="keyword">; </span><span class="default">?&gt;</span> which won’t work in JavaScript where you need to test the array length.<br /><br />This is because in JavaScript, an array is an object, and, while it may not have any elements, it is still regarded as something.<br /><br />Just a trap for young players who routinely work in both langauges.</span></code></div>
  </div>
 </div>
  <div class="note" id="119799">  <div class="votes">
    <div id="Vu119799">
    <a href="/manual/vote-note.php?id=119799&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119799">
    <a href="/manual/vote-note.php?id=119799&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119799" title="63% like this...">
    98
    </div>
  </div>
  <a href="#119799" class="name">
  <strong class="user"><em>goran77 at fastmail dot fm</em></strong></a><a class="genanchor" href="#119799"> &para;</a><div class="date" title="2016-08-29 06:48"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119799">
<div class="phpcode"><code><span class="html">Just something that will probably save time for many new developers: beware of interpreting FALSE and TRUE as integers. <br />For example, a small function for deleting elements of an array may give unexpected results if you are not fully aware of what happens: <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">remove_element</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">)<br />{<br />   </span><span class="comment">//array_search returns index of element, and FALSE if nothing is found<br />   </span><span class="default">$index </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">);<br />   unset (</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />   return </span><span class="default">$array</span><span class="keyword">; <br />}<br /><br /></span><span class="comment">// this will remove element 'A'<br /></span><span class="default">$array </span><span class="keyword">= [</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'B'</span><span class="keyword">, </span><span class="string">'C'</span><span class="keyword">];<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">remove_element</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">);<br /><br /></span><span class="comment">//but any non-existent element will also remove 'A'!<br /></span><span class="default">$array </span><span class="keyword">= [</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'B'</span><span class="keyword">, </span><span class="string">'C'</span><span class="keyword">];<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">remove_element</span><span class="keyword">(</span><span class="string">'X'</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The problem here is, although array_search returns boolean false when it doesn't find specific element, it is interpreted as zero when used as array index.<br /><br />So you have to explicitly check for FALSE, otherwise you'll probably loose some elements:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//correct<br /></span><span class="keyword">function </span><span class="default">remove_element</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">)<br />{<br />   </span><span class="default">$index </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">);<br />   if (</span><span class="default">$index </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">) <br />   {<br />       unset (</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />   }<br />   return </span><span class="default">$array</span><span class="keyword">; <br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74827">  <div class="votes">
    <div id="Vu74827">
    <a href="/manual/vote-note.php?id=74827&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74827">
    <a href="/manual/vote-note.php?id=74827&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74827" title="59% like this...">
    56
    </div>
  </div>
  <a href="#74827" class="name">
  <strong class="user"><em>terminatorul at gmail dot com</em></strong></a><a class="genanchor" href="#74827"> &para;</a><div class="date" title="2007-04-29 02:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74827">
<div class="phpcode"><code><span class="html">Beware that "0.00" converts to boolean TRUE !<br /><br />You may get such a string from your database, if you have columns of type DECIMAL or CURRENCY. In such cases you have to explicitly check if the value is != 0 or to explicitly convert the value to int also, not only to boolean.</span></code></div>
  </div>
 </div>
  <div class="note" id="121144">  <div class="votes">
    <div id="Vu121144">
    <a href="/manual/vote-note.php?id=121144&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121144">
    <a href="/manual/vote-note.php?id=121144&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121144" title="57% like this...">
    23
    </div>
  </div>
  <a href="#121144" class="name">
  <strong class="user"><em>Mark Simon</em></strong></a><a class="genanchor" href="#121144"> &para;</a><div class="date" title="2017-05-28 02:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121144">
<div class="phpcode"><code><span class="html">Note on the OR operator.<br /><br />A previous comment notes the trap you can fall into with this operator. This is about its usefulness.<br /><br />Both OR and || are short-circuited operators, which means they will stop evaluating once they reach a TRUE value. By design, OR is evaluated after assignment (while || is evaluated before assignment).<br /><br />This has the benefit of allowing some simple constructions such as:<br /><br /><span class="default">&lt;?php<br />    $stuff</span><span class="keyword">=</span><span class="default">getStuff</span><span class="keyword">() or die(</span><span class="string">'oops'</span><span class="keyword">);<br />    </span><span class="default">$thing</span><span class="keyword">=</span><span class="default">something</span><span class="keyword">() or </span><span class="default">$thing</span><span class="keyword">=</span><span class="default">whatever</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />The first example, often seen in PERL, could have been written as <span class="default">&lt;?php </span><span class="keyword">if(!</span><span class="default">$stuff</span><span class="keyword">=</span><span class="default">getStuff</span><span class="keyword">()) die(</span><span class="string">'oops'</span><span class="keyword">); </span><span class="default">?&gt;</span> but reads a little more naturally. I have often used it in situations where null or false indicate failure.<br /><br />The second allows for an alternative value if a falsy one is regarded as insufficient. The following example<br /><br /><span class="default">&lt;?php<br />    $page</span><span class="keyword">=@</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'page'</span><span class="keyword">] or </span><span class="default">$page</span><span class="keyword">=@</span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="string">'page'</span><span class="keyword">] or </span><span class="default">$page</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />is a simple way sequencing alternative values. (Note the usual warnings about using the @ operator or accepting unfiltered input …)<br /><br />All this presupposes that 0 is also an unacceptable value in the situation.</span></code></div>
  </div>
 </div>
  <div class="note" id="80433">  <div class="votes">
    <div id="Vu80433">
    <a href="/manual/vote-note.php?id=80433&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80433">
    <a href="/manual/vote-note.php?id=80433&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80433" title="57% like this...">
    45
    </div>
  </div>
  <a href="#80433" class="name">
  <strong class="user"><em>Steve</em></strong></a><a class="genanchor" href="#80433"> &para;</a><div class="date" title="2008-01-15 03:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80433">
<div class="phpcode"><code><span class="html">PHP does not break any rules with the values of true and false.  The value false is not a constant for the number 0, it is a boolean value that indicates false.  The value true is also not a constant for 1, it is a special boolean value that indicates true.  It just happens to cast to integer 1 when you print it or use it in an expression, but it's not the same as a constant for the integer value 1 and you shouldn't use it as one.  Notice what it says at the top of the page:<br /><br />A boolean expresses a truth value.<br /><br />It does not say "a boolean expresses a 0 or 1".<br /><br />It's true that symbolic constants are specifically designed to always and only reference their constant value.  But booleans are not symbolic constants, they are values.  If you're trying to add 2 boolean values you might have other problems in your application.</span></code></div>
  </div>
 </div>
  <div class="note" id="126107">  <div class="votes">
    <div id="Vu126107">
    <a href="/manual/vote-note.php?id=126107&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126107">
    <a href="/manual/vote-note.php?id=126107&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126107" title="56% like this...">
    8
    </div>
  </div>
  <a href="#126107" class="name">
  <strong class="user"><em>asma dot gi dot 14 at gmail dot com</em></strong></a><a class="genanchor" href="#126107"> &para;</a><div class="date" title="2021-05-25 05:33"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126107">
<div class="phpcode"><code><span class="html">when using echo false; or print false; the display will be empty but when using echo 0; or print 0; the display will be 0.</span></code></div>
  </div>
 </div>
  <div class="note" id="80648">  <div class="votes">
    <div id="Vu80648">
    <a href="/manual/vote-note.php?id=80648&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80648">
    <a href="/manual/vote-note.php?id=80648&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80648" title="55% like this...">
    36
    </div>
  </div>
  <a href="#80648" class="name">
  <strong class="user"><em>Wackzingo</em></strong></a><a class="genanchor" href="#80648"> &para;</a><div class="date" title="2008-01-27 06:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80648">
<div class="phpcode"><code><span class="html">It is correct that TRUE or FALSE should not be used as constants for the numbers 0 and 1. But there may be times when it might be helpful to see the value of the Boolean as a 1 or 0. Here's how to do it.
<br />
<br /><span class="default">&lt;?php
<br />$var1 </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;
<br /></span><span class="default">$var2 </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;
<br />
<br />echo </span><span class="default">$var1</span><span class="keyword">; </span><span class="comment">// Will display the number 1
<br />
<br /></span><span class="keyword">echo </span><span class="default">$var2</span><span class="keyword">; </span><span class="comment">//Will display nothing
<br />
<br />/* To get it to display the number 0 for
<br />a false value you have to typecast it: */
<br />
<br /></span><span class="keyword">echo (int)</span><span class="default">$var2</span><span class="keyword">; </span><span class="comment">//This will display the number 0 for false.
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126106">  <div class="votes">
    <div id="Vu126106">
    <a href="/manual/vote-note.php?id=126106&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126106">
    <a href="/manual/vote-note.php?id=126106&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126106" title="52% like this...">
    6
    </div>
  </div>
  <a href="#126106" class="name">
  <strong class="user"><em>asma dot gi dot 14 at gmail dot com</em></strong></a><a class="genanchor" href="#126106"> &para;</a><div class="date" title="2021-05-25 05:26"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126106">
<div class="phpcode"><code><span class="html">Please keep in mind that the result of  0 == 'whatever'  is true in PHP Version 7 and false in PHP version 8.</span></code></div>
  </div>
 </div>
  <div class="note" id="78099">  <div class="votes">
    <div id="Vu78099">
    <a href="/manual/vote-note.php?id=78099&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78099">
    <a href="/manual/vote-note.php?id=78099&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78099" title="54% like this...">
    26
    </div>
  </div>
  <a href="#78099" class="name">
  <strong class="user"><em>artktec at gmail dot com</em></strong></a><a class="genanchor" href="#78099"> &para;</a><div class="date" title="2007-09-27 09:37"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78099">
<div class="phpcode"><code><span class="html">Note you can also use the '!' to convert a number to a boolean, as if it was an explicit (bool) cast then NOT.<br /><br />So you can do something like:<br /><br /><span class="default">&lt;?php<br />$t </span><span class="keyword">= !</span><span class="default">0</span><span class="keyword">; </span><span class="comment">// This will === true;<br /></span><span class="default">$f </span><span class="keyword">= !</span><span class="default">1</span><span class="keyword">; </span><span class="comment">// This will === false;<br /></span><span class="default">?&gt;<br /></span><br />And non-integers are casted as if to bool, then NOT.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= !array();      </span><span class="comment">// This will === true;<br /></span><span class="default">$a </span><span class="keyword">= !array(</span><span class="string">'a'</span><span class="keyword">);   </span><span class="comment">// This will === false;<br /></span><span class="default">$s </span><span class="keyword">= !</span><span class="string">""</span><span class="keyword">;           </span><span class="comment">// This will === true;<br /></span><span class="default">$s </span><span class="keyword">= !</span><span class="string">"hello"</span><span class="keyword">;      </span><span class="comment">// This will === false;<br /></span><span class="default">?&gt;<br /></span><br />To cast as if using a (bool) you can NOT the NOT with "!!" (double '!'), then you are casting to the correct (bool).<br /><br />Example:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= !!array();   </span><span class="comment">// This will === false; (as expected)<br />/* <br />This can be a substitute for count($array) &gt; 0 or !(empty($array)) to check to see if an array is empty or not  (you would use: !!$array).<br />*/<br /><br /></span><span class="default">$status </span><span class="keyword">= (!!</span><span class="default">$array </span><span class="keyword">? </span><span class="string">'complete' </span><span class="keyword">: </span><span class="string">'incomplete'</span><span class="keyword">);<br /><br /></span><span class="default">$s </span><span class="keyword">= !!</span><span class="string">"testing"</span><span class="keyword">; </span><span class="comment">// This will === true; (as expected)<br />/* <br />Note: normal casting rules apply so a !!"0" would evaluate to an === false<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129268">  <div class="votes">
    <div id="Vu129268">
    <a href="/manual/vote-note.php?id=129268&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129268">
    <a href="/manual/vote-note.php?id=129268&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129268" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129268" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#129268"> &para;</a><div class="date" title="2024-02-21 11:32"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129268">
<div class="phpcode"><code><span class="html">Note the imperfectness of php and booleans when dealing with SQL strings. A 'boolean' included in a string to send to MySQL for example, evaluates to a n empty string with the result that:<br /><br />$TF  = false;<br />$SQL = "INSERT INTO ... (...., booleanTF) VALUES (...., $TF)" <br /><br />will generate a mysql error "You have an error ... near '(....,)"</span></code></div>
  </div>
 </div>
  <div class="note" id="118181">  <div class="votes">
    <div id="Vu118181">
    <a href="/manual/vote-note.php?id=118181&amp;page=language.types.boolean&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118181">
    <a href="/manual/vote-note.php?id=118181&amp;page=language.types.boolean&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118181" title="50% like this...">
    1
    </div>
  </div>
  <a href="#118181" class="name">
  <strong class="user"><em>marklgr</em></strong></a><a class="genanchor" href="#118181"> &para;</a><div class="date" title="2015-10-21 02:22"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118181">
<div class="phpcode"><code><span class="html">For those wondering why the string "0" is falsy, consider that a good deal of input data is actually string-typed, even when it is semantically numeral.<br /><br />PHP often tries to autoconvert these strings to numeral, as the programmer certainly intended (try 'echo "2"+3'). Consequently, PHP designers decided to treat 0 and "0" similarly, ie. falsy, for consistency and to avoid bugs where the programmer believes he got a true numeral that would happen to be truthy when zero.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.types.boolean&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.boolean.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="language.types.boolean.php" title="Booleans">Booleans</a>
                        </li>
                                                <li class="">
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
