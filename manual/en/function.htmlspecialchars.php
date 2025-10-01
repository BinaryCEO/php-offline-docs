<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: htmlspecialchars - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.htmlspecialchars.php">
 <link rel="shorturl" href="https://www.php.net/htmlspecialchars">
 <link rel="alternate" href="https://www.php.net/htmlspecialchars" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.htmlentities.php">
 <link rel="next" href="https://www.php.net/manual/en/function.htmlspecialchars-decode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.htmlspecialchars.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.htmlspecialchars.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.htmlspecialchars.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.htmlspecialchars.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.htmlspecialchars.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.htmlspecialchars.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.htmlspecialchars.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.htmlspecialchars.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.htmlspecialchars.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.htmlspecialchars.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.htmlspecialchars.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert special characters to HTML entities" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: htmlspecialchars - Manual" />
<meta name="twitter:description" content="Convert special characters to HTML entities" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: htmlspecialchars - Manual" />
<meta itemprop="description" content="Convert special characters to HTML entities" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert special characters to HTML entities" />

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
        <a href="function.htmlspecialchars-decode.php">
          htmlspecialchars_decode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.htmlentities.php">
          &laquo; htmlentities        </a>
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
            <option value='en/function.htmlspecialchars.php' selected="selected">English</option>
            <option value='de/function.htmlspecialchars.php'>German</option>
            <option value='es/function.htmlspecialchars.php'>Spanish</option>
            <option value='fr/function.htmlspecialchars.php'>French</option>
            <option value='it/function.htmlspecialchars.php'>Italian</option>
            <option value='ja/function.htmlspecialchars.php'>Japanese</option>
            <option value='pt_BR/function.htmlspecialchars.php'>Brazilian Portuguese</option>
            <option value='ru/function.htmlspecialchars.php'>Russian</option>
            <option value='tr/function.htmlspecialchars.php'>Turkish</option>
            <option value='uk/function.htmlspecialchars.php'>Ukrainian</option>
            <option value='zh/function.htmlspecialchars.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.htmlspecialchars" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">htmlspecialchars</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> &mdash; <span class="dc-title">Convert special characters to HTML entities</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.htmlspecialchars-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>htmlspecialchars</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$encoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$double_encode</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Certain characters have special significance in HTML, and should
   be represented by HTML entities if they are to preserve their
   meanings. This function returns a string with these
   conversions made. If you require all input substrings that have associated
   named entities to be translated, use <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span>
   instead.
  </p>
  <p class="para">
   If the input string passed to this function and the final document share the
   same character set, this function is sufficient to prepare input for
   inclusion in most contexts of an HTML document. If, however, the input can
   represent characters that are not coded in the final document character set
   and you wish to retain those characters (as numeric or named entities),
   both this function and <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span> (which only encodes
   substrings that have named entity equivalents) may be insufficient.
   You may have to use <span class="function"><a href="function.mb-encode-numericentity.php" class="function">mb_encode_numericentity()</a></span> instead.
  </p>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Performed translations</strong></caption>
    
     <thead>
      <tr>
       <th>Character</th>
       <th>Replacement</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><code class="literal">&amp;</code> (ampersand)</td>
       <td><code class="literal">&amp;amp;</code></td>
      </tr>

      <tr>
       <td><code class="literal">&quot;</code> (double quote)</td>
       <td><code class="literal">&amp;quot;</code>, unless <strong><code><a href="string.constants.php#constant.ent-noquotes">ENT_NOQUOTES</a></code></strong> is set</td>
      </tr>

      <tr>
       <td><code class="literal">&#039;</code> (single quote)</td>
       <td>
        <code class="literal">&amp;#039;</code> (for <strong><code><a href="string.constants.php#constant.ent-html401">ENT_HTML401</a></code></strong>) or <code class="literal">&amp;apos;</code> (for
        <strong><code><a href="string.constants.php#constant.ent-xml1">ENT_XML1</a></code></strong>, <strong><code><a href="string.constants.php#constant.ent-xhtml">ENT_XHTML</a></code></strong> or
        <strong><code><a href="string.constants.php#constant.ent-html5">ENT_HTML5</a></code></strong>), but only when
        <strong><code><a href="string.constants.php#constant.ent-quotes">ENT_QUOTES</a></code></strong> is set
       </td>
      </tr>

      <tr>
       <td><code class="literal">&lt;</code> (less than)</td>
       <td><code class="literal">&amp;lt;</code></td>
      </tr>

      <tr>
       <td><code class="literal">&gt;</code> (greater than)</td>
       <td><code class="literal">&amp;gt;</code></td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.htmlspecialchars-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being converted.
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
            U+FFFD (UTF-8) or &amp;#xFFFD; (otherwise) instead of returning an empty string.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="string.constants.php#constant.ent-disallowed">ENT_DISALLOWED</a></code></strong></td>
           <td>
            Replace invalid code points for the given document type with a
            Unicode Replacement Character U+FFFD (UTF-8) or &amp;#xFFFD;
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
       For the purposes of this function, the encodings
       <code class="literal">ISO-8859-1</code>, <code class="literal">ISO-8859-15</code>,
       <code class="literal">UTF-8</code>, <code class="literal">cp866</code>,
       <code class="literal">cp1251</code>, <code class="literal">cp1252</code>, and
       <code class="literal">KOI8-R</code> are effectively equivalent, provided the
       <code class="parameter">string</code> itself is valid for the encoding, as
       the characters affected by <span class="function"><strong>htmlspecialchars()</strong></span> occupy
       the same positions in all of these encodings.
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
       encode existing html entities, the default is to convert everything.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.htmlspecialchars-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The converted <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
  </p>
  <p class="para">
   If the input <code class="parameter">string</code> contains an invalid code unit
   sequence within the given <code class="parameter">encoding</code> an empty string
   will be returned, unless either the <strong><code><a href="string.constants.php#constant.ent-ignore">ENT_IGNORE</a></code></strong> or
   <strong><code><a href="string.constants.php#constant.ent-substitute">ENT_SUBSTITUTE</a></code></strong> flags are set.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.htmlspecialchars-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.htmlspecialchars-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5078">
    <p><strong>Example #1 <span class="function"><strong>htmlspecialchars()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$new </span><span style="color: #007700">= </span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #DD0000">"&lt;a href='test'&gt;Test&lt;/a&gt;"</span><span style="color: #007700">, </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$new</span><span style="color: #007700">; </span><span style="color: #FF8000">// &amp;lt;a href=&amp;#039;test&amp;#039;&amp;gt;Test&amp;lt;/a&amp;gt;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.htmlspecialchars-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Note that this function does not translate anything beyond what
    is listed above. For full entity translation, see
    <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span>.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    In case of an ambiguous <code class="parameter">flags</code> value, the following rules apply:
   </p>
   <p class="para">
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       When neither of <strong><code><a href="string.constants.php#constant.ent-compat">ENT_COMPAT</a></code></strong>, <strong><code><a href="string.constants.php#constant.ent-quotes">ENT_QUOTES</a></code></strong>,
       <strong><code><a href="string.constants.php#constant.ent-noquotes">ENT_NOQUOTES</a></code></strong> is present, the default is <strong><code><a href="string.constants.php#constant.ent-noquotes">ENT_NOQUOTES</a></code></strong>.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       When more than one of <strong><code><a href="string.constants.php#constant.ent-compat">ENT_COMPAT</a></code></strong>, <strong><code><a href="string.constants.php#constant.ent-quotes">ENT_QUOTES</a></code></strong>,
       <strong><code><a href="string.constants.php#constant.ent-noquotes">ENT_NOQUOTES</a></code></strong> is present, <strong><code><a href="string.constants.php#constant.ent-quotes">ENT_QUOTES</a></code></strong> takes the
       highest precedence, followed by <strong><code><a href="string.constants.php#constant.ent-compat">ENT_COMPAT</a></code></strong>.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       When neither of <strong><code><a href="string.constants.php#constant.ent-html401">ENT_HTML401</a></code></strong>, <strong><code><a href="string.constants.php#constant.ent-html5">ENT_HTML5</a></code></strong>,
       <strong><code><a href="string.constants.php#constant.ent-xhtml">ENT_XHTML</a></code></strong>, <strong><code><a href="string.constants.php#constant.ent-xml1">ENT_XML1</a></code></strong> is present, the default is
       <strong><code><a href="string.constants.php#constant.ent-html401">ENT_HTML401</a></code></strong>.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       When more than one of <strong><code><a href="string.constants.php#constant.ent-html401">ENT_HTML401</a></code></strong>, <strong><code><a href="string.constants.php#constant.ent-html5">ENT_HTML5</a></code></strong>,
       <strong><code><a href="string.constants.php#constant.ent-xhtml">ENT_XHTML</a></code></strong>, <strong><code><a href="string.constants.php#constant.ent-xml1">ENT_XML1</a></code></strong> is present,
       <strong><code><a href="string.constants.php#constant.ent-html5">ENT_HTML5</a></code></strong> takes the highest precedence,
       followed by <strong><code><a href="string.constants.php#constant.ent-xhtml">ENT_XHTML</a></code></strong>, <strong><code><a href="string.constants.php#constant.ent-xml1">ENT_XML1</a></code></strong> and <strong><code><a href="string.constants.php#constant.ent-html401">ENT_HTML401</a></code></strong>.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       When more than one of <strong><code><a href="string.constants.php#constant.ent-disallowed">ENT_DISALLOWED</a></code></strong>, <strong><code><a href="string.constants.php#constant.ent-ignore">ENT_IGNORE</a></code></strong>,
       <strong><code><a href="string.constants.php#constant.ent-substitute">ENT_SUBSTITUTE</a></code></strong> are present, <strong><code><a href="string.constants.php#constant.ent-ignore">ENT_IGNORE</a></code></strong> takes the
       highest precedence, followed by <strong><code><a href="string.constants.php#constant.ent-substitute">ENT_SUBSTITUTE</a></code></strong>.
      </span>
     </li>
    </ul>
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.htmlspecialchars-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.get-html-translation-table.php" class="function" rel="rdfs-seeAlso">get_html_translation_table()</a> - Returns the translation table used by htmlspecialchars and htmlentities</span></li>
    <li><span class="function"><a href="function.htmlspecialchars-decode.php" class="function" rel="rdfs-seeAlso">htmlspecialchars_decode()</a> - Convert special HTML entities back to characters</span></li>
    <li><span class="function"><a href="function.strip-tags.php" class="function" rel="rdfs-seeAlso">strip_tags()</a> - Strip HTML and PHP tags from a string</span></li>
    <li><span class="function"><a href="function.htmlentities.php" class="function" rel="rdfs-seeAlso">htmlentities()</a> - Convert all applicable characters to HTML entities</span></li>
    <li><span class="function"><a href="function.nl2br.php" class="function" rel="rdfs-seeAlso">nl2br()</a> - Inserts HTML line breaks before all newlines in a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/htmlspecialchars.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.htmlspecialchars%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.htmlspecialchars&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.htmlspecialchars.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112476">  <div class="votes">
    <div id="Vu112476">
    <a href="/manual/vote-note.php?id=112476&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112476">
    <a href="/manual/vote-note.php?id=112476&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112476" title="58% like this...">
    64
    </div>
  </div>
  <a href="#112476" class="name">
  <strong class="user"><em>Dave</em></strong></a><a class="genanchor" href="#112476"> &para;</a><div class="date" title="2013-06-20 11:59"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112476">
<div class="phpcode"><code><span class="html">As of PHP 5.4 they changed default encoding from "ISO-8859-1" to "UTF-8". So if you get null from htmlspecialchars or htmlentities<br /><br />where you have only set <br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />echo </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />you can fix it by<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">ENT_COMPAT</span><span class="keyword">,</span><span class="string">'ISO-8859-1'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />echo </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">ENT_COMPAT</span><span class="keyword">,</span><span class="string">'ISO-8859-1'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;</span> <br /><br />On linux you can find the scripts you need to fix by<br /><br />grep -Rl "htmlspecialchars\\|htmlentities" /path/to/php/scripts/</span></code></div>
  </div>
 </div>
  <div class="note" id="111666">  <div class="votes">
    <div id="Vu111666">
    <a href="/manual/vote-note.php?id=111666&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111666">
    <a href="/manual/vote-note.php?id=111666&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111666" title="60% like this...">
    47
    </div>
  </div>
  <a href="#111666" class="name">
  <strong class="user"><em>Mike Robinson</em></strong></a><a class="genanchor" href="#111666"> &para;</a><div class="date" title="2013-03-14 12:46"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111666">
<div class="phpcode"><code><span class="html">Unfortunately, as far as I can tell, the PHP devs did not provide ANY way to set the default encoding used by htmlspecialchars() or htmlentities(), even though they changed the default encoding in PHP 5.4 (*golf clap for PHP devs*). To save someone the time of trying it, this does not work:<br /><br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">'default_charset'</span><span class="keyword">, </span><span class="default">$charset</span><span class="keyword">); </span><span class="comment">// doesn't work.<br /></span><span class="default">?&gt;<br /></span><br />Unfortunately, the only way to not have to explicitly provide the second and third parameter every single time this function is called (which gets extremely tedious) is to write your own function as a wrapper:<br /><br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="string">'CHARSET'</span><span class="keyword">, </span><span class="string">'ISO-8859-1'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'REPLACE_FLAGS'</span><span class="keyword">, </span><span class="default">ENT_COMPAT </span><span class="keyword">| </span><span class="default">ENT_XHTML</span><span class="keyword">);<br /><br />function </span><span class="default">html</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    return </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">REPLACE_FLAGS</span><span class="keyword">, </span><span class="default">CHARSET</span><span class="keyword">);<br />}<br /><br />echo </span><span class="default">html</span><span class="keyword">(</span><span class="string">"ñ"</span><span class="keyword">); </span><span class="comment">// works<br /></span><span class="default">?&gt;<br /></span><br />You can do the same for htmlentities()</span></code></div>
  </div>
 </div>
  <div class="note" id="86240">  <div class="votes">
    <div id="Vu86240">
    <a href="/manual/vote-note.php?id=86240&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86240">
    <a href="/manual/vote-note.php?id=86240&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86240" title="62% like this...">
    21
    </div>
  </div>
  <a href="#86240" class="name">
  <strong class="user"><em>Kenneth Kin Lum</em></strong></a><a class="genanchor" href="#86240"> &para;</a><div class="date" title="2008-10-08 06:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86240">
<div class="phpcode"><code><span class="html">if your goal is just to protect your page from Cross Site Scripting (XSS) attack, or just to show HTML tags on a web page (showing &lt;body&gt; on the page, for example), then using htmlspecialchars() is good enough and better than using htmlentities().  A minor point is htmlspecialchars() is faster than htmlentities().  A more important point is, when we use  htmlspecialchars($s) in our code, it is automatically compatible with UTF-8 string.  Otherwise, if we use htmlentities($s), and there happens to be foreign characters in the string $s in UTF-8 encoding, then htmlentities() is going to mess it up, as it modifies the byte 0x80 to 0xFF in the string to entities like &amp;eacute;.  (unless you specifically provide a second argument and a third argument to htmlentities(), with the third argument being "UTF-8").<br /><br />The reason htmlspecialchars($s) already works with UTF-8 string is that, it changes bytes that are in the range 0x00 to 0x7F to &amp;lt; etc, while leaving bytes in the range 0x80 to 0xFF unchanged.  We may wonder whether htmlspecialchars() may accidentally change any byte in a 2 to 4 byte UTF-8 character to &amp;lt; etc.  The answer is, it won't.  When a UTF-8 character is 2 to 4 bytes long, all the bytes in this character is in the 0x80 to 0xFF range. None can be in the 0x00 to 0x7F range.  When a UTF-8 character is 1 byte long, it is just the same as ASCII, which is 7 bit, from 0x00 to 0x7F.  As a result, when a UTF-8 character is 1 byte long, htmlspecialchars($s) will do its job, and when the UTF-8 character is 2 to 4 bytes long, htmlspecialchars($s) will just pass those bytes unchanged.  So htmlspecialchars($s) will do the same job no matter whether $s is in ASCII, ISO-8859-1 (Latin-1), or UTF-8.</span></code></div>
  </div>
 </div>
  <div class="note" id="101592">  <div class="votes">
    <div id="Vu101592">
    <a href="/manual/vote-note.php?id=101592&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101592">
    <a href="/manual/vote-note.php?id=101592&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101592" title="59% like this...">
    25
    </div>
  </div>
  <a href="#101592" class="name">
  <strong class="user"><em>Thomasvdbulk at gmail dot com</em></strong></a><a class="genanchor" href="#101592"> &para;</a><div class="date" title="2010-12-28 10:05"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101592">
<div class="phpcode"><code><span class="html">i searched for a while for a script, that could see the difference between an html tag and just &lt; and &gt; placed in the text, <br />the reason is that i recieve text from a database,<br />wich is inserted by an html form, and contains text and html tags, <br />the text can contain &lt; and &gt;, so does the tags,<br />with htmlspecialchars you can validate your text to XHTML,<br />but you'll also change the tags, like &lt;b&gt; to &amp;lt;b&amp;gt;,<br />so i needed a script that could see the difference between those two...<br />but i couldn't find one so i made my own one, <br />i havent fully tested it, but the parts i tested worked perfect!<br />just for people that were searching for something like this,<br />it may looks big, could be done easier, but it works for me, so im happy.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fixtags</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">){<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/=/"</span><span class="keyword">, </span><span class="string">"=\"\""</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/&amp;quot;/"</span><span class="keyword">, </span><span class="string">"&amp;quot;\""</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$tags </span><span class="keyword">= </span><span class="string">"/&amp;lt;(\/|)(\w*)(\ |)(\w*)([\\\=]*)(?|(\")\"&amp;quot;\"|)(?|(.*)?&amp;quot;(\")|)([\ ]?)(\/|)&amp;gt;/i"</span><span class="keyword">;<br /></span><span class="default">$replacement </span><span class="keyword">= </span><span class="string">"&lt;$1$2$3$4$5$6$7$8$9$10&gt;"</span><span class="keyword">;<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$tags</span><span class="keyword">, </span><span class="default">$replacement</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/=\"\"/"</span><span class="keyword">, </span><span class="string">"="</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />return </span><span class="default">$text</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />an example:<br /><br /><span class="default">&lt;?php<br />$string </span><span class="keyword">= </span><span class="string">"<br />this is smaller &lt; than this&lt;br /&gt; <br />this is greater &gt; than this&lt;br /&gt;<br />this is the same = as this&lt;br /&gt;<br />&lt;a href=\"<a href="http://www.example.com/example.php?test=test" rel="nofollow" target="_blank">http://www.example.com/example.php?test=test</a>\"&gt;This is a link&lt;/a&gt;&lt;br /&gt;<br />&lt;b&gt;Bold&lt;/b&gt; &lt;i&gt;italic&lt;/i&gt; etc..."</span><span class="keyword">;<br />echo </span><span class="default">fixtags</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will echo:<br />this is smaller &amp;lt; than this&lt;br /&gt; <br />this is greater &amp;gt; than this&lt;br /&gt; <br />this is the same = as this&lt;br /&gt; <br />&lt;a href="<a href="http://www.example.com/example.php?test=test" rel="nofollow" target="_blank">http://www.example.com/example.php?test=test</a>"&gt;This is a link&lt;/a&gt;&lt;br /&gt; <br />&lt;b&gt;Bold&lt;/b&gt; &lt;i&gt;italic&lt;/i&gt; etc...<br /><br />I hope its helpfull!!</span></code></div>
  </div>
 </div>
  <div class="note" id="127225">  <div class="votes">
    <div id="Vu127225">
    <a href="/manual/vote-note.php?id=127225&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127225">
    <a href="/manual/vote-note.php?id=127225&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127225" title="68% like this...">
    7
    </div>
  </div>
  <a href="#127225" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#127225"> &para;</a><div class="date" title="2022-07-06 11:16"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127225">
<div class="phpcode"><code><span class="html">Because the documentation says<br /><br />int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401<br /><br />you would think that ENT_HTML401 is important. But as the notes mention, ENT_HTML401 is the default if you don't specify the doc type. This is because ENT_HTML401 === 0. So<br /><br />int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401<br /><br />is exactly equivalent to<br /><br />int $flags = ENT_QUOTES | ENT_SUBSTITUTE</span></code></div>
  </div>
 </div>
  <div class="note" id="114085">  <div class="votes">
    <div id="Vu114085">
    <a href="/manual/vote-note.php?id=114085&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114085">
    <a href="/manual/vote-note.php?id=114085&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114085" title="61% like this...">
    12
    </div>
  </div>
  <a href="#114085" class="name">
  <strong class="user"><em>Felix D.</em></strong></a><a class="genanchor" href="#114085"> &para;</a><div class="date" title="2014-01-09 11:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114085">
<div class="phpcode"><code><span class="html">Another thing important to mention is that<br />htmlspecialchars(NULL)<br />returnes an empty string and not NULL!</span></code></div>
  </div>
 </div>
  <div class="note" id="104433">  <div class="votes">
    <div id="Vu104433">
    <a href="/manual/vote-note.php?id=104433&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104433">
    <a href="/manual/vote-note.php?id=104433&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104433" title="57% like this...">
    11
    </div>
  </div>
  <a href="#104433" class="name">
  <strong class="user"><em>ivan at lutrov dot com</em></strong></a><a class="genanchor" href="#104433"> &para;</a><div class="date" title="2011-06-15 01:30"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104433">
<div class="phpcode"><code><span class="html">Be careful, the "charset" argument IS case sensitive. This is counter-intuitive and serves no practical purpose because the HTML spec actually has the opposite.</span></code></div>
  </div>
 </div>
  <div class="note" id="124059">  <div class="votes">
    <div id="Vu124059">
    <a href="/manual/vote-note.php?id=124059&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124059">
    <a href="/manual/vote-note.php?id=124059&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124059" title="60% like this...">
    5
    </div>
  </div>
  <a href="#124059" class="name">
  <strong class="user"><em>qshing1437 at hotmail dot com</em></strong></a><a class="genanchor" href="#124059"> &para;</a><div class="date" title="2019-07-22 05:11"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124059">
<div class="phpcode"><code><span class="html">If you use htmlspecialchars() to escape any HTML attribute, make sure use double quote instead of single quote for the attribute.<br /><br />For Example, <br /><br />&gt; Wrap with Single Quote<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">"&lt;p title='"  </span><span class="keyword">. </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="string">"Hello\"s\'world"</span><span class="keyword">) . </span><span class="string">"'"</span><span class="keyword">&gt; <br /><br /></span><span class="comment">// title will end up Hello"s\ and rest of the text after single quote will be cut off. <br /></span><span class="default">?&gt;<br /></span><br />&gt; Wrap with Double quote :<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'&lt;p title="'  </span><span class="keyword">. </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="string">"Hello\"s\'world"</span><span class="keyword">) . </span><span class="string">'"'</span><span class="keyword">&gt; <br /><br /></span><span class="comment">// title will show up correctly as Hello"s'world<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125979">  <div class="votes">
    <div id="Vu125979">
    <a href="/manual/vote-note.php?id=125979&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125979">
    <a href="/manual/vote-note.php?id=125979&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125979" title="58% like this...">
    5
    </div>
  </div>
  <a href="#125979" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#125979"> &para;</a><div class="date" title="2021-04-02 08:48"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125979">
<div class="phpcode"><code><span class="html">One MUST specify ENT_HTML5 in addition to double_encode=false to avoid double-encoding.<br /><br />The reason is that contrary to the documentation, double_encode=false will NOT unconditionally and globally prevent double-encoding of ALL existing entities. Crucially, it will only skip double-encoding for THOSE character entities that are explicitly valid for the document type chosen!<br /><br />Since ENT_HTML5 references the most expansive list of character entities, it is the only setting that will be most lenient with existing character entities.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="string">'ampersand(&amp;amp;), double quote(&amp;quot;), single quote(&amp;apos;), less than(&amp;lt;), greater than(&amp;gt;), numeric entities(&amp;#x26;&amp;#x22;&amp;#x27;&amp;#x3C;&amp;#x3E;), HTML 5 entities(&amp;plus;&amp;comma;&amp;excl;&amp;dollar;&amp;lpar;&amp;ncedil;&amp;euro;)'</span><span class="keyword">;<br /></span><span class="default">$result3 </span><span class="keyword">= </span><span class="default">htmlspecialchars</span><span class="keyword">( </span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES </span><span class="keyword">| </span><span class="default">ENT_SUBSTITUTE</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="comment">/*double_encode*/</span><span class="default">false </span><span class="keyword">);<br /></span><span class="default">$result4 </span><span class="keyword">= </span><span class="default">htmlspecialchars</span><span class="keyword">( </span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES </span><span class="keyword">| </span><span class="default">ENT_XML1 </span><span class="keyword">| </span><span class="default">ENT_SUBSTITUTE</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="comment">/*double_encode*/</span><span class="default">false </span><span class="keyword">);<br /></span><span class="default">$result5 </span><span class="keyword">= </span><span class="default">htmlspecialchars</span><span class="keyword">( </span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES </span><span class="keyword">| </span><span class="default">ENT_XHTML </span><span class="keyword">| </span><span class="default">ENT_SUBSTITUTE</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="comment">/*double_encode*/</span><span class="default">false </span><span class="keyword">);<br /></span><span class="default">$result6 </span><span class="keyword">= </span><span class="default">htmlspecialchars</span><span class="keyword">( </span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES </span><span class="keyword">| </span><span class="default">ENT_HTML5 </span><span class="keyword">| </span><span class="default">ENT_SUBSTITUTE</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="comment">/*double_encode*/</span><span class="default">false </span><span class="keyword">);<br /><br />echo </span><span class="string">"&lt;br /&gt;\r\nHTML 4.01:&lt;br /&gt;\r\n"</span><span class="keyword">, </span><span class="default">$result3</span><span class="keyword">, <br />    </span><span class="string">"&lt;br /&gt;\r\nXML 1:&lt;br /&gt;\r\n"</span><span class="keyword">, </span><span class="default">$result4</span><span class="keyword">, <br />    </span><span class="string">"&lt;br /&gt;\r\nXHTML:&lt;br /&gt;\r\n"</span><span class="keyword">, </span><span class="default">$result5</span><span class="keyword">, <br />    </span><span class="string">"&lt;br /&gt;\r\nHTML 5:&lt;br /&gt;\r\n"</span><span class="keyword">, </span><span class="default">$result6</span><span class="keyword">, </span><span class="string">"&lt;br /&gt;\r\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />will produce:<br /><br />HTML 4.01 (will NOT recognize single quote, but Euro):<br />ampersand(&amp;), double quote("), single quote(&amp;apos;), less than(&lt;), greater than(&gt;), numeric entities(&amp;"'&lt;&gt;), HTML 5 entities(&amp;plus;&amp;comma;&amp;excl;&amp;dollar;&amp;lpar;&amp;ncedil;€)<br /><br />XML 1 (WILL recognize single quote, but NOT Euro):<br />ampersand(&amp;), double quote("), single quote('), less than(&lt;), greater than(&gt;), numeric entities(&amp;"'&lt;&gt;), HTML 5 entities(&amp;plus;&amp;comma;&amp;excl;&amp;dollar;&amp;lpar;&amp;ncedil;&amp;euro;)<br /><br />XHTML (recognizes single quote and Euro):<br />ampersand(&amp;), double quote("), single quote('), less than(&lt;), greater than(&gt;), numeric entities(&amp;"'&lt;&gt;), HTML 5 entities(&amp;plus;&amp;comma;&amp;excl;&amp;dollar;&amp;lpar;&amp;ncedil;€)<br /><br />HTML 5 (recognizes "all" valid character entities):<br />ampersand(&amp;), double quote("), single quote('), less than(&lt;), greater than(&gt;), numeric entities(&amp;"'&lt;&gt;), HTML 5 entities(+,!$(ņ€)</span></code></div>
  </div>
 </div>
  <div class="note" id="93577">  <div class="votes">
    <div id="Vu93577">
    <a href="/manual/vote-note.php?id=93577&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93577">
    <a href="/manual/vote-note.php?id=93577&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93577" title="55% like this...">
    8
    </div>
  </div>
  <a href="#93577" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#93577"> &para;</a><div class="date" title="2009-09-16 09:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93577">
<div class="phpcode"><code><span class="html">Just a few notes on how one can use htmlspecialchars() and htmlentities() to filter user input on forms for later display and/or database storage... <br /><br />1. Use htmlspecialchars() to filter text input values for html input tags.  i.e.,<br /><br />echo '&lt;input name=userdata type=text value="'.htmlspecialchars($data).'" /&gt;';<br /><br /> <br />2. Use htmlentities() to filter the same data values for most other kinds of html tags, i.e.,<br /><br />echo '&lt;p&gt;'.htmlentities($data).'&lt;/p&gt;';<br /><br />3. Use your database escape string function to filter the data for database updates &amp; insertions, for instance, using postgresql, <br /><br />pg_query($connection,"UPDATE datatable SET datavalue='".pg_escape_string($data)."'");<br /> <br /><br />This strategy seems to work well and consistently, without restricting anything the user might like to type and display, while still providing a good deal of protection against a wide variety of html and database escape sequence injections, which might otherwise be introduced through deliberate and/or accidental input of such character sequences by users submitting their input data via html forms.</span></code></div>
  </div>
 </div>
  <div class="note" id="93620">  <div class="votes">
    <div id="Vu93620">
    <a href="/manual/vote-note.php?id=93620&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93620">
    <a href="/manual/vote-note.php?id=93620&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93620" title="56% like this...">
    6
    </div>
  </div>
  <a href="#93620" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#93620"> &para;</a><div class="date" title="2009-09-18 10:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93620">
<div class="phpcode"><code><span class="html">This may seem obvious, but it caused me some frustration. If you try and use htmlspecialchars with the $charset argument set and the string you run it on is not actually the same charset you specify, you get any empty string returned without any notice/warning/error.<br /><br /><span class="default">&lt;?php<br /><br />$ok_utf8 </span><span class="keyword">= </span><span class="string">"A valid UTF-8 string"</span><span class="keyword">;<br /></span><span class="default">$bad_utf8 </span><span class="keyword">= </span><span class="string">"An invalid UTF-8 string"</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$bad_utf8</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">));  </span><span class="comment">// string(0) ""<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$ok_utf8</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">));  </span><span class="comment">// string(20) "A valid UTF-8 string"<br /><br /></span><span class="default">?&gt;<br /></span><br />So make sure your charsets are consistent<br /><br /><span class="default">&lt;?php<br /><br />$bad_utf8 </span><span class="keyword">= </span><span class="string">"An invalid UTF-8 string"</span><span class="keyword">;<br /><br /></span><span class="comment">// make sure it's really UTF-8<br /></span><span class="default">$bad_utf8 </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$bad_utf8</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="default">mb_detect_encoding</span><span class="keyword">(</span><span class="default">$bad_utf8</span><span class="keyword">));<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$bad_utf8</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">));  </span><span class="comment">// string(23) "An invalid UTF-8 string" <br /><br /></span><span class="default">?&gt;<br /></span><br />I had this problem because a Mac user was submitting posts copy/pasted from a program and it contained weird chars in it.</span></code></div>
  </div>
 </div>
  <div class="note" id="13693">  <div class="votes">
    <div id="Vu13693">
    <a href="/manual/vote-note.php?id=13693&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13693">
    <a href="/manual/vote-note.php?id=13693&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13693" title="55% like this...">
    4
    </div>
  </div>
  <a href="#13693" class="name">
  <strong class="user"><em>ryan at ryano dot net</em></strong></a><a class="genanchor" href="#13693"> &para;</a><div class="date" title="2001-06-29 03:06"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13693">
<div class="phpcode"><code><span class="html">Actually, if you're using &gt;= 4.0.5, this should theoretically be quicker (less overhead anyway):
<br />
<br />$text = str_replace(array("&amp;gt;", "&amp;lt;", "&amp;quot;", "&amp;amp;"), array("&gt;", "&lt;", "\"", "&amp;"), $text);</span></code></div>
  </div>
 </div>
  <div class="note" id="82435">  <div class="votes">
    <div id="Vu82435">
    <a href="/manual/vote-note.php?id=82435&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82435">
    <a href="/manual/vote-note.php?id=82435&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82435" title="53% like this...">
    3
    </div>
  </div>
  <a href="#82435" class="name">
  <strong class="user"><em>php dot net at orakio dot net</em></strong></a><a class="genanchor" href="#82435"> &para;</a><div class="date" title="2008-04-10 11:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82435">
<div class="phpcode"><code><span class="html">I was recently exploring some code when I saw this being used to make data safe for "SQL".<br /><br />This function should not be used to make data SQL safe (although to prevent phishing it is perfectly good).<br /><br />Here is an example of how NOT to use this function:<br /><br /><span class="default">&lt;?php<br />$username </span><span class="keyword">= </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="string">"</span><span class="default">$_POST</span><span class="keyword">[</span><span class="default">username</span><span class="keyword">]</span><span class="string">"</span><span class="keyword">));<br /><br /></span><span class="default">$uniqueuser </span><span class="keyword">= </span><span class="default">$realm_db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"SELECT `login` FROM `accounts` WHERE `login` = '</span><span class="default">$username</span><span class="string">'"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />(Only other check on $_POST['username'] is to make sure it isn't empty which it is after trim on a white space only name)<br /><br />The problem here is that it is left to default which allows single quote marks which are used in the sql query. Turning on magic quotes might fix it but you should not rely on magic quotes, in fact you should never use it and fix the code instead. There are also problems with \ not being escaped. Even if magic quotes were used there would be the problem of allowing usernames longer than the limit and having some really weird usernames given they are to be used outside of html, this just provide a front end for registering to another system using mysql. Of course using it on the output wouldn;t cause that problem.<br /><br />Another way to make something of a fix would be to use ENT_QUOTE or do:<br /><br /><span class="default">&lt;?php<br />$uniqueuser </span><span class="keyword">= </span><span class="default">$realm_db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'SELECT `login` FROM `accounts` WHERE `login` = "'</span><span class="keyword">.</span><span class="default">$username</span><span class="keyword">.</span><span class="string">'";'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Eitherway none of these solutions are good practice and are not entirely unflawed. This function should simply never be used in such a fashion.<br /><br />I hope this will prevent newbies using this function incorrectly (as they apparently do).</span></code></div>
  </div>
 </div>
  <div class="note" id="117290">  <div class="votes">
    <div id="Vu117290">
    <a href="/manual/vote-note.php?id=117290&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117290">
    <a href="/manual/vote-note.php?id=117290&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117290" title="51% like this...">
    2
    </div>
  </div>
  <a href="#117290" class="name">
  <strong class="user"><em>PoV</em></strong></a><a class="genanchor" href="#117290"> &para;</a><div class="date" title="2015-05-17 11:59"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117290">
<div class="phpcode"><code><span class="html">Be aware of the encoding of your source files!!! <br /><br />Some of the suggestions here make reference to workarounds where you hard-code an encoding.<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">echo </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="string">'&lt;b&gt;Wörmann&lt;/b&gt;'</span><span class="keyword">);  </span><span class="comment">// Why isn't this working?<br /></span><span class="default">?&gt;<br /></span><br />As it turns out, it may actually be your text editor that is to blame.<br /><br />As of PHP 5.4, htmlspecialchars now defaults to the UTF-8 encoding. That said, many text editors default to non-UTF encodings like ISO-8859-1 (i.e. Latin-1) or WIN-1252. If you change the encoding of the file to UTF-8, the code above will now work (i.e. the ö is encoded differently in UTF-8 and ISO-8859-1, and you need the UTF-8 version).<br /><br />Make sure you are editing in UTF-8 Unicode mode! Check your UI or manual for how to convert files to Unicode. It's also a good idea to figure out where to look in your UI to see what the current file encoding is.</span></code></div>
  </div>
 </div>
  <div class="note" id="130454">  <div class="votes">
    <div id="Vu130454">
    <a href="/manual/vote-note.php?id=130454&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130454">
    <a href="/manual/vote-note.php?id=130454&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130454" title="no votes...">
    0
    </div>
  </div>
  <a href="#130454" class="name">
  <strong class="user"><em>yannick_duchene at yahoo dot fr</em></strong></a><a class="genanchor" href="#130454"> &para;</a><div class="date" title="2025-08-21 06:53"><strong>1 month ago</strong></div>
  <div class="text" id="Hcom130454">
<div class="phpcode"><code><span class="html">After this documentation, even without ENT_QUOTES, double quotes should be replaced (unless ENT_NOQUOTES is set). But it is not (at least with PHP 8.3).<br /><br />Is this an issue with the implementation or with the documentation?</span></code></div>
  </div>
 </div>
  <div class="note" id="112228">  <div class="votes">
    <div id="Vu112228">
    <a href="/manual/vote-note.php?id=112228&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112228">
    <a href="/manual/vote-note.php?id=112228&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112228" title="50% like this...">
    1
    </div>
  </div>
  <a href="#112228" class="name">
  <strong class="user"><em>minder at ufive dot unibe dot ch</em></strong></a><a class="genanchor" href="#112228"> &para;</a><div class="date" title="2013-05-19 01:06"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112228">
<div class="phpcode"><code><span class="html">Problem<br /><br />In many PHP legacy products the function htmlspecialchars($string) is used to convert characters like &lt; and &gt; and quotes a.s.o to HTML-entities. That avoids the interpretation of HTML Tags and asymmetric quote situations.<br /><br />Since PHP 5.4 for $string in htmlspecialchars($string) utf8 characters are expected if no charset is defined explicitly as third parameter in the function. Legacy products are mostly in Latin1 (alias iso-8859-1) what makes the functions htmlspecialchars(), htmlentites() and html_entity_decode() to return empty strings if a special character, e. g. a German Umlaut, is present in $string:<br /><br />PHP&lt;5.4<br /><br />echo htmlspecialchars('&lt;b&gt;Woermann&lt;/b&gt;') //Output: &amp;lt;b&amp;gt;Woermann&amp;lt;b&amp;gt;<br />echo htmlspecialchars('Wörmann') //Output: &amp;lt;b&amp;gt;Wörmann&amp;lt;b&amp;gt;<br /><br />PHP=5.4<br /><br />echo htmlspecialchars('&lt;b&gt;Woermann&lt;/b&gt;') //Output: &amp;lt;b&amp;gt;Woermann&amp;lt;b&amp;gt;<br />echo htmlspecialchars('&lt;b&gt;Wörmann&lt;/b&gt;') //Output: empty<br /><br />Three alternative solutions<br /><br />a) Not runnig legacy products on PHP 5.4<br />b) Change all find spots in your code from <br />htmlspecialchars($string) and *** to <br />htmlspecialchars($string, ENT_COMPAT | ENT_HTML401, 'ISO-8859-1')<br />c) Replace all htmlspecialchars() and *** with a new self-made function<br /><br />*** The same is true for htmlentities() and html_entity_decode();<br /><br />Solution c<br /><br />1 Make Search and Replace in the concerned legacy project:<br />Search for:        htmlspecialchars<br />Replace with:   htmlXspecialchars<br />Search for:        htmlentities<br />Replace with:   htmlXentities<br />Search for:        html_entity_decode<br />Replace with:   htmlX_entity_decode<br />2a Copy and paste the following three functions into an existing already everywhere included PHP-file in your legacy project. (of course that PHP-file must be included only once per request, otherwise you will get a Redeclare Function Fatal Error).<br /><br />function htmlXspecialchars($string, $ent=ENT_COMPAT, $charset='ISO-8859-1') {<br />return htmlspecialchars($string, $ent, $charset);<br />}<br /><br />function htmlXentities($string, $ent=ENT_COMPAT, $charset='ISO-8859-1') {<br />return htmlentities($string, $ent, $charset);<br />}<br /><br />function htmlX_entity_decode($string, $ent=ENT_COMPAT, $charset='ISO-8859-1') {<br />return html_entity_decode($string, $ent, $charset);<br />}<br /><br />or 2b crate a new PHP-file containing the three functions mentioned above, let's say, z. B. htmlXfunctions.inc.php and include it on the first line of every PHP-file in your legacy product like this: require_once('htmlXfunctions.inc.php').</span></code></div>
  </div>
 </div>
  <div class="note" id="98698">  <div class="votes">
    <div id="Vu98698">
    <a href="/manual/vote-note.php?id=98698&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98698">
    <a href="/manual/vote-note.php?id=98698&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98698" title="50% like this...">
    1
    </div>
  </div>
  <a href="#98698" class="name">
  <strong class="user"><em>nachitox2000 [at] hotmail [dot] com</em></strong></a><a class="genanchor" href="#98698"> &para;</a><div class="date" title="2010-07-01 05:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98698">
<div class="phpcode"><code><span class="html">I had problems with spanish special characters. So i think in using htmlspecialchars but my strings also contain HTML.
<br />So I used this :) Hope it help
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">htmlspanishchars</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) 
<br />{
<br />    return </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"&amp;lt;"</span><span class="keyword">, </span><span class="string">"&amp;gt;"</span><span class="keyword">), array(</span><span class="string">"&lt;"</span><span class="keyword">, </span><span class="string">"&gt;"</span><span class="keyword">), </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">ENT_NOQUOTES</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126931">  <div class="votes">
    <div id="Vu126931">
    <a href="/manual/vote-note.php?id=126931&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126931">
    <a href="/manual/vote-note.php?id=126931&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126931" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#126931" class="name">
  <strong class="user"><em>Killian Leroux</em></strong></a><a class="genanchor" href="#126931"> &para;</a><div class="date" title="2022-03-16 10:33"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126931">
<div class="phpcode"><code><span class="html">Thanks Thomasvdbulk for your workaround, I would like to add a precision:<br /><br />When the HTML contains a link tag without new line before the script doesn't work :/<br /><br />Your example:<br /><br /><span class="default">&lt;?php<br />$string </span><span class="keyword">= </span><span class="string">"<br />this is smaller &lt; than this&lt;br /&gt;<br />this is greater &gt; than this&lt;br /&gt;<br />this is the same = as this&lt;br /&gt;<br />&lt;a href=\"<a href="http://www.example.com/example.php?test=test" rel="nofollow" target="_blank">http://www.example.com/example.php?test=test</a>\"&gt;This is a link&lt;/a&gt;&lt;br /&gt;<br />&lt;b&gt;Bold&lt;/b&gt; &lt;i&gt;italic&lt;/i&gt; etc..."</span><span class="keyword">;<br />echo </span><span class="default">fixtags</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Works but this doesn't work:<br /><br /><span class="default">&lt;?php<br />$string </span><span class="keyword">= </span><span class="string">"<br />this is smaller &lt; than this&lt;br /&gt;<br />this is greater &gt; than this&lt;br /&gt;<br />this is the same = as this&lt;br /&gt;&lt;a href=\"<a href="http://www.example.com/example.php?test=test" rel="nofollow" target="_blank">http://www.example.com/example.php?test=test</a>\"&gt;This is a link&lt;/a&gt;&lt;br /&gt;<br />&lt;b&gt;Bold&lt;/b&gt; &lt;i&gt;italic&lt;/i&gt; etc..."</span><span class="keyword">;<br />echo </span><span class="default">fixtags</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />So I add a little workaround at the beginning (before htmlspecialchars):<br /><br /><span class="default">&lt;?php<br />$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/&lt;a/'</span><span class="keyword">, </span><span class="string">"\r\n&lt;a"</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I don't like that but I don't find other solution... :/</span></code></div>
  </div>
 </div>
  <div class="note" id="25217">  <div class="votes">
    <div id="Vu25217">
    <a href="/manual/vote-note.php?id=25217&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25217">
    <a href="/manual/vote-note.php?id=25217&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25217" title="46% like this...">
    -3
    </div>
  </div>
  <a href="#25217" class="name">
  <strong class="user"><em>_____ at luukku dot com</em></strong></a><a class="genanchor" href="#25217"> &para;</a><div class="date" title="2002-09-14 02:21"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25217">
<div class="phpcode"><code><span class="html">People, don't use ereg_replace for the most simple string replacing operations (replacing constant string with another).<br />Use str_replace.</span></code></div>
  </div>
 </div>
  <div class="note" id="75795">  <div class="votes">
    <div id="Vu75795">
    <a href="/manual/vote-note.php?id=75795&amp;page=function.htmlspecialchars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75795">
    <a href="/manual/vote-note.php?id=75795&amp;page=function.htmlspecialchars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75795" title="46% like this...">
    -5
    </div>
  </div>
  <a href="#75795" class="name">
  <strong class="user"><em>solar-energy</em></strong></a><a class="genanchor" href="#75795"> &para;</a><div class="date" title="2007-06-16 03:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75795">
<div class="phpcode"><code><span class="html">also see function "urlencode()", useful for passing text with ampersand and other special chars through url<br /><br />(i.e. the text is encoded as if sent from form using GET method)<br /><br />e.g.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">"&lt;a href='foo.php?text="</span><span class="keyword">.</span><span class="default">urlencode</span><span class="keyword">(</span><span class="string">"foo?&amp;bar!"</span><span class="keyword">).</span><span class="string">"'&gt;link&lt;/a&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />produces<br /><br />&lt;a href='foo.php?text=foo%3F%26bar%21'&gt;link&lt;/a&gt;<br /><br />and if the link is followed, the $_GET["text"] in foo.php will contain "foo?&amp;bar!"</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.htmlspecialchars&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.htmlspecialchars.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
