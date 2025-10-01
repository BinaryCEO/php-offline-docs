<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: error_log - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.error-log.php">
 <link rel="shorturl" href="https://www.php.net/error-log">
 <link rel="alternate" href="https://www.php.net/error-log" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.errorfunc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.error-get-last.php">
 <link rel="next" href="https://www.php.net/manual/en/function.error-reporting.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.error-log.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.error-log.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.error-log.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.error-log.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.error-log.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.error-log.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.error-log.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.error-log.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.error-log.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.error-log.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.error-log.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Send an error message to the defined error handling routines" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: error_log - Manual" />
<meta name="twitter:description" content="Send an error message to the defined error handling routines" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: error_log - Manual" />
<meta itemprop="description" content="Send an error message to the defined error handling routines" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Send an error message to the defined error handling routines" />

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
        <a href="function.error-reporting.php">
          error_reporting &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.error-get-last.php">
          &laquo; error_get_last        </a>
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
            <option value='en/function.error-log.php' selected="selected">English</option>
            <option value='de/function.error-log.php'>German</option>
            <option value='es/function.error-log.php'>Spanish</option>
            <option value='fr/function.error-log.php'>French</option>
            <option value='it/function.error-log.php'>Italian</option>
            <option value='ja/function.error-log.php'>Japanese</option>
            <option value='pt_BR/function.error-log.php'>Brazilian Portuguese</option>
            <option value='ru/function.error-log.php'>Russian</option>
            <option value='tr/function.error-log.php'>Turkish</option>
            <option value='uk/function.error-log.php'>Ukrainian</option>
            <option value='zh/function.error-log.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.error-log" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">error_log</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">error_log</span> &mdash; <span class="dc-title">Send an error message to the defined error handling routines</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.error-log-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>error_log</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$message</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$message_type</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$destination</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$additional_headers</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Sends an error message to the web server&#039;s error log or to a file.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.error-log-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">message</code></dt>
     <dd>
      <p class="para">
       The error message that should be logged.
      </p>
     </dd>
    
    
     <dt><code class="parameter">message_type</code></dt>
     <dd>
      <p class="para">
       Says where the error should go. The possible message types are as 
       follows:
      </p>
      <p class="para">
       <table class="doctable table">
        <caption><strong><span class="function"><strong>error_log()</strong></span> log types</strong></caption>
        
         <tbody class="tbody">
          <tr>
           <td>0</td>
           <td>
            <code class="parameter">message</code> is sent to PHP&#039;s system logger, using
            the Operating System&#039;s system logging mechanism or a file, depending
            on what the <a href="errorfunc.configuration.php#ini.error-log" class="link">error_log</a>
            configuration directive is set to.  This is the default option.
           </td>
          </tr>

          <tr>
           <td>1</td>
           <td>
            <code class="parameter">message</code> is sent by email to the address in
            the <code class="parameter">destination</code> parameter.  This is the only
            message type where the fourth parameter,
            <code class="parameter">additional_headers</code> is used.
           </td>
          </tr>

          <tr>
           <td>2</td>
           <td>
            No longer an option.
           </td>
          </tr>

          <tr>
           <td>3</td>
           <td>
            <code class="parameter">message</code> is appended to the file
            <code class="parameter">destination</code>. A newline is not automatically 
            added to the end of the <code class="parameter">message</code> string.
           </td>
          </tr>

          <tr>
           <td>4</td>
           <td>
           <code class="parameter">message</code> is sent directly to the SAPI logging
           handler.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">destination</code></dt>
     <dd>
      <p class="para">
       The destination. Its meaning depends on the 
       <code class="parameter">message_type</code> parameter as described above.
      </p>
     </dd>
    
    
     <dt><code class="parameter">additional_headers</code></dt>
     <dd>
      <p class="para">
       The extra headers. It&#039;s used when the <code class="parameter">message_type</code>
       parameter is set to <code class="literal">1</code>.
       This message type uses the same internal function as 
       <span class="function"><a href="function.mail.php" class="function">mail()</a></span> does.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.error-log-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
   If <code class="parameter">message_type</code> is zero, this function always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>,
   regardless of whether the error could be logged or not.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.error-log-changelog">
  <h3 class="title">Changelog</h3>
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
       <code class="parameter">destination</code> and
       <code class="parameter">additional_headers</code> are now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.error-log-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-599">
    <p><strong>Example #1 <span class="function"><strong>error_log()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Send notification through the server log if we can not<br />// connect to the database.<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">Ora_Logon</span><span style="color: #007700">(</span><span style="color: #0000BB">$username</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">error_log</span><span style="color: #007700">(</span><span style="color: #DD0000">"Oracle database not available!"</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Notify administrator by email if we run out of FOO<br /></span><span style="color: #007700">if (!(</span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #0000BB">allocate_new_foo</span><span style="color: #007700">())) {<br />    </span><span style="color: #0000BB">error_log</span><span style="color: #007700">(</span><span style="color: #DD0000">"Big trouble, we're all out of FOOs!"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />               </span><span style="color: #DD0000">"operator@example.com"</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// another way to call error_log():<br /></span><span style="color: #0000BB">error_log</span><span style="color: #007700">(</span><span style="color: #DD0000">"You messed up!"</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #DD0000">"/var/tmp/my-errors.log"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.error-log-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    <span class="function"><strong>error_log()</strong></span> is not binary safe. <code class="parameter">message</code> will be truncated by null character.
   </p>
  </div>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="simpara">
    <code class="parameter">message</code> should not contain null character. Note that <code class="parameter">message</code> may be sent to file, mail, syslog, etc. Use appropriate conversion/escape function, <span class="function"><a href="function.base64-encode.php" class="function">base64_encode()</a></span>, <span class="function"><a href="function.rawurlencode.php" class="function">rawurlencode()</a></span> or <span class="function"><a href="function.addslashes.php" class="function">addslashes()</a></span> before calling <span class="function"><strong>error_log()</strong></span>.
   </p>
  </div>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/errorfunc/functions/error-log.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.error-log%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.error-log&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.error-log.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96383">  <div class="votes">
    <div id="Vu96383">
    <a href="/manual/vote-note.php?id=96383&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96383">
    <a href="/manual/vote-note.php?id=96383&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96383" title="81% like this...">
    202
    </div>
  </div>
  <a href="#96383" class="name">
  <strong class="user"><em>kevindougans at gmail dot com</em></strong></a><a class="genanchor" href="#96383"> &para;</a><div class="date" title="2010-02-24 02:19"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96383">
<div class="phpcode"><code><span class="html">Advice to novices: This function works great along with "tail" which is a unix command to watch a log file live. There are versions of Tail for Windows too, like Tail for Win32 or Kiwi Log Viewer.<br /><br />Using both error_log() and tail to view the php_error.log you can debug code without having to worry so much about printing debug messages to the screen and who they might be seen by.<br /><br />Further Note: This works even better when you have two monitors setup. One for your browser and IDE and the other for viewing the log files update live as you go.</span></code></div>
  </div>
 </div>
  <div class="note" id="123241">  <div class="votes">
    <div id="Vu123241">
    <a href="/manual/vote-note.php?id=123241&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123241">
    <a href="/manual/vote-note.php?id=123241&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123241" title="79% like this...">
    39
    </div>
  </div>
  <a href="#123241" class="name">
  <strong class="user"><em>Sion</em></strong></a><a class="genanchor" href="#123241"> &para;</a><div class="date" title="2018-10-18 02:48"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123241">
<div class="phpcode"><code><span class="html">DO NOT try to output TOO LARGE texts in the error_log();<br /><br />if you try to output massive amounts of texts it will either cut of the text at about 8ooo characters (for reasonable massive strings, &lt; 32 K characters) or (for insanely massive strings, about 1.6 million characters) totally crash without even throwing an error or anything (I even put it in a try/catch without getting any result from the catch).<br /><br />I had this problem when I tried to debug a response from a wp_remote_get(); all of my error_log() worked as they should, except for ONE of them... (-_-)<br />After about a day of debugging I finally found out why &amp; that's why I type this.<br /><br />Apparently the response contained a body with over 1.6 million chars (or bytes? (whatever strlen() returns)).<br /><br />If you have a string of unknown length, use this:<br />$start_index = 0;<br />$end_index = 8000;<br />error_log( substr( $output_text , $start_index , $end_index ) );</span></code></div>
  </div>
 </div>
  <div class="note" id="97546">  <div class="votes">
    <div id="Vu97546">
    <a href="/manual/vote-note.php?id=97546&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97546">
    <a href="/manual/vote-note.php?id=97546&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97546" title="72% like this...">
    52
    </div>
  </div>
  <a href="#97546" class="name">
  <strong class="user"><em>roychri at php dot net</em></strong></a><a class="genanchor" href="#97546"> &para;</a><div class="date" title="2010-04-25 09:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97546">
<div class="phpcode"><code><span class="html">There is a limit on the maximum length that you can pass as the $message.<br /><br />The default seem to be 1024 but can be changed by adjusting the value of the runtime configuration value of 'log_errors_max_len'.<br /><br />More details here:<br /><a href="http://www.php.net/manual/en/errorfunc.configuration.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/errorfunc.configuration.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="70889">  <div class="votes">
    <div id="Vu70889">
    <a href="/manual/vote-note.php?id=70889&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70889">
    <a href="/manual/vote-note.php?id=70889&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70889" title="70% like this...">
    28
    </div>
  </div>
  <a href="#70889" class="name">
  <strong class="user"><em>frank at booksku dot com</em></strong></a><a class="genanchor" href="#70889"> &para;</a><div class="date" title="2006-11-02 03:28"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70889">
<div class="phpcode"><code><span class="html">Beware!  If multiple scripts share the same log file, but run as different users, whichever script logs an error first owns the file, and calls to error_log() run as a different user will fail *silently*!<br /><br />Nothing more frustrating than trying to figure out why all your error_log calls aren't actually writing, than to find it was due to a *silent* permission denied error!</span></code></div>
  </div>
 </div>
  <div class="note" id="81166">  <div class="votes">
    <div id="Vu81166">
    <a href="/manual/vote-note.php?id=81166&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81166">
    <a href="/manual/vote-note.php?id=81166&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81166" title="69% like this...">
    19
    </div>
  </div>
  <a href="#81166" class="name">
  <strong class="user"><em>i dot buttinoni at intandtel dot com</em></strong></a><a class="genanchor" href="#81166"> &para;</a><div class="date" title="2008-02-16 03:32"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81166">
<div class="phpcode"><code><span class="html">Be carefull. Unexpected PHP dies when 2GByte of file log reached (on systems having upper file size limit). <br />A work aorund is rotate logs :)</span></code></div>
  </div>
 </div>
  <div class="note" id="55106">  <div class="votes">
    <div id="Vu55106">
    <a href="/manual/vote-note.php?id=55106&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55106">
    <a href="/manual/vote-note.php?id=55106&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55106" title="66% like this...">
    17
    </div>
  </div>
  <a href="#55106" class="name">
  <strong class="user"><em>php at kennel17 dot NOSPAM dot co dot uk</em></strong></a><a class="genanchor" href="#55106"> &para;</a><div class="date" title="2005-07-25 02:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55106">
<div class="phpcode"><code><span class="html">It appears that the system log = stderr if you are running PHP from the command line, and that often stderr = stdout.  This means that if you are using a custom error to both display the error and log it to syslog, then a command-line user will see the same error reported twice.</span></code></div>
  </div>
 </div>
  <div class="note" id="124369">  <div class="votes">
    <div id="Vu124369">
    <a href="/manual/vote-note.php?id=124369&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124369">
    <a href="/manual/vote-note.php?id=124369&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124369" title="62% like this...">
    7
    </div>
  </div>
  <a href="#124369" class="name">
  <strong class="user"><em>Matthew Swift</em></strong></a><a class="genanchor" href="#124369"> &para;</a><div class="date" title="2019-11-05 01:32"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124369">
<div class="phpcode"><code><span class="html">Relative paths are accepted as the destination of message_type 3, but beware that the root directory is determined by the context of the call to error_log(), which can change, so that one instance of error_log () in your code can lead to the creation of multiple log files in different locations.<br /><br />In a WordPress context, the root directory will be the site's root in many cases, but it will be /wp-admin/ for AJAX calls, and a plugin's directory in other cases. If you want all your output to go to one file, use an absolute path.</span></code></div>
  </div>
 </div>
  <div class="note" id="80152">  <div class="votes">
    <div id="Vu80152">
    <a href="/manual/vote-note.php?id=80152&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80152">
    <a href="/manual/vote-note.php?id=80152&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80152" title="64% like this...">
    9
    </div>
  </div>
  <a href="#80152" class="name">
  <strong class="user"><em>SJL</em></strong></a><a class="genanchor" href="#80152"> &para;</a><div class="date" title="2007-12-31 06:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80152">
<div class="phpcode"><code><span class="html">"It appears that the system log = stderr if you are running PHP from the command line"<br /><br />Actually, it seems that PHP logs to stderr if it can't write to the log file. Command line PHP falls back to stderr because the log file is (usually) only writable by the webserver.</span></code></div>
  </div>
 </div>
  <div class="note" id="124427">  <div class="votes">
    <div id="Vu124427">
    <a href="/manual/vote-note.php?id=124427&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124427">
    <a href="/manual/vote-note.php?id=124427&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124427" title="61% like this...">
    4
    </div>
  </div>
  <a href="#124427" class="name">
  <strong class="user"><em>russ at russtanner dot com</em></strong></a><a class="genanchor" href="#124427"> &para;</a><div class="date" title="2019-11-22 09:10"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124427">
<div class="phpcode"><code><span class="html">You can easily filter messages sent to error_log() using "tail" and "grep" on *nix systems. This makes monitoring debug messages easy to see during development.<br /><br />Be sure to "tag" your error message with a unique string so you can filter it using "grep":<br /><br />In your code:<br /><br />error_log("DevSys1 - FirstName: $FirstName - LastName: $Lastname");<br /><br />On your command line:<br /><br />tail -f /var/log/httpd/error_log | grep DevSys1<br /><br />In this example, we pipe apache log output to grep (STDIN) which filters it for you only showing messages that contain "DevSys1".<br /><br />The "-f" option means "follow" which streams all new log entries to your terminal or to any piped command that follows, in this case "grep".</span></code></div>
  </div>
 </div>
  <div class="note" id="30792">  <div class="votes">
    <div id="Vu30792">
    <a href="/manual/vote-note.php?id=30792&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30792">
    <a href="/manual/vote-note.php?id=30792&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30792" title="61% like this...">
    13
    </div>
  </div>
  <a href="#30792" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#30792"> &para;</a><div class="date" title="2003-03-28 02:14"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30792">
<div class="phpcode"><code><span class="html">when using error_log to send email, not all elements of an extra_headers string are handled the same way.  "From: " and "Reply-To: " header values will replace the default header values. "Subject: " header values won't: they are *added* to the mail header but don't replace the default, leading to mail messages with two Subject fields.<br /><br /><span class="default">&lt;?php<br /><br />error_log</span><span class="keyword">(</span><span class="string">"sometext"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="string">"zigzag@my.domain"</span><span class="keyword">, <br />  </span><span class="string">"Subject: Foo\nFrom: Rizzlas@my.domain\n"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />---------------%&lt;-----------------------<br />To: zigzag@my.domain<br />Envelope-to: zigzag@my.domain<br />Date: Fri, 28 Mar 2003 13:29:02 -0500<br />From: Rizzlas@my.domain<br />Subject: PHP error_log message<br />Subject: Foo<br />Delivery-date: Fri, 28 Mar 2003 13:29:03 -0500<br /><br />sometext<br />---------------%&lt;---------------------<br /><br />quoth the docs: "This message type uses the same internal function as mail() does."  <br /><br />mail() will also fail to set a Subject field based on extra_header data - instead it takes a seperate argument to specify a "Subject: " string.<br /><br />php v.4.2.3, SunOS 5.8</span></code></div>
  </div>
 </div>
  <div class="note" id="69233">  <div class="votes">
    <div id="Vu69233">
    <a href="/manual/vote-note.php?id=69233&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69233">
    <a href="/manual/vote-note.php?id=69233&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69233" title="60% like this...">
    5
    </div>
  </div>
  <a href="#69233" class="name">
  <strong class="user"><em>p dot lhonorey at nospam-laposte dot net</em></strong></a><a class="genanchor" href="#69233"> &para;</a><div class="date" title="2006-08-28 03:33"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69233">
<div class="phpcode"><code><span class="html">Hi !<br /><br />Another trick to post "HTML" mail body. Just add "Content-Type: text/html; charset=ISO-8859-1" into extra_header string. Of course you can set charset according to your country or Env or content.<br /><br />EG: Error_log("&lt;html&gt;&lt;h2&gt;stuff&lt;/h2&gt;&lt;/html&gt;",1,"eat@joe.com","subject  :lunch\nContent-Type: text/html; charset=ISO-8859-1");<br /><br />Enjoy !</span></code></div>
  </div>
 </div>
  <div class="note" id="52078">  <div class="votes">
    <div id="Vu52078">
    <a href="/manual/vote-note.php?id=52078&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52078">
    <a href="/manual/vote-note.php?id=52078&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52078" title="56% like this...">
    4
    </div>
  </div>
  <a href="#52078" class="name">
  <strong class="user"><em>franz at fholzinger dot com</em></strong></a><a class="genanchor" href="#52078"> &para;</a><div class="date" title="2005-04-20 09:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52078">
<div class="phpcode"><code><span class="html">In the case of missing your entries in the error_log file:<br />When you use error_log in a script that does not produce any output, which means that you cannot see anything during the execution of the script, and when you wonder why there are no error_log entries produced in your error_log file, the reasons can be:<br />- you did not configure error_log output in php.ini<br />- the script has a syntax error and did therefore not execute</span></code></div>
  </div>
 </div>
  <div class="note" id="83891">  <div class="votes">
    <div id="Vu83891">
    <a href="/manual/vote-note.php?id=83891&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83891">
    <a href="/manual/vote-note.php?id=83891&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83891" title="54% like this...">
    3
    </div>
  </div>
  <a href="#83891" class="name">
  <strong class="user"><em>paul dot chubb at abs dot gov dot au</em></strong></a><a class="genanchor" href="#83891"> &para;</a><div class="date" title="2008-06-16 10:37"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83891">
<div class="phpcode"><code><span class="html">When logging to apache on windows, both error_log and also trigger_error result in an apache status of error on the front of the message. This is bad if all you want to do is log information. However you can simply log to stderr however you will have to do all message assembly:<br /><br />LogToApache($Message) {<br />        $stderr = fopen('php://stderr', 'w'); <br />        fwrite($stderr,$Message); <br />        fclose($stderr); <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="76024">  <div class="votes">
    <div id="Vu76024">
    <a href="/manual/vote-note.php?id=76024&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76024">
    <a href="/manual/vote-note.php?id=76024&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76024" title="51% like this...">
    1
    </div>
  </div>
  <a href="#76024" class="name">
  <strong class="user"><em>stepheneliotdewey at GmailDotCom</em></strong></a><a class="genanchor" href="#76024"> &para;</a><div class="date" title="2007-06-26 06:05"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76024">
<div class="phpcode"><code><span class="html">Note that since typical email is unencrypted, sending data about your errors over email using this function could be considered a security risk. How much of a risk it is depends on how much and what type of information you are sending, but the mere act of sending an email when something happens (even if it cannot be read) could itself imply to a sophisticated hacker observing your site over time that they have managed to cause an error.<br /><br />Of course, security through obscurity is the weakest kind of security, as most open source supporters will agree. This is just something that you should keep in mind. <br /><br />And of course, whatever you do, make sure that such emails don't contain sensitive user data.</span></code></div>
  </div>
 </div>
  <div class="note" id="86651">  <div class="votes">
    <div id="Vu86651">
    <a href="/manual/vote-note.php?id=86651&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86651">
    <a href="/manual/vote-note.php?id=86651&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86651" title="50% like this...">
    1
    </div>
  </div>
  <a href="#86651" class="name">
  <strong class="user"><em>eguvenc at gmail dot com</em></strong></a><a class="genanchor" href="#86651"> &para;</a><div class="date" title="2008-10-28 08:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86651">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">//Multiline error log class
<br />// ersin güvenç 2008 eguvenc@gmail.com
<br />//For break use "\n" instead '\n'
<br />
<br /></span><span class="keyword">Class </span><span class="default">log </span><span class="keyword">{
<br />  </span><span class="comment">//
<br />  </span><span class="keyword">const </span><span class="default">USER_ERROR_DIR </span><span class="keyword">= </span><span class="string">'/home/site/error_log/Site_User_errors.log'</span><span class="keyword">;
<br />  const </span><span class="default">GENERAL_ERROR_DIR </span><span class="keyword">= </span><span class="string">'/home/site/error_log/Site_General_errors.log'</span><span class="keyword">;
<br />
<br />  </span><span class="comment">/*
<br />   User Errors...
<br />  */
<br />    </span><span class="keyword">public function </span><span class="default">user</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">,</span><span class="default">$username</span><span class="keyword">)
<br />    {
<br />    </span><span class="default">$date </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'d.m.Y h:i:s'</span><span class="keyword">);
<br />    </span><span class="default">$log </span><span class="keyword">= </span><span class="default">$msg</span><span class="keyword">.</span><span class="string">"   |  Date:  "</span><span class="keyword">.</span><span class="default">$date</span><span class="keyword">.</span><span class="string">"  |  User:  "</span><span class="keyword">.</span><span class="default">$username</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br />    </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$log</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">self</span><span class="keyword">::</span><span class="default">USER_ERROR_DIR</span><span class="keyword">);
<br />    }
<br />    </span><span class="comment">/*
<br />   General Errors...
<br />  */
<br />    </span><span class="keyword">public function </span><span class="default">general</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">)
<br />    {
<br />    </span><span class="default">$date </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'d.m.Y h:i:s'</span><span class="keyword">);
<br />    </span><span class="default">$log </span><span class="keyword">= </span><span class="default">$msg</span><span class="keyword">.</span><span class="string">"   |  Date:  "</span><span class="keyword">.</span><span class="default">$date</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br />    </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">.</span><span class="string">"   |  Tarih:  "</span><span class="keyword">.</span><span class="default">$date</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">self</span><span class="keyword">::</span><span class="default">GENERAL_ERROR_DIR</span><span class="keyword">);
<br />    }
<br />
<br />}
<br />
<br /></span><span class="default">$log </span><span class="keyword">= new </span><span class="default">log</span><span class="keyword">();
<br /></span><span class="default">$log</span><span class="keyword">-&gt;</span><span class="default">user</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">,</span><span class="default">$username</span><span class="keyword">); </span><span class="comment">//use for user errors
<br />//$log-&gt;general($msg); //use for general errors
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93286">  <div class="votes">
    <div id="Vu93286">
    <a href="/manual/vote-note.php?id=93286&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93286">
    <a href="/manual/vote-note.php?id=93286&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93286" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#93286" class="name">
  <strong class="user"><em>daniel dot fukuda at gmail dot com</em></strong></a><a class="genanchor" href="#93286"> &para;</a><div class="date" title="2009-09-01 05:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93286">
<div class="phpcode"><code><span class="html">If you have a problem with log file permission *silently*<br />it's best to leave error_log directive unset so errors will be written in your Apache log file for current VirtualHost.</span></code></div>
  </div>
 </div>
  <div class="note" id="123192">  <div class="votes">
    <div id="Vu123192">
    <a href="/manual/vote-note.php?id=123192&amp;page=function.error-log&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123192">
    <a href="/manual/vote-note.php?id=123192&amp;page=function.error-log&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123192" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#123192" class="name">
  <strong class="user"><em>Robert Chapin</em></strong></a><a class="genanchor" href="#123192"> &para;</a><div class="date" title="2018-10-03 11:31"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123192">
<div class="phpcode"><code><span class="html">When error_log() unexpectedly uses stdout, you should check if the php.ini value for error_log is empty in your CLI environment.  Something as simple as this might restore expected behavior:<br /><br /><span class="default">&lt;?php ini_set</span><span class="keyword">(</span><span class="string">'error_log'</span><span class="keyword">, </span><span class="string">'error_log'</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.error-log&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.error-log.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.error-get-last.php" title="error_&#8203;get_&#8203;last">error_&#8203;get_&#8203;last</a>
                        </li>
                                                <li class="current">
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
