<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Error Control - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.operators.errorcontrol.php">
 <link rel="shorturl" href="https://www.php.net/operators.errorcontrol">
 <link rel="alternate" href="https://www.php.net/operators.errorcontrol" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.operators.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.operators.comparison.php">
 <link rel="next" href="https://www.php.net/manual/en/language.operators.execution.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.operators.errorcontrol.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.operators.errorcontrol.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.operators.errorcontrol.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.operators.errorcontrol.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.operators.errorcontrol.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.operators.errorcontrol.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.operators.errorcontrol.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.operators.errorcontrol.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.operators.errorcontrol.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.operators.errorcontrol.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.operators.errorcontrol.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Error Control Operators" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Error Control - Manual" />
<meta name="twitter:description" content="Error Control Operators" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Error Control - Manual" />
<meta itemprop="description" content="Error Control Operators" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Error Control Operators" />

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
        <a href="language.operators.execution.php">
          Execution &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.operators.comparison.php">
          &laquo; Comparison        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.operators.php'>Operators</a></li>      </ul>
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
            <option value='en/language.operators.errorcontrol.php' selected="selected">English</option>
            <option value='de/language.operators.errorcontrol.php'>German</option>
            <option value='es/language.operators.errorcontrol.php'>Spanish</option>
            <option value='fr/language.operators.errorcontrol.php'>French</option>
            <option value='it/language.operators.errorcontrol.php'>Italian</option>
            <option value='ja/language.operators.errorcontrol.php'>Japanese</option>
            <option value='pt_BR/language.operators.errorcontrol.php'>Brazilian Portuguese</option>
            <option value='ru/language.operators.errorcontrol.php'>Russian</option>
            <option value='tr/language.operators.errorcontrol.php'>Turkish</option>
            <option value='uk/language.operators.errorcontrol.php'>Ukrainian</option>
            <option value='zh/language.operators.errorcontrol.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.operators.errorcontrol" class="sect1">
 <h2 class="title">Error Control Operators</h2>
 
 <p class="simpara">
  PHP supports one error control operator: the at sign (<code class="literal">@</code>).
  When prepended to an expression in PHP, any diagnostic error that might
  be generated by that expression will be suppressed.
 </p>
 <p class="para">
  If a custom error handler function is set with
  <span class="function"><a href="function.set-error-handler.php" class="function">set_error_handler()</a></span>, it will still be called even though
  the diagnostic has been suppressed.
 </p>

 <div class="warning"><strong class="warning">Warning</strong>
  <p class="para">
   Prior to PHP 8.0.0, the <span class="function"><a href="function.error-reporting.php" class="function">error_reporting()</a></span> called inside the custom error handler
   always returned <code class="literal">0</code> if the error was suppressed by the <code class="literal">@</code> operator.
   As of PHP 8.0.0, it returns the value of this (bitwise) expression:
   <code class="literal">E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR | E_PARSE</code>.
  </p>
 </div>

 <p class="simpara">
  Any error message generated by the expression is available in the <code class="literal">&quot;message&quot;</code>
  element of the array returned by <span class="function"><a href="function.error-get-last.php" class="function">error_get_last()</a></span>.
  The result of that function will change on each error, so it needs to be checked early.
 </p>
 <p class="para">
  <div class="example" id="example-174">
   <p><strong>Example #1 Intentional file error</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$my_file </span><span style="color: #007700">= @</span><span style="color: #0000BB">file </span><span style="color: #007700">(</span><span style="color: #DD0000">'non_existent_file'</span><span style="color: #007700">) or<br />    die (</span><span style="color: #DD0000">"Failed opening file: error was '" </span><span style="color: #007700">. </span><span style="color: #0000BB">error_get_last</span><span style="color: #007700">()[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"'"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-175">
   <p><strong>Example #2 Suppressing Expressions</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// this works for any expression, not just functions:<br /></span><span style="color: #0000BB">$value </span><span style="color: #007700">= @</span><span style="color: #0000BB">$cache</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br /></span><span style="color: #FF8000">// will not issue a notice if the index $key doesn't exist.<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   The <code class="literal">@</code>-operator works only on
   <a href="language.expressions.php" class="link">expressions</a>.
   A simple rule of thumb is: if one can take the value of something,
   then one can prepend the <code class="literal">@</code> operator to it.
   For instance, it can be prepended to variables, functions calls,
   certain language construct calls (e.g. <span class="function"><a href="function.include.php" class="function">include</a></span>),
   and so forth.
   It cannot be prepended to function or class definitions,
   or conditional structures such as <code class="literal">if</code> and
   <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a>, and so forth.
  </span>
 </p></blockquote>
 <div class="warning"><strong class="warning">Warning</strong>
  <p class="para">
   Prior to PHP 8.0.0, it was possible for the <code class="literal">@</code> operator
   to disable critical errors that will terminate script execution.
   For example, prepending <code class="literal">@</code> to a call of a function
   which did not exist, by being unavailable or mistyped, would cause
   the script to terminate with no indication as to why.
  </p>
 </div>

 <div class="sect2">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.error-reporting.php" class="function">error_reporting()</a></span></li>
    <li><a href="ref.errorfunc.php" class="link">Error Handling and Logging functions</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/operators/errorcontrol.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.operators.errorcontrol%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.operators.errorcontrol&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.errorcontrol.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="85042">  <div class="votes">
    <div id="Vu85042">
    <a href="/manual/vote-note.php?id=85042&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85042">
    <a href="/manual/vote-note.php?id=85042&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85042" title="81% like this...">
    244
    </div>
  </div>
  <a href="#85042" class="name">
  <strong class="user"><em>taras dot dot dot di at gmail dot com</em></strong></a><a class="genanchor" href="#85042"> &para;</a><div class="date" title="2008-08-12 08:29"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85042">
<div class="phpcode"><code><span class="html">I was confused as to what the @ symbol actually does, and after a few experiments have concluded the following:<br /><br />* the error handler that is set gets called regardless of what level the error reporting is set on, or whether the statement is preceeded with @<br /><br />* it is up to the error handler to impart some meaning on the different error levels. You could make your custom error handler echo all errors, even if error reporting is set to NONE.<br /><br />* so what does the @ operator do? It temporarily sets the error reporting level to 0 for that line. If that line triggers an error, the error handler will still be called, but it will be called with an error level of 0<br /><br />Hope this helps someone</span></code></div>
  </div>
 </div>
  <div class="note" id="94004">  <div class="votes">
    <div id="Vu94004">
    <a href="/manual/vote-note.php?id=94004&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94004">
    <a href="/manual/vote-note.php?id=94004&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94004" title="80% like this...">
    147
    </div>
  </div>
  <a href="#94004" class="name">
  <strong class="user"><em>M. T.</em></strong></a><a class="genanchor" href="#94004"> &para;</a><div class="date" title="2009-10-11 09:20"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94004">
<div class="phpcode"><code><span class="html">Be aware of using error control operator in statements before include() like this:<br /><br /><span class="default">&lt;?PHP<br /><br /></span><span class="keyword">(@include(</span><span class="string">"file.php"</span><span class="keyword">))<br /> OR die(</span><span class="string">"Could not find file.php!"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />This cause, that error reporting level is set to zero also for the included file. So if there are some errors in the included file, they will be not displayed.</span></code></div>
  </div>
 </div>
  <div class="note" id="112900">  <div class="votes">
    <div id="Vu112900">
    <a href="/manual/vote-note.php?id=112900&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112900">
    <a href="/manual/vote-note.php?id=112900&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112900" title="91% like this...">
    58
    </div>
  </div>
  <a href="#112900" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112900"> &para;</a><div class="date" title="2013-08-05 01:05"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112900">
<div class="phpcode"><code><span class="html">This operator is affectionately known by veteran phpers as the stfu operator.</span></code></div>
  </div>
 </div>
  <div class="note" id="102543">  <div class="votes">
    <div id="Vu102543">
    <a href="/manual/vote-note.php?id=102543&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102543">
    <a href="/manual/vote-note.php?id=102543&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102543" title="74% like this...">
    61
    </div>
  </div>
  <a href="#102543" class="name">
  <strong class="user"><em>anthon at piwik dot org</em></strong></a><a class="genanchor" href="#102543"> &para;</a><div class="date" title="2011-02-20 12:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102543">
<div class="phpcode"><code><span class="html">If you're wondering what the performance impact of using the @ operator is, consider this example.  Here, the second script (using the @ operator) takes 1.75x as long to execute...almost double the time of the first script.
<br />
<br />So while yes, there is some overhead, per iteration, we see that the @ operator added only .005 ms per call.  Not reason enough, imho, to avoid using the @ operator.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">x</span><span class="keyword">() { }
<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) { </span><span class="default">x</span><span class="keyword">(); }
<br /></span><span class="default">?&gt;
<br /></span>
<br />real    0m7.617s
<br />user    0m6.788s
<br />sys    0m0.792s
<br />
<br />vs
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">x</span><span class="keyword">() { }
<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) { @</span><span class="default">x</span><span class="keyword">(); }
<br /></span><span class="default">?&gt;
<br /></span>
<br />real    0m13.333s
<br />user    0m12.437s
<br />sys    0m0.836s</span></code></div>
  </div>
 </div>
  <div class="note" id="119693">  <div class="votes">
    <div id="Vu119693">
    <a href="/manual/vote-note.php?id=119693&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119693">
    <a href="/manual/vote-note.php?id=119693&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119693" title="73% like this...">
    36
    </div>
  </div>
  <a href="#119693" class="name">
  <strong class="user"><em>dkellner</em></strong></a><a class="genanchor" href="#119693"> &para;</a><div class="date" title="2016-08-04 10:21"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119693">
<div class="phpcode"><code><span class="html">There is no reason to NOT use something just because "it can be misused".  You could as well say "unlink is evil, you can delete files with it so don't ever use unlink".<br /><br />It's a valid point that the @ operator hides all errors - so my rule of thumb is: use it only if you're aware of all possible errors your expression can throw AND you consider all of them irrelevant.<br /><br />A simple example is<br /><span class="default">&lt;?php<br /><br />    $x </span><span class="keyword">= @</span><span class="default">$a</span><span class="keyword">[</span><span class="string">"name"</span><span class="keyword">];<br /><br /></span><span class="default">?&gt;<br /></span>There are only 2 possible problems here: a missing variable or a missing index.  If you're sure you're fine with both cases, you're good to go.  And again: suppressing errors is not a crime.  Not knowing when it's safe to suppress them is definitely worse.</span></code></div>
  </div>
 </div>
  <div class="note" id="90987">  <div class="votes">
    <div id="Vu90987">
    <a href="/manual/vote-note.php?id=90987&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90987">
    <a href="/manual/vote-note.php?id=90987&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90987" title="70% like this...">
    53
    </div>
  </div>
  <a href="#90987" class="name">
  <strong class="user"><em>gerrywastaken</em></strong></a><a class="genanchor" href="#90987"> &para;</a><div class="date" title="2009-05-19 01:46"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90987">
<div class="phpcode"><code><span class="html">Error suppression should be avoided if possible as it doesn't just suppress the error that you are trying to stop, but will also suppress errors that you didn't predict would ever occur. This will make debugging a nightmare.<br /><br />It is far better to test for the condition that you know will cause an error before preceding to run the code. This way only the error that you know about will be suppressed and not all future errors associated with that piece of code.<br /><br />There may be a good reason for using outright error suppression in favor of the method I have suggested, however in the many years I've spent programming web apps I've yet to come across a situation where it was a good solution. The examples given on this manual page are certainly not situations where the error control operator should be used.</span></code></div>
  </div>
 </div>
  <div class="note" id="125938">  <div class="votes">
    <div id="Vu125938">
    <a href="/manual/vote-note.php?id=125938&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125938">
    <a href="/manual/vote-note.php?id=125938&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125938" title="73% like this...">
    16
    </div>
  </div>
  <a href="#125938" class="name">
  <strong class="user"><em>Ryan C</em></strong></a><a class="genanchor" href="#125938"> &para;</a><div class="date" title="2021-03-17 02:37"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125938">
<div class="phpcode"><code><span class="html">It's still possible to detect when the @ operator is being used in the error handler in PHP8. Calling error_reporting() will no longer return 0 as documented, but using the @ operator does still change the return value when you call error_reporting().<br /><br />My PHP error settings are set to use E_ALL, and when I call error_reporting() from the error handler of a non-suppressed error, it returns E_ALL as expected.<br /><br />But when an error occurs on an expression where I tried to suppress the error with the @ operator, it returns: E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR (or the number 4437). <br /><br />I didn't want to use 4437 in my code in case it changes with different settings or future versions of PHP, so I now use:<br /><br /><span class="default">&lt;?php<br />   </span><span class="keyword">function </span><span class="default">my_error_handler</span><span class="keyword">(</span><span class="default">$err_no</span><span class="keyword">, </span><span class="default">$err_msg</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$linenum</span><span class="keyword">) {<br />      if (</span><span class="default">error_reporting</span><span class="keyword">() != </span><span class="default">E_ALL</span><span class="keyword">) {<br />         return </span><span class="default">false</span><span class="keyword">; </span><span class="comment">// Silenced<br />      </span><span class="keyword">}<br /><br />     </span><span class="comment">// ...<br />   </span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />If the code needs to work with all versions of PHP, you could check that error_reporting() doesn't equal E_ALL or 0.<br /><br />And, of course, if your error_reporting settings in PHP is something other than E_ALL, you'll have to change that to whatever setting you do use.</span></code></div>
  </div>
 </div>
  <div class="note" id="123913">  <div class="votes">
    <div id="Vu123913">
    <a href="/manual/vote-note.php?id=123913&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123913">
    <a href="/manual/vote-note.php?id=123913&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123913" title="72% like this...">
    15
    </div>
  </div>
  <a href="#123913" class="name">
  <strong class="user"><em>man13or at hotmail dot fr</em></strong></a><a class="genanchor" href="#123913"> &para;</a><div class="date" title="2019-06-07 01:54"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123913">
<div class="phpcode"><code><span class="html">Quick debugging methods :<br /><br />@print($a);<br />is equivalent to<br />if isset($a) echo $a ;<br /><br />@a++;<br />is equivalent to<br />if isset($a) $a++ ;<br />else $a = 1;</span></code></div>
  </div>
 </div>
  <div class="note" id="98895">  <div class="votes">
    <div id="Vu98895">
    <a href="/manual/vote-note.php?id=98895&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98895">
    <a href="/manual/vote-note.php?id=98895&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98895" title="66% like this...">
    19
    </div>
  </div>
  <a href="#98895" class="name">
  <strong class="user"><em>darren at powerssa dot com</em></strong></a><a class="genanchor" href="#98895"> &para;</a><div class="date" title="2010-07-14 09:33"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98895">
<div class="phpcode"><code><span class="html">After some time investigating as to why I was still getting errors that were supposed to be suppressed with @ I found the following.<br /><br />1. If you have set your own default error handler then the error still gets sent to the error handler regardless of the @ sign.<br /><br />2. As mentioned below the @ suppression only changes the error level for that call. This is not to say that in your error handler you can check the given $errno for a value of 0 as the $errno will still refer to the TYPE(not the error level) of error e.g. E_WARNING or E_ERROR etc<br /><br />3. The @ only changes the rumtime error reporting level just for that one call to 0. This means inside your custom error handler you can check the current runtime error_reporting level using error_reporting() (note that one must NOT pass any parameter to this function if you want to get the current value) and if its zero then you know that it has been suppressed.<br /><span class="default">&lt;?php<br /></span><span class="comment">// Custom error handler<br /></span><span class="keyword">function </span><span class="default">myErrorHandler</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">)<br />{<br />    if ( </span><span class="default">0 </span><span class="keyword">== </span><span class="default">error_reporting </span><span class="keyword">() ) {<br />        </span><span class="comment">// Error reporting is currently turned off or suppressed with @<br />        </span><span class="keyword">return;<br />    }<br />    </span><span class="comment">// Do your normal custom error reporting here<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />For more info on setting a custom error handler see: <a href="http://php.net/manual/en/function.set-error-handler.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.set-error-handler.php</a><br />For more info on error_reporting see: <a href="http://www.php.net/manual/en/function.error-reporting.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.error-reporting.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="124195">  <div class="votes">
    <div id="Vu124195">
    <a href="/manual/vote-note.php?id=124195&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124195">
    <a href="/manual/vote-note.php?id=124195&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124195" title="65% like this...">
    6
    </div>
  </div>
  <a href="#124195" class="name">
  <strong class="user"><em>jcmargentina at gmail dot com</em></strong></a><a class="genanchor" href="#124195"> &para;</a><div class="date" title="2019-09-13 12:15"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124195">
<div class="phpcode"><code><span class="html">Please be aware that the behaviour of this operator changed from php5 to php7.<br /><br />The following code will raise a Fatal error no matter what, and you wont be able to suppress it<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">query</span><span class="keyword">()<br />{<br />    </span><span class="default">$myrs </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">$tmp </span><span class="keyword">= @</span><span class="default">$myrs</span><span class="keyword">-&gt;</span><span class="default">free_result</span><span class="keyword">();<br /><br />    return </span><span class="default">$tmp</span><span class="keyword">;<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">query</span><span class="keyword">());<br /><br />echo </span><span class="string">"THIS IS NOT PRINT"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />more info at: <a href="https://bugs.php.net/bug.php?id=78532&amp;thanks=3" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=78532&amp;thanks=3</a></span></code></div>
  </div>
 </div>
  <div class="note" id="99805">  <div class="votes">
    <div id="Vu99805">
    <a href="/manual/vote-note.php?id=99805&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99805">
    <a href="/manual/vote-note.php?id=99805&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99805" title="61% like this...">
    17
    </div>
  </div>
  <a href="#99805" class="name">
  <strong class="user"><em>auser at anexample dot com</em></strong></a><a class="genanchor" href="#99805"> &para;</a><div class="date" title="2010-09-08 04:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99805">
<div class="phpcode"><code><span class="html">Be aware that using @ is dog-slow, as PHP incurs overhead to suppressing errors in this way. It's a trade-off between speed and convenience.</span></code></div>
  </div>
 </div>
  <div class="note" id="104545">  <div class="votes">
    <div id="Vu104545">
    <a href="/manual/vote-note.php?id=104545&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104545">
    <a href="/manual/vote-note.php?id=104545&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104545" title="61% like this...">
    11
    </div>
  </div>
  <a href="#104545" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#104545"> &para;</a><div class="date" title="2011-06-22 06:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104545">
<div class="phpcode"><code><span class="html">If you use the ErrorException exception to have a unified error management, I'll advise you to test against error_reporting in the error handler, not in the exception handler as you might encounter some headaches like blank pages as error_reporting might not be transmitted to exception handler.<br /><br />So instead of :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">exception_error_handler</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline </span><span class="keyword">)<br />{<br />    throw new </span><span class="default">ErrorException</span><span class="keyword">(</span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">);<br />}<br /><br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">"exception_error_handler"</span><span class="keyword">);<br /><br />function </span><span class="default">catchException</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">)<br />{<br />    if (</span><span class="default">error_reporting</span><span class="keyword">() === </span><span class="default">0</span><span class="keyword">)<br />    {<br />        return;<br />    }<br /><br />    </span><span class="comment">// Do some stuff<br /></span><span class="keyword">}<br /><br /></span><span class="default">set_exception_handler</span><span class="keyword">(</span><span class="string">'catchException'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />It would be better to do :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">exception_error_handler</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline </span><span class="keyword">)<br />{<br />    if (</span><span class="default">error_reporting</span><span class="keyword">() === </span><span class="default">0</span><span class="keyword">)<br />    {<br />        return;<br />    }<br /><br />    throw new </span><span class="default">ErrorException</span><span class="keyword">(</span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">);<br />}<br /><br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">"exception_error_handler"</span><span class="keyword">);<br /><br />function </span><span class="default">catchException</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Do some stuff<br /></span><span class="keyword">}<br /><br /></span><span class="default">set_exception_handler</span><span class="keyword">(</span><span class="string">'catchException'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116731">  <div class="votes">
    <div id="Vu116731">
    <a href="/manual/vote-note.php?id=116731&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116731">
    <a href="/manual/vote-note.php?id=116731&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116731" title="60% like this...">
    6
    </div>
  </div>
  <a href="#116731" class="name">
  <strong class="user"><em>karst dot REMOVETHIS at onlinq dot nl</em></strong></a><a class="genanchor" href="#116731"> &para;</a><div class="date" title="2015-02-20 02:15"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116731">
<div class="phpcode"><code><span class="html">While you should definitely not be too liberal with the @ operator, I also disagree with people who claim it's the ultimate sin.<br /><br />For example, a very reasonable use is to suppress the notice-level error generated by parse_ini_file() if you know the .ini file may be missing.<br />In my case getting the FALSE return value was enough to handle that situation, but I didn't want notice errors being output by my API.<br /><br />TL;DR: Use it, but only if you know what you're suppressing and why.</span></code></div>
  </div>
 </div>
  <div class="note" id="48491">  <div class="votes">
    <div id="Vu48491">
    <a href="/manual/vote-note.php?id=48491&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48491">
    <a href="/manual/vote-note.php?id=48491&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48491" title="60% like this...">
    8
    </div>
  </div>
  <a href="#48491" class="name">
  <strong class="user"><em>frogger at netsurf dot de</em></strong></a><a class="genanchor" href="#48491"> &para;</a><div class="date" title="2004-12-26 08:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48491">
<div class="phpcode"><code><span class="html">Better use the function trigger_error() (<a href="http://de.php.net/manual/en/function.trigger-error.php" rel="nofollow" target="_blank">http://de.php.net/manual/en/function.trigger-error.php</a>)<br />to display defined notices, warnings and errors than check the error level your self. this lets you write messages to logfiles if defined in the php.ini, output<br />messages in dependency to the error_reporting() level and suppress output using the @-sign.</span></code></div>
  </div>
 </div>
  <div class="note" id="120767">  <div class="votes">
    <div id="Vu120767">
    <a href="/manual/vote-note.php?id=120767&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120767">
    <a href="/manual/vote-note.php?id=120767&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120767" title="52% like this...">
    1
    </div>
  </div>
  <a href="#120767" class="name">
  <strong class="user"><em>ricovox</em></strong></a><a class="genanchor" href="#120767"> &para;</a><div class="date" title="2017-03-07 05:29"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120767">
<div class="phpcode"><code><span class="html">What is PHP's behavior for a variable that is assigned the return value of an expression protected by the Error Control Operator when the expression encounteres an error? <br /><br />Based on the following code, the result is NULL (but it would be nice if this were confirmed to be true in all cases).<br /><br /><span class="default">&lt;?php <br /><br />    $var </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">; <br />    </span><span class="default">$arr </span><span class="keyword">= array(); <br /><br />    </span><span class="default">$var </span><span class="keyword">= @</span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">];    </span><span class="comment">// what is the value of $var after this assignment?<br /><br />    // is it its previous value (3) as if the assignment never took place?<br />    // is it FALSE or NULL?<br />    // is it some kind of exception or error message or error number?<br /><br />   </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">);  </span><span class="comment">// prints "NULL"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130466">  <div class="votes">
    <div id="Vu130466">
    <a href="/manual/vote-note.php?id=130466&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130466">
    <a href="/manual/vote-note.php?id=130466&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130466" title="no votes...">
    0
    </div>
  </div>
  <a href="#130466" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#130466"> &para;</a><div class="date" title="2025-08-31 02:54"><strong>29 days ago</strong></div>
  <div class="text" id="Hcom130466">
<div class="phpcode"><code><span class="html">There is an error about error_reporting()'s return value inside an error handler in the documentation.<br /><br />"Prior to PHP 8.0.0, the error_reporting() called inside the custom error handler always returned 0 if the error was suppressed by the @ operator. As of PHP 8.0.0, it returns the value of this (bitwise) expression: E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR | E_PARSE."<br /><br />In fact, in PHP 8.0.0+, error_reporting() in an error handler returns $error_reporting &amp; (E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR | E_PARSE), where $error_reporting is the value of the global error_reporting ini directive set, no matter through ini or error_reporting().</span></code></div>
  </div>
 </div>
  <div class="note" id="130368">  <div class="votes">
    <div id="Vu130368">
    <a href="/manual/vote-note.php?id=130368&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130368">
    <a href="/manual/vote-note.php?id=130368&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130368" title="no votes...">
    0
    </div>
  </div>
  <a href="#130368" class="name">
  <strong class="user"><em>qiuty at mail dot ru</em></strong></a><a class="genanchor" href="#130368"> &para;</a><div class="date" title="2025-06-15 04:08"><strong>3 months ago</strong></div>
  <div class="text" id="Hcom130368">
<div class="phpcode"><code><span class="html">In fact, when a user defined error_handler is called for an expression silenced by @-operator, the return value of<br />error_reporting() != E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR | E_PARSE (or the number 4437),<br />but the value masked by your current error_reporting level, that is <br />error_reporting() &amp;= E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR | E_PARSE,<br />which for E_ALL level gives us exactly 4437.</span></code></div>
  </div>
 </div>
  <div class="note" id="125245">  <div class="votes">
    <div id="Vu125245">
    <a href="/manual/vote-note.php?id=125245&amp;page=language.operators.errorcontrol&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125245">
    <a href="/manual/vote-note.php?id=125245&amp;page=language.operators.errorcontrol&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125245" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125245" class="name">
  <strong class="user"><em>fy dot kenny at gmail dot com</em></strong></a><a class="genanchor" href="#125245"> &para;</a><div class="date" title="2020-08-06 08:14"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125245">
<div class="phpcode"><code><span class="html">* How to make deprecated super global variable `$php_errormsg` work<br /><br />&gt;1. modify php.ini <br />&gt;track_errors = On<br />&gt;error_reporting = E_ALL &amp; ~E_NOTICE<br />&gt;2. Please note，if you already using customized error handler，it will prompt `undefined variable`<br />&gt;please insert code`set_error_handler(null);` before executing code, e.g: <br />&gt;```php<br />&gt;set_error_handler(null);<br />&gt;$my_file = @file ('phpinfo.phpx') or  <br />&gt;die ("&lt;br&gt;Failed opening file: &lt;br&gt;\t$php_errormsg");<br />&gt;```<br /><br />&gt;(c)Kenny Fang</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.operators.errorcontrol&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.errorcontrol.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.operators.php">Operators</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.operators.precedence.php" title="Operator Precedence">Operator Precedence</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.arithmetic.php" title="Arithmetic">Arithmetic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.increment.php" title="Increment and Decrement">Increment and Decrement</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.assignment.php" title="Assignment">Assignment</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.bitwise.php" title="Bitwise">Bitwise</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.comparison.php" title="Comparison">Comparison</a>
                        </li>
                                                <li class="current">
                            <a href="language.operators.errorcontrol.php" title="Error Control">Error Control</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.execution.php" title="Execution">Execution</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.logical.php" title="Logic">Logic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.string.php" title="String">String</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.array.php" title="Array">Array</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.type.php" title="Type">Type</a>
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
