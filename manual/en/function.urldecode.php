<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: urldecode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.urldecode.php">
 <link rel="shorturl" href="https://www.php.net/urldecode">
 <link rel="alternate" href="https://www.php.net/urldecode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.url.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.rawurlencode.php">
 <link rel="next" href="https://www.php.net/manual/en/function.urlencode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.urldecode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.urldecode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.urldecode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.urldecode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.urldecode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.urldecode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.urldecode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.urldecode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.urldecode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.urldecode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.urldecode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Decodes URL-encoded string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: urldecode - Manual" />
<meta name="twitter:description" content="Decodes URL-encoded string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: urldecode - Manual" />
<meta itemprop="description" content="Decodes URL-encoded string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Decodes URL-encoded string" />

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
        <a href="function.urlencode.php">
          urlencode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.rawurlencode.php">
          &laquo; rawurlencode        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.url.php'>URLs</a></li>      <li><a href='ref.url.php'>URL Functions</a></li>      </ul>
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
            <option value='en/function.urldecode.php' selected="selected">English</option>
            <option value='de/function.urldecode.php'>German</option>
            <option value='es/function.urldecode.php'>Spanish</option>
            <option value='fr/function.urldecode.php'>French</option>
            <option value='it/function.urldecode.php'>Italian</option>
            <option value='ja/function.urldecode.php'>Japanese</option>
            <option value='pt_BR/function.urldecode.php'>Brazilian Portuguese</option>
            <option value='ru/function.urldecode.php'>Russian</option>
            <option value='tr/function.urldecode.php'>Turkish</option>
            <option value='uk/function.urldecode.php'>Ukrainian</option>
            <option value='zh/function.urldecode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.urldecode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">urldecode</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">urldecode</span> &mdash; <span class="dc-title">Decodes URL-encoded string</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.urldecode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>urldecode</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Decodes any <code class="literal">%<span class="replaceable">##</span></code>
   encoding in the given string. Plus symbols (&#039;<code class="literal">+</code>&#039;) are
   decoded to a space character.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.urldecode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string to be decoded.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.urldecode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the decoded string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.urldecode-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4142">
    <p><strong>Example #1 <span class="function"><strong>urldecode()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"my=apples&amp;are=green+and+red"</span><span style="color: #007700">;<br /><br />foreach (</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&amp;'</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">) as </span><span style="color: #0000BB">$chunk</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$param </span><span style="color: #007700">= </span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">"="</span><span style="color: #007700">, </span><span style="color: #0000BB">$chunk</span><span style="color: #007700">);<br /><br />    if (</span><span style="color: #0000BB">$param</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Value for parameter \"%s\" is \"%s\"&lt;br/&gt;\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">urldecode</span><span style="color: #007700">(</span><span style="color: #0000BB">$param</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]), </span><span style="color: #0000BB">urldecode</span><span style="color: #007700">(</span><span style="color: #0000BB">$param</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]));<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.urldecode-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The superglobals <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET</a></var> and <var class="varname"><a href="reserved.variables.request.php" class="classname">$_REQUEST</a></var>
    are already decoded.  Using <span class="function"><strong>urldecode()</strong></span> on an element
    in <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET</a></var> or <var class="varname"><a href="reserved.variables.request.php" class="classname">$_REQUEST</a></var> could have
    unexpected and dangerous results.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.urldecode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.urlencode.php" class="function" rel="rdfs-seeAlso">urlencode()</a> - URL-encodes string</span></li>
    <li><span class="function"><a href="function.rawurlencode.php" class="function" rel="rdfs-seeAlso">rawurlencode()</a> - URL-encode according to RFC 3986</span></li>
    <li><span class="function"><a href="function.rawurldecode.php" class="function" rel="rdfs-seeAlso">rawurldecode()</a> - Decode URL-encoded strings</span></li>
    <li><a href="https://datatracker.ietf.org/doc/html/rfc3986" class="link external">&raquo;&nbsp;RFC 3986</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/url/functions/urldecode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.urldecode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.urldecode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.urldecode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="101401">  <div class="votes">
    <div id="Vu101401">
    <a href="/manual/vote-note.php?id=101401&amp;page=function.urldecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101401">
    <a href="/manual/vote-note.php?id=101401&amp;page=function.urldecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101401" title="58% like this...">
    33
    </div>
  </div>
  <a href="#101401" class="name">
  <strong class="user"><em>alejandro at devenet dot net</em></strong></a><a class="genanchor" href="#101401"> &para;</a><div class="date" title="2010-12-14 06:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101401">
<div class="phpcode"><code><span class="html">When the client send Get data, utf-8 character encoding have a tiny problem with the urlencode.
<br />Consider the "º" character. 
<br />Some clients can send (as example)
<br />foo.php?myvar=%BA
<br />and another clients send
<br />foo.php?myvar=%C2%BA (The "right" url encoding)
<br />
<br />in this scenary, you assign the value into variable $x
<br />
<br /><span class="default">&lt;?php
<br />$x </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'myvar'</span><span class="keyword">];
<br /></span><span class="default">?&gt;
<br /></span>
<br />$x store: in the first case "�" (bad) and in the second case "º" (good)
<br />
<br />To fix that, you can use this function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">to_utf8</span><span class="keyword">( </span><span class="default">$string </span><span class="keyword">) {
<br /></span><span class="comment">// From <a href="http://w3.org/International/questions/qa-forms-utf-8.html" rel="nofollow" target="_blank">http://w3.org/International/questions/qa-forms-utf-8.html</a>
<br />    </span><span class="keyword">if ( </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'%^(?:
<br />      [\x09\x0A\x0D\x20-\x7E]            # ASCII
<br />    | [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
<br />    | \xE0[\xA0-\xBF][\x80-\xBF]         # excluding overlongs
<br />    | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte
<br />    | \xED[\x80-\x9F][\x80-\xBF]         # excluding surrogates
<br />    | \xF0[\x90-\xBF][\x80-\xBF]{2}      # planes 1-3
<br />    | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
<br />    | \xF4[\x80-\x8F][\x80-\xBF]{2}      # plane 16
<br />)*$%xs'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">) ) {
<br />        return </span><span class="default">$string</span><span class="keyword">;
<br />    } else {
<br />        return </span><span class="default">iconv</span><span class="keyword">( </span><span class="string">'CP1252'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />and assign in this way:
<br />
<br /><span class="default">&lt;?php
<br />$x </span><span class="keyword">= </span><span class="default">to_utf8</span><span class="keyword">( </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'myvar'</span><span class="keyword">] );
<br /></span><span class="default">?&gt;
<br /></span>
<br />$x store: in the first case "º" (good) and in the second case "º" (good)
<br />
<br />Solve a lot of i18n problems.
<br />
<br />Please fix the auto-urldecode of $_GET var in the next PHP version.
<br />
<br />Bye.
<br />
<br />Alejandro Salamanca</span></code></div>
  </div>
 </div>
  <div class="note" id="66301">  <div class="votes">
    <div id="Vu66301">
    <a href="/manual/vote-note.php?id=66301&amp;page=function.urldecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66301">
    <a href="/manual/vote-note.php?id=66301&amp;page=function.urldecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66301" title="58% like this...">
    14
    </div>
  </div>
  <a href="#66301" class="name">
  <strong class="user"><em>Visual</em></strong></a><a class="genanchor" href="#66301"> &para;</a><div class="date" title="2006-05-18 12:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66301">
<div class="phpcode"><code><span class="html">If you are escaping strings in javascript and want to decode them in PHP with urldecode (or want PHP to decode them automatically when you're putting them in the query string or post request), you should use the javascript function encodeURIComponent() instead of escape(). Then you won't need any of the fancy custom utf_urldecode functions from the previous comments.</span></code></div>
  </div>
 </div>
  <div class="note" id="34280">  <div class="votes">
    <div id="Vu34280">
    <a href="/manual/vote-note.php?id=34280&amp;page=function.urldecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34280">
    <a href="/manual/vote-note.php?id=34280&amp;page=function.urldecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34280" title="57% like this...">
    5
    </div>
  </div>
  <a href="#34280" class="name">
  <strong class="user"><em>tomas at penajaca dot com dot br</em></strong></a><a class="genanchor" href="#34280"> &para;</a><div class="date" title="2003-07-20 11:14"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34280">
<div class="phpcode"><code><span class="html">urldecode does not decode "%0"  bypassing it. I can cause troble when you are working with fixed lenght strings.<br /><br />You can you the function below.<br /><br />function my_urldecode($string){<br /><br />  $array = split ("%",$string);<br /><br />  if (is_array($array)){<br />    while (list ($k,$v) = each ($array)){<br />       $ascii = base_convert ($v,16,10);<br />       $ret .= chr ($ascii);<br />    }<br /> }<br /> return ("$ret");<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="82281">  <div class="votes">
    <div id="Vu82281">
    <a href="/manual/vote-note.php?id=82281&amp;page=function.urldecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82281">
    <a href="/manual/vote-note.php?id=82281&amp;page=function.urldecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82281" title="52% like this...">
    2
    </div>
  </div>
  <a href="#82281" class="name">
  <strong class="user"><em>Joe</em></strong></a><a class="genanchor" href="#82281"> &para;</a><div class="date" title="2008-04-03 11:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82281">
<div class="phpcode"><code><span class="html">It's worth pointing out that if you are using AJAX and need to encode strings that are being sent to a PHP application, you may not need to decode them in PHP.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">stripslashes</span><span class="keyword">(</span><span class="default">nl2br</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">]));<br /></span><span class="default">?&gt;<br /></span><br />Will properly output a message sent with the javascript code if the message is encoded:<br /><br />message = encodeURIComponent(message)<br /><br />And is sent with an AJAX POST request with the header:<br />ajaxVar.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')</span></code></div>
  </div>
 </div>
  <div class="note" id="124920">  <div class="votes">
    <div id="Vu124920">
    <a href="/manual/vote-note.php?id=124920&amp;page=function.urldecode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124920">
    <a href="/manual/vote-note.php?id=124920&amp;page=function.urldecode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124920" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124920" class="name">
  <strong class="user"><em>bloodjazman at gmail dot com</em></strong></a><a class="genanchor" href="#124920"> &para;</a><div class="date" title="2020-04-16 09:37"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124920">
<div class="phpcode"><code><span class="html">"+" replaced by space according to HTML x-www-form-url-encoded media type <br />see <a href="http://www.faqs.org/rfcs/rfc1866.html" rel="nofollow" target="_blank">http://www.faqs.org/rfcs/rfc1866.html</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.urldecode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.urldecode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.url.php">URL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.base64-decode.php" title="base64_&#8203;decode">base64_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.base64-encode.php" title="base64_&#8203;encode">base64_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.get-headers.php" title="get_&#8203;headers">get_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.get-meta-tags.php" title="get_&#8203;meta_&#8203;tags">get_&#8203;meta_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.http-build-query.php" title="http_&#8203;build_&#8203;query">http_&#8203;build_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-url.php" title="parse_&#8203;url">parse_&#8203;url</a>
                        </li>
                                                <li class="">
                            <a href="function.rawurldecode.php" title="rawurldecode">rawurldecode</a>
                        </li>
                                                <li class="">
                            <a href="function.rawurlencode.php" title="rawurlencode">rawurlencode</a>
                        </li>
                                                <li class="current">
                            <a href="function.urldecode.php" title="urldecode">urldecode</a>
                        </li>
                                                <li class="">
                            <a href="function.urlencode.php" title="urlencode">urlencode</a>
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
