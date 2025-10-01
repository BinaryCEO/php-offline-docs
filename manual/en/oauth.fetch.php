<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OAuth::fetch - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/oauth.fetch.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/oauth.fetch.php">
 <link rel="alternate" href="https://www.php.net/manual/en/oauth.fetch.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.oauth.php">
 <link rel="prev" href="https://www.php.net/manual/en/oauth.enablesslchecks.php">
 <link rel="next" href="https://www.php.net/manual/en/oauth.generatesignature.php">

 <link rel="alternate" href="https://www.php.net/manual/en/oauth.fetch.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/oauth.fetch.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/oauth.fetch.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/oauth.fetch.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/oauth.fetch.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/oauth.fetch.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/oauth.fetch.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/oauth.fetch.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/oauth.fetch.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/oauth.fetch.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/oauth.fetch.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetch an OAuth protected resource" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OAuth::fetch - Manual" />
<meta name="twitter:description" content="Fetch an OAuth protected resource" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OAuth::fetch - Manual" />
<meta itemprop="description" content="Fetch an OAuth protected resource" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetch an OAuth protected resource" />

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
        <a href="oauth.generatesignature.php">
          OAuth::generateSignature &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="oauth.enablesslchecks.php">
          &laquo; OAuth::enableSSLChecks        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.webservice.php'>Web Services</a></li>      <li><a href='book.oauth.php'>OAuth</a></li>      <li><a href='class.oauth.php'>OAuth</a></li>      </ul>
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
            <option value='en/oauth.fetch.php' selected="selected">English</option>
            <option value='de/oauth.fetch.php'>German</option>
            <option value='es/oauth.fetch.php'>Spanish</option>
            <option value='fr/oauth.fetch.php'>French</option>
            <option value='it/oauth.fetch.php'>Italian</option>
            <option value='ja/oauth.fetch.php'>Japanese</option>
            <option value='pt_BR/oauth.fetch.php'>Brazilian Portuguese</option>
            <option value='ru/oauth.fetch.php'>Russian</option>
            <option value='tr/oauth.fetch.php'>Turkish</option>
            <option value='uk/oauth.fetch.php'>Ukrainian</option>
            <option value='zh/oauth.fetch.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="oauth.fetch" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">OAuth::fetch</h1>
  <p class="verinfo">(PECL OAuth &gt;= 0.99.1)</p><p class="refpurpose"><span class="refname">OAuth::fetch</span> &mdash; <span class="dc-title">Fetch an OAuth protected resource</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-oauth.fetch-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>OAuth::fetch</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$protected_resource_url</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$extra_parameters</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$http_method</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$http_headers</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   Fetch a resource.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-oauth.fetch-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">protected_resource_url</code></dt>
     <dd>
      <p class="para">
       URL to the OAuth protected resource.
      </p>
     </dd>
    
    
     <dt><code class="parameter">extra_parameters</code></dt>
     <dd>
      <p class="para">
       Extra parameters to send with the request for the resource.
      </p>
     </dd>
    
    
     <dt><code class="parameter">http_method</code></dt>
     <dd>
      <p class="para">
       One of the <strong><code><a href="oauth.constants.php#constant.oauth-http-method-get">OAUTH_HTTP_METHOD_<span class="replaceable">*</span></a></code></strong>
       OAUTH constants, which includes
       GET, POST, PUT, HEAD, or DELETE.
      </p>
      <p class="para">
       HEAD (<strong><code><a href="oauth.constants.php#constant.oauth-http-method-head">OAUTH_HTTP_METHOD_HEAD</a></code></strong>) can be useful for
       discovering information prior to the request (if OAuth credentials are
       in the <code class="literal">Authorization</code> header).
      </p>
     </dd>
    
    
     <dt><code class="parameter">http_headers</code></dt>
     <dd>
      <p class="para">
       HTTP client headers (such as User-Agent, Accept, etc.)
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-oauth.fetch-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-oauth.fetch-changelog">
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
       <td>PECL oauth 1.0.0</td>
       <td>
        Previously returned <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on failure, instead of <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
       </td>
      </tr>

      <tr>
       <td>PECL oauth 0.99.5</td>
       <td>
        The <code class="parameter">http_method</code> parameter was added
       </td>
      </tr>

      <tr>
       <td>PECL oauth 0.99.8</td>
       <td>
        The <code class="parameter">http_headers</code> parameter was added
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-oauth.fetch-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5683">
    <p><strong>Example #1 <span class="function"><strong>OAuth::fetch()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">try {<br />    </span><span style="color: #0000BB">$oauth </span><span style="color: #007700">= new </span><span style="color: #0000BB">OAuth</span><span style="color: #007700">(</span><span style="color: #DD0000">"consumer_key"</span><span style="color: #007700">,</span><span style="color: #DD0000">"consumer_secret"</span><span style="color: #007700">,</span><span style="color: #0000BB">OAUTH_SIG_METHOD_HMACSHA1</span><span style="color: #007700">,</span><span style="color: #0000BB">OAUTH_AUTH_TYPE_AUTHORIZATION</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$oauth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setToken</span><span style="color: #007700">(</span><span style="color: #DD0000">"access_token"</span><span style="color: #007700">,</span><span style="color: #DD0000">"access_token_secret"</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">$oauth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://photos.example.net/photo?file=vacation.jpg"</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">$response_info </span><span style="color: #007700">= </span><span style="color: #0000BB">$oauth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLastResponseInfo</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type: </span><span style="color: #007700">{</span><span style="color: #0000BB">$response_info</span><span style="color: #007700">[</span><span style="color: #DD0000">"content_type"</span><span style="color: #007700">]}</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />    echo </span><span style="color: #0000BB">$oauth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLastResponse</span><span style="color: #007700">();<br />} catch(</span><span style="color: #0000BB">OAuthException $E</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Exception caught!\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"Response: "</span><span style="color: #007700">. </span><span style="color: #0000BB">$E</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastResponse </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-oauth.fetch-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="oauth.getlastresponse.php" class="methodname" rel="rdfs-seeAlso">OAuth::getLastResponse()</a> - Get the last response</span></li>
    <li><span class="methodname"><a href="oauth.getlastresponseinfo.php" class="methodname" rel="rdfs-seeAlso">OAuth::getLastResponseInfo()</a> - Get HTTP information about the last response</span></li>
    <li><span class="methodname"><a href="oauth.settoken.php" class="methodname" rel="rdfs-seeAlso">OAuth::setToken()</a> - Sets the token and secret</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/oauth/oauth/fetch.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Foauth.fetch%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=oauth.fetch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oauth.fetch.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114737">  <div class="votes">
    <div id="Vu114737">
    <a href="/manual/vote-note.php?id=114737&amp;page=oauth.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114737">
    <a href="/manual/vote-note.php?id=114737&amp;page=oauth.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114737" title="64% like this...">
    4
    </div>
  </div>
  <a href="#114737" class="name">
  <strong class="user"><em>zverik at textual dot ru</em></strong></a><a class="genanchor" href="#114737"> &para;</a><div class="date" title="2014-03-31 08:46"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114737">
<div class="phpcode"><code><span class="html">If $extra_parameters is not an array, you have to specify Content-Type header, or else you'll get HTTP 401 error. Example:<br /><br /><span class="default">&lt;?php<br />$oauth</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="default">ENDPOINT</span><span class="keyword">, </span><span class="string">'{"action": "get_user_info"}'</span><span class="keyword">, </span><span class="default">OAUTH_HTTP_METHOD_PUT</span><span class="keyword">, array(</span><span class="string">'Content-Type' </span><span class="keyword">=&gt; </span><span class="string">'application/json'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105332">  <div class="votes">
    <div id="Vu105332">
    <a href="/manual/vote-note.php?id=105332&amp;page=oauth.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105332">
    <a href="/manual/vote-note.php?id=105332&amp;page=oauth.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105332" title="75% like this...">
    2
    </div>
  </div>
  <a href="#105332" class="name">
  <strong class="user"><em>sun at drupal dot org</em></strong></a><a class="genanchor" href="#105332"> &para;</a><div class="date" title="2011-08-09 06:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105332">
<div class="phpcode"><code><span class="html">Make sure that your $extra_parameters is an array.<br /><br />If it's not, then OAuth will silently skip the malformed data type and produce a signature base string that is invalid (doesn't contain POST parameters, as defined in the RFC).<br /><br />You should file a critical bug report against any REST API you find in the wild that accepts such a bogus signature to pass authentication.</span></code></div>
  </div>
 </div>
  <div class="note" id="103074">  <div class="votes">
    <div id="Vu103074">
    <a href="/manual/vote-note.php?id=103074&amp;page=oauth.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103074">
    <a href="/manual/vote-note.php?id=103074&amp;page=oauth.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103074" title="63% like this...">
    3
    </div>
  </div>
  <a href="#103074" class="name">
  <strong class="user"><em>contact info  at  mech dot cx</em></strong></a><a class="genanchor" href="#103074"> &para;</a><div class="date" title="2011-03-23 04:00"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103074">
<div class="phpcode"><code><span class="html">I was having troubles getting fetch() to post, the remote server (Twitter, in this case) complained at me that their "resource only supports POST". Turned out to be a known bug in OAuth 1.1, downgrading to 1.0 fixed it.<br /><br />Don't lose as much time over this as I did :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="111574">  <div class="votes">
    <div id="Vu111574">
    <a href="/manual/vote-note.php?id=111574&amp;page=oauth.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111574">
    <a href="/manual/vote-note.php?id=111574&amp;page=oauth.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111574" title="60% like this...">
    3
    </div>
  </div>
  <a href="#111574" class="name">
  <strong class="user"><em>chris dot barr at ntlworld dot com</em></strong></a><a class="genanchor" href="#111574"> &para;</a><div class="date" title="2013-03-05 05:59"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111574">
<div class="phpcode"><code><span class="html">The fetch() method will throw an OAuthException if the returned http status code is in the 4xx or 5xx range:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Querying Twitter with bad login details<br /></span><span class="keyword">try {<br />  </span><span class="default">$oauth</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="string">'<a href="https://api.twitter.com/1.1/favorites/list.json" rel="nofollow" target="_blank">https://api.twitter.com/1.1/favorites/list.json</a>'</span><span class="keyword">);<br />}<br />catch(</span><span class="default">Exception $e</span><span class="keyword">) {<br />  echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getCode</span><span class="keyword">(); </span><span class="comment">// 401<br />  // Message generated by OAuth class<br />  </span><span class="keyword">echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">(); </span><span class="comment">// Invalid auth/bad request (got a 401, expected HTTP/1.1 20X or a redirect)<br />  // Message returned from Twitter<br />  </span><span class="keyword">echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">lastResponse</span><span class="keyword">; </span><span class="comment">// {"errors":[{"message":"Could not authenticate you","code":32}]}<br /></span><span class="keyword">}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119010">  <div class="votes">
    <div id="Vu119010">
    <a href="/manual/vote-note.php?id=119010&amp;page=oauth.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119010">
    <a href="/manual/vote-note.php?id=119010&amp;page=oauth.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119010" title="100% like this...">
    1
    </div>
  </div>
  <a href="#119010" class="name">
  <strong class="user"><em>Lars Stttrup Nielsen</em></strong></a><a class="genanchor" href="#119010"> &para;</a><div class="date" title="2016-03-16 07:37"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119010">
<div class="phpcode"><code><span class="html">So I'm using this to talk to the Woocommerce REST API, and was having a lot of trouble figuring out what exactly $extra_parameters was supposed to look like (which WC REST API expects, besides being of the type OAUTH_AUTH_TYPE_URI).<br /><br />The multidimensional array I fed it crashed PHP, so don't do that if you're in my shoes.<br /><br />What ended up solving it was me looking through the OAuth source and noticing that $extra_parameters can also be a string, which, encoded as json (json_encode), solved all my troubles as WC accepted it.</span></code></div>
  </div>
 </div>
  <div class="note" id="99627">  <div class="votes">
    <div id="Vu99627">
    <a href="/manual/vote-note.php?id=99627&amp;page=oauth.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99627">
    <a href="/manual/vote-note.php?id=99627&amp;page=oauth.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99627" title="50% like this...">
    0
    </div>
  </div>
  <a href="#99627" class="name">
  <strong class="user"><em>Lyuben Penkovski (l_penkovski at yahoo dot com)</em></strong></a><a class="genanchor" href="#99627"> &para;</a><div class="date" title="2010-08-26 11:51"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99627">
<div class="phpcode"><code><span class="html">If the provider's web server is configured to use Keep-Alive extension to HTTP protocol (HTTP 1.1), there can be a big delay in the response time from the provider. By default Apache is configured to use Keep-Alive for 5 seconds. This is the delay after which the response will come back to the consumer. If you have this issue of delayed result, you can pass in HTTP headers when calling $consumer-&gt;fetch():<br /><br /><span class="default">&lt;?php<br />$consumer </span><span class="keyword">= new </span><span class="default">OAuth</span><span class="keyword">(</span><span class="string">"consumer_key"</span><span class="keyword">, </span><span class="string">"consumer_secret"</span><span class="keyword">, </span><span class="default">OAUTH_SIG_METHOD_HMACSHA1</span><span class="keyword">, </span><span class="default">OAUTH_AUTH_TYPE_FORM</span><span class="keyword">);<br /></span><span class="default">$consumer</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="string">'<a href="http://example.com/api/" rel="nofollow" target="_blank">http://example.com/api/</a>'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">OAUTH_HTTP_METHOD_POST</span><span class="keyword">, array(</span><span class="string">'Connection'</span><span class="keyword">=&gt;</span><span class="string">'close'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Then the provider will send the result immediately after it's ready with the processing and the connection will be closed. Unfortunately, when calling $consumer-&gt;getRequestToken() and $consumer-&gt;getAccessToken() there's no way provided to pass in HTTP headers and this delay (if present) cannot be avoided, or at least we could not find a way to avoid it.<br /><br />The solution that worked for us is to send this header from the provider when returning result to the consumer:<br /><br /><span class="default">&lt;?php<br />$result </span><span class="keyword">= </span><span class="string">'oauth_callback_accepted=true&amp;oauth_token=' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">-&gt;</span><span class="default">oauth_token</span><span class="keyword">) .<br />          </span><span class="string">'&amp;oauth_token_secret='</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">-&gt;</span><span class="default">oauth_token_secret</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'HTTP/1.1 200 OK'</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Length: '</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">));<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: application/x-www-form-urlencoded'</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Connection:close'</span><span class="keyword">);<br />echo </span><span class="default">$result</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />This can work if you have the possibility to modify the code of the provider, e.g. if you are the provider yourself or if you can talk with the people that develop it and ask them to send this header for your request.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=oauth.fetch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oauth.fetch.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.oauth.php">OAuth</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oauth.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="oauth.destruct.php" title="_&#8203;_&#8203;destruct">_&#8203;_&#8203;destruct</a>
                        </li>
                                                <li class="">
                            <a href="oauth.disabledebug.php" title="disableDebug">disableDebug</a>
                        </li>
                                                <li class="">
                            <a href="oauth.disableredirects.php" title="disableRedirects">disableRedirects</a>
                        </li>
                                                <li class="">
                            <a href="oauth.disablesslchecks.php" title="disableSSLChecks">disableSSLChecks</a>
                        </li>
                                                <li class="">
                            <a href="oauth.enabledebug.php" title="enableDebug">enableDebug</a>
                        </li>
                                                <li class="">
                            <a href="oauth.enableredirects.php" title="enableRedirects">enableRedirects</a>
                        </li>
                                                <li class="">
                            <a href="oauth.enablesslchecks.php" title="enableSSLChecks">enableSSLChecks</a>
                        </li>
                                                <li class="current">
                            <a href="oauth.fetch.php" title="fetch">fetch</a>
                        </li>
                                                <li class="">
                            <a href="oauth.generatesignature.php" title="generateSignature">generateSignature</a>
                        </li>
                                                <li class="">
                            <a href="oauth.getaccesstoken.php" title="getAccessToken">getAccessToken</a>
                        </li>
                                                <li class="">
                            <a href="oauth.getcapath.php" title="getCAPath">getCAPath</a>
                        </li>
                                                <li class="">
                            <a href="oauth.getlastresponse.php" title="getLastResponse">getLastResponse</a>
                        </li>
                                                <li class="">
                            <a href="oauth.getlastresponseheaders.php" title="getLastResponseHeaders">getLastResponseHeaders</a>
                        </li>
                                                <li class="">
                            <a href="oauth.getlastresponseinfo.php" title="getLastResponseInfo">getLastResponseInfo</a>
                        </li>
                                                <li class="">
                            <a href="oauth.getrequestheader.php" title="getRequestHeader">getRequestHeader</a>
                        </li>
                                                <li class="">
                            <a href="oauth.getrequesttoken.php" title="getRequestToken">getRequestToken</a>
                        </li>
                                                <li class="">
                            <a href="oauth.setauthtype.php" title="setAuthType">setAuthType</a>
                        </li>
                                                <li class="">
                            <a href="oauth.setcapath.php" title="setCAPath">setCAPath</a>
                        </li>
                                                <li class="">
                            <a href="oauth.setnonce.php" title="setNonce">setNonce</a>
                        </li>
                                                <li class="">
                            <a href="oauth.setrequestengine.php" title="setRequestEngine">setRequestEngine</a>
                        </li>
                                                <li class="">
                            <a href="oauth.setrsacertificate.php" title="setRSACertificate">setRSACertificate</a>
                        </li>
                                                <li class="">
                            <a href="oauth.setsslchecks.php" title="setSSLChecks">setSSLChecks</a>
                        </li>
                                                <li class="">
                            <a href="oauth.settimestamp.php" title="setTimestamp">setTimestamp</a>
                        </li>
                                                <li class="">
                            <a href="oauth.settoken.php" title="setToken">setToken</a>
                        </li>
                                                <li class="">
                            <a href="oauth.setversion.php" title="setVersion">setVersion</a>
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
