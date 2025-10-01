<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: http:// - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/wrappers.http.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/wrappers.http.php">
 <link rel="alternate" href="https://www.php.net/manual/en/wrappers.http.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/wrappers.php">
 <link rel="prev" href="https://www.php.net/manual/en/wrappers.file.php">
 <link rel="next" href="https://www.php.net/manual/en/wrappers.ftp.php">

 <link rel="alternate" href="https://www.php.net/manual/en/wrappers.http.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/wrappers.http.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/wrappers.http.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/wrappers.http.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/wrappers.http.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/wrappers.http.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/wrappers.http.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/wrappers.http.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/wrappers.http.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/wrappers.http.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/wrappers.http.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Accessing HTTP(s) URLs" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: http:// - Manual" />
<meta name="twitter:description" content="Accessing HTTP(s) URLs" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: http:// - Manual" />
<meta itemprop="description" content="Accessing HTTP(s) URLs" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Accessing HTTP(s) URLs" />

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
        <a href="wrappers.ftp.php">
          ftp:// &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="wrappers.file.php">
          &laquo; file://        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='wrappers.php'>Supported Protocols and Wrappers</a></li>      </ul>
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
            <option value='en/wrappers.http.php' selected="selected">English</option>
            <option value='de/wrappers.http.php'>German</option>
            <option value='es/wrappers.http.php'>Spanish</option>
            <option value='fr/wrappers.http.php'>French</option>
            <option value='it/wrappers.http.php'>Italian</option>
            <option value='ja/wrappers.http.php'>Japanese</option>
            <option value='pt_BR/wrappers.http.php'>Brazilian Portuguese</option>
            <option value='ru/wrappers.http.php'>Russian</option>
            <option value='tr/wrappers.http.php'>Turkish</option>
            <option value='uk/wrappers.http.php'>Ukrainian</option>
            <option value='zh/wrappers.http.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="wrappers.http" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">http://</h1>
  <h1 class="refname">https://</h1>
  <p class="refpurpose"><span class="refname">http://</span> -- <span class="refname">https://</span> &mdash; <span class="dc-title">Accessing HTTP(s) URLs</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-wrappers.http-description">
  <h3 class="title">Description</h3>
  <p class="para">
   Allows read-only access to files/resources via HTTP.
   By default, a HTTP 1.0 GET is used. A <code class="literal">Host:</code> header is sent with the request
   to handle name-based virtual hosts.  If you have configured
   a <a href="filesystem.configuration.php#ini.user-agent" class="link">user_agent</a> string using
   your <var class="filename">php.ini</var> file or the stream context, it will also be included
   in the request.
  </p>
  <p class="simpara">
   The stream allows access to the <em>body</em> of
   the resource; the headers are stored in the
   <var class="varname"><a href="reserved.variables.httpresponseheader.php" class="classname">$http_response_header</a></var> variable.
  </p>
  <p class="simpara">
   If it&#039;s important to know the URL of the resource where
   your document came from (after all redirects have been processed),
   you&#039;ll need to process the series of response headers returned by the
   stream.
  </p>
  <p class="simpara">
   The <a href="filesystem.configuration.php#ini.from" class="link">from</a> directive will be used for the
   <code class="literal">From:</code> header if set and not overwritten by the
   <a href="context.php" class="xref">Context options and parameters</a>.
  </p>
 </div>


 <div class="refsect1 usage" id="refsect1-wrappers.http-usage"> 
  <h3 class="title">Usage</h3>
  <ul class="itemizedlist">
   <li class="listitem"><span class="simpara"><var class="filename">http://example.com</var></span></li>
   <li class="listitem"><span class="simpara"><var class="filename">http://example.com/file.php?var1=val1&amp;var2=val2</var></span></li>
   <li class="listitem"><span class="simpara"><var class="filename">http://user:password@example.com</var></span></li>
   <li class="listitem"><span class="simpara"><var class="filename">https://example.com</var></span></li>
   <li class="listitem"><span class="simpara"><var class="filename">https://example.com/file.php?var1=val1&amp;var2=val2</var></span></li>
   <li class="listitem"><span class="simpara"><var class="filename">https://user:password@example.com</var></span></li>
  </ul>
 </div>
 

 <div class="refsect1 options" id="refsect1-wrappers.http-options">
  <h3 class="title">Options</h3>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Wrapper Summary</strong></caption>
    
     <thead>
      <tr>
       <th>Attribute</th>
       <th>Supported</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>Restricted by <a href="filesystem.configuration.php#ini.allow-url-fopen" class="link">allow_url_fopen</a></td>
       <td>Yes</td>
      </tr>

      <tr>
       <td>Allows Reading</td>
       <td>Yes</td>
      </tr>

      <tr>
       <td>Allows Writing</td>
       <td>No</td>
      </tr>

      <tr>
       <td>Allows Appending</td>
       <td>No</td>
      </tr>

      <tr>
       <td>Allows Simultaneous Reading and Writing</td>
       <td>N/A</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.stat.php" class="function">stat()</a></span></td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.unlink.php" class="function">unlink()</a></span></td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.rename.php" class="function">rename()</a></span></td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.mkdir.php" class="function">mkdir()</a></span></td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.rmdir.php" class="function">rmdir()</a></span></td>
       <td>No</td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>
 

 <div class="refsect1 examples" id="refsect1-wrappers.http-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="wrappers.http.example.basic">
   <p><strong>Example #1 Detecting which URL we ended up on after redirects</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$url </span><span style="color: #007700">= </span><span style="color: #DD0000">'http://www.example.com/redirecting_page.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$meta_data </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_get_meta_data</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$meta_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'wrapper_data'</span><span style="color: #007700">] as </span><span style="color: #0000BB">$response</span><span style="color: #007700">) {<br /><br />    </span><span style="color: #FF8000">/* Were we redirected? */<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">)) == </span><span style="color: #DD0000">'location: '</span><span style="color: #007700">) {<br /><br />        </span><span style="color: #FF8000">/* update $url with where we were redirected to */<br />        </span><span style="color: #0000BB">$url </span><span style="color: #007700">= </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">);<br />    }<br /><br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-wrappers.http-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    HTTPS is only supported when the <a href="book.openssl.php" class="link">openssl</a>
    extension is enabled.
   </span>
  </p></blockquote>
  <p class="simpara">
   HTTP connections are read-only; writing data or copying
   files to an HTTP resource is not supported.
  </p>
  <p class="simpara">
   Sending <em>POST</em> and <em>PUT</em> requests, for example,
   can be done with the help of <a href="context.http.php" class="link">HTTP Contexts</a>.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-wrappers.http-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><a href="context.http.php" class="xref">HTTP context options</a></li>
   <li><var class="varname"><a href="reserved.variables.httpresponseheader.php" class="classname">$http_response_header</a></var></li>
   <li><span class="function"><a href="function.stream-get-meta-data.php" class="function" rel="rdfs-seeAlso">stream_get_meta_data()</a> - Retrieves header/meta data from streams/file pointers</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/wrappers/http.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fwrappers.http%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=wrappers.http&amp;repo=en&amp;redirect=https://www.php.net/manual/en/wrappers.http.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="71226">  <div class="votes">
    <div id="Vu71226">
    <a href="/manual/vote-note.php?id=71226&amp;page=wrappers.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71226">
    <a href="/manual/vote-note.php?id=71226&amp;page=wrappers.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71226" title="60% like this...">
    7
    </div>
  </div>
  <a href="#71226" class="name">
  <strong class="user"><em>dwalton at acm dot org</em></strong></a><a class="genanchor" href="#71226"> &para;</a><div class="date" title="2006-11-17 12:18"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71226">
<div class="phpcode"><code><span class="html">As it says on this page:<br /><br />"The stream allows access to the body of the resource; the headers are stored in the $http_response_header variable. Since PHP 4.3.0, the headers are available using stream_get_meta_data()."<br /><br />This one sentence is the only documentation I have found on the mysterious $http_response_header variable, and I'm afraid it's misleading.  It implies that from 4.3.0 onward, stream_get_meta_data() ought to be used in favor of $http_response_header.  <br /><br />Don't be fooled!  stream_get_meta_data() requires a stream reference, which makes it ONLY useful with fopen() and related functions.  However, $http_response_header can be used to get the headers from the much simpler file_get_contents() and related functions, which makes it still very useful in 5.x.<br /><br />Also note that even when file_get_contents() and friends fail due to a 4xx or 5xx error and return false, the headers are still available in $http_response_header.</span></code></div>
  </div>
 </div>
  <div class="note" id="118291">  <div class="votes">
    <div id="Vu118291">
    <a href="/manual/vote-note.php?id=118291&amp;page=wrappers.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118291">
    <a href="/manual/vote-note.php?id=118291&amp;page=wrappers.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118291" title="60% like this...">
    5
    </div>
  </div>
  <a href="#118291" class="name">
  <strong class="user"><em>Rainer Perske</em></strong></a><a class="genanchor" href="#118291"> &para;</a><div class="date" title="2015-11-09 04:27"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118291">
<div class="phpcode"><code><span class="html">Passing authentication information in the URL as in "<a href="https://user:password@example.com" rel="nofollow" target="_blank">https://user:password@example.com</a>" works for HTTP "Basic" access authentication but not for HTTP "Digest" access authentication. You can use the cURL functions for servers requesting HTTP "Digest" access authentication.</span></code></div>
  </div>
 </div>
  <div class="note" id="76760">  <div class="votes">
    <div id="Vu76760">
    <a href="/manual/vote-note.php?id=76760&amp;page=wrappers.http&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76760">
    <a href="/manual/vote-note.php?id=76760&amp;page=wrappers.http&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76760" title="51% like this...">
    1
    </div>
  </div>
  <a href="#76760" class="name">
  <strong class="user"><em>NEA at AraTaraBul dot com</em></strong></a><a class="genanchor" href="#76760"> &para;</a><div class="date" title="2007-07-29 04:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76760">
<div class="phpcode"><code><span class="html">HTTP post function;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">post_it</span><span class="keyword">(</span><span class="default">$datastream</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">) { <br /><br /></span><span class="default">$url </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"@^<a href="http://@i" rel="nofollow" target="_blank">http://@i</a>"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">);<br /></span><span class="default">$host </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">));<br /></span><span class="default">$uri </span><span class="keyword">= </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">); <br /><br />      </span><span class="default">$reqbody </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />      foreach(</span><span class="default">$datastream </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">) {<br />          if (!empty(</span><span class="default">$reqbody</span><span class="keyword">)) </span><span class="default">$reqbody</span><span class="keyword">.= </span><span class="string">"&amp;"</span><span class="keyword">;<br />      </span><span class="default">$reqbody</span><span class="keyword">.= </span><span class="default">$key</span><span class="keyword">.</span><span class="string">"="</span><span class="keyword">.</span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />      } <br /><br /></span><span class="default">$contentlength </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$reqbody</span><span class="keyword">);<br />     </span><span class="default">$reqheader </span><span class="keyword">=  </span><span class="string">"POST </span><span class="default">$uri</span><span class="string"> HTTP/1.1\r\n"</span><span class="keyword">.<br />                   </span><span class="string">"Host: </span><span class="default">$host</span><span class="string">\n"</span><span class="keyword">. </span><span class="string">"User-Agent: PostIt\r\n"</span><span class="keyword">.<br />     </span><span class="string">"Content-Type: application/x-www-form-urlencoded\r\n"</span><span class="keyword">.<br />     </span><span class="string">"Content-Length: </span><span class="default">$contentlength</span><span class="string">\r\n\r\n"</span><span class="keyword">.<br />     </span><span class="string">"</span><span class="default">$reqbody</span><span class="string">\r\n"</span><span class="keyword">; <br /><br /></span><span class="default">$socket </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">);<br /><br />if (!</span><span class="default">$socket</span><span class="keyword">) {<br />   </span><span class="default">$result</span><span class="keyword">[</span><span class="string">"errno"</span><span class="keyword">] = </span><span class="default">$errno</span><span class="keyword">;<br />   </span><span class="default">$result</span><span class="keyword">[</span><span class="string">"errstr"</span><span class="keyword">] = </span><span class="default">$errstr</span><span class="keyword">;<br />   return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$reqheader</span><span class="keyword">);<br /><br />while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">)) {<br />   </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);<br />}<br /><br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br /><br />return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=wrappers.http&amp;repo=en&amp;redirect=https://www.php.net/manual/en/wrappers.http.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="wrappers.php">Supported Protocols and Wrappers</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="wrappers.file.php" title="file://">file://</a>
                        </li>
                                                <li class="current">
                            <a href="wrappers.http.php" title="http://">http://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.ftp.php" title="ftp://">ftp://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.php.php" title="php://">php://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.compression.php" title="zlib://">zlib://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.data.php" title="data://">data://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.glob.php" title="glob://">glob://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.phar.php" title="phar://">phar://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.ssh2.php" title="ssh2://">ssh2://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.rar.php" title="rar://">rar://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.audio.php" title="ogg://">ogg://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.expect.php" title="expect://">expect://</a>
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
