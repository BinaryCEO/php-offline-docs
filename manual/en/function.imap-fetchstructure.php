<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imap_fetchstructure - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imap-fetchstructure.php">
 <link rel="shorturl" href="https://www.php.net/imap-fetchstructure">
 <link rel="alternate" href="https://www.php.net/imap-fetchstructure" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.imap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imap-fetchmime.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imap-fetchtext.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imap-fetchstructure.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imap-fetchstructure.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imap-fetchstructure.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imap-fetchstructure.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imap-fetchstructure.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imap-fetchstructure.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imap-fetchstructure.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imap-fetchstructure.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imap-fetchstructure.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imap-fetchstructure.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imap-fetchstructure.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Read the structure of a particular message" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imap_fetchstructure - Manual" />
<meta name="twitter:description" content="Read the structure of a particular message" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imap_fetchstructure - Manual" />
<meta itemprop="description" content="Read the structure of a particular message" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Read the structure of a particular message" />

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
        <a href="function.imap-fetchtext.php">
          imap_fetchtext &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imap-fetchmime.php">
          &laquo; imap_fetchmime        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.mail.php'>Mail Related Extensions</a></li>      <li><a href='book.imap.php'>IMAP</a></li>      <li><a href='ref.imap.php'>IMAP Functions</a></li>      </ul>
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
            <option value='en/function.imap-fetchstructure.php' selected="selected">English</option>
            <option value='de/function.imap-fetchstructure.php'>German</option>
            <option value='es/function.imap-fetchstructure.php'>Spanish</option>
            <option value='fr/function.imap-fetchstructure.php'>French</option>
            <option value='it/function.imap-fetchstructure.php'>Italian</option>
            <option value='ja/function.imap-fetchstructure.php'>Japanese</option>
            <option value='pt_BR/function.imap-fetchstructure.php'>Brazilian Portuguese</option>
            <option value='ru/function.imap-fetchstructure.php'>Russian</option>
            <option value='tr/function.imap-fetchstructure.php'>Turkish</option>
            <option value='uk/function.imap-fetchstructure.php'>Ukrainian</option>
            <option value='zh/function.imap-fetchstructure.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imap-fetchstructure" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imap_fetchstructure</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imap_fetchstructure</span> &mdash; <span class="dc-title">Read the structure of a particular message</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imap-fetchstructure-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imap_fetchstructure</strong></span>(<span class="methodparam"><span class="type"><a href="class.imap-connection.php" class="type IMAP\Connection">IMAP\Connection</a></span> <code class="parameter">$imap</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$message_num</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="class.stdclass.php" class="type stdClass">stdClass</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Fetches all the structured information for a given message. 
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imap-fetchstructure-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">imap</code></dt><dd><p class="para">An <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span> instance.</p></dd>
    
     <dt><code class="parameter">message_num</code></dt>
     <dd>
      <p class="para">
       The message number
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       This optional parameter only has a single option, 
       <strong><code><a href="imap.constants.php#constant.ft-uid">FT_UID</a></code></strong>, which tells the function to treat the
       <code class="parameter">message_num</code> argument as a 
       <code class="literal">UID</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imap-fetchstructure-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an object with properties listed in the table below,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <p class="para">
   <table class="doctable table">
    <caption><strong>
     Returned Object for <span class="function"><strong>imap_fetchstructure()</strong></span>
    </strong></caption>
    
     <tbody class="tbody">
      <tr>
       <td>type</td>
       <td>Primary body type</td>
      </tr>

      <tr>
       <td>encoding</td>
       <td>Body transfer encoding</td>
      </tr>

      <tr>
       <td>ifsubtype</td>
       <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if there is a subtype string</td>
      </tr>

      <tr>
       <td>subtype</td>
       <td><abbr title="Multipurpose Internet Mail Extensions">MIME</abbr> subtype</td>
      </tr>

      <tr>
       <td>ifdescription</td>
       <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if there is a description string</td>
      </tr>

      <tr>
       <td>description</td>
       <td>Content description string</td>
      </tr>

      <tr>
       <td>ifid</td>
       <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if there is an identification string</td>
      </tr>

      <tr>
       <td>id</td>
       <td>Identification string</td>
      </tr>

      <tr>
       <td>lines</td>
       <td>Number of lines</td>
      </tr>

      <tr>
       <td>bytes</td>
       <td>Number of bytes</td>
      </tr>

      <tr>
       <td>ifdisposition</td>
       <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if there is a disposition string</td>
      </tr>

      <tr>
       <td>disposition</td>
       <td>Disposition string</td>
      </tr>

      <tr>
       <td>ifdparameters</td>
       <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the <var class="varname">dparameters</var> array exists</td>
      </tr>

      <tr>
       <td>dparameters</td>
       <td>An array of objects where each object has an
        <code class="literal">&quot;attribute&quot;</code> and a <code class="literal">&quot;value&quot;</code>
        property corresponding to the parameters on the
        <code class="literal">Content-disposition</code> <abbr title="Multipurpose Internet Mail Extensions">MIME</abbr>
        header.</td>
      </tr>

      <tr>
       <td>ifparameters</td>
       <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the parameters array exists</td>
      </tr>

      <tr>
       <td>parameters</td>
       <td>An array of objects where each object has an
        <code class="literal">&quot;attribute&quot;</code> and a <code class="literal">&quot;value&quot;</code>
        property.</td>
      </tr>

      <tr>
       <td>parts</td>
       <td>An array of objects identical in structure to the top-level
       object, each of which corresponds to a <abbr title="Multipurpose Internet Mail Extensions">MIME</abbr> body
       part.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Primary body type (value may vary with used library, use of constants is recommended)</strong></caption>
    
     <thead>
      <tr><th>Value</th><th>Type</th><th>Constant</th></tr>

     </thead>

     <tbody class="tbody">
      <tr><td>0</td><td>text</td><td>TYPETEXT</td></tr>

      <tr><td>1</td><td>multipart</td><td>TYPEMULTIPART</td></tr>

      <tr><td>2</td><td>message</td><td>TYPEMESSAGE</td></tr>

      <tr><td>3</td><td>application</td><td>TYPEAPPLICATION</td></tr>

      <tr><td>4</td><td>audio</td><td>TYPEAUDIO</td></tr>

      <tr><td>5</td><td>image</td><td>TYPEIMAGE</td></tr>

      <tr><td>6</td><td>video</td><td>TYPEVIDEO</td></tr>

      <tr><td>7</td><td>model</td><td>TYPEMODEL</td></tr>

      <tr><td>8</td><td>other</td><td>TYPEOTHER</td></tr>

     </tbody>
    
   </table>

  </p>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Transfer encodings (value may vary with used library, use of constants is recommended)</strong></caption>
    
     <thead>
      <tr><th>Value</th><th>Type</th><th>Constant</th></tr>

     </thead>

     <tbody class="tbody">
      <tr><td>0</td><td>7bit</td><td>ENC7BIT</td></tr>

      <tr><td>1</td><td>8bit</td><td>ENC8BIT</td></tr>

      <tr><td>2</td><td>Binary</td><td>ENCBINARY</td></tr>

      <tr><td>3</td><td>Base64</td><td>ENCBASE64</td></tr>

      <tr><td>4</td><td>Quoted-Printable</td><td>ENCQUOTEDPRINTABLE</td></tr>

      <tr><td>5</td><td>other</td><td>ENCOTHER</td></tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imap-fetchstructure-changelog">
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
 <td>8.1.0</td>
 <td>
  The <code class="parameter">imap</code> parameter expects an <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span>
  instance now; previously, a valid <code class="literal">imap</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.imap-fetchstructure-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.imap-fetchbody.php" class="function" rel="rdfs-seeAlso">imap_fetchbody()</a> - Fetch a particular section of the body of the message</span></li>
    <li><span class="function"><a href="function.imap-bodystruct.php" class="function" rel="rdfs-seeAlso">imap_bodystruct()</a> - Read the structure of a specified body section of a specific message</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/imap/functions/imap-fetchstructure.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imap-fetchstructure%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imap-fetchstructure&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-fetchstructure.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="85486">  <div class="votes">
    <div id="Vu85486">
    <a href="/manual/vote-note.php?id=85486&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85486">
    <a href="/manual/vote-note.php?id=85486&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85486" title="60% like this...">
    50
    </div>
  </div>
  <a href="#85486" class="name">
  <strong class="user"><em>david at hundsness dot com</em></strong></a><a class="genanchor" href="#85486"> &para;</a><div class="date" title="2008-09-02 02:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85486">
<div class="phpcode"><code><span class="html">Here is code to parse and decode all types of messages, including attachments. I've been using something like this for a while now, so it's pretty robust.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">getmsg</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">,</span><span class="default">$mid</span><span class="keyword">) {
<br />    </span><span class="comment">// input $mbox = IMAP stream, $mid = message id
<br />    // output all the following:
<br />    </span><span class="keyword">global </span><span class="default">$charset</span><span class="keyword">,</span><span class="default">$htmlmsg</span><span class="keyword">,</span><span class="default">$plainmsg</span><span class="keyword">,</span><span class="default">$attachments</span><span class="keyword">;
<br />    </span><span class="default">$htmlmsg </span><span class="keyword">= </span><span class="default">$plainmsg </span><span class="keyword">= </span><span class="default">$charset </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$attachments </span><span class="keyword">= array();
<br />
<br />    </span><span class="comment">// HEADER
<br />    </span><span class="default">$h </span><span class="keyword">= </span><span class="default">imap_header</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">,</span><span class="default">$mid</span><span class="keyword">);
<br />    </span><span class="comment">// add code here to get date, from, to, cc, subject...
<br />
<br />    // BODY
<br />    </span><span class="default">$s </span><span class="keyword">= </span><span class="default">imap_fetchstructure</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">,</span><span class="default">$mid</span><span class="keyword">);
<br />    if (!</span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">parts</span><span class="keyword">)  </span><span class="comment">// simple
<br />        </span><span class="default">getpart</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">,</span><span class="default">$mid</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);  </span><span class="comment">// pass 0 as part-number
<br />    </span><span class="keyword">else {  </span><span class="comment">// multipart: cycle through each part
<br />        </span><span class="keyword">foreach (</span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">parts </span><span class="keyword">as </span><span class="default">$partno0</span><span class="keyword">=&gt;</span><span class="default">$p</span><span class="keyword">)
<br />            </span><span class="default">getpart</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">,</span><span class="default">$mid</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">,</span><span class="default">$partno0</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);
<br />    }
<br />}
<br />
<br />function </span><span class="default">getpart</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">,</span><span class="default">$mid</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">,</span><span class="default">$partno</span><span class="keyword">) {
<br />    </span><span class="comment">// $partno = '1', '2', '2.1', '2.1.3', etc for multipart, 0 if simple
<br />    </span><span class="keyword">global </span><span class="default">$htmlmsg</span><span class="keyword">,</span><span class="default">$plainmsg</span><span class="keyword">,</span><span class="default">$charset</span><span class="keyword">,</span><span class="default">$attachments</span><span class="keyword">;
<br />
<br />    </span><span class="comment">// DECODE DATA
<br />    </span><span class="default">$data </span><span class="keyword">= (</span><span class="default">$partno</span><span class="keyword">)?
<br />        </span><span class="default">imap_fetchbody</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">,</span><span class="default">$mid</span><span class="keyword">,</span><span class="default">$partno</span><span class="keyword">):  </span><span class="comment">// multipart
<br />        </span><span class="default">imap_body</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">,</span><span class="default">$mid</span><span class="keyword">);  </span><span class="comment">// simple
<br />    // Any part may be encoded, even plain text messages, so check everything.
<br />    </span><span class="keyword">if (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">encoding</span><span class="keyword">==</span><span class="default">4</span><span class="keyword">)
<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">quoted_printable_decode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br />    elseif (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">encoding</span><span class="keyword">==</span><span class="default">3</span><span class="keyword">)
<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br />
<br />    </span><span class="comment">// PARAMETERS
<br />    // get all parameters, like charset, filenames of attachments, etc.
<br />    </span><span class="default">$params </span><span class="keyword">= array();
<br />    if (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">parameters</span><span class="keyword">)
<br />        foreach (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">parameters </span><span class="keyword">as </span><span class="default">$x</span><span class="keyword">)
<br />            </span><span class="default">$params</span><span class="keyword">[</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">attribute</span><span class="keyword">)] = </span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">;
<br />    if (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">dparameters</span><span class="keyword">)
<br />        foreach (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">dparameters </span><span class="keyword">as </span><span class="default">$x</span><span class="keyword">)
<br />            </span><span class="default">$params</span><span class="keyword">[</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">attribute</span><span class="keyword">)] = </span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">;
<br />
<br />    </span><span class="comment">// ATTACHMENT
<br />    // Any part with a filename is an attachment,
<br />    // so an attached text file (type 0) is not mistaken as the message.
<br />    </span><span class="keyword">if (</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'filename'</span><span class="keyword">] || </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">]) {
<br />        </span><span class="comment">// filename may be given as 'Filename' or 'Name' or both
<br />        </span><span class="default">$filename </span><span class="keyword">= (</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'filename'</span><span class="keyword">])? </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'filename'</span><span class="keyword">] : </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">];
<br />        </span><span class="comment">// filename may be encoded, so see imap_mime_header_decode()
<br />        </span><span class="default">$attachments</span><span class="keyword">[</span><span class="default">$filename</span><span class="keyword">] = </span><span class="default">$data</span><span class="keyword">;  </span><span class="comment">// this is a problem if two files have same name
<br />    </span><span class="keyword">}
<br />
<br />    </span><span class="comment">// TEXT
<br />    </span><span class="keyword">if (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">type</span><span class="keyword">==</span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$data</span><span class="keyword">) {
<br />        </span><span class="comment">// Messages may be split in different parts because of inline attachments,
<br />        // so append parts together with blank row.
<br />        </span><span class="keyword">if (</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">subtype</span><span class="keyword">)==</span><span class="string">'plain'</span><span class="keyword">)
<br />            </span><span class="default">$plainmsg</span><span class="keyword">. = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) .</span><span class="string">"\n\n"</span><span class="keyword">;
<br />        else
<br />            </span><span class="default">$htmlmsg</span><span class="keyword">. = </span><span class="default">$data </span><span class="keyword">.</span><span class="string">"&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;
<br />        </span><span class="default">$charset </span><span class="keyword">= </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'charset'</span><span class="keyword">];  </span><span class="comment">// assume all parts are same charset
<br />    </span><span class="keyword">}
<br />
<br />    </span><span class="comment">// EMBEDDED MESSAGE
<br />    // Many bounce notifications embed the original message as type 2,
<br />    // but AOL uses type 1 (multipart), which is not handled here.
<br />    // There are no PHP functions to parse embedded messages,
<br />    // so this just appends the raw source to the main message.
<br />    </span><span class="keyword">elseif (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">type</span><span class="keyword">==</span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">$data</span><span class="keyword">) {
<br />        </span><span class="default">$plainmsg</span><span class="keyword">. = </span><span class="default">$data</span><span class="keyword">.</span><span class="string">"\n\n"</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="comment">// SUBPART RECURSION
<br />    </span><span class="keyword">if (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">parts</span><span class="keyword">) {
<br />        foreach (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">parts </span><span class="keyword">as </span><span class="default">$partno0</span><span class="keyword">=&gt;</span><span class="default">$p2</span><span class="keyword">)
<br />            </span><span class="default">getpart</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">,</span><span class="default">$mid</span><span class="keyword">,</span><span class="default">$p2</span><span class="keyword">,</span><span class="default">$partno</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.(</span><span class="default">$partno0</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">));  </span><span class="comment">// 1.2, 1.2.1, etc.
<br />    </span><span class="keyword">}
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="12632">  <div class="votes">
    <div id="Vu12632">
    <a href="/manual/vote-note.php?id=12632&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12632">
    <a href="/manual/vote-note.php?id=12632&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12632" title="100% like this...">
    3
    </div>
  </div>
  <a href="#12632" class="name">
  <strong class="user"><em>mkknapp at quadrapod dot com</em></strong></a><a class="genanchor" href="#12632"> &para;</a><div class="date" title="2001-04-25 06:48"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12632">
<div class="phpcode"><code><span class="html">Assuming $struct = imap_fetchstructure($x,$y);
<br />
<br />It is important to note that if a message has NO attachements, $struct-&gt;parts is an empty array, and $struct-&gt;bytes has a value.  If a message as ANY attachements, $struct-&gt;bytes ALWAYS = 0. To get the size of the primary body, you have to call structure-&gt;part[0]-&gt;bytes.  To get the size of the whole message, either strlen(imap_body) or add up the -&gt;bytes of all the parts.
<br />
<br />Another interesting note: 
<br />When there is body text and no attachements:
<br />count($struct-&gt;parts) = 0
<br />When there is body text and 1 attachement:
<br />count($struct-&gt;parts) = 2
<br />
<br />These imap functions could really use better documentation. Like giving the meathods for the dparameter and parameter classes...</span></code></div>
  </div>
 </div>
  <div class="note" id="19172">  <div class="votes">
    <div id="Vu19172">
    <a href="/manual/vote-note.php?id=19172&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19172">
    <a href="/manual/vote-note.php?id=19172&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19172" title="75% like this...">
    2
    </div>
  </div>
  <a href="#19172" class="name">
  <strong class="user"><em>php AT firstnetimpressions.com</em></strong></a><a class="genanchor" href="#19172"> &para;</a><div class="date" title="2002-02-18 01:15"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19172">
<div class="phpcode"><code><span class="html">Point of clarification:<br /><br />The seventh primary body type is not "Other" as documented, but actually "Model".  This encompasses IGES, VRML, MESH, DWF, etc.<br /><br /><a href="http://www.isi.edu/in-notes/iana/assignments/media-types/media-types" rel="nofollow" target="_blank">http://www.isi.edu/in-notes/iana/assignments/media-types/media-types</a><br /><br />"Other" is the eigth primary body type.</span></code></div>
  </div>
 </div>
  <div class="note" id="36816">  <div class="votes">
    <div id="Vu36816">
    <a href="/manual/vote-note.php?id=36816&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36816">
    <a href="/manual/vote-note.php?id=36816&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36816" title="66% like this...">
    2
    </div>
  </div>
  <a href="#36816" class="name">
  <strong class="user"><em>chrislhill at &quot;O_o&quot; hotmail dot com</em></strong></a><a class="genanchor" href="#36816"> &para;</a><div class="date" title="2003-10-23 11:36"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36816">
<div class="phpcode"><code><span class="html">For people just beging this may help alot as I spent a couple hours just trying to relize how exact the array was stored. (at the time I did not know the print_r function :P)<br /><br />$struct = imap_fetchstructure($mbox, $msgnumber);<br />print_r($struct);<br /><br />Will give you a better example for your messages but they are called as $struct using the varible method above.<br /><br />$struct-&gt;type; //would return the type<br />$struct-&gt;encoding //would return the encoding <br /><br />and etc..<br /><br />This can be done many different ways but that is the basics on pulling the info out of the structure of fetchstructure itself, I hope it helps someone starting because it wouldve helped me :/.</span></code></div>
  </div>
 </div>
  <div class="note" id="60361">  <div class="votes">
    <div id="Vu60361">
    <a href="/manual/vote-note.php?id=60361&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60361">
    <a href="/manual/vote-note.php?id=60361&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60361" title="62% like this...">
    2
    </div>
  </div>
  <a href="#60361" class="name">
  <strong class="user"><em>sirber at detritus dot qc dot ca</em></strong></a><a class="genanchor" href="#60361"> &para;</a><div class="date" title="2006-01-04 11:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60361">
<div class="phpcode"><code><span class="html">"Primary body type" of "unknown/unknown" will be int(9).</span></code></div>
  </div>
 </div>
  <div class="note" id="52007">  <div class="votes">
    <div id="Vu52007">
    <a href="/manual/vote-note.php?id=52007&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52007">
    <a href="/manual/vote-note.php?id=52007&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52007" title="60% like this...">
    1
    </div>
  </div>
  <a href="#52007" class="name">
  <strong class="user"><em>masterbassist</em></strong></a><a class="genanchor" href="#52007"> &para;</a><div class="date" title="2005-04-18 09:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52007">
<div class="phpcode"><code><span class="html">I think the following line (when building attachment information)<br /><br />&gt;&gt;&gt; "filename" =&gt; $parts[$i]-&gt;parameters[0]-&gt;value<br /><br />needs to be<br /><br />&gt;&gt;&gt; "filename" =&gt; $parts[$i]-&gt;dparameters[0]-&gt;value<br /><br />The first version generated a PHP warning under PHP 5.0.3.  The second version actually gets the filename.</span></code></div>
  </div>
 </div>
  <div class="note" id="78076">  <div class="votes">
    <div id="Vu78076">
    <a href="/manual/vote-note.php?id=78076&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78076">
    <a href="/manual/vote-note.php?id=78076&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78076" title="58% like this...">
    2
    </div>
  </div>
  <a href="#78076" class="name">
  <strong class="user"><em>phpnet,a,emailaddress,cjb,net</em></strong></a><a class="genanchor" href="#78076"> &para;</a><div class="date" title="2007-09-26 07:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78076">
<div class="phpcode"><code><span class="html">Another comment to inform people about something that should really be in the function description:<br /><br />imap_fetchstructure() downloads the entire email, attachments and all, rather than just the structure.<br />I guess it's an undocumented feature, not a bug.<br /><br />I had assumed that the script would have only downloaded the amount of data that was returned, but my script downloaded a cumulative 2.5gig before i noticed.  Hopefully no-one else will have this happen.</span></code></div>
  </div>
 </div>
  <div class="note" id="123542">  <div class="votes">
    <div id="Vu123542">
    <a href="/manual/vote-note.php?id=123542&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123542">
    <a href="/manual/vote-note.php?id=123542&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123542" title="100% like this...">
    2
    </div>
  </div>
  <a href="#123542" class="name">
  <strong class="user"><em>alchrystal88 at web dot de</em></strong></a><a class="genanchor" href="#123542"> &para;</a><div class="date" title="2019-01-24 11:44"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123542">
<div class="phpcode"><code><span class="html">If you have errors with wrong attachment names like this:<br /><br />correct name:<br />String -&gt; Prüfbericht Hersteller.pdf<br /><br />fetchstructure object name:<br /> =?ISO-8859-1?Q?Pr=FCfbericht_Hersteller=2Epdf?=<br /><br />Workaround to reconvert:<br /><br />imap_mime_header_decode($fetchstructure-&gt;dparameters-&gt;value)[0]-&gt;text<br /><br />imap_mime_header_decode($filename)[0]-&gt;text</span></code></div>
  </div>
 </div>
  <div class="note" id="123759">  <div class="votes">
    <div id="Vu123759">
    <a href="/manual/vote-note.php?id=123759&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123759">
    <a href="/manual/vote-note.php?id=123759&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123759" title="100% like this...">
    1
    </div>
  </div>
  <a href="#123759" class="name">
  <strong class="user"><em>hello at ivanbogomolov dot ru</em></strong></a><a class="genanchor" href="#123759"> &para;</a><div class="date" title="2019-04-08 11:33"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123759">
<div class="phpcode"><code><span class="html">If you logic based on compare structure strings, you must compare it case insensetive.<br /><span class="default">&lt;?php<br /><br />$p </span><span class="keyword">= </span><span class="default">imap_fetchstructure</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_imap_resource</span><span class="keyword">, </span><span class="default">$mid</span><span class="keyword">);<br /></span><span class="comment">//do not compare $p-&gt;disposition == 'INLINE' <br /></span><span class="keyword">if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/inline/i'</span><span class="keyword">, </span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">disposition</span><span class="keyword">)) <br />{<br /> </span><span class="comment">//this works<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130397">  <div class="votes">
    <div id="Vu130397">
    <a href="/manual/vote-note.php?id=130397&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130397">
    <a href="/manual/vote-note.php?id=130397&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130397" title="no votes...">
    0
    </div>
  </div>
  <a href="#130397" class="name">
  <strong class="user"><em>mike at lesbrices dot co dot uk</em></strong></a><a class="genanchor" href="#130397"> &para;</a><div class="date" title="2025-07-01 05:41"><strong>2 months ago</strong></div>
  <div class="text" id="Hcom130397">
<div class="phpcode"><code><span class="html">An update on the note from david at hundsness dot com ¶. I have used his contribution with great success, just a couple of issues. The syntax used for some string concatenations was in the form $var. = $var2, but should be $var .= $var2. I also had to add some checks for the existence of some properties, especially the structure dparameters and the keys filename and name in the parameters property. But the code has been a huge help.</span></code></div>
  </div>
 </div>
  <div class="note" id="34952">  <div class="votes">
    <div id="Vu34952">
    <a href="/manual/vote-note.php?id=34952&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34952">
    <a href="/manual/vote-note.php?id=34952&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34952" title="100% like this...">
    2
    </div>
  </div>
  <a href="#34952" class="name">
  <strong class="user"><em>es96 at hotmail dot com</em></strong></a><a class="genanchor" href="#34952"> &para;</a><div class="date" title="2003-08-13 02:38"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34952">
<div class="phpcode"><code><span class="html">If you are getting CHARSET as US-ASCII even if the header has a Content-Type: field, make sure the header also has a MIME-Version: field.<br /><br />For example, the following header will correcty report charset as KOI8-R<br /><br />MIME-Version: 1.0<br />Content-Type: text/plain; charset="koi8-r"<br /><br />Without the MIME-Version it will be reported as US-ASII</span></code></div>
  </div>
 </div>
  <div class="note" id="25368">  <div class="votes">
    <div id="Vu25368">
    <a href="/manual/vote-note.php?id=25368&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25368">
    <a href="/manual/vote-note.php?id=25368&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25368" title="100% like this...">
    2
    </div>
  </div>
  <a href="#25368" class="name">
  <strong class="user"><em>jcastro at elnuevodia dot com</em></strong></a><a class="genanchor" href="#25368"> &para;</a><div class="date" title="2002-09-20 01:16"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25368">
<div class="phpcode"><code><span class="html">I think the above note about attachments is wrong. I tested sending files with and without attachments and I get the following&lt;br&gt;<br />with attachment: type=3 bytes=343648<br />no attachment: type=0 bytes=2<br />so checking for $struct-&gt;bytes == " " means nothing. At least in my test<br />running windows 2000, php4.2.1 using outlook and exchange. It seems that cheking the type will be more reliable</span></code></div>
  </div>
 </div>
  <div class="note" id="2758">  <div class="votes">
    <div id="Vu2758">
    <a href="/manual/vote-note.php?id=2758&amp;page=function.imap-fetchstructure&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd2758">
    <a href="/manual/vote-note.php?id=2758&amp;page=function.imap-fetchstructure&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V2758" title="100% like this...">
    2
    </div>
  </div>
  <a href="#2758" class="name">
  <strong class="user"><em>hholzgra at media-engineering dot de</em></strong></a><a class="genanchor" href="#2758"> &para;</a><div class="date" title="1999-12-15 01:59"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom2758">
<div class="phpcode"><code><span class="html">the parts objects are identical in
<br />structure to those returned by imap_fetchstructure, describing one subfolder each
<br />
<br />parameters and dparameters are MIME-specific, theese contain the
<br />extra parameters provided in the Content-Type and Content-Disposion Header lines such as Charset or Filename</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imap-fetchstructure&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-fetchstructure.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.imap.php">IMAP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.imap-8bit.php" title="imap_&#8203;8bit">imap_&#8203;8bit</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-alerts.php" title="imap_&#8203;alerts">imap_&#8203;alerts</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-append.php" title="imap_&#8203;append">imap_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-base64.php" title="imap_&#8203;base64">imap_&#8203;base64</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-binary.php" title="imap_&#8203;binary">imap_&#8203;binary</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-body.php" title="imap_&#8203;body">imap_&#8203;body</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-bodystruct.php" title="imap_&#8203;bodystruct">imap_&#8203;bodystruct</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-check.php" title="imap_&#8203;check">imap_&#8203;check</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-clearflag-full.php" title="imap_&#8203;clearflag_&#8203;full">imap_&#8203;clearflag_&#8203;full</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-close.php" title="imap_&#8203;close">imap_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-create.php" title="imap_&#8203;create">imap_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-createmailbox.php" title="imap_&#8203;createmailbox">imap_&#8203;createmailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-delete.php" title="imap_&#8203;delete">imap_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-deletemailbox.php" title="imap_&#8203;deletemailbox">imap_&#8203;deletemailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-errors.php" title="imap_&#8203;errors">imap_&#8203;errors</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-expunge.php" title="imap_&#8203;expunge">imap_&#8203;expunge</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetch-overview.php" title="imap_&#8203;fetch_&#8203;overview">imap_&#8203;fetch_&#8203;overview</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchbody.php" title="imap_&#8203;fetchbody">imap_&#8203;fetchbody</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchheader.php" title="imap_&#8203;fetchheader">imap_&#8203;fetchheader</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchmime.php" title="imap_&#8203;fetchmime">imap_&#8203;fetchmime</a>
                        </li>
                                                <li class="current">
                            <a href="function.imap-fetchstructure.php" title="imap_&#8203;fetchstructure">imap_&#8203;fetchstructure</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchtext.php" title="imap_&#8203;fetchtext">imap_&#8203;fetchtext</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-gc.php" title="imap_&#8203;gc">imap_&#8203;gc</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-get-quota.php" title="imap_&#8203;get_&#8203;quota">imap_&#8203;get_&#8203;quota</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-get-quotaroot.php" title="imap_&#8203;get_&#8203;quotaroot">imap_&#8203;get_&#8203;quotaroot</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-getacl.php" title="imap_&#8203;getacl">imap_&#8203;getacl</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-getmailboxes.php" title="imap_&#8203;getmailboxes">imap_&#8203;getmailboxes</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-getsubscribed.php" title="imap_&#8203;getsubscribed">imap_&#8203;getsubscribed</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-header.php" title="imap_&#8203;header">imap_&#8203;header</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-headerinfo.php" title="imap_&#8203;headerinfo">imap_&#8203;headerinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-headers.php" title="imap_&#8203;headers">imap_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-is-open.php" title="imap_&#8203;is_&#8203;open">imap_&#8203;is_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-last-error.php" title="imap_&#8203;last_&#8203;error">imap_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-list.php" title="imap_&#8203;list">imap_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-listmailbox.php" title="imap_&#8203;listmailbox">imap_&#8203;listmailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-listscan.php" title="imap_&#8203;listscan">imap_&#8203;listscan</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-listsubscribed.php" title="imap_&#8203;listsubscribed">imap_&#8203;listsubscribed</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-lsub.php" title="imap_&#8203;lsub">imap_&#8203;lsub</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail.php" title="imap_&#8203;mail">imap_&#8203;mail</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail-compose.php" title="imap_&#8203;mail_&#8203;compose">imap_&#8203;mail_&#8203;compose</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail-copy.php" title="imap_&#8203;mail_&#8203;copy">imap_&#8203;mail_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail-move.php" title="imap_&#8203;mail_&#8203;move">imap_&#8203;mail_&#8203;move</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mailboxmsginfo.php" title="imap_&#8203;mailboxmsginfo">imap_&#8203;mailboxmsginfo</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mime-header-decode.php" title="imap_&#8203;mime_&#8203;header_&#8203;decode">imap_&#8203;mime_&#8203;header_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-msgno.php" title="imap_&#8203;msgno">imap_&#8203;msgno</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mutf7-to-utf8.php" title="imap_&#8203;mutf7_&#8203;to_&#8203;utf8">imap_&#8203;mutf7_&#8203;to_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-num-msg.php" title="imap_&#8203;num_&#8203;msg">imap_&#8203;num_&#8203;msg</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-num-recent.php" title="imap_&#8203;num_&#8203;recent">imap_&#8203;num_&#8203;recent</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-open.php" title="imap_&#8203;open">imap_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-ping.php" title="imap_&#8203;ping">imap_&#8203;ping</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-qprint.php" title="imap_&#8203;qprint">imap_&#8203;qprint</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rename.php" title="imap_&#8203;rename">imap_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-renamemailbox.php" title="imap_&#8203;renamemailbox">imap_&#8203;renamemailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-reopen.php" title="imap_&#8203;reopen">imap_&#8203;reopen</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rfc822-parse-adrlist.php" title="imap_&#8203;rfc822_&#8203;parse_&#8203;adrlist">imap_&#8203;rfc822_&#8203;parse_&#8203;adrlist</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rfc822-parse-headers.php" title="imap_&#8203;rfc822_&#8203;parse_&#8203;headers">imap_&#8203;rfc822_&#8203;parse_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rfc822-write-address.php" title="imap_&#8203;rfc822_&#8203;write_&#8203;address">imap_&#8203;rfc822_&#8203;write_&#8203;address</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-savebody.php" title="imap_&#8203;savebody">imap_&#8203;savebody</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-scan.php" title="imap_&#8203;scan">imap_&#8203;scan</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-scanmailbox.php" title="imap_&#8203;scanmailbox">imap_&#8203;scanmailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-search.php" title="imap_&#8203;search">imap_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-set-quota.php" title="imap_&#8203;set_&#8203;quota">imap_&#8203;set_&#8203;quota</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-setacl.php" title="imap_&#8203;setacl">imap_&#8203;setacl</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-setflag-full.php" title="imap_&#8203;setflag_&#8203;full">imap_&#8203;setflag_&#8203;full</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-sort.php" title="imap_&#8203;sort">imap_&#8203;sort</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-status.php" title="imap_&#8203;status">imap_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-subscribe.php" title="imap_&#8203;subscribe">imap_&#8203;subscribe</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-thread.php" title="imap_&#8203;thread">imap_&#8203;thread</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-timeout.php" title="imap_&#8203;timeout">imap_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-uid.php" title="imap_&#8203;uid">imap_&#8203;uid</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-undelete.php" title="imap_&#8203;undelete">imap_&#8203;undelete</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-unsubscribe.php" title="imap_&#8203;unsubscribe">imap_&#8203;unsubscribe</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf7-decode.php" title="imap_&#8203;utf7_&#8203;decode">imap_&#8203;utf7_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf7-encode.php" title="imap_&#8203;utf7_&#8203;encode">imap_&#8203;utf7_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf8.php" title="imap_&#8203;utf8">imap_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf8-to-mutf7.php" title="imap_&#8203;utf8_&#8203;to_&#8203;mutf7">imap_&#8203;utf8_&#8203;to_&#8203;mutf7</a>
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
