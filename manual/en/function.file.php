<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: file - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.file.php">
 <link rel="shorturl" href="https://www.php.net/file">
 <link rel="alternate" href="https://www.php.net/file" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fgetss.php">
 <link rel="next" href="https://www.php.net/manual/en/function.file-exists.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.file.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.file.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.file.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.file.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.file.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.file.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.file.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.file.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.file.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.file.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.file.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Reads entire file into an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: file - Manual" />
<meta name="twitter:description" content="Reads entire file into an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: file - Manual" />
<meta itemprop="description" content="Reads entire file into an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Reads entire file into an array" />

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
        <a href="function.file-exists.php">
          file_exists &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fgetss.php">
          &laquo; fgetss        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.filesystem.php'>Filesystem</a></li>      <li><a href='ref.filesystem.php'>Filesystem Functions</a></li>      </ul>
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
            <option value='en/function.file.php' selected="selected">English</option>
            <option value='de/function.file.php'>German</option>
            <option value='es/function.file.php'>Spanish</option>
            <option value='fr/function.file.php'>French</option>
            <option value='it/function.file.php'>Italian</option>
            <option value='ja/function.file.php'>Japanese</option>
            <option value='pt_BR/function.file.php'>Brazilian Portuguese</option>
            <option value='ru/function.file.php'>Russian</option>
            <option value='tr/function.file.php'>Turkish</option>
            <option value='uk/function.file.php'>Ukrainian</option>
            <option value='zh/function.file.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.file" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">file</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">file</span> &mdash; <span class="dc-title">Reads entire file into an array</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.file-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>file</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Reads an entire file into an array.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    You can use <span class="function"><a href="function.file-get-contents.php" class="function">file_get_contents()</a></span> to return the contents
    of a file as a string.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.file-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the file.
      </p>
      <div class="tip"><strong class="tip">Tip</strong><p class="simpara">A URL can be used as a
filename with this function if the <a href="filesystem.configuration.php#ini.allow-url-fopen" class="link">fopen wrappers</a> have been enabled.
See <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> for more details on how to specify the
filename. See the <a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> for links to information
about what abilities the various wrappers have, notes on their usage,
and information on any predefined variables they may
provide.</p></div>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       The optional parameter <code class="parameter">flags</code> can be one, or
       more, of the following constants:
       <dl>
        
         <dt>
          <strong><code><a href="filesystem.constants.php#constant.file-use-include-path">FILE_USE_INCLUDE_PATH</a></code></strong>
         </dt>
         <dd>
          <span class="simpara">
           Search for the file in the <a href="ini.core.php#ini.include-path" class="link">include_path</a>.
          </span>
         </dd>
        
        
         <dt>
          <strong><code><a href="filesystem.constants.php#constant.file-ignore-new-lines">FILE_IGNORE_NEW_LINES</a></code></strong>
         </dt>
         <dd>
          <span class="simpara">
           Omit newline at the end of each array element.
          </span>
         </dd>
        
        
         <dt>
          <strong><code><a href="filesystem.constants.php#constant.file-skip-empty-lines">FILE_SKIP_EMPTY_LINES</a></code></strong>
         </dt>
         <dd>
          <span class="simpara">
           Skip empty lines.
          </span>
         </dd>
        
        
         <dt>
          <strong><code><a href="filesystem.constants.php#constant.file-no-default-context">FILE_NO_DEFAULT_CONTEXT</a></code></strong>
         </dt>
         <dd>
          <span class="simpara">
           Don&#039;t use the default context.
          </span>
         </dd>
        
       </dl>
      </p>
     </dd>
    
    
     <dt><code class="parameter">context</code></dt>
     <dd>
       <p class="para">A <a href="stream.contexts.php" class="link">context stream</a>
<span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.</p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.file-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the file in an array. Each element of the array corresponds to a
   line in the file, with the newline still attached. Upon failure,
   <span class="function"><strong>file()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Each line in the resulting array will include the line ending, unless
    <strong><code><a href="filesystem.constants.php#constant.file-ignore-new-lines">FILE_IGNORE_NEW_LINES</a></code></strong> is used.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">If PHP is not properly recognizing
the line endings when reading files either on or created by a Macintosh
computer, enabling the
<a href="filesystem.configuration.php#ini.auto-detect-line-endings" class="link">auto_detect_line_endings</a>
run-time configuration option may help resolve the problem.</span></p></blockquote>
 </div>


 <div class="refsect1 errors" id="refsect1-function.file-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   As of PHP 8.3.0, throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>
   if <code class="parameter">flags</code> includes any invalid values, such
   as <strong><code><a href="filesystem.constants.php#constant.file-append">FILE_APPEND</a></code></strong>.
  </p>
  <p class="para">
   Emits an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level error if the file
   does not exist.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.file-changelog">
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
      <td>8.3.0</td>
      <td>
       <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> is thrown for any
       invalid values of <code class="parameter">flags</code>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.file-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2350">
    <p><strong>Example #1 <span class="function"><strong>file()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Get a file into an array.  In this example we'll go through HTTP to get<br />// the HTML source of a URL.<br /></span><span style="color: #0000BB">$lines </span><span style="color: #007700">= </span><span style="color: #0000BB">file</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Loop through our array, show HTML source as HTML source; and line numbers too.<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$lines </span><span style="color: #007700">as </span><span style="color: #0000BB">$line_num </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$line</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Line #&lt;b&gt;</span><span style="color: #007700">{</span><span style="color: #0000BB">$line_num</span><span style="color: #007700">}</span><span style="color: #DD0000">&lt;/b&gt; : " </span><span style="color: #007700">. </span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$line</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Using the optional flags parameter<br /></span><span style="color: #0000BB">$trimmed </span><span style="color: #007700">= </span><span style="color: #0000BB">file</span><span style="color: #007700">(</span><span style="color: #DD0000">'somefile.txt'</span><span style="color: #007700">, </span><span style="color: #0000BB">FILE_IGNORE_NEW_LINES </span><span style="color: #007700">| </span><span style="color: #0000BB">FILE_SKIP_EMPTY_LINES</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.file-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong><p class="para">When using SSL, Microsoft IIS
will violate the protocol by closing the connection without sending a
<code class="literal">close_notify</code> indicator. PHP will report this as &quot;SSL: Fatal
Protocol Error&quot; when you reach the end of the data. To work around this, the
value of <a href="errorfunc.configuration.php#ini.error-reporting" class="link">error_reporting</a> should be
lowered to a level that does not include warnings.
PHP can detect buggy IIS server software when you open
the stream using the <code class="literal">https://</code> wrapper and will suppress the
warning. When using <span class="function"><a href="function.fsockopen.php" class="function">fsockopen()</a></span> to create an
<code class="literal">ssl://</code> socket, the developer is responsible for detecting
and suppressing this warning.</p></div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.file-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.file-get-contents.php" class="function" rel="rdfs-seeAlso">file_get_contents()</a> - Reads entire file into a string</span></li>
    <li><span class="function"><a href="function.readfile.php" class="function" rel="rdfs-seeAlso">readfile()</a> - Outputs a file</span></li>
    <li><span class="function"><a href="function.fopen.php" class="function" rel="rdfs-seeAlso">fopen()</a> - Opens file or URL</span></li>
    <li><span class="function"><a href="function.fsockopen.php" class="function" rel="rdfs-seeAlso">fsockopen()</a> - Open Internet or Unix domain socket connection</span></li>
    <li><span class="function"><a href="function.popen.php" class="function" rel="rdfs-seeAlso">popen()</a> - Opens process file pointer</span></li>
    <li><span class="function"><a href="function.include.php" class="function" rel="rdfs-seeAlso">include</a> - include</span></li>
    <li><span class="function"><a href="function.stream-context-create.php" class="function" rel="rdfs-seeAlso">stream_context_create()</a> - Creates a stream context</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/file.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.file%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.file.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115500">  <div class="votes">
    <div id="Vu115500">
    <a href="/manual/vote-note.php?id=115500&amp;page=function.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115500">
    <a href="/manual/vote-note.php?id=115500&amp;page=function.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115500" title="59% like this...">
    38
    </div>
  </div>
  <a href="#115500" class="name">
  <strong class="user"><em>Martin K.</em></strong></a><a class="genanchor" href="#115500"> &para;</a><div class="date" title="2014-08-05 04:38"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115500">
<div class="phpcode"><code><span class="html">If the file you are reading is in CSV format do not use file(), use fgetcsv().  file() will split the file by each newline that it finds, even newlines that appear within a field (i.e. within quotations).</span></code></div>
  </div>
 </div>
  <div class="note" id="113461">  <div class="votes">
    <div id="Vu113461">
    <a href="/manual/vote-note.php?id=113461&amp;page=function.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113461">
    <a href="/manual/vote-note.php?id=113461&amp;page=function.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113461" title="54% like this...">
    25
    </div>
  </div>
  <a href="#113461" class="name">
  <strong class="user"><em>bingo at dingo dot com</em></strong></a><a class="genanchor" href="#113461"> &para;</a><div class="date" title="2013-10-14 12:36"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113461">
<div class="phpcode"><code><span class="html">To write all the lines of the file in other words to read the file line by line you can write the code like this:<br /><span class="default">&lt;?php<br />$names</span><span class="keyword">=</span><span class="default">file</span><span class="keyword">(</span><span class="string">'name.txt'</span><span class="keyword">);<br /></span><span class="comment">// To check the number of lines <br /></span><span class="keyword">echo </span><span class="default">count</span><span class="keyword">(</span><span class="default">$names</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />foreach(</span><span class="default">$names </span><span class="keyword">as </span><span class="default">$name</span><span class="keyword">)<br />{<br />   echo </span><span class="default">$name</span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />this example is so basic to understand how it's working. I hope it will help many beginners.<br /><br />Regards,<br />Bingo</span></code></div>
  </div>
 </div>
  <div class="note" id="94067">  <div class="votes">
    <div id="Vu94067">
    <a href="/manual/vote-note.php?id=94067&amp;page=function.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94067">
    <a href="/manual/vote-note.php?id=94067&amp;page=function.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94067" title="53% like this...">
    16
    </div>
  </div>
  <a href="#94067" class="name">
  <strong class="user"><em>d basin</em></strong></a><a class="genanchor" href="#94067"> &para;</a><div class="date" title="2009-10-14 03:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94067">
<div class="phpcode"><code><span class="html">this may be obvious, but it took me a while to figure out what I was doing wrong. So I wanted to share. I have a file on my "c:\" drive. How do I file() it? <br /><br />Don't forget the backslash is special and you have to "escape" the backslash i.e. "\\":<br /><br /><span class="default">&lt;?php<br /><br />$lines </span><span class="keyword">= </span><span class="default">file</span><span class="keyword">(</span><span class="string">"C:\\Documents and Settings\\myfile.txt"</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">)<br />{<br />    echo(</span><span class="default">$line</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span> <br /><br />hope this helps...</span></code></div>
  </div>
 </div>
  <div class="note" id="105772">  <div class="votes">
    <div id="Vu105772">
    <a href="/manual/vote-note.php?id=105772&amp;page=function.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105772">
    <a href="/manual/vote-note.php?id=105772&amp;page=function.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105772" title="52% like this...">
    9
    </div>
  </div>
  <a href="#105772" class="name">
  <strong class="user"><em>twichi at web dot de</em></strong></a><a class="genanchor" href="#105772"> &para;</a><div class="date" title="2011-09-13 12:33"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105772">
<div class="phpcode"><code><span class="html">read from CSV data (file) into an array with named keys<br /><br />... with or without 1st row = header (keys) <br />(see 4th parameter of function call as  true / false) <br /><br /><span class="default">&lt;?php <br /></span><span class="comment">// --------------------------------------------------------------<br /><br /></span><span class="keyword">function </span><span class="default">csv_in_array</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">,</span><span class="default">$delm</span><span class="keyword">=</span><span class="string">";"</span><span class="keyword">,</span><span class="default">$encl</span><span class="keyword">=</span><span class="string">"\""</span><span class="keyword">,</span><span class="default">$head</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) { <br />    <br />    </span><span class="default">$csvxrow </span><span class="keyword">= </span><span class="default">file</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);   </span><span class="comment">// ---- csv rows to array ----<br />    <br />    </span><span class="default">$csvxrow</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">chop</span><span class="keyword">(</span><span class="default">$csvxrow</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); <br />    </span><span class="default">$csvxrow</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$encl</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$csvxrow</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); <br />    </span><span class="default">$keydata </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delm</span><span class="keyword">,</span><span class="default">$csvxrow</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); <br />    </span><span class="default">$keynumb </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$keydata</span><span class="keyword">); <br />    <br />    if (</span><span class="default">$head </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">) { <br />    </span><span class="default">$anzdata </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$csvxrow</span><span class="keyword">); <br />    </span><span class="default">$z</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; <br />    for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$anzdata</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) { <br />        </span><span class="default">$csvxrow</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] = </span><span class="default">chop</span><span class="keyword">(</span><span class="default">$csvxrow</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]); <br />        </span><span class="default">$csvxrow</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] = </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$encl</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$csvxrow</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]); <br />        </span><span class="default">$csv_data</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] = </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delm</span><span class="keyword">,</span><span class="default">$csvxrow</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]); <br />        </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; <br />        foreach(</span><span class="default">$keydata </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">) { <br />            </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$z</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$csv_data</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]; <br />            </span><span class="default">$i</span><span class="keyword">++;<br />            }    <br />        </span><span class="default">$z</span><span class="keyword">++;<br />        }<br />    }<br />    else { <br />        </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        foreach(</span><span class="default">$csvxrow </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) { <br />            </span><span class="default">$item </span><span class="keyword">= </span><span class="default">chop</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">); <br />            </span><span class="default">$item </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$encl</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$item</span><span class="keyword">); <br />            </span><span class="default">$csv_data </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delm</span><span class="keyword">,</span><span class="default">$item</span><span class="keyword">); <br />            for (</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$keynumb</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) { <br />               </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">] = </span><span class="default">$csv_data</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">]; <br />            }<br />        </span><span class="default">$i</span><span class="keyword">++;<br />        }<br />    }<br /><br />return </span><span class="default">$out</span><span class="keyword">; <br />}<br /><br /></span><span class="comment">// --------------------------------------------------------------<br /><br /></span><span class="default">?&gt;<br /></span><br />fuction call with 4 parameters: <br /><br />(1) = the file with CSV data (url / string)<br />(2) = colum delimiter (e.g: ; or | or , ...)<br />(3) = values enclosed by (e.g: ' or " or ^ or ...)<br />(4) = with or without 1st row = head (true/false) <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// ----- call ------ <br /></span><span class="default">$csvdata </span><span class="keyword">= </span><span class="default">csv_in_array</span><span class="keyword">( </span><span class="default">$yourcsvfile</span><span class="keyword">, </span><span class="string">";"</span><span class="keyword">, </span><span class="string">"\""</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">); <br /></span><span class="comment">// ----------------- <br /><br />// ----- view ------ <br /></span><span class="keyword">echo </span><span class="string">"&lt;pre&gt;\r\n"</span><span class="keyword">; <br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$csvdata</span><span class="keyword">);<br />echo </span><span class="string">"&lt;/pre&gt;\r\n"</span><span class="keyword">; <br /></span><span class="comment">// -----------------<br /><br /></span><span class="default">?&gt;<br /></span><br />PS: also see: <a href="http://php.net/manual/de/function.fgetcsv.php" rel="nofollow" target="_blank">http://php.net/manual/de/function.fgetcsv.php</a> to read CSV data into an array<br />... and other file-handling methods <br /><br />^</span></code></div>
  </div>
 </div>
  <div class="note" id="123195">  <div class="votes">
    <div id="Vu123195">
    <a href="/manual/vote-note.php?id=123195&amp;page=function.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123195">
    <a href="/manual/vote-note.php?id=123195&amp;page=function.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123195" title="51% like this...">
    1
    </div>
  </div>
  <a href="#123195" class="name">
  <strong class="user"><em>radler63 at hotmail dot com</em></strong></a><a class="genanchor" href="#123195"> &para;</a><div class="date" title="2018-10-04 04:34"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123195">
<div class="phpcode"><code><span class="html">My experience is that the function file does uses the cached content if the file has changed....</span></code></div>
  </div>
 </div>
  <div class="note" id="126045">  <div class="votes">
    <div id="Vu126045">
    <a href="/manual/vote-note.php?id=126045&amp;page=function.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126045">
    <a href="/manual/vote-note.php?id=126045&amp;page=function.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126045" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126045" class="name">
  <strong class="user"><em>renanlazarotto at gmail dot com</em></strong></a><a class="genanchor" href="#126045"> &para;</a><div class="date" title="2021-04-28 06:37"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126045">
<div class="phpcode"><code><span class="html">Be aware that using file() to count lines can cause OOM on the server as it'll allocate all lines into an array.<br /><br />If you're dealing with files that can have thousands of lines, SplFileObject might be a better idea and with little changes you can get the same result.</span></code></div>
  </div>
 </div>
  <div class="note" id="123893">  <div class="votes">
    <div id="Vu123893">
    <a href="/manual/vote-note.php?id=123893&amp;page=function.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123893">
    <a href="/manual/vote-note.php?id=123893&amp;page=function.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123893" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#123893" class="name">
  <strong class="user"><em>sheldon at hyperlinked dot com</em></strong></a><a class="genanchor" href="#123893"> &para;</a><div class="date" title="2019-05-29 10:25"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123893">
<div class="phpcode"><code><span class="html">As of PHP 5.6 the file(), file_get_contents(), and fopen() functions will return false if you are referencing a source URL that doesn't have a valid SSL certificate. Presumably, you will run into this a lot in your development environments this will drive you crazy. <br /><br />You will need to create a stream context and provide it as an argument to the various file operations to tell it to ignore invalid SSL credentials. <br /><br />$args = array("ssl"=&gt;array("verify_peer"=&gt;false,"verify_peer_name"=&gt;false),"http"=&gt;array('timeout' =&gt; 60, 'user_agent' =&gt; 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/3.0.0.1'));<br /><br />$context = stream_context_create($args);<br />$httpfile = file($url, false, $context);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.file.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.filesystem.php">Filesystem Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.basename.php" title="basename">basename</a>
                        </li>
                                                <li class="">
                            <a href="function.chgrp.php" title="chgrp">chgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.chmod.php" title="chmod">chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.chown.php" title="chown">chown</a>
                        </li>
                                                <li class="">
                            <a href="function.clearstatcache.php" title="clearstatcache">clearstatcache</a>
                        </li>
                                                <li class="">
                            <a href="function.copy.php" title="copy">copy</a>
                        </li>
                                                <li class="">
                            <a href="function.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="function.dirname.php" title="dirname">dirname</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-free-space.php" title="disk_&#8203;free_&#8203;space">disk_&#8203;free_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-total-space.php" title="disk_&#8203;total_&#8203;space">disk_&#8203;total_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.diskfreespace.php" title="diskfreespace">diskfreespace</a>
                        </li>
                                                <li class="">
                            <a href="function.fclose.php" title="fclose">fclose</a>
                        </li>
                                                <li class="">
                            <a href="function.fdatasync.php" title="fdatasync">fdatasync</a>
                        </li>
                                                <li class="">
                            <a href="function.feof.php" title="feof">feof</a>
                        </li>
                                                <li class="">
                            <a href="function.fflush.php" title="fflush">fflush</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetc.php" title="fgetc">fgetc</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetcsv.php" title="fgetcsv">fgetcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fgets.php" title="fgets">fgets</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetss.php" title="fgetss">fgetss</a>
                        </li>
                                                <li class="current">
                            <a href="function.file.php" title="file">file</a>
                        </li>
                                                <li class="">
                            <a href="function.file-exists.php" title="file_&#8203;exists">file_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.file-get-contents.php" title="file_&#8203;get_&#8203;contents">file_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.file-put-contents.php" title="file_&#8203;put_&#8203;contents">file_&#8203;put_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.fileatime.php" title="fileatime">fileatime</a>
                        </li>
                                                <li class="">
                            <a href="function.filectime.php" title="filectime">filectime</a>
                        </li>
                                                <li class="">
                            <a href="function.filegroup.php" title="filegroup">filegroup</a>
                        </li>
                                                <li class="">
                            <a href="function.fileinode.php" title="fileinode">fileinode</a>
                        </li>
                                                <li class="">
                            <a href="function.filemtime.php" title="filemtime">filemtime</a>
                        </li>
                                                <li class="">
                            <a href="function.fileowner.php" title="fileowner">fileowner</a>
                        </li>
                                                <li class="">
                            <a href="function.fileperms.php" title="fileperms">fileperms</a>
                        </li>
                                                <li class="">
                            <a href="function.filesize.php" title="filesize">filesize</a>
                        </li>
                                                <li class="">
                            <a href="function.filetype.php" title="filetype">filetype</a>
                        </li>
                                                <li class="">
                            <a href="function.flock.php" title="flock">flock</a>
                        </li>
                                                <li class="">
                            <a href="function.fnmatch.php" title="fnmatch">fnmatch</a>
                        </li>
                                                <li class="">
                            <a href="function.fopen.php" title="fopen">fopen</a>
                        </li>
                                                <li class="">
                            <a href="function.fpassthru.php" title="fpassthru">fpassthru</a>
                        </li>
                                                <li class="">
                            <a href="function.fputcsv.php" title="fputcsv">fputcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fputs.php" title="fputs">fputs</a>
                        </li>
                                                <li class="">
                            <a href="function.fread.php" title="fread">fread</a>
                        </li>
                                                <li class="">
                            <a href="function.fscanf.php" title="fscanf">fscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.fseek.php" title="fseek">fseek</a>
                        </li>
                                                <li class="">
                            <a href="function.fstat.php" title="fstat">fstat</a>
                        </li>
                                                <li class="">
                            <a href="function.fsync.php" title="fsync">fsync</a>
                        </li>
                                                <li class="">
                            <a href="function.ftell.php" title="ftell">ftell</a>
                        </li>
                                                <li class="">
                            <a href="function.ftruncate.php" title="ftruncate">ftruncate</a>
                        </li>
                                                <li class="">
                            <a href="function.fwrite.php" title="fwrite">fwrite</a>
                        </li>
                                                <li class="">
                            <a href="function.glob.php" title="glob">glob</a>
                        </li>
                                                <li class="">
                            <a href="function.is-dir.php" title="is_&#8203;dir">is_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.is-executable.php" title="is_&#8203;executable">is_&#8203;executable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-file.php" title="is_&#8203;file">is_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-link.php" title="is_&#8203;link">is_&#8203;link</a>
                        </li>
                                                <li class="">
                            <a href="function.is-readable.php" title="is_&#8203;readable">is_&#8203;readable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-uploaded-file.php" title="is_&#8203;uploaded_&#8203;file">is_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writable.php" title="is_&#8203;writable">is_&#8203;writable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writeable.php" title="is_&#8203;writeable">is_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.lchgrp.php" title="lchgrp">lchgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.lchown.php" title="lchown">lchown</a>
                        </li>
                                                <li class="">
                            <a href="function.link.php" title="link">link</a>
                        </li>
                                                <li class="">
                            <a href="function.linkinfo.php" title="linkinfo">linkinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.lstat.php" title="lstat">lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.mkdir.php" title="mkdir">mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.move-uploaded-file.php" title="move_&#8203;uploaded_&#8203;file">move_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-file.php" title="parse_&#8203;ini_&#8203;file">parse_&#8203;ini_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-string.php" title="parse_&#8203;ini_&#8203;string">parse_&#8203;ini_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.pathinfo.php" title="pathinfo">pathinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.pclose.php" title="pclose">pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.popen.php" title="popen">popen</a>
                        </li>
                                                <li class="">
                            <a href="function.readfile.php" title="readfile">readfile</a>
                        </li>
                                                <li class="">
                            <a href="function.readlink.php" title="readlink">readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath.php" title="realpath">realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-get.php" title="realpath_&#8203;cache_&#8203;get">realpath_&#8203;cache_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-size.php" title="realpath_&#8203;cache_&#8203;size">realpath_&#8203;cache_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.rename.php" title="rename">rename</a>
                        </li>
                                                <li class="">
                            <a href="function.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="function.rmdir.php" title="rmdir">rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.set-file-buffer.php" title="set_&#8203;file_&#8203;buffer">set_&#8203;file_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="function.symlink.php" title="symlink">symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.tempnam.php" title="tempnam">tempnam</a>
                        </li>
                                                <li class="">
                            <a href="function.tmpfile.php" title="tmpfile">tmpfile</a>
                        </li>
                                                <li class="">
                            <a href="function.touch.php" title="touch">touch</a>
                        </li>
                                                <li class="">
                            <a href="function.umask.php" title="umask">umask</a>
                        </li>
                                                <li class="">
                            <a href="function.unlink.php" title="unlink">unlink</a>
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
