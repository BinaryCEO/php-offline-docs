<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: str_ireplace - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.str-ireplace.php">
 <link rel="shorturl" href="https://www.php.net/str-ireplace">
 <link rel="alternate" href="https://www.php.net/str-ireplace" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.str-increment.php">
 <link rel="next" href="https://www.php.net/manual/en/function.str-pad.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.str-ireplace.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.str-ireplace.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.str-ireplace.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.str-ireplace.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.str-ireplace.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.str-ireplace.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.str-ireplace.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.str-ireplace.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.str-ireplace.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.str-ireplace.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.str-ireplace.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Case-insensitive version of str_replace" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: str_ireplace - Manual" />
<meta name="twitter:description" content="Case-insensitive version of str_replace" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: str_ireplace - Manual" />
<meta itemprop="description" content="Case-insensitive version of str_replace" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Case-insensitive version of str_replace" />

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
        <a href="function.str-pad.php">
          str_pad &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.str-increment.php">
          &laquo; str_increment        </a>
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
            <option value='en/function.str-ireplace.php' selected="selected">English</option>
            <option value='de/function.str-ireplace.php'>German</option>
            <option value='es/function.str-ireplace.php'>Spanish</option>
            <option value='fr/function.str-ireplace.php'>French</option>
            <option value='it/function.str-ireplace.php'>Italian</option>
            <option value='ja/function.str-ireplace.php'>Japanese</option>
            <option value='pt_BR/function.str-ireplace.php'>Brazilian Portuguese</option>
            <option value='ru/function.str-ireplace.php'>Russian</option>
            <option value='tr/function.str-ireplace.php'>Turkish</option>
            <option value='uk/function.str-ireplace.php'>Ukrainian</option>
            <option value='zh/function.str-ireplace.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.str-ireplace" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">str_ireplace</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">str_ireplace</span> &mdash; <span class="dc-title">Case-insensitive version of <span class="function"><a href="function.str-replace.php" class="function">str_replace()</a></span></span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.str-ireplace-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>str_ireplace</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$search</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$replace</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$subject</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$count</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span></div>

  <p class="para rdfs-comment">
   This function returns a string or an array with all occurrences of
   <code class="parameter">search</code> in <code class="parameter">subject</code>
   (ignoring case) replaced with the given <code class="parameter">replace</code>
   value.
   </p>
   <p class="para">
    To replace text based on a pattern rather than a fixed string,
    use <span class="function"><a href="function.preg-replace.php" class="function">preg_replace()</a></span> with the <code class="literal">i</code>
    <a href="reference.pcre.pattern.modifiers.php" class="link">pattern modifier</a>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.str-ireplace-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   If <code class="parameter">search</code> and <code class="parameter">replace</code> are
   arrays, then <span class="function"><strong>str_ireplace()</strong></span> takes a value from each
   array and uses them to search and replace on
   <code class="parameter">subject</code>. If <code class="parameter">replace</code> has fewer
   values than <code class="parameter">search</code>, then an empty string is used for
   the rest of replacement values. If <code class="parameter">search</code> is an
   array and <code class="parameter">replace</code> is a string, then this replacement
   string is used for every value of <code class="parameter">search</code>. The
   converse would not make sense, though.
  </p>
  <p class="para">
   If <code class="parameter">search</code> or <code class="parameter">replace</code>
   are arrays, their elements are processed first to last.
  </p>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">search</code></dt>
     <dd>
      <p class="para">
       The value being searched for, otherwise known as the
       <em>needle</em>.  An array may be used to designate
       multiple needles.
      </p>
     </dd>
    
    
     <dt><code class="parameter">replace</code></dt>
     <dd>
      <p class="para">
       The replacement value that replaces found <code class="parameter">search</code>
       values. An array may be used to designate multiple replacements.
      </p>
     </dd>
    
    
     <dt><code class="parameter">subject</code></dt>
     <dd>
      <p class="para">
       The string or array being searched and replaced on,
       otherwise known as the <em>haystack</em>.
      </p>
      <p class="para">
       If <code class="parameter">subject</code> is an array, then the search and
       replace is performed with every entry of 
       <code class="parameter">subject</code>, and the return value is an array as
       well.
      </p>
     </dd>
    
    
     <dt><code class="parameter">count</code></dt>
     <dd>
      <p class="para">
       If passed, this will be set to the number of replacements performed.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.str-ireplace-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string or an array of replacements.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.str-ireplace-changelog">
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
  <td>8.2.0</td>
  <td>
   Case folding no longer depends on the locale set with
   <span class="function"><a href="function.setlocale.php" class="function">setlocale()</a></span>. Only ASCII case folding will be done.
   Non-ASCII bytes will be compared by their byte value.
  </td>
 </tr>


    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.str-ireplace-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5136">
    <p><strong>Example #1 <span class="function"><strong>str_ireplace()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$bodytag </span><span style="color: #007700">= </span><span style="color: #0000BB">str_ireplace</span><span style="color: #007700">(</span><span style="color: #DD0000">"%body%"</span><span style="color: #007700">, </span><span style="color: #DD0000">"black"</span><span style="color: #007700">, </span><span style="color: #DD0000">"&lt;body text=%BODY%&gt;"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$bodytag</span><span style="color: #007700">; </span><span style="color: #FF8000">// &lt;body text=black&gt;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.str-ireplace-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is
binary-safe.</span></p></blockquote>
  <div class="caution"><strong class="caution">Caution</strong>
   <h1 class="title">Replacement order gotcha</h1>
   <p class="para">
    Because <span class="function"><strong>str_ireplace()</strong></span> replaces left to right, it might
    replace a previously inserted value when doing multiple replacements.
    Example #2 in the <span class="function"><a href="function.str-replace.php" class="function">str_replace()</a></span> documentation
    demonstrates how this may affect you in practice.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.str-ireplace-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.str-replace.php" class="function" rel="rdfs-seeAlso">str_replace()</a> - Replace all occurrences of the search string with the replacement string</span></li>
    <li><span class="function"><a href="function.preg-replace.php" class="function" rel="rdfs-seeAlso">preg_replace()</a> - Perform a regular expression search and replace</span></li>
    <li><span class="function"><a href="function.strtr.php" class="function" rel="rdfs-seeAlso">strtr()</a> - Translate characters or replace substrings</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/str-ireplace.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.str-ireplace%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.str-ireplace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-ireplace.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129394">  <div class="votes">
    <div id="Vu129394">
    <a href="/manual/vote-note.php?id=129394&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129394">
    <a href="/manual/vote-note.php?id=129394&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129394" title="100% like this...">
    7
    </div>
  </div>
  <a href="#129394" class="name">
  <strong class="user"><em>Tom</em></strong></a><a class="genanchor" href="#129394"> &para;</a><div class="date" title="2024-04-11 11:37"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129394">
<div class="phpcode"><code><span class="html">Attention! str_ireplace does not destroy multibyte characters. But multibyte characters are not replaced case-insensitively. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo  </span><span class="default">str_ireplace</span><span class="keyword">(</span><span class="string">'Ä'</span><span class="keyword">, </span><span class="string">'Ae_'</span><span class="keyword">, </span><span class="string">'Ägypten'</span><span class="keyword">);  </span><span class="comment">// Ae_gypten<br /></span><span class="keyword">echo  </span><span class="default">str_ireplace</span><span class="keyword">(</span><span class="string">'ä'</span><span class="keyword">, </span><span class="string">'ae_'</span><span class="keyword">, </span><span class="string">'ägypten'</span><span class="keyword">);  </span><span class="comment">// ae_gypten<br /></span><span class="keyword">echo  </span><span class="default">str_ireplace</span><span class="keyword">(</span><span class="string">'ä'</span><span class="keyword">, </span><span class="string">'ae_'</span><span class="keyword">, </span><span class="string">'Ägypten'</span><span class="keyword">);  </span><span class="comment">// Ägypten<br /></span><span class="keyword">echo  </span><span class="default">str_ireplace</span><span class="keyword">(</span><span class="string">'Ä'</span><span class="keyword">, </span><span class="string">'ae_'</span><span class="keyword">, </span><span class="string">'ägypten'</span><span class="keyword">);  </span><span class="comment">// ägypten<br /></span><span class="keyword">echo  </span><span class="default">str_ireplace</span><span class="keyword">(</span><span class="string">'E'</span><span class="keyword">, </span><span class="string">'e_'</span><span class="keyword">, </span><span class="string">'egypt'</span><span class="keyword">);  </span><span class="comment">// e_gypt<br /></span><span class="keyword">echo  </span><span class="default">str_ireplace</span><span class="keyword">(</span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'e_'</span><span class="keyword">, </span><span class="string">'Egypt'</span><span class="keyword">);  </span><span class="comment">// e_gypt<br /></span><span class="keyword">echo  </span><span class="default">str_ireplace</span><span class="keyword">(</span><span class="string">'ä'</span><span class="keyword">, </span><span class="string">'ae_'</span><span class="keyword">, </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="string">'Ägypten'</span><span class="keyword">));  </span><span class="comment">// ae_gypten</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87417">  <div class="votes">
    <div id="Vu87417">
    <a href="/manual/vote-note.php?id=87417&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87417">
    <a href="/manual/vote-note.php?id=87417&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87417" title="70% like this...">
    26
    </div>
  </div>
  <a href="#87417" class="name">
  <strong class="user"><em>sawdust</em></strong></a><a class="genanchor" href="#87417"> &para;</a><div class="date" title="2008-12-04 07:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87417">
<div class="phpcode"><code><span class="html">Here's a different approach to search result keyword highlighting that will match all keyword sub strings in a case insensitive manner and preserve case in the returned text. This solution first grabs all matches within $haystack in a case insensitive manner, and the secondly loops through each of those matched sub strings and applies a case sensitive replace in $haystack. This way each unique (in terms of case) instance of $needle is operated on individually allowing a case sensitive replace to be done in order to preserve the original case of each unique instance of $needle.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">highlightStr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$highlightColorValue</span><span class="keyword">) {<br />     </span><span class="comment">// return $haystack if there is no highlight color or strings given, nothing to do.<br />    </span><span class="keyword">if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$highlightColorValue</span><span class="keyword">) &lt; </span><span class="default">1 </span><span class="keyword">|| </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">) &lt; </span><span class="default">1 </span><span class="keyword">|| </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">) &lt; </span><span class="default">1</span><span class="keyword">) {<br />        return </span><span class="default">$haystack</span><span class="keyword">;<br />    }<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/</span><span class="default">$needle</span><span class="string">+/i"</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &amp;&amp; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &gt;= </span><span class="default">1</span><span class="keyword">) {<br />        foreach (</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] as </span><span class="default">$match</span><span class="keyword">) {<br />            </span><span class="default">$haystack </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">, </span><span class="string">'&lt;span style="background-color:'</span><span class="keyword">.</span><span class="default">$highlightColorValue</span><span class="keyword">.</span><span class="string">';"&gt;'</span><span class="keyword">.</span><span class="default">$match</span><span class="keyword">.</span><span class="string">'&lt;/span&gt;'</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">);<br />        }<br />    }<br />    return </span><span class="default">$haystack</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51618">  <div class="votes">
    <div id="Vu51618">
    <a href="/manual/vote-note.php?id=51618&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51618">
    <a href="/manual/vote-note.php?id=51618&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51618" title="71% like this...">
    17
    </div>
  </div>
  <a href="#51618" class="name">
  <strong class="user"><em>daevid at daevid dot com</em></strong></a><a class="genanchor" href="#51618"> &para;</a><div class="date" title="2005-04-05 01:14"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51618">
<div class="phpcode"><code><span class="html">here's a neat little function I whipped up to do HTML color coding of SQL strings. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Output the HTML debugging string in color coded glory for a sql query
<br /> * This is very nice for being able to see many SQL queries
<br /> * @access     public
<br /> * @return     void. prints HTML color coded string of the input $query.
<br /> * @param     string $query The SQL query to be executed.
<br /> * @author     Daevid Vincent [daevid@LockdownNetworks.com]
<br /> *  @version     1.0
<br /> * @date        04/05/05
<br /> * @todo     highlight SQL functions.
<br /> */
<br /></span><span class="keyword">function </span><span class="default">SQL_DEBUG</span><span class="keyword">( </span><span class="default">$query </span><span class="keyword">)
<br />{
<br />    if( </span><span class="default">$query </span><span class="keyword">== </span><span class="string">'' </span><span class="keyword">) return </span><span class="default">0</span><span class="keyword">;
<br />
<br />    global </span><span class="default">$SQL_INT</span><span class="keyword">;
<br />    if( !isset(</span><span class="default">$SQL_INT</span><span class="keyword">) ) </span><span class="default">$SQL_INT </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />
<br />    </span><span class="comment">//[dv] this has to come first or you will have goofy results later.
<br />    </span><span class="default">$query </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/['\"]([^'\"]*)['\"]/i"</span><span class="keyword">, </span><span class="string">"'&lt;FONT COLOR='#FF6600'&gt;$1&lt;/FONT&gt;'"</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);
<br />
<br />    </span><span class="default">$query </span><span class="keyword">= </span><span class="default">str_ireplace</span><span class="keyword">(
<br />                            array (
<br />                                    </span><span class="string">'*'</span><span class="keyword">,
<br />                                    </span><span class="string">'SELECT '</span><span class="keyword">,
<br />                                    </span><span class="string">'UPDATE '</span><span class="keyword">,
<br />                                    </span><span class="string">'DELETE '</span><span class="keyword">,
<br />                                    </span><span class="string">'INSERT '</span><span class="keyword">,
<br />                                    </span><span class="string">'INTO'</span><span class="keyword">,
<br />                                    </span><span class="string">'VALUES'</span><span class="keyword">,
<br />                                    </span><span class="string">'FROM'</span><span class="keyword">,
<br />                                    </span><span class="string">'LEFT'</span><span class="keyword">,
<br />                                    </span><span class="string">'JOIN'</span><span class="keyword">,
<br />                                    </span><span class="string">'WHERE'</span><span class="keyword">,
<br />                                    </span><span class="string">'LIMIT'</span><span class="keyword">,
<br />                                    </span><span class="string">'ORDER BY'</span><span class="keyword">,
<br />                                    </span><span class="string">'AND'</span><span class="keyword">,
<br />                                    </span><span class="string">'OR '</span><span class="keyword">, </span><span class="comment">//[dv] note the space. otherwise you match to 'COLOR' ;-)
<br />                                    </span><span class="string">'DESC'</span><span class="keyword">,
<br />                                    </span><span class="string">'ASC'</span><span class="keyword">,
<br />                                    </span><span class="string">'ON '
<br />                                  </span><span class="keyword">),
<br />                            array (
<br />                                    </span><span class="string">"&lt;FONT COLOR='#FF6600'&gt;&lt;B&gt;*&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00AA00'&gt;&lt;B&gt;SELECT&lt;/B&gt; &lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00AA00'&gt;&lt;B&gt;UPDATE&lt;/B&gt; &lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00AA00'&gt;&lt;B&gt;DELETE&lt;/B&gt; &lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00AA00'&gt;&lt;B&gt;INSERT&lt;/B&gt; &lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00AA00'&gt;&lt;B&gt;INTO&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00AA00'&gt;&lt;B&gt;VALUES&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00AA00'&gt;&lt;B&gt;FROM&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00CC00'&gt;&lt;B&gt;LEFT&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00CC00'&gt;&lt;B&gt;JOIN&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00AA00'&gt;&lt;B&gt;WHERE&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#AA0000'&gt;&lt;B&gt;LIMIT&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00AA00'&gt;&lt;B&gt;ORDER BY&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#0000AA'&gt;&lt;B&gt;AND&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#0000AA'&gt;&lt;B&gt;OR&lt;/B&gt; &lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#0000AA'&gt;&lt;B&gt;DESC&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#0000AA'&gt;&lt;B&gt;ASC&lt;/B&gt;&lt;/FONT&gt;"</span><span class="keyword">,
<br />                                    </span><span class="string">"&lt;FONT COLOR='#00DD00'&gt;&lt;B&gt;ON&lt;/B&gt; &lt;/FONT&gt;"
<br />                                  </span><span class="keyword">),
<br />                            </span><span class="default">$query
<br />                          </span><span class="keyword">);
<br />
<br />    echo </span><span class="string">"&lt;FONT COLOR='#0000FF'&gt;&lt;B&gt;SQL["</span><span class="keyword">.</span><span class="default">$SQL_INT</span><span class="keyword">.</span><span class="string">"]:&lt;/B&gt; "</span><span class="keyword">.</span><span class="default">$query</span><span class="keyword">.</span><span class="string">"&lt;FONT COLOR='#FF0000'&gt;;&lt;/FONT&gt;&lt;/FONT&gt;&lt;BR&gt;\n"</span><span class="keyword">;
<br />
<br />    </span><span class="default">$SQL_INT</span><span class="keyword">++;
<br />
<br />} </span><span class="comment">//SQL_DEBUG
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116432">  <div class="votes">
    <div id="Vu116432">
    <a href="/manual/vote-note.php?id=116432&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116432">
    <a href="/manual/vote-note.php?id=116432&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116432" title="71% like this...">
    6
    </div>
  </div>
  <a href="#116432" class="name">
  <strong class="user"><em>Anteaus</em></strong></a><a class="genanchor" href="#116432"> &para;</a><div class="date" title="2015-01-02 08:41"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116432">
<div class="phpcode"><code><span class="html">If you follow the instructions given here you will end up with code which works in php5.3 but which bugs-out in php5.4. Reason is that '&amp;$count' (explicit pass by reference) is now an illegal construct.<br />Nasty, especially it leads to unreliable code which may work on test but not in production. Manual needs corrected!</span></code></div>
  </div>
 </div>
  <div class="note" id="100539">  <div class="votes">
    <div id="Vu100539">
    <a href="/manual/vote-note.php?id=100539&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100539">
    <a href="/manual/vote-note.php?id=100539&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100539" title="60% like this...">
    5
    </div>
  </div>
  <a href="#100539" class="name">
  <strong class="user"><em>stepanic dot matija at gmail dot com</em></strong></a><a class="genanchor" href="#100539"> &para;</a><div class="date" title="2010-10-21 08:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100539">
<div class="phpcode"><code><span class="html">FIX-ed problem with highlighting second 'o' OR 'a', in this string
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">highlight_string </span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$highlight_class</span><span class="keyword">) {
<br />         </span><span class="comment">// return $haystack if there is no highlight color or strings given, nothing to do.
<br />        
<br />        </span><span class="default">$first_encode</span><span class="keyword">=</span><span class="string">'XXXXXXXXXXXXXXX'</span><span class="keyword">;     </span><span class="comment">//ENCODE string
<br />
<br />        </span><span class="default">$second_encode</span><span class="keyword">=</span><span class="string">'YYYYYYYYYYYYYYY'</span><span class="keyword">;
<br />        
<br />        </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/</span><span class="default">$needle</span><span class="string">+/i"</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);
<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &amp;&amp; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &gt;= </span><span class="default">1</span><span class="keyword">) {
<br />            foreach (</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] as </span><span class="default">$match</span><span class="keyword">) {
<br />                </span><span class="default">$haystack </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">, </span><span class="default">$first_encode</span><span class="keyword">.</span><span class="default">$match</span><span class="keyword">.</span><span class="default">$second_encode</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">);
<br />            }
<br />        }
<br />        
<br />        </span><span class="default">$haystack</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="default">$first_encode</span><span class="keyword">,</span><span class="default">$second_encode</span><span class="keyword">),
<br />array(</span><span class="string">'&lt;font class="'</span><span class="keyword">.</span><span class="default">$highlight_class</span><span class="keyword">.</span><span class="string">'" &gt;'</span><span class="keyword">,</span><span class="string">'&lt;/font&gt;'</span><span class="keyword">),</span><span class="default">$haystack</span><span class="keyword">);
<br />        
<br />        return </span><span class="default">$haystack</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42811">  <div class="votes">
    <div id="Vu42811">
    <a href="/manual/vote-note.php?id=42811&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42811">
    <a href="/manual/vote-note.php?id=42811&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42811" title="60% like this...">
    4
    </div>
  </div>
  <a href="#42811" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#42811"> &para;</a><div class="date" title="2004-05-30 10:36"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42811">
<div class="phpcode"><code><span class="html">This functionality is now implemented in the PEAR package PHP_Compat.<br /><br />More information about using this function without upgrading your version of PHP can be found on the below link:<br /><br /><a href="http://pear.php.net/package/PHP_Compat" rel="nofollow" target="_blank">http://pear.php.net/package/PHP_Compat</a></span></code></div>
  </div>
 </div>
  <div class="note" id="89612">  <div class="votes">
    <div id="Vu89612">
    <a href="/manual/vote-note.php?id=89612&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89612">
    <a href="/manual/vote-note.php?id=89612&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89612" title="58% like this...">
    3
    </div>
  </div>
  <a href="#89612" class="name">
  <strong class="user"><em>ishutko at gmail dot com</em></strong></a><a class="genanchor" href="#89612"> &para;</a><div class="date" title="2009-03-16 01:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89612">
<div class="phpcode"><code><span class="html">For function work with cirilic<br /><br />setlocale (LC_ALL, 'ru_RU');</span></code></div>
  </div>
 </div>
  <div class="note" id="104676">  <div class="votes">
    <div id="Vu104676">
    <a href="/manual/vote-note.php?id=104676&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104676">
    <a href="/manual/vote-note.php?id=104676&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104676" title="56% like this...">
    4
    </div>
  </div>
  <a href="#104676" class="name">
  <strong class="user"><em>Psudo - thepsudo at gmail dot com</em></strong></a><a class="genanchor" href="#104676"> &para;</a><div class="date" title="2011-06-29 09:53"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104676">
<div class="phpcode"><code><span class="html">For highlighting without the overhead of regex and without destroying capitalization, try this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">highlight</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">){
<br />    </span><span class="default">$ind </span><span class="keyword">= </span><span class="default">stripos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">);
<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">);
<br />    if(</span><span class="default">$ind </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">){
<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$ind</span><span class="keyword">) . </span><span class="string">"&lt;b&gt;" </span><span class="keyword">. </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$ind</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">) . </span><span class="string">"&lt;/b&gt;" </span><span class="keyword">.
<br />            </span><span class="default">highlight</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$ind </span><span class="keyword">+ </span><span class="default">$len</span><span class="keyword">));
<br />    } else return </span><span class="default">$haystack</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />This example uses HTML bold tags, but you can easily change the highlighting method.</span></code></div>
  </div>
 </div>
  <div class="note" id="87006">  <div class="votes">
    <div id="Vu87006">
    <a href="/manual/vote-note.php?id=87006&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87006">
    <a href="/manual/vote-note.php?id=87006&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87006" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#87006" class="name">
  <strong class="user"><em>Michael dot Bond at mail dot wvu dot edu</em></strong></a><a class="genanchor" href="#87006"> &para;</a><div class="date" title="2008-11-14 06:44"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87006">
<div class="phpcode"><code><span class="html">This function will highlight search terms (Key Words in Context). 
<br />
<br />The difference between this one and the ones below is that it will preserve the original case of the search term as well. So, if you search for "american" but in the original string it is "American" it will retain the capital "A" as well as the correct case for the rest of the string. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">kwic</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">,</span><span class="default">$str2</span><span class="keyword">) {
<br />    
<br />    </span><span class="default">$kwicLen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">);
<br />
<br />    </span><span class="default">$kwicArray </span><span class="keyword">= array();
<br />    </span><span class="default">$pos          </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$count       </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />
<br />    while(</span><span class="default">$pos </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">) {
<br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">stripos</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">,</span><span class="default">$str1</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">);
<br />        if(</span><span class="default">$pos </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">) {
<br />            </span><span class="default">$kwicArray</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">'kwic'</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">,</span><span class="default">$kwicLen</span><span class="keyword">);
<br />            </span><span class="default">$kwicArray</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">++][</span><span class="string">'pos'</span><span class="keyword">]  = </span><span class="default">$pos</span><span class="keyword">;
<br />            </span><span class="default">$pos</span><span class="keyword">++;
<br />        }
<br />    }
<br />
<br />    for(</span><span class="default">$I</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$kwicArray</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">;</span><span class="default">$I</span><span class="keyword">&gt;=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$I</span><span class="keyword">--) {
<br />        </span><span class="default">$kwic </span><span class="keyword">= </span><span class="string">'&lt;span class="kwic"&gt;'</span><span class="keyword">.</span><span class="default">$kwicArray</span><span class="keyword">[</span><span class="default">$I</span><span class="keyword">][</span><span class="string">'kwic'</span><span class="keyword">].</span><span class="string">'&lt;/span&gt;'</span><span class="keyword">;
<br />        </span><span class="default">$str2 </span><span class="keyword">= </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">,</span><span class="default">$kwic</span><span class="keyword">,</span><span class="default">$kwicArray</span><span class="keyword">[</span><span class="default">$I</span><span class="keyword">][</span><span class="string">'pos'</span><span class="keyword">],</span><span class="default">$kwicLen</span><span class="keyword">);
<br />    }
<br />        
<br />    return(</span><span class="default">$str2</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54425">  <div class="votes">
    <div id="Vu54425">
    <a href="/manual/vote-note.php?id=54425&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54425">
    <a href="/manual/vote-note.php?id=54425&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54425" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#54425" class="name">
  <strong class="user"><em>hfuecks at nospam dot org</em></strong></a><a class="genanchor" href="#54425"> &para;</a><div class="date" title="2005-07-04 02:07"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54425">
<div class="phpcode"><code><span class="html">Note that character case is being defined by your server's locale setting, which effects strings containing non-ASCII characters.<br /><br />See strtolower() - <a href="http://www.php.net/strtolower" rel="nofollow" target="_blank">http://www.php.net/strtolower</a> and comments - internally str_ireplace converts $search and $replace to lowercase to find matches.</span></code></div>
  </div>
 </div>
  <div class="note" id="102845">  <div class="votes">
    <div id="Vu102845">
    <a href="/manual/vote-note.php?id=102845&amp;page=function.str-ireplace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102845">
    <a href="/manual/vote-note.php?id=102845&amp;page=function.str-ireplace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102845" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#102845" class="name">
  <strong class="user"><em>holblin at holblin dot com</em></strong></a><a class="genanchor" href="#102845"> &para;</a><div class="date" title="2011-03-09 01:11"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102845">
<div class="phpcode"><code><span class="html">Warning with highlighting ...
<br />
<br />I used :
<br />
<br /><span class="default">&lt;?php
<br />$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/('</span><span class="keyword">.</span><span class="default">$q</span><span class="keyword">.</span><span class="string">')/i'</span><span class="keyword">,</span><span class="string">'&lt;span class=highlighting ""&gt;$1&lt;/span&gt;' </span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Because this line do not allow to highlight uppercase and lowercase correctly (transform uppercase to lowercase for exemple)
<br />
<br /><span class="default">&lt;?php
<br /> $text </span><span class="keyword">= </span><span class="default">str_ireplace</span><span class="keyword">( </span><span class="default">$q </span><span class="keyword">, </span><span class="string">'&lt;span class=highlighting ""&gt;'</span><span class="keyword">.</span><span class="default">$q</span><span class="keyword">.</span><span class="string">'&lt;/span&gt;'</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />But when $q contain some regex you have some problems ... for exemple :
<br /><span class="default">&lt;?php $q </span><span class="keyword">= </span><span class="string">'('</span><span class="keyword">; </span><span class="default">?&gt;
<br /></span>
<br />So you must use preg_replace to highlight correctly the text and you must create a function for escape bad regex caracters !
<br />
<br />I think that a better function can be found but this works I guess :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">regex_escape</span><span class="keyword">( </span><span class="default">$q </span><span class="keyword">)
<br />{
<br />    return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/([\[\]\(\)\{\}\-\.\*\?\|\^\$])/'</span><span class="keyword">, </span><span class="string">'\$1'</span><span class="keyword">, </span><span class="default">$q</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.str-ireplace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-ireplace.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
