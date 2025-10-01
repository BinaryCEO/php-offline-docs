<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: print_r - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.print-r.php">
 <link rel="shorturl" href="https://www.php.net/print-r">
 <link rel="alternate" href="https://www.php.net/print-r" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.isset.php">
 <link rel="next" href="https://www.php.net/manual/en/function.serialize.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.print-r.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.print-r.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.print-r.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.print-r.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.print-r.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.print-r.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.print-r.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.print-r.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.print-r.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.print-r.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.print-r.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prints human-readable information about a variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: print_r - Manual" />
<meta name="twitter:description" content="Prints human-readable information about a variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: print_r - Manual" />
<meta itemprop="description" content="Prints human-readable information about a variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prints human-readable information about a variable" />

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
        <a href="function.serialize.php">
          serialize &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.isset.php">
          &laquo; isset        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.var.php'>Variable handling</a></li>      <li><a href='ref.var.php'>Variable handling Functions</a></li>      </ul>
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
            <option value='en/function.print-r.php' selected="selected">English</option>
            <option value='de/function.print-r.php'>German</option>
            <option value='es/function.print-r.php'>Spanish</option>
            <option value='fr/function.print-r.php'>French</option>
            <option value='it/function.print-r.php'>Italian</option>
            <option value='ja/function.print-r.php'>Japanese</option>
            <option value='pt_BR/function.print-r.php'>Brazilian Portuguese</option>
            <option value='ru/function.print-r.php'>Russian</option>
            <option value='tr/function.print-r.php'>Turkish</option>
            <option value='uk/function.print-r.php'>Ukrainian</option>
            <option value='zh/function.print-r.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.print-r" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">print_r</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">print_r</span> &mdash; <span class="dc-title">
   Prints human-readable information about a variable
  </span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.print-r-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>print_r</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$return</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>print_r()</strong></span> displays information about a variable
   in a way that&#039;s readable by humans.  
  </p>
  <p class="para">
   <span class="function"><strong>print_r()</strong></span>, <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span> and
   <span class="function"><a href="function.var-export.php" class="function">var_export()</a></span> will
   also show protected and private properties of objects.
   Static class members will not be shown.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.print-r-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The expression to be printed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">return</code></dt>
     <dd>
      <p class="para">
       If you would like to capture the output of <span class="function"><strong>print_r()</strong></span>, 
       use the <code class="parameter">return</code> parameter.  When this parameter is set
       to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, <span class="function"><strong>print_r()</strong></span> will return the information rather than print it.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.print-r-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If given a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> or <span class="type"><a href="language.types.float.php" class="type float">float</a></span>,
   the value itself will be printed.  If given an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>, values
   will be presented in a format that shows keys and elements.  Similar
   notation is used for <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s.
  </p>
  <p class="para">
   When the <code class="parameter">return</code> parameter is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, this function
   will return a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>. Otherwise, the return value is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.print-r-changelog">
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
       <td>8.4.0</td>
       <td>
        Return type changed from <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span> to <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></span>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.print-r-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5665">
    <p><strong>Example #1 <span class="function"><strong>print_r()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000">&lt;pre&gt;<br /><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array (</span><span style="color: #DD0000">'a' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'apple'</span><span style="color: #007700">, </span><span style="color: #DD0000">'b' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'banana'</span><span style="color: #007700">, </span><span style="color: #DD0000">'c' </span><span style="color: #007700">=&gt; array (</span><span style="color: #DD0000">'x'</span><span style="color: #007700">, </span><span style="color: #DD0000">'y'</span><span style="color: #007700">, </span><span style="color: #DD0000">'z'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;<br /></span>&lt;/pre&gt;</span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&lt;pre&gt;
Array
(
    [a] =&gt; apple
    [b] =&gt; banana
    [c] =&gt; Array
        (
            [0] =&gt; x
            [1] =&gt; y
            [2] =&gt; z
        )
)
&lt;/pre&gt;</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5666">
    <p><strong>Example #2 <code class="parameter">return</code> parameter example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$b </span><span style="color: #007700">= array (</span><span style="color: #DD0000">'m' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'monkey'</span><span style="color: #007700">, </span><span style="color: #DD0000">'foo' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">, </span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; array (</span><span style="color: #DD0000">'x'</span><span style="color: #007700">, </span><span style="color: #DD0000">'y'</span><span style="color: #007700">, </span><span style="color: #DD0000">'z'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$results </span><span style="color: #007700">= </span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">); </span><span style="color: #FF8000">// $results now contains output from print_r<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$results</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.print-r-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">When the <code class="parameter">return</code> parameter
is used, this function uses internal output buffering prior to PHP 7.1.0, so it cannot be used inside an
<span class="function"><a href="function.ob-start.php" class="function">ob_start()</a></span> callback function.</p></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.print-r-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ob-start.php" class="function" rel="rdfs-seeAlso">ob_start()</a> - Turn on output buffering</span></li>
    <li><span class="function"><a href="function.var-dump.php" class="function" rel="rdfs-seeAlso">var_dump()</a> - Dumps information about a variable</span></li>
    <li><span class="function"><a href="function.var-export.php" class="function" rel="rdfs-seeAlso">var_export()</a> - Outputs or returns a parsable string representation of a variable</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/print-r.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.print-r%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.print-r&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.print-r.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96023">  <div class="votes">
    <div id="Vu96023">
    <a href="/manual/vote-note.php?id=96023&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96023">
    <a href="/manual/vote-note.php?id=96023&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96023" title="70% like this...">
    167
    </div>
  </div>
  <a href="#96023" class="name">
  <strong class="user"><em>liamtoh6 at hotmail dot com</em></strong></a><a class="genanchor" href="#96023"> &para;</a><div class="date" title="2010-02-03 10:01"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96023">
<div class="phpcode"><code><span class="html">I add this function to the global scope on just about every project I do, it makes reading the output of print_r() in a browser infinitely easier.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">print_r2</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">){<br />        echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br />        </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />        echo  </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />It also makes sense in some cases to add an if statement to only display the output in certain scenarios, such as:<br /><br />if(debug==true)<br />if($_SERVER['REMOTE_ADDR'] == '127.0.0.1')</span></code></div>
  </div>
 </div>
  <div class="note" id="121259">  <div class="votes">
    <div id="Vu121259">
    <a href="/manual/vote-note.php?id=121259&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121259">
    <a href="/manual/vote-note.php?id=121259&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121259" title="66% like this...">
    22
    </div>
  </div>
  <a href="#121259" class="name">
  <strong class="user"><em>simivar at gmail dot com</em></strong></a><a class="genanchor" href="#121259"> &para;</a><div class="date" title="2017-06-21 01:31"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121259">
<div class="phpcode"><code><span class="html">I've fixed function wrote by Matt to reverse print_r - it had problems with null values. Created a GIST for that too so please add any future fixes in there instead of this comment section:<br /><a href="https://gist.github.com/simivar/037b13a9bbd53ae5a092d8f6d9828bc3" rel="nofollow" target="_blank">https://gist.github.com/simivar/037b13a9bbd53ae5a092d8f6d9828bc3</a><br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />  * Matt: core<br />  * Trixor: object handling<br />  * lech: Windows suppport<br />  * simivar: null support<br />  *<br />  * @see <a href="http://php.net/manual/en/function.print-r.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.print-r.php</a><br />  **/<br /></span><span class="keyword">function </span><span class="default">print_r_reverse</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) {<br />        </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'#\r?\n#'</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">));<br />        if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">]) != </span><span class="string">'Array' </span><span class="keyword">&amp;&amp; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">] != </span><span class="string">'stdClass Object'</span><span class="keyword">)) {<br />            </span><span class="comment">// bottomed out to something that isn't an array or object<br />            </span><span class="keyword">if (</span><span class="default">$input </span><span class="keyword">=== </span><span class="string">''</span><span class="keyword">) {<br />                return </span><span class="default">null</span><span class="keyword">;<br />            }<br />            <br />            return </span><span class="default">$input</span><span class="keyword">;<br />        } else {<br />            </span><span class="comment">// this is an array or object, lets parse it<br />            </span><span class="default">$match </span><span class="keyword">= array();<br />            if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/(\s{5,})\(/"</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">[ </span><span class="default">1 </span><span class="keyword">], </span><span class="default">$match</span><span class="keyword">)) {<br />                </span><span class="comment">// this is a tested array/recursive call to this function<br />                // take a set of spaces off the beginning<br />                </span><span class="default">$spaces </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[ </span><span class="default">1 </span><span class="keyword">];<br />                </span><span class="default">$spaces_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$spaces</span><span class="keyword">);<br />                </span><span class="default">$lines_total </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">);<br />                for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$lines_total</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                    if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[ </span><span class="default">$i </span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="default">$spaces_length</span><span class="keyword">) == </span><span class="default">$spaces</span><span class="keyword">) {<br />                        </span><span class="default">$lines</span><span class="keyword">[ </span><span class="default">$i </span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[ </span><span class="default">$i </span><span class="keyword">], </span><span class="default">$spaces_length</span><span class="keyword">);<br />                    }<br />                }<br />            }<br />            </span><span class="default">$is_object </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">]) == </span><span class="string">'stdClass Object'</span><span class="keyword">;<br />            </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">); </span><span class="comment">// Array<br />            </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">); </span><span class="comment">// (<br />            </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">); </span><span class="comment">// )<br />            </span><span class="default">$input </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">);<br />            </span><span class="default">$matches </span><span class="keyword">= array();<br />            </span><span class="comment">// make sure we only match stuff with 4 preceding spaces (stuff for this array and not a nested one)<br />            </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/^\s{4}\[(.+?)\] \=\&gt; /m"</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">PREG_OFFSET_CAPTURE </span><span class="keyword">| </span><span class="default">PREG_SET_ORDER</span><span class="keyword">);<br />            </span><span class="default">$pos </span><span class="keyword">= array();<br />            </span><span class="default">$previous_key </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />            </span><span class="default">$in_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />            </span><span class="comment">// store the following in $pos:<br />            // array with key = key of the parsed array's item<br />            // value = array(start position in $in, $end position in $in)<br />            </span><span class="keyword">foreach (</span><span class="default">$matches </span><span class="keyword">as </span><span class="default">$match</span><span class="keyword">) {<br />                </span><span class="default">$key </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[ </span><span class="default">1 </span><span class="keyword">][ </span><span class="default">0 </span><span class="keyword">];<br />                </span><span class="default">$start </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">][ </span><span class="default">1 </span><span class="keyword">] + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">][ </span><span class="default">0 </span><span class="keyword">]);<br />                </span><span class="default">$pos</span><span class="keyword">[ </span><span class="default">$key </span><span class="keyword">] = array(</span><span class="default">$start</span><span class="keyword">, </span><span class="default">$in_length</span><span class="keyword">);<br />                if (</span><span class="default">$previous_key </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">) {<br />                    </span><span class="default">$pos</span><span class="keyword">[ </span><span class="default">$previous_key </span><span class="keyword">][ </span><span class="default">1 </span><span class="keyword">] = </span><span class="default">$match</span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">][ </span><span class="default">1 </span><span class="keyword">] - </span><span class="default">1</span><span class="keyword">;<br />                }<br />                </span><span class="default">$previous_key </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;<br />            }<br />            </span><span class="default">$ret </span><span class="keyword">= array();<br />            foreach (</span><span class="default">$pos </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$where</span><span class="keyword">) {<br />                </span><span class="comment">// recursively see if the parsed out value is an array too<br />                </span><span class="default">$ret</span><span class="keyword">[ </span><span class="default">$key </span><span class="keyword">] = </span><span class="default">print_r_reverse</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$where</span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">], </span><span class="default">$where</span><span class="keyword">[ </span><span class="default">1 </span><span class="keyword">] - </span><span class="default">$where</span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">]));<br />            }<br />            <br />            return </span><span class="default">$is_object </span><span class="keyword">? (object)</span><span class="default">$ret </span><span class="keyword">: </span><span class="default">$ret</span><span class="keyword">;<br />        }<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121706">  <div class="votes">
    <div id="Vu121706">
    <a href="/manual/vote-note.php?id=121706&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121706">
    <a href="/manual/vote-note.php?id=121706&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121706" title="58% like this...">
    3
    </div>
  </div>
  <a href="#121706" class="name">
  <strong class="user"><em>Soaku</em></strong></a><a class="genanchor" href="#121706"> &para;</a><div class="date" title="2017-09-28 04:47"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121706">
<div class="phpcode"><code><span class="html">liamtoh6@hotmail.com posted a function that will echo print_r output with proper new lines in HTML files. He used &lt;pre&gt; for it to work, but that might not be always the best method to go. For example, it is not valid to place &lt;pre&gt; inside &lt;p&gt;.<br /><br />Here is my way to do this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">print_rbr </span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$return </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br />  </span><span class="default">$r </span><span class="keyword">= </span><span class="default">nl2br</span><span class="keyword">(</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">)));<br />  if (</span><span class="default">$return</span><span class="keyword">) return </span><span class="default">$r</span><span class="keyword">;<br />  else echo </span><span class="default">$r</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This function will:<br /><br />- Place &lt;br&gt; where newlines are,<br />- Escape unsecure characters with HTML entities.</span></code></div>
  </div>
 </div>
  <div class="note" id="75872">  <div class="votes">
    <div id="Vu75872">
    <a href="/manual/vote-note.php?id=75872&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75872">
    <a href="/manual/vote-note.php?id=75872&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75872" title="57% like this...">
    10
    </div>
  </div>
  <a href="#75872" class="name">
  <strong class="user"><em>motin at demomusic dot nu</em></strong></a><a class="genanchor" href="#75872"> &para;</a><div class="date" title="2007-06-19 04:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75872">
<div class="phpcode"><code><span class="html">This works around the hacky nature of print_r in return mode (using output buffering for the return mode to work is hacky...):<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />  * An alternative to print_r that unlike the original does not use output buffering with<br />  * the return parameter set to true. Thus, Fatal errors that would be the result of print_r<br />  * in return-mode within ob handlers can be avoided.<br />  *<br />  * Comes with an extra parameter to be able to generate html code. If you need a<br />  * human readable DHTML-based print_r alternative, see <a href="http://krumo.sourceforge.net/" rel="nofollow" target="_blank">http://krumo.sourceforge.net/</a><br />  *<br />  * Support for printing of objects as well as the $return parameter functionality<br />  * added by Fredrik Wollsén (fredrik dot motin at gmail), to make it work as a drop-in<br />  * replacement for print_r (Except for that this function does not output <br />  * paranthesises around element groups... ;) )<br />  *<br />  * Based on return_array() By Matthew Ruivo (mruivo at gmail)<br />  * (<a href="http://se2.php.net/manual/en/function.print-r.php#73436" rel="nofollow" target="_blank">http://se2.php.net/manual/en/function.print-r.php#73436</a>)<br />  */<br /></span><span class="keyword">function </span><span class="default">obsafe_print_r</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$return </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$html </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$level </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">$spaces </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    </span><span class="default">$space </span><span class="keyword">= </span><span class="default">$html </span><span class="keyword">? </span><span class="string">"&amp;nbsp;" </span><span class="keyword">: </span><span class="string">" "</span><span class="keyword">;<br />    </span><span class="default">$newline </span><span class="keyword">= </span><span class="default">$html </span><span class="keyword">? </span><span class="string">"&lt;br /&gt;" </span><span class="keyword">: </span><span class="string">"\n"</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">6</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$spaces </span><span class="keyword">.= </span><span class="default">$space</span><span class="keyword">;<br />    }<br />    </span><span class="default">$tabs </span><span class="keyword">= </span><span class="default">$spaces</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$level</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$tabs </span><span class="keyword">.= </span><span class="default">$spaces</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">)) {<br />        </span><span class="default">$title </span><span class="keyword">= </span><span class="string">"Array"</span><span class="keyword">;<br />    } elseif (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">)) {<br />        </span><span class="default">$title </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">).</span><span class="string">" Object"</span><span class="keyword">;<br />    }<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">$title </span><span class="keyword">. </span><span class="default">$newline </span><span class="keyword">. </span><span class="default">$newline</span><span class="keyword">;<br />    foreach(</span><span class="default">$var </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />            </span><span class="default">$level</span><span class="keyword">++;<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">obsafe_print_r</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">$html</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">);<br />            </span><span class="default">$level</span><span class="keyword">--;<br />        }<br />        </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$tabs </span><span class="keyword">. </span><span class="string">"[" </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">"] =&gt; " </span><span class="keyword">. </span><span class="default">$value </span><span class="keyword">. </span><span class="default">$newline</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">$return</span><span class="keyword">) return </span><span class="default">$output</span><span class="keyword">;<br />      else echo </span><span class="default">$output</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Built on a function earlier posted in these comments as stated in the Doc comment. Cheers! /Fredrik (Motin)</span></code></div>
  </div>
 </div>
  <div class="note" id="121039">  <div class="votes">
    <div id="Vu121039">
    <a href="/manual/vote-note.php?id=121039&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121039">
    <a href="/manual/vote-note.php?id=121039&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121039" title="57% like this...">
    1
    </div>
  </div>
  <a href="#121039" class="name">
  <strong class="user"><em>lech</em></strong></a><a class="genanchor" href="#121039"> &para;</a><div class="date" title="2017-05-02 08:30"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121039">
<div class="phpcode"><code><span class="html">A slight amendment to Matt's awesome print_r_reverse function (Thank You, a life-saver - data recovery :-) . If the output is copied from a Windows system, the end of lines may include the return character "\r" and so the scalar (string) elements will include a trailing "\r" character that isn't suppose to be there. To resolve, replace the first line in the function with...<br /><br /><span class="default">&lt;?php $lines </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'#\r?\n#'</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">)); </span><span class="default">?&gt;<br /></span><br />This will work for both cases (Linux and Windows).<br /><br />I include the entire function below for completeness, but all credit to Matt, the original author, Thank You.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//Author: Matt (<a href="http://us3.php.net/print_r" rel="nofollow" target="_blank">http://us3.php.net/print_r</a>)<br /></span><span class="keyword">function </span><span class="default">print_r_reverse</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">) {<br />    </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'#\r?\n#'</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">));<br />    if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) != </span><span class="string">'Array'</span><span class="keyword">) {<br />        </span><span class="comment">// bottomed out to something that isn't an array<br />        </span><span class="keyword">return </span><span class="default">$in</span><span class="keyword">;<br />    } else {<br />        </span><span class="comment">// this is an array, lets parse it<br />        </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/(\s{5,})\(/"</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$match</span><span class="keyword">)) {<br />            </span><span class="comment">// this is a tested array/recursive call to this function<br />            // take a set of spaces off the beginning<br />            </span><span class="default">$spaces </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />            </span><span class="default">$spaces_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$spaces</span><span class="keyword">);<br />            </span><span class="default">$lines_total </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">);<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$lines_total</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="default">$spaces_length</span><span class="keyword">) == </span><span class="default">$spaces</span><span class="keyword">) {<br />                    </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$spaces_length</span><span class="keyword">);<br />                }<br />            }<br />        }<br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">); </span><span class="comment">// Array<br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">); </span><span class="comment">// (<br />        </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">); </span><span class="comment">// )<br />        </span><span class="default">$in </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">);<br />        </span><span class="comment">// make sure we only match stuff with 4 preceding spaces (stuff for this array and not a nested one)<br />        </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/^\s{4}\[(.+?)\] \=\&gt; /m"</span><span class="keyword">, </span><span class="default">$in</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">PREG_OFFSET_CAPTURE </span><span class="keyword">| </span><span class="default">PREG_SET_ORDER</span><span class="keyword">);<br />        </span><span class="default">$pos </span><span class="keyword">= array();<br />        </span><span class="default">$previous_key </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$in_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">);<br />        </span><span class="comment">// store the following in $pos:<br />        // array with key = key of the parsed array's item<br />        // value = array(start position in $in, $end position in $in)<br />        </span><span class="keyword">foreach (</span><span class="default">$matches </span><span class="keyword">as </span><span class="default">$match</span><span class="keyword">) {<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br />            </span><span class="default">$start </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]);<br />            </span><span class="default">$pos</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = array(</span><span class="default">$start</span><span class="keyword">, </span><span class="default">$in_length</span><span class="keyword">);<br />            if (</span><span class="default">$previous_key </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">) </span><span class="default">$pos</span><span class="keyword">[</span><span class="default">$previous_key</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] - </span><span class="default">1</span><span class="keyword">;<br />            </span><span class="default">$previous_key </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;<br />        }<br />        </span><span class="default">$ret </span><span class="keyword">= array();<br />        foreach (</span><span class="default">$pos </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$where</span><span class="keyword">) {<br />            </span><span class="comment">// recursively see if the parsed out value is an array too<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">print_r_reverse</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">, </span><span class="default">$where</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$where</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] - </span><span class="default">$where</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]));<br />        }<br />        return </span><span class="default">$ret</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93529">  <div class="votes">
    <div id="Vu93529">
    <a href="/manual/vote-note.php?id=93529&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93529">
    <a href="/manual/vote-note.php?id=93529&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93529" title="54% like this...">
    16
    </div>
  </div>
  <a href="#93529" class="name">
  <strong class="user"><em>Matt</em></strong></a><a class="genanchor" href="#93529"> &para;</a><div class="date" title="2009-09-14 12:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93529">
<div class="phpcode"><code><span class="html">Here is another version that parses the print_r() output. I tried the one posted, but I had difficulties with it. I believe it has a problem with nested arrays. This handles nested arrays without issue as far as I can tell. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">print_r_reverse</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">) {
<br />    </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">));
<br />    if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) != </span><span class="string">'Array'</span><span class="keyword">) {
<br />        </span><span class="comment">// bottomed out to something that isn't an array
<br />        </span><span class="keyword">return </span><span class="default">$in</span><span class="keyword">;
<br />    } else {
<br />        </span><span class="comment">// this is an array, lets parse it
<br />        </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/(\s{5,})\(/"</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$match</span><span class="keyword">)) {
<br />            </span><span class="comment">// this is a tested array/recursive call to this function
<br />            // take a set of spaces off the beginning
<br />            </span><span class="default">$spaces </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />            </span><span class="default">$spaces_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$spaces</span><span class="keyword">);
<br />            </span><span class="default">$lines_total </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">);
<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$lines_total</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />                if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="default">$spaces_length</span><span class="keyword">) == </span><span class="default">$spaces</span><span class="keyword">) {
<br />                    </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$spaces_length</span><span class="keyword">);
<br />                }
<br />            }
<br />        }
<br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">); </span><span class="comment">// Array
<br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">); </span><span class="comment">// (
<br />        </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">); </span><span class="comment">// )
<br />        </span><span class="default">$in </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">);
<br />        </span><span class="comment">// make sure we only match stuff with 4 preceding spaces (stuff for this array and not a nested one)
<br />        </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/^\s{4}\[(.+?)\] \=\&gt; /m"</span><span class="keyword">, </span><span class="default">$in</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">PREG_OFFSET_CAPTURE </span><span class="keyword">| </span><span class="default">PREG_SET_ORDER</span><span class="keyword">);
<br />        </span><span class="default">$pos </span><span class="keyword">= array();
<br />        </span><span class="default">$previous_key </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        </span><span class="default">$in_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">);
<br />        </span><span class="comment">// store the following in $pos:
<br />        // array with key = key of the parsed array's item
<br />        // value = array(start position in $in, $end position in $in)
<br />        </span><span class="keyword">foreach (</span><span class="default">$matches </span><span class="keyword">as </span><span class="default">$match</span><span class="keyword">) {
<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];
<br />            </span><span class="default">$start </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]);
<br />            </span><span class="default">$pos</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = array(</span><span class="default">$start</span><span class="keyword">, </span><span class="default">$in_length</span><span class="keyword">);
<br />            if (</span><span class="default">$previous_key </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">) </span><span class="default">$pos</span><span class="keyword">[</span><span class="default">$previous_key</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] - </span><span class="default">1</span><span class="keyword">;
<br />            </span><span class="default">$previous_key </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">$ret </span><span class="keyword">= array();
<br />        foreach (</span><span class="default">$pos </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$where</span><span class="keyword">) {
<br />            </span><span class="comment">// recursively see if the parsed out value is an array too
<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">print_r_reverse</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">, </span><span class="default">$where</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$where</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] - </span><span class="default">$where</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]));
<br />        }
<br />        return </span><span class="default">$ret</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61322">  <div class="votes">
    <div id="Vu61322">
    <a href="/manual/vote-note.php?id=61322&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61322">
    <a href="/manual/vote-note.php?id=61322&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61322" title="57% like this...">
    10
    </div>
  </div>
  <a href="#61322" class="name">
  <strong class="user"><em>reinder at fake-address dot com</em></strong></a><a class="genanchor" href="#61322"> &para;</a><div class="date" title="2006-01-31 09:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61322">
<div class="phpcode"><code><span class="html">I always use this function in my code, because most of my functions return an Array or Boolean :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">printr </span><span class="keyword">( </span><span class="default">$object </span><span class="keyword">, </span><span class="default">$name </span><span class="keyword">= </span><span class="string">'' </span><span class="keyword">) {<br /><br />    print ( </span><span class="string">'\'' </span><span class="keyword">. </span><span class="default">$name </span><span class="keyword">. </span><span class="string">'\' : ' </span><span class="keyword">) ;<br /><br />    if ( </span><span class="default">is_array </span><span class="keyword">( </span><span class="default">$object </span><span class="keyword">) ) {<br />        print ( </span><span class="string">'&lt;pre&gt;' </span><span class="keyword">)  ;<br />        </span><span class="default">print_r </span><span class="keyword">( </span><span class="default">$object </span><span class="keyword">) ; <br />        print ( </span><span class="string">'&lt;/pre&gt;' </span><span class="keyword">) ;<br />    } else {<br />        </span><span class="default">var_dump </span><span class="keyword">( </span><span class="default">$object </span><span class="keyword">) ;<br />    }<br /><br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />( print_r gives no output on FALSE and that can be annoying! )</span></code></div>
  </div>
 </div>
  <div class="note" id="81480">  <div class="votes">
    <div id="Vu81480">
    <a href="/manual/vote-note.php?id=81480&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81480">
    <a href="/manual/vote-note.php?id=81480&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81480" title="54% like this...">
    3
    </div>
  </div>
  <a href="#81480" class="name">
  <strong class="user"><em>anon at anon dot com</em></strong></a><a class="genanchor" href="#81480"> &para;</a><div class="date" title="2008-02-29 10:30"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81480">
<div class="phpcode"><code><span class="html">A slight modification to the previous post to allow for arrays containing mutli line strings. haven't fully tested it with everything, but seems to work great for the stuff i've done so far.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">print_r_reverse</span><span class="keyword">(&amp;</span><span class="default">$output</span><span class="keyword">)<br />{<br />    </span><span class="default">$expecting </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="comment">// 0=nothing in particular, 1=array open paren '(', 2=array element or close paren ')'<br />    </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">$topArray </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">$arrayStack </span><span class="keyword">= array();<br />    </span><span class="default">$matches </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    while (!empty(</span><span class="default">$lines</span><span class="keyword">) &amp;&amp; </span><span class="default">$result </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">);<br />        </span><span class="default">$trim </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">);<br />        if (</span><span class="default">$trim </span><span class="keyword">== </span><span class="string">'Array'</span><span class="keyword">)<br />        {<br />            if (</span><span class="default">$expecting </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">)<br />            {<br />                </span><span class="default">$topArray </span><span class="keyword">= array();<br />                </span><span class="default">$expecting </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />            }<br />            else<br />            {<br />                </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"Unknown array."</span><span class="keyword">);<br />            }<br />        }<br />        else if (</span><span class="default">$expecting </span><span class="keyword">== </span><span class="default">1 </span><span class="keyword">&amp;&amp; </span><span class="default">$trim </span><span class="keyword">== </span><span class="string">'('</span><span class="keyword">)<br />        {<br />            </span><span class="default">$expecting </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />        }<br />        else if (</span><span class="default">$expecting </span><span class="keyword">== </span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^\[(.+?)\] \=\&gt; (.+)$/'</span><span class="keyword">, </span><span class="default">$trim</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)) </span><span class="comment">// array element<br />        </span><span class="keyword">{<br />            list (</span><span class="default">$fullMatch</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$element</span><span class="keyword">) = </span><span class="default">$matches</span><span class="keyword">;<br />            if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">) == </span><span class="string">'Array'</span><span class="keyword">)<br />            {<br />                </span><span class="default">$topArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = array();<br />                </span><span class="default">$newTopArray </span><span class="keyword">=&amp; </span><span class="default">$topArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />                </span><span class="default">$arrayStack</span><span class="keyword">[] =&amp; </span><span class="default">$topArray</span><span class="keyword">;<br />                </span><span class="default">$topArray </span><span class="keyword">=&amp; </span><span class="default">$newTopArray</span><span class="keyword">;<br />                </span><span class="default">$expecting </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />            }<br />            else<br />            {<br />                </span><span class="default">$topArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$element</span><span class="keyword">;<br />            }<br />        }<br />        else if (</span><span class="default">$expecting </span><span class="keyword">== </span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">$trim </span><span class="keyword">== </span><span class="string">')'</span><span class="keyword">) </span><span class="comment">// end current array<br />        </span><span class="keyword">{<br />            if (empty(</span><span class="default">$arrayStack</span><span class="keyword">))<br />            {<br />                </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$topArray</span><span class="keyword">;<br />            }<br />            else </span><span class="comment">// pop into parent array<br />            </span><span class="keyword">{<br />                </span><span class="comment">// safe array pop<br />                </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arrayStack</span><span class="keyword">);<br />                </span><span class="default">$lastKey </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">);<br />                </span><span class="default">$temp </span><span class="keyword">=&amp; </span><span class="default">$arrayStack</span><span class="keyword">[</span><span class="default">$lastKey</span><span class="keyword">];<br />                unset(</span><span class="default">$arrayStack</span><span class="keyword">[</span><span class="default">$lastKey</span><span class="keyword">]);<br />                </span><span class="default">$topArray </span><span class="keyword">=&amp; </span><span class="default">$temp</span><span class="keyword">;<br />            }<br />        }<br />        </span><span class="comment">// Added this to allow for multi line strings.<br />    </span><span class="keyword">else if (!empty(</span><span class="default">$trim</span><span class="keyword">) &amp;&amp; </span><span class="default">$expecting </span><span class="keyword">== </span><span class="default">2</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// Expecting close parent or element, but got just a string<br />        </span><span class="default">$topArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] .= </span><span class="string">"\n"</span><span class="keyword">.</span><span class="default">$line</span><span class="keyword">;<br />    }<br />        else if (!empty(</span><span class="default">$trim</span><span class="keyword">))<br />        {<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$line</span><span class="keyword">;<br />        }<br />    }<br />   <br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">n</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">);<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br /> * @param string $output : The output of a multiple print_r calls, separated by newlines<br /> * @return mixed[] : parseable elements of $output<br /> */<br /></span><span class="keyword">function </span><span class="default">print_r_reverse_multiple</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">)<br />{<br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    while ((</span><span class="default">$reverse </span><span class="keyword">= </span><span class="default">print_r_reverse</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">)) !== </span><span class="default">NULL</span><span class="keyword">)<br />    {<br />        </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$reverse</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$output </span><span class="keyword">= </span><span class="string">'<br />Array<br />(<br />    [a] =&gt; apple<br />    [b] =&gt; banana<br />    [c] =&gt; Array<br />        (<br />            [0] =&gt; x<br />            [1] =&gt; y<br />            [2] =&gt; z<br />            [3] =&gt; Array<br />            (<br />                [nest] =&gt; yes<br />                [nest2] =&gt; Array<br />                (<br />                    [nest] =&gt; some more<br />                    asffjaskkd<br />                )<br />                [nest3] =&gt; o rly?<br />            )<br />        )<br />)<br /><br />some extra stuff<br />'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">print_r_reverse</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">), </span><span class="default">$output</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />This should output<br /><br />array(3) {<br />  ["a"]=&gt;<br />  string(5) "apple"<br />  ["b"]=&gt;<br />  string(6) "banana"<br />  ["c"]=&gt;<br />  array(4) {<br />    [0]=&gt;<br />    string(1) "x"<br />    [1]=&gt;<br />    string(1) "y"<br />    [2]=&gt;<br />    string(1) "z"<br />    [3]=&gt;<br />    array(3) {<br />      ["nest"]=&gt;<br />      string(3) "yes"<br />      ["nest2"]=&gt;<br />      array(1) {<br />        ["nest"]=&gt;<br />        string(40) "some more<br />                    asffjaskkd"<br />      }<br />      ["nest3"]=&gt;<br />      string(6) "o rly?"<br />    }<br />  }<br />}<br />string(18) "nsome extra stuffn"<br /><br />Added:<br />else if (!empty($trim) &amp;&amp; $expecting == 2)<br />{<br />    // Expecting close parent or element, but got just a string<br />    $topArray[$key] .= "\n".$line;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="111738">  <div class="votes">
    <div id="Vu111738">
    <a href="/manual/vote-note.php?id=111738&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111738">
    <a href="/manual/vote-note.php?id=111738&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111738" title="52% like this...">
    1
    </div>
  </div>
  <a href="#111738" class="name">
  <strong class="user"><em>preda dot vlad at yahoo dot com</em></strong></a><a class="genanchor" href="#111738"> &para;</a><div class="date" title="2013-03-22 09:40"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111738">
<div class="phpcode"><code><span class="html">print_r(), just like var_dump() does NOT cast an object, not even if it has a __toString() method - which is normal.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">__toString</span><span class="keyword">() {<br />        return </span><span class="string">'In class A'</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">;<br />echo </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// In class A<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="comment">// A Object()<br />// you can simulate the echo by casting it manually<br /></span><span class="default">print_r</span><span class="keyword">((string)</span><span class="default">$a</span><span class="keyword">);  </span><span class="comment">// In class A</span></span></code></div>
  </div>
 </div>
  <div class="note" id="58811">  <div class="votes">
    <div id="Vu58811">
    <a href="/manual/vote-note.php?id=58811&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58811">
    <a href="/manual/vote-note.php?id=58811&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58811" title="53% like this...">
    3
    </div>
  </div>
  <a href="#58811" class="name">
  <strong class="user"><em>thbley at gmail dot com</em></strong></a><a class="genanchor" href="#58811"> &para;</a><div class="date" title="2005-11-16 12:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58811">
<div class="phpcode"><code><span class="html">Here is a print_r that produces xml:<br />(now you can expand/collapse the nodes in your browser)<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">'Content-Type: text/xml; charset=UTF-8'</span><span class="keyword">);<br />echo </span><span class="default">print_r_xml</span><span class="keyword">(</span><span class="default">$some_var</span><span class="keyword">);<br /><br />function </span><span class="default">print_r_xml</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">,</span><span class="default">$first</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">) {<br />  </span><span class="default">$output </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />  if (</span><span class="default">$first</span><span class="keyword">) </span><span class="default">$output </span><span class="keyword">.= </span><span class="string">"&lt;?xml version=\"1.0\" encoding=\"UTF-8\"?&gt;\n&lt;data&gt;\n"</span><span class="keyword">;<br />  foreach(</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) { <br />    if (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)) </span><span class="default">$key </span><span class="keyword">= </span><span class="string">"arr_"</span><span class="keyword">.</span><span class="default">$key</span><span class="keyword">; </span><span class="comment">// &lt;0 is not allowed<br />    </span><span class="keyword">switch (</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) { <br />      case </span><span class="string">"array"</span><span class="keyword">:<br />        </span><span class="default">$output </span><span class="keyword">.= </span><span class="string">"&lt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">" type='array' size='"</span><span class="keyword">.</span><span class="default">count</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">).</span><span class="string">"'&gt;"</span><span class="keyword">.<br />          </span><span class="default">print_r_xml</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">).</span><span class="string">"&lt;/"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&gt;\n"</span><span class="keyword">; break;<br />      case </span><span class="string">"boolean"</span><span class="keyword">:<br />        </span><span class="default">$output </span><span class="keyword">.= </span><span class="string">"&lt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">" type='bool'&gt;"</span><span class="keyword">.(</span><span class="default">$val</span><span class="keyword">?</span><span class="string">"true"</span><span class="keyword">:</span><span class="string">"false"</span><span class="keyword">).<br />          </span><span class="string">"&lt;/"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&gt;\n"</span><span class="keyword">; break;<br />      case </span><span class="string">"integer"</span><span class="keyword">:<br />        </span><span class="default">$output </span><span class="keyword">.= </span><span class="string">"&lt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">" type='integer'&gt;"</span><span class="keyword">.<br />          </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">).</span><span class="string">"&lt;/"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&gt;\n"</span><span class="keyword">; break;<br />      case </span><span class="string">"double"</span><span class="keyword">:<br />        </span><span class="default">$output </span><span class="keyword">.= </span><span class="string">"&lt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">" type='double'&gt;"</span><span class="keyword">.<br />          </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">).</span><span class="string">"&lt;/"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&gt;\n"</span><span class="keyword">; break;<br />      case </span><span class="string">"string"</span><span class="keyword">:<br />        </span><span class="default">$output </span><span class="keyword">.= </span><span class="string">"&lt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">" type='string' size='"</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">).</span><span class="string">"'&gt;"</span><span class="keyword">.<br />          </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">).</span><span class="string">"&lt;/"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&gt;\n"</span><span class="keyword">; break;<br />      default:<br />        </span><span class="default">$output </span><span class="keyword">.= </span><span class="string">"&lt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">" type='unknown'&gt;"</span><span class="keyword">.</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">).<br />          </span><span class="string">"&lt;/"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&gt;\n"</span><span class="keyword">; break;<br />    }<br />  }<br />  if (</span><span class="default">$first</span><span class="keyword">) </span><span class="default">$output </span><span class="keyword">.= </span><span class="string">"&lt;/data&gt;\n"</span><span class="keyword">;<br />  return </span><span class="default">$output</span><span class="keyword">;<br />}<br />  <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55738">  <div class="votes">
    <div id="Vu55738">
    <a href="/manual/vote-note.php?id=55738&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55738">
    <a href="/manual/vote-note.php?id=55738&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55738" title="53% like this...">
    2
    </div>
  </div>
  <a href="#55738" class="name">
  <strong class="user"><em>warhog at warhog dot net</em></strong></a><a class="genanchor" href="#55738"> &para;</a><div class="date" title="2005-08-11 05:01"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55738">
<div class="phpcode"><code><span class="html">For very long arrays I have written a little function which formats an array quite nice and uses javascript for browsing it like a tree. The function is very customizable with the $style parameter.<br />For me it's of great use for browsing large array's, for example when those are used in language-files in some script and so on. It may even be used in "real" scripts for the "real" front-end, cause the tree can very easily be styled (look at the function or the outputted source and you'll see what i mean).<br /><br />Here's the function:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">print_r_html</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$style </span><span class="keyword">= </span><span class="string">"display: none; margin-left: 10px;"</span><span class="keyword">)<br />{ static </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++;<br />  echo </span><span class="string">"\n&lt;div id=\"array_tree_</span><span class="default">$i</span><span class="string">\" class=\"array_tree\"&gt;\n"</span><span class="keyword">;<br />  foreach(</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)<br />  { switch (</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">))<br />    { case </span><span class="string">"array"</span><span class="keyword">:<br />        echo </span><span class="string">"&lt;a onclick=\"document.getElementById('"</span><span class="keyword">;<br />        echo </span><span class="default">array_tree_element_$i</span><span class="keyword">.</span><span class="string">"').style.display = "</span><span class="keyword">;<br />        echo </span><span class="string">"document.getElementById('array_tree_element_</span><span class="default">$i</span><span class="string">"</span><span class="keyword">;<br />        echo </span><span class="string">"').style.display == 'block' ?"</span><span class="keyword">;<br />        echo </span><span class="string">"'none' : 'block';\"\n"</span><span class="keyword">;<br />        echo </span><span class="string">"name=\"array_tree_link_</span><span class="default">$i</span><span class="string">\" href=\"#array_tree_link_</span><span class="default">$i</span><span class="string">\"&gt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&lt;/a&gt;&lt;br /&gt;\n"</span><span class="keyword">;<br />        echo </span><span class="string">"&lt;div class=\"array_tree_element_\" id=\"array_tree_element_</span><span class="default">$i</span><span class="string">\" style=\"</span><span class="default">$style</span><span class="string">\"&gt;"</span><span class="keyword">;<br />        echo </span><span class="default">print_r_html</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />        echo </span><span class="string">"&lt;/div&gt;"</span><span class="keyword">;<br />      break;<br />      case </span><span class="string">"integer"</span><span class="keyword">:<br />        echo </span><span class="string">"&lt;b&gt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&lt;/b&gt; =&gt; &lt;i&gt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">).</span><span class="string">"&lt;/i&gt;&lt;br /&gt;"</span><span class="keyword">;<br />      break;<br />      case </span><span class="string">"double"</span><span class="keyword">:<br />        echo </span><span class="string">"&lt;b&gt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&lt;/b&gt; =&gt; &lt;i&gt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">).</span><span class="string">"&lt;/i&gt;&lt;br /&gt;"</span><span class="keyword">;<br />      break;<br />      case </span><span class="string">"boolean"</span><span class="keyword">:<br />        echo </span><span class="string">"&lt;b&gt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&lt;/b&gt; =&gt; "</span><span class="keyword">;<br />        if (</span><span class="default">$val</span><span class="keyword">)<br />        { echo </span><span class="string">"true"</span><span class="keyword">; }<br />        else<br />        { echo </span><span class="string">"false"</span><span class="keyword">; }<br />        echo  </span><span class="string">"&lt;br /&gt;\n"</span><span class="keyword">;<br />      break;<br />      case </span><span class="string">"string"</span><span class="keyword">:<br />        echo </span><span class="string">"&lt;b&gt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&lt;/b&gt; =&gt; &lt;code&gt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">).</span><span class="string">"&lt;/code&gt;&lt;br /&gt;"</span><span class="keyword">;<br />      break;<br />      default:<br />        echo </span><span class="string">"&lt;b&gt;"</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"&lt;/b&gt; =&gt; "</span><span class="keyword">.</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">).</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />      break; }<br />    echo </span><span class="string">"\n"</span><span class="keyword">; }<br />  echo </span><span class="string">"&lt;/div&gt;\n"</span><span class="keyword">; }<br /><br /></span><span class="default">?&gt;<br /></span><br />The function as it is now does not support the $return parameter as print_r does and will create an endless loop like print_r did in php-versions &lt; 4.0.3 when there is an element which contains a reference to a variable inside of the array to print out :-/<br /><br />I've tested it with PHP 5.0.6 and PHP 4.2.3 - no problems except those already mentioned.<br /><br />please e-mail me if you've got a solution for the problems i've mentioned, i myself are not able to solve them 'cause i don't know how the hell i can find out whether a variable is a reference or not.</span></code></div>
  </div>
 </div>
  <div class="note" id="107298">  <div class="votes">
    <div id="Vu107298">
    <a href="/manual/vote-note.php?id=107298&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107298">
    <a href="/manual/vote-note.php?id=107298&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107298" title="51% like this...">
    1
    </div>
  </div>
  <a href="#107298" class="name">
  <strong class="user"><em>henzeberkheij at gmail dot com</em></strong></a><a class="genanchor" href="#107298"> &para;</a><div class="date" title="2012-01-28 03:10"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107298">
<div class="phpcode"><code><span class="html">print_r is used for debug purposes. Yet I had some classes where I just wanted the values coming out of the database, not all the other crap. thus i wrote the following function. If your class has an toArray function, that one will be called otherwise it will return the object as is. print_neat_classes_r is the function that should be called!
<br />
<br /><span class="default">&lt;?php
<br />print_neat_classes_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$return</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">){
<br />        return </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">neat_class_print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">), </span><span class="default">$return</span><span class="keyword">);
<br />    }
<br />    
<br />function </span><span class="default">do_print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$return</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">){
<br />        if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) &amp;&amp; </span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="string">'toArray'</span><span class="keyword">)){
<br />            return </span><span class="default">$array</span><span class="keyword">-&gt;</span><span class="default">toArray</span><span class="keyword">();
<br />        }else if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)){
<br />            foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$obj</span><span class="keyword">){
<br />                </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">self</span><span class="keyword">::</span><span class="default">do_print_r</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">, </span><span class="default">$return</span><span class="keyword">);
<br />            }
<br />            return </span><span class="default">$array</span><span class="keyword">;
<br />        }else{
<br />            return </span><span class="default">$array</span><span class="keyword">;
<br />        }
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90759">  <div class="votes">
    <div id="Vu90759">
    <a href="/manual/vote-note.php?id=90759&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90759">
    <a href="/manual/vote-note.php?id=90759&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90759" title="51% like this...">
    3
    </div>
  </div>
  <a href="#90759" class="name">
  <strong class="user"><em>Bob</em></strong></a><a class="genanchor" href="#90759"> &para;</a><div class="date" title="2009-05-08 03:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90759">
<div class="phpcode"><code><span class="html">Here is a function that formats the output of print_r as a expandable/collapsable tree list using HTML and JavaScript.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">print_r_tree</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)<br />{<br />    </span><span class="comment">// capture the output of print_r<br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br />    </span><span class="comment">// replace something like '[element] =&gt; &lt;newline&gt; (' with &lt;a href="javascript:toggleDisplay('...');"&gt;...&lt;/a&gt;&lt;div id="..." style="display: none;"&gt;<br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/([ \t]*)(\[[^\]]+\][ \t]*\=\&gt;[ \t]*[a-z0-9 \t_]+)\n[ \t]*\(/iUe'</span><span class="keyword">,</span><span class="string">"'\\1&lt;a href=\"javascript:toggleDisplay(\''.(\$id = substr(md5(rand().'\\0'), 0, 7)).'\');\"&gt;\\2&lt;/a&gt;&lt;div id=\"'.\$id.'\" style=\"display: none;\"&gt;'"</span><span class="keyword">, </span><span class="default">$out</span><span class="keyword">);<br /><br />    </span><span class="comment">// replace ')' on its own on a new line (surrounded by whitespace is ok) with '&lt;/div&gt;<br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/^\s*\)\s*$/m'</span><span class="keyword">, </span><span class="string">'&lt;/div&gt;'</span><span class="keyword">, </span><span class="default">$out</span><span class="keyword">);<br /><br />    </span><span class="comment">// print the javascript function toggleDisplay() and then the transformed output<br />    </span><span class="keyword">echo </span><span class="string">'&lt;script language="Javascript"&gt;function toggleDisplay(id) { document.getElementById(id).style.display = (document.getElementById(id).style.display == "block") ? "none" : "block"; }&lt;/script&gt;'</span><span class="keyword">.</span><span class="string">"\n</span><span class="default">$out</span><span class="string">"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>Pass it a multidimensional array or object and each sub-array/object will be hidden and replaced by a html link that will toggle its display on and off.<br />Its quick and dirty, but great for debugging the contents of large arrays and objects.<br />Note: You'll want to surround the output with &lt;pre&gt;&lt;/pre&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="102233">  <div class="votes">
    <div id="Vu102233">
    <a href="/manual/vote-note.php?id=102233&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102233">
    <a href="/manual/vote-note.php?id=102233&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102233" title="51% like this...">
    1
    </div>
  </div>
  <a href="#102233" class="name">
  <strong class="user"><em>machuidel</em></strong></a><a class="genanchor" href="#102233"> &para;</a><div class="date" title="2011-02-03 04:01"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102233">
<div class="phpcode"><code><span class="html">The following will output an array in a PHP parsable format:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">serialize_array</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$root </span><span class="keyword">= </span><span class="string">'$root'</span><span class="keyword">, </span><span class="default">$depth </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />{<br />        </span><span class="default">$items </span><span class="keyword">= array();<br /><br />        foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$value</span><span class="keyword">)<br />        {<br />                if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />                {<br />                        </span><span class="default">serialize_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$root </span><span class="keyword">. </span><span class="string">'[\'' </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">'\']'</span><span class="keyword">, </span><span class="default">$depth </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">);<br />                }<br />                else<br />                {<br />                        </span><span class="default">$items</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                }<br />        }<br /><br />        if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$items</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">)<br />        {<br />                echo </span><span class="default">$root </span><span class="keyword">. </span><span class="string">' = array('</span><span class="keyword">;<br /><br />                </span><span class="default">$prefix </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />                foreach(</span><span class="default">$items </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$value</span><span class="keyword">)<br />                {<br />                        echo </span><span class="default">$prefix </span><span class="keyword">. </span><span class="string">'\'' </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">'\' =&gt; \'' </span><span class="keyword">. </span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) . </span><span class="string">'\''</span><span class="keyword">;<br />                        </span><span class="default">$prefix </span><span class="keyword">= </span><span class="string">', '</span><span class="keyword">;<br />                }<br /><br />                echo </span><span class="string">');' </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />        }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84117">  <div class="votes">
    <div id="Vu84117">
    <a href="/manual/vote-note.php?id=84117&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84117">
    <a href="/manual/vote-note.php?id=84117&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84117" title="51% like this...">
    1
    </div>
  </div>
  <a href="#84117" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#84117"> &para;</a><div class="date" title="2008-06-28 01:21"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84117">
<div class="phpcode"><code><span class="html">I have written a nice debugging function.<br />This function handles arrays beautifully.<br /><span class="default">&lt;?php<br /></span><span class="comment">//Debug variables, $i and $k are for recursive use<br /></span><span class="keyword">function </span><span class="default">DebugDisplayVar</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$name </span><span class="keyword">= </span><span class="string">"Debug"</span><span class="keyword">, </span><span class="default">$i </span><span class="keyword">= </span><span class="string">"0"</span><span class="keyword">, </span><span class="default">$k </span><span class="keyword">= array(</span><span class="string">"Error"</span><span class="keyword">)){<br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">))<br />    {    foreach (</span><span class="default">$input </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){<br />            </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">$k</span><span class="keyword">;<br />            </span><span class="default">$temp</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />            </span><span class="default">DebugDisplayVar</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$temp</span><span class="keyword">);}<br />    }else{</span><span class="comment">//if not array<br />        </span><span class="keyword">echo </span><span class="string">"$"</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">;</span><span class="comment">//[$k]<br />        </span><span class="keyword">foreach (</span><span class="default">$k </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){<br />            if(</span><span class="default">$value </span><span class="keyword">!==</span><span class="string">"Error"</span><span class="keyword">){echo </span><span class="string">"[</span><span class="default">$value</span><span class="string">]"</span><span class="keyword">;}<br />        }<br />        echo </span><span class="string">" = </span><span class="default">$input</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br />}    }<br /><br /></span><span class="comment">//outputs <br /></span><span class="default">Debug</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">value<br />Debug</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">another value <br />ect</span><span class="keyword">...<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73436">  <div class="votes">
    <div id="Vu73436">
    <a href="/manual/vote-note.php?id=73436&amp;page=function.print-r&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73436">
    <a href="/manual/vote-note.php?id=73436&amp;page=function.print-r&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73436" title="51% like this...">
    1
    </div>
  </div>
  <a href="#73436" class="name">
  <strong class="user"><em>Matthew Ruivo (mruivo at gmail)</em></strong></a><a class="genanchor" href="#73436"> &para;</a><div class="date" title="2007-02-22 10:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73436">
<div class="phpcode"><code><span class="html">For those of you needing to print an array within a buffer callback function, I've created this quick function. It simply returns the array as a readable string rather than printing it. You can even choose whether to return it in normal text-mode or HTML. It's recursive, so multi-dimensial arrays are supported. I hope someone finds this useful!<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">return_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$html </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$level </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$space </span><span class="keyword">= </span><span class="default">$html </span><span class="keyword">? </span><span class="string">"&amp;nbsp;" </span><span class="keyword">: </span><span class="string">" "</span><span class="keyword">;<br />        </span><span class="default">$newline </span><span class="keyword">= </span><span class="default">$html </span><span class="keyword">? </span><span class="string">"&lt;br /&gt;" </span><span class="keyword">: </span><span class="string">"\n"</span><span class="keyword">;<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">6</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />            </span><span class="default">$spaces </span><span class="keyword">.= </span><span class="default">$space</span><span class="keyword">;<br />        }<br />        </span><span class="default">$tabs </span><span class="keyword">= </span><span class="default">$spaces</span><span class="keyword">;<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$level</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />            </span><span class="default">$tabs </span><span class="keyword">.= </span><span class="default">$spaces</span><span class="keyword">;<br />        }<br />        </span><span class="default">$output </span><span class="keyword">= </span><span class="string">"Array" </span><span class="keyword">. </span><span class="default">$newline </span><span class="keyword">. </span><span class="default">$newline</span><span class="keyword">;<br />        foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />                </span><span class="default">$level</span><span class="keyword">++;<br />                </span><span class="default">$value </span><span class="keyword">= </span><span class="default">return_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$html</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">);<br />                </span><span class="default">$level</span><span class="keyword">--;<br />            }<br />            </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$tabs </span><span class="keyword">. </span><span class="string">"[" </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">"] =&gt; " </span><span class="keyword">. </span><span class="default">$value </span><span class="keyword">. </span><span class="default">$newline</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$output</span><span class="keyword">;<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.print-r&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.print-r.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.boolval.php" title="boolval">boolval</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-zval-dump.php" title="debug_&#8203;zval_&#8203;dump">debug_&#8203;zval_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.doubleval.php" title="doubleval">doubleval</a>
                        </li>
                                                <li class="">
                            <a href="function.empty.php" title="empty">empty</a>
                        </li>
                                                <li class="">
                            <a href="function.floatval.php" title="floatval">floatval</a>
                        </li>
                                                <li class="">
                            <a href="function.get-debug-type.php" title="get_&#8203;debug_&#8203;type">get_&#8203;debug_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-vars.php" title="get_&#8203;defined_&#8203;vars">get_&#8203;defined_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-id.php" title="get_&#8203;resource_&#8203;id">get_&#8203;resource_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-type.php" title="get_&#8203;resource_&#8203;type">get_&#8203;resource_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.gettype.php" title="gettype">gettype</a>
                        </li>
                                                <li class="">
                            <a href="function.intval.php" title="intval">intval</a>
                        </li>
                                                <li class="">
                            <a href="function.is-array.php" title="is_&#8203;array">is_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.is-bool.php" title="is_&#8203;bool">is_&#8203;bool</a>
                        </li>
                                                <li class="">
                            <a href="function.is-callable.php" title="is_&#8203;callable">is_&#8203;callable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-countable.php" title="is_&#8203;countable">is_&#8203;countable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-double.php" title="is_&#8203;double">is_&#8203;double</a>
                        </li>
                                                <li class="">
                            <a href="function.is-float.php" title="is_&#8203;float">is_&#8203;float</a>
                        </li>
                                                <li class="">
                            <a href="function.is-int.php" title="is_&#8203;int">is_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.is-integer.php" title="is_&#8203;integer">is_&#8203;integer</a>
                        </li>
                                                <li class="">
                            <a href="function.is-iterable.php" title="is_&#8203;iterable">is_&#8203;iterable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-long.php" title="is_&#8203;long">is_&#8203;long</a>
                        </li>
                                                <li class="">
                            <a href="function.is-null.php" title="is_&#8203;null">is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.is-numeric.php" title="is_&#8203;numeric">is_&#8203;numeric</a>
                        </li>
                                                <li class="">
                            <a href="function.is-object.php" title="is_&#8203;object">is_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.is-real.php" title="is_&#8203;real">is_&#8203;real</a>
                        </li>
                                                <li class="">
                            <a href="function.is-resource.php" title="is_&#8203;resource">is_&#8203;resource</a>
                        </li>
                                                <li class="">
                            <a href="function.is-scalar.php" title="is_&#8203;scalar">is_&#8203;scalar</a>
                        </li>
                                                <li class="">
                            <a href="function.is-string.php" title="is_&#8203;string">is_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.isset.php" title="isset">isset</a>
                        </li>
                                                <li class="current">
                            <a href="function.print-r.php" title="print_&#8203;r">print_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="">
                            <a href="function.unserialize.php" title="unserialize">unserialize</a>
                        </li>
                                                <li class="">
                            <a href="function.unset.php" title="unset">unset</a>
                        </li>
                                                <li class="">
                            <a href="function.var-dump.php" title="var_&#8203;dump">var_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.var-export.php" title="var_&#8203;export">var_&#8203;export</a>
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
