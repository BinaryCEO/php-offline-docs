<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ob_flush - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ob-flush.php">
 <link rel="shorturl" href="https://www.php.net/ob-flush">
 <link rel="alternate" href="https://www.php.net/ob-flush" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.outcontrol.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ob-end-flush.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ob-get-clean.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ob-flush.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ob-flush.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ob-flush.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ob-flush.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ob-flush.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ob-flush.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ob-flush.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ob-flush.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ob-flush.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ob-flush.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ob-flush.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Flush (send) the return value of the active output handler" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ob_flush - Manual" />
<meta name="twitter:description" content="Flush (send) the return value of the active output handler" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ob_flush - Manual" />
<meta itemprop="description" content="Flush (send) the return value of the active output handler" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Flush (send) the return value of the active output handler" />

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
        <a href="function.ob-get-clean.php">
          ob_get_clean &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ob-end-flush.php">
          &laquo; ob_end_flush        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.outcontrol.php'>Output Control</a></li>      <li><a href='ref.outcontrol.php'>Output Control Functions</a></li>      </ul>
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
            <option value='en/function.ob-flush.php' selected="selected">English</option>
            <option value='de/function.ob-flush.php'>German</option>
            <option value='es/function.ob-flush.php'>Spanish</option>
            <option value='fr/function.ob-flush.php'>French</option>
            <option value='it/function.ob-flush.php'>Italian</option>
            <option value='ja/function.ob-flush.php'>Japanese</option>
            <option value='pt_BR/function.ob-flush.php'>Brazilian Portuguese</option>
            <option value='ru/function.ob-flush.php'>Russian</option>
            <option value='tr/function.ob-flush.php'>Turkish</option>
            <option value='uk/function.ob-flush.php'>Ukrainian</option>
            <option value='zh/function.ob-flush.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ob-flush" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ob_flush</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ob_flush</span> &mdash; <span class="dc-title">Flush (send) the return value of the active output handler</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ob-flush-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ob_flush</strong></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function calls the output handler
   (with the <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-flush">PHP_OUTPUT_HANDLER_FLUSH</a></code></strong> flag),
   flushes (sends) its return value
   and discards the contents of the active output buffer.
  </p>
  <p class="para">
   This function does not turn off the active output buffer like
   <span class="function"><a href="function.ob-end-flush.php" class="function">ob_end_flush()</a></span> or <span class="function"><a href="function.ob-get-flush.php" class="function">ob_get_flush()</a></span> does.
  </p>
  <p class="para">
   <span class="function"><strong>ob_flush()</strong></span> will fail
   without an active output buffer started with the
   <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-flushable">PHP_OUTPUT_HANDLER_FLUSHABLE</a></code></strong> flag.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ob-flush-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ob-flush-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.ob-flush-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If the function fails it generates an <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ob-flush-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ob-start.php" class="function" rel="rdfs-seeAlso">ob_start()</a> - Turn on output buffering</span></li>
    <li><span class="function"><a href="function.ob-get-contents.php" class="function" rel="rdfs-seeAlso">ob_get_contents()</a> - Return the contents of the output buffer</span></li>
    <li><span class="function"><a href="function.ob-end-flush.php" class="function" rel="rdfs-seeAlso">ob_end_flush()</a> - Flush (send) the return value of the active output handler
   and turn the active output buffer off</span></li>
    <li><span class="function"><a href="function.ob-get-flush.php" class="function" rel="rdfs-seeAlso">ob_get_flush()</a> - Flush (send) the return value of the active output handler,
   return the contents of the active output buffer and turn it off</span></li>
    <li><span class="function"><a href="function.ob-clean.php" class="function" rel="rdfs-seeAlso">ob_clean()</a> - Clean (erase) the contents of the active output buffer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/outcontrol/functions/ob-flush.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ob-flush%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ob-flush&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ob-flush.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109699">  <div class="votes">
    <div id="Vu109699">
    <a href="/manual/vote-note.php?id=109699&amp;page=function.ob-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109699">
    <a href="/manual/vote-note.php?id=109699&amp;page=function.ob-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109699" title="67% like this...">
    46
    </div>
  </div>
  <a href="#109699" class="name">
  <strong class="user"><em>Lee</em></strong></a><a class="genanchor" href="#109699"> &para;</a><div class="date" title="2012-08-11 11:23"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109699">
<div class="phpcode"><code><span class="html">As of August 2012, all browsers seem to show an all-or-nothing approach to buffering. In other words, while php is operating, no content can be shown.<br /><br />In particular this means that the following workarounds listed further down here are ineffective:<br /><br />1) ob_flush (),  flush () in any combination with other output buffering functions;<br /><br />2) changes to php.ini involving setting output_buffer and/or zlib.output_compression to 0 or Off;<br /><br />3) setting Apache variables such as "no-gzip" either through apache_setenv () or through entries in .htaccess.<br /><br />So, until browsers begin to show buffered content again, the tips listed here are moot.</span></code></div>
  </div>
 </div>
  <div class="note" id="109314">  <div class="votes">
    <div id="Vu109314">
    <a href="/manual/vote-note.php?id=109314&amp;page=function.ob-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109314">
    <a href="/manual/vote-note.php?id=109314&amp;page=function.ob-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109314" title="63% like this...">
    39
    </div>
  </div>
  <a href="#109314" class="name">
  <strong class="user"><em>dermeister dot online at gmail dot com</em></strong></a><a class="genanchor" href="#109314"> &para;</a><div class="date" title="2012-07-05 01:43"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109314">
<div class="phpcode"><code><span class="html">some problems with ob_flush() and flush() could be resolved by defining content type header :<br />header( 'Content-type: text/html; charset=utf-8' );<br /><br />so working code looks like this:<br /><span class="default">&lt;?php<br />header</span><span class="keyword">( </span><span class="string">'Content-type: text/html; charset=utf-8' </span><span class="keyword">);<br />echo </span><span class="string">'Begin ...&lt;br /&gt;'</span><span class="keyword">;<br />for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10 </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ )<br />{<br />    echo </span><span class="default">$i </span><span class="keyword">. </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />    </span><span class="default">flush</span><span class="keyword">();<br />    </span><span class="default">ob_flush</span><span class="keyword">();<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />}<br />echo </span><span class="string">'End ...&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129058">  <div class="votes">
    <div id="Vu129058">
    <a href="/manual/vote-note.php?id=129058&amp;page=function.ob-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129058">
    <a href="/manual/vote-note.php?id=129058&amp;page=function.ob-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129058" title="87% like this...">
    6
    </div>
  </div>
  <a href="#129058" class="name">
  <strong class="user"><em>thecichos at gmail dot com</em></strong></a><a class="genanchor" href="#129058"> &para;</a><div class="date" title="2023-11-21 12:12"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129058">
<div class="phpcode"><code><span class="html">The output buffer seems to work best when the server is returning a code 206 and setting the output_buffering lower temporarily to let it fill up<br /><br />This tells the browser to wait for additional content<br />for example:<br />// Set the header to 206<br />header("HTTP/1.1 206 Partial Content; Content-Type: text/html; charset=utf-8");<br /><br />// Flush the current outputbuffer<br />flush();<br />ob_flush();<br />ob_end_flush();<br />            <br />// Create a new output buffer<br />ob_start();<br /><br />// Save the current output buffer size<br />$tempBuffering = ini_get("output_buffering");<br />            <br />// Set a new, much smaller buffer size<br />ini_set("output_buffering", 256);<br /><br />// Do some buffering <br />!!!   All your amazing code goes here   !!!<br /><br />// Fill the buffer with something if needed<br />echo str_pad(" ", (int)ini_get("output_buffering"), " ");<br />flush();<br />ob_flush();<br /><br />// Revert the buffer size<br />ini_set("output_buffering", $tempBuffering);</span></code></div>
  </div>
 </div>
  <div class="note" id="117850">  <div class="votes">
    <div id="Vu117850">
    <a href="/manual/vote-note.php?id=117850&amp;page=function.ob-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117850">
    <a href="/manual/vote-note.php?id=117850&amp;page=function.ob-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117850" title="70% like this...">
    11
    </div>
  </div>
  <a href="#117850" class="name">
  <strong class="user"><em>chris - latko - org</em></strong></a><a class="genanchor" href="#117850"> &para;</a><div class="date" title="2015-08-19 10:53"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117850">
<div class="phpcode"><code><span class="html">Although browsers now have an all or none buffering strategy, the arguments are not moot.<br /><br />If you are not using ob_flush, you run this risk of exceeding socket timeouts (commonly seen in php-fpm/nginx combos).<br /><br />Basically, flushing solves the infamous 504 Gateway Time-out error.</span></code></div>
  </div>
 </div>
  <div class="note" id="86692">  <div class="votes">
    <div id="Vu86692">
    <a href="/manual/vote-note.php?id=86692&amp;page=function.ob-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86692">
    <a href="/manual/vote-note.php?id=86692&amp;page=function.ob-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86692" title="57% like this...">
    5
    </div>
  </div>
  <a href="#86692" class="name">
  <strong class="user"><em>Jens</em></strong></a><a class="genanchor" href="#86692"> &para;</a><div class="date" title="2008-10-29 07:01"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86692">
<div class="phpcode"><code><span class="html">If you call ob_flush() and flush() and still dont get the buffer flushed it might be because some antivirus software (Panda in this case) holds the buffer until the page has finished loaded before sending it to the browser.</span></code></div>
  </div>
 </div>
  <div class="note" id="123228">  <div class="votes">
    <div id="Vu123228">
    <a href="/manual/vote-note.php?id=123228&amp;page=function.ob-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123228">
    <a href="/manual/vote-note.php?id=123228&amp;page=function.ob-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123228" title="58% like this...">
    2
    </div>
  </div>
  <a href="#123228" class="name">
  <strong class="user"><em>jake at qzdesign dot co dot uk</em></strong></a><a class="genanchor" href="#123228"> &para;</a><div class="date" title="2018-10-12 11:24"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123228">
<div class="phpcode"><code><span class="html">If there is no active output buffer, an error of level E_NOTICE is generated (at least in PHP 7.1).  To avoid this, test first with `ob_get_level()`.</span></code></div>
  </div>
 </div>
  <div class="note" id="100462">  <div class="votes">
    <div id="Vu100462">
    <a href="/manual/vote-note.php?id=100462&amp;page=function.ob-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100462">
    <a href="/manual/vote-note.php?id=100462&amp;page=function.ob-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100462" title="58% like this...">
    3
    </div>
  </div>
  <a href="#100462" class="name">
  <strong class="user"><em>riimeik</em></strong></a><a class="genanchor" href="#100462"> &para;</a><div class="date" title="2010-10-17 01:44"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100462">
<div class="phpcode"><code><span class="html">If you're still not getting the buffer work correctly then try to clean all the others before starting your own (and even if PHP tells you that there are no buffers active):<br /><br />while(@ob_end_clean());</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ob-flush&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ob-flush.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.outcontrol.php">Output Control Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.flush.php" title="flush">flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-clean.php" title="ob_&#8203;clean">ob_&#8203;clean</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-end-clean.php" title="ob_&#8203;end_&#8203;clean">ob_&#8203;end_&#8203;clean</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-end-flush.php" title="ob_&#8203;end_&#8203;flush">ob_&#8203;end_&#8203;flush</a>
                        </li>
                                                <li class="current">
                            <a href="function.ob-flush.php" title="ob_&#8203;flush">ob_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-clean.php" title="ob_&#8203;get_&#8203;clean">ob_&#8203;get_&#8203;clean</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-contents.php" title="ob_&#8203;get_&#8203;contents">ob_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-flush.php" title="ob_&#8203;get_&#8203;flush">ob_&#8203;get_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-length.php" title="ob_&#8203;get_&#8203;length">ob_&#8203;get_&#8203;length</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-level.php" title="ob_&#8203;get_&#8203;level">ob_&#8203;get_&#8203;level</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-status.php" title="ob_&#8203;get_&#8203;status">ob_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-implicit-flush.php" title="ob_&#8203;implicit_&#8203;flush">ob_&#8203;implicit_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-list-handlers.php" title="ob_&#8203;list_&#8203;handlers">ob_&#8203;list_&#8203;handlers</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-start.php" title="ob_&#8203;start">ob_&#8203;start</a>
                        </li>
                                                <li class="">
                            <a href="function.output-add-rewrite-var.php" title="output_&#8203;add_&#8203;rewrite_&#8203;var">output_&#8203;add_&#8203;rewrite_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.output-reset-rewrite-vars.php" title="output_&#8203;reset_&#8203;rewrite_&#8203;vars">output_&#8203;reset_&#8203;rewrite_&#8203;vars</a>
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
