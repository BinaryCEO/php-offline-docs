<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ini_get - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ini-get.php">
 <link rel="shorturl" href="https://www.php.net/ini-get">
 <link rel="alternate" href="https://www.php.net/ini-get" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.info.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ini-alter.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ini-get-all.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ini-get.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ini-get.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ini-get.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ini-get.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ini-get.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ini-get.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ini-get.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ini-get.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ini-get.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ini-get.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ini-get.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets the value of a configuration option" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ini_get - Manual" />
<meta name="twitter:description" content="Gets the value of a configuration option" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ini_get - Manual" />
<meta itemprop="description" content="Gets the value of a configuration option" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets the value of a configuration option" />

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
        <a href="function.ini-get-all.php">
          ini_get_all &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ini-alter.php">
          &laquo; ini_alter        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.info.php'>PHP Options/Info</a></li>      <li><a href='ref.info.php'>PHP Options/Info Functions</a></li>      </ul>
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
            <option value='en/function.ini-get.php' selected="selected">English</option>
            <option value='de/function.ini-get.php'>German</option>
            <option value='es/function.ini-get.php'>Spanish</option>
            <option value='fr/function.ini-get.php'>French</option>
            <option value='it/function.ini-get.php'>Italian</option>
            <option value='ja/function.ini-get.php'>Japanese</option>
            <option value='pt_BR/function.ini-get.php'>Brazilian Portuguese</option>
            <option value='ru/function.ini-get.php'>Russian</option>
            <option value='tr/function.ini-get.php'>Turkish</option>
            <option value='uk/function.ini-get.php'>Ukrainian</option>
            <option value='zh/function.ini-get.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ini-get" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ini_get</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ini_get</span> &mdash; <span class="dc-title">Gets the value of a configuration option</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ini-get-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ini_get</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$option</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns the value of the configuration option on success.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ini-get-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">option</code></dt>
     <dd>
      <p class="para">
       The configuration option name.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ini-get-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the value of the configuration option as a string on success, or an
   empty string for <code class="literal">null</code> values. Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the
   configuration option doesn&#039;t exist.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ini-get-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-656">
    <p><strong>Example #1 A few <span class="function"><strong>ini_get()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/*<br />Our php.ini contains the following settings:<br /><br />display_errors = On<br />opcache.enable_cli = Off<br />post_max_size = 8M<br />*/<br /><br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'display_errors = ' </span><span style="color: #007700">. </span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'display_errors'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'opcache.enable_cli = ' </span><span style="color: #007700">. (int) </span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'opcache.enable_cli'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'post_max_size = ' </span><span style="color: #007700">. </span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'post_max_size'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'post_max_size + 1 = ' </span><span style="color: #007700">. (</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'post_max_size'</span><span style="color: #007700">), </span><span style="color: #DD0000">'KMG'</span><span style="color: #007700">) + </span><span style="color: #0000BB">1</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'post_max_size in bytes = ' </span><span style="color: #007700">. </span><span style="color: #0000BB">ini_parse_quantity</span><span style="color: #007700">(</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'post_max_size'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">display_errors = 1
opcache.enable_cli = 0
post_max_size = 8M
post_max_size+1 = 9
post_max_size in bytes = 8388608</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.ini-get-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <strong>When querying boolean values</strong><br />
   <p class="para">
    A boolean ini value of <code class="literal">off</code> will be returned as an
    empty string or &quot;0&quot; while a boolean ini value of <code class="literal">on</code> will
    be returned as &quot;1&quot;.
    The function can also return the literal string of INI value.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <strong>When querying memory size values</strong><br />
   <p class="para">
    Many ini memory size values, such as
    <a href="ini.core.php#ini.upload-max-filesize" class="link">upload_max_filesize</a>, are
    stored in the <var class="filename">php.ini</var> file in shorthand notation.
    <span class="function"><strong>ini_get()</strong></span> will return the exact string stored in the
    <var class="filename">php.ini</var> file and <em>NOT</em> its <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    equivalent.  Attempting normal arithmetic functions on these values
    will not have otherwise expected results.  The
    <span class="function"><a href="function.ini-parse-quantity.php" class="function">ini_parse_quantity()</a></span> function can be used to convert
    the shorthand notation into bytes.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>ini_get()</strong></span> can&#039;t read &quot;array&quot; ini options such as
    <code class="literal">pdo.dsn.<span class="replaceable">*</span></code>, and returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> in this case.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ini-get-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.get-cfg-var.php" class="function" rel="rdfs-seeAlso">get_cfg_var()</a> - Gets the value of a PHP configuration option</span></li>
    <li><span class="function"><a href="function.ini-get-all.php" class="function" rel="rdfs-seeAlso">ini_get_all()</a> - Gets all configuration options</span></li>
    <li><span class="function"><a href="function.ini-parse-quantity.php" class="function" rel="rdfs-seeAlso">ini_parse_quantity()</a> - Get interpreted size from ini shorthand syntax</span></li>
    <li><span class="function"><a href="function.ini-restore.php" class="function" rel="rdfs-seeAlso">ini_restore()</a> - Restores the value of a configuration option</span></li>
    <li><span class="function"><a href="function.ini-set.php" class="function" rel="rdfs-seeAlso">ini_set()</a> - Sets the value of a configuration option</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/info/functions/ini-get.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ini-get%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ini-get&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ini-get.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96996">  <div class="votes">
    <div id="Vu96996">
    <a href="/manual/vote-note.php?id=96996&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96996">
    <a href="/manual/vote-note.php?id=96996&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96996" title="78% like this...">
    34
    </div>
  </div>
  <a href="#96996" class="name">
  <strong class="user"><em>Stas Trefilov, OpteamIS</em></strong></a><a class="genanchor" href="#96996"> &para;</a><div class="date" title="2010-03-26 10:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96996">
<div class="phpcode"><code><span class="html">another version of return_bytes which returns faster and does not use multiple multiplications (sorry:). even if it is resolved at compile time it is not a good practice;<br />no local variables are allocated;<br />the trim() is omitted (php already trimmed values when reading php.ini file);<br />strtolower() is replaced by second case which wins us one more function call for the price of doubling the number of cases to process (may slower the worst-case scenario when ariving to default: takes six comparisons instead of three comparisons and a function call);<br />cases are ordered by most frequent goes first (uppercase M-values being the default sizes);<br />specs say we must handle integer sizes so float values are converted to integers and 0.8G becomes 0;<br />'Gb', 'Mb', 'Kb' shorthand byte options are not implemented since are not in specs, see<br /><a href="http://www.php.net/manual/en/faq.using.php#faq.using.shorthandbytes" rel="nofollow" target="_blank">http://www.php.net/manual/en/faq.using.php#faq.using.shorthandbytes</a><br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">return_bytes </span><span class="keyword">(</span><span class="default">$size_str</span><span class="keyword">)<br />{<br />    switch (</span><span class="default">substr </span><span class="keyword">(</span><span class="default">$size_str</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">))<br />    {<br />        case </span><span class="string">'M'</span><span class="keyword">: case </span><span class="string">'m'</span><span class="keyword">: return (int)</span><span class="default">$size_str </span><span class="keyword">* </span><span class="default">1048576</span><span class="keyword">;<br />        case </span><span class="string">'K'</span><span class="keyword">: case </span><span class="string">'k'</span><span class="keyword">: return (int)</span><span class="default">$size_str </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">;<br />        case </span><span class="string">'G'</span><span class="keyword">: case </span><span class="string">'g'</span><span class="keyword">: return (int)</span><span class="default">$size_str </span><span class="keyword">* </span><span class="default">1073741824</span><span class="keyword">;<br />        default: return </span><span class="default">$size_str</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126324">  <div class="votes">
    <div id="Vu126324">
    <a href="/manual/vote-note.php?id=126324&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126324">
    <a href="/manual/vote-note.php?id=126324&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126324" title="75% like this...">
    6
    </div>
  </div>
  <a href="#126324" class="name">
  <strong class="user"><em>devsrealmGuy</em></strong></a><a class="genanchor" href="#126324"> &para;</a><div class="date" title="2021-08-11 02:40"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126324">
<div class="phpcode"><code><span class="html">Here is another way to get the result in bytes using PHP8<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">/**<br />     * @param string $size<br />     * @return int<br />     * @author DevsrealmGuy<br />     */<br />    </span><span class="keyword">public function </span><span class="default">getBytes</span><span class="keyword">(</span><span class="default">string $size</span><span class="keyword">): </span><span class="default">int<br />    </span><span class="keyword">{<br />        </span><span class="default">$size </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">);<br /><br />        </span><span class="comment">#<br />        # Separate the value from the metric(i.e MB, GB, KB)<br />        #<br />        </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/([0-9]+)[\s]*([a-zA-Z]+)/'</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br /><br />        </span><span class="default">$value </span><span class="keyword">= (isset(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) ? </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] : </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$metric </span><span class="keyword">= (isset(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">])) ? </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) : </span><span class="string">'b'</span><span class="keyword">;<br /><br />        </span><span class="comment">#<br />        # Result of $value multiplied by the matched case<br />        # Note: (1024 ** 2) is same as (1024 * 1024) or pow(1024, 2)<br />        #<br />        </span><span class="default">$value </span><span class="keyword">*= match (</span><span class="default">$metric</span><span class="keyword">) {<br />            </span><span class="string">'k'</span><span class="keyword">, </span><span class="string">'kb' </span><span class="keyword">=&gt; </span><span class="default">1024</span><span class="keyword">,<br />            </span><span class="string">'m'</span><span class="keyword">, </span><span class="string">'mb' </span><span class="keyword">=&gt; (</span><span class="default">1024 </span><span class="keyword">** </span><span class="default">2</span><span class="keyword">),<br />            </span><span class="string">'g'</span><span class="keyword">, </span><span class="string">'gb' </span><span class="keyword">=&gt; (</span><span class="default">1024 </span><span class="keyword">** </span><span class="default">3</span><span class="keyword">),<br />            </span><span class="string">'t'</span><span class="keyword">, </span><span class="string">'tb' </span><span class="keyword">=&gt;  (</span><span class="default">1024 </span><span class="keyword">** </span><span class="default">4</span><span class="keyword">),<br />            default =&gt; </span><span class="default">0<br />        </span><span class="keyword">};<br /><br />        return (int)</span><span class="default">$value</span><span class="keyword">;<br />    }<br /><br />        </span><span class="comment">#<br />        # TEST: This default to 0 if it doesn't conform with the match standard<br />        #<br />        </span><span class="keyword">echo </span><span class="default">getBytes</span><span class="keyword">(</span><span class="string">'2GB'</span><span class="keyword">) . </span><span class="string">"&lt;/br&gt;"</span><span class="keyword">;<br />        </span><span class="comment"># OUTPUT: 2147483648<br />        </span><span class="keyword">echo </span><span class="default">getBytes</span><span class="keyword">(</span><span class="string">'4tb'</span><span class="keyword">) . </span><span class="string">"&lt;/br&gt;"</span><span class="keyword">;<br />        </span><span class="comment"># OUTPUT: 4398046511104<br />        </span><span class="keyword">echo </span><span class="default">getBytes</span><span class="keyword">(</span><span class="string">'5345etrgrfd'</span><span class="keyword">) . </span><span class="string">"&lt;/br&gt;"</span><span class="keyword">;<br />        </span><span class="comment"># OUTPUT: 0<br />        </span><span class="keyword">echo </span><span class="default">getBytes</span><span class="keyword">(</span><span class="string">'357568336586'</span><span class="keyword">) . </span><span class="string">"&lt;/br&gt;"</span><span class="keyword">;<br />        </span><span class="comment"># OUTPUT: 0<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121186">  <div class="votes">
    <div id="Vu121186">
    <a href="/manual/vote-note.php?id=121186&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121186">
    <a href="/manual/vote-note.php?id=121186&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121186" title="72% like this...">
    8
    </div>
  </div>
  <a href="#121186" class="name">
  <strong class="user"><em>IceNV</em></strong></a><a class="genanchor" href="#121186"> &para;</a><div class="date" title="2017-06-05 08:53"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121186">
<div class="phpcode"><code><span class="html">Be aware that max_execution_time can be altered by XDebug.<br /><br />While debugging a script locally that made use of <span class="default">&lt;?php ini_get</span><span class="keyword">(</span><span class="string">'max_execution_time'</span><span class="keyword">); </span><span class="default">?&gt;</span> it returned 0 when XDebug remote debugging was enabled and the IDE was listening to it.<br /><br />It makes sense, since debugging manually takes time so we don't want the script to time out ; but in that particular case, it made it look to the script like max_execution_time was 0, so calculations were wrong.<br /><br />You can see in phpinfo() that local value is 0 in that case, but master value is the correct one you set in your php.ini.</span></code></div>
  </div>
 </div>
  <div class="note" id="58936">  <div class="votes">
    <div id="Vu58936">
    <a href="/manual/vote-note.php?id=58936&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58936">
    <a href="/manual/vote-note.php?id=58936&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58936" title="62% like this...">
    4
    </div>
  </div>
  <a href="#58936" class="name">
  <strong class="user"><em>filh at filh dot org</em></strong></a><a class="genanchor" href="#58936"> &para;</a><div class="date" title="2005-11-21 06:24"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58936">
<div class="phpcode"><code><span class="html">Concerning the value retourned, it depends on how you set it.<br />I had the problem with horde-3 which test the safe_mode value.<br />THan :<br />- if you set the value with php_admin_value safe_mode Off (or On) ini_get returns the string<br />- if you set the value with php_admin_flag safe_mode Off (or On) ini_get returns the boolean.</span></code></div>
  </div>
 </div>
  <div class="note" id="106518">  <div class="votes">
    <div id="Vu106518">
    <a href="/manual/vote-note.php?id=106518&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106518">
    <a href="/manual/vote-note.php?id=106518&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106518" title="52% like this...">
    1
    </div>
  </div>
  <a href="#106518" class="name">
  <strong class="user"><em>Ivo Mandalski</em></strong></a><a class="genanchor" href="#106518"> &para;</a><div class="date" title="2011-11-15 08:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106518">
<div class="phpcode"><code><span class="html">This version of return_bytes takes care of the MB, GB, KB cases along with the M,G,K ones.<br />Hope this is helpful!<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">public static function </span><span class="default">return_bytes </span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)<br />    {<br />        if(empty(</span><span class="default">$val</span><span class="keyword">))return </span><span class="default">0</span><span class="keyword">;<br /><br />        </span><span class="default">$val </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br /><br />        </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#([0-9]+)[\s]*([a-z]+)#i'</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br /><br />        </span><span class="default">$last </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        if(isset(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">])){<br />            </span><span class="default">$last </span><span class="keyword">= </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />        }<br /><br />        if(isset(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])){<br />            </span><span class="default">$val </span><span class="keyword">= (int) </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />        }<br /><br />        switch (</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$last</span><span class="keyword">))<br />        {<br />            case </span><span class="string">'g'</span><span class="keyword">:<br />            case </span><span class="string">'gb'</span><span class="keyword">:<br />                </span><span class="default">$val </span><span class="keyword">*= </span><span class="default">1024</span><span class="keyword">;<br />            case </span><span class="string">'m'</span><span class="keyword">:<br />            case </span><span class="string">'mb'</span><span class="keyword">:<br />                </span><span class="default">$val </span><span class="keyword">*= </span><span class="default">1024</span><span class="keyword">;<br />            case </span><span class="string">'k'</span><span class="keyword">:<br />            case </span><span class="string">'kb'</span><span class="keyword">:<br />                </span><span class="default">$val </span><span class="keyword">*= </span><span class="default">1024</span><span class="keyword">;<br />        }<br /><br />        return (int) </span><span class="default">$val</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126769">  <div class="votes">
    <div id="Vu126769">
    <a href="/manual/vote-note.php?id=126769&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126769">
    <a href="/manual/vote-note.php?id=126769&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126769" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126769" class="name">
  <strong class="user"><em>Joe Huss detain at interserver dot net</em></strong></a><a class="genanchor" href="#126769"> &para;</a><div class="date" title="2022-01-16 10:44"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126769">
<div class="phpcode"><code><span class="html">Here is a version combining a few of the examples here that does *not* require php8 nor does it generate a warning<br /><br />/**<br />* gets the value in bytes converted from a human readable string like 10G'<br />* <br />* @param mixed $val the human readable/shorthand version of the value<br />* @return int the value converted to bytes<br />*/<br />function return_bytes($val) {<br />    $val = trim($val);<br />    preg_match('/([0-9]+)[\s]*([a-zA-Z]+)/', $val, $matches);<br />    $value = (isset($matches[1])) ? intval($matches[1]) : 0;<br />    $metric = (isset($matches[2])) ? strtolower($matches[2]) : 'b';<br />    switch ($metric) {<br />        case 'tb':<br />        case 't':<br />            $value *= 1024;<br />        case 'gb':<br />        case 'g':<br />            $value *= 1024;<br />        case 'mb':<br />        case 'm':<br />            $value *= 1024;<br />        case 'kb':<br />        case 'k':<br />            $value *= 1024;<br />    }<br />    return $value;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="54049">  <div class="votes">
    <div id="Vu54049">
    <a href="/manual/vote-note.php?id=54049&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54049">
    <a href="/manual/vote-note.php?id=54049&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54049" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54049" class="name">
  <strong class="user"><em>david dot tulloh at infaze dot com dot au</em></strong></a><a class="genanchor" href="#54049"> &para;</a><div class="date" title="2005-06-21 07:01"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54049">
<div class="phpcode"><code><span class="html">You can set custom entries in the ini file to provide globals such as database details.<br />However these must be retrieved with get_cfg_var, ini_get won't work.</span></code></div>
  </div>
 </div>
  <div class="note" id="117925">  <div class="votes">
    <div id="Vu117925">
    <a href="/manual/vote-note.php?id=117925&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117925">
    <a href="/manual/vote-note.php?id=117925&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117925" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#117925" class="name">
  <strong class="user"><em>bishop@php</em></strong></a><a class="genanchor" href="#117925"> &para;</a><div class="date" title="2015-09-02 07:37"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117925">
<div class="phpcode"><code><span class="html">Yet another implementation of return_bytes:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">return_bytes</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)<br />{<br />    </span><span class="default">assert</span><span class="keyword">(</span><span class="string">'1 === preg_match("/^\d+([kmg])?$/i", $val)'</span><span class="keyword">);<br />    static </span><span class="default">$map </span><span class="keyword">= array (</span><span class="string">'k' </span><span class="keyword">=&gt; </span><span class="default">1024</span><span class="keyword">, </span><span class="string">'m' </span><span class="keyword">=&gt; </span><span class="default">1048576</span><span class="keyword">, </span><span class="string">'g' </span><span class="keyword">=&gt; </span><span class="default">1073741824</span><span class="keyword">);<br />    return (int)</span><span class="default">$val </span><span class="keyword">* @(</span><span class="default">$map</span><span class="keyword">[</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">))] ?: </span><span class="default">1</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />If you're using PHP &gt;= 7, you might replace ?: with ?? to avoid the use of the @ silencer.</span></code></div>
  </div>
 </div>
  <div class="note" id="84779">  <div class="votes">
    <div id="Vu84779">
    <a href="/manual/vote-note.php?id=84779&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84779">
    <a href="/manual/vote-note.php?id=84779&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84779" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#84779" class="name">
  <strong class="user"><em>peter</em></strong></a><a class="genanchor" href="#84779"> &para;</a><div class="date" title="2008-07-29 02:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84779">
<div class="phpcode"><code><span class="html">The above example function called return_bytes() assumes that ini_get('upload_max_filesize') delivers only one letter at the end. As I've seen 'Mb' and things like that, I'd suggest to change the $last = ... part into $last = strtolower(substr($val,strlen($val/1),1)).<br />I'd call it $unit then.</span></code></div>
  </div>
 </div>
  <div class="note" id="93014">  <div class="votes">
    <div id="Vu93014">
    <a href="/manual/vote-note.php?id=93014&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93014">
    <a href="/manual/vote-note.php?id=93014&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93014" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#93014" class="name">
  <strong class="user"><em>nicolas dot grekas+php at gmail dot com</em></strong></a><a class="genanchor" href="#93014"> &para;</a><div class="date" title="2009-08-19 10:51"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93014">
<div class="phpcode"><code><span class="html">Here is how to accurately test for boolean php.ini values:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">ini_get_bool</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">)<br />{<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">ini_get</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br />    switch (</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">))<br />    {<br />    case </span><span class="string">'on'</span><span class="keyword">:<br />    case </span><span class="string">'yes'</span><span class="keyword">:<br />    case </span><span class="string">'true'</span><span class="keyword">:<br />        return </span><span class="string">'assert.active' </span><span class="keyword">!== </span><span class="default">$a</span><span class="keyword">;<br /><br />    case </span><span class="string">'stdout'</span><span class="keyword">:<br />    case </span><span class="string">'stderr'</span><span class="keyword">:<br />        return </span><span class="string">'display_errors' </span><span class="keyword">=== </span><span class="default">$a</span><span class="keyword">;<br /><br />    default:<br />        return (bool) (int) </span><span class="default">$b</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="44787">  <div class="votes">
    <div id="Vu44787">
    <a href="/manual/vote-note.php?id=44787&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44787">
    <a href="/manual/vote-note.php?id=44787&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44787" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#44787" class="name">
  <strong class="user"><em>Der Graph</em></strong></a><a class="genanchor" href="#44787"> &para;</a><div class="date" title="2004-08-16 11:59"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44787">
<div class="phpcode"><code><span class="html">It might be useful for included scripts that include other files to extend the 'include_path' variable:
<br />
<br /><span class="default">&lt;?php ini_set</span><span class="keyword">(</span><span class="string">'include_path'</span><span class="keyword">,</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'include_path'</span><span class="keyword">).</span><span class="string">':../includes:'</span><span class="keyword">);  </span><span class="default">?&gt;
<br /></span>
<br />Sometimes, it may also be useful to store the current 'include_path' in a variable, overwrite it, include, and then restore the old 'include_path'.</span></code></div>
  </div>
 </div>
  <div class="note" id="117926">  <div class="votes">
    <div id="Vu117926">
    <a href="/manual/vote-note.php?id=117926&amp;page=function.ini-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117926">
    <a href="/manual/vote-note.php?id=117926&amp;page=function.ini-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117926" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#117926" class="name">
  <strong class="user"><em>bishop at php dot net</em></strong></a><a class="genanchor" href="#117926"> &para;</a><div class="date" title="2015-09-02 07:52"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117926">
<div class="phpcode"><code><span class="html">In a similar vein, converting flags to booleans proper:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">return_boolean</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)<br />{<br />    static </span><span class="default">$map </span><span class="keyword">= array (</span><span class="string">'on' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">, </span><span class="string">'true' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">, </span><span class="string">'off' </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">, </span><span class="string">'false' </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">);<br />    return @(</span><span class="default">$map</span><span class="keyword">[</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)] ?: (bool)</span><span class="default">$val</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />If you're using PHP &gt;= 7, consider replacing ?: with ?? and removing the @ silencer.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ini-get&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ini-get.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.info.php">PHP Options/Info Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.assert.php" title="assert">assert</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-get-process-title.php" title="cli_&#8203;get_&#8203;process_&#8203;title">cli_&#8203;get_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-set-process-title.php" title="cli_&#8203;set_&#8203;process_&#8203;title">cli_&#8203;set_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.dl.php" title="dl">dl</a>
                        </li>
                                                <li class="">
                            <a href="function.extension-loaded.php" title="extension_&#8203;loaded">extension_&#8203;loaded</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-collect-cycles.php" title="gc_&#8203;collect_&#8203;cycles">gc_&#8203;collect_&#8203;cycles</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-disable.php" title="gc_&#8203;disable">gc_&#8203;disable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enable.php" title="gc_&#8203;enable">gc_&#8203;enable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enabled.php" title="gc_&#8203;enabled">gc_&#8203;enabled</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-mem-caches.php" title="gc_&#8203;mem_&#8203;caches">gc_&#8203;mem_&#8203;caches</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-status.php" title="gc_&#8203;status">gc_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.get-cfg-var.php" title="get_&#8203;cfg_&#8203;var">get_&#8203;cfg_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.get-current-user.php" title="get_&#8203;current_&#8203;user">get_&#8203;current_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-constants.php" title="get_&#8203;defined_&#8203;constants">get_&#8203;defined_&#8203;constants</a>
                        </li>
                                                <li class="">
                            <a href="function.get-extension-funcs.php" title="get_&#8203;extension_&#8203;funcs">get_&#8203;extension_&#8203;funcs</a>
                        </li>
                                                <li class="">
                            <a href="function.get-include-path.php" title="get_&#8203;include_&#8203;path">get_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.get-included-files.php" title="get_&#8203;included_&#8203;files">get_&#8203;included_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-loaded-extensions.php" title="get_&#8203;loaded_&#8203;extensions">get_&#8203;loaded_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.get-required-files.php" title="get_&#8203;required_&#8203;files">get_&#8203;required_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resources.php" title="get_&#8203;resources">get_&#8203;resources</a>
                        </li>
                                                <li class="">
                            <a href="function.getenv.php" title="getenv">getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getlastmod.php" title="getlastmod">getlastmod</a>
                        </li>
                                                <li class="">
                            <a href="function.getmygid.php" title="getmygid">getmygid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyinode.php" title="getmyinode">getmyinode</a>
                        </li>
                                                <li class="">
                            <a href="function.getmypid.php" title="getmypid">getmypid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyuid.php" title="getmyuid">getmyuid</a>
                        </li>
                                                <li class="">
                            <a href="function.getopt.php" title="getopt">getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.getrusage.php" title="getrusage">getrusage</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-alter.php" title="ini_&#8203;alter">ini_&#8203;alter</a>
                        </li>
                                                <li class="current">
                            <a href="function.ini-get.php" title="ini_&#8203;get">ini_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get-all.php" title="ini_&#8203;get_&#8203;all">ini_&#8203;get_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-parse-quantity.php" title="ini_&#8203;parse_&#8203;quantity">ini_&#8203;parse_&#8203;quantity</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-restore.php" title="ini_&#8203;restore">ini_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-set.php" title="ini_&#8203;set">ini_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-peak-usage.php" title="memory_&#8203;get_&#8203;peak_&#8203;usage">memory_&#8203;get_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-usage.php" title="memory_&#8203;get_&#8203;usage">memory_&#8203;get_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-reset-peak-usage.php" title="memory_&#8203;reset_&#8203;peak_&#8203;usage">memory_&#8203;reset_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-loaded-file.php" title="php_&#8203;ini_&#8203;loaded_&#8203;file">php_&#8203;ini_&#8203;loaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-scanned-files.php" title="php_&#8203;ini_&#8203;scanned_&#8203;files">php_&#8203;ini_&#8203;scanned_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.php-sapi-name.php" title="php_&#8203;sapi_&#8203;name">php_&#8203;sapi_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.php-uname.php" title="php_&#8203;uname">php_&#8203;uname</a>
                        </li>
                                                <li class="">
                            <a href="function.phpcredits.php" title="phpcredits">phpcredits</a>
                        </li>
                                                <li class="">
                            <a href="function.phpinfo.php" title="phpinfo">phpinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.phpversion.php" title="phpversion">phpversion</a>
                        </li>
                                                <li class="">
                            <a href="function.putenv.php" title="putenv">putenv</a>
                        </li>
                                                <li class="">
                            <a href="function.set-include-path.php" title="set_&#8203;include_&#8203;path">set_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.set-time-limit.php" title="set_&#8203;time_&#8203;limit">set_&#8203;time_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-get-temp-dir.php" title="sys_&#8203;get_&#8203;temp_&#8203;dir">sys_&#8203;get_&#8203;temp_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.version-compare.php" title="version_&#8203;compare">version_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-thread-id.php" title="zend_&#8203;thread_&#8203;id">zend_&#8203;thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-version.php" title="zend_&#8203;version">zend_&#8203;version</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.assert-options.php" title="assert_&#8203;options">assert_&#8203;options</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-gpc.php" title="get_&#8203;magic_&#8203;quotes_&#8203;gpc">get_&#8203;magic_&#8203;quotes_&#8203;gpc</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-runtime.php" title="get_&#8203;magic_&#8203;quotes_&#8203;runtime">get_&#8203;magic_&#8203;quotes_&#8203;runtime</a>
                    </li>
                                    <li class="">
                        <a href="function.restore-include-path.php" title="restore_&#8203;include_&#8203;path">restore_&#8203;include_&#8203;path</a>
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
