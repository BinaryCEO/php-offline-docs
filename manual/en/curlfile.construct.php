<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: CURLFile::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/curlfile.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/curlfile.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/curlfile.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.curlfile.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.curlfile.php">
 <link rel="next" href="https://www.php.net/manual/en/curlfile.getfilename.php">

 <link rel="alternate" href="https://www.php.net/manual/en/curlfile.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/curlfile.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/curlfile.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/curlfile.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/curlfile.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/curlfile.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/curlfile.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/curlfile.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/curlfile.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/curlfile.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/curlfile.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a CURLFile object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: CURLFile::__construct - Manual" />
<meta name="twitter:description" content="Create a CURLFile object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: CURLFile::__construct - Manual" />
<meta itemprop="description" content="Create a CURLFile object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a CURLFile object" />

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
        <a href="curlfile.getfilename.php">
          CURLFile::getFilename &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.curlfile.php">
          &laquo; CURLFile        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.curl.php'>cURL</a></li>      <li><a href='class.curlfile.php'>CURLFile</a></li>      </ul>
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
            <option value='en/curlfile.construct.php' selected="selected">English</option>
            <option value='de/curlfile.construct.php'>German</option>
            <option value='es/curlfile.construct.php'>Spanish</option>
            <option value='fr/curlfile.construct.php'>French</option>
            <option value='it/curlfile.construct.php'>Italian</option>
            <option value='ja/curlfile.construct.php'>Japanese</option>
            <option value='pt_BR/curlfile.construct.php'>Brazilian Portuguese</option>
            <option value='ru/curlfile.construct.php'>Russian</option>
            <option value='tr/curlfile.construct.php'>Turkish</option>
            <option value='uk/curlfile.construct.php'>Ukrainian</option>
            <option value='zh/curlfile.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="curlfile.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">CURLFile::__construct</h1>
  <h1 class="refname">curl_file_create</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">CURLFile::__construct</span> -- <span class="refname">curl_file_create</span> &mdash; <span class="dc-title">Create a CURLFile object</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-curlfile.construct-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>CURLFile::__construct</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$mime_type</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$posted_filename</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>curl_file_create</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$mime_type</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$posted_filename</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.curlfile.php" class="type CURLFile">CURLFile</a></span></div>

  <p class="para rdfs-comment">
   Creates a <span class="classname"><a href="class.curlfile.php" class="classname">CURLFile</a></span> object, used to upload a file with <strong><code><a href="curl.constants.php#constant.curlopt-postfields">CURLOPT_POSTFIELDS</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-curlfile.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">filename</code></dt>
    <dd>
     <p class="para">
      Path to the file which will be uploaded.
     </p>
    </dd>
   
   
    <dt><code class="parameter">mime_type</code></dt>
    <dd>
     <p class="para">
      Mimetype of the file.
     </p>
    </dd>
   
   
    <dt><code class="parameter">posted_filename</code></dt>
    <dd>
     <p class="para">
      Name of the file to be used in the upload data.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-curlfile.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a <span class="classname"><a href="class.curlfile.php" class="classname">CURLFile</a></span> object.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-curlfile.construct-changelog">
  <h3 class="title">Changelog</h3>
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
       <code class="parameter">mime_type</code> and <code class="parameter">posted_filename</code>
       are nullable now; previously their default was <code class="literal">0</code>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-curlfile.construct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-4507">
   <p><strong>Example #1 <span class="function"><strong>CURLFile::__construct()</strong></span> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* http://example.com/upload.php:<br />&lt;?php var_dump($_FILES); ?&gt;<br />*/<br /><br />// Create a cURL handle<br /></span><span style="color: #0000BB">$ch </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://example.com/upload.php'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Create a CURLFile object<br /></span><span style="color: #0000BB">$cfile </span><span style="color: #007700">= new </span><span style="color: #0000BB">CURLFile</span><span style="color: #007700">(</span><span style="color: #DD0000">'cats.jpg'</span><span style="color: #007700">,</span><span style="color: #DD0000">'image/jpeg'</span><span style="color: #007700">,</span><span style="color: #DD0000">'test_name'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Assign POST data<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'test_file' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$cfile</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_POST</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_POSTFIELDS</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Execute the handle<br /></span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* http://example.com/upload.php:<br />&lt;?php var_dump($_FILES); ?&gt;<br />*/<br /><br />// Create a cURL handle<br /></span><span style="color: #0000BB">$ch </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://example.com/upload.php'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Create a CURLFile object<br /></span><span style="color: #0000BB">$cfile </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_file_create</span><span style="color: #007700">(</span><span style="color: #DD0000">'cats.jpg'</span><span style="color: #007700">,</span><span style="color: #DD0000">'image/jpeg'</span><span style="color: #007700">,</span><span style="color: #DD0000">'test_name'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Assign POST data<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'test_file' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$cfile</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_POST</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_POSTFIELDS</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Execute the handle<br /></span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(1) {
  [&quot;test_file&quot;]=&gt;
  array(5) {
    [&quot;name&quot;]=&gt;
    string(9) &quot;test_name&quot;
    [&quot;type&quot;]=&gt;
    string(10) &quot;image/jpeg&quot;
    [&quot;tmp_name&quot;]=&gt;
    string(14) &quot;/tmp/phpPC9Kbx&quot;
    [&quot;error&quot;]=&gt;
    int(0)
    [&quot;size&quot;]=&gt;
    int(46334)
  }
}</pre>
</div>
   </div>
  </div>
  <div class="example" id="example-4508">
   <p><strong>Example #2 <span class="function"><strong>CURLFile::__construct()</strong></span> uploading multiple files example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$request </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/upload.php'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_POST</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_SAFE_UPLOAD</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_POSTFIELDS</span><span style="color: #007700">, [<br />    </span><span style="color: #DD0000">'blob[0]' </span><span style="color: #007700">=&gt; new </span><span style="color: #0000BB">CURLFile</span><span style="color: #007700">(</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'first-file.jpg'</span><span style="color: #007700">), </span><span style="color: #DD0000">'image/jpeg'</span><span style="color: #007700">),<br />    </span><span style="color: #DD0000">'blob[1]' </span><span style="color: #007700">=&gt; new </span><span style="color: #0000BB">CURLFile</span><span style="color: #007700">(</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'second-file.txt'</span><span style="color: #007700">), </span><span style="color: #DD0000">'text/plain'</span><span style="color: #007700">),<br />    </span><span style="color: #DD0000">'blob[2]' </span><span style="color: #007700">=&gt; new </span><span style="color: #0000BB">CURLFile</span><span style="color: #007700">(</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'third-file.exe'</span><span style="color: #007700">), </span><span style="color: #DD0000">'application/octet-stream'</span><span style="color: #007700">),<br />]);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_RETURNTRANSFER</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">curl_getinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">curl_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// procedural<br /></span><span style="color: #0000BB">$request </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/upload.php'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_POST</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">); <br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_SAFE_UPLOAD</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_POSTFIELDS</span><span style="color: #007700">, [<br />    </span><span style="color: #DD0000">'blob[0]' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">curl_file_create</span><span style="color: #007700">(</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'first-file.jpg'</span><span style="color: #007700">), </span><span style="color: #DD0000">'image/jpeg'</span><span style="color: #007700">),<br />    </span><span style="color: #DD0000">'blob[1]' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">curl_file_create</span><span style="color: #007700">(</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'second-file.txt'</span><span style="color: #007700">), </span><span style="color: #DD0000">'text/plain'</span><span style="color: #007700">),<br />    </span><span style="color: #DD0000">'blob[2]' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">curl_file_create</span><span style="color: #007700">(</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'third-file.exe'</span><span style="color: #007700">), </span><span style="color: #DD0000">'application/octet-stream'</span><span style="color: #007700">),<br />]);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_RETURNTRANSFER</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">curl_getinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">curl_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(26) {
  [&quot;url&quot;]=&gt;
  string(31) &quot;http://www.example.com/upload.php&quot;
  [&quot;content_type&quot;]=&gt;
  string(24) &quot;text/html; charset=UTF-8&quot;
  [&quot;http_code&quot;]=&gt;
  int(200)
  [&quot;header_size&quot;]=&gt;
  int(198)
  [&quot;request_size&quot;]=&gt;
  int(196)
  [&quot;filetime&quot;]=&gt;
  int(-1)
  [&quot;ssl_verify_result&quot;]=&gt;
  int(0)
  [&quot;redirect_count&quot;]=&gt;
  int(0)
  [&quot;total_time&quot;]=&gt;
  float(0.060062)
  [&quot;namelookup_time&quot;]=&gt;
  float(0.028575)
  [&quot;connect_time&quot;]=&gt;
  float(0.029011)
  [&quot;pretransfer_time&quot;]=&gt;
  float(0.029121)
  [&quot;size_upload&quot;]=&gt;
  float(3230730)
  [&quot;size_download&quot;]=&gt;
  float(811)
  [&quot;speed_download&quot;]=&gt;
  float(13516)
  [&quot;speed_upload&quot;]=&gt;
  float(53845500)
  [&quot;download_content_length&quot;]=&gt;
  float(811)
  [&quot;upload_content_length&quot;]=&gt;
  float(3230730)
  [&quot;starttransfer_time&quot;]=&gt;
  float(0.030355)
  [&quot;redirect_time&quot;]=&gt;
  float(0)
  [&quot;redirect_url&quot;]=&gt;
  string(0) &quot;&quot;
  [&quot;primary_ip&quot;]=&gt;
  string(13) &quot;0.0.0.0&quot;
  [&quot;certinfo&quot;]=&gt;
  array(0) {
  }
  [&quot;primary_port&quot;]=&gt;
  int(80)
  [&quot;local_ip&quot;]=&gt;
  string(12) &quot;0.0.0.0&quot;
  [&quot;local_port&quot;]=&gt;
  int(34856)
}</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-curlfile.construct-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.curl-setopt.php" class="function" rel="rdfs-seeAlso">curl_setopt()</a> - Set an option for a cURL transfer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/curlfile/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcurlfile.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=curlfile.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/curlfile.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115160">  <div class="votes">
    <div id="Vu115160">
    <a href="/manual/vote-note.php?id=115160&amp;page=curlfile.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115160">
    <a href="/manual/vote-note.php?id=115160&amp;page=curlfile.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115160" title="60% like this...">
    7
    </div>
  </div>
  <a href="#115160" class="name">
  <strong class="user"><em>CertaiN</em></strong></a><a class="genanchor" href="#115160"> &para;</a><div class="date" title="2014-06-04 04:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115160">
<div class="phpcode"><code><span class="html">There are "@" issue on multipart POST requests.<br /><br />Solution for PHP 5.5 or later:<br />- Enable CURLOPT_SAFE_UPLOAD.<br />- Use CURLFile instead of "@".<br /><br />Solution for PHP 5.4 or earlier:<br />- Build up multipart content body by youself.<br />- Change "Content-Type" header by yourself.<br /><br />The following snippet will help you :D<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * For safe multipart POST request for PHP5.3 ~ PHP 5.4.<br /> * <br /> * @param resource $ch cURL resource<br /> * @param array $assoc "name =&gt; value"<br /> * @param array $files "name =&gt; path"<br /> * @return bool<br /> */<br /></span><span class="keyword">function </span><span class="default">curl_custom_postfields</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, array </span><span class="default">$assoc </span><span class="keyword">= array(), array </span><span class="default">$files </span><span class="keyword">= array()) {<br />    <br />    </span><span class="comment">// invalid characters for "name" and "filename"<br />    </span><span class="keyword">static </span><span class="default">$disallow </span><span class="keyword">= array(</span><span class="string">"\0"</span><span class="keyword">, </span><span class="string">"\""</span><span class="keyword">, </span><span class="string">"\r"</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">);<br />    <br />    </span><span class="comment">// build normal parameters<br />    </span><span class="keyword">foreach (</span><span class="default">$assoc </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />        </span><span class="default">$k </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$disallow</span><span class="keyword">, </span><span class="string">"_"</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">);<br />        </span><span class="default">$body</span><span class="keyword">[] = </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\r\n"</span><span class="keyword">, array(<br />            </span><span class="string">"Content-Disposition: form-data; name=\"</span><span class="keyword">{</span><span class="default">$k</span><span class="keyword">}</span><span class="string">\""</span><span class="keyword">,<br />            </span><span class="string">""</span><span class="keyword">,<br />            </span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">), <br />        ));<br />    }<br />    <br />    </span><span class="comment">// build file parameters<br />    </span><span class="keyword">foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />        switch (</span><span class="default">true</span><span class="keyword">) {<br />            case </span><span class="default">false </span><span class="keyword">=== </span><span class="default">$v </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)):<br />            case !</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">):<br />            case !</span><span class="default">is_readable</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">):<br />                continue; </span><span class="comment">// or return false, throw new InvalidArgumentException<br />        </span><span class="keyword">}<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);<br />        </span><span class="default">$v </span><span class="keyword">= </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="string">"end"</span><span class="keyword">, </span><span class="default">explode</span><span class="keyword">(</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">));<br />        </span><span class="default">$k </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$disallow</span><span class="keyword">, </span><span class="string">"_"</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">);<br />        </span><span class="default">$v </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$disallow</span><span class="keyword">, </span><span class="string">"_"</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">);<br />        </span><span class="default">$body</span><span class="keyword">[] = </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\r\n"</span><span class="keyword">, array(<br />            </span><span class="string">"Content-Disposition: form-data; name=\"</span><span class="keyword">{</span><span class="default">$k</span><span class="keyword">}</span><span class="string">\"; filename=\"</span><span class="keyword">{</span><span class="default">$v</span><span class="keyword">}</span><span class="string">\""</span><span class="keyword">,<br />            </span><span class="string">"Content-Type: application/octet-stream"</span><span class="keyword">,<br />            </span><span class="string">""</span><span class="keyword">,<br />            </span><span class="default">$data</span><span class="keyword">, <br />        ));<br />    }<br />    <br />    </span><span class="comment">// generate safe boundary <br />    </span><span class="keyword">do {<br />        </span><span class="default">$boundary </span><span class="keyword">= </span><span class="string">"---------------------" </span><span class="keyword">. </span><span class="default">md5</span><span class="keyword">(</span><span class="default">mt_rand</span><span class="keyword">() . </span><span class="default">microtime</span><span class="keyword">());<br />    } while (</span><span class="default">preg_grep</span><span class="keyword">(</span><span class="string">"/</span><span class="keyword">{</span><span class="default">$boundary</span><span class="keyword">}</span><span class="string">/"</span><span class="keyword">, </span><span class="default">$body</span><span class="keyword">));<br />    <br />    </span><span class="comment">// add boundary for each parameters<br />    </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">, function (&amp;</span><span class="default">$part</span><span class="keyword">) use (</span><span class="default">$boundary</span><span class="keyword">) {<br />        </span><span class="default">$part </span><span class="keyword">= </span><span class="string">"--</span><span class="keyword">{</span><span class="default">$boundary</span><span class="keyword">}</span><span class="string">\r\n</span><span class="keyword">{</span><span class="default">$part</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">;<br />    });<br />    <br />    </span><span class="comment">// add final boundary<br />    </span><span class="default">$body</span><span class="keyword">[] = </span><span class="string">"--</span><span class="keyword">{</span><span class="default">$boundary</span><span class="keyword">}</span><span class="string">--"</span><span class="keyword">;<br />    </span><span class="default">$body</span><span class="keyword">[] = </span><span class="string">""</span><span class="keyword">;<br />    <br />    </span><span class="comment">// set options<br />    </span><span class="keyword">return @</span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, array(<br />        </span><span class="default">CURLOPT_POST       </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_POSTFIELDS </span><span class="keyword">=&gt; </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="default">$body</span><span class="keyword">),<br />        </span><span class="default">CURLOPT_HTTPHEADER </span><span class="keyword">=&gt; array(<br />            </span><span class="string">"Expect: 100-continue"</span><span class="keyword">,<br />            </span><span class="string">"Content-Type: multipart/form-data; boundary=</span><span class="keyword">{</span><span class="default">$boundary</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">, </span><span class="comment">// change Content-Type<br />        </span><span class="keyword">),<br />    ));<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114539">  <div class="votes">
    <div id="Vu114539">
    <a href="/manual/vote-note.php?id=114539&amp;page=curlfile.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114539">
    <a href="/manual/vote-note.php?id=114539&amp;page=curlfile.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114539" title="38% like this...">
    -5
    </div>
  </div>
  <a href="#114539" class="name">
  <strong class="user"><em>mipa</em></strong></a><a class="genanchor" href="#114539"> &para;</a><div class="date" title="2014-03-04 08:33"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114539">
<div class="phpcode"><code><span class="html">For PHP &lt; 5.5:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'curl_file_create'</span><span class="keyword">)) {<br />    function </span><span class="default">curl_file_create</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$mimetype </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$postname </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">) {<br />        return </span><span class="string">"@</span><span class="default">$filename</span><span class="string">;filename="<br />            </span><span class="keyword">. (</span><span class="default">$postname </span><span class="keyword">?: </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">))<br />            . (</span><span class="default">$mimetype </span><span class="keyword">? </span><span class="string">";type=</span><span class="default">$mimetype</span><span class="string">" </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=curlfile.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/curlfile.construct.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.curlfile.php">CURLFile</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="curlfile.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="curlfile.getfilename.php" title="getFilename">getFilename</a>
                        </li>
                                                <li class="">
                            <a href="curlfile.getmimetype.php" title="getMimeType">getMimeType</a>
                        </li>
                                                <li class="">
                            <a href="curlfile.getpostfilename.php" title="getPostFilename">getPostFilename</a>
                        </li>
                                                <li class="">
                            <a href="curlfile.setmimetype.php" title="setMimeType">setMimeType</a>
                        </li>
                                                <li class="">
                            <a href="curlfile.setpostfilename.php" title="setPostFilename">setPostFilename</a>
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
