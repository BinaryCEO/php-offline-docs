<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: HTTP context options - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/context.http.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/context.http.php">
 <link rel="alternate" href="https://www.php.net/manual/en/context.http.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/context.php">
 <link rel="prev" href="https://www.php.net/manual/en/context.socket.php">
 <link rel="next" href="https://www.php.net/manual/en/context.ftp.php">

 <link rel="alternate" href="https://www.php.net/manual/en/context.http.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/context.http.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/context.http.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/context.http.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/context.http.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/context.http.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/context.http.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/context.http.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/context.http.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/context.http.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/context.http.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="HTTP context option listing" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: HTTP context options - Manual" />
<meta name="twitter:description" content="HTTP context option listing" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: HTTP context options - Manual" />
<meta itemprop="description" content="HTTP context option listing" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="HTTP context option listing" />

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
        <a href="context.ftp.php">
          FTP context options &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="context.socket.php">
          &laquo; Socket context options        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='context.php'>Context options and parameters</a></li>      </ul>
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
            <option value='en/context.http.php' selected="selected">English</option>
            <option value='de/context.http.php'>German</option>
            <option value='es/context.http.php'>Spanish</option>
            <option value='fr/context.http.php'>French</option>
            <option value='it/context.http.php'>Italian</option>
            <option value='ja/context.http.php'>Japanese</option>
            <option value='pt_BR/context.http.php'>Brazilian Portuguese</option>
            <option value='ru/context.http.php'>Russian</option>
            <option value='tr/context.http.php'>Turkish</option>
            <option value='uk/context.http.php'>Ukrainian</option>
            <option value='zh/context.http.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="context.http" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">HTTP context options</h1>
  <p class="refpurpose"><span class="refname">HTTP context options</span> &mdash; <span class="dc-title">HTTP context option listing</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-context.http-description">
  <h3 class="title">Description</h3>
  <p class="para">
   Context options for <code class="literal">http://</code> and <code class="literal">https://</code>
   transports.
  </p>
 </div>


 <div class="refsect1 options" id="refsect1-context.http-options">
  <h3 class="title">Options</h3>
  <p class="para">
   <dl>
    
     <dt id="context.http.method">
      <code class="parameter">method</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       <strong><code>GET</code></strong>, <strong><code>POST</code></strong>, or
       any other HTTP method supported by the remote server.
      </p>
      <p class="para">
       Defaults to <strong><code>GET</code></strong>.
      </p>
     </dd>
    
    
     <dt id="context.http.header">
      <code class="parameter">header</code>
      <span class="type"><a href="language.types.array.php" class="type array">array</a></span> or <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Additional headers to be sent during request. Values
       in this option will override other values (such as
       <code class="literal">User-agent:</code>, <code class="literal">Host:</code>,
       and <code class="literal">Authentication:</code>),
       even when following <code class="literal">Location:</code> redirects.
       Thus it is not recommended to set a <code class="literal">Host:</code> header,
       if <code class="parameter">follow_location</code> is enabled.
      </p>
      <p class="para">
       String value should be <code class="literal">Key: value</code> pairs delimited by
       <code class="literal">\r\n</code>, e.g.
       <code class="literal">&quot;Content-Type: application/json\r\nConnection: close&quot;</code>.
       Array value should be a list of <code class="literal">Key: value</code> pairs, e.g.
       <code class="literal">[&quot;Content-Type: application/json&quot;, &quot;Connection: close&quot;]</code>.
      </p>
     </dd>
    
    
     <dt id="context.http.user-agent">
      <code class="parameter">user_agent</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Value to send with <code class="literal">User-Agent:</code> header. This value will
       only be used if user-agent is <em>not</em> specified
       in the <code class="literal">header</code> context option above.
      </p>
      <p class="para">
       By default the
       <a href="filesystem.configuration.php#ini.user-agent" class="link">user_agent</a>
       <var class="filename">php.ini</var> setting is used.
      </p>
     </dd>
    
    
     <dt id="context.http.content">
      <code class="parameter">content</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Additional data to be sent after the headers. Typically used
       with POST or PUT requests.
      </p>
     </dd>
    
    
     <dt id="context.http.proxy">
      <code class="parameter">proxy</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       URI specifying address of proxy server (e.g.
       <code class="literal">tcp://proxy.example.com:5100</code>).
      </p>
     </dd>
    
    
     <dt id="context.http.request-fulluri">
      <code class="parameter">request_fulluri</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       When set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the entire URI will be used when
       constructing the request (e.g.
       <code class="literal">GET http://www.example.com/path/to/file.html HTTP/1.0</code>).
       While this is a non-standard request format, some
       proxy servers require it.
      </p>
      <p class="para">
       Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </p>
     </dd>
    
    
     <dt id="context.http.follow-location">
      <code class="parameter">follow_location</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Follow <code class="literal">Location</code> header redirects. Set to
       <code class="literal">0</code> to disable.
      </p>
      <p class="para">
       Defaults to <code class="literal">1</code>.
      </p>
     </dd>
    
    
     <dt id="context.http.max-redirects">
      <code class="parameter">max_redirects</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       The max number of redirects to follow. Value <code class="literal">1</code> or
       less means that no redirects are followed.
      </p>
      <p class="para">
       Defaults to <code class="literal">20</code>.
      </p>
     </dd>
    
    
     <dt id="context.http.protocol-version">
      <code class="parameter">protocol_version</code>
      <span class="type"><a href="language.types.float.php" class="type float">float</a></span>
     </dt>
     <dd>
      <p class="para">
       HTTP protocol version.
      </p>
      <p class="para">
       Defaults to <code class="literal">1.1</code> as of PHP 8.0.0;
       prior to that version the default was <code class="literal">1.0</code>.
      </p>
     </dd>
    
    
     <dt id="context.http.timeout">
      <code class="parameter">timeout</code>
      <span class="type"><a href="language.types.float.php" class="type float">float</a></span>
     </dt>
     <dd>
      <p class="para">
       Read timeout in seconds, specified by a <span class="type"><a href="language.types.float.php" class="type float">float</a></span>
       (e.g. <code class="literal">10.5</code>).
      </p>
      <p class="para">
       By default the
       <a href="filesystem.configuration.php#ini.default-socket-timeout" class="link">default_socket_timeout</a>
       <var class="filename">php.ini</var> setting is used.
      </p>
     </dd>
    
    
     <dt id="context.http.ignore-errors">
      <code class="parameter">ignore_errors</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Fetch the content even on failure status codes.
      </p>
      <p class="para">
       Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-context.http-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="context.http.example-post">
    <p><strong>Example #1 Fetch a page and send POST data</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$postdata </span><span style="color: #007700">= </span><span style="color: #0000BB">http_build_query</span><span style="color: #007700">(<br />    [<br />        </span><span style="color: #DD0000">'var1' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'some content'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'var2' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'doh'</span><span style="color: #007700">,<br />    ]<br />);<br /><br /></span><span style="color: #0000BB">$opts </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">'http' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'method'  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'POST'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'header'  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Content-type: application/x-www-form-urlencoded'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'content' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$postdata</span><span style="color: #007700">,<br />    ]<br />];<br /><br /></span><span style="color: #0000BB">$context </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">(</span><span style="color: #0000BB">$opts</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://example.com/submit.php'</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">$context</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="context.http.example-fetch-ignore-redirect">
    <p><strong>Example #2 Ignore redirects but fetch headers and content</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$url </span><span style="color: #007700">= </span><span style="color: #DD0000">"http://www.example.org/header.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$opts </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">'http' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'method'        </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'GET'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'max_redirects' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'0'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'ignore_errors' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'1'</span><span style="color: #007700">,<br />    ]<br />];<br /><br /></span><span style="color: #0000BB">$context </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">(</span><span style="color: #0000BB">$opts</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stream </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">$context</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// header information as well as meta data<br />// about the stream<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">stream_get_meta_data</span><span style="color: #007700">(</span><span style="color: #0000BB">$stream</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// actual data at $url<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">stream_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$stream</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$stream</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-context.http-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <strong>Underlying socket stream context options</strong><br />
   <span class="simpara">
    Additional context options may be supported by the
    <a href="transports.inet.php" class="link">underlying transport</a>
    For <code class="literal">http://</code> streams, refer to context
    options for the <code class="literal">tcp://</code> transport.  For
    <code class="literal">https://</code> streams, refer to context options
    for the <code class="literal">ssl://</code> transport.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <strong>HTTP status line</strong><br />
   <span class="simpara">
    When this stream wrapper follows a redirect, the
    <code class="literal">wrapper_data</code> returned by
    <span class="function"><a href="function.stream-get-meta-data.php" class="function">stream_get_meta_data()</a></span> might not necessarily contain
    the HTTP status line that actually applies to the content data at index
    <code class="literal">0</code>.
   </span>
   <div class="example-contents screen">
<div class="notescode"><pre class="notescode">array (
  &#039;wrapper_data&#039; =&gt;
  array (
    0 =&gt; &#039;HTTP/1.0 301 Moved Permanently&#039;,
    1 =&gt; &#039;Cache-Control: no-cache&#039;,
    2 =&gt; &#039;Connection: close&#039;,
    3 =&gt; &#039;Location: http://example.com/foo.jpg&#039;,
    4 =&gt; &#039;HTTP/1.1 200 OK&#039;,
    ...</pre>
</div>
   </div>
   <span class="simpara">
    The first request returned a <code class="literal">301</code> (permanent redirect),
    so the stream wrapper automatically followed the redirect to get a
    <code class="literal">200</code> response (index = <code class="literal">4</code>).
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-context.http-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="wrappers.http.php" class="xref">http://</a></li>
    <li><a href="context.socket.php" class="xref">Socket context options</a></li>
    <li><a href="context.ssl.php" class="xref">SSL context options</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/context/http.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcontext.http%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=context.http&amp;repo=en&amp;redirect=https://www.php.net/manual/en/context.http.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114867">  <div class="votes">
    <div id="Vu114867">
    <a href="/manual/vote-note.php?id=114867&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114867">
    <a href="/manual/vote-note.php?id=114867&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114867" title="77% like this...">
    33
    </div>
  </div>
  <a href="#114867" class="name">
  <strong class="user"><em>nate</em></strong></a><a class="genanchor" href="#114867"> &para;</a><div class="date" title="2014-04-17 03:19"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114867">
<div class="phpcode"><code><span class="html">Note that if you set the protocol_version option to 1.1 and the server you are requesting from is configured to use keep-alive connections, the function (fopen, file_get_contents, etc.) will "be slow" and take a long time to complete. This is a feature of the HTTP 1.1 protocol you are unlikely to use with stream contexts in PHP.<br /><br />Simply add a "Connection: close" header to the request to eliminate the keep-alive timeout:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// php 5.4 : array syntax and header option with array value<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'<a href="http://www.example.com/" rel="nofollow" target="_blank">http://www.example.com/</a>'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">stream_context_create</span><span class="keyword">([<br />    </span><span class="string">'http' </span><span class="keyword">=&gt; [<br />        </span><span class="string">'protocol_version' </span><span class="keyword">=&gt; </span><span class="default">1.1</span><span class="keyword">,<br />        </span><span class="string">'header'           </span><span class="keyword">=&gt; [<br />            </span><span class="string">'Connection: close'</span><span class="keyword">,<br />        ],<br />    ],<br />]));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121762">  <div class="votes">
    <div id="Vu121762">
    <a href="/manual/vote-note.php?id=121762&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121762">
    <a href="/manual/vote-note.php?id=121762&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121762" title="82% like this...">
    18
    </div>
  </div>
  <a href="#121762" class="name">
  <strong class="user"><em>daniel dot peder at gmail dot com</em></strong></a><a class="genanchor" href="#121762"> &para;</a><div class="date" title="2017-10-16 06:50"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121762">
<div class="phpcode"><code><span class="html">note that for both http and https protocols require the same 'http' context keyword:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// CORRECT example:<br />// this will work as expected<br />// note the url with https but context with http<br /></span><span class="default">$correct_data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'<a href="https://example.com" rel="nofollow" target="_blank">https://example.com</a>'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">stream_context_create</span><span class="keyword">(array(</span><span class="string">'http' </span><span class="keyword">=&gt; array(...))));<br /><br /></span><span class="comment">// INVALID example:<br />// this will not work, the context will be ignored<br />// note the url with https also context with https<br /></span><span class="default">$correct_data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'<a href="https://example.com" rel="nofollow" target="_blank">https://example.com</a>'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">stream_context_create</span><span class="keyword">(array(</span><span class="string">'https' </span><span class="keyword">=&gt; array(...))));</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125832">  <div class="votes">
    <div id="Vu125832">
    <a href="/manual/vote-note.php?id=125832&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125832">
    <a href="/manual/vote-note.php?id=125832&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125832" title="87% like this...">
    6
    </div>
  </div>
  <a href="#125832" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#125832"> &para;</a><div class="date" title="2021-02-16 02:51"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125832">
<div class="phpcode"><code><span class="html">With the default of <br /><br />    'follow_location'   =&gt;  1<br /><br />be certain NEVER include a "Host:" header in the 'header' array.<br /><br />If the host is set to "mydomain.com", and that web site has a (quite common) redirect to "www.mydomain.com", then the initial request to "<a href="http://mydomain.com" rel="nofollow" target="_blank">http://mydomain.com</a>" will get the expected response of:<br /><br />HTTP/1.1 301 Moved Permanently<br />Location: <a href="http://www.mydomain.com/" rel="nofollow" target="_blank">http://www.mydomain.com/</a><br /><br />However, the follow-up request does NOT replace the original "host" header with the new "location" value, as one would expect. Consequently each "follow-location" request will again be served by the original host of "<a href="http://mydomain.com" rel="nofollow" target="_blank">http://mydomain.com</a>", and continue the redirect loop until 'max_redirects' has been exhausted.<br /><br />(For details: <a href="https://bugs.php.net/bug.php?id=77889" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=77889</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="121763">  <div class="votes">
    <div id="Vu121763">
    <a href="/manual/vote-note.php?id=121763&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121763">
    <a href="/manual/vote-note.php?id=121763&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121763" title="72% like this...">
    17
    </div>
  </div>
  <a href="#121763" class="name">
  <strong class="user"><em>daniel.peder (a) gmail.com</em></strong></a><a class="genanchor" href="#121763"> &para;</a><div class="date" title="2017-10-16 06:55"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121763">
<div class="phpcode"><code><span class="html">note that both http and https transports require the same context name http<br /><br />// OK example:<br />// this will work as expected<br />// note the url with https but context with http<br />$correct_data = file_get_contents('<a href="https://example.com" rel="nofollow" target="_blank">https://example.com</a>', false, stream_context_create(array('http' =&gt; array(...))));<br /><br />// INVALID example:<br />// this will not work, the context will be ignored<br />// note the url with https also context with https<br />$correct_data = file_get_contents('<a href="https://example.com" rel="nofollow" target="_blank">https://example.com</a>', false, stream_context_create(array('https' =&gt; array(...))));</span></code></div>
  </div>
 </div>
  <div class="note" id="121470">  <div class="votes">
    <div id="Vu121470">
    <a href="/manual/vote-note.php?id=121470&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121470">
    <a href="/manual/vote-note.php?id=121470&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121470" title="85% like this...">
    5
    </div>
  </div>
  <a href="#121470" class="name">
  <strong class="user"><em>ywarnier at beeznest dot org</em></strong></a><a class="genanchor" href="#121470"> &para;</a><div class="date" title="2017-08-02 08:39"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121470">
<div class="phpcode"><code><span class="html">Note that setting request_fulluri to true will *change* the value of $_SERVER['REQUEST_URI] on the receiving end (from /abc.php to <a href="http://domain.com/abc.php" rel="nofollow" target="_blank">http://domain.com/abc.php</a>).</span></code></div>
  </div>
 </div>
  <div class="note" id="101933">  <div class="votes">
    <div id="Vu101933">
    <a href="/manual/vote-note.php?id=101933&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101933">
    <a href="/manual/vote-note.php?id=101933&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101933" title="71% like this...">
    15
    </div>
  </div>
  <a href="#101933" class="name">
  <strong class="user"><em>gourav sarkar</em></strong></a><a class="genanchor" href="#101933"> &para;</a><div class="date" title="2011-01-18 08:09"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101933">
<div class="phpcode"><code><span class="html">watch your case when using methods (POST and GET)...it must be always uppercase. in case of you write it in lower case it wont work.</span></code></div>
  </div>
 </div>
  <div class="note" id="121671">  <div class="votes">
    <div id="Vu121671">
    <a href="/manual/vote-note.php?id=121671&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121671">
    <a href="/manual/vote-note.php?id=121671&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121671" title="76% like this...">
    7
    </div>
  </div>
  <a href="#121671" class="name">
  <strong class="user"><em>aruntechguy at outlook dot com</em></strong></a><a class="genanchor" href="#121671"> &para;</a><div class="date" title="2017-09-22 02:50"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121671">
<div class="phpcode"><code><span class="html">If you want to use Basic Auth while using get_headers(), use stream_context options below. <br /><br />I am using HEAD method here, but please feel free to use GET also.<br /><br /><span class="default">&lt;?php<br />$targetUrl </span><span class="keyword">= </span><span class="string">'http or https target url here'</span><span class="keyword">;<br /></span><span class="default">$basicAuth </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="string">'username:password'</span><span class="keyword">);<br /><br /></span><span class="default">stream_context_set_default</span><span class="keyword">(<br />    [<br />        </span><span class="string">'http' </span><span class="keyword">=&gt; [<br />            </span><span class="string">'method' </span><span class="keyword">=&gt; </span><span class="string">'HEAD'</span><span class="keyword">,<br />            </span><span class="string">'header' </span><span class="keyword">=&gt; </span><span class="string">'Authorization: Basic ' </span><span class="keyword">. </span><span class="default">$basicAuth<br />        </span><span class="keyword">]<br />    ]<br />);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">get_headers</span><span class="keyword">(</span><span class="default">$targetUrl</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129638">  <div class="votes">
    <div id="Vu129638">
    <a href="/manual/vote-note.php?id=129638&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129638">
    <a href="/manual/vote-note.php?id=129638&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129638" title="75% like this...">
    2
    </div>
  </div>
  <a href="#129638" class="name">
  <strong class="user"><em>njt1982 at yahoo dot com</em></strong></a><a class="genanchor" href="#129638"> &para;</a><div class="date" title="2024-07-04 12:11"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129638">
<div class="phpcode"><code><span class="html">It's worth noting that the `header` array seems to only want an array of strings, not an associative array.<br /><br />I just spent a chunk of time debugging something not working as expected (no errors though) which was fixed by converting an associative array of headers into a simple array of strings.</span></code></div>
  </div>
 </div>
  <div class="note" id="110449">  <div class="votes">
    <div id="Vu110449">
    <a href="/manual/vote-note.php?id=110449&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110449">
    <a href="/manual/vote-note.php?id=110449&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110449" title="65% like this...">
    10
    </div>
  </div>
  <a href="#110449" class="name">
  <strong class="user"><em>vchampion at gmail dot com</em></strong></a><a class="genanchor" href="#110449"> &para;</a><div class="date" title="2012-10-23 01:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110449">
<div class="phpcode"><code><span class="html">If you use the proxy server and encounter an error "fopen(<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>): failed to open stream: HTTP request failed! HTTP/1.0 400 Bad Request" note that in many situations you need also set the parameter "request_fulluri" to "true" in your stream options. Without this option the php script sends the empty request to the server as "GET / HTTP/0.0" and the proxy server replies to it with the "HTTP 400" error. 
<br />
<br />For example (working sample): 
<br /><span class="default">&lt;?php
<br />$stream </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(Array(</span><span class="string">"http" </span><span class="keyword">=&gt; Array(</span><span class="string">"method"  </span><span class="keyword">=&gt; </span><span class="string">"GET"</span><span class="keyword">,
<br />                                                      </span><span class="string">"timeout" </span><span class="keyword">=&gt; </span><span class="default">20</span><span class="keyword">,
<br />                                                      </span><span class="string">"header"  </span><span class="keyword">=&gt; </span><span class="string">"User-agent: Myagent"</span><span class="keyword">,
<br />                                                      </span><span class="string">"proxy"   </span><span class="keyword">=&gt; </span><span class="string">"tcp://my-proxy.localnet:3128"</span><span class="keyword">,
<br />                                                      </span><span class="string">'request_fulluri' </span><span class="keyword">=&gt; </span><span class="default">True </span><span class="comment">/* without this option we get an HTTP error! */
<br />                                </span><span class="keyword">)));
<br />
<br />if ( </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>"</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$stream</span><span class="keyword">) ) {
<br />    print </span><span class="string">"well done"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />P&gt;S&gt; PHP 5.3.17</span></code></div>
  </div>
 </div>
  <div class="note" id="117092">  <div class="votes">
    <div id="Vu117092">
    <a href="/manual/vote-note.php?id=117092&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117092">
    <a href="/manual/vote-note.php?id=117092&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117092" title="57% like this...">
    7
    </div>
  </div>
  <a href="#117092" class="name">
  <strong class="user"><em>jay</em></strong></a><a class="genanchor" href="#117092"> &para;</a><div class="date" title="2015-04-14 01:32"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117092">
<div class="phpcode"><code><span class="html">Remember to match content with Content-type:<br /><br /><span class="default">&lt;?php<br /><br />$data </span><span class="keyword">= array(<br />    </span><span class="string">'var1' </span><span class="keyword">=&gt; </span><span class="string">'some content'</span><span class="keyword">,<br />    </span><span class="string">'var2' </span><span class="keyword">=&gt; </span><span class="string">'doh'<br /></span><span class="keyword">);<br /><br /></span><span class="default">$opts </span><span class="keyword">= array(</span><span class="string">'http' </span><span class="keyword">=&gt;<br />    array(<br />        </span><span class="string">'method'  </span><span class="keyword">=&gt; </span><span class="string">'POST'</span><span class="keyword">,<br />        </span><span class="string">'header'  </span><span class="keyword">=&gt; </span><span class="string">'Content-type: application/json'</span><span class="keyword">,  </span><span class="comment">// here...<br />        </span><span class="string">'content' </span><span class="keyword">=&gt; </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)  </span><span class="comment">// and here.<br />    </span><span class="keyword">)<br />);<br /><br />. . .<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114314">  <div class="votes">
    <div id="Vu114314">
    <a href="/manual/vote-note.php?id=114314&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114314">
    <a href="/manual/vote-note.php?id=114314&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114314" title="55% like this...">
    4
    </div>
  </div>
  <a href="#114314" class="name">
  <strong class="user"><em>chris</em></strong></a><a class="genanchor" href="#114314"> &para;</a><div class="date" title="2014-02-06 06:14"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114314">
<div class="phpcode"><code><span class="html">I had quite a bit of trouble trying to make a request with fopen through a proxy to a secure url.  I kept getting a 400 Bad Request back from the remote host.  It was receiving the proxy url as the SNI host.  In order to get around this I had to explicity set the SNI host to the domain I was trying to reach.  It's apparently the issue outlined in this bug: <br /><br /><a href="https://bugs.php.net/bug.php?id=63519" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=63519</a><br /><br /><span class="default">&lt;?php<br />$domain </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">PHP_URL_HOST</span><span class="keyword">);<br /></span><span class="default">$proxy_string </span><span class="keyword">= </span><span class="string">"tcp://" </span><span class="keyword">. </span><span class="default">WP_PROXY_HOST  </span><span class="keyword">. </span><span class="string">":" </span><span class="keyword">. </span><span class="default">WP_PROXY_PORT</span><span class="keyword">;<br /></span><span class="default">$opts </span><span class="keyword">= array( <br />    </span><span class="string">'http' </span><span class="keyword">=&gt; array( </span><span class="string">'proxy' </span><span class="keyword">=&gt; </span><span class="default">$proxy_string </span><span class="keyword">),<br />    </span><span class="string">'ssl' </span><span class="keyword">=&gt; array( </span><span class="string">'SNI_enabled' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">, </span><span class="string">'SNI_server_name' </span><span class="keyword">=&gt; </span><span class="default">$domain</span><span class="keyword">));<br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);<br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">( </span><span class="default">$file</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$context </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130179">  <div class="votes">
    <div id="Vu130179">
    <a href="/manual/vote-note.php?id=130179&amp;page=context.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130179">
    <a href="/manual/vote-note.php?id=130179&amp;page=context.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130179" title="no votes...">
    0
    </div>
  </div>
  <a href="#130179" class="name">
  <strong class="user"><em>bigtree at 29a dot nl</em></strong></a><a class="genanchor" href="#130179"> &para;</a><div class="date" title="2025-03-20 04:19"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130179">
<div class="phpcode"><code><span class="html">If you pass the 'header' option as a string and you have multiple headers, they must be separated by "\r\n".</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=context.http&amp;repo=en&amp;redirect=https://www.php.net/manual/en/context.http.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="context.php">Context options and parameters</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="context.socket.php" title="Socket context options">Socket context options</a>
                        </li>
                                                <li class="current">
                            <a href="context.http.php" title="HTTP context options">HTTP context options</a>
                        </li>
                                                <li class="">
                            <a href="context.ftp.php" title="FTP context options">FTP context options</a>
                        </li>
                                                <li class="">
                            <a href="context.ssl.php" title="SSL context options">SSL context options</a>
                        </li>
                                                <li class="">
                            <a href="context.phar.php" title="Phar context options">Phar context options</a>
                        </li>
                                                <li class="">
                            <a href="context.params.php" title="Context parameters">Context parameters</a>
                        </li>
                                                <li class="">
                            <a href="context.zip.php" title="Zip context options">Zip context options</a>
                        </li>
                                                <li class="">
                            <a href="context.zlib.php" title="Zlib context options">Zlib context options</a>
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
