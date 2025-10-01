<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ps_show_boxed - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ps-show-boxed.php">
 <link rel="shorturl" href="https://www.php.net/ps-show-boxed">
 <link rel="alternate" href="https://www.php.net/ps-show-boxed" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ps.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ps-show.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ps-show-xy.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ps-show-boxed.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ps-show-boxed.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ps-show-boxed.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ps-show-boxed.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ps-show-boxed.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ps-show-boxed.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ps-show-boxed.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ps-show-boxed.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ps-show-boxed.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ps-show-boxed.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ps-show-boxed.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Output text in a box" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ps_show_boxed - Manual" />
<meta name="twitter:description" content="Output text in a box" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ps_show_boxed - Manual" />
<meta itemprop="description" content="Output text in a box" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Output text in a box" />

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
        <a href="function.ps-show-xy.php">
          ps_show_xy &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ps-show.php">
          &laquo; ps_show        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.nontext.php'>Non-Text MIME Output</a></li>      <li><a href='book.ps.php'>PS</a></li>      <li><a href='ref.ps.php'>PS Functions</a></li>      </ul>
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
            <option value='en/function.ps-show-boxed.php' selected="selected">English</option>
            <option value='de/function.ps-show-boxed.php'>German</option>
            <option value='es/function.ps-show-boxed.php'>Spanish</option>
            <option value='fr/function.ps-show-boxed.php'>French</option>
            <option value='it/function.ps-show-boxed.php'>Italian</option>
            <option value='ja/function.ps-show-boxed.php'>Japanese</option>
            <option value='pt_BR/function.ps-show-boxed.php'>Brazilian Portuguese</option>
            <option value='ru/function.ps-show-boxed.php'>Russian</option>
            <option value='tr/function.ps-show-boxed.php'>Turkish</option>
            <option value='uk/function.ps-show-boxed.php'>Ukrainian</option>
            <option value='zh/function.ps-show-boxed.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ps-show-boxed" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ps_show_boxed</h1>
  <p class="verinfo">(PECL ps &gt;= 1.1.0)</p><p class="refpurpose"><span class="refname">ps_show_boxed</span> &mdash; <span class="dc-title">Output text in a box</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ps-show-boxed-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ps_show_boxed</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$psdoc</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$text</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$left</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$bottom</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hmode</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$feature</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Outputs a text in a given box. The lower left corner of the box is at
   (<code class="parameter">left</code>, <code class="parameter">bottom</code>). Line breaks
   will be inserted where needed. Multiple spaces are treated as one.
   Tabulators are treated as spaces.
  </p>
  <p class="para">
   The text will be hyphenated if the parameter
   <code class="parameter">hyphenation</code> is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
   and the parameter <code class="parameter">hyphendict</code> contains a valid
   filename for a hyphenation
   file. The line spacing is taken from the value <code class="literal">leading</code>.
   Paragraphs can be
   separated by an empty line just like in TeX. If the value
   <code class="literal">parindent</code> is
   set to value &gt; 0.0 then the first n lines will be indented. The number n
   of lines is set by the parameter <code class="literal">numindentlines</code>.
   In order to prevent
   indenting of the first m paragraphs set the value
   <code class="literal">parindentskip</code> to a
   positive number.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ps-show-boxed-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">psdoc</code></dt>
     <dd>
      <p class="para">
       Resource identifier of the postscript file
       as returned by <span class="function"><a href="function.ps-new.php" class="function">ps_new()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">text</code></dt>
     <dd>
      <p class="para">
       The text to be output into the given box.
      </p>
     </dd>
    
    
     <dt><code class="parameter">left</code></dt>
     <dd>
      <p class="para">
       x-coordinate of the lower left corner of the box.
      </p>
     </dd>
    
    
     <dt><code class="parameter">bottom</code></dt>
     <dd>
      <p class="para">
       y-coordinate of the lower left corner of the box.
      </p>
     </dd>
    
    
     <dt><code class="parameter">width</code></dt>
     <dd>
      <p class="para">
       Width of the box.
      </p>
     </dd>
    
    
     <dt><code class="parameter">height</code></dt>
     <dd>
      <p class="para">
       Height of the box.
      </p>
     </dd>
    
    
     <dt><code class="parameter">hmode</code></dt>
     <dd>
      <p class="para">
       The parameter <code class="parameter">hmode</code> can be <code class="literal">justify</code>,
       <code class="literal">fulljustify</code>, <code class="literal">right</code>, <code class="literal">left</code>, or <code class="literal">center</code>.
       The difference of <code class="literal">justify</code> and <code class="literal">fulljustify</code> just affects the last line of the box. In
       <code class="literal">fulljustify</code> mode the last line will be left and right justified unless
       this is also the last line of paragraph. In <code class="literal">justify</code> mode it will always
       be left justified.
      </p>
     </dd>
    
    
     <dt><code class="parameter">feature</code></dt>
     <dd>
      <p class="para">
       
      </p>
     </dd>
    
   </dl>
  </p>

  <div class="refsect2 unknown-19" id="refsect2-function.ps-show-boxed-unknown-19">
   <h4 class="title">Used parameters</h4>
   <p class="para">
    The output of <span class="function"><strong>ps_show_boxed()</strong></span> can be configured with
    several parameters and values which must be set with either
    <span class="function"><a href="function.ps-set-parameter.php" class="function">ps_set_parameter()</a></span> or <span class="function"><a href="function.ps-set-value.php" class="function">ps_set_value()</a></span>.
    Beside the parameters and values which affect text output, the following
    parameters and values are evaluated.
    <dl>
     
      <dt>leading (value)</dt>
      <dd>
       <p class="para">Distance between baselines of two consecutive lines.</p>
      </dd>
     
     
      <dt>linebreak (parameter)</dt>
      <dd>
       <p class="para">
        Set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if you want a carriage return to start a new line instead
        of treating it as a space. Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
       </p>
      </dd>
     
     
      <dt>parbreak (parameter)</dt>
      <dd>
       <p class="para">
        Set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if you want a carriage return on a single line to start a
        new paragraph instead of treating it as a space. Defaults to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
       </p>
      </dd>
     
     
      <dt>hyphenation (parameter)</dt>
      <dd>
       <p class="para">
        Set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> in order to turn hyphenation on. This requires a
        dictionary to be set with the parameter <code class="parameter">hyphendict</code>. Defaults to
        <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
       </p>
      </dd>
     
     
      <dt>hyphendict (parameter)</dt>
      <dd>
       <p class="para">
        Filename of the dictionary used for hyphenation pattern (see below).
       </p>
      </dd>
     
     
      <dt>hyphenminchar (value)</dt>
      <dd>
       <p class="para">
        The number of chars which must at least be left over before or after
        the hyphen. This implies that only words of at least two times this
        value will be hyphenated. The default value is three. Setting a value
        of zero will result in the default value.
       </p>
      </dd>
     
     
      <dt>parindent (value)</dt>
      <dd>
       <p class="para">
        Set the amount of space in pixel for indenting the first m lines of a
        paragraph. m can be set with the value <code class="literal">numindentlines</code>.
       </p>
      </dd>
     
     
      <dt>parskip (value)</dt>
      <dd>
       <p class="para">
        Set the amount of extra space in pixel between paragraphs. Defaults to
        <code class="literal">0</code> which will result in a normal line distance.
       </p>
      </dd>
     
     
      <dt>numindentlines (value)</dt>
      <dd>
       <p class="para">
        Number of lines from the start of the paragraph which will be indented.
        Defaults to <code class="literal">1</code>.
       </p>
      </dd>
     
     
      <dt>parindentskip (value)</dt>
      <dd>
       <p class="para">
        Number of paragraphs in the box whose first lines will not be indented.
        This defaults to <code class="literal">0</code>. This is useful for paragraphs right after a section
        heading or text being continued in a second box. In both case one would
        set this to <code class="literal">1</code>.
       </p>
      </dd>
     
     
      <dt>linenumbermode (parameter)</dt>
      <dd>
       <p class="para">
        Set how lines are to be numbered. Possible values are <code class="literal">box</code> for
        numbering lines in the whole box or <code class="literal">paragraph</code> to number lines within
        each paragraph.
       </p>
      </dd>
     
     
      <dt>linenumberspace (value)</dt>
      <dd>
       <p class="para">
        The space for the column left of the numbered line containing the line
        number. The line number will be right justified into this column.
        Defaults to <code class="literal">20</code>.
       </p>
      </dd>
     
     
      <dt>linenumbersep (value)</dt>
      <dd>
       <p class="para">
        The space between the column with line numbers and the line itself.
        Defaults to <code class="literal">5</code>.
       </p>
      </dd>
     
    </dl>
   </p>
  </div>


  <div class="refsect2 unknown-22" id="refsect2-function.ps-show-boxed-unknown-22">
   <h4 class="title">Hyphenation</h4>
   <p class="para">
    Text is hyphenated if the parameter <code class="literal">hyphenation</code> is set
    to true and a valid hyphenation dictionary is set. pslib does not ship its own
    hyphenation dictionary but uses one from openoffice, scribus or koffice.
    You can find their dictionaries for different languages in one of the
    following directories if the software is installed:
    <ul class="simplelist">
     <li>
      <var class="filename">/usr/share/apps/koffice/hyphdicts/</var>
     </li>
     <li>
      <var class="filename">/usr/lib/scribus/dicts/</var>
     </li>
     <li>
      <var class="filename">/usr/lib/openoffice/share/dict/ooo/</var>
     </li>
    </ul>
    Currently scribus appears to have the most complete hyphenation
    dictionaries.
   </p>
  </div>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ps-show-boxed-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Number of characters that could not be written.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ps-show-boxed-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ps-continue-text.php" class="function" rel="rdfs-seeAlso">ps_continue_text()</a> - Continue text in next line</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ps/functions/ps-show-boxed.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ps-show-boxed%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ps-show-boxed&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ps-show-boxed.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91506">  <div class="votes">
    <div id="Vu91506">
    <a href="/manual/vote-note.php?id=91506&amp;page=function.ps-show-boxed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91506">
    <a href="/manual/vote-note.php?id=91506&amp;page=function.ps-show-boxed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91506" title="no votes...">
    0
    </div>
  </div>
  <a href="#91506" class="name">
  <strong class="user"><em>php at catchall dot toao dot net</em></strong></a><a class="genanchor" href="#91506"> &para;</a><div class="date" title="2009-06-13 03:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91506">
<div class="phpcode"><code><span class="html">In order to justify text in the way a word processor would, one must set 'linebreak' to 'false' and 'parbreak' to 'true'.  For every new line, you must use "\n\n" (two newlines, NOT carriage returns as stated in the docs).  If you wish to make two new lines in your finished document, "\n\n\n\n" will not work.  Instead, you must use "\n\n \n\n".<br /><br />For every line to be justified, you should append "\n " (new line and a space) to the end of the text.  For this to work, 'linebreak' must be 'true'.</span></code></div>
  </div>
 </div>
  <div class="note" id="72079">  <div class="votes">
    <div id="Vu72079">
    <a href="/manual/vote-note.php?id=72079&amp;page=function.ps-show-boxed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72079">
    <a href="/manual/vote-note.php?id=72079&amp;page=function.ps-show-boxed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72079" title="50% like this...">
    0
    </div>
  </div>
  <a href="#72079" class="name">
  <strong class="user"><em>tilman dot schroeder at gmx dot de</em></strong></a><a class="genanchor" href="#72079"> &para;</a><div class="date" title="2007-01-01 07:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72079">
<div class="phpcode"><code><span class="html">Note that there will no box be drawn around the text even if the function name suggests this.<br /><br />After the box has been drawn you can get the new x and y position with<br /><br /><span class="default">&lt;?php<br />$x</span><span class="keyword">=</span><span class="default">ps_get_value</span><span class="keyword">(</span><span class="default">$ps</span><span class="keyword">,</span><span class="string">'textx'</span><span class="keyword">,</span><span class="default">NULL</span><span class="keyword">);<br /></span><span class="default">$y</span><span class="keyword">=</span><span class="default">ps_get_value</span><span class="keyword">(</span><span class="default">$ps</span><span class="keyword">,</span><span class="string">'texty'</span><span class="keyword">,</span><span class="default">NULL</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />textx points to the end of the last character written by ps_show_boxed and texty points to the baseline of the last line written (which means, if there is e.g. a 'g' in the last line then the lower part's y-coordinates of the g will be lower than the value of texty. I hope you understand what I meant)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ps-show-boxed&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ps-show-boxed.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ps.php">PS Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ps-add-bookmark.php" title="ps_&#8203;add_&#8203;bookmark">ps_&#8203;add_&#8203;bookmark</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-add-launchlink.php" title="ps_&#8203;add_&#8203;launchlink">ps_&#8203;add_&#8203;launchlink</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-add-locallink.php" title="ps_&#8203;add_&#8203;locallink">ps_&#8203;add_&#8203;locallink</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-add-note.php" title="ps_&#8203;add_&#8203;note">ps_&#8203;add_&#8203;note</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-add-pdflink.php" title="ps_&#8203;add_&#8203;pdflink">ps_&#8203;add_&#8203;pdflink</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-add-weblink.php" title="ps_&#8203;add_&#8203;weblink">ps_&#8203;add_&#8203;weblink</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-arc.php" title="ps_&#8203;arc">ps_&#8203;arc</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-arcn.php" title="ps_&#8203;arcn">ps_&#8203;arcn</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-begin-page.php" title="ps_&#8203;begin_&#8203;page">ps_&#8203;begin_&#8203;page</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-begin-pattern.php" title="ps_&#8203;begin_&#8203;pattern">ps_&#8203;begin_&#8203;pattern</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-begin-template.php" title="ps_&#8203;begin_&#8203;template">ps_&#8203;begin_&#8203;template</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-circle.php" title="ps_&#8203;circle">ps_&#8203;circle</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-clip.php" title="ps_&#8203;clip">ps_&#8203;clip</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-close.php" title="ps_&#8203;close">ps_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-close-image.php" title="ps_&#8203;close_&#8203;image">ps_&#8203;close_&#8203;image</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-closepath.php" title="ps_&#8203;closepath">ps_&#8203;closepath</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-closepath-stroke.php" title="ps_&#8203;closepath_&#8203;stroke">ps_&#8203;closepath_&#8203;stroke</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-continue-text.php" title="ps_&#8203;continue_&#8203;text">ps_&#8203;continue_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-curveto.php" title="ps_&#8203;curveto">ps_&#8203;curveto</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-delete.php" title="ps_&#8203;delete">ps_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-end-page.php" title="ps_&#8203;end_&#8203;page">ps_&#8203;end_&#8203;page</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-end-pattern.php" title="ps_&#8203;end_&#8203;pattern">ps_&#8203;end_&#8203;pattern</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-end-template.php" title="ps_&#8203;end_&#8203;template">ps_&#8203;end_&#8203;template</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-fill.php" title="ps_&#8203;fill">ps_&#8203;fill</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-fill-stroke.php" title="ps_&#8203;fill_&#8203;stroke">ps_&#8203;fill_&#8203;stroke</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-findfont.php" title="ps_&#8203;findfont">ps_&#8203;findfont</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-get-buffer.php" title="ps_&#8203;get_&#8203;buffer">ps_&#8203;get_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-get-parameter.php" title="ps_&#8203;get_&#8203;parameter">ps_&#8203;get_&#8203;parameter</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-get-value.php" title="ps_&#8203;get_&#8203;value">ps_&#8203;get_&#8203;value</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-hyphenate.php" title="ps_&#8203;hyphenate">ps_&#8203;hyphenate</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-include-file.php" title="ps_&#8203;include_&#8203;file">ps_&#8203;include_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-lineto.php" title="ps_&#8203;lineto">ps_&#8203;lineto</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-makespotcolor.php" title="ps_&#8203;makespotcolor">ps_&#8203;makespotcolor</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-moveto.php" title="ps_&#8203;moveto">ps_&#8203;moveto</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-new.php" title="ps_&#8203;new">ps_&#8203;new</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-open-file.php" title="ps_&#8203;open_&#8203;file">ps_&#8203;open_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-open-image.php" title="ps_&#8203;open_&#8203;image">ps_&#8203;open_&#8203;image</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-open-image-file.php" title="ps_&#8203;open_&#8203;image_&#8203;file">ps_&#8203;open_&#8203;image_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-open-memory-image.php" title="ps_&#8203;open_&#8203;memory_&#8203;image">ps_&#8203;open_&#8203;memory_&#8203;image</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-place-image.php" title="ps_&#8203;place_&#8203;image">ps_&#8203;place_&#8203;image</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-rect.php" title="ps_&#8203;rect">ps_&#8203;rect</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-restore.php" title="ps_&#8203;restore">ps_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-rotate.php" title="ps_&#8203;rotate">ps_&#8203;rotate</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-save.php" title="ps_&#8203;save">ps_&#8203;save</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-scale.php" title="ps_&#8203;scale">ps_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-set-border-color.php" title="ps_&#8203;set_&#8203;border_&#8203;color">ps_&#8203;set_&#8203;border_&#8203;color</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-set-border-dash.php" title="ps_&#8203;set_&#8203;border_&#8203;dash">ps_&#8203;set_&#8203;border_&#8203;dash</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-set-border-style.php" title="ps_&#8203;set_&#8203;border_&#8203;style">ps_&#8203;set_&#8203;border_&#8203;style</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-set-info.php" title="ps_&#8203;set_&#8203;info">ps_&#8203;set_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-set-parameter.php" title="ps_&#8203;set_&#8203;parameter">ps_&#8203;set_&#8203;parameter</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-set-text-pos.php" title="ps_&#8203;set_&#8203;text_&#8203;pos">ps_&#8203;set_&#8203;text_&#8203;pos</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-set-value.php" title="ps_&#8203;set_&#8203;value">ps_&#8203;set_&#8203;value</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setcolor.php" title="ps_&#8203;setcolor">ps_&#8203;setcolor</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setdash.php" title="ps_&#8203;setdash">ps_&#8203;setdash</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setflat.php" title="ps_&#8203;setflat">ps_&#8203;setflat</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setfont.php" title="ps_&#8203;setfont">ps_&#8203;setfont</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setgray.php" title="ps_&#8203;setgray">ps_&#8203;setgray</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setlinecap.php" title="ps_&#8203;setlinecap">ps_&#8203;setlinecap</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setlinejoin.php" title="ps_&#8203;setlinejoin">ps_&#8203;setlinejoin</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setlinewidth.php" title="ps_&#8203;setlinewidth">ps_&#8203;setlinewidth</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setmiterlimit.php" title="ps_&#8203;setmiterlimit">ps_&#8203;setmiterlimit</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setoverprintmode.php" title="ps_&#8203;setoverprintmode">ps_&#8203;setoverprintmode</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-setpolydash.php" title="ps_&#8203;setpolydash">ps_&#8203;setpolydash</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-shading.php" title="ps_&#8203;shading">ps_&#8203;shading</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-shading-pattern.php" title="ps_&#8203;shading_&#8203;pattern">ps_&#8203;shading_&#8203;pattern</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-shfill.php" title="ps_&#8203;shfill">ps_&#8203;shfill</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-show.php" title="ps_&#8203;show">ps_&#8203;show</a>
                        </li>
                                                <li class="current">
                            <a href="function.ps-show-boxed.php" title="ps_&#8203;show_&#8203;boxed">ps_&#8203;show_&#8203;boxed</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-show-xy.php" title="ps_&#8203;show_&#8203;xy">ps_&#8203;show_&#8203;xy</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-show-xy2.php" title="ps_&#8203;show_&#8203;xy2">ps_&#8203;show_&#8203;xy2</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-show2.php" title="ps_&#8203;show2">ps_&#8203;show2</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-string-geometry.php" title="ps_&#8203;string_&#8203;geometry">ps_&#8203;string_&#8203;geometry</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-stringwidth.php" title="ps_&#8203;stringwidth">ps_&#8203;stringwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-stroke.php" title="ps_&#8203;stroke">ps_&#8203;stroke</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-symbol.php" title="ps_&#8203;symbol">ps_&#8203;symbol</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-symbol-name.php" title="ps_&#8203;symbol_&#8203;name">ps_&#8203;symbol_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-symbol-width.php" title="ps_&#8203;symbol_&#8203;width">ps_&#8203;symbol_&#8203;width</a>
                        </li>
                                                <li class="">
                            <a href="function.ps-translate.php" title="ps_&#8203;translate">ps_&#8203;translate</a>
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
