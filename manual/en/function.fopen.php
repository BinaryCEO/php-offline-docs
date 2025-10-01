<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: fopen - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.fopen.php">
 <link rel="shorturl" href="https://www.php.net/fopen">
 <link rel="alternate" href="https://www.php.net/fopen" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fnmatch.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fpassthru.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.fopen.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.fopen.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.fopen.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.fopen.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.fopen.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.fopen.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.fopen.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.fopen.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.fopen.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.fopen.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.fopen.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Opens file or URL" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: fopen - Manual" />
<meta name="twitter:description" content="Opens file or URL" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: fopen - Manual" />
<meta itemprop="description" content="Opens file or URL" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Opens file or URL" />

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
        <a href="function.fpassthru.php">
          fpassthru &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fnmatch.php">
          &laquo; fnmatch        </a>
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
            <option value='en/function.fopen.php' selected="selected">English</option>
            <option value='de/function.fopen.php'>German</option>
            <option value='es/function.fopen.php'>Spanish</option>
            <option value='fr/function.fopen.php'>French</option>
            <option value='it/function.fopen.php'>Italian</option>
            <option value='ja/function.fopen.php'>Japanese</option>
            <option value='pt_BR/function.fopen.php'>Brazilian Portuguese</option>
            <option value='ru/function.fopen.php'>Russian</option>
            <option value='tr/function.fopen.php'>Turkish</option>
            <option value='uk/function.fopen.php'>Ukrainian</option>
            <option value='zh/function.fopen.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.fopen" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">fopen</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">fopen</span> &mdash; <span class="dc-title">Opens file or URL</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.fopen-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>fopen</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$use_include_path</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>fopen()</strong></span> binds a named resource, specified by
   <code class="parameter">filename</code>, to a stream. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.fopen-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">filename</code> is of the form &quot;scheme://...&quot;, it
       is assumed to be a URL and PHP will search for a protocol handler
       (also known as a wrapper) for that scheme. If no wrappers for that
       protocol are registered, PHP will emit a notice to help you track
       potential problems in your script and then continue as though
       <code class="parameter">filename</code> specifies a regular file.
      </p>
      <p class="para">
       If PHP has decided that <code class="parameter">filename</code> specifies
       a local file, then it will try to open a stream on that file.
       The file must be accessible to PHP, so you need to ensure that
       the file access permissions allow this access.
       If you have enabled
       <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a> further
       restrictions may apply.
      </p>
      <p class="para">
       If PHP has decided that <code class="parameter">filename</code> specifies
       a registered protocol, and that protocol is registered as a
       network URL, PHP will check to make sure that
       <a href="filesystem.configuration.php#ini.allow-url-fopen" class="link">allow_url_fopen</a> is
       enabled. If it is switched off, PHP will emit a warning and
       the <span class="function"><strong>fopen()</strong></span> call will fail.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        The list of supported protocols can be found in <a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a>. Some protocols (also referred to as
        <code class="literal">wrappers</code>) support <code class="literal">context</code>
        and/or <var class="filename">php.ini</var> options. Refer to the specific page for the
        protocol in use for a list of options which can be set. (e.g.
        <var class="filename">php.ini</var> value <code class="literal">user_agent</code> used by the
        <code class="literal">http</code> wrapper).
       </p>
      </p></blockquote>
      <p class="para">
       On the Windows platform, be careful to escape any backslashes
       used in the path to the file, or use forward slashes.
       <div class="informalexample">
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"c:\\folder\\resource.txt"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

       </div>
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">mode</code> parameter specifies the type of access
       you require to the stream.  It may be any of the following:
       <table class="doctable table">
        <caption><strong>
         A list of possible modes for <span class="function"><strong>fopen()</strong></span>
         using <code class="parameter">mode</code>
        </strong></caption>
        
         <thead>
          <tr>
           <th><code class="parameter">mode</code></th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><code class="literal">&#039;r&#039;</code></td>
           <td>
            Open for reading only; place the file pointer at the
            beginning of the file.
           </td>
          </tr>

          <tr>
           <td><code class="literal">&#039;r+&#039;</code></td>
           <td>
            Open for reading and writing; place the file pointer at
            the beginning of the file.
           </td>
          </tr>

          <tr>
           <td><code class="literal">&#039;w&#039;</code></td>
           <td>
            Open for writing only; place the file pointer at the
            beginning of the file and truncate the file to zero length.
            If the file does not exist, attempt to create it.
           </td>
          </tr>

          <tr>
           <td><code class="literal">&#039;w+&#039;</code></td>
           <td>
            Open for reading and writing; otherwise it has the
            same behavior as <code class="literal">&#039;w&#039;</code>.
           </td>
          </tr>

          <tr>
           <td><code class="literal">&#039;a&#039;</code></td>
           <td>
            Open for writing only; place the file pointer at the end of
            the file. If the file does not exist, attempt to create it.
            In this mode, <span class="function"><a href="function.fseek.php" class="function">fseek()</a></span> has no effect, writes are always appended.
           </td>
          </tr>

          <tr>
           <td><code class="literal">&#039;a+&#039;</code></td>
           <td>
            Open for reading and writing; place the file pointer at
            the end of the file. If the file does not exist, attempt to
            create it. In this mode, <span class="function"><a href="function.fseek.php" class="function">fseek()</a></span> only affects
            the reading position, writes are always appended.
           </td>
          </tr>

          <tr>
           <td><code class="literal">&#039;x&#039;</code></td>
           <td>
            Create and open for writing only; place the file pointer at the
            beginning of the file.  If the file already exists, the
            <span class="function"><strong>fopen()</strong></span> call will fail by returning <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> and
            generating an error of level <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.  If
            the file does not exist, attempt to create it.  This is equivalent
            to specifying <code class="literal">O_EXCL|O_CREAT</code> flags for the
            underlying <code class="literal">open(2)</code> system call. 
           </td>
          </tr>

          <tr>
           <td><code class="literal">&#039;x+&#039;</code></td>
           <td>
            Create and open for reading and writing; otherwise it has the
            same behavior as <code class="literal">&#039;x&#039;</code>.
           </td>
          </tr>

          <tr>
           <td><code class="literal">&#039;c&#039;</code></td>
           <td>
            Open the file for writing only. If the file does not exist, it is
            created. If it exists, it is neither truncated (as opposed to
            <code class="literal">&#039;w&#039;</code>), nor the call to this function fails (as is
            the case with <code class="literal">&#039;x&#039;</code>). The file pointer is
            positioned on the beginning of the file. This may be useful if it&#039;s
            desired to get an advisory lock (see <span class="function"><a href="function.flock.php" class="function">flock()</a></span>)
            before attempting to modify the file, as using
            <code class="literal">&#039;w&#039;</code> could truncate the file before the lock
            was obtained (if truncation is desired,
            <span class="function"><a href="function.ftruncate.php" class="function">ftruncate()</a></span> can be used after the lock is
            requested).
           </td>
          </tr>

          <tr>
           <td><code class="literal">&#039;c+&#039;</code></td>
           <td>
            Open the file for reading and writing; otherwise it has the same
            behavior as <code class="literal">&#039;c&#039;</code>.
           </td>
          </tr>

          <tr>
           <td><code class="literal">&#039;e&#039;</code></td>
           <td>
            Set close-on-exec flag on the opened file descriptor. Only
            available in PHP compiled on POSIX.1-2008 conform systems.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        Different operating system families have different line-ending
        conventions.  When you write a text file and want to insert a line
        break, you need to use the correct line-ending character(s) for your
        operating system.  Unix based systems use <code class="literal">\n</code> as the
        line ending character, Windows based systems use <code class="literal">\r\n</code>
        as the line ending characters and Macintosh based systems (Mac OS Classic) used
        <code class="literal">\r</code> as the line ending character.
       </p>
       <p class="para">
        If you use the wrong line ending characters when writing your files, you
        might find that other applications that open those files will &quot;look
        funny&quot;.
       </p>
       <p class="para">
        Windows offers a text-mode translation flag (<code class="literal">&#039;t&#039;</code>)
        which will transparently translate <code class="literal">\n</code> to
        <code class="literal">\r\n</code> when working with the file.  In contrast, you
        can also use <code class="literal">&#039;b&#039;</code> to force binary mode, which will not
        translate your data.  To use these flags, specify either
        <code class="literal">&#039;b&#039;</code> or <code class="literal">&#039;t&#039;</code> as the last character
        of the <code class="parameter">mode</code> parameter.
       </p>
       <p class="para">
        The default translation mode is <code class="literal">&#039;b&#039;</code>.
        You can use the <code class="literal">&#039;t&#039;</code>
        mode if you are working with plain-text files and you use
        <code class="literal">\n</code> to delimit your line endings in your script, but
        expect your files to be readable with applications such as old versions of notepad.  You
        should use the <code class="literal">&#039;b&#039;</code> in all other cases.
       </p>
       <p class="para">
        If you specify the &#039;t&#039; flag when working with binary files, you
        may experience strange problems with your data, including broken image
        files and strange problems with <code class="literal">\r\n</code> characters.
       </p>
      </p></blockquote>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        For portability, it is also strongly recommended that
        you re-write code that uses or relies upon the <code class="literal">&#039;t&#039;</code>
        mode so that it uses the correct line endings and
        <code class="literal">&#039;b&#039;</code> mode instead.
       </p>
      </p></blockquote>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        The <code class="parameter">mode</code> is ignored for <var class="filename">php://output</var>,
        <var class="filename">php://input</var>, <var class="filename">php://stdin</var>,
        <var class="filename">php://stdout</var>, <var class="filename">php://stderr</var> and
        <var class="filename">php://fd</var> stream wrappers.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">use_include_path</code></dt>
     <dd>
      <p class="para">
       The optional third <code class="parameter">use_include_path</code> parameter
       can be set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if you want to search for the file in the
       <a href="ini.core.php#ini.include-path" class="link">include_path</a>, too.
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


 <div class="refsect1 returnvalues" id="refsect1-function.fopen-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a file pointer resource on success,
    or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.fopen-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
Upon failure, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.fopen-changelog">
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
       <td>7.0.16, 7.1.2</td>
       <td>
        The <code class="literal">&#039;e&#039;</code> option was added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.fopen-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2371">
    <p><strong>Example #1 <span class="function"><strong>fopen()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"/home/rasmus/file.txt"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"/home/rasmus/file.gif"</span><span style="color: #007700">, </span><span style="color: #DD0000">"wb"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://www.example.com/"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"ftp://user:password@example.com/somefile.txt"</span><span style="color: #007700">, </span><span style="color: #DD0000">"w"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.fopen-notes">
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
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If you are experiencing problems with reading and writing to files and
    you&#039;re using the server module version of PHP, remember to make sure that
    the files and directories you&#039;re using are accessible to the server
    process.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function may also succeed when <code class="parameter">filename</code> is a
    directory. If you are unsure whether <code class="parameter">filename</code> is a
    file or a directory, you may need to use the <span class="function"><a href="function.is-dir.php" class="function">is_dir()</a></span>
    function before calling <span class="function"><strong>fopen()</strong></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.fopen-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a></li>
    <li><span class="function"><a href="function.fclose.php" class="function" rel="rdfs-seeAlso">fclose()</a> - Closes an open file pointer</span></li>
    <li><span class="function"><a href="function.fgets.php" class="function" rel="rdfs-seeAlso">fgets()</a> - Gets line from file pointer</span></li>
    <li><span class="function"><a href="function.fread.php" class="function" rel="rdfs-seeAlso">fread()</a> - Binary-safe file read</span></li>
    <li><span class="function"><a href="function.fwrite.php" class="function" rel="rdfs-seeAlso">fwrite()</a> - Binary-safe file write</span></li>
    <li><span class="function"><a href="function.fsockopen.php" class="function" rel="rdfs-seeAlso">fsockopen()</a> - Open Internet or Unix domain socket connection</span></li>
    <li><span class="function"><a href="function.file.php" class="function" rel="rdfs-seeAlso">file()</a> - Reads entire file into an array</span></li>
    <li><span class="function"><a href="function.file-exists.php" class="function" rel="rdfs-seeAlso">file_exists()</a> - Checks whether a file or directory exists</span></li>
    <li><span class="function"><a href="function.is-readable.php" class="function" rel="rdfs-seeAlso">is_readable()</a> - Tells whether a file exists and is readable</span></li>
    <li><span class="function"><a href="function.stream-set-timeout.php" class="function" rel="rdfs-seeAlso">stream_set_timeout()</a> - Set timeout period on a stream</span></li>
    <li><span class="function"><a href="function.popen.php" class="function" rel="rdfs-seeAlso">popen()</a> - Opens process file pointer</span></li>
    <li><span class="function"><a href="function.stream-context-create.php" class="function" rel="rdfs-seeAlso">stream_context_create()</a> - Creates a stream context</span></li>
    <li><span class="function"><a href="function.umask.php" class="function" rel="rdfs-seeAlso">umask()</a> - Changes the current umask</span></li>
    <li><span class="classname"><a href="class.splfileobject.php" class="classname">SplFileObject</a></span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/fopen.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.fopen%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.fopen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fopen.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107851">  <div class="votes">
    <div id="Vu107851">
    <a href="/manual/vote-note.php?id=107851&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107851">
    <a href="/manual/vote-note.php?id=107851&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107851" title="71% like this...">
    151
    </div>
  </div>
  <a href="#107851" class="name">
  <strong class="user"><em>chapman at worldtakeoverindustries dot com</em></strong></a><a class="genanchor" href="#107851"> &para;</a><div class="date" title="2012-03-09 07:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107851">
<div class="phpcode"><code><span class="html">Note - using fopen in 'w' mode will NOT update the modification time (filemtime) of a file like you may expect. You may want to issue a touch() after writing and closing the file which update its modification time. This may become critical in a caching situation, if you intend to keep your hair.</span></code></div>
  </div>
 </div>
  <div class="note" id="125499">  <div class="votes">
    <div id="Vu125499">
    <a href="/manual/vote-note.php?id=125499&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125499">
    <a href="/manual/vote-note.php?id=125499&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125499" title="78% like this...">
    49
    </div>
  </div>
  <a href="#125499" class="name">
  <strong class="user"><em>Anon.</em></strong></a><a class="genanchor" href="#125499"> &para;</a><div class="date" title="2020-11-07 10:31"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125499">
<div class="phpcode"><code><span class="html">/***** GENTLE REMINDER *****/<br />Really important. Do NOT use the "w" flag unless you want to delete everything in the file.</span></code></div>
  </div>
 </div>
  <div class="note" id="120976">  <div class="votes">
    <div id="Vu120976">
    <a href="/manual/vote-note.php?id=120976&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120976">
    <a href="/manual/vote-note.php?id=120976&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120976" title="63% like this...">
    14
    </div>
  </div>
  <a href="#120976" class="name">
  <strong class="user"><em>petepostma-deletethis at gmail dot com</em></strong></a><a class="genanchor" href="#120976"> &para;</a><div class="date" title="2017-04-12 03:40"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120976">
<div class="phpcode"><code><span class="html">The verbal descriptions take a while to read through to get a feel for the expected results for fopen modes. This csv table can help break it down for quicker understanding to find which mode you are looking for:<br /><br />Mode,Creates,Reads,Writes,Pointer Starts,Truncates File,Notes,Purpose<br />r,,y,,beginning,,fails if file doesn't exist,basic read existing file<br />r+,,y,y,beginning,,fails if file doesn't exist,basic r/w existing file<br />w,y,,y,beginning+end,y,,"create, erase, write file"<br />w+,y,y,y,beginning+end,y,,"create, erase, write file with read option"<br />a,y,,y,end,,,"write from end of file, create if needed"<br />a+,y,y,y,end,,,"write from end of file, create if needed, with read options"<br />x,y,,y,beginning,,fails if file exists,"like w, but prevents over-writing an existing file"<br />x+,y,y,y,beginning,,fails if file exists,"like w+, but prevents over writing an existing file"<br />c,y,,y,beginning,,,open/create a file for writing without deleting current content<br />c+,y,y,y,beginning,,,"open/create a file that is read, and then written back down"</span></code></div>
  </div>
 </div>
  <div class="note" id="125030">  <div class="votes">
    <div id="Vu125030">
    <a href="/manual/vote-note.php?id=125030&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125030">
    <a href="/manual/vote-note.php?id=125030&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125030" title="63% like this...">
    10
    </div>
  </div>
  <a href="#125030" class="name">
  <strong class="user"><em>php-manual at merlindynamics dot com</em></strong></a><a class="genanchor" href="#125030"> &para;</a><div class="date" title="2020-05-20 10:19"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125030">
<div class="phpcode"><code><span class="html">There is an undocumented mode for making fopen non-blocking (not working on windows). By adding 'n' to the mode parameter, fopen will not block, however if the pipe does not exist an error will be raised.<br /><br />$fp = fopen("/tmp/debug", "a"); //blocks if pipe does not exist<br /><br />$fp = fopen("/tmp/debug", "an"); //raises error on pipe not exist</span></code></div>
  </div>
 </div>
  <div class="note" id="84028">  <div class="votes">
    <div id="Vu84028">
    <a href="/manual/vote-note.php?id=84028&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84028">
    <a href="/manual/vote-note.php?id=84028&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84028" title="60% like this...">
    26
    </div>
  </div>
  <a href="#84028" class="name">
  <strong class="user"><em>php at delhelsa dot com</em></strong></a><a class="genanchor" href="#84028"> &para;</a><div class="date" title="2008-06-24 12:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84028">
<div class="phpcode"><code><span class="html">With php 5.2.5 on Apache 2.2.4, accessing files on an ftp server with fopen() or readfile() requires an extra forwardslash if an absolute path is needed.
<br />
<br />i.e., if a file called bullbes.txt is stored under /var/school/ on ftp server example.com and you're trying to access it with user blossom and password buttercup, the url would be:
<br />
<br /><a href="ftp://blossom:buttercup@example.com//var/school/bubbles.txt" rel="nofollow" target="_blank">ftp://blossom:buttercup@example.com//var/school/bubbles.txt</a>
<br />
<br />Note the two forwardslashes. It looks like the second one is needed so the server won't interpret the path as relative to blossom's home on townsville.</span></code></div>
  </div>
 </div>
  <div class="note" id="55434">  <div class="votes">
    <div id="Vu55434">
    <a href="/manual/vote-note.php?id=55434&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55434">
    <a href="/manual/vote-note.php?id=55434&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55434" title="56% like this...">
    10
    </div>
  </div>
  <a href="#55434" class="name">
  <strong class="user"><em>ideacode</em></strong></a><a class="genanchor" href="#55434"> &para;</a><div class="date" title="2005-08-03 07:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55434">
<div class="phpcode"><code><span class="html">Note that whether you may open directories is operating system dependent. The following lines:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Windows ($fh === false)<br /></span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'c:\\Temp'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br /><br /></span><span class="comment">// UNIX (is_resource($fh) === true)<br /></span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/tmp'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />demonstrate that on Windows (2000, probably XP) you may not open a directory (the error is "Permission Denied"), regardless of the security permissions on that directory.<br /><br />On UNIX, you may happily read the directory format for the native filesystem.</span></code></div>
  </div>
 </div>
  <div class="note" id="105180">  <div class="votes">
    <div id="Vu105180">
    <a href="/manual/vote-note.php?id=105180&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105180">
    <a href="/manual/vote-note.php?id=105180&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105180" title="54% like this...">
    4
    </div>
  </div>
  <a href="#105180" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#105180"> &para;</a><div class="date" title="2011-08-01 09:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105180">
<div class="phpcode"><code><span class="html">fopen() will block if the file to be opened is a fifo. This is true whether it's opened in "r" or "w" mode.  (See man 7 fifo: this is the correct, default behaviour; although Linux supports non-blocking fopen() of a fifo, PHP doesn't).<br />The consequence of this is that you can't discover whether an initial fifo read/write would block because to do that you need stream_select(), which in turn requires that fopen() has happened!</span></code></div>
  </div>
 </div>
  <div class="note" id="122348">  <div class="votes">
    <div id="Vu122348">
    <a href="/manual/vote-note.php?id=122348&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122348">
    <a href="/manual/vote-note.php?id=122348&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122348" title="53% like this...">
    3
    </div>
  </div>
  <a href="#122348" class="name">
  <strong class="user"><em>etters dot ayoub at gmail dot com</em></strong></a><a class="genanchor" href="#122348"> &para;</a><div class="date" title="2018-02-02 04:18"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122348">
<div class="phpcode"><code><span class="html">This functions check recursive permissions and recursive existence parent folders, before creating a folder. To avoid the generation of errors/warnings. <br /><br />/**<br /> * This functions check recursive permissions and recursive existence parent folders,<br /> * before creating a folder. To avoid the generation of errors/warnings. <br /> *<br /> * @return bool<br /> *     true folder has been created or exist and writable. <br /> *     False folder not exist and cannot be created. <br /> */<br />function createWritableFolder($folder)<br />{<br />    if (file_exists($folder)) {<br />        // Folder exist.<br />        return is_writable($folder);<br />    }<br />    // Folder not exit, check parent folder.<br />    $folderParent = dirname($folder);<br />    if($folderParent != '.' &amp;&amp; $folderParent != '/' ) {<br />        if(!createWritableFolder(dirname($folder))) {<br />            // Failed to create folder parent.<br />            return false;<br />        }<br />        // Folder parent created.<br />    }<br /><br />    if ( is_writable($folderParent) ) {<br />        // Folder parent is writable.<br />        if ( mkdir($folder, 0777, true) ) {<br />            // Folder created.<br />            return true;<br />        }<br />        // Failed to create folder.<br />    }<br />    // Folder parent is not writable.<br />    return false;<br />}<br /><br />/**<br /> * This functions check recursive permissions and recursive existence parent folders,<br /> * before creating a file/folder. To avoid the generation of errors/warnings. <br /> *<br /> * @return bool<br /> *     true has been created or file exist and writable. <br /> *     False file not exist and cannot be created. <br /> */<br />function createWritableFile($file)<br />{<br />    // Check if conf file exist.<br />    if (file_exists($file)) {<br />        // check if conf file is writable.<br />        return is_writable($file);<br />    }<br /><br />    // Check if conf folder exist and try to create conf file.<br />    if(createWritableFolder(dirname($file)) &amp;&amp; ($handle = fopen($file, 'a'))) {<br />        fclose($handle);<br />        return true; // File conf created.<br />    }<br />    // Inaccessible conf file.<br />    return false;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="104325">  <div class="votes">
    <div id="Vu104325">
    <a href="/manual/vote-note.php?id=104325&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104325">
    <a href="/manual/vote-note.php?id=104325&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104325" title="52% like this...">
    5
    </div>
  </div>
  <a href="#104325" class="name">
  <strong class="user"><em>splogamurugan at gmail dot com</em></strong></a><a class="genanchor" href="#104325"> &para;</a><div class="date" title="2011-06-09 02:13"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104325">
<div class="phpcode"><code><span class="html">While opening a file with multibyte data (Ex: données multi-octets), faced some issues with the encoding. Got to know that it uses  windows-1250. Used iconv to convert it to UTF-8 and it resolved the issue.  
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">utf8_fopen_read</span><span class="keyword">(</span><span class="default">$fileName</span><span class="keyword">) {
<br />    </span><span class="default">$fc </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">'windows-1250'</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">, </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$fileName</span><span class="keyword">)); 
<br />    </span><span class="default">$handle</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"php://memory"</span><span class="keyword">, </span><span class="string">"rw"</span><span class="keyword">);
<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$fc</span><span class="keyword">); 
<br />    </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); 
<br />    return </span><span class="default">$handle</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Example usage:
<br />
<br /><span class="default">&lt;?php
<br />$fh </span><span class="keyword">= </span><span class="default">utf8_fopen_read</span><span class="keyword">(</span><span class="string">"./tpKpiBundle.csv"</span><span class="keyword">);
<br />while ((</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">, </span><span class="string">","</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {
<br />    foreach (</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {
<br />        echo </span><span class="default">$value </span><span class="keyword">. </span><span class="string">"&lt;br /&gt;\n"</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hope it helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="37553">  <div class="votes">
    <div id="Vu37553">
    <a href="/manual/vote-note.php?id=37553&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37553">
    <a href="/manual/vote-note.php?id=37553&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37553" title="53% like this...">
    4
    </div>
  </div>
  <a href="#37553" class="name">
  <strong class="user"><em>dan at cleandns dot com</em></strong></a><a class="genanchor" href="#37553"> &para;</a><div class="date" title="2003-11-19 11:15"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37553">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">#going to update last users counter script since<br />#aborting a write because a file is locked is not correct.<br /><br /></span><span class="default">$counter_file </span><span class="keyword">= </span><span class="string">'/tmp/counter.txt'</span><span class="keyword">;<br /></span><span class="default">clearstatcache</span><span class="keyword">();<br /></span><span class="default">ignore_user_abort</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);     </span><span class="comment">## prevent refresh from aborting file operations and hosing file<br /></span><span class="keyword">if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$counter_file</span><span class="keyword">)) {<br />   </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$counter_file</span><span class="keyword">, </span><span class="string">'r+'</span><span class="keyword">);<br />    while(</span><span class="default">1</span><span class="keyword">) {<br />      if (</span><span class="default">flock</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">LOCK_EX</span><span class="keyword">)) {<br />         </span><span class="comment">#$buffer = chop(fgets($fh, 2));<br />         </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">chop</span><span class="keyword">(</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$counter_file</span><span class="keyword">)));<br />         </span><span class="default">$buffer</span><span class="keyword">++;<br />         </span><span class="default">rewind</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />         </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$buffer</span><span class="keyword">);<br />         </span><span class="default">fflush</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />         </span><span class="default">ftruncate</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">));     <br />         </span><span class="default">flock</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">LOCK_UN</span><span class="keyword">);<br />         break;<br />      }<br />   }<br />}<br />else {<br />   </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$counter_file</span><span class="keyword">, </span><span class="string">'w+'</span><span class="keyword">);<br />   </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="string">"1"</span><span class="keyword">);<br />   </span><span class="default">$buffer</span><span class="keyword">=</span><span class="string">"1"</span><span class="keyword">;<br />}<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br /><br />print </span><span class="string">"Count is </span><span class="default">$buffer</span><span class="string">"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56551">  <div class="votes">
    <div id="Vu56551">
    <a href="/manual/vote-note.php?id=56551&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56551">
    <a href="/manual/vote-note.php?id=56551&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56551" title="52% like this...">
    3
    </div>
  </div>
  <a href="#56551" class="name">
  <strong class="user"><em>durwood at speakeasy dot NOSPAM dot net</em></strong></a><a class="genanchor" href="#56551"> &para;</a><div class="date" title="2005-09-06 11:43"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56551">
<div class="phpcode"><code><span class="html">I couldn't for the life of me get a certain php script working when i moved my server to a new Fedora 4 installation. The problem was that fopen() was failing when trying to access a file as a URL through apache -- even though it worked fine when run from the shell and even though the file was readily readable from any browser.  After trying to place blame on Apache, RedHat, and even my cat and dog, I finally ran across this bug report on Redhat's website:<br /><br /><a href="https://bugzilla.redhat.com/bugzilla/show_bug.cgi?id=164700" rel="nofollow" target="_blank">https://bugzilla.redhat.com/bugzilla/show_bug.cgi?id=164700</a><br /><br />Basically the problem was SELinux (which I knew nothing about) -- you have to run the following command in order for SELinux to allow php to open a web file:<br /><br />/usr/sbin/setsebool httpd_can_network_connect=1<br /><br />To make the change permanent, run it with the -P option:<br /><br />/usr/sbin/setsebool -P httpd_can_network_connect=1<br /><br />Hope this helps others out -- it sure took me a long time to track down the problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="130116">  <div class="votes">
    <div id="Vu130116">
    <a href="/manual/vote-note.php?id=130116&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130116">
    <a href="/manual/vote-note.php?id=130116&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130116" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130116" class="name">
  <strong class="user"><em>turabgarip at gmail dot com</em></strong></a><a class="genanchor" href="#130116"> &para;</a><div class="date" title="2025-03-04 12:10"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130116">
<div class="phpcode"><code><span class="html">Note that for fopen() to create files when called with such mode, the path you have given needs to exist as fopen() cannot create directories; but only files it can create. This is normal behavior.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Write log file, create if not exists<br /></span><span class="default">$log </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/var/logs/someapp/error.log'</span><span class="keyword">, </span><span class="string">'wb'</span><span class="keyword">);<br /></span><span class="comment">// This will silently fail if /var/logs/someapp directory doesn't exist<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109944">  <div class="votes">
    <div id="Vu109944">
    <a href="/manual/vote-note.php?id=109944&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109944">
    <a href="/manual/vote-note.php?id=109944&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109944" title="50% like this...">
    1
    </div>
  </div>
  <a href="#109944" class="name">
  <strong class="user"><em>apathetic012 at gmail dot com</em></strong></a><a class="genanchor" href="#109944"> &para;</a><div class="date" title="2012-09-04 03:19"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109944">
<div class="phpcode"><code><span class="html">a variable $http_response_header is available when doing the fopen(). Which contains an array of the response header.</span></code></div>
  </div>
 </div>
  <div class="note" id="58099">  <div class="votes">
    <div id="Vu58099">
    <a href="/manual/vote-note.php?id=58099&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58099">
    <a href="/manual/vote-note.php?id=58099&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58099" title="50% like this...">
    2
    </div>
  </div>
  <a href="#58099" class="name">
  <strong class="user"><em>info at b1g dot de</em></strong></a><a class="genanchor" href="#58099"> &para;</a><div class="date" title="2005-10-24 04:54"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58099">
<div class="phpcode"><code><span class="html">Simple class to fetch a HTTP URL. Supports "Location:"-redirections. Useful for servers with allow_url_fopen=false. Works with SSL-secured hosts.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">#usage:
<br /></span><span class="default">$r </span><span class="keyword">= new </span><span class="default">HTTPRequest</span><span class="keyword">(</span><span class="string">'<a href="http://www.example.com" rel="nofollow" target="_blank">http://www.example.com</a>'</span><span class="keyword">);
<br />echo </span><span class="default">$r</span><span class="keyword">-&gt;</span><span class="default">DownloadToString</span><span class="keyword">();
<br />
<br />class </span><span class="default">HTTPRequest
<br /></span><span class="keyword">{
<br />    var </span><span class="default">$_fp</span><span class="keyword">;        </span><span class="comment">// HTTP socket
<br />    </span><span class="keyword">var </span><span class="default">$_url</span><span class="keyword">;        </span><span class="comment">// full URL
<br />    </span><span class="keyword">var </span><span class="default">$_host</span><span class="keyword">;        </span><span class="comment">// HTTP host
<br />    </span><span class="keyword">var </span><span class="default">$_protocol</span><span class="keyword">;    </span><span class="comment">// protocol (HTTP/HTTPS)
<br />    </span><span class="keyword">var </span><span class="default">$_uri</span><span class="keyword">;        </span><span class="comment">// request URI
<br />    </span><span class="keyword">var </span><span class="default">$_port</span><span class="keyword">;        </span><span class="comment">// port
<br />    
<br />    // scan url
<br />    </span><span class="keyword">function </span><span class="default">_scan_url</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">$req </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_url</span><span class="keyword">;
<br />        
<br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$req</span><span class="keyword">, </span><span class="string">'://'</span><span class="keyword">);
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_protocol </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$req</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">));
<br />        
<br />        </span><span class="default">$req </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$req</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">+</span><span class="default">3</span><span class="keyword">);
<br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$req</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);
<br />        if(</span><span class="default">$pos </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">)
<br />            </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$req</span><span class="keyword">);
<br />        </span><span class="default">$host </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$req</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">);
<br />        
<br />        if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="string">':'</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">)
<br />        {
<br />            list(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_host</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_port</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">':'</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">);
<br />        }
<br />        else 
<br />        {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_host </span><span class="keyword">= </span><span class="default">$host</span><span class="keyword">;
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_port </span><span class="keyword">= (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_protocol </span><span class="keyword">== </span><span class="string">'https'</span><span class="keyword">) ? </span><span class="default">443 </span><span class="keyword">: </span><span class="default">80</span><span class="keyword">;
<br />        }
<br />        
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_uri </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$req</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">);
<br />        if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_uri </span><span class="keyword">== </span><span class="string">''</span><span class="keyword">)
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_uri </span><span class="keyword">= </span><span class="string">'/'</span><span class="keyword">;
<br />    }
<br />    
<br />    </span><span class="comment">// constructor
<br />    </span><span class="keyword">function </span><span class="default">HTTPRequest</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_url </span><span class="keyword">= </span><span class="default">$url</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_scan_url</span><span class="keyword">();
<br />    }
<br />    
<br />    </span><span class="comment">// download URL to string
<br />    </span><span class="keyword">function </span><span class="default">DownloadToString</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">$crlf </span><span class="keyword">= </span><span class="string">"\r\n"</span><span class="keyword">;
<br />        
<br />        </span><span class="comment">// generate request
<br />        </span><span class="default">$req </span><span class="keyword">= </span><span class="string">'GET ' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_uri </span><span class="keyword">. </span><span class="string">' HTTP/1.0' </span><span class="keyword">. </span><span class="default">$crlf
<br />            </span><span class="keyword">.    </span><span class="string">'Host: ' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_host </span><span class="keyword">. </span><span class="default">$crlf
<br />            </span><span class="keyword">.    </span><span class="default">$crlf</span><span class="keyword">;
<br />        
<br />        </span><span class="comment">// fetch
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">((</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_protocol </span><span class="keyword">== </span><span class="string">'https' </span><span class="keyword">? </span><span class="string">'ssl://' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">) . </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_host</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_port</span><span class="keyword">);
<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_fp</span><span class="keyword">, </span><span class="default">$req</span><span class="keyword">);
<br />        while(</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_fp</span><span class="keyword">) &amp;&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_fp </span><span class="keyword">&amp;&amp; !</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_fp</span><span class="keyword">))
<br />            </span><span class="default">$response </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_fp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_fp</span><span class="keyword">);
<br />        
<br />        </span><span class="comment">// split header and body
<br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">, </span><span class="default">$crlf </span><span class="keyword">. </span><span class="default">$crlf</span><span class="keyword">);
<br />        if(</span><span class="default">$pos </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">)
<br />            return(</span><span class="default">$response</span><span class="keyword">);
<br />        </span><span class="default">$header </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">);
<br />        </span><span class="default">$body </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">2 </span><span class="keyword">* </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$crlf</span><span class="keyword">));
<br />        
<br />        </span><span class="comment">// parse headers
<br />        </span><span class="default">$headers </span><span class="keyword">= array();
<br />        </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$crlf</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">);
<br />        foreach(</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">)
<br />            if((</span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">, </span><span class="string">':'</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">)
<br />                </span><span class="default">$headers</span><span class="keyword">[</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">)))] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">));
<br />        
<br />        </span><span class="comment">// redirection?
<br />        </span><span class="keyword">if(isset(</span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'location'</span><span class="keyword">]))
<br />        {
<br />            </span><span class="default">$http </span><span class="keyword">= new </span><span class="default">HTTPRequest</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'location'</span><span class="keyword">]);
<br />            return(</span><span class="default">$http</span><span class="keyword">-&gt;</span><span class="default">DownloadToString</span><span class="keyword">(</span><span class="default">$http</span><span class="keyword">));
<br />        }
<br />        else 
<br />        {
<br />            return(</span><span class="default">$body</span><span class="keyword">);
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37761">  <div class="votes">
    <div id="Vu37761">
    <a href="/manual/vote-note.php?id=37761&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37761">
    <a href="/manual/vote-note.php?id=37761&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37761" title="51% like this...">
    1
    </div>
  </div>
  <a href="#37761" class="name">
  <strong class="user"><em>ken dot gregg at rwre dot com</em></strong></a><a class="genanchor" href="#37761"> &para;</a><div class="date" title="2003-11-25 03:03"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37761">
<div class="phpcode"><code><span class="html">PHP will open a directory if a path with no file name is supplied. This just bit me. I was not checking the filename part of a concatenated string.
<br />
<br />For example:
<br />
<br /><span class="default">&lt;?php
<br />$fd </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/home/mydir/' </span><span class="keyword">. </span><span class="default">$somefile</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Will open the directory if $somefile = ''
<br />
<br />If you attempt to read using the file handle you will get the binary directory contents. I tried append mode and it errors out so does not seem to be dangerous.
<br />
<br />This is with FreeBSD 4.5 and PHP 4.3.1. Behaves the same on 4.1.1 and PHP 4.1.2. I have not tested other version/os combinations.</span></code></div>
  </div>
 </div>
  <div class="note" id="107468">  <div class="votes">
    <div id="Vu107468">
    <a href="/manual/vote-note.php?id=107468&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107468">
    <a href="/manual/vote-note.php?id=107468&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107468" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#107468" class="name">
  <strong class="user"><em>kasper at webmasteren dot eu</em></strong></a><a class="genanchor" href="#107468"> &para;</a><div class="date" title="2012-02-10 08:36"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107468">
<div class="phpcode"><code><span class="html">"Do not use the following reserved device names for the name of a file:<br />CON, PRN, AUX, NUL, COM1, COM2, COM3, COM4, COM5, COM6, COM7, COM8, COM9, LPT1, <br />LPT2, LPT3, LPT4, LPT5, LPT6, LPT7, LPT8, and LPT9. Also avoid these names <br />followed immediately by an extension; for example, NUL.txt is not recommended. <br />For more information, see Namespaces"<br />it is a windows limitation.<br />see:<br /><a href="http://msdn.microsoft.com/en-us/library/windows/desktop/aa365247(v=vs.85" rel="nofollow" target="_blank">http://msdn.microsoft.com/en-us/library/windows/desktop/aa365247(v=vs.85</a>).aspx</span></code></div>
  </div>
 </div>
  <div class="note" id="60718">  <div class="votes">
    <div id="Vu60718">
    <a href="/manual/vote-note.php?id=60718&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60718">
    <a href="/manual/vote-note.php?id=60718&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60718" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#60718" class="name">
  <strong class="user"><em>flobee</em></strong></a><a class="genanchor" href="#60718"> &para;</a><div class="date" title="2006-01-14 07:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60718">
<div class="phpcode"><code><span class="html">download: i need a function to simulate a "wget url" and do not buffer the data in the memory to avoid thouse problems on large files:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">download</span><span class="keyword">(</span><span class="default">$file_source</span><span class="keyword">, </span><span class="default">$file_target</span><span class="keyword">) {<br />        </span><span class="default">$rh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file_source</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);<br />        </span><span class="default">$wh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file_target</span><span class="keyword">, </span><span class="string">'wb'</span><span class="keyword">);<br />        if (</span><span class="default">$rh</span><span class="keyword">===</span><span class="default">false </span><span class="keyword">|| </span><span class="default">$wh</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">) {<br /></span><span class="comment">// error reading or opening file<br />           </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />        }<br />        while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$rh</span><span class="keyword">)) {<br />            if (</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$wh</span><span class="keyword">, </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$rh</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">)) === </span><span class="default">FALSE</span><span class="keyword">) {<br />                   </span><span class="comment">// 'Download error: Cannot write to file ('.$file_target.')';<br />                   </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />               }<br />        }<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$rh</span><span class="keyword">);<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$wh</span><span class="keyword">);<br />        </span><span class="comment">// No error<br />        </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="14426">  <div class="votes">
    <div id="Vu14426">
    <a href="/manual/vote-note.php?id=14426&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14426">
    <a href="/manual/vote-note.php?id=14426&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14426" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#14426" class="name">
  <strong class="user"><em>keithm at aoeex dot NOSPAM dot com</em></strong></a><a class="genanchor" href="#14426"> &para;</a><div class="date" title="2001-07-31 05:19"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14426">
<div class="phpcode"><code><span class="html">I was working on a consol script for win32 and noticed a few things about it.  On win32 it appears that you can't re-open the input stream for reading, but rather you have to open it once, and read from there on.  Also, i don't know if this is a bug or what but it appears that fgets() reads until the new line anyway.  The number of characters returned is ok, but it will not halt reading and return to the script.  I don't know of a work around for this right now, but i'll keep working on it.
<br />
<br />This is some code to work around the close and re-open of stdin.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">=</span><span class="string">'255'</span><span class="keyword">){
<br />    if (!isset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'StdinPointer'</span><span class="keyword">])){
<br />        </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'StdinPointer'</span><span class="keyword">]=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"php://stdin"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">$line</span><span class="keyword">=</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'StdinPointer'</span><span class="keyword">],</span><span class="default">$length</span><span class="keyword">);
<br />    return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">);
<br />}
<br />echo </span><span class="string">"Enter your name: "</span><span class="keyword">;
<br /></span><span class="default">$name</span><span class="keyword">=</span><span class="default">read</span><span class="keyword">();
<br />echo </span><span class="string">"Enter your age: "</span><span class="keyword">;
<br /></span><span class="default">$age</span><span class="keyword">=</span><span class="default">read</span><span class="keyword">();
<br />echo </span><span class="string">"Hi </span><span class="default">$name</span><span class="string">, Isn't it Great to be </span><span class="default">$age</span><span class="string"> years old?"</span><span class="keyword">;
<br />@</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$StdinPointer</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127085">  <div class="votes">
    <div id="Vu127085">
    <a href="/manual/vote-note.php?id=127085&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127085">
    <a href="/manual/vote-note.php?id=127085&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127085" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#127085" class="name">
  <strong class="user"><em>wvss at gmail dot com</em></strong></a><a class="genanchor" href="#127085"> &para;</a><div class="date" title="2022-05-15 07:10"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127085">
<div class="phpcode"><code><span class="html">&lt;!DOCTYPE html&gt;<br />&lt;html lang="en"&gt;<br />&lt;head&gt;<br />    &lt;meta charset="UTF-8"&gt;<br />    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;<br />    &lt;title&gt;Document&lt;/title&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br /><span class="default">&lt;?php<br /></span><span class="comment">// generiereHostliste.php<br /><br /></span><span class="keyword">function </span><span class="default">generiereHostliste</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br /><br />   </span><span class="comment">// aus Rechnerliste.csv lesen<br />   </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />   while(</span><span class="default">$row </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">";"</span><span class="keyword">)) {       <br />        </span><span class="default">$liste</span><span class="keyword">[]=[</span><span class="default">$row</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">].</span><span class="string">";10.16."</span><span class="keyword">.</span><span class="default">$row</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">"."</span><span class="keyword">.</span><span class="default">$row</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]]; <br />        <br />   }  <br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /><br />   </span><span class="comment">// in Hostliste.csv schreiben<br />   </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"Hostliste.csv"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);<br />   foreach(</span><span class="default">$liste </span><span class="keyword">as </span><span class="default">$row</span><span class="keyword">) {<br />       echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br />       </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">);<br />       echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br />        </span><span class="default">fputcsv</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">, </span><span class="string">";"</span><span class="keyword">);<br />   }<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />}<br /></span><span class="comment">// Test<br /></span><span class="default">$file </span><span class="keyword">= </span><span class="string">"Rechnerliste.csv"</span><span class="keyword">;<br /></span><span class="default">generiereHostliste</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="64262">  <div class="votes">
    <div id="Vu64262">
    <a href="/manual/vote-note.php?id=64262&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64262">
    <a href="/manual/vote-note.php?id=64262&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64262" title="44% like this...">
    -5
    </div>
  </div>
  <a href="#64262" class="name">
  <strong class="user"><em>ceo at l-i-e dot com</em></strong></a><a class="genanchor" href="#64262"> &para;</a><div class="date" title="2006-04-10 08:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64262">
<div class="phpcode"><code><span class="html">If you need fopen() on a URL to timeout, you can do like:<br /><span class="default">&lt;?php<br />  $timeout </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />  </span><span class="default">$old </span><span class="keyword">= </span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'default_socket_timeout'</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">);<br />  </span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />  </span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'default_socket_timeout'</span><span class="keyword">, </span><span class="default">$old</span><span class="keyword">);<br />  </span><span class="default">stream_set_timeout</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">);<br />  </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />  </span><span class="comment">//the rest is standard<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128111">  <div class="votes">
    <div id="Vu128111">
    <a href="/manual/vote-note.php?id=128111&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128111">
    <a href="/manual/vote-note.php?id=128111&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128111" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#128111" class="name">
  <strong class="user"><em>Derrick</em></strong></a><a class="genanchor" href="#128111"> &para;</a><div class="date" title="2023-01-13 06:32"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128111">
<div class="phpcode"><code><span class="html">Opening a file in "r+" mode, and then trying to set the file pointer position with ftruncate before reading the file will result in file data loss, as though you opened the file in "w" mode.<br /><br />EX:<br /><br />$File = fopen($FilePath,"r+");  // OPEN FILE IN READ-WRITE<br /><br />ftruncate($File, 0);  // SET POINTER POSITION (Will Erase Data)<br /><br />while(! feof($File)) {  // CONTINUE UNTIL END OF FILE IS REACHED<br /><br />    $Line = fgets($File);  // GET A LINE FROM THE FILE INTO STRING<br />    $Line = trim($Line);  // TRIM STRING OF NEW LINE<br />}<br /><br />ftruncate($File,0); // (Will Not Erase Data)<br /><br />fclose($File);</span></code></div>
  </div>
 </div>
  <div class="note" id="129179">  <div class="votes">
    <div id="Vu129179">
    <a href="/manual/vote-note.php?id=129179&amp;page=function.fopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129179">
    <a href="/manual/vote-note.php?id=129179&amp;page=function.fopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129179" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#129179" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#129179"> &para;</a><div class="date" title="2024-01-20 04:48"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129179">
<div class="phpcode"><code><span class="html">Please note that you cannot write to a HTTP resource, for example for doing a PUT request.<br /><br />You will get this error: 'Failed to open stream: HTTP wrapper does not support writeable connections'<br /><br />To do a PUT you can only populate the 'content' key of the HTTP context, or use Curl instead.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.fopen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fopen.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
