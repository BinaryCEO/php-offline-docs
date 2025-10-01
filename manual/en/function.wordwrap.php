<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: wordwrap - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.wordwrap.php">
 <link rel="shorturl" href="https://www.php.net/wordwrap">
 <link rel="alternate" href="https://www.php.net/wordwrap" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.vsprintf.php">
 <link rel="next" href="https://www.php.net/manual/en/changelog.strings.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.wordwrap.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.wordwrap.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.wordwrap.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.wordwrap.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.wordwrap.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.wordwrap.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.wordwrap.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.wordwrap.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.wordwrap.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.wordwrap.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.wordwrap.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Wraps a string to a given number of characters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: wordwrap - Manual" />
<meta name="twitter:description" content="Wraps a string to a given number of characters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: wordwrap - Manual" />
<meta itemprop="description" content="Wraps a string to a given number of characters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Wraps a string to a given number of characters" />

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
        <a href="changelog.strings.php">
          Changelog &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.vsprintf.php">
          &laquo; vsprintf        </a>
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
            <option value='en/function.wordwrap.php' selected="selected">English</option>
            <option value='de/function.wordwrap.php'>German</option>
            <option value='es/function.wordwrap.php'>Spanish</option>
            <option value='fr/function.wordwrap.php'>French</option>
            <option value='it/function.wordwrap.php'>Italian</option>
            <option value='ja/function.wordwrap.php'>Japanese</option>
            <option value='pt_BR/function.wordwrap.php'>Brazilian Portuguese</option>
            <option value='ru/function.wordwrap.php'>Russian</option>
            <option value='tr/function.wordwrap.php'>Turkish</option>
            <option value='uk/function.wordwrap.php'>Ukrainian</option>
            <option value='zh/function.wordwrap.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.wordwrap" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">wordwrap</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">wordwrap</span> &mdash; <span class="dc-title">Wraps a string to a given number of characters</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.wordwrap-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>wordwrap</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code><span class="initializer"> = 75</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$break</code><span class="initializer"> = &quot;\n&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$cut_long_words</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Wraps a string to a given number of characters using a string break
   character.
   Strings wrap after a space (U+0020) character unless <code class="parameter">cut_long_words</code>
   is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.wordwrap-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">width</code></dt>
     <dd>
      <p class="para">
       The number of characters at which the string will be wrapped.
      </p>
     </dd>
    
    
     <dt><code class="parameter">break</code></dt>
     <dd>
      <p class="para">
       The line is broken using the optional <code class="parameter">break</code> parameter.
       It must not be an empty string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">cut_long_words</code></dt>
     <dd>
      <p class="para">
       If the <code class="parameter">cut_long_words</code> is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the string is
       always wrapped at or before the specified <code class="parameter">width</code>.  So if you have
       a word that is larger than the given width, it is broken apart.
       (See second example). When <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> the function does not split the word
       even if the <code class="parameter">width</code> is smaller than the word width.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.wordwrap-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the given string wrapped at the specified length.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.wordwrap-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   If <code class="parameter">break</code> is an empty string,
   a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.wordwrap-changelog">
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
       If <code class="parameter">break</code> is empty string,
       a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown;
       previously in this case it emitted an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> and returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.wordwrap-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5201">
    <p><strong>Example #1 <span class="function"><strong>wordwrap()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$text </span><span style="color: #007700">= </span><span style="color: #DD0000">"The quick brown fox jumped over the lazy dog."</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$newtext </span><span style="color: #007700">= </span><span style="color: #0000BB">wordwrap</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$newtext</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">The quick brown fox&lt;br /&gt;
jumped over the lazy&lt;br /&gt;
dog.</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-5202">
    <p><strong>Example #2 <span class="function"><strong>wordwrap()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$text </span><span style="color: #007700">= </span><span style="color: #DD0000">"A very long woooooooooooord."</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$newtext </span><span style="color: #007700">= </span><span style="color: #0000BB">wordwrap</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">, </span><span style="color: #0000BB">8</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$newtext</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">A very
long
wooooooo
ooooord.</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-5203">
    <p><strong>Example #3 <span class="function"><strong>wordwrap()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$text </span><span style="color: #007700">= </span><span style="color: #DD0000">"A very long woooooooooooooooooord. and something"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$newtext </span><span style="color: #007700">= </span><span style="color: #0000BB">wordwrap</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">, </span><span style="color: #0000BB">8</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$newtext</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">A very
long
woooooooooooooooooord.
and
something</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.wordwrap-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.nl2br.php" class="function" rel="rdfs-seeAlso">nl2br()</a> - Inserts HTML line breaks before all newlines in a string</span></li>
    <li><span class="function"><a href="function.chunk-split.php" class="function" rel="rdfs-seeAlso">chunk_split()</a> - Split a string into smaller chunks</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/wordwrap.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.wordwrap%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.wordwrap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.wordwrap.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="127205">  <div class="votes">
    <div id="Vu127205">
    <a href="/manual/vote-note.php?id=127205&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127205">
    <a href="/manual/vote-note.php?id=127205&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127205" title="76% like this...">
    9
    </div>
  </div>
  <a href="#127205" class="name">
  <strong class="user"><em>michdingpayc</em></strong></a><a class="genanchor" href="#127205"> &para;</a><div class="date" title="2022-06-30 07:23"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127205">
<div class="phpcode"><code><span class="html">A correction to ju1ius' utf-8 safe wordwrap from 10 years ago. <br />This version addresses issues where breaks were not being added to the first and last words in the input string.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">utf8_wordwrap</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">=</span><span class="default">75</span><span class="keyword">, </span><span class="default">$break</span><span class="keyword">=</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$cut</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">)<br />{<br />  if(</span><span class="default">$cut</span><span class="keyword">) {<br />    </span><span class="comment">// Match anything 1 to $width chars long followed by whitespace,<br />    // otherwise match anything $width chars long<br />    </span><span class="default">$search</span><span class="keyword">= </span><span class="string">'/(.{1,'</span><span class="keyword">.</span><span class="default">$width</span><span class="keyword">.</span><span class="string">'})(?:\s)|(.{'</span><span class="keyword">.</span><span class="default">$width</span><span class="keyword">.</span><span class="string">'})(?!$)/uS'</span><span class="keyword">;<br />    </span><span class="default">$replace </span><span class="keyword">= </span><span class="string">'$1$2'</span><span class="keyword">.</span><span class="default">$break</span><span class="keyword">;<br />  } else {<br />    </span><span class="comment">// Anchor the beginning of the pattern with a lookbehind<br />    // to avoid crazy backtracking when words are longer than $width<br />    </span><span class="default">$search</span><span class="keyword">= </span><span class="string">'/(?&lt;=\s|^)(.{1,'</span><span class="keyword">.</span><span class="default">$width</span><span class="keyword">.</span><span class="string">'}\S*)(?:\s)/uS'</span><span class="keyword">;<br />    </span><span class="default">$replace </span><span class="keyword">= </span><span class="string">'$1'</span><span class="keyword">.</span><span class="default">$break</span><span class="keyword">;<br />  }<br />  return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107570">  <div class="votes">
    <div id="Vu107570">
    <a href="/manual/vote-note.php?id=107570&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107570">
    <a href="/manual/vote-note.php?id=107570&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107570" title="57% like this...">
    15
    </div>
  </div>
  <a href="#107570" class="name">
  <strong class="user"><em>ju1ius</em></strong></a><a class="genanchor" href="#107570"> &para;</a><div class="date" title="2012-02-18 03:58"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107570">
<div class="phpcode"><code><span class="html">Another solution to utf-8 safe wordwrap, unsing regular expressions.<br />Pretty good performance and works in linear time.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">utf8_wordwrap</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">=</span><span class="default">75</span><span class="keyword">, </span><span class="default">$break</span><span class="keyword">=</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$cut</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">)<br />{<br />  if(</span><span class="default">$cut</span><span class="keyword">) {<br />    </span><span class="comment">// Match anything 1 to $width chars long followed by whitespace or EOS,<br />    // otherwise match anything $width chars long<br />    </span><span class="default">$search </span><span class="keyword">= </span><span class="string">'/(.{1,'</span><span class="keyword">.</span><span class="default">$width</span><span class="keyword">.</span><span class="string">'})(?:\s|$)|(.{'</span><span class="keyword">.</span><span class="default">$width</span><span class="keyword">.</span><span class="string">'})/uS'</span><span class="keyword">;<br />    </span><span class="default">$replace </span><span class="keyword">= </span><span class="string">'$1$2'</span><span class="keyword">.</span><span class="default">$break</span><span class="keyword">;<br />  } else {<br />    </span><span class="comment">// Anchor the beginning of the pattern with a lookahead<br />    // to avoid crazy backtracking when words are longer than $width<br />    </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">'/(?=\s)(.{1,'</span><span class="keyword">.</span><span class="default">$width</span><span class="keyword">.</span><span class="string">'})(?:\s|$)/uS'</span><span class="keyword">;<br />    </span><span class="default">$replace </span><span class="keyword">= </span><span class="string">'$1'</span><span class="keyword">.</span><span class="default">$break</span><span class="keyword">;<br />  }<br />  return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>Of course don't forget to use preg_quote on the $width and $break parameters if they come from untrusted input.</span></code></div>
  </div>
 </div>
  <div class="note" id="59257">  <div class="votes">
    <div id="Vu59257">
    <a href="/manual/vote-note.php?id=59257&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59257">
    <a href="/manual/vote-note.php?id=59257&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59257" title="58% like this...">
    15
    </div>
  </div>
  <a href="#59257" class="name">
  <strong class="user"><em>Dave Lozier - dave at fusionbb.com</em></strong></a><a class="genanchor" href="#59257"> &para;</a><div class="date" title="2005-11-30 12:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59257">
<div class="phpcode"><code><span class="html">If you'd like to break long strings of text but avoid breaking html you may find this useful. It seems to be working for me, hope it works for you. Enjoy. :)
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">textWrap</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) {
<br />        </span><span class="default">$new_text </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        </span><span class="default">$text_1 </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'&gt;'</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);
<br />        </span><span class="default">$sizeof </span><span class="keyword">= </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$text_1</span><span class="keyword">);
<br />        for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$sizeof</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {
<br />            </span><span class="default">$text_2 </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'&lt;'</span><span class="keyword">,</span><span class="default">$text_1</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />            if (!empty(</span><span class="default">$text_2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) {
<br />                </span><span class="default">$new_text </span><span class="keyword">.= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'#([^\n\r .]{25})#i'</span><span class="keyword">, </span><span class="string">'\\1  '</span><span class="keyword">, </span><span class="default">$text_2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />            }
<br />            if (!empty(</span><span class="default">$text_2</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) {
<br />                </span><span class="default">$new_text </span><span class="keyword">.= </span><span class="string">'&lt;' </span><span class="keyword">. </span><span class="default">$text_2</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="string">'&gt;'</span><span class="keyword">;    
<br />            }
<br />        }
<br />        return </span><span class="default">$new_text</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116467">  <div class="votes">
    <div id="Vu116467">
    <a href="/manual/vote-note.php?id=116467&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116467">
    <a href="/manual/vote-note.php?id=116467&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116467" title="61% like this...">
    12
    </div>
  </div>
  <a href="#116467" class="name">
  <strong class="user"><em>Alhadis</em></strong></a><a class="genanchor" href="#116467"> &para;</a><div class="date" title="2015-01-08 12:30"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116467">
<div class="phpcode"><code><span class="html">For those interested in wrapping text to fit a width in *pixels* (instead of characters), you might find the following function useful; particularly for line-wrapping text over dynamically-generated images.<br /><br />If a word is too long to squeeze into the available space, it'll hyphenate it as needed so it fits the container. This operates recursively, so ridiculously long words or names (e.g., URLs or this guy's signature - <a href="http://en.wikipedia.org/wiki/Wolfe+585,_Senior" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Wolfe+585,_Senior</a>) will still keep getting broken off after they've passed the fourth or fifth lines, or whatever.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">/**<br />     * Wraps a string to a given number of pixels.<br />     * <br />     * This function operates in a similar fashion as PHP's native wordwrap function; however,<br />     * it calculates wrapping based on font and point-size, rather than character count. This<br />     * can generate more even wrapping for sentences with a consider number of thin characters.<br />     * <br />     * @static $mult;<br />     * @param string $text - Input string.<br />     * @param float $width - Width, in pixels, of the text's wrapping area.<br />     * @param float $size - Size of the font, expressed in pixels.<br />     * @param string $font - Path to the typeface to measure the text with.<br />     * @return string The original string with line-breaks manually inserted at detected wrapping points.<br />     */<br />    </span><span class="keyword">function </span><span class="default">pixel_word_wrap</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">){<br /><br />        </span><span class="comment">#    Passed a blank value? Bail early.<br />        </span><span class="keyword">if(!</span><span class="default">$text</span><span class="keyword">) return </span><span class="default">$text</span><span class="keyword">;<br /><br />        </span><span class="comment">#    Check if imagettfbbox is expecting font-size to be declared in points or pixels.<br />        </span><span class="keyword">static </span><span class="default">$mult</span><span class="keyword">;<br />        </span><span class="default">$mult    </span><span class="keyword">=    </span><span class="default">$mult </span><span class="keyword">?: </span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">GD_VERSION</span><span class="keyword">, </span><span class="string">'2.0'</span><span class="keyword">, </span><span class="string">'&gt;='</span><span class="keyword">) ? </span><span class="default">.75 </span><span class="keyword">: </span><span class="default">1</span><span class="keyword">;<br /><br />        </span><span class="comment">#    Text already fits the designated space without wrapping.<br />        </span><span class="default">$box    </span><span class="keyword">=    </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size </span><span class="keyword">* </span><span class="default">$mult</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />        if(</span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] / </span><span class="default">$mult </span><span class="keyword">&lt; </span><span class="default">$width</span><span class="keyword">)    return </span><span class="default">$text</span><span class="keyword">;<br /><br />        </span><span class="comment">#    Start measuring each line of our input and inject line-breaks when overflow's detected.<br />        </span><span class="default">$output        </span><span class="keyword">=    </span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$length        </span><span class="keyword">=    </span><span class="default">0</span><span class="keyword">;<br /><br />        </span><span class="default">$words        </span><span class="keyword">=    </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/\b(?=\S)|(?=\s)/'</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />        </span><span class="default">$word_count    </span><span class="keyword">=    </span><span class="default">count</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">);<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$word_count</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">){<br /><br />            </span><span class="comment">#    Newline<br />            </span><span class="keyword">if(</span><span class="default">PHP_EOL </span><span class="keyword">=== </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])<br />                </span><span class="default">$length    </span><span class="keyword">=    </span><span class="default">0</span><span class="keyword">;<br /><br />            </span><span class="comment">#    Strip any leading tabs.<br />            </span><span class="keyword">if(!</span><span class="default">$length</span><span class="keyword">) </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]    =    </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/^\t+/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br /><br />            </span><span class="default">$box    </span><span class="keyword">=    </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size </span><span class="keyword">* </span><span class="default">$mult</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />            </span><span class="default">$m        </span><span class="keyword">=    </span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] / </span><span class="default">$mult</span><span class="keyword">;<br /><br />            </span><span class="comment">#    This is one honkin' long word, so try to hyphenate it.<br />            </span><span class="keyword">if((</span><span class="default">$diff </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">- </span><span class="default">$m</span><span class="keyword">) &lt;= </span><span class="default">0</span><span class="keyword">){<br />                </span><span class="default">$diff    </span><span class="keyword">=    </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$diff</span><span class="keyword">);<br /><br />                </span><span class="comment">#    Figure out which end of the word to start measuring from. Saves a few extra cycles in an already heavy-duty function.<br />                </span><span class="keyword">if(</span><span class="default">$diff </span><span class="keyword">- </span><span class="default">$width </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">)    for(</span><span class="default">$s </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]); </span><span class="default">$s</span><span class="keyword">; --</span><span class="default">$s</span><span class="keyword">){<br />                    </span><span class="default">$box    </span><span class="keyword">=    </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size </span><span class="keyword">* </span><span class="default">$mult</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">) . </span><span class="string">'-'</span><span class="keyword">);<br />                    if(</span><span class="default">$width </span><span class="keyword">&gt; (</span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] / </span><span class="default">$mult</span><span class="keyword">) + </span><span class="default">$size</span><span class="keyword">){<br />                        </span><span class="default">$breakpoint    </span><span class="keyword">=    </span><span class="default">$s</span><span class="keyword">;<br />                        break;<br />                    }<br />                }<br /><br />                else{<br />                    </span><span class="default">$word_length    </span><span class="keyword">=    </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />                    for(</span><span class="default">$s </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$s </span><span class="keyword">&lt; </span><span class="default">$word_length</span><span class="keyword">; ++</span><span class="default">$s</span><span class="keyword">){<br />                        </span><span class="default">$box    </span><span class="keyword">=    </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size </span><span class="keyword">* </span><span class="default">$mult</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">) . </span><span class="string">'-'</span><span class="keyword">);<br />                        if(</span><span class="default">$width </span><span class="keyword">&lt; (</span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] / </span><span class="default">$mult</span><span class="keyword">) + </span><span class="default">$size</span><span class="keyword">){<br />                            </span><span class="default">$breakpoint    </span><span class="keyword">=    </span><span class="default">$s</span><span class="keyword">;<br />                            break;<br />                        }<br />                    }<br />                }<br /><br />                if(</span><span class="default">$breakpoint</span><span class="keyword">){<br />                    </span><span class="default">$w_l    </span><span class="keyword">=    </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">) . </span><span class="string">'-'</span><span class="keyword">;<br />                    </span><span class="default">$w_r    </span><span class="keyword">=    </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">],     </span><span class="default">$s</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);<br /><br />                    </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]    =    </span><span class="default">$w_l</span><span class="keyword">;<br />                    </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$w_r</span><span class="keyword">);<br />                    ++</span><span class="default">$word_count</span><span class="keyword">;<br />                    </span><span class="default">$box    </span><span class="keyword">=    </span><span class="default">imagettfbbox</span><span class="keyword">(</span><span class="default">$size </span><span class="keyword">* </span><span class="default">$mult</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$w_l</span><span class="keyword">);<br />                    </span><span class="default">$m        </span><span class="keyword">=    </span><span class="default">$box</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] / </span><span class="default">$mult</span><span class="keyword">;<br />                }<br />            }<br /><br />            </span><span class="comment">#    If there's no more room on the current line to fit the next word, start a new line.<br />            </span><span class="keyword">if(</span><span class="default">$length </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$length </span><span class="keyword">+ </span><span class="default">$m </span><span class="keyword">&gt;= </span><span class="default">$width</span><span class="keyword">){<br />                </span><span class="default">$output    </span><span class="keyword">.=    </span><span class="default">PHP_EOL</span><span class="keyword">;<br />                </span><span class="default">$length    </span><span class="keyword">=    </span><span class="default">0</span><span class="keyword">;<br /><br />                </span><span class="comment">#    If the current word is just a space, don't bother. Skip (saves a weird-looking gap in the text).<br />                </span><span class="keyword">if(</span><span class="string">' ' </span><span class="keyword">=== </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) continue;<br />            }<br /><br />            </span><span class="comment">#    Write another word and increase the total length of the current line.<br />            </span><span class="default">$output    </span><span class="keyword">.=    </span><span class="default">$words</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />            </span><span class="default">$length </span><span class="keyword">+=    </span><span class="default">$m</span><span class="keyword">;<br />        }<br /><br />        return </span><span class="default">$output</span><span class="keyword">;<br />    };<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71844">  <div class="votes">
    <div id="Vu71844">
    <a href="/manual/vote-note.php?id=71844&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71844">
    <a href="/manual/vote-note.php?id=71844&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71844" title="55% like this...">
    2
    </div>
  </div>
  <a href="#71844" class="name">
  <strong class="user"><em>Peter</em></strong></a><a class="genanchor" href="#71844"> &para;</a><div class="date" title="2006-12-19 05:00"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71844">
<div class="phpcode"><code><span class="html">The main concern when you have a text in a cell is for long words that drags the cell margins. This function will break words in a text that have more then $nr characters using the "-" char.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">processtext</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$nr</span><span class="keyword">=</span><span class="default">10</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$mytext</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">));
<br />        </span><span class="default">$newtext</span><span class="keyword">=array();
<br />        foreach(</span><span class="default">$mytext </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$txt</span><span class="keyword">)
<br />        {
<br />            if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$txt</span><span class="keyword">)&gt;</span><span class="default">$nr</span><span class="keyword">)
<br />            {
<br />                </span><span class="default">$txt</span><span class="keyword">=</span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$txt</span><span class="keyword">, </span><span class="default">$nr</span><span class="keyword">, </span><span class="string">"-"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />            }
<br />            </span><span class="default">$newtext</span><span class="keyword">[]=</span><span class="default">$txt</span><span class="keyword">;
<br />        }
<br />        return </span><span class="default">implode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$newtext</span><span class="keyword">);
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85753">  <div class="votes">
    <div id="Vu85753">
    <a href="/manual/vote-note.php?id=85753&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85753">
    <a href="/manual/vote-note.php?id=85753&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85753" title="53% like this...">
    2
    </div>
  </div>
  <a href="#85753" class="name">
  <strong class="user"><em>php at maranelda dot org</em></strong></a><a class="genanchor" href="#85753"> &para;</a><div class="date" title="2008-09-16 04:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85753">
<div class="phpcode"><code><span class="html">Anyone attempting to write a text email client should be aware of the following:<br /><br /><span class="default">&lt;?php<br /><br />$a </span><span class="keyword">= </span><span class="string">"some text that must wrap nice"</span><span class="keyword">;<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">);<br /><br />echo </span><span class="default">$a</span><span class="keyword">;<br /><br /></span><span class="comment">//  some text<br />//  that must<br />//  wrap nice<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">);<br /><br />echo </span><span class="default">$a</span><span class="keyword">;<br /><br /></span><span class="comment">//  some text<br />//  that<br />//  must<br />//  wrap<br />//  nice<br /><br /></span><span class="default">?&gt;<br /></span><br />Subsequent uses of wordwrap() on already wrapped text will take the end-of-line characters into account when working out line length, thus reading each line that just fit nicely the first time around as being one character too long the second. This can be a problem when preparing a text email that contains (eg.) a forwarded email which has already been word-wrapped.<br /><br />Solutions below which explode() the text on end-of-lines and wordwrap() the resulting strings separately take care of this nicely.</span></code></div>
  </div>
 </div>
  <div class="note" id="58802">  <div class="votes">
    <div id="Vu58802">
    <a href="/manual/vote-note.php?id=58802&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58802">
    <a href="/manual/vote-note.php?id=58802&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58802" title="53% like this...">
    2
    </div>
  </div>
  <a href="#58802" class="name">
  <strong class="user"><em>frans-jan at van-steenbeek dot R-E-M-O-V-E dot net</em></strong></a><a class="genanchor" href="#58802"> &para;</a><div class="date" title="2005-11-16 06:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58802">
<div class="phpcode"><code><span class="html">Using wordwrap is usefull for formatting email-messages, but it has a disadvantage: line-breaks are often treated as whitespaces, resulting in odd behaviour including lines wrapped after just one word.<br /><br />To work around it I use this:<br /><br /><span class="default">&lt;?php<br /> </span><span class="keyword">function </span><span class="default">linewrap</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$break</span><span class="keyword">, </span><span class="default">$cut</span><span class="keyword">) {<br />  </span><span class="default">$array </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />  </span><span class="default">$string </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />  foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {<br />   </span><span class="default">$string </span><span class="keyword">.= </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$break</span><span class="keyword">, </span><span class="default">$cut</span><span class="keyword">);<br />   </span><span class="default">$string </span><span class="keyword">.= </span><span class="string">"\n"</span><span class="keyword">;<br />  }<br />  return </span><span class="default">$string</span><span class="keyword">;<br /> }<br /></span><span class="default">?&gt;<br /></span><br />I then use linewrap() instead of wordwrap()<br /><br />hope this helps someone</span></code></div>
  </div>
 </div>
  <div class="note" id="102120">  <div class="votes">
    <div id="Vu102120">
    <a href="/manual/vote-note.php?id=102120&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102120">
    <a href="/manual/vote-note.php?id=102120&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102120" title="53% like this...">
    1
    </div>
  </div>
  <a href="#102120" class="name">
  <strong class="user"><em>altin_bardhi at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#102120"> &para;</a><div class="date" title="2011-01-27 04:03"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102120">
<div class="phpcode"><code><span class="html">Here I have come out with a possibly very useful wordwrap code snippet.<br /><br />Apparently what this piece of code does is: it takes the entered text and looks for words longer than the defined ‘$chunk_length’ if it finds any, it splits the long words and then it concatenates the whole string back to a new string with longer words separated by a dash character in this case.<br /><br />After it has accomplished this task it then inserts an HTML line break after a specified ‘$line_length’ (Depending on your containers width requirements)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//Start function explode_ wrap <br /></span><span class="keyword">function </span><span class="default">explode_wrap</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$chunk_length</span><span class="keyword">, </span><span class="default">$line_length</span><span class="keyword">){<br /><br /></span><span class="comment">//Explode all the words separated by spaces in a string<br /></span><span class="default">$string_chunks </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="comment">// Get each split word from the array $sring_chunks_array =&gt; key =&gt; value<br /></span><span class="keyword">foreach (</span><span class="default">$string_chunks </span><span class="keyword">as </span><span class="default">$chunk </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br /><br />if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) &gt;= </span><span class="default">$chunk_length</span><span class="keyword">){<br /><br /></span><span class="comment">//Split the chunks/words which are longer than $chunk_length<br /></span><span class="default">$new_string_chunks</span><span class="keyword">[</span><span class="default">$chunk</span><span class="keyword">] = </span><span class="default">chunk_split</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$chunk_length</span><span class="keyword">, </span><span class="string">' - '</span><span class="keyword">);<br /><br />}else {<br /><br /></span><span class="comment">//Do not split the normal length words<br /></span><span class="default">$new_string_chunks</span><span class="keyword">[</span><span class="default">$chunk</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br /><br />}<br /><br />}</span><span class="comment">//End foreach loop<br /><br />//Concatenate back the all the words<br /></span><span class="default">$new_text</span><span class="keyword">=</span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$new_string_chunks</span><span class="keyword">);<br /><br />return </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$new_text</span><span class="keyword">, </span><span class="default">$line_length</span><span class="keyword">, </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br /><br />}</span><span class="comment">//End function<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130440">  <div class="votes">
    <div id="Vu130440">
    <a href="/manual/vote-note.php?id=130440&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130440">
    <a href="/manual/vote-note.php?id=130440&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130440" title="no votes...">
    0
    </div>
  </div>
  <a href="#130440" class="name">
  <strong class="user"><em>blackboxtheproject at gmail dot com</em></strong></a><a class="genanchor" href="#130440"> &para;</a><div class="date" title="2025-08-01 08:32"><strong>1 month ago</strong></div>
  <div class="text" id="Hcom130440">
<div class="phpcode"><code><span class="html">Note this is not the right tool to fold/wrap email headers, iCalender etc.<br />It does not handle white space correctly for those purposes. Instead use chunk eg:<br /><br />       $str2= chunk_split($str, $size, "\r\n ");<br />       $str2= rtrim($str2);</span></code></div>
  </div>
 </div>
  <div class="note" id="104811">  <div class="votes">
    <div id="Vu104811">
    <a href="/manual/vote-note.php?id=104811&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104811">
    <a href="/manual/vote-note.php?id=104811&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104811" title="50% like this...">
    0
    </div>
  </div>
  <a href="#104811" class="name">
  <strong class="user"><em>info at hsdn dot org</em></strong></a><a class="genanchor" href="#104811"> &para;</a><div class="date" title="2011-07-08 08:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104811">
<div class="phpcode"><code><span class="html">Wordwrap with UTF-8 supports, returns as array.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">mb_wordwrap_array</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">)<br />{<br />    if ((</span><span class="default">$len </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">)) &lt;= </span><span class="default">$width</span><span class="keyword">)<br />    {<br />        return array(</span><span class="default">$string</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$return </span><span class="keyword">= array();<br />    </span><span class="default">$last_space </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    do<br />    {<br />        if (</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">) == </span><span class="string">' '</span><span class="keyword">)<br />        {<br />            </span><span class="default">$last_space </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">;<br />        }<br /><br />        if (</span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">$width</span><span class="keyword">)<br />        {<br />            </span><span class="default">$last_space </span><span class="keyword">= (</span><span class="default">$last_space </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) ? </span><span class="default">$width </span><span class="keyword">: </span><span class="default">$last_space</span><span class="keyword">;<br />    <br />            </span><span class="default">$return</span><span class="keyword">[] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$last_space</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">));<br />            </span><span class="default">$string </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$last_space</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br />            </span><span class="default">$len </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br />            </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$i</span><span class="keyword">++;<br />    }<br />    while (</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">);<br /><br />    </span><span class="default">$return</span><span class="keyword">[] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br /><br />    return </span><span class="default">$return</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82580">  <div class="votes">
    <div id="Vu82580">
    <a href="/manual/vote-note.php?id=82580&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82580">
    <a href="/manual/vote-note.php?id=82580&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82580" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#82580" class="name">
  <strong class="user"><em>$del=&#039; at &#039;; &#039;sanneschaap&#039; dot $del dot &#039;gmail dot com&#039;</em></strong></a><a class="genanchor" href="#82580"> &para;</a><div class="date" title="2008-04-17 01:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82580">
<div class="phpcode"><code><span class="html">These functions let you wrap strings comparing to their actual displaying width of proportional font. In this case Arial, 11px. Very handy in some cases since CSS3 is not yet completely supported. 100 strings = ~5 ms
<br />
<br />My old sheep word wrap function (posted at the bottom of this page, is kinda old dated and this one is faster and more accurate).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//the width of the biggest char @
<br /></span><span class="default">$fontwidth </span><span class="keyword">= </span><span class="default">11</span><span class="keyword">;
<br />
<br /></span><span class="comment">//each chargroup has char-ords that have the same proportional displaying width
<br /></span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = array(</span><span class="default">64</span><span class="keyword">);
<br /></span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = array(</span><span class="default">37</span><span class="keyword">,</span><span class="default">87</span><span class="keyword">,</span><span class="default">119</span><span class="keyword">);
<br /></span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = array(</span><span class="default">65</span><span class="keyword">,</span><span class="default">71</span><span class="keyword">,</span><span class="default">77</span><span class="keyword">,</span><span class="default">79</span><span class="keyword">,</span><span class="default">81</span><span class="keyword">,</span><span class="default">86</span><span class="keyword">,</span><span class="default">89</span><span class="keyword">,</span><span class="default">109</span><span class="keyword">);
<br /></span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = array(</span><span class="default">38</span><span class="keyword">,</span><span class="default">66</span><span class="keyword">,</span><span class="default">67</span><span class="keyword">,</span><span class="default">68</span><span class="keyword">,</span><span class="default">72</span><span class="keyword">,</span><span class="default">75</span><span class="keyword">,</span><span class="default">78</span><span class="keyword">,</span><span class="default">82</span><span class="keyword">,</span><span class="default">83</span><span class="keyword">,</span><span class="default">85</span><span class="keyword">,</span><span class="default">88</span><span class="keyword">,</span><span class="default">90</span><span class="keyword">);
<br /></span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] = array(</span><span class="default">35</span><span class="keyword">,</span><span class="default">36</span><span class="keyword">,</span><span class="default">43</span><span class="keyword">,</span><span class="default">48</span><span class="keyword">,</span><span class="default">49</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">,</span><span class="default">51</span><span class="keyword">,</span><span class="default">52</span><span class="keyword">,</span><span class="default">53</span><span class="keyword">,</span><span class="default">54</span><span class="keyword">,</span><span class="default">55</span><span class="keyword">,</span><span class="default">56</span><span class="keyword">,</span><span class="default">57</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">,</span><span class="default">61</span><span class="keyword">,</span><span class="default">62</span><span class="keyword">,</span><span class="default">63</span><span class="keyword">, </span><span class="default">69</span><span class="keyword">,</span><span class="default">70</span><span class="keyword">,</span><span class="default">76</span><span class="keyword">,</span><span class="default">80</span><span class="keyword">,</span><span class="default">84</span><span class="keyword">,</span><span class="default">95</span><span class="keyword">,</span><span class="default">97</span><span class="keyword">,</span><span class="default">98</span><span class="keyword">,</span><span class="default">99</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">101</span><span class="keyword">,</span><span class="default">103</span><span class="keyword">,</span><span class="default">104</span><span class="keyword">,</span><span class="default">110</span><span class="keyword">,</span><span class="default">111</span><span class="keyword">,</span><span class="default">112</span><span class="keyword">, </span><span class="default">113</span><span class="keyword">,</span><span class="default">115</span><span class="keyword">,</span><span class="default">117</span><span class="keyword">,</span><span class="default">118</span><span class="keyword">,</span><span class="default">120</span><span class="keyword">,</span><span class="default">121</span><span class="keyword">,</span><span class="default">122</span><span class="keyword">,</span><span class="default">126</span><span class="keyword">);
<br /></span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] = array(</span><span class="default">74</span><span class="keyword">,</span><span class="default">94</span><span class="keyword">,</span><span class="default">107</span><span class="keyword">);
<br /></span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] = array(</span><span class="default">34</span><span class="keyword">,</span><span class="default">40</span><span class="keyword">,</span><span class="default">41</span><span class="keyword">,</span><span class="default">42</span><span class="keyword">,</span><span class="default">45</span><span class="keyword">,</span><span class="default">96</span><span class="keyword">,</span><span class="default">102</span><span class="keyword">,</span><span class="default">114</span><span class="keyword">,</span><span class="default">123</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">);
<br /></span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] = array(</span><span class="default">44</span><span class="keyword">,</span><span class="default">46</span><span class="keyword">,</span><span class="default">47</span><span class="keyword">,</span><span class="default">58</span><span class="keyword">,</span><span class="default">59</span><span class="keyword">,</span><span class="default">91</span><span class="keyword">,</span><span class="default">92</span><span class="keyword">,</span><span class="default">93</span><span class="keyword">,</span><span class="default">116</span><span class="keyword">);
<br /></span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] = array(</span><span class="default">33</span><span class="keyword">,</span><span class="default">39</span><span class="keyword">,</span><span class="default">73</span><span class="keyword">,</span><span class="default">105</span><span class="keyword">,</span><span class="default">106</span><span class="keyword">,</span><span class="default">108</span><span class="keyword">,</span><span class="default">124</span><span class="keyword">);
<br />    
<br /></span><span class="comment">//how the displaying width are compared to the biggest char width
<br /></span><span class="default">$chargroup_relwidth</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">; </span><span class="comment">//is char @
<br /></span><span class="default">$chargroup_relwidth</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">0.909413854</span><span class="keyword">;
<br /></span><span class="default">$chargroup_relwidth</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">0.728241563</span><span class="keyword">;
<br /></span><span class="default">$chargroup_relwidth</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="default">0.637655417</span><span class="keyword">;
<br /></span><span class="default">$chargroup_relwidth</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] = </span><span class="default">0.547069272</span><span class="keyword">;
<br /></span><span class="default">$chargroup_relwidth</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] = </span><span class="default">0.456483126</span><span class="keyword">;
<br /></span><span class="default">$chargroup_relwidth</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] = </span><span class="default">0.36589698</span><span class="keyword">;
<br /></span><span class="default">$chargroup_relwidth</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] = </span><span class="default">0.275310835</span><span class="keyword">;
<br /></span><span class="default">$chargroup_relwidth</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] = </span><span class="default">0.184724689</span><span class="keyword">;
<br />
<br /></span><span class="comment">//build fast array
<br /></span><span class="default">$char_relwidth </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$chargroup</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++){
<br />    for (</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);</span><span class="default">$j</span><span class="keyword">++){
<br />        </span><span class="default">$char_relwidth</span><span class="keyword">[</span><span class="default">$chargroup</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">]] = </span><span class="default">$chargroup_relwidth</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />    }
<br />}
<br />
<br /></span><span class="comment">//get the display width (in pixels) of a string
<br /></span><span class="keyword">function </span><span class="default">get_str_width</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){
<br />    global </span><span class="default">$fontwidth</span><span class="keyword">,</span><span class="default">$char_relwidth</span><span class="keyword">;
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++){
<br />        </span><span class="default">$result </span><span class="keyword">+= </span><span class="default">$char_relwidth</span><span class="keyword">[</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])];
<br />    }
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$result </span><span class="keyword">* </span><span class="default">$fontwidth</span><span class="keyword">;
<br />    return </span><span class="default">$result</span><span class="keyword">;    
<br />}
<br />
<br /></span><span class="comment">//truncates a string at a certain displaying pixel width
<br /></span><span class="keyword">function </span><span class="default">truncate_str_at_width</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$trunstr</span><span class="keyword">=</span><span class="string">'...'</span><span class="keyword">){
<br />    global </span><span class="default">$fontwidth</span><span class="keyword">,</span><span class="default">$char_relwidth</span><span class="keyword">;        
<br />    </span><span class="default">$trunstr_width </span><span class="keyword">= </span><span class="default">get_str_width</span><span class="keyword">(</span><span class="default">$trunstr</span><span class="keyword">);
<br />    </span><span class="default">$width </span><span class="keyword">-= </span><span class="default">$trunstr_width</span><span class="keyword">;
<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">/</span><span class="default">$fontwidth</span><span class="keyword">;
<br />    </span><span class="default">$w </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++){
<br />        </span><span class="default">$w </span><span class="keyword">+= </span><span class="default">$char_relwidth</span><span class="keyword">[</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])];
<br />        if (</span><span class="default">$w </span><span class="keyword">&gt; </span><span class="default">$width</span><span class="keyword">)
<br />            break;    
<br />    }
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">).</span><span class="default">$trunstr</span><span class="keyword">;
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />    </span><span class="comment">// texas is the reason rules at 10am :)
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124034">  <div class="votes">
    <div id="Vu124034">
    <a href="/manual/vote-note.php?id=124034&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124034">
    <a href="/manual/vote-note.php?id=124034&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124034" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#124034" class="name">
  <strong class="user"><em>answers at clearcrescendo.com</em></strong></a><a class="genanchor" href="#124034"> &para;</a><div class="date" title="2019-07-12 01:38"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124034">
<div class="phpcode"><code><span class="html">wordwrap() uses the break string as the line break detected, and the break inserted, so your text must be standardized to the line break you want in the wordwrap() output before using wordwrap, otherwise you will get line breaks inserted regardless of the location of existing line breaks in your text.<br /><br /><span class="default">&lt;?php<br />    $linebreak </span><span class="keyword">= </span><span class="string">'&lt;br/&gt;' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br />    </span><span class="default">$standardized </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\r?\n/'</span><span class="keyword">,</span><span class="default">$linebreak</span><span class="keyword">, </span><span class="string">"abc abc abc\nabc abc abc\r\nabc abc abc"</span><span class="keyword">);<br />    echo </span><span class="string">'Standardized EOL:'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">$standardized</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">; </span><span class="comment">// PHP_EOL for the command line, use '&lt;br/&gt;' for HTML.<br />    </span><span class="keyword">echo </span><span class="string">"Wrapped at </span><span class="default">$width</span><span class="string">:"</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">wordwrap</span><span class="keyword">( </span><span class="default">$standardized</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">, </span><span class="default">$linebreak</span><span class="keyword">), </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />$ php -f test.php<br />Standardized EOL:<br />abc abc abc&lt;br/&gt;<br />abc abc abc&lt;br/&gt;<br />abc abc abc<br /><br />Wrapped at 5:<br />abc abc&lt;br/&gt;<br />abc&lt;br/&gt;<br />abc abc&lt;br/&gt;<br />abc&lt;br/&gt;<br />abc abc&lt;br/&gt;<br />abc</span></code></div>
  </div>
 </div>
  <div class="note" id="117207">  <div class="votes">
    <div id="Vu117207">
    <a href="/manual/vote-note.php?id=117207&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117207">
    <a href="/manual/vote-note.php?id=117207&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117207" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#117207" class="name">
  <strong class="user"><em>kozimbek at mail dot ru</em></strong></a><a class="genanchor" href="#117207"> &para;</a><div class="date" title="2015-05-02 01:17"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117207">
<div class="phpcode"><code><span class="html">After searching and being tired of many non-working mb_wordwrap functions at many places, I finally created a really simple and working solution<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mb_wordwrap</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$limit</span><span class="keyword">)<br />{<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">); </span><span class="comment">//Strip HTML tags off the text<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">); </span><span class="comment">//Convert HTML special chars into normal text<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"\r"</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">), </span><span class="string">""</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); </span><span class="comment">//Also cut line breaks<br />    </span><span class="keyword">if(</span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">) &lt;= </span><span class="default">$limit</span><span class="keyword">) return </span><span class="default">$string</span><span class="keyword">; </span><span class="comment">//If input string's length is no more than cut length, return untouched<br />    </span><span class="default">$last_space </span><span class="keyword">= </span><span class="default">mb_strrpos</span><span class="keyword">(</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$limit</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">), </span><span class="string">" "</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">); </span><span class="comment">//Find the last space symbol position<br /><br />    </span><span class="keyword">return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$last_space</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">).</span><span class="string">' ...'</span><span class="keyword">; </span><span class="comment">//Return the string's length substracted till the last space and add three points<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />The function simply searches the last space symbol in the range and returns the string cut till that position. No iterations, no regular expressions and no buffer overload. Tested with large Russian texts and works perfectly.</span></code></div>
  </div>
 </div>
  <div class="note" id="91526">  <div class="votes">
    <div id="Vu91526">
    <a href="/manual/vote-note.php?id=91526&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91526">
    <a href="/manual/vote-note.php?id=91526&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91526" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#91526" class="name">
  <strong class="user"><em>Marcin Dobruk [zuku3000 at yahoo dot co dot uk]</em></strong></a><a class="genanchor" href="#91526"> &para;</a><div class="date" title="2009-06-15 02:21"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91526">
<div class="phpcode"><code><span class="html">Word wrap from left to right (standard) and from right to left.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">myWordWrap </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">, </span><span class="default">$wrap</span><span class="keyword">=</span><span class="string">','</span><span class="keyword">, </span><span class="default">$from</span><span class="keyword">=</span><span class="string">'left'</span><span class="keyword">) {
<br />    if (</span><span class="default">$from</span><span class="keyword">==</span><span class="string">'left'</span><span class="keyword">) </span><span class="default">$txt</span><span class="keyword">=</span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$wrap</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />    if (</span><span class="default">$from</span><span class="keyword">==</span><span class="string">'right'</span><span class="keyword">) {
<br />        </span><span class="comment">// string to array
<br />        </span><span class="default">$arr_l</span><span class="keyword">=array();
<br />        for (</span><span class="default">$a</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)&gt;</span><span class="default">$a</span><span class="keyword">;</span><span class="default">$a</span><span class="keyword">++) </span><span class="default">$arr_l</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">]=</span><span class="default">$string</span><span class="keyword">{</span><span class="default">$a</span><span class="keyword">};
<br />        </span><span class="comment">// reverse array
<br />        </span><span class="default">$arr_r</span><span class="keyword">=</span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$arr_l</span><span class="keyword">);
<br />        </span><span class="comment">// array to string
<br />        </span><span class="default">$string_r</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;
<br />        foreach (</span><span class="default">$arr_r </span><span class="keyword">as </span><span class="default">$arr_line </span><span class="keyword">=&gt; </span><span class="default">$arr</span><span class="keyword">) </span><span class="default">$string_r</span><span class="keyword">.=</span><span class="default">$arr</span><span class="keyword">;
<br />        </span><span class="comment">// add wrap to reverse string
<br />        </span><span class="default">$string_r</span><span class="keyword">=</span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$string_r</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$wrap</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />        </span><span class="comment">// reverse string to array
<br />        </span><span class="default">$arr_r</span><span class="keyword">=array();
<br />        for (</span><span class="default">$a</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string_r</span><span class="keyword">)&gt;</span><span class="default">$a</span><span class="keyword">;</span><span class="default">$a</span><span class="keyword">++) </span><span class="default">$arr_r</span><span class="keyword">[]=</span><span class="default">$string_r</span><span class="keyword">{</span><span class="default">$a</span><span class="keyword">};
<br />        </span><span class="comment">// reverse array again
<br />        </span><span class="default">$arr_l</span><span class="keyword">=</span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$arr_r</span><span class="keyword">);
<br />        </span><span class="comment">// string with wrap
<br />        </span><span class="default">$txt</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;
<br />        foreach (</span><span class="default">$arr_l </span><span class="keyword">as </span><span class="default">$arr_line </span><span class="keyword">=&gt; </span><span class="default">$arr</span><span class="keyword">) </span><span class="default">$txt</span><span class="keyword">.=</span><span class="default">$arr</span><span class="keyword">;
<br />        }
<br />    return </span><span class="default">$txt</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94368">  <div class="votes">
    <div id="Vu94368">
    <a href="/manual/vote-note.php?id=94368&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94368">
    <a href="/manual/vote-note.php?id=94368&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94368" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#94368" class="name">
  <strong class="user"><em>ojs-hp at web dot de</em></strong></a><a class="genanchor" href="#94368"> &para;</a><div class="date" title="2009-10-30 10:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94368">
<div class="phpcode"><code><span class="html">After I got some problems with my function to convert a BB-text into HTML. Long words didn't really fit into the layout and only wordwarp() also added breaks to words which would fit into the layout or destroy the other HTML-tags....<br />So this is my solution. Only words with strlen() &gt;= 40 are edited with wordwarp().<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">bb2html</span><span class="keyword">(</span><span class="default">$bb</span><span class="keyword">) {<br />        </span><span class="default">$words</span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$bb</span><span class="keyword">); </span><span class="comment">// string to array<br />    </span><span class="keyword">foreach (</span><span class="default">$words </span><span class="keyword">as </span><span class="default">$word</span><span class="keyword">) {<br />        </span><span class="default">$break </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />            if (</span><span class="default">$break </span><span class="keyword">&gt;= </span><span class="default">40</span><span class="keyword">) {<br />                </span><span class="default">$word</span><span class="keyword">= </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">, </span><span class="string">'-&lt;br&gt;'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">//add &lt;br&gt; every 40 chars<br />                </span><span class="default">$break </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            }<br />            </span><span class="default">$break</span><span class="keyword">++;<br /><br />        }<br />        </span><span class="default">$newText</span><span class="keyword">[] = </span><span class="default">$word</span><span class="keyword">; </span><span class="comment">//add word to array<br />    </span><span class="keyword">}<br />    </span><span class="default">$bb </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$newText</span><span class="keyword">); </span><span class="comment">//array to string<br />    </span><span class="keyword">return </span><span class="default">$bb</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111917">  <div class="votes">
    <div id="Vu111917">
    <a href="/manual/vote-note.php?id=111917&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111917">
    <a href="/manual/vote-note.php?id=111917&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111917" title="42% like this...">
    -4
    </div>
  </div>
  <a href="#111917" class="name">
  <strong class="user"><em>maikuolan at gmail dot com</em></strong></a><a class="genanchor" href="#111917"> &para;</a><div class="date" title="2013-04-11 06:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111917">
<div class="phpcode"><code><span class="html">(Re: kouber at php dot net).<br /><br />Testing out your function, I can confirm that it works, and it works very well.<br /><br />However, others that intend to use your function need to be aware that if they use it in conjunction with unverified data (such as raw user input from $_POST, $_GET, etcetera), they are creating potential attack vectors that can be exploited by hackers via script requests containing malicious code. This is because your function is using the preg_replace function in conjunction with the "e" flag (in order to allow the chunk_split bit to execute), which can allow execution of arbitrary code.<br /><br />Solution: If there is any possibility that $str may contain unverified data (such as raw user input), ensure that the contents of $str is sanitized (such as by using htmlentities/htmlspecialchars/etc) prior to sending it to wrap($str,...).<br /><br />Not a criticism; I intend to use your function, because I like it. However, just posting this as a note to other users that may not be aware of the importance of data sanitation.</span></code></div>
  </div>
 </div>
  <div class="note" id="115214">  <div class="votes">
    <div id="Vu115214">
    <a href="/manual/vote-note.php?id=115214&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115214">
    <a href="/manual/vote-note.php?id=115214&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115214" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#115214" class="name">
  <strong class="user"><em>phil_marmotte at yahoo dot fr</em></strong></a><a class="genanchor" href="#115214"> &para;</a><div class="date" title="2014-06-13 01:13"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115214">
<div class="phpcode"><code><span class="html">Another Word wrap from left or right :<br /><br />public static function myWordWrap ($string, $length=3, $wrap=',', $from='left') { <br />        if ($from=='left') $txt=wordwrap($string, $length, $wrap, true); <br />            if ($from=='right') {<br />                $m = strlen($string)%$length;<br />                if ($m &lt; strlen($string))<br />                    $txt = substr($string,0,$m).$wrap.wordwrap(substr($string,$m),$length, $wrap, true); <br />                else<br />                    $txt = $string;<br />            }<br /><br />            return $txt;<br />       }</span></code></div>
  </div>
 </div>
  <div class="note" id="121113">  <div class="votes">
    <div id="Vu121113">
    <a href="/manual/vote-note.php?id=121113&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121113">
    <a href="/manual/vote-note.php?id=121113&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121113" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#121113" class="name">
  <strong class="user"><em>tuxedobob</em></strong></a><a class="genanchor" href="#121113"> &para;</a><div class="date" title="2017-05-22 05:55"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121113">
<div class="phpcode"><code><span class="html">It should be noted that the behavior of the $break parameter is poorly explained.<br /><br />If you specify the $break parameter, then *that string defines what the function considers a "newline"*.<br /><br />Consider the following string:<br /><br />$str = "Rumplestiltskin Schwartzmenikoff<br />1534 Gingerbread Lane<br />Black Forest, Germany";<br /><br />You are trying to fit this address into a space that only allows for 22 characters, but you want it clear that you're continuing a previous line, so you want a space added. You might try this:<br /><br />$str = wordwrap($str, 22, "\n&gt;");<br /><br />If you did that, you would end up with the following output:<br /><br />"Rumplestiltskin<br />&gt;Schwartzmenikoff<br />1534<br />&gt;Gingerbread Lane<br />Black<br />&gt;Forest, Germany"<br /><br />This is because when you pass it a third parameter of "\n&gt;", it assumes that entire string is a newline character. It's no longer using "\n". In your output, of course, \n is still a newline, so it appears to have extra lines.<br /><br />If you're looking to wordwrap a multi-line string with something besides a newline character, make sure all existing linebreaks are already delineated with the string you pass to wordwrap().</span></code></div>
  </div>
 </div>
  <div class="note" id="82571">  <div class="votes">
    <div id="Vu82571">
    <a href="/manual/vote-note.php?id=82571&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82571">
    <a href="/manual/vote-note.php?id=82571&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82571" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#82571" class="name">
  <strong class="user"><em>joachim</em></strong></a><a class="genanchor" href="#82571"> &para;</a><div class="date" title="2008-04-16 02:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82571">
<div class="phpcode"><code><span class="html">There seems to be a difference between php 5.1 and 5.2 in how wordwrap counts characters (all on Mac OSX 10.5.2):<br /><br />/Applications/MAMP/bin/php5/bin/php --version<br />PHP 5.1.6 (cli) (built: Sep  8 2006 10:25:04)<br /><br />/Applications/MAMP/bin/php5/bin/php -r 'echo wordwrap("In aller Freundschaft (50)_UT", 20) . "\n";'<br />In aller<br />Freundschaft<br />(50)_UT<br /><br />php --version<br />PHP 5.2.5 (cli) (built: Feb 20 2008 12:30:47) <br /><br />php -r 'echo wordwrap("In aller Freundschaft (50)_UT", 20) . "\n";'<br />In aller<br />Freundschaft (50)_UT</span></code></div>
  </div>
 </div>
  <div class="note" id="116865">  <div class="votes">
    <div id="Vu116865">
    <a href="/manual/vote-note.php?id=116865&amp;page=function.wordwrap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116865">
    <a href="/manual/vote-note.php?id=116865&amp;page=function.wordwrap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116865" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#116865" class="name">
  <strong class="user"><em>zac dot hester at gmail dot com</em></strong></a><a class="genanchor" href="#116865"> &para;</a><div class="date" title="2015-03-12 02:28"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116865">
<div class="phpcode"><code><span class="html">I recently ran into the issue discussed by another contributor to this function (frans-jan at van-steenbeek dot R-E-M-O-V-E dot net).  The problem appeared to be how wordwrap() was treating white space.  Instead of writing my own version of wordwrap(), I discovered that the "break" parameter is not only used as the inserted string, but also used to detect the existing wrap delimiters (e.g. line endings).  If you can manage to "normalize" the wrap delimiters in your original string, you don't need to try to work-around the function wrapping at seemingly odd places (like immediately after one short word).  As one quick-and-dirty way to get wordwrap() to play nicely with most use-cases, I did this:<br /><br /><span class="default">&lt;?php<br />$break </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">( </span><span class="default">$content</span><span class="keyword">, </span><span class="string">"\r" </span><span class="keyword">) === </span><span class="default">false </span><span class="keyword">? </span><span class="string">"\n" </span><span class="keyword">: </span><span class="string">"\r\n"</span><span class="keyword">;<br /></span><span class="default">$content </span><span class="keyword">= </span><span class="default">wordwrap</span><span class="keyword">( </span><span class="default">$content</span><span class="keyword">, </span><span class="default">78</span><span class="keyword">, </span><span class="default">$break </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I also tend to normalize multi-line strings (if my OCD is acting up).  You would typically perform this conversion _before_ sending it off to wordwrap().<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//quick and simple, but clobbers old-style Mac line-endings<br /></span><span class="default">$content </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">( </span><span class="string">"\r"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$content </span><span class="keyword">);<br /><br /></span><span class="comment">//slower, but works with everything<br /></span><span class="default">$content </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">( </span><span class="string">"/(\r\n|\r)/"</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$content </span><span class="keyword">);<br /><br /></span><span class="comment">//now, wordwrap() will behave exactly as expected<br /></span><span class="default">$content </span><span class="keyword">= </span><span class="default">wordwrap</span><span class="keyword">( </span><span class="default">$content</span><span class="keyword">, </span><span class="default">78</span><span class="keyword">, </span><span class="string">"\n" </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.wordwrap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.wordwrap.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
