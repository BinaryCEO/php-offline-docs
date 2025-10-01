<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: inet_pton - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.inet-pton.php">
 <link rel="shorturl" href="https://www.php.net/inet-pton">
 <link rel="alternate" href="https://www.php.net/inet-pton" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.inet-ntop.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ip2long.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.inet-pton.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.inet-pton.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.inet-pton.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.inet-pton.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.inet-pton.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.inet-pton.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.inet-pton.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.inet-pton.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.inet-pton.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.inet-pton.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.inet-pton.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Converts a human readable IP address to its packed in_addr representation" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: inet_pton - Manual" />
<meta name="twitter:description" content="Converts a human readable IP address to its packed in_addr representation" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: inet_pton - Manual" />
<meta itemprop="description" content="Converts a human readable IP address to its packed in_addr representation" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Converts a human readable IP address to its packed in_addr representation" />

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
        <a href="function.ip2long.php">
          ip2long &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.inet-ntop.php">
          &laquo; inet_ntop        </a>
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
            <option value='en/function.inet-pton.php' selected="selected">English</option>
            <option value='de/function.inet-pton.php'>German</option>
            <option value='es/function.inet-pton.php'>Spanish</option>
            <option value='fr/function.inet-pton.php'>French</option>
            <option value='it/function.inet-pton.php'>Italian</option>
            <option value='ja/function.inet-pton.php'>Japanese</option>
            <option value='pt_BR/function.inet-pton.php'>Brazilian Portuguese</option>
            <option value='ru/function.inet-pton.php'>Russian</option>
            <option value='tr/function.inet-pton.php'>Turkish</option>
            <option value='uk/function.inet-pton.php'>Ukrainian</option>
            <option value='zh/function.inet-pton.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.inet-pton" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">inet_pton</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">inet_pton</span> &mdash; <span class="dc-title">Converts a human readable IP address to its packed in_addr representation</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.inet-pton-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>inet_pton</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$ip</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This function converts a human readable IPv4 or IPv6 address (if PHP
   was built with IPv6 support enabled) into an address family appropriate
   32bit or 128bit binary structure.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.inet-pton-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ip</code></dt>
     <dd>
      <p class="para">
       A human readable IPv4 or IPv6 address.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.inet-pton-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the <code class="literal">in_addr</code> representation of the given
   <code class="parameter">ip</code>, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if a syntactically invalid
   <code class="parameter">ip</code> is given (for example, an IPv4 address
   without dots or an IPv6 address without colons).
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.inet-pton-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4737">
    <p><strong>Example #1 <span class="function"><strong>inet_pton()</strong></span> Example</strong></p>
    <div class="example-contents">
 <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$in_addr </span><span style="color: #007700">= </span><span style="color: #0000BB">inet_pton</span><span style="color: #007700">(</span><span style="color: #DD0000">'127.0.0.1'</span><span style="color: #007700">);<br /> <br /></span><span style="color: #0000BB">$in6_addr </span><span style="color: #007700">= </span><span style="color: #0000BB">inet_pton</span><span style="color: #007700">(</span><span style="color: #DD0000">'::1'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>   
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.inet-pton-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ip2long.php" class="function" rel="rdfs-seeAlso">ip2long()</a> - Converts a string containing an (IPv4) Internet Protocol dotted address into a long integer</span></li>
    <li><span class="function"><a href="function.long2ip.php" class="function" rel="rdfs-seeAlso">long2ip()</a> - Converts a long integer address into a string in (IPv4) Internet standard dotted format</span></li>
    <li><span class="function"><a href="function.inet-ntop.php" class="function" rel="rdfs-seeAlso">inet_ntop()</a> - Converts a packed internet address to a human readable representation</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/inet-pton.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.inet-pton%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.inet-pton&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.inet-pton.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115139">  <div class="votes">
    <div id="Vu115139">
    <a href="/manual/vote-note.php?id=115139&amp;page=function.inet-pton&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115139">
    <a href="/manual/vote-note.php?id=115139&amp;page=function.inet-pton&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115139" title="72% like this...">
    17
    </div>
  </div>
  <a href="#115139" class="name">
  <strong class="user"><em>TuRn3r</em></strong></a><a class="genanchor" href="#115139"> &para;</a><div class="date" title="2014-06-02 03:26"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115139">
<div class="phpcode"><code><span class="html">Be careful, address with leading 0 return false.<br /><br />Example : <br /><span class="default">&lt;?php<br />inet_pton</span><span class="keyword">(</span><span class="string">'172.27.1.04'</span><span class="keyword">); </span><span class="comment">// return false<br /></span><span class="default">inet_pton</span><span class="keyword">(</span><span class="string">'172.27.1.4'</span><span class="keyword">) ;</span><span class="comment">// return the good result<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104917">  <div class="votes">
    <div id="Vu104917">
    <a href="/manual/vote-note.php?id=104917&amp;page=function.inet-pton&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104917">
    <a href="/manual/vote-note.php?id=104917&amp;page=function.inet-pton&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104917" title="73% like this...">
    12
    </div>
  </div>
  <a href="#104917" class="name">
  <strong class="user"><em>francis dot besset at gmail dot com</em></strong></a><a class="genanchor" href="#104917"> &para;</a><div class="date" title="2011-07-15 01:45"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104917">
<div class="phpcode"><code><span class="html">It is possible to verify if PHP was compiled with --disable-ipv6 option by AF_INET6 constant.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'AF_INET6'</span><span class="keyword">)) {<br />  echo </span><span class="string">"PHP was compiled without --disable-ipv6 option"</span><span class="keyword">;<br />} else {<br />  echo </span><span class="string">"PHP was compiled with --disable-ipv6 option"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="66191">  <div class="votes">
    <div id="Vu66191">
    <a href="/manual/vote-note.php?id=66191&amp;page=function.inet-pton&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66191">
    <a href="/manual/vote-note.php?id=66191&amp;page=function.inet-pton&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66191" title="77% like this...">
    10
    </div>
  </div>
  <a href="#66191" class="name">
  <strong class="user"><em>me at diogoresende dot net</em></strong></a><a class="genanchor" href="#66191"> &para;</a><div class="date" title="2006-05-16 02:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66191">
<div class="phpcode"><code><span class="html">If you want to use the above function you should test for ':' character before '.'. Meaning, you should check if it's an ipv6 address before checking for ipv4.<br />Why? IPv6 allows this type of notation:<br /><br />::127.0.0.1<br /><br />If you check for '.' character you will think this is an ipv4 address and it will fail.</span></code></div>
  </div>
 </div>
  <div class="note" id="125711">  <div class="votes">
    <div id="Vu125711">
    <a href="/manual/vote-note.php?id=125711&amp;page=function.inet-pton&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125711">
    <a href="/manual/vote-note.php?id=125711&amp;page=function.inet-pton&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125711" title="85% like this...">
    5
    </div>
  </div>
  <a href="#125711" class="name">
  <strong class="user"><em>admin at hanzlsoft dot eu</em></strong></a><a class="genanchor" href="#125711"> &para;</a><div class="date" title="2021-01-22 12:33"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125711">
<div class="phpcode"><code><span class="html">Regarding the ::127.0.0.1 notation<br /><br />It is a very special case that needs not to be handled. This kind of notation is reserved for ipv4-compatible ipv6 address. <br />For example the notation ::ffff:192.0.2.128 can be easily read as "ipv6 address that maps to ipv4 address 192.0.2.128"<br /><br />However as RFC says:<br /><a href="https://tools.ietf.org/html/rfc5156#page-2" rel="nofollow" target="_blank">https://tools.ietf.org/html/rfc5156#page-2</a><br /><br />2.2.  IPv4-Mapped Addresses<br /><br />   ::FFFF:0:0/96 are the IPv4-mapped addresses [RFC4291].  Addresses<br />   within this block should not appear on the public Internet.<br /><br />2.3.  IPv4-Compatible Addresses<br /><br />   ::&lt;ipv4-address&gt;/96 are the IPv4-compatible addresses [RFC4291].<br />   These addresses are deprecated and should not appear on the public<br />   Internet.<br /><br />This means that you only need to handle this kind of notation if you need to be compatible with private IP's</span></code></div>
  </div>
 </div>
  <div class="note" id="93501">  <div class="votes">
    <div id="Vu93501">
    <a href="/manual/vote-note.php?id=93501&amp;page=function.inet-pton&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93501">
    <a href="/manual/vote-note.php?id=93501&amp;page=function.inet-pton&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93501" title="65% like this...">
    10
    </div>
  </div>
  <a href="#93501" class="name">
  <strong class="user"><em>strata_ranger at hotmail dot com</em></strong></a><a class="genanchor" href="#93501"> &para;</a><div class="date" title="2009-09-13 10:51"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93501">
<div class="phpcode"><code><span class="html">If the input string is not a readable IP address, inet_pton() generates an E_WARNING and returns FALSE.  The same is true for inet_ntop().<br /><br />Also, inet_pton() does not recognize netmask notation (e.g: "1.2.3.4/24" or "1:2::3:4/64") in the input string.  This differs from how some database systems (like postgreSQL) support IP address types, so if you need that sort of functionality when processing IP addresses in PHP you'll have to write it in yourself.<br /><br />A rough example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Sample IP addresses<br /></span><span class="default">$ipaddr </span><span class="keyword">= </span><span class="string">'1.2.3.4/24'</span><span class="keyword">; </span><span class="comment">// IPv4 with /24 netmask<br /></span><span class="default">$ipaddr </span><span class="keyword">= </span><span class="string">'1:2::3:4/64'</span><span class="keyword">; </span><span class="comment">// IPv6 with /64 netmask<br /><br />// Strip out the netmask, if there is one.<br /></span><span class="default">$cx </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$ipaddr</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);<br />if (</span><span class="default">$cx</span><span class="keyword">)<br />{<br />  </span><span class="default">$subnet </span><span class="keyword">= (int)(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$ipaddr</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">));<br />  </span><span class="default">$ipaddr </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$ipaddr</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">);<br />}<br />else </span><span class="default">$subnet </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">; </span><span class="comment">// No netmask present<br /><br />// Convert address to packed format<br /></span><span class="default">$addr </span><span class="keyword">= </span><span class="default">inet_pton</span><span class="keyword">(</span><span class="default">$ipaddr</span><span class="keyword">);<br /><br /></span><span class="comment">// Let's display it as hexadecimal format<br /></span><span class="keyword">foreach(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$addr</span><span class="keyword">) as </span><span class="default">$char</span><span class="keyword">) echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">dechex</span><span class="keyword">(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">)), </span><span class="default">2</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />echo </span><span class="string">"&lt;br /&gt;\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// Convert the netmask<br /></span><span class="keyword">if (</span><span class="default">is_integer</span><span class="keyword">(</span><span class="default">$subnet</span><span class="keyword">))<br />{<br />  </span><span class="comment">// Maximum netmask length = same as packed address<br />  </span><span class="default">$len </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">*</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$addr</span><span class="keyword">);<br />  if (</span><span class="default">$subnet </span><span class="keyword">&gt; </span><span class="default">$len</span><span class="keyword">) </span><span class="default">$subnet </span><span class="keyword">= </span><span class="default">$len</span><span class="keyword">;<br />  <br />  </span><span class="comment">// Create a hex expression of the subnet mask<br />  </span><span class="default">$mask  </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'f'</span><span class="keyword">, </span><span class="default">$subnet</span><span class="keyword">&gt;&gt;</span><span class="default">2</span><span class="keyword">);<br />  switch(</span><span class="default">$subnet </span><span class="keyword">&amp; </span><span class="default">3</span><span class="keyword">)<br />  {<br />  case </span><span class="default">3</span><span class="keyword">: </span><span class="default">$mask </span><span class="keyword">.= </span><span class="string">'e'</span><span class="keyword">; break;<br />  case </span><span class="default">2</span><span class="keyword">: </span><span class="default">$mask </span><span class="keyword">.= </span><span class="string">'c'</span><span class="keyword">; break;<br />  case </span><span class="default">1</span><span class="keyword">: </span><span class="default">$mask </span><span class="keyword">.= </span><span class="string">'8'</span><span class="keyword">; break;<br />  }<br />  </span><span class="default">$mask </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$mask</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">&gt;&gt;</span><span class="default">2</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">);<br /><br />  </span><span class="comment">// Packed representation of netmask<br />  </span><span class="default">$mask </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">, </span><span class="default">$mask</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Display the netmask as hexadecimal<br /></span><span class="keyword">foreach(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$mask</span><span class="keyword">) as </span><span class="default">$char</span><span class="keyword">) echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">dechex</span><span class="keyword">(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">)), </span><span class="default">2</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116829">  <div class="votes">
    <div id="Vu116829">
    <a href="/manual/vote-note.php?id=116829&amp;page=function.inet-pton&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116829">
    <a href="/manual/vote-note.php?id=116829&amp;page=function.inet-pton&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116829" title="58% like this...">
    2
    </div>
  </div>
  <a href="#116829" class="name">
  <strong class="user"><em>dave at php dot net</em></strong></a><a class="genanchor" href="#116829"> &para;</a><div class="date" title="2015-03-06 04:07"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116829">
<div class="phpcode"><code><span class="html">If you are receiving an "Unrecognized address" error for an IPv6 address, it's possible your version of PHP has not been compiled with IPv6 support.<br /><br />To check, load up phpinfo(); and look to see if "IPv6 Support" is set to "disabled".</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.inet-pton&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.inet-pton.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
