<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ob_end_flush - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ob-end-flush.php">
 <link rel="shorturl" href="https://www.php.net/ob-end-flush">
 <link rel="alternate" href="https://www.php.net/ob-end-flush" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.outcontrol.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ob-end-clean.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ob-flush.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ob-end-flush.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ob-end-flush.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ob-end-flush.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ob-end-flush.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ob-end-flush.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ob-end-flush.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ob-end-flush.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ob-end-flush.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ob-end-flush.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ob-end-flush.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ob-end-flush.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Flush (send) the return value of the active output handler
   and turn the active output buffer off" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ob_end_flush - Manual" />
<meta name="twitter:description" content="Flush (send) the return value of the active output handler
   and turn the active output buffer off" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ob_end_flush - Manual" />
<meta itemprop="description" content="Flush (send) the return value of the active output handler
   and turn the active output buffer off" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Flush (send) the return value of the active output handler
   and turn the active output buffer off" />

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
        <a href="function.ob-flush.php">
          ob_flush &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ob-end-clean.php">
          &laquo; ob_end_clean        </a>
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
            <option value='en/function.ob-end-flush.php' selected="selected">English</option>
            <option value='de/function.ob-end-flush.php'>German</option>
            <option value='es/function.ob-end-flush.php'>Spanish</option>
            <option value='fr/function.ob-end-flush.php'>French</option>
            <option value='it/function.ob-end-flush.php'>Italian</option>
            <option value='ja/function.ob-end-flush.php'>Japanese</option>
            <option value='pt_BR/function.ob-end-flush.php'>Brazilian Portuguese</option>
            <option value='ru/function.ob-end-flush.php'>Russian</option>
            <option value='tr/function.ob-end-flush.php'>Turkish</option>
            <option value='uk/function.ob-end-flush.php'>Ukrainian</option>
            <option value='zh/function.ob-end-flush.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ob-end-flush" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ob_end_flush</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ob_end_flush</span> &mdash; <span class="dc-title">
   Flush (send) the return value of the active output handler
   and turn the active output buffer off
 </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ob-end-flush-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ob_end_flush</strong></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function calls the output handler
   (with the <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-final">PHP_OUTPUT_HANDLER_FINAL</a></code></strong> flag),
   flushes (sends) it&#039;s return value,
   discards the contents of the active output buffer
   and turns off the active output buffer.
  </p>
  <p class="para">
   <span class="function"><strong>ob_end_flush()</strong></span> will fail
   without an active output buffer started with the
   <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-removable">PHP_OUTPUT_HANDLER_REMOVABLE</a></code></strong> flag.
  </p>
  <p class="para">
   <span class="function"><strong>ob_end_flush()</strong></span> will flush (send)
   the return value of the output handler
   even if the active output buffer was started without the
   <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-flushable">PHP_OUTPUT_HANDLER_FLUSHABLE</a></code></strong> flag.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ob-end-flush-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ob-end-flush-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.ob-end-flush-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If the function fails it generates an <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ob-end-flush-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-619">
    <p><strong>Example #1 <span class="function"><strong>ob_end_flush()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     The following example shows an easy way to flush and end all output
     buffers:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />  </span><span style="color: #007700">while (@</span><span style="color: #0000BB">ob_end_flush</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ob-end-flush-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ob-start.php" class="function" rel="rdfs-seeAlso">ob_start()</a> - Turn on output buffering</span></li>
    <li><span class="function"><a href="function.ob-get-contents.php" class="function" rel="rdfs-seeAlso">ob_get_contents()</a> - Return the contents of the output buffer</span></li>
    <li><span class="function"><a href="function.ob-flush.php" class="function" rel="rdfs-seeAlso">ob_flush()</a> - Flush (send) the return value of the active output handler</span></li>
    <li><span class="function"><a href="function.ob-get-flush.php" class="function" rel="rdfs-seeAlso">ob_get_flush()</a> - Flush (send) the return value of the active output handler,
   return the contents of the active output buffer and turn it off</span></li>
    <li><span class="function"><a href="function.ob-end-clean.php" class="function" rel="rdfs-seeAlso">ob_end_clean()</a> - Clean (erase) the contents of the active output buffer and turn it off</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/outcontrol/functions/ob-end-flush.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ob-end-flush%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ob-end-flush&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ob-end-flush.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="42979">  <div class="votes">
    <div id="Vu42979">
    <a href="/manual/vote-note.php?id=42979&amp;page=function.ob-end-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42979">
    <a href="/manual/vote-note.php?id=42979&amp;page=function.ob-end-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42979" title="64% like this...">
    13
    </div>
  </div>
  <a href="#42979" class="name">
  <strong class="user"><em>jhannus at 128kb dot com</em></strong></a><a class="genanchor" href="#42979"> &para;</a><div class="date" title="2004-06-05 09:18"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42979">
<div class="phpcode"><code><span class="html">A note on the above example...<br /><br />with PHP 4 &gt;= 4.2.0, PHP 5 you can use a combination of ob_get_level() and ob_end_flush() to avoid using the @ (error suppresion) which should probably be a little faaster.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">while (</span><span class="default">ob_get_level</span><span class="keyword">() &gt; </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">ob_end_flush</span><span class="keyword">();<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109837">  <div class="votes">
    <div id="Vu109837">
    <a href="/manual/vote-note.php?id=109837&amp;page=function.ob-end-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109837">
    <a href="/manual/vote-note.php?id=109837&amp;page=function.ob-end-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109837" title="57% like this...">
    8
    </div>
  </div>
  <a href="#109837" class="name">
  <strong class="user"><em>nico (at) nokes.de</em></strong></a><a class="genanchor" href="#109837"> &para;</a><div class="date" title="2012-08-26 04:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109837">
<div class="phpcode"><code><span class="html">best way to compress a css code:<br /><br /><span class="default">&lt;?php<br />  header</span><span class="keyword">(</span><span class="string">'Content-type: text/css'</span><span class="keyword">);<br /><br />  </span><span class="default">ob_start</span><span class="keyword">(</span><span class="string">"compress"</span><span class="keyword">);<br />  function </span><span class="default">compress</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">) {<br />    </span><span class="comment">// remove comments<br />    </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'!/\*[^*]*\*+([^/][^*]*\*+)*/!'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$buffer</span><span class="keyword">);<br />    </span><span class="comment">// remove tabs, spaces, newlines, etc.<br />    </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="string">"\r"</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">"\t"</span><span class="keyword">, </span><span class="string">'  '</span><span class="keyword">, </span><span class="string">'    '</span><span class="keyword">, </span><span class="string">'    '</span><span class="keyword">), </span><span class="string">''</span><span class="keyword">, </span><span class="default">$buffer</span><span class="keyword">);<br />    return </span><span class="default">$buffer</span><span class="keyword">;<br />  }<br /><br />  include(</span><span class="string">'./template/main.css'</span><span class="keyword">);<br />  include(</span><span class="string">'./template/classes.css'</span><span class="keyword">);<br /><br />&lt;?</span><span class="default">php<br />  ob_end_flush</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Include in &lt;head&gt;:<br />&lt;link rel="stylesheet" type="text/css" href="/design.php" media="all" /&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="103387">  <div class="votes">
    <div id="Vu103387">
    <a href="/manual/vote-note.php?id=103387&amp;page=function.ob-end-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103387">
    <a href="/manual/vote-note.php?id=103387&amp;page=function.ob-end-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103387" title="57% like this...">
    3
    </div>
  </div>
  <a href="#103387" class="name">
  <strong class="user"><em>anatoliy at miraline dot com</em></strong></a><a class="genanchor" href="#103387"> &para;</a><div class="date" title="2011-04-11 09:06"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103387">
<div class="phpcode"><code><span class="html">If you enable zlib.output_compression then level count will be increased by 1 and then this code:
<br />
<br /><span class="default">&lt;?php </span><span class="keyword">while (</span><span class="default">ob_get_level</span><span class="keyword">()) { </span><span class="default">ob_end_clean</span><span class="keyword">(); } </span><span class="default">?&gt;
<br /></span>
<br />will just freeze your script.</span></code></div>
  </div>
 </div>
  <div class="note" id="98588">  <div class="votes">
    <div id="Vu98588">
    <a href="/manual/vote-note.php?id=98588&amp;page=function.ob-end-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98588">
    <a href="/manual/vote-note.php?id=98588&amp;page=function.ob-end-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98588" title="56% like this...">
    3
    </div>
  </div>
  <a href="#98588" class="name">
  <strong class="user"><em>Mark</em></strong></a><a class="genanchor" href="#98588"> &para;</a><div class="date" title="2010-06-24 01:49"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98588">
<div class="phpcode"><code><span class="html">Wanted to speed things up and put some processing after the page has been delivered to the client. That drove me almost insane, but finally, I found a solution (php 5.2.5):
<br />
<br /><span class="default">&lt;?php
<br />ob_start</span><span class="keyword">(); </span><span class="comment">// outer buffer
<br /></span><span class="default">ob_start</span><span class="keyword">(); </span><span class="comment">// inner buffer to catch URL rewrites and other post processing
<br /></span><span class="default">session_start</span><span class="keyword">(); </span><span class="comment">// registers URL rewriter with inner buffer!
<br /></span><span class="keyword">echo </span><span class="string">'...'</span><span class="keyword">;
<br /></span><span class="comment">// log performance data to log files *after* delivering the page!
<br /></span><span class="default">register_shutdown_function</span><span class="keyword">(array(</span><span class="default">$benchmarkclass</span><span class="keyword">,</span><span class="string">'log_perf_data'</span><span class="keyword">));
<br /></span><span class="comment">// now flush output output to client
<br /></span><span class="default">ob_end_flush</span><span class="keyword">();
<br /></span><span class="comment">// need to calculate content length *after* URL rewrite!
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-length: "</span><span class="keyword">.</span><span class="default">ob_get_length</span><span class="keyword">());
<br /></span><span class="default">ob_end_flush</span><span class="keyword">();
<br /></span><span class="comment">// now we close the session and do some arbitrary clean-up tasks
<br />// registered using register_shutdown_function()
<br /></span><span class="default">session_write_close</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="25527">  <div class="votes">
    <div id="Vu25527">
    <a href="/manual/vote-note.php?id=25527&amp;page=function.ob-end-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25527">
    <a href="/manual/vote-note.php?id=25527&amp;page=function.ob-end-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25527" title="55% like this...">
    2
    </div>
  </div>
  <a href="#25527" class="name">
  <strong class="user"><em>brett at realestate-school dot com</em></strong></a><a class="genanchor" href="#25527"> &para;</a><div class="date" title="2002-09-26 01:01"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25527">
<div class="phpcode"><code><span class="html">It appears that you can call ob_end_flush() regardless of whether or not output buffering was ever started using ob_start(). This can prove useful because it saves you from having to create conditional statements based on whether a particular function or include file has started output buffering. You can simply call the ob_end_flush() anyway and if there's output in the buffer, it will be sent, otherwise your script will just keep on keepin' on.</span></code></div>
  </div>
 </div>
  <div class="note" id="54355">  <div class="votes">
    <div id="Vu54355">
    <a href="/manual/vote-note.php?id=54355&amp;page=function.ob-end-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54355">
    <a href="/manual/vote-note.php?id=54355&amp;page=function.ob-end-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54355" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54355" class="name">
  <strong class="user"><em>skippy at zuavra dot net</em></strong></a><a class="genanchor" href="#54355"> &para;</a><div class="date" title="2005-07-01 02:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54355">
<div class="phpcode"><code><span class="html">Apart from being mostly redundant, ob_end_flush() can be downright damaging in some weird cases.<br /><br />Actual example: a particular page on an Intranet website which would appear blank on Internet Explorer 6 when ob_start('ob_gzhandler') was called in the beginning and ob_end_flush() at the end.<br /><br />We couldn't figure out what made that page special no matter what we tried. The ob_ functions were placed in scripts which were include()'d by all pages just the same, but only that page did this.<br /><br />Even stranger, the problem only appeared on direct browser/server connections. Whenever the connection passed through a proxy the problem dissapeared. I'm guessing some kind of HTTP encoding headers mumbo-jumbo.<br /><br />Solution: unless you really need it in particular cases, remove the ob_end_flush() call and rely on the builtin, automatic buffer flush.</span></code></div>
  </div>
 </div>
  <div class="note" id="129055">  <div class="votes">
    <div id="Vu129055">
    <a href="/manual/vote-note.php?id=129055&amp;page=function.ob-end-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129055">
    <a href="/manual/vote-note.php?id=129055&amp;page=function.ob-end-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129055" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129055" class="name">
  <strong class="user"><em>Patrick</em></strong></a><a class="genanchor" href="#129055"> &para;</a><div class="date" title="2023-11-19 04:50"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129055">
<div class="phpcode"><code><span class="html">NOTE: In IIS, flushing the output buffer doesnt work until you add the following to your web.config file under the PHP handler:<br /><br />responseBufferLimit="0"<br /><br />I discovered this when I would only get SSE output when the script failed.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ob-end-flush&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ob-end-flush.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.ob-end-flush.php" title="ob_&#8203;end_&#8203;flush">ob_&#8203;end_&#8203;flush</a>
                        </li>
                                                <li class="">
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
