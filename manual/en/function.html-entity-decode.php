<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: html_entity_decode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.html-entity-decode.php">
 <link rel="shorturl" href="https://www.php.net/html-entity-decode">
 <link rel="alternate" href="https://www.php.net/html-entity-decode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.hex2bin.php">
 <link rel="next" href="https://www.php.net/manual/en/function.htmlentities.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.html-entity-decode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.html-entity-decode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.html-entity-decode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.html-entity-decode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.html-entity-decode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.html-entity-decode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.html-entity-decode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.html-entity-decode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.html-entity-decode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.html-entity-decode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.html-entity-decode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert HTML entities to their corresponding characters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: html_entity_decode - Manual" />
<meta name="twitter:description" content="Convert HTML entities to their corresponding characters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: html_entity_decode - Manual" />
<meta itemprop="description" content="Convert HTML entities to their corresponding characters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert HTML entities to their corresponding characters" />

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
        <a href="function.htmlentities.php">
          htmlentities &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.hex2bin.php">
          &laquo; hex2bin        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.html-entity-decode.php' selected="selected">English</option>
            <option value='de/function.html-entity-decode.php'>German</option>
            <option value='es/function.html-entity-decode.php'>Spanish</option>
            <option value='fr/function.html-entity-decode.php'>French</option>
            <option value='it/function.html-entity-decode.php'>Italian</option>
            <option value='ja/function.html-entity-decode.php'>Japanese</option>
            <option value='pt_BR/function.html-entity-decode.php'>Brazilian Portuguese</option>
            <option value='ru/function.html-entity-decode.php'>Russian</option>
            <option value='tr/function.html-entity-decode.php'>Turkish</option>
            <option value='uk/function.html-entity-decode.php'>Ukrainian</option>
            <option value='zh/function.html-entity-decode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.html-entity-decode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">html_entity_decode</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">html_entity_decode</span> &mdash; <span class="dc-title">Convert HTML entities to their corresponding characters</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.html-entity-decode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>html_entity_decode</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$encoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>html_entity_decode()</strong></span> is the opposite of
   <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span> in that it converts HTML entities
   in the <code class="parameter">string</code> to their corresponding characters.
  </p>
  <p class="para">
   More precisely, this function decodes all the entities (including all numeric
   entities) that a) are necessarily valid for the chosen document type — i.e.,
   for XML, this function does not decode named entities that might be defined
   in some DTD — and b) whose character or characters are in the coded character
   set associated with the chosen encoding and are permitted in the chosen
   document type. All other entities are left as is.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.html-entity-decode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       A bitmask of one or more of the following flags, which specify how to handle quotes and
       which document type to use. The default is <code class="literal">ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</code>.
       <table class="doctable table">
        <caption><strong>Available <code class="parameter">flags</code> constants</strong></caption>
        
         <thead>
          <tr>
           <th>Constant Name</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-compat">ENT_COMPAT</a></code></strong></td>
           <td>Will convert double-quotes and leave single-quotes alone.</td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-quotes">ENT_QUOTES</a></code></strong></td>
           <td>Will convert both double and single quotes.</td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-noquotes">ENT_NOQUOTES</a></code></strong></td>
           <td>Will leave both double and single quotes unconverted.</td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-substitute">ENT_SUBSTITUTE</a></code></strong></td>
           <td>
            Replace invalid code unit sequences with a Unicode Replacement Character
            U+FFFD (UTF-8) or &amp;#xFFFD; (otherwise) instead of returning an empty string.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-html401">ENT_HTML401</a></code></strong></td>
           <td>
            Handle code as HTML 4.01.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-xml1">ENT_XML1</a></code></strong></td>
           <td>
            Handle code as XML 1.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-xhtml">ENT_XHTML</a></code></strong></td>
           <td>
            Handle code as XHTML.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-html5">ENT_HTML5</a></code></strong></td>
           <td>
            Handle code as HTML 5.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">encoding</code></dt>
     <dd>
      
 <p class="para">
  An optional argument defining the encoding used when converting characters.
 </p>

 <p class="para">
  If omitted, <code class="parameter">encoding</code> defaults to the value of the
  <a href="ini.core.php#ini.default-charset" class="link">default_charset</a> configuration
  option.
 </p>

 <p class="para">
  Although this argument is technically optional, you are highly encouraged to
  specify the correct value for your code
  if the <a href="ini.core.php#ini.default-charset" class="link">default_charset</a>
  configuration option may be set incorrectly for the given input.
 </p>

      

<p class="para">
 The following character sets are supported:
 <table class="doctable table">
  <caption><strong>Supported charsets</strong></caption>
  
   <thead>
    <tr>
     <th>Charset</th>
     <th>Aliases</th>
     <th>Description</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr>
     <td>ISO-8859-1</td>
     <td>ISO8859-1</td>
     <td>
      Western European, Latin-1.
     </td>
    </tr>

    <tr>
     <td>ISO-8859-5</td>
     <td>ISO8859-5</td>
     <td>
      Little used cyrillic charset (Latin/Cyrillic).
     </td>
    </tr>

    <tr>
     <td>ISO-8859-15</td>
     <td>ISO8859-15</td>
     <td>
      Western European, Latin-9. Adds the Euro sign, French and Finnish
      letters missing in Latin-1 (ISO-8859-1).
     </td>
    </tr>

    <tr>
     <td>UTF-8</td>
     <td class="empty">&nbsp;</td>
     <td>
      ASCII compatible multi-byte 8-bit Unicode.
     </td>
    </tr>

    <tr>
     <td>cp866</td>
     <td>ibm866, 866</td>
     <td>
      DOS-specific Cyrillic charset.
     </td>
    </tr>

    <tr>
     <td>cp1251</td>
     <td>Windows-1251, win-1251, 1251</td>
     <td>
      Windows-specific Cyrillic charset.
     </td>
    </tr>

    <tr>
     <td>cp1252</td>
     <td>Windows-1252, 1252</td>
     <td>
      Windows specific charset for Western European.
     </td>
    </tr>

    <tr>
     <td>KOI8-R</td>
     <td>koi8-ru, koi8r</td>
     <td>
      Russian.
     </td>
    </tr>

    <tr>
     <td>BIG5</td>
     <td>950</td>
     <td>
      Traditional Chinese, mainly used in Taiwan.
     </td>
    </tr>

    <tr>
     <td>GB2312</td>
     <td>936</td>
     <td>
      Simplified Chinese, national standard character set.
     </td>
    </tr>

    <tr>
     <td>BIG5-HKSCS</td>
     <td class="empty">&nbsp;</td>
     <td>
      Big5 with Hong Kong extensions, Traditional Chinese.
     </td>
    </tr>

    <tr>
     <td>Shift_JIS</td>
     <td>SJIS, SJIS-win, cp932, 932</td>
     <td>
      Japanese
     </td>
    </tr>

    <tr>
     <td>EUC-JP</td>
     <td>EUCJP, eucJP-win</td>
     <td>
      Japanese
     </td>
    </tr>

    <tr>
     <td>MacRoman</td>
     <td class="empty">&nbsp;</td>
     <td>
      Charset that was used by Mac OS.
     </td>
    </tr>

    <tr>
     <td><code class="literal">&#039;&#039;</code></td>
     <td class="empty">&nbsp;</td>
     <td>
      An empty string activates detection from script encoding (Zend multibyte),
      <a href="ini.core.php#ini.default-charset" class="link">default_charset</a> and current
      locale (see <span class="function"><a href="function.nl-langinfo.php" class="function">nl_langinfo()</a></span> and
      <span class="function"><a href="function.setlocale.php" class="function">setlocale()</a></span>), in this order. Not recommended.
     </td>
    </tr>

   </tbody>
  
 </table>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   Any other character sets are not recognized. The default encoding will be
   used instead and a warning will be emitted.
  </span>
 </p></blockquote>
</p>


     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.html-entity-decode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the decoded string.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.html-entity-decode-changelog">
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
       <code class="parameter">flags</code> changed from <strong><code><a href="string.constants.php#constant.ent-compat">ENT_COMPAT</a></code></strong> to <strong><code><a href="string.constants.php#constant.ent-quotes">ENT_QUOTES</a></code></strong> | <strong><code><a href="string.constants.php#constant.ent-substitute">ENT_SUBSTITUTE</a></code></strong> | <strong><code><a href="string.constants.php#constant.ent-html401">ENT_HTML401</a></code></strong>.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">encoding</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.html-entity-decode-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5075">
    <p><strong>Example #1 Decoding HTML entities</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$orig </span><span style="color: #007700">= </span><span style="color: #DD0000">"I'll \"walk\" the &lt;b&gt;dog&lt;/b&gt; now"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$orig</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">html_entity_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// I'll &amp;quot;walk&amp;quot; the &amp;lt;b&amp;gt;dog&amp;lt;/b&amp;gt; now<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// I'll "walk" the &lt;b&gt;dog&lt;/b&gt; now<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>   
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.html-entity-decode-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    You might wonder why trim(html_entity_decode(&#039;&amp;nbsp;&#039;)); doesn&#039;t
    reduce the string to an empty string, that&#039;s because the &#039;&amp;nbsp;&#039;
    entity is not ASCII code 32 (which is stripped by
    <span class="function"><a href="function.trim.php" class="function">trim()</a></span>) but ASCII code 160 (0xa0) in the default ISO
    8859-1 encoding.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.html-entity-decode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.htmlentities.php" class="function" rel="rdfs-seeAlso">htmlentities()</a> - Convert all applicable characters to HTML entities</span></li>
    <li><span class="function"><a href="function.htmlspecialchars.php" class="function" rel="rdfs-seeAlso">htmlspecialchars()</a> - Convert special characters to HTML entities</span></li>
    <li><span class="function"><a href="function.get-html-translation-table.php" class="function" rel="rdfs-seeAlso">get_html_translation_table()</a> - Returns the translation table used by htmlspecialchars and htmlentities</span></li>
    <li><span class="function"><a href="function.urldecode.php" class="function" rel="rdfs-seeAlso">urldecode()</a> - Decodes URL-encoded string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/html-entity-decode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.html-entity-decode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.html-entity-decode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.html-entity-decode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104617">  <div class="votes">
    <div id="Vu104617">
    <a href="/manual/vote-note.php?id=104617&amp;page=function.html-entity-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104617">
    <a href="/manual/vote-note.php?id=104617&amp;page=function.html-entity-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104617" title="74% like this...">
    136
    </div>
  </div>
  <a href="#104617" class="name">
  <strong class="user"><em>Martin</em></strong></a><a class="genanchor" href="#104617"> &para;</a><div class="date" title="2011-06-26 04:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104617">
<div class="phpcode"><code><span class="html">If you need something that converts &amp;#[0-9]+ entities to UTF-8, this is simple and works:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/* Entity crap. /
<br />$input = "Fovi&amp;#269;";
<br />
<br />$output = preg_replace_callback("/(&amp;#[0-9]+;)/", function($m) { return mb_convert_encoding($m[1], "UTF-8", "HTML-ENTITIES"); }, $input);
<br />
<br />/* Plain UTF-8. */
<br /></span><span class="keyword">echo </span><span class="default">$output</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117876">  <div class="votes">
    <div id="Vu117876">
    <a href="/manual/vote-note.php?id=117876&amp;page=function.html-entity-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117876">
    <a href="/manual/vote-note.php?id=117876&amp;page=function.html-entity-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117876" title="61% like this...">
    29
    </div>
  </div>
  <a href="#117876" class="name">
  <strong class="user"><em>txnull</em></strong></a><a class="genanchor" href="#117876"> &para;</a><div class="date" title="2015-08-25 08:06"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117876">
<div class="phpcode"><code><span class="html">Use the following to decode all entities:<br /><span class="default">&lt;?php html_entity_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">ENT_QUOTES </span><span class="keyword">| </span><span class="default">ENT_XML1</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">) </span><span class="default">?&gt;<br /></span><br />I've checked these special entities: <br />- double quotes (&amp;#34;)<br />- single quotes (&amp;#39; and &amp;apos;) <br />- non printable chars (e.g. &amp;#13;)<br />With other $flags some or all won't be decoded.<br /><br />It seems that ENT_XML1 and ENT_XHTML are identical when decoding.</span></code></div>
  </div>
 </div>
  <div class="note" id="45649">  <div class="votes">
    <div id="Vu45649">
    <a href="/manual/vote-note.php?id=45649&amp;page=function.html-entity-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45649">
    <a href="/manual/vote-note.php?id=45649&amp;page=function.html-entity-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45649" title="56% like this...">
    7
    </div>
  </div>
  <a href="#45649" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#45649"> &para;</a><div class="date" title="2004-09-14 12:57"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45649">
<div class="phpcode"><code><span class="html">This functionality is now implemented in the PEAR package PHP_Compat.<br /><br />More information about using this function without upgrading your version of PHP can be found on the below link:<br /><br /><a href="http://pear.php.net/package/PHP_Compat" rel="nofollow" target="_blank">http://pear.php.net/package/PHP_Compat</a></span></code></div>
  </div>
 </div>
  <div class="note" id="111859">  <div class="votes">
    <div id="Vu111859">
    <a href="/manual/vote-note.php?id=111859&amp;page=function.html-entity-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111859">
    <a href="/manual/vote-note.php?id=111859&amp;page=function.html-entity-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111859" title="50% like this...">
    0
    </div>
  </div>
  <a href="#111859" class="name">
  <strong class="user"><em>Benjamin</em></strong></a><a class="genanchor" href="#111859"> &para;</a><div class="date" title="2013-04-05 11:07"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111859">
<div class="phpcode"><code><span class="html">The following function decodes named and numeric HTML entities and works on UTF-8. Requires iconv.<br /><br />function decodeHtmlEnt($str) {<br />    $ret = html_entity_decode($str, ENT_COMPAT, 'UTF-8');<br />    $p2 = -1;<br />    for(;;) {<br />        $p = strpos($ret, '&amp;#', $p2+1);<br />        if ($p === FALSE)<br />            break;<br />        $p2 = strpos($ret, ';', $p);<br />        if ($p2 === FALSE)<br />            break;<br />            <br />        if (substr($ret, $p+2, 1) == 'x')<br />            $char = hexdec(substr($ret, $p+3, $p2-$p-3));<br />        else<br />            $char = intval(substr($ret, $p+2, $p2-$p-2));<br />            <br />        //echo "$char\n";<br />        $newchar = iconv(<br />            'UCS-4', 'UTF-8',<br />            chr(($char&gt;&gt;24)&amp;0xFF).chr(($char&gt;&gt;16)&amp;0xFF).chr(($char&gt;&gt;8)&amp;0xFF).chr($char&amp;0xFF) <br />        );<br />        //echo "$newchar&lt;$p&lt;$p2&lt;&lt;\n";<br />        $ret = substr_replace($ret, $newchar, $p, 1+$p2-$p);<br />        $p2 = $p + strlen($newchar);<br />    }<br />    return $ret;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="123004">  <div class="votes">
    <div id="Vu123004">
    <a href="/manual/vote-note.php?id=123004&amp;page=function.html-entity-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123004">
    <a href="/manual/vote-note.php?id=123004&amp;page=function.html-entity-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123004" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#123004" class="name">
  <strong class="user"><em>Daniel A.</em></strong></a><a class="genanchor" href="#123004"> &para;</a><div class="date" title="2018-08-03 03:34"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123004">
<div class="phpcode"><code><span class="html">I wanted to use this function today and I found the documentation, especially about the flags, not particularly helpful.<br /><br />Running the code below, for example, failed because the flag I used was the wrong one...<br /><br />$string = 'Donna&amp;#039;s Bakery';<br />$title = html_entity_decode($string, ENT_HTML401, 'UTF-8');<br />echo $title;<br /><br />The correct flag to use in this case is ENT_QUOTES.<br /><br />My understanding of the flag to use is the one that would correspond to the expected, converted outcome. So, ENT_QUOTES for a character that would be a single or double quote when converted... and so on.<br /><br />Please help make the documentation a bit clearer.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.html-entity-decode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.html-entity-decode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="current">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
