<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: substr_count - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.substr-count.php">
 <link rel="shorturl" href="https://www.php.net/substr-count">
 <link rel="alternate" href="https://www.php.net/substr-count" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.substr-compare.php">
 <link rel="next" href="https://www.php.net/manual/en/function.substr-replace.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.substr-count.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.substr-count.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.substr-count.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.substr-count.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.substr-count.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.substr-count.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.substr-count.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.substr-count.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.substr-count.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.substr-count.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.substr-count.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Count the number of substring occurrences" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: substr_count - Manual" />
<meta name="twitter:description" content="Count the number of substring occurrences" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: substr_count - Manual" />
<meta itemprop="description" content="Count the number of substring occurrences" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Count the number of substring occurrences" />

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
        <a href="function.substr-replace.php">
          substr_replace &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.substr-compare.php">
          &laquo; substr_compare        </a>
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
            <option value='en/function.substr-count.php' selected="selected">English</option>
            <option value='de/function.substr-count.php'>German</option>
            <option value='es/function.substr-count.php'>Spanish</option>
            <option value='fr/function.substr-count.php'>French</option>
            <option value='it/function.substr-count.php'>Italian</option>
            <option value='ja/function.substr-count.php'>Japanese</option>
            <option value='pt_BR/function.substr-count.php'>Brazilian Portuguese</option>
            <option value='ru/function.substr-count.php'>Russian</option>
            <option value='tr/function.substr-count.php'>Turkish</option>
            <option value='uk/function.substr-count.php'>Ukrainian</option>
            <option value='zh/function.substr-count.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.substr-count" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">substr_count</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">substr_count</span> &mdash; <span class="dc-title">Count the number of substring occurrences</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.substr-count-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>substr_count</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$haystack</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$needle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>substr_count()</strong></span> returns the number of times the
   <code class="parameter">needle</code> substring occurs in the
   <code class="parameter">haystack</code> string. Please note that
   <code class="parameter">needle</code> is case sensitive.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function doesn&#039;t count overlapped substrings. See the example below!
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.substr-count-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">haystack</code></dt>
     <dd>
      <p class="para">
       The string to search in
      </p>
     </dd>
    
    
     <dt><code class="parameter">needle</code></dt>
     <dd>
      <p class="para">
       The substring to search for
      </p>
     </dd>
    
    
     <dt><code class="parameter">offset</code></dt>
     <dd>
      <p class="para">
       The offset where to start counting. If the offset is negative, counting
       starts from the end of the string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The maximum length after the specified offset to search for the
       substring. It outputs a warning if the offset plus the length is
       greater than the <code class="parameter">haystack</code> length.
       A negative length counts from the end of <code class="parameter">haystack</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.substr-count-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   This function returns an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.substr-count-changelog">
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
      <td>8.0.0</td>
      <td>
       <code class="parameter">length</code> is nullable now.
      </td>
     </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        Support for negative <code class="parameter">offset</code>s and <code class="parameter">length</code>s has been added.
        <code class="parameter">length</code> may also be <code class="literal">0</code> now.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.substr-count-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5187">
    <p><strong>Example #1 A <span class="function"><strong>substr_count()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$text </span><span style="color: #007700">= </span><span style="color: #DD0000">'This is a test'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 14<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_count</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">, </span><span style="color: #DD0000">'is'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 2<br /><br />// the string is reduced to 's is a test', so it prints 1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_count</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">, </span><span style="color: #DD0000">'is'</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// the text is reduced to 's i', so it prints 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_count</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">, </span><span style="color: #DD0000">'is'</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// prints only 1, because it doesn't count overlapped substrings<br /></span><span style="color: #0000BB">$text2 </span><span style="color: #007700">= </span><span style="color: #DD0000">'gcdgcdgcd'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">substr_count</span><span style="color: #007700">(</span><span style="color: #0000BB">$text2</span><span style="color: #007700">, </span><span style="color: #DD0000">'gcdgcd'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// throws an exception because 5+10 &gt; 14<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr_count</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">, </span><span style="color: #DD0000">'is'</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.substr-count-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.count-chars.php" class="function" rel="rdfs-seeAlso">count_chars()</a> - Return information about characters used in a string</span></li>
    <li><span class="function"><a href="function.strpos.php" class="function" rel="rdfs-seeAlso">strpos()</a> - Find the position of the first occurrence of a substring in a string</span></li>
    <li><span class="function"><a href="function.substr.php" class="function" rel="rdfs-seeAlso">substr()</a> - Return part of a string</span></li>
    <li><span class="function"><a href="function.strstr.php" class="function" rel="rdfs-seeAlso">strstr()</a> - Find the first occurrence of a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/substr-count.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.substr-count%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.substr-count&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.substr-count.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119199">  <div class="votes">
    <div id="Vu119199">
    <a href="/manual/vote-note.php?id=119199&amp;page=function.substr-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119199">
    <a href="/manual/vote-note.php?id=119199&amp;page=function.substr-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119199" title="77% like this...">
    60
    </div>
  </div>
  <a href="#119199" class="name">
  <strong class="user"><em>tuxedobob</em></strong></a><a class="genanchor" href="#119199"> &para;</a><div class="date" title="2016-04-18 06:55"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119199">
<div class="phpcode"><code><span class="html">It's worth noting this function is surprisingly fast. I first ran it against a ~500KB string on our web server. It found 6 occurrences of the needle I was looking for in 0.0000 seconds. Yes, it ran faster than microtime() could measure.<br /><br />Looking to give it a challenge, I then ran it on a Mac laptop from 2010 against a 120.5MB string. For one test needle, it found 2385 occurrences in 0.0266 seconds. Another test needs found 290 occurrences in 0.114 seconds.<br /><br />Long story short, if you're wondering whether this function is slowing down your script, the answer is probably not.</span></code></div>
  </div>
 </div>
  <div class="note" id="70742">  <div class="votes">
    <div id="Vu70742">
    <a href="/manual/vote-note.php?id=70742&amp;page=function.substr-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70742">
    <a href="/manual/vote-note.php?id=70742&amp;page=function.substr-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70742" title="57% like this...">
    11
    </div>
  </div>
  <a href="#70742" class="name">
  <strong class="user"><em>flobi at flobi dot com</em></strong></a><a class="genanchor" href="#70742"> &para;</a><div class="date" title="2006-10-25 07:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70742">
<div class="phpcode"><code><span class="html">Making this case insensitive is easy for anyone who needs this.  Simply convert the haystack and the needle to the same case (upper or lower).<br /><br />substr_count(strtoupper($haystack), strtoupper($needle))</span></code></div>
  </div>
 </div>
  <div class="note" id="117104">  <div class="votes">
    <div id="Vu117104">
    <a href="/manual/vote-note.php?id=117104&amp;page=function.substr-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117104">
    <a href="/manual/vote-note.php?id=117104&amp;page=function.substr-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117104" title="52% like this...">
    2
    </div>
  </div>
  <a href="#117104" class="name">
  <strong class="user"><em>tweston at bangordailynews dot com</em></strong></a><a class="genanchor" href="#117104"> &para;</a><div class="date" title="2015-04-15 03:10"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117104">
<div class="phpcode"><code><span class="html">To account for the case that jrhodes has pointed out, we can change the line to:<br /><br />substr_count ( implode( ',', $haystackArray ), $needle );<br /><br />This way:<br /><br />array (<br />  0 =&gt; "mystringth",<br />  1 =&gt; "atislong"<br />);<br /><br />Becomes<br /><br />mystringth,atislong<br /><br />Which brings the count for $needle = "that" to 0 again.</span></code></div>
  </div>
 </div>
  <div class="note" id="91588">  <div class="votes">
    <div id="Vu91588">
    <a href="/manual/vote-note.php?id=91588&amp;page=function.substr-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91588">
    <a href="/manual/vote-note.php?id=91588&amp;page=function.substr-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91588" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#91588" class="name">
  <strong class="user"><em>jrhodes at roket-enterprises dot com</em></strong></a><a class="genanchor" href="#91588"> &para;</a><div class="date" title="2009-06-18 01:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91588">
<div class="phpcode"><code><span class="html">It was suggested to use<br /><br />substr_count ( implode( $haystackArray ), $needle );<br /><br />instead of the function described previously, however this has one flaw.  For example this array:<br /><br />array (<br />  0 =&gt; "mystringth",<br />  1 =&gt; "atislong"<br />);<br /><br />If you are counting "that", the implode version will return 1, but the function previously described will return 0.</span></code></div>
  </div>
 </div>
  <div class="note" id="74952">  <div class="votes">
    <div id="Vu74952">
    <a href="/manual/vote-note.php?id=74952&amp;page=function.substr-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74952">
    <a href="/manual/vote-note.php?id=74952&amp;page=function.substr-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74952" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#74952" class="name">
  <strong class="user"><em>info at fat-fish dot co dot il</em></strong></a><a class="genanchor" href="#74952"> &para;</a><div class="date" title="2007-05-05 04:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74952">
<div class="phpcode"><code><span class="html">a simple version for an array needle (multiply sub-strings):<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">substr_count_array</span><span class="keyword">( </span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle </span><span class="keyword">) {<br />     </span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />     foreach (</span><span class="default">$needle </span><span class="keyword">as </span><span class="default">$substring</span><span class="keyword">) {<br />          </span><span class="default">$count </span><span class="keyword">+= </span><span class="default">substr_count</span><span class="keyword">( </span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$substring</span><span class="keyword">);<br />     }<br />     return </span><span class="default">$count</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="38442">  <div class="votes">
    <div id="Vu38442">
    <a href="/manual/vote-note.php?id=38442&amp;page=function.substr-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38442">
    <a href="/manual/vote-note.php?id=38442&amp;page=function.substr-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38442" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#38442" class="name">
  <strong class="user"><em>XinfoX X at X XkarlX X-X XphilippX X dot X XdeX</em></strong></a><a class="genanchor" href="#38442"> &para;</a><div class="date" title="2003-12-21 01:27"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38442">
<div class="phpcode"><code><span class="html">Yet another reference to the "cgcgcgcgcgcgc" example posted by "chris at pecoraro dot net":<br /><br />Your request can be fulfilled with the Perl compatible regular expressions and their lookahead and lookbehind features.<br /><br />The example<br /><br /> $number_of_full_pattern = preg_match_all('/(cgc)/', "cgcgcgcgcgcgcg", $chunks);<br /><br />works like the substr_count function. The variable $number_of_full_pattern has the value 3, because the default behavior of Perl compatible regular expressions is to consume the characters of the string subject that were matched by the (sub)pattern. That is, the pointer will be moved to the end of the matched substring.<br />But we can use the lookahead feature that disables the moving of the pointer:<br /><br /> $number_of_full_pattern = preg_match_all('/(cg(?=c))/', "cgcgcgcgcgcgcg", $chunks);<br /><br />In this case the variable $number_of_full_pattern has the value 6.<br />Firstly a string "cg" will be matched and the pointer will be moved to the end of this string. Then the regular expression looks ahead whether a 'c' can be matched. Despite of the occurence of the character 'c' the pointer is not moved.</span></code></div>
  </div>
 </div>
  <div class="note" id="115336">  <div class="votes">
    <div id="Vu115336">
    <a href="/manual/vote-note.php?id=115336&amp;page=function.substr-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115336">
    <a href="/manual/vote-note.php?id=115336&amp;page=function.substr-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115336" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#115336" class="name">
  <strong class="user"><em>php at blink dot at</em></strong></a><a class="genanchor" href="#115336"> &para;</a><div class="date" title="2014-07-07 01:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115336">
<div class="phpcode"><code><span class="html">This will handle a string where it is unknown if comma or period are used as thousand or decimal separator. Only exception where this leads to a conflict is when there is only a single comma or period and 3 possible decimals (123.456 or 123,456). An optional parameter is passed to handle this case (assume thousands, assume decimal, decimal when period, decimal when comma). It assumes an input string in any of the formats listed below.<br /><br />function toFloat($pString, $seperatorOnConflict="f")<br />{<br />    $decSeperator=".";<br />    $thSeperator="";<br /><br />    $pString=str_replace(" ", $thSeperator, $pString);<br /><br />    $firstPeriod=strpos($pString, ".");<br />    $firstComma=strpos($pString, ",");<br />    if($firstPeriod!==FALSE &amp;&amp; $firstComma!==FALSE) {<br />        if($firstPeriod&lt;$firstComma) {<br />            $pString=str_replace(".", $thSeperator, $pString);<br />            $pString=str_replace(",", $decSeperator, $pString);<br />        }<br />        else {<br />            $pString=str_replace(",", $thSeperator, $pString);<br />        }<br />    }<br />    else if($firstPeriod!==FALSE || $firstComma!==FALSE) {<br />        $seperator=$firstPeriod!==FALSE?".":",";<br />        if(substr_count($pString, $seperator)==1) {<br />            $lastPeriodOrComma=strpos($pString, $seperator);<br />            if($lastPeriodOrComma==(strlen($pString)-4) &amp;&amp; ($seperatorOnConflict!=$seperator &amp;&amp; $seperatorOnConflict!="f")) {<br />                $pString=str_replace($seperator, $thSeperator, $pString);<br />            }<br />            else {<br />                $pString=str_replace($seperator, $decSeperator, $pString);<br />            }<br />        }<br />        else {<br />            $pString=str_replace($seperator, $thSeperator, $pString);<br />        }<br />    }<br />    return(float)$pString;<br />}<br /><br />function testFloatParsing() { <br />    $floatvals = array( <br />        "22 000", <br />        "22,000", <br />        "22.000", <br />        "123 456",<br />        "123,456",<br />        "123.456",<br />        "22 000,76", <br />        "22.000,76", <br />        "22,000.76", <br />        "22000.76", <br />        "22000,76", <br />        "1.022.000,76", <br />        "1,022,000.76", <br />        "1,000,000", <br />        "1.000.000", <br />        "1022000.76", <br />        "1022000,76", <br />        "1022000", <br />        "0.76", <br />        "0,76", <br />        "0.00", <br />        "0,00", <br />        "1.00", <br />        "1,00", <br />        "-22 000,76", <br />        "-22.000,76", <br />        "-22,000.76", <br />        "-22 000", <br />        "-22,000", <br />        "-22.000", <br />        "-22000.76", <br />        "-22000,76", <br />        "-1.022.000,76", <br />        "-1,022,000.76", <br />        "-1,000,000", <br />        "-1.000.000", <br />        "-1022000.76", <br />        "-1022000,76", <br />        "-1022000", <br />        "-0.76", <br />        "-0,76", <br />        "-0.00", <br />        "-0,00", <br />        "-1.00", <br />        "-1,00" <br />    ); <br />    <br />    echo "&lt;table&gt; <br />        &lt;tr&gt; <br />            &lt;th&gt;String&lt;/th&gt; <br />            &lt;th&gt;thousands&lt;/th&gt; <br />            &lt;th&gt;fraction&lt;/th&gt; <br />            &lt;th&gt;dec. if period&lt;/th&gt; <br />            &lt;th&gt;dec. if comma&lt;/th&gt; <br />        &lt;/tr&gt;"; <br />        <br />    foreach ($floatvals as $fval) { <br />        echo "&lt;tr&gt;"; <br />        echo "&lt;td&gt;" . (string) $fval . "&lt;/td&gt;"; <br />        <br />        echo "&lt;td&gt;" . (float) toFloat($fval, "") . "&lt;/td&gt;"; <br />        echo "&lt;td&gt;" . (float) toFloat($fval, "f") . "&lt;/td&gt;"; <br />        echo "&lt;td&gt;" . (float) toFloat($fval, ".") . "&lt;/td&gt;"; <br />        echo "&lt;td&gt;" . (float) toFloat($fval, ",") . "&lt;/td&gt;"; <br />        echo "&lt;/tr&gt;"; <br />    } <br />    echo "&lt;/table&gt;"; <br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.substr-count&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.substr-count.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
