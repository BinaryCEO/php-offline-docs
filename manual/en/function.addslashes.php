<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: addslashes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.addslashes.php">
 <link rel="shorturl" href="https://www.php.net/addslashes">
 <link rel="alternate" href="https://www.php.net/addslashes" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.addcslashes.php">
 <link rel="next" href="https://www.php.net/manual/en/function.bin2hex.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.addslashes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.addslashes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.addslashes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.addslashes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.addslashes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.addslashes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.addslashes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.addslashes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.addslashes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.addslashes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.addslashes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Quote string with slashes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: addslashes - Manual" />
<meta name="twitter:description" content="Quote string with slashes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: addslashes - Manual" />
<meta itemprop="description" content="Quote string with slashes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Quote string with slashes" />

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
        <a href="function.bin2hex.php">
          bin2hex &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.addcslashes.php">
          &laquo; addcslashes        </a>
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
            <option value='en/function.addslashes.php' selected="selected">English</option>
            <option value='de/function.addslashes.php'>German</option>
            <option value='es/function.addslashes.php'>Spanish</option>
            <option value='fr/function.addslashes.php'>French</option>
            <option value='it/function.addslashes.php'>Italian</option>
            <option value='ja/function.addslashes.php'>Japanese</option>
            <option value='pt_BR/function.addslashes.php'>Brazilian Portuguese</option>
            <option value='ru/function.addslashes.php'>Russian</option>
            <option value='tr/function.addslashes.php'>Turkish</option>
            <option value='uk/function.addslashes.php'>Ukrainian</option>
            <option value='zh/function.addslashes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.addslashes" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">addslashes</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">addslashes</span> &mdash; <span class="dc-title">Quote string with slashes</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.addslashes-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>addslashes</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns a string with backslashes added before characters that need to be
   escaped. These characters are:
   <ul class="simplelist">
    <li>single quote (<code class="literal">&#039;</code>)</li>
    <li>double quote (<code class="literal">&quot;</code>)</li>
    <li>backslash (<code class="literal">\</code>)</li>
    <li>NUL (the NUL byte)</li>
   </ul>
  </p>
  <p class="para">
   A use case of <span class="function"><strong>addslashes()</strong></span> is escaping the aforementioned
   characters in a string that is to be evaluated by PHP:
   <div class="example" id="example-5052">
    <p><strong>Example #1 Escaping Characters</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"O'Reilly?"</span><span style="color: #007700">;<br />eval(</span><span style="color: #DD0000">"echo '" </span><span style="color: #007700">. </span><span style="color: #0000BB">addslashes</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">) . </span><span style="color: #DD0000">"';"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   The <span class="function"><strong>addslashes()</strong></span> is sometimes incorrectly used to try to prevent
   <a href="security.database.sql-injection.php" class="link">SQL Injection</a>. Instead,
   database-specific escaping functions and/or prepared statements should be used.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.addslashes-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string to be escaped.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.addslashes-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the escaped string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.addslashes-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5053">
    <p><strong>Example #2 An <span class="function"><strong>addslashes()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"Is your name O'Reilly?"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs: Is your name O\'Reilly?<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">addslashes</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.addslashes-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.stripcslashes.php" class="function" rel="rdfs-seeAlso">stripcslashes()</a> - Un-quote string quoted with addcslashes</span></li>
    <li><span class="function"><a href="function.stripslashes.php" class="function" rel="rdfs-seeAlso">stripslashes()</a> - Un-quotes a quoted string</span></li>
    <li><span class="function"><a href="function.addcslashes.php" class="function" rel="rdfs-seeAlso">addcslashes()</a> - Quote string with slashes in a C style</span></li>
    <li><span class="function"><a href="function.htmlspecialchars.php" class="function" rel="rdfs-seeAlso">htmlspecialchars()</a> - Convert special characters to HTML entities</span></li>
    <li><span class="function"><a href="function.quotemeta.php" class="function" rel="rdfs-seeAlso">quotemeta()</a> - Quote meta characters</span></li>
    <li><span class="function"><a href="function.get-magic-quotes-gpc.php" class="function" rel="rdfs-seeAlso">get_magic_quotes_gpc()</a> - Gets the current configuration setting of magic_quotes_gpc</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/addslashes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.addslashes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.addslashes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.addslashes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="98488">  <div class="votes">
    <div id="Vu98488">
    <a href="/manual/vote-note.php?id=98488&amp;page=function.addslashes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98488">
    <a href="/manual/vote-note.php?id=98488&amp;page=function.addslashes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98488" title="58% like this...">
    19
    </div>
  </div>
  <a href="#98488" class="name">
  <strong class="user"><em>roysimke at microsoftsfirstmailprovider dot com</em></strong></a><a class="genanchor" href="#98488"> &para;</a><div class="date" title="2010-06-18 01:35"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98488">
<div class="phpcode"><code><span class="html">Never use addslashes function to escape values you are going to send to mysql. use mysql_real_escape_string or pg_escape at least if you are not using prepared queries yet.<br /><br />keep in mind that single quote is not the only special character that can break your sql query. and quotes are the only thing which addslashes care.</span></code></div>
  </div>
 </div>
  <div class="note" id="126895">  <div class="votes">
    <div id="Vu126895">
    <a href="/manual/vote-note.php?id=126895&amp;page=function.addslashes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126895">
    <a href="/manual/vote-note.php?id=126895&amp;page=function.addslashes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126895" title="67% like this...">
    11
    </div>
  </div>
  <a href="#126895" class="name">
  <strong class="user"><em>divinity76 at gmail dot com</em></strong></a><a class="genanchor" href="#126895"> &para;</a><div class="date" title="2022-03-02 04:08"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126895">
<div class="phpcode"><code><span class="html">Addslashes is *never* the right answer, it's (ab)use can lead to security exploits!<br /><br />if you need to escape HTML, it's (unfortunately)<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">|</span><span class="default">ENT_SUBSTITUTE</span><span class="keyword">|</span><span class="default">ENT_DISALLOWED</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>if you need to quote shell arguments, it's<br /><span class="default">&lt;?php<br />$cmd</span><span class="keyword">.= </span><span class="string">" --file=" </span><span class="keyword">. </span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>if you need to quote SQL strings it's<br /><span class="default">&lt;?php<br />$sql</span><span class="keyword">.= </span><span class="string">"WHERE col = '"</span><span class="keyword">.</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">real_escape_string</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">).</span><span class="string">"'"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>or<br /><span class="default">&lt;?php<br />$sql</span><span class="keyword">.= </span><span class="string">"WHERE col = " </span><span class="keyword">. </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">quote</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>if you need to quote javascript/json strings its<br /><span class="default">&lt;?php<br />let str </span><span class="keyword">= &lt;?=</span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">JSON_THROW_ON_ERROR</span><span class="keyword">);</span><span class="default">?&gt;</span>;<br />?&gt;<br /><br />if you need to quote a string in xpath it's<br /><span class="default">&lt;?php<br /></span><span class="comment">//based on <a href="https://stackoverflow.com/a/1352556/1067003" rel="nofollow" target="_blank">https://stackoverflow.com/a/1352556/1067003</a><br /></span><span class="keyword">function </span><span class="default">xpath_quote</span><span class="keyword">(</span><span class="default">string $value</span><span class="keyword">):</span><span class="default">string</span><span class="keyword">{<br />    if(</span><span class="default">false</span><span class="keyword">===</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">,</span><span class="string">'"'</span><span class="keyword">)){<br />        return </span><span class="string">'"'</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">.</span><span class="string">'"'</span><span class="keyword">;<br />    }<br />    if(</span><span class="default">false</span><span class="keyword">===</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">,</span><span class="string">'\''</span><span class="keyword">)){<br />        return </span><span class="string">'\''</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">.</span><span class="string">'\''</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// if the value contains both single and double quotes, construct an<br />    // expression that concatenates all non-double-quote substrings with<br />    // the quotes, e.g.:<br />    //<br />    //    concat("'foo'", '"', "bar")<br />    </span><span class="default">$sb</span><span class="keyword">=</span><span class="string">'concat('</span><span class="keyword">;<br />    </span><span class="default">$substrings</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">'"'</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">);<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$substrings</span><span class="keyword">);++</span><span class="default">$i</span><span class="keyword">){<br />        </span><span class="default">$needComma</span><span class="keyword">=(</span><span class="default">$i</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">);<br />        if(</span><span class="default">$substrings</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]!==</span><span class="string">''</span><span class="keyword">){<br />            if(</span><span class="default">$i</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">){<br />                </span><span class="default">$sb</span><span class="keyword">.=</span><span class="string">', '</span><span class="keyword">;<br />            }<br />            </span><span class="default">$sb</span><span class="keyword">.=</span><span class="string">'"'</span><span class="keyword">.</span><span class="default">$substrings</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="string">'"'</span><span class="keyword">;<br />            </span><span class="default">$needComma</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />        }<br />        if(</span><span class="default">$i </span><span class="keyword">&lt; (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$substrings</span><span class="keyword">) -</span><span class="default">1</span><span class="keyword">)){<br />            if(</span><span class="default">$needComma</span><span class="keyword">){<br />                </span><span class="default">$sb</span><span class="keyword">.=</span><span class="string">', '</span><span class="keyword">;<br />            }<br />            </span><span class="default">$sb</span><span class="keyword">.=</span><span class="string">"'\"'"</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="default">$sb</span><span class="keyword">.=</span><span class="string">')'</span><span class="keyword">;<br />    return </span><span class="default">$sb</span><span class="keyword">;<br />}<br /></span><span class="default">$xp</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'/catalog/items/item[title='</span><span class="keyword">.</span><span class="default">xpath_quote</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">).</span><span class="string">']'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>if you need to quote strings in CSS its<br /><span class="default">&lt;?php<br /></span><span class="comment">// CSS escape code ripped from Zend Framework ( <a href="https://github.com/zendframework/zf2/blob/master/library/Zend/Escaper/Escaper.php" rel="nofollow" target="_blank">https://github.com/zendframework/zf2/blob/master/library/Zend/Escaper/Escaper.php</a> )<br /></span><span class="keyword">function </span><span class="default">css_escape_string</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)<br />{<br />    </span><span class="default">$cssMatcher </span><span class="keyword">= function (</span><span class="default">$matches</span><span class="keyword">) {<br />        </span><span class="default">$chr </span><span class="keyword">= </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />        if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">) {<br />            </span><span class="default">$ord </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">);<br />        } else {<br />            </span><span class="default">$chr </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">, </span><span class="string">'UTF-16BE'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">); </span><span class="comment">// $this-&gt;convertEncoding($chr, 'UTF-16BE', 'UTF-8');<br />            </span><span class="default">$ord </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">));<br />        }<br />        return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'\\%X '</span><span class="keyword">, </span><span class="default">$ord</span><span class="keyword">);<br />    };<br />    </span><span class="default">$originalEncoding </span><span class="keyword">= </span><span class="default">mb_detect_encoding</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />    if (</span><span class="default">$originalEncoding </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />        </span><span class="default">$originalEncoding </span><span class="keyword">= </span><span class="string">'UTF-8'</span><span class="keyword">;<br />    }<br />    ;<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="default">$originalEncoding</span><span class="keyword">); </span><span class="comment">// $this-&gt;toUtf8($string);<br />                                                                        // throw new Exception('mb_convert_encoding(\''.$string.'\',\'UTF-8\',\''.$originalEncoding.'\');');<br />    </span><span class="keyword">if (</span><span class="default">$string </span><span class="keyword">=== </span><span class="string">'' </span><span class="keyword">|| </span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)) {<br />        return </span><span class="default">$string</span><span class="keyword">;<br />    }<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">'/[^a-z0-9]/iSu'</span><span class="keyword">, </span><span class="comment">/*$this-&gt;*/</span><span class="default">$cssMatcher</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    </span><span class="comment">// var_dump($result);<br />    </span><span class="keyword">return </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$originalEncoding</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">); </span><span class="comment">// $this-&gt;fromUtf8($result);<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;<br /></span><br />- but never addslashes.</span></code></div>
  </div>
 </div>
  <div class="note" id="102188">  <div class="votes">
    <div id="Vu102188">
    <a href="/manual/vote-note.php?id=102188&amp;page=function.addslashes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102188">
    <a href="/manual/vote-note.php?id=102188&amp;page=function.addslashes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102188" title="56% like this...">
    11
    </div>
  </div>
  <a href="#102188" class="name">
  <strong class="user"><em>svenr at selfhtml dot org</em></strong></a><a class="genanchor" href="#102188"> &para;</a><div class="date" title="2011-02-01 08:45"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102188">
<div class="phpcode"><code><span class="html">To output a PHP variable to Javascript, use json_encode().<br /><br /><span class="default">&lt;?php<br /><br />$var </span><span class="keyword">= </span><span class="string">"He said \"Hello O'Reilly\" &amp; disappeared.\nNext line..."</span><span class="keyword">;<br />echo </span><span class="string">"alert("</span><span class="keyword">.</span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">).</span><span class="string">");\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Output:<br />alert("He said \"Hello O'Reilly\" &amp; disappeared.\nNext line...") ;</span></code></div>
  </div>
 </div>
  <div class="note" id="26782">  <div class="votes">
    <div id="Vu26782">
    <a href="/manual/vote-note.php?id=26782&amp;page=function.addslashes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26782">
    <a href="/manual/vote-note.php?id=26782&amp;page=function.addslashes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26782" title="55% like this...">
    8
    </div>
  </div>
  <a href="#26782" class="name">
  <strong class="user"><em>hoskerr at nukote dot com</em></strong></a><a class="genanchor" href="#26782"> &para;</a><div class="date" title="2002-11-12 03:16"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26782">
<div class="phpcode"><code><span class="html">Beware of using addslashes() on input to the serialize() function.   serialize() stores strings with their length; the length must match the stored string or unserialize() will fail.  
<br />
<br />Such a mismatch can occur if you serialize the result of addslashes() and store it in a database; some databases (definitely including PostgreSQL) automagically strip backslashes from "special" chars in SELECT results, causing the returned string to be shorter than it was when it was serialized.
<br />
<br />In other words, do this...
<br />
<br /><span class="default">&lt;?php
<br />$string</span><span class="keyword">=</span><span class="string">"O'Reilly"</span><span class="keyword">;
<br /></span><span class="default">$ser</span><span class="keyword">=</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);    </span><span class="comment"># safe -- won't count the slash
<br /></span><span class="default">$result</span><span class="keyword">=</span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$ser</span><span class="keyword">); 
<br /></span><span class="default">?&gt;
<br /></span>
<br />...and not this...
<br />
<br /><span class="default">&lt;?php
<br />$string</span><span class="keyword">=</span><span class="string">"O'Reilly"</span><span class="keyword">;
<br /></span><span class="default">$add</span><span class="keyword">=</span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);   </span><span class="comment"># RISKY!  -- will count the slash
<br /></span><span class="default">$result</span><span class="keyword">=</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$add</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />In both cases, a backslash will be added after the apostrophe in "O'Reilly"; only in the second case will the backslash be included in the string length as recorded by serialize().
<br />
<br />[Note to the maintainers: You may, at your option, want to link this note to serialize() as well as to addslashes().  I'll refrain from doing such cross-posting myself...]</span></code></div>
  </div>
 </div>
  <div class="note" id="52435">  <div class="votes">
    <div id="Vu52435">
    <a href="/manual/vote-note.php?id=52435&amp;page=function.addslashes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52435">
    <a href="/manual/vote-note.php?id=52435&amp;page=function.addslashes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52435" title="55% like this...">
    5
    </div>
  </div>
  <a href="#52435" class="name">
  <strong class="user"><em>unsafed</em></strong></a><a class="genanchor" href="#52435"> &para;</a><div class="date" title="2005-04-30 08:23"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52435">
<div class="phpcode"><code><span class="html">addslashes does NOT make your input safe for use in a database query! It only escapes according to what PHP defines, not what your database driver defines. Any use of this function to escape strings for use in a database is likely an error - mysql_real_escape_string, pg_escape_string, etc, should be used depending on your underlying database as each database has different escaping requirements. In particular, MySQL wants \n, \r and \x1a escaped which addslashes does NOT do. Therefore relying on addslashes is not a good idea at all and may make your code vulnerable to security risks. I really don't see what this function is supposed to do.</span></code></div>
  </div>
 </div>
  <div class="note" id="113386">  <div class="votes">
    <div id="Vu113386">
    <a href="/manual/vote-note.php?id=113386&amp;page=function.addslashes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113386">
    <a href="/manual/vote-note.php?id=113386&amp;page=function.addslashes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113386" title="55% like this...">
    4
    </div>
  </div>
  <a href="#113386" class="name">
  <strong class="user"><em>David Spector</em></strong></a><a class="genanchor" href="#113386"> &para;</a><div class="date" title="2013-10-04 02:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113386">
<div class="phpcode"><code><span class="html">If all you want to do is quote a string as you would normally do in PHP (for example, when returning an Ajax result, inside a json string value, or when building a URL with args), don't use addslashes (you don't want both " and ' escaped at the same time). Instead, just use this function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">Quote</span><span class="keyword">(</span><span class="default">$Str</span><span class="keyword">) </span><span class="comment">// Double-quoting only<br />    </span><span class="keyword">{<br />    </span><span class="default">$Str</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'"'</span><span class="keyword">,</span><span class="string">'\"'</span><span class="keyword">,</span><span class="default">$Str</span><span class="keyword">);<br />    return </span><span class="string">'"'</span><span class="keyword">.</span><span class="default">$Str</span><span class="keyword">.</span><span class="string">'"'</span><span class="keyword">;<br />    } </span><span class="comment">// Quote<br /></span><span class="default">?&gt;<br /></span><br />Modify this easily to get a single-quoting function.</span></code></div>
  </div>
 </div>
  <div class="note" id="87577">  <div class="votes">
    <div id="Vu87577">
    <a href="/manual/vote-note.php?id=87577&amp;page=function.addslashes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87577">
    <a href="/manual/vote-note.php?id=87577&amp;page=function.addslashes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87577" title="53% like this...">
    2
    </div>
  </div>
  <a href="#87577" class="name">
  <strong class="user"><em>stuart at horuskol dot co dot uk</em></strong></a><a class="genanchor" href="#87577"> &para;</a><div class="date" title="2008-12-11 02:44"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87577">
<div class="phpcode"><code><span class="html">Be careful on whether you use double or single quotes when creating the string to be escaped:<br /><br />$test = 'This is one line\r\nand this is another\r\nand this line has\ta tab';<br /><br />echo $test;<br />echo "\r\n\r\n";<br />echo addslashes($test);<br /><br />$test = "This is one line\r\nand this is another\r\nand this line has\ta tab";<br /><br />echo $test;<br />echo "\r\n\r\n";<br />echo addslashes($test);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.addslashes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.addslashes.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="current">
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
                                                <li class="">
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
