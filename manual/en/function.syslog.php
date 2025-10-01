<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: syslog - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.syslog.php">
 <link rel="shorturl" href="https://www.php.net/syslog">
 <link rel="alternate" href="https://www.php.net/syslog" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.socket-set-timeout.php">
 <link rel="next" href="https://www.php.net/manual/en/book.rrd.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.syslog.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.syslog.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.syslog.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.syslog.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.syslog.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.syslog.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.syslog.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.syslog.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.syslog.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.syslog.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.syslog.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generate a system log message" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: syslog - Manual" />
<meta name="twitter:description" content="Generate a system log message" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: syslog - Manual" />
<meta itemprop="description" content="Generate a system log message" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generate a system log message" />

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
        <a href="book.rrd.php">
          RRD &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.socket-set-timeout.php">
          &laquo; socket_set_timeout        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.network.php'>Network</a></li>      <li><a href='ref.network.php'>Network Functions</a></li>      </ul>
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
            <option value='en/function.syslog.php' selected="selected">English</option>
            <option value='de/function.syslog.php'>German</option>
            <option value='es/function.syslog.php'>Spanish</option>
            <option value='fr/function.syslog.php'>French</option>
            <option value='it/function.syslog.php'>Italian</option>
            <option value='ja/function.syslog.php'>Japanese</option>
            <option value='pt_BR/function.syslog.php'>Brazilian Portuguese</option>
            <option value='ru/function.syslog.php'>Russian</option>
            <option value='tr/function.syslog.php'>Turkish</option>
            <option value='uk/function.syslog.php'>Ukrainian</option>
            <option value='zh/function.syslog.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.syslog" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">syslog</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">syslog</span> &mdash; <span class="dc-title">Generate a system log message</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.syslog-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>syslog</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$message</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>syslog()</strong></span> generates a log message that will be
   distributed by the system logger.
  </p>
  <p class="para">
   For information on setting up a user defined log handler, see the
   <span class="citerefentry"><span class="refentrytitle">syslog.conf</span>
   <span class="manvolnum">(5)</span></span> Unix manual page.  More
   information on the syslog facilities and option can be found in the man
   pages for <span class="citerefentry"><span class="refentrytitle">syslog</span>
   <span class="manvolnum">(3)</span></span> on Unix machines.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.syslog-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">priority</code></dt>
     <dd>
      <p class="para">
       One of the
       <span class="simplelist"><strong><code><a href="network.constants.php#constant.log-emerg">LOG_EMERG</a></code></strong>, <strong><code><a href="network.constants.php#constant.log-alert">LOG_ALERT</a></code></strong>, <strong><code><a href="network.constants.php#constant.log-crit">LOG_CRIT</a></code></strong>, <strong><code><a href="network.constants.php#constant.log-err">LOG_ERR</a></code></strong>, <strong><code><a href="network.constants.php#constant.log-warning">LOG_WARNING</a></code></strong>, <strong><code><a href="network.constants.php#constant.log-notice">LOG_NOTICE</a></code></strong>, <strong><code><a href="network.constants.php#constant.log-info">LOG_INFO</a></code></strong>, <strong><code><a href="network.constants.php#constant.log-debug">LOG_DEBUG</a></code></strong></span>
       constants.
      </p>
     </dd>
    
    
     <dt><code class="parameter">message</code></dt>
     <dd>
      <p class="para">
       The message to send.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.syslog-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.syslog-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4745">
    <p><strong>Example #1 Using <span class="function"><strong>syslog()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// open syslog, include the process ID and also send<br />// the log to standard error, and use a user defined<br />// logging mechanism<br /></span><span style="color: #0000BB">openlog</span><span style="color: #007700">(</span><span style="color: #DD0000">"myScriptLog"</span><span style="color: #007700">, </span><span style="color: #0000BB">LOG_PID </span><span style="color: #007700">| </span><span style="color: #0000BB">LOG_PERROR</span><span style="color: #007700">, </span><span style="color: #0000BB">LOG_LOCAL0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// some code<br /><br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">authorized_client</span><span style="color: #007700">()) {<br />    </span><span style="color: #FF8000">// do something<br /></span><span style="color: #007700">} else {<br />    </span><span style="color: #FF8000">// unauthorized client!<br />    // log the attempt<br />    </span><span style="color: #0000BB">$access </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y/m/d H:i:s"</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">syslog</span><span style="color: #007700">(</span><span style="color: #0000BB">LOG_WARNING</span><span style="color: #007700">, </span><span style="color: #DD0000">"Unauthorized client: </span><span style="color: #0000BB">$access</span><span style="color: #DD0000"> </span><span style="color: #007700">{</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REMOTE_ADDR'</span><span style="color: #007700">]}</span><span style="color: #DD0000"> (</span><span style="color: #007700">{</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">]}</span><span style="color: #DD0000">)"</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">closelog</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.syslog-notes">
  <h3 class="title">Notes</h3>
  <p class="para">
   On Windows, the syslog service is emulated using the Event
   Log.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Use of <strong><code><a href="network.constants.php#constant.log-local0">LOG_LOCAL0</a></code></strong> through
    <code class="literal">LOG_LOCAL7</code> for the <code class="parameter">facility</code>
    parameter of <span class="function"><a href="function.openlog.php" class="function">openlog()</a></span> is not available
    in Windows.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.syslog-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.openlog.php" class="function" rel="rdfs-seeAlso">openlog()</a> - Open connection to system logger</span></li>
    <li><span class="function"><a href="function.closelog.php" class="function" rel="rdfs-seeAlso">closelog()</a> - Close connection to system logger</span></li>
    <li><a href="errorfunc.configuration.php#ini.syslog.filter" class="link">syslog.filter</a> INI setting (starting with PHP 7.3)</li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/syslog.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.syslog%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.syslog&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.syslog.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79554">  <div class="votes">
    <div id="Vu79554">
    <a href="/manual/vote-note.php?id=79554&amp;page=function.syslog&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79554">
    <a href="/manual/vote-note.php?id=79554&amp;page=function.syslog&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79554" title="70% like this...">
    11
    </div>
  </div>
  <a href="#79554" class="name">
  <strong class="user"><em>james dot ellis at gmail dot com</em></strong></a><a class="genanchor" href="#79554"> &para;</a><div class="date" title="2007-12-02 08:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79554">
<div class="phpcode"><code><span class="html">If anyone is wondering why their log messages are appearing in multiple log files, here is one answer applying to *nix systems:<br /><br />If your syslog.conf looks like this (assuming you use LOG_LOCAL0 for web app logging) :<br /><br />local0.info    /var/log/web/info.log<br /><br />This will collect *all* messages of LOG_INFO level and higher, i.e everything except debug messages<br /><br />Try this instead to ensure that only messages of the named log level go into the relevant log file:<br /><br />local0.=info    /var/log/web/info.log<br /><br />Additionally, you may like to add this to ensure your messages don't end up in generic log files like "messages"  "all" "syslog" and "debug":<br /><br />local0.none    /var/log/messages<br />local0.none    /var/log/debug<br />etc<br /><br />saves disk space among other things - more at "man syslog.conf"</span></code></div>
  </div>
 </div>
  <div class="note" id="123249">  <div class="votes">
    <div id="Vu123249">
    <a href="/manual/vote-note.php?id=123249&amp;page=function.syslog&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123249">
    <a href="/manual/vote-note.php?id=123249&amp;page=function.syslog&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123249" title="75% like this...">
    6
    </div>
  </div>
  <a href="#123249" class="name">
  <strong class="user"><em>stevekamerman at gmail dot com</em></strong></a><a class="genanchor" href="#123249"> &para;</a><div class="date" title="2018-10-24 06:43"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123249">
<div class="phpcode"><code><span class="html">This function sends messages in BSD Syslog RFC 3164 format (<a href="https://tools.ietf.org/html/rfc3164" rel="nofollow" target="_blank">https://tools.ietf.org/html/rfc3164</a>).<br /><br />To see the raw messages being sent by PHP to the logging socket, first stop your syslog/rsylsog/ng-syslog service, then listen to the logging socket with the netcat-openbsd package:<br /><br />nc -U -l /dev/log<br /><br />Now, log something from PHP:<br /><br /><span class="default">&lt;?php<br />syslog</span><span class="keyword">(</span><span class="default">LOG_LOCAL1</span><span class="keyword">|</span><span class="default">LOG_INFO</span><span class="keyword">, </span><span class="string">"Test from PHP"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You will see the rfc3164 output from netcat:<br /><br />&lt;142&gt;Oct 24 14:32:51 php: Test from PHP</span></code></div>
  </div>
 </div>
  <div class="note" id="125161">  <div class="votes">
    <div id="Vu125161">
    <a href="/manual/vote-note.php?id=125161&amp;page=function.syslog&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125161">
    <a href="/manual/vote-note.php?id=125161&amp;page=function.syslog&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125161" title="72% like this...">
    5
    </div>
  </div>
  <a href="#125161" class="name">
  <strong class="user"><em>OWM</em></strong></a><a class="genanchor" href="#125161"> &para;</a><div class="date" title="2020-07-02 04:45"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125161">
<div class="phpcode"><code><span class="html">Syslog autodetects newline control characters and therefore splits the message by multiple lines. To prevent this behavior in PHP 7.3+ you can use undocumented (at this moment) ini setting:<br /><br /><span class="default">&lt;?php<br /><br />ini_set</span><span class="keyword">(</span><span class="string">'syslog.filter'</span><span class="keyword">, </span><span class="string">'raw'</span><span class="keyword">);<br /><br /></span><span class="comment"># more info here: <a href="https://bugs.php.net/bug.php?id=77913" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=77913</a></span></span></code></div>
  </div>
 </div>
  <div class="note" id="97843">  <div class="votes">
    <div id="Vu97843">
    <a href="/manual/vote-note.php?id=97843&amp;page=function.syslog&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97843">
    <a href="/manual/vote-note.php?id=97843&amp;page=function.syslog&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97843" title="62% like this...">
    8
    </div>
  </div>
  <a href="#97843" class="name">
  <strong class="user"><em>Antonio Lobato</em></strong></a><a class="genanchor" href="#97843"> &para;</a><div class="date" title="2010-05-11 01:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97843">
<div class="phpcode"><code><span class="html">A word of warning; if you use openlog() to ready syslog() and your Apache threads accept multiple requests, you *must* call closelog() if Apache's error log is configured to write to syslog.  Failure to do so will cause Apache's error log to write to whatever facility/ident was used in openlog.<br /><br />Example, in httpd.conf you have:<br /><br />ErrorLog syslog:local7<br /><br />and in php you do:<br /><br /><span class="default">&lt;?php<br />openlog</span><span class="keyword">(</span><span class="string">"myprogram"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">LOG_LOCAL0</span><span class="keyword">);<br /></span><span class="default">syslog</span><span class="keyword">(</span><span class="string">"My syslog message"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />From here on out, this Apache thread will write ErrorLog to local0 and under the process name "myprogram" and not httpd!  Calling closelog() will fix this.</span></code></div>
  </div>
 </div>
  <div class="note" id="123594">  <div class="votes">
    <div id="Vu123594">
    <a href="/manual/vote-note.php?id=123594&amp;page=function.syslog&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123594">
    <a href="/manual/vote-note.php?id=123594&amp;page=function.syslog&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123594" title="61% like this...">
    3
    </div>
  </div>
  <a href="#123594" class="name">
  <strong class="user"><em>rgagnon24 at gmail dot com</em></strong></a><a class="genanchor" href="#123594"> &para;</a><div class="date" title="2019-02-09 04:39"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123594">
<div class="phpcode"><code><span class="html">This one had me going for a while when using LOG_ constants in another object, when developing on Windows, but deploying on Linux.<br /><br />Windows evaluates some of the LOG_ constants to the same value, while LINUX does not.<br /><br />The 8 constants and their differences on the platforms to be aware of:<br /><br />Linux has these values as:<br />========================<br />LOG_EMERG = 0<br />LOG_ALERT = 1<br />LOG_CRIT = 2<br />LOG_ERR = 3<br />LOG_WARNING = 4<br />LOG_NOTICE = 5<br />LOG_INFO = 6<br />LOG_DEBUG = 7<br /><br />While on Windows, you have:<br />==========================<br />LOG_EMERG = 1<br />LOG_ALERT = 1<br />LOG_CRIT = 1<br />LOG_ERR = 4<br />LOG_WARNING = 5<br />LOG_NOTICE = 6<br />LOG_INFO = 6<br />LOG_DEBUG = 6<br /><br />So if you're setting LOG_WARNING in your code, Linux will use 4 as the priority while Windows will use 5.<br /><br />This is not a bug in PHP on either platform, but a difference in the system header files that PHP compiles with.  Not really anything you can do, but be aware if you're wondering why your messages log at different priorities depending on the platform, this could be why.</span></code></div>
  </div>
 </div>
  <div class="note" id="117255">  <div class="votes">
    <div id="Vu117255">
    <a href="/manual/vote-note.php?id=117255&amp;page=function.syslog&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117255">
    <a href="/manual/vote-note.php?id=117255&amp;page=function.syslog&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117255" title="54% like this...">
    2
    </div>
  </div>
  <a href="#117255" class="name">
  <strong class="user"><em>huangyg11 at gmail dot com</em></strong></a><a class="genanchor" href="#117255"> &para;</a><div class="date" title="2015-05-11 04:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117255">
<div class="phpcode"><code><span class="html">For those who want to simultaneously write to multiple syslog facilities : <br /><br />syslog(LOG_INFO|LOG_LOCAL0, "message for local0");<br />syslog(LOG_INFO|LOG_LOCAL1, "message for local1");</span></code></div>
  </div>
 </div>
  <div class="note" id="74486">  <div class="votes">
    <div id="Vu74486">
    <a href="/manual/vote-note.php?id=74486&amp;page=function.syslog&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74486">
    <a href="/manual/vote-note.php?id=74486&amp;page=function.syslog&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74486" title="56% like this...">
    2
    </div>
  </div>
  <a href="#74486" class="name">
  <strong class="user"><em>helly at php dot net</em></strong></a><a class="genanchor" href="#74486"> &para;</a><div class="date" title="2007-04-13 05:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74486">
<div class="phpcode"><code><span class="html">If you are using syslog-ng and want errors send to syslog then use ini setting "error_log = syslog" and add something like the following to your syslog-ng.conf:<br /><br />destination php { file("/var/log/php.log" owner(root) group(devel) perm(0620)); };<br />log { source(src); filter(f_php); destination(php); };</span></code></div>
  </div>
 </div>
  <div class="note" id="126649">  <div class="votes">
    <div id="Vu126649">
    <a href="/manual/vote-note.php?id=126649&amp;page=function.syslog&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126649">
    <a href="/manual/vote-note.php?id=126649&amp;page=function.syslog&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126649" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126649" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126649"> &para;</a><div class="date" title="2021-12-01 08:35"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126649">
<div class="phpcode"><code><span class="html">There's no point to manually timestamp the message (as shown in docs' example) as all sane logging systems timestamp all entries by themselves.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.syslog&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.syslog.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.network.php">Network Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.checkdnsrr.php" title="checkdnsrr">checkdnsrr</a>
                        </li>
                                                <li class="">
                            <a href="function.closelog.php" title="closelog">closelog</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-check-record.php" title="dns_&#8203;check_&#8203;record">dns_&#8203;check_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-get-mx.php" title="dns_&#8203;get_&#8203;mx">dns_&#8203;get_&#8203;mx</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-get-record.php" title="dns_&#8203;get_&#8203;record">dns_&#8203;get_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.fsockopen.php" title="fsockopen">fsockopen</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbyaddr.php" title="gethostbyaddr">gethostbyaddr</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbyname.php" title="gethostbyname">gethostbyname</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbynamel.php" title="gethostbynamel">gethostbynamel</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostname.php" title="gethostname">gethostname</a>
                        </li>
                                                <li class="">
                            <a href="function.getmxrr.php" title="getmxrr">getmxrr</a>
                        </li>
                                                <li class="">
                            <a href="function.getprotobyname.php" title="getprotobyname">getprotobyname</a>
                        </li>
                                                <li class="">
                            <a href="function.getprotobynumber.php" title="getprotobynumber">getprotobynumber</a>
                        </li>
                                                <li class="">
                            <a href="function.getservbyname.php" title="getservbyname">getservbyname</a>
                        </li>
                                                <li class="">
                            <a href="function.getservbyport.php" title="getservbyport">getservbyport</a>
                        </li>
                                                <li class="">
                            <a href="function.header.php" title="header">header</a>
                        </li>
                                                <li class="">
                            <a href="function.header-register-callback.php" title="header_&#8203;register_&#8203;callback">header_&#8203;register_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.header-remove.php" title="header_&#8203;remove">header_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.headers-list.php" title="headers_&#8203;list">headers_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.headers-sent.php" title="headers_&#8203;sent">headers_&#8203;sent</a>
                        </li>
                                                <li class="">
                            <a href="function.http-clear-last-response-headers.php" title="http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-get-last-response-headers.php" title="http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-response-code.php" title="http_&#8203;response_&#8203;code">http_&#8203;response_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.inet-ntop.php" title="inet_&#8203;ntop">inet_&#8203;ntop</a>
                        </li>
                                                <li class="">
                            <a href="function.inet-pton.php" title="inet_&#8203;pton">inet_&#8203;pton</a>
                        </li>
                                                <li class="">
                            <a href="function.ip2long.php" title="ip2long">ip2long</a>
                        </li>
                                                <li class="">
                            <a href="function.long2ip.php" title="long2ip">long2ip</a>
                        </li>
                                                <li class="">
                            <a href="function.net-get-interfaces.php" title="net_&#8203;get_&#8203;interfaces">net_&#8203;get_&#8203;interfaces</a>
                        </li>
                                                <li class="">
                            <a href="function.openlog.php" title="openlog">openlog</a>
                        </li>
                                                <li class="">
                            <a href="function.pfsockopen.php" title="pfsockopen">pfsockopen</a>
                        </li>
                                                <li class="">
                            <a href="function.request-parse-body.php" title="request_&#8203;parse_&#8203;body">request_&#8203;parse_&#8203;body</a>
                        </li>
                                                <li class="">
                            <a href="function.setcookie.php" title="setcookie">setcookie</a>
                        </li>
                                                <li class="">
                            <a href="function.setrawcookie.php" title="setrawcookie">setrawcookie</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-get-status.php" title="socket_&#8203;get_&#8203;status">socket_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-blocking.php" title="socket_&#8203;set_&#8203;blocking">socket_&#8203;set_&#8203;blocking</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-timeout.php" title="socket_&#8203;set_&#8203;timeout">socket_&#8203;set_&#8203;timeout</a>
                        </li>
                                                <li class="current">
                            <a href="function.syslog.php" title="syslog">syslog</a>
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
