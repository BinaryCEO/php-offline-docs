<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: get_html_translation_table - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.get-html-translation-table.php">
 <link rel="shorturl" href="https://www.php.net/get-html-translation-table">
 <link rel="alternate" href="https://www.php.net/get-html-translation-table" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fprintf.php">
 <link rel="next" href="https://www.php.net/manual/en/function.hebrev.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.get-html-translation-table.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.get-html-translation-table.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.get-html-translation-table.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.get-html-translation-table.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.get-html-translation-table.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.get-html-translation-table.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.get-html-translation-table.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.get-html-translation-table.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.get-html-translation-table.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.get-html-translation-table.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.get-html-translation-table.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the translation table used by htmlspecialchars and htmlentities" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: get_html_translation_table - Manual" />
<meta name="twitter:description" content="Returns the translation table used by htmlspecialchars and htmlentities" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: get_html_translation_table - Manual" />
<meta itemprop="description" content="Returns the translation table used by htmlspecialchars and htmlentities" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the translation table used by htmlspecialchars and htmlentities" />

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
        <a href="function.hebrev.php">
          hebrev &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fprintf.php">
          &laquo; fprintf        </a>
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
            <option value='en/function.get-html-translation-table.php' selected="selected">English</option>
            <option value='de/function.get-html-translation-table.php'>German</option>
            <option value='es/function.get-html-translation-table.php'>Spanish</option>
            <option value='fr/function.get-html-translation-table.php'>French</option>
            <option value='it/function.get-html-translation-table.php'>Italian</option>
            <option value='ja/function.get-html-translation-table.php'>Japanese</option>
            <option value='pt_BR/function.get-html-translation-table.php'>Brazilian Portuguese</option>
            <option value='ru/function.get-html-translation-table.php'>Russian</option>
            <option value='tr/function.get-html-translation-table.php'>Turkish</option>
            <option value='uk/function.get-html-translation-table.php'>Ukrainian</option>
            <option value='zh/function.get-html-translation-table.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.get-html-translation-table" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">get_html_translation_table</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">get_html_translation_table</span> &mdash; <span class="dc-title">Returns the translation table used by <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> and <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span></span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.get-html-translation-table-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>get_html_translation_table</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$table</code><span class="initializer"> = <strong><code><a href="string.constants.php#constant.html-specialchars">HTML_SPECIALCHARS</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$encoding</code><span class="initializer"> = &quot;UTF-8&quot;</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>get_html_translation_table()</strong></span> will return the
   translation table that is used internally for
   <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> and
   <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Special characters can be encoded in several ways. E.g.
    <code class="literal">&quot;</code> can be encoded as <code class="literal">&amp;quot;</code>,
    <code class="literal">&amp;#34;</code> or <code class="literal">&amp;#x22</code>.
    <span class="function"><strong>get_html_translation_table()</strong></span> returns only the form used
    by <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> and
    <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.get-html-translation-table-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">table</code></dt>
     <dd>
      <p class="para">
       Which table to return. Either <strong><code><a href="string.constants.php#constant.html-entities">HTML_ENTITIES</a></code></strong> or
       <strong><code><a href="string.constants.php#constant.html-specialchars">HTML_SPECIALCHARS</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       A bitmask of one or more of the following flags, which specify which quotes the
       table will contain as well as which document type the table is for. The default is
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
           <td>Table will contain entities for double-quotes, but not for single-quotes.</td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-quotes">ENT_QUOTES</a></code></strong></td>
           <td>Table will contain entities for both double and single quotes.</td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-noquotes">ENT_NOQUOTES</a></code></strong></td>
           <td>Table will neither contain entities for single quotes nor for double quotes.</td>
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
           <td>Table for HTML 4.01.</td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-xml1">ENT_XML1</a></code></strong></td>
           <td>Table for XML 1.</td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-xhtml">ENT_XHTML</a></code></strong></td>
           <td>Table for XHTML.</td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-html5">ENT_HTML5</a></code></strong></td>
           <td>Table for HTML 5.</td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">encoding</code></dt>
     <dd>
      <p class="para">
       Encoding to use.
       If omitted, the default value for this argument is UTF-8.
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


 <div class="refsect1 returnvalues" id="refsect1-function.get-html-translation-table-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the translation table as an array, with the original characters
   as keys and entities as values.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.get-html-translation-table-changelog">
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

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.get-html-translation-table-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5073">
    <p><strong>Example #1 Translation Table Example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">get_html_translation_table</span><span style="color: #007700">(</span><span style="color: #0000BB">HTML_ENTITIES</span><span style="color: #007700">, </span><span style="color: #0000BB">ENT_QUOTES </span><span style="color: #007700">| </span><span style="color: #0000BB">ENT_HTML5</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(1510) {
  [&quot;
&quot;]=&gt;
  string(9) &quot;&amp;NewLine;&quot;
  [&quot;!&quot;]=&gt;
  string(6) &quot;&amp;excl;&quot;
  [&quot;&quot;&quot;]=&gt;
  string(6) &quot;&amp;quot;&quot;
  [&quot;#&quot;]=&gt;
  string(5) &quot;&amp;num;&quot;
  [&quot;$&quot;]=&gt;
  string(8) &quot;&amp;dollar;&quot;
  [&quot;%&quot;]=&gt;
  string(8) &quot;&amp;percnt;&quot;
  [&quot;&amp;&quot;]=&gt;
  string(5) &quot;&amp;amp;&quot;
  [&quot;&#039;&quot;]=&gt;
  string(6) &quot;&amp;apos;&quot;
  // ...
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.get-html-translation-table-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.htmlspecialchars.php" class="function" rel="rdfs-seeAlso">htmlspecialchars()</a> - Convert special characters to HTML entities</span></li>
    <li><span class="function"><a href="function.htmlentities.php" class="function" rel="rdfs-seeAlso">htmlentities()</a> - Convert all applicable characters to HTML entities</span></li>
    <li><span class="function"><a href="function.html-entity-decode.php" class="function" rel="rdfs-seeAlso">html_entity_decode()</a> - Convert HTML entities to their corresponding characters</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/get-html-translation-table.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.get-html-translation-table%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.get-html-translation-table&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-html-translation-table.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106858">  <div class="votes">
    <div id="Vu106858">
    <a href="/manual/vote-note.php?id=106858&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106858">
    <a href="/manual/vote-note.php?id=106858&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106858" title="65% like this...">
    15
    </div>
  </div>
  <a href="#106858" class="name">
  <strong class="user"><em>michael dot genesis at gmail dot com</em></strong></a><a class="genanchor" href="#106858"> &para;</a><div class="date" title="2011-12-12 03:01"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106858">
<div class="phpcode"><code><span class="html">The fact that MS-word and some other sources use CP-1252, and that it is so close to Latin1 ('ISO-8859-1') causes a lot of confusion. What confused me the most was finding that mySQL uses CP-1252 by default.
<br />
<br />You may run into trouble if you find yourself tempted to do something like this:
<br /><span class="default">&lt;?php
<br />    $trans</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">149</span><span class="keyword">)] = </span><span class="string">'&amp;bull;'</span><span class="keyword">;    </span><span class="comment">// Bullet
<br />    </span><span class="default">$trans</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">150</span><span class="keyword">)] = </span><span class="string">'&amp;ndash;'</span><span class="keyword">;    </span><span class="comment">// En Dash
<br />    </span><span class="default">$trans</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">151</span><span class="keyword">)] = </span><span class="string">'&amp;mdash;'</span><span class="keyword">;    </span><span class="comment">// Em Dash
<br />    </span><span class="default">$trans</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">152</span><span class="keyword">)] = </span><span class="string">'&amp;tilde;'</span><span class="keyword">;    </span><span class="comment">// Small Tilde
<br />    </span><span class="default">$trans</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">153</span><span class="keyword">)] = </span><span class="string">'&amp;trade;'</span><span class="keyword">;    </span><span class="comment">// Trade Mark Sign
<br /></span><span class="default">?&gt;
<br /></span>
<br />Don't do it. DON'T DO IT!
<br />
<br />You can use:
<br /><span class="default">&lt;?php
<br />    $translationTable </span><span class="keyword">= </span><span class="default">get_html_translation_table</span><span class="keyword">(</span><span class="default">HTML_ENTITIES</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES</span><span class="keyword">, </span><span class="string">'WINDOWS-1252'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />or just convert directly:
<br /><span class="default">&lt;?php
<br />    $output </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES</span><span class="keyword">, </span><span class="string">'WINDOWS-1252'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />But your web page is probably encoded UTF-8, and you probably don't really want CP-1252 text flying around, so fix the character encoding first:
<br /><span class="default">&lt;?php
<br />    $output </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="string">'WINDOWS-1252'</span><span class="keyword">);
<br />    </span><span class="default">$ouput </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99930">  <div class="votes">
    <div id="Vu99930">
    <a href="/manual/vote-note.php?id=99930&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99930">
    <a href="/manual/vote-note.php?id=99930&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99930" title="65% like this...">
    12
    </div>
  </div>
  <a href="#99930" class="name">
  <strong class="user"><em>kevin at cwsmailbox dot xom</em></strong></a><a class="genanchor" href="#99930"> &para;</a><div class="date" title="2010-09-15 09:55"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99930">
<div class="phpcode"><code><span class="html">Be careful using get_html_translation_table() in a loop, as it's very slow.</span></code></div>
  </div>
 </div>
  <div class="note" id="85888">  <div class="votes">
    <div id="Vu85888">
    <a href="/manual/vote-note.php?id=85888&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85888">
    <a href="/manual/vote-note.php?id=85888&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85888" title="57% like this...">
    3
    </div>
  </div>
  <a href="#85888" class="name">
  <strong class="user"><em>Kenneth Kin Lum</em></strong></a><a class="genanchor" href="#85888"> &para;</a><div class="date" title="2008-09-23 05:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85888">
<div class="phpcode"><code><span class="html">to display the mapping on a webpage no matter what the server encoding is, this can be used<br /><br />  echo "&lt;pre&gt;\n";<br />  echo htmlentities(print_r((get_html_translation_table(HTML_SPECIALCHARS)), true));<br />  echo htmlentities(print_r((get_html_translation_table(HTML_ENTITIES)), true));<br /><br />since get_html_translation_table() actually gives the special chars in iso-8859-1 (Latin-1) encoding, so to see the tables correctly using<br /><br />  print_r(get_html_translation_table(HTML_ENTITIES));<br /><br />your server needs to give a HTTP header as iso-8859-1, unless you use header() or manually set the browser's encoding setting to iso-8859-1.  And you need to view the source of the page to see the mapping.  (except English version of IE 7 outputs the page source as iso-8859-1 anyway).</span></code></div>
  </div>
 </div>
  <div class="note" id="13504">  <div class="votes">
    <div id="Vu13504">
    <a href="/manual/vote-note.php?id=13504&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13504">
    <a href="/manual/vote-note.php?id=13504&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13504" title="58% like this...">
    3
    </div>
  </div>
  <a href="#13504" class="name">
  <strong class="user"><em>dirk at hartmann dot net</em></strong></a><a class="genanchor" href="#13504"> &para;</a><div class="date" title="2001-06-19 01:41"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13504">
<div class="phpcode"><code><span class="html">get_html_translation_table
<br />It works only with the first 256 Codepositions.
<br />For Higher Positions, for Example &amp;#1092;
<br />(a kyrillic Letter) it shows the same.</span></code></div>
  </div>
 </div>
  <div class="note" id="72065">  <div class="votes">
    <div id="Vu72065">
    <a href="/manual/vote-note.php?id=72065&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72065">
    <a href="/manual/vote-note.php?id=72065&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72065" title="54% like this...">
    1
    </div>
  </div>
  <a href="#72065" class="name">
  <strong class="user"><em>Jérôme Jaglale</em></strong></a><a class="genanchor" href="#72065"> &para;</a><div class="date" title="2006-12-31 11:43"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72065">
<div class="phpcode"><code><span class="html">htmlentities includes htmlspecialchars, so here's how to convert an UTF-8 string :<br />htmlentities($string, ENT_QUOTES, 'UTF-8');</span></code></div>
  </div>
 </div>
  <div class="note" id="77660">  <div class="votes">
    <div id="Vu77660">
    <a href="/manual/vote-note.php?id=77660&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77660">
    <a href="/manual/vote-note.php?id=77660&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77660" title="52% like this...">
    1
    </div>
  </div>
  <a href="#77660" class="name">
  <strong class="user"><em>iain (duh) workingsoftware.com.au</em></strong></a><a class="genanchor" href="#77660"> &para;</a><div class="date" title="2007-09-07 02:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77660">
<div class="phpcode"><code><span class="html">I wrote a quick little function for converting something like '&amp;middot;' into '&amp;#183;':<br /><br />$to_convert = '&amp;middot;'; <br />$table = get_html_translation_table(HTML_ENTITIES);<br />$equiv = '&amp;#'.ord(array_search($to_convert,$table)).';';</span></code></div>
  </div>
 </div>
  <div class="note" id="53352">  <div class="votes">
    <div id="Vu53352">
    <a href="/manual/vote-note.php?id=53352&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53352">
    <a href="/manual/vote-note.php?id=53352&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53352" title="50% like this...">
    0
    </div>
  </div>
  <a href="#53352" class="name">
  <strong class="user"><em>Patrick nospam at nospam mesopia dot com</em></strong></a><a class="genanchor" href="#53352"> &para;</a><div class="date" title="2005-05-29 07:00"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53352">
<div class="phpcode"><code><span class="html">Not sure what's going on here but I've run into a problem that others might face as well...<br /><br /><span class="default">&lt;?php<br /><br />$translations </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">get_html_translation_table</span><span class="keyword">(</span><span class="default">HTML_ENTITIES</span><span class="keyword">,</span><span class="default">ENT_QUOTES</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />returns the single quote ' as being equal to &amp;#39; while<br /><br /><span class="default">&lt;?php<br /><br />$translatedString </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">ENT_QUOTES</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>returns it as being equal to &amp;#039;<br /><br />I've had to do a specific string replacement for the time being... Not sure if it's an issue with the function or the array manipulation.<br /><br />-Pat</span></code></div>
  </div>
 </div>
  <div class="note" id="76564">  <div class="votes">
    <div id="Vu76564">
    <a href="/manual/vote-note.php?id=76564&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76564">
    <a href="/manual/vote-note.php?id=76564&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76564" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#76564" class="name">
  <strong class="user"><em>Maurizio Siliani at trident dot it</em></strong></a><a class="genanchor" href="#76564"> &para;</a><div class="date" title="2007-07-20 08:43"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76564">
<div class="phpcode"><code><span class="html">If you have troubles (like me) getting data from ISO-8859-1 encoded forms where user copy and paste from word, this routine could be useful.<br />It adds to the standard get_html_translation_table the codes of the characters usually M$ Word replacs into typed text.<br />Otherwise those characters would never be displayed correctly in html output.<br /><br />function get_html_translation_table_CP1252() {<br />    $trans = get_html_translation_table(HTML_ENTITIES);<br />    $trans[chr(130)] = '&amp;sbquo;';    // Single Low-9 Quotation Mark<br />    $trans[chr(131)] = '&amp;fnof;';    // Latin Small Letter F With Hook<br />    $trans[chr(132)] = '&amp;bdquo;';    // Double Low-9 Quotation Mark<br />    $trans[chr(133)] = '&amp;hellip;';    // Horizontal Ellipsis<br />    $trans[chr(134)] = '&amp;dagger;';    // Dagger<br />    $trans[chr(135)] = '&amp;Dagger;';    // Double Dagger<br />    $trans[chr(136)] = '&amp;circ;';    // Modifier Letter Circumflex Accent<br />    $trans[chr(137)] = '&amp;permil;';    // Per Mille Sign<br />    $trans[chr(138)] = '&amp;Scaron;';    // Latin Capital Letter S With Caron<br />    $trans[chr(139)] = '&amp;lsaquo;';    // Single Left-Pointing Angle Quotation Mark<br />    $trans[chr(140)] = '&amp;OElig;    ';    // Latin Capital Ligature OE<br />    $trans[chr(145)] = '&amp;lsquo;';    // Left Single Quotation Mark<br />    $trans[chr(146)] = '&amp;rsquo;';    // Right Single Quotation Mark<br />    $trans[chr(147)] = '&amp;ldquo;';    // Left Double Quotation Mark<br />    $trans[chr(148)] = '&amp;rdquo;';    // Right Double Quotation Mark<br />    $trans[chr(149)] = '&amp;bull;';    // Bullet<br />    $trans[chr(150)] = '&amp;ndash;';    // En Dash<br />    $trans[chr(151)] = '&amp;mdash;';    // Em Dash<br />    $trans[chr(152)] = '&amp;tilde;';    // Small Tilde<br />    $trans[chr(153)] = '&amp;trade;';    // Trade Mark Sign<br />    $trans[chr(154)] = '&amp;scaron;';    // Latin Small Letter S With Caron<br />    $trans[chr(155)] = '&amp;rsaquo;';    // Single Right-Pointing Angle Quotation Mark<br />    $trans[chr(156)] = '&amp;oelig;';    // Latin Small Ligature OE<br />    $trans[chr(159)] = '&amp;Yuml;';    // Latin Capital Letter Y With Diaeresis<br />    ksort($trans);<br />    return $trans;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="26379">  <div class="votes">
    <div id="Vu26379">
    <a href="/manual/vote-note.php?id=26379&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26379">
    <a href="/manual/vote-note.php?id=26379&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26379" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#26379" class="name">
  <strong class="user"><em>kumar at chicagomodular.com</em></strong></a><a class="genanchor" href="#26379"> &para;</a><div class="date" title="2002-10-28 05:51"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26379">
<div class="phpcode"><code><span class="html">without heavy scientific analysis, this seems to work as a quick fix to making text originating from a Microsoft Word document display as HTML:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">DoHTMLEntities </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$trans_tbl </span><span class="keyword">= </span><span class="default">get_html_translation_table </span><span class="keyword">(</span><span class="default">HTML_ENTITIES</span><span class="keyword">);
<br />        
<br />        </span><span class="comment">// MS Word strangeness.. 
<br />        // smart single/ double quotes:
<br />        </span><span class="default">$trans_tbl</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">145</span><span class="keyword">)] = </span><span class="string">'\''</span><span class="keyword">; 
<br />        </span><span class="default">$trans_tbl</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">146</span><span class="keyword">)] = </span><span class="string">'\''</span><span class="keyword">; 
<br />        </span><span class="default">$trans_tbl</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">147</span><span class="keyword">)] = </span><span class="string">'&amp;quot;'</span><span class="keyword">; 
<br />        </span><span class="default">$trans_tbl</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">148</span><span class="keyword">)] = </span><span class="string">'&amp;quot;'</span><span class="keyword">; 
<br />
<br />                </span><span class="comment">// Acute 'e'
<br />        </span><span class="default">$trans_tbl</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">142</span><span class="keyword">)] = </span><span class="string">'&amp;eacute;'</span><span class="keyword">;
<br />        
<br />        return </span><span class="default">strtr </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$trans_tbl</span><span class="keyword">);
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52957">  <div class="votes">
    <div id="Vu52957">
    <a href="/manual/vote-note.php?id=52957&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52957">
    <a href="/manual/vote-note.php?id=52957&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52957" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#52957" class="name">
  <strong class="user"><em>Alex Minkoff</em></strong></a><a class="genanchor" href="#52957"> &para;</a><div class="date" title="2005-05-18 04:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52957">
<div class="phpcode"><code><span class="html">If you want to display special HTML entities in a web browser, you can use the following code:<br /><br />&lt;?<br />$entities = get_html_translation_table(HTML_ENTITIES);<br />foreach ($entities as $entity) {<br />    $new_entities[$entity] = htmlspecialchars($entity);<br />}<br />echo "&lt;pre&gt;";<br />print_r($new_entities);<br />echo "&lt;/pre&gt;";<br />?&gt;<br /><br />If you don't, the key name of each element will appear to be the same as the element content itself, making it look mighty stupid. ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="28132">  <div class="votes">
    <div id="Vu28132">
    <a href="/manual/vote-note.php?id=28132&amp;page=function.get-html-translation-table&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28132">
    <a href="/manual/vote-note.php?id=28132&amp;page=function.get-html-translation-table&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28132" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#28132" class="name">
  <strong class="user"><em>kevin_bro at hostedstuff dot com</em></strong></a><a class="genanchor" href="#28132"> &para;</a><div class="date" title="2003-01-03 06:06"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28132">
<div class="phpcode"><code><span class="html">Alans version didn't seem to work right. If you're having the same problem consider using this slightly modified version instead:<br /><br />function unhtmlentities ($string)  {<br />   $trans_tbl = get_html_translation_table (HTML_ENTITIES);<br />   $trans_tbl = array_flip ($trans_tbl);<br />   $ret = strtr ($string, $trans_tbl);<br />   return preg_replace('/&amp;#(\d+);/me', <br />      "chr('\\1')",$ret);<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.get-html-translation-table&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-html-translation-table.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
