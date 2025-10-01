<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: fgetcsv - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.fgetcsv.php">
 <link rel="shorturl" href="https://www.php.net/fgetcsv">
 <link rel="alternate" href="https://www.php.net/fgetcsv" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fgetc.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fgets.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.fgetcsv.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.fgetcsv.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.fgetcsv.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.fgetcsv.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.fgetcsv.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.fgetcsv.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.fgetcsv.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.fgetcsv.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.fgetcsv.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.fgetcsv.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.fgetcsv.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets line from file pointer and parse for CSV fields" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: fgetcsv - Manual" />
<meta name="twitter:description" content="Gets line from file pointer and parse for CSV fields" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: fgetcsv - Manual" />
<meta itemprop="description" content="Gets line from file pointer and parse for CSV fields" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets line from file pointer and parse for CSV fields" />

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
        <a href="function.fgets.php">
          fgets &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fgetc.php">
          &laquo; fgetc        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.filesystem.php'>Filesystem</a></li>      <li><a href='ref.filesystem.php'>Filesystem Functions</a></li>      </ul>
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
            <option value='en/function.fgetcsv.php' selected="selected">English</option>
            <option value='de/function.fgetcsv.php'>German</option>
            <option value='es/function.fgetcsv.php'>Spanish</option>
            <option value='fr/function.fgetcsv.php'>French</option>
            <option value='it/function.fgetcsv.php'>Italian</option>
            <option value='ja/function.fgetcsv.php'>Japanese</option>
            <option value='pt_BR/function.fgetcsv.php'>Brazilian Portuguese</option>
            <option value='ru/function.fgetcsv.php'>Russian</option>
            <option value='tr/function.fgetcsv.php'>Turkish</option>
            <option value='uk/function.fgetcsv.php'>Ukrainian</option>
            <option value='zh/function.fgetcsv.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.fgetcsv" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">fgetcsv</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">fgetcsv</span> &mdash; <span class="dc-title">Gets line from file pointer and parse for CSV fields</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.fgetcsv-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>fgetcsv</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$separator</code><span class="initializer"> = &quot;,&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$enclosure</code><span class="initializer"> = &quot;\&quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$escape</code><span class="initializer"> = &quot;\\&quot;</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Similar to <span class="function"><a href="function.fgets.php" class="function">fgets()</a></span> except that
   <span class="function"><strong>fgetcsv()</strong></span> parses the line it reads for fields in
   <abbr title="Comma Separated Value">CSV</abbr> format and returns an array containing the fields
   read.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    The locale settings are taken into account by this function.
    For example, data encoded in certain one-byte encodings may be parsed
    incorrectly if <strong><code><a href="string.constants.php#constant.lc-ctype">LC_CTYPE</a></code></strong> is
    <code class="literal">en_US.UTF-8</code>.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.fgetcsv-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">stream</code></dt>
     <dd>
      <p class="para">
       A valid file pointer to a file successfully opened by
       <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>, <span class="function"><a href="function.popen.php" class="function">popen()</a></span>, or
       <span class="function"><a href="function.fsockopen.php" class="function">fsockopen()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       Must be greater than the longest line (in characters) to be found in
       the CSV file (allowing for trailing line-end characters). Otherwise the
       line is split in chunks of <code class="parameter">length</code> characters,
       unless the split would occur inside an enclosure.
      </p>
      <p class="para">
       Omitting this parameter (or setting it to 0,
       or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> in PHP 8.0.0 or later) the maximum line length is not limited,
       which is slightly slower.
      </p>
     </dd>
    
    
     <dt><code class="parameter">separator</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">separator</code> parameter sets the field separator.
       It must be a single byte character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">enclosure</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">enclosure</code> parameter sets the field enclosure character.
       It must be a single byte character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">escape</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">escape</code> parameter sets the escape character.
       It must be a single byte character or the empty string.
       The empty string (<code class="literal">&quot;&quot;</code>) disables the proprietary escape mechanism.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Usually an <code class="parameter">enclosure</code> character is escaped inside
        a field by doubling it; however, the <code class="parameter">escape</code>
        character can be used as an alternative. So for the default parameter
        values <code class="literal">&quot;&quot;</code> and <code class="literal">\&quot;</code> have the same
        meaning. Other than allowing to escape the
        <code class="parameter">enclosure</code> character the
        <code class="parameter">escape</code> character has no special meaning; it isn&#039;t
        even meant to escape itself.
       </span>
      </p></blockquote>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="simpara">
        As of PHP 8.4.0, depending on the default value of
        <code class="parameter">escape</code> is deprecated.
        It needs to be provided explicitly either positionally or by the use
        of <a href="functions.arguments.php#functions.named-arguments" class="link">named arguments</a>.
       </p>
      </div>
     </dd>
    
   </dl>
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">
 When <code class="parameter">escape</code> is set to anything other than an empty string
 (<code class="literal">&quot;&quot;</code>) it can result in CSV that is not compliant with
 <a href="https://datatracker.ietf.org/doc/html/rfc4180" class="link external">&raquo;&nbsp;RFC 4180</a> or unable to survive a roundtrip
 through the PHP CSV functions. The default for <code class="parameter">escape</code> is
 <code class="literal">&quot;\\&quot;</code> so it is recommended to set it to the empty string explicitly.
 The default value will change in a future version of PHP, no earlier than PHP 9.0.
</p></div>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.fgetcsv-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an indexed array containing the fields read on success,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    A blank line in a CSV file will be returned as an array
    comprising a single <span class="type"><a href="language.types.null.php" class="type null">null</a></span> field, and will not be treated
    as an error.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">If PHP is not properly recognizing
the line endings when reading files either on or created by a Macintosh
computer, enabling the
<a href="filesystem.configuration.php#ini.auto-detect-line-endings" class="link">auto_detect_line_endings</a>
run-time configuration option may help resolve the problem.</span></p></blockquote>
 </div>


 <div class="refsect1 errors" id="refsect1-function.fgetcsv-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   Throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
   <code class="parameter">separator</code> or <code class="parameter">enclosure</code>
   is not one byte long.
  </p>
  <p class="simpara">
   Throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
   <code class="parameter">escape</code> is not one byte long or the empty string.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.fgetcsv-changelog">
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
       <td>8.4.0</td>
       <td>
        Relying on the default value of <code class="parameter">escape</code> is now
        deprecated.
       </td>
      </tr>

      <tr>
       <td>8.3.0</td>
       <td>
        An empty string is returned instead of a string with a single
        null byte for the last field if it contains only an unterminated
        enclosure.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <code class="parameter">length</code> is now nullable.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        The <code class="parameter">escape</code> parameter now also accepts an empty
        string to disable the proprietary escape mechanism.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.fgetcsv-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2347">
    <p><strong>Example #1 Read and print the entire contents of a CSV file</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$row </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />if ((</span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"test.csv"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">)) !== </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">) {<br />    while ((</span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">fgetcsv</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">, </span><span style="color: #0000BB">1000</span><span style="color: #007700">, </span><span style="color: #DD0000">","</span><span style="color: #007700">)) !== </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$num </span><span style="color: #007700">= </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />        echo </span><span style="color: #DD0000">"&lt;p&gt; </span><span style="color: #0000BB">$num</span><span style="color: #DD0000"> fields in line </span><span style="color: #0000BB">$row</span><span style="color: #DD0000">: &lt;br /&gt;&lt;/p&gt;\n"</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$row</span><span style="color: #007700">++;<br />        for (</span><span style="color: #0000BB">$c</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$c </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">$num</span><span style="color: #007700">; </span><span style="color: #0000BB">$c</span><span style="color: #007700">++) {<br />            echo </span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$c</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />        }<br />    }<br />    </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.fgetcsv-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.fputcsv.php" class="function" rel="rdfs-seeAlso">fputcsv()</a> - Format line as CSV and write to file pointer</span></li>
   <li><span class="function"><a href="function.str-getcsv.php" class="function" rel="rdfs-seeAlso">str_getcsv()</a> - Parse a CSV string into an array</span></li>
   <li><span class="methodname"><a href="splfileobject.fgetcsv.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::fgetcsv()</a> - Gets line from file and parse as CSV fields</span></li>
   <li><span class="methodname"><a href="splfileobject.fputcsv.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::fputcsv()</a> - Write a field array as a CSV line</span></li>
   <li><span class="methodname"><a href="splfileobject.setcsvcontrol.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::setCsvControl()</a> - Set the delimiter, enclosure and escape character for CSV</span></li>
   <li><span class="methodname"><a href="splfileobject.getcsvcontrol.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::getCsvControl()</a> - Get the delimiter, enclosure and escape character for CSV</span></li>
   <li><span class="function"><a href="function.explode.php" class="function" rel="rdfs-seeAlso">explode()</a> - Split a string by a string</span></li>
   <li><span class="function"><a href="function.file.php" class="function" rel="rdfs-seeAlso">file()</a> - Reads entire file into an array</span></li>
   <li><span class="function"><a href="function.pack.php" class="function" rel="rdfs-seeAlso">pack()</a> - Pack data into binary string</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/fgetcsv.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.fgetcsv%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.fgetcsv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fgetcsv.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">31 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="87196">  <div class="votes">
    <div id="Vu87196">
    <a href="/manual/vote-note.php?id=87196&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87196">
    <a href="/manual/vote-note.php?id=87196&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87196" title="60% like this...">
    68
    </div>
  </div>
  <a href="#87196" class="name">
  <strong class="user"><em>james dot ellis at gmail dot com</em></strong></a><a class="genanchor" href="#87196"> &para;</a><div class="date" title="2008-11-23 10:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87196">
<div class="phpcode"><code><span class="html">If you need to set auto_detect_line_endings to deal with Mac line endings, it may seem obvious but remember it should be set before fopen, not after:<br /><br />This will work:<br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">'auto_detect_line_endings'</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/path/to/file'</span><span class="keyword">,</span><span class="string">'r'</span><span class="keyword">);<br />while ( (</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">) ) !== </span><span class="default">FALSE </span><span class="keyword">) {<br /></span><span class="comment">//process<br /></span><span class="keyword">}<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'auto_detect_line_endings'</span><span class="keyword">,</span><span class="default">FALSE</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This won't, you will still get concatenated fields at the new line position:<br /><span class="default">&lt;?php<br />$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/path/to/file'</span><span class="keyword">,</span><span class="string">'r'</span><span class="keyword">);<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'auto_detect_line_endings'</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">);<br />while ( (</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">) ) !== </span><span class="default">FALSE </span><span class="keyword">) {<br /></span><span class="comment">//process<br /></span><span class="keyword">}<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'auto_detect_line_endings'</span><span class="keyword">,</span><span class="default">FALSE</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122696">  <div class="votes">
    <div id="Vu122696">
    <a href="/manual/vote-note.php?id=122696&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122696">
    <a href="/manual/vote-note.php?id=122696&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122696" title="70% like this...">
    36
    </div>
  </div>
  <a href="#122696" class="name">
  <strong class="user"><em>shaun at slickdesign dot com dot au</em></strong></a><a class="genanchor" href="#122696"> &para;</a><div class="date" title="2018-05-04 03:08"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122696">
<div class="phpcode"><code><span class="html">When a BOM character is suppled, `fgetscsv` may appear to wrap the first element in "double quotation marks". The simplest way to ignore it is to progress the file pointer to the 4th byte before using `fgetcsv`.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// BOM as a string for comparison.
<br /></span><span class="default">$bom </span><span class="keyword">= </span><span class="string">"\xef\xbb\xbf"</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Read file from beginning.
<br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Progress file pointer and get first 3 characters to compare to the BOM string.
<br /></span><span class="keyword">if (</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">) !== </span><span class="default">$bom</span><span class="keyword">) {
<br />    </span><span class="comment">// BOM not found - rewind pointer to start of file.
<br />    </span><span class="default">rewind</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">// Read CSV into an array.
<br /></span><span class="default">$lines </span><span class="keyword">= array();
<br />while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">) &amp;&amp; (</span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {
<br />    </span><span class="default">$lines</span><span class="keyword">[] = </span><span class="default">$line</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120699">  <div class="votes">
    <div id="Vu120699">
    <a href="/manual/vote-note.php?id=120699&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120699">
    <a href="/manual/vote-note.php?id=120699&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120699" title="68% like this...">
    27
    </div>
  </div>
  <a href="#120699" class="name">
  <strong class="user"><em>Gandalf the White</em></strong></a><a class="genanchor" href="#120699"> &para;</a><div class="date" title="2017-02-23 10:14"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120699">
<div class="phpcode"><code><span class="html">Forget this while() loop mumbo jumbo! Use this:<br /><br />$rows = array_map('str_getcsv', file('myfile.csv'));<br />$header = array_shift($rows);<br />$csv = array();<br />foreach ($rows as $row) {<br />  $csv[] = array_combine($header, $row);<br />}<br /><br />Source: <a href="https://steindom.com/articles/shortest-php-code-convert-csv-associative-array" rel="nofollow" target="_blank">https://steindom.com/articles/shortest-php-code-convert-csv-associative-array</a></span></code></div>
  </div>
 </div>
  <div class="note" id="107911">  <div class="votes">
    <div id="Vu107911">
    <a href="/manual/vote-note.php?id=107911&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107911">
    <a href="/manual/vote-note.php?id=107911&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107911" title="66% like this...">
    30
    </div>
  </div>
  <a href="#107911" class="name">
  <strong class="user"><em>michael dot arnauts at gmail dot com</em></strong></a><a class="genanchor" href="#107911"> &para;</a><div class="date" title="2012-03-14 01:19"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107911">
<div class="phpcode"><code><span class="html">fgetcsv seems to handle newlines within fields fine. So in fact it is not reading a line, but keeps reading untill it finds a \n-character that's not quoted as a field.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* test.csv contains:<br />"col 1","col2","col3"<br />"this<br />is<br />having<br />multiple<br />lines","this not","this also not"<br />"normal record","nothing to see here","no data"<br />*/<br /><br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"test.csv"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />while ((</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Returns:<br />array(3) {<br />  [0]=&gt;<br />  string(5) "col 1"<br />  [1]=&gt;<br />  string(4) "col2"<br />  [2]=&gt;<br />  string(4) "col3"<br />}<br />array(3) {<br />  [0]=&gt;<br />  string(29) "this<br />is<br />having<br />multiple<br />lines"<br />  [1]=&gt;<br />  string(8) "this not"<br />  [2]=&gt;<br />  string(13) "this also not"<br />}<br />array(3) {<br />  [0]=&gt;<br />  string(13) "normal record"<br />  [1]=&gt;<br />  string(19) "nothing to see here"<br />  [2]=&gt;<br />  string(7) "no data"<br />}<br /><br />This means that you can expect fgetcsv to handle newlines within fields fine. This was not clear from the documentation.</span></code></div>
  </div>
 </div>
  <div class="note" id="68213">  <div class="votes">
    <div id="Vu68213">
    <a href="/manual/vote-note.php?id=68213&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68213">
    <a href="/manual/vote-note.php?id=68213&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68213" title="55% like this...">
    24
    </div>
  </div>
  <a href="#68213" class="name">
  <strong class="user"><em>myrddin at myrddin dot myrddin</em></strong></a><a class="genanchor" href="#68213"> &para;</a><div class="date" title="2006-07-18 09:14"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68213">
<div class="phpcode"><code><span class="html">Here is a OOP based importer similar to the one posted earlier. However, this is slightly more flexible in that you can import huge files without running out of memory, you just have to use a limit on the get() method
<br />
<br />Sample usage for small files:-
<br />-------------------------------------
<br /><span class="default">&lt;?php
<br />$importer </span><span class="keyword">= new </span><span class="default">CsvImporter</span><span class="keyword">(</span><span class="string">"small.txt"</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">$importer</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">();
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />
<br />Sample usage for large files:-
<br />-------------------------------------
<br /><span class="default">&lt;?php
<br />$importer </span><span class="keyword">= new </span><span class="default">CsvImporter</span><span class="keyword">(</span><span class="string">"large.txt"</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br />while(</span><span class="default">$data </span><span class="keyword">= </span><span class="default">$importer</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">2000</span><span class="keyword">))
<br />{
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />
<br />And heres the class:-
<br />-------------------------------------
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">CsvImporter
<br /></span><span class="keyword">{
<br />    private </span><span class="default">$fp</span><span class="keyword">;
<br />    private </span><span class="default">$parse_header</span><span class="keyword">;
<br />    private </span><span class="default">$header</span><span class="keyword">;
<br />    private </span><span class="default">$delimiter</span><span class="keyword">;
<br />    private </span><span class="default">$length</span><span class="keyword">;
<br />    </span><span class="comment">//--------------------------------------------------------------------
<br />    </span><span class="keyword">function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">, </span><span class="default">$parse_header</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">=</span><span class="string">"\t"</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">=</span><span class="default">8000</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parse_header </span><span class="keyword">= </span><span class="default">$parse_header</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">delimiter </span><span class="keyword">= </span><span class="default">$delimiter</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">= </span><span class="default">$length</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">lines </span><span class="keyword">= </span><span class="default">$lines</span><span class="keyword">;
<br />
<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parse_header</span><span class="keyword">)
<br />        {
<br />           </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">header </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fp</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">delimiter</span><span class="keyword">);
<br />        }
<br />
<br />    }
<br />    </span><span class="comment">//--------------------------------------------------------------------
<br />    </span><span class="keyword">function </span><span class="default">__destruct</span><span class="keyword">()
<br />    {
<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fp</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fp</span><span class="keyword">);
<br />        }
<br />    }
<br />    </span><span class="comment">//--------------------------------------------------------------------
<br />    </span><span class="keyword">function </span><span class="default">get</span><span class="keyword">(</span><span class="default">$max_lines</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">)
<br />    {
<br />        </span><span class="comment">//if $max_lines is set to 0, then get all the data
<br />
<br />        </span><span class="default">$data </span><span class="keyword">= array();
<br />
<br />        if (</span><span class="default">$max_lines </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">)
<br />            </span><span class="default">$line_count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        else
<br />            </span><span class="default">$line_count </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">; </span><span class="comment">// so loop limit is ignored
<br />
<br />        </span><span class="keyword">while (</span><span class="default">$line_count </span><span class="keyword">&lt; </span><span class="default">$max_lines </span><span class="keyword">&amp;&amp; (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fp</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">delimiter</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">)
<br />        {
<br />            if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parse_header</span><span class="keyword">)
<br />            {
<br />                foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">header </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$heading_i</span><span class="keyword">)
<br />                {
<br />                    </span><span class="default">$row_new</span><span class="keyword">[</span><span class="default">$heading_i</span><span class="keyword">] = </span><span class="default">$row</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />                }
<br />                </span><span class="default">$data</span><span class="keyword">[] = </span><span class="default">$row_new</span><span class="keyword">;
<br />            }
<br />            else
<br />            {
<br />                </span><span class="default">$data</span><span class="keyword">[] = </span><span class="default">$row</span><span class="keyword">;
<br />            }
<br />
<br />            if (</span><span class="default">$max_lines </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">)
<br />                </span><span class="default">$line_count</span><span class="keyword">++;
<br />        }
<br />        return </span><span class="default">$data</span><span class="keyword">;
<br />    }
<br />    </span><span class="comment">//--------------------------------------------------------------------
<br />
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120551">  <div class="votes">
    <div id="Vu120551">
    <a href="/manual/vote-note.php?id=120551&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120551">
    <a href="/manual/vote-note.php?id=120551&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120551" title="60% like this...">
    14
    </div>
  </div>
  <a href="#120551" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#120551"> &para;</a><div class="date" title="2017-01-29 07:31"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120551">
<div class="phpcode"><code><span class="html">This function has no special BOM handling. The first cell of the first row will inherit the BOM bytes, i.e. will be 3 bytes longer than expected. As the BOM is invisible you may not notice.<br /><br />Excel on Windows, or text editors like Notepad, may add the BOM.</span></code></div>
  </div>
 </div>
  <div class="note" id="58124">  <div class="votes">
    <div id="Vu58124">
    <a href="/manual/vote-note.php?id=58124&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58124">
    <a href="/manual/vote-note.php?id=58124&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58124" title="61% like this...">
    8
    </div>
  </div>
  <a href="#58124" class="name">
  <strong class="user"><em>junk at vhd dot com dot au</em></strong></a><a class="genanchor" href="#58124"> &para;</a><div class="date" title="2005-10-24 09:52"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58124">
<div class="phpcode"><code><span class="html">The fgetcsv function seems to follow the MS excel conventions, which means:<br /><br />- The quoting character is escaped by itself and not the back slash. <br />(i.e.Let's use the double quote (") as the quoting character:<br /> <br />   Two double quotes  "" will give a single " once parsed, if they are inside a quoted field (otherwise neither of them will be removed). <br /><br />   \" will give \" whether it is in a quoted field or not (same for \\) , and <br /><br />   if a single double quote is inside a quoted field it will be removed. If it is not inside a quoted field it will stay).<br /><br />- leading and trailing spaces (\s or \t) are never removed, regardless of whether they are in quoted fields or not.<br /><br />- Line breaks within fields are dealt with correctly if they are in quoted fields. (So previous comments stating the opposite are wrong, unless they are using a different PHP version.... I am using 4.4.0.)<br /><br />So fgetcsv if actually very complete and can deal with every possible situation. (It does need help for macintosh line breaks though, as mentioned in the help files.)<br /><br />I wish I knew all this from the start. From my own benchmarks fgetcsv strikes a very good compromise between memory consumption and speed.<br /><br />-------------------------<br />Note: If back slashes are used to escape quotes they can easily be removed afterwards. Same for leading and trailing spaces.</span></code></div>
  </div>
 </div>
  <div class="note" id="43296">  <div class="votes">
    <div id="Vu43296">
    <a href="/manual/vote-note.php?id=43296&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43296">
    <a href="/manual/vote-note.php?id=43296&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43296" title="63% like this...">
    5
    </div>
  </div>
  <a href="#43296" class="name">
  <strong class="user"><em>jc at goetc dot net</em></strong></a><a class="genanchor" href="#43296"> &para;</a><div class="date" title="2004-06-16 08:51"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43296">
<div class="phpcode"><code><span class="html">I've had alot of projects recently dealing with csv files, so I created the following class to read a csv file and return an array of arrays with the column names as keys. The only requirement is that the 1st row contain the column headings. 
<br />
<br />I only wrote it today, so I'll probably expand on it in the near future. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">CSVparse
<br />  </span><span class="keyword">{
<br />  var </span><span class="default">$mappings </span><span class="keyword">= array();
<br />
<br />  function </span><span class="default">parse_file</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)
<br />    {
<br />    </span><span class="default">$id </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">); </span><span class="comment">//open the file
<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)); </span><span class="comment">/*This will get us the */
<br />                                               /*main column names */
<br />
<br />    </span><span class="keyword">if(!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mappings</span><span class="keyword">)
<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mappings </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">;
<br />
<br />    while(</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)))
<br />        {
<br />         if(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])
<br />           {
<br />            foreach(</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)
<br />               </span><span class="default">$converted_data</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mappings</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]] = </span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);
<br />            </span><span class="default">$table</span><span class="keyword">[] = </span><span class="default">$converted_data</span><span class="keyword">; </span><span class="comment">/* put each line into */
<br />             </span><span class="keyword">}                                 </span><span class="comment">/* its own entry in    */
<br />         </span><span class="keyword">}                                     </span><span class="comment">/* the $table array    */
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">); </span><span class="comment">//close file
<br />    </span><span class="keyword">return </span><span class="default">$table</span><span class="keyword">;
<br />    }
<br />  }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="35915">  <div class="votes">
    <div id="Vu35915">
    <a href="/manual/vote-note.php?id=35915&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35915">
    <a href="/manual/vote-note.php?id=35915&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35915" title="63% like this...">
    5
    </div>
  </div>
  <a href="#35915" class="name">
  <strong class="user"><em>phpnet at smallfryhosting dot co dot uk</em></strong></a><a class="genanchor" href="#35915"> &para;</a><div class="date" title="2003-09-18 09:42"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35915">
<div class="phpcode"><code><span class="html">Another version [modified michael from mediaconcepts]
<br />
<br /><span class="default">&lt;?php
<br />  </span><span class="keyword">function </span><span class="default">arrayFromCSV</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$hasFieldNames </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">) {
<br />    </span><span class="default">$result </span><span class="keyword">= Array();
<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) +</span><span class="default">1</span><span class="keyword">;
<br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);
<br />    </span><span class="comment">#TO DO: There must be a better way of finding out the size of the longest row... until then
<br />    </span><span class="keyword">if (</span><span class="default">$hasFieldNames</span><span class="keyword">) </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">);
<br />    while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">)) {
<br />        </span><span class="default">$n </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">); </span><span class="default">$res</span><span class="keyword">=array();
<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$n</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />            </span><span class="default">$idx </span><span class="keyword">= (</span><span class="default">$hasFieldNames</span><span class="keyword">) ? </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] : </span><span class="default">$i</span><span class="keyword">;
<br />            </span><span class="default">$res</span><span class="keyword">[</span><span class="default">$idx</span><span class="keyword">] = </span><span class="default">$row</span><span class="keyword">[</span><span class="default">i</span><span class="keyword">];
<br />        }
<br />        </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$res</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />  }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86251">  <div class="votes">
    <div id="Vu86251">
    <a href="/manual/vote-note.php?id=86251&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86251">
    <a href="/manual/vote-note.php?id=86251&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86251" title="61% like this...">
    5
    </div>
  </div>
  <a href="#86251" class="name">
  <strong class="user"><em>michael dot martinek at gmail dot com</em></strong></a><a class="genanchor" href="#86251"> &para;</a><div class="date" title="2008-10-09 09:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86251">
<div class="phpcode"><code><span class="html">Here's something I put together this morning. It allows you to read rows from your CSV and get values based on the name of the column. This works great when your header columns are not always in the same order; like when you're processing many feeds from different customers. Also makes for cleaner, easier to manage code.
<br />
<br />So if your feed looks like this:
<br />
<br />product_id,category_name,price,brand_name, sku_isbn_upc,image_url,landing_url,title,description
<br />123,Test Category,12.50,No Brand,0,<a href="http://www.example.com," rel="nofollow" target="_blank">http://www.example.com,</a> <a href="http://www.example.com/landing.php," rel="nofollow" target="_blank">http://www.example.com/landing.php,</a> Some Title,Some Description
<br />
<br />You can do:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">while (</span><span class="default">$o</span><span class="keyword">-&gt;</span><span class="default">getNext</span><span class="keyword">())
<br />{
<br />   </span><span class="default">$dPrice </span><span class="keyword">= </span><span class="default">$o</span><span class="keyword">-&gt;</span><span class="default">getPrice</span><span class="keyword">();
<br />   </span><span class="default">$nProductID </span><span class="keyword">= </span><span class="default">$o</span><span class="keyword">-&gt;</span><span class="default">getProductID</span><span class="keyword">();
<br />   </span><span class="default">$sBrandName </span><span class="keyword">= </span><span class="default">$o</span><span class="keyword">-&gt;</span><span class="default">getBrandName</span><span class="keyword">();
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />If you have any questions or comments regarding this class, they can be directed to michael.martinek@gmail.com as I probably won't be checking back here.
<br />
<br /><span class="default">&lt;?php
<br />    define</span><span class="keyword">(</span><span class="string">'C_PPCSV_HEADER_RAW'</span><span class="keyword">,        </span><span class="default">0</span><span class="keyword">);
<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'C_PPCSV_HEADER_NICE'</span><span class="keyword">,        </span><span class="default">1</span><span class="keyword">);
<br />    
<br />    class </span><span class="default">PaperPear_CSVParser
<br />    </span><span class="keyword">{
<br />        private </span><span class="default">$m_saHeader </span><span class="keyword">= array();
<br />        private </span><span class="default">$m_sFileName </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        private </span><span class="default">$m_fp </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />        private </span><span class="default">$m_naHeaderMap </span><span class="keyword">= array();
<br />        private </span><span class="default">$m_saValues </span><span class="keyword">= array();
<br />        
<br />        function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$sFileName</span><span class="keyword">)
<br />        {
<br />            </span><span class="comment">//quick and dirty opening and processing.. you may wish to clean this up
<br />            </span><span class="keyword">if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">m_fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$sFileName</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">))
<br />            {
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">processHeader</span><span class="keyword">();
<br />            }
<br />        }
<br />    
<br />          function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$sMethodName</span><span class="keyword">, </span><span class="default">$saArgs</span><span class="keyword">)
<br />        {
<br />            </span><span class="comment">//check to see if this is a set() or get() request, and extract the name
<br />            </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/[sg]et(.*)/"</span><span class="keyword">, </span><span class="default">$sMethodName</span><span class="keyword">, </span><span class="default">$saFound</span><span class="keyword">))
<br />            {
<br />                </span><span class="comment">//convert the name portion of the [gs]et to uppercase for header checking
<br />                </span><span class="default">$sName </span><span class="keyword">= </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$saFound</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />                
<br />                </span><span class="comment">//see if the entry exists in our named header-&gt; index mapping
<br />                  </span><span class="keyword">if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$sName</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">m_naHeaderMap</span><span class="keyword">))
<br />                  {
<br />                      </span><span class="comment">//it does.. so consult the header map for which index this header controls
<br />                      </span><span class="default">$nIndex </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">m_naHeaderMap</span><span class="keyword">[</span><span class="default">$sName</span><span class="keyword">];
<br />                      if (</span><span class="default">$sMethodName</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} == </span><span class="string">'g'</span><span class="keyword">)
<br />                      {
<br />                          </span><span class="comment">//return the value stored in the index associated with this name
<br />                             </span><span class="keyword">return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">m_saValues</span><span class="keyword">[</span><span class="default">$nIndex</span><span class="keyword">];
<br />                      }
<br />                      else
<br />                      {
<br />                          </span><span class="comment">//set the valuw
<br />                          </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">m_saValues</span><span class="keyword">[</span><span class="default">$nIndex</span><span class="keyword">] = </span><span class="default">$saArgs</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />                          return </span><span class="default">true</span><span class="keyword">;
<br />                      }
<br />                  }
<br />            }
<br />            
<br />            </span><span class="comment">//nothing we control so bail out with a false
<br />              </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;
<br />          }        
<br />          
<br />          </span><span class="comment">//get a nicely formatted header name. This will take product_id and make
<br />          //it PRODUCTID in the header map. So now you won't need to worry about whether you need
<br />          //to do a getProductID, or getproductid, or getProductId.. all will work.
<br />        </span><span class="keyword">public static function </span><span class="default">GetNiceHeaderName</span><span class="keyword">(</span><span class="default">$sName</span><span class="keyword">)
<br />        {
<br />            return </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[^A-Za-z0-9]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$sName</span><span class="keyword">));
<br />        }
<br />
<br />        </span><span class="comment">//process the header entry so we can map our named header fields to a numerical index, which
<br />        //we'll use when we use fgetcsv().
<br />        </span><span class="keyword">private function </span><span class="default">processHeader</span><span class="keyword">()
<br />        {
<br />            </span><span class="default">$sLine </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">m_fp</span><span class="keyword">);
<br />                        </span><span class="comment">//you'll want to make this configurable
<br />            </span><span class="default">$saFields </span><span class="keyword">= </span><span class="default">split</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">$sLine</span><span class="keyword">);
<br />            
<br />            </span><span class="default">$nIndex </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />            foreach (</span><span class="default">$saFields </span><span class="keyword">as </span><span class="default">$sField</span><span class="keyword">)
<br />            {
<br />                </span><span class="comment">//get the nice name to use for "get" and "set".
<br />                </span><span class="default">$sField </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sField</span><span class="keyword">);
<br />                
<br />                </span><span class="default">$sNiceName </span><span class="keyword">= </span><span class="default">PaperPear_CSVParser</span><span class="keyword">::</span><span class="default">GetNiceHeaderName</span><span class="keyword">(</span><span class="default">$sField</span><span class="keyword">);
<br />                
<br />                </span><span class="comment">//track correlation of raw -&gt; nice name so we don't have to do on-the-fly nice name checks
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">m_saHeader</span><span class="keyword">[</span><span class="default">$nIndex</span><span class="keyword">] = array(</span><span class="default">C_PPCSV_HEADER_RAW </span><span class="keyword">=&gt; </span><span class="default">$sField</span><span class="keyword">, </span><span class="default">C_PPCSV_HEADER_NICE </span><span class="keyword">=&gt; </span><span class="default">$sNiceName</span><span class="keyword">);
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">m_naHeaderMap</span><span class="keyword">[</span><span class="default">$sNiceName</span><span class="keyword">] = </span><span class="default">$nIndex</span><span class="keyword">;
<br />                </span><span class="default">$nIndex</span><span class="keyword">++;
<br />            }
<br />        }
<br />        
<br />        </span><span class="comment">//read the next CSV entry
<br />        </span><span class="keyword">public function </span><span class="default">getNext</span><span class="keyword">()
<br />        {
<br />            </span><span class="comment">//this is a basic read, you will likely want to change this to accomodate what
<br />            //you are using for CSV parameters (tabs, encapsulation, etc).
<br />            </span><span class="keyword">if ((</span><span class="default">$saValues </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">m_fp</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">)
<br />            {
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">m_saValues </span><span class="keyword">= </span><span class="default">$saValues</span><span class="keyword">;
<br />                return </span><span class="default">true</span><span class="keyword">;
<br />            }
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />    }
<br />    
<br />    
<br />    </span><span class="comment">//quick example of usage
<br />    </span><span class="default">$o </span><span class="keyword">= new </span><span class="default">PaperPear_CSVParser</span><span class="keyword">(</span><span class="string">'F:\foo.csv'</span><span class="keyword">);
<br />    while (</span><span class="default">$o</span><span class="keyword">-&gt;</span><span class="default">getNext</span><span class="keyword">())
<br />    {
<br />        echo </span><span class="string">"Price=" </span><span class="keyword">. </span><span class="default">$o</span><span class="keyword">-&gt;</span><span class="default">getPrice</span><span class="keyword">() . </span><span class="string">"\r\n"</span><span class="keyword">;
<br />    }
<br />    
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96049">  <div class="votes">
    <div id="Vu96049">
    <a href="/manual/vote-note.php?id=96049&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96049">
    <a href="/manual/vote-note.php?id=96049&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96049" title="60% like this...">
    6
    </div>
  </div>
  <a href="#96049" class="name">
  <strong class="user"><em>kent at marketruler dot com</em></strong></a><a class="genanchor" href="#96049"> &para;</a><div class="date" title="2010-02-04 10:18"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96049">
<div class="phpcode"><code><span class="html">Note that fgetcsv, at least in PHP 5.3 or previous, will NOT work with UTF-16 encoded files. Your options are to convert the entire file to ISO-8859-1 (or latin1), or convert line by line and convert each line into ISO-8859-1 encoding, then use str_getcsv (or compatible backwards-compatible implementation). If you need to read non-latin alphabets, probably best to convert to UTF-8.<br /><br />See str_getcsv for a backwards-compatible version of it with PHP &lt; 5.3, and see utf8_decode for a function written by Rasmus Andersson which provides utf16_decode. The modification I added was that the BOP appears at the top of the file, then not on subsequent lines. So you need to store the endian-ness, and then re-send it upon each subsequent line decoding. This modified version returns the endianness, if it's not available:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Decode UTF-16 encoded strings.<br /> *<br /> * Can handle both BOM'ed data and un-BOM'ed data.<br /> * Assumes Big-Endian byte order if no BOM is available.<br /> * From: <a href="http://php.net/manual/en/function.utf8-decode.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.utf8-decode.php</a><br /> *<br /> * @param   string  $str  UTF-16 encoded data to decode.<br /> * @return  string  UTF-8 / ISO encoded data.<br /> * @access  public<br /> * @version 0.1 / 2005-01-19<br /> * @author  Rasmus Andersson {@link <a href="http://rasmusandersson.se/}" rel="nofollow" target="_blank">http://rasmusandersson.se/}</a><br /> * @package Groupies<br /> */<br /></span><span class="keyword">function </span><span class="default">utf16_decode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, &amp;</span><span class="default">$be</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {<br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) &lt; </span><span class="default">2</span><span class="keyword">) {<br />        return </span><span class="default">$str</span><span class="keyword">;<br />    }<br />    </span><span class="default">$c0 </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">});<br />    </span><span class="default">$c1 </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">1</span><span class="keyword">});<br />    </span><span class="default">$start </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    if (</span><span class="default">$c0 </span><span class="keyword">== </span><span class="default">0xFE </span><span class="keyword">&amp;&amp; </span><span class="default">$c1 </span><span class="keyword">== </span><span class="default">0xFF</span><span class="keyword">) {<br />        </span><span class="default">$be </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        </span><span class="default">$start </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />    } else if (</span><span class="default">$c0 </span><span class="keyword">== </span><span class="default">0xFF </span><span class="keyword">&amp;&amp; </span><span class="default">$c1 </span><span class="keyword">== </span><span class="default">0xFE</span><span class="keyword">) {<br />        </span><span class="default">$start </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />        </span><span class="default">$be </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">$be </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$be </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$newstr </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$start</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">2</span><span class="keyword">) {<br />        if (</span><span class="default">$be</span><span class="keyword">) {<br />            </span><span class="default">$val </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">})   &lt;&lt; </span><span class="default">4</span><span class="keyword">;<br />            </span><span class="default">$val </span><span class="keyword">+= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">});<br />        } else {<br />            </span><span class="default">$val </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">}) &lt;&lt; </span><span class="default">4</span><span class="keyword">;<br />            </span><span class="default">$val </span><span class="keyword">+= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">});<br />        }<br />        </span><span class="default">$newstr </span><span class="keyword">.= (</span><span class="default">$val </span><span class="keyword">== </span><span class="default">0x228</span><span class="keyword">) ? </span><span class="string">"\n" </span><span class="keyword">: </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$newstr</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Trying the "setlocale" trick did not work for me, e.g.<br /><br /><span class="default">&lt;?php<br />setlocale</span><span class="keyword">(</span><span class="default">LC_CTYPE</span><span class="keyword">, </span><span class="string">"en.UTF16"</span><span class="keyword">);<br /></span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, ...)<br /></span><span class="default">?&gt;<br /></span><br />But that's perhaps because my platform didn't support it. However, fgetcsv only supports single characters for the delimiter, etc. and complains if you pass in a UTF-16 version of said character, so I gave up on that rather quickly.<br /><br />Hope this is helpful to someone out there.</span></code></div>
  </div>
 </div>
  <div class="note" id="113077">  <div class="votes">
    <div id="Vu113077">
    <a href="/manual/vote-note.php?id=113077&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113077">
    <a href="/manual/vote-note.php?id=113077&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113077" title="61% like this...">
    3
    </div>
  </div>
  <a href="#113077" class="name">
  <strong class="user"><em>sander at NOSPAM dot rotorsolutions dot nl</em></strong></a><a class="genanchor" href="#113077"> &para;</a><div class="date" title="2013-08-27 12:49"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113077">
<div class="phpcode"><code><span class="html">If you don't want to define an enclosure charachter you can do the following: <br /><br /><span class="default">&lt;?php<br />  $row </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I needed this to detect the enclosure used for csv files.</span></code></div>
  </div>
 </div>
  <div class="note" id="107196">  <div class="votes">
    <div id="Vu107196">
    <a href="/manual/vote-note.php?id=107196&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107196">
    <a href="/manual/vote-note.php?id=107196&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107196" title="61% like this...">
    3
    </div>
  </div>
  <a href="#107196" class="name">
  <strong class="user"><em>nick at atomicdesign dot net</em></strong></a><a class="genanchor" href="#107196"> &para;</a><div class="date" title="2012-01-13 12:48"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107196">
<div class="phpcode"><code><span class="html">I was getting a bytes exhausted error when iterating through a CSV file. ini_set('auto_detect_line_endings', 1); fixed it.</span></code></div>
  </div>
 </div>
  <div class="note" id="113200">  <div class="votes">
    <div id="Vu113200">
    <a href="/manual/vote-note.php?id=113200&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113200">
    <a href="/manual/vote-note.php?id=113200&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113200" title="58% like this...">
    3
    </div>
  </div>
  <a href="#113200" class="name">
  <strong class="user"><em>tomasz at marcinkowski dot pl</em></strong></a><a class="genanchor" href="#113200"> &para;</a><div class="date" title="2013-09-11 08:48"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113200">
<div class="phpcode"><code><span class="html">For anyone else struggling with disappearing non-latin characters in one-byte encodings - setting LANG env var (as the manual states) does not help at all. Look at LC_ALL instead.<br /><br />In my case it was set to "pl_PL.utf8" but since my input file was in CP1250 most of polish characters (but not all of them!) had gone missing and city of "Łódź" had become just "dź". I've "fixed" it with "pl_PL".</span></code></div>
  </div>
 </div>
  <div class="note" id="97630">  <div class="votes">
    <div id="Vu97630">
    <a href="/manual/vote-note.php?id=97630&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97630">
    <a href="/manual/vote-note.php?id=97630&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97630" title="58% like this...">
    3
    </div>
  </div>
  <a href="#97630" class="name">
  <strong class="user"><em>matthias dot isler at gmail dot com</em></strong></a><a class="genanchor" href="#97630"> &para;</a><div class="date" title="2010-04-29 04:54"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97630">
<div class="phpcode"><code><span class="html">If you want to load some translations for your application, don't use csv files for that, even if it's easier to handle.
<br />
<br />The following code snippet:
<br />
<br /><span class="default">&lt;?php
<br />$lang </span><span class="keyword">= array();
<br />
<br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'en.csv'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);
<br />
<br />while(</span><span class="default">$row </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">500</span><span class="keyword">, </span><span class="string">';'</span><span class="keyword">))
<br />{
<br />    </span><span class="default">$lang</span><span class="keyword">[</span><span class="default">$row</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]] = </span><span class="default">$row</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />}
<br />
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />is about 400% slower than this code:
<br />
<br /><span class="default">&lt;?php
<br />$lang </span><span class="keyword">= array();
<br />
<br /></span><span class="default">$values </span><span class="keyword">= </span><span class="default">parse_ini_file</span><span class="keyword">(</span><span class="string">'de.ini'</span><span class="keyword">);
<br />
<br />foreach(</span><span class="default">$values </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$lang</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />That's the reason why you should allways use .ini files for translations...
<br />
<br /><a href="http://php.net/parse_ini_file" rel="nofollow" target="_blank">http://php.net/parse_ini_file</a></span></code></div>
  </div>
 </div>
  <div class="note" id="119896">  <div class="votes">
    <div id="Vu119896">
    <a href="/manual/vote-note.php?id=119896&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119896">
    <a href="/manual/vote-note.php?id=119896&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119896" title="58% like this...">
    2
    </div>
  </div>
  <a href="#119896" class="name">
  <strong class="user"><em>from_php at puggan dot se</em></strong></a><a class="genanchor" href="#119896"> &para;</a><div class="date" title="2016-09-16 01:37"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119896">
<div class="phpcode"><code><span class="html">Setting the $escape parameter dosn't return unescaped strings, but just avoid splitting on a $delimiter that have an escpae-char infront of it:<br /><br /><span class="default">&lt;?php<br />        $tmp_file </span><span class="keyword">= </span><span class="string">"/tmp/test.csv"</span><span class="keyword">;<br />        </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$tmp_file</span><span class="keyword">, </span><span class="string">"\"first\\\";\\\"secound\""</span><span class="keyword">);<br />        echo </span><span class="string">"raw:" </span><span class="keyword">. </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$tmp_file</span><span class="keyword">) . </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />        echo </span><span class="string">"fgetcsv escaped bs:" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />        </span><span class="default">$f </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$tmp_file</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />        while(</span><span class="default">$r </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="string">';'</span><span class="keyword">, </span><span class="string">'"'</span><span class="keyword">, </span><span class="string">"\\"</span><span class="keyword">))<br />        {<br />                </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);<br />        }<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);<br />        echo </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />        echo </span><span class="string">"fgetcsv escaped #:" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />        </span><span class="default">$f </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$tmp_file</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />        while(</span><span class="default">$r </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="string">';'</span><span class="keyword">, </span><span class="string">'"'</span><span class="keyword">, </span><span class="string">"#"</span><span class="keyword">))<br />        {<br />                </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);<br />        }<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);<br />        echo </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62759">  <div class="votes">
    <div id="Vu62759">
    <a href="/manual/vote-note.php?id=62759&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62759">
    <a href="/manual/vote-note.php?id=62759&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62759" title="58% like this...">
    3
    </div>
  </div>
  <a href="#62759" class="name">
  <strong class="user"><em>daniel at softel dot jp</em></strong></a><a class="genanchor" href="#62759"> &para;</a><div class="date" title="2006-03-08 07:03"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62759">
<div class="phpcode"><code><span class="html">Note that fgetcsv() uses the system locale setting to make assumptions about character encoding.<br />So if you are trying to process a UTF-8 CSV file on an EUC-JP server (for example),<br />you will need to do something like this before you call fgetcsv():<br /><br />setlocale(LC_ALL, 'ja_JP.UTF8');<br /><br />[Also not that setlocale() doesn't *permanently* affect the system locale setting]</span></code></div>
  </div>
 </div>
  <div class="note" id="101238">  <div class="votes">
    <div id="Vu101238">
    <a href="/manual/vote-note.php?id=101238&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101238">
    <a href="/manual/vote-note.php?id=101238&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101238" title="56% like this...">
    5
    </div>
  </div>
  <a href="#101238" class="name">
  <strong class="user"><em>code at ashleyhunt dot co dot uk</em></strong></a><a class="genanchor" href="#101238"> &para;</a><div class="date" title="2010-12-04 07:14"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101238">
<div class="phpcode"><code><span class="html">I needed a function to analyse a file for delimiters and line endings prior to importing the file into MySQL using LOAD DATA LOCAL INFILE<br /><br />I wrote this function to do the job, the results are (mostly) very accurate and it works nicely with large files too.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">analyse_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$capture_limit_in_kb </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">) {<br />    </span><span class="comment">// capture starting memory usage<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'peak_mem'</span><span class="keyword">][</span><span class="string">'start'</span><span class="keyword">]    = </span><span class="default">memory_get_peak_usage</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br />    </span><span class="comment">// log the limit how much of the file was sampled (in Kb)<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'read_kb'</span><span class="keyword">]                 = </span><span class="default">$capture_limit_in_kb</span><span class="keyword">;<br />    <br />    </span><span class="comment">// read in file<br />    </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />        </span><span class="default">$contents </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, (</span><span class="default">$capture_limit_in_kb </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">)); </span><span class="comment">// in KB<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />    <br />    </span><span class="comment">// specify allowed field delimiters<br />    </span><span class="default">$delimiters </span><span class="keyword">= array(<br />        </span><span class="string">'comma'     </span><span class="keyword">=&gt; </span><span class="string">','</span><span class="keyword">,<br />        </span><span class="string">'semicolon' </span><span class="keyword">=&gt; </span><span class="string">';'</span><span class="keyword">,<br />        </span><span class="string">'tab'         </span><span class="keyword">=&gt; </span><span class="string">"\t"</span><span class="keyword">,<br />        </span><span class="string">'pipe'         </span><span class="keyword">=&gt; </span><span class="string">'|'</span><span class="keyword">,<br />        </span><span class="string">'colon'     </span><span class="keyword">=&gt; </span><span class="string">':'<br />    </span><span class="keyword">);<br />    <br />    </span><span class="comment">// specify allowed line endings<br />    </span><span class="default">$line_endings </span><span class="keyword">= array(<br />        </span><span class="string">'rn'         </span><span class="keyword">=&gt; </span><span class="string">"\r\n"</span><span class="keyword">,<br />        </span><span class="string">'n'         </span><span class="keyword">=&gt; </span><span class="string">"\n"</span><span class="keyword">,<br />        </span><span class="string">'r'         </span><span class="keyword">=&gt; </span><span class="string">"\r"</span><span class="keyword">,<br />        </span><span class="string">'nr'         </span><span class="keyword">=&gt; </span><span class="string">"\n\r"<br />    </span><span class="keyword">);<br />    <br />    </span><span class="comment">// loop and count each line ending instance<br />    </span><span class="keyword">foreach (</span><span class="default">$line_endings </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$line_result</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$contents</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">// sort by largest array value<br />    </span><span class="default">asort</span><span class="keyword">(</span><span class="default">$line_result</span><span class="keyword">);<br />    <br />    </span><span class="comment">// log to output array<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'line_ending'</span><span class="keyword">][</span><span class="string">'results'</span><span class="keyword">]     = </span><span class="default">$line_result</span><span class="keyword">;<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'line_ending'</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">]     = </span><span class="default">end</span><span class="keyword">(</span><span class="default">$line_result</span><span class="keyword">);<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'line_ending'</span><span class="keyword">][</span><span class="string">'key'</span><span class="keyword">]         = </span><span class="default">key</span><span class="keyword">(</span><span class="default">$line_result</span><span class="keyword">);<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'line_ending'</span><span class="keyword">][</span><span class="string">'value'</span><span class="keyword">]     = </span><span class="default">$line_endings</span><span class="keyword">[</span><span class="default">$output</span><span class="keyword">[</span><span class="string">'line_ending'</span><span class="keyword">][</span><span class="string">'key'</span><span class="keyword">]];<br />    </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">[</span><span class="string">'line_ending'</span><span class="keyword">][</span><span class="string">'value'</span><span class="keyword">], </span><span class="default">$contents</span><span class="keyword">);<br />    <br />    </span><span class="comment">// remove last line of array, as this maybe incomplete?<br />    </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">);<br />    <br />    </span><span class="comment">// create a string from the legal lines<br />    </span><span class="default">$complete_lines </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">);<br />    <br />    </span><span class="comment">// log statistics to output array<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'lines'</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">]     = </span><span class="default">count</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">);<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'lines'</span><span class="keyword">][</span><span class="string">'length'</span><span class="keyword">]     = </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$complete_lines</span><span class="keyword">);<br />    <br />    </span><span class="comment">// loop and count each delimiter instance<br />    </span><span class="keyword">foreach (</span><span class="default">$delimiters </span><span class="keyword">as </span><span class="default">$delimiter_key </span><span class="keyword">=&gt; </span><span class="default">$delimiter</span><span class="keyword">) {<br />        </span><span class="default">$delimiter_result</span><span class="keyword">[</span><span class="default">$delimiter_key</span><span class="keyword">] = </span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$complete_lines</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">// sort by largest array value<br />    </span><span class="default">asort</span><span class="keyword">(</span><span class="default">$delimiter_result</span><span class="keyword">);<br />    <br />    </span><span class="comment">// log statistics to output array with largest counts as the value<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'delimiter'</span><span class="keyword">][</span><span class="string">'results'</span><span class="keyword">]     = </span><span class="default">$delimiter_result</span><span class="keyword">;<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'delimiter'</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">]         = </span><span class="default">end</span><span class="keyword">(</span><span class="default">$delimiter_result</span><span class="keyword">);<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'delimiter'</span><span class="keyword">][</span><span class="string">'key'</span><span class="keyword">]         = </span><span class="default">key</span><span class="keyword">(</span><span class="default">$delimiter_result</span><span class="keyword">);<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'delimiter'</span><span class="keyword">][</span><span class="string">'value'</span><span class="keyword">]         = </span><span class="default">$delimiters</span><span class="keyword">[</span><span class="default">$output</span><span class="keyword">[</span><span class="string">'delimiter'</span><span class="keyword">][</span><span class="string">'key'</span><span class="keyword">]];<br />    <br />    </span><span class="comment">// capture ending memory usage<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="string">'peak_mem'</span><span class="keyword">][</span><span class="string">'end'</span><span class="keyword">] = </span><span class="default">memory_get_peak_usage</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />    return </span><span class="default">$output</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example Usage:<br /><span class="default">&lt;?php<br />$Array </span><span class="keyword">= </span><span class="default">analyse_file</span><span class="keyword">(</span><span class="string">'/www/files/file.csv'</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br /><br /></span><span class="comment">// example usable parts<br />// $Array['delimiter']['value'] =&gt; ,<br />// $Array['line_ending']['value'] =&gt; \r\n<br /></span><span class="default">?&gt;<br /></span><br />Full function output:<br />Array<br />(<br />    [peak_mem] =&gt; Array<br />        (<br />            [start] =&gt; 786432<br />            [end] =&gt; 786432<br />        )<br /><br />    [line_ending] =&gt; Array<br />        (<br />            [results] =&gt; Array<br />                (<br />                    [nr] =&gt; 0<br />                    [r] =&gt; 4<br />                    [n] =&gt; 4<br />                    [rn] =&gt; 4<br />                )<br /><br />            [count] =&gt; 4<br />            [key] =&gt; rn<br />            [value] =&gt; <br /><br />        )<br /><br />    [lines] =&gt; Array<br />        (<br />            [count] =&gt; 4<br />            [length] =&gt; 94<br />        )<br /><br />    [delimiter] =&gt; Array<br />        (<br />            [results] =&gt; Array<br />                (<br />                    [colon] =&gt; 0<br />                    [semicolon] =&gt; 0<br />                    [pipe] =&gt; 0<br />                    [tab] =&gt; 1<br />                    [comma] =&gt; 17<br />                )<br /><br />            [count] =&gt; 17<br />            [key] =&gt; comma<br />            [value] =&gt; ,<br />        )<br /><br />    [read_kb] =&gt; 10<br />)<br /><br />Enjoy!<br /><br />Ashley</span></code></div>
  </div>
 </div>
  <div class="note" id="98427">  <div class="votes">
    <div id="Vu98427">
    <a href="/manual/vote-note.php?id=98427&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98427">
    <a href="/manual/vote-note.php?id=98427&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98427" title="57% like this...">
    3
    </div>
  </div>
  <a href="#98427" class="name">
  <strong class="user"><em>jonathangrice at yahoo dot com</em></strong></a><a class="genanchor" href="#98427"> &para;</a><div class="date" title="2010-06-15 07:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98427">
<div class="phpcode"><code><span class="html">This is how to read a csv file into a multidimensional array.<br /><br /> <span class="default">&lt;?php<br />    </span><span class="comment"># Open the File.<br />    </span><span class="keyword">if ((</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"file.csv"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">) {<br />        </span><span class="comment"># Set the parent multidimensional array key to 0.<br />        </span><span class="default">$nn </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        while ((</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">, </span><span class="string">","</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">) {<br />            </span><span class="comment"># Count the total keys in the row.<br />            </span><span class="default">$c </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />            </span><span class="comment"># Populate the multidimensional array.<br />            </span><span class="keyword">for (</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++)<br />            {<br />                </span><span class="default">$csvarray</span><span class="keyword">[</span><span class="default">$nn</span><span class="keyword">][</span><span class="default">$x</span><span class="keyword">] = </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">];<br />            }<br />            </span><span class="default">$nn</span><span class="keyword">++;<br />        }<br />        </span><span class="comment"># Close the File.<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />    }<br />    </span><span class="comment"># Print the contents of the multidimensional array.<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$csvarray</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62403">  <div class="votes">
    <div id="Vu62403">
    <a href="/manual/vote-note.php?id=62403&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62403">
    <a href="/manual/vote-note.php?id=62403&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62403" title="58% like this...">
    2
    </div>
  </div>
  <a href="#62403" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#62403"> &para;</a><div class="date" title="2006-02-27 03:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62403">
<div class="phpcode"><code><span class="html">beware of characters of binary value == 0, as they seem to make fgetcsv ignore the remaining part of a line where they appear. <br /><br />Maybe this is normal under some convention I don't know, but a file exported from Excel had those as values for some cells *sometimes*, thus fgetcsv return variable cell counts for different lines. <br /><br />i'm using php 4.3</span></code></div>
  </div>
 </div>
  <div class="note" id="103276">  <div class="votes">
    <div id="Vu103276">
    <a href="/manual/vote-note.php?id=103276&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103276">
    <a href="/manual/vote-note.php?id=103276&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103276" title="56% like this...">
    3
    </div>
  </div>
  <a href="#103276" class="name">
  <strong class="user"><em>ifedinachukwu at yahoo dot com</em></strong></a><a class="genanchor" href="#103276"> &para;</a><div class="date" title="2011-04-05 05:43"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103276">
<div class="phpcode"><code><span class="html">I had a csv file whose fields included data with line endings (CRLF created by hitting the carriage returns in html textarea). Of course, the LF in these fields was escaped by MySQL during the creation of the csv. Problem is I could NOT get fgetcsv to work correctly here, since each and every LF was regarded as the end of a line of the csv file, even when it was escaped!<br /><br />Since what I wanted was to get THE FIRST LINE of the csv file, then count the number of fields by exploding on all unescaped commas, I had to resort to this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />First five lines of csv: the 4th row has a line-break within  a data field. The LFs represent line-feeds or \n<br />1,okonkwo joseph,nil,2010-01-12 17:41:40LF<br />2,okafor john,cq and sulphonamides,2010-01-12 17:58:03LF<br />3,okoye andrew,lives with hubby in abuja,2011-03-30 13:39:19LF<br />4,okeke peter,In 2001\, had appendicectomy in AbaCR<br />\LF<br />In 2004\, had ELCS at a private hoapital in Lagos,2011-03-30 13:39:19LF<br />5,adewale chris,cq and sulphonamides,2010-01-12 17:58:03LF<br /><br />*/<br /><br />        </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'file.csv'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />        </span><span class="default">$str</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$srch</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />            while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$char </span><span class="keyword">= </span><span class="default">fgetc</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))) {<br />                </span><span class="default">$str </span><span class="keyword">.= </span><span class="default">$char</span><span class="keyword">;</span><span class="comment">//use this to collect the string for outputting<br />                </span><span class="default">$srch </span><span class="keyword">.= </span><span class="default">$char</span><span class="keyword">;</span><span class="comment">//use this to search for LF, possible preceded by \'<br />                </span><span class="keyword">if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$srch</span><span class="keyword">) &gt; </span><span class="default">2</span><span class="keyword">){<br />                    </span><span class="default">$srch </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$srch</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);</span><span class="comment">//ie trim off the first char<br />                </span><span class="keyword">}<br />                if(</span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">1 </span><span class="keyword">&amp;&amp; </span><span class="default">$srch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] == </span><span class="default">chr</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">) &amp;&amp; </span><span class="default">$srch</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] != </span><span class="string">'\\'</span><span class="keyword">){</span><span class="comment">//chr(10) is LF, ie \n<br />                    </span><span class="keyword">break;</span><span class="comment">//if you get to the \n NOT preceded by \, that's the real line-ending, stop collecting the string; <br />                </span><span class="keyword">}<br />        <br />            </span><span class="default">$i</span><span class="keyword">++;<br />        }<br />        echo </span><span class="default">$str</span><span class="keyword">;</span><span class="comment">//should contain the first line as string<br /><br /></span><span class="default">?&gt;<br /></span>Perhaps there exists a more elegant solution to this issue, in which case I'd be glad to know!</span></code></div>
  </div>
 </div>
  <div class="note" id="34293">  <div class="votes">
    <div id="Vu34293">
    <a href="/manual/vote-note.php?id=34293&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34293">
    <a href="/manual/vote-note.php?id=34293&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34293" title="58% like this...">
    2
    </div>
  </div>
  <a href="#34293" class="name">
  <strong class="user"><em>kurtnorgaz at web dot de</em></strong></a><a class="genanchor" href="#34293"> &para;</a><div class="date" title="2003-07-21 12:00"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34293">
<div class="phpcode"><code><span class="html">You should pay attention to the fact that "fgetcsv" does remove leading TAB-chars "chr(9)" while reading the file.
<br />
<br />This means if you have a chr(9) as the first char in the file and you use fgetcsv this char is automaticaly deleted.
<br />
<br />Example:
<br />file content:
<br />chr(9)first#second#third#fourth
<br />
<br />source:
<br /><span class="default">&lt;?php $line </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">,</span><span class="default">500</span><span class="keyword">,</span><span class="string">"#"</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />The array $line looks like:
<br />$line[0] = first
<br />$line[1] = second
<br />$line[2] = third
<br />$line[3] = fourth
<br />
<br />and not
<br />$line[0] = chr(9)first
<br />$line[1] = second
<br />$line[2] = third
<br />$line[3] = fourth
<br />
<br />All chr(9) after another char is not deleted!
<br />
<br />Example:
<br />file content:
<br />Achr(9)first#second#third#fourth
<br />
<br />source:
<br /><span class="default">&lt;?php $line </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">,</span><span class="default">500</span><span class="keyword">,</span><span class="string">"#"</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />The array $line looks like:
<br />$line[0] = Achr(9)first
<br />$line[1] = second
<br />$line[2] = third
<br />$line[3] = fourth</span></code></div>
  </div>
 </div>
  <div class="note" id="94955">  <div class="votes">
    <div id="Vu94955">
    <a href="/manual/vote-note.php?id=94955&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94955">
    <a href="/manual/vote-note.php?id=94955&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94955" title="56% like this...">
    3
    </div>
  </div>
  <a href="#94955" class="name">
  <strong class="user"><em>jaimthorn at yahoo dot com</em></strong></a><a class="genanchor" href="#94955"> &para;</a><div class="date" title="2009-12-04 02:38"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94955">
<div class="phpcode"><code><span class="html">I used fgetcsv to read pipe-delimited data files, and ran into the following quirk.<br /><br />The data file contained data similar to this:<br /><br />RECNUM|TEXT|COMMENT<br />1|hi!|some comment<br />2|"error!|another comment<br />3|where does this go?|yet another comment<br />4|the end!"|last comment<br /><br />I read the file like this:<br /><br /><span class="default">&lt;?php<br />$row </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">( </span><span class="default">$fi</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="string">'|' </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This causes a problem on record 2: the quote immediately after the pipe causes the file to be read up to the following quote --in this case, in record 4.  Everything in between was stored in a single element of $row.<br /><br />In this particular case it is easy to spot, but my script was processing thousands of records and it took me some time to figure out what went wrong.<br /><br />The annoying thing is, that there doesn't seem to be an elegant fix.  You can't tell PHP not to use an enclosure --for example, like this:<br /><br /><span class="default">&lt;?php<br />$row </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">( </span><span class="default">$fi</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="string">'|'</span><span class="keyword">, </span><span class="string">'' </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />(Well, you can tell PHP that, but it doesn't work.)<br /><br />So you'd have to resort to a solution where you use an extremely unlikely enclosure, but since the enclosure can only be one character long, it may be hard to find.<br /><br />Alternatively (and IMNSHO: more elegantly), you can choose to read these files like this, instead:<br /><br /><span class="default">&lt;?php<br />$line </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">( </span><span class="default">$fi</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">);<br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">( </span><span class="string">'|'</span><span class="keyword">, </span><span class="default">$line </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />As it's more intuitive and resilient, I've decided to favor this 'construct' over fgetcsv from now on.</span></code></div>
  </div>
 </div>
  <div class="note" id="118234">  <div class="votes">
    <div id="Vu118234">
    <a href="/manual/vote-note.php?id=118234&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118234">
    <a href="/manual/vote-note.php?id=118234&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118234" title="55% like this...">
    1
    </div>
  </div>
  <a href="#118234" class="name">
  <strong class="user"><em>vladimir at luchaninov dot com</em></strong></a><a class="genanchor" href="#118234"> &para;</a><div class="date" title="2015-10-31 09:47"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118234">
<div class="phpcode"><code><span class="html">Here is an example how to use this function with generators<br /><a href="https://github.com/luchaninov/csv-file-loader" rel="nofollow" target="_blank">https://github.com/luchaninov/csv-file-loader</a> (composer require "luchaninov/csv-file-loader:1.*")<br /><br />$loader = new CsvFileLoader();<br />$loader-&gt;setFilename('/path/to/your_data.csv');<br /><br />foreach ($loader-&gt;getItems() as $item) {<br />    var_dump($item); // do something here<br />}<br /><br />If you have CSV-file like<br /><br />id,name,surname<br />1,Jack,Black<br />2,John,Doe<br /><br />you'll get 2 items<br /><br />['id' =&gt; '1', 'name' =&gt; 'Jack', 'surname' =&gt; 'Black']<br />['id' =&gt; '2', 'name' =&gt; 'John', 'surname' =&gt; 'Doe']</span></code></div>
  </div>
 </div>
  <div class="note" id="101295">  <div class="votes">
    <div id="Vu101295">
    <a href="/manual/vote-note.php?id=101295&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101295">
    <a href="/manual/vote-note.php?id=101295&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101295" title="54% like this...">
    4
    </div>
  </div>
  <a href="#101295" class="name">
  <strong class="user"><em>matasbi at gmail dot com</em></strong></a><a class="genanchor" href="#101295"> &para;</a><div class="date" title="2010-12-08 08:22"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101295">
<div class="phpcode"><code><span class="html">Parse from Microsoft Excel "Unicode Text (*.txt)" format:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">parse</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />    if ((</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">)) === </span><span class="default">FALSE</span><span class="keyword">) return;<br />    while ((</span><span class="default">$cols </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">, </span><span class="string">"\t"</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">) {<br />        foreach( </span><span class="default">$cols </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val </span><span class="keyword">) {<br />            </span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">trim</span><span class="keyword">( </span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] );<br />            </span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">'UCS-2'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">].</span><span class="string">"\0"</span><span class="keyword">) ;<br />            </span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'""'</span><span class="keyword">, </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />            </span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/^\"(.*)\"$/sim"</span><span class="keyword">, </span><span class="string">"$1"</span><span class="keyword">, </span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />        }<br />        echo </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120104">  <div class="votes">
    <div id="Vu120104">
    <a href="/manual/vote-note.php?id=120104&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120104">
    <a href="/manual/vote-note.php?id=120104&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120104" title="54% like this...">
    1
    </div>
  </div>
  <a href="#120104" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#120104"> &para;</a><div class="date" title="2016-11-01 01:26"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120104">
<div class="phpcode"><code><span class="html">The $escape parameter is completely unintuitive, but it is not broken. Here is a breakdown of fgetcsv()'s behaviour. In the examples I've used underscores (_) to show spaces and brackets ([]) to show individual fields:<br /><br />- Leading whitespace in each field will be stripped if it comes immediately before an enclosure: ___"foo" -&gt; [foo]<br />- There can only be one enclosure per field, although it will be concatenated with any data that appears between the end enclosure and the next delimiter/new line, including any trailing whitespaces ___"foo"_"bar"__ -&gt; [foo_"bar"__]<br />- If the field does not start with (leading whitespace +) an enclosure, the whole field is interpreted as raw data, even if enclosure characters appear elsewhere within the field: _foo"bar"_ -&gt; [_foo"bar"_]<br />- Delimiters cannot be escaped outside enclosures, they have to be enclosed instead. Delimiters don't need to be escaped inside enclosures: "foo,bar","baz,qux" -&gt; [foo,bar][baz,qux]; foo\,bar -&gt; [foo\][bar]; "foo\,bar" -&gt; [foo\,bar]<br />- Double enclosures inside single enclosures are converted to single enclosures: "foobar" -&gt; [foobar]; "foo""bar" -&gt; [foo"bar]; """foo""" -&gt; ["foo"]; ""foo"" -&gt; [foo""] (empty enclosure followed by raw data)<br />- The $escape parameter works as expected, but unlike enclosures DOES NOT get unescaped. It is necessary to unescape the data elsewhere in the code: "\"foo\"" -&gt; [\"foo\"]; "foo\"bar" -&gt; [foo\"bar]<br /><br />Note: the following data (which is a very common problem) is invalid: "\". Its structure is equivalent to "@ or in other words, an open enclosure, some data and no closing enclosure.<br /><br />The following functions can be used to get the expected behaviour:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Removes escape characters before both enclosures and escapes, but leaves everything else untouched, similiar to single quoting<br /></span><span class="keyword">function </span><span class="default">fgetcsv_unescape_enclosures_and_escapes</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$escape </span><span class="keyword">= </span><span class="string">'\\'</span><span class="keyword">) {<br />  </span><span class="default">$fields </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">, </span><span class="default">$escape</span><span class="keyword">);<br />  if (</span><span class="default">$fields</span><span class="keyword">) {<br />    </span><span class="default">$regex_enclosure </span><span class="keyword">= </span><span class="default">preg_quote</span><span class="keyword">(</span><span class="default">$enclosure</span><span class="keyword">);<br />    </span><span class="default">$regex_escape </span><span class="keyword">= </span><span class="default">preg_quote</span><span class="keyword">(</span><span class="default">$escape</span><span class="keyword">);<br />    </span><span class="default">$fields </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/</span><span class="keyword">{</span><span class="default">$regex_escape</span><span class="keyword">}</span><span class="string">(</span><span class="keyword">{</span><span class="default">$regex_enclosure</span><span class="keyword">}</span><span class="string">|</span><span class="keyword">{</span><span class="default">$regex_escape</span><span class="keyword">}</span><span class="string">)/"</span><span class="keyword">, </span><span class="string">'$1'</span><span class="keyword">, </span><span class="default">$fields</span><span class="keyword">);<br />  }<br />  return </span><span class="default">$fields</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Does NOT remove a lone escape character at the end of a field<br /></span><span class="keyword">function </span><span class="default">fgetcsv_unescape_all</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$escape </span><span class="keyword">= </span><span class="string">'\\'</span><span class="keyword">) {<br />  </span><span class="default">$fields </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">, </span><span class="default">$escape</span><span class="keyword">);<br />  if (</span><span class="default">$fields</span><span class="keyword">) {<br />    </span><span class="default">$regex_escape </span><span class="keyword">= </span><span class="default">preg_quote</span><span class="keyword">(</span><span class="default">$escape</span><span class="keyword">);<br />    </span><span class="default">$fields </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/</span><span class="keyword">{</span><span class="default">$regex_escape</span><span class="keyword">}</span><span class="string">(.)/s"</span><span class="keyword">, </span><span class="string">'$1'</span><span class="keyword">, </span><span class="default">$fields</span><span class="keyword">);<br />  }<br />  return </span><span class="default">$fields</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Removes lone escape characters at the end of fields<br /></span><span class="keyword">function </span><span class="default">fgetcsv_unescape_all_strip_last</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$escape </span><span class="keyword">= </span><span class="string">'\\'</span><span class="keyword">) {<br />  </span><span class="default">$fields </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">, </span><span class="default">$escape</span><span class="keyword">);<br />  if (</span><span class="default">$fields</span><span class="keyword">) {<br />    </span><span class="default">$regex_escape </span><span class="keyword">= </span><span class="default">preg_quote</span><span class="keyword">(</span><span class="default">$escape</span><span class="keyword">);<br />    </span><span class="default">$fields </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/</span><span class="keyword">{</span><span class="default">$regex_escape</span><span class="keyword">}</span><span class="string">(.?)/s"</span><span class="keyword">, </span><span class="string">'$1'</span><span class="keyword">, </span><span class="default">$fields</span><span class="keyword">);<br />  }<br />  return </span><span class="default">$fields</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Caution: ideally, there shouldn't be any unescaped escape characters outside enclosures; the field should be enclosed and escaped instead. If there are any, they could end up being removed as well, depending on the function used.</span></code></div>
  </div>
 </div>
  <div class="note" id="57802">  <div class="votes">
    <div id="Vu57802">
    <a href="/manual/vote-note.php?id=57802&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57802">
    <a href="/manual/vote-note.php?id=57802&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57802" title="54% like this...">
    4
    </div>
  </div>
  <a href="#57802" class="name">
  <strong class="user"><em>mortanon at gmail dot com</em></strong></a><a class="genanchor" href="#57802"> &para;</a><div class="date" title="2005-10-14 08:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57802">
<div class="phpcode"><code><span class="html">Hier is an example for a CSV Iterator.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">CsvIterator </span><span class="keyword">implements </span><span class="default">Iterator<br /></span><span class="keyword">{<br />    const </span><span class="default">ROW_SIZE </span><span class="keyword">= </span><span class="default">4096</span><span class="keyword">;<br />    </span><span class="comment">/**<br />     * The pointer to the cvs file.<br />     * @var resource<br />     * @access private<br />     */<br />    </span><span class="keyword">private </span><span class="default">$filePointer </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="comment">/**<br />     * The current element, which will <br />     * be returned on each iteration.<br />     * @var array<br />     * @access private<br />     */<br />    </span><span class="keyword">private </span><span class="default">$currentElement </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="comment">/**<br />     * The row counter. <br />     * @var int<br />     * @access private<br />     */<br />    </span><span class="keyword">private </span><span class="default">$rowCounter </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="comment">/**<br />     * The delimiter for the csv file. <br />     * @var str<br />     * @access private<br />     */<br />    </span><span class="keyword">private </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />    </span><span class="comment">/**<br />     * This is the constructor.It try to open the csv file.The method throws an exception<br />     * on failure.<br />     *<br />     * @access public<br />     * @param str $file The csv file.<br />     * @param str $delimiter The delimiter.<br />     *<br />     * @throws Exception<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">=</span><span class="string">','</span><span class="keyword">)<br />    {<br />        try {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filePointer </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">delimiter </span><span class="keyword">= </span><span class="default">$delimiter</span><span class="keyword">;<br />        }<br />        catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'The file "'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">'" cannot be read.'</span><span class="keyword">);<br />        } <br />    }<br /><br />    </span><span class="comment">/**<br />     * This method resets the file pointer.<br />     *<br />     * @access public<br />     */<br />    </span><span class="keyword">public function </span><span class="default">rewind</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rowCounter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">rewind</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filePointer</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * This method returns the current csv row as a 2 dimensional array<br />     *<br />     * @access public<br />     * @return array The current csv row as a 2 dimensional array<br />     */<br />    </span><span class="keyword">public function </span><span class="default">current</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentElement </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filePointer</span><span class="keyword">, </span><span class="default">self</span><span class="keyword">::</span><span class="default">ROW_SIZE</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">delimiter</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rowCounter</span><span class="keyword">++; <br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentElement</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * This method returns the current row number.<br />     *<br />     * @access public<br />     * @return int The current row number<br />     */<br />    </span><span class="keyword">public function </span><span class="default">key</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rowCounter</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * This method checks if the end of file is reached.<br />     *<br />     * @access public<br />     * @return boolean Returns true on EOF reached, false otherwise.<br />     */<br />    </span><span class="keyword">public function </span><span class="default">next</span><span class="keyword">() {<br />        return !</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filePointer</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * This method checks if the next row is a valid row.<br />     *<br />     * @access public<br />     * @return boolean If the next row is a valid row.<br />     */<br />    </span><span class="keyword">public function </span><span class="default">valid</span><span class="keyword">() {<br />        if (!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()) {<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filePointer</span><span class="keyword">);<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage :<br /><br /><span class="default">&lt;?php<br />$csvIterator </span><span class="keyword">= new </span><span class="default">CsvIterator</span><span class="keyword">(</span><span class="string">'/path/to/csvfile.csv'</span><span class="keyword">);<br />foreach (</span><span class="default">$csvIterator </span><span class="keyword">as </span><span class="default">$row </span><span class="keyword">=&gt; </span><span class="default">$data</span><span class="keyword">) {<br />    </span><span class="comment">// do somthing with $data<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100168">  <div class="votes">
    <div id="Vu100168">
    <a href="/manual/vote-note.php?id=100168&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100168">
    <a href="/manual/vote-note.php?id=100168&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100168" title="54% like this...">
    1
    </div>
  </div>
  <a href="#100168" class="name">
  <strong class="user"><em>Xander</em></strong></a><a class="genanchor" href="#100168"> &para;</a><div class="date" title="2010-09-29 01:42"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100168">
<div class="phpcode"><code><span class="html">I had a problem with multibytes. File was windows-1250, script was UTF-8 and set_locale wasn't work so I made a simple and safe workaround:
<br />
<br /><span class="default">&lt;?php
<br />$fc </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">'windows-1250'</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">, </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'csv'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">]));
<br />
<br />            </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">'tmp/import.tmp'</span><span class="keyword">, </span><span class="default">$fc</span><span class="keyword">);
<br />            </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'tmp/import.tmp'</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);
<br />            </span><span class="default">$rows </span><span class="keyword">= array();
<br />            while ((</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">";"</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">) {
<br />
<br />                </span><span class="default">$rows</span><span class="keyword">[] = </span><span class="default">$data</span><span class="keyword">;
<br />
<br />            }
<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />            </span><span class="default">unlink</span><span class="keyword">(</span><span class="string">'tmp/import.tmp'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />I hope You will find it out usefull.
<br />Sorry for my english.</span></code></div>
  </div>
 </div>
  <div class="note" id="129756">  <div class="votes">
    <div id="Vu129756">
    <a href="/manual/vote-note.php?id=129756&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129756">
    <a href="/manual/vote-note.php?id=129756&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129756" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129756" class="name">
  <strong class="user"><em>lzsiga at freemail dot c3 dot hu</em></strong></a><a class="genanchor" href="#129756"> &para;</a><div class="date" title="2024-09-18 01:11"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129756">
<div class="phpcode"><code><span class="html">There is a special syntax that prevents Excel from automagically convert field contents into dates or floating point numbers: ="fieldcontent" (equation symbol at the beginning). (Mind you, this is not to be used if content has line-end character of field-separator character inside.)<br /><br />Now this syntax is not supported by fgetcvs, though it can be implemented with some post-processing.</span></code></div>
  </div>
 </div>
  <div class="note" id="126638">  <div class="votes">
    <div id="Vu126638">
    <a href="/manual/vote-note.php?id=126638&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126638">
    <a href="/manual/vote-note.php?id=126638&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126638" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126638" class="name">
  <strong class="user"><em>kamil dot dratwa at gmail dot com</em></strong></a><a class="genanchor" href="#126638"> &para;</a><div class="date" title="2021-11-24 09:49"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126638">
<div class="phpcode"><code><span class="html">This part of the length parameter behavior description is tricky, because it's not mentioning that separator is considered as a char and converted into an empty string: "Otherwise the line is split in chunks of length characters (...)".<br /><br />First, take a look at the example of reading a line which does't contain  separators:<br /><br /><span class="default">&lt;?php<br />    file_put_contents</span><span class="keyword">(</span><span class="string">'data.csv'</span><span class="keyword">, </span><span class="string">'foo'</span><span class="keyword">); </span><span class="comment">// no separator<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'data.csv'</span><span class="keyword">, </span><span class="string">'c+'</span><span class="keyword">);<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Example above will output:<br />array(1) {<br />  [0]=&gt;<br />  string(2) "fo"<br />}<br /><br />Now let's add separators:<br /><br /><span class="default">&lt;?php<br />    file_put_contents</span><span class="keyword">(</span><span class="string">'data.csv'</span><span class="keyword">, </span><span class="string">'f,o,o'</span><span class="keyword">); </span><span class="comment">// commas used as a separators<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'data.csv'</span><span class="keyword">, </span><span class="string">'c+'</span><span class="keyword">);<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Second example will output:<br /><br />array(2) {<br />  [0]=&gt;<br />  string(1) "f"<br />  [1]=&gt;<br />  string(0) ""<br />}<br /><br />Now let's alter the length:<br /><br /><span class="default">&lt;?php<br />    file_put_contents</span><span class="keyword">(</span><span class="string">'data.csv'</span><span class="keyword">, </span><span class="string">'f,o,o'</span><span class="keyword">);<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'data.csv'</span><span class="keyword">, </span><span class="string">'c+'</span><span class="keyword">);<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">); </span><span class="comment">// notice updated length<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Output of the last example is:<br /><br />array(2) {<br />  [0]=&gt;<br />  string(1) "f"<br />  [1]=&gt;<br />  string(1) "o"<br />}<br /><br />The final conclusion is that while splitting line in chunks, separator is considered as a char during the read but then it's being converted into empty string. What's more, if separator is at the very first or last position of a chunk it will be included in the result array, but if it's somewhere between other chars, then it will be just ignored.</span></code></div>
  </div>
 </div>
  <div class="note" id="124769">  <div class="votes">
    <div id="Vu124769">
    <a href="/manual/vote-note.php?id=124769&amp;page=function.fgetcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124769">
    <a href="/manual/vote-note.php?id=124769&amp;page=function.fgetcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124769" title="100% like this...">
    1
    </div>
  </div>
  <a href="#124769" class="name">
  <strong class="user"><em>lewiscowles at me dot com</em></strong></a><a class="genanchor" href="#124769"> &para;</a><div class="date" title="2020-02-27 03:11"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124769">
<div class="phpcode"><code><span class="html">In-case anyone is having difficulty working around Byte-order-marks, the following should work. As usual no warranty, you should test your code... It's for UTF-8 only<br /><br />    <span class="default">&lt;?php<br /><br />    </span><span class="comment">//...<br /><br />    </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'wut.csv'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />    </span><span class="default">$firstThreeBytes </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fh </span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />    if(</span><span class="default">$firstThreeBytes </span><span class="keyword">!== </span><span class="string">"\xef\xbb\xbf"</span><span class="keyword">) {<br />        </span><span class="default">rewind</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />    }<br />    while((</span><span class="default">$row </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">10000</span><span class="keyword">, </span><span class="string">','</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />        </span><span class="comment">// Your code here<br />    </span><span class="keyword">}<br /><br /></span><span class="default">This basically reads 3 bytes </span><span class="keyword">and </span><span class="default">checks </span><span class="keyword">if </span><span class="default">they </span><span class="keyword">match<br /><br /></span><span class="default">https</span><span class="keyword">:</span><span class="comment">//en.wikipedia.org/wiki/Byte_order_mark has more information if you are dealing with other code-pages</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.fgetcsv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fgetcsv.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.filesystem.php">Filesystem Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.basename.php" title="basename">basename</a>
                        </li>
                                                <li class="">
                            <a href="function.chgrp.php" title="chgrp">chgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.chmod.php" title="chmod">chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.chown.php" title="chown">chown</a>
                        </li>
                                                <li class="">
                            <a href="function.clearstatcache.php" title="clearstatcache">clearstatcache</a>
                        </li>
                                                <li class="">
                            <a href="function.copy.php" title="copy">copy</a>
                        </li>
                                                <li class="">
                            <a href="function.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="function.dirname.php" title="dirname">dirname</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-free-space.php" title="disk_&#8203;free_&#8203;space">disk_&#8203;free_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-total-space.php" title="disk_&#8203;total_&#8203;space">disk_&#8203;total_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.diskfreespace.php" title="diskfreespace">diskfreespace</a>
                        </li>
                                                <li class="">
                            <a href="function.fclose.php" title="fclose">fclose</a>
                        </li>
                                                <li class="">
                            <a href="function.fdatasync.php" title="fdatasync">fdatasync</a>
                        </li>
                                                <li class="">
                            <a href="function.feof.php" title="feof">feof</a>
                        </li>
                                                <li class="">
                            <a href="function.fflush.php" title="fflush">fflush</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetc.php" title="fgetc">fgetc</a>
                        </li>
                                                <li class="current">
                            <a href="function.fgetcsv.php" title="fgetcsv">fgetcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fgets.php" title="fgets">fgets</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetss.php" title="fgetss">fgetss</a>
                        </li>
                                                <li class="">
                            <a href="function.file.php" title="file">file</a>
                        </li>
                                                <li class="">
                            <a href="function.file-exists.php" title="file_&#8203;exists">file_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.file-get-contents.php" title="file_&#8203;get_&#8203;contents">file_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.file-put-contents.php" title="file_&#8203;put_&#8203;contents">file_&#8203;put_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.fileatime.php" title="fileatime">fileatime</a>
                        </li>
                                                <li class="">
                            <a href="function.filectime.php" title="filectime">filectime</a>
                        </li>
                                                <li class="">
                            <a href="function.filegroup.php" title="filegroup">filegroup</a>
                        </li>
                                                <li class="">
                            <a href="function.fileinode.php" title="fileinode">fileinode</a>
                        </li>
                                                <li class="">
                            <a href="function.filemtime.php" title="filemtime">filemtime</a>
                        </li>
                                                <li class="">
                            <a href="function.fileowner.php" title="fileowner">fileowner</a>
                        </li>
                                                <li class="">
                            <a href="function.fileperms.php" title="fileperms">fileperms</a>
                        </li>
                                                <li class="">
                            <a href="function.filesize.php" title="filesize">filesize</a>
                        </li>
                                                <li class="">
                            <a href="function.filetype.php" title="filetype">filetype</a>
                        </li>
                                                <li class="">
                            <a href="function.flock.php" title="flock">flock</a>
                        </li>
                                                <li class="">
                            <a href="function.fnmatch.php" title="fnmatch">fnmatch</a>
                        </li>
                                                <li class="">
                            <a href="function.fopen.php" title="fopen">fopen</a>
                        </li>
                                                <li class="">
                            <a href="function.fpassthru.php" title="fpassthru">fpassthru</a>
                        </li>
                                                <li class="">
                            <a href="function.fputcsv.php" title="fputcsv">fputcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fputs.php" title="fputs">fputs</a>
                        </li>
                                                <li class="">
                            <a href="function.fread.php" title="fread">fread</a>
                        </li>
                                                <li class="">
                            <a href="function.fscanf.php" title="fscanf">fscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.fseek.php" title="fseek">fseek</a>
                        </li>
                                                <li class="">
                            <a href="function.fstat.php" title="fstat">fstat</a>
                        </li>
                                                <li class="">
                            <a href="function.fsync.php" title="fsync">fsync</a>
                        </li>
                                                <li class="">
                            <a href="function.ftell.php" title="ftell">ftell</a>
                        </li>
                                                <li class="">
                            <a href="function.ftruncate.php" title="ftruncate">ftruncate</a>
                        </li>
                                                <li class="">
                            <a href="function.fwrite.php" title="fwrite">fwrite</a>
                        </li>
                                                <li class="">
                            <a href="function.glob.php" title="glob">glob</a>
                        </li>
                                                <li class="">
                            <a href="function.is-dir.php" title="is_&#8203;dir">is_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.is-executable.php" title="is_&#8203;executable">is_&#8203;executable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-file.php" title="is_&#8203;file">is_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-link.php" title="is_&#8203;link">is_&#8203;link</a>
                        </li>
                                                <li class="">
                            <a href="function.is-readable.php" title="is_&#8203;readable">is_&#8203;readable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-uploaded-file.php" title="is_&#8203;uploaded_&#8203;file">is_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writable.php" title="is_&#8203;writable">is_&#8203;writable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writeable.php" title="is_&#8203;writeable">is_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.lchgrp.php" title="lchgrp">lchgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.lchown.php" title="lchown">lchown</a>
                        </li>
                                                <li class="">
                            <a href="function.link.php" title="link">link</a>
                        </li>
                                                <li class="">
                            <a href="function.linkinfo.php" title="linkinfo">linkinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.lstat.php" title="lstat">lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.mkdir.php" title="mkdir">mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.move-uploaded-file.php" title="move_&#8203;uploaded_&#8203;file">move_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-file.php" title="parse_&#8203;ini_&#8203;file">parse_&#8203;ini_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-string.php" title="parse_&#8203;ini_&#8203;string">parse_&#8203;ini_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.pathinfo.php" title="pathinfo">pathinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.pclose.php" title="pclose">pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.popen.php" title="popen">popen</a>
                        </li>
                                                <li class="">
                            <a href="function.readfile.php" title="readfile">readfile</a>
                        </li>
                                                <li class="">
                            <a href="function.readlink.php" title="readlink">readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath.php" title="realpath">realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-get.php" title="realpath_&#8203;cache_&#8203;get">realpath_&#8203;cache_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-size.php" title="realpath_&#8203;cache_&#8203;size">realpath_&#8203;cache_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.rename.php" title="rename">rename</a>
                        </li>
                                                <li class="">
                            <a href="function.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="function.rmdir.php" title="rmdir">rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.set-file-buffer.php" title="set_&#8203;file_&#8203;buffer">set_&#8203;file_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="function.symlink.php" title="symlink">symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.tempnam.php" title="tempnam">tempnam</a>
                        </li>
                                                <li class="">
                            <a href="function.tmpfile.php" title="tmpfile">tmpfile</a>
                        </li>
                                                <li class="">
                            <a href="function.touch.php" title="touch">touch</a>
                        </li>
                                                <li class="">
                            <a href="function.umask.php" title="umask">umask</a>
                        </li>
                                                <li class="">
                            <a href="function.unlink.php" title="unlink">unlink</a>
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
