<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ob_start - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ob-start.php">
 <link rel="shorturl" href="https://www.php.net/ob-start">
 <link rel="alternate" href="https://www.php.net/ob-start" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.outcontrol.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ob-list-handlers.php">
 <link rel="next" href="https://www.php.net/manual/en/function.output-add-rewrite-var.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ob-start.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ob-start.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ob-start.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ob-start.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ob-start.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ob-start.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ob-start.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ob-start.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ob-start.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ob-start.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ob-start.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Turn on output buffering" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ob_start - Manual" />
<meta name="twitter:description" content="Turn on output buffering" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ob_start - Manual" />
<meta itemprop="description" content="Turn on output buffering" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Turn on output buffering" />

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
        <a href="function.output-add-rewrite-var.php">
          output_add_rewrite_var &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ob-list-handlers.php">
          &laquo; ob_list_handlers        </a>
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
            <option value='en/function.ob-start.php' selected="selected">English</option>
            <option value='de/function.ob-start.php'>German</option>
            <option value='es/function.ob-start.php'>Spanish</option>
            <option value='fr/function.ob-start.php'>French</option>
            <option value='it/function.ob-start.php'>Italian</option>
            <option value='ja/function.ob-start.php'>Japanese</option>
            <option value='pt_BR/function.ob-start.php'>Brazilian Portuguese</option>
            <option value='ru/function.ob-start.php'>Russian</option>
            <option value='tr/function.ob-start.php'>Turkish</option>
            <option value='uk/function.ob-start.php'>Ukrainian</option>
            <option value='zh/function.ob-start.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ob-start" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ob_start</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ob_start</span> &mdash; <span class="dc-title">Turn on output buffering</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ob-start-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ob_start</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span></span> <code class="parameter">$callback</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$chunk_size</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-stdflags">PHP_OUTPUT_HANDLER_STDFLAGS</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function will turn output buffering on.
   While output buffering is active no output is sent from the script,
   instead the output is stored in an internal buffer.
   See <a href="outcontrol.what-output-is-buffered.php" class="xref">What Output Is Buffered?</a>
   on exactly what output is affected.
  </p>
  <p class="para">
   Output buffers are stackable, that is,
   <span class="function"><strong>ob_start()</strong></span> may be called while another buffer is active.
   If multiple output buffers are active,
   output is being filtered sequentially
   through each of them in nesting order.
   See <a href="outcontrol.nesting-output-buffers.php" class="xref">Nesting Output Buffers</a> for more details.
  </p>
  <p class="para">
   See <a href="outcontrol.user-level-output-buffers.php" class="xref">User-Level Output Buffers</a>
   for a detailed description of output buffers.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ob-start-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
       An optional <code class="parameter">callback</code> <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> may be
       specified. It can also be bypassed by passing <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
      <p class="para">
       <code class="parameter">callback</code> is invoked when the output buffer is
       flushed (sent), cleaned, or when the output buffer is flushed
       at the end of the script.
      </p>
      <p class="para">
       The signature of the <code class="parameter">callback</code> is as follows:
      </p>
      <p class="para">
       <div class="methodsynopsis dc-description">
        <span class="methodname"><span class="replaceable">handler</span></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$buffer</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$phase</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

       <dl>
        
         <dt><code class="parameter">buffer</code></dt>
         <dd>
          <span class="simpara">
           Contents of the output buffer.
          </span>
         </dd>
        
        
         <dt><code class="parameter">phase</code></dt>
         <dd>
          <span class="simpara">
           Bitmask of
           <a href="outcontrol.constants.php#constant.php-output-handler-start" class="link">
            <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-start">PHP_OUTPUT_HANDLER_<span class="replaceable">*</span></a></code></strong>
            constants
           </a>.
           See <a href="outcontrol.flags-passed-to-output-handlers.php" class="xref">Flags Passed To Output Handlers</a>
           for more details.
          </span>
         </dd>
        
       </dl>
      </p>
      <p class="para">
       If <code class="parameter">callback</code> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
       the contents of the buffer are returned.
       See <a href="outcontrol.output-handler-return-values.php" class="xref">Output Handler Return Values</a>
       for more details.
      </p>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="simpara">
        Calling any of the following functions from within an output handler
        will result in a fatal error:
        <span class="function"><a href="function.ob-clean.php" class="function">ob_clean()</a></span>, <span class="function"><a href="function.ob-end-clean.php" class="function">ob_end_clean()</a></span>,
        <span class="function"><a href="function.ob-end-flush.php" class="function">ob_end_flush()</a></span>, <span class="function"><a href="function.ob-flush.php" class="function">ob_flush()</a></span>,
        <span class="function"><a href="function.ob-get-clean.php" class="function">ob_get_clean()</a></span>, <span class="function"><a href="function.ob-get-flush.php" class="function">ob_get_flush()</a></span>,
        <span class="function"><strong>ob_start()</strong></span>.
       </p>
      </div>
      <p class="para">
       See <a href="outcontrol.output-handlers.php" class="xref">Output Handlers</a>
       and <a href="outcontrol.working-with-output-handlers.php" class="xref">Working With Output Handlers</a>
       for more details on <code class="parameter">callback</code>s (output handlers).
      </p>
     </dd>
    
    
     <dt><code class="parameter">chunk_size</code></dt>
     <dd>
      <p class="para">
       If the optional parameter <code class="parameter">chunk_size</code> is passed,
       the buffer will be flushed after any block of code resulting in output
       that causes the buffer&#039;s length to equal
       or exceed <code class="parameter">chunk_size</code>.
       The default value <code class="literal">0</code> means
       that all output is buffered until the buffer is turned off.
       See <a href="outcontrol.buffer-size.php" class="xref">Buffer Size</a> for more details.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">flags</code> parameter is a bitmask that controls
       the operations that can be performed on the output buffer. The default
       is to allow output buffers to be cleaned, flushed and removed, which
       can be set explicitly via the
       <a href="outcontrol.constants.php#outcontrol.constants.buffer-control-flags" class="link">
        buffer control flags
       </a>.
       See <a href="outcontrol.operations-on-buffers.php" class="xref">Operations Allowed On Buffers</a>
       for more details.
      </p>
      <p class="para">
       Each flag controls access to a set of functions, as described below:
       <table class="doctable informaltable">
        
         <thead>
          <tr>
           <th>Constant</th>
           <th>Functions</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="outcontrol.constants.php#constant.php-output-handler-cleanable">PHP_OUTPUT_HANDLER_CLEANABLE</a></code></strong></td>
           <td>
            <span class="function"><a href="function.ob-clean.php" class="function">ob_clean()</a></span>
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="outcontrol.constants.php#constant.php-output-handler-flushable">PHP_OUTPUT_HANDLER_FLUSHABLE</a></code></strong></td>
           <td>
            <span class="function"><a href="function.ob-flush.php" class="function">ob_flush()</a></span>
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="outcontrol.constants.php#constant.php-output-handler-removable">PHP_OUTPUT_HANDLER_REMOVABLE</a></code></strong></td>
           <td>
            <span class="function"><a href="function.ob-end-clean.php" class="function">ob_end_clean()</a></span>,
            <span class="function"><a href="function.ob-end-flush.php" class="function">ob_end_flush()</a></span>,
            <span class="function"><a href="function.ob-get-clean.php" class="function">ob_get_clean()</a></span>,
            <span class="function"><a href="function.ob-get-flush.php" class="function">ob_get_flush()</a></span>
           </td>
          </tr>

         </tbody>
        
       </table>

       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <span class="simpara">
         Prior to PHP 8.4.0, the flags parameter could set
         the <a href="outcontrol.constants.php#outcontrol.constants.flags-returned-by-handler" class="link">output handler status flags</a> as well.
        </span>
       </p></blockquote>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ob-start-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ob-start-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-627">
    <p><strong>Example #1 User defined callback function example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">callback</span><span style="color: #007700">(</span><span style="color: #0000BB">$buffer</span><span style="color: #007700">)<br />{<br />  </span><span style="color: #FF8000">// replace all the apples with oranges<br />  </span><span style="color: #007700">return (</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">"apples"</span><span style="color: #007700">, </span><span style="color: #DD0000">"oranges"</span><span style="color: #007700">, </span><span style="color: #0000BB">$buffer</span><span style="color: #007700">));<br />}<br /><br /></span><span style="color: #0000BB">ob_start</span><span style="color: #007700">(</span><span style="color: #DD0000">"callback"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;<br /></span>&lt;html&gt;<br />&lt;body&gt;<br />&lt;p&gt;It's like comparing apples to oranges.&lt;/p&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;<br /><span style="color: #0000BB">&lt;?php<br /><br />ob_end_flush</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">&lt;html&gt;
&lt;body&gt;
&lt;p&gt;It&#039;s like comparing oranges to oranges.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
</div>
    </div>
   </div>
  </p>

  <p class="para">
   <div class="example" id="function.ob-start.flags-bc">
    <p><strong>Example #2 Creating an unerasable output buffer</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />ob_start</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_OUTPUT_HANDLER_STDFLAGS </span><span style="color: #007700">^ </span><span style="color: #0000BB">PHP_OUTPUT_HANDLER_REMOVABLE</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ob-start-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ob-get-contents.php" class="function" rel="rdfs-seeAlso">ob_get_contents()</a> - Return the contents of the output buffer</span></li>
    <li><span class="function"><a href="function.ob-end-clean.php" class="function" rel="rdfs-seeAlso">ob_end_clean()</a> - Clean (erase) the contents of the active output buffer and turn it off</span></li>
    <li><span class="function"><a href="function.ob-end-flush.php" class="function" rel="rdfs-seeAlso">ob_end_flush()</a> - Flush (send) the return value of the active output handler
   and turn the active output buffer off</span></li>
    <li><span class="function"><a href="function.ob-implicit-flush.php" class="function" rel="rdfs-seeAlso">ob_implicit_flush()</a> - Turn implicit flush on/off</span></li>
    <li><span class="function"><a href="function.ob-gzhandler.php" class="function" rel="rdfs-seeAlso">ob_gzhandler()</a> - ob_start callback function to gzip output buffer</span></li>
    <li><span class="function"><a href="function.ob-iconv-handler.php" class="function" rel="rdfs-seeAlso">ob_iconv_handler()</a> - Convert character encoding as output buffer handler</span></li>
    <li><span class="function"><a href="function.mb-output-handler.php" class="function" rel="rdfs-seeAlso">mb_output_handler()</a> - Callback function converts character encoding in output buffer</span></li>
    <li><span class="function"><a href="function.ob-tidyhandler.php" class="function" rel="rdfs-seeAlso">ob_tidyhandler()</a> - ob_start callback function to repair the buffer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/outcontrol/functions/ob-start.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ob-start%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ob-start&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ob-start.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="50488">  <div class="votes">
    <div id="Vu50488">
    <a href="/manual/vote-note.php?id=50488&amp;page=function.ob-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50488">
    <a href="/manual/vote-note.php?id=50488&amp;page=function.ob-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50488" title="69% like this...">
    53
    </div>
  </div>
  <a href="#50488" class="name">
  <strong class="user"><em>Ray Paseur (Paseur ... ImagineDB.com)</em></strong></a><a class="genanchor" href="#50488"> &para;</a><div class="date" title="2005-03-01 01:50"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50488">
<div class="phpcode"><code><span class="html">You can use PHP to generate a static HTML page.  Useful if you have a complex script that, for performance reasons, you do not want site visitors to run repeatedly on demand.  A "cron" job can execute the PHP script to create the HTML page.  For example:<br /><br /><span class="default">&lt;?php </span><span class="comment">// CREATE index.html<br />   </span><span class="default">ob_start</span><span class="keyword">();<br /></span><span class="comment">/* PERFORM COMLEX QUERY, ECHO RESULTS, ETC. */<br />   </span><span class="default">$page </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />   </span><span class="default">ob_end_clean</span><span class="keyword">();<br />   </span><span class="default">$cwd </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">();<br />   </span><span class="default">$file </span><span class="keyword">= </span><span class="string">"</span><span class="default">$cwd</span><span class="string">" </span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">. </span><span class="string">"index.html"</span><span class="keyword">;<br />   @</span><span class="default">chmod</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="default">0755</span><span class="keyword">);<br />   </span><span class="default">$fw </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);<br />   </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fw</span><span class="keyword">,</span><span class="default">$page</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$page</span><span class="keyword">));<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fw</span><span class="keyword">);<br />   die();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="66823">  <div class="votes">
    <div id="Vu66823">
    <a href="/manual/vote-note.php?id=66823&amp;page=function.ob-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66823">
    <a href="/manual/vote-note.php?id=66823&amp;page=function.ob-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66823" title="88% like this...">
    21
    </div>
  </div>
  <a href="#66823" class="name">
  <strong class="user"><em>net_navard at yahoo dot com</em></strong></a><a class="genanchor" href="#66823"> &para;</a><div class="date" title="2006-05-30 07:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66823">
<div class="phpcode"><code><span class="html">Hello firends<br /><br />ob_start() opens a buffer in which all output is stored. So every time you do an echo, the output of that is added to the buffer. When the script finishes running, or you call ob_flush(), that stored output is sent to the browser (and gzipped first if you use ob_gzhandler, which means it downloads faster). <br /><br />The most common reason to use ob_start is as a way to collect data that would otherwise be sent to the browser.<br /><br />These are two usages of ob_start():<br /><br />1-Well, you have more control over the output. Trivial example: say you want to show the user an error message, but the script has already sent some HTML to the browser. It'll look ugly, with a half-rendered page and then an error message. Using the output buffering functions, you can simply delete the buffer and sebuffer and send only the error message, which means it looks all nice and neat buffer and send <br />2-The reason output buffering was invented was to create a seamless transfer, from: php engine -&gt; apache -&gt; operating system -&gt; web user<br /><br />If you make sure each of those use the same buffer size, the system will use less writes, use less system resources and be able to handle more traffic. <br /><br />With Regards, Hossein</span></code></div>
  </div>
 </div>
  <div class="note" id="37648">  <div class="votes">
    <div id="Vu37648">
    <a href="/manual/vote-note.php?id=37648&amp;page=function.ob-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37648">
    <a href="/manual/vote-note.php?id=37648&amp;page=function.ob-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37648" title="79% like this...">
    29
    </div>
  </div>
  <a href="#37648" class="name">
  <strong class="user"><em>ed.oohay (a) suamhcs_rodnan</em></strong></a><a class="genanchor" href="#37648"> &para;</a><div class="date" title="2003-11-21 05:18"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37648">
<div class="phpcode"><code><span class="html">Output Buffering even works in nested scopes or might be applied in recursive structures... thought this might save someone a little time guessing and testing :)<br /><br />&lt;pre&gt;<span class="default">&lt;?php<br />    <br />    ob_start</span><span class="keyword">();              </span><span class="comment">// start output buffer 1<br />    </span><span class="keyword">echo </span><span class="string">"a"</span><span class="keyword">;                </span><span class="comment">// fill ob1<br />        <br />        </span><span class="default">ob_start</span><span class="keyword">();              </span><span class="comment">// start output buffer 2<br />        </span><span class="keyword">echo </span><span class="string">"b"</span><span class="keyword">;                </span><span class="comment">// fill ob2<br />        </span><span class="default">$s1 </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">(); </span><span class="comment">// read ob2 ("b")<br />        </span><span class="default">ob_end_flush</span><span class="keyword">();          </span><span class="comment">// flush ob2 to ob1<br />        <br />    </span><span class="keyword">echo </span><span class="string">"c"</span><span class="keyword">;                </span><span class="comment">// continue filling ob1<br />    </span><span class="default">$s2 </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">(); </span><span class="comment">// read ob1 ("a" . "b" . "c")<br />    </span><span class="default">ob_end_flush</span><span class="keyword">();          </span><span class="comment">// flush ob1 to browser<br />    <br />    // echoes "b" followed by "abc", as supposed to:<br />    </span><span class="keyword">echo </span><span class="string">"&lt;HR&gt;</span><span class="default">$s1</span><span class="string">&lt;HR&gt;</span><span class="default">$s2</span><span class="string">&lt;HR&gt;"</span><span class="keyword">;<br />    <br /></span><span class="default">?&gt;</span>&lt;/pre&gt;<br /><br />... at least works on Apache 1.3.28<br /><br />Nandor =)</span></code></div>
  </div>
 </div>
  <div class="note" id="77223">  <div class="votes">
    <div id="Vu77223">
    <a href="/manual/vote-note.php?id=77223&amp;page=function.ob-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77223">
    <a href="/manual/vote-note.php?id=77223&amp;page=function.ob-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77223" title="65% like this...">
    6
    </div>
  </div>
  <a href="#77223" class="name">
  <strong class="user"><em>Asher Haig (ahaig at ridiculouspower dot com)</em></strong></a><a class="genanchor" href="#77223"> &para;</a><div class="date" title="2007-08-20 01:17"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77223">
<div class="phpcode"><code><span class="html">When a script ends, all buffered output is flushed (this is not a bug: <a href="http://bugs.php.net/bug.php?id=42334&amp;thanks=4" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=42334&amp;thanks=4</a>). What happens when the script throws an error (and thus ends) in the middle of an output buffer? The script spits out everything in the buffer before printing the error!<br /><br />Here is the simplest solution I have been able to find. Put it at the beginning of the error handling function to clear all buffered data and print only the error:<br /><br />$handlers = ob_list_handlers();<br />while ( ! empty($handlers) )    {<br />    ob_end_clean();<br />    $handlers = ob_list_handlers();<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="101082">  <div class="votes">
    <div id="Vu101082">
    <a href="/manual/vote-note.php?id=101082&amp;page=function.ob-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101082">
    <a href="/manual/vote-note.php?id=101082&amp;page=function.ob-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101082" title="58% like this...">
    6
    </div>
  </div>
  <a href="#101082" class="name">
  <strong class="user"><em>Chris</em></strong></a><a class="genanchor" href="#101082"> &para;</a><div class="date" title="2010-11-24 04:35"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101082">
<div class="phpcode"><code><span class="html">Careful with while using functions that change headers of a page; that change will not be undone when ending output buffering.<br /><br />If you for instance have a class that generates an image and sets the appropriate headers, they will still be in place after the end of ob.<br /><br />For instance:<br /><span class="default">&lt;?php<br />  ob_start</span><span class="keyword">();<br />  </span><span class="default">myClass</span><span class="keyword">::</span><span class="default">renderPng</span><span class="keyword">(); </span><span class="comment">//header("Content-Type: image/png"); in here<br />  </span><span class="default">$pngString </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />  </span><span class="default">ob_end_clean</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />will put the image bytes into $pngString, and set the content type to image/png. Though the image will not be sent to the client, the png header is still in place; if you do html output here, the browser will most likely display "image error, cannot be viewed", at least firefox does.<br /><br />You need to set the correct image type (text/html) manually in this case.</span></code></div>
  </div>
 </div>
  <div class="note" id="60483">  <div class="votes">
    <div id="Vu60483">
    <a href="/manual/vote-note.php?id=60483&amp;page=function.ob-start&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60483">
    <a href="/manual/vote-note.php?id=60483&amp;page=function.ob-start&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60483" title="57% like this...">
    2
    </div>
  </div>
  <a href="#60483" class="name">
  <strong class="user"><em>ernest at vogelsinger dot at</em></strong></a><a class="genanchor" href="#60483"> &para;</a><div class="date" title="2006-01-08 09:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60483">
<div class="phpcode"><code><span class="html">When you rely on URL rewriting to pass the PHP session ID you should be careful with ob_get_contents(), as this might disable URL rewriting completely.<br /><br />Example:<br />ob_start();<br />session_start();<br />echo '&lt;a href="."&gt;self link&lt;/a&gt;';<br />$data = ob_get_contents();<br />ob_end_clean();<br />echo $data;<br /><br />In the example above, URL rewriting will never occur. In fact, rewriting would occur if you ended the buffering envelope using ob_end_flush(). It seems to me that rewriting occurs in the very same buffering envelope where the session gets started, not at the final output stage.<br /><br />If you need a scenario like the one above, using an "inner envelope" will help:<br /><br />ob_start();<br />ob_start();   // add the inner buffering envelope<br />session_start();<br />echo '&lt;a href="."&gt;self link&lt;/a&gt;';<br />ob_end_flush(); // closing the inner envelope will activate URL rewriting<br />$data = ob_get_contents();<br />ob_end_clean();<br />echo $data;<br /><br />In case you're interested or believe like me that this is rather a design flaw instead of a feature, please visit bug #35933 (<a href="http://bugs.php.net/bug.php?id=35933" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=35933</a>) and comment on it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ob-start&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ob-start.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
