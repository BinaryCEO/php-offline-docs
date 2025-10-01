<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_control_paged_result - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-control-paged-result.php">
 <link rel="shorturl" href="https://www.php.net/ldap-control-paged-result">
 <link rel="alternate" href="https://www.php.net/ldap-control-paged-result" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-connect-wallet.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-control-paged-result-response.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-control-paged-result.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-control-paged-result.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-control-paged-result.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-control-paged-result.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-control-paged-result.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-control-paged-result.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-control-paged-result.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-control-paged-result.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-control-paged-result.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-control-paged-result.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-control-paged-result.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Send LDAP pagination control" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_control_paged_result - Manual" />
<meta name="twitter:description" content="Send LDAP pagination control" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_control_paged_result - Manual" />
<meta itemprop="description" content="Send LDAP pagination control" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Send LDAP pagination control" />

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
        <a href="function.ldap-control-paged-result-response.php">
          ldap_control_paged_result_response &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-connect-wallet.php">
          &laquo; ldap_connect_wallet        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ldap.php'>LDAP</a></li>      <li><a href='ref.ldap.php'>LDAP Functions</a></li>      </ul>
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
            <option value='en/function.ldap-control-paged-result.php' selected="selected">English</option>
            <option value='de/function.ldap-control-paged-result.php'>German</option>
            <option value='es/function.ldap-control-paged-result.php'>Spanish</option>
            <option value='fr/function.ldap-control-paged-result.php'>French</option>
            <option value='it/function.ldap-control-paged-result.php'>Italian</option>
            <option value='ja/function.ldap-control-paged-result.php'>Japanese</option>
            <option value='pt_BR/function.ldap-control-paged-result.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-control-paged-result.php'>Russian</option>
            <option value='tr/function.ldap-control-paged-result.php'>Turkish</option>
            <option value='uk/function.ldap-control-paged-result.php'>Ukrainian</option>
            <option value='zh/function.ldap-control-paged-result.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-control-paged-result" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_control_paged_result</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7)</p><p class="refpurpose"><span class="refname">ldap_control_paged_result</span> &mdash; <span class="dc-title">Send LDAP pagination control</span></p>

 </div>

 <div id="function.ldap-control-paged-result-refsynopsisdiv">
   <div class="warning"><strong class="warning">Warning</strong>
 <p class="simpara">
  This function has been <em>DEPRECATED</em> as of PHP 7.4.0, and <em>REMOVED</em> as of PHP 8.0.0.
  Instead the <code class="parameter">controls</code> parameter of <span class="function"><a href="function.ldap-search.php" class="function">ldap_search()</a></span> should be used.
  See also <a href="ldap.controls.php" class="link">LDAP Controls</a> for details.
 </p>
</div>
 </div>

 <div class="refsect1 description" id="refsect1-function.ldap-control-paged-result-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_control_paged_result</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$link</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$pagesize</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$iscritical</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$cookie</code><span class="initializer"> = &quot;&quot;</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Enable LDAP pagination by sending the pagination control (page size, cookie...).
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ldap-control-paged-result-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">link</code></dt>
     <dd>
      <p class="para">
       An LDAP resource, returned by <span class="function"><a href="function.ldap-connect.php" class="function">ldap_connect()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">pagesize</code></dt>
     <dd>
      <p class="para">
       The number of entries by page.
      </p>
     </dd>
    
    
     <dt><code class="parameter">iscritical</code></dt>
     <dd>
      <p class="para">
       Indicates whether the pagination is critical or not. 
       If true and if the server doesn&#039;t support pagination, the search
       will return no result.
      </p>
     </dd>
    
    
     <dt><code class="parameter">cookie</code></dt>
     <dd>
      <p class="para">
       An opaque structure sent by the server 
       (<span class="function"><a href="function.ldap-control-paged-result-response.php" class="function">ldap_control_paged_result_response()</a></span>).
      </p>
     </dd>
    
    </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ldap-control-paged-result-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ldap-control-paged-result-changelog">
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
        This function has been removed.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        This function has been deprecated.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ldap-control-paged-result-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   The example below show the retrieval of the first page of a search paginated
   with one entry by page.
   <div class="example" id="example-4627">
    <p><strong>Example #1 LDAP pagination</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />     </span><span style="color: #FF8000">// $ds is a valid link identifier (see ldap_connect)<br />     </span><span style="color: #0000BB">ldap_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">LDAP_OPT_PROTOCOL_VERSION</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /><br />     </span><span style="color: #0000BB">$dn        </span><span style="color: #007700">= </span><span style="color: #DD0000">'ou=example,dc=org'</span><span style="color: #007700">;<br />     </span><span style="color: #0000BB">$filter    </span><span style="color: #007700">= </span><span style="color: #DD0000">'(|(sn=Doe*)(givenname=John*))'</span><span style="color: #007700">;<br />     </span><span style="color: #0000BB">$justthese </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'ou'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sn'</span><span style="color: #007700">, </span><span style="color: #DD0000">'givenname'</span><span style="color: #007700">, </span><span style="color: #DD0000">'mail'</span><span style="color: #007700">);<br /><br />     </span><span style="color: #FF8000">// enable pagination with a page size of 1.<br />     </span><span style="color: #0000BB">ldap_control_paged_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />     </span><span style="color: #0000BB">$sr </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_search</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">$dn</span><span style="color: #007700">, </span><span style="color: #0000BB">$filter</span><span style="color: #007700">, </span><span style="color: #0000BB">$justthese</span><span style="color: #007700">);<br /><br />     </span><span style="color: #0000BB">$info </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_get_entries</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">$sr</span><span style="color: #007700">);<br /><br />     echo </span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'count'</span><span style="color: #007700">] . </span><span style="color: #DD0000">' entries returned' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   The example below show the retrieval of all the result paginated with 100 
   entries by page.
   <div class="example" id="example-4628">
    <p><strong>Example #2 LDAP pagination</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />     </span><span style="color: #FF8000">// $ds is a valid link identifier (see ldap_connect)<br />     </span><span style="color: #0000BB">ldap_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">LDAP_OPT_PROTOCOL_VERSION</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /><br />     </span><span style="color: #0000BB">$dn        </span><span style="color: #007700">= </span><span style="color: #DD0000">'ou=example,dc=org'</span><span style="color: #007700">;<br />     </span><span style="color: #0000BB">$filter    </span><span style="color: #007700">= </span><span style="color: #DD0000">'(|(sn=Doe*)(givenname=John*))'</span><span style="color: #007700">;<br />     </span><span style="color: #0000BB">$justthese </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'ou'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sn'</span><span style="color: #007700">, </span><span style="color: #DD0000">'givenname'</span><span style="color: #007700">, </span><span style="color: #DD0000">'mail'</span><span style="color: #007700">);<br /><br />     </span><span style="color: #FF8000">// enable pagination with a page size of 100.<br />     </span><span style="color: #0000BB">$pageSize </span><span style="color: #007700">= </span><span style="color: #0000BB">100</span><span style="color: #007700">;<br /><br />     </span><span style="color: #0000BB">$cookie </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />     do {<br />         </span><span style="color: #0000BB">ldap_control_paged_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">$pageSize</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">, </span><span style="color: #0000BB">$cookie</span><span style="color: #007700">);<br /><br />         </span><span style="color: #0000BB">$result  </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_search</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">$dn</span><span style="color: #007700">, </span><span style="color: #0000BB">$filter</span><span style="color: #007700">, </span><span style="color: #0000BB">$justthese</span><span style="color: #007700">);<br />         </span><span style="color: #0000BB">$entries </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_get_entries</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />             <br />         foreach (</span><span style="color: #0000BB">$entries </span><span style="color: #007700">as </span><span style="color: #0000BB">$e</span><span style="color: #007700">) {<br />             echo </span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'dn'</span><span style="color: #007700">] . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />         }<br /><br />         </span><span style="color: #0000BB">ldap_control_paged_result_response</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">, </span><span style="color: #0000BB">$cookie</span><span style="color: #007700">);<br />       <br />     } while(</span><span style="color: #0000BB">$cookie </span><span style="color: #007700">!== </span><span style="color: #0000BB">null </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">$cookie </span><span style="color: #007700">!= </span><span style="color: #DD0000">''</span><span style="color: #007700">);</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.ldap-control-paged-result-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Pagination control is a LDAPv3 protocol feature.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ldap-control-paged-result-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ldap-control-paged-result-response.php" class="function" rel="rdfs-seeAlso">ldap_control_paged_result_response()</a> - Retrieve the LDAP pagination cookie</span></li>
    <li><a href="https://datatracker.ietf.org/doc/html/rfc2696" class="link external">&raquo;&nbsp;RFC2696 : LDAP Control Extension for Simple
    Paged Results Manipulation</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-control-paged-result.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-control-paged-result%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-control-paged-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-control-paged-result.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113506">  <div class="votes">
    <div id="Vu113506">
    <a href="/manual/vote-note.php?id=113506&amp;page=function.ldap-control-paged-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113506">
    <a href="/manual/vote-note.php?id=113506&amp;page=function.ldap-control-paged-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113506" title="72% like this...">
    5
    </div>
  </div>
  <a href="#113506" class="name">
  <strong class="user"><em>Blizzz</em></strong></a><a class="genanchor" href="#113506"> &para;</a><div class="date" title="2013-10-21 03:26"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113506">
<div class="phpcode"><code><span class="html">If you did a paged search operation and want to do any other read operation on LDAP, you need to reset it, otherwise you will experience LDAP errors (code 12, for instance).<br /><br /><span class="default">&lt;?php <br />…<br />ldap_control_paged_result</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">…<br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119433">  <div class="votes">
    <div id="Vu119433">
    <a href="/manual/vote-note.php?id=119433&amp;page=function.ldap-control-paged-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119433">
    <a href="/manual/vote-note.php?id=119433&amp;page=function.ldap-control-paged-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119433" title="80% like this...">
    3
    </div>
  </div>
  <a href="#119433" class="name">
  <strong class="user"><em>steven_bauman at outlook dot com</em></strong></a><a class="genanchor" href="#119433"> &para;</a><div class="date" title="2016-06-03 04:58"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119433">
<div class="phpcode"><code><span class="html">While another note suggests resetting the control paged result by passing in `0` (zero), it actually still prevents any further queries being ran during the same request.<br /><br />You actually need to set it to a large number to run further queries it seems. For example:<br /><br /><span class="default">&lt;?php<br />ldap_control_paged_result</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">$cookie</span><span class="keyword">);<br /><br /></span><span class="comment">// Run the search<br /></span><span class="keyword">...<br /><br /></span><span class="comment">// What is supposed to work (reset)<br /></span><span class="default">ldap_control_paged_result</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$cookie</span><span class="keyword">);<br /><br /></span><span class="comment">// What actually works<br /></span><span class="default">ldap_control_paged_result</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$cookie</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />In the above method, 1000 is just a placeholder, but this seems to actually **limit** further queries to this amount of results, so if you set it to `1`, then you'll only receive **one** result for any further queries during the same request.</span></code></div>
  </div>
 </div>
  <div class="note" id="108285">  <div class="votes">
    <div id="Vu108285">
    <a href="/manual/vote-note.php?id=108285&amp;page=function.ldap-control-paged-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108285">
    <a href="/manual/vote-note.php?id=108285&amp;page=function.ldap-control-paged-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108285" title="70% like this...">
    4
    </div>
  </div>
  <a href="#108285" class="name">
  <strong class="user"><em>James</em></strong></a><a class="genanchor" href="#108285"> &para;</a><div class="date" title="2012-04-14 12:56"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108285">
<div class="phpcode"><code><span class="html">I was able to get these functions to work successfully with Active Directory.  When I first tried it, ldap_search kept returning a Not Supported reply from the server.  I finally figured out that I needed to include<br /><br />ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);<br /><br />in my code, so that AD would let me page results.  Make sure you're using a compatible protocol.<br /><br />Hope this note helps someone else.</span></code></div>
  </div>
 </div>
  <div class="note" id="111590">  <div class="votes">
    <div id="Vu111590">
    <a href="/manual/vote-note.php?id=111590&amp;page=function.ldap-control-paged-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111590">
    <a href="/manual/vote-note.php?id=111590&amp;page=function.ldap-control-paged-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111590" title="60% like this...">
    1
    </div>
  </div>
  <a href="#111590" class="name">
  <strong class="user"><em>jestertrance at hotmail dot com</em></strong></a><a class="genanchor" href="#111590"> &para;</a><div class="date" title="2013-03-06 05:44"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111590">
<div class="phpcode"><code><span class="html">You may need to do an ldap_bind before running ldap_control_paged_result to get this to work:<br /><br />$conn = ldap_connect("you_ip");<br />ldap_set_option($conn, LDAP_OPT_PROTOCOL_VERSION, 3);<br />ldap_bind("your_connection_info");        <br />ldap_control_paged_result($conn, $pageSize, true, $cookie)<br /><br />Without doing an ldap_bind, I kept getting the error "Critical extension is unavailable". I don't if this is standard knowledge, but knowing this would have saved me days of frustration.</span></code></div>
  </div>
 </div>
  <div class="note" id="114820">  <div class="votes">
    <div id="Vu114820">
    <a href="/manual/vote-note.php?id=114820&amp;page=function.ldap-control-paged-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114820">
    <a href="/manual/vote-note.php?id=114820&amp;page=function.ldap-control-paged-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114820" title="57% like this...">
    1
    </div>
  </div>
  <a href="#114820" class="name">
  <strong class="user"><em>dublue at gmail dot com</em></strong></a><a class="genanchor" href="#114820"> &para;</a><div class="date" title="2014-04-09 01:02"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114820">
<div class="phpcode"><code><span class="html">So how do you now sort the entire result? It appears you can't use ldap_sort as it uses the search resource which is within the loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="108485">  <div class="votes">
    <div id="Vu108485">
    <a href="/manual/vote-note.php?id=108485&amp;page=function.ldap-control-paged-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108485">
    <a href="/manual/vote-note.php?id=108485&amp;page=function.ldap-control-paged-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108485" title="50% like this...">
    0
    </div>
  </div>
  <a href="#108485" class="name">
  <strong class="user"><em>etienne at lamaisondebarbie dot ch</em></strong></a><a class="genanchor" href="#108485"> &para;</a><div class="date" title="2012-04-30 03:14"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108485">
<div class="phpcode"><code><span class="html">Paged results, as specified in the RFC 2696, does not allow to get over the server sizeLimit. The RFC clearly states "If the page size is greater than or equal to the sizeLimit value, the server should ignore the control as the request can be satisfied in a single page".<br />With OpenLDAP, you will not get more than the sizeLimit number of entries with paged results.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-control-paged-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-control-paged-result.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ldap.php">LDAP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ldap-8859-to-t61.php" title="ldap_&#8203;8859_&#8203;to_&#8203;t61">ldap_&#8203;8859_&#8203;to_&#8203;t61</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-add.php" title="ldap_&#8203;add">ldap_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-add-ext.php" title="ldap_&#8203;add_&#8203;ext">ldap_&#8203;add_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-bind.php" title="ldap_&#8203;bind">ldap_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-bind-ext.php" title="ldap_&#8203;bind_&#8203;ext">ldap_&#8203;bind_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-close.php" title="ldap_&#8203;close">ldap_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-compare.php" title="ldap_&#8203;compare">ldap_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-connect.php" title="ldap_&#8203;connect">ldap_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-connect-wallet.php" title="ldap_&#8203;connect_&#8203;wallet">ldap_&#8203;connect_&#8203;wallet</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-count-entries.php" title="ldap_&#8203;count_&#8203;entries">ldap_&#8203;count_&#8203;entries</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-count-references.php" title="ldap_&#8203;count_&#8203;references">ldap_&#8203;count_&#8203;references</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-delete.php" title="ldap_&#8203;delete">ldap_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-delete-ext.php" title="ldap_&#8203;delete_&#8203;ext">ldap_&#8203;delete_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-dn2ufn.php" title="ldap_&#8203;dn2ufn">ldap_&#8203;dn2ufn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-err2str.php" title="ldap_&#8203;err2str">ldap_&#8203;err2str</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-errno.php" title="ldap_&#8203;errno">ldap_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-error.php" title="ldap_&#8203;error">ldap_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-escape.php" title="ldap_&#8203;escape">ldap_&#8203;escape</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop.php" title="ldap_&#8203;exop">ldap_&#8203;exop</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-passwd.php" title="ldap_&#8203;exop_&#8203;passwd">ldap_&#8203;exop_&#8203;passwd</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-refresh.php" title="ldap_&#8203;exop_&#8203;refresh">ldap_&#8203;exop_&#8203;refresh</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-sync.php" title="ldap_&#8203;exop_&#8203;sync">ldap_&#8203;exop_&#8203;sync</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-whoami.php" title="ldap_&#8203;exop_&#8203;whoami">ldap_&#8203;exop_&#8203;whoami</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-explode-dn.php" title="ldap_&#8203;explode_&#8203;dn">ldap_&#8203;explode_&#8203;dn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-attribute.php" title="ldap_&#8203;first_&#8203;attribute">ldap_&#8203;first_&#8203;attribute</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-entry.php" title="ldap_&#8203;first_&#8203;entry">ldap_&#8203;first_&#8203;entry</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-reference.php" title="ldap_&#8203;first_&#8203;reference">ldap_&#8203;first_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-free-result.php" title="ldap_&#8203;free_&#8203;result">ldap_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-attributes.php" title="ldap_&#8203;get_&#8203;attributes">ldap_&#8203;get_&#8203;attributes</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-dn.php" title="ldap_&#8203;get_&#8203;dn">ldap_&#8203;get_&#8203;dn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-entries.php" title="ldap_&#8203;get_&#8203;entries">ldap_&#8203;get_&#8203;entries</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-option.php" title="ldap_&#8203;get_&#8203;option">ldap_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-values.php" title="ldap_&#8203;get_&#8203;values">ldap_&#8203;get_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-values-len.php" title="ldap_&#8203;get_&#8203;values_&#8203;len">ldap_&#8203;get_&#8203;values_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-list.php" title="ldap_&#8203;list">ldap_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-add.php" title="ldap_&#8203;mod_&#8203;add">ldap_&#8203;mod_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_add-ext.php" title="ldap_&#8203;mod_&#8203;add_&#8203;ext">ldap_&#8203;mod_&#8203;add_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-del.php" title="ldap_&#8203;mod_&#8203;del">ldap_&#8203;mod_&#8203;del</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_del-ext.php" title="ldap_&#8203;mod_&#8203;del_&#8203;ext">ldap_&#8203;mod_&#8203;del_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-replace.php" title="ldap_&#8203;mod_&#8203;replace">ldap_&#8203;mod_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_replace-ext.php" title="ldap_&#8203;mod_&#8203;replace_&#8203;ext">ldap_&#8203;mod_&#8203;replace_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-modify.php" title="ldap_&#8203;modify">ldap_&#8203;modify</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-modify-batch.php" title="ldap_&#8203;modify_&#8203;batch">ldap_&#8203;modify_&#8203;batch</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-attribute.php" title="ldap_&#8203;next_&#8203;attribute">ldap_&#8203;next_&#8203;attribute</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-entry.php" title="ldap_&#8203;next_&#8203;entry">ldap_&#8203;next_&#8203;entry</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-reference.php" title="ldap_&#8203;next_&#8203;reference">ldap_&#8203;next_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-exop.php" title="ldap_&#8203;parse_&#8203;exop">ldap_&#8203;parse_&#8203;exop</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-reference.php" title="ldap_&#8203;parse_&#8203;reference">ldap_&#8203;parse_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-result.php" title="ldap_&#8203;parse_&#8203;result">ldap_&#8203;parse_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-read.php" title="ldap_&#8203;read">ldap_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-rename.php" title="ldap_&#8203;rename">ldap_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-rename-ext.php" title="ldap_&#8203;rename_&#8203;ext">ldap_&#8203;rename_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sasl-bind.php" title="ldap_&#8203;sasl_&#8203;bind">ldap_&#8203;sasl_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-search.php" title="ldap_&#8203;search">ldap_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-option.php" title="ldap_&#8203;set_&#8203;option">ldap_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-rebind-proc.php" title="ldap_&#8203;set_&#8203;rebind_&#8203;proc">ldap_&#8203;set_&#8203;rebind_&#8203;proc</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sort.php" title="ldap_&#8203;sort">ldap_&#8203;sort</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-start-tls.php" title="ldap_&#8203;start_&#8203;tls">ldap_&#8203;start_&#8203;tls</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-t61-to-8859.php" title="ldap_&#8203;t61_&#8203;to_&#8203;8859">ldap_&#8203;t61_&#8203;to_&#8203;8859</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-unbind.php" title="ldap_&#8203;unbind">ldap_&#8203;unbind</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="current">
                        <a href="function.ldap-control-paged-result.php" title="ldap_&#8203;control_&#8203;paged_&#8203;result">ldap_&#8203;control_&#8203;paged_&#8203;result</a>
                    </li>
                                    <li class="">
                        <a href="function.ldap-control-paged-result-response.php" title="ldap_&#8203;control_&#8203;paged_&#8203;result_&#8203;response">ldap_&#8203;control_&#8203;paged_&#8203;result_&#8203;response</a>
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
