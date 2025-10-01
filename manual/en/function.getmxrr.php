<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: getmxrr - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.getmxrr.php">
 <link rel="shorturl" href="https://www.php.net/getmxrr">
 <link rel="alternate" href="https://www.php.net/getmxrr" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gethostname.php">
 <link rel="next" href="https://www.php.net/manual/en/function.getprotobyname.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.getmxrr.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.getmxrr.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.getmxrr.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.getmxrr.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.getmxrr.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.getmxrr.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.getmxrr.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.getmxrr.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.getmxrr.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.getmxrr.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.getmxrr.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get MX records corresponding to a given Internet host name" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: getmxrr - Manual" />
<meta name="twitter:description" content="Get MX records corresponding to a given Internet host name" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: getmxrr - Manual" />
<meta itemprop="description" content="Get MX records corresponding to a given Internet host name" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get MX records corresponding to a given Internet host name" />

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
        <a href="function.getprotobyname.php">
          getprotobyname &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gethostname.php">
          &laquo; gethostname        </a>
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
            <option value='en/function.getmxrr.php' selected="selected">English</option>
            <option value='de/function.getmxrr.php'>German</option>
            <option value='es/function.getmxrr.php'>Spanish</option>
            <option value='fr/function.getmxrr.php'>French</option>
            <option value='it/function.getmxrr.php'>Italian</option>
            <option value='ja/function.getmxrr.php'>Japanese</option>
            <option value='pt_BR/function.getmxrr.php'>Brazilian Portuguese</option>
            <option value='ru/function.getmxrr.php'>Russian</option>
            <option value='tr/function.getmxrr.php'>Turkish</option>
            <option value='uk/function.getmxrr.php'>Ukrainian</option>
            <option value='zh/function.getmxrr.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.getmxrr" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">getmxrr</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">getmxrr</span> &mdash; <span class="dc-title">Get MX records corresponding to a given Internet host name</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.getmxrr-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>getmxrr</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hostname</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$hosts</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$weights</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Searches DNS for MX records corresponding to 
   <code class="parameter">hostname</code>. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.getmxrr-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">hostname</code></dt>
     <dd>
      <p class="para">
       The Internet host name.
      </p>
     </dd>
    
    
     <dt><code class="parameter">hosts</code></dt>
     <dd>
      <p class="para">
       A list of the MX records found is placed into the array
       <code class="parameter">hosts</code>. 
      </p>
     </dd>
    
    
     <dt><code class="parameter">weights</code></dt>
     <dd>
      <p class="para">
       If the <code class="parameter">weights</code> array is given, it will be filled
       with the weight information gathered.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.getmxrr-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if any records are found; returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if no records
   were found or if an error occurred.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.getmxrr-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function should not be used for the purposes of address
    verification.  Only the mailexchangers found in DNS are returned,
    however, according to <a href="https://datatracker.ietf.org/doc/html/rfc2821" class="link external">&raquo;&nbsp;RFC 2821</a>
    when no mail exchangers are listed, <code class="parameter">hostname</code>
    itself should be used as the only mail exchanger with a priority of
    <code class="literal">0</code>.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    For compatibility with Windows before this was implemented, then try the
    <a href="https://pear.php.net/" class="link external">&raquo;&nbsp;PEAR</a> class
    <a href="https://pear.php.net/package/Net_DNS" class="link external">&raquo;&nbsp;Net_DNS</a>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.getmxrr-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.checkdnsrr.php" class="function" rel="rdfs-seeAlso">checkdnsrr()</a> - Check DNS records corresponding to a given Internet host name or IP address</span></li>
    <li><span class="function"><a href="function.dns-get-record.php" class="function" rel="rdfs-seeAlso">dns_get_record()</a> - Fetch DNS Resource Records associated with a hostname</span></li>
    <li><span class="function"><a href="function.gethostbyname.php" class="function" rel="rdfs-seeAlso">gethostbyname()</a> - Get the IPv4 address corresponding to a given Internet host name</span></li>
    <li><span class="function"><a href="function.gethostbynamel.php" class="function" rel="rdfs-seeAlso">gethostbynamel()</a> - Get a list of IPv4 addresses corresponding to a given Internet host
   name</span></li>
    <li><span class="function"><a href="function.gethostbyaddr.php" class="function" rel="rdfs-seeAlso">gethostbyaddr()</a> - Get the Internet host name corresponding to a given IP address</span></li>
    <li>the <code class="literal">named(8)</code> manual page</li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/getmxrr.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.getmxrr%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.getmxrr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.getmxrr.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="103123">  <div class="votes">
    <div id="Vu103123">
    <a href="/manual/vote-note.php?id=103123&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103123">
    <a href="/manual/vote-note.php?id=103123&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103123" title="72% like this...">
    19
    </div>
  </div>
  <a href="#103123" class="name">
  <strong class="user"><em>Robert Imhoff</em></strong></a><a class="genanchor" href="#103123"> &para;</a><div class="date" title="2011-03-27 06:21"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103123">
<div class="phpcode"><code><span class="html">I tried using getmxrr() to validate the domain portion of email addresses in enquiry submission forms, and there is a curious effect with some top-level domains when checking non-existant domains.<br /><br />With sdlkfjsdl.com, since the domain does not exist, getmxrr() returns false, as expected, and the returned mxhosts array is empty.<br /><br />But with sdlkfjsdl.gov, getmxrr() returns true,  and the returned mxhosts array contains one element: NULL<br /><br />With sdlkfjsdl.org, getmxrr() returns true,  and the returned mxhosts array contains one element: '0.0.0.0'<br /><br />With sdlkfjsdl.co.uk, getmxrr()  returns true and supplies one MX record: uk-net-wildcard-null-mx.centralnic.net<br /><br />So to validate the email domain, it would seem one has to check the returned mxhosts array to exclude the possibility of mxhosts being returned as NULL, 0.0.0.0 and wildcard ...</span></code></div>
  </div>
 </div>
  <div class="note" id="77751">  <div class="votes">
    <div id="Vu77751">
    <a href="/manual/vote-note.php?id=77751&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77751">
    <a href="/manual/vote-note.php?id=77751&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77751" title="100% like this...">
    4
    </div>
  </div>
  <a href="#77751" class="name">
  <strong class="user"><em>Jay</em></strong></a><a class="genanchor" href="#77751"> &para;</a><div class="date" title="2007-09-11 04:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77751">
<div class="phpcode"><code><span class="html">As stated, some of the code listed below will have trouble with multiple equal weights, such as if you query gmail.com. The following code will prevent that by switching the key/values.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Get the records<br /></span><span class="default">getmxrr</span><span class="keyword">(</span><span class="string">"gmail.com"</span><span class="keyword">, </span><span class="default">$mx_records</span><span class="keyword">, </span><span class="default">$mx_weight</span><span class="keyword">);<br /><br /></span><span class="comment">// Put the records together in a array we can sort<br /></span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$mx_records</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++){<br />    </span><span class="default">$mxs</span><span class="keyword">[</span><span class="default">$mx_records</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]] = </span><span class="default">$mx_weight</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />}<br /><br /></span><span class="comment">// Sort them<br /></span><span class="default">asort </span><span class="keyword">(</span><span class="default">$mxs</span><span class="keyword">);<br /><br /></span><span class="comment">// Since the keys actually hold the data we want, just put those in an array, called records     <br /></span><span class="default">$records </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$mxs</span><span class="keyword">);<br /><br /></span><span class="comment">// Simply echoes all the stuff in the records array     <br /></span><span class="keyword">for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$records</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++){<br />    echo </span><span class="default">$records</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />    echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />If you wanted to get the weight, you would use "array_values($mxs);" instead of "array_keys($mxs);".<br /><br />Hope this helps some people.</span></code></div>
  </div>
 </div>
  <div class="note" id="49290">  <div class="votes">
    <div id="Vu49290">
    <a href="/manual/vote-note.php?id=49290&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49290">
    <a href="/manual/vote-note.php?id=49290&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49290" title="73% like this...">
    11
    </div>
  </div>
  <a href="#49290" class="name">
  <strong class="user"><em>rune dot heggtveit at devzone dot progative dot com</em></strong></a><a class="genanchor" href="#49290"> &para;</a><div class="date" title="2005-01-23 01:02"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49290">
<div class="phpcode"><code><span class="html">An other way to do mx-lookup on a windows platform.<br />Rewrote this from an other class i wrote for DNS lookup - so it might be a bit messy - but hope you get the idea.<br /><br />Big thanks to the rfc community.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">mxlookup<br /></span><span class="keyword">{<br />      var </span><span class="default">$dns_socket </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />      var </span><span class="default">$QNAME </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />      var </span><span class="default">$dns_packet</span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />      var </span><span class="default">$ANCOUNT </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />      var </span><span class="default">$cIx </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />      var </span><span class="default">$dns_repl_domain</span><span class="keyword">;<br />      var </span><span class="default">$arrMX </span><span class="keyword">= array();<br /><br />      function </span><span class="default">mxlookup</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">, </span><span class="default">$dns</span><span class="keyword">=</span><span class="string">"192.168.2.1"</span><span class="keyword">)<br />      {<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">QNAME</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">);<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pack_dns_packet</span><span class="keyword">();<br />         </span><span class="default">$dns_socket </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">"udp://</span><span class="default">$dns</span><span class="string">"</span><span class="keyword">, </span><span class="default">53</span><span class="keyword">);<br /><br />         </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$dns_socket</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dns_packet</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dns_packet</span><span class="keyword">));<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dns_reply  </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$dns_socket</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />         </span><span class="default">$bytes </span><span class="keyword">= </span><span class="default">stream_get_meta_data</span><span class="keyword">(</span><span class="default">$dns_socket</span><span class="keyword">);<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dns_reply </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$dns_socket</span><span class="keyword">,</span><span class="default">$bytes</span><span class="keyword">[</span><span class="string">'unread_bytes'</span><span class="keyword">]);<br />         </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$dns_socket</span><span class="keyword">);<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">=</span><span class="default">6</span><span class="keyword">;<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ANCOUNT   </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">gord</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">+=</span><span class="default">4</span><span class="keyword">;<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parse_data</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dns_repl_domain</span><span class="keyword">);<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">+=</span><span class="default">7</span><span class="keyword">;<br /><br />         for(</span><span class="default">$ic</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$ic</span><span class="keyword">&lt;=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ANCOUNT</span><span class="keyword">;</span><span class="default">$ic</span><span class="keyword">++)<br />         {<br />           </span><span class="default">$QTYPE </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">gdi</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">));<br />           if(</span><span class="default">$QTYPE</span><span class="keyword">!==</span><span class="default">15</span><span class="keyword">){print(</span><span class="string">"[MX Record not returned]"</span><span class="keyword">); die();}<br />           </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">+=</span><span class="default">9</span><span class="keyword">;<br />           </span><span class="default">$mxPref </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">gdi</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">));<br />           </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parse_data</span><span class="keyword">(</span><span class="default">$curmx</span><span class="keyword">);<br />           </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">arrMX</span><span class="keyword">[] = array(</span><span class="string">"MX_Pref" </span><span class="keyword">=&gt; </span><span class="default">$mxPref</span><span class="keyword">, </span><span class="string">"MX" </span><span class="keyword">=&gt; </span><span class="default">$curmx</span><span class="keyword">);<br />           </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">+=</span><span class="default">3</span><span class="keyword">;<br />         }<br />      }<br /><br />      function </span><span class="default">parse_data</span><span class="keyword">(&amp;</span><span class="default">$retval</span><span class="keyword">)<br />      {<br />        </span><span class="default">$arName </span><span class="keyword">= array();<br />        </span><span class="default">$byte </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">gdi</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">));<br />        while(</span><span class="default">$byte</span><span class="keyword">!==</span><span class="default">0</span><span class="keyword">)<br />        {<br />          if(</span><span class="default">$byte</span><span class="keyword">==</span><span class="default">192</span><span class="keyword">) </span><span class="comment">//compressed<br />          </span><span class="keyword">{<br />            </span><span class="default">$tmpIx </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">gdi</span><span class="keyword">(</span><span class="default">$cIx</span><span class="keyword">));<br />            </span><span class="default">$tmpName </span><span class="keyword">= </span><span class="default">$retval</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parse_data</span><span class="keyword">(</span><span class="default">$tmpName</span><span class="keyword">);<br />            </span><span class="default">$retval</span><span class="keyword">=</span><span class="default">$retval</span><span class="keyword">.</span><span class="string">"."</span><span class="keyword">.</span><span class="default">$tmpName</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx </span><span class="keyword">= </span><span class="default">$tmpIx</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />            return;<br />          }<br />          </span><span class="default">$retval</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />          </span><span class="default">$bCount </span><span class="keyword">= </span><span class="default">$byte</span><span class="keyword">;<br />          for(</span><span class="default">$b</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$b</span><span class="keyword">&lt;</span><span class="default">$bCount</span><span class="keyword">;</span><span class="default">$b</span><span class="keyword">++)<br />          {<br />            </span><span class="default">$retval </span><span class="keyword">.= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">gdi</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">);<br />          }<br />          </span><span class="default">$arName</span><span class="keyword">[]=</span><span class="default">$retval</span><span class="keyword">;<br />         </span><span class="default">$byte </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">gdi</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">));<br />       }<br />       </span><span class="default">$retval</span><span class="keyword">=</span><span class="default">join</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">,</span><span class="default">$arName</span><span class="keyword">);<br />     }<br /><br />     function </span><span class="default">gdi</span><span class="keyword">(&amp;</span><span class="default">$cIx</span><span class="keyword">,</span><span class="default">$bytes</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />     {<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">++;<br />       return(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dns_reply</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$bytes</span><span class="keyword">));<br />     }<br /><br />      function </span><span class="default">QNAME</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">)<br />      {<br />        </span><span class="default">$dot_pos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$temp </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />        while(</span><span class="default">$dot_pos</span><span class="keyword">=</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">))<br />        {<br />          </span><span class="default">$temp   </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$dot_pos</span><span class="keyword">);<br />          </span><span class="default">$domain </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">,</span><span class="default">$dot_pos</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);<br />          </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">QNAME </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">)).</span><span class="default">$temp</span><span class="keyword">;<br />        }<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">QNAME </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">)).</span><span class="default">$domain</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />      }<br /><br />      function </span><span class="default">gord</span><span class="keyword">(</span><span class="default">$ln</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      {<br />        </span><span class="default">$reply</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$ln</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />         </span><span class="default">$reply</span><span class="keyword">.=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dns_reply</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cIx</span><span class="keyword">++;<br />         }<br /><br />        return </span><span class="default">$reply</span><span class="keyword">;<br />      }<br /><br />      function </span><span class="default">pack_dns_packet</span><span class="keyword">()<br />      {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dns_packet </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">).<br />                            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).<br />                            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">).<br />                            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).<br />                            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).<br />                            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).<br />                            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">QNAME</span><span class="keyword">.<br />                            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">).<br />                            </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />      }<br /><br />}<br /><br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/* Exampe of use: */<br /></span><span class="default">$mx </span><span class="keyword">= new </span><span class="default">mxlookup</span><span class="keyword">(</span><span class="string">"php.net"</span><span class="keyword">);<br /><br />print </span><span class="default">$mx</span><span class="keyword">-&gt;</span><span class="default">ANCOUNT</span><span class="keyword">.</span><span class="string">" MX Records\n"</span><span class="keyword">;<br />print </span><span class="string">"Records returned for "</span><span class="keyword">.</span><span class="default">$mx</span><span class="keyword">-&gt;</span><span class="default">dns_repl_domain</span><span class="keyword">.</span><span class="string">":\n&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$mx</span><span class="keyword">-&gt;</span><span class="default">arrMX</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Return:<br /><br />02 MX Records Records returned for php.net:<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [MX_Pref] =&gt; 15<br />            [MX] =&gt; smtp.osuosl.org<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [MX_Pref] =&gt; 5<br />            [MX] =&gt; osu1.php.net<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="42396">  <div class="votes">
    <div id="Vu42396">
    <a href="/manual/vote-note.php?id=42396&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42396">
    <a href="/manual/vote-note.php?id=42396&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42396" title="71% like this...">
    3
    </div>
  </div>
  <a href="#42396" class="name">
  <strong class="user"><em>zorlac_man at hotmail dot com</em></strong></a><a class="genanchor" href="#42396"> &para;</a><div class="date" title="2004-05-14 12:15"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42396">
<div class="phpcode"><code><span class="html">For some reason this and the other DNS lookup functions seem to be really slow on my Linux box. I've checked several things and have no explanation.<br /><br />As a work-around, I gave in and just used a system call to dig:<br /><br /><span class="default">&lt;?php<br />CheckMX</span><span class="keyword">(</span><span class="string">"fakedomain.org"</span><span class="keyword">);<br /></span><span class="default">CheckMX</span><span class="keyword">(</span><span class="string">"hotmail.com"</span><span class="keyword">);<br /><br />function </span><span class="default">CheckMX</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">) {<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"dig +short MX " </span><span class="keyword">. </span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">),</span><span class="default">$ips</span><span class="keyword">);<br />        if(</span><span class="default">$ips</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">""</span><span class="keyword">) {<br />                print </span><span class="string">"MX record found for </span><span class="default">$domain</span><span class="string"> not found!\n"</span><span class="keyword">;<br />                return </span><span class="default">FALSE</span><span class="keyword">;<br />        }<br />        print </span><span class="string">"MX Record for </span><span class="default">$domain</span><span class="string"> found\n"</span><span class="keyword">;<br />        return </span><span class="default">TRUE</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />MX record found for fakedomain.org not found!<br />MX Record for hotmail.com found<br /><br />As someone else pointed out, it is prudent to check to see if the TLD has an IP address if the MX record is not found.</span></code></div>
  </div>
 </div>
  <div class="note" id="88033">  <div class="votes">
    <div id="Vu88033">
    <a href="/manual/vote-note.php?id=88033&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88033">
    <a href="/manual/vote-note.php?id=88033&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88033" title="55% like this...">
    1
    </div>
  </div>
  <a href="#88033" class="name">
  <strong class="user"><em>php [spat] hm2k.org</em></strong></a><a class="genanchor" href="#88033"> &para;</a><div class="date" title="2009-01-06 02:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88033">
<div class="phpcode"><code><span class="html">I decided to have a bash at this after doing a bit of research...<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// getmxrr() support for Windows by HM2K &lt;php [spat] hm2k.org&gt;<br /></span><span class="keyword">function </span><span class="default">win_getmxrr</span><span class="keyword">(</span><span class="default">$hostname</span><span class="keyword">, &amp;</span><span class="default">$mxhosts</span><span class="keyword">, &amp;</span><span class="default">$mxweight</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br />    if (</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)) != </span><span class="string">'WIN'</span><span class="keyword">) return;<br />    if (!</span><span class="default">is_array </span><span class="keyword">(</span><span class="default">$mxhosts</span><span class="keyword">) ) </span><span class="default">$mxhosts </span><span class="keyword">= array();<br />    if (empty(</span><span class="default">$hostname</span><span class="keyword">)) return;<br />    </span><span class="default">$exec</span><span class="keyword">=</span><span class="string">'nslookup -type=MX '</span><span class="keyword">.</span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$hostname</span><span class="keyword">);<br />    @</span><span class="default">exec</span><span class="keyword">(</span><span class="default">$exec</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);<br />    if (empty(</span><span class="default">$output</span><span class="keyword">)) return;<br />    </span><span class="default">$i</span><span class="keyword">=-</span><span class="default">1</span><span class="keyword">;<br />    foreach (</span><span class="default">$output </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">) {<br />        </span><span class="default">$i</span><span class="keyword">++;<br />        if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="default">$hostname</span><span class="string">\tMX preference = ([0-9]+), mail exchanger = (.+)$/i"</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$parts</span><span class="keyword">)) {<br />          </span><span class="default">$mxweight</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />          </span><span class="default">$mxhosts</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />        }<br />        if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/responsible mail addr = (.+)$/i'</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$parts</span><span class="keyword">)) {<br />          </span><span class="default">$mxweight</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$i</span><span class="keyword">;<br />          </span><span class="default">$mxhosts</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />        }<br />    }<br />    return (</span><span class="default">$i</span><span class="keyword">!=-</span><span class="default">1</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Define<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'getmxrr'</span><span class="keyword">)) {<br />    function </span><span class="default">getmxrr</span><span class="keyword">(</span><span class="default">$hostname</span><span class="keyword">, &amp;</span><span class="default">$mxhosts</span><span class="keyword">, &amp;</span><span class="default">$mxweight</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br />        return </span><span class="default">win_getmxrr</span><span class="keyword">(</span><span class="default">$hostname</span><span class="keyword">, </span><span class="default">$mxhosts</span><span class="keyword">, </span><span class="default">$mxweight</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">/* example */<br /><br /></span><span class="default">$domain</span><span class="keyword">=</span><span class="string">'php.net'</span><span class="keyword">;<br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">getmxrr</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">,</span><span class="default">$mxhosts</span><span class="keyword">,</span><span class="default">$mxweight</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$mxhosts</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$mxweight</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119994">  <div class="votes">
    <div id="Vu119994">
    <a href="/manual/vote-note.php?id=119994&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119994">
    <a href="/manual/vote-note.php?id=119994&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119994" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119994" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#119994"> &para;</a><div class="date" title="2016-10-06 12:30"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom119994">
<div class="phpcode"><code><span class="html">One small polyfill for the getmxrr function(even when it's missing from linux system)<br /><br />function getmxrr($hostname, &amp;$mxhosts, array &amp;$mxweight=null)<br />                {<br />                   $mxhosts = array();<br />                   exec('nslookup -type=mx '.$hostname, $result_arr);<br />                   foreach($result_arr as $line) <br />                    {<br />                        if (preg_match("/.*mail exchanger = (.*)/", $line, $matches)) <br />                        {  <br />                            $s_xo=explode(' ', $matches[1]);<br />                            $mxhosts[] = $s_xo[1];<br />                            $mxweight[] = $s_xo[0];                            <br />                        }                     <br />                    }<br />                   return( count($mxhosts) &gt; 0 );<br />                }</span></code></div>
  </div>
 </div>
  <div class="note" id="25472">  <div class="votes">
    <div id="Vu25472">
    <a href="/manual/vote-note.php?id=25472&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25472">
    <a href="/manual/vote-note.php?id=25472&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25472" title="100% like this...">
    1
    </div>
  </div>
  <a href="#25472" class="name">
  <strong class="user"><em>geoffbrisbine A T  y a h o o  DOT  c o m</em></strong></a><a class="genanchor" href="#25472"> &para;</a><div class="date" title="2002-09-24 09:39"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25472">
<div class="phpcode"><code><span class="html">I was pretty disappointed that the Win32 build of PHP doesn't incorporate getmxrr so, since I'm a naive newbie, I decided to hack together my own (and I stress hack).  This has been tested on Win 2000 and Win XP.  There's no reason this shouldn't work on Win NT but it will not work on Win 9x (you need the nslookup command).  It will finish with the array $mx that will be a multidimensional array with the MX preference, host name and ip address. You can do a print_r ( $mx ) to see what it looks like.<br /><br />-----------------------------------------------<br /><br /><span class="default">&lt;?php<br />$command </span><span class="keyword">= </span><span class="string">"nslookup -type=mx yahoo.com"</span><span class="keyword">;<br /></span><span class="default">exec </span><span class="keyword">( </span><span class="default">$command</span><span class="keyword">, </span><span class="default">$result </span><span class="keyword">);<br />    <br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while ( list ( </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">) = </span><span class="default">each </span><span class="keyword">( </span><span class="default">$result </span><span class="keyword">) ) {<br />    if ( </span><span class="default">strstr </span><span class="keyword">( </span><span class="default">$value</span><span class="keyword">, </span><span class="string">"mail exchanger" </span><span class="keyword">) ) { </span><span class="default">$nslookup</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++; }<br />}<br />    <br />while ( list ( </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">) = </span><span class="default">each </span><span class="keyword">( </span><span class="default">$nslookup </span><span class="keyword">) ) {<br />    </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">explode </span><span class="keyword">( </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">);<br />    </span><span class="default">$mx</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] = </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];<br />    </span><span class="default">$mx</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">];<br />    </span><span class="default">$mx</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">] = </span><span class="default">gethostbyname </span><span class="keyword">( </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] );<br />}<br /><br />    </span><span class="default">array_multisort </span><span class="keyword">( </span><span class="default">$mx </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70575">  <div class="votes">
    <div id="Vu70575">
    <a href="/manual/vote-note.php?id=70575&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70575">
    <a href="/manual/vote-note.php?id=70575&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70575" title="50% like this...">
    0
    </div>
  </div>
  <a href="#70575" class="name">
  <strong class="user"><em>tomhutter at web dot de</em></strong></a><a class="genanchor" href="#70575"> &para;</a><div class="date" title="2006-10-20 12:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70575">
<div class="phpcode"><code><span class="html">Leonardt's code fails with multiple mx records with the same wight. You can easily change this by switching keys and values in the mxs array:<br /><br />     for($i=0;$i&lt;count($mx_records);$i++){<br />       $mxs[$mx_records[$i]] = $mx_weight[$i];<br />     }<br /><br />     arsort ($mxs );<br />     reset ($mxs);<br /><br />    while (list ($mx_host, $mx_weight) = each ($mxs) ) {<br /><br />cheers <br /><br />Tom</span></code></div>
  </div>
 </div>
  <div class="note" id="70401">  <div class="votes">
    <div id="Vu70401">
    <a href="/manual/vote-note.php?id=70401&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70401">
    <a href="/manual/vote-note.php?id=70401&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70401" title="50% like this...">
    0
    </div>
  </div>
  <a href="#70401" class="name">
  <strong class="user"><em>php dot net at oitc dot com</em></strong></a><a class="genanchor" href="#70401"> &para;</a><div class="date" title="2006-10-14 05:28"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70401">
<div class="phpcode"><code><span class="html">This function has some strange side effects when dealing with aliases...<br /><br />My function:<br /><br />        if (getmxrr($fqdn, $mx_records, $mx_weight)) {<br />            // copy mx records and weight into array $mxs<br />            // ignore multiple mx's at the same weight<br />            for ($i = 0; $i &lt; count($mx_records); $i++) {<br />                $mxs[$mx_weight[$i]] = $mx_records[$i];<br />            }<br />            // sort array mxs to get servers with highest priority<br />            ksort ($mxs, SORT_NUMERIC);<br />            reset ($mxs);<br />        } else {<br />            // No MX so use A<br />            $mxs[0]= $fqdn;<br />        }<br /><br />fails because a $fqdn containing an alias returns a true yet on return both $mx_records and $mx_weight contain nothing!<br /><br />The solution until this gets fixed is to replace if (getmxrr($fqdn, $mx_records, $mx_weight)) with<br /><br />        // Handle aliases etc.<br />        if ($result = getmxrr($fqdn, $mx_records, $mx_weight)) {<br />            if(!isset($mx_records) || (count($mx_records) == 0)) $result = false;<br />        }<br />        // Process MXs<br />        if ($result) {<br /><br />Hope this helps others....  Tom</span></code></div>
  </div>
 </div>
  <div class="note" id="69869">  <div class="votes">
    <div id="Vu69869">
    <a href="/manual/vote-note.php?id=69869&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69869">
    <a href="/manual/vote-note.php?id=69869&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69869" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69869" class="name">
  <strong class="user"><em>MagicalTux at ooKoo dot org</em></strong></a><a class="genanchor" href="#69869"> &para;</a><div class="date" title="2006-09-24 07:59"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69869">
<div class="phpcode"><code><span class="html">If you want to use getmxrr on windows, be careful as choward AT fast DOT net DOT NO SPAM PLZ's function has a security flaw.<br /><br />It passes its argument to an external command without escaping it. If you don't validate the input, someone may manage to run nasty things on your system.<br /><br />Here's a fixed version (just added escapeshellarg())<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getmxrr</span><span class="keyword">(</span><span class="default">$hostname</span><span class="keyword">, &amp;</span><span class="default">$mxhosts</span><span class="keyword">)<br />{<br />    </span><span class="default">$mxhosts </span><span class="keyword">= array();<br />    </span><span class="default">exec</span><span class="keyword">(</span><span class="string">'%SYSTEMDIRECTORY%\\nslookup.exe -q=mx '</span><span class="keyword">.</span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$hostname</span><span class="keyword">), </span><span class="default">$result_arr</span><span class="keyword">);<br />    foreach(</span><span class="default">$result_arr </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">)<br />    {<br />      if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.*mail exchanger = (.*)/"</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">))<br />          </span><span class="default">$mxhosts</span><span class="keyword">[] = </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    }<br />    return( </span><span class="default">count</span><span class="keyword">(</span><span class="default">$mxhosts</span><span class="keyword">) &gt; </span><span class="default">0 </span><span class="keyword">);<br />}</span><span class="comment">//--End of workaround<br /><br />//test..<br /></span><span class="default">getmxrr</span><span class="keyword">(</span><span class="string">'yahoo.com'</span><span class="keyword">, </span><span class="default">$mxhosts</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$mxhosts</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This way you'll avoid a lot of nasty things ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="61773">  <div class="votes">
    <div id="Vu61773">
    <a href="/manual/vote-note.php?id=61773&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61773">
    <a href="/manual/vote-note.php?id=61773&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61773" title="50% like this...">
    0
    </div>
  </div>
  <a href="#61773" class="name">
  <strong class="user"><em>off at NOSPAM dot abwesend dot de</em></strong></a><a class="genanchor" href="#61773"> &para;</a><div class="date" title="2006-02-11 07:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61773">
<div class="phpcode"><code><span class="html">Concerning the message by 'rolf at rowi dot net' (do a check on a address containing a subdomain) we could use:<br /><br />$email = 'abc@etpc01.trier.fh-rpl.de';<br />            <br />$strDot      = '.';<br />$strAfterAt  = substr(strstr($email, '@'), 1);<br />$chunks      = explode($strDot, $strAfterAt);<br />$cntChunks   = count($chunks) - 1;<br /><br />$strDomain = $chunks[($cntChunks-1)] . $strDot . $chunks[$cntChunks];<br /><br />if (!getmxrr( $strDomain, $mxhosts )) {<br />    echo 'Mailserver not found';<br />}<br /><br />// $strDomain is set to 'fh-rpl.de';</span></code></div>
  </div>
 </div>
  <div class="note" id="53182">  <div class="votes">
    <div id="Vu53182">
    <a href="/manual/vote-note.php?id=53182&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53182">
    <a href="/manual/vote-note.php?id=53182&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53182" title="no votes...">
    0
    </div>
  </div>
  <a href="#53182" class="name">
  <strong class="user"><em>richard dot quadling at bandvulc dot co dot uk</em></strong></a><a class="genanchor" href="#53182"> &para;</a><div class="date" title="2005-05-25 02:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53182">
<div class="phpcode"><code><span class="html">Windows alternative for getmxrr without the need for PEAR.
<br />
<br /><span class="default">&lt;?php
<br />define</span><span class="keyword">(</span><span class="string">'DEFAULT_GATEWAY'</span><span class="keyword">, </span><span class="string">'nnn.nnn.nnn.nnn'</span><span class="keyword">);
<br />if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'getmxrr'</span><span class="keyword">))
<br />    {
<br />    </span><span class="comment">/*
<br />        This function is a replacement for the missing Windows function getmxrr.
<br />        
<br />        The parameters are the same as those for the normal getmxrr function.
<br />        
<br />        The steps this function takes are :
<br />        
<br />        1 - Use NSLOOKUP.EXE to get the MX records for the supplied Host.
<br />        2 - Use regular expressions to extract the mail servers and the preference.
<br />        3 - Sort the results by preference.
<br />        4 - Set the return arrays.
<br />        5 - Return true or false.
<br />    */
<br />    </span><span class="keyword">function </span><span class="default">getmxrr</span><span class="keyword">(</span><span class="default">$s_HostName</span><span class="keyword">, array &amp;</span><span class="default">$a_MXHosts </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, array &amp;</span><span class="default">$a_Weights </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">)
<br />        {
<br />        </span><span class="comment">// Simulate all the required network activity by executing windows' NSLOOKUP.
<br />        </span><span class="default">$s_NSLookup </span><span class="keyword">= </span><span class="default">shell_exec</span><span class="keyword">(</span><span class="string">"nslookup -q=mx </span><span class="keyword">{</span><span class="default">$s_HostName</span><span class="keyword">}</span><span class="string"> 2&gt;nul"</span><span class="keyword">);
<br />        </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"'^.*MX preference = (\d{1,10}), mail exchanger = (.*)$'simU"</span><span class="keyword">, </span><span class="default">$s_NSLookup</span><span class="keyword">, </span><span class="default">$a_MXMatches</span><span class="keyword">);
<br />
<br />        </span><span class="comment">// If there is something to return ...
<br />        </span><span class="keyword">if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$a_MXMatches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) &gt; </span><span class="default">0</span><span class="keyword">)
<br />            {
<br />            </span><span class="comment">// Produce output arrays if they have been requested.
<br />            </span><span class="default">$i_ArgCount </span><span class="keyword">= </span><span class="default">func_num_args</span><span class="keyword">();
<br />            if (</span><span class="default">$i_ArgCount </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">)
<br />                {
<br />                </span><span class="default">array_multisort</span><span class="keyword">(</span><span class="default">$a_MXMatches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$a_MXMatches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br />                switch (</span><span class="default">$i_ArgCount</span><span class="keyword">)
<br />                    {
<br />                    case </span><span class="default">3 </span><span class="keyword">:
<br />                        </span><span class="default">$a_Weights </span><span class="keyword">= </span><span class="default">$a_MXMatches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />                    case </span><span class="default">2 </span><span class="keyword">:
<br />                        </span><span class="default">$a_MXHosts </span><span class="keyword">= </span><span class="default">$a_MXMatches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />                    }
<br />                }
<br />            return </span><span class="default">True</span><span class="keyword">;
<br />            }
<br />        else
<br />            {
<br />            return </span><span class="default">False</span><span class="keyword">;
<br />            }
<br />        }
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />You will need to know your default gateway (either it's IP address or its name).
<br />
<br />To do this, run the program IPCONFIG /ALL at a cmd prompt and look for the Default Gateway.
<br />
<br />Then replace the 'nnn.nnn.nnn.nnn' with the address.
<br />
<br />Richard.</span></code></div>
  </div>
 </div>
  <div class="note" id="40236">  <div class="votes">
    <div id="Vu40236">
    <a href="/manual/vote-note.php?id=40236&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40236">
    <a href="/manual/vote-note.php?id=40236&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40236" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#40236" class="name">
  <strong class="user"><em>ng4rrjanbiah at rediffmail dot com</em></strong></a><a class="genanchor" href="#40236"> &para;</a><div class="date" title="2004-02-26 03:11"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40236">
<div class="phpcode"><code><span class="html">Here is a better workaround for Windows platform. Tested on Windows XP. Highly impressed by "geoffbrisbine A T y a h o o DOT c o m"'s idea of nslookup usage.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getmxrr</span><span class="keyword">(</span><span class="default">$hostname</span><span class="keyword">, &amp;</span><span class="default">$mxhosts</span><span class="keyword">)<br />{<br />   </span><span class="default">$mxhosts </span><span class="keyword">= array();<br />   </span><span class="default">exec</span><span class="keyword">(</span><span class="string">'nslookup -type=mx '</span><span class="keyword">.</span><span class="default">$hostname</span><span class="keyword">, </span><span class="default">$result_arr</span><span class="keyword">);<br />   foreach(</span><span class="default">$result_arr </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">) <br />    {<br />      if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.*mail exchanger = (.*)/"</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)) <br />          </span><span class="default">$mxhosts</span><span class="keyword">[] = </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    }<br />   return( </span><span class="default">count</span><span class="keyword">(</span><span class="default">$mxhosts</span><span class="keyword">) &gt; </span><span class="default">0 </span><span class="keyword">);<br />}</span><span class="comment">//--End of workaround<br /><br />//test..<br /></span><span class="keyword">echo </span><span class="default">getmxrr</span><span class="keyword">(</span><span class="string">'yahoo.com'</span><span class="keyword">, </span><span class="default">$mxhosts</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$mxhosts</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />HTH,<br />R. Rajesh Jeba Anbiah</span></code></div>
  </div>
 </div>
  <div class="note" id="10675">  <div class="votes">
    <div id="Vu10675">
    <a href="/manual/vote-note.php?id=10675&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10675">
    <a href="/manual/vote-note.php?id=10675&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10675" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#10675" class="name">
  <strong class="user"><em>paul at start dot co dot uk</em></strong></a><a class="genanchor" href="#10675"> &para;</a><div class="date" title="2001-01-16 12:48"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10675">
<div class="phpcode"><code><span class="html">Prevent your dns server from 'creating' a valid host name by appending the local domain to incomplete emails by appending to the domain a  trailing . both in the pattern match and mx checks:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (</span><span class="default">eregi</span><span class="keyword">(</span><span class="string">"^[0-9a-z_]([-_.]?[0-9a-z])*@[0-9a-z][-.0-9a-z]*\\.[a-z]{2,3}[.]?$"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$check</span><span class="keyword">)) { 
<br />    </span><span class="default">$host </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$check</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="string">'@'</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">).</span><span class="string">"."</span><span class="keyword">; 
<br />    if ( </span><span class="default">getmxrr</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$validate_email_temp</span><span class="keyword">) ) 
<br />        return </span><span class="default">TRUE</span><span class="keyword">; 
<br />    </span><span class="comment">// THIS WILL CATCH DNSs THAT ARE NOT MX. 
<br />    </span><span class="keyword">if(</span><span class="default">checkdnsrr</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">,</span><span class="string">"ANY"</span><span class="keyword">))
<br />        return </span><span class="default">TRUE</span><span class="keyword">; 
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="48673">  <div class="votes">
    <div id="Vu48673">
    <a href="/manual/vote-note.php?id=48673&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48673">
    <a href="/manual/vote-note.php?id=48673&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48673" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#48673" class="name">
  <strong class="user"><em>siclawrence at gmail dot com</em></strong></a><a class="genanchor" href="#48673"> &para;</a><div class="date" title="2005-01-04 06:43"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48673">
<div class="phpcode"><code><span class="html">This code replicates online tools that let you check if an email address is valid. First it checks if the email format is correct, then looks up and prints the mx records. All nicely formatted with fancy words that in the end prints whether the email address valid or invalid.<br /><br /><span class="default">&lt;?php<br />$email </span><span class="keyword">= </span><span class="string">"email@domain.com"</span><span class="keyword">;<br /><br />print(</span><span class="string">"Checking: </span><span class="default">$email</span><span class="string">&lt;br&gt;"</span><span class="keyword">);<br /><br />if (</span><span class="default">eregi</span><span class="keyword">(</span><span class="string">"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$"</span><span class="keyword">, </span><span class="default">$email</span><span class="keyword">)) {<br /><br />    print(</span><span class="string">"Format Test: PASSED&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"Online host verification Test...&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"MX Records for: </span><span class="default">$email</span><span class="string">&lt;br&gt;"</span><span class="keyword">);<br />    <br />    list(</span><span class="default">$alias</span><span class="keyword">, </span><span class="default">$domain</span><span class="keyword">) = </span><span class="default">split</span><span class="keyword">(</span><span class="string">"@"</span><span class="keyword">, </span><span class="default">$email</span><span class="keyword">); <br />    <br />    if (</span><span class="default">checkdnsrr</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">, </span><span class="string">"MX"</span><span class="keyword">)) {<br />    <br />        </span><span class="default">getmxrr</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">, </span><span class="default">$mxhosts</span><span class="keyword">);<br />        <br />        foreach(</span><span class="default">$mxhosts </span><span class="keyword">as </span><span class="default">$mxKey </span><span class="keyword">=&gt; </span><span class="default">$mxValue</span><span class="keyword">){<br />            print(</span><span class="string">"&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;</span><span class="default">$mxValue</span><span class="string">&lt;br&gt;"</span><span class="keyword">);<br />        }<br />        <br />        print(</span><span class="string">"Online host verification Test: PASSED&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br />        print(</span><span class="string">"Email Status: VALID"</span><span class="keyword">);<br />    <br />    } else {<br />    <br />        print(</span><span class="string">"&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;No records found.&lt;br&gt;"</span><span class="keyword">);<br />        print(</span><span class="string">"Online host verification Test: FAILED&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br />        print(</span><span class="string">"Email Status: INVALID"</span><span class="keyword">);<br />    <br />    }<br /><br />} else {<br /><br />    print(</span><span class="string">"Format Test: FAILED&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"Invalid email address provided.&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"Email Status: INVALID"</span><span class="keyword">);<br />    <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="64117">  <div class="votes">
    <div id="Vu64117">
    <a href="/manual/vote-note.php?id=64117&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64117">
    <a href="/manual/vote-note.php?id=64117&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64117" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#64117" class="name">
  <strong class="user"><em>Lennart Poot(www.twing.nl)</em></strong></a><a class="genanchor" href="#64117"> &para;</a><div class="date" title="2006-04-07 12:23"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64117">
<div class="phpcode"><code><span class="html">This script validates an e-mail adress using getmxrr and fsockopen<br /><br />1. it validates the syntax of the address.<br />2. get MX records by hostname<br />3. connect mail server and verify mailbox(using smtp command RCTP TO:&lt;email&gt;)<br /><br />When the function "validate_email([email])" fails connecting the mail server with the highest priority in the MX record it will continue with the second mail server and so on..<br /><br />The function "validate_email([email])" returns 0 when it failes one the 3 steps above, it will return 1 otherwise<br /><br />Grtz Lennart Poot<br /><br />&lt;?<br />function validate_email($email){<br />   $mailparts=explode("@",$email);<br />   $hostname = $mailparts[1];<br /><br />   // validate email address syntax<br />   $exp = "^[a-z\'0-9]+([._-][a-z\'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$";<br />   $b_valid_syntax=eregi($exp, $email);<br /><br />   // get mx addresses by getmxrr<br />   $b_mx_avail=getmxrr( $hostname, $mx_records, $mx_weight );<br />   $b_server_found=0;<br /><br />   if($b_valid_syntax &amp;&amp; $b_mx_avail){<br />     // copy mx records and weight into array $mxs<br />     $mxs=array();<br /><br />     for($i=0;$i&lt;count($mx_records);$i++){<br />       $mxs[$mx_weight[$i]]=$mx_records[$i];<br />     }<br /><br />     // sort array mxs to get servers with highest prio<br />     ksort ($mxs, SORT_NUMERIC );<br />     reset ($mxs);<br /><br />     while (list ($mx_weight, $mx_host) = each ($mxs) ) {<br />       if($b_server_found == 0){<br /><br />         //try connection on port 25<br />         $fp = @fsockopen($mx_host,25, $errno, $errstr, 2);<br />         if($fp){<br />           $ms_resp="";<br />           // say HELO to mailserver<br />           $ms_resp.=send_command($fp, "HELO microsoft.com");<br /><br />           // initialize sending mail <br />           $ms_resp.=send_command($fp, "MAIL FROM:&lt;support@microsoft.com&gt;");<br /><br />           // try receipent address, will return 250 when ok..<br />           $rcpt_text=send_command($fp, "RCPT TO:&lt;".$email."&gt;");<br />           $ms_resp.=$rcpt_text;<br />           <br />           if(substr( $rcpt_text, 0, 3) == "250")<br />             $b_server_found=1;<br /><br />           // quit mail server connection<br />           $ms_resp.=send_command($fp, "QUIT");<br /><br />         fclose($fp);<br /><br />         }<br /><br />       }<br />    }<br />  }<br />  return $b_server_found;<br />}<br /><br />function send_command($fp, $out){<br /><br />  fwrite($fp, $out . "\r\n");<br />  return get_data($fp);<br />}<br /><br />function get_data($fp){<br />  $s="";<br />  stream_set_timeout($fp, 2);<br /><br />  for($i=0;$i&lt;2;$i++)<br />    $s.=fgets($fp, 1024);<br /><br />  return $s;<br />}<br /><br />// support windows platforms<br />if (!function_exists ('getmxrr') ) {<br />  function getmxrr($hostname, &amp;$mxhosts, &amp;$mxweight) {<br />    if (!is_array ($mxhosts) ) {<br />      $mxhosts = array ();<br />    }<br /><br />    if (!empty ($hostname) ) {<br />      $output = "";<br />      @exec ("nslookup.exe -type=MX $hostname.", $output);<br />      $imx=-1;<br /><br />      foreach ($output as $line) {<br />        $imx++;<br />        $parts = "";<br />        if (preg_match ("/^$hostname\tMX preference = ([0-9]+), mail exchanger = (.*)$/", $line, $parts) ) {<br />          $mxweight[$imx] = $parts[1];<br />          $mxhosts[$imx] = $parts[2];<br />        }<br />      }<br />      return ($imx!=-1);<br />    }<br />    return false;<br />  }<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="62745">  <div class="votes">
    <div id="Vu62745">
    <a href="/manual/vote-note.php?id=62745&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62745">
    <a href="/manual/vote-note.php?id=62745&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62745" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#62745" class="name">
  <strong class="user"><em>jeff at pzenix dot com</em></strong></a><a class="genanchor" href="#62745"> &para;</a><div class="date" title="2006-03-08 09:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62745">
<div class="phpcode"><code><span class="html">I should point out that the below example won't work with some domains (.co.uk, .org.uk, .net.uk for example) because it assumes (possibly incorrectly) that the format is [ DOMAIN ].[ EXT ].</span></code></div>
  </div>
 </div>
  <div class="note" id="79782">  <div class="votes">
    <div id="Vu79782">
    <a href="/manual/vote-note.php?id=79782&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79782">
    <a href="/manual/vote-note.php?id=79782&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79782" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#79782" class="name">
  <strong class="user"><em>TZ at inpetho dot net</em></strong></a><a class="genanchor" href="#79782"> &para;</a><div class="date" title="2007-12-12 10:35"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79782">
<div class="phpcode"><code><span class="html">If greylisting is installed on the mx host then he send a "451 4.7.1 Please try again later"<br /><br />My code fragment:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//...<br /></span><span class="keyword">foreach (</span><span class="default">$mx_records </span><span class="keyword">as </span><span class="default">$mx_host</span><span class="keyword">) {<br />    </span><span class="default">$code </span><span class="keyword">= </span><span class="default">CheckMX</span><span class="keyword">(</span><span class="default">$mx_host</span><span class="keyword">, </span><span class="default">$eMail</span><span class="keyword">);<br />    if (</span><span class="default">$code </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">)    continue; </span><span class="comment">// host not found<br />    </span><span class="keyword">if (</span><span class="default">$code </span><span class="keyword">== </span><span class="default">451</span><span class="keyword">)    </span><span class="default">$code </span><span class="keyword">= </span><span class="default">CheckMX</span><span class="keyword">(</span><span class="default">$mx_host</span><span class="keyword">, </span><span class="default">$eMail</span><span class="keyword">); </span><span class="comment">// Greylisting<br />    </span><span class="keyword">if (</span><span class="default">$code </span><span class="keyword">== </span><span class="default">250</span><span class="keyword">)    {<br />        </span><span class="default">$ok </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        break;<br />    }<br />}<br /></span><span class="comment">//...<br /><br /></span><span class="keyword">function </span><span class="default">CheckMX</span><span class="keyword">(</span><span class="default">$mx_host</span><span class="keyword">, </span><span class="default">$eMail</span><span class="keyword">)<br />{<br />    </span><span class="default">$code </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$fp </span><span class="keyword">= @</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$mx_host</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />    if (</span><span class="default">$fp</span><span class="keyword">)    {<br />        </span><span class="default">send_command</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">'HELO microsoft.com'</span><span class="keyword">);<br />        </span><span class="default">send_command</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">'MAIL FROM:&lt;support@microsoft.com&gt;'</span><span class="keyword">);<br />        </span><span class="default">$erg </span><span class="keyword">= </span><span class="default">send_command</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">'RCPT TO:&lt;'</span><span class="keyword">.</span><span class="default">$eMail</span><span class="keyword">.</span><span class="string">'&gt;'</span><span class="keyword">);<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        </span><span class="default">$code </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$erg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">));<br />    }<br />    return </span><span class="default">$code</span><span class="keyword">;<br />}<br /></span><span class="comment">//...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49251">  <div class="votes">
    <div id="Vu49251">
    <a href="/manual/vote-note.php?id=49251&amp;page=function.getmxrr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49251">
    <a href="/manual/vote-note.php?id=49251&amp;page=function.getmxrr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49251" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#49251" class="name">
  <strong class="user"><em>rolf at rowi dot net</em></strong></a><a class="genanchor" href="#49251"> &para;</a><div class="date" title="2005-01-21 06:36"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49251">
<div class="phpcode"><code><span class="html">Be aware that not just user@example.com ist a valid address, also user@subnet.example.com is valid (but maybe less common). Just got into trouble with this check...<br /><br />Rolf</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.getmxrr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.getmxrr.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
