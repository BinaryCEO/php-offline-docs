<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imageftbbox - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imageftbbox.php">
 <link rel="shorturl" href="https://www.php.net/imageftbbox">
 <link rel="alternate" href="https://www.php.net/imageftbbox" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagefontwidth.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagefttext.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imageftbbox.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imageftbbox.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imageftbbox.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imageftbbox.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imageftbbox.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imageftbbox.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imageftbbox.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imageftbbox.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imageftbbox.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imageftbbox.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imageftbbox.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Give the bounding box of a text using fonts via freetype2" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imageftbbox - Manual" />
<meta name="twitter:description" content="Give the bounding box of a text using fonts via freetype2" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imageftbbox - Manual" />
<meta itemprop="description" content="Give the bounding box of a text using fonts via freetype2" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Give the bounding box of a text using fonts via freetype2" />

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
        <a href="function.imagefttext.php">
          imagefttext &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagefontwidth.php">
          &laquo; imagefontwidth        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.image.php'>GD</a></li>      <li><a href='ref.image.php'>GD and Image Functions</a></li>      </ul>
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
            <option value='en/function.imageftbbox.php' selected="selected">English</option>
            <option value='de/function.imageftbbox.php'>German</option>
            <option value='es/function.imageftbbox.php'>Spanish</option>
            <option value='fr/function.imageftbbox.php'>French</option>
            <option value='it/function.imageftbbox.php'>Italian</option>
            <option value='ja/function.imageftbbox.php'>Japanese</option>
            <option value='pt_BR/function.imageftbbox.php'>Brazilian Portuguese</option>
            <option value='ru/function.imageftbbox.php'>Russian</option>
            <option value='tr/function.imageftbbox.php'>Turkish</option>
            <option value='uk/function.imageftbbox.php'>Ukrainian</option>
            <option value='zh/function.imageftbbox.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imageftbbox" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imageftbbox</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.7, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imageftbbox</span> &mdash; <span class="dc-title">Give the bounding box of a text using fonts via freetype2</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imageftbbox-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imageftbbox</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$size</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$angle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$font_filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This function calculates and returns the bounding box in pixels
   for a FreeType text.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Prior to PHP 8.0.0, <span class="function"><strong>imageftbbox()</strong></span> was an extended variant of
    <span class="function"><a href="function.imagettfbbox.php" class="function">imagettfbbox()</a></span> which additionally supported the
    <code class="parameter">options</code>.
    As of PHP 8.0.0, <span class="function"><a href="function.imagettfbbox.php" class="function">imagettfbbox()</a></span> is an alias of <span class="function"><strong>imageftbbox()</strong></span>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imageftbbox-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">size</code></dt>
     <dd>
      <p class="para">The font size in points.</p>
     </dd>
    
    
     <dt><code class="parameter">angle</code></dt>
     <dd>
      <p class="para">
       Angle in degrees in which <code class="parameter">string</code> will be 
       measured.
      </p>
     </dd>
    
    
     <dt><code class="parameter">font_filename</code></dt>
     <dd>
      <p class="para">
       The name of the TrueType font file (can be a URL). Depending on
       which version of the GD library that PHP is using, it may attempt to
       search for files that do not begin with a leading &#039;/&#039; by appending
       &#039;.ttf&#039; to the filename and searching along a library-defined font path.
      </p>
     </dd>
    
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string to be measured.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       <table class="doctable table">
       <caption><strong>Possible array indexes for <code class="parameter">options</code></strong></caption>
        
         <thead>
          <tr>
           <th>Key</th>
           <th>Type</th>
           <th>Meaning</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><code class="literal">linespacing</code></td>
           <td><span class="type"><a href="language.types.float.php" class="type float">float</a></span></td>
           <td>Defines drawing linespacing</td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imageftbbox-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>imageftbbox()</strong></span> returns an array with 8
   elements representing four points making the bounding box of the
   text:
   <table class="doctable informaltable">
    
     <tbody class="tbody">
      <tr>
       <td>0</td>
       <td>lower left corner, X position</td>
      </tr>

      <tr>
       <td>1</td>
       <td>lower left corner, Y position</td>
      </tr>

      <tr>
       <td>2</td>
       <td>lower right corner, X position</td>
      </tr>

      <tr>
       <td>3</td>
       <td>lower right corner, Y position</td>
      </tr>

      <tr>
       <td>4</td>
       <td>upper right corner, X position</td>
      </tr>

      <tr>
       <td>5</td>
       <td>upper right corner, Y position</td>
      </tr>

      <tr>
       <td>6</td>
       <td>upper left corner, X position</td>
      </tr>

      <tr>
       <td>7</td>
       <td>upper left corner, Y position</td>
      </tr>

     </tbody>
    
   </table>

  </p>
  <p class="para">
   The points are relative to the <em>text</em> regardless of the
   <code class="parameter">angle</code>, so &quot;upper left&quot; means in the top left-hand 
   corner seeing the text horizontally.
  </p>
  <p class="para">
   On failure, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.imageftbbox-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2901">
    <p><strong>Example #1 <span class="function"><strong>imageftbbox()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a 300x150 image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">300</span><span style="color: #007700">, </span><span style="color: #0000BB">150</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$black </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$white </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Set the background to be white<br /></span><span style="color: #0000BB">imagefilledrectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">299</span><span style="color: #007700">, </span><span style="color: #0000BB">299</span><span style="color: #007700">, </span><span style="color: #0000BB">$white</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Path to our font file<br /></span><span style="color: #0000BB">$font </span><span style="color: #007700">= </span><span style="color: #DD0000">'./arial.ttf'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// First we create our bounding box<br /></span><span style="color: #0000BB">$bbox </span><span style="color: #007700">= </span><span style="color: #0000BB">imageftbbox</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$font</span><span style="color: #007700">, </span><span style="color: #DD0000">'The PHP Documentation Group'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// This is our cordinates for X and Y<br /></span><span style="color: #0000BB">$x </span><span style="color: #007700">= </span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] + (</span><span style="color: #0000BB">imagesx</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">) / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - (</span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">] / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$y </span><span style="color: #007700">= </span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] + (</span><span style="color: #0000BB">imagesy</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">) / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - (</span><span style="color: #0000BB">$bbox</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">] / </span><span style="color: #0000BB">2</span><span style="color: #007700">) - </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">imagefttext</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">, </span><span style="color: #0000BB">$black</span><span style="color: #007700">, </span><span style="color: #0000BB">$font</span><span style="color: #007700">, </span><span style="color: #DD0000">'The PHP Documentation Group'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output to browser<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imageftbbox-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is only available if
PHP is compiled with freetype support (<strong class="option configure">--with-freetype-dir=DIR</strong>)
</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.imageftbbox-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagefttext.php" class="function" rel="rdfs-seeAlso">imagefttext()</a> - Write text to the image using fonts using FreeType 2</span></li>
   <li><span class="function"><a href="function.imagettfbbox.php" class="function" rel="rdfs-seeAlso">imagettfbbox()</a> - Give the bounding box of a text using TrueType fonts</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imageftbbox.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imageftbbox%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imageftbbox&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imageftbbox.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="54781">  <div class="votes">
    <div id="Vu54781">
    <a href="/manual/vote-note.php?id=54781&amp;page=function.imageftbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54781">
    <a href="/manual/vote-note.php?id=54781&amp;page=function.imageftbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54781" title="75% like this...">
    2
    </div>
  </div>
  <a href="#54781" class="name">
  <strong class="user"><em>fernando</em></strong></a><a class="genanchor" href="#54781"> &para;</a><div class="date" title="2005-07-14 01:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54781">
<div class="phpcode"><code><span class="html">imagettfbbox() returns an array with 8 elements representing four points making the bounding box of the text: <br /><br />0 lower left corner, X position <br />1 lower left corner, Y position <br />2 lower right corner, X position <br />3 lower right corner, Y position <br />4 upper right corner, X position <br />5 upper right corner, Y position <br />6 upper left corner, X position <br />7 upper left corner, Y position <br /><br />The points are relative to the text regardless of the angle, so "upper left" means in the top left-hand corner seeing the text horizontally.</span></code></div>
  </div>
 </div>
  <div class="note" id="21489">  <div class="votes">
    <div id="Vu21489">
    <a href="/manual/vote-note.php?id=21489&amp;page=function.imageftbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21489">
    <a href="/manual/vote-note.php?id=21489&amp;page=function.imageftbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21489" title="66% like this...">
    1
    </div>
  </div>
  <a href="#21489" class="name">
  <strong class="user"><em>phpimageftbbox at juggernaut dot com dot au</em></strong></a><a class="genanchor" href="#21489"> &para;</a><div class="date" title="2002-05-14 09:56"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21489">
<div class="phpcode"><code><span class="html">This function can be used to generate right-aligned text. Just work out how wide the text image is and position it accordingly. Example:<br /><br />$i_width  = 200;<br />$i_height = 40;<br /><br />$string = "Hello World!";<br />$pointsize = 10;<br />$fontfile = "/usr/local/lib/ttf/Helve.ttf";<br /><br />$im = imagecreate($i_width, $i_height);<br />$black = imagecolorallocate ($im, 0, 0, 0);<br />$white = imagecolorallocate ($im, 255, 255, 255);<br /><br />$string_size = ImageFtBbox($pointsize, 0, $fontfile, $string, array("linespacing" =&gt; 1));<br />$s_width  = $string_size[4];<br />$s_height = $string_size[5];<br /><br />ImageFtText($im, $pointsize, 0, $i_width - $s_width - 1,  0 - $s_height, $white, $fontfile, $string, array("linespacing" =&gt; 1));<br /><br />Header ("Content-type: image/png");<br />ImagePNG ($im);<br />ImageDestroy ($im);</span></code></div>
  </div>
 </div>
  <div class="note" id="41787">  <div class="votes">
    <div id="Vu41787">
    <a href="/manual/vote-note.php?id=41787&amp;page=function.imageftbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41787">
    <a href="/manual/vote-note.php?id=41787&amp;page=function.imageftbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41787" title="100% like this...">
    1
    </div>
  </div>
  <a href="#41787" class="name">
  <strong class="user"><em>sectionthirty1 at yahoo dot com</em></strong></a><a class="genanchor" href="#41787"> &para;</a><div class="date" title="2004-04-22 02:50"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41787">
<div class="phpcode"><code><span class="html">Here is a handy example I used to center "dynamic text" onto an image.  <br /><br />Ex. Say you want to center a clients IP Address onto a picture.  <br /><br />$ip=$_SERVER['REMOTE_ADDR'];    <br /><br />$details = imageftbbox($fontsize, 0, $font, $ip, array("linespacing" =&gt; 1));<br /><br />$xcoord = ($imgwidth - $details[4]) / 2;  // this will return the x coordinate centered to your specific image.  Make sure  you set $imgwidth to the width of the image you are using.      <br /><br />imagettftext($image, $fontsize, 0, $xcoord, $ycoord, $fontcolor, $font, $ip);</span></code></div>
  </div>
 </div>
  <div class="note" id="60166">  <div class="votes">
    <div id="Vu60166">
    <a href="/manual/vote-note.php?id=60166&amp;page=function.imageftbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60166">
    <a href="/manual/vote-note.php?id=60166&amp;page=function.imageftbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60166" title="50% like this...">
    0
    </div>
  </div>
  <a href="#60166" class="name">
  <strong class="user"><em>theo v e -2</em></strong></a><a class="genanchor" href="#60166"> &para;</a><div class="date" title="2005-12-28 07:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60166">
<div class="phpcode"><code><span class="html">ah... the problem between imageftbbox() and imagefttext() lies in the mirroring of the y-axes.<br />Below you see, for a font-size 16 the boudingboxes of "b", "p" and "bp":<br />&lt; b: w=9 h=15<br />b(0,-1)<br />b(9,-1)<br />b(9,-16)<br />b(0,-16)<br />&lt; p: w=9 h=16<br />p(0,4)<br />p(9,4)<br />p(9,-12)<br />p(0,-12)<br />&lt; bp: w=20 h=20<br />bp(0,4)<br />bp(20,4)<br />bp(20,-16)<br />bp(0,-16)<br />If drawing "bp" using imagefttext() at y=0, the the top of "bp" indeed is at y=-16, and the bottom of "bp" at y=4. (Plus or minus a pixel here and there, because at y=0 there actually is a vissible pixel.)</span></code></div>
  </div>
 </div>
  <div class="note" id="121231">  <div class="votes">
    <div id="Vu121231">
    <a href="/manual/vote-note.php?id=121231&amp;page=function.imageftbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121231">
    <a href="/manual/vote-note.php?id=121231&amp;page=function.imageftbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121231" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#121231" class="name">
  <strong class="user"><em>pablocorezzola at gmail dot com</em></strong></a><a class="genanchor" href="#121231"> &para;</a><div class="date" title="2017-06-15 03:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121231">
<div class="phpcode"><code><span class="html">//EXAMPLE - Center text<br /><br />function newText($im, $size, $angle= 0, $x, $y, $color, $font, $text,$align = "left",$border=false,$width=0,$height=0){<br />    <br />    if($align == "center")<br />    {<br />        if ($border == true ){<br />           imagerectangle($im, $x, $y, $x +$width, $y + $height, $color);<br />        }<br />        $bbox = imageftbbox($size, 0, $font, $text);<br /><br />        // Marcamos el ancho y alto<br />        $s_width  = $bbox[4];<br />        $s_height = $bbox[5];  <br />        <br />        $y = $y + ($height-$s_height)/2;<br />        $x = $x + ($width-$s_width)/2;<br /><br />    }<br />     <br />    imagettftext($im, $size, $angle, $x, $y, $color, $font, $text);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="79280">  <div class="votes">
    <div id="Vu79280">
    <a href="/manual/vote-note.php?id=79280&amp;page=function.imageftbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79280">
    <a href="/manual/vote-note.php?id=79280&amp;page=function.imageftbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79280" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#79280" class="name">
  <strong class="user"><em>Johan</em></strong></a><a class="genanchor" href="#79280"> &para;</a><div class="date" title="2007-11-19 07:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79280">
<div class="phpcode"><code><span class="html">For alignment i used this method:<br /><br />if($align == "center" || $align == "right")<br />    {<br />        $verticaltxtspace = $backwidth - (2 * $posx);        <br />        $spacepositions = imagettfbbox($size, $angle, "fonts/verdanaz.ttf", " ");         <br />        $spacepx = $spacepositions[4] - $spacepositions[0];        <br />        <br />        // Split text in lines<br />        $lines = split("[\r][\n]", $text);        <br />        for($count = 0; $count &lt; count($lines); $count++)<br />        {<br />            $textpositions = imagettfbbox($size, $angle, "fonts/verdanaz.ttf", $lines[$count]);            <br />            $textpx = $textpositions[2] - $textpositions[0];<br />            <br />            if($align == "right")<br />            {<br />                $spaces = ($verticaltxtspace - $textpx) / $spacepx;<br />            }<br />            else if($align == "center")<br />            {<br />                $spaces = (($verticaltxtspace - $textpx)/2) / $spacepx;<br />            }<br />            <br />            // Add spaces<br />            $line = $lines[$count];<br />            for($i = 0; $i &lt; $spaces; $i++)<br />            {<br />                $line = " " . $line;<br />            }<br />            $lines[$count] = $line;<br />        }<br />        <br />        // Create new text of lines<br />        $text = "";<br />        for($count = 0; $count &lt; count($lines); $count++)<br />        {<br />            $text .= $lines[$count] . "\r\n";<br />        }        <br />    }<br />    <br />        <br />    //    Draw the shadow text on de shadow<br />    imagettftext($background, $size, $angle, $posx, $posy, $textcolor, "fonts/verdanaz.ttf",  $text);</span></code></div>
  </div>
 </div>
  <div class="note" id="24977">  <div class="votes">
    <div id="Vu24977">
    <a href="/manual/vote-note.php?id=24977&amp;page=function.imageftbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24977">
    <a href="/manual/vote-note.php?id=24977&amp;page=function.imageftbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24977" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#24977" class="name">
  <strong class="user"><em>ta at NOSPAM dot magicsquare dot info</em></strong></a><a class="genanchor" href="#24977"> &para;</a><div class="date" title="2002-09-06 09:37"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24977">
<div class="phpcode"><code><span class="html">i've found a work around for this situation<br /><br />it seems that height is directly proportional to line spacing so you just have to apply the same factor to image height<br /><br />for example :<br /><br />$spacing = 0.7;<br />$params = array("linespacing" =&gt; $spacing);<br /><br />$box = imageftbbox ($size, 0, $font, $text, $params);<br />$tw=$box[4]-$box[0]; //image width<br />$th=($box[1]-$box[5])*$spacing; //image height</span></code></div>
  </div>
 </div>
  <div class="note" id="42737">  <div class="votes">
    <div id="Vu42737">
    <a href="/manual/vote-note.php?id=42737&amp;page=function.imageftbbox&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42737">
    <a href="/manual/vote-note.php?id=42737&amp;page=function.imageftbbox&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42737" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#42737" class="name">
  <strong class="user"><em>groomed at users dot sf dot net</em></strong></a><a class="genanchor" href="#42737"> &para;</a><div class="date" title="2004-05-27 12:38"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42737">
<div class="phpcode"><code><span class="html">ImageFTBBox returns a bounding box, not metrics, as some (most?) of the notes above seem to assume. The 8 values it returns specify the 4 corners of this bounding box. So to properly determine the width and height of a string you need to do:<br /><br />$bbox = ImageFTBBox(...);<br />$width = abs($bbox[0]) + abs($bbox[2]); // distance from left to right<br />$height = abs($bbox[1]) + abs($bbox[5]); // distance from top to bottom</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imageftbbox&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imageftbbox.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.image.php">GD and Image Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.gd-info.php" title="gd_&#8203;info">gd_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.getimagesize.php" title="getimagesize">getimagesize</a>
                        </li>
                                                <li class="">
                            <a href="function.getimagesizefromstring.php" title="getimagesizefromstring">getimagesizefromstring</a>
                        </li>
                                                <li class="">
                            <a href="function.image-type-to-extension.php" title="image_&#8203;type_&#8203;to_&#8203;extension">image_&#8203;type_&#8203;to_&#8203;extension</a>
                        </li>
                                                <li class="">
                            <a href="function.image-type-to-mime-type.php" title="image_&#8203;type_&#8203;to_&#8203;mime_&#8203;type">image_&#8203;type_&#8203;to_&#8203;mime_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.image2wbmp.php" title="image2wbmp">image2wbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffine.php" title="imageaffine">imageaffine</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffinematrixconcat.php" title="imageaffinematrixconcat">imageaffinematrixconcat</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffinematrixget.php" title="imageaffinematrixget">imageaffinematrixget</a>
                        </li>
                                                <li class="">
                            <a href="function.imagealphablending.php" title="imagealphablending">imagealphablending</a>
                        </li>
                                                <li class="">
                            <a href="function.imageantialias.php" title="imageantialias">imageantialias</a>
                        </li>
                                                <li class="">
                            <a href="function.imagearc.php" title="imagearc">imagearc</a>
                        </li>
                                                <li class="">
                            <a href="function.imageavif.php" title="imageavif">imageavif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagebmp.php" title="imagebmp">imagebmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagechar.php" title="imagechar">imagechar</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecharup.php" title="imagecharup">imagecharup</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorallocate.php" title="imagecolorallocate">imagecolorallocate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorallocatealpha.php" title="imagecolorallocatealpha">imagecolorallocatealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorat.php" title="imagecolorat">imagecolorat</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosest.php" title="imagecolorclosest">imagecolorclosest</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosestalpha.php" title="imagecolorclosestalpha">imagecolorclosestalpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosesthwb.php" title="imagecolorclosesthwb">imagecolorclosesthwb</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolordeallocate.php" title="imagecolordeallocate">imagecolordeallocate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorexact.php" title="imagecolorexact">imagecolorexact</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorexactalpha.php" title="imagecolorexactalpha">imagecolorexactalpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolormatch.php" title="imagecolormatch">imagecolormatch</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorresolve.php" title="imagecolorresolve">imagecolorresolve</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorresolvealpha.php" title="imagecolorresolvealpha">imagecolorresolvealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorset.php" title="imagecolorset">imagecolorset</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorsforindex.php" title="imagecolorsforindex">imagecolorsforindex</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorstotal.php" title="imagecolorstotal">imagecolorstotal</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolortransparent.php" title="imagecolortransparent">imagecolortransparent</a>
                        </li>
                                                <li class="">
                            <a href="function.imageconvolution.php" title="imageconvolution">imageconvolution</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopy.php" title="imagecopy">imagecopy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopymerge.php" title="imagecopymerge">imagecopymerge</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopymergegray.php" title="imagecopymergegray">imagecopymergegray</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopyresampled.php" title="imagecopyresampled">imagecopyresampled</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopyresized.php" title="imagecopyresized">imagecopyresized</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreate.php" title="imagecreate">imagecreate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromavif.php" title="imagecreatefromavif">imagecreatefromavif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefrombmp.php" title="imagecreatefrombmp">imagecreatefrombmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd.php" title="imagecreatefromgd">imagecreatefromgd</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd2.php" title="imagecreatefromgd2">imagecreatefromgd2</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd2part.php" title="imagecreatefromgd2part">imagecreatefromgd2part</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgif.php" title="imagecreatefromgif">imagecreatefromgif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromjpeg.php" title="imagecreatefromjpeg">imagecreatefromjpeg</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefrompng.php" title="imagecreatefrompng">imagecreatefrompng</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromstring.php" title="imagecreatefromstring">imagecreatefromstring</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromtga.php" title="imagecreatefromtga">imagecreatefromtga</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromwbmp.php" title="imagecreatefromwbmp">imagecreatefromwbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromwebp.php" title="imagecreatefromwebp">imagecreatefromwebp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromxbm.php" title="imagecreatefromxbm">imagecreatefromxbm</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromxpm.php" title="imagecreatefromxpm">imagecreatefromxpm</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatetruecolor.php" title="imagecreatetruecolor">imagecreatetruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecrop.php" title="imagecrop">imagecrop</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecropauto.php" title="imagecropauto">imagecropauto</a>
                        </li>
                                                <li class="">
                            <a href="function.imagedashedline.php" title="imagedashedline">imagedashedline</a>
                        </li>
                                                <li class="">
                            <a href="function.imagedestroy.php" title="imagedestroy">imagedestroy</a>
                        </li>
                                                <li class="">
                            <a href="function.imageellipse.php" title="imageellipse">imageellipse</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefill.php" title="imagefill">imagefill</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledarc.php" title="imagefilledarc">imagefilledarc</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledellipse.php" title="imagefilledellipse">imagefilledellipse</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledpolygon.php" title="imagefilledpolygon">imagefilledpolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledrectangle.php" title="imagefilledrectangle">imagefilledrectangle</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilltoborder.php" title="imagefilltoborder">imagefilltoborder</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilter.php" title="imagefilter">imagefilter</a>
                        </li>
                                                <li class="">
                            <a href="function.imageflip.php" title="imageflip">imageflip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefontheight.php" title="imagefontheight">imagefontheight</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefontwidth.php" title="imagefontwidth">imagefontwidth</a>
                        </li>
                                                <li class="current">
                            <a href="function.imageftbbox.php" title="imageftbbox">imageftbbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefttext.php" title="imagefttext">imagefttext</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegammacorrect.php" title="imagegammacorrect">imagegammacorrect</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegd.php" title="imagegd">imagegd</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegd2.php" title="imagegd2">imagegd2</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegetclip.php" title="imagegetclip">imagegetclip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegetinterpolation.php" title="imagegetinterpolation">imagegetinterpolation</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegif.php" title="imagegif">imagegif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegrabscreen.php" title="imagegrabscreen">imagegrabscreen</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegrabwindow.php" title="imagegrabwindow">imagegrabwindow</a>
                        </li>
                                                <li class="">
                            <a href="function.imageinterlace.php" title="imageinterlace">imageinterlace</a>
                        </li>
                                                <li class="">
                            <a href="function.imageistruecolor.php" title="imageistruecolor">imageistruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagejpeg.php" title="imagejpeg">imagejpeg</a>
                        </li>
                                                <li class="">
                            <a href="function.imagelayereffect.php" title="imagelayereffect">imagelayereffect</a>
                        </li>
                                                <li class="">
                            <a href="function.imageline.php" title="imageline">imageline</a>
                        </li>
                                                <li class="">
                            <a href="function.imageloadfont.php" title="imageloadfont">imageloadfont</a>
                        </li>
                                                <li class="">
                            <a href="function.imageopenpolygon.php" title="imageopenpolygon">imageopenpolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepalettecopy.php" title="imagepalettecopy">imagepalettecopy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepalettetotruecolor.php" title="imagepalettetotruecolor">imagepalettetotruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepng.php" title="imagepng">imagepng</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepolygon.php" title="imagepolygon">imagepolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagerectangle.php" title="imagerectangle">imagerectangle</a>
                        </li>
                                                <li class="">
                            <a href="function.imageresolution.php" title="imageresolution">imageresolution</a>
                        </li>
                                                <li class="">
                            <a href="function.imagerotate.php" title="imagerotate">imagerotate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesavealpha.php" title="imagesavealpha">imagesavealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagescale.php" title="imagescale">imagescale</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetbrush.php" title="imagesetbrush">imagesetbrush</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetclip.php" title="imagesetclip">imagesetclip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetinterpolation.php" title="imagesetinterpolation">imagesetinterpolation</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetpixel.php" title="imagesetpixel">imagesetpixel</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetstyle.php" title="imagesetstyle">imagesetstyle</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetthickness.php" title="imagesetthickness">imagesetthickness</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesettile.php" title="imagesettile">imagesettile</a>
                        </li>
                                                <li class="">
                            <a href="function.imagestring.php" title="imagestring">imagestring</a>
                        </li>
                                                <li class="">
                            <a href="function.imagestringup.php" title="imagestringup">imagestringup</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesx.php" title="imagesx">imagesx</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesy.php" title="imagesy">imagesy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagetruecolortopalette.php" title="imagetruecolortopalette">imagetruecolortopalette</a>
                        </li>
                                                <li class="">
                            <a href="function.imagettfbbox.php" title="imagettfbbox">imagettfbbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imagettftext.php" title="imagettftext">imagettftext</a>
                        </li>
                                                <li class="">
                            <a href="function.imagetypes.php" title="imagetypes">imagetypes</a>
                        </li>
                                                <li class="">
                            <a href="function.imagewbmp.php" title="imagewbmp">imagewbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagewebp.php" title="imagewebp">imagewebp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagexbm.php" title="imagexbm">imagexbm</a>
                        </li>
                                                <li class="">
                            <a href="function.iptcembed.php" title="iptcembed">iptcembed</a>
                        </li>
                                                <li class="">
                            <a href="function.iptcparse.php" title="iptcparse">iptcparse</a>
                        </li>
                                                <li class="">
                            <a href="function.jpeg2wbmp.php" title="jpeg2wbmp">jpeg2wbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.png2wbmp.php" title="png2wbmp">png2wbmp</a>
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
