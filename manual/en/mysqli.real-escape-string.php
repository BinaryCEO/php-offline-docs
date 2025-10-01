<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli::real_escape_string - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.real-escape-string.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.real-escape-string.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.real-escape-string.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.real-connect.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.real-query.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.real-escape-string.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.real-escape-string.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.real-escape-string.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.real-escape-string.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.real-escape-string.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.real-escape-string.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.real-escape-string.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.real-escape-string.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.real-escape-string.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.real-escape-string.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.real-escape-string.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli::real_escape_string - Manual" />
<meta name="twitter:description" content="Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli::real_escape_string - Manual" />
<meta itemprop="description" content="Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection" />

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
        <a href="mysqli.real-query.php">
          mysqli::real_query &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.real-connect.php">
          &laquo; mysqli::real_connect        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='class.mysqli.php'>mysqli</a></li>      </ul>
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
            <option value='en/mysqli.real-escape-string.php' selected="selected">English</option>
            <option value='de/mysqli.real-escape-string.php'>German</option>
            <option value='es/mysqli.real-escape-string.php'>Spanish</option>
            <option value='fr/mysqli.real-escape-string.php'>French</option>
            <option value='it/mysqli.real-escape-string.php'>Italian</option>
            <option value='ja/mysqli.real-escape-string.php'>Japanese</option>
            <option value='pt_BR/mysqli.real-escape-string.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.real-escape-string.php'>Russian</option>
            <option value='tr/mysqli.real-escape-string.php'>Turkish</option>
            <option value='uk/mysqli.real-escape-string.php'>Ukrainian</option>
            <option value='zh/mysqli.real-escape-string.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.real-escape-string" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli::real_escape_string</h1>
  <h1 class="refname">mysqli_real_escape_string</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli::real_escape_string</span> -- <span class="refname">mysqli_real_escape_string</span> &mdash; <span class="dc-title">Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli.real-escape-string-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli::real_escape_string</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_real_escape_string</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli.php" class="type mysqli">mysqli</a></span> <code class="parameter">$mysql</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   This function is used to create a legal SQL string that you can use in an
   SQL statement. The given string is encoded to produce an escaped SQL string,
   taking into account the current character set of the connection.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <h1 class="title">Security: the default character set</h1>
   <p class="para">
    The character set must be set either at the server level, or with
    the API function <span class="function"><a href="mysqli.set-charset.php" class="function">mysqli_set_charset()</a></span> for it to affect
    <span class="function"><strong>mysqli_real_escape_string()</strong></span>. See the concepts section
    on <a href="mysqlinfo.concepts.charset.php" class="link">character sets</a> for
    more information.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli.real-escape-string-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">mysql</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli.php" class="classname">mysqli</a></span> object
returned by <span class="function"><a href="function.mysqli-connect.php" class="function">mysqli_connect()</a></span> or <span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span>
</p></dd>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string to be escaped.
      </p>
      <p class="para">
       Characters encoded are <code class="literal">NUL (ASCII 0)</code>,
       <code class="literal">\n</code>, <code class="literal">\r</code>, <code class="literal">\</code>,
       <code class="literal">&#039;</code>, <code class="literal">&quot;</code>, and
       <kbd class="keycombo"><kbd class="keycap">CTRL</kbd>+<kbd class="keycap">Z</kbd></kbd>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli.real-escape-string-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an escaped string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli.real-escape-string-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1611">
   <p><strong>Example #1 <span class="methodname"><strong>mysqli::real_escape_string()</strong></span> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$city </span><span style="color: #007700">= </span><span style="color: #DD0000">"'s-Hertogenbosch"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* this query with escaped $city will work */<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT CountryCode FROM City WHERE name='%s'"</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">real_escape_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$city</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Select returned %d rows.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">num_rows</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* this query will fail, because we didn't escape $city */<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT CountryCode FROM City WHERE name='%s'"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$city </span><span style="color: #007700">= </span><span style="color: #DD0000">"'s-Hertogenbosch"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* this query with escaped $city will work */<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT CountryCode FROM City WHERE name='%s'"</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">mysqli_real_escape_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Select returned %d rows.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_num_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">/* this query will fail, because we didn't escape $city */<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT CountryCode FROM City WHERE name='%s'"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Select returned 1 rows.

Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near &#039;s-Hertogenbosch&#039;&#039; at line 1 in...</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli.real-escape-string-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.set-charset.php" class="function" rel="rdfs-seeAlso">mysqli_set_charset()</a> - Sets the client character set</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli/real-escape-string.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.real-escape-string%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.real-escape-string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.real-escape-string.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102639">  <div class="votes">
    <div id="Vu102639">
    <a href="/manual/vote-note.php?id=102639&amp;page=mysqli.real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102639">
    <a href="/manual/vote-note.php?id=102639&amp;page=mysqli.real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102639" title="67% like this...">
    61
    </div>
  </div>
  <a href="#102639" class="name">
  <strong class="user"><em>dave at mausner.us</em></strong></a><a class="genanchor" href="#102639"> &para;</a><div class="date" title="2011-02-25 07:48"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102639">
<div class="phpcode"><code><span class="html">You can avoid all character escaping issues (on the PHP side) if you use prepare() and bind_param(), as an alternative to placing arbitrary string values in SQL statements.  This works because bound parameter values are NOT passed via the SQL statement syntax.</span></code></div>
  </div>
 </div>
  <div class="note" id="96429">  <div class="votes">
    <div id="Vu96429">
    <a href="/manual/vote-note.php?id=96429&amp;page=mysqli.real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96429">
    <a href="/manual/vote-note.php?id=96429&amp;page=mysqli.real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96429" title="64% like this...">
    53
    </div>
  </div>
  <a href="#96429" class="name">
  <strong class="user"><em>Josef Toman</em></strong></a><a class="genanchor" href="#96429"> &para;</a><div class="date" title="2010-02-26 06:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96429">
<div class="phpcode"><code><span class="html">For percent sign and underscore I use this:<br /><span class="default">&lt;?php<br />$more_escaped </span><span class="keyword">= </span><span class="default">addcslashes</span><span class="keyword">(</span><span class="default">$escaped</span><span class="keyword">, </span><span class="string">'%_'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="46339">  <div class="votes">
    <div id="Vu46339">
    <a href="/manual/vote-note.php?id=46339&amp;page=mysqli.real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46339">
    <a href="/manual/vote-note.php?id=46339&amp;page=mysqli.real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46339" title="65% like this...">
    38
    </div>
  </div>
  <a href="#46339" class="name">
  <strong class="user"><em>arnoud at procurios dot nl</em></strong></a><a class="genanchor" href="#46339"> &para;</a><div class="date" title="2004-10-07 09:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46339">
<div class="phpcode"><code><span class="html">Note that this function will NOT escape _ (underscore) and % (percent) signs, which have special meanings in LIKE clauses. <br /><br />As far as I know there is no function to do this, so you have to escape them yourself by adding a backslash in front of them.</span></code></div>
  </div>
 </div>
  <div class="note" id="121402">  <div class="votes">
    <div id="Vu121402">
    <a href="/manual/vote-note.php?id=121402&amp;page=mysqli.real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121402">
    <a href="/manual/vote-note.php?id=121402&amp;page=mysqli.real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121402" title="66% like this...">
    23
    </div>
  </div>
  <a href="#121402" class="name">
  <strong class="user"><em>therselman at gmail dot com</em></strong></a><a class="genanchor" href="#121402"> &para;</a><div class="date" title="2017-07-19 08:22"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121402">
<div class="phpcode"><code><span class="html">Presenting several UTF-8 / Multibyte-aware escape functions.<br /><br />These functions represent alternatives to mysqli::real_escape_string, as long as your DB connection and Multibyte extension are using the same character set (UTF-8), they will produce the same results by escaping the same characters as mysqli::real_escape_string.<br /><br />This is based on research I did for my SQL Query Builder class:<br /><a href="https://github.com/twister-php/sql" rel="nofollow" target="_blank">https://github.com/twister-php/sql</a><br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Returns a string with backslashes before characters that need to be escaped.<br /> * As required by MySQL and suitable for multi-byte character sets<br /> * Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and ctrl-Z.<br /> *<br /> * @param string $string String to add slashes to<br /> * @return $string with `\` prepended to reserved characters <br /> *<br /> * @author Trevor Herselman<br /> */<br /></span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_ereg_replace'</span><span class="keyword">))<br />{<br />    function </span><span class="default">mb_escape</span><span class="keyword">(</span><span class="default">string $string</span><span class="keyword">)<br />    {<br />        return </span><span class="default">mb_ereg_replace</span><span class="keyword">(</span><span class="string">'[\x00\x0A\x0D\x1A\x22\x27\x5C]'</span><span class="keyword">, </span><span class="string">'\\\0'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    }<br />} else {<br />    function </span><span class="default">mb_escape</span><span class="keyword">(</span><span class="default">string $string</span><span class="keyword">)<br />    {<br />        return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'~[\x00\x0A\x0D\x1A\x22\x27\x5C]~u'</span><span class="keyword">, </span><span class="string">'\\\$0'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Characters escaped are (the same as mysqli::real_escape_string):<br /><br />00 = \0 (NUL)<br />0A = \n<br />0D = \r<br />1A = ctl-Z<br />22 = "<br />27 = '<br />5C = \<br /><br />Note: preg_replace() is in PCRE_UTF8 (UTF-8) mode (`u`).<br /><br />Enhanced version:<br /><br />When escaping strings for `LIKE` syntax, remember that you also need to escape the special characters _ and %<br /><br />So this is a more fail-safe version (even when compared to mysqli::real_escape_string, because % characters in user input can cause unexpected results and even security violations via SQL injection in LIKE statements):<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Returns a string with backslashes before characters that need to be escaped.<br /> * As required by MySQL and suitable for multi-byte character sets<br /> * Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and ctrl-Z.<br /> * In addition, the special control characters % and _ are also escaped,<br /> * suitable for all statements, but especially suitable for `LIKE`.<br /> *<br /> * @param string $string String to add slashes to<br /> * @return $string with `\` prepended to reserved characters <br /> *<br /> * @author Trevor Herselman<br /> */<br /></span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_ereg_replace'</span><span class="keyword">))<br />{<br />    function </span><span class="default">mb_escape</span><span class="keyword">(</span><span class="default">string $string</span><span class="keyword">)<br />    {<br />        return </span><span class="default">mb_ereg_replace</span><span class="keyword">(</span><span class="string">'[\x00\x0A\x0D\x1A\x22\x25\x27\x5C\x5F]'</span><span class="keyword">, </span><span class="string">'\\\0'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    }<br />} else {<br />    function </span><span class="default">mb_escape</span><span class="keyword">(</span><span class="default">string $string</span><span class="keyword">)<br />    {<br />        return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'~[\x00\x0A\x0D\x1A\x22\x25\x27\x5C\x5F]~u'</span><span class="keyword">, </span><span class="string">'\\\$0'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Additional characters escaped:<br /><br />25 = %<br />5F = _<br /><br />Bonus function:<br /><br />The original MySQL `utf8` character-set (for tables and fields) only supports 3-byte sequences.<br />4-byte characters are not common, but I've had queries fail to execute on 4-byte UTF-8 characters, so you should be using `utf8mb4` wherever possible.<br /><br />However, if you still want to use `utf8`, you can use the following function to replace all 4-byte sequences.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Modified from: <a href="https://stackoverflow.com/a/24672780/2726557" rel="nofollow" target="_blank">https://stackoverflow.com/a/24672780/2726557</a><br /></span><span class="keyword">function </span><span class="default">mysql_utf8_sanitizer</span><span class="keyword">(</span><span class="default">string $str</span><span class="keyword">)<br />{<br />    return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[\x{10000}-\x{10FFFF}]/u'</span><span class="keyword">, </span><span class="string">"\xEF\xBF\xBD"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Pick your poison and use at your own risk!</span></code></div>
  </div>
 </div>
  <div class="note" id="116946">  <div class="votes">
    <div id="Vu116946">
    <a href="/manual/vote-note.php?id=116946&amp;page=mysqli.real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116946">
    <a href="/manual/vote-note.php?id=116946&amp;page=mysqli.real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116946" title="60% like this...">
    16
    </div>
  </div>
  <a href="#116946" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116946"> &para;</a><div class="date" title="2015-03-25 09:20"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116946">
<div class="phpcode"><code><span class="html">If you wonder why (besides \, ' and ")  NUL (ASCII 0), \n, \r, and Control-Z are escaped: it is not to prevent sql injection, but to prevent your sql logfile to get unreadable.</span></code></div>
  </div>
 </div>
  <div class="note" id="125972">  <div class="votes">
    <div id="Vu125972">
    <a href="/manual/vote-note.php?id=125972&amp;page=mysqli.real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125972">
    <a href="/manual/vote-note.php?id=125972&amp;page=mysqli.real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125972" title="62% like this...">
    4
    </div>
  </div>
  <a href="#125972" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#125972"> &para;</a><div class="date" title="2021-03-30 04:45"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125972">
<div class="phpcode"><code><span class="html">Caution when escaping the % and _ wildcard characters. According to an often overlooked note at the bottom of:<br /> <br /><a href="https://dev.mysql.com/doc/refman/5.7/en/string-literals.html#character-escape-sequences" rel="nofollow" target="_blank">https://dev.mysql.com/doc/refman/5.7/en/string-literals.html#character-escape-sequences</a><br /><br />the escape sequences \% and \_ will ONLY be interpreted as % and _, *if* they occur in a LIKE! (Same for MySQL 8.0)<br /><br />In regular string literals, the escape sequences \% and \_ are treated as those two character pairs. So if those escape sequences appear in a WHERE "=" instead of a WHERE LIKE, they would NOT match a single % or _ character!<br /><br />Consequently, one MUST use two "escape" functions: The real-escape-string (or equivalent) for regular string literals, and an amended escape function JUST for string literals that are intended to be used in LIKE.</span></code></div>
  </div>
 </div>
  <div class="note" id="130210">  <div class="votes">
    <div id="Vu130210">
    <a href="/manual/vote-note.php?id=130210&amp;page=mysqli.real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130210">
    <a href="/manual/vote-note.php?id=130210&amp;page=mysqli.real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130210" title="no votes...">
    0
    </div>
  </div>
  <a href="#130210" class="name">
  <strong class="user"><em>a at nonymo dot us</em></strong></a><a class="genanchor" href="#130210"> &para;</a><div class="date" title="2025-03-29 04:19"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130210">
<div class="phpcode"><code><span class="html">Please note that nowadays this isn't enough to combat SQL injections and you should combine this with prepared statements.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.real-escape-string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.real-escape-string.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli.php">mysqli</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli.affected-rows.php" title="$affected_&#8203;rows">$affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.autocommit.php" title="autocommit">autocommit</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.begin-transaction.php" title="begin_&#8203;transaction">begin_&#8203;transaction</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.change-user.php" title="change_&#8203;user">change_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.character-set-name.php" title="character_&#8203;set_&#8203;name">character_&#8203;set_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.commit.php" title="commit">commit</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.connect-errno.php" title="$connect_&#8203;errno">$connect_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.connect-error.php" title="$connect_&#8203;error">$connect_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.debug.php" title="debug">debug</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.dump-debug-info.php" title="dump_&#8203;debug_&#8203;info">dump_&#8203;debug_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.errno.php" title="$errno">$errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.error.php" title="$error">$error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.error-list.php" title="$error_&#8203;list">$error_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.execute-query.php" title="execute_&#8203;query">execute_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.field-count.php" title="$field_&#8203;count">$field_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-charset.php" title="get_&#8203;charset">get_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-client-info.php" title="$client_&#8203;info">$client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-client-version.php" title="$client_&#8203;version">$client_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-connection-stats.php" title="get_&#8203;connection_&#8203;stats">get_&#8203;connection_&#8203;stats</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-host-info.php" title="$host_&#8203;info">$host_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-proto-info.php" title="$protocol_&#8203;version">$protocol_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-server-info.php" title="$server_&#8203;info">$server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-server-version.php" title="$server_&#8203;version">$server_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-warnings.php" title="get_&#8203;warnings">get_&#8203;warnings</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.info.php" title="$info">$info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.insert-id.php" title="$insert_&#8203;id">$insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.more-results.php" title="more_&#8203;results">more_&#8203;results</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.multi-query.php" title="multi_&#8203;query">multi_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.next-result.php" title="next_&#8203;result">next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.options.php" title="options">options</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.poll.php" title="poll">poll</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.query.php" title="query">query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-connect.php" title="real_&#8203;connect">real_&#8203;connect</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli.real-escape-string.php" title="real_&#8203;escape_&#8203;string">real_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-query.php" title="real_&#8203;query">real_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.reap-async-query.php" title="reap_&#8203;async_&#8203;query">reap_&#8203;async_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.release-savepoint.php" title="release_&#8203;savepoint">release_&#8203;savepoint</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.rollback.php" title="rollback">rollback</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.savepoint.php" title="savepoint">savepoint</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.select-db.php" title="select_&#8203;db">select_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.set-charset.php" title="set_&#8203;charset">set_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.sqlstate.php" title="$sqlstate">$sqlstate</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.ssl-set.php" title="ssl_&#8203;set">ssl_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.stmt-init.php" title="stmt_&#8203;init">stmt_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.store-result.php" title="store_&#8203;result">store_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.thread-id.php" title="$thread_&#8203;id">$thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.thread-safe.php" title="thread_&#8203;safe">thread_&#8203;safe</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.use-result.php" title="use_&#8203;result">use_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.warning-count.php" title="$warning_&#8203;count">$warning_&#8203;count</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="mysqli.init.php" title="init">init</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.kill.php" title="kill">kill</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.ping.php" title="ping">ping</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.refresh.php" title="refresh">refresh</a>
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
