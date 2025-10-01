<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: snmpget - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.snmpget.php">
 <link rel="shorturl" href="https://www.php.net/snmpget">
 <link rel="alternate" href="https://www.php.net/snmpget" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.snmp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.snmp3-walk.php">
 <link rel="next" href="https://www.php.net/manual/en/function.snmpgetnext.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.snmpget.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.snmpget.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.snmpget.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.snmpget.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.snmpget.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.snmpget.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.snmpget.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.snmpget.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.snmpget.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.snmpget.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.snmpget.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetch an SNMP object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: snmpget - Manual" />
<meta name="twitter:description" content="Fetch an SNMP object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: snmpget - Manual" />
<meta itemprop="description" content="Fetch an SNMP object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetch an SNMP object" />

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
        <a href="function.snmpgetnext.php">
          snmpgetnext &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.snmp3-walk.php">
          &laquo; snmp3_walk        </a>
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
            <option value='en/function.snmpget.php' selected="selected">English</option>
            <option value='de/function.snmpget.php'>German</option>
            <option value='es/function.snmpget.php'>Spanish</option>
            <option value='fr/function.snmpget.php'>French</option>
            <option value='it/function.snmpget.php'>Italian</option>
            <option value='ja/function.snmpget.php'>Japanese</option>
            <option value='pt_BR/function.snmpget.php'>Brazilian Portuguese</option>
            <option value='ru/function.snmpget.php'>Russian</option>
            <option value='tr/function.snmpget.php'>Turkish</option>
            <option value='uk/function.snmpget.php'>Ukrainian</option>
            <option value='zh/function.snmpget.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.snmpget" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">snmpget</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmpget</span> &mdash; <span class="dc-title">Fetch an <abbr title="Simple Network Management Protocol">SNMP</abbr> object</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.snmpget-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>snmpget</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hostname</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$community</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$object_id</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeout</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$retries</code><span class="initializer"> = -1</span></span><br>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>


  <p class="para rdfs-comment">
   The <span class="function"><strong>snmpget()</strong></span> function is used to read the
   value of an <abbr title="Simple Network Management Protocol">SNMP</abbr> object specified by the
   <code class="parameter">object_id</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.snmpget-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">hostname</code></dt>
     <dd>
      <p class="para">
       The <abbr title="Simple Network Management Protocol">SNMP</abbr> agent.
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
       The <abbr title="Simple Network Management Protocol">SNMP</abbr> object.
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


 <div class="refsect1 returnvalues" id="refsect1-function.snmpget-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <abbr title="Simple Network Management Protocol">SNMP</abbr> object value on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.snmpget-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4772">
    <p><strong>Example #1 Using <span class="function"><strong>snmpget()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$syscontact </span><span style="color: #007700">= </span><span style="color: #0000BB">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">"system.SysContact.0"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.snmpget-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.snmpset.php" class="function" rel="rdfs-seeAlso">snmpset()</a> - Set the value of an SNMP object</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/snmp/functions/snmpget.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.snmpget%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.snmpget&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.snmpget.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="40123">  <div class="votes">
    <div id="Vu40123">
    <a href="/manual/vote-note.php?id=40123&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40123">
    <a href="/manual/vote-note.php?id=40123&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40123" title="61% like this...">
    3
    </div>
  </div>
  <a href="#40123" class="name">
  <strong class="user"><em>Johann Glaser</em></strong></a><a class="genanchor" href="#40123"> &para;</a><div class="date" title="2004-02-22 12:39"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40123">
<div class="phpcode"><code><span class="html">It seems that for each snmpget() its own socket() will be opened. This is not closed after snmpget() finishes. Neither existing sockets are reused by subsequent snmpget() calls.<br /><br />When querying a few switches with lots of ports the maximum file descriptor count of Apache is exhausted. Thus no more snmpget() are possible. Additionaly no more files can be read by this particular Apache process. Neither the PHP file, any include files nor any other files (like a .css file, ...).<br /><br />This probably explains the observation of tkjode at phalnet dot com. Different to his case is that I'm using Linux.</span></code></div>
  </div>
 </div>
  <div class="note" id="8037">  <div class="votes">
    <div id="Vu8037">
    <a href="/manual/vote-note.php?id=8037&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd8037">
    <a href="/manual/vote-note.php?id=8037&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V8037" title="66% like this...">
    1
    </div>
  </div>
  <a href="#8037" class="name">
  <strong class="user"><em>grice at berbee dot com</em></strong></a><a class="genanchor" href="#8037"> &para;</a><div class="date" title="2000-08-24 04:05"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom8037">
<div class="phpcode"><code><span class="html">It looks like you can use a non-standard port for SNMP
<br />with something like this:
<br />
<br />$foo = snmpwalk('foo.bar.com:1161', 'foofoo', '.1.3.6');
<br />
<br />This is on PHP 3.16; I haven't managed to get PHP 4.02 to compile successfully on Solaris 2.6 yet.
<br />--Michael</span></code></div>
  </div>
 </div>
  <div class="note" id="91789">  <div class="votes">
    <div id="Vu91789">
    <a href="/manual/vote-note.php?id=91789&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91789">
    <a href="/manual/vote-note.php?id=91789&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91789" title="57% like this...">
    1
    </div>
  </div>
  <a href="#91789" class="name">
  <strong class="user"><em>maxie_ro at do dot not dot spam dot yahoo dot com</em></strong></a><a class="genanchor" href="#91789"> &para;</a><div class="date" title="2009-06-25 06:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91789">
<div class="phpcode"><code><span class="html">This function can be used to identify devices on a network, by getting their sysObjectID and sysDescr. On short, this is what I did:<br /><span class="default">&lt;?php<br />   $sysid </span><span class="keyword">= @</span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">, </span><span class="string">'public'</span><span class="keyword">, </span><span class="string">'.1.3.6.1.2.1.1.2.0'</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">);<br />   if(</span><span class="default">$sysid</span><span class="keyword">) {<br />      </span><span class="default">$sysdescr </span><span class="keyword">= @</span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">, </span><span class="string">'public'</span><span class="keyword">, </span><span class="string">'.1.3.6.1.2.1.1.1.0'</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">);<br />   }<br /></span><span class="default">?&gt;<br /></span><br />What I get for equipments, for example:<br /><span class="default">&lt;?php<br />   $sysid </span><span class="keyword">= </span><span class="string">'OID: .iso.3.6.1.4.1.5003.8.1.1.57'</span><span class="keyword">;</span><span class="comment">// =&gt; AudioCodes MP114;<br />   //.iso.3.6.1.4.1. is a "prefix" for the OID domain<br />   //5003 is the IANA number for AudioCodes<br />   //8.1.1.57 identifies the equipment type (MP-114)<br />   </span><span class="default">$sysdescr </span><span class="keyword">= </span><span class="string">'"Product: MP-114 FXS;SW Version: 5.00A.024"'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Unfortunately, not all of them report correct objectID, for example they report only the vendor and stop there etc.<br /><br />In case you are wondering why I used the code '.1.3.6.1.2.1.1.2.0' in the function call instead of "sysObjectID.0", it's because only numeric codes seem to work on Windows. For more codes, google "cisco SNMP Object Navigator".<br />Have fun.</span></code></div>
  </div>
 </div>
  <div class="note" id="87115">  <div class="votes">
    <div id="Vu87115">
    <a href="/manual/vote-note.php?id=87115&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87115">
    <a href="/manual/vote-note.php?id=87115&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87115" title="57% like this...">
    1
    </div>
  </div>
  <a href="#87115" class="name">
  <strong class="user"><em>d dot shereck at gmail dot com</em></strong></a><a class="genanchor" href="#87115"> &para;</a><div class="date" title="2008-11-19 03:24"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87115">
<div class="phpcode"><code><span class="html">For those wishing to use v2 or 3<br /><br />you can consult the php_snmp.h header<br />here is the list of functions<br /><br />PHP_FUNCTION(snmpget);<br />PHP_FUNCTION(snmpgetnext);<br />PHP_FUNCTION(snmpwalk);<br />PHP_FUNCTION(snmprealwalk);<br />PHP_FUNCTION(snmp_get_quick_print);<br />PHP_FUNCTION(snmp_set_quick_print);<br />PHP_FUNCTION(snmp_set_enum_print);<br />PHP_FUNCTION(snmp_set_oid_output_format);<br />PHP_FUNCTION(snmpset);<br /><br />PHP_FUNCTION(snmp2_get);<br />PHP_FUNCTION(snmp2_getnext);<br />PHP_FUNCTION(snmp2_walk);<br />PHP_FUNCTION(snmp2_real_walk);<br />PHP_FUNCTION(snmp2_set);<br /><br />PHP_FUNCTION(snmp3_get);<br />PHP_FUNCTION(snmp3_getnext);<br />PHP_FUNCTION(snmp3_walk);<br />PHP_FUNCTION(snmp3_real_walk);<br />PHP_FUNCTION(snmp3_set);<br /><br />PHP_FUNCTION(snmp_set_valueretrieval);<br />PHP_FUNCTION(snmp_get_valueretrieval);</span></code></div>
  </div>
 </div>
  <div class="note" id="74470">  <div class="votes">
    <div id="Vu74470">
    <a href="/manual/vote-note.php?id=74470&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74470">
    <a href="/manual/vote-note.php?id=74470&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74470" title="100% like this...">
    1
    </div>
  </div>
  <a href="#74470" class="name">
  <strong class="user"><em>Eduardo</em></strong></a><a class="genanchor" href="#74470"> &para;</a><div class="date" title="2007-04-12 12:30"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74470">
<div class="phpcode"><code><span class="html">The online documentation says that the function returns "FALSE" on error but, actually, it returns NULL on error.</span></code></div>
  </div>
 </div>
  <div class="note" id="79392">  <div class="votes">
    <div id="Vu79392">
    <a href="/manual/vote-note.php?id=79392&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79392">
    <a href="/manual/vote-note.php?id=79392&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79392" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79392" class="name">
  <strong class="user"><em>ac221 at sussex dot ac dot uk</em></strong></a><a class="genanchor" href="#79392"> &para;</a><div class="date" title="2007-11-24 01:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79392">
<div class="phpcode"><code><span class="html">Some SNMP agents return mac addresses as hex encoded ascii.<br /><br />e.g. '30:30:3a:31:37:3a:66:32:3a:39:62:3a:34:36:3a:30:65'<br /><br />Each octet represents 4 bits of the mac address.<br />Some vendors may also encode the separators into the string.<br /><br />Heres a function to convert these strings back into plain hex.<br /><br /><span class="default">&lt;?php<br />$hexStr </span><span class="keyword">= </span><span class="string">'30:30:3a:31:37:3a:66:32:3a:39:62:3a:34:36:3a:30:65'</span><span class="keyword">;<br /><br />echo(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">':'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">hexStr2Ascii</span><span class="keyword">(</span><span class="default">$hexStr</span><span class="keyword">)));<br /><br />function </span><span class="default">hexStr2Ascii</span><span class="keyword">(</span><span class="default">$hexStr</span><span class="keyword">,</span><span class="default">$separator </span><span class="keyword">= </span><span class="string">':'</span><span class="keyword">){<br />    </span><span class="default">$hexStrArr </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$separator</span><span class="keyword">,</span><span class="default">$hexStr</span><span class="keyword">);<br />    </span><span class="default">$asciiOut </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    foreach(</span><span class="default">$hexStrArr </span><span class="keyword">as </span><span class="default">$octet</span><span class="keyword">){<br />        </span><span class="default">$asciiOut </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$octet</span><span class="keyword">));<br />    }<br />    return </span><span class="default">$asciiOut</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Outputs: '0017f29b460e'</span></code></div>
  </div>
 </div>
  <div class="note" id="77906">  <div class="votes">
    <div id="Vu77906">
    <a href="/manual/vote-note.php?id=77906&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77906">
    <a href="/manual/vote-note.php?id=77906&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77906" title="50% like this...">
    0
    </div>
  </div>
  <a href="#77906" class="name">
  <strong class="user"><em>Malaka Udawatta (malaka13 at gmail dot com)</em></strong></a><a class="genanchor" href="#77906"> &para;</a><div class="date" title="2007-09-19 05:17"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77906">
<div class="phpcode"><code><span class="html">When I try to get a 64 bit counter variable (e.g. ifHCInOctets) using snmpget function, following error message was appeared.<br /><br />Error in packet: (noSuchName) There is no such variable name in this MIB<br /><br />The solution for this is to use snmp2_get(); function. The prameters are same as snmpget();</span></code></div>
  </div>
 </div>
  <div class="note" id="71071">  <div class="votes">
    <div id="Vu71071">
    <a href="/manual/vote-note.php?id=71071&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71071">
    <a href="/manual/vote-note.php?id=71071&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71071" title="no votes...">
    0
    </div>
  </div>
  <a href="#71071" class="name">
  <strong class="user"><em>michael dot mauch at gmx dot de</em></strong></a><a class="genanchor" href="#71071"> &para;</a><div class="date" title="2006-11-10 09:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71071">
<div class="phpcode"><code><span class="html">I have no idea what the timeout value is, but 1 second is really really 1 000 000 000 nano seconds (cf. <a href="http://en.wikipedia.org/wiki/SI_prefix" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/SI_prefix</a>).</span></code></div>
  </div>
 </div>
  <div class="note" id="66088">  <div class="votes">
    <div id="Vu66088">
    <a href="/manual/vote-note.php?id=66088&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66088">
    <a href="/manual/vote-note.php?id=66088&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66088" title="50% like this...">
    0
    </div>
  </div>
  <a href="#66088" class="name">
  <strong class="user"><em>Jim</em></strong></a><a class="genanchor" href="#66088"> &para;</a><div class="date" title="2006-05-14 07:52"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66088">
<div class="phpcode"><code><span class="html">Unfortunately, It appears that you can not put multiple objects into the snmpget function, ie: sysUpTime.0 ifInOctets.1 ifOutOctets.1.  For what it's worth, the time argument is in nano-seconds as previously mentioned.  There is a lot of conflicting information out there about this.</span></code></div>
  </div>
 </div>
  <div class="note" id="32687">  <div class="votes">
    <div id="Vu32687">
    <a href="/manual/vote-note.php?id=32687&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32687">
    <a href="/manual/vote-note.php?id=32687&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32687" title="50% like this...">
    0
    </div>
  </div>
  <a href="#32687" class="name">
  <strong class="user"><em>javierb at gmx dot net</em></strong></a><a class="genanchor" href="#32687"> &para;</a><div class="date" title="2003-06-04 08:08"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32687">
<div class="phpcode"><code><span class="html">pooling a cisco.<br /><br />$ip = '1.1.1.1';<br />$community ='publico';<br />$a = snmpget($ip,$community, "IF-MIB::ifLastChange.1")<br />$b = snmpget($ip,$community, "IF-MIB::ifAlias.1");<br />print("a = ".$a."\n"."b = ".$b."\n");<br /><br />a = Timeticks: (929969969) 107 days, 15:14:59.69<br />b = Timeticks: (929969969) 107 days, 15:14:59.69<br /><br />when the interface has not description.</span></code></div>
  </div>
 </div>
  <div class="note" id="18982">  <div class="votes">
    <div id="Vu18982">
    <a href="/manual/vote-note.php?id=18982&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18982">
    <a href="/manual/vote-note.php?id=18982&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18982" title="no votes...">
    0
    </div>
  </div>
  <a href="#18982" class="name">
  <strong class="user"><em>tkjode at phalnet dot com</em></strong></a><a class="genanchor" href="#18982"> &para;</a><div class="date" title="2002-02-12 11:49"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18982">
<div class="phpcode"><code><span class="html">It has been observed on NT/2000 systems that flooding devices with SNMP requests will cause NT's SNMP service to stop working.<br /><br />For example, I polled 183 switches on our network just fine.  I then attempted to simulate heavy traffic to that page by refreshing and breaking connections (as any real world system would have to go through).  SNMP stopped working throughout the entire machine, including non-PHP/Webserver processes.</span></code></div>
  </div>
 </div>
  <div class="note" id="78185">  <div class="votes">
    <div id="Vu78185">
    <a href="/manual/vote-note.php?id=78185&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78185">
    <a href="/manual/vote-note.php?id=78185&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78185" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#78185" class="name">
  <strong class="user"><em>brunoseys at telenet dot be</em></strong></a><a class="genanchor" href="#78185"> &para;</a><div class="date" title="2007-10-02 04:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78185">
<div class="phpcode"><code><span class="html">According the SNMPv2-MIB DEFINITIONS the right syntax should be "system.sysContact.0" and NOT "system.SysContact.0" as used in the above example 2251. <br /><br />SNMPv2-MIB DEFINITIONS <br />... <br />sysContact OBJECT-TYPE <br />SYNTAX DisplayString (SIZE (0..255)) <br />MAX-ACCESS read-write <br />STATUS current <br />DESCRIPTION <br />"The textual identification of the contact person for this <br />managed node, together with information on how to contact <br />this person. If no contact information is known, the <br />value <br />is the zero-length string." <br />::= { system 4 }</span></code></div>
  </div>
 </div>
  <div class="note" id="36013">  <div class="votes">
    <div id="Vu36013">
    <a href="/manual/vote-note.php?id=36013&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36013">
    <a href="/manual/vote-note.php?id=36013&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36013" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#36013" class="name">
  <strong class="user"><em>dstjohn-NO-SPAM at mediacast1 dot com</em></strong></a><a class="genanchor" href="#36013"> &para;</a><div class="date" title="2003-09-22 07:53"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom36013">
<div class="phpcode"><code><span class="html">Little tidbit for snmpget function<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//snmpget system stats<br /></span><span class="default">$host </span><span class="keyword">= </span><span class="string">'localhost'</span><span class="keyword">;<br /></span><span class="default">$community </span><span class="keyword">= </span><span class="string">'public'</span><span class="keyword">;<br /><br /></span><span class="comment">//get system name<br /></span><span class="default">$sysname </span><span class="keyword">= </span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$community</span><span class="keyword">, </span><span class="string">"system.sysName.0"</span><span class="keyword">);<br /><br /></span><span class="comment">//get system uptime<br /></span><span class="default">$sysup </span><span class="keyword">= </span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$community</span><span class="keyword">, </span><span class="string">"system.sysUpTime.0"</span><span class="keyword">);<br /></span><span class="default">$sysupre </span><span class="keyword">= </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"([0-9]{3})"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$sysup</span><span class="keyword">);<br /></span><span class="default">$sysupre2 </span><span class="keyword">= </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"Timeticks:"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$sysupre</span><span class="keyword">);<br /></span><span class="default">$sysupre3 </span><span class="keyword">= </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"[()]"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$sysupre2</span><span class="keyword">);<br /><br /></span><span class="comment">//get tcp connections<br /></span><span class="default">$tcpcon </span><span class="keyword">= </span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$community</span><span class="keyword">,</span><span class="string">"tcp.tcpCurrEstab.0"</span><span class="keyword">);<br /></span><span class="default">$tcpconre </span><span class="keyword">= </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"Gauge32:"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$tcpcon</span><span class="keyword">);<br /><br />echo </span><span class="string">'<br />System Name: '</span><span class="keyword">.</span><span class="default">$sysname</span><span class="keyword">.</span><span class="string">'&lt;br&gt;<br />System Uptime: '</span><span class="keyword">.</span><span class="default">$sysupre3</span><span class="keyword">.</span><span class="string">'&lt;br&gt;<br />Current Tcp Connections: '</span><span class="keyword">.</span><span class="default">$tcpconre</span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71287">  <div class="votes">
    <div id="Vu71287">
    <a href="/manual/vote-note.php?id=71287&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71287">
    <a href="/manual/vote-note.php?id=71287&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71287" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#71287" class="name">
  <strong class="user"><em>tridman</em></strong></a><a class="genanchor" href="#71287"> &para;</a><div class="date" title="2006-11-21 02:48"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71287">
<div class="phpcode"><code><span class="html">The timeout is in micro seconds. Thus 1.000.000 means 1 Second.</span></code></div>
  </div>
 </div>
  <div class="note" id="56666">  <div class="votes">
    <div id="Vu56666">
    <a href="/manual/vote-note.php?id=56666&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56666">
    <a href="/manual/vote-note.php?id=56666&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56666" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#56666" class="name">
  <strong class="user"><em>dstjohn-NO-SPAM at mediacast1 dot com</em></strong></a><a class="genanchor" href="#56666"> &para;</a><div class="date" title="2005-09-11 02:16"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56666">
<div class="phpcode"><code><span class="html">2 year tidbit update :)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// author: dstjohn at mediacast1.com<br />// updated: 09-11-2005<br />// set some vars<br /></span><span class="default">$snmpcommunity </span><span class="keyword">= </span><span class="string">'PUBLIC'</span><span class="keyword">; </span><span class="comment">//snmp community name<br /></span><span class="default">$ips </span><span class="keyword">= </span><span class="string">'test1.com,test2.com'</span><span class="keyword">; </span><span class="comment">//ips or dns to get snmp data from<br /></span><span class="default">$system_number </span><span class="keyword">= </span><span class="string">'1'</span><span class="keyword">;<br /></span><span class="comment">//end da vars<br /><br />//start da loop d loop<br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$system_number</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br /></span><span class="default">$sysip </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">,</span><span class="default">$ips</span><span class="keyword">);<br /><br /></span><span class="comment">//get system name<br /></span><span class="default">$sysname</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$sysip</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$snmpcommunity</span><span class="keyword">, </span><span class="string">"sysName.0"</span><span class="keyword">);<br /></span><span class="default">$sysname</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"STRING:"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$sysname</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />echo </span><span class="string">'System Name: '</span><span class="keyword">.</span><span class="default">$sysname</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">//system description<br /></span><span class="default">$sysdesc</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$sysip</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$snmpcommunity</span><span class="keyword">, </span><span class="string">"sysDescr.0"</span><span class="keyword">);<br /></span><span class="default">$sysdesc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"STRING:"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$sysdesc</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />echo </span><span class="string">'System Description: '</span><span class="keyword">.</span><span class="default">$sysdesc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">//system location<br /></span><span class="default">$sysloc</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$sysip</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$snmpcommunity</span><span class="keyword">, </span><span class="string">"sysLocation.0"</span><span class="keyword">);<br /></span><span class="default">$sysloc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"STRING:"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$sysloc</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />echo </span><span class="string">'System Location: '</span><span class="keyword">.</span><span class="default">$sysloc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">//current tcp connections<br /></span><span class="default">$tcpcons</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$sysip</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$snmpcommunity</span><span class="keyword">, </span><span class="string">"tcpCurrEstab.0"</span><span class="keyword">);<br /></span><span class="default">$tcpcons</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"Gauge32:"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$tcpcons</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />echo </span><span class="string">'Open TCP/IP Connections: '</span><span class="keyword">.</span><span class="default">$tcpcons</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">//get system uptime<br /></span><span class="default">$sysuptime</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$sysip</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$snmpcommunity</span><span class="keyword">, </span><span class="string">"system.sysUpTime.0"</span><span class="keyword">);<br /></span><span class="default">$sysuptime</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"Timeticks:"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$sysuptime</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />echo </span><span class="string">'System Uptime: Timeticks -'</span><span class="keyword">.</span><span class="default">$sysuptime</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">//windows only<br />//installed memory<br /></span><span class="keyword">if(</span><span class="default">eregi</span><span class="keyword">(</span><span class="string">'Windows'</span><span class="keyword">,</span><span class="default">$sysdesc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])){<br /></span><span class="default">$mem</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">snmpget</span><span class="keyword">(</span><span class="default">$sysip</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$snmpcommunity</span><span class="keyword">, </span><span class="string">"HOST-RESOURCES-MIB::hrMemorySize.0"</span><span class="keyword">);<br /></span><span class="default">$mem</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"INTEGER:"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$mem</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /></span><span class="default">$mem</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">eregi_replace</span><span class="keyword">(</span><span class="string">"KBytes"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$mem</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />echo </span><span class="string">'Insalled Memory: '</span><span class="keyword">.</span><span class="default">$mem</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">].</span><span class="string">' KiloBytes&lt;br&gt;'</span><span class="keyword">;<br />}<br /><br />echo </span><span class="string">'&lt;br&gt;&lt;br&gt;'</span><span class="keyword">;<br />}</span><span class="comment">//end loop<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68051">  <div class="votes">
    <div id="Vu68051">
    <a href="/manual/vote-note.php?id=68051&amp;page=function.snmpget&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68051">
    <a href="/manual/vote-note.php?id=68051&amp;page=function.snmpget&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68051" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#68051" class="name">
  <strong class="user"><em>fbleau</em></strong></a><a class="genanchor" href="#68051"> &para;</a><div class="date" title="2006-07-11 11:15"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68051">
<div class="phpcode"><code><span class="html">The default value of Timeout is 1000000  nanoseconde (1 sec) and the retrie is 5 thsi value is set by Net-SNMP library.<br /><br />#!/usr/local/bin/php<br /><span class="default">&lt;?php<br /> $time_start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /> </span><span class="default">$reponse </span><span class="keyword">= </span><span class="default">snmpget</span><span class="keyword">(</span><span class="string">'10.5.1.1'</span><span class="keyword">, </span><span class="string">'public'</span><span class="keyword">, </span><span class="string">"1.3.6.1.2.1.1.3.0"</span><span class="keyword">,</span><span class="default">1000000</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">);<br /> </span><span class="default">$time_end </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /> </span><span class="default">$time </span><span class="keyword">= </span><span class="default">$time_end </span><span class="keyword">- </span><span class="default">$time_start</span><span class="keyword">;<br /><br /> echo </span><span class="string">"Delay in </span><span class="default">$time</span><span class="string"> secondes\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.snmpget&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.snmpget.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
