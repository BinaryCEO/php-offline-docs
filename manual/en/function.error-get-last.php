<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: error_get_last - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.error-get-last.php">
 <link rel="shorturl" href="https://www.php.net/error-get-last">
 <link rel="alternate" href="https://www.php.net/error-get-last" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.errorfunc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.error-clear-last.php">
 <link rel="next" href="https://www.php.net/manual/en/function.error-log.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.error-get-last.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.error-get-last.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.error-get-last.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.error-get-last.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.error-get-last.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.error-get-last.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.error-get-last.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.error-get-last.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.error-get-last.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.error-get-last.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.error-get-last.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the last occurred error" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: error_get_last - Manual" />
<meta name="twitter:description" content="Get the last occurred error" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: error_get_last - Manual" />
<meta itemprop="description" content="Get the last occurred error" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the last occurred error" />

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
        <a href="function.error-log.php">
          error_log &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.error-clear-last.php">
          &laquo; error_clear_last        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.errorfunc.php'>Error Handling</a></li>      <li><a href='ref.errorfunc.php'>Error Handling Functions</a></li>      </ul>
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
            <option value='en/function.error-get-last.php' selected="selected">English</option>
            <option value='de/function.error-get-last.php'>German</option>
            <option value='es/function.error-get-last.php'>Spanish</option>
            <option value='fr/function.error-get-last.php'>French</option>
            <option value='it/function.error-get-last.php'>Italian</option>
            <option value='ja/function.error-get-last.php'>Japanese</option>
            <option value='pt_BR/function.error-get-last.php'>Brazilian Portuguese</option>
            <option value='ru/function.error-get-last.php'>Russian</option>
            <option value='tr/function.error-get-last.php'>Turkish</option>
            <option value='uk/function.error-get-last.php'>Ukrainian</option>
            <option value='zh/function.error-get-last.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.error-get-last" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">error_get_last</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">error_get_last</span> &mdash; <span class="dc-title">Get the last occurred error</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.error-get-last-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>error_get_last</strong></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span></div>

  <p class="para rdfs-comment">
   Gets information about the last error that occurred.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.error-get-last-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.error-get-last-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an associative array describing the last error with keys &quot;type&quot;,
   &quot;message&quot;, &quot;file&quot; and &quot;line&quot;. If the error has been caused by a PHP
   internal function then the &quot;message&quot; begins with its name.
   Returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if there hasn&#039;t been an error yet.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.error-get-last-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-598">
    <p><strong>Example #1 An <span class="function"><strong>error_get_last()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">error_get_last</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [type] =&gt; 8
    [message] =&gt; Undefined variable: a
    [file] =&gt; C:\WWW\index.php
    [line] =&gt; 2
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.error-get-last-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="errorfunc.constants.php" class="link">Error constants</a></li>
    <li>Variable <var class="varname"><a href="reserved.variables.phperrormsg.php" class="classname">$php_errormsg</a></var></li>
    <li><span class="function"><a href="function.error-clear-last.php" class="function" rel="rdfs-seeAlso">error_clear_last()</a> - Clear the most recent error</span></li>
    <li><a href="errorfunc.configuration.php#ini.display-errors" class="link">Directive <code class="parameter">display_errors</code></a></li>
    <li><a href="errorfunc.configuration.php#ini.html-errors" class="link">Directive <code class="parameter">html_errors</code></a></li>
    <li><a href="errorfunc.configuration.php#ini.xmlrpc-errors" class="link">Directive <code class="parameter">xmlrpc_errors</code></a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/errorfunc/functions/error-get-last.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.error-get-last%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.error-get-last&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.error-get-last.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100310">  <div class="votes">
    <div id="Vu100310">
    <a href="/manual/vote-note.php?id=100310&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100310">
    <a href="/manual/vote-note.php?id=100310&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100310" title="76% like this...">
    23
    </div>
  </div>
  <a href="#100310" class="name">
  <strong class="user"><em>dmgx dot michael at gmail dot com</em></strong></a><a class="genanchor" href="#100310"> &para;</a><div class="date" title="2010-10-07 04:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100310">
<div class="phpcode"><code><span class="html">If an error handler (see set_error_handler ) successfully handles an error then that error will not be reported by this function.</span></code></div>
  </div>
 </div>
  <div class="note" id="113518">  <div class="votes">
    <div id="Vu113518">
    <a href="/manual/vote-note.php?id=113518&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113518">
    <a href="/manual/vote-note.php?id=113518&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113518" title="70% like this...">
    14
    </div>
  </div>
  <a href="#113518" class="name">
  <strong class="user"><em>nicolas dot grekas+php at gmail dot com</em></strong></a><a class="genanchor" href="#113518"> &para;</a><div class="date" title="2013-10-23 09:37"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113518">
<div class="phpcode"><code><span class="html">[Editor's note: as of PHP 7.0.0 there is error_clear_last() to clear the most recent error.]
<br />
<br />To clear error_get_last(), or put it in a well defined state, you should use the code below. It works even when a custom error handler has been set.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">// var_dump or anything else, as this will never be called because of the 0
<br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">'var_dump'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br />@</span><span class="default">$undef_var</span><span class="keyword">;
<br /></span><span class="default">restore_error_handler</span><span class="keyword">();
<br />
<br /></span><span class="comment">// error_get_last() is now in a well known state:
<br />// Undefined variable: undef_var
<br />
<br /></span><span class="keyword">... </span><span class="comment">// Do something
<br />
<br /></span><span class="default">$e </span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">();
<br />
<br />...
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99056">  <div class="votes">
    <div id="Vu99056">
    <a href="/manual/vote-note.php?id=99056&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99056">
    <a href="/manual/vote-note.php?id=99056&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99056" title="73% like this...">
    9
    </div>
  </div>
  <a href="#99056" class="name">
  <strong class="user"><em>Skrol29</em></strong></a><a class="genanchor" href="#99056"> &para;</a><div class="date" title="2010-07-24 03:09"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99056">
<div class="phpcode"><code><span class="html">Function error_get_last() will return an error information even if the error is hidden because you've used character @, because of  the "error_reporting" directive in the php.ini file, or because you've used function error_reporting().<br /><br />Examples:<br /><br /><span class="default">&lt;?php<br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL </span><span class="keyword">^ </span><span class="default">E_NOTICE</span><span class="keyword">);<br /></span><span class="default">$y </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">;<br /></span><span class="default">$err </span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">();<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$err</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Will display: array ( 'type' =&gt; 8, 'message' =&gt; 'Undefined variable: x', 'file' =&gt; 'test.php', 'line' =&gt; 4, )<br /><br /><span class="default">&lt;?php<br />$y </span><span class="keyword">= @</span><span class="default">$x</span><span class="keyword">;<br /></span><span class="default">$err </span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">();<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$err</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Will display: array ( 'type' =&gt; 8, 'message' =&gt; 'Undefined variable: x', 'file' =&gt; 'test.php', 'line' =&gt; 4, )</span></code></div>
  </div>
 </div>
  <div class="note" id="94443">  <div class="votes">
    <div id="Vu94443">
    <a href="/manual/vote-note.php?id=94443&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94443">
    <a href="/manual/vote-note.php?id=94443&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94443" title="75% like this...">
    4
    </div>
  </div>
  <a href="#94443" class="name">
  <strong class="user"><em>iant at clickwt dot com</em></strong></a><a class="genanchor" href="#94443"> &para;</a><div class="date" title="2009-11-05 09:13"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94443">
<div class="phpcode"><code><span class="html">Beware that registing a shutdown function to catch errors won't work if other shutdown functions throw errors.<br /><br /><span class="default">&lt;?php<br /><br />register_shutdown_function</span><span class="keyword">(</span><span class="string">'cleanupObjects'</span><span class="keyword">);<br /></span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'handleFatalPhpError'</span><span class="keyword">);<br /><br />function </span><span class="default">cleanupObjects</span><span class="keyword">() {<br />   </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'An insignificant problem'</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">handleFatalPhpError</span><span class="keyword">() {<br />   </span><span class="default">$last_error </span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">();<br />   if(</span><span class="default">$last_error</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">] === </span><span class="default">E_ERROR </span><span class="keyword">|| </span><span class="default">$last_error</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">] === </span><span class="default">E_USER_ERROR</span><span class="keyword">) {<br />      echo </span><span class="string">"Can do custom output and/or logging for fatal error here..."</span><span class="keyword">;<br />   }<br />}<br /><br /></span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Something serious'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />In the above code, $last_error will contain the warning, becuase cleanupObjects() is called first.</span></code></div>
  </div>
 </div>
  <div class="note" id="92810">  <div class="votes">
    <div id="Vu92810">
    <a href="/manual/vote-note.php?id=92810&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92810">
    <a href="/manual/vote-note.php?id=92810&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92810" title="64% like this...">
    8
    </div>
  </div>
  <a href="#92810" class="name">
  <strong class="user"><em>michael at getsprink dot com</em></strong></a><a class="genanchor" href="#92810"> &para;</a><div class="date" title="2009-08-10 10:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92810">
<div class="phpcode"><code><span class="html">The error_get_last() function will give you the most recent error even when that error is a Fatal error.<br /><br />Example Usage:<br /><br /><span class="default">&lt;?php<br /><br />register_shutdown_function</span><span class="keyword">(</span><span class="string">'handleFatalPhpError'</span><span class="keyword">);<br /><br />function </span><span class="default">handleFatalPhpError</span><span class="keyword">() {<br />   </span><span class="default">$last_error </span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">();<br />   if(</span><span class="default">$last_error</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">] === </span><span class="default">E_ERROR</span><span class="keyword">) {<br />      echo </span><span class="string">"Can do custom output and/or logging for fatal error here..."</span><span class="keyword">;<br />   }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103539">  <div class="votes">
    <div id="Vu103539">
    <a href="/manual/vote-note.php?id=103539&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103539">
    <a href="/manual/vote-note.php?id=103539&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103539" title="64% like this...">
    4
    </div>
  </div>
  <a href="#103539" class="name">
  <strong class="user"><em>php at joert dot net</em></strong></a><a class="genanchor" href="#103539"> &para;</a><div class="date" title="2011-04-19 02:36"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103539">
<div class="phpcode"><code><span class="html">To simulate this function in a horrid way for php &lt;5.2, you can use something like this.<br /><span class="default">&lt;?php<br /></span><span class="keyword">if( !</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'error_get_last'</span><span class="keyword">) ) {<br />    </span><span class="default">set_error_handler</span><span class="keyword">(<br />        </span><span class="default">create_function</span><span class="keyword">(<br />            </span><span class="string">'$errno,$errstr,$errfile,$errline,$errcontext'</span><span class="keyword">,<br />            </span><span class="string">'<br />                global $__error_get_last_retval__;<br />                $__error_get_last_retval__ = array(<br />                    \'type\'        =&gt; $errno,<br />                    \'message\'        =&gt; $errstr,<br />                    \'file\'        =&gt; $errfile,<br />                    \'line\'        =&gt; $errline<br />                );<br />                return false;<br />            '<br />        </span><span class="keyword">)<br />    );<br />    function </span><span class="default">error_get_last</span><span class="keyword">() {<br />        global </span><span class="default">$__error_get_last_retval__</span><span class="keyword">;<br />        if( !isset(</span><span class="default">$__error_get_last_retval__</span><span class="keyword">) ) {<br />            return </span><span class="default">null</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$__error_get_last_retval__</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111583">  <div class="votes">
    <div id="Vu111583">
    <a href="/manual/vote-note.php?id=111583&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111583">
    <a href="/manual/vote-note.php?id=111583&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111583" title="66% like this...">
    2
    </div>
  </div>
  <a href="#111583" class="name">
  <strong class="user"><em>vike2000 at google mail domain</em></strong></a><a class="genanchor" href="#111583"> &para;</a><div class="date" title="2013-03-06 11:26"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111583">
<div class="phpcode"><code><span class="html">To know if something happened between two statements one can of course use a special string with user_error() (in lieu of a built-in special reset mentioned by mail at mbaierl dot com): <span class="default">&lt;?php<br /></span><span class="keyword">@</span><span class="default">user_error</span><span class="keyword">(</span><span class="default">$error_get_last_mark</span><span class="keyword">=</span><span class="string">'error_get_last mark'</span><span class="keyword">);<br /></span><span class="default">$not_set</span><span class="keyword">;<br /></span><span class="default">$error_get_last</span><span class="keyword">=</span><span class="default">error_get_last</span><span class="keyword">();<br /></span><span class="default">$something_happened</span><span class="keyword">=(</span><span class="default">$error_get_last</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">]!=</span><span class="default">$error_get_last_mark</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />If your <span class="default">&lt;?php set_error_handler</span><span class="keyword">(function) </span><span class="default">?&gt;</span> function returns true then you'll have to roll you own error_get_last functionality. (Shortly mentioned by dmgx dot michael at gmail dot com).<br /><br />To manual moderators: Re php.net/manual/add-note.php: Since i guess the above technically sorts under "References to other notes" i feel the need to defend myself with that i'm thinking it might show for usability where other's say it fails and no, i haven't got any other medium to reach the readers of the php manual notes.<br />Also, you could have some examples of what notes you think is okay. Thanks for your moderation.</span></code></div>
  </div>
 </div>
  <div class="note" id="83879">  <div class="votes">
    <div id="Vu83879">
    <a href="/manual/vote-note.php?id=83879&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83879">
    <a href="/manual/vote-note.php?id=83879&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83879" title="66% like this...">
    2
    </div>
  </div>
  <a href="#83879" class="name">
  <strong class="user"><em>Brad</em></strong></a><a class="genanchor" href="#83879"> &para;</a><div class="date" title="2008-06-16 11:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83879">
<div class="phpcode"><code><span class="html">Like $php_errormsg, the return value of this function may not be updated if a user-defined error handler returns non-FALSE. Tested on PHP 5.2.6.<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">PHP_VERSION</span><span class="keyword">);<br /></span><span class="comment">// Outputs: string(5) "5.2.6"<br /><br /></span><span class="keyword">@</span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"foo"</span><span class="keyword">);<br /></span><span class="default">$e</span><span class="keyword">=</span><span class="default">error_get_last</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">]);<br /></span><span class="comment">// Outputs: string(3) "foo"<br /><br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$a,$b'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">));<br /><br />@</span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"bar"</span><span class="keyword">);<br /></span><span class="default">$e</span><span class="keyword">=</span><span class="default">error_get_last</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">]);<br /></span><span class="comment">// Outputs: string(3) "foo"<br /><br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$a,$b'</span><span class="keyword">,</span><span class="string">'return false;'</span><span class="keyword">));<br /><br />@</span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"baz"</span><span class="keyword">);<br /></span><span class="default">$e</span><span class="keyword">=</span><span class="default">error_get_last</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">]);<br /></span><span class="comment">// Outputs: string(3) "baz"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83878">  <div class="votes">
    <div id="Vu83878">
    <a href="/manual/vote-note.php?id=83878&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83878">
    <a href="/manual/vote-note.php?id=83878&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83878" title="57% like this...">
    1
    </div>
  </div>
  <a href="#83878" class="name">
  <strong class="user"><em>Brad</em></strong></a><a class="genanchor" href="#83878"> &para;</a><div class="date" title="2008-06-16 11:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83878">
<div class="phpcode"><code><span class="html">It can't be completely reset, but you can "clear" it well enough for all practical purposes:<br /><span class="default">&lt;?php<br /></span><span class="keyword">@</span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">);<br /></span><span class="comment">// do stuff...<br /></span><span class="default">$e</span><span class="keyword">=</span><span class="default">error_get_last</span><span class="keyword">();<br />if(</span><span class="default">$e</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">]!==</span><span class="string">''</span><span class="keyword">){<br />    </span><span class="comment">// An error occurred<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128558">  <div class="votes">
    <div id="Vu128558">
    <a href="/manual/vote-note.php?id=128558&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128558">
    <a href="/manual/vote-note.php?id=128558&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128558" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128558" class="name">
  <strong class="user"><em>Krzysztof Przygoda</em></strong></a><a class="genanchor" href="#128558"> &para;</a><div class="date" title="2023-05-20 07:24"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128558">
<div class="phpcode"><code><span class="html">Be aware that error_get_last() returns only uncaught errors.<br />Caught ones will never get to the error_get_last(), i.e.:<br />- $error_levels registered with set_error_handler() when $callback does not return false,<br />- all exceptions, including errors not supported by set_error_handler() (like :E_ERROR/fatal error, E_PARSE, etc.) that are exceptions in fact,<br />  when set_exception_handler($callback) is registered,<br />- exceptions caught by try/catch block.</span></code></div>
  </div>
 </div>
  <div class="note" id="122041">  <div class="votes">
    <div id="Vu122041">
    <a href="/manual/vote-note.php?id=122041&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122041">
    <a href="/manual/vote-note.php?id=122041&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122041" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#122041" class="name">
  <strong class="user"><em>admin at manomite dot net</em></strong></a><a class="genanchor" href="#122041"> &para;</a><div class="date" title="2017-12-18 11:06"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122041">
<div class="phpcode"><code><span class="html">This is a simple debugging script for mail functions...<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//Built By Manomite for Debugging<br /><br /></span><span class="keyword">class </span><span class="default">Error</span><span class="keyword">{<br /><br />function </span><span class="default">__construct</span><span class="keyword">(){<br /><br /></span><span class="default">error_reporting </span><span class="keyword">( </span><span class="default">E_ALL </span><span class="keyword">^ </span><span class="default">E_NOTICE </span><span class="keyword">);<br /></span><span class="default">$err </span><span class="keyword">= </span><span class="default">error_get_last </span><span class="keyword">();<br /><br />if(</span><span class="default">$err</span><span class="keyword">){<br /><br /></span><span class="default">$res </span><span class="keyword">= </span><span class="string">"An error has occurred in your application sir.\n Details Include " </span><span class="keyword">.</span><span class="default">$err</span><span class="keyword">.</span><span class="string">""<br /><br /></span><span class="default">mail</span><span class="keyword">(</span><span class="string">"admin@manomite.net"</span><span class="keyword">,</span><span class="string">"Error Occurred"</span><span class="keyword">,</span><span class="default">$res</span><span class="keyword">,</span><span class="default">$from</span><span class="keyword">);<br />}<br />}<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98606">  <div class="votes">
    <div id="Vu98606">
    <a href="/manual/vote-note.php?id=98606&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98606">
    <a href="/manual/vote-note.php?id=98606&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98606" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#98606" class="name">
  <strong class="user"><em>scott at eyefruit dot com</em></strong></a><a class="genanchor" href="#98606"> &para;</a><div class="date" title="2010-06-25 01:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98606">
<div class="phpcode"><code><span class="html">If you have the need to check whether an error was a fatal error  before PHP 5.2 (in my case, within an output buffer handler), you can use the following hack:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># Check if there was a PHP fatal error.<br /># Using error_get_last is the "right" way, but it requires PHP 5.2+. The back-up is a hack.<br /></span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'error_get_last'</span><span class="keyword">)) {<br />    </span><span class="default">$lastPHPError </span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">();<br />    </span><span class="default">$phpFatalError </span><span class="keyword">= isset(</span><span class="default">$lastPHPError</span><span class="keyword">) &amp;&amp; </span><span class="default">$lastPHPError</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">] === </span><span class="default">E_ERROR</span><span class="keyword">;<br />} else {<br />    </span><span class="default">$phpFatalError </span><span class="keyword">= </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="string">'&lt;b&gt;Fatal error&lt;/b&gt;:'</span><span class="keyword">) &amp;&amp; ! </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="string">'&lt;/html&gt;'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />This is, of course, language-dependent, so it wouldn't be good in widely-distributed code, but it may help in certain cases (or at least be the base of something that would work).</span></code></div>
  </div>
 </div>
  <div class="note" id="87432">  <div class="votes">
    <div id="Vu87432">
    <a href="/manual/vote-note.php?id=87432&amp;page=function.error-get-last&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87432">
    <a href="/manual/vote-note.php?id=87432&amp;page=function.error-get-last&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87432" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#87432" class="name">
  <strong class="user"><em>phil at wisb dot net</em></strong></a><a class="genanchor" href="#87432"> &para;</a><div class="date" title="2008-12-04 04:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87432">
<div class="phpcode"><code><span class="html">While mail at mbaierl dot com makes the point that this function isn't best for reporting the possible error condition of the most recently executed step, there are situations in which it is especially helpful to know the last error—regardless of when it occurred.<br /><br />As an example, imagine if you had some code that captured the output from dynamic pages, and cached it for faster delivery to subsequent visitors. A final sanity check would be to see if an error has occurred anywhere during the execution of the script. If there has been an error, we probably don't want to cache that page.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.error-get-last&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.error-get-last.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.errorfunc.php">Error Handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.debug-backtrace.php" title="debug_&#8203;backtrace">debug_&#8203;backtrace</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-print-backtrace.php" title="debug_&#8203;print_&#8203;backtrace">debug_&#8203;print_&#8203;backtrace</a>
                        </li>
                                                <li class="">
                            <a href="function.error-clear-last.php" title="error_&#8203;clear_&#8203;last">error_&#8203;clear_&#8203;last</a>
                        </li>
                                                <li class="current">
                            <a href="function.error-get-last.php" title="error_&#8203;get_&#8203;last">error_&#8203;get_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.error-log.php" title="error_&#8203;log">error_&#8203;log</a>
                        </li>
                                                <li class="">
                            <a href="function.error-reporting.php" title="error_&#8203;reporting">error_&#8203;reporting</a>
                        </li>
                                                <li class="">
                            <a href="function.get-error-handler.php" title="get_&#8203;error_&#8203;handler">get_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.get-exception-handler.php" title="get_&#8203;exception_&#8203;handler">get_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.restore-error-handler.php" title="restore_&#8203;error_&#8203;handler">restore_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.restore-exception-handler.php" title="restore_&#8203;exception_&#8203;handler">restore_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.set-error-handler.php" title="set_&#8203;error_&#8203;handler">set_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.set-exception-handler.php" title="set_&#8203;exception_&#8203;handler">set_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.trigger-error.php" title="trigger_&#8203;error">trigger_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.user-error.php" title="user_&#8203;error">user_&#8203;error</a>
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
