<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: declare - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/control-structures.declare.php">
 <link rel="shorturl" href="https://www.php.net/declare">
 <link rel="alternate" href="https://www.php.net/declare" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.control-structures.php">
 <link rel="prev" href="https://www.php.net/manual/en/control-structures.match.php">
 <link rel="next" href="https://www.php.net/manual/en/function.return.php">

 <link rel="alternate" href="https://www.php.net/manual/en/control-structures.declare.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/control-structures.declare.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/control-structures.declare.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/control-structures.declare.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/control-structures.declare.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/control-structures.declare.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/control-structures.declare.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/control-structures.declare.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/control-structures.declare.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/control-structures.declare.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/control-structures.declare.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="declare" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: declare - Manual" />
<meta name="twitter:description" content="declare" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: declare - Manual" />
<meta itemprop="description" content="declare" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="declare" />

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
        <a href="function.return.php">
          return &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="control-structures.match.php">
          &laquo; match        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.control-structures.php'>Control Structures</a></li>      </ul>
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
            <option value='en/control-structures.declare.php' selected="selected">English</option>
            <option value='de/control-structures.declare.php'>German</option>
            <option value='es/control-structures.declare.php'>Spanish</option>
            <option value='fr/control-structures.declare.php'>French</option>
            <option value='it/control-structures.declare.php'>Italian</option>
            <option value='ja/control-structures.declare.php'>Japanese</option>
            <option value='pt_BR/control-structures.declare.php'>Brazilian Portuguese</option>
            <option value='ru/control-structures.declare.php'>Russian</option>
            <option value='tr/control-structures.declare.php'>Turkish</option>
            <option value='uk/control-structures.declare.php'>Ukrainian</option>
            <option value='zh/control-structures.declare.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="control-structures.declare" class="sect1">
 <h2 class="title">declare</h2>
 <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p>
 <p class="para">
  The <code class="literal">declare</code> construct is used to
  set execution directives for a block of code.
  The syntax of <code class="literal">declare</code> is similar to
  the syntax of other flow control constructs:
  <div class="informalexample">
   <div class="example-contents">
<div class="cdata"><pre>
declare (directive)
    statement
</pre></div>
   </div>

  </div>
 </p>

 <p class="para">
  The <code class="literal">directive</code> section allows the
  behavior of the <code class="literal">declare</code> block to
  be set.
  Currently only three directives are recognized:
  <ul class="simplelist">
   <li><a href="control-structures.declare.php#control-structures.declare.ticks" class="link"><code class="literal">ticks</code></a></li>
   <li><a href="control-structures.declare.php#control-structures.declare.encoding" class="link"><code class="literal">encoding</code></a></li>
   <li><a href="language.types.declarations.php#language.types.declarations.strict" class="link"><code class="literal">strict_types</code></a></li>
  </ul>
 </p>

 <p class="para">
  As directives are handled as the file is being compiled, only literals may
  be given as directive values. Variables and constants cannot be used. To
  illustrate:
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// This is valid:<br /></span><span style="color: #007700">declare(</span><span style="color: #0000BB">ticks</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// This is invalid:<br /></span><span style="color: #007700">const </span><span style="color: #0000BB">TICK_VALUE </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />declare(</span><span style="color: #0000BB">ticks</span><span style="color: #007700">=</span><span style="color: #0000BB">TICK_VALUE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  The <code class="literal">statement</code> part of the
  <code class="literal">declare</code> block will be executed - how
  it is executed and what side effects occur during execution
  may depend on the directive set in the
  <code class="literal">directive</code> block.
 </p>
 <p class="para">
  The <code class="literal">declare</code> construct can also be used in the global
  scope, affecting all code following it (however if the file with
  <code class="literal">declare</code> was included then it does not affect the parent
  file).
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// these are the same:<br /><br />// you can use this:<br /></span><span style="color: #007700">declare(</span><span style="color: #0000BB">ticks</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// entire script here<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #FF8000">// or you can use this:<br /></span><span style="color: #007700">declare(</span><span style="color: #0000BB">ticks</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// entire script here<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>

 <div class="sect2" id="control-structures.declare.ticks">
  <h3 class="title">Ticks</h3>
  <p class="para">A tick is an event that occurs for every
  <var class="varname">N</var> low-level tickable statements executed
  by the parser within the <code class="literal">declare</code> block.
  The value for <var class="varname">N</var> is specified
  using <code class="code">ticks=<var class="varname">N</var></code>
  within the <code class="literal">declare</code> block&#039;s
  <code class="literal">directive</code> section.
 </p>
 <p class="para">
  Not all statements are tickable. Typically, condition
  expressions and argument expressions are not tickable.
 </p>
 <p class="para">
  The event(s) that occur on each tick are specified using the
  <span class="function"><a href="function.register-tick-function.php" class="function">register_tick_function()</a></span>. See the example
  below for more details. Note that more than one event can occur
  for each tick.
 </p>
 <p class="para">
  <div class="example" id="example-198">
   <p><strong>Example #1 Tick usage example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">declare(</span><span style="color: #0000BB">ticks</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// A function called on each tick event<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">tick_handler</span><span style="color: #007700">()<br />{<br />    echo </span><span style="color: #DD0000">"tick_handler() called\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">register_tick_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'tick_handler'</span><span style="color: #007700">); </span><span style="color: #FF8000">// causes a tick event<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">// causes a tick event<br /><br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$a </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$a </span><span style="color: #007700">+= </span><span style="color: #0000BB">2</span><span style="color: #007700">; </span><span style="color: #FF8000">// causes a tick event<br />    </span><span style="color: #007700">print </span><span style="color: #0000BB">$a</span><span style="color: #007700">; </span><span style="color: #FF8000">// causes a tick event<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="simpara">
  See also <span class="function"><a href="function.register-tick-function.php" class="function">register_tick_function()</a></span> and
  <span class="function"><a href="function.unregister-tick-function.php" class="function">unregister_tick_function()</a></span>.
 </p>
 </div>
 <div class="sect2" id="control-structures.declare.encoding">
  <h3 class="title">Encoding</h3>
  <p class="para">
    A script&#039;s encoding can be specified per-script using the <code class="literal">encoding</code> directive.
  <div class="example" id="example-199">
   <p><strong>Example #2 Declaring an encoding for the script</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">declare(</span><span style="color: #0000BB">encoding</span><span style="color: #007700">=</span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// code here<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <div class="caution"><strong class="caution">Caution</strong>
   <p class="simpara">
    When combined with namespaces, the only legal syntax for declare
    is <code class="literal">declare(encoding=&#039;...&#039;);</code> where <code class="literal">...</code>
    is the encoding value.  <code class="literal">declare(encoding=&#039;...&#039;) {}</code>
    will result in a parse error when combined with namespaces.
   </p>
  </div>
  <p class="para">
   See also <a href="ini.core.php#ini.zend.script-encoding" class="link">zend.script_encoding</a>.
  </p>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/control-structures/declare.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcontrol-structures.declare%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=control-structures.declare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.declare.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100137">  <div class="votes">
    <div id="Vu100137">
    <a href="/manual/vote-note.php?id=100137&amp;page=control-structures.declare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100137">
    <a href="/manual/vote-note.php?id=100137&amp;page=control-structures.declare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100137" title="70% like this...">
    69
    </div>
  </div>
  <a href="#100137" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#100137"> &para;</a><div class="date" title="2010-09-27 02:10"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100137">
<div class="phpcode"><code><span class="html">It's amazing how many people didn't grasp the concept here. Note the wording in the documentation. It states that the tick handler is called every n native execution cycles. That means native instructions, not including system calls (i'm guessing). This can give you a very good idea if you need to optimize a particular part of your script, since you can measure quite effectively how many native instructions are in your actual code.<br /><br />A good profiler would take that into account, and force you, the developer, to include calls to the profiler as you're entering and leaving every function. That way you'd be able to keep an eye on how many cycles it took each function to complete. Independent of time.<br /><br />That is extremely powerful, and not to be underestimated. A good solution would allow aggregate stats, so the total time in a function would be counted, including inside called functions.</span></code></div>
  </div>
 </div>
  <div class="note" id="117039">  <div class="votes">
    <div id="Vu117039">
    <a href="/manual/vote-note.php?id=117039&amp;page=control-structures.declare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117039">
    <a href="/manual/vote-note.php?id=117039&amp;page=control-structures.declare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117039" title="67% like this...">
    21
    </div>
  </div>
  <a href="#117039" class="name">
  <strong class="user"><em>Kubo2</em></strong></a><a class="genanchor" href="#117039"> &para;</a><div class="date" title="2015-04-06 05:13"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117039">
<div class="phpcode"><code><span class="html">Note that in PHP 7 <span class="default">&lt;?php </span><span class="keyword">declare(</span><span class="default">encoding</span><span class="keyword">=</span><span class="string">'...'</span><span class="keyword">); </span><span class="default">?&gt;</span> throws an E_WARNING if Zend Multibyte is turned off.</span></code></div>
  </div>
 </div>
  <div class="note" id="123674">  <div class="votes">
    <div id="Vu123674">
    <a href="/manual/vote-note.php?id=123674&amp;page=control-structures.declare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123674">
    <a href="/manual/vote-note.php?id=123674&amp;page=control-structures.declare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123674" title="69% like this...">
    10
    </div>
  </div>
  <a href="#123674" class="name">
  <strong class="user"><em>digitalaudiorock at gmail dot com</em></strong></a><a class="genanchor" href="#123674"> &para;</a><div class="date" title="2019-03-09 09:14"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123674">
<div class="phpcode"><code><span class="html">A few important things to note for anyone using this in conjunction with signal handlers:<br /><br />If anyone is trying to optionally use either pcntl_async_signals() when available (PHP &gt;= 7.1) or ticks for older versions, this is not possible...at least not in a way that does NOT enable ticks for newer PHP versions. This is because there is simply no way to conditionally declare ticks. For example, the following will "work" but not in the way you might expect:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'pcntl_async_signals'</span><span class="keyword">)) {<br />    </span><span class="default">pcntl_async_signals</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />} else {<br />    declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />While signal handlers will work with this for old and new version, ticks WILL be enabled even in the case where pcntl_async_signals exists, simply because the declare statement exists. So the above is functionally equivalent to:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'pcntl_async_signals'</span><span class="keyword">)) </span><span class="default">pcntl_async_signals</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Another thing to be aware of is that the scoping of this declaration changed a bit from PHP 5.6 to 7.x...actually it was corrected apparently as noted here:<br /><br /><a href="http://php.net/manual/en/function.register-tick-function.php#121204" rel="nofollow" target="_blank">http://php.net/manual/en/function.register-tick-function.php#121204</a><br /><br />This can cause some very confusing behavior. One example is with the pear/System_Daemon module. With PHP 5.6 that will work with a SIGTERM handler even if the script using it doesn't itself use declare(ticks=1), but does not work in PHP 7 unless the script itself has the declaration. Not only does the handler not get called, but the signal does nothing at all, and the script doesn't exit.<br /><br />A side note regarding ticks that's annoyed me for some time: As if there wasn't enough confusion around all this, the Internet is full of false rumors that ticks were deprecated and are being removed, and I believe they all started here:<br /><br /><a href="http://www.hackingwithphp.com/4/21/0/the-declare-function-and-ticks" rel="nofollow" target="_blank">http://www.hackingwithphp.com/4/21/0/the-declare-function-and-ticks</a><br /><br />Despite a very obscure author's note at the very end of the page saying he got that wrong (that even I just noticed), the first very prominent sentence of the article still says this, and that page is near the top of any Google search.</span></code></div>
  </div>
 </div>
  <div class="note" id="112939">  <div class="votes">
    <div id="Vu112939">
    <a href="/manual/vote-note.php?id=112939&amp;page=control-structures.declare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112939">
    <a href="/manual/vote-note.php?id=112939&amp;page=control-structures.declare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112939" title="61% like this...">
    20
    </div>
  </div>
  <a href="#112939" class="name">
  <strong class="user"><em>sawyerrken at gmail dot com</em></strong></a><a class="genanchor" href="#112939"> &para;</a><div class="date" title="2013-08-09 06:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112939">
<div class="phpcode"><code><span class="html">In the following example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">handler</span><span class="keyword">(){<br />    print </span><span class="string">"hello &lt;br /&gt;"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">register_tick_function</span><span class="keyword">(</span><span class="string">"handler"</span><span class="keyword">);<br /><br />declare(</span><span class="default">ticks </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">){<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />} </span><span class="comment">//closing curly bracket tickable<br /></span><span class="default">?&gt;<br /></span><br />"Hello" will be displayed twice because the closing curly bracket is also tickable. <br /><br />One may wonder why the opening curly bracket is not tickable if the closing is tickable. This is because the instruction for PHP to start ticking is given by the opening curly bracket so the ticking starts immediately after it.</span></code></div>
  </div>
 </div>
  <div class="note" id="123676">  <div class="votes">
    <div id="Vu123676">
    <a href="/manual/vote-note.php?id=123676&amp;page=control-structures.declare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123676">
    <a href="/manual/vote-note.php?id=123676&amp;page=control-structures.declare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123676" title="69% like this...">
    5
    </div>
  </div>
  <a href="#123676" class="name">
  <strong class="user"><em>digitalaudiorock at gmail dot com</em></strong></a><a class="genanchor" href="#123676"> &para;</a><div class="date" title="2019-03-10 09:10"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123676">
<div class="phpcode"><code><span class="html">Regarding my previous comment as to the change in scope of declare(ticks=1) between 5.6 and 7.x, I intended to mention another example of the affect this can have on signal handlers:<br /><br />If your script uses declare(ticks=1) and assigns handlers, in 5.6 signals will get caught and call the handler even when the code that is running is in an included file (where the included file doesn't have the declaration). However in 7.x the signal wouldn't get caught until the code returns to the main script.<br /><br />The best solution to that is to use pcntl_async_signals(true) when it's available, which will allow the signals to get caught regardless of what file the code happens to be in.</span></code></div>
  </div>
 </div>
  <div class="note" id="113482">  <div class="votes">
    <div id="Vu113482">
    <a href="/manual/vote-note.php?id=113482&amp;page=control-structures.declare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113482">
    <a href="/manual/vote-note.php?id=113482&amp;page=control-structures.declare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113482" title="64% like this...">
    9
    </div>
  </div>
  <a href="#113482" class="name">
  <strong class="user"><em>php dot net at e-z dot name</em></strong></a><a class="genanchor" href="#113482"> &para;</a><div class="date" title="2013-10-17 06:34"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113482">
<div class="phpcode"><code><span class="html">you can register multiple tick functions:<br /><br /><span class="default">&lt;?PHP<br /></span><span class="keyword">function </span><span class="default">a</span><span class="keyword">() { echo </span><span class="string">"a\n"</span><span class="keyword">; }<br />function </span><span class="default">b</span><span class="keyword">() { echo </span><span class="string">"b\n"</span><span class="keyword">; }<br /><br /></span><span class="default">register_tick_function</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">);<br /></span><span class="default">register_tick_function</span><span class="keyword">(</span><span class="string">'b'</span><span class="keyword">);<br /></span><span class="default">register_tick_function</span><span class="keyword">(</span><span class="string">'b'</span><span class="keyword">);<br /></span><span class="default">register_tick_function</span><span class="keyword">(</span><span class="string">'b'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />will output on every tick:<br />a<br />b<br />b<br />b</span></code></div>
  </div>
 </div>
  <div class="note" id="121570">  <div class="votes">
    <div id="Vu121570">
    <a href="/manual/vote-note.php?id=121570&amp;page=control-structures.declare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121570">
    <a href="/manual/vote-note.php?id=121570&amp;page=control-structures.declare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121570" title="61% like this...">
    7
    </div>
  </div>
  <a href="#121570" class="name">
  <strong class="user"><em>ja2016 at wir dot pl</em></strong></a><a class="genanchor" href="#121570"> &para;</a><div class="date" title="2017-08-27 04:38"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121570">
<div class="phpcode"><code><span class="html">Don't use uft-8 encoding with BOM. Then fatal error occurs ALWAYS. Substitute it with utf-8 without BOM.<br /><br />---<br /><br />*BOM*<br /><span class="default">&lt;?php <br /></span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /></span><span class="comment">//Fatal error: strict_types declaration must be the very first statement in the script</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88929">  <div class="votes">
    <div id="Vu88929">
    <a href="/manual/vote-note.php?id=88929&amp;page=control-structures.declare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88929">
    <a href="/manual/vote-note.php?id=88929&amp;page=control-structures.declare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88929" title="55% like this...">
    5
    </div>
  </div>
  <a href="#88929" class="name">
  <strong class="user"><em>markandrewslade at dontspamemeat dot gmail</em></strong></a><a class="genanchor" href="#88929"> &para;</a><div class="date" title="2009-02-13 09:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88929">
<div class="phpcode"><code><span class="html">Note that the two methods for calling declare are not identical.<br /><br />Method 1:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Print "tick" with a timestamp and optional suffix.<br /></span><span class="keyword">function </span><span class="default">do_tick</span><span class="keyword">(</span><span class="default">$str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">) {<br />    list(</span><span class="default">$sec</span><span class="keyword">, </span><span class="default">$usec</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">microtime</span><span class="keyword">());<br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"[%.4f] Tick.%s\n"</span><span class="keyword">, </span><span class="default">$sec </span><span class="keyword">+ </span><span class="default">$usec</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />}<br /></span><span class="default">register_tick_function</span><span class="keyword">(</span><span class="string">'do_tick'</span><span class="keyword">);<br /><br /></span><span class="comment">// Tick once before declaring so we have a point of reference.<br /></span><span class="default">do_tick</span><span class="keyword">(</span><span class="string">'--start--'</span><span class="keyword">);<br /><br /></span><span class="comment">// Method 1<br /></span><span class="keyword">declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br />while(</span><span class="default">1</span><span class="keyword">) </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="comment">/* Output:<br />[1234544435.7160] Tick.--start--<br />[1234544435.7161] Tick.<br />[1234544435.7162] Tick.<br />[1234544436.7163] Tick.<br />[1234544437.7166] Tick.<br />*/<br /><br /></span><span class="default">?&gt;<br /></span><br />Method 2:<br /><span class="default">&lt;?php<br /></span><span class="comment">// Print "tick" with a timestamp and optional suffix.<br /></span><span class="keyword">function </span><span class="default">do_tick</span><span class="keyword">(</span><span class="default">$str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">) {<br />    list(</span><span class="default">$sec</span><span class="keyword">, </span><span class="default">$usec</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">microtime</span><span class="keyword">());<br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"[%.4f] Tick.%s\n"</span><span class="keyword">, </span><span class="default">$sec </span><span class="keyword">+ </span><span class="default">$usec</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />}<br /></span><span class="default">register_tick_function</span><span class="keyword">(</span><span class="string">'do_tick'</span><span class="keyword">);<br /><br /></span><span class="comment">// Tick once before declaring so we have a point of reference.<br /></span><span class="default">do_tick</span><span class="keyword">(</span><span class="string">'--start--'</span><span class="keyword">);<br /><br /></span><span class="comment">// Method 2<br /></span><span class="keyword">declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">) {<br />    while(</span><span class="default">1</span><span class="keyword">) </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/* Output: <br />[1234544471.6486] Tick.--start--<br />[1234544472.6489] Tick.<br />[1234544473.6490] Tick.<br />[1234544474.6492] Tick.<br />[1234544475.6493] Tick.<br />*/<br /></span><span class="default">?&gt;<br /></span><br />Notice that when using {} after declare, do_tick wasn't auto-called until about 1 second after we entered the declare {} block.  However when not using the {}, do_tick was auto-called not once but twice immediately after calling declare();.<br /><br />I'm assuming this is due to how PHP handles ticking internally.  That is, declare() without the {} seems to trigger more low-level instructions which in turn fires tick a few times (if ticks=1) in the act of declaring.</span></code></div>
  </div>
 </div>
  <div class="note" id="33788">  <div class="votes">
    <div id="Vu33788">
    <a href="/manual/vote-note.php?id=33788&amp;page=control-structures.declare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33788">
    <a href="/manual/vote-note.php?id=33788&amp;page=control-structures.declare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33788" title="55% like this...">
    4
    </div>
  </div>
  <a href="#33788" class="name">
  <strong class="user"><em>fok at nho dot com dot br</em></strong></a><a class="genanchor" href="#33788"> &para;</a><div class="date" title="2003-07-07 06:45"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33788">
<div class="phpcode"><code><span class="html">This is a very simple example using ticks to execute a external script to show rx/tx data from the server<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">traf</span><span class="keyword">(){<br />  </span><span class="default">passthru</span><span class="keyword">( </span><span class="string">'./traf.sh' </span><span class="keyword">);<br />  echo </span><span class="string">"&lt;br /&gt;\n"</span><span class="keyword">;<br />  </span><span class="default">flush</span><span class="keyword">(); </span><span class="comment">// keeps it flowing to the browser...<br />  </span><span class="default">sleep</span><span class="keyword">( </span><span class="default">1 </span><span class="keyword">);<br />}<br /><br /></span><span class="default">register_tick_function</span><span class="keyword">( </span><span class="string">"traf" </span><span class="keyword">);<br /><br />declare( </span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1 </span><span class="keyword">){<br />  while( </span><span class="default">true </span><span class="keyword">){}   </span><span class="comment">// to keep it running...<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;<br /></span><br />contents of traf.sh:<br /># Shows TX/RX for eth0 over 1sec<br />#!/bin/bash<br /><br />TX1=`cat /proc/net/dev | grep "eth0" | cut -d: -f2 | awk '{print $9}'`<br />RX1=`cat /proc/net/dev | grep "eth0" | cut -d: -f2 | awk '{print $1}'`<br />sleep 1<br />TX2=`cat /proc/net/dev | grep "eth0" | cut -d: -f2 | awk '{print $9}'`<br />RX2=`cat /proc/net/dev | grep "eth0" | cut -d: -f2 | awk '{print $1}'`<br /><br />echo -e "TX: $[ $TX2 - $TX1 ] bytes/s \t RX: $[ $RX2 - $RX1 ] bytes/s"<br />#--= the end. =--</span></code></div>
  </div>
 </div>
  <div class="note" id="124553">  <div class="votes">
    <div id="Vu124553">
    <a href="/manual/vote-note.php?id=124553&amp;page=control-structures.declare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124553">
    <a href="/manual/vote-note.php?id=124553&amp;page=control-structures.declare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124553" title="51% like this...">
    1
    </div>
  </div>
  <a href="#124553" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#124553"> &para;</a><div class="date" title="2019-12-30 04:59"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124553">
<div class="phpcode"><code><span class="html">It's possible to set directives at one time if every directive is supported.<br /><span class="default">&lt;?php<br />    </span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">, </span><span class="default">encoding</span><span class="keyword">=</span><span class="string">'UTF-8'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=control-structures.declare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.declare.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.control-structures.php">Control Structures</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="control-structures.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.if.php" title="if">if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.else.php" title="else">else</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.elseif.php" title="elseif/else if">elseif/else if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.alternative-syntax.php" title="Alternative syntax for control structures">Alternative syntax for control structures</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.while.php" title="while">while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.do.while.php" title="do-&#8203;while">do-&#8203;while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.for.php" title="for">for</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.foreach.php" title="foreach">foreach</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.break.php" title="break">break</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.continue.php" title="continue">continue</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.switch.php" title="switch">switch</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.match.php" title="match">match</a>
                        </li>
                                                <li class="current">
                            <a href="control-structures.declare.php" title="declare">declare</a>
                        </li>
                                                <li class="">
                            <a href="function.return.php" title="return">return</a>
                        </li>
                                                <li class="">
                            <a href="function.require.php" title="require">require</a>
                        </li>
                                                <li class="">
                            <a href="function.include.php" title="include">include</a>
                        </li>
                                                <li class="">
                            <a href="function.require-once.php" title="require_&#8203;once">require_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="function.include-once.php" title="include_&#8203;once">include_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.goto.php" title="goto">goto</a>
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
