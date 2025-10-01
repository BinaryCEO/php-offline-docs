<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: stream_notification_callback - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.stream-notification-callback.php">
 <link rel="shorturl" href="https://www.php.net/stream-notification-callback">
 <link rel="alternate" href="https://www.php.net/stream-notification-callback" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.stream.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.stream-isatty.php">
 <link rel="next" href="https://www.php.net/manual/en/function.stream-register-wrapper.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.stream-notification-callback.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.stream-notification-callback.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.stream-notification-callback.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.stream-notification-callback.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.stream-notification-callback.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.stream-notification-callback.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.stream-notification-callback.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.stream-notification-callback.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.stream-notification-callback.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.stream-notification-callback.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.stream-notification-callback.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="A callback function for the notification context parameter" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: stream_notification_callback - Manual" />
<meta name="twitter:description" content="A callback function for the notification context parameter" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: stream_notification_callback - Manual" />
<meta itemprop="description" content="A callback function for the notification context parameter" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="A callback function for the notification context parameter" />

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
        <a href="function.stream-register-wrapper.php">
          stream_register_wrapper &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.stream-isatty.php">
          &laquo; stream_isatty        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.stream.php'>Streams</a></li>      <li><a href='ref.stream.php'>Stream Functions</a></li>      </ul>
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
            <option value='en/function.stream-notification-callback.php' selected="selected">English</option>
            <option value='de/function.stream-notification-callback.php'>German</option>
            <option value='es/function.stream-notification-callback.php'>Spanish</option>
            <option value='fr/function.stream-notification-callback.php'>French</option>
            <option value='it/function.stream-notification-callback.php'>Italian</option>
            <option value='ja/function.stream-notification-callback.php'>Japanese</option>
            <option value='pt_BR/function.stream-notification-callback.php'>Brazilian Portuguese</option>
            <option value='ru/function.stream-notification-callback.php'>Russian</option>
            <option value='tr/function.stream-notification-callback.php'>Turkish</option>
            <option value='uk/function.stream-notification-callback.php'>Ukrainian</option>
            <option value='zh/function.stream-notification-callback.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.stream-notification-callback" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">stream_notification_callback</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">stream_notification_callback</span> &mdash; <span class="dc-title">A callback function for the <code class="literal">notification</code> context parameter</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.stream-notification-callback-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><span class="replaceable">stream_notification_callback</span></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$notification_code</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$severity</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$message</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$message_code</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$bytes_transferred</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$bytes_max</code></span><br>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   A <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> function, used by the
   <a href="context.params.php#context.params.notification" class="link">notification context parameter</a>,
   called during an event.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This is <em>not</em> a real function, only a prototype of how the function should
    be.
   </p>
  </p></blockquote>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.stream-notification-callback-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">notification_code</code></dt>
     <dd>
      <p class="para">
       One of the <strong><code><a href="stream.constants.php#constant.stream-notify-resolve">STREAM_NOTIFY_<span class="replaceable">*</span></a></code></strong> notification constants.
      </p>
     </dd>
    
    
     <dt><code class="parameter">severity</code></dt>
     <dd>
      <p class="para">
       One of the <strong><code><a href="stream.constants.php#constant.stream-notify-severity-info">STREAM_NOTIFY_SEVERITY_<span class="replaceable">*</span></a></code></strong> notification constants.
      </p>
     </dd>
    
    
     <dt><code class="parameter">message</code></dt>
     <dd>
      <p class="para">
       Passed if a descriptive message is available for the event.
      </p>
     </dd>
    
    
     <dt><code class="parameter">message_code</code></dt>
     <dd>
      <p class="para">
       Passed if a descriptive message code is available for the event.
      </p>
      <p class="para">
       The meaning of this value is dependent on the specific wrapper in use.
      </p>
     </dd>
    
    
     <dt><code class="parameter">bytes_transferred</code></dt>
     <dd>
      <p class="para">
       If applicable, the <code class="parameter">bytes_transferred</code> will be
       populated.
      </p>
     </dd>
    
    
     <dt><code class="parameter">bytes_max</code></dt>
     <dd>
      <p class="para">
       If applicable, the <code class="parameter">bytes_max</code> will be
       populated.
      </p>
     </dd>
    

   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.stream-notification-callback-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.stream-notification-callback-changelog">
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
      <td>8.3.0</td>
      <td>
       Support for <strong><code><a href="stream.constants.php#constant.stream-notify-completed">STREAM_NOTIFY_COMPLETED</a></code></strong> implemented,
       earlier PHP versions would never trigger this notification.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.stream-notification-callback-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="stream-notification-callback.example.basic">
    <p><strong>Example #1 <span class="function"><strong>stream_notification_callback()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">stream_notification_callback</span><span style="color: #007700">(</span><span style="color: #0000BB">$notification_code</span><span style="color: #007700">, </span><span style="color: #0000BB">$severity</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">$message_code</span><span style="color: #007700">, </span><span style="color: #0000BB">$bytes_transferred</span><span style="color: #007700">, </span><span style="color: #0000BB">$bytes_max</span><span style="color: #007700">) {<br /><br />    switch(</span><span style="color: #0000BB">$notification_code</span><span style="color: #007700">) {<br />        case </span><span style="color: #0000BB">STREAM_NOTIFY_RESOLVE</span><span style="color: #007700">:<br />        case </span><span style="color: #0000BB">STREAM_NOTIFY_AUTH_REQUIRED</span><span style="color: #007700">:<br />        case </span><span style="color: #0000BB">STREAM_NOTIFY_COMPLETED</span><span style="color: #007700">:<br />        case </span><span style="color: #0000BB">STREAM_NOTIFY_FAILURE</span><span style="color: #007700">:<br />        case </span><span style="color: #0000BB">STREAM_NOTIFY_AUTH_RESULT</span><span style="color: #007700">:<br />            </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$notification_code</span><span style="color: #007700">, </span><span style="color: #0000BB">$severity</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">$message_code</span><span style="color: #007700">, </span><span style="color: #0000BB">$bytes_transferred</span><span style="color: #007700">, </span><span style="color: #0000BB">$bytes_max</span><span style="color: #007700">);<br />            </span><span style="color: #FF8000">/* Ignore */<br />            </span><span style="color: #007700">break;<br /><br />        case </span><span style="color: #0000BB">STREAM_NOTIFY_REDIRECTED</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">"Being redirected to: "</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">;<br />            break;<br /><br />        case </span><span style="color: #0000BB">STREAM_NOTIFY_CONNECT</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">"Connected..."</span><span style="color: #007700">;<br />            break;<br /><br />        case </span><span style="color: #0000BB">STREAM_NOTIFY_FILE_SIZE_IS</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">"Got the filesize: "</span><span style="color: #007700">, </span><span style="color: #0000BB">$bytes_max</span><span style="color: #007700">;<br />            break;<br /><br />        case </span><span style="color: #0000BB">STREAM_NOTIFY_MIME_TYPE_IS</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">"Found the mime-type: "</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">;<br />            break;<br /><br />        case </span><span style="color: #0000BB">STREAM_NOTIFY_PROGRESS</span><span style="color: #007700">:<br />            echo </span><span style="color: #DD0000">"Made some progress, downloaded "</span><span style="color: #007700">, </span><span style="color: #0000BB">$bytes_transferred</span><span style="color: #007700">, </span><span style="color: #DD0000">" so far"</span><span style="color: #007700">;<br />            break;<br />    }<br />    echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$ctx </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">stream_context_set_params</span><span style="color: #007700">(</span><span style="color: #0000BB">$ctx</span><span style="color: #007700">, array(</span><span style="color: #DD0000">"notification" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"stream_notification_callback"</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://php.net/contact"</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">$ctx</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Connected...
Found the mime-type: text/html; charset=utf-8
Being redirected to: http://no.php.net/contact
Connected...
Got the filesize: 0
Found the mime-type: text/html; charset=utf-8
Being redirected to: http://no.php.net/contact.php
Connected...
Got the filesize: 4589
Found the mime-type: text/html;charset=utf-8
Made some progress, downloaded 0 so far
Made some progress, downloaded 0 so far
Made some progress, downloaded 0 so far
Made some progress, downloaded 1440 so far
Made some progress, downloaded 2880 so far
Made some progress, downloaded 4320 so far
Made some progress, downloaded 5760 so far
Made some progress, downloaded 6381 so far
Made some progress, downloaded 7002 so far</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="stream-notification-callback.example.download">
    <p><strong>Example #2 Simple progressbar for commandline download client</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">usage</span><span style="color: #007700">(</span><span style="color: #0000BB">$argv</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Usage:\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"\tphp %s &lt;http://example.com/file&gt; &lt;localfile&gt;\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />    exit(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />}<br /><br />function </span><span style="color: #0000BB">stream_notification_callback</span><span style="color: #007700">(</span><span style="color: #0000BB">$notification_code</span><span style="color: #007700">, </span><span style="color: #0000BB">$severity</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">$message_code</span><span style="color: #007700">, </span><span style="color: #0000BB">$bytes_transferred</span><span style="color: #007700">, </span><span style="color: #0000BB">$bytes_max</span><span style="color: #007700">) {<br />    static </span><span style="color: #0000BB">$filesize </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />    switch(</span><span style="color: #0000BB">$notification_code</span><span style="color: #007700">) {<br />    case </span><span style="color: #0000BB">STREAM_NOTIFY_RESOLVE</span><span style="color: #007700">:<br />    case </span><span style="color: #0000BB">STREAM_NOTIFY_AUTH_REQUIRED</span><span style="color: #007700">:<br />    case </span><span style="color: #0000BB">STREAM_NOTIFY_COMPLETED</span><span style="color: #007700">:<br />    case </span><span style="color: #0000BB">STREAM_NOTIFY_FAILURE</span><span style="color: #007700">:<br />    case </span><span style="color: #0000BB">STREAM_NOTIFY_AUTH_RESULT</span><span style="color: #007700">:<br />        </span><span style="color: #FF8000">/* Ignore */<br />        </span><span style="color: #007700">break;<br /><br />    case </span><span style="color: #0000BB">STREAM_NOTIFY_REDIRECTED</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"Being redirected to: "</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />        break;<br /><br />    case </span><span style="color: #0000BB">STREAM_NOTIFY_CONNECT</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"Connected...\n"</span><span style="color: #007700">;<br />        break;<br /><br />    case </span><span style="color: #0000BB">STREAM_NOTIFY_FILE_SIZE_IS</span><span style="color: #007700">:<br />        </span><span style="color: #0000BB">$filesize </span><span style="color: #007700">= </span><span style="color: #0000BB">$bytes_max</span><span style="color: #007700">;<br />        echo </span><span style="color: #DD0000">"Filesize: "</span><span style="color: #007700">, </span><span style="color: #0000BB">$filesize</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />        break;<br /><br />    case </span><span style="color: #0000BB">STREAM_NOTIFY_MIME_TYPE_IS</span><span style="color: #007700">:<br />        echo </span><span style="color: #DD0000">"Mime-type: "</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />        break;<br /><br />    case </span><span style="color: #0000BB">STREAM_NOTIFY_PROGRESS</span><span style="color: #007700">:<br />        if (</span><span style="color: #0000BB">$bytes_transferred </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />            if (!isset(</span><span style="color: #0000BB">$filesize</span><span style="color: #007700">)) {<br />                </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"\rUnknown filesize.. %2d kb done.."</span><span style="color: #007700">, </span><span style="color: #0000BB">$bytes_transferred</span><span style="color: #007700">/</span><span style="color: #0000BB">1024</span><span style="color: #007700">);<br />            } else {<br />                </span><span style="color: #0000BB">$length </span><span style="color: #007700">= (int) ((</span><span style="color: #0000BB">$bytes_transferred</span><span style="color: #007700">/</span><span style="color: #0000BB">$filesize</span><span style="color: #007700">)*</span><span style="color: #0000BB">100</span><span style="color: #007700">);<br />                </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"\r[%-100s] %d%% (%2d/%2d kb)"</span><span style="color: #007700">, </span><span style="color: #0000BB">str_repeat</span><span style="color: #007700">(</span><span style="color: #DD0000">"="</span><span style="color: #007700">, </span><span style="color: #0000BB">$length</span><span style="color: #007700">). </span><span style="color: #DD0000">"&gt;"</span><span style="color: #007700">, </span><span style="color: #0000BB">$length</span><span style="color: #007700">, (</span><span style="color: #0000BB">$bytes_transferred</span><span style="color: #007700">/</span><span style="color: #0000BB">1024</span><span style="color: #007700">), </span><span style="color: #0000BB">$filesize</span><span style="color: #007700">/</span><span style="color: #0000BB">1024</span><span style="color: #007700">);<br />            }<br />        }<br />        break;<br />    }<br />}<br /><br />isset(</span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">], </span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]) or </span><span style="color: #0000BB">usage</span><span style="color: #007700">(</span><span style="color: #0000BB">$argv</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$ctx </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">stream_context_set_params</span><span style="color: #007700">(</span><span style="color: #0000BB">$ctx</span><span style="color: #007700">, array(</span><span style="color: #DD0000">"notification" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"stream_notification_callback"</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">], </span><span style="color: #DD0000">"r"</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">$ctx</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">is_resource</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">) &amp;&amp; </span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">], </span><span style="color: #0000BB">$fp</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"\nDone!\n"</span><span style="color: #007700">;<br />    exit(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$err </span><span style="color: #007700">= </span><span style="color: #0000BB">error_get_last</span><span style="color: #007700">();<br />echo </span><span style="color: #DD0000">"\nErrrrrorr..\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$err</span><span style="color: #007700">[</span><span style="color: #DD0000">"message"</span><span style="color: #007700">], </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />exit(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     Executing the example above with:
     <code class="literal">php -n fetch.php
     http://no2.php.net/get/php-5-LATEST.tar.bz2/from/this/mirror
     php-latest.tar.bz2</code> will output something similar too:
    </p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Connected...
Mime-type: text/html; charset=utf-8
Being redirected to: http://no2.php.net/distributions/php-5.2.5.tar.bz2
Connected...
Filesize: 7773024
Mime-type: application/octet-stream
[========================================&gt;                                                           ] 40% (3076/7590 kb)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.stream-notification-callback-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="context.params.php" class="xref">Context parameters</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/stream/functions/stream-notification-callback.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.stream-notification-callback%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.stream-notification-callback&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stream-notification-callback.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121236">  <div class="votes">
    <div id="Vu121236">
    <a href="/manual/vote-note.php?id=121236&amp;page=function.stream-notification-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121236">
    <a href="/manual/vote-note.php?id=121236&amp;page=function.stream-notification-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121236" title="100% like this...">
    3
    </div>
  </div>
  <a href="#121236" class="name">
  <strong class="user"><em>billynoah at gmail dot com</em></strong></a><a class="genanchor" href="#121236"> &para;</a><div class="date" title="2017-06-16 10:58"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121236">
<div class="phpcode"><code><span class="html">A couple of notes regarding the examples here (I'm using PHP 7.0.18):<br /><br />1) fopen() did not provide STREAM_NOTIFY_PROGRESS for me but `file_get_contents()` worked fine.<br /><br />2) The bytes transferred when transferring a zip file seems to always be shy by 8192 (8k).  This varies depending on filetype and also breaks STREAM_NOTIFY_PROGRESS when the filesize is below 8k.  I modified the function and it's now displaying the correct amount transferred and percentage downloaded on zip files above 8k.  I'm not sure why the callback is so inconsistent but hopefully this is helpful to someone.  This was also modified to only display progress:<br /><br /><span class="default">&lt;?php<br /><br />$ctx </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">();<br /></span><span class="default">stream_context_set_params</span><span class="keyword">(</span><span class="default">$ctx</span><span class="keyword">, array(</span><span class="string">"notification" </span><span class="keyword">=&gt; </span><span class="string">"stream_notification_callback"</span><span class="keyword">));<br /></span><span class="default">$fileData </span><span class="keyword">= @</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'<a href="http://example.com/test.zip" rel="nofollow" target="_blank">http://example.com/test.zip</a>'</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">$ctx</span><span class="keyword">);<br /><br />function </span><span class="default">stream_notification_callback</span><span class="keyword">(</span><span class="default">$notification_code</span><span class="keyword">, </span><span class="default">$severity</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$message_code</span><span class="keyword">, </span><span class="default">$bytes_transferred</span><span class="keyword">, </span><span class="default">$bytes_max</span><span class="keyword">) {<br />    static </span><span class="default">$filesize </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    switch(</span><span class="default">$notification_code</span><span class="keyword">) {<br />    case </span><span class="default">STREAM_NOTIFY_FILE_SIZE_IS</span><span class="keyword">:<br />        </span><span class="default">$filesize </span><span class="keyword">= </span><span class="default">$bytes_max</span><span class="keyword">;<br />        break;<br />    case </span><span class="default">STREAM_NOTIFY_CONNECT</span><span class="keyword">:<br />        echo </span><span class="string">"Connected...\n"</span><span class="keyword">;<br />        break;<br />    case </span><span class="default">STREAM_NOTIFY_PROGRESS</span><span class="keyword">:<br />        if (</span><span class="default">$bytes_transferred </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$filesize </span><span class="keyword">&gt;= </span><span class="default">8192</span><span class="keyword">) {<br />            </span><span class="default">$bytes_transferred </span><span class="keyword">+= </span><span class="default">8192</span><span class="keyword">;<br />            if (!isset(</span><span class="default">$filesize</span><span class="keyword">)) {<br />                </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\rUnknown filesize.. %2d kb done.."</span><span class="keyword">, </span><span class="default">$bytes_transferred</span><span class="keyword">/</span><span class="default">1024</span><span class="keyword">);<br />            } else {<br />                </span><span class="default">$length </span><span class="keyword">= (int)((</span><span class="default">$bytes_transferred</span><span class="keyword">/</span><span class="default">$filesize</span><span class="keyword">)*</span><span class="default">100</span><span class="keyword">);<br />                </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\r[%-100s] %d%% (%2d/%2d kb)"</span><span class="keyword">, </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"="</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">). </span><span class="string">"&gt;"</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, (</span><span class="default">$bytes_transferred</span><span class="keyword">/</span><span class="default">1024</span><span class="keyword">), </span><span class="default">$filesize</span><span class="keyword">/</span><span class="default">1024</span><span class="keyword">);<br />            }<br />        }<br />        break;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127969">  <div class="votes">
    <div id="Vu127969">
    <a href="/manual/vote-note.php?id=127969&amp;page=function.stream-notification-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127969">
    <a href="/manual/vote-note.php?id=127969&amp;page=function.stream-notification-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127969" title="100% like this...">
    2
    </div>
  </div>
  <a href="#127969" class="name">
  <strong class="user"><em>aetonsi</em></strong></a><a class="genanchor" href="#127969"> &para;</a><div class="date" title="2022-11-29 03:51"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127969">
<div class="phpcode"><code><span class="html">A couple of unreported behaviors:<br />- case 1) if this callback calls die/exit($msg), it will print $msg, then the execution will go on until the request/wrapper is consumed, emitting a "PHP Warning: Failed to call user notifier" on each invocation of the callback. After the last callback invocation, the script is immediately terminated.<br />- case 2) if this callback throws an exception, it will behave the same way as exit/die, except for the fact that after the last callback invocation it does not terminate the script. The exception is instead raised in the scope of the request/wrapper, and can be caught with a try catch (right there or at a higher level).<br /><br />Example code for case 1). The final "TEST ECHO" string will NOT be printed.<br /><span class="default">&lt;?php<br />$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">([</span><span class="string">'http' </span><span class="keyword">=&gt; [</span><span class="string">'ignore_errors' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,]]);<br /></span><span class="default">stream_context_set_params</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">, [</span><span class="string">'notification' </span><span class="keyword">=&gt; function () {<br />    die(</span><span class="string">'error'</span><span class="keyword">);<br />}]);<br /><br /></span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'<a href="https://www.google.com" rel="nofollow" target="_blank">https://www.google.com</a>'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">);<br />echo </span><span class="string">"TEST ECHO"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Example code for case 2). The exception is raised at the level of the file_get_contents call, it's catched, and the final "TEST ECHO" gets printed.<br /><span class="default">&lt;?php<br />$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">([</span><span class="string">'http' </span><span class="keyword">=&gt; [</span><span class="string">'ignore_errors' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,]]);<br /></span><span class="default">stream_context_set_params</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">, [</span><span class="string">'notification' </span><span class="keyword">=&gt; function () {<br />    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'...'</span><span class="keyword">);<br />}]);<br /><br />try{<br />    </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'<a href="https://www.google.com" rel="nofollow" target="_blank">https://www.google.com</a>'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">);<br />}catch(</span><span class="default">exception $e</span><span class="keyword">) { }<br />echo </span><span class="string">"TEST ECHO"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.stream-notification-callback&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stream-notification-callback.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.stream.php">Stream Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.stream-bucket-append.php" title="stream_&#8203;bucket_&#8203;append">stream_&#8203;bucket_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-make-writeable.php" title="stream_&#8203;bucket_&#8203;make_&#8203;writeable">stream_&#8203;bucket_&#8203;make_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-new.php" title="stream_&#8203;bucket_&#8203;new">stream_&#8203;bucket_&#8203;new</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-prepend.php" title="stream_&#8203;bucket_&#8203;prepend">stream_&#8203;bucket_&#8203;prepend</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-create.php" title="stream_&#8203;context_&#8203;create">stream_&#8203;context_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-default.php" title="stream_&#8203;context_&#8203;get_&#8203;default">stream_&#8203;context_&#8203;get_&#8203;default</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-options.php" title="stream_&#8203;context_&#8203;get_&#8203;options">stream_&#8203;context_&#8203;get_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-params.php" title="stream_&#8203;context_&#8203;get_&#8203;params">stream_&#8203;context_&#8203;get_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-default.php" title="stream_&#8203;context_&#8203;set_&#8203;default">stream_&#8203;context_&#8203;set_&#8203;default</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-option.php" title="stream_&#8203;context_&#8203;set_&#8203;option">stream_&#8203;context_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-options.php" title="stream_&#8203;context_&#8203;set_&#8203;options">stream_&#8203;context_&#8203;set_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-params.php" title="stream_&#8203;context_&#8203;set_&#8203;params">stream_&#8203;context_&#8203;set_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-copy-to-stream.php" title="stream_&#8203;copy_&#8203;to_&#8203;stream">stream_&#8203;copy_&#8203;to_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-append.php" title="stream_&#8203;filter_&#8203;append">stream_&#8203;filter_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-prepend.php" title="stream_&#8203;filter_&#8203;prepend">stream_&#8203;filter_&#8203;prepend</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-register.php" title="stream_&#8203;filter_&#8203;register">stream_&#8203;filter_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-remove.php" title="stream_&#8203;filter_&#8203;remove">stream_&#8203;filter_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-contents.php" title="stream_&#8203;get_&#8203;contents">stream_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-filters.php" title="stream_&#8203;get_&#8203;filters">stream_&#8203;get_&#8203;filters</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-line.php" title="stream_&#8203;get_&#8203;line">stream_&#8203;get_&#8203;line</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-meta-data.php" title="stream_&#8203;get_&#8203;meta_&#8203;data">stream_&#8203;get_&#8203;meta_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-transports.php" title="stream_&#8203;get_&#8203;transports">stream_&#8203;get_&#8203;transports</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-wrappers.php" title="stream_&#8203;get_&#8203;wrappers">stream_&#8203;get_&#8203;wrappers</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-is-local.php" title="stream_&#8203;is_&#8203;local">stream_&#8203;is_&#8203;local</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-isatty.php" title="stream_&#8203;isatty">stream_&#8203;isatty</a>
                        </li>
                                                <li class="current">
                            <a href="function.stream-notification-callback.php" title="stream_&#8203;notification_&#8203;callback">stream_&#8203;notification_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-register-wrapper.php" title="stream_&#8203;register_&#8203;wrapper">stream_&#8203;register_&#8203;wrapper</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-resolve-include-path.php" title="stream_&#8203;resolve_&#8203;include_&#8203;path">stream_&#8203;resolve_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-select.php" title="stream_&#8203;select">stream_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-blocking.php" title="stream_&#8203;set_&#8203;blocking">stream_&#8203;set_&#8203;blocking</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-chunk-size.php" title="stream_&#8203;set_&#8203;chunk_&#8203;size">stream_&#8203;set_&#8203;chunk_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-read-buffer.php" title="stream_&#8203;set_&#8203;read_&#8203;buffer">stream_&#8203;set_&#8203;read_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-timeout.php" title="stream_&#8203;set_&#8203;timeout">stream_&#8203;set_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-write-buffer.php" title="stream_&#8203;set_&#8203;write_&#8203;buffer">stream_&#8203;set_&#8203;write_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-accept.php" title="stream_&#8203;socket_&#8203;accept">stream_&#8203;socket_&#8203;accept</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-client.php" title="stream_&#8203;socket_&#8203;client">stream_&#8203;socket_&#8203;client</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-enable-crypto.php" title="stream_&#8203;socket_&#8203;enable_&#8203;crypto">stream_&#8203;socket_&#8203;enable_&#8203;crypto</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-get-name.php" title="stream_&#8203;socket_&#8203;get_&#8203;name">stream_&#8203;socket_&#8203;get_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-pair.php" title="stream_&#8203;socket_&#8203;pair">stream_&#8203;socket_&#8203;pair</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-recvfrom.php" title="stream_&#8203;socket_&#8203;recvfrom">stream_&#8203;socket_&#8203;recvfrom</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-sendto.php" title="stream_&#8203;socket_&#8203;sendto">stream_&#8203;socket_&#8203;sendto</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-server.php" title="stream_&#8203;socket_&#8203;server">stream_&#8203;socket_&#8203;server</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-shutdown.php" title="stream_&#8203;socket_&#8203;shutdown">stream_&#8203;socket_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-supports-lock.php" title="stream_&#8203;supports_&#8203;lock">stream_&#8203;supports_&#8203;lock</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-register.php" title="stream_&#8203;wrapper_&#8203;register">stream_&#8203;wrapper_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-restore.php" title="stream_&#8203;wrapper_&#8203;restore">stream_&#8203;wrapper_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-unregister.php" title="stream_&#8203;wrapper_&#8203;unregister">stream_&#8203;wrapper_&#8203;unregister</a>
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
