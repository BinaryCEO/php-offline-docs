<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: preg_replace_callback - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.preg-replace-callback.php">
 <link rel="shorturl" href="https://www.php.net/preg-replace-callback">
 <link rel="alternate" href="https://www.php.net/preg-replace-callback" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pcre.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.preg-replace.php">
 <link rel="next" href="https://www.php.net/manual/en/function.preg-replace-callback-array.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.preg-replace-callback.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.preg-replace-callback.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.preg-replace-callback.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.preg-replace-callback.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.preg-replace-callback.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.preg-replace-callback.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.preg-replace-callback.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.preg-replace-callback.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.preg-replace-callback.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.preg-replace-callback.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.preg-replace-callback.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Perform a regular expression search and replace using a callback" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: preg_replace_callback - Manual" />
<meta name="twitter:description" content="Perform a regular expression search and replace using a callback" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: preg_replace_callback - Manual" />
<meta itemprop="description" content="Perform a regular expression search and replace using a callback" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Perform a regular expression search and replace using a callback" />

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
        <a href="function.preg-replace-callback-array.php">
          preg_replace_callback_array &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.preg-replace.php">
          &laquo; preg_replace        </a>
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
            <option value='en/function.preg-replace-callback.php' selected="selected">English</option>
            <option value='de/function.preg-replace-callback.php'>German</option>
            <option value='es/function.preg-replace-callback.php'>Spanish</option>
            <option value='fr/function.preg-replace-callback.php'>French</option>
            <option value='it/function.preg-replace-callback.php'>Italian</option>
            <option value='ja/function.preg-replace-callback.php'>Japanese</option>
            <option value='pt_BR/function.preg-replace-callback.php'>Brazilian Portuguese</option>
            <option value='ru/function.preg-replace-callback.php'>Russian</option>
            <option value='tr/function.preg-replace-callback.php'>Turkish</option>
            <option value='uk/function.preg-replace-callback.php'>Ukrainian</option>
            <option value='zh/function.preg-replace-callback.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.preg-replace-callback" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">preg_replace_callback</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.5, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">preg_replace_callback</span> &mdash; <span class="dc-title">Perform a regular expression search and replace using a callback</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.preg-replace-callback-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>preg_replace_callback</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$pattern</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$subject</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$count</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>

  <p class="para rdfs-comment">
   The behavior of this function is almost identical to
   <span class="function"><a href="function.preg-replace.php" class="function">preg_replace()</a></span>, except for the fact that instead of
   <code class="parameter">replacement</code> parameter, one should specify a
   <code class="parameter">callback</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.preg-replace-callback-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">pattern</code></dt>
     <dd>
      <p class="para">
       The pattern to search for. It can be either a string or an array with
       strings.
      </p>
     </dd>
    
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
       A callback that will be called and passed an array of matched elements
       in the <code class="parameter">subject</code> string. The callback should
       return the replacement string. This is the callback signature:
      </p>
      <p class="para">
       <div class="methodsynopsis dc-description">
        <span class="methodname"><span class="replaceable">handler</span></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$matches</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

      </p>
      <p class="para">
       You&#039;ll often need the <code class="parameter">callback</code> function
       for a <span class="function"><strong>preg_replace_callback()</strong></span> in just one place.
       In this case you can use an
       <a href="functions.anonymous.php" class="link">anonymous function</a> to
       declare the callback within the call to
       <span class="function"><strong>preg_replace_callback()</strong></span>. By doing it this way
       you have all information for the call in one place and do not
       clutter the function namespace with a callback function&#039;s name
       not used anywhere else.
      </p>
      <p class="para">
       <div class="example" id="example-5042">
        <p><strong>Example #1 <span class="function"><strong>preg_replace_callback()</strong></span> and
        anonymous function</strong></p>
        <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* a unix-style command line filter to convert uppercase<br /> * letters at the beginning of paragraphs to lowercase */<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"php://stdin"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">) or die(</span><span style="color: #DD0000">"can't read stdin"</span><span style="color: #007700">);<br />while (!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$line </span><span style="color: #007700">= </span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$line </span><span style="color: #007700">= </span><span style="color: #0000BB">preg_replace_callback</span><span style="color: #007700">(<br />        </span><span style="color: #DD0000">'|&lt;p&gt;\s*\w|'</span><span style="color: #007700">,<br />        function (</span><span style="color: #0000BB">$matches</span><span style="color: #007700">) {<br />            return </span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />        },<br />        </span><span style="color: #0000BB">$line<br />    </span><span style="color: #007700">);<br />    echo </span><span style="color: #0000BB">$line</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

       </div>
      </p>
     </dd>
    
    
     <dt><code class="parameter">subject</code></dt>
     <dd>
      <p class="para">
       The string or an array with strings to search and replace.
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
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">flags</code> can be a combination of the
       <strong><code><a href="pcre.constants.php#constant.preg-offset-capture">PREG_OFFSET_CAPTURE</a></code></strong> and
       <strong><code><a href="pcre.constants.php#constant.preg-unmatched-as-null">PREG_UNMATCHED_AS_NULL</a></code></strong> flags, which influence the
       format of the matches array.
       See the description in <span class="function"><a href="function.preg-match.php" class="function">preg_match()</a></span> for more details.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.preg-replace-callback-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>preg_replace_callback()</strong></span> returns an array if the
   <code class="parameter">subject</code> parameter is an array, or a string
   otherwise. On errors the return value is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>
  </p>
  <p class="para">
   If matches are found, the new subject will be returned, otherwise
   <code class="parameter">subject</code> will be returned unchanged.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.preg-replace-callback-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If the regex pattern passed does not compile to a valid regex, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.preg-replace-callback-changelog">
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
       <td>7.4.0</td>
       <td>
        The <code class="parameter">flags</code> parameter was added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.preg-replace-callback-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5043">
    <p><strong>Example #2 <span class="function"><strong>preg_replace_callback()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// this text was used in 2002<br />// we want to get this up to date for 2003<br /></span><span style="color: #0000BB">$text </span><span style="color: #007700">= </span><span style="color: #DD0000">"April fools day is 04/01/2002\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$text</span><span style="color: #007700">.= </span><span style="color: #DD0000">"Last christmas was 12/24/2001\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// the callback function<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">next_year</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">)<br />{<br />  </span><span style="color: #FF8000">// as usual: $matches[0] is the complete match<br />  // $matches[1] the match for the first subpattern<br />  // enclosed in '(...)' and so on<br />  </span><span style="color: #007700">return </span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">].(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />}<br />echo </span><span style="color: #0000BB">preg_replace_callback</span><span style="color: #007700">(<br />            </span><span style="color: #DD0000">"|(\d{2}/\d{2}/)(\d{4})|"</span><span style="color: #007700">,<br />            </span><span style="color: #DD0000">"next_year"</span><span style="color: #007700">,<br />            </span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">April fools day is 04/01/2003
Last christmas was 12/24/2002</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5044">
    <p><strong>Example #3 <span class="function"><strong>preg_replace_callback()</strong></span> using recursive structure
     to handle encapsulated BB code</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input </span><span style="color: #007700">= </span><span style="color: #DD0000">"plain [indent] deep [indent] deeper [/indent] deep [/indent] plain"</span><span style="color: #007700">;<br /><br />function </span><span style="color: #0000BB">parseTagsRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">)<br />{<br /><br />    </span><span style="color: #0000BB">$regex </span><span style="color: #007700">= </span><span style="color: #DD0000">'#\[indent]((?:[^[]|\[(?!/?indent])|(?R))+)\[/indent]#'</span><span style="color: #007700">;<br /><br />    if (</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">$input </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;div style="margin-left: 10px"&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">].</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />    }<br /><br />    return </span><span style="color: #0000BB">preg_replace_callback</span><span style="color: #007700">(</span><span style="color: #0000BB">$regex</span><span style="color: #007700">, </span><span style="color: #DD0000">'parseTagsRecursive'</span><span style="color: #007700">, </span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$output </span><span style="color: #007700">= </span><span style="color: #0000BB">parseTagsRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.preg-replace-callback-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="pcre.pattern.php" class="link">PCRE Patterns</a></li>
    <li><span class="function"><a href="function.preg-replace-callback-array.php" class="function" rel="rdfs-seeAlso">preg_replace_callback_array()</a> - Perform a regular expression search and replace using callbacks</span></li>
    <li><span class="function"><a href="function.preg-quote.php" class="function" rel="rdfs-seeAlso">preg_quote()</a> - Quote regular expression characters</span></li>
    <li><span class="function"><a href="function.preg-replace.php" class="function" rel="rdfs-seeAlso">preg_replace()</a> - Perform a regular expression search and replace</span></li>
    <li><span class="function"><a href="function.preg-last-error.php" class="function" rel="rdfs-seeAlso">preg_last_error()</a> - Returns the error code of the last PCRE regex execution</span></li>
    <li><a href="functions.anonymous.php" class="link">Anonymous functions</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/functions/preg-replace-callback.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.preg-replace-callback%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.preg-replace-callback&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.preg-replace-callback.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109938">  <div class="votes">
    <div id="Vu109938">
    <a href="/manual/vote-note.php?id=109938&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109938">
    <a href="/manual/vote-note.php?id=109938&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109938" title="83% like this...">
    105
    </div>
  </div>
  <a href="#109938" class="name">
  <strong class="user"><em>Richard</em></strong></a><a class="genanchor" href="#109938"> &para;</a><div class="date" title="2012-09-04 10:59"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109938">
<div class="phpcode"><code><span class="html">The easiest way to pass more than one parameters to the callback function is with the 'use' keyword. 
<br />
<br />[This is better than using global, because it works even when we are already inside a function.]
<br />
<br />In this example, the callback function is an anonymous function, which takes one argument, $match, supplied by preg_replace_callback().  The extra 
<br />"use ($ten)" puts the $ten variable into scope for the function.
<br />
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= </span><span class="string">"Some numbers: one: 1; two: 2; three: 3 end"</span><span class="keyword">;
<br /></span><span class="default">$ten </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;
<br /></span><span class="default">$newstring </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(
<br />    </span><span class="string">'/(\\d+)/'</span><span class="keyword">,
<br />    function(</span><span class="default">$match</span><span class="keyword">) use (</span><span class="default">$ten</span><span class="keyword">) { return ((</span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + </span><span class="default">$ten</span><span class="keyword">)); },
<br />    </span><span class="default">$string
<br />    </span><span class="keyword">);
<br />echo </span><span class="default">$newstring</span><span class="keyword">;
<br /></span><span class="comment">#prints "Some numbers: one: 11; two: 12; three: 13 end";
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75963">  <div class="votes">
    <div id="Vu75963">
    <a href="/manual/vote-note.php?id=75963&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75963">
    <a href="/manual/vote-note.php?id=75963&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75963" title="80% like this...">
    9
    </div>
  </div>
  <a href="#75963" class="name">
  <strong class="user"><em>Sjon at hortensius dot net</em></strong></a><a class="genanchor" href="#75963"> &para;</a><div class="date" title="2007-06-24 04:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75963">
<div class="phpcode"><code><span class="html">preg_replace_callback returns NULL when pcre.backtrack_limit is reached; this sometimes occurs faster then you might expect. No error is raised either; so don't forget to check for NULL yourself</span></code></div>
  </div>
 </div>
  <div class="note" id="110353">  <div class="votes">
    <div id="Vu110353">
    <a href="/manual/vote-note.php?id=110353&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110353">
    <a href="/manual/vote-note.php?id=110353&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110353" title="65% like this...">
    24
    </div>
  </div>
  <a href="#110353" class="name">
  <strong class="user"><em>Yuri</em></strong></a><a class="genanchor" href="#110353"> &para;</a><div class="date" title="2012-10-14 10:27"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110353">
<div class="phpcode"><code><span class="html">If you want to call non-static function inside your class, you can do something like this. <br /><br />For PHP 5.2 use second argument like array($this, 'replace'):<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">test_preg_callback</span><span class="keyword">{<br /><br />  private function </span><span class="default">process</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">){<br />    </span><span class="default">$reg </span><span class="keyword">= </span><span class="string">"/\{([0-9a-zA-Z\- ]+)\:([0-9a-zA-Z\- ]+):?\}/"</span><span class="keyword">;<br />    return </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="default">$reg</span><span class="keyword">, array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'replace'</span><span class="keyword">), </span><span class="default">$text</span><span class="keyword">);<br />  }<br />  <br />  private function </span><span class="default">replace</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">){<br />    if (</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])){<br />      return @</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">](</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);     <br />    }<br />  }  <br />}<br /></span><span class="default">?&gt;<br /></span><br />For PHP 5.3 use second argument like "self::replace":<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">test_preg_callback</span><span class="keyword">{<br /><br />  private function </span><span class="default">process</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">){<br />    </span><span class="default">$reg </span><span class="keyword">= </span><span class="string">"/\{([0-9a-zA-Z\- ]+)\:([0-9a-zA-Z\- ]+):?\}/"</span><span class="keyword">;<br />    return </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="default">$reg</span><span class="keyword">, </span><span class="string">"self::replace"</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />  }<br />  <br />  private function </span><span class="default">replace</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">){<br />    if (</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])){<br />      return @</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">](</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);     <br />    }<br />  }  <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96899">  <div class="votes">
    <div id="Vu96899">
    <a href="/manual/vote-note.php?id=96899&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96899">
    <a href="/manual/vote-note.php?id=96899&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96899" title="66% like this...">
    3
    </div>
  </div>
  <a href="#96899" class="name">
  <strong class="user"><em>Drake</em></strong></a><a class="genanchor" href="#96899"> &para;</a><div class="date" title="2010-03-21 05:48"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96899">
<div class="phpcode"><code><span class="html">The good version of the class PhpHex2Str<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">PhpHex2Str<br /></span><span class="keyword">{<br />    private </span><span class="default">$strings</span><span class="keyword">;<br /><br />    private static function </span><span class="default">x_hex2str</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">) {<br />        </span><span class="default">$hex </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">+=</span><span class="default">2</span><span class="keyword">) {<br />            </span><span class="default">$str</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)));<br />        }<br />        return </span><span class="default">$str</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">decode</span><span class="keyword">(</span><span class="default">$strings </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">strings </span><span class="keyword">= (string) </span><span class="default">$strings</span><span class="keyword">;<br />        return </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">'#\%[a-zA-Z0-9]{2}#'</span><span class="keyword">, </span><span class="string">'PhpHex2Str::x_hex2str'</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">strings</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">// Exemple<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">PhpHex2Str</span><span class="keyword">;<br /><br /></span><span class="default">$strings </span><span class="keyword">= </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">decode</span><span class="keyword">(</span><span class="default">$strings</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$strings</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91950">  <div class="votes">
    <div id="Vu91950">
    <a href="/manual/vote-note.php?id=91950&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91950">
    <a href="/manual/vote-note.php?id=91950&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91950" title="66% like this...">
    3
    </div>
  </div>
  <a href="#91950" class="name">
  <strong class="user"><em>carlos dot ballesteros at softonic dot com</em></strong></a><a class="genanchor" href="#91950"> &para;</a><div class="date" title="2009-07-02 08:02"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91950">
<div class="phpcode"><code><span class="html">A simple function to replace a list of complete words or terms in a string (for PHP 5.3 or above because of the closure):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">replace_words</span><span class="keyword">(</span><span class="default">$list</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">) {<br />    return </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />        </span><span class="string">'/(^|[^\\w\\-])(' </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">, </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'preg_quote'</span><span class="keyword">, </span><span class="default">$list</span><span class="keyword">)) . </span><span class="string">')($|[^\\w\\-])/mi'</span><span class="keyword">,<br />        function(</span><span class="default">$v</span><span class="keyword">) use (</span><span class="default">$callback</span><span class="keyword">) { return </span><span class="default">$v</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="default">$callback</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) . </span><span class="default">$v</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]; },<br />        </span><span class="default">$line<br />    </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example of usage:<br /><span class="default">&lt;?php<br />$list </span><span class="keyword">= array(</span><span class="string">'php'</span><span class="keyword">, </span><span class="string">'apache web server'</span><span class="keyword">);<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">"php and the apache web server work fine together. php-gtk, for example, won't match. apache web servers shouldn't too."</span><span class="keyword">;<br /><br />echo </span><span class="default">replace_words</span><span class="keyword">(</span><span class="default">$list</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, function(</span><span class="default">$v</span><span class="keyword">) {<br />    return </span><span class="string">"&lt;strong&gt;</span><span class="keyword">{</span><span class="default">$v</span><span class="keyword">}</span><span class="string">&lt;/strong&gt;"</span><span class="keyword">;<br />});<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="65182">  <div class="votes">
    <div id="Vu65182">
    <a href="/manual/vote-note.php?id=65182&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65182">
    <a href="/manual/vote-note.php?id=65182&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65182" title="62% like this...">
    2
    </div>
  </div>
  <a href="#65182" class="name">
  <strong class="user"><em>matt at mattsoft dot net</em></strong></a><a class="genanchor" href="#65182"> &para;</a><div class="date" title="2006-04-26 02:16"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65182">
<div class="phpcode"><code><span class="html">it is much better on preformance and better practice to use the preg_replace_callback function instead of preg_replace with the e modifier.<br /><br />function a($text){return($text);}<br /><br />// 2.76 seconds to run 50000 times<br />preg_replace("/\{(.*?)\}/e","a('\\1','\\2','\\3',\$b)",$a);<br /><br />// 0.97 seconds to run 50000 times<br />preg_replace_callback("/\{(.*?)\}/s","a",$a);</span></code></div>
  </div>
 </div>
  <div class="note" id="116810">  <div class="votes">
    <div id="Vu116810">
    <a href="/manual/vote-note.php?id=116810&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116810">
    <a href="/manual/vote-note.php?id=116810&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116810" title="58% like this...">
    5
    </div>
  </div>
  <a href="#116810" class="name">
  <strong class="user"><em>Fredow</em></strong></a><a class="genanchor" href="#116810"> &para;</a><div class="date" title="2015-03-03 03:35"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116810">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">// Nice little function that convert a string to uppercase by keeping the HTMLentities intact.
<br /></span><span class="keyword">public static function </span><span class="default">strtoupper_entities</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {
<br />
<br />    </span><span class="default">$patternMajEntities </span><span class="keyword">= </span><span class="string">'/(\&amp;([A-Z])(ACUTE|CEDIL|CARON|CIRC|GRAVE|ORN|RING|SLASH|TH|TILDE|UML)\;)+/'</span><span class="keyword">;
<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">preg_replace_callback </span><span class="keyword">(</span><span class="default">$patternMajEntities</span><span class="keyword">, 
<br />        function (</span><span class="default">$matches</span><span class="keyword">) {
<br />            return </span><span class="string">"&amp;" </span><span class="keyword">. </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] . </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]) . </span><span class="string">";"</span><span class="keyword">;
<br />        }, </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">));
<br />    
<br />    return </span><span class="default">$str</span><span class="keyword">;
<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112762">  <div class="votes">
    <div id="Vu112762">
    <a href="/manual/vote-note.php?id=112762&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112762">
    <a href="/manual/vote-note.php?id=112762&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112762" title="58% like this...">
    2
    </div>
  </div>
  <a href="#112762" class="name">
  <strong class="user"><em>T-Soloveychik at ya dot ru</em></strong></a><a class="genanchor" href="#112762"> &para;</a><div class="date" title="2013-07-20 02:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112762">
<div class="phpcode"><code><span class="html">Text lines numeration:<br /><span class="default">&lt;?PHP<br /></span><span class="comment">// Multieline text:<br />    </span><span class="default">$Text </span><span class="keyword">= </span><span class="string">"<br />Some <br />Multieline<br />text<br />for<br />numeration"</span><span class="keyword">;<br /><br /></span><span class="comment">// For count:<br />    </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">"LineNUMBER"</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="comment">// Replace linestart on number:<br />    </span><span class="keyword">PRINT </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">"/^/m"</span><span class="keyword">,function ()<br />        {<br />            return </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">"LineNUMBER"</span><span class="keyword">]++.</span><span class="string">"  "</span><span class="keyword">;<br />        },<br />        </span><span class="default">$Text</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />1<br />2 Some<br />3 Multieline<br />4 text<br />5 for<br />6 numeration</span></code></div>
  </div>
 </div>
  <div class="note" id="109074">  <div class="votes">
    <div id="Vu109074">
    <a href="/manual/vote-note.php?id=109074&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109074">
    <a href="/manual/vote-note.php?id=109074&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109074" title="56% like this...">
    4
    </div>
  </div>
  <a href="#109074" class="name">
  <strong class="user"><em>development at HashNotAdam dot com</em></strong></a><a class="genanchor" href="#109074"> &para;</a><div class="date" title="2012-06-19 05:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109074">
<div class="phpcode"><code><span class="html">From PHP 5.3 you can use an anonymous function to pass local variables into the callback.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">public function </span><span class="default">replace_variables</span><span class="keyword">( </span><span class="default">$subject</span><span class="keyword">, </span><span class="default">$otherVars </span><span class="keyword">) {
<br />    </span><span class="default">$linkPatterns </span><span class="keyword">= array(
<br />        </span><span class="string">'/(&lt;a .*)href=(")([^"]*)"([^&gt;]*)&gt;/U'</span><span class="keyword">,
<br />        </span><span class="string">"/(&lt;a .*)href=(')([^']*)'([^&gt;]*)&gt;/U"
<br />    </span><span class="keyword">);
<br />
<br />    </span><span class="default">$callback </span><span class="keyword">= function( </span><span class="default">$matches </span><span class="keyword">) use ( </span><span class="default">$otherVars </span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">replace_callback</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">, </span><span class="default">$otherVars</span><span class="keyword">);
<br />    };
<br />
<br />    return </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">patterns</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">, </span><span class="default">$subject</span><span class="keyword">);
<br />}
<br />
<br />public function </span><span class="default">replace_callback</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">, </span><span class="default">$otherVars</span><span class="keyword">) {
<br />    return </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="default">$otherVars</span><span class="keyword">[</span><span class="string">'myVar'</span><span class="keyword">];
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112451">  <div class="votes">
    <div id="Vu112451">
    <a href="/manual/vote-note.php?id=112451&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112451">
    <a href="/manual/vote-note.php?id=112451&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112451" title="54% like this...">
    1
    </div>
  </div>
  <a href="#112451" class="name">
  <strong class="user"><em>kkatpki</em></strong></a><a class="genanchor" href="#112451"> &para;</a><div class="date" title="2013-06-18 02:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112451">
<div class="phpcode"><code><span class="html">Note that, as of PHP 5.3, it seems that named subpatterns are now included in the matches array by their named key as well as their numerical key.<br /><br />To build off of Chris' previous example, as of PHP 5.3, you *can* do<br /><br /><span class="default">&lt;?php<br /><br />preg_replace_callback</span><span class="keyword">(</span><span class="string">'/(?&lt;char&gt;[a-z])/'</span><span class="keyword">, </span><span class="string">'callback'</span><span class="keyword">, </span><span class="string">'word'</span><span class="keyword">);<br /><br />function </span><span class="default">callback</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />and expect to get $matches['char'] in your function. * BUT ONLY AS OF PHP 5.3 *<br /><br />Please be mindful of this if you intend to support PHP 5.2.</span></code></div>
  </div>
 </div>
  <div class="note" id="98336">  <div class="votes">
    <div id="Vu98336">
    <a href="/manual/vote-note.php?id=98336&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98336">
    <a href="/manual/vote-note.php?id=98336&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98336" title="53% like this...">
    1
    </div>
  </div>
  <a href="#98336" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#98336"> &para;</a><div class="date" title="2010-06-09 12:01"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98336">
<div class="phpcode"><code><span class="html">Created this to fetch the link and name of an anchor tag. I use this when cleaning an HTML email to text. Using regex for HTML is not recommended but for this purpose I see no issue with it. This is not designed to work for nested anchors.<br /><br />A note to keep in mind:<br />I was primarily concerned with valid HTML so if attributes do no use ' or " to contain the values then this will need to be tweaked.<br />If you can edit this to work better, please let me know.<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Replaces anchor tags with text<br /> * - Will search string and replace all anchor tags with text (case insensitive)<br /> * <br /> * How it works:<br /> * - Searches string for an anchor tag, checks to make sure it matches the criteria<br /> *         Anchor search criteria:<br /> *             - 1 - &lt;a (must have the start of the anchor tag )<br /> *             - 2 - Can have any number of spaces or other attributes before and after the href attribute<br /> *             - 3 - Must close the anchor tag<br /> * <br /> * - Once the check has passed it will then replace the anchor tag with the string replacement<br /> * - The string replacement can be customized<br /> * <br /> * Know issue:<br /> * - This will not work for anchors that do not use a ' or " to contain the attributes. <br /> *         (i.e.- &lt;a href=http: //php.net&gt;PHP.net&lt;/a&gt; will not be replaced)<br /> */<br /></span><span class="keyword">function </span><span class="default">replaceAnchorsWithText</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />    </span><span class="comment">/**<br />     * Had to modify $regex so it could post to the site... so I broke it into 6 parts.<br />     */<br />    </span><span class="default">$regex  </span><span class="keyword">= </span><span class="string">'/(&lt;a\s*'</span><span class="keyword">; </span><span class="comment">// Start of anchor tag<br />    </span><span class="default">$regex </span><span class="keyword">.= </span><span class="string">'(.*?)\s*'</span><span class="keyword">; </span><span class="comment">// Any attributes or spaces that may or may not exist<br />    </span><span class="default">$regex </span><span class="keyword">.= </span><span class="string">'href=[\'"]+?\s*(?P&lt;link&gt;\S+)\s*[\'"]+?'</span><span class="keyword">; </span><span class="comment">// Grab the link<br />    </span><span class="default">$regex </span><span class="keyword">.= </span><span class="string">'\s*(.*?)\s*&gt;\s*'</span><span class="keyword">; </span><span class="comment">// Any attributes or spaces that may or may not exist before closing tag <br />    </span><span class="default">$regex </span><span class="keyword">.= </span><span class="string">'(?P&lt;name&gt;\S+)'</span><span class="keyword">; </span><span class="comment">// Grab the name<br />    </span><span class="default">$regex </span><span class="keyword">.= </span><span class="string">'\s*&lt;\/a&gt;)/i'</span><span class="keyword">; </span><span class="comment">// Any number of spaces between the closing anchor tag (case insensitive)<br />    <br />    </span><span class="keyword">if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)) {<br />        </span><span class="comment">// This is what will replace the link (modify to you liking)<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="string">"</span><span class="keyword">{</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">]}</span><span class="string">(</span><span class="keyword">{</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'link'</span><span class="keyword">]}</span><span class="string">)"</span><span class="keyword">;<br />    }<br />    return </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="default">$regex</span><span class="keyword">, </span><span class="string">'replaceAnchorsWithText'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$input  </span><span class="keyword">= </span><span class="string">'Test 1: &lt;a href="http: //php.net1"&gt;PHP.NET1&lt;/a&gt;.&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="default">$input </span><span class="keyword">.= </span><span class="string">'Test 2: &lt;A name="test" HREF=\'HTTP: //PHP.NET2\' target="_blank"&gt;PHP.NET2&lt;/A&gt;.&lt;BR /&gt;'</span><span class="keyword">;<br /></span><span class="default">$input </span><span class="keyword">.= </span><span class="string">'Test 3: &lt;a hRef=http: //php.net3&gt;php.net3&lt;/a&gt;&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="default">$input </span><span class="keyword">.= </span><span class="string">'This last line had nothing to do with any of this'</span><span class="keyword">;<br /><br />echo </span><span class="default">replaceAnchorsWithText</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">).</span><span class="string">'&lt;hr/&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Will output:<br />Test 1: PHP.NET1(http: //php.net1).<br />Test 2: PHP.NET2(HTTP: //PHP.NET2).<br />Test 3: php.net3 (is still an anchor)<br />This last line had nothing to do with any of this</span></code></div>
  </div>
 </div>
  <div class="note" id="98721">  <div class="votes">
    <div id="Vu98721">
    <a href="/manual/vote-note.php?id=98721&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98721">
    <a href="/manual/vote-note.php?id=98721&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98721" title="52% like this...">
    1
    </div>
  </div>
  <a href="#98721" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#98721"> &para;</a><div class="date" title="2010-07-02 07:39"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98721">
<div class="phpcode"><code><span class="html">The pcre.backtrack_limit option (added in PHP 5.2) can trigger a NULL return, with no errors. The default pcre.backtrack_limit value is 100000. If you have a match that exceeds about half this limit it triggers a NULL response.<br />e.g. My limit was at 100000 but 500500 triggered a NULL response. I'm not running unicode but I *guess* PCRE runs in utf-16.</span></code></div>
  </div>
 </div>
  <div class="note" id="128443">  <div class="votes">
    <div id="Vu128443">
    <a href="/manual/vote-note.php?id=128443&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128443">
    <a href="/manual/vote-note.php?id=128443&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128443" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128443" class="name">
  <strong class="user"><em>Evgeny</em></strong></a><a class="genanchor" href="#128443"> &para;</a><div class="date" title="2023-05-02 09:13"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128443">
<div class="phpcode"><code><span class="html">Please note! if you have defined namespace,<br />the usage format must me changed:<br /><br />echo preg_replace_callback(<br />            "|(\d{2}/\d{2}/)(\d{4})|",<br />            __NAMESPACE__ . '\\next_year',<br />            $text);</span></code></div>
  </div>
 </div>
  <div class="note" id="122842">  <div class="votes">
    <div id="Vu122842">
    <a href="/manual/vote-note.php?id=122842&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122842">
    <a href="/manual/vote-note.php?id=122842&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122842" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122842" class="name">
  <strong class="user"><em>steven at nevvix dot com</em></strong></a><a class="genanchor" href="#122842"> &para;</a><div class="date" title="2018-06-15 03:34"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122842">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$format </span><span class="keyword">= &lt;&lt;&lt;SQL<br /></span><span class="string">CREATE DATABASE IF NOT EXISTS :database;<br />GRANT ALL PRIVILEGES ON :database_name.* TO ':user'@':host';<br />SET PASSWORD = PASSWORD(':pass');<br /></span><span class="keyword">SQL;<br /></span><span class="default">$args </span><span class="keyword">= [</span><span class="string">"database"</span><span class="keyword">=&gt;</span><span class="string">"people"</span><span class="keyword">, </span><span class="string">"user"</span><span class="keyword">=&gt;</span><span class="string">"staff"</span><span class="keyword">, </span><span class="string">"pass"</span><span class="keyword">=&gt;</span><span class="string">"pass123"</span><span class="keyword">, </span><span class="string">"host"</span><span class="keyword">=&gt;</span><span class="string">"localhost"</span><span class="keyword">];<br /><br /></span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">"/:(\w+)/"</span><span class="keyword">, function (</span><span class="default">$matches</span><span class="keyword">) use (</span><span class="default">$args</span><span class="keyword">) {<br />    return @</span><span class="default">$args</span><span class="keyword">[</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]] ?: </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />}, </span><span class="default">$format</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />Result:<br /><br />CREATE DATABASE IF NOT EXISTS people;<br />GRANT ALL PRIVILEGES ON :database_name.* TO 'staff'@'localhost';<br />SET PASSWORD = PASSWORD('pass123');<br /><br />The `:database_name` placeholder doesn't exist as a matching key in `$args` so it's returned as is.<br />This way you know you need to correct the array by adding the "database_name" item.<br />*/</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107270">  <div class="votes">
    <div id="Vu107270">
    <a href="/manual/vote-note.php?id=107270&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107270">
    <a href="/manual/vote-note.php?id=107270&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107270" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#107270" class="name">
  <strong class="user"><em>Florian Arndt</em></strong></a><a class="genanchor" href="#107270"> &para;</a><div class="date" title="2012-01-26 12:26"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107270">
<div class="phpcode"><code><span class="html">This small class allows PHP users to read JSON files with include statements in them. For instance the include {{{ "relative/to/including.json" }}} is replaced by the content of the json file located at "relative/to/including.json".<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * Handles JSON files with includes<br />     * Purpose: handle bigger JSON files by featuring "includes"<br />     * <br />     * @author Florian Arndt<br />     */<br />    </span><span class="keyword">class </span><span class="default">JWI </span><span class="keyword">{<br />        </span><span class="comment">/**<br />         * Parses a JSON file and returns its contents<br />         * @param String $filename<br />         */<br />        </span><span class="keyword">static function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) {<br />            if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">))<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'&lt;b&gt;JWI Error: JSON file &lt;tt&gt;'</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">.</span><span class="string">'&lt;/tt&gt; not found!&lt;/b&gt;'</span><span class="keyword">);<br />            </span><span class="default">$content </span><span class="keyword">= </span><span class="default">join</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="default">file</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">));<br />            </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />            </span><span class="comment">/**<br />             * replace<br />             *   include statements<br />             * with<br />             *   content of the file to include<br />             * recursively<br />             */<br />            </span><span class="default">$content </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />                </span><span class="string">'/{{{\s*"\s*(.+)\s*"\s*}}}/'</span><span class="keyword">, </span><span class="comment">// &gt;include file&lt; - pattern<br />                </span><span class="default">create_function</span><span class="keyword">(<br />                    </span><span class="string">'$matches'</span><span class="keyword">, </span><span class="comment">// callback parameter<br />                    </span><span class="default">sprintf</span><span class="keyword">(<br />                        </span><span class="string">'$fn = "%s/".$matches[1];'</span><span class="keyword">.<br />                        </span><span class="string">'return JWI::read($fn);'</span><span class="keyword">,<br />                        </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">))<br />                    )<br />                ),<br />                </span><span class="default">$content<br />            </span><span class="keyword">);<br />            return </span><span class="default">$content</span><span class="keyword">;<br />        }<br />    }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123189">  <div class="votes">
    <div id="Vu123189">
    <a href="/manual/vote-note.php?id=123189&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123189">
    <a href="/manual/vote-note.php?id=123189&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123189" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#123189" class="name">
  <strong class="user"><em>2962051004 at qq dot com</em></strong></a><a class="genanchor" href="#123189"> &para;</a><div class="date" title="2018-10-03 04:03"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123189">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * 将中文转为Html实体<br /> * Turning Chinese into Html entity<br /> * Author QiangGe<br /> * Mail 2962051004@qq.com<br /> *<br />*/<br /><br /></span><span class="default">$str </span><span class="keyword">= &lt;&lt;&lt;EOT<br /></span><span class="string">你好 world<br /></span><span class="keyword">EOT;<br /><br />function </span><span class="default">ChineseToEntity</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br /> return </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />        </span><span class="string">'/[\x{4e00}-\x{9fa5}]/u'</span><span class="keyword">, </span><span class="comment">// utf-8 <br />        // '/[\x7f-\xff]+/', // if gb2312<br />        </span><span class="keyword">function (</span><span class="default">$matches</span><span class="keyword">) {<br />            </span><span class="default">$json </span><span class="keyword">= </span><span class="default">json_encode</span><span class="keyword">(array(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]));<br />            </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\[\"(.*)\"\]/'</span><span class="keyword">, </span><span class="default">$json</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">);<br />            </span><span class="comment">/*<br />             * 通过json_encode函数将中文转为unicode<br />             * 然后用正则取出unicode<br />             * Turn the Chinese into Unicode through the json_encode function, then extract Unicode from regular.<br />             * I think this idea is seamless.<br />            */<br />            </span><span class="keyword">return </span><span class="string">'&amp;#x'</span><span class="keyword">. </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'\\u'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]). </span><span class="string">';'</span><span class="keyword">;<br />        }, </span><span class="default">$str<br />   </span><span class="keyword">);<br />}<br /><br />echo </span><span class="default">ChineseToEntity</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /></span><span class="comment">// &amp;#x4f60;&amp;#x597d; world</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116433">  <div class="votes">
    <div id="Vu116433">
    <a href="/manual/vote-note.php?id=116433&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116433">
    <a href="/manual/vote-note.php?id=116433&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116433" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#116433" class="name">
  <strong class="user"><em>Anteaus</em></strong></a><a class="genanchor" href="#116433"> &para;</a><div class="date" title="2015-01-02 08:54"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116433">
<div class="phpcode"><code><span class="html">Be aware that as of php5.4 you MUST NOT pass variables by reference, as in  '[, int &amp;$count ]' - if you do it will result in a fatal error. <br />I think the writer is trying to say that the function accepts the parameter by reference, but that is not how it reads. -Manual needs updating/clarifying ?</span></code></div>
  </div>
 </div>
  <div class="note" id="96883">  <div class="votes">
    <div id="Vu96883">
    <a href="/manual/vote-note.php?id=96883&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96883">
    <a href="/manual/vote-note.php?id=96883&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96883" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#96883" class="name">
  <strong class="user"><em>Drake</em></strong></a><a class="genanchor" href="#96883"> &para;</a><div class="date" title="2010-03-21 12:05"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96883">
<div class="phpcode"><code><span class="html">Decode Hexa to Strings =)<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">PhpHex2Str<br /></span><span class="keyword">{<br />    private </span><span class="default">$strings</span><span class="keyword">;<br /><br />    private function </span><span class="default">x_hex2str</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">) {<br />        </span><span class="default">$hex </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">+=</span><span class="default">2</span><span class="keyword">) {<br />            </span><span class="default">$str</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)));<br />        }<br />        return </span><span class="default">$str</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">decode</span><span class="keyword">(</span><span class="default">$strings </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">strings </span><span class="keyword">= (string) </span><span class="default">$strings</span><span class="keyword">;<br />        return </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">'#\%[a-zA-Z0-9]{2}#'</span><span class="keyword">, </span><span class="string">'x_hex2str'</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">strings</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">// Example<br /></span><span class="default">$strings </span><span class="keyword">= </span><span class="string">'a %20 b%0A h %27 h %23'</span><span class="keyword">;<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">PhpHex2Str</span><span class="keyword">;<br /></span><span class="default">$strings </span><span class="keyword">= </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">decode</span><span class="keyword">(</span><span class="default">$strings</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$strings</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126865">  <div class="votes">
    <div id="Vu126865">
    <a href="/manual/vote-note.php?id=126865&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126865">
    <a href="/manual/vote-note.php?id=126865&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126865" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#126865" class="name">
  <strong class="user"><em>jobowo</em></strong></a><a class="genanchor" href="#126865"> &para;</a><div class="date" title="2022-02-21 01:36"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126865">
<div class="phpcode"><code><span class="html">Note that when using the 'Use ($variable)' with preg_replace_callback, if you wish the value to be altered by the anonymous function, you must pass the value in by reference. eg preg_replace_callback($pattern, function($matches) use (&amp;$alterThis) { $alterThis+=$something;},$string);</span></code></div>
  </div>
 </div>
  <div class="note" id="100303">  <div class="votes">
    <div id="Vu100303">
    <a href="/manual/vote-note.php?id=100303&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100303">
    <a href="/manual/vote-note.php?id=100303&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100303" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#100303" class="name">
  <strong class="user"><em>alex dot cs00 at yahoo dot ca</em></strong></a><a class="genanchor" href="#100303"> &para;</a><div class="date" title="2010-10-06 02:09"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100303">
<div class="phpcode"><code><span class="html">Don't use this function to fetch BBCode, as explained. If you have some text that runs over 5000 chars (average), it will run out of its limit and makes you download the PHP page. 
<br />
<br />According to this, you should instead use something more advanced yet complex. You will need a function called "str_replace_once()" (search for it), one called "countWord()", the famous "after()", "before()", "between()". 
<br />
<br />str_replace_once does same as str_replace, but only replace first occurence. As for countWord, I guess you know how to count the number of a word occurence. As for after, before and between, this is a function that you may find easily somewhere on the site by a user. Else, you can do it. 
<br />
<br />The following function is able to do all blocks, supposing [code] and [/code], you might wish things between parents dont get parsed, including [code] if inside of another [code]. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">prepareCode</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">, </span><span class="default">$op</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$ix </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$iy </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$nbr_Op </span><span class="keyword">= </span><span class="default">countWord</span><span class="keyword">(</span><span class="default">$op</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);
<br />    while(</span><span class="default">$ix </span><span class="keyword">&lt; </span><span class="default">$nbr_Op</span><span class="keyword">)
<br />    {
<br />        if(</span><span class="default">in_string</span><span class="keyword">(</span><span class="default">$op</span><span class="keyword">, </span><span class="default">before</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">), </span><span class="default">false</span><span class="keyword">))
<br />        {
<br />            </span><span class="comment">// The following piece of code replace the default [tag] by [tag:#]
<br />            </span><span class="default">$code </span><span class="keyword">= </span><span class="default">str_replace_once</span><span class="keyword">(</span><span class="default">$op</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$op</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">).</span><span class="string">':'</span><span class="keyword">.</span><span class="default">$ix</span><span class="keyword">.</span><span class="string">']'</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">); 
<br />            </span><span class="default">$iy</span><span class="keyword">++;
<br />        }
<br />        elseif(</span><span class="default">in_string</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">before</span><span class="keyword">(</span><span class="default">$op</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">), </span><span class="default">false</span><span class="keyword">))
<br />        {
<br />            </span><span class="default">$iy </span><span class="keyword">= </span><span class="default">$iy</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;
<br />            </span><span class="default">$code </span><span class="keyword">= </span><span class="default">str_replace_once</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">).</span><span class="string">':'</span><span class="keyword">.(</span><span class="default">$ix</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">).</span><span class="string">']'</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);
<br />            </span><span class="default">$ix </span><span class="keyword">= </span><span class="default">$ix</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">$ix</span><span class="keyword">++;
<br />    }
<br />    while(</span><span class="default">in_string</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">))
<br />    {
<br />        </span><span class="default">$code </span><span class="keyword">= </span><span class="default">str_replace_once</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">).</span><span class="string">':'</span><span class="keyword">.(</span><span class="default">$iy</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">).</span><span class="string">']'</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);
<br />        </span><span class="default">$iy</span><span class="keyword">=</span><span class="default">$iy</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="default">$code </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'#\\'</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">).</span><span class="string">':-[0-9]\]#i'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);
<br />    if(</span><span class="default">in_string</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$op</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">).</span><span class="string">':0]'</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">) &amp;&amp; !</span><span class="default">in_string</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">).</span><span class="string">':0]'</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">))
<br />    {
<br />        </span><span class="default">$code </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">).</span><span class="string">":0]"</span><span class="keyword">;
<br />    }
<br />    return </span><span class="default">$code</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />$code returns the whole text semi-formated. You only need to use it as :
<br />$code = prepareCode($code="Your text", $op="[tag]" , $end="[/tag]");
<br />Then just replace the parent tags :
<br />str_replace("[tag:0]", "&lt;tag&gt;", $code);
<br />str_replace("[/tag:0]", "&lt;/tag&gt;", $code);
<br />So at the end something like :
<br />[</span></code></div>
  </div>
 </div>
  <div class="note" id="114321">  <div class="votes">
    <div id="Vu114321">
    <a href="/manual/vote-note.php?id=114321&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114321">
    <a href="/manual/vote-note.php?id=114321&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114321" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#114321" class="name">
  <strong class="user"><em>Underdog</em></strong></a><a class="genanchor" href="#114321"> &para;</a><div class="date" title="2014-02-07 03:33"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114321">
<div class="phpcode"><code><span class="html">For the callback I advise only to use a permanent or anonymous function. <br /><br />Depending on the usage you may encounter memory issues when using create_function for the callback possibly due to attempts at being compatible with PHP 5.2 or prior. Some servers  refuse to update their PHP  for whatever reason.<br /><br />Please peruse the create_function documentation for more details regarding its memory usage.<br /><br />Regards.</span></code></div>
  </div>
 </div>
  <div class="note" id="122885">  <div class="votes">
    <div id="Vu122885">
    <a href="/manual/vote-note.php?id=122885&amp;page=function.preg-replace-callback&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122885">
    <a href="/manual/vote-note.php?id=122885&amp;page=function.preg-replace-callback&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122885" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#122885" class="name">
  <strong class="user"><em>tgage at nobigfoot dot com</em></strong></a><a class="genanchor" href="#122885"> &para;</a><div class="date" title="2018-06-26 08:00"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122885">
<div class="phpcode"><code><span class="html">To use variable from the parent scope of the anonymous callback function passed to preg_replace_callback(), utilize the use() parameter.<br /><br />$var1 = "one";<br />$var2 = "two";<br />$line = preg_replace_callback('/^.*$/',<br />            function( $matches ) use ( $var1, $var2 ) {<br />                return( $var1 . " " . $var2 );<br />            }, $line);<br /><br />Will replace the entire string with the concatenated values or $var1 and $var2 ("one two") from the parent scope.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.preg-replace-callback&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.preg-replace-callback.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.preg-replace.php" title="preg_&#8203;replace">preg_&#8203;replace</a>
                        </li>
                                                <li class="current">
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
