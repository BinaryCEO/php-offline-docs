<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: htmlentities - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.htmlentities.php">
 <link rel="shorturl" href="https://www.php.net/htmlentities">
 <link rel="alternate" href="https://www.php.net/htmlentities" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.html-entity-decode.php">
 <link rel="next" href="https://www.php.net/manual/en/function.htmlspecialchars.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.htmlentities.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.htmlentities.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.htmlentities.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.htmlentities.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.htmlentities.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.htmlentities.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.htmlentities.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.htmlentities.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.htmlentities.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.htmlentities.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.htmlentities.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert all applicable characters to HTML entities" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: htmlentities - Manual" />
<meta name="twitter:description" content="Convert all applicable characters to HTML entities" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: htmlentities - Manual" />
<meta itemprop="description" content="Convert all applicable characters to HTML entities" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert all applicable characters to HTML entities" />

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
        <a href="function.htmlspecialchars.php">
          htmlspecialchars &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.html-entity-decode.php">
          &laquo; html_entity_decode        </a>
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
            <option value='en/function.htmlentities.php' selected="selected">English</option>
            <option value='de/function.htmlentities.php'>German</option>
            <option value='es/function.htmlentities.php'>Spanish</option>
            <option value='fr/function.htmlentities.php'>French</option>
            <option value='it/function.htmlentities.php'>Italian</option>
            <option value='ja/function.htmlentities.php'>Japanese</option>
            <option value='pt_BR/function.htmlentities.php'>Brazilian Portuguese</option>
            <option value='ru/function.htmlentities.php'>Russian</option>
            <option value='tr/function.htmlentities.php'>Turkish</option>
            <option value='uk/function.htmlentities.php'>Ukrainian</option>
            <option value='zh/function.htmlentities.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.htmlentities" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">htmlentities</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">htmlentities</span> &mdash; <span class="dc-title">Convert all applicable characters to HTML entities</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.htmlentities-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>htmlentities</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$encoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$double_encode</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   This function is identical to <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> in all
   ways, except with <span class="function"><strong>htmlentities()</strong></span>, all characters which
   have HTML character entity equivalents are translated into these entities.
   The <span class="function"><a href="function.get-html-translation-table.php" class="function">get_html_translation_table()</a></span> function can be used
   to return the translation table used dependent upon the provided
   <code class="parameter">flags</code> constants.
  </p>
  <p class="para">
   If you want to decode instead (the reverse) you can use
   <span class="function"><a href="function.html-entity-decode.php" class="function">html_entity_decode()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.htmlentities-parameters">
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
       A bitmask of one or more of the following flags, which specify how to handle quotes,
       invalid code unit sequences and the used document type. The default is
       <code class="literal">ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</code>.
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
           <td><strong><code><a href="string.constants.php#constant.ent-ignore">ENT_IGNORE</a></code></strong></td>
           <td>
            Silently discard invalid code unit sequences instead of returning
            an empty string. Using this flag is discouraged as it
            <a href="http://unicode.org/reports/tr36/#Deletion_of_Noncharacters" class="link external">&raquo;&nbsp;may have security implications</a>.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-substitute">ENT_SUBSTITUTE</a></code></strong></td>
           <td>
            Replace invalid code unit sequences with a Unicode Replacement Character
            U+FFFD (UTF-8) or &amp;#FFFD; (otherwise) instead of returning an empty string.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-disallowed">ENT_DISALLOWED</a></code></strong></td>
           <td>
            Replace invalid code points for the given document type with a
            Unicode Replacement Character U+FFFD (UTF-8) or &amp;#FFFD;
            (otherwise) instead of leaving them as is. This may be useful, for
            instance, to ensure the well-formedness of XML documents with
            embedded external content.
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
    
    
     <dt><code class="parameter">double_encode</code></dt>
     <dd>
      <p class="para">
       When <code class="parameter">double_encode</code> is turned off PHP will not
       encode existing html entities. The default is to convert everything.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.htmlentities-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the encoded string.
  </p>
  <p class="para">
   If the input <code class="parameter">string</code> contains an invalid code unit
   sequence within the given <code class="parameter">encoding</code> an empty string
   will be returned, unless either the <strong><code><a href="string.constants.php#constant.ent-ignore">ENT_IGNORE</a></code></strong> or
   <strong><code><a href="string.constants.php#constant.ent-substitute">ENT_SUBSTITUTE</a></code></strong> flags are set.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.htmlentities-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.htmlentities-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5076">
    <p><strong>Example #1 A <span class="function"><strong>htmlentities()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"A 'quote' is &lt;b&gt;bold&lt;/b&gt;"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">ENT_COMPAT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">A &amp;#039;quote&amp;#039; is &amp;lt;b&amp;gt;bold&amp;lt;/b&amp;gt;

A &#039;quote&#039; is &amp;lt;b&amp;gt;bold&amp;lt;/b&amp;gt</pre>
</div>
    </div>
   </div>
  </p>
  
  <p class="para">
   <div class="example" id="example-5077">
    <p><strong>Example #2 Usage of <strong><code><a href="string.constants.php#constant.ent-ignore">ENT_IGNORE</a></code></strong></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"\x8F!!!"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs an empty string<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Outputs "!!!"<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">ENT_QUOTES </span><span style="color: #007700">| </span><span style="color: #0000BB">ENT_IGNORE</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.htmlentities-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.html-entity-decode.php" class="function" rel="rdfs-seeAlso">html_entity_decode()</a> - Convert HTML entities to their corresponding characters</span></li>
    <li><span class="function"><a href="function.get-html-translation-table.php" class="function" rel="rdfs-seeAlso">get_html_translation_table()</a> - Returns the translation table used by htmlspecialchars and htmlentities</span></li>
    <li><span class="function"><a href="function.htmlspecialchars.php" class="function" rel="rdfs-seeAlso">htmlspecialchars()</a> - Convert special characters to HTML entities</span></li>
    <li><span class="function"><a href="function.nl2br.php" class="function" rel="rdfs-seeAlso">nl2br()</a> - Inserts HTML line breaks before all newlines in a string</span></li>
    <li><span class="function"><a href="function.urlencode.php" class="function" rel="rdfs-seeAlso">urlencode()</a> - URL-encodes string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/htmlentities.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.htmlentities%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.htmlentities&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.htmlentities.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99896">  <div class="votes">
    <div id="Vu99896">
    <a href="/manual/vote-note.php?id=99896&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99896">
    <a href="/manual/vote-note.php?id=99896&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99896" title="77% like this...">
    166
    </div>
  </div>
  <a href="#99896" class="name">
  <strong class="user"><em>Sijmen Ruwhof</em></strong></a><a class="genanchor" href="#99896"> &para;</a><div class="date" title="2010-09-13 12:18"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99896">
<div class="phpcode"><code><span class="html">An important note below about using this function to secure your application against Cross Site Scripting (XSS) vulnerabilities.<br /><br />When printing user input in an attribute of an HTML tag, the default configuration of htmlEntities() doesn't protect you against XSS, when using single quotes to define the border of the tag's attribute-value. XSS is then possible by injecting a single quote:<br /><br /><span class="default">&lt;?php<br />$_GET</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">] = </span><span class="string">"#000' onload='alert(document.cookie)"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />XSS possible (insecure):<br /><br /><span class="default">&lt;?php<br />$href </span><span class="keyword">= </span><span class="default">htmlEntities</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">]);<br />print </span><span class="string">"&lt;body bgcolor='</span><span class="default">$href</span><span class="string">'&gt;"</span><span class="keyword">; </span><span class="comment"># results in: &lt;body bgcolor='#000' onload='alert(document.cookie)'&gt;<br /></span><span class="default">?&gt;<br /></span><br />Use the 'ENT_QUOTES' quote style option, to ensure no XSS is possible and your application is secure:<br /><br /><span class="default">&lt;?php<br />$href </span><span class="keyword">= </span><span class="default">htmlEntities</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">], </span><span class="default">ENT_QUOTES</span><span class="keyword">);<br />print </span><span class="string">"&lt;body bgcolor='</span><span class="default">$href</span><span class="string">'&gt;"</span><span class="keyword">; </span><span class="comment"># results in: &lt;body bgcolor='#000&amp;#039; onload=&amp;#039;alert(document.cookie)'&gt;<br /></span><span class="default">?&gt;<br /></span><br />The 'ENT_QUOTES' option doesn't protect you against javascript evaluation in certain tag's attributes, like the 'href' attribute of the 'a' tag. When clicked on the link below, the given JavaScript will get executed:<br /><br /><span class="default">&lt;?php<br />$_GET</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">] = </span><span class="string">'javascript:alert(document.cookie)'</span><span class="keyword">;<br /></span><span class="default">$href </span><span class="keyword">= </span><span class="default">htmlEntities</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">], </span><span class="default">ENT_QUOTES</span><span class="keyword">);<br />print </span><span class="string">"&lt;a href='</span><span class="default">$href</span><span class="string">'&gt;link&lt;/a&gt;"</span><span class="keyword">; </span><span class="comment"># results in: &lt;a href='javascript:alert(document.cookie)'&gt;link&lt;/a&gt;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127026">  <div class="votes">
    <div id="Vu127026">
    <a href="/manual/vote-note.php?id=127026&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127026">
    <a href="/manual/vote-note.php?id=127026&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127026" title="87% like this...">
    6
    </div>
  </div>
  <a href="#127026" class="name">
  <strong class="user"><em>j2teamnnl at gmail dot com</em></strong></a><a class="genanchor" href="#127026"> &para;</a><div class="date" title="2022-05-04 09:31"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127026">
<div class="phpcode"><code><span class="html">The answer above is not correct for multiple languages like France<br />I had correct it<br />function xml_entities($strIn)<br />    {<br />        if (is_numeric($strIn)) {<br />            return $strIn;<br />        }<br />        $strOut = null;<br /><br />        $arrStr = mb_str_split($strIn);<br />        foreach ($arrStr as $char) {<br />            $ord = mb_ord($char);<br /><br />            if (($ord &gt; 0 &amp;&amp; $ord &lt; 32) || ($ord &gt;= 127)) {<br />                $strOut .= "&amp;amp;#{$ord};";<br />            }<br />            else {<br />                switch ($char) {<br />                    case '&lt;':<br />                        $strOut .= '&amp;lt;';<br />                        break;<br />                    case '&gt;':<br />                        $strOut .= '&amp;gt;';<br />                        break;<br />                    case '&amp;':<br />                        $strOut .= '&amp;amp;';<br />                        break;<br />                    case '"':<br />                        $strOut .= '&amp;quot;';<br />                        break;<br />                    default:<br />                        $strOut .= $char;<br />                }<br />            }<br />        }<br /><br />        return $strOut;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="73708">  <div class="votes">
    <div id="Vu73708">
    <a href="/manual/vote-note.php?id=73708&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73708">
    <a href="/manual/vote-note.php?id=73708&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73708" title="72% like this...">
    27
    </div>
  </div>
  <a href="#73708" class="name">
  <strong class="user"><em>q (dot) rendeiro (at) gmail (dot) com</em></strong></a><a class="genanchor" href="#73708"> &para;</a><div class="date" title="2007-03-07 04:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73708">
<div class="phpcode"><code><span class="html">I've seen lots of functions to convert all the entities, but I needed to do a fulltext search in a db field that had named entities instead of numeric entities (edited by tinymce), so I searched the tinymce source and found a string with the value-&gt;entity mapping. So, i wrote the following function to encode the user's query with named entities.<br /><br />The string I used is different of the original, because i didn't want to convert ' or ". The string is too long, so I had to cut it. To get the original check TinyMCE source and search for nbsp or other entity ;)<br /><br /><span class="default">&lt;?php<br /><br />$entities_unmatched </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="string">'160,nbsp,161,iexcl,162,cent, [...] '</span><span class="keyword">);<br /></span><span class="default">$even </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />foreach(</span><span class="default">$entities_unmatched </span><span class="keyword">as </span><span class="default">$c</span><span class="keyword">) {<br />    if(</span><span class="default">$even</span><span class="keyword">) {<br />        </span><span class="default">$ord </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">;<br />    } else {<br />        </span><span class="default">$entities_table</span><span class="keyword">[</span><span class="default">$ord</span><span class="keyword">] = </span><span class="default">$c</span><span class="keyword">;<br />    }<br />    </span><span class="default">$even </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">- </span><span class="default">$even</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">encode_named_entities</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    global </span><span class="default">$entities_table</span><span class="keyword">;<br />    <br />    </span><span class="default">$encoded_str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$ent </span><span class="keyword">= @</span><span class="default">$entities_table</span><span class="keyword">[</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">})];<br />        if(</span><span class="default">$ent</span><span class="keyword">) {<br />            </span><span class="default">$encoded_str </span><span class="keyword">.= </span><span class="string">"&amp;</span><span class="default">$ent</span><span class="string">;"</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$encoded_str </span><span class="keyword">.= </span><span class="default">$str</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">};<br />        }<br />    }<br />    return </span><span class="default">$encoded_str</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123190">  <div class="votes">
    <div id="Vu123190">
    <a href="/manual/vote-note.php?id=123190&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123190">
    <a href="/manual/vote-note.php?id=123190&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123190" title="75% like this...">
    6
    </div>
  </div>
  <a href="#123190" class="name">
  <strong class="user"><em>2962051004 at qq dot com</em></strong></a><a class="genanchor" href="#123190"> &para;</a><div class="date" title="2018-10-03 04:09"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123190">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * 将中文转为Html实体<br /> * Convert Chinese in HTML to entity<br /> * Author QiangGe<br /> * Mail 2962051004@qq.com<br /> *<br />*/<br /><br /></span><span class="default">$str </span><span class="keyword">= &lt;&lt;&lt;EOT<br /></span><span class="string">你好 world<br /></span><span class="keyword">EOT;<br /><br />function </span><span class="default">ChineseToEntity</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br /> return </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />        </span><span class="string">'/[\x{4e00}-\x{9fa5}]/u'</span><span class="keyword">, </span><span class="comment">// utf-8 <br />        // '/[\x7f-\xff]+/', // if gb2312<br />        </span><span class="keyword">function (</span><span class="default">$matches</span><span class="keyword">) {<br />            </span><span class="default">$json </span><span class="keyword">= </span><span class="default">json_encode</span><span class="keyword">(array(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]));<br />            </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\[\"(.*)\"\]/'</span><span class="keyword">, </span><span class="default">$json</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">);<br />            </span><span class="comment">/*<br />             * 通过json_encode函数将中文转为unicode<br />             * 然后用正则取出unicode<br />             * Turn the Chinese into Unicode through the json_encode function, then extract Unicode from regular.<br />             * I think this idea is seamless.<br />            */<br />            </span><span class="keyword">return </span><span class="string">'&amp;#x'</span><span class="keyword">. </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'\\u'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]). </span><span class="string">';'</span><span class="keyword">;<br />        }, </span><span class="default">$str<br />   </span><span class="keyword">);<br />}<br /><br />echo </span><span class="default">ChineseToEntity</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /></span><span class="comment">// &amp;#x4f60;&amp;#x597d; world</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70964">  <div class="votes">
    <div id="Vu70964">
    <a href="/manual/vote-note.php?id=70964&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70964">
    <a href="/manual/vote-note.php?id=70964&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70964" title="68% like this...">
    14
    </div>
  </div>
  <a href="#70964" class="name">
  <strong class="user"><em>realcj at g mail dt com</em></strong></a><a class="genanchor" href="#70964"> &para;</a><div class="date" title="2006-11-06 10:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70964">
<div class="phpcode"><code><span class="html">If you are building a loadvars page for Flash and have problems with special chars such as " &amp; ", " ' " etc, you should escape them for flash:
<br />
<br />Try trace(escape("&amp;")); in flash' actionscript to see the escape code for &amp;;
<br />
<br />% = %25
<br />&amp; = %26
<br />' = %27
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">flashentities</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">){
<br />return </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"&amp;"</span><span class="keyword">,</span><span class="string">"'"</span><span class="keyword">),array(</span><span class="string">"%26"</span><span class="keyword">,</span><span class="string">"%27"</span><span class="keyword">),</span><span class="default">$string</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Those are the two that concerned me. YMMV.</span></code></div>
  </div>
 </div>
  <div class="note" id="97215">  <div class="votes">
    <div id="Vu97215">
    <a href="/manual/vote-note.php?id=97215&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97215">
    <a href="/manual/vote-note.php?id=97215&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97215" title="66% like this...">
    17
    </div>
  </div>
  <a href="#97215" class="name">
  <strong class="user"><em>phil at lavin dot me dot uk</em></strong></a><a class="genanchor" href="#97215"> &para;</a><div class="date" title="2010-04-08 08:34"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97215">
<div class="phpcode"><code><span class="html">The following will make a string completely safe for XML:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">philsXMLClean</span><span class="keyword">(</span><span class="default">$strin</span><span class="keyword">) {<br />        </span><span class="default">$strout </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$strin</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />                </span><span class="default">$ord </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$strin</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br /><br />                if ((</span><span class="default">$ord </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$ord </span><span class="keyword">&lt; </span><span class="default">32</span><span class="keyword">) || (</span><span class="default">$ord </span><span class="keyword">&gt;= </span><span class="default">127</span><span class="keyword">)) {<br />                        </span><span class="default">$strout </span><span class="keyword">.= </span><span class="string">"&amp;amp;#</span><span class="keyword">{</span><span class="default">$ord</span><span class="keyword">}</span><span class="string">;"</span><span class="keyword">;<br />                }<br />                else {<br />                        switch (</span><span class="default">$strin</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) {<br />                                case </span><span class="string">'&lt;'</span><span class="keyword">:<br />                                        </span><span class="default">$strout </span><span class="keyword">.= </span><span class="string">'&amp;lt;'</span><span class="keyword">;<br />                                        break;<br />                                case </span><span class="string">'&gt;'</span><span class="keyword">:<br />                                        </span><span class="default">$strout </span><span class="keyword">.= </span><span class="string">'&amp;gt;'</span><span class="keyword">;<br />                                        break;<br />                                case </span><span class="string">'&amp;'</span><span class="keyword">:<br />                                        </span><span class="default">$strout </span><span class="keyword">.= </span><span class="string">'&amp;amp;'</span><span class="keyword">;<br />                                        break;<br />                                case </span><span class="string">'"'</span><span class="keyword">:<br />                                        </span><span class="default">$strout </span><span class="keyword">.= </span><span class="string">'&amp;quot;'</span><span class="keyword">;<br />                                        break;<br />                                default:<br />                                        </span><span class="default">$strout </span><span class="keyword">.= </span><span class="default">$strin</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />                        }<br />                }<br />        }<br /><br />        return </span><span class="default">$strout</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114041">  <div class="votes">
    <div id="Vu114041">
    <a href="/manual/vote-note.php?id=114041&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114041">
    <a href="/manual/vote-note.php?id=114041&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114041" title="65% like this...">
    12
    </div>
  </div>
  <a href="#114041" class="name">
  <strong class="user"><em>hajo-p</em></strong></a><a class="genanchor" href="#114041"> &para;</a><div class="date" title="2014-01-05 05:18"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114041">
<div class="phpcode"><code><span class="html">The flag ENT_HTML5 also strips newline chars like \n with htmlentities while htmlspecialchars is not affected by that.<br /><br />If you want to use nl2br on that string afterwards you might end up searching the problem like i did. This does not apply to other flags like e.g. ENT_XHTML which confused me.<br /><br />Tested this with PHP 5.4 / 5.5 / 5.6-dev with same results, so it seems that this is an intended "feature".</span></code></div>
  </div>
 </div>
  <div class="note" id="108222">  <div class="votes">
    <div id="Vu108222">
    <a href="/manual/vote-note.php?id=108222&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108222">
    <a href="/manual/vote-note.php?id=108222&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108222" title="65% like this...">
    14
    </div>
  </div>
  <a href="#108222" class="name">
  <strong class="user"><em>ustimenko dot alexander at gmail dot com</em></strong></a><a class="genanchor" href="#108222"> &para;</a><div class="date" title="2012-04-09 02:15"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108222">
<div class="phpcode"><code><span class="html">For those Spanish (and not only) folks, that want their national letters back after htmlentities :)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">protected function </span><span class="default">_decodeAccented</span><span class="keyword">(</span><span class="default">$encodedValue</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">= array()) {<br />    </span><span class="default">$options </span><span class="keyword">+= array(<br />        </span><span class="string">'quote'     </span><span class="keyword">=&gt; </span><span class="default">ENT_NOQUOTES</span><span class="keyword">,<br />        </span><span class="string">'encoding'  </span><span class="keyword">=&gt; </span><span class="string">'UTF-8'</span><span class="keyword">,<br />    );<br />    return </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />        </span><span class="string">'/&amp;\w(acute|uml|tilde);/'</span><span class="keyword">,<br />        </span><span class="default">create_function</span><span class="keyword">(<br />            </span><span class="string">'$m'</span><span class="keyword">,<br />            </span><span class="string">'return html_entity_decode($m[0], ' </span><span class="keyword">. </span><span class="default">$options</span><span class="keyword">[</span><span class="string">'quote'</span><span class="keyword">] . </span><span class="string">', "' </span><span class="keyword">.<br />            </span><span class="default">$options</span><span class="keyword">[</span><span class="string">'encoding'</span><span class="keyword">] . </span><span class="string">'");'<br />        </span><span class="keyword">),<br />        </span><span class="default">$encodedValue<br />    </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106929">  <div class="votes">
    <div id="Vu106929">
    <a href="/manual/vote-note.php?id=106929&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106929">
    <a href="/manual/vote-note.php?id=106929&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106929" title="65% like this...">
    12
    </div>
  </div>
  <a href="#106929" class="name">
  <strong class="user"><em>wd at NOSPAMwd dot it</em></strong></a><a class="genanchor" href="#106929"> &para;</a><div class="date" title="2011-12-19 02:20"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106929">
<div class="phpcode"><code><span class="html">Hi there,<br /><br />after several and several tests, I figured out that dot:<br /><br />- htmlentities() function remove characters like "à","è",etc when you specify a flag and a charset<br /><br />- htmlentities() function DOES NOT remove characters like those above when you DO NOT specify anything<br /><br />So, let's assume that..<br /><br /><span class="default">&lt;?php<br /><br />$str </span><span class="keyword">= </span><span class="string">"Hèèèllooo"</span><span class="keyword">;<br /><br /></span><span class="default">$res_1 </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br /></span><span class="default">$res_2 </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /><br />echo </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$res_1</span><span class="keyword">); </span><span class="comment">// Result: string '' (length=0)<br /></span><span class="keyword">echo </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$res_2</span><span class="keyword">); </span><span class="comment">// string 'H&amp;egrave;&amp;egrave;&amp;egrave;llooo' (length=30)<br /><br /></span><span class="default">?&gt;<br /></span><br />I used this for a textarea content for comments. Anyway, note that using the "$res_2" form the function will leave unconverted single/double quotes. At this point you should use str_replace() function to perform the characters but be careful because..<br /><br /><span class="default">&lt;?php<br /><br />$str </span><span class="keyword">= </span><span class="string">"'Hèèèllooo'"</span><span class="keyword">;<br /><br /></span><span class="default">$res_2 </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"'"</span><span class="keyword">,</span><span class="string">"&amp;#039;"</span><span class="keyword">,</span><span class="default">$str</span><span class="keyword">);<br /></span><span class="default">$res_2 </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />echo </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$res_2</span><span class="keyword">); </span><span class="comment">// string '&amp;amp;#039;H&amp;egrave;&amp;egrave;&amp;egrave;llooo&amp;amp;#039;'<br /><br /></span><span class="default">$res_3 </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /></span><span class="default">$res_3 </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"'"</span><span class="keyword">,</span><span class="string">"&amp;#039;"</span><span class="keyword">,</span><span class="default">$res_3</span><span class="keyword">);<br />echo </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$res_3</span><span class="keyword">); </span><span class="comment">// string '&amp;#039;H&amp;egrave;&amp;egrave;&amp;egrave;llooo&amp;#039;' --&gt; Nice<br /></span><span class="default">?&gt;<br /></span><br />Hope it will helps you.<br /><br />Regards,<br />W.D.</span></code></div>
  </div>
 </div>
  <div class="note" id="28197">  <div class="votes">
    <div id="Vu28197">
    <a href="/manual/vote-note.php?id=28197&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28197">
    <a href="/manual/vote-note.php?id=28197&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28197" title="66% like this...">
    7
    </div>
  </div>
  <a href="#28197" class="name">
  <strong class="user"><em>Bassie (:</em></strong></a><a class="genanchor" href="#28197"> &para;</a><div class="date" title="2003-01-05 04:07"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28197">
<div class="phpcode"><code><span class="html">Note that you'll have use htmlentities() before any other function who'll edit text like nl2br().<br /><br />If you use nl2br() first, the htmlentities() function will change &lt; br &gt; to &amp;lt;br&amp;gt;.</span></code></div>
  </div>
 </div>
  <div class="note" id="107985">  <div class="votes">
    <div id="Vu107985">
    <a href="/manual/vote-note.php?id=107985&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107985">
    <a href="/manual/vote-note.php?id=107985&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107985" title="61% like this...">
    14
    </div>
  </div>
  <a href="#107985" class="name">
  <strong class="user"><em>n at erui dot eu</em></strong></a><a class="genanchor" href="#107985"> &para;</a><div class="date" title="2012-03-20 12:46"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107985">
<div class="phpcode"><code><span class="html">html entities does not encode all unicode characters. It encodes what it can [all of latin1], and the others slip through. &amp;#1033; is the nasty I use. I have searched for a function which encodes everything, but in the end I wrote this. This is as simple as I can get it. Consult an ansii table to custom include/omit chars you want/don't. I'm sure it's not that fast.<br /><br />// Unicode-proof htmlentities. <br />// Returns 'normal' chars as chars and weirdos as numeric html entites.<br />function superentities( $str ){<br />    // get rid of existing entities else double-escape<br />    $str = html_entity_decode(stripslashes($str),ENT_QUOTES,'UTF-8'); <br />    $ar = preg_split('/(?&lt;!^)(?!$)/u', $str );  // return array of every multi-byte character<br />    foreach ($ar as $c){<br />        $o = ord($c);<br />        if ( (strlen($c) &gt; 1) || /* multi-byte [unicode] */<br />            ($o &lt;32 || $o &gt; 126) || /* &lt;- control / latin weirdos -&gt; */<br />            ($o &gt;33 &amp;&amp; $o &lt; 40) ||/* quotes + ambersand */<br />            ($o &gt;59 &amp;&amp; $o &lt; 63) /* html */<br />        ) {<br />            // convert to numeric entity<br />            $c = mb_encode_numericentity($c,array (0x0, 0xffff, 0, 0xffff), 'UTF-8');<br />        }<br />        $str2 .= $c;<br />    }<br />    return $str2;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="104288">  <div class="votes">
    <div id="Vu104288">
    <a href="/manual/vote-note.php?id=104288&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104288">
    <a href="/manual/vote-note.php?id=104288&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104288" title="62% like this...">
    9
    </div>
  </div>
  <a href="#104288" class="name">
  <strong class="user"><em>Waygood</em></strong></a><a class="genanchor" href="#104288"> &para;</a><div class="date" title="2011-06-06 02:09"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104288">
<div class="phpcode"><code><span class="html">When putting values inside comment tags &lt;!-- --&gt; you should replace -- with &amp;#45;&amp;#45; too, as this would end your tag and show the rest of the comment.</span></code></div>
  </div>
 </div>
  <div class="note" id="103486">  <div class="votes">
    <div id="Vu103486">
    <a href="/manual/vote-note.php?id=103486&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103486">
    <a href="/manual/vote-note.php?id=103486&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103486" title="61% like this...">
    8
    </div>
  </div>
  <a href="#103486" class="name">
  <strong class="user"><em>robin at robinwinslow dot co dot uk</em></strong></a><a class="genanchor" href="#103486"> &para;</a><div class="date" title="2011-04-15 08:14"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103486">
<div class="phpcode"><code><span class="html">htmlentities seems to have changed at some point between version 5.1.6 and 5.3.3, such that it now returns an empty string for anything containing a pound sign:<br /><br />$ php -v<br />PHP 5.1.6 (cli) (built: May 22 2008 09:08:44)<br />$ php -r "echo htmlentities('£hello', null, 'utf-8');"<br />&amp;pound;hello<br />$<br /><br />$ php -v<br />PHP 5.3.3 (cli) (built: Aug 19 2010 12:07:49)<br />$ php -r "echo htmlentities('£hello', null, 'utf-8');"<br />$<br /><br />(Returns an empty string the second time)<br /><br />Just a heads up.</span></code></div>
  </div>
 </div>
  <div class="note" id="102621">  <div class="votes">
    <div id="Vu102621">
    <a href="/manual/vote-note.php?id=102621&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102621">
    <a href="/manual/vote-note.php?id=102621&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102621" title="60% like this...">
    6
    </div>
  </div>
  <a href="#102621" class="name">
  <strong class="user"><em>admin at wapforum dot rs</em></strong></a><a class="genanchor" href="#102621"> &para;</a><div class="date" title="2011-02-24 01:11"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102621">
<div class="phpcode"><code><span class="html">A useful little function to convert the symbols in the different inputs.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ConvertSimbols</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$ConvertQuotes </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />if (</span><span class="default">$ConvertQuotes </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'\"'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">);<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\'"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">);<br />} else {<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br />}<br />return </span><span class="default">$var</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage with quotes for example message:<br /><br />$message = ConvertSimbols($message);<br /><br />Usage without quotes for example link:<br /><br />$link = ConvertSimbols($link, 1);</span></code></div>
  </div>
 </div>
  <div class="note" id="122790">  <div class="votes">
    <div id="Vu122790">
    <a href="/manual/vote-note.php?id=122790&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122790">
    <a href="/manual/vote-note.php?id=122790&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122790" title="59% like this...">
    4
    </div>
  </div>
  <a href="#122790" class="name">
  <strong class="user"><em>Jeff</em></strong></a><a class="genanchor" href="#122790"> &para;</a><div class="date" title="2018-06-01 01:25"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122790">
<div class="phpcode"><code><span class="html">There is a feature when writing to XML using an AJAX call to PHP that rarely is mentioned. I struggled for many hours using htmlentities() because what was getting written to my XML document was not as expected. I naturally assumed that I should be converting my strings before writing them to XML to adhere to XML rules on illegal characters. To my surprise, when converting with htmlentities() or htmlspecialchars() and then writing to an XML file, the resulting ampersands get converted afterwards! Consider the following example:<br /><br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= </span><span class="string">"&lt;b&gt;I am cool&lt;/b&gt;" </span><span class="keyword">;<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) ;<br /></span><span class="default">?&gt;<br /></span><br />When you append $str to an XML element and save() the document, you would expect the XML document's source code to look something like this:<br /><br />&lt;ele&gt;&amp;lt;b&amp;gt;I am cool&amp;lt;/b&amp;gt;&lt;/ele&gt;<br /><br />But that is not what happens. The resulting ampersands get converted by PHP automatically to &amp;amp; and your source code ends up looking like this:<br /><br />&lt;ele&gt;&amp;amp;lt;b&amp;amp;gt;I am cool&amp;amp;lt;/b&amp;amp;gt;&lt;/ele&gt;<br /><br />As you can see, this creates problems when trying to output the XML data back to HTML. It is important to remember that when writing to XML this way, special characters like "&gt;" and "&lt;"; PHP converts them automatically and there becomes no need to use htmlentities() in certain cases. I assume this feature is in place to aid with passing data through header queries, to avoid reserved characters conflicting with others in a header query (e.g. &amp; or =). Now I understand this may not be the case with older versions of PHP and that this might be a feature of my version (PHP version 5.6.32). With older versions, I assume using htmlentities() or htmlspecialchars() is a must, as stated with previous notes here. Also I use the charset UTF-8 in my HTML and XML and am not sure if this also effects the results I get.<br /><br />Anyway, I struggled for many hours with using htmlentities() to convert strings for XML writing and saving, when all I had to do was simply not use the function and let PHP convert my strings for me. I hope this helps because I would think I am not the only one who has struggled with this situation.</span></code></div>
  </div>
 </div>
  <div class="note" id="86409">  <div class="votes">
    <div id="Vu86409">
    <a href="/manual/vote-note.php?id=86409&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86409">
    <a href="/manual/vote-note.php?id=86409&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86409" title="56% like this...">
    4
    </div>
  </div>
  <a href="#86409" class="name">
  <strong class="user"><em>Tom Walter</em></strong></a><a class="genanchor" href="#86409"> &para;</a><div class="date" title="2008-10-16 07:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86409">
<div class="phpcode"><code><span class="html">Note that as of 5.2.5 it appears that if the input string contains a character that is not valid for the output encoding you've specified, then this function returns null.<br /><br />You might expect it to just strip the invalid char, but it doesn't.<br /><br />You can strip the chars yourself like so:<br /><br />iconv('utf-8','utf-8',$str);<br /><br />You can combine that with htmlentities also:<br /><br />$str = htmlentities(iconv('UTF-8', 'UTF-8//IGNORE', $str, ENT_QUOTES, 'UTF-8');<br /><br />Should give you a string with htmlentities encoded to utf-8, and any unsupported chars stripped.</span></code></div>
  </div>
 </div>
  <div class="note" id="106535">  <div class="votes">
    <div id="Vu106535">
    <a href="/manual/vote-note.php?id=106535&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106535">
    <a href="/manual/vote-note.php?id=106535&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106535" title="53% like this...">
    2
    </div>
  </div>
  <a href="#106535" class="name">
  <strong class="user"><em>steve at mcdragonsoftware dot com</em></strong></a><a class="genanchor" href="#106535"> &para;</a><div class="date" title="2011-11-16 08:59"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106535">
<div class="phpcode"><code><span class="html">I'm glad 5.4 has xml support, but many of us are working with older installations, some of us still have to use PHP4. If you're like me you've been frustrated with trying to use htmlentites/htmlspecial chars with xml output. I was hoping to find an option to force numeric encoding, lacking that, I have written my own xmlencode function, which I now offer:
<br />
<br />usage: 
<br />
<br />$string xmlencode( $string )
<br />
<br />it will use htmlspecialchars for the valid xml entities amp, quote, lt, gt, (apos) and return the numeric entity for all other non alpha-numeric characters.
<br />
<br />-------------------------------------------
<br />
<br /><span class="default">&lt;?php 
<br /></span><span class="keyword">if( !</span><span class="default">function_exists</span><span class="keyword">( </span><span class="string">'xmlentities' </span><span class="keyword">) ) {
<br />    function </span><span class="default">xmlentities</span><span class="keyword">( </span><span class="default">$string </span><span class="keyword">) {
<br />        </span><span class="default">$not_in_list </span><span class="keyword">= </span><span class="string">"A-Z0-9a-z\s_-"</span><span class="keyword">;
<br />        return </span><span class="default">preg_replace_callback</span><span class="keyword">( </span><span class="string">"/[^</span><span class="keyword">{</span><span class="default">$not_in_list</span><span class="keyword">}</span><span class="string">]/" </span><span class="keyword">, </span><span class="string">'get_xml_entity_at_index_0' </span><span class="keyword">, </span><span class="default">$string </span><span class="keyword">);
<br />    }
<br />    function </span><span class="default">get_xml_entity_at_index_0</span><span class="keyword">( </span><span class="default">$CHAR </span><span class="keyword">) {
<br />        if( !</span><span class="default">is_string</span><span class="keyword">( </span><span class="default">$CHAR</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] ) || ( </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$CHAR</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] ) &gt; </span><span class="default">1 </span><span class="keyword">) ) {
<br />            die( </span><span class="string">"function: 'get_xml_entity_at_index_0' requires data type: 'char' (single character). '</span><span class="keyword">{</span><span class="default">$CHAR</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">' does not match this type." </span><span class="keyword">);
<br />        }
<br />        switch( </span><span class="default">$CHAR</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] ) {
<br />            case </span><span class="string">"'"</span><span class="keyword">:    case </span><span class="string">'"'</span><span class="keyword">:    case </span><span class="string">'&amp;'</span><span class="keyword">:    case </span><span class="string">'&lt;'</span><span class="keyword">:    case </span><span class="string">'&gt;'</span><span class="keyword">:
<br />                return </span><span class="default">htmlspecialchars</span><span class="keyword">( </span><span class="default">$CHAR</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">ENT_QUOTES </span><span class="keyword">);    break;
<br />            default:
<br />                return </span><span class="default">numeric_entity_4_char</span><span class="keyword">(</span><span class="default">$CHAR</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);                break;
<br />        }        
<br />    }
<br />    function </span><span class="default">numeric_entity_4_char</span><span class="keyword">( </span><span class="default">$char </span><span class="keyword">) {
<br />        return </span><span class="string">"&amp;#"</span><span class="keyword">.</span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">), </span><span class="default">3</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">).</span><span class="string">";"</span><span class="keyword">;
<br />    }    
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42020">  <div class="votes">
    <div id="Vu42020">
    <a href="/manual/vote-note.php?id=42020&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42020">
    <a href="/manual/vote-note.php?id=42020&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42020" title="54% like this...">
    3
    </div>
  </div>
  <a href="#42020" class="name">
  <strong class="user"><em>jake_mcmahon at hotmail dot com</em></strong></a><a class="genanchor" href="#42020"> &para;</a><div class="date" title="2004-04-29 02:29"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42020">
<div class="phpcode"><code><span class="html">This fuction is particularly useful against XSS (cross-site-scripting-). XSS makes use of holes in code, whether it be in Javascript or PHP. XSS often, if not always, uses HTML entities to do its evil deeds, so this function in co-operation with your scripts (particularly search or submitting scripts) is a very useful tool in combatting "H4X0rz".</span></code></div>
  </div>
 </div>
  <div class="note" id="99984">  <div class="votes">
    <div id="Vu99984">
    <a href="/manual/vote-note.php?id=99984&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99984">
    <a href="/manual/vote-note.php?id=99984&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99984" title="52% like this...">
    2
    </div>
  </div>
  <a href="#99984" class="name">
  <strong class="user"><em>h_guillaume at hotmail dot com</em></strong></a><a class="genanchor" href="#99984"> &para;</a><div class="date" title="2010-09-17 01:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99984">
<div class="phpcode"><code><span class="html">I use this function to encode all the xml entities and also all the &amp;something; that are not defined in xml like &amp;trade;<br />You can also decode what you encode with my decode function.<br />My function works a little like the htmlentities.<br />You can also add other string to the array if you want to exclude them from the encoding.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">xml_entity_decode</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$charset </span><span class="keyword">= </span><span class="string">'Windows-1252'</span><span class="keyword">){<br />    </span><span class="comment">// Double decode, so if the value was &amp;amp;trade; it will become Trademark<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_COMPAT</span><span class="keyword">, </span><span class="default">$charset</span><span class="keyword">);<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_COMPAT</span><span class="keyword">, </span><span class="default">$charset</span><span class="keyword">);<br />    return </span><span class="default">$text</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">xml_entities</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$charset </span><span class="keyword">= </span><span class="string">'Windows-1252'</span><span class="keyword">){<br />     </span><span class="comment">// Debug and Test<br />    // $text = "test &amp;amp; &amp;trade; &amp;amp;trade; abc &amp;reg; &amp;amp;reg; &amp;#45;";<br />    <br />    // First we encode html characters that are also invalid in xml<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_COMPAT</span><span class="keyword">, </span><span class="default">$charset</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    <br />    </span><span class="comment">// XML character entity array from Wiki<br />    // Note: &amp;apos; is useless in UTF-8 or in UTF-16<br />    </span><span class="default">$arr_xml_special_char </span><span class="keyword">= array(</span><span class="string">"&amp;quot;"</span><span class="keyword">,</span><span class="string">"&amp;amp;"</span><span class="keyword">,</span><span class="string">"&amp;apos;"</span><span class="keyword">,</span><span class="string">"&amp;lt;"</span><span class="keyword">,</span><span class="string">"&amp;gt;"</span><span class="keyword">);<br />    <br />    </span><span class="comment">// Building the regex string to exclude all strings with xml special char<br />    </span><span class="default">$arr_xml_special_char_regex </span><span class="keyword">= </span><span class="string">"(?"</span><span class="keyword">;<br />    foreach(</span><span class="default">$arr_xml_special_char </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){<br />        </span><span class="default">$arr_xml_special_char_regex </span><span class="keyword">.= </span><span class="string">"(?!</span><span class="default">$value</span><span class="string">)"</span><span class="keyword">;<br />    }<br />    </span><span class="default">$arr_xml_special_char_regex </span><span class="keyword">.= </span><span class="string">")"</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Scan the array for &amp;something_not_xml; syntax<br />    </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">"/</span><span class="default">$arr_xml_special_char_regex</span><span class="string">&amp;([a-zA-Z0-9]+;)/"</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Replace the &amp;something_not_xml; with &amp;amp;something_not_xml;<br />    </span><span class="default">$replacement </span><span class="keyword">= </span><span class="string">'&amp;amp;${1}'</span><span class="keyword">;<br />    return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82534">  <div class="votes">
    <div id="Vu82534">
    <a href="/manual/vote-note.php?id=82534&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82534">
    <a href="/manual/vote-note.php?id=82534&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82534" title="52% like this...">
    1
    </div>
  </div>
  <a href="#82534" class="name">
  <strong class="user"><em>za at byza dot it</em></strong></a><a class="genanchor" href="#82534"> &para;</a><div class="date" title="2008-04-15 09:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82534">
<div class="phpcode"><code><span class="html">Trouble when using files with different charset?
<br />
<br />htmlentities and html_entity_decode can be used to translate between charset! 
<br />
<br />Sample function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">utf2latin</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) {
<br />   </span><span class="default">$text</span><span class="keyword">=</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">ENT_COMPAT</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);
<br />   return </span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">ENT_COMPAT</span><span class="keyword">,</span><span class="string">'ISO-8859-1'</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120958">  <div class="votes">
    <div id="Vu120958">
    <a href="/manual/vote-note.php?id=120958&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120958">
    <a href="/manual/vote-note.php?id=120958&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120958" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#120958" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#120958"> &para;</a><div class="date" title="2017-04-10 01:10"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120958">
<div class="phpcode"><code><span class="html">This function throws a warning on bad input even if ENT_SUBSTITUTE is set, so be prepared for this.</span></code></div>
  </div>
 </div>
  <div class="note" id="100186">  <div class="votes">
    <div id="Vu100186">
    <a href="/manual/vote-note.php?id=100186&amp;page=function.htmlentities&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100186">
    <a href="/manual/vote-note.php?id=100186&amp;page=function.htmlentities&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100186" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#100186" class="name">
  <strong class="user"><em>drallen at cs dot uwaterloo dot ca</em></strong></a><a class="genanchor" href="#100186"> &para;</a><div class="date" title="2010-09-29 04:11"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100186">
<div class="phpcode"><code><span class="html">A pointer to <a href="http://www.php.net/manual/en/function.mb-convert-encoding.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.mb-convert-encoding.php</a> if your intention is to translate *all* characters in a charset to their corresponding HTML entities, not just named characters. Non-named characters will be replaced with HTML numeric encoding. eg:<br /><br />$text = mb_convert_encoding($text, 'HTML-ENTITIES', "UTF-8");</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.htmlentities&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.htmlentities.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="current">
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
