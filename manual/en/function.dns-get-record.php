<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: dns_get_record - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.dns-get-record.php">
 <link rel="shorturl" href="https://www.php.net/dns-get-record">
 <link rel="alternate" href="https://www.php.net/dns-get-record" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.dns-get-mx.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fsockopen.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.dns-get-record.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.dns-get-record.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.dns-get-record.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.dns-get-record.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.dns-get-record.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.dns-get-record.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.dns-get-record.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.dns-get-record.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.dns-get-record.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.dns-get-record.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.dns-get-record.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetch DNS Resource Records associated with a hostname" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: dns_get_record - Manual" />
<meta name="twitter:description" content="Fetch DNS Resource Records associated with a hostname" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: dns_get_record - Manual" />
<meta itemprop="description" content="Fetch DNS Resource Records associated with a hostname" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetch DNS Resource Records associated with a hostname" />

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
        <a href="function.fsockopen.php">
          fsockopen &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.dns-get-mx.php">
          &laquo; dns_get_mx        </a>
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
            <option value='en/function.dns-get-record.php' selected="selected">English</option>
            <option value='de/function.dns-get-record.php'>German</option>
            <option value='es/function.dns-get-record.php'>Spanish</option>
            <option value='fr/function.dns-get-record.php'>French</option>
            <option value='it/function.dns-get-record.php'>Italian</option>
            <option value='ja/function.dns-get-record.php'>Japanese</option>
            <option value='pt_BR/function.dns-get-record.php'>Brazilian Portuguese</option>
            <option value='ru/function.dns-get-record.php'>Russian</option>
            <option value='tr/function.dns-get-record.php'>Turkish</option>
            <option value='uk/function.dns-get-record.php'>Ukrainian</option>
            <option value='zh/function.dns-get-record.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.dns-get-record" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">dns_get_record</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">dns_get_record</span> &mdash; <span class="dc-title">Fetch DNS Resource Records associated with a hostname</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.dns-get-record-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>dns_get_record</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hostname</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = <strong><code><a href="network.constants.php#constant.dns-any">DNS_ANY</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$authoritative_name_servers</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$additional_records</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$raw</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Fetch DNS Resource Records associated with the given
   <code class="parameter">hostname</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.dns-get-record-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">hostname</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">hostname</code> should be a valid DNS hostname such
       as &quot;<code class="literal">www.example.com</code>&quot;. Reverse lookups can be generated
       using <code class="literal">in-addr.arpa</code> notation, but
       <span class="function"><a href="function.gethostbyaddr.php" class="function">gethostbyaddr()</a></span> is more suitable for
       the majority of reverse lookups.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        Per DNS standards, email addresses are given in <code class="literal">user.host</code> format (for
        example: <code class="literal">hostmaster.example.com</code> as opposed to <code class="literal">hostmaster@example.com</code>),
        be sure to check this value and modify if necessary before using it
        with a functions such as <span class="function"><a href="function.mail.php" class="function">mail()</a></span>.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       By default, <span class="function"><strong>dns_get_record()</strong></span> will search for any
       resource records associated with <code class="parameter">hostname</code>. 
       To limit the query, use one of the
       <strong><code><a href="network.constants.php#constant.dns-any">DNS_<span class="replaceable">*</span></a></code></strong>
       constants.
      </p>
     </dd>
    
    
     <dt><code class="parameter">authoritative_name_servers</code></dt>
     <dd>
      <p class="para">
       Passed by reference and, if given, will be populated with Resource
       Records for the <em>Authoritative Name Servers</em>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">additional_records</code></dt>
     <dd>
      <p class="para">
       Passed by reference and, if given, will be populated with any
       <em>Additional Records</em>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">raw</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">type</code> will be interpreted as a raw DNS type ID
       (the <strong><code><a href="network.constants.php#constant.dns-any">DNS_<span class="replaceable">*</span></a></code></strong> constants cannot be used).
       The return value will contain a <code class="literal">data</code> key, which needs
       to be manually parsed.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.dns-get-record-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   This function returns an array of associative arrays,
    or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure. Each associative array contains
   <em>at minimum</em> the following keys:
   <table class="doctable table">
    <caption><strong>Basic DNS attributes</strong></caption>
    
     <thead>
      <tr>
       <th>Attribute</th>
       <th>Meaning</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>host</td>
       <td>
        The record in the DNS namespace to which the rest of the associated data refers.
       </td>
      </tr>

      <tr>
       <td>class</td>
       <td>
        <span class="function"><strong>dns_get_record()</strong></span> only returns Internet class records and as
        such this parameter will always return <code class="literal">IN</code>.
       </td>
      </tr>

      <tr>
       <td>type</td>
       <td>
        String containing the record type.  Additional attributes will also be contained
        in the resulting array dependant on the value of type. See table below.
       </td>
      </tr>

      <tr>
       <td>ttl</td>
       <td>
        <code class="literal">&quot;Time To Live&quot;</code> remaining for this record. This will <em>not</em> equal
        the record&#039;s original ttl, but will rather equal the original ttl minus whatever
        length of time has passed since the authoritative name server was queried.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Other keys in associative arrays dependent on <code class="parameter">type</code></strong></caption>
    
     <thead>
      <tr>
       <th>Type</th>
       <th>Extra Columns</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><code class="literal">A</code></td>
       <td>
        <code class="literal">ip</code>: An IPv4 addresses in dotted decimal notation.
       </td>
      </tr>

      <tr>
       <td><code class="literal">MX</code></td>
       <td>
        <code class="literal">pri</code>: Priority of mail exchanger.
        Lower numbers indicate greater priority.
        <code class="literal">target</code>: FQDN of the mail exchanger.
        See also <span class="function"><a href="function.dns-get-mx.php" class="function">dns_get_mx()</a></span>.
       </td>
      </tr>

      <tr>
       <td><code class="literal">CNAME</code></td>
       <td>
        <code class="literal">target</code>: FQDN of location in DNS namespace to which
        the record is aliased.
       </td>
      </tr>

      <tr>
       <td><code class="literal">NS</code></td>
       <td>
        <code class="literal">target</code>: FQDN of the name server which is authoritative
        for this hostname.
       </td>
      </tr>

      <tr>
       <td><code class="literal">PTR</code></td>
       <td>
        <code class="literal">target</code>: Location within the DNS namespace to which
        this record points.
       </td>
      </tr>

       <tr>
       <td><code class="literal">TXT</code></td>
       <td>
        <code class="literal">txt</code>: Arbitrary string data associated with this record.
       </td>
      </tr>

      <tr>
       <td><code class="literal">HINFO</code></td>
       <td>
        <code class="literal">cpu</code>: IANA number designating the CPU of the machine
        referenced by this record.
        <code class="literal">os</code>: IANA number designating the Operating System on
        the machine referenced by this record.
        See IANA&#039;s <a href="http://www.iana.org/assignments/operating-system-names" class="link external">&raquo;&nbsp;<code class="literal">Operating System
        Names</code></a> for the meaning of these values.
       </td>
      </tr>

      <tr>
       <td><code class="literal">CAA</code></td>
       <td>
        <code class="literal">flags</code>: A one-byte bitfield; currently only bit 0 is defined,
        meaning &#039;critical&#039;; other bits are reserved and should be ignored.
        <code class="literal">tag</code>: The CAA tag name (alphanumeric ASCII string).
        <code class="literal">value</code>: The CAA tag value (binary string, may use subformats).
        For additional information see: <a href="https://datatracker.ietf.org/doc/html/rfc6844" class="link external">&raquo;&nbsp;RFC 6844</a>
       </td>
      </tr>

      <tr>
       <td><code class="literal">SOA</code></td>
       <td>
        <code class="literal">mname</code>: FQDN of the machine from which the resource
        records originated.
        <code class="literal">rname</code>: Email address of the administrative contact
        for this domain.
        <code class="literal">serial</code>: Serial # of this revision of the requested
        domain.
        <code class="literal">refresh</code>: Refresh interval (seconds) secondary name
        servers should use when updating remote copies of this domain.
        <code class="literal">retry</code>: Length of time (seconds) to wait after a
        failed refresh before making a second attempt.
        <code class="literal">expire</code>: Maximum length of time (seconds) a secondary
        DNS server should retain remote copies of the zone data without a
        successful refresh before discarding.
        <code class="literal">minimum-ttl</code>: Minimum length of time (seconds) a
        client can continue to use a DNS resolution before it should request
        a new resolution from the server.  Can be overridden by individual
        resource records.
       </td>
      </tr>

      <tr>
       <td><code class="literal">AAAA</code></td>
       <td>
        <code class="literal">ipv6</code>: IPv6 address
       </td>
      </tr>

      <tr>
       <td><code class="literal">A6</code></td>
       <td>
        <code class="literal">masklen</code>: Length (in bits) to inherit from the target
        specified by <code class="parameter">chain</code>.
        <code class="literal">ipv6</code>: Address for this specific record to merge with
        <code class="parameter">chain</code>.
        <code class="literal">chain</code>: Parent record to merge with
        <code class="parameter">ipv6</code> data.
       </td>
      </tr>

      <tr>
       <td><code class="literal">SRV</code></td>
       <td>
        <code class="literal">pri</code>: (Priority) lowest priorities should be used first.
        <code class="literal">weight</code>: Ranking to weight which of commonly prioritized
        <code class="parameter">targets</code> should be chosen at random.
        <code class="literal">target</code> and <code class="literal">port</code>: hostname and port
        where the requested service can be found.
        For additional information see: <a href="https://datatracker.ietf.org/doc/html/rfc2782" class="link external">&raquo;&nbsp;RFC 2782</a>
       </td>
      </tr>

      <tr>
       <td><code class="literal">NAPTR</code></td>
       <td>
        <code class="literal">order</code> and <code class="literal">pref</code>: Equivalent to
        <code class="parameter">pri</code> and <code class="parameter">weight</code> above.
        <code class="literal">flags</code>, <code class="literal">services</code>, <code class="literal">regex</code>,
        and <code class="literal">replacement</code>: Parameters as defined by
        <a href="https://datatracker.ietf.org/doc/html/rfc2915" class="link external">&raquo;&nbsp;RFC 2915</a>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.dns-get-record-changelog">
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
       <td>7.0.16, 7.1.2</td>
       <td>
        Added support for CAA record type.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.dns-get-record-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4715">
    <p><strong>Example #1 Using <span class="function"><strong>dns_get_record()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$result </span><span style="color: #007700">= </span><span style="color: #0000BB">dns_get_record</span><span style="color: #007700">(</span><span style="color: #DD0000">"php.net"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [0] =&gt; Array
        (
            [host] =&gt; php.net
            [type] =&gt; MX
            [pri] =&gt; 5
            [target] =&gt; pair2.php.net
            [class] =&gt; IN
            [ttl] =&gt; 6765
        )

    [1] =&gt; Array
        (
            [host] =&gt; php.net
            [type] =&gt; A
            [ip] =&gt; 64.246.30.37
            [class] =&gt; IN
            [ttl] =&gt; 8125
        )

)</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-4716">
    <p><strong>Example #2 Using <span class="function"><strong>dns_get_record()</strong></span> and DNS_ANY</strong></p>
    <div class="example-contents"><p>
     Since it&#039;s very common to want the IP address of a mail server
     once the MX record has been resolved, <span class="function"><strong>dns_get_record()</strong></span>
     also returns an array in <code class="parameter">additional_records</code> which
     contains associate records.  <code class="parameter">authoritative_name_servers</code>
     is returned as well containing a list of authoritative name
     servers.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Request "ANY" record for php.net,<br />   and create $authns and $addtl arrays<br />   containing list of name servers and<br />   any additional records which go with<br />   them */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">dns_get_record</span><span style="color: #007700">(</span><span style="color: #DD0000">"php.net"</span><span style="color: #007700">, </span><span style="color: #0000BB">DNS_ANY</span><span style="color: #007700">, </span><span style="color: #0000BB">$authns</span><span style="color: #007700">, </span><span style="color: #0000BB">$addtl</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Result = "</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Auth NS = "</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$authns</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Additional = "</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$addtl</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Result = Array
(
    [0] =&gt; Array
        (
            [host] =&gt; php.net
            [type] =&gt; MX
            [pri] =&gt; 5
            [target] =&gt; pair2.php.net
            [class] =&gt; IN
            [ttl] =&gt; 6765
        )

    [1] =&gt; Array
        (
            [host] =&gt; php.net
            [type] =&gt; A
            [ip] =&gt; 64.246.30.37
            [class] =&gt; IN
            [ttl] =&gt; 8125
        )

)
Auth NS = Array
(
    [0] =&gt; Array
        (
            [host] =&gt; php.net
            [type] =&gt; NS
            [target] =&gt; remote1.easydns.com
            [class] =&gt; IN
            [ttl] =&gt; 10722
        )

    [1] =&gt; Array
        (
            [host] =&gt; php.net
            [type] =&gt; NS
            [target] =&gt; remote2.easydns.com
            [class] =&gt; IN
            [ttl] =&gt; 10722
        )

    [2] =&gt; Array
        (
            [host] =&gt; php.net
            [type] =&gt; NS
            [target] =&gt; ns1.easydns.com
            [class] =&gt; IN
            [ttl] =&gt; 10722
        )

    [3] =&gt; Array
        (
            [host] =&gt; php.net
            [type] =&gt; NS
            [target] =&gt; ns2.easydns.com
            [class] =&gt; IN
            [ttl] =&gt; 10722
        )

)
Additional = Array
(
    [0] =&gt; Array
        (
            [host] =&gt; pair2.php.net
            [type] =&gt; A
            [ip] =&gt; 216.92.131.5
            [class] =&gt; IN
            [ttl] =&gt; 6766
        )

    [1] =&gt; Array
        (
            [host] =&gt; remote1.easydns.com
            [type] =&gt; A
            [ip] =&gt; 64.39.29.212
            [class] =&gt; IN
            [ttl] =&gt; 100384
        )

    [2] =&gt; Array
        (
            [host] =&gt; remote2.easydns.com
            [type] =&gt; A
            [ip] =&gt; 212.100.224.80
            [class] =&gt; IN
            [ttl] =&gt; 81241
        )

    [3] =&gt; Array
        (
            [host] =&gt; ns1.easydns.com
            [type] =&gt; A
            [ip] =&gt; 216.220.40.243
            [class] =&gt; IN
            [ttl] =&gt; 81241
        )

    [4] =&gt; Array
        (
            [host] =&gt; ns2.easydns.com
            [type] =&gt; A
            [ip] =&gt; 216.220.40.244
            [class] =&gt; IN
            [ttl] =&gt; 81241
        )

)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.dns-get-record-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.dns-get-mx.php" class="function" rel="rdfs-seeAlso">dns_get_mx()</a> - Alias of getmxrr</span></li>
    <li><span class="function"><a href="function.dns-check-record.php" class="function" rel="rdfs-seeAlso">dns_check_record()</a> - Alias of checkdnsrr</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/dns-get-record.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.dns-get-record%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.dns-get-record&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dns-get-record.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116936">  <div class="votes">
    <div id="Vu116936">
    <a href="/manual/vote-note.php?id=116936&amp;page=function.dns-get-record&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116936">
    <a href="/manual/vote-note.php?id=116936&amp;page=function.dns-get-record&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116936" title="78% like this...">
    28
    </div>
  </div>
  <a href="#116936" class="name">
  <strong class="user"><em>tobias at herkula dot info</em></strong></a><a class="genanchor" href="#116936"> &para;</a><div class="date" title="2015-03-24 10:10"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116936">
<div class="phpcode"><code><span class="html">This method has no error handling, it simply puts out "false" and it is impossible to check for NXDOMAIN, SERVFAIL, TIMEOUT or any other error...</span></code></div>
  </div>
 </div>
  <div class="note" id="121278">  <div class="votes">
    <div id="Vu121278">
    <a href="/manual/vote-note.php?id=121278&amp;page=function.dns-get-record&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121278">
    <a href="/manual/vote-note.php?id=121278&amp;page=function.dns-get-record&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121278" title="78% like this...">
    13
    </div>
  </div>
  <a href="#121278" class="name">
  <strong class="user"><em>NaturalBornCamper</em></strong></a><a class="genanchor" href="#121278"> &para;</a><div class="date" title="2017-06-27 06:45"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121278">
<div class="phpcode"><code><span class="html">You might have the same problem as me, where testing a non-existent domain will search for a subdomain relative to the domain you are executing from, for example:<br /><br />// Test with working domain<br />var_dump( dns_get_record('google.com', DNS_A) );<br />/* works, returns<br />Array<br />(<br />    [host] =&gt; google.com<br />    [class] =&gt; IN<br />    [ttl] =&gt; 299<br />    [type] =&gt; A<br />    [ip] =&gt; 172.217.12.142<br />)<br />*/<br /><br />// Test with invalid domain on our website (example.com)<br />var_dump( dns_get_record('invalidtestingname.com', DNS_A) );<br />/* Doesn't work, pretend it's a subdomain<br />Array<br />(<br />    [host] =&gt; invalidtestingname.com.example.com<br />    [class] =&gt; IN<br />    [ttl] =&gt; 299<br />    [type] =&gt; A<br />    [ip] =&gt; xxx.xxx.xxx.xxx<br />)<br />*/<br /><br />If anyone has that problem, add a "dot" at the end of the domain name, for example, instead of<br />dns_get_record('invalidtestingname.com', DNS_A);<br />Do this:<br />dns_get_record('invalidtestingname.com.', DNS_A);</span></code></div>
  </div>
 </div>
  <div class="note" id="112975">  <div class="votes">
    <div id="Vu112975">
    <a href="/manual/vote-note.php?id=112975&amp;page=function.dns-get-record&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112975">
    <a href="/manual/vote-note.php?id=112975&amp;page=function.dns-get-record&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112975" title="76% like this...">
    13
    </div>
  </div>
  <a href="#112975" class="name">
  <strong class="user"><em>PHP Joe</em></strong></a><a class="genanchor" href="#112975"> &para;</a><div class="date" title="2013-08-13 11:30"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112975">
<div class="phpcode"><code><span class="html">Although this works very well for general DNS queries if you want to do a direct DNS query to a specified DNS server (rather than using OS resolution) try PHPDNS: <a href="http://www.purplepixie.org/phpdns/" rel="nofollow" target="_blank">http://www.purplepixie.org/phpdns/</a><br /><br />You can do direct (TCP or UDP) low-level queries to a nameserver and recurse at will. Very useful for testing specific servers and also for walking through a recursive resolution.</span></code></div>
  </div>
 </div>
  <div class="note" id="89099">  <div class="votes">
    <div id="Vu89099">
    <a href="/manual/vote-note.php?id=89099&amp;page=function.dns-get-record&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89099">
    <a href="/manual/vote-note.php?id=89099&amp;page=function.dns-get-record&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89099" title="73% like this...">
    14
    </div>
  </div>
  <a href="#89099" class="name">
  <strong class="user"><em>dylan at pow7 dot com</em></strong></a><a class="genanchor" href="#89099"> &para;</a><div class="date" title="2009-02-21 11:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89099">
<div class="phpcode"><code><span class="html">Get more than one type at once like this:<br /><span class="default">&lt;?php<br />$dnsr </span><span class="keyword">= </span><span class="default">dns_get_record</span><span class="keyword">(</span><span class="string">'php.net'</span><span class="keyword">, </span><span class="default">DNS_A </span><span class="keyword">+ </span><span class="default">DNS_NS</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$dnsr</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Using DNS_ALL fails on some domains where DNS_ANY works. I noticed the function getting stuck on the DNS_PTR record, which caused it to return FALSE with this error:<br />PHP Warning:  dns_get_record(): res_nsend() failed in ....<br /><br />This gets all records except DNS_PTR:<br /><span class="default">&lt;?php<br />$dnsr </span><span class="keyword">= </span><span class="default">dns_get_record</span><span class="keyword">(</span><span class="string">'php.net'</span><span class="keyword">, </span><span class="default">DNS_ALL </span><span class="keyword">- </span><span class="default">DNS_PTR</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$dnsr</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120049">  <div class="votes">
    <div id="Vu120049">
    <a href="/manual/vote-note.php?id=120049&amp;page=function.dns-get-record&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120049">
    <a href="/manual/vote-note.php?id=120049&amp;page=function.dns-get-record&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120049" title="63% like this...">
    3
    </div>
  </div>
  <a href="#120049" class="name">
  <strong class="user"><em>heinjan at eendrachtstraat dot nl</em></strong></a><a class="genanchor" href="#120049"> &para;</a><div class="date" title="2016-10-17 09:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120049">
<div class="phpcode"><code><span class="html">Please note that Firewalls and anti malware software detects  (and depending on company policies even blocks) DNS_ANY requests. <br />In that case the usage of this function fails.<br />This is because DNS_ANY requests can be  exploited for creating "amplification (D)DOS attackes": You send 1 DNS_ANY request and get a huge amount of information back, thus even small requests can result into hugh network load.<br /><br />I advise to use a more explicit name-request instead of using DNS_ANY.</span></code></div>
  </div>
 </div>
  <div class="note" id="121608">  <div class="votes">
    <div id="Vu121608">
    <a href="/manual/vote-note.php?id=121608&amp;page=function.dns-get-record&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121608">
    <a href="/manual/vote-note.php?id=121608&amp;page=function.dns-get-record&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121608" title="52% like this...">
    1
    </div>
  </div>
  <a href="#121608" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#121608"> &para;</a><div class="date" title="2017-09-05 01:29"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121608">
<div class="phpcode"><code><span class="html">When I use DNS_ALL as the second parameter to invoke dns_get_record() on the OS of Windows, PHP emits a warning with the message "Warning: dns_get_record(): Type '251721779' not supported in blah.php on line blah", and DNS_ANY is always OKAY.</span></code></div>
  </div>
 </div>
  <div class="note" id="127602">  <div class="votes">
    <div id="Vu127602">
    <a href="/manual/vote-note.php?id=127602&amp;page=function.dns-get-record&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127602">
    <a href="/manual/vote-note.php?id=127602&amp;page=function.dns-get-record&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127602" title="100% like this...">
    1
    </div>
  </div>
  <a href="#127602" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#127602"> &para;</a><div class="date" title="2022-09-08 03:57"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127602">
<div class="phpcode"><code><span class="html">Sadly this method does not allow for using an arbitrary nameserver.<br /><br />If you need to make a request  using a specific DNS server, you'll need to use either Pear/Net_DNS2, or libdns ( <a href="https://github.com/DaveRandom/LibDNS" rel="nofollow" target="_blank">https://github.com/DaveRandom/LibDNS</a> ).<br /><br />If you want something shorter and lighter, you can also use this 150 lines function: <a href="https://gist.github.com/bohwaz/ddc61c4f7e031c3221a89981e70b830c" rel="nofollow" target="_blank">https://gist.github.com/bohwaz/ddc61c4f7e031c3221a89981e70b830c</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.dns-get-record&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dns-get-record.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
