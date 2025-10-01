<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: yaz_record - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.yaz-record.php">
 <link rel="shorturl" href="https://www.php.net/yaz-record">
 <link rel="alternate" href="https://www.php.net/yaz-record" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.yaz.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.yaz-range.php">
 <link rel="next" href="https://www.php.net/manual/en/function.yaz-scan.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.yaz-record.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.yaz-record.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.yaz-record.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.yaz-record.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.yaz-record.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.yaz-record.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.yaz-record.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.yaz-record.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.yaz-record.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.yaz-record.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.yaz-record.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns a record" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: yaz_record - Manual" />
<meta name="twitter:description" content="Returns a record" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: yaz_record - Manual" />
<meta itemprop="description" content="Returns a record" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns a record" />

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
        <a href="function.yaz-scan.php">
          yaz_scan &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.yaz-range.php">
          &laquo; yaz_range        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.yaz.php'>YAZ</a></li>      <li><a href='ref.yaz.php'>YAZ Functions</a></li>      </ul>
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
            <option value='en/function.yaz-record.php' selected="selected">English</option>
            <option value='de/function.yaz-record.php'>German</option>
            <option value='es/function.yaz-record.php'>Spanish</option>
            <option value='fr/function.yaz-record.php'>French</option>
            <option value='it/function.yaz-record.php'>Italian</option>
            <option value='ja/function.yaz-record.php'>Japanese</option>
            <option value='pt_BR/function.yaz-record.php'>Brazilian Portuguese</option>
            <option value='ru/function.yaz-record.php'>Russian</option>
            <option value='tr/function.yaz-record.php'>Turkish</option>
            <option value='uk/function.yaz-record.php'>Ukrainian</option>
            <option value='zh/function.yaz-record.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.yaz-record" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">yaz_record</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.1, PECL yaz &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">yaz_record</span> &mdash; <span class="dc-title">Returns a record</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.yaz-record-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>yaz_record</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$id</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$pos</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$type</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>yaz_record()</strong></span> function inspects a record in the
   current result set at the position specified by parameter
   <code class="parameter">pos</code>. 
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.yaz-record-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">id</code></dt>
     <dd>
      <p class="para">
       The connection resource returned by <span class="function"><a href="function.yaz-connect.php" class="function">yaz_connect()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">pos</code></dt>
     <dd>
      <p class="para">
       The record position. Records positions in a result set are numbered 1,
       2, ... $hits where $hits is the count returned by <span class="function"><a href="function.yaz-hits.php" class="function">yaz_hits()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">type</code> specifies the form of the
       returned record.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        It is the application which is responsible for actually
        ensuring that the records are returned from the Z39.50/SRW server
        in the proper format. The type given only specifies a conversion
        to take place on the client side (in PHP/YAZ).
       </p>
      </p></blockquote>
      <p class="para">
       Besides conversion of the transfer record to a string/array, PHP/YAZ
       it is also possible to perform a character set conversion of the
       record. Especially for USMARC/MARC21 that is recommended since
       these are typically returned in the character set MARC-8 that is
       not supported by browsers, etc. To specify a conversion, add
       <code class="literal">; charset=</code><span class="replaceable">from</span><code class="literal">,
       </code><span class="replaceable">to</span> where
       <span class="replaceable">from</span> is the original character set 
       of the record and <span class="replaceable">to</span> is the resulting character
       set (as seen by PHP).
      </p>
      <dl>
       
        <dt><code class="literal">string</code></dt>
        <dd>
         <p class="para">
          The record is returned as a string for simple display.
          In this mode, all MARC records are converted to a line-by-line format
          since ISO2709 is hardly readable.
          XML records and SUTRS are returned in their original format.
          GRS-1 are returned in a (ugly) line-by-line format.
         </p>
         <p class="para">
          This format is suitable if records are to be displayed in a quick
          way - for debugging - or because it is not feasible to perform
          proper display.
         </p>
        </dd>
       
       
        <dt><code class="literal">xml</code></dt>
        <dd>
         <p class="para">
          The record is returned as an XML string if possible.
          In this mode, all MARC records are converted to 
          <a href="http://www.loc.gov/standards/marcxml/" class="link external">&raquo;&nbsp;MARCXML</a>.
          XML records and SUTRS are returned in their original format.
          GRS-1 is not supported.
         </p>
         <p class="para">
          This format is similar to <code class="parameter">string</code> except that
          MARC records are converted to MARCXML
         </p>
         <p class="para">
          This format is suitable if records are processed by an XML parser
          or XSLT processor afterwards.
         </p>
        </dd>
       
       
        <dt><code class="literal">raw</code></dt>
        <dd>
         <p class="para">
          The record is returned as a string in its original form.
          This type is suitable for MARC, XML and SUTRS. It does not
          work for GRS-1.
         </p>
         <p class="para">
          MARC records are returned as a ISO2709 string. XML and SUTRS are
          returned as strings.
         </p>
        </dd>
       
       
        <dt><code class="literal">syntax</code></dt>
        <dd>
         <p class="para">
          The syntax of the record is returned as a string, i.e.
          <code class="literal">USmarc</code>, <code class="literal">GRS-1</code>,
          <code class="literal">XML</code>, etc.
         </p>
        </dd>
       
       
        <dt><code class="literal">database</code></dt>
        <dd>
         <p class="para">
          The name of database associated with record at the position
          is returned as a string.
         </p>
        </dd>
       
       
        <dt><code class="literal">array</code></dt>
        <dd>
         <p class="para">
          The record is returned as an array that reflects the GRS-1
          structure. This type is suitable for MARC and GRS-1. XML, SUTRS
          are not supported and if the actual record is XML or SUTRS an
          empty string will be returned.
         </p>
         <p class="para">
          The array returned consists of a list corresponding to
          each leaf/internal node of GRS-1. Each list item consists
          a sub list with first element <em>path</em> and
          <em>data</em> (if data is available).
         </p>
         <p class="para">
          The path which is a string holds a list of each tree component (of
          the structured GRS-1 record) from root to leaf. Each component is
          a tag type, tag value pair of the form
          <code class="literal">(</code><span class="replaceable">type</span><code class="literal">,</code>
          <span class="replaceable">value</span>
         </p>
         <p class="para">
          String tags normally has a corresponding tag type 3.
          MARC can also be returned as an array (they are converted to
          GRS-1 internally).
         </p>
        </dd>
       
      </dl>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.yaz-record-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">    
   Returns the record at position <code class="parameter">pos</code> or an empty
   string if no record exists at the given position.
  </p>
  <p class="para">
   If no database record exists at the given position an empty string is 
   returned.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.yaz-record-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-4889">
   <p><strong>Example #1 Array for GRS-1 record</strong></p>
   <div class="example-contents"><p>
    Consider this GRS-1 record:
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">(4,52)Robert M. Pirsig
(4,70)
      (4,90)
            (2,7)Transworld Publishers, ltd.</pre>
</div>
    </div>
    This record has two nodes at root level. First element at root level is
    (4,52) [tag type 4, tag value 52], and has data <code class="literal">Robert M. 
    Pirsig</code>. Second element at root level (4,70) has a subtree with
    a single element (4,90). (4,90) has yet another sub tree (2,7) with data
    <code class="literal">Transworld Publishers, ltd.</code>.
   </p></div>
   <div class="example-contents"><p>
    If this record is present at position $p, then
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$ar </span><span style="color: #007700">= </span><span style="color: #0000BB">yaz_record</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$p</span><span style="color: #007700">, </span><span style="color: #DD0000">"array"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$ar</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    will output:
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [0] =&gt; Array
        (
            [0] =&gt; (4,52)
            [1] =&gt; Robert M. Pirsig
        )
    [1] =&gt; Array
        (
            [0] =&gt; (4,70)
        )
    [2] =&gt; Array
        (
            [0] =&gt; (4,70)(4,90)
        )
    [3] =&gt; Array
        (
            [0] =&gt; (4,70)(4,90)(2,7)
            [1] =&gt; Transworld Publishers, ltd.
        )
)</pre>
</div>
    </div>
   </p></div>
  </div>
  <div class="example" id="example-4890">
   <p><strong>Example #2 Working with MARCXML</strong></p>
   <div class="example-contents"><p>
    The following PHP snippet returns a MARC21/USMARC record as MARCXML. 
    The original record is returned in marc-8 (unknown to most XML parsers),
    so we convert it to UTF-8 (which all XML parsers must support).
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$rec </span><span style="color: #007700">= </span><span style="color: #0000BB">yaz_record</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$p</span><span style="color: #007700">, </span><span style="color: #DD0000">"xml; charset=marc-8,utf-8"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </p></div>
   <div class="example-contents"><p>
    The record <code class="literal">$rec</code> can be processed with the 
    Sablotron XSLT processor as follows:
   </p></div>
   <div class="example-contents"><p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$xslfile </span><span style="color: #007700">= </span><span style="color: #DD0000">'display.xsl'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$processor </span><span style="color: #007700">= </span><span style="color: #0000BB">xslt_create</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$parms </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'/_xml' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$rec</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">xslt_process</span><span style="color: #007700">(</span><span style="color: #0000BB">$processor</span><span style="color: #007700">, </span><span style="color: #DD0000">'arg:/_xml'</span><span style="color: #007700">, </span><span style="color: #0000BB">$xslfile</span><span style="color: #007700">, </span><span style="color: #0000BB">NULL</span><span style="color: #007700">, </span><span style="color: #0000BB">$parms</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">xslt_free</span><span style="color: #007700">(</span><span style="color: #0000BB">$processor</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">"'&lt;/?html[^&gt;]*&gt;'"</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #0000BB">$res</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$res</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </p></div>
  </div>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/yaz/functions/yaz-record.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.yaz-record%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.yaz-record&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.yaz-record.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.yaz.php">YAZ Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.yaz-addinfo.php" title="yaz_&#8203;addinfo">yaz_&#8203;addinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-ccl-conf.php" title="yaz_&#8203;ccl_&#8203;conf">yaz_&#8203;ccl_&#8203;conf</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-ccl-parse.php" title="yaz_&#8203;ccl_&#8203;parse">yaz_&#8203;ccl_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-close.php" title="yaz_&#8203;close">yaz_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-connect.php" title="yaz_&#8203;connect">yaz_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-database.php" title="yaz_&#8203;database">yaz_&#8203;database</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-element.php" title="yaz_&#8203;element">yaz_&#8203;element</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-errno.php" title="yaz_&#8203;errno">yaz_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-error.php" title="yaz_&#8203;error">yaz_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-es.php" title="yaz_&#8203;es">yaz_&#8203;es</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-es-result.php" title="yaz_&#8203;es_&#8203;result">yaz_&#8203;es_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-get-option.php" title="yaz_&#8203;get_&#8203;option">yaz_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-hits.php" title="yaz_&#8203;hits">yaz_&#8203;hits</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-itemorder.php" title="yaz_&#8203;itemorder">yaz_&#8203;itemorder</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-present.php" title="yaz_&#8203;present">yaz_&#8203;present</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-range.php" title="yaz_&#8203;range">yaz_&#8203;range</a>
                        </li>
                                                <li class="current">
                            <a href="function.yaz-record.php" title="yaz_&#8203;record">yaz_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-scan.php" title="yaz_&#8203;scan">yaz_&#8203;scan</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-scan-result.php" title="yaz_&#8203;scan_&#8203;result">yaz_&#8203;scan_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-schema.php" title="yaz_&#8203;schema">yaz_&#8203;schema</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-search.php" title="yaz_&#8203;search">yaz_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-set-option.php" title="yaz_&#8203;set_&#8203;option">yaz_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-sort.php" title="yaz_&#8203;sort">yaz_&#8203;sort</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-syntax.php" title="yaz_&#8203;syntax">yaz_&#8203;syntax</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-wait.php" title="yaz_&#8203;wait">yaz_&#8203;wait</a>
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
