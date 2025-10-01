<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: preg_replace - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.preg-replace.php">
 <link rel="shorturl" href="https://www.php.net/preg-replace">
 <link rel="alternate" href="https://www.php.net/preg-replace" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pcre.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.preg-quote.php">
 <link rel="next" href="https://www.php.net/manual/en/function.preg-replace-callback.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.preg-replace.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.preg-replace.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.preg-replace.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.preg-replace.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.preg-replace.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.preg-replace.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.preg-replace.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.preg-replace.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.preg-replace.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.preg-replace.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.preg-replace.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Perform a regular expression search and replace" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: preg_replace - Manual" />
<meta name="twitter:description" content="Perform a regular expression search and replace" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: preg_replace - Manual" />
<meta itemprop="description" content="Perform a regular expression search and replace" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Perform a regular expression search and replace" />

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
        <a href="function.preg-replace-callback.php">
          preg_replace_callback &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.preg-quote.php">
          &laquo; preg_quote        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      <li><a href='ref.pcre.php'>PCRE Functions</a></li>      </ul>
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
            <option value='en/function.preg-replace.php' selected="selected">English</option>
            <option value='de/function.preg-replace.php'>German</option>
            <option value='es/function.preg-replace.php'>Spanish</option>
            <option value='fr/function.preg-replace.php'>French</option>
            <option value='it/function.preg-replace.php'>Italian</option>
            <option value='ja/function.preg-replace.php'>Japanese</option>
            <option value='pt_BR/function.preg-replace.php'>Brazilian Portuguese</option>
            <option value='ru/function.preg-replace.php'>Russian</option>
            <option value='tr/function.preg-replace.php'>Turkish</option>
            <option value='uk/function.preg-replace.php'>Ukrainian</option>
            <option value='zh/function.preg-replace.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.preg-replace" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">preg_replace</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">preg_replace</span> &mdash; <span class="dc-title">Perform a regular expression search and replace</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.preg-replace-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>preg_replace</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$pattern</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$replacement</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$subject</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$count</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>

  <p class="para rdfs-comment">
   Searches <code class="parameter">subject</code> for matches to
   <code class="parameter">pattern</code> and replaces them with
   <code class="parameter">replacement</code>.
  </p>
  <p class="para">
   To match an exact string, rather than a pattern,
   consider using <span class="function"><a href="function.str-replace.php" class="function">str_replace()</a></span> or
   <span class="function"><a href="function.str-ireplace.php" class="function">str_ireplace()</a></span> instead of this function.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.preg-replace-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">pattern</code></dt>
     <dd>
      <p class="para">
       The pattern to search for. It can be either a string or an array with
       strings.
      </p>
      <p class="para">
       Several <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE modifiers</a>
       are also available.
      </p>
     </dd>
    
    
     <dt><code class="parameter">replacement</code></dt>
     <dd>
      <p class="para">
       The string or an array with strings to replace. If this parameter is a
       string and the <code class="parameter">pattern</code> parameter is an array,
       all patterns will be replaced by that string. If both
       <code class="parameter">pattern</code> and <code class="parameter">replacement</code>
       parameters are arrays, each <code class="parameter">pattern</code> will be
       replaced by the <code class="parameter">replacement</code> counterpart. If
       there are fewer elements in the <code class="parameter">replacement</code>
       array than in the <code class="parameter">pattern</code> array, any extra
       <code class="parameter">pattern</code>s will be replaced by an empty string.
      </p>
      <p class="para">
       <code class="parameter">replacement</code> may contain references of the form
       <code class="literal">\<span class="replaceable">n</span></code> or
       <code class="literal">$<span class="replaceable">n</span></code>, with the latter form
       being the preferred one. Every such reference will be replaced by the text
       captured by the <span class="replaceable">n</span>&#039;th parenthesized pattern.
       <span class="replaceable">n</span> can be from 0 to 99, and
       <code class="literal">\0</code> or <code class="literal">$0</code> refers to the text matched
       by the whole pattern. Opening parentheses are counted from left to right
       (starting from 1) to obtain the number of the capturing subpattern.
       Note that backslashes in <span class="type"><a href="language.types.string.php" class="type string">string</a></span> literals may require to be escaped.
      </p>
      <p class="para">
       When working with a replacement pattern where a backreference is 
       immediately followed by another number (i.e.: placing a literal number
       immediately after a matched pattern), you cannot use the familiar 
       <code class="literal">\1</code> notation for your backreference.  
       <code class="literal">\11</code>, for example, would confuse
       <span class="function"><strong>preg_replace()</strong></span> since it does not know whether you
       want the <code class="literal">\1</code> backreference followed by a literal 
       <code class="literal">1</code>, or the <code class="literal">\11</code> backreference
       followed by nothing.  In this case the solution is to use 
       <code class="literal">${1}1</code>.  This creates an isolated
       <code class="literal">$1</code> backreference, leaving the <code class="literal">1</code>
       as a literal.
      </p>
      <p class="para">
       When using the deprecated <code class="literal">e</code> modifier, this function escapes
       some characters (namely <code class="literal">&#039;</code>, <code class="literal">&quot;</code>,
       <code class="literal">\</code> and NULL) in the strings that replace the
       backreferences. This is done to ensure that no syntax errors arise
       from backreference usage with either single or double quotes (e.g.
       <code class="literal">&#039;strlen(\&#039;$1\&#039;)+strlen(&quot;$2&quot;)&#039;</code>). Make sure you are
       aware of PHP&#039;s <a href="language.types.string.php" class="link">string
       syntax</a> to know exactly how the interpreted string will look.
      </p>
     </dd>
    
    
     <dt><code class="parameter">subject</code></dt>
     <dd>
      <p class="para">
       The string or an array with strings to search and replace.
      </p>
      <p class="para">
       If <code class="parameter">subject</code> is an array, then the search and
       replace is performed on every entry of <code class="parameter">subject</code>,
       and the return value is an array as well.
      </p>
      <p class="para">
       If the <code class="parameter">subject</code> array is associative, keys
       will be preserved in the returned value.
      </p>
     </dd>
    
    
     <dt><code class="parameter">limit</code></dt>
     <dd>
      <p class="para">
       The maximum possible replacements for each pattern in each
       <code class="parameter">subject</code> string. Defaults to
       <code class="literal">-1</code> (no limit).
      </p>
     </dd>
    
    
     <dt><code class="parameter">count</code></dt>
     <dd>
      <p class="para">
       If specified, this variable will be filled with the number of
       replacements done.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.preg-replace-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>preg_replace()</strong></span> returns an array if the
   <code class="parameter">subject</code> parameter is an array, or a string
   otherwise.
  </p>
  <p class="para">
   If matches are found, the new <code class="parameter">subject</code> will
   be returned, otherwise <code class="parameter">subject</code> will be
   returned unchanged or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if an error occurred.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.preg-replace-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Using the &quot;\e&quot; modifier is an error;
   an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted in this case.
  </p>
  <p class="para">
If the regex pattern passed does not compile to a valid regex, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.preg-replace-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5037">
    <p><strong>Example #1 Using backreferences followed by numeric literals</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= </span><span style="color: #DD0000">'April 15, 2003'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$pattern </span><span style="color: #007700">= </span><span style="color: #DD0000">'/(\w+) (\d+), (\d+)/i'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$replacement </span><span style="color: #007700">= </span><span style="color: #DD0000">'${1}1,$3'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">, </span><span style="color: #0000BB">$replacement</span><span style="color: #007700">, </span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">April1,2003</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5038">
    <p><strong>Example #2 Using indexed arrays with <span class="function"><strong>preg_replace()</strong></span></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= </span><span style="color: #DD0000">'The quick brown fox jumps over the lazy dog.'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$patterns </span><span style="color: #007700">= array();<br /></span><span style="color: #0000BB">$patterns</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] = </span><span style="color: #DD0000">'/quick/'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$patterns</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #DD0000">'/brown/'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$patterns</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">] = </span><span style="color: #DD0000">'/fox/'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$replacements </span><span style="color: #007700">= array();<br /></span><span style="color: #0000BB">$replacements</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">] = </span><span style="color: #DD0000">'bear'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$replacements</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #DD0000">'black'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$replacements</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] = </span><span style="color: #DD0000">'slow'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$patterns</span><span style="color: #007700">, </span><span style="color: #0000BB">$replacements</span><span style="color: #007700">, </span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">The bear black slow jumps over the lazy dog.</pre>
</div>
    </div>
    <div class="example-contents"><p>
     By ksorting patterns and replacements, we should get what we wanted.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= </span><span style="color: #DD0000">'The quick brown fox jumps over the lazy dog.'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$patterns </span><span style="color: #007700">= array();<br /></span><span style="color: #0000BB">$patterns</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] = </span><span style="color: #DD0000">'/quick/'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$patterns</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #DD0000">'/brown/'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$patterns</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">] = </span><span style="color: #DD0000">'/fox/'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$replacements </span><span style="color: #007700">= array();<br /></span><span style="color: #0000BB">$replacements</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">] = </span><span style="color: #DD0000">'bear'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$replacements</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #DD0000">'black'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$replacements</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] = </span><span style="color: #DD0000">'slow'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">ksort</span><span style="color: #007700">(</span><span style="color: #0000BB">$patterns</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ksort</span><span style="color: #007700">(</span><span style="color: #0000BB">$replacements</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$patterns</span><span style="color: #007700">, </span><span style="color: #0000BB">$replacements</span><span style="color: #007700">, </span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">The slow black bear jumps over the lazy dog.</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5039">
    <p><strong>Example #3 Replacing several values</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$patterns </span><span style="color: #007700">= array (</span><span style="color: #DD0000">'/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/'</span><span style="color: #007700">,<br />                   </span><span style="color: #DD0000">'/^\s*{(\w+)}\s*=/'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$replace </span><span style="color: #007700">= array (</span><span style="color: #DD0000">'\3/\4/\1\2'</span><span style="color: #007700">, </span><span style="color: #DD0000">'$\1 ='</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$patterns</span><span style="color: #007700">, </span><span style="color: #0000BB">$replace</span><span style="color: #007700">, </span><span style="color: #DD0000">'{startDate} = 1999-5-27'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">$startDate = 5/27/1999</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5040">
    <p><strong>Example #4 Strip whitespace</strong></p>
    <div class="example-contents"><p>
     This example strips excess whitespace from a string.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'foo   o'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s\s+/'</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">, </span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// This will be 'foo o' now<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5041">
    <p><strong>Example #5 Using the <code class="parameter">count</code> parameter</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$count </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'/\d/'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/\s/'</span><span style="color: #007700">), </span><span style="color: #DD0000">'*'</span><span style="color: #007700">, </span><span style="color: #DD0000">'xp 4 to'</span><span style="color: #007700">, -</span><span style="color: #0000BB">1 </span><span style="color: #007700">, </span><span style="color: #0000BB">$count</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$count</span><span style="color: #007700">; </span><span style="color: #FF8000">//3<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">xp***to
3</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.preg-replace-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When using arrays with <code class="parameter">pattern</code> and
    <code class="parameter">replacement</code>, the keys are processed in the order
    they appear in the array. This is <em>not necessarily</em> the
    same as the numerical index order. If you use indexes to identify which
    <code class="parameter">pattern</code> should be replaced by which
    <code class="parameter">replacement</code>, you should perform a
    <span class="function"><a href="function.ksort.php" class="function">ksort()</a></span> on each array prior to calling
    <span class="function"><strong>preg_replace()</strong></span>.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When both <code class="parameter">pattern</code> and <code class="parameter">replacement</code> are
    arrays, matching rules will operate sequentially.  That is, the second <code class="parameter">pattern</code>/<code class="parameter">replacement</code>
    pair will operate on the string that results from the first <code class="parameter">pattern</code>/<code class="parameter">replacement</code>
    pair, not the original string. If you want to simulate replacements operating in parallel,
    such as swapping two values, replace one pattern by an intermediary placeholder, then in a
    later pair replace that intermediary placeholder with the desired replacement.
   </p>
   <div class="informalexample">
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$p </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'/a/'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/b/'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/c/'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$r </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'c'</span><span style="color: #007700">, </span><span style="color: #DD0000">'d'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">, </span><span style="color: #0000BB">$r</span><span style="color: #007700">, </span><span style="color: #DD0000">'a'</span><span style="color: #007700">));<br /></span><span style="color: #FF8000">// prints d<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.preg-replace-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="pcre.pattern.php" class="link">PCRE Patterns</a></li>
    <li><span class="function"><a href="function.preg-quote.php" class="function" rel="rdfs-seeAlso">preg_quote()</a> - Quote regular expression characters</span></li>
    <li><span class="function"><a href="function.preg-filter.php" class="function" rel="rdfs-seeAlso">preg_filter()</a> - Perform a regular expression search and replace</span></li>
    <li><span class="function"><a href="function.preg-match.php" class="function" rel="rdfs-seeAlso">preg_match()</a> - Perform a regular expression match</span></li>
    <li><span class="function"><a href="function.preg-replace-callback.php" class="function" rel="rdfs-seeAlso">preg_replace_callback()</a> - Perform a regular expression search and replace using a callback</span></li>
    <li><span class="function"><a href="function.preg-split.php" class="function" rel="rdfs-seeAlso">preg_split()</a> - Split string by a regular expression</span></li>
    <li><span class="function"><a href="function.preg-last-error.php" class="function" rel="rdfs-seeAlso">preg_last_error()</a> - Returns the error code of the last PCRE regex execution</span></li>
    <li><span class="function"><a href="function.str-replace.php" class="function" rel="rdfs-seeAlso">str_replace()</a> - Replace all occurrences of the search string with the replacement string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/functions/preg-replace.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.preg-replace%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.preg-replace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.preg-replace.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="89364">  <div class="votes">
    <div id="Vu89364">
    <a href="/manual/vote-note.php?id=89364&amp;page=function.preg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89364">
    <a href="/manual/vote-note.php?id=89364&amp;page=function.preg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89364" title="87% like this...">
    794
    </div>
  </div>
  <a href="#89364" class="name">
  <strong class="user"><em>arkani at iol dot pt</em></strong></a><a class="genanchor" href="#89364"> &para;</a><div class="date" title="2009-03-04 11:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89364">
<div class="phpcode"><code><span class="html">Because i search a lot 4 this:<br /><br />The following should be escaped if you are trying to match that character<br /><br />\ ^ . $ | ( ) [ ]<br />* + ? { } ,<br /><br />Special Character Definitions<br />\ Quote the next metacharacter<br />^ Match the beginning of the line<br />. Match any character (except newline)<br />$ Match the end of the line (or before newline at the end)<br />| Alternation<br />() Grouping<br />[] Character class<br />* Match 0 or more times<br />+ Match 1 or more times<br />? Match 1 or 0 times<br />{n} Match exactly n times<br />{n,} Match at least n times<br />{n,m} Match at least n but not more than m times<br />More Special Character Stuff<br />\t tab (HT, TAB)<br />\n newline (LF, NL)<br />\r return (CR)<br />\f form feed (FF)<br />\a alarm (bell) (BEL)<br />\e escape (think troff) (ESC)<br />\033 octal char (think of a PDP-11)<br />\x1B hex char<br />\c[ control char<br />\l lowercase next char (think vi)<br />\u uppercase next char (think vi)<br />\L lowercase till \E (think vi)<br />\U uppercase till \E (think vi)<br />\E end case modification (think vi)<br />\Q quote (disable) pattern metacharacters till \E<br />Even More Special Characters<br />\w Match a "word" character (alphanumeric plus "_")<br />\W Match a non-word character<br />\s Match a whitespace character<br />\S Match a non-whitespace character<br />\d Match a digit character<br />\D Match a non-digit character<br />\b Match a word boundary<br />\B Match a non-(word boundary)<br />\A Match only at beginning of string<br />\Z Match only at end of string, or before newline at the end<br />\z Match only at end of string<br />\G Match only where previous m//g left off (works only with /g)</span></code></div>
  </div>
 </div>
  <div class="note" id="129345">  <div class="votes">
    <div id="Vu129345">
    <a href="/manual/vote-note.php?id=129345&amp;page=function.preg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129345">
    <a href="/manual/vote-note.php?id=129345&amp;page=function.preg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129345" title="100% like this...">
    7
    </div>
  </div>
  <a href="#129345" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#129345"> &para;</a><div class="date" title="2024-03-22 02:02"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129345">
<div class="phpcode"><code><span class="html">You can only use numeric backreferences in the replacement string, but not named ones:<br /><span class="default">&lt;?php <br /></span><span class="keyword">echo </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'#(\d+)#'</span><span class="keyword">, </span><span class="string">'\1 $1 ${1}'</span><span class="keyword">, </span><span class="string">'123'</span><span class="keyword">);<br /></span><span class="comment">// 123 123 123<br /></span><span class="keyword">echo </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'#(?&lt;digits&gt;\d+)#'</span><span class="keyword">, </span><span class="string">'\digits $digits ${digits}'</span><span class="keyword">, </span><span class="string">'123'</span><span class="keyword">);<br /></span><span class="comment">// \digits $digits ${digits}<br /></span><span class="default">?&gt;<br /></span><br />To use named backreferences, you have to use preg_replace_callback:<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">'#(?&lt;digits&gt;\d+)#'</span><span class="keyword">, function( </span><span class="default">$m </span><span class="keyword">){<br />  return </span><span class="string">"</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]</span><span class="string"> </span><span class="default">$m</span><span class="keyword">[</span><span class="default">digits</span><span class="keyword">]</span><span class="string"> </span><span class="keyword">{</span><span class="default">$m</span><span class="keyword">[</span><span class="string">'digits'</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">;<br />}, </span><span class="string">'123'</span><span class="keyword">);<br /></span><span class="comment">// 123 123 123<br /><br /></span><span class="keyword">echo </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">'#(?&lt;digits&gt;\d+)#'</span><span class="keyword">, fn(</span><span class="default">$m</span><span class="keyword">) =&gt; </span><span class="string">"</span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]</span><span class="string"> </span><span class="default">$m</span><span class="keyword">[</span><span class="default">digits</span><span class="keyword">]</span><span class="string"> </span><span class="keyword">{</span><span class="default">$m</span><span class="keyword">[</span><span class="string">'digits'</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">, </span><span class="string">'123'</span><span class="keyword">);<br /></span><span class="comment">// 123 123 123<br /></span><span class="default">?&gt;<br /></span><br />See <a href="https://bugs.php.net/bug.php?id=81469" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=81469</a></span></code></div>
  </div>
 </div>
  <div class="note" id="111695">  <div class="votes">
    <div id="Vu111695">
    <a href="/manual/vote-note.php?id=111695&amp;page=function.preg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111695">
    <a href="/manual/vote-note.php?id=111695&amp;page=function.preg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111695" title="59% like this...">
    5
    </div>
  </div>
  <a href="#111695" class="name">
  <strong class="user"><em>nik at rolls dot cc</em></strong></a><a class="genanchor" href="#111695"> &para;</a><div class="date" title="2013-03-17 10:14"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111695">
<div class="phpcode"><code><span class="html">To split Pascal/CamelCase into Title Case (for example, converting descriptive class names for use in human-readable frontends), you can use the below function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">expandCamelCase</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">) {<br />  return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/(?&lt;!^)([A-Z][a-z]|(?&lt;=[a-z])[^a-z]|(?&lt;=[A-Z])[0-9_])/'</span><span class="keyword">, </span><span class="string">' $1'</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Before:<br />  ExpandCamelCaseAPIDescriptorPHP5_3_4Version3_21Beta<br />After:<br />  Expand Camel Case API Descriptor PHP 5_3_4 Version 3_21 Beta</span></code></div>
  </div>
 </div>
  <div class="note" id="74037">  <div class="votes">
    <div id="Vu74037">
    <a href="/manual/vote-note.php?id=74037&amp;page=function.preg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74037">
    <a href="/manual/vote-note.php?id=74037&amp;page=function.preg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74037" title="52% like this...">
    1
    </div>
  </div>
  <a href="#74037" class="name">
  <strong class="user"><em>ismith at nojunk dot motorola dot com</em></strong></a><a class="genanchor" href="#74037"> &para;</a><div class="date" title="2007-03-21 09:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74037">
<div class="phpcode"><code><span class="html">Be aware that when using the "/u" modifier, if your input text contains any bad UTF-8 code sequences, then preg_replace will return an empty string, regardless of whether there were any matches.<br /><br />This is due to the PCRE library returning an error code if the string contains bad UTF-8.</span></code></div>
  </div>
 </div>
  <div class="note" id="77317">  <div class="votes">
    <div id="Vu77317">
    <a href="/manual/vote-note.php?id=77317&amp;page=function.preg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77317">
    <a href="/manual/vote-note.php?id=77317&amp;page=function.preg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77317" title="52% like this...">
    1
    </div>
  </div>
  <a href="#77317" class="name">
  <strong class="user"><em>sternkinder at gmail dot com</em></strong></a><a class="genanchor" href="#77317"> &para;</a><div class="date" title="2007-08-24 03:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77317">
<div class="phpcode"><code><span class="html">From what I can see, the problem is, that if you go straight and substitute all 'A's wit 'T's you can't tell for sure which 'T's to substitute with 'A's afterwards. This can be for instance solved by simply replacing all 'A's by another character (for instance '_' or whatever you like), then replacing all 'T's by 'A's, and then replacing all '_'s (or whatever character you chose) by 'A's:
<br />
<br /><span class="default">&lt;?php
<br />$dna </span><span class="keyword">= </span><span class="string">"AGTCTGCCCTAG"</span><span class="keyword">;
<br />echo </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"A"</span><span class="keyword">,</span><span class="string">"G"</span><span class="keyword">,</span><span class="string">"C"</span><span class="keyword">,</span><span class="string">"T"</span><span class="keyword">,</span><span class="string">"_"</span><span class="keyword">,</span><span class="string">"-"</span><span class="keyword">), array(</span><span class="string">"_"</span><span class="keyword">,</span><span class="string">"-"</span><span class="keyword">,</span><span class="string">"G"</span><span class="keyword">,</span><span class="string">"A"</span><span class="keyword">,</span><span class="string">"T"</span><span class="keyword">,</span><span class="string">"C"</span><span class="keyword">), </span><span class="default">$dna</span><span class="keyword">); </span><span class="comment">//output will be TCAGACGGGATC
<br /></span><span class="default">?&gt;
<br /></span>
<br />Although I don't know how transliteration in perl works (though I remember that is kind of similar to the UNIX command "tr") I would suggest following function for "switching" single chars:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">switch_chars</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">,</span><span class="default">$switch_table</span><span class="keyword">,</span><span class="default">$unused_char</span><span class="keyword">=</span><span class="string">"_"</span><span class="keyword">) {
<br />    foreach ( </span><span class="default">$switch_table </span><span class="keyword">as </span><span class="default">$_1 </span><span class="keyword">=&gt; </span><span class="default">$_2 </span><span class="keyword">) {
<br />        </span><span class="default">$subject </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$_1</span><span class="keyword">,</span><span class="default">$unused_char</span><span class="keyword">,</span><span class="default">$subject</span><span class="keyword">);
<br />        </span><span class="default">$subject </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$_2</span><span class="keyword">,</span><span class="default">$_1</span><span class="keyword">,</span><span class="default">$subject</span><span class="keyword">);
<br />        </span><span class="default">$subject </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$unused_char</span><span class="keyword">,</span><span class="default">$_2</span><span class="keyword">,</span><span class="default">$subject</span><span class="keyword">);
<br />    }
<br />    return </span><span class="default">$subject</span><span class="keyword">;
<br />}
<br />
<br />echo </span><span class="default">switch_chars</span><span class="keyword">(</span><span class="string">"AGTCTGCCCTAG"</span><span class="keyword">, array(</span><span class="string">"A"</span><span class="keyword">=&gt;</span><span class="string">"T"</span><span class="keyword">,</span><span class="string">"G"</span><span class="keyword">=&gt;</span><span class="string">"C"</span><span class="keyword">)); </span><span class="comment">//output will be TCAGACGGGATC
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81486">  <div class="votes">
    <div id="Vu81486">
    <a href="/manual/vote-note.php?id=81486&amp;page=function.preg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81486">
    <a href="/manual/vote-note.php?id=81486&amp;page=function.preg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81486" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81486" class="name">
  <strong class="user"><em>php-comments-REMOVE dot ME at dotancohen dot com</em></strong></a><a class="genanchor" href="#81486"> &para;</a><div class="date" title="2008-02-29 12:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81486">
<div class="phpcode"><code><span class="html">Below is a function for converting Hebrew final characters to their<br />normal equivelants should they appear in the middle of a word.<br />The /b argument does not treat Hebrew letters as part of a word,<br />so I had to work around that limitation.<br /><br /><span class="default">&lt;?php<br /><br />$text</span><span class="keyword">=</span><span class="string">"עברית מבולגנת"</span><span class="keyword">;<br /><br />function </span><span class="default">hebrewNotWordEndSwitch </span><span class="keyword">(</span><span class="default">$from</span><span class="keyword">, </span><span class="default">$to</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">) {<br />   </span><span class="default">$text</span><span class="keyword">=<br />    </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$from</span><span class="keyword">.</span><span class="string">'([א-ת])/u'</span><span class="keyword">,</span><span class="string">'$2'</span><span class="keyword">.</span><span class="default">$to</span><span class="keyword">.</span><span class="string">'$1'</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />   return </span><span class="default">$text</span><span class="keyword">;<br />}<br /><br />do {<br />   </span><span class="default">$text_before</span><span class="keyword">=</span><span class="default">$text</span><span class="keyword">;<br />   </span><span class="default">$text</span><span class="keyword">=</span><span class="default">hebrewNotWordEndSwitch</span><span class="keyword">(</span><span class="string">"ך"</span><span class="keyword">,</span><span class="string">"כ"</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />   </span><span class="default">$text</span><span class="keyword">=</span><span class="default">hebrewNotWordEndSwitch</span><span class="keyword">(</span><span class="string">"ם"</span><span class="keyword">,</span><span class="string">"מ"</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />   </span><span class="default">$text</span><span class="keyword">=</span><span class="default">hebrewNotWordEndSwitch</span><span class="keyword">(</span><span class="string">"ן"</span><span class="keyword">,</span><span class="string">"נ"</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />   </span><span class="default">$text</span><span class="keyword">=</span><span class="default">hebrewNotWordEndSwitch</span><span class="keyword">(</span><span class="string">"ף"</span><span class="keyword">,</span><span class="string">"פ"</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />   </span><span class="default">$text</span><span class="keyword">=</span><span class="default">hebrewNotWordEndSwitch</span><span class="keyword">(</span><span class="string">"ץ"</span><span class="keyword">,</span><span class="string">"צ"</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />}   while ( </span><span class="default">$text_before</span><span class="keyword">!=</span><span class="default">$text </span><span class="keyword">);<br /><br />print </span><span class="default">$text</span><span class="keyword">; </span><span class="comment">// עברית מסודרת!<br /><br /></span><span class="default">?&gt;<br /></span><br />The do-while is necessary for multiple instances of letters, such<br />as "אנני" which would start off as "אןןי". Note that there's still the<br />problem of acronyms with gershiim but that's not a difficult one<br />to solve. The code is in use at <a href="http://gibberish.co.il" rel="nofollow" target="_blank">http://gibberish.co.il</a> which you can<br />use to translate wrongly-encoded Hebrew, transliterize, and some<br />other Hebrew-related functions.<br /><br />To ensure that there will be no regular characters at the end of a<br />word, just convert all regular characters to their final forms, then<br />run this function. Enjoy!</span></code></div>
  </div>
 </div>
  <div class="note" id="102589">  <div class="votes">
    <div id="Vu102589">
    <a href="/manual/vote-note.php?id=102589&amp;page=function.preg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102589">
    <a href="/manual/vote-note.php?id=102589&amp;page=function.preg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102589" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#102589" class="name">
  <strong class="user"><em>me at perochak dot com</em></strong></a><a class="genanchor" href="#102589"> &para;</a><div class="date" title="2011-02-22 09:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102589">
<div class="phpcode"><code><span class="html">If you would like to remove a tag along with the text inside it then use the following code.
<br />
<br /><span class="default">&lt;?php
<br />preg_replace</span><span class="keyword">(</span><span class="string">'/(&lt;tag&gt;.+?)+(&lt;\/tag&gt;)/i'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />example
<br /><span class="default">&lt;?php $string</span><span class="keyword">=</span><span class="string">'&lt;span class="normalprice"&gt;55 PKR&lt;/span&gt;'</span><span class="keyword">; </span><span class="default">?&gt;
<br /></span>
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/(&lt;span class="normalprice"&gt;.+?)+(&lt;\/span&gt;)/i'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This will results a null or empty string.
<br />
<br /><span class="default">&lt;?php
<br />$string</span><span class="keyword">=</span><span class="string">'My String &lt;span class="normalprice"&gt;55 PKR&lt;/span&gt;'</span><span class="keyword">;
<br />
<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/(&lt;span class="normalprice"&gt;.+?)+(&lt;\/span&gt;)/i'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This will results a " My String"</span></code></div>
  </div>
 </div>
  <div class="note" id="127704">  <div class="votes">
    <div id="Vu127704">
    <a href="/manual/vote-note.php?id=127704&amp;page=function.preg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127704">
    <a href="/manual/vote-note.php?id=127704&amp;page=function.preg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127704" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#127704" class="name">
  <strong class="user"><em>razvan_bc at yahoo dot com</em></strong></a><a class="genanchor" href="#127704"> &para;</a><div class="date" title="2022-10-08 10:11"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127704">
<div class="phpcode"><code><span class="html">How to replace all comments inside code without remove crln  = \r\n or cr \r each line?<br /><br /><span class="default">&lt;?php<br />$txt_target</span><span class="keyword">=&lt;&lt;&lt;t1<br /></span><span class="string">this;//    dsdsds<br />    nope<br />    <br />/*<br />    ok<br />    */<br />is;huge<br />/*text bla*/<br />    /*bla*/<br /> <br /></span><span class="keyword">t1;<br /><br /></span><span class="comment">/*<br />=======================================================================<br />expected result:<br />=======================================================================<br />this;<br />    nope<br /><br />is;huge<br />=======================================================================<br />visualizing in a hex viewer .. to_check_with_a_hex_viewer.txt ...<br /> t  h  i  s  ; LF TAB n  o  p  e CR LF CR LF  i  s  ;  h  u  g  e CR LF<br />74 68 69 73 3b 0a 09 6e 6f 70 65 0d 0a 0d 0a 69 73 3b 68 75 67 65 0d 0a<br />I used F3 (viewer + options 3: hex) in mythical TOTAL COMMANDER!<br />=======================================================================<br />*/<br /><br /></span><span class="keyword">echo </span><span class="string">'&lt;hr&gt;&lt;pre&gt;'</span><span class="keyword">;<br />echo  </span><span class="default">$txt_target</span><span class="keyword">;<br />echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">//  a single line '//' comments<br /></span><span class="default">$txt_target </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'![ \t]*//.*[ \t]*!'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$txt_target</span><span class="keyword">);<br /><br /></span><span class="comment">//  /* comment */<br /></span><span class="default">$txt_target </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\/\*([^\/]*)\*\/(\s+)/smi'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$txt_target</span><span class="keyword">);<br />echo </span><span class="string">'&lt;hr&gt;&lt;pre&gt;'</span><span class="keyword">;<br />echo  </span><span class="default">$txt_target</span><span class="keyword">;<br />echo </span><span class="string">'&lt;/pre&gt;&lt;hr&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">'to_check_with_a_hex_viewer.txt'</span><span class="keyword">,</span><span class="default">$txt_target</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122778">  <div class="votes">
    <div id="Vu122778">
    <a href="/manual/vote-note.php?id=122778&amp;page=function.preg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122778">
    <a href="/manual/vote-note.php?id=122778&amp;page=function.preg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122778" title="43% like this...">
    -4
    </div>
  </div>
  <a href="#122778" class="name">
  <strong class="user"><em>bublifuk at mailinator dot com</em></strong></a><a class="genanchor" href="#122778"> &para;</a><div class="date" title="2018-05-30 03:36"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122778">
<div class="phpcode"><code><span class="html">A delimiter can be any ASCII non-alphanumeric, non-backslash, non-whitespace character:  !"#$%&amp;'*+,./:;=?@^_`|~-  and  ({[&lt;&gt;]})</span></code></div>
  </div>
 </div>
  <div class="note" id="124391">  <div class="votes">
    <div id="Vu124391">
    <a href="/manual/vote-note.php?id=124391&amp;page=function.preg-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124391">
    <a href="/manual/vote-note.php?id=124391&amp;page=function.preg-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124391" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#124391" class="name">
  <strong class="user"><em>mail at johanvandemerwe dot nl</em></strong></a><a class="genanchor" href="#124391"> &para;</a><div class="date" title="2019-11-13 12:41"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124391">
<div class="phpcode"><code><span class="html">Sample for replacing bracketed short-codes<br /><br />The used short-codes are purely used for educational purposes for they could be shorter as in 'italic' to 'i' or 'bold' to 'b'.<br /><br />Sample text<br />----<br />This sample shows how to have [italic]italic[/italic], [bold]bold[/bold] and [underline]underlined[/underline] and [strikethrough]striked[/striketrhough] text. <br /><br />with this function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">textDecoration</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">)<br />{<br />    </span><span class="default">$patterns </span><span class="keyword">= [<br />        </span><span class="string">'/\[(italic)\].*?\[\/\1\] ?/'</span><span class="keyword">,<br />        </span><span class="string">'/\[(bold)\].*?\[\/\1\] ?/'</span><span class="keyword">,<br />        </span><span class="string">'/\[(underline)\].*?\[\/\1\] ?/'<br />    </span><span class="keyword">];<br /><br />    </span><span class="default">$replacements </span><span class="keyword">= [<br />        </span><span class="string">'&lt;i&gt;$1&lt;/i&gt;'</span><span class="keyword">,<br />        </span><span class="string">'&lt;strong&gt;$1&lt;/strong&gt;'</span><span class="keyword">,<br />        </span><span class="string">'&lt;u&gt;$1&lt;/u&gt;'<br />    </span><span class="keyword">];<br /><br />    return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$patterns</span><span class="keyword">, </span><span class="default">$replacements</span><span class="keyword">, </span><span class="default">$html</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$html </span><span class="keyword">= </span><span class="default">textDecoration</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);<br /><br />echo </span><span class="default">$html</span><span class="keyword">; </span><span class="comment">// or return<br /></span><span class="default">?&gt;<br /></span><br />results in:<br />----<br />This sample shows how to have &lt;i&gt;italic&lt;/i&gt;, &lt;b&gt;bold&lt;/b&gt; and &lt;u&gt;underlined&lt;/u&gt; and [strikethrough]striked[/striketrhough] text.<br /><br />Notice!<br />There is no [strikethrough]striked[/striketrhough] fallback in the patterns and replacements array</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.preg-replace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.preg-replace.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.pcre.php">PCRE Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.preg-filter.php" title="preg_&#8203;filter">preg_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-grep.php" title="preg_&#8203;grep">preg_&#8203;grep</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-last-error.php" title="preg_&#8203;last_&#8203;error">preg_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-last-error-msg.php" title="preg_&#8203;last_&#8203;error_&#8203;msg">preg_&#8203;last_&#8203;error_&#8203;msg</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-match.php" title="preg_&#8203;match">preg_&#8203;match</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-match-all.php" title="preg_&#8203;match_&#8203;all">preg_&#8203;match_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-quote.php" title="preg_&#8203;quote">preg_&#8203;quote</a>
                        </li>
                                                <li class="current">
                            <a href="function.preg-replace.php" title="preg_&#8203;replace">preg_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-replace-callback.php" title="preg_&#8203;replace_&#8203;callback">preg_&#8203;replace_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-replace-callback-array.php" title="preg_&#8203;replace_&#8203;callback_&#8203;array">preg_&#8203;replace_&#8203;callback_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-split.php" title="preg_&#8203;split">preg_&#8203;split</a>
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
