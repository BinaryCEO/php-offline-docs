<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: CURLFile - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.curlfile.php">
 <link rel="shorturl" href="https://www.php.net/curlfile">
 <link rel="alternate" href="https://www.php.net/curlfile" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.curl.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.curlsharepersistenthandle.php">
 <link rel="next" href="https://www.php.net/manual/en/curlfile.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.curlfile.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.curlfile.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.curlfile.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.curlfile.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.curlfile.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.curlfile.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.curlfile.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.curlfile.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.curlfile.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.curlfile.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.curlfile.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The CURLFile class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: CURLFile - Manual" />
<meta name="twitter:description" content="The CURLFile class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: CURLFile - Manual" />
<meta itemprop="description" content="The CURLFile class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The CURLFile class" />

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
        <a href="curlfile.construct.php">
          CURLFile::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.curlsharepersistenthandle.php">
          &laquo; CurlSharePersistentHandle        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.curl.php'>cURL</a></li>      </ul>
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
            <option value='en/class.curlfile.php' selected="selected">English</option>
            <option value='de/class.curlfile.php'>German</option>
            <option value='es/class.curlfile.php'>Spanish</option>
            <option value='fr/class.curlfile.php'>French</option>
            <option value='it/class.curlfile.php'>Italian</option>
            <option value='ja/class.curlfile.php'>Japanese</option>
            <option value='pt_BR/class.curlfile.php'>Brazilian Portuguese</option>
            <option value='ru/class.curlfile.php'>Russian</option>
            <option value='tr/class.curlfile.php'>Turkish</option>
            <option value='uk/class.curlfile.php'>Ukrainian</option>
            <option value='zh/class.curlfile.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.curlfile" class="reference">

 <h1 class="title">The CURLFile class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p>


  <div class="section" id="curlfile.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    This class or <span class="classname"><a href="class.curlstringfile.php" class="classname">CURLStringFile</a></span> should be used to upload a file with
    <strong><code><a href="curl.constants.php#constant.curlopt-postfields">CURLOPT_POSTFIELDS</a></code></strong>.
   </p>
   <p class="para">
    Unserialization of <span class="classname"><strong class="classname">CURLFile</strong></span> instances is not allowed.
    As of PHP 7.4.0, serialization is forbidden in the first place.
   </p>
  </div>


  <div class="section" id="curlfile.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">CURLFile</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.curlfile.php#curlfile.props.name">$<var class="varname">name</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.curlfile.php#curlfile.props.mime">$<var class="varname">mime</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.curlfile.php#curlfile.props.postname">$<var class="varname">postname</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="curlfile.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$mime_type</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$posted_filename</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="curlfile.getfilename.php" class="methodname">getFilename</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="curlfile.getmimetype.php" class="methodname">getMimeType</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="curlfile.getpostfilename.php" class="methodname">getPostFilename</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="curlfile.setmimetype.php" class="methodname">setMimeType</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mime_type</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="curlfile.setpostfilename.php" class="methodname">setPostFilename</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$posted_filename</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>


  </div>

  

  <div class="section" id="curlfile.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="curlfile.props.name"><var class="varname">name</var></dt>
     <dd>
      <p class="para">Name of the file to be uploaded.</p>
     </dd>
    
    
     <dt id="curlfile.props.mime"><var class="varname">mime</var></dt>
     <dd>
      <p class="para">MIME type of the file (default is <code class="literal">application/octet-stream</code>).</p>
     </dd>
    
    
     <dt id="curlfile.props.postname"><var class="varname">postname</var></dt>
     <dd>
      <p class="para">The name of the file in the upload data (defaults to the <var class="varname">name</var> property).</p>
     </dd>
    
   </dl>
  </div>


  <div class="section" id="curlfile.seealso">
   <h2 class="title">See Also</h2>
   <p class="para">
    <ul class="simplelist">
     <li>
      <span class="function"><a href="function.curl-setopt.php" class="function">curl_setopt()</a></span>
     </li>
     <li><span class="classname"><a href="class.curlstringfile.php" class="classname">CURLStringFile</a></span></li>
    </ul>
   </p>
  </div>


 </div>

 






























<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="curlfile.construct.php">CURLFile::__construct</a> — Create a CURLFile object</li><li><a href="curlfile.getfilename.php">CURLFile::getFilename</a> — Get file name</li><li><a href="curlfile.getmimetype.php">CURLFile::getMimeType</a> — Get MIME type</li><li><a href="curlfile.getpostfilename.php">CURLFile::getPostFilename</a> — Get file name for POST</li><li><a href="curlfile.setmimetype.php">CURLFile::setMimeType</a> — Set MIME type</li><li><a href="curlfile.setpostfilename.php">CURLFile::setPostFilename</a> — Set file name for POST</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/curlfile.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.curlfile%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.curlfile&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.curlfile.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115569">  <div class="votes">
    <div id="Vu115569">
    <a href="/manual/vote-note.php?id=115569&amp;page=class.curlfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115569">
    <a href="/manual/vote-note.php?id=115569&amp;page=class.curlfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115569" title="62% like this...">
    27
    </div>
  </div>
  <a href="#115569" class="name">
  <strong class="user"><em>alin dot rzv at gmail dot com</em></strong></a><a class="genanchor" href="#115569"> &para;</a><div class="date" title="2014-08-18 01:37"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115569">
<div class="phpcode"><code><span class="html">i've seen some downvotes , here is a small example of using curl to upload image .<br /><br /><span class="default">&lt;?php<br />$target</span><span class="keyword">=</span><span class="string">"<a href="http://youraddress.tld/example/upload.php" rel="nofollow" target="_blank">http://youraddress.tld/example/upload.php</a>"</span><span class="keyword">;<br /><br /></span><span class="comment"># <a href="http://php.net/manual/en/curlfile.construct.php" rel="nofollow" target="_blank">http://php.net/manual/en/curlfile.construct.php</a><br /><br />// Create a CURLFile object / procedural method <br /></span><span class="default">$cfile </span><span class="keyword">= </span><span class="default">curl_file_create</span><span class="keyword">(</span><span class="string">'resource/test.png'</span><span class="keyword">,</span><span class="string">'image/png'</span><span class="keyword">,</span><span class="string">'testpic'</span><span class="keyword">); </span><span class="comment">// try adding <br /><br />// Create a CURLFile object / oop method <br />#$cfile = new CURLFile('resource/test.png','image/png','testpic'); // uncomment and use if the upper procedural method is not working.<br /><br />// Assign POST data<br /></span><span class="default">$imgdata </span><span class="keyword">= array(</span><span class="string">'myimage' </span><span class="keyword">=&gt; </span><span class="default">$cfile</span><span class="keyword">);<br /><br /></span><span class="default">$curl </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$target</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_USERAGENT</span><span class="keyword">,</span><span class="string">'Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15'</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">,array(</span><span class="string">'User-Agent: Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15'</span><span class="keyword">,</span><span class="string">'Referer: <a href="http://someaddress.tld" rel="nofollow" target="_blank">http://someaddress.tld</a>'</span><span class="keyword">,</span><span class="string">'Content-Type: multipart/form-data'</span><span class="keyword">));<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_SSL_VERIFYPEER</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">); </span><span class="comment">// stop verifying certificate<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); <br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_POST</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// enable posting<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$imgdata</span><span class="keyword">); </span><span class="comment">// post images <br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// if any redirection after upload<br /></span><span class="default">$r </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">); <br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115161">  <div class="votes">
    <div id="Vu115161">
    <a href="/manual/vote-note.php?id=115161&amp;page=class.curlfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115161">
    <a href="/manual/vote-note.php?id=115161&amp;page=class.curlfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115161" title="57% like this...">
    29
    </div>
  </div>
  <a href="#115161" class="name">
  <strong class="user"><em>CertaiN</em></strong></a><a class="genanchor" href="#115161"> &para;</a><div class="date" title="2014-06-04 04:56"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115161">
<div class="phpcode"><code><span class="html">There are "@" issue on multipart POST requests.<br /><br />Solution for PHP 5.5 or later:<br />- Enable CURLOPT_SAFE_UPLOAD.<br />- Use CURLFile instead of "@".<br /><br />Solution for PHP 5.4 or earlier:<br />- Build up multipart content body by youself.<br />- Change "Content-Type" header by yourself.<br /><br />The following snippet will help you :D<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * For safe multipart POST request for PHP5.3 ~ PHP 5.4.<br /> * <br /> * @param resource $ch cURL resource<br /> * @param array $assoc "name =&gt; value"<br /> * @param array $files "name =&gt; path"<br /> * @return bool<br /> */<br /></span><span class="keyword">function </span><span class="default">curl_custom_postfields</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, array </span><span class="default">$assoc </span><span class="keyword">= array(), array </span><span class="default">$files </span><span class="keyword">= array()) {<br />    <br />    </span><span class="comment">// invalid characters for "name" and "filename"<br />    </span><span class="keyword">static </span><span class="default">$disallow </span><span class="keyword">= array(</span><span class="string">"\0"</span><span class="keyword">, </span><span class="string">"\""</span><span class="keyword">, </span><span class="string">"\r"</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">);<br />    <br />    </span><span class="comment">// build normal parameters<br />    </span><span class="keyword">foreach (</span><span class="default">$assoc </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />        </span><span class="default">$k </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$disallow</span><span class="keyword">, </span><span class="string">"_"</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">);<br />        </span><span class="default">$body</span><span class="keyword">[] = </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\r\n"</span><span class="keyword">, array(<br />            </span><span class="string">"Content-Disposition: form-data; name=\"</span><span class="keyword">{</span><span class="default">$k</span><span class="keyword">}</span><span class="string">\""</span><span class="keyword">,<br />            </span><span class="string">""</span><span class="keyword">,<br />            </span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">), <br />        ));<br />    }<br />    <br />    </span><span class="comment">// build file parameters<br />    </span><span class="keyword">foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />        switch (</span><span class="default">true</span><span class="keyword">) {<br />            case </span><span class="default">false </span><span class="keyword">=== </span><span class="default">$v </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)):<br />            case !</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">):<br />            case !</span><span class="default">is_readable</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">):<br />                continue; </span><span class="comment">// or return false, throw new InvalidArgumentException<br />        </span><span class="keyword">}<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);<br />        </span><span class="default">$v </span><span class="keyword">= </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="string">"end"</span><span class="keyword">, </span><span class="default">explode</span><span class="keyword">(</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">));<br />        </span><span class="default">$k </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$disallow</span><span class="keyword">, </span><span class="string">"_"</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">);<br />        </span><span class="default">$v </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$disallow</span><span class="keyword">, </span><span class="string">"_"</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">);<br />        </span><span class="default">$body</span><span class="keyword">[] = </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\r\n"</span><span class="keyword">, array(<br />            </span><span class="string">"Content-Disposition: form-data; name=\"</span><span class="keyword">{</span><span class="default">$k</span><span class="keyword">}</span><span class="string">\"; filename=\"</span><span class="keyword">{</span><span class="default">$v</span><span class="keyword">}</span><span class="string">\""</span><span class="keyword">,<br />            </span><span class="string">"Content-Type: application/octet-stream"</span><span class="keyword">,<br />            </span><span class="string">""</span><span class="keyword">,<br />            </span><span class="default">$data</span><span class="keyword">, <br />        ));<br />    }<br />    <br />    </span><span class="comment">// generate safe boundary <br />    </span><span class="keyword">do {<br />        </span><span class="default">$boundary </span><span class="keyword">= </span><span class="string">"---------------------" </span><span class="keyword">. </span><span class="default">md5</span><span class="keyword">(</span><span class="default">mt_rand</span><span class="keyword">() . </span><span class="default">microtime</span><span class="keyword">());<br />    } while (</span><span class="default">preg_grep</span><span class="keyword">(</span><span class="string">"/</span><span class="keyword">{</span><span class="default">$boundary</span><span class="keyword">}</span><span class="string">/"</span><span class="keyword">, </span><span class="default">$body</span><span class="keyword">));<br />    <br />    </span><span class="comment">// add boundary for each parameters<br />    </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">, function (&amp;</span><span class="default">$part</span><span class="keyword">) use (</span><span class="default">$boundary</span><span class="keyword">) {<br />        </span><span class="default">$part </span><span class="keyword">= </span><span class="string">"--</span><span class="keyword">{</span><span class="default">$boundary</span><span class="keyword">}</span><span class="string">\r\n</span><span class="keyword">{</span><span class="default">$part</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">;<br />    });<br />    <br />    </span><span class="comment">// add final boundary<br />    </span><span class="default">$body</span><span class="keyword">[] = </span><span class="string">"--</span><span class="keyword">{</span><span class="default">$boundary</span><span class="keyword">}</span><span class="string">--"</span><span class="keyword">;<br />    </span><span class="default">$body</span><span class="keyword">[] = </span><span class="string">""</span><span class="keyword">;<br />    <br />    </span><span class="comment">// set options<br />    </span><span class="keyword">return @</span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, array(<br />        </span><span class="default">CURLOPT_POST       </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_POSTFIELDS </span><span class="keyword">=&gt; </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="default">$body</span><span class="keyword">),<br />        </span><span class="default">CURLOPT_HTTPHEADER </span><span class="keyword">=&gt; array(<br />            </span><span class="string">"Expect: 100-continue"</span><span class="keyword">,<br />            </span><span class="string">"Content-Type: multipart/form-data; boundary=</span><span class="keyword">{</span><span class="default">$boundary</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">, </span><span class="comment">// change Content-Type<br />        </span><span class="keyword">),<br />    ));<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122554">  <div class="votes">
    <div id="Vu122554">
    <a href="/manual/vote-note.php?id=122554&amp;page=class.curlfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122554">
    <a href="/manual/vote-note.php?id=122554&amp;page=class.curlfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122554" title="53% like this...">
    2
    </div>
  </div>
  <a href="#122554" class="name">
  <strong class="user"><em>php at miknik dot co dot uk</em></strong></a><a class="genanchor" href="#122554"> &para;</a><div class="date" title="2018-03-27 09:46"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122554">
<div class="phpcode"><code><span class="html">Simple function to construct CURLFile from the file path:<br /><br />function makeCurlFile($file){<br />$mime = mime_content_type($file);<br />$info = pathinfo($file);<br />$name = $info['basename'];<br />$output = new CURLFile($file, $mime, $name);<br />return $output;<br />}<br /><br />Then construct an array of all the form fields you want to post. For each file upload just add the CURLFiles.<br /><br />$ch = curl_init("<a href="https://api.example.com" rel="nofollow" target="_blank">https://api.example.com</a>");<br />$mp3 =makeCurlFile($audio);<br />$photo = makeCurlFile($picture);<br />$data = array('mp3' =&gt; $mp3, 'picture' =&gt; $photo, 'name' =&gt; 'My latest single', 'description' =&gt; 'Check out my newest song');<br />curl_setopt($ch, CURLOPT_POST,1);<br />curl_setopt($ch, CURLOPT_POSTFIELDS, $data);<br />$result = curl_exec($ch);<br />if (curl_errno($ch)) {<br />   $result = curl_error($ch);<br />}<br />curl_close ($ch);</span></code></div>
  </div>
 </div>
  <div class="note" id="129685">  <div class="votes">
    <div id="Vu129685">
    <a href="/manual/vote-note.php?id=129685&amp;page=class.curlfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129685">
    <a href="/manual/vote-note.php?id=129685&amp;page=class.curlfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129685" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129685" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#129685"> &para;</a><div class="date" title="2024-08-04 02:28"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129685">
<div class="phpcode"><code><span class="html">CURLFile() is great with Content-Type: "multipart/form-data".<br /><br />But, if you want to upload just a single file (e.g. for the Wordpress media API), then you have to do this WITHOUT using CURLFile().  i.e.<br /><br />1. Set the relevant CURLOPT_HTTPHEADER values:<br />"Content-Type: image/jpeg"  <br />"Content-Disposition: attachment; filename=myfile.jpg"<br />(where the content-type needs to be the appropriate mime-type for the uploaded file, and filename is the basename of the file).<br /><br />2. Post the file contents directly within CURLOPT_POSTFIELDS:<br />file_get_contents($filename);</span></code></div>
  </div>
 </div>
  <div class="note" id="121971">  <div class="votes">
    <div id="Vu121971">
    <a href="/manual/vote-note.php?id=121971&amp;page=class.curlfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121971">
    <a href="/manual/vote-note.php?id=121971&amp;page=class.curlfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121971" title="44% like this...">
    -4
    </div>
  </div>
  <a href="#121971" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#121971"> &para;</a><div class="date" title="2017-12-04 06:23"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121971">
<div class="phpcode"><code><span class="html">This is how to upload two or more files at once with cURLFile.<br /><br />With modern browser support, you can upload many files at one time if the multiple attribute is given.<br /><br />&lt;input type="file" name="file[]" muliple /&gt;<br /><br />With outdated browser you can place many input elements to do that.<br /><br />&lt;input type="file" name="file[]" /&gt;<br />&lt;input type="file" name="file[]" /&gt;<br />&lt;input type="file" name="file[]" /&gt;<br /><br />Here's the php code to handle multiple uploads.<br /><br /><span class="default">&lt;?php<br />    $cURLHandle </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br />    </span><span class="comment">// ... more code ...<br />    </span><span class="default">$postFields </span><span class="keyword">= array(<br />        </span><span class="string">'file[0]' </span><span class="keyword">=&gt; new </span><span class="default">cURLFile</span><span class="keyword">(</span><span class="default">$file1</span><span class="keyword">, </span><span class="default">$mimetype1</span><span class="keyword">, </span><span class="default">$basename1</span><span class="keyword">),<br />        </span><span class="string">'file[1]' </span><span class="keyword">=&gt; new </span><span class="default">cURLFile</span><span class="keyword">(</span><span class="default">$file2</span><span class="keyword">, </span><span class="default">$mimetype2</span><span class="keyword">, </span><span class="default">$basename2</span><span class="keyword">)<br />    )<br />    <br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$cURLHandle</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$fields</span><span class="keyword">);<br />    <br />    </span><span class="comment">// ... more code ...<br /></span><span class="default">?&gt;<br /></span>Each file's mimetype can be determined by finfo, and its basename can be fetched from $_FILES if it is uploaded from the client-end or by pathinfo() if it is locally stored.<br /><br />Don't leave the square brackets in ''file[0]'' empty like 'file[]', in that way only the last file will be received by the remote server.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.curlfile&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.curlfile.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.curl.php">cURL</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.curl.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="curl.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="curl.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="curl.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.curl.php" title="cURL Functions">cURL Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.curlhandle.php" title="CurlHandle">CurlHandle</a>
                        </li>
                                                <li class="">
                            <a href="class.curlmultihandle.php" title="CurlMultiHandle">CurlMultiHandle</a>
                        </li>
                                                <li class="">
                            <a href="class.curlsharehandle.php" title="CurlShareHandle">CurlShareHandle</a>
                        </li>
                                                <li class="">
                            <a href="class.curlsharepersistenthandle.php" title="CurlSharePersistentHandle">CurlSharePersistentHandle</a>
                        </li>
                                                <li class="current">
                            <a href="class.curlfile.php" title="CURLFile">CURLFile</a>
                        </li>
                                                <li class="">
                            <a href="class.curlstringfile.php" title="CURLStringFile">CURLStringFile</a>
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
