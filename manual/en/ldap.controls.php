<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: LDAP controls - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ldap.controls.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ldap.controls.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ldap.controls.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/ldap.using.php">
 <link rel="next" href="https://www.php.net/manual/en/ldap.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ldap.controls.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ldap.controls.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ldap.controls.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ldap.controls.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ldap.controls.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ldap.controls.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ldap.controls.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ldap.controls.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ldap.controls.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ldap.controls.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ldap.controls.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="LDAP controls" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: LDAP controls - Manual" />
<meta name="twitter:description" content="LDAP controls" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: LDAP controls - Manual" />
<meta itemprop="description" content="LDAP controls" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="LDAP controls" />

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
        <a href="ldap.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ldap.using.php">
          &laquo; Using the PHP LDAP calls        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ldap.php'>LDAP</a></li>      </ul>
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
            <option value='en/ldap.controls.php' selected="selected">English</option>
            <option value='de/ldap.controls.php'>German</option>
            <option value='es/ldap.controls.php'>Spanish</option>
            <option value='fr/ldap.controls.php'>French</option>
            <option value='it/ldap.controls.php'>Italian</option>
            <option value='ja/ldap.controls.php'>Japanese</option>
            <option value='pt_BR/ldap.controls.php'>Brazilian Portuguese</option>
            <option value='ru/ldap.controls.php'>Russian</option>
            <option value='tr/ldap.controls.php'>Turkish</option>
            <option value='uk/ldap.controls.php'>Ukrainian</option>
            <option value='zh/ldap.controls.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ldap.controls" class="chapter">
 <h1 class="title">LDAP controls</h1>

 <p class="para">
   Controls are special objects which may be sent alongside an
   LDAP request to alter LDAP server behavior while performing
   the request. There may also be controls sent by the server
   alongside the response to provide more information, usually
   to answer a control object from the request.
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Not all controls are supported by all LDAP servers. To know which controls
    are supported by a server, you need to query the root DSE by reading an
    empty dn with the filter (objectClass=*).
   </p>
   <div class="example" id="example-4614">
    <p><strong>Example #1 Testing support for paged result control</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// $ds is a valid link identifier for a directory server<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_read</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">'(objectClass=*)'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'supportedControl'</span><span style="color: #007700">]);<br />if (!</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">LDAP_CONTROL_PAGEDRESULTS</span><span style="color: #007700">, </span><span style="color: #0000BB">ldap_get_entries</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">)[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #DD0000">'supportedcontrol'</span><span style="color: #007700">])) {<br />  die(</span><span style="color: #DD0000">"This server does not support paged result control"</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p></blockquote>
 </p>

 <p class="para">
   As of PHP 7.3, you can send controls with your request in all
   request functions using the <code class="parameter">controls</code> parameter. When a ext
   version of a function exists, you should use it if you want to
   get access to the full response object and be able to parse
   response controls from it using <span class="function"><a href="function.ldap-parse-result.php" class="function">ldap_parse_result()</a></span>.
 </p>

 <p class="para">
   <code class="parameter">controls</code> must be an array containing an array for each control to send,
   containing the following keys:
   <dl>
    
     <dt>
      oid
      (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
     </dt>
     <dd>
      <span class="simpara">
       The OID of the control. You should use constants starting with
       LDAP_CONTROL_ for this. See <a href="ldap.constants.php" class="link">LDAP Constants</a>.
      </span>
     </dd>
    
    
     <dt>
      iscritical
      (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
     </dt>
     <dd>
      <span class="simpara">
       If a control is noted as critical, the request will fail if the
       control is not supported by the server, or if it fails to be
       applied. Note that some controls should always be marked as critical
       as noted in the RFC introducing them. Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </span>
     </dd>
    
    
     <dt>
      value
      (<span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>)
     </dt>
     <dd>
      <span class="simpara">
       If applicable, the value of the control. Read below for more information.
      </span>
     </dd>
    
   </dl>

 </p>

 <p class="para">
   Most control values are sent to the server BER-encoded.
   You may either BER-encode the value yourself, or you can instead
   pass an array with the correct keys so that the encoding is done
   for you.
   Supported controls to be passed as an array are:
  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-pagedresults">LDAP_CONTROL_PAGEDRESULTS</a></code></strong>
     Expected keys are [size] and [cookie]
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-assert">LDAP_CONTROL_ASSERT</a></code></strong>
     Expected key is filter
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-valuesreturnfilter">LDAP_CONTROL_VALUESRETURNFILTER</a></code></strong>
     Expected key is filter
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-pre-read">LDAP_CONTROL_PRE_READ</a></code></strong>
     Expected key is attrs
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-post-read">LDAP_CONTROL_POST_READ</a></code></strong>
     Expected key is attrs
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-sortrequest">LDAP_CONTROL_SORTREQUEST</a></code></strong>
     Expects an array of arrays with keys attr, [oid], [reverse].
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-vlvrequest">LDAP_CONTROL_VLVREQUEST</a></code></strong>
     Expected keys are before, after, attrvalue|(offset, count), [context]
    </p>
   </li>
  </ul>
 </p>

 <p class="para">
   The following controls do not need any value:
  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-passwordpolicyrequest">LDAP_CONTROL_PASSWORDPOLICYREQUEST</a></code></strong>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-managedsait">LDAP_CONTROL_MANAGEDSAIT</a></code></strong>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-dontusecopy">LDAP_CONTROL_DONTUSECOPY</a></code></strong>
    </p>
   </li>
  </ul>
 </p>

 <p class="para">
   The control <strong><code><a href="ldap.constants.php#constant.ldap-control-proxy-authz">LDAP_CONTROL_PROXY_AUTHZ</a></code></strong> is a special case
   as its value is not expected to be BER-encoded, so you can directly
   use a string for its value.
 </p>

 <p class="para">
   When controls are parsed by <span class="function"><a href="function.ldap-parse-result.php" class="function">ldap_parse_result()</a></span>, values are
   turned into an array if supported.
   This is supported for:
  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-passwordpolicyresponse">LDAP_CONTROL_PASSWORDPOLICYRESPONSE</a></code></strong>
     Keys are expire, grace, [error]
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-pagedresults">LDAP_CONTROL_PAGEDRESULTS</a></code></strong>
     Keys are size, cookie
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-pre-read">LDAP_CONTROL_PRE_READ</a></code></strong>
     Keys are dn and LDAP attributes names
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-post-read">LDAP_CONTROL_POST_READ</a></code></strong>
     Keys are dn and LDAP attributes names
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-sortresponse">LDAP_CONTROL_SORTRESPONSE</a></code></strong>
     Keys are errcode, [attribute]
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <strong><code><a href="ldap.constants.php#constant.ldap-control-vlvresponse">LDAP_CONTROL_VLVRESPONSE</a></code></strong>
     Keys are target, count, errcode, context
    </p>
   </li>
  </ul>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/controls.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fldap.controls%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ldap.controls&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ldap.controls.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ldap.php">LDAP</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ldap.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ldap.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="ldap.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ldap.using.php" title="Using the PHP LDAP calls">Using the PHP LDAP calls</a>
                        </li>
                                                <li class="current">
                            <a href="ldap.controls.php" title="LDAP controls">LDAP controls</a>
                        </li>
                                                <li class="">
                            <a href="ldap.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.ldap.php" title="LDAP Functions">LDAP Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.ldap-connection.php" title="LDAP\Connection">LDAP\Connection</a>
                        </li>
                                                <li class="">
                            <a href="class.ldap-result.php" title="LDAP\Result">LDAP\Result</a>
                        </li>
                                                <li class="">
                            <a href="class.ldap-result-entry.php" title="LDAP\ResultEntry">LDAP\ResultEntry</a>
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
