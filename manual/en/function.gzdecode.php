<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gzdecode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gzdecode.php">
 <link rel="shorturl" href="https://www.php.net/gzdecode">
 <link rel="alternate" href="https://www.php.net/gzdecode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.zlib.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gzcompress.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gzdeflate.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gzdecode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gzdecode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gzdecode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gzdecode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gzdecode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gzdecode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gzdecode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gzdecode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gzdecode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gzdecode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gzdecode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Decodes a gzip compressed string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gzdecode - Manual" />
<meta name="twitter:description" content="Decodes a gzip compressed string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gzdecode - Manual" />
<meta itemprop="description" content="Decodes a gzip compressed string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Decodes a gzip compressed string" />

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
        <a href="function.gzdeflate.php">
          gzdeflate &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gzcompress.php">
          &laquo; gzcompress        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zlib.php'>Zlib</a></li>      <li><a href='ref.zlib.php'>Zlib Functions</a></li>      </ul>
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
            <option value='en/function.gzdecode.php' selected="selected">English</option>
            <option value='de/function.gzdecode.php'>German</option>
            <option value='es/function.gzdecode.php'>Spanish</option>
            <option value='fr/function.gzdecode.php'>French</option>
            <option value='it/function.gzdecode.php'>Italian</option>
            <option value='ja/function.gzdecode.php'>Japanese</option>
            <option value='pt_BR/function.gzdecode.php'>Brazilian Portuguese</option>
            <option value='ru/function.gzdecode.php'>Russian</option>
            <option value='tr/function.gzdecode.php'>Turkish</option>
            <option value='uk/function.gzdecode.php'>Ukrainian</option>
            <option value='zh/function.gzdecode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gzdecode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gzdecode</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gzdecode</span> &mdash; <span class="dc-title">Decodes a gzip compressed string</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.gzdecode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gzdecode</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$max_length</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">   
   This function returns a decoded version of the input
   <code class="parameter">data</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.gzdecode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The data to decode, encoded by <span class="function"><a href="function.gzencode.php" class="function">gzencode()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">max_length</code></dt>
     <dd>
      <p class="para">
       The maximum length of data to decode.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.gzdecode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The decoded string, or  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.gzdecode-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   In case of failure, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level error is issued.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.gzdecode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.gzencode.php" class="function" rel="rdfs-seeAlso">gzencode()</a> - Create a gzip compressed string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/zlib/functions/gzdecode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gzdecode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gzdecode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gzdecode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112200">  <div class="votes">
    <div id="Vu112200">
    <a href="/manual/vote-note.php?id=112200&amp;page=function.gzdecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112200">
    <a href="/manual/vote-note.php?id=112200&amp;page=function.gzdecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112200" title="69% like this...">
    21
    </div>
  </div>
  <a href="#112200" class="name">
  <strong class="user"><em>anonymous at dekho-ji dot com</em></strong></a><a class="genanchor" href="#112200"> &para;</a><div class="date" title="2013-05-16 11:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112200">
<div class="phpcode"><code><span class="html">To decode / uncompress the received HTTP POST data in PHP code, request data coming from Java / Android application via HTTP POST GZIP / DEFLATE compressed format<br /><br />1) Data sent from Java Android app to PHP using DeflaterOutputStream java class and received in PHP as shown below<br />echo gzinflate( substr($HTTP_RAW_POST_DATA,2,-4) ) . PHP_EOL  . PHP_EOL;<br /><br />2) Data sent from Java Android app to PHP using GZIPOutputStream java class and received in PHP code as shown below<br />echo gzinflate( substr($HTTP_RAW_POST_DATA,10,-8) ) . PHP_EOL  . PHP_EOL;<br /><br />From Java Android side (API level 10+), data being sent in DEFLATE compressed format<br />        String body = "Lorem ipsum shizzle ma nizle";<br />        URL url = new URL("<a href="http://www.url.com/postthisdata.php" rel="nofollow" target="_blank">http://www.url.com/postthisdata.php</a>");<br />        URLConnection conn = url.openConnection();<br />        conn.setDoOutput(true);<br />        conn.setRequestProperty("Content-encoding", "deflate");<br />        conn.setRequestProperty("Content-type", "application/octet-stream");<br />        DeflaterOutputStream dos = new DeflaterOutputStream(<br />                conn.getOutputStream());<br />        dos.write(body.getBytes());<br />        dos.flush();<br />        dos.close();<br />        BufferedReader in = new BufferedReader(new InputStreamReader(<br />                conn.getInputStream()));<br />        String decodedString = "";<br />        while ((decodedString = in.readLine()) != null) {<br />            Log.e("dump",decodedString);<br />        }<br />        in.close();<br /><br />On PHP side (v 5.3.1), code for decompressing this DEFLATE data will be<br />    echo substr($HTTP_RAW_POST_DATA,2,-4);<br /><br />From Java Android side (API level 10+), data being sent in GZIP compressed format<br /><br />        String body1 = "Lorem ipsum shizzle ma nizle";<br />        URL url1 = new URL("<a href="http://www.url.com/postthisdata.php" rel="nofollow" target="_blank">http://www.url.com/postthisdata.php</a>");<br />        URLConnection conn1 = url1.openConnection();<br />        conn1.setDoOutput(true);<br />        conn1.setRequestProperty("Content-encoding", "gzip");<br />        conn1.setRequestProperty("Content-type", "application/octet-stream");<br />        GZIPOutputStream dos1 = new GZIPOutputStream(conn1.getOutputStream());<br />        dos1.write(body1.getBytes());<br />        dos1.flush();<br />        dos1.close();<br />        BufferedReader in1 = new BufferedReader(new InputStreamReader(<br />                conn1.getInputStream()));<br />        String decodedString1 = "";<br />        while ((decodedString1 = in1.readLine()) != null) {<br />            Log.e("dump",decodedString1);<br />        }<br />        in1.close();<br /><br />On PHP side (v 5.3.1), code for decompressing this GZIP data will be<br />    echo substr($HTTP_RAW_POST_DATA,10,-8);<br /><br />Useful PHP code for printing out compressed data using all available formats.<br /><br />$data = "Lorem ipsum shizzle ma nizle";<br />echo "\n\n\n";<br />for($i=-1;$i&lt;=9;$i++)<br />    echo chunk_split(strtoupper(bin2hex(gzcompress($data,$i))),2," ") . PHP_EOL  . PHP_EOL;<br />echo "\n\n\n";<br />for($i=-1;$i&lt;=9;$i++)<br />    echo chunk_split(strtoupper(bin2hex(gzdeflate($data,$i))),2," ") . PHP_EOL  . PHP_EOL;<br />echo "\n\n\n";<br />for($i=-1;$i&lt;=9;$i++)<br />    echo chunk_split(strtoupper(bin2hex(gzencode($data,$i,FORCE_GZIP))),2," ") . PHP_EOL  . PHP_EOL;<br />echo "\n\n\n";<br />for($i=-1;$i&lt;=9;$i++)<br />    echo chunk_split(strtoupper(bin2hex(gzencode($data,$i,FORCE_DEFLATE))),2," ") . PHP_EOL  . PHP_EOL;<br />echo "\n\n\n";<br /><br />Hope this helps. Please ThumbsUp if this saved you a lot of effort and time.</span></code></div>
  </div>
 </div>
  <div class="note" id="106397">  <div class="votes">
    <div id="Vu106397">
    <a href="/manual/vote-note.php?id=106397&amp;page=function.gzdecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106397">
    <a href="/manual/vote-note.php?id=106397&amp;page=function.gzdecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106397" title="66% like this...">
    11
    </div>
  </div>
  <a href="#106397" class="name">
  <strong class="user"><em>tomas at slax dot org</em></strong></a><a class="genanchor" href="#106397"> &para;</a><div class="date" title="2011-11-05 04:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106397">
<div class="phpcode"><code><span class="html">I don't have any deep knowledge in compression algorithms and formats, so I have no idea if this works the same on all platforms. But by several experiments on my Linux box I found how to get gzdecoded data without temporary files. Here it is:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">gzdecode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)
<br />{
<br />   return </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">,-</span><span class="default">8</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />That's it. Simply strip header and footer bytes and you get raw deflated data for inflation.</span></code></div>
  </div>
 </div>
  <div class="note" id="82930">  <div class="votes">
    <div id="Vu82930">
    <a href="/manual/vote-note.php?id=82930&amp;page=function.gzdecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82930">
    <a href="/manual/vote-note.php?id=82930&amp;page=function.gzdecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82930" title="69% like this...">
    9
    </div>
  </div>
  <a href="#82930" class="name">
  <strong class="user"><em>katzlbtjunk at hotmail dot com</em></strong></a><a class="genanchor" href="#82930"> &para;</a><div class="date" title="2008-05-02 07:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82930">
<div class="phpcode"><code><span class="html">3 more bugs found and fixed: <br />1. failed to work when the gz contained a filename - FIXED<br />2. failed to work on 64-bit architecture (checksum) - FIXED<br />3. failed to work when the gz contained a comment - cannot verify. <br />Returns some errors (not all!) and filename.<br /><span class="default">&lt;?php </span><span class="keyword">function </span><span class="default">gzdecode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,&amp;</span><span class="default">$filename</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">,&amp;</span><span class="default">$error</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">,</span><span class="default">$maxlength</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) <br />{<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />    if (</span><span class="default">$len </span><span class="keyword">&lt; </span><span class="default">18 </span><span class="keyword">|| </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">),</span><span class="string">"\x1f\x8b"</span><span class="keyword">)) {<br />        </span><span class="default">$error </span><span class="keyword">= </span><span class="string">"Not in GZIP format."</span><span class="keyword">;<br />        return </span><span class="default">null</span><span class="keyword">;  </span><span class="comment">// Not GZIP format (See RFC 1952)<br />    </span><span class="keyword">}<br />    </span><span class="default">$method </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));  </span><span class="comment">// Compression method<br />    </span><span class="default">$flags  </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));  </span><span class="comment">// Flags<br />    </span><span class="keyword">if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">31 </span><span class="keyword">!= </span><span class="default">$flags</span><span class="keyword">) {<br />        </span><span class="default">$error </span><span class="keyword">= </span><span class="string">"Reserved bits not allowed."</span><span class="keyword">;<br />        return </span><span class="default">null</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// NOTE: $mtime may be negative (PHP integer limitations)<br />    </span><span class="default">$mtime </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">));<br />    </span><span class="default">$mtime </span><span class="keyword">= </span><span class="default">$mtime</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    </span><span class="default">$xfl   </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$os    </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$headerlen </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br />    </span><span class="default">$extralen  </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$extra     </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">4</span><span class="keyword">) {<br />        </span><span class="comment">// 2-byte length prefixed EXTRA data in header<br />        </span><span class="keyword">if (</span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">2 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;  </span><span class="comment">// invalid<br />        </span><span class="keyword">}<br />        </span><span class="default">$extralen </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"v"</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />        </span><span class="default">$extralen </span><span class="keyword">= </span><span class="default">$extralen</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />        if (</span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">2 </span><span class="keyword">- </span><span class="default">$extralen </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;  </span><span class="comment">// invalid<br />        </span><span class="keyword">}<br />        </span><span class="default">$extra </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">,</span><span class="default">$extralen</span><span class="keyword">);<br />        </span><span class="default">$headerlen </span><span class="keyword">+= </span><span class="default">2 </span><span class="keyword">+ </span><span class="default">$extralen</span><span class="keyword">;<br />    }<br />    </span><span class="default">$filenamelen </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">8</span><span class="keyword">) {<br />        </span><span class="comment">// C-style string<br />        </span><span class="keyword">if (</span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">; </span><span class="comment">// invalid<br />        </span><span class="keyword">}<br />        </span><span class="default">$filenamelen </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">),</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />        if (</span><span class="default">$filenamelen </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">$filenamelen </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">; </span><span class="comment">// invalid<br />        </span><span class="keyword">}<br />        </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">,</span><span class="default">$filenamelen</span><span class="keyword">);<br />        </span><span class="default">$headerlen </span><span class="keyword">+= </span><span class="default">$filenamelen </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />    }<br />    </span><span class="default">$commentlen </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$comment </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">16</span><span class="keyword">) {<br />        </span><span class="comment">// C-style string COMMENT data in header<br />        </span><span class="keyword">if (</span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// invalid<br />        </span><span class="keyword">}<br />        </span><span class="default">$commentlen </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">),</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />        if (</span><span class="default">$commentlen </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">$commentlen </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// Invalid header format<br />        </span><span class="keyword">}<br />        </span><span class="default">$comment </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">,</span><span class="default">$commentlen</span><span class="keyword">);<br />        </span><span class="default">$headerlen </span><span class="keyword">+= </span><span class="default">$commentlen </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />    }<br />    </span><span class="default">$headercrc </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">2</span><span class="keyword">) {<br />        </span><span class="comment">// 2-bytes (lowest order) of CRC32 on header present<br />        </span><span class="keyword">if (</span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">2 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// invalid<br />        </span><span class="keyword">}<br />        </span><span class="default">$calccrc </span><span class="keyword">= </span><span class="default">crc32</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">)) &amp; </span><span class="default">0xffff</span><span class="keyword">;<br />        </span><span class="default">$headercrc </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"v"</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />        </span><span class="default">$headercrc </span><span class="keyword">= </span><span class="default">$headercrc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />        if (</span><span class="default">$headercrc </span><span class="keyword">!= </span><span class="default">$calccrc</span><span class="keyword">) {<br />            </span><span class="default">$error </span><span class="keyword">= </span><span class="string">"Header checksum failed."</span><span class="keyword">;<br />            return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// Bad header CRC<br />        </span><span class="keyword">}<br />        </span><span class="default">$headerlen </span><span class="keyword">+= </span><span class="default">2</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// GZIP FOOTER<br />    </span><span class="default">$datacrc </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,-</span><span class="default">8</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">));<br />    </span><span class="default">$datacrc </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%u'</span><span class="keyword">,</span><span class="default">$datacrc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &amp; </span><span class="default">0xFFFFFFFF</span><span class="keyword">);<br />    </span><span class="default">$isize </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,-</span><span class="default">4</span><span class="keyword">));<br />    </span><span class="default">$isize </span><span class="keyword">= </span><span class="default">$isize</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    </span><span class="comment">// decompression:<br />    </span><span class="default">$bodylen </span><span class="keyword">= </span><span class="default">$len</span><span class="keyword">-</span><span class="default">$headerlen</span><span class="keyword">-</span><span class="default">8</span><span class="keyword">;<br />    if (</span><span class="default">$bodylen </span><span class="keyword">&lt; </span><span class="default">1</span><span class="keyword">) {<br />        </span><span class="comment">// IMPLEMENTATION BUG!<br />        </span><span class="keyword">return </span><span class="default">null</span><span class="keyword">;<br />    }<br />    </span><span class="default">$body </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">,</span><span class="default">$bodylen</span><span class="keyword">);<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    if (</span><span class="default">$bodylen </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />        switch (</span><span class="default">$method</span><span class="keyword">) {<br />        case </span><span class="default">8</span><span class="keyword">:<br />            </span><span class="comment">// Currently the only supported compression method:<br />            </span><span class="default">$data </span><span class="keyword">= </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">,</span><span class="default">$maxlength</span><span class="keyword">);<br />            break;<br />        default:<br />            </span><span class="default">$error </span><span class="keyword">= </span><span class="string">"Unknown compression method."</span><span class="keyword">;<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }  </span><span class="comment">// zero-byte body content is allowed<br />    // Verifiy CRC32<br />    </span><span class="default">$crc   </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%u"</span><span class="keyword">,</span><span class="default">crc32</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));<br />    </span><span class="default">$crcOK </span><span class="keyword">= </span><span class="default">$crc </span><span class="keyword">== </span><span class="default">$datacrc</span><span class="keyword">;<br />    </span><span class="default">$lenOK </span><span class="keyword">= </span><span class="default">$isize </span><span class="keyword">== </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />    if (!</span><span class="default">$lenOK </span><span class="keyword">|| !</span><span class="default">$crcOK</span><span class="keyword">) {<br />        </span><span class="default">$error </span><span class="keyword">= ( </span><span class="default">$lenOK </span><span class="keyword">? </span><span class="string">'' </span><span class="keyword">: </span><span class="string">'Length check FAILED. '</span><span class="keyword">) . ( </span><span class="default">$crcOK </span><span class="keyword">? </span><span class="string">'' </span><span class="keyword">: </span><span class="string">'Checksum FAILED.'</span><span class="keyword">);<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$data</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82879">  <div class="votes">
    <div id="Vu82879">
    <a href="/manual/vote-note.php?id=82879&amp;page=function.gzdecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82879">
    <a href="/manual/vote-note.php?id=82879&amp;page=function.gzdecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82879" title="70% like this...">
    4
    </div>
  </div>
  <a href="#82879" class="name">
  <strong class="user"><em>katzlbtjunk at hotmail dot com</em></strong></a><a class="genanchor" href="#82879"> &para;</a><div class="date" title="2008-04-30 01:51"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82879">
<div class="phpcode"><code><span class="html">Aaron G. 07-Aug-2004 03:29 posted the function gzdecode()<br />to gzencode comments. I FIXED the BUG: if($flags &amp; 1) to the correct if($flags &amp; 2)<br /><br />Unfortunately the function gzencode() does NOT append a CRC so I did not notice until I tried to upload a file compressed with gzip itself.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">gzdecode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />  </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />  if (</span><span class="default">$len </span><span class="keyword">&lt; </span><span class="default">18 </span><span class="keyword">|| </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">),</span><span class="string">"\x1f\x8b"</span><span class="keyword">)) {<br />    return </span><span class="default">null</span><span class="keyword">;  </span><span class="comment">// Not GZIP format (See RFC 1952)<br />  </span><span class="keyword">}<br />  </span><span class="default">$method </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));  </span><span class="comment">// Compression method<br />  </span><span class="default">$flags  </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));  </span><span class="comment">// Flags<br />  </span><span class="keyword">if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">31 </span><span class="keyword">!= </span><span class="default">$flags</span><span class="keyword">) {<br />    </span><span class="comment">// Reserved bits are set -- NOT ALLOWED by RFC 1952<br />    </span><span class="keyword">return </span><span class="default">null</span><span class="keyword">;<br />  }<br />  </span><span class="comment">// NOTE: $mtime may be negative (PHP integer limitations)<br />  </span><span class="default">$mtime </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">));<br />  </span><span class="default">$mtime </span><span class="keyword">= </span><span class="default">$mtime</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />  </span><span class="default">$xfl   </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />  </span><span class="default">$os    </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />  </span><span class="default">$headerlen </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br />  </span><span class="default">$extralen  </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  </span><span class="default">$extra     </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />  if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">4</span><span class="keyword">) {<br />    </span><span class="comment">// 2-byte length prefixed EXTRA data in header<br />    </span><span class="keyword">if (</span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">2 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />      return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// Invalid format<br />    </span><span class="keyword">}<br />    </span><span class="default">$extralen </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"v"</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />    </span><span class="default">$extralen </span><span class="keyword">= </span><span class="default">$extralen</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    if (</span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">2 </span><span class="keyword">- </span><span class="default">$extralen </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />      return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// Invalid format<br />    </span><span class="keyword">}<br />    </span><span class="default">$extra </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">,</span><span class="default">$extralen</span><span class="keyword">);<br />    </span><span class="default">$headerlen </span><span class="keyword">+= </span><span class="default">2 </span><span class="keyword">+ </span><span class="default">$extralen</span><span class="keyword">;<br />  }<br /><br />  </span><span class="default">$filenamelen </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  </span><span class="default">$filename </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />  if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">8</span><span class="keyword">) {<br />    </span><span class="comment">// C-style string file NAME data in header<br />    </span><span class="keyword">if (</span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />      return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// Invalid format<br />    </span><span class="keyword">}<br />    </span><span class="default">$filenamelen </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">+</span><span class="default">$extralen</span><span class="keyword">),</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />    if (</span><span class="default">$filenamelen </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">$filenamelen </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />      return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// Invalid format<br />    </span><span class="keyword">}<br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">,</span><span class="default">$filenamelen</span><span class="keyword">);<br />    </span><span class="default">$headerlen </span><span class="keyword">+= </span><span class="default">$filenamelen </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />  }<br /><br />  </span><span class="default">$commentlen </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  </span><span class="default">$comment </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />  if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">16</span><span class="keyword">) {<br />    </span><span class="comment">// C-style string COMMENT data in header<br />    </span><span class="keyword">if (</span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />      return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// Invalid format<br />    </span><span class="keyword">}<br />    </span><span class="default">$commentlen </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">+</span><span class="default">$extralen</span><span class="keyword">+</span><span class="default">$filenamelen</span><span class="keyword">),</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />    if (</span><span class="default">$commentlen </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">$commentlen </span><span class="keyword">- </span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />      return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// Invalid header format<br />    </span><span class="keyword">}<br />    </span><span class="default">$comment </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">,</span><span class="default">$commentlen</span><span class="keyword">);<br />    </span><span class="default">$headerlen </span><span class="keyword">+= </span><span class="default">$commentlen </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />  }<br /><br />  </span><span class="default">$headercrc </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />  if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">2</span><span class="keyword">) {<br />    </span><span class="comment">// 2-bytes (lowest order) of CRC32 on header present<br />    </span><span class="keyword">if (</span><span class="default">$len </span><span class="keyword">- </span><span class="default">$headerlen </span><span class="keyword">- </span><span class="default">2 </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />      return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// Invalid format<br />    </span><span class="keyword">}<br />    </span><span class="default">$calccrc </span><span class="keyword">= </span><span class="default">crc32</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">)) &amp; </span><span class="default">0xffff</span><span class="keyword">;<br />    </span><span class="default">$headercrc </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"v"</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />    </span><span class="default">$headercrc </span><span class="keyword">= </span><span class="default">$headercrc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    if (</span><span class="default">$headercrc </span><span class="keyword">!= </span><span class="default">$calccrc</span><span class="keyword">) {<br />      return </span><span class="default">false</span><span class="keyword">;    </span><span class="comment">// Bad header CRC<br />    </span><span class="keyword">}<br />    </span><span class="default">$headerlen </span><span class="keyword">+= </span><span class="default">2</span><span class="keyword">;<br />  }<br /><br />  </span><span class="comment">// GZIP FOOTER - These be negative due to PHP's limitations<br />  </span><span class="default">$datacrc </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,-</span><span class="default">8</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">));<br />  </span><span class="default">$datacrc </span><span class="keyword">= </span><span class="default">$datacrc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />  </span><span class="default">$isize </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,-</span><span class="default">4</span><span class="keyword">));<br />  </span><span class="default">$isize </span><span class="keyword">= </span><span class="default">$isize</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br /><br />  </span><span class="comment">// Perform the decompression:<br />  </span><span class="default">$bodylen </span><span class="keyword">= </span><span class="default">$len</span><span class="keyword">-</span><span class="default">$headerlen</span><span class="keyword">-</span><span class="default">8</span><span class="keyword">;<br />  if (</span><span class="default">$bodylen </span><span class="keyword">&lt; </span><span class="default">1</span><span class="keyword">) {<br />    </span><span class="comment">// This should never happen - IMPLEMENTATION BUG!<br />    </span><span class="keyword">return </span><span class="default">null</span><span class="keyword">;<br />  }<br />  </span><span class="default">$body </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$headerlen</span><span class="keyword">,</span><span class="default">$bodylen</span><span class="keyword">);<br />  </span><span class="default">$data </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />  if (</span><span class="default">$bodylen </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />    switch (</span><span class="default">$method</span><span class="keyword">) {<br />      case </span><span class="default">8</span><span class="keyword">:<br />        </span><span class="comment">// Currently the only supported compression method:<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">);<br />        break;<br />      default:<br />        </span><span class="comment">// Unknown compression method<br />        </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />    }<br />  } else {<br />    </span><span class="comment">// I'm not sure if zero-byte body content is allowed.<br />    // Allow it for now...  Do nothing...<br />  </span><span class="keyword">}<br /><br />  </span><span class="comment">// Verifiy decompressed size and CRC32:<br />  // NOTE: This may fail with large data sizes depending on how<br />  //       PHP's integer limitations affect strlen() since $isize<br />  //       may be negative for large sizes.<br />  </span><span class="keyword">if (</span><span class="default">$isize </span><span class="keyword">!= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) || </span><span class="default">crc32</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) != </span><span class="default">$datacrc</span><span class="keyword">) {<br />    </span><span class="comment">// Bad format!  Length or CRC doesn't match!<br />    </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />  }<br />  return </span><span class="default">$data</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84174">  <div class="votes">
    <div id="Vu84174">
    <a href="/manual/vote-note.php?id=84174&amp;page=function.gzdecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84174">
    <a href="/manual/vote-note.php?id=84174&amp;page=function.gzdecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84174" title="52% like this...">
    1
    </div>
  </div>
  <a href="#84174" class="name">
  <strong class="user"><em>webmaster at askapache dot com</em></strong></a><a class="genanchor" href="#84174"> &para;</a><div class="date" title="2008-07-02 02:32"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84174">
<div class="phpcode"><code><span class="html">I have used this simple function to gzdecode gzipped files downloaded from the web.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">gzdecode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">){<br />  </span><span class="default">$g</span><span class="keyword">=</span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">'/tmp'</span><span class="keyword">,</span><span class="string">'ff'</span><span class="keyword">);<br />  @</span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">);<br />  </span><span class="default">ob_start</span><span class="keyword">();<br />  </span><span class="default">readgzfile</span><span class="keyword">(</span><span class="default">$g</span><span class="keyword">);<br />  </span><span class="default">$d</span><span class="keyword">=</span><span class="default">ob_get_clean</span><span class="keyword">();<br />  return </span><span class="default">$d</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120859">  <div class="votes">
    <div id="Vu120859">
    <a href="/manual/vote-note.php?id=120859&amp;page=function.gzdecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120859">
    <a href="/manual/vote-note.php?id=120859&amp;page=function.gzdecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120859" title="no votes...">
    0
    </div>
  </div>
  <a href="#120859" class="name">
  <strong class="user"><em>Artem</em></strong></a><a class="genanchor" href="#120859"> &para;</a><div class="date" title="2017-03-23 01:13"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120859">
<div class="phpcode"><code><span class="html">This can help to decompress the data from tar archive in certain cases, hope this helps somebody<br /><span class="default">&lt;?php<br />$tarName </span><span class="keyword">= </span><span class="string">'example.ini'</span><span class="keyword">;<br /><br />try {<br />    </span><span class="comment">/** For files with tar.gz extensions **/<br />    </span><span class="default">$phar </span><span class="keyword">= new </span><span class="default">\PharData</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tarName</span><span class="keyword">);<br />} catch (</span><span class="default">$e</span><span class="keyword">) {<br />    </span><span class="comment">/** Decode the file first **/<br />    </span><span class="default">$decodedFile </span><span class="keyword">= </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">gzdecode</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)));<br />    </span><span class="comment">/** create PharData object second **/<br />    </span><span class="default">$phar </span><span class="keyword">= new </span><span class="default">\PharData</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tarName</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gzdecode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gzdecode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.zlib.php">Zlib Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.deflate-add.php" title="deflate_&#8203;add">deflate_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.deflate-init.php" title="deflate_&#8203;init">deflate_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.gzclose.php" title="gzclose">gzclose</a>
                        </li>
                                                <li class="">
                            <a href="function.gzcompress.php" title="gzcompress">gzcompress</a>
                        </li>
                                                <li class="current">
                            <a href="function.gzdecode.php" title="gzdecode">gzdecode</a>
                        </li>
                                                <li class="">
                            <a href="function.gzdeflate.php" title="gzdeflate">gzdeflate</a>
                        </li>
                                                <li class="">
                            <a href="function.gzencode.php" title="gzencode">gzencode</a>
                        </li>
                                                <li class="">
                            <a href="function.gzeof.php" title="gzeof">gzeof</a>
                        </li>
                                                <li class="">
                            <a href="function.gzfile.php" title="gzfile">gzfile</a>
                        </li>
                                                <li class="">
                            <a href="function.gzgetc.php" title="gzgetc">gzgetc</a>
                        </li>
                                                <li class="">
                            <a href="function.gzgets.php" title="gzgets">gzgets</a>
                        </li>
                                                <li class="">
                            <a href="function.gzgetss.php" title="gzgetss">gzgetss</a>
                        </li>
                                                <li class="">
                            <a href="function.gzinflate.php" title="gzinflate">gzinflate</a>
                        </li>
                                                <li class="">
                            <a href="function.gzopen.php" title="gzopen">gzopen</a>
                        </li>
                                                <li class="">
                            <a href="function.gzpassthru.php" title="gzpassthru">gzpassthru</a>
                        </li>
                                                <li class="">
                            <a href="function.gzputs.php" title="gzputs">gzputs</a>
                        </li>
                                                <li class="">
                            <a href="function.gzread.php" title="gzread">gzread</a>
                        </li>
                                                <li class="">
                            <a href="function.gzrewind.php" title="gzrewind">gzrewind</a>
                        </li>
                                                <li class="">
                            <a href="function.gzseek.php" title="gzseek">gzseek</a>
                        </li>
                                                <li class="">
                            <a href="function.gztell.php" title="gztell">gztell</a>
                        </li>
                                                <li class="">
                            <a href="function.gzuncompress.php" title="gzuncompress">gzuncompress</a>
                        </li>
                                                <li class="">
                            <a href="function.gzwrite.php" title="gzwrite">gzwrite</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-add.php" title="inflate_&#8203;add">inflate_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-get-read-len.php" title="inflate_&#8203;get_&#8203;read_&#8203;len">inflate_&#8203;get_&#8203;read_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-get-status.php" title="inflate_&#8203;get_&#8203;status">inflate_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-init.php" title="inflate_&#8203;init">inflate_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-gzhandler.php" title="ob_&#8203;gzhandler">ob_&#8203;gzhandler</a>
                        </li>
                                                <li class="">
                            <a href="function.readgzfile.php" title="readgzfile">readgzfile</a>
                        </li>
                                                <li class="">
                            <a href="function.zlib-decode.php" title="zlib_&#8203;decode">zlib_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.zlib-encode.php" title="zlib_&#8203;encode">zlib_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.zlib-get-coding-type.php" title="zlib_&#8203;get_&#8203;coding_&#8203;type">zlib_&#8203;get_&#8203;coding_&#8203;type</a>
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
