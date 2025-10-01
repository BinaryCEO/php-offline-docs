<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mb_ereg - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mb-ereg.php">
 <link rel="shorturl" href="https://www.php.net/mb-ereg">
 <link rel="alternate" href="https://www.php.net/mb-ereg" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mbstring.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mb-encoding-aliases.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mb-ereg-match.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mb-ereg.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mb-ereg.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mb-ereg.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mb-ereg.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mb-ereg.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mb-ereg.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mb-ereg.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mb-ereg.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mb-ereg.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mb-ereg.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mb-ereg.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Regular expression match with multibyte support" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mb_ereg - Manual" />
<meta name="twitter:description" content="Regular expression match with multibyte support" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mb_ereg - Manual" />
<meta itemprop="description" content="Regular expression match with multibyte support" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Regular expression match with multibyte support" />

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
        <a href="function.mb-ereg-match.php">
          mb_ereg_match &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mb-encoding-aliases.php">
          &laquo; mb_encoding_aliases        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.mbstring.php'>Multibyte String</a></li>      <li><a href='ref.mbstring.php'>Multibyte String Functions</a></li>      </ul>
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
            <option value='en/function.mb-ereg.php' selected="selected">English</option>
            <option value='de/function.mb-ereg.php'>German</option>
            <option value='es/function.mb-ereg.php'>Spanish</option>
            <option value='fr/function.mb-ereg.php'>French</option>
            <option value='it/function.mb-ereg.php'>Italian</option>
            <option value='ja/function.mb-ereg.php'>Japanese</option>
            <option value='pt_BR/function.mb-ereg.php'>Brazilian Portuguese</option>
            <option value='ru/function.mb-ereg.php'>Russian</option>
            <option value='tr/function.mb-ereg.php'>Turkish</option>
            <option value='uk/function.mb-ereg.php'>Ukrainian</option>
            <option value='zh/function.mb-ereg.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mb-ereg" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mb_ereg</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mb_ereg</span> &mdash; <span class="dc-title">Regular expression match with multibyte support</span></p>

 </div>
   
 <div class="refsect1 description" id="refsect1-function.mb-ereg-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mb_ereg</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$matches</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="simpara">
   Executes the regular expression match with multibyte support.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mb-ereg-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">pattern</code></dt>
     <dd>
      <p class="para">
       The search pattern.
      </p>
     </dd>
    
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The search <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">matches</code></dt>
     <dd>
      <p class="para">
       If matches are found for parenthesized substrings of
       <code class="parameter">pattern</code> and the function is called with the
       third argument <code class="parameter">matches</code>, the matches will be stored
       in the elements of the array <code class="parameter">matches</code>.
       If no matches are found, <code class="parameter">matches</code> is set to an empty
       array.
      </p>
      <p class="para">
       <var class="varname">$matches[1]</var> will contain the substring which starts at
       the first left parenthesis; <var class="varname">$matches[2]</var> will contain
       the substring starting at the second, and so on.
       <var class="varname">$matches[0]</var> will contain a copy of the complete string
       matched.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.mb-ereg-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns whether <code class="parameter">pattern</code> matches <code class="parameter">string</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.mb-ereg-changelog">
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
       This function returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success now. Previously, it returned the byte length
       of the matched string if a match for <code class="parameter">pattern</code> was found in
       <code class="parameter">string</code> and <code class="parameter">matches</code> was passed.
       If the optional parameter <code class="parameter">matches</code> was not passed or
       the length of the matched string was <code class="literal">0</code>, this function returned <code class="literal">1</code>.
      </td>
     </tr>

     <tr>
      <td>7.1.0</td>
      <td>
       <span class="function"><strong>mb_ereg()</strong></span> will now set <code class="parameter">matches</code> to
       an empty <span class="type"><a href="language.types.array.php" class="type array">array</a></span>, if nothing matched. Formerly,
       <code class="parameter">matches</code> was not modified in that case.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 notes" id="refsect1-function.mb-ereg-notes">
  <h3 class="title">Notes</h3>
  
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">The internal encoding or the
character encoding specified by <span class="function"><a href="function.mb-regex-encoding.php" class="function">mb_regex_encoding()</a></span>
will be used as the character encoding for this function.</p></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mb-ereg-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-regex-encoding.php" class="function" rel="rdfs-seeAlso">mb_regex_encoding()</a> - Set/Get character encoding for multibyte regex</span></li>
    <li><span class="function"><a href="function.mb-eregi.php" class="function" rel="rdfs-seeAlso">mb_eregi()</a> - Regular expression match ignoring case with multibyte support</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/functions/mb-ereg.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mb-ereg%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mb-ereg&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-ereg.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126325">  <div class="votes">
    <div id="Vu126325">
    <a href="/manual/vote-note.php?id=126325&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126325">
    <a href="/manual/vote-note.php?id=126325&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126325" title="100% like this...">
    3
    </div>
  </div>
  <a href="#126325" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126325"> &para;</a><div class="date" title="2021-08-11 03:32"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126325">
<div class="phpcode"><code><span class="html">One of the differences between preg_match() &amp; mb_ereg()<br />about "captured parenthesized subpattern".<br /><br /><span class="default">&lt;?php<br /><br />preg_match</span><span class="keyword">(</span><span class="string">'/(abc)(.*)/'</span><span class="keyword">, </span><span class="string">'abc'</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">);<br /><br /></span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'(abc)(.*)'</span><span class="keyword">, </span><span class="string">'abc'</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />array(3) {<br />  [0]=&gt;<br />  string(3) "abc"<br />  [1]=&gt;<br />  string(3) "abc"<br />  [2]=&gt;<br />  string(0) ""       // &lt;-- "string"(0) "" : preg_match()<br />}<br /><br />array(3) {<br />  [0]=&gt;<br />  string(3) "abc"<br />  [1]=&gt;<br />  string(3) "abc"<br />  [2]=&gt;<br />  bool(false)       // &lt;-- "bool"(false) : mb_ereg()<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="120789">  <div class="votes">
    <div id="Vu120789">
    <a href="/manual/vote-note.php?id=120789&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120789">
    <a href="/manual/vote-note.php?id=120789&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120789" title="72% like this...">
    5
    </div>
  </div>
  <a href="#120789" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120789"> &para;</a><div class="date" title="2017-03-11 01:14"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120789">
<div class="phpcode"><code><span class="html">Old link to Oniguruma regex syntax is not working anymore, there is a working one:<br /><a href="https://github.com/geoffgarside/oniguruma/blob/master/Syntax.txt" rel="nofollow" target="_blank">https://github.com/geoffgarside/oniguruma/blob/master/Syntax.txt</a></span></code></div>
  </div>
 </div>
  <div class="note" id="110659">  <div class="votes">
    <div id="Vu110659">
    <a href="/manual/vote-note.php?id=110659&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110659">
    <a href="/manual/vote-note.php?id=110659&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110659" title="58% like this...">
    2
    </div>
  </div>
  <a href="#110659" class="name">
  <strong class="user"><em>pressler at hotmail dot de</em></strong></a><a class="genanchor" href="#110659"> &para;</a><div class="date" title="2012-11-19 10:50"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110659">
<div class="phpcode"><code><span class="html">Note that mb_ereg() does not support the \uFFFF unicode syntax but uses \x{FFFF} instead:<br /><br /><span class="default">&lt;?PHP<br /><br />$text </span><span class="keyword">= </span><span class="string">'Peter is a boy.'</span><span class="keyword">; </span><span class="comment">// english<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="string">'بيتر هو صبي.'</span><span class="keyword">; </span><span class="comment">// arabic<br />//$text = 'פיטר הוא ילד.'; // hebrew<br /><br /></span><span class="default">mb_regex_encoding</span><span class="keyword">(</span><span class="string">'UTF-8'</span><span class="keyword">);<br /><br />if(</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'[\x{0600}-\x{06FF}]'</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">)) </span><span class="comment">// arabic range<br />//if(mb_ereg('[\x{0590}-\x{05FF}]', $text)) // hebrew range<br /></span><span class="keyword">{<br />    echo </span><span class="string">"Text has some arabic/hebrew characters."</span><span class="keyword">;<br />}<br />else<br />{<br />    echo </span><span class="string">"Text doesnt have arabic/hebrew characters."</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129820">  <div class="votes">
    <div id="Vu129820">
    <a href="/manual/vote-note.php?id=129820&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129820">
    <a href="/manual/vote-note.php?id=129820&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129820" title="no votes...">
    0
    </div>
  </div>
  <a href="#129820" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#129820"> &para;</a><div class="date" title="2024-10-24 03:23"><strong>11 months ago</strong></div>
  <div class="text" id="Hcom129820">
<div class="phpcode"><code><span class="html">mb_ereg() cannot match over 100,000 (100K) characters (not bytes but characters)<br />whereas preg_match() can over 1,000,000,000 (1G, if it's within "memory_limit").<br />Try this.<br /><br /><span class="default">&lt;?php<br /><br />ini_set</span><span class="keyword">(</span><span class="string">"memory_limit"</span><span class="keyword">, </span><span class="string">"512M"</span><span class="keyword">); </span><span class="comment">// &lt;-- must be changed if you try 1G.<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">100000</span><span class="keyword">; </span><span class="comment">// &lt;-- 99999 is OK / 100000 is NG<br /><br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++):<br />    </span><span class="default">$str </span><span class="keyword">.= </span><span class="string">"1"</span><span class="keyword">; </span><span class="comment">// &lt;-- same result if it is a multibyte character.<br /></span><span class="keyword">endfor;<br /><br />if (</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'.*'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">)):<br />    echo </span><span class="string">'&lt;br&gt;&lt;span style="background-color:lightgreen"&gt;OK!&lt;/span&gt;&lt;br&gt;memory_limit = '</span><span class="keyword">.</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">"memory_limit"</span><span class="keyword">).</span><span class="string">'&lt;br&gt;$length = '</span><span class="keyword">.</span><span class="default">$length</span><span class="keyword">;<br />else:<br />    echo </span><span class="string">'&lt;br&gt;&lt;span style="background-color:orange"&gt;NG!&lt;/span&gt;&lt;br&gt;memory_limit = '</span><span class="keyword">.</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">"memory_limit"</span><span class="keyword">).</span><span class="string">'&lt;br&gt;$length = '</span><span class="keyword">.</span><span class="default">$length</span><span class="keyword">;<br />endif;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127145">  <div class="votes">
    <div id="Vu127145">
    <a href="/manual/vote-note.php?id=127145&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127145">
    <a href="/manual/vote-note.php?id=127145&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127145" title="no votes...">
    0
    </div>
  </div>
  <a href="#127145" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#127145"> &para;</a><div class="date" title="2022-05-29 06:22"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127145">
<div class="phpcode"><code><span class="html">If adding ".*" at the end of the pattern returns "false" <br />whereas only one "." returns "true",<br /><br />Suspect the string is too long for the pattern matching.<br /><br />In this case, using preg_match() returns "true" when putting ".*" <br />, but adding more "$" or "\z" returns "false" as expected.</span></code></div>
  </div>
 </div>
  <div class="note" id="126307">  <div class="votes">
    <div id="Vu126307">
    <a href="/manual/vote-note.php?id=126307&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126307">
    <a href="/manual/vote-note.php?id=126307&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126307" title="no votes...">
    0
    </div>
  </div>
  <a href="#126307" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126307"> &para;</a><div class="date" title="2021-08-03 07:56"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126307">
<div class="phpcode"><code><span class="html">mb_ereg() with a named-subpattern<br />never catches non-named-subpattern.<br />(Oniguruma's restriction)<br /><br /><span class="default">&lt;?php<br /><br />$str </span><span class="keyword">= </span><span class="string">'abcdefg'</span><span class="keyword">;<br /></span><span class="default">$patternA </span><span class="keyword">= </span><span class="string">'\A(abcd)(.*)\z'</span><span class="keyword">;        </span><span class="comment">// both caught [1]abcd [2]efg<br /></span><span class="default">$patternB </span><span class="keyword">= </span><span class="string">'\A(abcd)(?&lt;rest&gt;.*)\z'</span><span class="keyword">; </span><span class="comment">// non-named 'abcd' never caught<br /><br /></span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="default">$patternA</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">);<br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="default">$patternB</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">);<br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Array<br />(<br />    [0] =&gt; abcdefg<br />    [1] =&gt; abcd<br />    [2] =&gt; efg<br />)<br /><br />Array<br />(<br />    [0] =&gt; abcdefg<br />    [1] =&gt; efg<br />    [rest] =&gt; efg<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="125579">  <div class="votes">
    <div id="Vu125579">
    <a href="/manual/vote-note.php?id=125579&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125579">
    <a href="/manual/vote-note.php?id=125579&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125579" title="no votes...">
    0
    </div>
  </div>
  <a href="#125579" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125579"> &para;</a><div class="date" title="2020-12-08 01:28"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125579">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment"># What mb_ereg() returns &amp; changes $_3rd_argument into<br /># (Just run this script)<br /><br /></span><span class="keyword">function </span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">) {<br />    </span><span class="default">ob_start</span><span class="keyword">();<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">);<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />    </span><span class="default">ob_end_clean</span><span class="keyword">();<br />    return </span><span class="default">$output</span><span class="keyword">;<br />}<br /><br /></span><span class="comment"># (PHP7)empty pattern returns bool(false) with Warning<br /># (PHP8)empty pattern throws ValueError<br />    </span><span class="default">$emp_ptn </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />try{<br />    </span><span class="default">$emp_ptn</span><span class="keyword">.=  </span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">'abcde'</span><span class="keyword">));<br />}catch(</span><span class="default">Exception </span><span class="keyword">| </span><span class="default">Error $e</span><span class="keyword">){<br />    </span><span class="default">$emp_ptn</span><span class="keyword">.=  </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />    </span><span class="default">$emp_ptn</span><span class="keyword">.=  </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />    </span><span class="default">$emp_ptn</span><span class="keyword">.=  </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getTraceAsString</span><span class="keyword">().</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />}<br /><br />echo<br /></span><span class="string">'PHP '</span><span class="keyword">.</span><span class="default">phpversion</span><span class="keyword">().</span><span class="string">'&lt;br&gt;&lt;br&gt;'</span><span class="keyword">.<br /><br /></span><span class="string">'# match&lt;br&gt;'</span><span class="keyword">.<br /></span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">"bcd"</span><span class="keyword">, </span><span class="string">"abcde"</span><span class="keyword">)).<br /></span><span class="string">' : mb_ereg("bcd", "abcde")&lt;br&gt;&lt;br&gt;'</span><span class="keyword">.<br /><br /></span><span class="string">'# match with 3rd argument&lt;br&gt;'</span><span class="keyword">.<br /></span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">"bcd"</span><span class="keyword">, </span><span class="string">"abcde"</span><span class="keyword">, </span><span class="default">$_3rd</span><span class="keyword">)).<br /></span><span class="string">' : mb_ereg("bcd", "abcde", $_3rd)    // '</span><span class="keyword">.</span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">$_3rd</span><span class="keyword">).</span><span class="string">'&lt;br&gt;&lt;br&gt;'</span><span class="keyword">.<br /><br /></span><span class="string">'# match (0 byte)&lt;br&gt;'</span><span class="keyword">.<br /></span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">"^"</span><span class="keyword">, </span><span class="string">"abcde"</span><span class="keyword">)).<br /></span><span class="string">' : mb_ereg("^", "abcde")&lt;br&gt;&lt;br&gt;'</span><span class="keyword">.<br /><br /></span><span class="string">'# match (0 byte) with 3rd argument&lt;br&gt;'</span><span class="keyword">.<br /></span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">"^"</span><span class="keyword">, </span><span class="string">"abcde"</span><span class="keyword">, </span><span class="default">$_3rd</span><span class="keyword">)).<br /></span><span class="string">' : mb_ereg("^", "abcde", $_3rd)    // '</span><span class="keyword">.</span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">$_3rd</span><span class="keyword">).</span><span class="string">'&lt;br&gt;&lt;br&gt;'</span><span class="keyword">.<br /><br /></span><span class="string">'# unmatch&lt;br&gt;'</span><span class="keyword">.<br /></span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">"f"</span><span class="keyword">, </span><span class="string">"abcde"</span><span class="keyword">)).<br /></span><span class="string">' : mb_ereg("f", "abcde")&lt;br&gt;&lt;br&gt;'</span><span class="keyword">.<br /><br /></span><span class="string">'# unmatch with 3rd argument&lt;br&gt;'</span><span class="keyword">.<br /></span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">"f"</span><span class="keyword">, </span><span class="string">"abcde"</span><span class="keyword">, </span><span class="default">$_3rd</span><span class="keyword">)).<br /></span><span class="string">' : mb_ereg("f", "abcde", $_3rd)    // '</span><span class="keyword">.</span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">$_3rd</span><span class="keyword">).</span><span class="string">'&lt;br&gt;&lt;br&gt;'</span><span class="keyword">.<br /><br /></span><span class="string">'# empty pattern&lt;br&gt;'</span><span class="keyword">.<br /></span><span class="default">$emp_ptn</span><span class="keyword">.<br /></span><span class="string">' : mb_ereg("", "abcde")&lt;br&gt;&lt;br&gt;'</span><span class="keyword">.<br /><br /></span><span class="string">'# empty pattern with 3rd argument&lt;br&gt;'</span><span class="keyword">.<br /></span><span class="default">$emp_ptn</span><span class="keyword">.<br /></span><span class="string">' : mb_ereg("", "abcde", $_3rd)    // '</span><span class="keyword">.</span><span class="default">dump2str</span><span class="keyword">(</span><span class="default">$_3rd</span><span class="keyword">).</span><span class="string">'&lt;br&gt;&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122511">  <div class="votes">
    <div id="Vu122511">
    <a href="/manual/vote-note.php?id=122511&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122511">
    <a href="/manual/vote-note.php?id=122511&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122511" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122511" class="name">
  <strong class="user"><em>lastuser at example dot com</em></strong></a><a class="genanchor" href="#122511"> &para;</a><div class="date" title="2018-03-14 05:32"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122511">
<div class="phpcode"><code><span class="html">I hope this information is shown somewhere on php.net.<br /><br />According to "<a href="https://github.com/php/php-src/tree/PHP-5.6/ext/mbstring/oniguruma" rel="nofollow" target="_blank">https://github.com/php/php-src/tree/PHP-5.6/ext/mbstring/oniguruma</a>",<br />the bundled Oniguruma regex library version seems ...<br /> 4.7.1 between PHP 5.3 - 5.4.45,<br /> 5.9.2 between PHP 5.5 - 7.1.16,<br /> 6.3.0 since PHP 7.2 - .</span></code></div>
  </div>
 </div>
  <div class="note" id="117231">  <div class="votes">
    <div id="Vu117231">
    <a href="/manual/vote-note.php?id=117231&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117231">
    <a href="/manual/vote-note.php?id=117231&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117231" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117231" class="name">
  <strong class="user"><em>mb_ereg() seems unable to Use &amp;#34;named sub</em></strong></a><a class="genanchor" href="#117231"> &para;</a><div class="date" title="2015-05-06 01:42"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117231">
<div class="phpcode"><code><span class="html">mb_ereg() seems unable to Use "named subpattern".<br />preg_match() seems a substitute only in UTF-8 encoding.<br /><br /><span class="default">&lt;?php<br /><br />$text </span><span class="keyword">= </span><span class="string">'multi_byte_string'</span><span class="keyword">;<br /></span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">'.*(?&lt;name&gt;string).*'</span><span class="keyword">;        </span><span class="comment">// "?P" causes "mbregex compile err" in PHP 5.3.5<br /><br /></span><span class="keyword">if(</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)){<br />    echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />}else{<br />    echo </span><span class="string">'no match'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This code ignores "?&lt;name&gt;" in $pattern and displays below.<br /><br />Array<br />(<br />    [0] =&gt; multi_byte_string<br />    [1] =&gt; string<br />)<br /><br />$pattern = '/.*(?&lt;name&gt;string).*/u';<br />if(preg_match($pattern, $text, $matches)){<br /><br />instead of lines 2 &amp; 3<br />displays below (in UTF-8 encoding).<br /><br />Array<br />(<br />    [0] =&gt; multi_byte_string<br />    [name] =&gt; string<br />    [1] =&gt; string<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="123715">  <div class="votes">
    <div id="Vu123715">
    <a href="/manual/vote-note.php?id=123715&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123715">
    <a href="/manual/vote-note.php?id=123715&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123715" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#123715" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#123715"> &para;</a><div class="date" title="2019-03-21 08:24"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123715">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// in PHP_VERSION 7.1<br /><br />// WITHOUT $regs (3rd argument)<br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'abcde'</span><span class="keyword">, </span><span class="string">'_abcde_'</span><span class="keyword">); </span><span class="comment">// [5 bytes match]<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                     </span><span class="comment">// int(1)<br /><br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'ab'</span><span class="keyword">, </span><span class="string">'_ab_'</span><span class="keyword">);       </span><span class="comment">// [2 bytes match]<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                     </span><span class="comment">// int(1)<br /><br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'^'</span><span class="keyword">, </span><span class="string">'_ab_'</span><span class="keyword">);        </span><span class="comment">// [0 bytes match]<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                     </span><span class="comment">// int(1)<br /><br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'ab'</span><span class="keyword">, </span><span class="string">'__'</span><span class="keyword">);         </span><span class="comment">// [not match]<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                     </span><span class="comment">// bool(false)<br /><br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">'_ab_'</span><span class="keyword">);         </span><span class="comment">// [error : empty pattern]<br />                                    // Warning: mb_ereg(): empty pattern in ...<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                     </span><span class="comment">// bool(false)<br /><br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'ab'</span><span class="keyword">);               </span><span class="comment">// [error : fewer arguments]<br />                                    // Warning: mb_ereg() expects at least 2 parameters, 1 given in ...<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                     </span><span class="comment">// bool(false)<br /><br />                    // Without 3rd argument, mb_ereg() returns either int(1) or bool(false).<br /><br />// WITH $regs (3rd argument)<br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'abcde'</span><span class="keyword">, </span><span class="string">'_abcde_'</span><span class="keyword">, </span><span class="default">$regs</span><span class="keyword">);</span><span class="comment">// [5 bytes match]<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                           </span><span class="comment">// int(5)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$regs</span><span class="keyword">);                          </span><span class="comment">// array(1) { [0]=&gt; string(5) "abcde" }<br /><br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'ab'</span><span class="keyword">, </span><span class="string">'_ab_'</span><span class="keyword">, </span><span class="default">$regs</span><span class="keyword">);      </span><span class="comment">// [2 bytes match]<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                           </span><span class="comment">// int(2)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$regs</span><span class="keyword">);                          </span><span class="comment">// array(1) { [0]=&gt; string(2) "ab" }<br /><br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'^'</span><span class="keyword">, </span><span class="string">'_ab_'</span><span class="keyword">, </span><span class="default">$regs</span><span class="keyword">);       </span><span class="comment">// [0 bytes match]<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                           </span><span class="comment">// int(1)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$regs</span><span class="keyword">);                          </span><span class="comment">// array(1) { [0]=&gt; bool(false) }<br /><br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'ab'</span><span class="keyword">, </span><span class="string">'__'</span><span class="keyword">, </span><span class="default">$regs</span><span class="keyword">);        </span><span class="comment">// [not match]<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                           </span><span class="comment">// bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$regs</span><span class="keyword">);                          </span><span class="comment">// array(0) { }<br /><br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">'_ab_'</span><span class="keyword">, </span><span class="default">$regs</span><span class="keyword">);        </span><span class="comment">// [error : empty pattern]<br />                                          // Warning: mb_ereg(): empty pattern in ...<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                           </span><span class="comment">// bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$regs</span><span class="keyword">);                          </span><span class="comment">// array(0) { }<br /><br /></span><span class="default">$int </span><span class="keyword">= </span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">'ab'</span><span class="keyword">);                     </span><span class="comment">// [error : fewer arguments]<br />                                          // Warning: mb_ereg() expects at least 2 parameters, 1 given in ...<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);                           </span><span class="comment">// bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$regs</span><span class="keyword">);                          </span><span class="comment">// array(0) { }<br /><br />                    // With 3rd argument, mb_ereg() returns either int(how many bytes matched) or bool(false)<br />                    // and 3rd argument is a bit complicated.<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115367">  <div class="votes">
    <div id="Vu115367">
    <a href="/manual/vote-note.php?id=115367&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115367">
    <a href="/manual/vote-note.php?id=115367&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115367" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#115367" class="name">
  <strong class="user"><em>Riikka K</em></strong></a><a class="genanchor" href="#115367"> &para;</a><div class="date" title="2014-07-13 04:23"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115367">
<div class="phpcode"><code><span class="html">While hardly mentioned anywhere, it may be useful to note that mb_ereg uses Oniguruma library internally. The syntax for the default mode (ruby) is described here:<br /><br /><a href="http://www.geocities.jp/kosako3/oniguruma/doc/RE.txt" rel="nofollow" target="_blank">http://www.geocities.jp/kosako3/oniguruma/doc/RE.txt</a></span></code></div>
  </div>
 </div>
  <div class="note" id="90230">  <div class="votes">
    <div id="Vu90230">
    <a href="/manual/vote-note.php?id=90230&amp;page=function.mb-ereg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90230">
    <a href="/manual/vote-note.php?id=90230&amp;page=function.mb-ereg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90230" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#90230" class="name">
  <strong class="user"><em>Jon</em></strong></a><a class="genanchor" href="#90230"> &para;</a><div class="date" title="2009-04-11 04:22"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90230">
<div class="phpcode"><code><span class="html">Hebrew regex tested on PHP 5, Ubuntu 8.04.
<br />Seems to work fine without the mb_regex_encoding lines (commented out).
<br />Didn't seem to work with \uxxxx (also commented out).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">echo </span><span class="string">"Line "</span><span class="keyword">;
<br /></span><span class="comment">//mb_regex_encoding("ISO-8859-8");
<br />//if(mb_ereg(".*([\u05d0-\u05ea]).*", $this-&gt;current_line))
<br /></span><span class="keyword">if(</span><span class="default">mb_ereg</span><span class="keyword">(</span><span class="string">".*([א-ת]).*"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current_line</span><span class="keyword">))
<br />{
<br />    echo </span><span class="string">"has"</span><span class="keyword">;
<br />}
<br />else
<br />{
<br />    echo </span><span class="string">"doesn't have"</span><span class="keyword">;
<br />}
<br />echo </span><span class="string">" Hebrew characters.&lt;br&gt;"</span><span class="keyword">;    
<br /></span><span class="comment">//mb_regex_encoding("UTF-8");
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mb-ereg&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-ereg.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mbstring.php">Multibyte String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.mb-check-encoding.php" title="mb_&#8203;check_&#8203;encoding">mb_&#8203;check_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-chr.php" title="mb_&#8203;chr">mb_&#8203;chr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-case.php" title="mb_&#8203;convert_&#8203;case">mb_&#8203;convert_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-encoding.php" title="mb_&#8203;convert_&#8203;encoding">mb_&#8203;convert_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-kana.php" title="mb_&#8203;convert_&#8203;kana">mb_&#8203;convert_&#8203;kana</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-variables.php" title="mb_&#8203;convert_&#8203;variables">mb_&#8203;convert_&#8203;variables</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-mimeheader.php" title="mb_&#8203;decode_&#8203;mimeheader">mb_&#8203;decode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-numericentity.php" title="mb_&#8203;decode_&#8203;numericentity">mb_&#8203;decode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-encoding.php" title="mb_&#8203;detect_&#8203;encoding">mb_&#8203;detect_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-order.php" title="mb_&#8203;detect_&#8203;order">mb_&#8203;detect_&#8203;order</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-mimeheader.php" title="mb_&#8203;encode_&#8203;mimeheader">mb_&#8203;encode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-numericentity.php" title="mb_&#8203;encode_&#8203;numericentity">mb_&#8203;encode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encoding-aliases.php" title="mb_&#8203;encoding_&#8203;aliases">mb_&#8203;encoding_&#8203;aliases</a>
                        </li>
                                                <li class="current">
                            <a href="function.mb-ereg.php" title="mb_&#8203;ereg">mb_&#8203;ereg</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-match.php" title="mb_&#8203;ereg_&#8203;match">mb_&#8203;ereg_&#8203;match</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace.php" title="mb_&#8203;ereg_&#8203;replace">mb_&#8203;ereg_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace-callback.php" title="mb_&#8203;ereg_&#8203;replace_&#8203;callback">mb_&#8203;ereg_&#8203;replace_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search.php" title="mb_&#8203;ereg_&#8203;search">mb_&#8203;ereg_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getpos">mb_&#8203;ereg_&#8203;search_&#8203;getpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getregs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getregs">mb_&#8203;ereg_&#8203;search_&#8203;getregs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-init.php" title="mb_&#8203;ereg_&#8203;search_&#8203;init">mb_&#8203;ereg_&#8203;search_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-pos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;pos">mb_&#8203;ereg_&#8203;search_&#8203;pos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-regs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;regs">mb_&#8203;ereg_&#8203;search_&#8203;regs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-setpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;setpos">mb_&#8203;ereg_&#8203;search_&#8203;setpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi.php" title="mb_&#8203;eregi">mb_&#8203;eregi</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi-replace.php" title="mb_&#8203;eregi_&#8203;replace">mb_&#8203;eregi_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-get-info.php" title="mb_&#8203;get_&#8203;info">mb_&#8203;get_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-input.php" title="mb_&#8203;http_&#8203;input">mb_&#8203;http_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-output.php" title="mb_&#8203;http_&#8203;output">mb_&#8203;http_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-internal-encoding.php" title="mb_&#8203;internal_&#8203;encoding">mb_&#8203;internal_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-language.php" title="mb_&#8203;language">mb_&#8203;language</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-lcfirst.php" title="mb_&#8203;lcfirst">mb_&#8203;lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-list-encodings.php" title="mb_&#8203;list_&#8203;encodings">mb_&#8203;list_&#8203;encodings</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ltrim.php" title="mb_&#8203;ltrim">mb_&#8203;ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ord.php" title="mb_&#8203;ord">mb_&#8203;ord</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-output-handler.php" title="mb_&#8203;output_&#8203;handler">mb_&#8203;output_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-parse-str.php" title="mb_&#8203;parse_&#8203;str">mb_&#8203;parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-preferred-mime-name.php" title="mb_&#8203;preferred_&#8203;mime_&#8203;name">mb_&#8203;preferred_&#8203;mime_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-encoding.php" title="mb_&#8203;regex_&#8203;encoding">mb_&#8203;regex_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-set-options.php" title="mb_&#8203;regex_&#8203;set_&#8203;options">mb_&#8203;regex_&#8203;set_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-rtrim.php" title="mb_&#8203;rtrim">mb_&#8203;rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-scrub.php" title="mb_&#8203;scrub">mb_&#8203;scrub</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-send-mail.php" title="mb_&#8203;send_&#8203;mail">mb_&#8203;send_&#8203;mail</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-split.php" title="mb_&#8203;split">mb_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-pad.php" title="mb_&#8203;str_&#8203;pad">mb_&#8203;str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-split.php" title="mb_&#8203;str_&#8203;split">mb_&#8203;str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strcut.php" title="mb_&#8203;strcut">mb_&#8203;strcut</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strimwidth.php" title="mb_&#8203;strimwidth">mb_&#8203;strimwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stripos.php" title="mb_&#8203;stripos">mb_&#8203;stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stristr.php" title="mb_&#8203;stristr">mb_&#8203;stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strlen.php" title="mb_&#8203;strlen">mb_&#8203;strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strpos.php" title="mb_&#8203;strpos">mb_&#8203;strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrchr.php" title="mb_&#8203;strrchr">mb_&#8203;strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrichr.php" title="mb_&#8203;strrichr">mb_&#8203;strrichr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strripos.php" title="mb_&#8203;strripos">mb_&#8203;strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrpos.php" title="mb_&#8203;strrpos">mb_&#8203;strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strstr.php" title="mb_&#8203;strstr">mb_&#8203;strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtolower.php" title="mb_&#8203;strtolower">mb_&#8203;strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtoupper.php" title="mb_&#8203;strtoupper">mb_&#8203;strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strwidth.php" title="mb_&#8203;strwidth">mb_&#8203;strwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substitute-character.php" title="mb_&#8203;substitute_&#8203;character">mb_&#8203;substitute_&#8203;character</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr.php" title="mb_&#8203;substr">mb_&#8203;substr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr-count.php" title="mb_&#8203;substr_&#8203;count">mb_&#8203;substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-trim.php" title="mb_&#8203;trim">mb_&#8203;trim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ucfirst.php" title="mb_&#8203;ucfirst">mb_&#8203;ucfirst</a>
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
