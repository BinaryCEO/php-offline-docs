<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mb_ereg_replace - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mb-ereg-replace.php">
 <link rel="shorturl" href="https://www.php.net/mb-ereg-replace">
 <link rel="alternate" href="https://www.php.net/mb-ereg-replace" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mbstring.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mb-ereg-match.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mb-ereg-replace-callback.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mb-ereg-replace.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mb-ereg-replace.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mb-ereg-replace.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mb-ereg-replace.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mb-ereg-replace.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mb-ereg-replace.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mb-ereg-replace.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mb-ereg-replace.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mb-ereg-replace.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mb-ereg-replace.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mb-ereg-replace.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Replace regular expression with multibyte support" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mb_ereg_replace - Manual" />
<meta name="twitter:description" content="Replace regular expression with multibyte support" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mb_ereg_replace - Manual" />
<meta itemprop="description" content="Replace regular expression with multibyte support" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Replace regular expression with multibyte support" />

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
        <a href="function.mb-ereg-replace-callback.php">
          mb_ereg_replace_callback &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mb-ereg-match.php">
          &laquo; mb_ereg_match        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.mbstring.php'>Multibyte String</a></li>      <li><a href='ref.mbstring.php'>Multibyte String Functions</a></li>      </ul>
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
            <option value='en/function.mb-ereg-replace.php' selected="selected">English</option>
            <option value='de/function.mb-ereg-replace.php'>German</option>
            <option value='es/function.mb-ereg-replace.php'>Spanish</option>
            <option value='fr/function.mb-ereg-replace.php'>French</option>
            <option value='it/function.mb-ereg-replace.php'>Italian</option>
            <option value='ja/function.mb-ereg-replace.php'>Japanese</option>
            <option value='pt_BR/function.mb-ereg-replace.php'>Brazilian Portuguese</option>
            <option value='ru/function.mb-ereg-replace.php'>Russian</option>
            <option value='tr/function.mb-ereg-replace.php'>Turkish</option>
            <option value='uk/function.mb-ereg-replace.php'>Ukrainian</option>
            <option value='zh/function.mb-ereg-replace.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mb-ereg-replace" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mb_ereg_replace</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mb_ereg_replace</span> &mdash; <span class="dc-title">Replace regular expression with multibyte support</span></p>

 </div>
   
 <div class="refsect1 description" id="refsect1-function.mb-ereg-replace-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mb_ereg_replace</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$replacement</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>

  <p class="simpara">
   Scans <code class="parameter">string</code> for matches to
   <code class="parameter">pattern</code>, then replaces the matched text
   with <code class="parameter">replacement</code>  
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mb-ereg-replace-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">pattern</code></dt>
     <dd>
      <p class="para">
       The regular expression pattern.
      </p>
      <p class="para">
       Multibyte characters may be used in <code class="parameter">pattern</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">replacement</code></dt>
     <dd>
      <p class="para">
       The replacement text.
      </p>
     </dd>
    
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being checked.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <span class="simpara">
       The search option. See <span class="function"><a href="function.mb-regex-set-options.php" class="function">mb_regex_set_options()</a></span> for explanation.
      </span>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.mb-ereg-replace-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The resultant <span class="type"><a href="language.types.string.php" class="type string">string</a></span> on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
   If <code class="parameter">string</code> is not valid for the current encoding, <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>
   is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.mb-ereg-replace-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.0.0</td>
       <td>
        <code class="parameter">options</code> is nullable now.
       </td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        The function checks whether <code class="parameter">string</code> is valid for the
        current encoding.
       </td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        The <code class="literal">e</code> modifier has been deprecated.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.mb-ereg-replace-notes">
  <h3 class="title">Notes</h3>
  
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">The internal encoding or the
character encoding specified by <span class="function"><a href="function.mb-regex-encoding.php" class="function">mb_regex_encoding()</a></span>
will be used as the character encoding for this function.</p></p></blockquote>
  <div class="warning"><strong class="warning">Warning</strong><p class="para">Never use the <code class="literal">e</code> modifier when working on untrusted input. No automatic escaping will happen (as known from <span class="function"><a href="function.preg-replace.php" class="function">preg_replace()</a></span>). Not taking care of this will most likely create remote code execution vulnerabilities in your application.</p></div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mb-ereg-replace-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-regex-encoding.php" class="function" rel="rdfs-seeAlso">mb_regex_encoding()</a> - Set/Get character encoding for multibyte regex</span></li>
    <li><span class="function"><a href="function.mb-eregi-replace.php" class="function" rel="rdfs-seeAlso">mb_eregi_replace()</a> - Replace regular expression with multibyte support ignoring case</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/functions/mb-ereg-replace.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mb-ereg-replace%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mb-ereg-replace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-ereg-replace.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="101615">  <div class="votes">
    <div id="Vu101615">
    <a href="/manual/vote-note.php?id=101615&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101615">
    <a href="/manual/vote-note.php?id=101615&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101615" title="84% like this...">
    128
    </div>
  </div>
  <a href="#101615" class="name">
  <strong class="user"><em>Pluche</em></strong></a><a class="genanchor" href="#101615"> &para;</a><div class="date" title="2010-12-30 04:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101615">
<div class="phpcode"><code><span class="html">Unlike preg_replace, mb_ereg_replace doesn't use separators
<br />
<br />Exemple with preg_replace :
<br /><span class="default">&lt;?php $data </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/[^A-Za-z0-9\.\-]/"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />Exemple with mb_ereg_replace :
<br /><span class="default">&lt;?php $data </span><span class="keyword">= </span><span class="default">mb_ereg_replace</span><span class="keyword">(</span><span class="string">"[^A-Za-z0-9\.\-]"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127118">  <div class="votes">
    <div id="Vu127118">
    <a href="/manual/vote-note.php?id=127118&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127118">
    <a href="/manual/vote-note.php?id=127118&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127118" title="100% like this...">
    4
    </div>
  </div>
  <a href="#127118" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#127118"> &para;</a><div class="date" title="2022-05-19 06:35"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127118">
<div class="phpcode"><code><span class="html">Notations to reference captures in the replacement string:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// (1) \\number notation: (1 to 9, not greater than 9)<br /></span><span class="keyword">echo </span><span class="default">mb_ereg_replace</span><span class="keyword">(</span><span class="string">'(\S*) (\S*) (\S*)'</span><span class="keyword">, </span><span class="string">'\\1 jam, \\2 juice, \\3 squash'</span><span class="keyword">, </span><span class="string">'apple orange lemon'</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">; </span><span class="comment">// apple jam, orange juice, lemon squash<br /><br />// (2) \k&lt;number&gt; notation: (also greater than 9) (also as \k'number')<br /></span><span class="keyword">echo </span><span class="default">mb_ereg_replace</span><span class="keyword">(</span><span class="string">'(\S*) (\S*) (\S*)'</span><span class="keyword">, </span><span class="string">'\k&lt;1&gt; jam, \k&lt;2&gt; juice, \k&lt;3&gt; squash'</span><span class="keyword">, </span><span class="string">'apple orange lemon'</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">; </span><span class="comment">// (same as above)<br /><br />// (3) \k&lt;word&gt; notation: (also as \k'word')<br /></span><span class="keyword">echo </span><span class="default">mb_ereg_replace</span><span class="keyword">(</span><span class="string">'(?&lt;word1&gt;\S*) (?&lt;word2&gt;\S*) (?&lt;word3&gt;\S*)'</span><span class="keyword">, </span><span class="string">'\k&lt;word1&gt; jam, \k&lt;word2&gt; juice, \k&lt;word3&gt; squash'</span><span class="keyword">, </span><span class="string">'apple orange lemon'</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">; </span><span class="comment">// (same as above)<br /><br />// Note non-named-subpatterns like "(\S*)" should not be used with named-subpatterns like "(?&lt;word&gt;..)" because non-named-subpatterns cannot be captured when named-subpatterns exist.</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88671">  <div class="votes">
    <div id="Vu88671">
    <a href="/manual/vote-note.php?id=88671&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88671">
    <a href="/manual/vote-note.php?id=88671&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88671" title="95% like this...">
    20
    </div>
  </div>
  <a href="#88671" class="name">
  <strong class="user"><em>daemoneye at gmail dot com</em></strong></a><a class="genanchor" href="#88671"> &para;</a><div class="date" title="2009-02-03 02:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88671">
<div class="phpcode"><code><span class="html">I got a pretty nasty error while trying to parse table rows(all contents were set to UTF-8) from the database for a dictionary project. The idea was to get all the rows from the first table (that is a table with bulgarian phrase in the first field, and its translation in english, french and german in the next fields). I needed to index all the bulgarian words that are found in the table to make an intelligent search. And that is where my headache started.<br /><br />First of all, even with mb_strtolower() a lot of cyrillic characters went corrupted (ex: 'т,ъ,у,ф,б,г,з,ж,' etc...). After an hour of different attempts I got such a solution:<br /><br /><span class="default">&lt;?php<br /><br />mb_internal_encoding</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">);<br /></span><span class="default">mb_regex_encoding</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">);<br /><br /></span><span class="default">$rows </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">getRows</span><span class="keyword">();<br /><br /></span><span class="default">$contents </span><span class="keyword">= array();<br />foreach (</span><span class="default">$rows </span><span class="keyword">as </span><span class="default">$eachRow</span><span class="keyword">)<br />{<br />    </span><span class="default">$cleared </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$commonWords</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">stripslashes</span><span class="keyword">(</span><span class="default">$eachRow</span><span class="keyword">[</span><span class="string">'bulgarian'</span><span class="keyword">]), </span><span class="string">'UTF-8' </span><span class="keyword">));<br />    if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$cleared</span><span class="keyword">) != </span><span class="string">''</span><span class="keyword">) </span><span class="default">$contents</span><span class="keyword">[] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$cleared</span><span class="keyword">);<br />}    <br /><br /></span><span class="default">$list </span><span class="keyword">= array();<br />foreach (</span><span class="default">$contents </span><span class="keyword">as </span><span class="default">$eachRow</span><span class="keyword">)<br />{<br />    </span><span class="default">$exploded </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$eachRow</span><span class="keyword">);<br />    foreach (</span><span class="default">$exploded </span><span class="keyword">as </span><span class="default">$eachExpl</span><span class="keyword">)<br />    {<br />        </span><span class="default">$eachExpl </span><span class="keyword">= </span><span class="default">mb_ereg_replace</span><span class="keyword">(</span><span class="string">'[^а-я ]'</span><span class="keyword">,</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$eachExpl</span><span class="keyword">);<br />        if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$eachExpl</span><span class="keyword">) != </span><span class="string">''</span><span class="keyword">) <br />            if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$eachExpl</span><span class="keyword">, </span><span class="default">$list</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">))    </span><span class="default">$list</span><span class="keyword">[] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$eachExpl</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />To work properly I got to set all the internal encoding settings to UTF-8. Else the default Latin-1 got half my database with missing characters.<br /><br />I am posting this solution just in case someone has encountered a similar problem. Hope it helps you in case you need something like that.</span></code></div>
  </div>
 </div>
  <div class="note" id="104440">  <div class="votes">
    <div id="Vu104440">
    <a href="/manual/vote-note.php?id=104440&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104440">
    <a href="/manual/vote-note.php?id=104440&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104440" title="91% like this...">
    10
    </div>
  </div>
  <a href="#104440" class="name">
  <strong class="user"><em>trng</em></strong></a><a class="genanchor" href="#104440"> &para;</a><div class="date" title="2011-06-15 09:22"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104440">
<div class="phpcode"><code><span class="html">You can use \\n for capture group in replacement.<br />And you can NOT use $n notation (unlike preg_replace function).</span></code></div>
  </div>
 </div>
  <div class="note" id="118682">  <div class="votes">
    <div id="Vu118682">
    <a href="/manual/vote-note.php?id=118682&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118682">
    <a href="/manual/vote-note.php?id=118682&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118682" title="88% like this...">
    13
    </div>
  </div>
  <a href="#118682" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118682"> &para;</a><div class="date" title="2016-01-19 11:23"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118682">
<div class="phpcode"><code><span class="html">Pluche's comment should REALLY be added to the documentation, preferably under the "$pattern" param description. It is crucial to using this function.</span></code></div>
  </div>
 </div>
  <div class="note" id="84657">  <div class="votes">
    <div id="Vu84657">
    <a href="/manual/vote-note.php?id=84657&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84657">
    <a href="/manual/vote-note.php?id=84657&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84657" title="66% like this...">
    7
    </div>
  </div>
  <a href="#84657" class="name">
  <strong class="user"><em>keizo at gomo dot jp</em></strong></a><a class="genanchor" href="#84657"> &para;</a><div class="date" title="2008-07-23 09:32"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84657">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br />$pattern </span><span class="keyword">= </span><span class="string">"([あ-ん]+)[0-9]+"</span><span class="keyword">;
<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">mb_ereg_replace</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'「\\1」:\\0'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />you can use \\n for capture group in replacement</span></code></div>
  </div>
 </div>
  <div class="note" id="121590">  <div class="votes">
    <div id="Vu121590">
    <a href="/manual/vote-note.php?id=121590&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121590">
    <a href="/manual/vote-note.php?id=121590&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121590" title="60% like this...">
    1
    </div>
  </div>
  <a href="#121590" class="name">
  <strong class="user"><em>Alexey Khrulev</em></strong></a><a class="genanchor" href="#121590"> &para;</a><div class="date" title="2017-08-31 10:10"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121590">
<div class="phpcode"><code><span class="html">If encoding of PHP script differs from encoding of string to be processed by mb_ereg_replace(), then you can't just write pattern in script. Both $pattern and $replacement must be converted to same encoding as string to be processed. In this example script is in UTF-8, file to be processed is in UTF-16LE encoding:<br /><br /><span class="default">&lt;?php<br />$file_encoding </span><span class="keyword">= </span><span class="string">'UTF-16LE'</span><span class="keyword">;<br /></span><span class="default">mb_regex_encoding</span><span class="keyword">( </span><span class="default">$file_encoding </span><span class="keyword">);<br /><br /></span><span class="default">$pattern     </span><span class="keyword">= </span><span class="string">"aaa"</span><span class="keyword">;<br /></span><span class="default">$replacement </span><span class="keyword">= </span><span class="string">"AAA"</span><span class="keyword">;<br /></span><span class="default">$pattern_encoded     </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">( </span><span class="default">$pattern</span><span class="keyword">,     </span><span class="default">$file_encoding</span><span class="keyword">, </span><span class="string">'UTF-8' </span><span class="keyword">);<br /></span><span class="default">$replacement_encoded </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">( </span><span class="default">$replacement</span><span class="keyword">, </span><span class="default">$file_encoding</span><span class="keyword">, </span><span class="string">'UTF-8' </span><span class="keyword">);<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">mb_ereg_replace</span><span class="keyword">( </span><span class="default">$pattern_encoded</span><span class="keyword">, </span><span class="default">$replacement_encoded</span><span class="keyword">, </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'UTF-16LE.txt'</span><span class="keyword">) );<br /></span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">'UTF-16LE-updated.txt'</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71533">  <div class="votes">
    <div id="Vu71533">
    <a href="/manual/vote-note.php?id=71533&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71533">
    <a href="/manual/vote-note.php?id=71533&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71533" title="57% like this...">
    1
    </div>
  </div>
  <a href="#71533" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#71533"> &para;</a><div class="date" title="2006-12-04 08:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71533">
<div class="phpcode"><code><span class="html">'i' option does not work correctly with multibyte characters. The function does not locate/replace the multibyte string if it's different case then specified on multibyte needle which is in different case.</span></code></div>
  </div>
 </div>
  <div class="note" id="55659">  <div class="votes">
    <div id="Vu55659">
    <a href="/manual/vote-note.php?id=55659&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55659">
    <a href="/manual/vote-note.php?id=55659&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55659" title="57% like this...">
    1
    </div>
  </div>
  <a href="#55659" class="name">
  <strong class="user"><em>faxe at neostrada dot pl</em></strong></a><a class="genanchor" href="#55659"> &para;</a><div class="date" title="2005-08-09 03:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55659">
<div class="phpcode"><code><span class="html">A simple mb_str_ireplace() implementation - a faster (?) replacement for non-regexp multi-byte string replacement:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">mb_str_ireplace</span><span class="keyword">(</span><span class="default">$co</span><span class="keyword">, </span><span class="default">$naCo</span><span class="keyword">, </span><span class="default">$wCzym</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$wCzymM </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$wCzym</span><span class="keyword">);
<br />    </span><span class="default">$coM    </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$co</span><span class="keyword">);
<br />    </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    
<br />        while(!</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$poz </span><span class="keyword">= </span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$wCzymM</span><span class="keyword">, </span><span class="default">$coM</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">)))
<br />    {
<br />        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$poz </span><span class="keyword">+ </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$naCo</span><span class="keyword">);
<br />        </span><span class="default">$wCzym </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$wCzym</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$poz</span><span class="keyword">). </span><span class="default">$naCo </span><span class="keyword">.</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$wCzym</span><span class="keyword">, </span><span class="default">$poz</span><span class="keyword">+</span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$co</span><span class="keyword">));
<br />        </span><span class="default">$wCzymM </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$wCzym</span><span class="keyword">);
<br />    }
<br />    
<br />    return </span><span class="default">$wCzym</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />[thiago - EDITOR NOTE: This function has improvements from d-okumura [aat] fi{dot}kyd[dot]co.jp]</span></code></div>
  </div>
 </div>
  <div class="note" id="123589">  <div class="votes">
    <div id="Vu123589">
    <a href="/manual/vote-note.php?id=123589&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123589">
    <a href="/manual/vote-note.php?id=123589&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123589" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#123589" class="name">
  <strong class="user"><em>j-fr dot fortier at wanadoo dot fr</em></strong></a><a class="genanchor" href="#123589"> &para;</a><div class="date" title="2019-02-07 04:56"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123589">
<div class="phpcode"><code><span class="html">Since PHP 5.4, to make uppercase ou lowercase characters, or rewrite some uris, without to take care about initial encoding, the transliteration is easier (and probably the best way): see <a href="http://php.net/manual/fr/transliterator.transliterate.php" rel="nofollow" target="_blank">http://php.net/manual/fr/transliterator.transliterate.php</a> and <a href="http://userguide.icu-project.org/transforms/general" rel="nofollow" target="_blank">http://userguide.icu-project.org/transforms/general</a><br /><br />For example (with create) (french text: replace all accuentued -éèàîïùç...- chars with ascii chars):<br /><span class="default">&lt;?php<br />$transliterator </span><span class="keyword">= </span><span class="default">Transliterator</span><span class="keyword">::</span><span class="default">create</span><span class="keyword">(</span><span class="string">"NFD; [:Nonspacing Mark:] Remove; NFC;"</span><span class="keyword">);<br />echo </span><span class="default">$transliterator</span><span class="keyword">-&gt;</span><span class="default">transliterate</span><span class="keyword">(</span><span class="string">"Héhé, ça marche !"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>// Result: « Hehe, ca marche ! »<br /><br />To rewrite a phrase in URI (with createFromRules):<br /><span class="default">&lt;?php<br />$transliterator </span><span class="keyword">= </span><span class="default">Transliterator</span><span class="keyword">::</span><span class="default">createFromRules</span><span class="keyword">(</span><span class="string">"::Latin-ASCII; ::Lower; [^[:L:][:N:]]+ &gt; '-';"</span><span class="keyword">);<br />echo </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$transliterator</span><span class="keyword">-&gt;</span><span class="default">transliterate</span><span class="keyword">(</span><span class="string">"Héhé, ça marche !"</span><span class="keyword">), </span><span class="string">'-'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>// Result : « hehe-ca-marche »</span></code></div>
  </div>
 </div>
  <div class="note" id="62370">  <div class="votes">
    <div id="Vu62370">
    <a href="/manual/vote-note.php?id=62370&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62370">
    <a href="/manual/vote-note.php?id=62370&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62370" title="100% like this...">
    1
    </div>
  </div>
  <a href="#62370" class="name">
  <strong class="user"><em>vondrej(at)gmail(dot)com</em></strong></a><a class="genanchor" href="#62370"> &para;</a><div class="date" title="2006-02-26 03:47"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62370">
<div class="phpcode"><code><span class="html">Are you looking for htmlentities() for multibyte strings? This might help you - it just replace &lt;, &gt;, ", '
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> *  Multibyte equivalent for htmlentities() [lite version :)]
<br /> *
<br /> * @param string $str
<br /> * @param string $encoding
<br /> * @return string
<br /> **/
<br /></span><span class="keyword">function </span><span class="default">mb_htmlentities</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">'utf-8'</span><span class="keyword">) {
<br />    </span><span class="default">mb_regex_encoding</span><span class="keyword">(</span><span class="default">$encoding</span><span class="keyword">);
<br />    </span><span class="default">$pattern </span><span class="keyword">= array(</span><span class="string">'&lt;'</span><span class="keyword">, </span><span class="string">'&gt;'</span><span class="keyword">, </span><span class="string">'"'</span><span class="keyword">, </span><span class="string">'\''</span><span class="keyword">);
<br />    </span><span class="default">$replacement </span><span class="keyword">= array(</span><span class="string">'&amp;lt;'</span><span class="keyword">, </span><span class="string">'&amp;gt;'</span><span class="keyword">, </span><span class="string">'&amp;quot;'</span><span class="keyword">, </span><span class="string">'&amp;#39;'</span><span class="keyword">);
<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {
<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="default">mb_ereg_replace</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$replacement</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$str</span><span class="keyword">);
<br />    }
<br />    return </span><span class="default">$str</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68003">  <div class="votes">
    <div id="Vu68003">
    <a href="/manual/vote-note.php?id=68003&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68003">
    <a href="/manual/vote-note.php?id=68003&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68003" title="50% like this...">
    0
    </div>
  </div>
  <a href="#68003" class="name">
  <strong class="user"><em>mpnicholas [@t] gmail (dot) com</em></strong></a><a class="genanchor" href="#68003"> &para;</a><div class="date" title="2006-07-09 03:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68003">
<div class="phpcode"><code><span class="html">Regarding the mb_str_ireplace() function: I benchmarked it against mb_eregi_replace() for single-character substitution, and it was significantly slower. Despite avoiding the ereg call, I think the while loop ends slowing you down too much for this to be practical.</span></code></div>
  </div>
 </div>
  <div class="note" id="84160">  <div class="votes">
    <div id="Vu84160">
    <a href="/manual/vote-note.php?id=84160&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84160">
    <a href="/manual/vote-note.php?id=84160&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84160" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#84160" class="name">
  <strong class="user"><em>gmx dot net at ulrich dot mierendorff</em></strong></a><a class="genanchor" href="#84160"> &para;</a><div class="date" title="2008-07-01 07:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84160">
<div class="phpcode"><code><span class="html">If you want to replace characters like "ä" or "ø" you can use mb_ereg_replace, but it is very slow. str_replace is much faster and also works with characters like "ä" or "ø"!<br /><br />I think this has something to with the fact that str_replace works on byte level and does not care about characters.<br />I hope that can help.</span></code></div>
  </div>
 </div>
  <div class="note" id="114291">  <div class="votes">
    <div id="Vu114291">
    <a href="/manual/vote-note.php?id=114291&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114291">
    <a href="/manual/vote-note.php?id=114291&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114291" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#114291" class="name">
  <strong class="user"><em>marco at thenetworksolution dot it</em></strong></a><a class="genanchor" href="#114291"> &para;</a><div class="date" title="2014-02-03 02:47"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114291">
<div class="phpcode"><code><span class="html">To selectively uppercase parts of a string via mb_eregi_replace<br /><br />    $str = mb_eregi_replace('\b([0-9]{1,4}[a-z]{1,2})\b', "strtoupper<br />('\\1')", $str, 'e');<br /><br />Full example, how to fix an address manually typed, uppercasing the first letter of a words and keeping uppercase roman numerals and the letters A,B,C after the house number):<br /><br />function ucAddress($str) {<br />// first lowercase all and use the default ucwords<br />    $str = ucwords(strtolower($str));<br />// let's fix the default ucwords...<br />// uppercase letters after house number (was lowercased by the strtolower above)<br />    $str = mb_eregi_replace('\b([0-9]{1,4}[a-z]{1,2})\b', "strtoupper<br />('\\1')", $str, 'e');<br />// the same for roman numerals<br />    $str = mb_eregi_replace('\bM{0,4}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})\b', "strtoupper('\\0')", $str, 'e');<br />    return $str;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="114292">  <div class="votes">
    <div id="Vu114292">
    <a href="/manual/vote-note.php?id=114292&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114292">
    <a href="/manual/vote-note.php?id=114292&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114292" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#114292" class="name">
  <strong class="user"><em>marco at thenetworksolution dot it</em></strong></a><a class="genanchor" href="#114292"> &para;</a><div class="date" title="2014-02-03 02:47"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114292">
<div class="phpcode"><code><span class="html">To selectively uppercase parts of a string via mb_eregi_replace<br /><br />    $str = mb_eregi_replace('\b([0-9]{1,4}[a-z]{1,2})\b', "strtoupper<br />('\\1')", $str, 'e');<br /><br />Full example, how to fix an address manually typed, uppercasing the first letter of a words and keeping uppercase roman numerals and the letters A,B,C after the house number):<br /><br />function ucAddress($str) {<br />// first lowercase all and use the default ucwords<br />    $str = ucwords(strtolower($str));<br />// let's fix the default ucwords...<br />// uppercase letters after house number (was lowercased by the strtolower above)<br />    $str = mb_eregi_replace('\b([0-9]{1,4}[a-z]{1,2})\b', "strtoupper<br />('\\1')", $str, 'e');<br />// the same for roman numerals<br />    $str = mb_eregi_replace('\bM{0,4}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})\b', "strtoupper('\\0')", $str, 'e');<br />    return $str;<br />}<br /><br />Dr. Marco Marsala<br />Network Solution srl<br /><a href="http://www.realizzazionesitigenova.it" rel="nofollow" target="_blank">http://www.realizzazionesitigenova.it</a></span></code></div>
  </div>
 </div>
  <div class="note" id="70867">  <div class="votes">
    <div id="Vu70867">
    <a href="/manual/vote-note.php?id=70867&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70867">
    <a href="/manual/vote-note.php?id=70867&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70867" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#70867" class="name">
  <strong class="user"><em>squeegee</em></strong></a><a class="genanchor" href="#70867"> &para;</a><div class="date" title="2006-11-01 07:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70867">
<div class="phpcode"><code><span class="html">well, if you just calculated the length of the find and replace strings once instead of on every loop, it would likely speed it up a lot.</span></code></div>
  </div>
 </div>
  <div class="note" id="121391">  <div class="votes">
    <div id="Vu121391">
    <a href="/manual/vote-note.php?id=121391&amp;page=function.mb-ereg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121391">
    <a href="/manual/vote-note.php?id=121391&amp;page=function.mb-ereg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121391" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#121391" class="name">
  <strong class="user"><em>ms2705335 at gmail dot com</em></strong></a><a class="genanchor" href="#121391"> &para;</a><div class="date" title="2017-07-17 10:10"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121391">
<div class="phpcode"><code><span class="html">As trng mentioned before you can use \\n for replacement but NOT \\\\n as mentioned in preg_replace docs. So string definition will be like:<br />$str = '\\1';</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mb-ereg-replace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-ereg-replace.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mbstring.php">Multibyte String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.mb-check-encoding.php" title="mb_&#8203;check_&#8203;encoding">mb_&#8203;check_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-chr.php" title="mb_&#8203;chr">mb_&#8203;chr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-case.php" title="mb_&#8203;convert_&#8203;case">mb_&#8203;convert_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-encoding.php" title="mb_&#8203;convert_&#8203;encoding">mb_&#8203;convert_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-kana.php" title="mb_&#8203;convert_&#8203;kana">mb_&#8203;convert_&#8203;kana</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-variables.php" title="mb_&#8203;convert_&#8203;variables">mb_&#8203;convert_&#8203;variables</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-mimeheader.php" title="mb_&#8203;decode_&#8203;mimeheader">mb_&#8203;decode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-numericentity.php" title="mb_&#8203;decode_&#8203;numericentity">mb_&#8203;decode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-encoding.php" title="mb_&#8203;detect_&#8203;encoding">mb_&#8203;detect_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-order.php" title="mb_&#8203;detect_&#8203;order">mb_&#8203;detect_&#8203;order</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-mimeheader.php" title="mb_&#8203;encode_&#8203;mimeheader">mb_&#8203;encode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-numericentity.php" title="mb_&#8203;encode_&#8203;numericentity">mb_&#8203;encode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encoding-aliases.php" title="mb_&#8203;encoding_&#8203;aliases">mb_&#8203;encoding_&#8203;aliases</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg.php" title="mb_&#8203;ereg">mb_&#8203;ereg</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-match.php" title="mb_&#8203;ereg_&#8203;match">mb_&#8203;ereg_&#8203;match</a>
                        </li>
                                                <li class="current">
                            <a href="function.mb-ereg-replace.php" title="mb_&#8203;ereg_&#8203;replace">mb_&#8203;ereg_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace-callback.php" title="mb_&#8203;ereg_&#8203;replace_&#8203;callback">mb_&#8203;ereg_&#8203;replace_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search.php" title="mb_&#8203;ereg_&#8203;search">mb_&#8203;ereg_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getpos">mb_&#8203;ereg_&#8203;search_&#8203;getpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getregs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getregs">mb_&#8203;ereg_&#8203;search_&#8203;getregs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-init.php" title="mb_&#8203;ereg_&#8203;search_&#8203;init">mb_&#8203;ereg_&#8203;search_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-pos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;pos">mb_&#8203;ereg_&#8203;search_&#8203;pos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-regs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;regs">mb_&#8203;ereg_&#8203;search_&#8203;regs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-setpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;setpos">mb_&#8203;ereg_&#8203;search_&#8203;setpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi.php" title="mb_&#8203;eregi">mb_&#8203;eregi</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi-replace.php" title="mb_&#8203;eregi_&#8203;replace">mb_&#8203;eregi_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-get-info.php" title="mb_&#8203;get_&#8203;info">mb_&#8203;get_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-input.php" title="mb_&#8203;http_&#8203;input">mb_&#8203;http_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-output.php" title="mb_&#8203;http_&#8203;output">mb_&#8203;http_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-internal-encoding.php" title="mb_&#8203;internal_&#8203;encoding">mb_&#8203;internal_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-language.php" title="mb_&#8203;language">mb_&#8203;language</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-lcfirst.php" title="mb_&#8203;lcfirst">mb_&#8203;lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-list-encodings.php" title="mb_&#8203;list_&#8203;encodings">mb_&#8203;list_&#8203;encodings</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ltrim.php" title="mb_&#8203;ltrim">mb_&#8203;ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ord.php" title="mb_&#8203;ord">mb_&#8203;ord</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-output-handler.php" title="mb_&#8203;output_&#8203;handler">mb_&#8203;output_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-parse-str.php" title="mb_&#8203;parse_&#8203;str">mb_&#8203;parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-preferred-mime-name.php" title="mb_&#8203;preferred_&#8203;mime_&#8203;name">mb_&#8203;preferred_&#8203;mime_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-encoding.php" title="mb_&#8203;regex_&#8203;encoding">mb_&#8203;regex_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-set-options.php" title="mb_&#8203;regex_&#8203;set_&#8203;options">mb_&#8203;regex_&#8203;set_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-rtrim.php" title="mb_&#8203;rtrim">mb_&#8203;rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-scrub.php" title="mb_&#8203;scrub">mb_&#8203;scrub</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-send-mail.php" title="mb_&#8203;send_&#8203;mail">mb_&#8203;send_&#8203;mail</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-split.php" title="mb_&#8203;split">mb_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-pad.php" title="mb_&#8203;str_&#8203;pad">mb_&#8203;str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-split.php" title="mb_&#8203;str_&#8203;split">mb_&#8203;str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strcut.php" title="mb_&#8203;strcut">mb_&#8203;strcut</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strimwidth.php" title="mb_&#8203;strimwidth">mb_&#8203;strimwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stripos.php" title="mb_&#8203;stripos">mb_&#8203;stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stristr.php" title="mb_&#8203;stristr">mb_&#8203;stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strlen.php" title="mb_&#8203;strlen">mb_&#8203;strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strpos.php" title="mb_&#8203;strpos">mb_&#8203;strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrchr.php" title="mb_&#8203;strrchr">mb_&#8203;strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrichr.php" title="mb_&#8203;strrichr">mb_&#8203;strrichr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strripos.php" title="mb_&#8203;strripos">mb_&#8203;strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrpos.php" title="mb_&#8203;strrpos">mb_&#8203;strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strstr.php" title="mb_&#8203;strstr">mb_&#8203;strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtolower.php" title="mb_&#8203;strtolower">mb_&#8203;strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtoupper.php" title="mb_&#8203;strtoupper">mb_&#8203;strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strwidth.php" title="mb_&#8203;strwidth">mb_&#8203;strwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substitute-character.php" title="mb_&#8203;substitute_&#8203;character">mb_&#8203;substitute_&#8203;character</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr.php" title="mb_&#8203;substr">mb_&#8203;substr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr-count.php" title="mb_&#8203;substr_&#8203;count">mb_&#8203;substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-trim.php" title="mb_&#8203;trim">mb_&#8203;trim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ucfirst.php" title="mb_&#8203;ucfirst">mb_&#8203;ucfirst</a>
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
