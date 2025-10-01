<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: snmpwalkoid - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.snmpwalkoid.php">
 <link rel="shorturl" href="https://www.php.net/snmpwalkoid">
 <link rel="alternate" href="https://www.php.net/snmpwalkoid" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.snmp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.snmpwalk.php">
 <link rel="next" href="https://www.php.net/manual/en/class.snmp.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.snmpwalkoid.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.snmpwalkoid.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.snmpwalkoid.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.snmpwalkoid.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.snmpwalkoid.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.snmpwalkoid.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.snmpwalkoid.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.snmpwalkoid.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.snmpwalkoid.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.snmpwalkoid.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.snmpwalkoid.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Query for a tree of information about a network entity" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: snmpwalkoid - Manual" />
<meta name="twitter:description" content="Query for a tree of information about a network entity" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: snmpwalkoid - Manual" />
<meta itemprop="description" content="Query for a tree of information about a network entity" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Query for a tree of information about a network entity" />

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
        <a href="class.snmp.php">
          SNMP &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.snmpwalk.php">
          &laquo; snmpwalk        </a>
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
            <option value='en/function.snmpwalkoid.php' selected="selected">English</option>
            <option value='de/function.snmpwalkoid.php'>German</option>
            <option value='es/function.snmpwalkoid.php'>Spanish</option>
            <option value='fr/function.snmpwalkoid.php'>French</option>
            <option value='it/function.snmpwalkoid.php'>Italian</option>
            <option value='ja/function.snmpwalkoid.php'>Japanese</option>
            <option value='pt_BR/function.snmpwalkoid.php'>Brazilian Portuguese</option>
            <option value='ru/function.snmpwalkoid.php'>Russian</option>
            <option value='tr/function.snmpwalkoid.php'>Turkish</option>
            <option value='uk/function.snmpwalkoid.php'>Ukrainian</option>
            <option value='zh/function.snmpwalkoid.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.snmpwalkoid" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">snmpwalkoid</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmpwalkoid</span> &mdash; <span class="dc-title">Query for a tree of information about a network entity
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.snmpwalkoid-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>snmpwalkoid</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hostname</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$community</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$object_id</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeout</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$retries</code><span class="initializer"> = -1</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


  <p class="para rdfs-comment">
   <span class="function"><strong>snmpwalkoid()</strong></span> function is used to read all object ids
   and their respective values from an SNMP agent specified by  
   <code class="parameter">hostname</code>.
  </p>

  <p class="para">
   The existence of <span class="function"><strong>snmpwalkoid()</strong></span> and
   <span class="function"><a href="function.snmpwalk.php" class="function">snmpwalk()</a></span> has historical reasons.  Both
   functions are provided for backward compatibility.
   Use <span class="function"><a href="function.snmprealwalk.php" class="function">snmprealwalk()</a></span> instead.
  </p> 
 </div>


 <div class="refsect1 parameters" id="refsect1-function.snmpwalkoid-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">hostname</code></dt>
     <dd>
      <p class="para">
       The SNMP agent.
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
       the SNMP objects tree and all objects under that tree are returned as
       an array. 
      </p>
      <p class="para">
       If <code class="parameter">object_id</code> is specified, all the SNMP objects
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
      <p class="para">
       The number of times to retry if timeouts occur.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.snmpwalkoid-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an associative array with object ids and their respective
   object value starting from the <code class="parameter">object_id</code>
   as root or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.snmpwalkoid-examples">
  <h3 class="title">Examples</h3>
  <p class="para"> 
   <div class="example" id="example-4778">
    <p><strong>Example #1 <span class="function"><strong>snmpwalkoid()</strong></span> Example</strong></p>
    <div class="example-contents"> 
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">snmpwalkoid</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">); <br />for (</span><span style="color: #0000BB">reset</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">); </span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">key</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">); </span><span style="color: #0000BB">next</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">: </span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]</span><span style="color: #DD0000">&lt;br /&gt;\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p> 
  <p class="para">
   Above function call would return all the SNMP objects from the
   SNMP agent running on localhost. One can step through the values
   with a loop
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.snmpwalkoid-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.snmpwalk.php" class="function" rel="rdfs-seeAlso">snmpwalk()</a> - Fetch all the SNMP objects from an agent</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/snmp/functions/snmpwalkoid.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.snmpwalkoid%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.snmpwalkoid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.snmpwalkoid.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116209">  <div class="votes">
    <div id="Vu116209">
    <a href="/manual/vote-note.php?id=116209&amp;page=function.snmpwalkoid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116209">
    <a href="/manual/vote-note.php?id=116209&amp;page=function.snmpwalkoid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116209" title="no votes...">
    0
    </div>
  </div>
  <a href="#116209" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116209"> &para;</a><div class="date" title="2014-11-21 10:00"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116209">
<div class="phpcode"><code><span class="html">make sure you install "snmp-mibs-downloader" in debian.  <br /><br />apt-get install snmp-mibs-downloader<br /><br />you my also need to edit your /etc/apt/sources.list<br /><br />deb <a href="http://ftp.us.debian.org/debian/" rel="nofollow" target="_blank">http://ftp.us.debian.org/debian/</a> wheezy main contrib non-free<br />deb-src <a href="http://ftp.us.debian.org/debian/" rel="nofollow" target="_blank">http://ftp.us.debian.org/debian/</a> wheezy main contrib non-free</span></code></div>
  </div>
 </div>
  <div class="note" id="53832">  <div class="votes">
    <div id="Vu53832">
    <a href="/manual/vote-note.php?id=53832&amp;page=function.snmpwalkoid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53832">
    <a href="/manual/vote-note.php?id=53832&amp;page=function.snmpwalkoid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53832" title="no votes...">
    0
    </div>
  </div>
  <a href="#53832" class="name">
  <strong class="user"><em>thammer at rtccom dot com</em></strong></a><a class="genanchor" href="#53832"> &para;</a><div class="date" title="2005-06-14 08:29"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53832">
<div class="phpcode"><code><span class="html">The above note mentions that the MAC addresses come back converted to integers or something funky like that. Not sure why that is happening but I fixed that with a wrapper function.<br /><br />function PadMAC($mac) {<br />    $mac_arr = explode(':',$mac);<br />    foreach($mac_arr as $atom) {<br />        $atom = trim($atom);<br />        $newarr[] = sprintf("%02s",$atom);<br />    }<br />    $newmac = implode(':',$newarr);<br />    return $newmac;<br />}<br /><br />Maybe that will help somebody with that issue. I know I personally use the heck out of these user contributed notes</span></code></div>
  </div>
 </div>
  <div class="note" id="46538">  <div class="votes">
    <div id="Vu46538">
    <a href="/manual/vote-note.php?id=46538&amp;page=function.snmpwalkoid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46538">
    <a href="/manual/vote-note.php?id=46538&amp;page=function.snmpwalkoid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46538" title="no votes...">
    0
    </div>
  </div>
  <a href="#46538" class="name">
  <strong class="user"><em>gene_wood at example dot com</em></strong></a><a class="genanchor" href="#46538"> &para;</a><div class="date" title="2004-10-14 09:23"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46538">
<div class="phpcode"><code><span class="html">Looks like timeout is in MICRO seconds.<br />1,000,000 &amp;micros = 1 s</span></code></div>
  </div>
 </div>
  <div class="note" id="10489">  <div class="votes">
    <div id="Vu10489">
    <a href="/manual/vote-note.php?id=10489&amp;page=function.snmpwalkoid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10489">
    <a href="/manual/vote-note.php?id=10489&amp;page=function.snmpwalkoid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10489" title="no votes...">
    0
    </div>
  </div>
  <a href="#10489" class="name">
  <strong class="user"><em>jasper at pointless dot net</em></strong></a><a class="genanchor" href="#10489"> &para;</a><div class="date" title="2001-01-06 07:21"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10489">
<div class="phpcode"><code><span class="html">N.B. it's possible for snmpwalkoid to lose data - the "rmon.matrix.matrixSDTable" table for example uses binary mac addresses as part of the index, these get converted to ascii, and by the time they get to php they can be non-unique - so some entrys in the table get lost...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.snmpwalkoid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.snmpwalkoid.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.snmpwalk.php" title="snmpwalk">snmpwalk</a>
                        </li>
                                                <li class="current">
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
