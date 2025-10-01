<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: snmpwalk - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.snmpwalk.php">
 <link rel="shorturl" href="https://www.php.net/snmpwalk">
 <link rel="alternate" href="https://www.php.net/snmpwalk" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.snmp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.snmpset.php">
 <link rel="next" href="https://www.php.net/manual/en/function.snmpwalkoid.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.snmpwalk.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.snmpwalk.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.snmpwalk.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.snmpwalk.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.snmpwalk.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.snmpwalk.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.snmpwalk.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.snmpwalk.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.snmpwalk.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.snmpwalk.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.snmpwalk.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetch all the SNMP objects from an agent" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: snmpwalk - Manual" />
<meta name="twitter:description" content="Fetch all the SNMP objects from an agent" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: snmpwalk - Manual" />
<meta itemprop="description" content="Fetch all the SNMP objects from an agent" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetch all the SNMP objects from an agent" />

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
        <a href="function.snmpwalkoid.php">
          snmpwalkoid &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.snmpset.php">
          &laquo; snmpset        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.snmp.php'>SNMP</a></li>      <li><a href='ref.snmp.php'>SNMP Functions</a></li>      </ul>
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
            <option value='en/function.snmpwalk.php' selected="selected">English</option>
            <option value='de/function.snmpwalk.php'>German</option>
            <option value='es/function.snmpwalk.php'>Spanish</option>
            <option value='fr/function.snmpwalk.php'>French</option>
            <option value='it/function.snmpwalk.php'>Italian</option>
            <option value='ja/function.snmpwalk.php'>Japanese</option>
            <option value='pt_BR/function.snmpwalk.php'>Brazilian Portuguese</option>
            <option value='ru/function.snmpwalk.php'>Russian</option>
            <option value='tr/function.snmpwalk.php'>Turkish</option>
            <option value='uk/function.snmpwalk.php'>Ukrainian</option>
            <option value='zh/function.snmpwalk.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.snmpwalk" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">snmpwalk</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmpwalk</span> &mdash; <span class="dc-title">Fetch all the <abbr title="Simple Network Management Protocol">SNMP</abbr> objects from an agent</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.snmpwalk-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>snmpwalk</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hostname</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$community</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$object_id</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeout</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$retries</code><span class="initializer"> = -1</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


  <p class="para rdfs-comment">
   <span class="function"><strong>snmpwalk()</strong></span> function is used to read all the values from
   an <abbr title="Simple Network Management Protocol">SNMP</abbr> agent specified by the <code class="parameter">hostname</code>. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.snmpwalk-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">hostname</code></dt>
     <dd>
      <p class="para">
       The SNMP agent (server).
      </p>
     </dd>
    
    
     <dt><code class="parameter">community</code></dt>
     <dd>
      <p class="para">
       The read community.
      </p>
     </dd>
    
    
     <dt><code class="parameter">object_id</code></dt>
     <dd>
      <p class="para">
       If <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, <code class="parameter">object_id</code> is taken as the root of
       the <abbr title="Simple Network Management Protocol">SNMP</abbr> objects tree and all objects under that tree are returned as
       an array. 
      </p>
      <p class="para">
       If <code class="parameter">object_id</code> is specified, all the <abbr title="Simple Network Management Protocol">SNMP</abbr> objects
       below that <code class="parameter">object_id</code> are returned.
      </p>
     </dd>
    
    
     <dt><code class="parameter">timeout</code></dt>
     <dd>
      <p class="para">
       The number of microseconds until the first timeout.
      </p>
     </dd>
    
    
     <dt><code class="parameter">retries</code></dt>
     <dd>
      <p class="para">The number of times to retry if timeouts occur.</p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.snmpwalk-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array of <abbr title="Simple Network Management Protocol">SNMP</abbr> object values starting from the
   <code class="parameter">object_id</code> as root or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.snmpwalk-examples">
  <h3 class="title">Examples</h3>
  <p class="para"> 
   <div class="example" id="example-4777">
    <p><strong>Example #1 <span class="function"><strong>snmpwalk()</strong></span> Example</strong></p>
    <div class="example-contents"> 
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">snmpwalk</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">); <br /><br />foreach (</span><span style="color: #0000BB">$a </span><span style="color: #007700">as </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$val</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p> 
  <p class="para">
   Above function call would return all the <abbr title="Simple Network Management Protocol">SNMP</abbr> objects from the
   <abbr title="Simple Network Management Protocol">SNMP</abbr> agent running on localhost. One can step through the values
   with a loop
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.snmpwalk-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.snmprealwalk.php" class="function" rel="rdfs-seeAlso">snmprealwalk()</a> - Return all objects including their respective object ID within the specified one</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/snmp/functions/snmpwalk.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.snmpwalk%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.snmpwalk&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.snmpwalk.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="20193">  <div class="votes">
    <div id="Vu20193">
    <a href="/manual/vote-note.php?id=20193&amp;page=function.snmpwalk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20193">
    <a href="/manual/vote-note.php?id=20193&amp;page=function.snmpwalk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20193" title="62% like this...">
    2
    </div>
  </div>
  <a href="#20193" class="name">
  <strong class="user"><em>steve at ourabode dot org</em></strong></a><a class="genanchor" href="#20193"> &para;</a><div class="date" title="2002-03-26 03:54"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20193">
<div class="phpcode"><code><span class="html">Timeout is in MICRO seconds.<br />1,000,000 &amp;micros = 1 s</span></code></div>
  </div>
 </div>
  <div class="note" id="30332">  <div class="votes">
    <div id="Vu30332">
    <a href="/manual/vote-note.php?id=30332&amp;page=function.snmpwalk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30332">
    <a href="/manual/vote-note.php?id=30332&amp;page=function.snmpwalk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30332" title="60% like this...">
    2
    </div>
  </div>
  <a href="#30332" class="name">
  <strong class="user"><em>Lars Troen</em></strong></a><a class="genanchor" href="#30332"> &para;</a><div class="date" title="2003-03-14 03:18"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30332">
<div class="phpcode"><code><span class="html">Note that there's different behaviuor in php snmpwalk and ucd snmpwalk. If you try to walk an oid that has one value not under a subkey of the walked oid, ucd snmpwalk will return the value while php's snmpwalk will not.</span></code></div>
  </div>
 </div>
  <div class="note" id="28977">  <div class="votes">
    <div id="Vu28977">
    <a href="/manual/vote-note.php?id=28977&amp;page=function.snmpwalk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28977">
    <a href="/manual/vote-note.php?id=28977&amp;page=function.snmpwalk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28977" title="57% like this...">
    1
    </div>
  </div>
  <a href="#28977" class="name">
  <strong class="user"><em>anders at ei dot nu</em></strong></a><a class="genanchor" href="#28977"> &para;</a><div class="date" title="2003-01-29 10:11"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28977">
<div class="phpcode"><code><span class="html">It would be nice to be able to specify what snmp version to use ( 1,2c,3 )<br /><br />For now, I'ts hardcoded in ext/snmp/snmp.c<br /><br />change session.version from 1 to 2c or 3 if you need for now..<br /><br />i.e <br /><br />session.version = SNMP_VERSION_1;<br /><br />to:<br />session.version = SNMP_VERSION_2c;</span></code></div>
  </div>
 </div>
  <div class="note" id="129807">  <div class="votes">
    <div id="Vu129807">
    <a href="/manual/vote-note.php?id=129807&amp;page=function.snmpwalk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129807">
    <a href="/manual/vote-note.php?id=129807&amp;page=function.snmpwalk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129807" title="no votes...">
    0
    </div>
  </div>
  <a href="#129807" class="name">
  <strong class="user"><em>smcbride at msn dot com</em></strong></a><a class="genanchor" href="#129807"> &para;</a><div class="date" title="2024-10-17 10:51"><strong>11 months ago</strong></div>
  <div class="text" id="Hcom129807">
<div class="phpcode"><code><span class="html">snmpwalk and other snmp functions really need to support an optional port.<br /><br />In the corporate world it is very common to change the port for SNMP from 161 to some other port for security.  It is a simple security obfuscation, but a lot of bots will scan well known ports for attack vectors.  For example, we used to change ours to something like 1161 just to prevent making it easy.</span></code></div>
  </div>
 </div>
  <div class="note" id="15136">  <div class="votes">
    <div id="Vu15136">
    <a href="/manual/vote-note.php?id=15136&amp;page=function.snmpwalk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd15136">
    <a href="/manual/vote-note.php?id=15136&amp;page=function.snmpwalk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V15136" title="no votes...">
    0
    </div>
  </div>
  <a href="#15136" class="name">
  <strong class="user"><em>layer2 at www dot com</em></strong></a><a class="genanchor" href="#15136"> &para;</a><div class="date" title="2001-08-29 08:52"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom15136">
<div class="phpcode"><code><span class="html">Something to care about in dealing with snmpwalk:&lt;BR&gt;




<br />While walking the MIB, snmpwalk puts info that gets into an array, and that is correct.&lt;BR&gt;




<br />The trouble happened when snmpwalk needs to collect information from instances that contains subinstances (i.e. walking .1.2.3.4.5 and having instances like 1.1, 1.2, 1.3): in this case it gets info and passes into an array, but when walking the array, each value is preceeded by 'Counter32: '.&lt;BR&gt;




<br />I've tested this in many ways and it always happened the same way.</span></code></div>
  </div>
 </div>
  <div class="note" id="14852">  <div class="votes">
    <div id="Vu14852">
    <a href="/manual/vote-note.php?id=14852&amp;page=function.snmpwalk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14852">
    <a href="/manual/vote-note.php?id=14852&amp;page=function.snmpwalk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14852" title="no votes...">
    0
    </div>
  </div>
  <a href="#14852" class="name">
  <strong class="user"><em>john at antefacto dot com</em></strong></a><a class="genanchor" href="#14852"> &para;</a><div class="date" title="2001-08-17 08:21"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14852">
<div class="phpcode"><code><span class="html">Ah. That's why all of our SNMP stuff was timing out anytime there was any load on the system. Sigh. A waste of two weeks trying to debug snmp....
<br />
<br /> Even the snmpcmd manpage doesn't give a
<br />unit for timeout.</span></code></div>
  </div>
 </div>
  <div class="note" id="14459">  <div class="votes">
    <div id="Vu14459">
    <a href="/manual/vote-note.php?id=14459&amp;page=function.snmpwalk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14459">
    <a href="/manual/vote-note.php?id=14459&amp;page=function.snmpwalk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14459" title="no votes...">
    0
    </div>
  </div>
  <a href="#14459" class="name">
  <strong class="user"><em>billf at freebsd dot org</em></strong></a><a class="genanchor" href="#14459"> &para;</a><div class="date" title="2001-08-01 02:22"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14459">
<div class="phpcode"><code><span class="html">for the poster wondering what the
<br />timeout field was measured in:
<br />
<br />from the ucd-snmp header file snmp_api.h:
<br />
<br />    long    timeout; 
<br />    /* Number of uS until first timeout
<br />    then exponential backoff */</span></code></div>
  </div>
 </div>
  <div class="note" id="13525">  <div class="votes">
    <div id="Vu13525">
    <a href="/manual/vote-note.php?id=13525&amp;page=function.snmpwalk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13525">
    <a href="/manual/vote-note.php?id=13525&amp;page=function.snmpwalk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13525" title="50% like this...">
    0
    </div>
  </div>
  <a href="#13525" class="name">
  <strong class="user"><em>jmartinson(AT_nospam)info234.com</em></strong></a><a class="genanchor" href="#13525"> &para;</a><div class="date" title="2001-06-20 07:41"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13525">
<div class="phpcode"><code><span class="html">A quick router device view:
<br />
<br />&lt;?
<br />include "header.html";
<br />
<br />$host = "auscr1";
<br />$community = "tellme";
<br />                     
<br />$sysDescr = snmpget("$host","$community","system.sysDescr.0");
<br />$ifDescr = snmpwalk("$host","$community","interfaces.ifTable.ifEntry.ifDescr");
<br />$ifIndex = snmpwalk("$host","$community","interfaces.ifTable.ifEntry.ifIndex");
<br />$ifAdminStatus = snmpwalk("$host","$community","interfaces.ifTable.ifEntry.ifAdminStatus");
<br />$ifOperStatus = snmpwalk("$host","$community","interfaces.ifTable.ifEntry.ifOperStatus");
<br />$ifLastChange = snmpwalk("$host","$community","interfaces.ifTable.ifEntry.ifLastChange");
<br />                                          
<br />print "&lt;table border=1 bgcolor=#ffffff&gt;&lt;tr&gt;&lt;td&gt;$host&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;br&gt;";
<br />print "&lt;table border=1 bgcolor=#ffffff&gt;&lt;tr&gt;&lt;td&gt;$sysDescr&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;br&gt;";
<br />print "&lt;table border=1 bgcolor=#ffffff&gt;";
<br />print "&lt;tr&gt; 
<br />        &lt;td&gt;ifIndex&lt;/td&gt;
<br />        &lt;td&gt;ifDescr&lt;/td&gt;
<br />        &lt;td&gt;ifAdminStatus&lt;/td&gt;
<br />        &lt;td&gt;ifOperStatus&lt;/td&gt;
<br />        &lt;td&gt;ifLastChange&lt;/td&gt;
<br />        &lt;/tr&gt;";
<br />             
<br />for ($i=0; $i&lt;count($ifIndex); $i++) {
<br />        print "&lt;tr&gt;";
<br />        print "&lt;td&gt;$ifIndex[$i]&lt;/td&gt;";
<br />        print "&lt;td&gt;$ifDescr[$i]&lt;/td&gt;";
<br />        print "&lt;td&gt;$ifAdminStatus[$i]&lt;/td&gt;";
<br />        print "&lt;td&gt;$ifOperStatus[$i]&lt;/td&gt;";
<br />        print "&lt;td&gt;$ifLastChange[$i]&lt;/td&gt;";
<br />        print "&lt;/tr&gt;";
<br />}            
<br />print "&lt;/table&gt;";
<br />
<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="51216">  <div class="votes">
    <div id="Vu51216">
    <a href="/manual/vote-note.php?id=51216&amp;page=function.snmpwalk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51216">
    <a href="/manual/vote-note.php?id=51216&amp;page=function.snmpwalk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51216" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#51216" class="name">
  <strong class="user"><em>http://mike.eire.ca</em></strong></a><a class="genanchor" href="#51216"> &para;</a><div class="date" title="2005-03-23 10:54"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51216">
<div class="phpcode"><code><span class="html">I found on Windows (PHP 5) an empty string did not return anything, it just timed out.  I had to use null instead:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">snmpwalk</span><span class="keyword">(</span><span class="string">"127.0.0.1"</span><span class="keyword">, </span><span class="string">"public"</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="35870">  <div class="votes">
    <div id="Vu35870">
    <a href="/manual/vote-note.php?id=35870&amp;page=function.snmpwalk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35870">
    <a href="/manual/vote-note.php?id=35870&amp;page=function.snmpwalk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35870" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#35870" class="name">
  <strong class="user"><em>bobby [dot] clark [at] eku [dot] edu</em></strong></a><a class="genanchor" href="#35870"> &para;</a><div class="date" title="2003-09-17 02:29"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35870">
<div class="phpcode"><code><span class="html">I had to use an object_id like these.<br />'SNMPv2-MIB::system.sysDescr.0'<br />'IF-MIB::interfaces.ifTable.ifEntry.ifAdminStatus'<br /><br /><span class="default">&lt;?php<br />$host </span><span class="keyword">= </span><span class="string">'192.168.1.1'</span><span class="keyword">;<br /></span><span class="default">$community </span><span class="keyword">= </span><span class="string">'public'</span><span class="keyword">;<br /></span><span class="default">$object_id </span><span class="keyword">= </span><span class="string">'IF-MIB::interfaces.ifTables.ifEntry.ifAdminStatus'</span><span class="keyword">;<br /><br /></span><span class="default">$sysdesc </span><span class="keyword">= </span><span class="default">snmpwalk</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$community</span><span class="string">', $object_id);<br />print_r($sysdesc);<br />?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.snmpwalk&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.snmpwalk.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.snmp.php">SNMP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.snmp-get-quick-print.php" title="snmp_&#8203;get_&#8203;quick_&#8203;print">snmp_&#8203;get_&#8203;quick_&#8203;print</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp-get-valueretrieval.php" title="snmp_&#8203;get_&#8203;valueretrieval">snmp_&#8203;get_&#8203;valueretrieval</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp-read-mib.php" title="snmp_&#8203;read_&#8203;mib">snmp_&#8203;read_&#8203;mib</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp-set-enum-print.php" title="snmp_&#8203;set_&#8203;enum_&#8203;print">snmp_&#8203;set_&#8203;enum_&#8203;print</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp-set-oid-numeric-print.php" title="snmp_&#8203;set_&#8203;oid_&#8203;numeric_&#8203;print">snmp_&#8203;set_&#8203;oid_&#8203;numeric_&#8203;print</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp-set-oid-output-format.php" title="snmp_&#8203;set_&#8203;oid_&#8203;output_&#8203;format">snmp_&#8203;set_&#8203;oid_&#8203;output_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp-set-quick-print.php" title="snmp_&#8203;set_&#8203;quick_&#8203;print">snmp_&#8203;set_&#8203;quick_&#8203;print</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp-set-valueretrieval.php" title="snmp_&#8203;set_&#8203;valueretrieval">snmp_&#8203;set_&#8203;valueretrieval</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp2-get.php" title="snmp2_&#8203;get">snmp2_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp2-getnext.php" title="snmp2_&#8203;getnext">snmp2_&#8203;getnext</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp2-real-walk.php" title="snmp2_&#8203;real_&#8203;walk">snmp2_&#8203;real_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp2-set.php" title="snmp2_&#8203;set">snmp2_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp2-walk.php" title="snmp2_&#8203;walk">snmp2_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp3-get.php" title="snmp3_&#8203;get">snmp3_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp3-getnext.php" title="snmp3_&#8203;getnext">snmp3_&#8203;getnext</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp3-real-walk.php" title="snmp3_&#8203;real_&#8203;walk">snmp3_&#8203;real_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp3-set.php" title="snmp3_&#8203;set">snmp3_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.snmp3-walk.php" title="snmp3_&#8203;walk">snmp3_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.snmpget.php" title="snmpget">snmpget</a>
                        </li>
                                                <li class="">
                            <a href="function.snmpgetnext.php" title="snmpgetnext">snmpgetnext</a>
                        </li>
                                                <li class="">
                            <a href="function.snmprealwalk.php" title="snmprealwalk">snmprealwalk</a>
                        </li>
                                                <li class="">
                            <a href="function.snmpset.php" title="snmpset">snmpset</a>
                        </li>
                                                <li class="current">
                            <a href="function.snmpwalk.php" title="snmpwalk">snmpwalk</a>
                        </li>
                                                <li class="">
                            <a href="function.snmpwalkoid.php" title="snmpwalkoid">snmpwalkoid</a>
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
